$(document).ready(function(){
    var header = $('.1');
    
    var backgrounds = new Array(
        'url(./assets/img/trees.jpg)'
        , 'url(./assets/img/garden2.jpg)'
       , 'url(./assets/img/garden.jpg)'      
    );
    
    var current = 0;
    
    function nextBackground() {
        current++;
        current = current % backgrounds.length;
        header.css('background-image', backgrounds[current]);
    }
    setInterval(nextBackground, 8000);
    
    header.css('background-image', backgrounds[0]);
    });


  //2eme img
  $(document).ready(function(){
    var header = $('.2');
    
    var backgrounds = new Array(
        'url(./assets/img/trees.jpg)'
        , 'url(./assets/img/garden2.jpg)'
       , 'url(./assets/img/garden.jpg)'      
    );
    
    var current = 0;
    
    function nextBackground() {
        current++;
        current = current % backgrounds.length;
        header.css('background-image', backgrounds[current]);
    }
    setInterval(nextBackground, 8000);
    
    header.css('background-image', backgrounds[0]);
    });