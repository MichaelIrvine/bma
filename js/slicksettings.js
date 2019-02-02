jQuery(document).ready(function($) {
  $(".slick-gallery").slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000, // speed is in milliseconds
    speed: 300,
    adaptiveHeight: false,
    fade: true,
    arrows: false,
    
  });
});

// jQuery(document).ready(function($) {
//   $(".slick-gallery").slick()});