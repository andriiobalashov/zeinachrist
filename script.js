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

$target1  = $(".moving-text-1").first(),
$target2  = $(".moving-text-2").first(),
$target3  = $(".moving-text-3").first(),
currentPosition1 = parseInt($target1.css("transform").split(",")[4]),
currentPosition2 = parseInt($target2.css("transform").split(",")[4]),
currentPosition2 -= 1000,
currentPosition3 = parseInt($target3.css("transform").split(",")[4]),
moveBy = function(scrolledBy){
    currentPosition1 += scrolledBy;
    currentPosition2 -= scrolledBy;
    currentPosition3 += scrolledBy;
    $target1.css("transform", "translateX(" + (currentPosition1) + "px)")
    $target2.css("transform", "translateX(" + (currentPosition2) + "px)")
    $target3.css("transform", "translateX(" + (currentPosition3) + "px)")
},
lastScrollTop = 0;

currentPosition1 = isNaN(currentPosition1) ? 0 : currentPosition1;
$(window).bind("scroll",function(e){
  var scrolledBy = $(window).scrollTop() - lastScrollTop;
  moveBy(-scrolledBy);
  lastScrollTop = $(window).scrollTop();
});

currentPosition2 = isNaN(currentPosition2) ? 0 : currentPosition2;
$(window).bind("scroll",function(e){
  var scrolledBy = $(window).scrollTop() - lastScrollTop;
  moveBy(-scrolledBy);
  lastScrollTop = $(window).scrollTop();
});

$('#about-button-1').click(function() {
  $('#about-button-1').removeClass('buttons-secondary');
  $('#about-button-1').addClass('buttons-secondary-active');
  $('#about-button-2').addClass('buttons-secondary');
  $('#about-button-2').removeClass('buttons-secondary-active');
  $('#about-button-3').addClass('buttons-secondary');
  $('#about-button-3').removeClass('buttons-secondary-active');
  $('#about-hide-text-1').removeClass('none');
  $('#about-hide-text-2').addClass('none');
  $('#about-hide-text-3').addClass('none');
});

$('#about-button-2').click(function() {
  $('#about-button-2').removeClass('buttons-secondary');
  $('#about-button-2').addClass('buttons-secondary-active');
  $('#about-button-1').addClass('buttons-secondary');
  $('#about-button-1').removeClass('buttons-secondary-active');
  $('#about-button-3').addClass('buttons-secondary');
  $('#about-button-3').removeClass('buttons-secondary-active');
  $('#about-hide-text-2').removeClass('none');
  $('#about-hide-text-1').addClass('none');
  $('#about-hide-text-3').addClass('none');
});

$('#about-button-3').click(function() {
  $('#about-button-3').removeClass('buttons-secondary');
  $('#about-button-3').addClass('buttons-secondary-active');
  $('#about-button-1').addClass('buttons-secondary');
  $('#about-button-1').removeClass('buttons-secondary-active');
  $('#about-button-2').addClass('buttons-secondary');
  $('#about-button-2').removeClass('buttons-secondary-active');
  $('#about-hide-text-3').removeClass('none');
  $('#about-hide-text-1').addClass('none');
  $('#about-hide-text-2').addClass('none');
});

