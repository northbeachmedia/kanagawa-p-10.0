// enable tooltips everywhere
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

// remove empty p tags in editor
$('p:empty').remove();

// enable imagesloaded
$('.pre-loader').imagesLoaded( function() {
  $("#loader-wrapper").fadeOut().hide(1000);
});

// toggle animation in hamburger menu
$('.btn-menu').on('click', function() {
    $('body').toggleClass('menu-open');
});

// instantiating clipboard.js
 var clipboard = new ClipboardJS('.clipboard');
 clipboard.on('success', function(e) {
     console.log('Success');
 });
 clipboard.on('error', function(e) {
     console.log('Error');
 });

// initialize masonry with jquery
$('.grid').masonry({
  // options
  itemSelector: '.grid-item',
});
