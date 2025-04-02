(function ($, Drupal) {

    $(function () {
        // 检查必需元素并提供引导
        const checkRequiredElements = () => {
            const missing = [];
            if (!document.querySelector('.myloder')) {
                missing.push('页面加载进度条 <div class="myloder"></div>');
            }
            if (!document.querySelector('.progressbox')) {
                missing.push('顶部滚动进度条 <div class="progressbox"></div>');
            }

            if (missing.length > 0) {
                const quicksideElement = document.querySelector('.quickside');
                console.warn(
                    `请在 ${quicksideElement ? '.quickside 区域' : '创建 .quickside 区域后'}添加以下无标题块:\n${missing.join('\n')}`
                );
            }
        };

        checkRequiredElements();

        // 延迟激活加载动画
        setTimeout(() => {
            $(".myloder").addClass("active");
        }, 1500);
        /* 滚动条 */
        $(".stick-poastion .zhaoping").niceScroll({
            cursorborder: "",
            cursorcolor: "#1a76d1",
            boxzoom: true
        });

        // 设置页面标题首字为属性值
        let pagetitletext = $(".page-title").text().slice(0, 1);
        $(".page-title").attr("titlevalue", pagetitletext);
        // 页面滚动进度监听
        $(window).scroll(function () {
            let scrollTop = $(window).scrollTop();
            let docHeight = document.body.offsetHeight;
            let winHeight = window.innerHeight;
            let scrollPercent = scrollTop / (docHeight - winHeight) * 100;
            let progressWidth = scrollPercent.toFixed(1) + "%";

            const progressBox = document.querySelector('.progressbox');
            if (progressBox) {
                progressBox.style.width = progressWidth;
            }
        });
        /* 关闭上传下载弹窗 */
        $(".myclose-box").click(function (e) {
            e.preventDefault();
            $(".fiexd-boxs").fadeOut();

        });
        $(".custom-zhiwei-btn").click(function (e) {
            e.preventDefault();
            $(".fiexd-boxs").fadeIn();
        });
        // 记录当前路径
        let currentPath = window.location.pathname;
        console.log(currentPath)
    });

    // 安全退出全屏
    function exitFullScreen() {
        try {
            // 检查文档是否处于活跃状态
            if (document.visibilityState === 'visible') {
                // 确保文档真的处于全屏状态
                if (document.fullscreenElement ||
                    document.webkitFullscreenElement ||
                    document.mozFullScreenElement ||
                    document.msFullscreenElement) {

                    if (document.exitFullscreen) {
                        document.exitFullscreen();
                    } else if (document.webkitExitFullscreen) {
                        document.webkitExitFullscreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.msExitFullscreen) {
                        document.msExitFullscreen();
                    }
                }
            } else {
                console.log('文档不处于活跃状态，跳过全屏退出操作');
            }
        } catch (error) {
            console.warn('退出全屏失败:', error);
        }
    }



}(jQuery, Drupal));