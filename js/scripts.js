(function () {
    var app = {
        initAos: function () {
            setTimeout(function () {
                AOS.init();
            }, 1000);
        },

        initNavigation: function () {
            var $nav = jQuery("#nav, #nav2");
            if ($nav.length > 0) $nav.navTabDoubleTap();
        },

        initDetectScroll: function () {
            if (jQuery(window).width() > 991 && jQuery(window).scrollTop() > 56) {
                jQuery("header.header").addClass("show-fixed");
            } else {
                jQuery("header.header").removeClass("show-fixed");
            }
        },

        initSlideshow: function () {
            //code here
            $('.message-img').click(() => {
                $('.message-content').addClass('active');
            });
            $('.chat-close').click(() => {
                $('.message-content').removeClass('active');
            });
        },

        initSelling: function () {
            //code here
        },

        initAreas: function () {
            //code here
            /* Put featured communities code here */
            var map = jQuery(".map-inner");
            var mapOrigWidth = 1600;
            var mapOrigHeight = 960;
            var container = jQuery(".map-wrap");
            var containerWidth = container.width();
            var scale = containerWidth / mapOrigWidth;
            scale = scale > 1 ? scale : scale;
            map.css({
                transform: 'scale(' + scale + ')',
                transformOrigin: '0 0'
            });
            container.css({
                height: (mapOrigHeight * scale)
            });

            console.log('reszed');
        },

        fcMapHover: function () {
            jQuery('.map-inner area').hover(
                function () {
                    var currentID = jQuery(this).attr('data-area-id');
                    var target = jQuery('.map-hover-item[data-area-id="' + currentID + '"], .map-details > div[data-area-id="' + currentID + '"], .areas-item > a[data-area-id="' + currentID + '"]');

                    target.addClass('active');
                    console.log(target);
                    console.log(currentID);
                },
                function () {
                    jQuery('.map-hover-item, .map-details > div, .areas-item > a').removeClass('active');
                }
            );

            jQuery('.areas-item a').hover(
                function () {
                    var currentID = jQuery(this).attr('data-area-id');
                    var target = jQuery('.map-hover-item[data-area-id="' + currentID + '"], .map-details > div[data-area-id="' + currentID + '"], .areas-item > a[data-area-id="' + currentID + '"]');

                    target.addClass('active');
                    console.log(target);
                    console.log(currentID);
                },
                function () {
                    jQuery('.map-hover-item, .map-details > div, .areas-item > a').removeClass('active');
                }
            );
        },

        initQuickSearch: function () {
            //code here
        },

        initWelcome: function () {
            //code here
        },

        initPerformance: function () {
            //code here

            var performanceEl = $(".hp-performance");
            var speed = 0;
            performanceEl.elementPeek({
                onViewportIn: function (object) {
                    if (!performanceEl.hasClass("done-calculation")) {
                        object.addClass("done-calculation");
                        performanceEl.find(".count").each(function (index, value) {
                            speed = 2500;
                            var _this = $(this),
                                value = _this.text();
                            _this.animateNumber({ number: value }, speed);
                        });
                    }
                },
                peekAmountToTrigger: 0.1,
            });
        },

        initTeam: function () {
            //code here

            var sectionSlick = ".team-slick";
            $(sectionSlick).slick({
                slidesToShow: 2,
                slideToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 7000,
                speed: 1000,
                arrows: true,
                prevArrow: ".hp-team .prev",
                nextArrow: ".hp-team .next",
                rows: 1,
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 1 } },
                    { breakpoint: 768, settings: { slidesToShow: 1 } },
                ],
            });
            var isSliding = false;
            jQuery(sectionSlick).on("beforeChange", function () {
                isSliding = true;
            });
            jQuery(sectionSlick).on("afterChange", function () {
                isSliding = false;
            });
            jQuery(".hp-team img").click(function (e) {
                if (isSliding) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                    return;
                }
            });
        },

        initCta: function () {
            //code here
        },

        initProperties: function () {
            //code here

            var sectionSlick = ".properties-slick";
            $(sectionSlick).slick({
                slidesToShow: 3,
                slideToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 7000,
                speed: 1000,
                arrows: false,
                rows: 2,
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 2 } },
                    { breakpoint: 768, settings: { slidesToShow: 1 } },
                ],
            });
            var isSliding = false;
            jQuery(sectionSlick).on("beforeChange", function () {
                isSliding = true;
            });
            jQuery(sectionSlick).on("afterChange", function () {
                isSliding = false;
            });
            jQuery(".hp-properties img").click(function (e) {
                if (isSliding) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                    return;
                }
            });
        },

        initApp: function () {
            //code here
        },

        initSocial: function () {
            //code here
        },

        initContact: function () {
            //code here
        },
    };

    jQuery(document).ready(function () {
        app.initAos();
        app.initNavigation();


        jQuery("#scroll-down").sideNavigation();

        app.initSlideshow();

        app.initSelling();

        app.initAreas();
        app.fcMapHover();

        app.initQuickSearch();

        app.initWelcome();

        app.initPerformance();

        app.initTeam();

        app.initCta();

        app.initProperties();

        app.initApp();

        app.initSocial();

        app.initContact();

    });

    jQuery(window).on("scroll", function () {
        app.initDetectScroll();
    });

    jQuery(window).on("load", function () {
        setTimeout(function () {
            jQuery("a.introPopupTrigger").trigger("click");
            jQuery(".aios-popup-body").addClass("intro-popup-body");
        }, 1000);
    });

    jQuery(window).on("resize", function () {
        app.initAreas();
    });
})();
