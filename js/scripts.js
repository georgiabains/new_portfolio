/* jQuery */
var hideNav = false;

$(document).ready(function () {
    (function blink() { 
      $('.blinking-underscore').fadeOut(750).fadeIn(750, blink); 
    })(); 

	$("#menu").click(function() {
        $("#navigation").toggleClass("nav-on-click");
        $("#navigation").fadeToggle();
        hideNav = false;
    });

    // test();

    typeWriter("test");

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
});