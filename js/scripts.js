$(document).ready(function () {
    (function blink() { 
      $('.blinking-underscore').fadeOut(750).fadeIn(750, blink); 
    })(); 

    var scrollLoc = $(this).scrollTop()
    if (scrollLoc > 20) {
    	$("#menu").click(function() {
    		$("#navigation").fadeToggle();
    	});
    }

});

$(document).scroll(function() {
	var scrollLoc = $(this).scrollTop();
    if (scrollLoc > 20) {
        $("#menu").addClass("menu-on-scroll");
        $("#navigation").fadeOut();
    } else {
        $("#menu").removeClass("menu-on-scroll");
        $("#navigation").fadeIn();
    }
})