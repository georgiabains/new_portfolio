/* jQuery */


$(document).ready(function () {

    // Blinking Underscore
    (function blink() { 
        $('.blinking-underscore').fadeOut(750).fadeIn(750, blink); 
    })(); 

    // Hamburger Menu
    $("#hamburger-menu").click(function() {
        $("#navigation-menu").toggleClass("navigation-menu-on-click");
        $("#hamburger-menu").toggleClass("hamburger-on-click");
        $("#hamburger").toggleClass("open");
    });

    // Filters for Projects page
    $("a.show-all").click(function() {
        $(".project").show();
        $(".project-type-display").html("projects");

        $(".show-all").hide();
        $(".show-websites").show();
        $(".show-microsites").show();
        $(".show-themes").show();
    });

    $("a.show-websites").click(function() {
        $(".website").show();
        $(".microsite").hide();
        $(".tumblr-theme").hide();

        $(".show-websites").hide();
        $(".show-all").show();
        $(".show-all").css("display", "inline-block");
        $(".show-microsites").show();
        $(".show-themes").show();

        $(".project-type-display").html("websites");
    });

    $("a.show-microsites").click(function() {
        $(".microsite").show();
        $(".website").hide();
        $(".tumblr-theme").hide();

        $(".show-microsites").hide();
        $(".show-all").show();
        $(".show-all").css("display", "inline-block");
        $(".show-websites").show();
        $(".show-themes").show();

        $(".project-type-display").html("microsites");
    });

    $("a.show-themes").click(function() {
        $(".tumblr-theme").show();
        $(".website").hide();
        $(".microsite").hide();

        $(".show-themes").hide();
        $(".show-all").show();
        $(".show-all").css("display", "inline-block");
        $(".show-websites").show();
        $(".show-microsites").show();

        $(".project-type-display").html("tumblr themes");
    });
});

$(window).scroll(function() {
    moveImagesToRow(".main-image");
})

function moveImagesToRow(el) {
    var windowHeight = jQuery(window).height();

    $(el).each(function() {
        var thisPos = $(this).offset().top;
        var thisPosBottom = thisPos + 570;
        var topOfWindow = $(window).scrollTop();

        if ((topOfWindow + windowHeight - 300 > thisPos) && (topOfWindow + windowHeight - 300 < thisPosBottom)){
            $(this).parent().children("img.top-left").clearQueue();
            $(this).parent().children("img.bottom-right").clearQueue();
            $(this).parent().children("figcaption").clearQueue();
            $(this).parent().children("img.top-left").animate({top: "108px", left: "-40px"}, "slow");
            $(this).parent().children("img.bottom-right").animate({top: "108px", left: "540px"}, "slow");
            $(this).parent().children("figcaption").animate({bottom: "40px"});
        } else {
            $(this).parent().children("img.top-left").clearQueue();
            $(this).parent().children("img.bottom-right").clearQueue();
            $(this).parent().children("figcaption").clearQueue();
            $(this).parent().children("img.top-left").animate({top: "0", left: "130px"}, "slow");
            $(this).parent().children("img.bottom-right").animate({top: "210px", left: "340px"}, "slow");
            $(this).parent().children("figcaption").animate({bottom: "-60px"});
        }
    });
}

function moveImagesToCollage(el) {
    var windowHeight = jQuery(window).height();

    $(el).each(function() {
        var thisPos = $(this).offset().top;

        console.log(thisPos);

        var topOfWindow = $(window).scrollTop();
        if (topOfWindow + windowHeight - 300 < thisPos) {
            $(this).parent().children("img.top-left").animate({top: "108px", left: "-40px"}, "slow");
            $(this).parent().children("img.bottom-right").animate({top: "108px", left: "540px"}, "slow");
        }
    });
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