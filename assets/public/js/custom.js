//****slick-script*****//

jQuery(".regular").slick({
    dots: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,

    pauseOnHover: true,

    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                dots: true,
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 767,
            settings: {
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

    ]


});
//****slick-script*****//



jQuery(".logo").slick({
    dots: false,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1200,

    pauseOnHover: true,

    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 5,
            }
        },
        {
            breakpoint: 668,
            settings: {
                dots: true,
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

    ]


});


jQuery(".img_slider").slick({
    dots: false,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1200,
    arrows:false,
    pauseOnHover: true,

    responsive: [
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }

    ]


});




//******counting**********//

jQuery('.counter-count').each(function () {
    jQuery(this).prop('number', 0).animate({
        Counter: jQuery(this).text()
    }, {
        duration: 5000,
        easing: 'swing',
        step: function (now) {
            jQuery(this).text(Math.ceil(now));
        }
    });
});


     $(window).bind('scroll', function() {
    // var navHeight = $( 'header.main_header' ).height() - 0;
       var navHeight = $( 'body' ).height() - 10;
       if ($(window).scrollTop() > 0) {
         $('.menu_main').addClass('top_most');
      
       }
       else {
         $('.menu_main').removeClass('top_most');
       
       }
    });

//******counting**********//



    // Skills section
  // $('.skills-content').waypoint(function() {
  //   $('.progress .progress-bar').each(function() {
	 //  var barWidth = $(this).parents(".progress").find(".val").text();
  //     $(this).css("width", barWidth);
  //   });
  // }, {
  //   offset: '80%'
  // });
  // 