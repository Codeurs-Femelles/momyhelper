;(function($){
    "use strict"
    
    
    // isotop plugin area
    $(window).on('load', function(){
        
        // Activate isotope in container
        $(".gallery_item").imagesLoaded( function() {
            $(".gallery_item").isotope({
                itemSelector: ".single_item",
                layoutMode: "fitRows",
            }); 
        });        
        
        // Add isotope click function
        $(".gallery_filter li").on('click',function(){
            $(".gallery_filter li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr("data-filter");
            $(".gallery_item").isotope({
                filter: selector,
                animationOptions: {
                    duration: 450,
                    easing: "linear",
                    queue: false,
                }
            });
            return false;
        });
    });
    

    // Counter up
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
    

// countdown jquery
        var newYear = new Date(); 
        newYear = new Date(2016, 12-1, 25);
        $('.defaultCountdown').countdown({until: newYear, format: 'DHMS'}); 
    
    
    $('#question_slider').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        items: 1,
        autoplay: true,
        navText: ['<i class="mdi mdi-chevron-left"></i>','<i class="mdi mdi-chevron-right"></i>']
    })
    
    
    
    $('.related_post_slider').owlCarousel({
        loop:true,
        margin:30,
        responsiveClass:true,
        nav:true,
        navText: ['<i class="mdi mdi-arrow-left"></i>','<i class="mdi mdi-arrow-right"></i>'],
        responsive:{
            0:{
                items:1,
            },
            450:{
                items:2,
            },
            700:{
                items:3,
            },
        }
    })
    
    
    // Progress circle
    $(".circle1").each(function() {
          $(this).waypoint(function() {
            $('.circle1').circleProgress({
            value: 0.90,
            size: 176,
            emptyFill: "#2196f3",
            thickness: 20,
            startAngle:4,
            animation: { duration: 3000,}, 
            fill: {
                gradient: ["white"]
            },
        });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });

    $(".circle2").each(function() {
          $(this).waypoint(function() {
            $('.circle2').circleProgress({
                value: 0.63,
                size: 176,
                emptyFill: "#cddc39",
                thickness: 20,
                startAngle:4,
                animation: { duration: 3000,},
                fill: {
                    gradient: ["white"]
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    $(".circle3").each(function() {
          $(this).waypoint(function() {
            $('.circle3').circleProgress({
                value: 0.32,
                size: 176,
                emptyFill: "#fcd900",
                thickness: 20,
                startAngle:4,
                animation: { duration: 3000,},
                fill: {
                    gradient: ["white"]
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    $(".circle3").each(function() {
          $(this).waypoint(function() {
            $('.circle3').circleProgress({
                value: 0.32,
                size: 176,
                emptyFill: "#fcd900",
                thickness: 20,
                startAngle:4,
                animation: { duration: 3000,},
                fill: {
                    gradient: ["white"]
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    $(".circle4").each(function() {
          $(this).waypoint(function() {
            $('.circle4').circleProgress({
                value: 0.51,
                size: 176,
                emptyFill: "#ff5722",
                thickness: 20,
                startAngle:4,
                animation: { duration: 3000,},
                fill: {
                    gradient: ["white"]
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    $(".circle5").each(function() {
          $(this).waypoint(function() {
            $('.circle5').circleProgress({
                value: 0.90,
                size: 140,
                emptyFill: "#f9f9f9",
                thickness: 5,
                startAngle:4.75,
                animation: { duration: 3000,},
                fill: {
                    gradient: ["#cddc39"]
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    $(".circle6").each(function() {
          $(this).waypoint(function() {
            $('.circle6').circleProgress({
                value: 0.50,
                size: 140,
                emptyFill: "#f9f9f9",
                thickness: 5,
                startAngle:4.75,
                animation: { duration: 3000,},
                fill: {
                    gradient: ["#ff5722"]
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    $(".circle7").each(function() {
          $(this).waypoint(function() {
            $('.circle7').circleProgress({
                value: 0.75,
                size: 140,
                emptyFill: "#f9f9f9",
                thickness: 5,
                startAngle:4.75,
                animation: { duration: 3000,},
                fill: {
                    gradient: ["#1976d2"]
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    $(".circle8").each(function() {
          $(this).waypoint(function() {
            $('.circle8').circleProgress({
                value: 0.63,
                size: 140,
                emptyFill: "#f9f9f9",
                thickness: 5,
                startAngle:4.75,
                animation: { duration: 3000, },
                fill: {
                    gradient: ["#fcd900"]
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    
    
    
    // circle js
    
    $(".newtest1").each(function() {
          $(this).waypoint(function() {
            $('.newtest1').circles({
                'targetPos':270,
                speed: 4,
                onFinishMoving:function(pos){
                    console.log('done ',pos);
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    
    $(".newtest2").each(function() {
          $(this).waypoint(function() {
            $('.newtest2').circles({
                'targetPos':220,
                speed: 4,
                onFinishMoving:function(pos){
                    console.log('done ',pos);
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    
    $(".newtest3").each(function() {
          $(this).waypoint(function() {
            $('.newtest3').circles({
                'targetPos':180,
                speed: 4,
                onFinishMoving:function(pos){
                    console.log('done ',pos);
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    $(".newtest4").each(function() {
          $(this).waypoint(function() {
            $('.newtest4').circles({
                'targetPos':120,
                speed: 4,
                onFinishMoving:function(pos){
                    console.log('done ',pos);
                }
            });
      }, {
          triggerOnce: true,
          offset: 'bottom-in-view'
        });
   });
    
    
    
    
     // Pricing Filter
    $(function() {
        $( "#slider-range" ).slider({
          range: true,
          min: 5,
          max: 150,
          values: [ 5, 100 ],
          slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
          }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
          " - $" + $( "#slider-range" ).slider( "values", 1 ) );
      });
    
    
    // Scroll To Top js
    
    $(window).scroll(function(){
        if($(this).scrollTop() > 200){
            $(".scroll").fadeIn(500);
        }
        else{
            $(".scroll").fadeOut(1000);
        }
    });
    
    $(".scroll").click(function(){
        $("body,html").animate({"scrollTop" : "0"}, 700);
    });
    
    
    
    // stick menu function
    
    var nav_offset_top = $('.navbar').offset().top;
    
    $('.header_main_menu_area').affix({
        offset: {
            top: nav_offset_top,
            bottom: function () {
                return (this.bottom = $('footer').outerHeight(true))
            }
        }
    });
    
    
    
    
    // preloader js
    $(window).load(function() { // makes sure the whole site is loaded
		$('#preloader_spinner').fadeOut(); // will first fade out the loading animation
		$('#preloader').delay(150).fadeOut('slow'); // will fade out the white DIV that covers the website.
		$('body').delay(150).css({'overflow':'visible'})
    })
    
    
    
    
    
})(jQuery);