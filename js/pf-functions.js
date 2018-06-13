/*eslint-env jquery*/


// CORRECCIO DE VIDEOS DE YOUTUBE ////////////////////////////

// Afegeix la classe de video responsive de bootstrap als videos colocats desde Youtube
$("iframe").wrap("<div class='embed-responsive embed-responsive-16by9 unrwap_p'>"); 

// Wordpress afegeix un <p> a QUALSEVOL item que es coloqui en l'editor de posts. Amb aquesta funció, es retira el "<p>" del objecte que porti aquesta classe.
$(".unrwap_p").unwrap();

// funcio per afegir una classe necessaria pel responsive de Bootstrap
$(function() {
    $('iframe').addClass('embed-responsive-item');
});


// FUNCIO PER FER FADE IN A TOTA LA PAGINAº ////////////////////
$(function() {
    $('body').removeClass('fade-out');
});

// FUNCIO PER FER QUE EL LOGO DEL PORTAFOLI ES FAGI PETITO //////
$(window).scroll(function(){
    var wscroll = $(this).scrollTop();
    if(wscroll > 50){
     $(".navbar").addClass("shrink-nav");
     $(".title").addClass("pf-invisible");
     $(".name").addClass("pf-name-shrink");
     $(".pf-icon").addClass("pf-icon-shrink");

    }
    else{
      $(".navbar").removeClass("shrink-nav");
      $(".name").removeClass("pf-name-shrink");
      $(".title").removeClass("pf-invisible");
      $(".pf-icon").removeClass("pf-icon-shrink");

    }
  });

// Arreglo perque també funcioni en smartphones
$('body').on({
    'touchmove': function() {

    $(window).scroll(function(){
        var wscroll = $(this).scrollTop();
        if(wscroll > 50){
         $(".navbar").addClass("shrink-nav");
         $(".title").addClass("pf-invisible");
         $(".name").addClass("pf-name-shrink");
         $(".pf-icon").addClass("pf-icon-shrink");

        }
        else{
          $(".navbar").removeClass("shrink-nav");
          $(".name").removeClass("pf-name-shrink");
          $(".title").removeClass("pf-invisible");
          $(".pf-icon").removeClass("pf-icon-shrink");

        }
      });

    }
});