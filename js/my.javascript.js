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

// custom content scroller
$(document).ready(function () {
  $("#sidebar").mCustomScrollbar({
      theme: "minimal"
  });

  $('#dismiss, .overlay').on('click', function () {
      $('#sidebar').removeClass('active');
      $('.overlay').removeClass('active');
  });

  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').addClass('active');
      $('.overlay').addClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
  });
});
