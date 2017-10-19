/*function seccion_header(){
  var ventana_alto = $(window).height();
  $('.head-home').css('min-height', ventana_alto);
}*/

function seccion_header(){
  var ventana_alto = $(window).height()-100;
  $('.item-home').css('min-height', ventana_alto);
}


function SliderHome(){
  
  var owl = $(".slide-home");

  owl.owlCarousel({
      autoPlay: false, //Set AutoPlay to 3 seconds
      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : [400,1], // itemsMobile disabled - inherit from itemsTablet option
      transitionStyle: "fade"
    });

  $(".next").click(function(){
      owl.trigger('owl.next');
    })

  $(".prev").click(function(){
    owl.trigger('owl.prev');
  });
}

function SliderTest(){
  
  var owl = $(".testimonio");

  owl.owlCarousel({
      autoPlay: false, //Set AutoPlay to 3 seconds
      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : [400,1], // itemsMobile disabled - inherit from itemsTablet option
      transitionStyle: "fade"
    });

  $(".next").click(function(){
      owl.trigger('owl.next');
    })

  $(".prev").click(function(){
    owl.trigger('owl.prev');
  });
}


function Sliderimg(){
  
  var owl = $(".imagenes");

  owl.owlCarousel({
      autoPlay: false, //Set AutoPlay to 3 seconds
      items : 4, //10 items above 1000px browser width
      itemsDesktop : [1000,4], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,4], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : [400,1], // itemsMobile disabled - inherit from itemsTablet option
      transitionStyle: "fade"
    });

  $(".next").click(function(){
      owl.trigger('owl.next');
    })

  $(".prev").click(function(){
    owl.trigger('owl.prev');
  });
}



$(document).ready(function() {

  seccion_header();
  SliderHome();
  SliderTest();
  Sliderimg()
  
});

$( window ).resize(function() {
  
  seccion_header();
  SliderHome();
  SliderTest();
  Sliderimg()

});