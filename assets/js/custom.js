$(document).ready(function () {
  $(".search-form-2 i").click(function () {
    $(".search-toggle").toggleClass("toggle");
    $(".search-form-2 i").toggleClass("on");
  });

  $(".premium-slider").owlCarousel({
    loop: true,
    margin: 30,
    navText: [
      '<i class="fa fa-arrow-left"></i>',
      '<i class="fa  fa-arrow-right"></i>',
    ],
    nav: true,
    dots: true,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 4,
      },
    },
  });

  $(".clients-slider").owlCarousel({
    loop: true,
    margin: 30,
    navText: [
      '<i class="fa fa-arrow-left"></i>',
      '<i class="fa  fa-arrow-right"></i>',
    ],
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 5,
      },
    },
  });
  $(".team-slider").owlCarousel({
    loop: true,
    margin: 30,
    navText: [
      '<i class="fa fa-arrow-left"></i>',
      '<i class="fa  fa-arrow-right"></i>',
    ],
    nav: true,
    dots: true,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });

//   testimonial 
$(".testimonial_slider").owlCarousel({
    loop: true,
    margin: 30,
   
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  // gallery start 

    $('.image-popup-vertical-fit').magnificPopup({
      type: 'image',
      mainClass: 'mfp-with-zoom', 
      gallery:{
          enabled:true
        },
    
      zoom: {
        enabled: true, 
    
        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function
    
        opener: function(openerElement) {
    
          return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }
    
    });
    

});
