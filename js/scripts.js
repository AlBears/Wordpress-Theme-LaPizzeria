$ = jQuery.noConflict();

$(document).ready(function(){

  //menu button
  $('.mobile-menu a').on('click', function(){
    $('nav.site-nav').toggle('slow');
  });

  //show mobile menu
  var breakpoint = 768;
  $(window).resize(function(){
    boxAjustment();
    if($(document).width() >= breakpoint) {
      $('nav.site-nav').show();
    } else {
      $('nav.site-nav').hide();
    }
  });
  boxAjustment();

  //Fluidbox Plugin

  $('.gallery a').each(function() {
    $(this).attr({ 'data-fluidbox': '' });
  });

  if($('[data-fluidbox]').length > 0) {
    $('[data-fluidbox]').fluidbox();
  }
});
//Adapt the hight of images to the div element
function boxAjustment() {
  var images = $('.box-image');

  if (images.length > 0) {
    var imagesHeight = images[0].height,
        boxes = $('.content-box');

    $(boxes).each(function(i, element) {
      $(element).css({'height': imagesHeight + 'px'});
    });
  }
}
