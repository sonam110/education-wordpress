(function($) {
    
    "use strict";


    // Preloder
    $(window).on('load', function() {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({'overflow':'visible'});
    });

    
    // Header Nav
    $(document).ready(function(){
        var dropDown = $('li.dropdown');
        //Show dropdown on hover only for desktop devices
        if($(window).innerWidth() > 767){
            dropDown.on({
                mouseenter: function () {
                    dropDown.clearQueue();
                    $(this).find('.dropdown-menu').addClass('show');
                },
                mouseleave: function () {
                    $(this).find('.dropdown-menu').removeClass('show');
                }
            });
        }
        //Show dropdown on click only for mobile devices
        if($(window).innerWidth() < 768) {
            dropDown.on('click', function(event){

                // Avoid having the menu to close when clicking
                event.stopPropagation();

                // close all the siblings
                $(this).siblings().removeClass('show');
                $(this).siblings().find('.dropdown-menu').removeClass('show');

                // close all the submenus of siblings
                $(this).siblings().find('.dropdown-menu').parent().removeClass('show');

                // opening the one you clicked on
                $(this).find('.dropdown-menu').toggleClass('show');
                $(this).siblings('.dropdown-menu').toggleClass('show');
            });
        }
    });



    // Scroll To Top
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 150) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
    $('.scrollup').on('click', function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1500);
        return false;
    });


    // CounterUp
    $('.count').counterUp({
        delay: 10, // the delay time in ms
        time: 2000 // the speed time in ms
    });


    // owl-carousel for main-slider 
    $('.main-slider').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        margin: 0,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:false,
        autoplaySpeed:1200,
        navText: [
                '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'
            ],
        responsive: {
            0: {
                items:1
            },
            600:{
                items:1
            },
            1000: {
                items:1
            }
        }
    });



    // owl-carousel for testimonial 
    if($('.testimonial-carousel').length){
        $('.testimonial-carousel').owlCarousel({
            loop:true,
            nav:false,
            dots:true,
            margin: 50,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:false,
            autoplaySpeed:1000,
            responsive: {
                0: {
                    items:1
                },
                600:{
                    items:1
                },
                1000: {
                    items:2
                }
            }
        })
    }


    // owl-carousel for history 
    if($('.history-carousel').length){
        $('.history-carousel').owlCarousel({
            loop:true,
            nav:true,
            dots:false,
            margin: 50,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            autoplaySpeed:1000,
            navText: [
                '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
                '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'
            ],
            responsive: {
                0: {
                    items:1
                },
                600:{
                    items:3
                },
                1000: {
                    items:4
                }
            }
        })
    }


    // -------------- Timeline Script Start  ----------------//
    // define variables
      var items = document.querySelectorAll(".timeline li");
      // check if an element is in viewport
      // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
      function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }
      function callbackFunc() {
        for (var i = 0; i < items.length; i++) {
          if (isElementInViewport(items[i])) {
            items[i].classList.add("in-view");
          }
        }
      }
      // listen for events
      window.addEventListener("load", callbackFunc);
      window.addEventListener("resize", callbackFunc);
      window.addEventListener("scroll", callbackFunc);




    //Setup Filterizr
    if($('.filtr-container').length){
        $('.filtr-container').imagesLoaded(function() {
            var filterizr = $('.filtr-container').filterizr();
        });
    }


    // Parallax 
    $('.parallax').jarallax({
        // parallax effect speed. 0.0 - 1.0
        speed             : 0.5
    });

    // lightbox
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    });

    // Video popup
    jQuery("a.demo").YouTubePopUp();



    // ----------- Ajax Contact script -----------//
    $(function() {
        // Get the form.
        var form = $('#ajax-contact');

        // Get the messages div.
        var formMessages = $('#form-messages');

        $(form).submit(function(event) {
            // Stop the browser from submitting the form.
            event.preventDefault();

            // Serialize the form data.
            var formData = $(form).serialize();
            // Submit the form using AJAX.
            $.ajax({
                type: 'POST',
                url: $(form).attr('action'),
                data: formData
            })
            .done(function(response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                // Set the message text.
                $(formMessages).text(response);

                // Clear the form.
                $('#name').val('');
                $('#subject').val('');
                $('#email').val('');
                $('#message').val('');
            })

            .fail(function(data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occured and your message could not be sent.');
                }
            });
        });
    });
    // Set up an event listener for the contact form.


})(jQuery);