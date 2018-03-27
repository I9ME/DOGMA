/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */

jQuery(function($) {
  $(document).ready(function() {

  /*=========================================================================================
  // MENU TOOGLE
  =========================================================================================*/
  $(".header__toggle").click(function(event){
    event.preventDefault();
    if ($(this).hasClass('on')){
      $(this).removeClass('on');
        $(".menu").stop().fadeOut();
    }else{
      $(this).addClass('on');
        $(".menu").stop().fadeIn();
    }
  });


  /*=========================================================================================
  // EFEITO SCROLLON
  =========================================================================================*/
  $(window).scroll(function(){
    var scroll = jQuery(window).scrollTop();
    if ( scroll > 0 ) {
      jQuery('.header').addClass('scrollOn');
      jQuery('.header').removeClass('scrollOff');
    } else {
      jQuery('.header').removeClass('scrollOn');
      jQuery('.header').addClass('scrollOff');
    }
  });


  /*=========================================================================================
  // GALERIA SYNC
  =========================================================================================*/
  // Owl Carousel DOM Elements
  var carousel1 = '.js-carousel-1';
  var carousel2 = '.js-carousel-2';

  // Initialize plugin
  var owlCarousel1 = $(carousel1).owlCarousel({
    items: 1,
    nav: true,
    dots: true,

  });

  var owlCarousel2 = $(carousel2).owlCarousel({
    responsiveClass: true,
    responsive: {
      0: {
        margin: 5,
        items: 7
      },
      600: {
        margin: 30,
        items: 7
      },
      1000: {
        margin: 30,
        items: 7
      }
    }
  });

  // Sync carousel & add current class
  carouselSyncCurrentClass();

  // On carousel change: Sync carousel & add current class
  owlCarousel1.on('changed.owl.carousel', function() {
    carouselSyncCurrentClass();
  });
  owlCarousel2.on('changed.owl.carousel', function(event) {
    carouselSyncCurrentClass();
  });

  // Thumbs switch click event.
  owlCarousel2.find('.item').click(function() {
    var itemIndex = $(this).parent().index();
    owlCarousel1.trigger('to.owl.carousel', itemIndex);
    carouselSyncCurrentClass();
  });

  function carouselSyncCurrentClass() {
    setTimeout(function() {
      var carousel1ActiveIndex = $('.js-carousel-1 .owl-item.active').index();
      $('.js-carousel-2 .owl-item').removeClass('current');
      var currentItem = $('.js-carousel-2 .owl-item:nth-child(' + (carousel1ActiveIndex + 1) + ')');
      currentItem.addClass('current');

      if (!currentItem.hasClass('active')) {
        if (currentItem.prevAll('.active').length > 0) {
          owlCarousel2.trigger('next.owl.carousel');
        }
        if (currentItem.nextAll('.active').length) {
          owlCarousel2.trigger('prev.owl.carousel');
        }
      }
    }, 100);
  }


  /*=========================================================================================
  // OWL
  ========================================================================================= */
  $('#owl-slider').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 1,
        nav: true
      },
      1000: {
        items: 1,
        nav: true,
        loop: false
      }
    }
  });

  $("#owl-artigos").owlCarousel({
    items: 1,
    nav: false,
    dots: true,
    navText: false,
    margin: 30,
    loop: true,

    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 2,
        dots: false,
        nav: true

      }
    }
  });

  $("#owl-produtos").owlCarousel({
    
    nav: false,
    dots: true,
    navText: false,
    margin: 20,
    loop: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 5
      },
      1000: {
        items: 5,
        dots: false,
        nav: true

      }
    }
  });

  $("#galeria-owl").owlCarousel({
    items: 1,
    nav: false,
    dots: true,
    navText: false,
    marginright: 0,
    loop: true,
    autoplay:true,
    autoplayTimeout:8000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 4
      },
      1000: {
        items: 4,
        dots: false,

      }
    }
  });


  /*=========================================================================================
  // EQUAL HEIGHT
  =========================================================================================*/
  function equalizeHeights(selector) {
    var heights = new Array();

    //Loop to get all element heights
    $("").each(function() {

     // Need to let sizes be whatever they want so no overflow on resize
      $(this).css('min-height', '150');
      $(this).css('max-height', 'none');
      $(this).css('height', 'auto');

      //Then add size (no units) to array
      heights.push($(this).height());
    });

    //Find max height of all elements
    var max = Math.max.apply( Math, heights );

    //Set all heights to max height
    $(".card-artigo").each(function() {
      $(this).css('height', max + 'px');
    });
  }

  $(window).on('load resize', function(){
      equalizeHeights('.news__content');
  });

  //*=========================================================================================
  // // CLOSE FUNCTION
  // =========================================================================================*/
  });
});