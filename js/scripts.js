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

    $("#hamburger-menu").click(function() {
        $("#navigation-menu").toggleClass("navigation-menu-on-click");
        $("#hamburger-menu").toggleClass("hamburger-on-click");
    });
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

/* code below is from: https://codepen.io/gschier/pen/jkivt */
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