function printdiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}

(function($) {

    lightbox.option({
        'showImageNumberLabel': false,
        'positionFromTop': 80,
    });

    function printdiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

    function parallaxScroll() {
        var scrolledY = $(window).scrollTop();
        var scrollBottom = $(window).scrollTop() + $(window).height();

        $('.feature-holster').css('marginTop', '-' + ((scrolledY * 0.2)) + 'px');
        $('.full-bg').css('webkitTransform', 'translate3d(0px, -' + (scrolledY * 0.4) + "px" + ',0px)');
        $('.bg-img').css('webkitTransform', 'translate3d(0px,' + (scrolledY * 0.06) + "px" + ',0px)');
        $('.banner').css('webkitTransform', 'translate3d(0px,' + (scrolledY * 0.4) + "px" + ',0px)');

        if ($('.floating-hello').hasClass('floating-hello-gofaster')) {
            $('.floating-hello').css('webkitTransform', 'translate3d(0px,' + (scrolledY * 0.60) + "px" + ',0px)');
        } else {
            $('.floating-hello').css('webkitTransform', 'translate3d(0px,' + (scrolledY * 0.06) + "px" + ',0px)');
        }
    }


    function thirty_pc() {
        var height = $(window).height();
        var thirtypc = (90 * height) / 100;
        var fully = (90 * height) / 100;
        var sixty = (100 * height) / 100;
        var seventypcd = (85 * height) / 100;
        var seventypc = (90 * height) / 100;
        var seventyfive = (75 * height) / 100;
        var forty = (15 * height) / 100;
        thirtypc = parseInt(thirtypc) + 'px';

        $(".intro").css('height', thirtypc);
        $(".full-bg").css('height', fully);
        $(".interior").css('height', sixty);
        $(".home-feature").css('height', thirtypc);
        $(".gettit").css('height', fully);
        $(".home .feature-spacer").css('height', fully);
        $("#supersized").css('height', fully);
        $(".singleimage").css('height', fully);
        $(".intro-holster").css('height', fully);
        $(".homevideo").css('height', fully);
        $(".carousello").css('height', sixty);
        $(".totality").css('height', sixty);
        $(".slidban").css('height', sixty);
        $(".slidbantop").css('height', sixty);
        $(".banner--full").css('height', sixty);
        $(".banner--seventyfive").css('height', seventyfive);
    }


    function postOwl_autoHeight() {
        var po_imgBox = $('.postowl-imgbox');
        var po_imgBox_a = $('.postowl-imgbox a');
        var po_imgBox_count = po_imgBox.length;

        var po_captionBox = $('.postowl-captionbox');

        po_imgBox.css('height', '');
        po_imgBox_a.css('height', 'auto');
        setTimeout(function() {
            po_imgBox_a.css('height', '');
        }, 100);

        if ($(window).width() > 767) {

            for (var i = 0; i < po_imgBox_count; i++) {
                var po_imgBox_thisHeight = $(po_imgBox[i]).height();
                var po_captionBox_thisHeight = $(po_captionBox[i]).find('.table-child').height();

                // check if imgbox height is lesser than captionbox height
                // if yes, add css height to imgbox to match height of captionbox
                if (po_imgBox_thisHeight + 2 < po_captionBox_thisHeight) {
                    $(po_imgBox[i]).css('height', po_captionBox_thisHeight + 40);
                }
            }

        }

    }


    // EMAIL POPUP FUNCTIONS

    // use this to help open email popup
    // increases when user is in a blog single
    function r_cookieEmail_checkPost() {
        var userCheckPost = Cookies.get('r_userCheckPost');
        if (typeof userCheckPost == 'undefined') {
            Cookies.set('r_userCheckPost', 1);
        } else {
            userCheckPost = parseInt(userCheckPost) + 1;
            Cookies.set('r_userCheckPost', userCheckPost);
        }
    }


    // check if email popup got closed by user
    function r_cookieEmail_checkIfClosed() {

        var checkIfClosed = Cookies.get('r_checkIfClosed');

        if (typeof checkIfClosed == 'undefined') {
            Cookies.set('r_checkIfClosed', 'false');
            return false;
        } else if (Cookies.get('r_checkIfClosed') == 'false') {
            return false;
        } else if (Cookies.get('r_checkIfClosed') == 'true') {
            // if true then user closed the email popup, so do nothing
            return true;
        }

    }


    // If a returned user closes a tab, open popup
    function r_cookieEmail_returnVisitor(boolonly) {

        var isReturnVisitor = Cookies.get('r_isReturnVisitor');

        if (typeof isReturnVisitor == 'undefined') {
            if (boolonly) {
                return true;
            } else {
                Cookies.set('r_isReturnVisitor', '1');
                return true;
            }
        } else if (parseInt(Cookies.get('r_isReturnVisitor'))) {
            if (boolonly) {
                return true;
            } else {
                Cookies.set('r_isReturnVisitor', parseInt(Cookies.get('r_isReturnVisitor')) + 1);
                return true;
            }
        } else if (Cookies.get('r_isReturnVisitor') == 'false') {
            return false;
        }

    }

    // email popup function
    function r_cookieEmail_PopUp(timeOut) {

        if (
            r_cookieEmail_returnVisitor(true) ||
            !r_cookieEmail_checkIfClosed()
        ) {

            setTimeout(function() {
                $('.email-popup').addClass('active');

                $('.rmail-closebtn').click(function(e) {
                    e.preventDefault();

                    $('.email-popup').removeClass('active');

                    // the user clicked this close button,
                    // don't open email popup after 15 days!
                    Cookies.set('r_checkIfClosed', 'true');

                    if (r_cookieEmail_returnVisitor(false)) {
                        Cookies.set('r_isReturnVisitor', 'false');
                    }

                });
            }, timeOut);

        }
    }


    // init cookie email
    function r_cookieEmail() {

        var userCheckPost = Cookies.get('r_userCheckPost');

        // check if user is in a blog single
        if ($('body').hasClass('single-post')) {

            if (typeof userCheckPost == 'undefined') {
                r_cookieEmail_checkPost();
            } else if (userCheckPost >= 2) {
                // do nothing
            } else {
                r_cookieEmail_checkPost();
            }

            userCheckPost = Cookies.get('r_userCheckPost');

            if (typeof userCheckPost == 'undefined') {
                // do nothing
            } else if (parseInt(userCheckPost) >= 2) {
                if (r_cookieEmail_checkIfClosed()) {} else {
                    r_cookieEmail_PopUp(3000);
                }
            }


            // user exits the tab
            $(document).on('mouseleave', function() {
                if (r_cookieEmail_returnVisitor(false) == 2) {
                    r_cookieEmail_PopUp(0);
                }
            });


            // user pass through the footer rosewood logo
            $('.rosewoodlogo').one('inview', function(event, visible) {
                if (visible == true) {
                    r_cookieEmail_PopUp(1000);
                }
            });

        }

    }

    // Point of interest map
    function about_map(lat, long, title, description, link) {

        var styles = [{ "featureType": "poi", "elementType": "all", "stylers": [{ "hue": "#000000" }, { "saturation": -100 }, { "lightness": -100 }, { "visibility": "off" }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "hue": "#000000" }, { "saturation": -100 }, { "lightness": -100 }, { "visibility": "off" }] }, { "featureType": "administrative", "elementType": "all", "stylers": [{ "hue": "#000000" }, { "saturation": 0 }, { "lightness": -100 }, { "visibility": "off" }] }, { "featureType": "road", "elementType": "labels", "stylers": [{ "hue": "#ffffff" }, { "saturation": -100 }, { "lightness": 100 }, { "visibility": "off" }] }, { "featureType": "water", "elementType": "labels", "stylers": [{ "hue": "#000000" }, { "saturation": -100 }, { "lightness": -100 }, { "visibility": "off" }] }, { "featureType": "road.local", "elementType": "all", "stylers": [{ "hue": "#ffffff" }, { "saturation": -100 }, { "lightness": 100 }, { "visibility": "on" }] }, { "featureType": "water", "elementType": "geometry", "stylers": [{ "hue": "#ffffff" }, { "saturation": -100 }, { "lightness": 100 }, { "visibility": "on" }] }, { "featureType": "transit", "elementType": "labels", "stylers": [{ "hue": "#000000" }, { "saturation": 0 }, { "lightness": -100 }, { "visibility": "off" }] }, { "featureType": "landscape", "elementType": "labels", "stylers": [{ "hue": "#000000" }, { "saturation": -100 }, { "lightness": -100 }, { "visibility": "off" }] }, { "featureType": "road", "elementType": "geometry", "stylers": [{ "hue": "#bbbbbb" }, { "saturation": -100 }, { "lightness": 26 }, { "visibility": "on" }] }, { "featureType": "landscape", "elementType": "geometry", "stylers": [{ "hue": "#bbbbbb" }, { "saturation": -100 }, { "lightness": -3 }, { "visibility": "on" }] }];

        var image = $('.about-map__pin').data('mappin');
        var map;
        map = new google.maps.Map(document.getElementById('aboutMap'), {
            center: { lat: lat, lng: long },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: styles,
            fullscreenControl: false,
            zoom: 8
        });

        var beachMarker = new google.maps.Marker({
            position: new google.maps.LatLng(lat, long),
            map: map,
            icon: image
        });

        // $.each($('.article-loc .article-loc__item'), function( key, value ) {  
        if (link) {
            description = '<a href="' + link + '">' + description + '</a>';
        }

        var contentString = '<div class="mapper-markerbox">' +
            '<h3 class="mapper-markertitle">' + title + '</h3>' +
            '<span class="mapper-markerlabel">' + description + '</span>' +
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        // var beachMarker = new google.maps.Marker({
        // 	position: new google.maps.LatLng($(this).data('lat'), $(this).data('long')),
        // 	map: map,
        // 	icon: $(this).data('mappin')
        // });

        beachMarker.addListener('click', function() {
            infowindow.open(map, beachMarker);
        });

        infowindow.open(map, beachMarker);
        // });  

    }

    $(window).on('load', function() {

        var about_title = $('.about-map__pin').data('title');
        var about_description = $('.about-map__pin').data('description');
        var about_link = $('.about-map__pin').data('link');
        var about_map_lat = parseFloat($('.about-map__pin').data('lat'));
        var about_map_long = parseFloat($('.about-map__pin').data('long'));

        if (typeof about_map_lat != 'undefined' && typeof about_map_long != 'undefined' && $('#aboutMap').length) {
            about_map(about_map_lat, about_map_long, about_title, about_description, about_link);
        }

        $("#copystackers-full, #stackers-full").stick_in_parent();
        $("#copystackers, #stackers").stick_in_parent();

        postOwl_autoHeight();

        $('.topslideGallery').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<a href="#" id="previousSlide"><i class="ion-ios-arrow-left"></i></a>',
            nextArrow: '<a href="#" id="nextSlide"><i class="ion-ios-arrow-right"></i></a>',
            appendArrows: $('.arrowslider'),
        });

        $('.topslide').slick({
            appendArrows: $('.arrowslider'),
            appendDots: $('.slideSelectors'),
            prevArrow: '<a href="#" id="previousSlide"><i class="ion-ios-arrow-left"></i></a>',
            nextArrow: '<a href="#" id="nextSlide"><i class="ion-ios-arrow-right"></i></a>',
            slidesToShow: 3,
            swipe: true,
            dots: true,
            variableWidth: true,
        });

        $(".touchcarousel").touchCarousel({
            itemsPerPage: 1,
            autoplay: true,
            scrollbar: true,
            scrollbarAutoHide: false,
            scrollbarTheme: "dark",
            pagingNav: false,
            itemFallbackWidth: 500,
            snapToItems: false,
            scrollToLast: false,
            useWebkit3d: true,
            loopItems: true
        });

    });

    function slideChange(args) {

        $('.slideSelectors .item').removeClass('selected');
        $('.slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');

    }

    function slideComplete(args) {

        if (!args.slideChanged) return false;

        $(args.sliderObject).find('.text1, .text2').attr('style', '');

        $(args.currentSlideObject).find('.text1').animate({
            left: '30px',
            opacity: '0.8'
        }, 700, 'easeOutQuint');

        $(args.currentSlideObject).find('.text2').delay(200).animate({
            left: '30px',
            opacity: '0.8'
        }, 600, 'easeOutQuint');

    }

    function sliderLoaded(args) {

        $(args.sliderObject).find('.text1, .text2').attr('style', '');

        $(args.currentSlideObject).find('.text1').animate({
            left: '30px',
            opacity: '0.8'
        }, 700, 'easeOutQuint');

        $(args.currentSlideObject).find('.text2').delay(200).animate({
            left: '30px',
            opacity: '0.8'
        }, 600, 'easeOutQuint');

        slideChange(args);

    }

    // check .email-popup exists
    if ($('.email-popup').length > 0) {
        r_cookieEmail();
    }


    $(".hamburger a").click(function(e) {
        e.preventDefault();
        $("#wrapper").addClass("opened");
        $(".rightnav").addClass("rightready");
        $(".closer").addClass("open-left");

        // secondrightnav

        $(".secondrightnav").addClass("secondrightready");
    });

    $(".closer, .royale").click(function(e) {
        e.preventDefault();
        $("#wrapper").removeClass("opened");
        $(".rightnav").removeClass("rightready");
        $('body').removeClass('opennav');
        $(this).removeClass("open-left");

        // secondrightnav reset all

        $(".secondrightnav").removeClass("secondrightready");
        $(".secondrightnav").removeClass("open");
        $('.ibox').removeClass('active');
        $('.ibox i').removeClass('fa-minus');
        $('.ibox i').removeClass('active');
        $('.srnlist ul').fadeOut(500);
        $('.srnlist ul').removeClass('active');
    });

    $('.rightnav .signbox-sign').click(function() {

        if ($(this).hasClass('active')) {

            $('.rightnav .signbox-sign').removeClass('active');
            $('.rightnav .sub-menu').slideUp();

        } else {

            $('.rightnav .signbox-sign').removeClass('active');
            $('.rightnav .sub-menu').slideUp();

            var get_subMenu = $(this).parent().parent().parent().find('.sub-menu');
            $(this).addClass('active');
            get_subMenu.slideDown();
        }
    });

    $(".chosen-select").chosen();

    var offset_mobile = -61;

    $('.smoothscroll-mobile').smoothScroll({
        speed: 2000,
        offset: offset_mobile
    });

    // LIGHTBOX LOKESH

    $('.lb-expand').click(function() {
        var lbDetails = $(this).parent();
        var lbCaption = $(this).parent().find('.lb-caption');

        if ($(this).hasClass('lb-expand-active')) {
            $(this).removeClass('lb-expand-active');
            lbDetails.css('height', '');
        } else {
            $(this).addClass('lb-expand-active');
            lbDetails.css('height', lbCaption.height());
        }
    });

    if (typeof branchmap == 'function') {

        var branch = branchmap();
        var customTipdata = '';
        var customTipimage = '';

        $('.continent-name').click(function() {

            $('.continent-hotels').slideUp(400);

            if ($(this).hasClass('active')) {

                $(this).removeClass('active');

            } else {

                $('.continent-name').removeClass('active');
                $(this).addClass('active');
                $(this).parent().find('.continent-hotels').slideDown(800);

            }

        });

        function hide_verctormap_tooltip() {
            $('#customTip').removeClass('transition-active').fadeOut(function() {
                $(this).removeClass('opacity-active');
            });
        }

        if ($(window).width() >= 768) {

            $('#world-map').vectorMap({
                map: 'world_mill',

                regionStyle: {
                    initial: {
                        fill: '#161145',
                        "fill-opacity": 1,
                        stroke: '#161145',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    },
                    hover: {
                        "fill-opacity": 0.8
                    },
                    selected: {
                        fill: 'yellow'
                    }
                },

                markers: branch.map(function(h) { return { name: h.name, latLng: h.coords } }),
                markersSelectable: true,
                markersSelectableOne: true,
                showTooltip: true,
                zoomOnScroll: false,

                onMarkerClick: function(event, code) {

                    // VARIABLES

                    var map = $('#world-map').vectorMap('get', 'mapObject');
                    var coordsloc = map.latLngToPoint(branch[code].coords[0], branch[code].coords[1]);
                    var customTip = $('#customTip');

                    var label = $('#jvectormap-hotel' + code).attr("data-label");
                    var href = $('#jvectormap-hotel' + code).attr("data-href");
                    var image = $('#jvectormap-hotel' + code).attr('data-image');

                    // RESET FOR LEFT NAV MAP SIDEBAR
                    // when a marker is clicked, remove all active and set this to active

                    $('.jvectormap-hotel').removeClass('active');
                    $('#jvectormap-hotel' + code).addClass('active');

                    // INFOWINDOW FUNCTIONALITY

                    // * check which hotel got clicked, used for onViewportChange
                    // * get image, used for onViewportChange
                    customTipdata = code;
                    customTipimage = image;

                    // check if image is not empty
                    if (image != '') {

                        // * set infowindow position
                        customTip.css({
                            left: coordsloc.x - 155,
                            top: coordsloc.y - 250
                        });

                        // * add this html inside the infowindow

                        // check if href is not empty
                        if (href != '') {
                            customTip.html('<div><div style="background-image:url(' + image + ');"></div><p><a href="' + href + '">' + label + '</a></p></div>');
                        } else {
                            customTip.html('<div><div style="background-image:url(' + image + ');"></div><p>' + label + '</p></div>');
                        }

                    } else {

                        // * set infowindow position
                        customTip.css({
                            left: coordsloc.x - 155,
                            top: coordsloc.y - 75
                        });

                        // * add this html inside the infowindow

                        // check if href is not empty
                        if (href != '') {
                            customTip.html('<div><div class="customtip-noimg" style="background-image:url(' + image + ');"></div><p><a href="' + href + '">' + label + '</a></p></div>');
                        } else {
                            customTip.html('<div><div class="customtip-noimg" style="background-image:url(' + image + ');"></div><p>' + label + '</p></div>');
                        }

                    }

                    // Use this if close button is requested - note: this does not work as close button yet
                    // customTip.html('<div><div class="meganav-close"></div><div style="background-image:url(' + image + ');"></div><p><a href="' + href + '">' + map.tip.text() + '</a></p></div>');

                    // * display infowindow.
                    // * remove transition-active, prevents infowindow to transitionally move to the other marker when user clicks another marker in the map.
                    // * remove opacity-active, prevents infowindow to show up instantly when user clicks another marker in the map.
                    customTip.css('display', 'block');
                    customTip.removeClass('transition-active');
                    customTip.removeClass('opacity-active');

                    // * HACK: make code to wait for a millisecond and add these classes to infowindow, this makes sure the removeClass above got removed or we'll experience bugs.
                    setTimeout(function() {
                        customTip.addClass('transition-active');
                        customTip.addClass('opacity-active');
                    }, 1);

                    // * focus on this marker
                    var getscale = Math.floor(map.scale);
                    map.setFocus({
                        scale: (getscale >= 2) ? getscale : 2,
                        lat: branch[code].coords[0],
                        lng: branch[code].coords[1],
                        x: coordsloc.x,
                        y: coordsloc.y,
                    });

                    $('#customTip').mouseleave(function() {
                        hide_verctormap_tooltip();
                    });

                },

                onViewportChange: function() {

                    // check if empty, prevents code from executing and shows an error
                    if (customTipdata != '') {

                        // VARIABLES

                        var map = $('#world-map').vectorMap('get', 'mapObject');
                        var coordsloc = map.latLngToPoint(branch[customTipdata].coords[0], branch[customTipdata].coords[1]);
                        var customTip = $('#customTip');

                        // INFOWINDOW

                        // * remove transition-active, prevents infowindow to transitionally move when user pann or zoom in/out of the map
                        customTip.removeClass('transition-active');

                        // check if image is not empty
                        if (customTipimage != '') {

                            // * update infowindow position
                            customTip.css({
                                left: coordsloc.x - 155,
                                top: coordsloc.y - 250
                            });

                        } else {

                            // * update infowindow position
                            customTip.css({
                                left: coordsloc.x - 155,
                                top: coordsloc.y - 75
                            });

                        }

                    }
                },

                onRegionClick: function(event, ode) {
                    hide_verctormap_tooltip();
                },

                // onRegionOver: function(event, ode){
                //  hide_verctormap_tooltip();
                // },

                series: {
                    markers: [{
                        attribute: 'image',

                        scale: {
                            'soon': scalemap.brown,
                            'open': scalemap.white
                        },

                        values: branch.reduce(function(p, c, i) { p[i] = c.status; return p }, {})
                    }]
                },

                backgroundColor: '#ffffff'

            });

            $('.jvectormap-hotel').click(function() {

                /* VARIABLES */

                var map = $('#world-map').vectorMap('get', 'mapObject');

                var code = $(this).attr("data-id");
                var coordsloc = map.latLngToPoint(branch[code].coords[0], branch[code].coords[1]);

                var label = $(this).attr("data-label");
                var href = $(this).attr("data-href");
                var image = $(this).attr("data-image");

                var customTip = $('#customTip');

                // RESET FOR LEFT NAV MAP SIDEBAR
                // when left nav hotel is clicked, remove all active and set this to active

                $('.jvectormap-hotel').removeClass('active');
                $(this).addClass('active');

                // INFOWINDOW FUNCTIONALITY

                // * check which hotel got clicked, used for onViewportChange
                // * get image, used for onViewportChange
                customTipdata = code;
                customTipimage = image;

                // check if image is not empty
                if (image != '') {

                    // * set infowindow position
                    customTip.css({
                        left: coordsloc.x - 155,
                        top: coordsloc.y - 250
                    });

                    // * add this html inside the infowindow

                    // check if href is not empty
                    if (href != '') {
                        customTip.html('<div><div style="background-image:url(' + image + ');"></div><p><a href="' + href + '">' + label + '</a></p></div>');
                    } else {
                        customTip.html('<div><div style="background-image:url(' + image + ');"></div><p>' + label + '</p></div>');
                    }

                } else {

                    // * set infowindow position
                    customTip.css({
                        left: coordsloc.x - 155,
                        top: coordsloc.y - 75
                    });

                    // * add this html inside the infowindow

                    // check if href is not empty
                    if (href != '') {
                        customTip.html('<div><div class="customtip-noimg" style="background-image:url(' + image + ');"></div><p><a href="' + href + '">' + label + '</a></p></div>');
                    } else {
                        customTip.html('<div><div class="customtip-noimg" style="background-image:url(' + image + ');"></div><p>' + label + '</p></div>');
                    }

                }

                // customTip.html("<div><div class='meganav-close'></div><div style='background-image:url(" + image + ");'></div><p><a href='" + href + "'>" + label + "</a></p></div>");


                // * display infowindow.
                // * remove transition-active, prevents infowindow to transitionally move to the other marker when user clicks another marker in the map.
                // * remove opacity-active, prevents infowindow to show up instantly when user clicks another marker in the map.
                customTip.css('display', 'block');
                customTip.removeClass('transition-active');
                customTip.removeClass('opacity-active');


                // * HACK: make code to wait for a millisecond and add these classes to infowindow, this makes sure the removeClass above got removed or we'll experience bugs.
                setTimeout(function() {
                    customTip.addClass('transition-active');
                    customTip.addClass('opacity-active');
                }, 1);


                // * focus on this marker
                var getscale = Math.floor(map.scale);
                map.setFocus({
                    scale: (getscale >= 2) ? getscale : 2,
                    lat: branch[code].coords[0],
                    lng: branch[code].coords[1],
                    x: coordsloc.x,
                    y: coordsloc.y,
                });

            });

            $('#customTip').mouseleave(function() {
                hide_verctormap_tooltip();
            });

        }
    }


    jQuery(document).ready(function() {
        var $hamburger = $(".hamburger");
        var $mainbod = $("body");
        var $searchable = $(".searchable");
        $hamburger.on("click", function(e) {
            $hamburger.toggleClass("is-active");
            $mainbod.toggleClass("opennav");
            $mainbod.removeClass("opensearch");
            $searchable.removeClass("waldo");
        });
    });

    jQuery(document).ready(function() {
        var $searchable = $(".searchable");
        var $mainbod = $("body");
        var $hamburger = $(".hamburger");
        $searchable.on("click", function(e) {
            $searchable.toggleClass("waldo");
            $mainbod.toggleClass("opensearch");
            setTimeout(function() { $('#search').focus(); }, 100);
            $mainbod.removeClass("opennav");
            $hamburger.removeClass("is-active");
        });
    });


    $(window).on('load', function() {
        $('#status').fadeOut();
        $(".lining").removeClass("preload");
        setTimeout(function() {
            $('#preloader').fadeOut('slow');
        }, 100);
    });


    $(window).bind('scroll', function(e) {
        parallaxScroll();
    });

    thirty_pc();

    $(window).bind('resize', thirty_pc);

    $(".closeout a").click(function(e) {
        e.preventDefault();
        $('body').removeClass('opennav');
        $(".hamburger").removeClass("is-active");
    });

    $(".foundhim").click(function(e) {
        e.preventDefault();
        $('body').removeClass('opensearch');
        $(".searchable").removeClass("waldo");
    });

    $(".searchbox form, .searchpageform form").submit(function() {
        $('#status').fadeIn();
        $('#preloader').delay(0).fadeIn('slow');
    });

    // FOOTER EMAIL SIGNUP

    $('.homeform-form').submit(function(e) {
        if (document.getElementById('agree').checked) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                type: 'post',
                data: $(this).serialize(),
                success: function() {
                    $('.homeform-response').addClass('displayblock');
                    $('.homeform-container').addClass('displaynone');
                },
            });
        } else {
            alert('Please indicate that you have read and agree to our Privacy Policy');
            return false;
        }
    });


    // POPUP EMAIL SIGNUP

    $('.rmail-form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            data: $(this).serialize(),
            success: function() {
                $('.rmail-response').addClass('displayblock');
                $('.rmail-imgbox').addClass('displaynone');
                $('.rmail-box').addClass('displaynone');
            },
        });
    });


    /* email signup popup

    $('#email-signup-checkbox input').iCheck({
    	checkboxClass: 'icheckbox_minimal-aero',
    	radioClass: 'iradio_minimal-aero',
    	increaseArea: '20%' // optional
    });

    var footer_signup_serialized;

    $('#footer-signup').submit(function(e){

    	e.preventDefault();
    	footer_signup_serialized = $(this).serialize();
    	$('#email-signup-checkbox').addClass('show-signup-popup');
    	$('#email-signup-checkbox').find('.success-message').hide();
    	$('#email-signup-checkbox').find('form').show();

    });

    $(window).click(function(e) {

    	if($(e.target).hasClass('show-signup-popup') || $(e.target).parents('.show-signup-popup').hasClass('show-signup-popup')) {} else {
    		$('.show-signup-popup').removeClass('show-signup-popup');
    	}

    });

    $('#email-signup-checkbox form').submit(function(e){

    	// console.log(footer_signup_serialized);

    	e.preventDefault();
    	$.ajax({
    			url :  $(this).attr('action'),
    			type : 'post',
    			data : footer_signup_serialized + '&' +$(this).serialize(),
    			success : function(data,status,jqXHR) {
    				console.log(data);
    				console.log(status);
    				console.log(jqXHR);

    				$('#email-signup-checkbox').find('form').hide();
    				$('#email-signup-checkbox').find('.success-message').fadeIn();

    				setTimeout(function(){
    					$('#email-signup-checkbox').removeClass('show-signup-popup');
    				},4000);
    				
    			},
    			complete: function (xhr, status) {

    				console.log(xhr);
    				console.log(status);
    				
    			},
    			error: function() {

    				$('#email-signup-checkbox').find('form').hide();
    				$('#email-signup-checkbox').find('.error-message').fadeIn();

    				setTimeout(function(){
    					$('#email-signup-checkbox').removeClass('show-signup-popup');
    				},4000);
    				
    			}
    	});

    	console.log(footer_signup_serialized + $(this).serialize());

    });

    */

    var $document = $(document),
        $element = $('body'),
        className = 'hasScrolled';

    $document.scroll(function() {
        $element.toggleClass(className, $document.scrollTop() >= 550);
    });


    // LAZY LOAD
    // $('.lazyload').lazyload();


    // SCROLL FADING

    var fadeStart = 0 // 100px scroll or less will equiv to 1 opacity
        ,
        fadeUntil = 500 // 200px scroll or more will equiv to 0 opacity
        ,
        fading = $('.floating-hello h1, .floating-hello img, .floating-hello i, .flh-location');

    $(window).bind('scroll', function() {
        var offset = $(document).scrollTop(),
            opacity = 0;
        if (offset <= fadeStart) {
            opacity = 1;
        } else if (offset <= fadeUntil) {
            opacity = 1 - offset / fadeUntil;
        }
        fading.css('opacity', opacity);

    });



    // TABS FUNCTION

    $('.tabs-wrapper').each(function() {
        $(this).find(".tab-content").hide(); //Hide all content
        $(this).find("ul.tabs li:first").addClass("active").show(); //Activate first tab
        $(this).find(".tab-content:first").show(); //Show first tab content
    });

    $("ul.tabs li").click(function(e) {
        $(this).parents('.tabs-wrapper').find("ul.tabs li").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        $(this).parents('.tabs-wrapper').find(".tab-content").hide(); //Hide all tab content

        var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
        $("li.tab-item:first-child").css("background", "none");
        $(this).parents('.tabs-wrapper').find(activeTab).fadeIn(); //Fade in the active ID content
        e.preventDefault();
    });

    $("ul.tabs li a").click(function(e) {
        e.preventDefault();
    });

    $("li.tab-item:last-child").addClass('last-item');



    // IN VIEW ANIMATIONS

    $('.banner-quote').bind('inview', function(event, visible) {
        if (visible == true) {
            $(this).addClass("viola");
        }
    });

    $('.homebox').bind('inview', function(event, visible) {
        if (visible == true) {
            $(this).addClass("viola");
        }
    });

    // TOGGLE FUNCTION //
    $('#toggle-view li').click(function() {
        var text = $(this).children('div.panel');

        if (text.is(':hidden')) {
            text.slideDown('200');
            $(this).children('span').addClass('toggle-minus');
            $(this).addClass('activated');
        } else {
            text.slideUp('200');
            $(this).children('span').removeClass('toggle-minus');
            $(this).children('span').addClass('toggle-plus');
            $(this).removeClass('activated');
        }
    });

    $(".theslip").stick_in_parent({ offset_top: 350, sticky_class: "vislip" });



    // PLUGIN: OWL CAROUSEL

    $('.owl-carousel-home').owlCarousel({
        loop: true,
        margin: 40,
        nav: false,
        items: 1,
        responsive: {
            768: { items: 2 },
            1365: { items: 3 },
        }
    });

    $('.owl-carousel-post').owlCarousel({
        loop: true,
        margin: 40,
        nav: true,
        items: 1,
        navText: ["<i class='ion-ios-arrow-left'></i>", "<i class='ion-ios-arrow-right'></i>"]
    });


    function rwcolumnbox_heighter() {
        var getWindowWidth = $(window).width();
        $('.rwcolumnbox-photo').css('height', '');

        if (getWindowWidth >= 768) {
            $('.rwcolumnbox-copy').each(function() {
                var getHeight = $(this).find('.table-parent').height();

                if ($(this).parent().find('.rwcolumnbox-photo').height() <= getHeight) {
                    $(this).parent().find('.rwcolumnbox-photo').css('height', getHeight);
                }

            });
        }
    }

    rwcolumnbox_heighter();
    $(window).resize(function() {
        rwcolumnbox_heighter();
        postOwl_autoHeight();
    });

    $('.rwcolumnbox-photoslider').owlCarousel({
        nav: true,
        items: 1,
        loop: false,
        navText: ["<i class='ion-ios-arrow-left'></i>", "<i class='ion-ios-arrow-right'></i>"],
        onInitialize: function(e) {
            var itemCount = e.target.childElementCount
            if (itemCount <= 1) {
                this.options.mouseDrag = false;
                this.options.touchDrag = false;
                this.options.pullDrag = false;
                this.options.freeDrag = false;
                this.options.loop = false;
            }
        },
    });

    $('.rwgallery').owlCarousel({
        nav: true,
        items: 1,
        loop: false,
        navText: ["<i class='ion-ios-arrow-left'></i>", "<i class='ion-ios-arrow-right'></i>"],
        onInitialize: function(e) {
            var itemCount = e.target.childElementCount
            if (itemCount <= 1) {
                this.options.mouseDrag = false;
                this.options.touchDrag = false;
                this.options.pullDrag = false;
                this.options.freeDrag = false;
                this.options.loop = false;
            }
        },
    });

    $('.owl-carousel-quotes').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
        touchDrag: false,
        dots: false,
        mouseDrag: false,
        autoplay: 1000,
        autoplayTimeout: 4000,
        animateOut: 'fadeOut'
    });


    // RECENT LOCATIONS - CLOSE TOGGLER

    var location_height = $('.mapper-sidebox').height();
    $('.mapper-sidebar').height(location_height);

    $('.mapper-sideclose').click(function(evt) {
        evt.preventDefault();

        if ($('.mapper-sidebar').hasClass('close')) {
            $('.mapper-sidebar').removeClass('close');
        } else {
            $('.mapper-sidebar').addClass('close');
        }
    });

    if (!localStorage.getItem("cookies")) {
        $('.cookie-consent').css("display", "block");
    }

    $('.cookie-consent__accept-btn').on('click', function() {
        if (typeof(Storage) !== "undefined") {
            if (!localStorage.getItem("cookies")) {
                localStorage.cookies = "accept";
                $('.cookie-consent').css("display", "none");
            }
        }
    });

    $('#mapper-side-bar li').on('click', function() {
        $('#map-side-bar').find('li').removeClass('active');
        $(this).addClass('active').siblings().removeClass('active');
    });

    $('.infocontainer-close').click(function(evt) {
        evt.preventDefault();
        $('.infocontainer').removeClass('infocontainer-show');
    });

    $('.map-link').click("click", function(e) {
        $("#infocontainer" + $(this).attr("rel")).stop().show(500);
        e.preventDefault();
    });

})(jQuery);


//rw gallery photo height

// var onResize = function(divHeight) {
//     var dataHeight = divHeight;

//     if (jQuery(window).width() <= 768 && $(window).width() >= 480) {
//         var winHeight = dataHeight[0].tablet_height ? dataHeight[0].tablet_height : '';
//         $('.rwgallery-photo').css('height', winHeight);
//     } else if (jQuery(window).width() <= 480) {
//         var winHeight = dataHeight[0].mobile_height ? dataHeight[0].mobile_height : '';
//         $('.rwgallery-photo').css('height', winHeight);
//     } else {
//         var winHeight = dataHeight[0].desktop_height ? dataHeight[0].desktop_height : '';
//         $('.rwgallery-photo').css('height', winHeight);
//     }
// }

var delay = (function() {
    var timer = 0;
    return function(callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    }
})();

var divHeight = jQuery('.rwgallery-photo').data('height');


// jQuery(document).ready(onResize(divHeight));
// jQuery(window).resize(function() {
//     delay(function() {
//         onResize(divHeight);
//     }, 100)
// });
// end rw gallery photo height