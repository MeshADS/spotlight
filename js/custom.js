$(document).ready(function() {
    "use strict";
    // Main Slider
    $('.main-slider').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 0,
        nav: true,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    // Latest Voice Over Artists 
    $('.latest-artist').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 20,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            900: {
                items: 3
            },
            1000: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 5
            }
        }
    });
    // Latest News
    $('.voice-news').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 20,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            900: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });
    // Testimonials
    $('.voice-testimonial').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            900: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });
    // About Us
    $('.about-us').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 20,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            900: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 4
            }
        }
    });
    // Top Albums
    $('.top-albums').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 20,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            900: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 5
            }
        }
    });
    // Recent Posts
    $('.recent-post').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 20,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            900: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 4
            }
        }
    });
    // Recent Products
    $('.related-products').owlCarousel({
        loop: true,
        autoplay: false,
        margin: 20,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            900: {
                items: 3
            },
            1200: {
                items: 3
            },
            1400: {
                items: 4
            }
        }
    });
    // Isotope
    if (jQuery().isotope) {
        $(window).load(function() {
            $(function() {
                var isotopeContainer = $(
                    '#isotope-container');
                isotopeContainer.isotope({
                    masonry: {
                        //columnWidth:    0.3,
                        isAnimated: true,
                        easing: 'linear',
                    },
                })
            });
        });
    }
    if (jQuery().isotope) {
        $(window).load(function() {
            var $container = $('#isotope-container');
            //if(!$.browser.safari){ 
            $container.isotope({
                filter: '*',
                animationEngine: 'best-available',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            //}
            $('#filter').on('click', 'a', function() {
                $('#filter .selected').removeClass(
                    'selected');
                $(this).addClass('selected');
                var selector = $(this).attr(
                    'data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 150,
                        easing: 'linear',
                    }
                });
                return false;
            });
        });
    }
    // Search Box	
    $('#searchlink').on('mouseover', function() {
        $(this).addClass('open');
    }).on('mouseout', function() {
        $(this).removeClass('open');
    });
    // Back to top
    $("#back-top").hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1000) {
            $('#back-top').fadeIn();
        } else {
            $('#back-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-top').on('click', 'a', function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    //Tabs
    $("ul#tabs").on('click', 'li', function(e) {
        if (!$(this).hasClass("active")) {
            var tabNum = $(this).index();
            var nthChild = tabNum + 1;
            $("ul#tabs li.active").removeClass("active");
            $(this).addClass("active");
            $("ul#tab li.active").removeClass("active");
            $("ul#tab li:nth-child(" + nthChild + ")").addClass(
                "active");
        }
    });
    //Loader
    $(window).load(function() {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    });
    //Google Map
    $('.maps').on('click', function() {
        $(this).find('iframe').css("pointer-events", "auto");
    });
    //End
});