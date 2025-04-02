// (function ($, Drupal) {
//     $(function () {
//         /*团队弹窗*/
//         let team1 = $(".block-views-blocktuanduichengyuan-block-3 .wapper-team-box .view-content-wrap");
//         let team1index = null;
//         $("#team-zhuanj .view-content-wrap .team-view-box").click(function (e) {
//             e.preventDefault();
//             team1index = $(this).index()
//             $(team1).fadeIn();
//             $(`.block-views-blocktuanduichengyuan-block-3 .wapper-team-box .view-content-wrap .team-view-box:eq(${team1index})`).fadeIn();
//         });
//         $(".block-views-blocktuanduichengyuan-block-3 .wapper-team-box .view-content-wrap .team-view-box .myclose-box").click(function (e) {
//             e.preventDefault();
//             $(team1).fadeOut();
//             $(`.block-views-blocktuanduichengyuan-block-3 .wapper-team-box .view-content-wrap .team-view-box:eq(${team1index})`).fadeOut();
//         });

//         let team2 = $("#block-views-block-tuanduichengyuan-block-4 .wapper-team-box .view-content-wrap");
//         let team2index = null;
//         $("#team-services .view-content-wrap .team-view-box").click(function (e) {
//             e.preventDefault();
//             team2index = $(this).index()
//             $(team2).fadeIn();
//             $(`#block-views-block-tuanduichengyuan-block-4 .wapper-team-box .view-content-wrap .team-view-box:eq(${team2index})`).fadeIn();
//         });
//         $("#block-views-block-tuanduichengyuan-block-4 .wapper-team-box .view-content-wrap .team-view-box .myclose-box").click(function (e) {
//             e.preventDefault();
//             $(team2).fadeOut();
//             $(`#block-views-block-tuanduichengyuan-block-4 .wapper-team-box .view-content-wrap .team-view-box:eq(${team2index})`).fadeOut();
//         });
//         /* 加载完毕后先判断是否是从其他页面跳转过来的 */
//         let hashvalue = location.hash;
//         if (hashvalue) {
//             $('html,body').animate({
//                 scrollTop: $(hashvalue).offset().top
//             }, 1200);
//             if (window.history.replaceState) {
//                 window.history.replaceState('', '/', window.location.pathname)
//             } else {
//                 window.location.hash = '';
//             }
//         }
//         /* ---------------------------------------------- /*
//      * SMOOTH SCROLL
//     /* ---------------------------------------------- */

//         let scollli = $('.sscroll')
//         $.each(scollli, function (indexInArray, valueOfElement) {
//             $(valueOfElement).on('click', function (e) {
//                 e.preventDefault();
//                 $('html,body').animate({
//                     scrollTop: $(`#homescrollbox${indexInArray}`).offset().top
//                 }, 1200);
//             });
//         });


//         /* 判断回到底部的隐藏时机 */
//         let scrolltop0 = $("#homescrollbox0").offset().top;
//         if ($(window).scrollTop() > scrolltop0) {
//             $(".custom-top").addClass("active");
//         } else {
//             $(".custom-top").removeClass("active");
//         }

//         $(window).scroll(function (e) {
//             if ($(this).scrollTop() > scrolltop0) {
//                 $(".custom-top").addClass("active");
//             } else {
//                 $(".custom-top").removeClass("active");
//             };
//             e.preventDefault();

//         });


//         // 定义 debounce 函数
//         let owl = $(".frontpage .owl-carousel");
//         function debounce(func, wait, immediate) {
//             var timeout;
//             return function () {
//                 var context = this, args = arguments;
//                 var later = function () {
//                     timeout = null;
//                     if (!immediate) func.apply(context, args);
//                 };
//                 var callNow = immediate && !timeout;
//                 clearTimeout(timeout);
//                 timeout = setTimeout(later, wait);
//                 if (callNow) func.apply(context, args);
//             };
//         };

//         // 将要执行的操作定义在一个函数中
//         let debouncedAction = debounce(function (direction) {
//             if (direction > 0) {
//                 owl.trigger("prev.owl");
//             } else {
//                 owl.trigger("next.owl");
//             }
//         }, 200);

//         // 监听 wheel 事件
//         owl.on("wheel", function (e) {
//             // 阻止默认的页面滚动行为
//             e.preventDefault();
//             e.stopPropagation();

//             // 通过 debounce 函数来控制事件的触发频率
//             debouncedAction(e.originalEvent.wheelDelta);
//         });
//         /* ---------------------------------------------- /*
//      * Back To Top
//     /* ---------------------------------------------- */
//         $.fn.backToTop = function () {
//             let selectz = $(this);
//             $(selectz).on("click", function (e) {
//                 $("html,body").animate({ scrollTop: 0 }, 1200);
//                 return false;
//             });
//         };
//         /* jQuery("#backtotop").backToTop(); */
//         $(".custom-top").backToTop();

