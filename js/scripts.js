var hideNav = true;

$(document).ready(function () {
    // (function blink() { 
    //   $('.blinking-underscore').fadeOut(750).fadeIn(750, blink); 
    // })(); 

	$("#menu").click(function() {
		$("#navigation").fadeToggle();
		hideNav = false;
	});

});

$(document).scroll(function() {
	var scrollLoc = $(this).scrollTop();
	
    if (scrollLoc > 20) {
        $("#menu").addClass("menu-on-scroll");
        if (hideNav) {
        	$("#navigation").fadeOut();
        }
    } else {
        $("#menu").removeClass("menu-on-scroll");
        $("#navigation").fadeIn();
        hideNav = true;
    }
});