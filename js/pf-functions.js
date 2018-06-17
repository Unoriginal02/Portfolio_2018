/*eslint-env jquery*/


// FUNCTIONS TO FIX YOUTUBE VIDEOS ////////////////////////////

// Wraps Youtube video in the format that Bootstrap requires to make them responsive
$("iframe").wrap("<div class='embed-responsive embed-responsive-16by9 unrwap_p'>"); 

// Wordpress adds a <p> tag on whatever element you add in your post. 
// This function prevents <iframe> to get wraped.
$(".unrwap_p").unwrap();

// Necessary function to add a class to make iframe responsive.
$(function() {
    $('iframe').addClass('embed-responsive-item');
});

// FUNCTION TO MAKE CERTAIN ELEMENTS TO SLIDE UP WHEN THE PAGE IS LOADED //////
$(function() {
    $('.pf-velo-slideIn').velocity("transition.slideUpIn", { easing: 'easeOutQuad', stagger: 75, duration: 300 });
});

$(function() {
    $(".pf-velo-slideIn-content").velocity("transition.fadeIn", { easing: 'easeOutQuad', stagger: 20, duration: 300 });
});


// FUNCTION TO MAKE THE MENU SHRIN WHEN THE SCROLL STARTS //////
$(window).scroll(function(){
    var wscroll = $(this).scrollTop();
    if(wscroll > 100){
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

// fix to make it work on Smartphones.
$('body').on({
    'touchmove': function() {

    $(window).scroll(function(){
        var wscroll = $(this).scrollTop();
        if(wscroll > 100){
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

// Toggler function for the mobile menu.
var click = function() {
$("#pf-mobile-menu-toggler").click(function() {
        var $this = $(this),
            flag = $this.data("clickflag") || false;
        if (!flag) {
            $( ".pf-mobile-menu-wrap" ).removeClass( "pf-invisible" );
            $( ".pf-mobile-menu-wrap li" ).velocity( 'transition.slideLeftBigIn', { easing: 'easeOutQuint', stagger: 75, duration: 100 });
            // Unbind the event
            $('#pf-mobile-menu-toggler').unbind();
            // Call the function 
            setTimeout(function() {
                click();
            }, 1000);
        } else {
            $( ".pf-mobile-menu-wrap li" ).velocity( 'transition.slideLeftBigOut', { easing: 'easeOutQuint', stagger: 75, duration: 100 });
            $( ".pf-mobile-menu-wrap" ).addClass( "pf-invisible" );
            // Unbind the event
            $('#pf-mobile-menu-toggler').unbind();
            // Call the function 
            setTimeout(function() {
                click();
            }, 1000);
        }
        $this.data("clickflag", !flag);
    });
};
click();