//         /* 添加动画类 */
//         $(".wapper-team-box .view-content-wrap").addClass(["fadeInRight", "animated"]);
//         /*x向下按钮*/
//         $(".gg-chevron-double-down").click(function (e) {
//             $("html,body").animate({ scrollTop: 800 }, 1200);
//             return false;
//         });
//     });
// }(jQuery, Drupal));

(function ($, Drupal) {
    $(function () {
        /*团队弹窗*/
        let team1 = $(".block-views-blocktuanduichengyuan-block-3 .wapper-team-box .view-content-wrap");
        let team1index = null;
        $("#team-zhuanj .view-content-wrap .team-view-box").click(function (e) {
            e.preventDefault();
            team1index = $(this).index()
            $(team1).fadeIn();
            $(`.block-views-blocktuanduichengyuan-block-3 .wapper-team-box .view-content-wrap .team-view-box:eq(${team1index})`).fadeIn();
        });
        $(".block-views-blocktuanduichengyuan-block-3 .wapper-team-box .view-content-wrap .team-view-box .myclose-box").click(function (e) {
            e.preventDefault();
            $(team1).fadeOut();
            $(`.block-views-blocktuanduichengyuan-block-3 .wapper-team-box .view-content-wrap .team-view-box:eq(${team1index})`).fadeOut();
        });

        let team2 = $("#block-views-block-tuanduichengyuan-block-4 .wapper-team-box .view-content-wrap");
        let team2index = null;
        $("#team-services .view-content-wrap .team-view-box").click(function (e) {
            e.preventDefault();
            team2index = $(this).index()
            $(team2).fadeIn();
            $(`#block-views-block-tuanduichengyuan-block-4 .wapper-team-box .view-content-wrap .team-view-box:eq(${team2index})`).fadeIn();
        });
        $("#block-views-block-tuanduichengyuan-block-4 .wapper-team-box .view-content-wrap .team-view-box .myclose-box").click(function (e) {
            e.preventDefault();
            $(team2).fadeOut();
            $(`#block-views-block-tuanduichengyuan-block-4 .wapper-team-box .view-content-wrap .team-view-box:eq(${team2index})`).fadeOut();
        });
        /* 加载完毕后先判断是否是从其他页面跳转过来的 */
        let hashvalue = location.hash;
        if (hashvalue) {
            $('html,body').animate({
                scrollTop: $(hashvalue).offset().top
            }, 1200);
            if (window.history.replaceState) {
                window.history.replaceState('', '/', window.location.pathname)
            } else {
                window.location.hash = '';
            }
        }
        /* ---------------------------------------------- /*
     * SMOOTH SCROLL
    /* ---------------------------------------------- */

        let scollli = $('.sscroll')
        $.each(scollli, function (indexInArray, valueOfElement) {
            $(valueOfElement).on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: $(`#homescrollbox${indexInArray}`).offset().top
                }, 1200);
            });
        });


        /* 判断回到底部的隐藏时机 */
        let scrolltop0 = $("#homescrollbox0").offset().top;
        if ($(window).scrollTop() > scrolltop0) {
            $(".custom-top").addClass("active");
        } else {
            $(".custom-top").removeClass("active");
        }

        $(window).scroll(function (e) {
            if ($(this).scrollTop() > scrolltop0) {
                $(".custom-top").addClass("active");
            } else {
                $(".custom-top").removeClass("active");
            };
            e.preventDefault();

        });


        // 定义 debounce 函数
        let owl = $(".frontpage .owl-carousel");
        function debounce(func, wait, immediate) {
            var timeout;
            return function () {
                var context = this, args = arguments;
                var later = function () {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                var callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        };

        // 将要执行的操作定义在一个函数中
        let debouncedAction = debounce(function (direction) {
            if (direction > 0) {
                owl.trigger("prev.owl");
            } else {
                owl.trigger("next.owl");
            }
        }, 200);

        // 监听 wheel 事件
        owl.on("wheel", function (e) {
            // 阻止默认的页面滚动行为
            e.preventDefault();
            e.stopPropagation();

            // 通过 debounce 函数来控制事件的触发频率
            debouncedAction(e.originalEvent.wheelDelta);
        });
        /* ---------------------------------------------- /*
     * Back To Top
    /* ---------------------------------------------- */
        $.fn.backToTop = function () {
            let selectz = $(this);
            $(selectz).on("click", function (e) {
                $("html,body").animate({ scrollTop: 0 }, 1200);
                return false;
            });
        };
        /* jQuery("#backtotop").backToTop(); */
        $(".custom-top").backToTop();

        /* 添加动画类 */
        $(".wapper-team-box .view-content-wrap").addClass(["fadeInRight", "animated"]);
        /*x向下按钮*/
        $(".gg-chevron-double-down").click(function (e) {
            $("html,body").animate({ scrollTop: 800 }, 1200);
            return false;
        });
    });

}(jQuery, Drupal));