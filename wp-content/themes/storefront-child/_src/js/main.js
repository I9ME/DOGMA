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

  $('.site-branding').addClass('marca');
 

  /*=========================================================================================
  // OWL
  ========================================================================================= */
  // $('#owl-slider').owlCarousel({
  //   loop: true,
  //   margin: 10,
  //   responsiveClass: true,
  //   responsive: {
  //     0: {
  //       items: 1,
  //       nav: true
  //     },
  //     600: {
  //       items: 1,
  //       nav: true
  //     },
  //     1000: {
  //       items: 1,
  //       nav: true,
  //       loop: false
  //     }
  //   }
  // });

  


  
  //*=========================================================================================
  // // CLOSE FUNCTION
  // =========================================================================================*/
  });
});