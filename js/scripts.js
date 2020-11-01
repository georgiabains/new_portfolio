// Javascript

/* jQuery */
$(document).ready(function () {

    // Hover on video to play/pause
    var video = $("video.play-on-hover");
    video.hover(hoverVideo, hideVideo);

    $(".video-controls button.pause").hide();

    $(".video-controls button.play").on("click",function(){
        var thisVideo = $(this).parent().parent().children().get(0);
        var thisPause = $(this).parent().children("button.pause");

        thisVideo.play();

        $(this).toggle();
        thisPause.toggle();
        thisPause.focus();                
    });

    $(".video-controls button.pause").on("click",function(){
        var thisVideo = $(this).parent().parent().children().get(0);
        var thisPlay = $(this).parent().children("button.play");
        
        thisVideo.pause();

        $(this).toggle();
        thisPlay.toggle();
        thisPlay.focus(); 
    });

    // Blinking Underscore
    (function blink() { 
        $('.blinking-underscore').fadeOut(750).fadeIn(750, blink); 
    })(); 

    // Hamburger Menu
    var $hamburgerMenu = $("#hamburger");
    var ariaExpanded = $hamburgerMenu[0];
    var isAriaExpanded = ariaExpanded.getAttribute("aria-expanded");

    $hamburgerMenu.click(function() {
        $("#navigation-menu").toggleClass("navigation-menu-on-click");
        $("#hamburger-menu").toggleClass("hamburger-on-click");
        $("#hamburger").toggleClass("open");

        // set aria-expanded
        if (isAriaExpanded == "false") {
          isAriaExpanded = "true";
        } else {
          isAriaExpanded = "false";
        }
        ariaExpanded.setAttribute("aria-expanded", isAriaExpanded);
    });
});

// trigger scroll functions
$(window).scroll(function() {
    if ($(window).width() > 1000) { // limit to desktop resolution
        moveImagesToRow(".main-image");
    }
    
});

// animate images from offset position behind .main-image, to inline with .main-image
function moveImagesToRow(el) {
    var windowHeight = jQuery(window).height();

    $(el).each(function() {
        // window variables
        var thisPos = $(this).offset().top;
        var thisPosBottom = thisPos + 570;
        var topOfWindow = $(window).scrollTop();

        // image variables
        var imageTopLeft = $(this).parent().children("img.top-left");
        var imageBottomRight = $(this).parent().children("img.bottom-right");
        var imageFigcaption = $(this).parent().children("figcaption");

        var allImages = [imageTopLeft, imageBottomRight, imageFigcaption];

        if ((topOfWindow + windowHeight - 300 > thisPos) && (topOfWindow + windowHeight - 300 < thisPosBottom)){
            clearArrQueue(allImages);
            imageTopLeft.animate({top: "109px", left: "-40px"}, "slow");
            imageBottomRight.animate({top: "109px", left: "540px"}, "slow");
            imageFigcaption.animate({bottom: "40px"});
        } else {
            clearArrQueue(allImages);
            imageTopLeft.animate({top: "0", left: "130px"}, "slow");
            imageBottomRight.animate({top: "210px", left: "340px"}, "slow");
            imageFigcaption.animate({bottom: "-60px"});
        }
    });
}

// clear queue of array
function clearArrQueue(queueArray) {
    $(queueArray).each(function(i) {
        this.clearQueue();
    });
}

// play video on mouseover
function hoverVideo(e) { 
    $(this).get(0).play(); 
    var thisPlay = $(this).parent().children(".video-controls").children("button.play");
    var thisPause = $(this).parent().children(".video-controls").children("button.pause");
    
    thisPlay.toggle();
    thisPause.toggle(); 
}

// pause video when not on mouseover
function hideVideo(e) { 
    $(this).get(0).pause(); 
    var thisPlay = $(this).parent().children(".video-controls").children("button.play");
    var thisPause = $(this).parent().children(".video-controls").children("button.pause");
    thisPause.toggle();
    thisPlay.toggle();
}

// code below is from: https://codepen.io/gschier/pen/jkivt
// Typewriter effect in header
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
};