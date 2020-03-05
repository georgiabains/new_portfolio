/* jQuery */
var hideNav = false;

$(document).ready(function () {
    // (function blink() { 
    //   $('.blinking-underscore').fadeOut(750).fadeIn(750, blink); 
    // })(); 

	$("#menu").click(function() {
        $("#navigation").toggleClass("nav-on-click");
        $("#navigation").fadeToggle();
        hideNav = false;
    });

    $("#hamburger-menu").click(function() {
        $("#navigation-menu").toggleClass("navigation-menu-on-click");
        $("#hamburger-menu").toggleClass("hamburger-on-click");
    })
});

$(document).scroll(function() {
	var scrollLoc = $(this).scrollTop();
	
    if (scrollLoc > 20) {
        $("#menu").addClass("menu-on-scroll");
        if (hideNav) {
            $("#navigation").removeClass("nav-on-click");
        	$("#navigation").fadeOut();
        }
        
    } else {
        $("#menu").removeClass("menu-on-scroll");
        $("#navigation").fadeIn();
        $("#navigation").removeClass("nav-on-click");
        hideNav = true;
    }

    if (scrollLoc > 200) {
        $("#roles-on-scroll").fadeIn();
    } else {
        $("#roles-on-scroll").fadeOut();
    }
});