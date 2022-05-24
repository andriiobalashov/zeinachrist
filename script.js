var rect = $('#hero-section')[0].getBoundingClientRect();
var mouse = {x: 0, y: 0, moved: false};

$("#hero-section").mousemove(function(e) {
  mouse.moved = true;
  mouse.x = e.clientX - rect.left;
  mouse.y = e.clientY - rect.top;
});
 
TweenLite.ticker.addEventListener('tick', function(){
  if (mouse.moved){    
    parallaxIt(".mockup-bg", -100);
    parallaxIt(".mockup", -30);
    parallaxIt(".mockup-star-top", -10);
    parallaxIt(".mockup-star-bottom", -10);
  }
  mouse.moved = false;
});

function parallaxIt(target, movement) {
  TweenMax.to(target, 0.5, {
    x: (mouse.x - rect.width / 2) / rect.width * movement,
    y: (mouse.y - rect.height / 2) / rect.height * movement
  });
}

$(window).on('resize scroll', function(){
  rect = $('#hero-section')[0].getBoundingClientRect();
})

jQuery(document).on('scroll', function(){
  jQuery('.moving-text-1').css("left", Math.max(100 - 0.2*window.scrollY, 1) + "vw");
})