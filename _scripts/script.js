// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollTop").style.display = "block";
    } else {
        document.getElementById("scrollTop").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

// when on intro hide scroll
// when on vineyard show scroll
$(window).scroll(function() {

   // calc distance from Top for each ID

   var distanceToHide = $("#intro").offset().top;
   distanceToHide -= 50;
   var distanceToShow = $("#vineyard").offset().top;
     
   // console.log("Intro: " + distanceToHide);
   // console.log("Vineyard: " + distanceToShow);

//display none from Intro
if ($(this).scrollTop() > distanceToHide) { 
        $('.navbar').css({'display': 'none'});
        $('.navbar-brand').css({'display': 'none'});
    } else if ($(this).scrollTop() < distanceToHide) { 
        $('.navbar').css({'display': 'inline-block'});
        $('.navbar-brand').css({'display': 'inline-block'});
        //$('li.page-scroll.menu').after('<li class="welcome"><a href="#welcome"><img src="_images/logo-white.png" width=80></a></li>');
        //$('li.welcome').css({'display': 'inline-block'});
        if($('.navbar-toggle').css('display') == "none") {
        $('li.welcome').css({'display': 'inline-block'});
    }       
      }
//display again on Vineyard     
// if ($(this).scrollTop() > distanceToShow) { 
//         $('.navbar').css({'display': 'inline-block'});
//         $('li.welcome').css({'display': 'none'});
//         $('.navbar-nav>li>a').css({'color': '#000'});
//         $('.navbar').css({'background-color': 'rgb(255, 255, 255,0.5)'});                
//       }      
    });
});
//End

//set up timeline
$(document).ready(function() {
    console.log('ready');

    checkSize();
    $(window).resize(checkSize);

//need to change this to set var to true/false, if true then change the nav style, if false don't change it
//maybe if true add class and false remove class
    $('nav.navbar.navbar-default.navbar-fixed-top').on('mouseenter', function(e) {
     $('.nav>li a').css({'color':'#000000','opacity': '1'});
     $('li.welcome img').attr("src","_images/logo-black.png");
     $('.nav>li a').css({'color':'#000000','opacity': '1', 'font-weight':'bold'});
      });
    $('nav.navbar.navbar-default.navbar-fixed-top').on('mouseleave', function(e) {
     $('.nav>li a').css({'color':'#ffffff','opacity': '1'});
     $('li.welcome img').attr("src","_images/logo-white.png");
      });

    $('.timestamp').on('click', function(e) {
     console.log('clicked');
     $(this).parent().parent().parent().next('li').children('div.timeline-panel').children('div.timeline-heading').children('h4.subheading').fadeIn(1000);
     $(this).parent().parent().parent().next('li').children('div.timeline-panel').children('div.timeline-body').delay(800).fadeIn(2000);
    });

    $('.timestamp-last').on('click', function(e) {
     console.log('clicked-2');
     $(this).parent().parent().parent().next('li').fadeIn(800);
    });

  });

// //when navbar toggle display true remove li.welcome
// //nav will be about, contact, map
// if (//detect mobile device) {
//  $('li.welcome').css({'display': 'none'});
//  //add logo in the center
// }
function checkSize() {
    if($('.navbar-toggle').css('display') !== "none") {
        $('li.welcome').css({'display': 'none'});
    }
}




