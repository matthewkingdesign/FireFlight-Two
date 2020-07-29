// This is the script for Janes Site
$(document).ready(function(){


});
//check window load works. Not sure yet as to why this is important
$(window).on('load', function() {
  console.log('hello window');
  var $imgWidth = $('#paintingPostImg').width();
  console.log($imgWidth);
    // base width of nav bar on the width of the img
  $('.paintingPostPrevNext').css('width', $imgWidth);
  var $imgHeight = $('#paintingPostImg').height();
  console.log($imgHeight);
  var mq = window.matchMedia( "(max-width: 1000px)" );
  if (mq.matches) {
    console.log("helllllo there");
    $('.leftContent').css('margin-top', $imgHeight + 50);
  }
});
