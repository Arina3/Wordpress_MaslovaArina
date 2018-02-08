jQuery(document).ready(function(e) {
  jQuery('.learn-more-link').on('click', function(e){
    e.preventDefault();
    jQuery('.popup').addClass('show')
  })
  jQuery('.close-popup-link').on('click', function() {
    jQuery('.popup').removeClass('show')
  })
})