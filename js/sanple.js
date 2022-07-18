(function () {
    var app = {



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
    };

    jQuery(document).ready(function () {

        app.initAreas();
        app.fcMapHover();

    });

    jQuery(window).on("scroll", function () {
    });

    jQuery(window).on("load", function () {
    });

    jQuery(window).on("resize", function () {
        app.initAreas();
    });
})();
