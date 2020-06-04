$(document).ready(function(){
//  var textWrapper = document.querySelector('.defilewrap .defile');
//   textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='lettre'>$&</span>");
  anime.timeline({loop: true})
  .add({
    targets: '.defilewrap .lettre',
    translateY: ["1.1em", 0],
    translateX: ["0.55em", 0],
    translateZ: 0,
    rotateZ: [180, 0],
    duration: 750,
    easing: "easeOutExpo",
    delay: (el, i) => 5000 * i
  }).add({
    targets: '.defilewrap',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 5000
  });
});

$('#myCarousel').carousel({
  interval: false
});

//scroll slides on swipe for touch enabled devices

$("#myCarousel").on("touchstart", function(event){

  var yClick = event.originalEvent.touches[0].pageY;
  $(this).one("touchmove", function(event){

      var yMove = event.originalEvent.touches[0].pageY;
      if( Math.floor(yClick - yMove) > 1 ){
          $(".carousel").carousel('next');
      }
      else if( Math.floor(yClick - yMove) < -1 ){
          $(".carousel").carousel('prev');
      }
  });
  $(".carousel").on("touchend", function(){
      $(this).off("touchmove");
  });
});

var $current, $next, $slides = $(".slideshow .slide");

function doSlideShow () {
  $current = $slides.filter(".slide.current");
  $next = $current.next(".slide");
  if ($next.length < 1) {
    $next = $slides.first();
  }
  $slides.removeClass("previous");
  $current.addClass("previous").removeClass("current");
  $next.addClass("current");
  window.setTimeout(doSlideShow, 5000);
}
window.setTimeout(doSlideShow, 5000);