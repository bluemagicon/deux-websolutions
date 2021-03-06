// -----------------------------------------------
// -----------------------------------------------
// Header onScroll

window.onscroll = function() {myFunction()};

var header = document.getElementById("header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("header--scrolled");
  } else {
    header.classList.remove("header--scrolled");
  }
}

ScrollReveal().reveal('.fade-in',{
    delay: 200,
    duration: 900,
    distance: '30px',
    easing: 'cubic-bezier(.77,.18,.36,.95)'
});

// -----------------------------------------------
// -----------------------------------------------
// Off-Canvas
// https://github.com/appleple/hiraku2

var offcanvas = new Hiraku(".offcanvas", {
    btn: "#offcanvas-trigger",
    fixedHeader: "#header",
    width: '50%',
    direction: "right"
});
offcanvas.on('open', function(){
    offcanvas.btn.classList.add('is-active');
});
offcanvas.on('close', function(){
    offcanvas.btn.classList.remove('is-active');
});


// -----------------------------------------------
// -----------------------------------------------
// jQuery Functions

jQuery(document).ready(function () {
    'use strict';

    if (window.location.hash) {
        setTimeout(function() {
            scrollTo(window.location.hash);
        }, 1);
    }


    jQuery("#hero-typer").typer({
        typeSpeed: 70,
        backspaceSpeed: 20,
        autoStart:true,
        backspaceDelay: 3000,
        repeatDelay: 1000,
        strings: [
            "erfolgreiche Webseiten.",
            "Shops, die verkaufen.",
            "effiziente Strategien."
        ],
    });

    // -----------------------------------------------
    // -----------------------------------------------
    // ANCHOR LINKS



    jQuery('main a[href*="#"]:not([class*=accordion]):not(._brlbs-btn), header a[href*="#"]:not([class*=accordion]), .offcanvas a[href*="#"]:not([class*=accordion]), .w-scrollto').stop().click(function(e) {
        var target = jQuery(this).attr("href");
        var current_url = window.location.origin + window.location.pathname;

        if(target !== "#") {

            if(target.charAt(0) == '#') {
                e.preventDefault();
                scrollTo(target);
                //UIkit.offcanvas('#offcanvas').hide();
                offcanvas.close();

            } else if(target.indexOf(current_url) !== -1) {
                e.preventDefault();
                target = target.replace(current_url, '');
                scrollTo(target);
                //UIkit.offcanvas('#offcanvas').hide();
                offcanvas.close();

            }
        }
    });

    // -----------------------------------------------
    // -----------------------------------------------

    var waypoint = new Waypoint({
        element: document.getElementById('home-section-projekte'),
        handler: function(direction) {
            var vid = $('#slick-slide00').find('video');
            $(vid).get(0).play();
            this.destroy();
        }
    })

});

function scrollTo(target)
{
    var distance = jQuery(target).offset().top;
    //var navHeight = jQuery('#header').outerHeight() + 40;

    jQuery('html, body').animate({
        scrollTop: (distance)
    }, 600);
}