//homepage 走马灯视频渲染方式替换为h5原生而不是 Revolution Slider 后者会导致视频呗蒙上一层网格 放大后会出现灰色的小点
//homepage 走马灯视频渲染方式替换为h5原生而不是 Revolution Slider 后者会导致视频被蒙上一层网格 放大后会出现灰色的小点
(function($) {
  // 创建全局对象跟踪已处理的视频
  window.revSliderVideoFix = {
    processedSlides: {},
    originalImageLoad: null
  };
  
  // 修复 Revolution Slider 图片加载问题，避免导航失效
  function fixRevSliderImageLoading() {
    if (typeof window._R !== 'undefined' && window._R.getLoadObj) {
      // 保存原始函数引用
      if (!window.revSliderVideoFix.originalImageLoad) {
        window.revSliderVideoFix.originalImageLoad = window._R.loadImages;
      }
      
      // 修改 Revolution Slider 的图片加载处理
      window._R.loadImages = function(e, a, n, r) {
        e.find("img,.defaultimg, .tp-svg-layer").each(function() {
          var $this = $(this);
          var src = $this.data("lazyload") !== undefined && "undefined" !== $this.data("lazyload") ? 
                    $this.data("lazyload") : 
                    $this.data("svg_src") != undefined ? $this.data("svg_src") : $this.attr("src");
          var type = $this.data("svg_src") != undefined ? "svg" : "img";
          
          // 确保图片已完全加载或标记为加载完成
          $this.data("loaded", true);
          
          if (src && !a.loadqueue.some(function(item) { return item.src === src; })) {
            var loadObj = {
              src: src,
              width: $this.width || 100,
              height: $this.height || 100,
              starttoload: jQuery.now(),
              type: type,
              prio: n,
              progress: "loaded", // 直接标记为已加载
              error: false
            };
            
            a.loadqueue.push(loadObj);
          }
        });
        
        // 仍然调用原始函数，保证其他处理正常进行
        if (window.revSliderVideoFix.originalImageLoad) {
          window.revSliderVideoFix.originalImageLoad(e, a, n, r);
        }
      };
    }
  }
  
  // 主函数：增强 Revolution Slider 视频
  function enhanceRevolutionSliderVideos() {
    // 先修复图片加载问题
    fixRevSliderImageLoading();
    
    // 处理所有未处理的幻灯片
    $('.tp-revslider-slidesli').each(function() {
      var slide = $(this);
      var slideIndex = slide.data('index');
      
      // 如果幻灯片已处理，则跳过
      if (window.revSliderVideoFix.processedSlides[slideIndex]) {
        return;
      }
      
      // 检查该幻灯片是否包含视频
      var videoLayer = slide.find('.rs-background-video-layer');
      if (videoLayer.length === 0) {
        // 标记无视频的幻灯片为已处理
        window.revSliderVideoFix.processedSlides[slideIndex] = true;
        return;
      }
      
      // 找到原始视频元素
      var originalVideo = slide.find('.html5vid.fullcoveredvideo video');
      if (originalVideo.length === 0) {
        window.revSliderVideoFix.processedSlides[slideIndex] = true;
        return;
      }
      
      // 获取视频源
      var videoSource = originalVideo.find('source').attr('src');
      if (!videoSource) {
        window.revSliderVideoFix.processedSlides[slideIndex] = true;
        return;
      }
      
      console.log('处理视频幻灯片:', slideIndex, videoSource);
      
      // 获取原始视频的样式
      var videoWidth = originalVideo.css('width');
      var videoHeight = originalVideo.css('height');
      var videoLeft = originalVideo.css('left');
      var videoTop = originalVideo.css('top');
      var videoContainer = originalVideo.parent();
      
      // 创建增强版视频元素
      var enhancedVideoId = 'enhanced-video-' + slideIndex.replace('rs-', '');
      var enhancedVideo = $('<video id="' + enhancedVideoId + '" muted playsinline autoplay style="position:absolute; object-fit:cover; background-size:cover; image-rendering:high-quality; image-rendering:-webkit-optimize-contrast;">' +
                          '<source src="' + videoSource + '" type="video/mp4">' +
                        '</video>');
      
      // 应用原始视频的样式
      enhancedVideo.css({
        'width': videoWidth,
        'height': videoHeight,
        'left': videoLeft,
        'top': videoTop,
        'visibility': 'inherit',
        'opacity': '1',
        'display': 'block',
        'z-index': '30'
      });
      
      // 隐藏原始视频但保留容器
      originalVideo.css('opacity', '0');
      videoContainer.append(enhancedVideo);
      
      // 复制原始视频属性
      var shouldLoop = videoLayer.data('videoloop') === 'loopandnoslidestop' || videoLayer.data('videoloop') === true;
      enhancedVideo.prop('loop', shouldLoop);
      
      // 确保原始视频的事件处理程序仍然能工作
      videoLayer.data('videostarted', 1);
      videoLayer.data('nextslidecalled', 0);
      
      // 防止 Revolution Slider 重新加载视频
      if (typeof videoLayer.data === 'function') {
        var originalDataMethod = videoLayer.data;
        videoLayer.data = function(key, value) {
          if (arguments.length === 2 && key === 'videostartednow') {
            // 阻止重置视频播放
            return this;
          }
          return originalDataMethod.apply(this, arguments);
        };
      }
      
      // 加载视频
      enhancedVideo[0].load();
      
      // 处理视频事件
      enhancedVideo.on('loadedmetadata', function() {
        console.log('视频元数据已加载:', enhancedVideoId, '时长:', this.duration);
        
        // 确保所有图片标记为已加载，避免导航问题
        slide.find('img,.defaultimg, .tp-svg-layer').data('loaded', true);
        
        // 修复第二次播放时提前结束的问题
        $(this).on('timeupdate', function() {
          // 如果接近结束但还没结束，检查是否需要循环
          if (this.currentTime > this.duration - 0.5 && !this.paused && !this.ended) {
            if (shouldLoop) {
              // 确保循环视频不会触发结束事件
              this.currentTime = 0;
            }
          }
        });
      });
      
      // 处理视频结束逻辑
      if (videoLayer.data('nextslideatend') === true) {
        enhancedVideo.on('ended', function() {
          console.log('视频结束，切换到下一张幻灯片:', enhancedVideoId);
          $('.tp-rightarrow.tparrows').click();
        });
      }
      
      // 同步幻灯片状态和视频状态的函数
      function syncVideoWithSlideState() {
        if (slide.hasClass('active-revslide')) {
          if (enhancedVideo[0].paused) {
            enhancedVideo[0].play().catch(function(e) {
              console.log('播放失败，稍后重试:', e);
              setTimeout(function() { enhancedVideo[0].play(); }, 300);
            });
          }
        } else {
          if (!enhancedVideo[0].paused) {
            enhancedVideo[0].pause();
            enhancedVideo[0].currentTime = 0;
          }
        }
      }
      
      // 修复幻灯片导航问题
      function fixNavigation() {
        $('.tp-leftarrow.tparrows, .tp-rightarrow.tparrows').off('click.videofix').on('click.videofix', function() {
          // 确保所有幻灯片图片被标记为已加载
          $('.tp-revslider-slidesli').each(function() {
            $(this).find('img,.defaultimg, .tp-svg-layer').data('loaded', true);
          });
          
          // 延迟同步视频状态，确保在 DOM 更新后执行
          setTimeout(function() {
            syncVideoWithSlideState();
          }, 100);
        });
      }
      
      // 初始同步
      syncVideoWithSlideState();
      fixNavigation();
      
      // 监听幻灯片变化
      $(document).on('revolution.slide.onbeforeswap revolution.slide.onafterswap', function() {
        setTimeout(syncVideoWithSlideState, 100);
      });
      
      // 标记幻灯片为已处理
      window.revSliderVideoFix.processedSlides[slideIndex] = true;
    });
  }
  
  // 初始化函数
  function initVideoEnhancement() {
    if ($('.rev_slider').length > 0 && $('.tp-revslider-slidesli').length > 0) {
      enhanceRevolutionSliderVideos();
      
      // 确保导航按钮可用
      setTimeout(function() {
        $('.tp-leftarrow.tparrows, .tp-rightarrow.tparrows').css({
          'visibility': 'visible',
          'opacity': '1'
        });
      }, 1500);
    } else {
      setTimeout(initVideoEnhancement, 500);
    }
  }
  
  // 延迟初始化，确保页面完全加载
  $(document).ready(function() {
    setTimeout(initVideoEnhancement, 1000);
  });
})(jQuery);