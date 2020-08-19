$(document).ready(function(){
    //page valeur text anim
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
        delay: (el, i) =>5000 * i
      }).add({
        targets: '.defilewrap',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 5000,
      });
    });
    $(anime.timeline).stop(stopAll,goToEnd);
    $('#myCollapsible').collapse({
        toggle: false
      })