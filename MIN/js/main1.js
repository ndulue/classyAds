/* ==========================================================================================
  Theme Name: Bizz
  Author: vs-themes
  Support: visakhinkollam@gmail.com
  Description: Business Consulting and Agency HTML 5 Template
  Version: 1.0
========================================================================================== */


/** ===============

01.Preloader fade out
02.Owl carousel Sliders
03.Magnific pop up
04.Gallery filtering 
05.coming soon time count
06.Fixing headers on scroll 
07.nice slector
08.Wow animation 
09.Other functions
10.Cout up number on scroll

=============== */
(function($) {
        "use strict";
        /*------------------------------------------------------------------------------*/
        /*01.Preloader fade out
/*------------------------------------------------------------------------------*/
        $(window).on('load', function() {
            $('.loader-page').delay('300').fadeOut(1000);
        });
        /*------------------------------------------------------------------------------*/
        /*02.Owl carousel Sliders
/*------------------------------------------------------------------------------*/
        // Banner slider
        $('.slider-1').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            smartSpeed: 450,
            margin: 0,
            nav: true,
            navText: ["<i class='fas fa-angle-double-left'></i>", "<i class='fas fa-angle-double-right'></i>"],
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


        // Banner slider 2
        var slideBanner = $('.slider-2');
        slideBanner.owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            smartSpeed: 450,
            dotsContainer: '.dots-slider',
            margin: 0,
            nav: false,
            navText: ["<i class='fas fa-angle-double-left'></i>", "<i class='fas fa-angle-double-right'></i>"],
            dots: true,
            touchDrag: false,
            mouseDrag: false,
            responsive: {
                0: {
                    items: 1,
                    dots: false
                },
                600: {
                    items: 1,
                    dots: false
                },
                991: {
                    items: 1,
                    nav: false,
                    dots: false
                },
                993: {
                    items: 1,
                    nav: false,
                    dots: true
                }
            }
        });


        // Custom nav buttons
        $('.slides-left').on('click', function() {
            event.preventDefault();
            slideBanner.trigger('prev.owl.carousel');
        });
        $('.slides-right').on('click', function() {
            event.preventDefault();
            slideBanner.trigger('next.owl.carousel');
        });


        // Our team slider
        var teamSlide = $('.team-slider');
        teamSlide.owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 5000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                600: {
                    items: 1,
                    nav: false
                },
                992: {
                    items: 3,
                    nav: false,
                    loop: true
                },
                1200: {
                    items: 4,
                    nav: false,
                    loop: true
                }
            }
        });


        // Custom team nav buttons
        $('.slide-left').on('click', function() {
            event.preventDefault();
            teamSlide.trigger('prev.owl.carousel');
        });
        $('.slide-right').on('click', function() {
            event.preventDefault();
            teamSlide.trigger('next.owl.carousel');
        });


        // Our team slider 2
        var teamSlide3 = $('.team-3-slider');
        teamSlide3.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: false,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                576: {
                    items: 1,
                    nav: false
                },
                992: {
                    items: 3,
                    nav: false,
                    loop: true
                },
                1200: {
                    items: 4,
                    nav: false,
                    loop: true
                }
            }
        });


        // Custom team 2 nav buttons
        $('.slide-left.team-3').on('click', function() {
            event.preventDefault();
            teamSlide3.trigger('prev.owl.carousel');
        });
        $('.slide-right.team-3').on('click', function() {
            event.preventDefault();
            teamSlide3.trigger('next.owl.carousel');
        });


        // Testimonial slider
        $('.testimonial-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: false,
            dots: false,
            navText: ["<a class='arrow-btn flex-center'><i class='fas fa-arrow-left'></i></a>", "<a class='arrow-btn flex-center'><i class='fas fa-arrow-right'></i></a>"],
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


        // Testimonial slider -2
        var testimonialSlide2 = $('.testimonial-2-slide');
        testimonialSlide2.owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 5000,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                768: {
                    items: 2,
                    nav: false
                },
                992: {
                    items: 3,
                    nav: false,
                    loop: true
                },
                1200: {
                    items: 3,
                    nav: false,
                    loop: true
                }
            }
        });


        // Custom testimonial nav buttons
        $('.slide-left.testi-2').on('click', function() {
            event.preventDefault();
            testimonialSlide2.trigger('prev.owl.carousel');
        });
        $('.slide-right.testi-2').on('click', function() {
            event.preventDefault();
            testimonialSlide2.trigger('next.owl.carousel');
        });


        // Testimonial slider-3
        var testimonialSlide3 = $('.testimonial-3-slide');
        testimonialSlide3.owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 5000,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                }
            }
        });


        // Clients logos slider
        $('.client-logo-slide').owlCarousel({
            loop: true,
            margin: 140,
            autoplay: true,
            nav: false,
            dots: false,
            slideTransition: 'linear',
            autoplayTimeout: 5000,
            autoplaySpeed: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2,
                    margin: 50
                },
                600: {
                    items: 2
                },
                991: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });


        // Clients logos top slider
        $('.logos-slide').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            nav: false,
            dots: false,
            slideTransition: 'linear',
            autoplayTimeout: 5000,
            autoplaySpeed: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2,
                    margin: 50
                },
                600: {
                    items: 2
                },
                991: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });


        // Blog listing slider 
        $('.slider-type-blog').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            nav: true,
            dots: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: ["<i class='fas fa-arrow-left transform-v-'></i>", "<i class='fas fa-arrow-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                1200: {
                    items: 1
                }
            }
        });


        // about work here slider
        $('.work-gallaty').owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            nav: false,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        });
        /*------------------------------------------------------------------------------*/
        /*03.Magnific pop up
/*------------------------------------------------------------------------------*/
        $('.popup-video').magnificPopup({
            type: 'iframe'
        });


        $('.gallery-links').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
        /*------------------------------------------------------------------------------*/
        /*04.Gallery filtering 
/*------------------------------------------------------------------------------*/
        // masonry gallery listing 
        var $portfolioGrid = $('.portfolio-filter').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer'
            }
        });


        // gallery filtering option buttons 
        $('.filter-gallery').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $portfolioGrid.isotope({
                filter: filterValue
            });
        });
        /*-----------------------------------------------------*/
        // masonry blog listing 
        var $gridblog = $('.blog-masonry-div').isotope({
            itemSelector: '.blog-grid-item',
            percentPosition: true
        });


        // Blog filtering option 
        $('.filter-blog').on('click', 'button', function() {
            var filterValueBlog = $(this).attr('data-filter');
            $gridblog.isotope({
                filter: filterValueBlog
            });
        });


        // gallery & blog page button active style
        $('.btn-filter').on('click', function(e) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });
        /*------------------------------------------------------------------------------*/
        /*05.coming soon time count
/*------------------------------------------------------------------------------*/
        //coming soon date count 
        $('.clock').countdown('2020/10/10', function(event) {
            var $this = $(this).html(event.strftime('' +
                '<div class="week-count"><h1>%w <sup>Weeks</sup></h1></div>  ' +
                '<div class="hour-week d-flex  justify-content-center">  ' +
                '<div class="hour-count"><h1>%d <sup>Days</sup></h1></div>  ' +
                '<div class="hour-count"><h1>%H <sup>Hours</sup></h1></div>  ' +
                '<div class="min-count"> <h1>%M <sup>Mins</sup></h1> </div>  ' +
                '<div class="sec-count"> <h1>%S <sup>Sec</sup></h1> </div> ' +
                '</div>  '));
        });
        /*------------------------------------------------------------------------------*/
        /*06.Fixing headers on scroll 
/*------------------------------------------------------------------------------*/
        $(window).on('scroll', function() {
            //fix header1 on scroll
            var scroll1 = $(window).scrollTop();
            if (scroll1 < 100) {
                $(".transperant-head,.bottom-head").removeClass("fixed-nav");
            } else {
                $(".transperant-head,.bottom-head").addClass("fixed-nav");
            }


            ////fade in  footer button on scroll
            if ($(this).scrollTop() > 800) {
                $(".scroll-btn").addClass("opacity-10"); //showing scroll up button
            } else {
                $(".scroll-btn").removeClass("opacity-10"); //hiding scroll up button
            }
        });


        //scroll to top on cllick footer button
        $(".scroll-btn").on('click', function(event) {
            event.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 800);
        });
        /*------------------------------------------------------------------------------*/
        /*07.nice slector
/*------------------------------------------------------------------------------*/
        //nice select
        $('select').niceSelect(); // changing all select input style
        /*------------------------------------------------------------------------------*/
        /*08.Wow animation 
/*------------------------------------------------------------------------------*/
        new WOW().init();
        /*------------------------------------------------------------------------------*/
        /*09.Other functions
/*------------------------------------------------------------------------------*/
        // Mobile menu integration index 1
        $('.main-menu').meanmenu({
            meanMenuContainer: '.mobile-menu',
            meanScreenWidth: "991"
        });


        // Mobile menu integration index 2
        $('.main-menu-2').meanmenu({
            meanMenuContainer: '.mobile-menu-2',
            meanScreenWidth: "991"
        });


        // Mobile menu integration index 3
        $('.main-menu-3').meanmenu({
            meanMenuContainer: '.mobile-menu-3',
            meanScreenWidth: "991"
        });


        // search input focus on shown
        $('#searchModal').on('shown.bs.modal', function() {
            $('.input-search').trigger('focus');
        });


        /*------------------------------------------------------------------------------*/
        /*10.Cout up number on scroll
/*------------------------------------------------------------------------------*/
        $(document).ready(function($) {
            $('.counter').counterUp({
                time: 2000
            });
        });


        $(".each-color.co1").on('click', function(e) {
            var data1 = $(this).data('color');
            $(".color-changing").attr('href', data1);
        });

        $(".each-color.co2").on('click', function(e) {
            var data1 = $(this).data('color');
            $(".color-changing").attr('href', data1);
        });

        $(".each-color.co3").on('click', function(e) {
            var data1 = $(this).data('color');
            $(".color-changing").attr('href', data1);
        });

        $(".each-color.co4").on('click', function(e) {
            var data1 = $(this).data('color');
            $(".color-changing").attr('href', data1);
        });

        $(".each-color.co5").on('click', function(e) {
            var data1 = $(this).data('color');
            $(".color-changing").attr('href', data1);
        });

        $(".each-color.co6").on('click', function(e) {
            var data1 = $(this).data('color');
            $(".color-changing").attr('href', data1);
        });



    }

)(jQuery); // End jQuery