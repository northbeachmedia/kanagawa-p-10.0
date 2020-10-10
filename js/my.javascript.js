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

/************* rick schennink plugin ****************/

// the debounce function receives our function as a parameter
const debounce = (fn) => {

  // this holds the requestAnimationFrame reference, so we can cancel it if we wish
  let frame;

  // the debounce function returns a new function that can receive a variable number of arguments
  return (...params) => {

    // if the frame variable has been defined, clear it now, and queue for next frame
    if (frame) {
      cancelAnimationFrame(frame);
    }

    // queue our function call for the next frame
    frame = requestAnimationFrame(() => {

      // call our function and pass any params we received
      fn(...params);
    });

  }
};

// reads out the scroll position and stores it in the data attribute
// so we can use it in our stylesheets
const storeScroll = () => {
  document.documentElement.dataset.scroll = window.scrollY;
}

// listen for new scroll events, here we debounce our `storeScroll` function
document.addEventListener('scroll', debounce(storeScroll), { passive: true });

// update scroll position for first time
storeScroll();
