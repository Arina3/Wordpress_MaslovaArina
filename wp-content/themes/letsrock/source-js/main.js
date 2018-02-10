jQuery(document).ready(function(e) {
  jQuery('.learn-more-link').on('click', function(e){
    e.preventDefault();
    jQuery('.popup').addClass('show')
  })
  jQuery('.close-popup-link').on('click', function() {
    jQuery('.popup').removeClass('show')
  })

  jQuery('.flexslider').flexslider({
    animation: "slide",
    controlsContainer: ".flexslider",
    controlNav: false,
    directionNav: false,
    slideshowSpeed: 4000,
  })

  jQuery('.flexslider2').flexslider({
    animation: "slide",
    directionNav: true,
    controlsContainer: ".flexslider2",
    controlNav: false,
    itemWidth: 380,
    itemMargin: 20,
    customDirectionNav: jQuery(".custom-arrows-introducing a"),
  })

  jQuery('.flexslider3').flexslider({
    animation: "slide",
    controlsContainer: ".flexslider3",
    controlNav: false,
    directionNav: true,
    maxItems: 1,
    customDirectionNav: jQuery(".custom-arrows-video a"),
  })
})