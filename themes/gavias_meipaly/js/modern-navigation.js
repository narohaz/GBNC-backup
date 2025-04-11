/**
 * Modern Navigation - 高级交互效果
 * 
 * 为医疗研究信息系统网站添加现代化导航交互效果
 * 主色: #163e64 深蓝色
 * 辅色: #4dbdc7 青绿色
 */

(function ($) {
    "use strict";

    $(document).ready(function () {
        // 导航滚动效果优化
        var $header = $('.modern-navigation');
        var lastScrollTop = 0;
        var navHeight = $header.outerHeight();
        var scrollThreshold = 200;
        var scrollTolerance = 30; // 为避免轻微滚动触发隐藏/显示

        function handleNavigation() {
            var currentScrollTop = $(window).scrollTop();

            // 超过阈值时应用固定样式
            if (currentScrollTop > scrollThreshold) {
                if (!$header.hasClass('nav-fixed')) {
                    $header.addClass('nav-fixed');
                    // 添加淡入动画效果
                    $header.css('transform', 'translateY(-100%)');
                    setTimeout(function () {
                        $header.css('transform', 'translateY(0)');
                    }, 50);
                }

                // 向下滚动超过容差值时隐藏
                if (currentScrollTop > lastScrollTop + scrollTolerance && currentScrollTop > navHeight + scrollThreshold) {
                    $header.addClass('nav-hidden');
                }
                // 向上滚动超过容差值时显示
                else if (lastScrollTop > currentScrollTop + scrollTolerance) {
                    $header.removeClass('nav-hidden');
                }
            } else {
                $header.removeClass('nav-fixed nav-hidden');
            }

            lastScrollTop = currentScrollTop;
        }

        // 使用requestAnimationFrame优化滚动事件
        var ticking = false;
        $(window).scroll(function () {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    handleNavigation();
                    ticking = false;
                });
                ticking = true;
            }
        });

        // 增强的菜单项hover效果，带有缓动和光标距离感应
        $('.top-level-item').on('mouseenter', function (e) {
            var $menuItem = $(this);
            var $siblings = $menuItem.siblings();

            $siblings.addClass('dimmed');
            $menuItem.addClass('hovered');

            // 光标位置感应效果 (仅在非移动设备上)
            if (window.innerWidth > 991) {
                $menuItem.on('mousemove', function (e) {
                    var menuWidth = $menuItem.width();
                    var menuHeight = $menuItem.height();
                    var offsetX = e.pageX - $menuItem.offset().left;
                    var offsetY = e.pageY - $menuItem.offset().top;

                    // 计算光标在元素内的相对位置 (-1到1之间)
                    var moveX = (offsetX / menuWidth - 0.5) * 2;
                    var moveY = (offsetY / menuHeight - 0.5) * 2;

                    // 应用微妙的倾斜效果
                    $menuItem.find('.menu-link').css({
                        'transform': 'translate(' + moveX * 3 + 'px, ' + moveY * 1 + 'px)'
                    });
                });
            }
        }).on('mouseleave', function () {
            var $menuItem = $(this);
            var $siblings = $menuItem.siblings();

            $siblings.removeClass('dimmed');
            $menuItem.removeClass('hovered');

            // 重置变换效果
            $menuItem.find('.menu-link').css({
                'transform': ''
            });
            $menuItem.off('mousemove');
        });

        // 改进的移动端菜单交互
        var $menuToggle = $('#menu-bar');
        var touchEnabled = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

        // 菜单展开/折叠优化
        $('.menu-arrow').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            var $parent = $(this).closest('.menu-item');
            var $submenu = $parent.find('> .animated-submenu, > .mega-menu-content');

            if ($parent.hasClass('menu-open')) {
                $parent.removeClass('menu-open');
                $submenu.slideUp(300);
            } else {
                // 级联关闭其他打开的菜单
                var $openMenus = $('.menu-item.menu-open');
                $openMenus.each(function () {
                    $(this).removeClass('menu-open');
                    $(this).find('> .animated-submenu, > .mega-menu-content').slideUp(200);
                });

                // 展开当前菜单
                $parent.addClass('menu-open');
                $submenu.hide().slideDown(350, function () {
                    // 高亮动画
                    $(this).find('> .menu-item').each(function (index) {
                        var $item = $(this);
                        setTimeout(function () {
                            $item.addClass('item-highlight');
                            setTimeout(function () {
                                $item.removeClass('item-highlight');
                            }, 400);
                        }, index * 50);
                    });
                });
            }
        });

        // 添加辅助功能支持与增强
        $('.menu-link').attr('role', 'menuitem');
        $('.menu-item--expanded > .menu-link').attr('aria-haspopup', 'true');
        $('.menu-item--expanded > .menu-link').attr('aria-expanded', 'false');

        $('.menu-item--expanded').on('mouseenter focusin', function () {
            $(this).find('> .menu-link').attr('aria-expanded', 'true');
        }).on('mouseleave focusout', function () {
            if (!$(this).hasClass('menu-open')) {
                $(this).find('> .menu-link').attr('aria-expanded', 'false');
            }
        });

        // 增强的键盘导航支持
        $('.menu-link').on('keydown', function (e) {
            var $currentLink = $(this);
            var $currentItem = $currentLink.parent();

            // 左右键在同级菜单项之间移动
            if (e.which === 37 || e.which === 39) { // 左右箭头
                e.preventDefault();
                var $targetItem = (e.which === 37) ? $currentItem.prev('.menu-item') : $currentItem.next('.menu-item');

                if ($targetItem.length) {
                    $targetItem.find('> .menu-link').focus();
                }
            }

            // Enter/Space键打开菜单
            if (e.which === 13 || e.which === 32) { // Enter/Space
                if ($currentItem.hasClass('menu-item--expanded')) {
                    e.preventDefault();
                    $currentLink.next('.menu-arrow').trigger('click');
                }
            }

            // 下箭头打开子菜单或移动到子菜单第一项
            if (e.which === 40) { // 下箭头
                if ($currentItem.hasClass('menu-item--expanded')) {
                    e.preventDefault();
                    var $submenu = $currentItem.find('> .animated-submenu, > .mega-menu-content');
                    var $firstSubItem = $submenu.find('> .menu-item:first-child > .menu-link');

                    if ($firstSubItem.length) {
                        if (!$currentItem.hasClass('menu-open')) {
                            $currentLink.next('.menu-arrow').trigger('click');
                            setTimeout(function () {
                                $firstSubItem.focus();
                            }, 300);
                        } else {
                            $firstSubItem.focus();
                        }
                    }
                }
            }

            // 上箭头移动到父菜单
            if (e.which === 38) { // 上箭头
                var $parentMenu = $currentLink.closest('.animated-submenu, .mega-menu-content');

                if ($parentMenu.length) {
                    e.preventDefault();
                    var $parentLink = $parentMenu.siblings('.menu-link');

                    if ($parentLink.length) {
                        $parentLink.focus();
                    }
                }
            }

            // Esc键关闭当前菜单并聚焦父菜单
            if (e.which === 27) { // Esc
                e.preventDefault();
                var $parentMenu = $currentLink.closest('.animated-submenu, .mega-menu-content');

                if ($parentMenu.length) {
                    var $parentItem = $parentMenu.parent();
                    var $parentLink = $parentItem.find('> .menu-link');

                    if ($parentItem.hasClass('menu-open')) {
                        $parentItem.removeClass('menu-open');
                        $parentMenu.slideUp(200);
                        setTimeout(function () {
                            $parentLink.focus();
                        }, 200);
                    }
                }
            }
        });

        // 添加页面加载动画
        setTimeout(function () {
            $('.modern-navigation').addClass('nav-loaded');
        }, 100);

        // 响应式调整
        $(window).on('resize', function () {
            if (window.innerWidth > 991) {
                $('.animated-submenu, .mega-menu-content').removeAttr('style');
                $('.menu-item').removeClass('menu-open');
            }
        });

        // 滚动到锚点平滑效果
        $('.menu-link[href*="#"]:not([href="#"])').on('click', function () {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 800);
                    return false;
                }
            }
        });
    });

})(jQuery); 