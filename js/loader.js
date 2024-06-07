document.documentElement.style.overflowY = 'hidden';

// $(document).ready(function() {
//   $('html').css('overflow-y', 'hidden');
// });

window.onload = function() {
  $('#loader').fadeOut(1000);
  $('html').css('overflow-y', 'scroll');
}