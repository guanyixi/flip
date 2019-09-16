jQuery(document).ready(function($) {
$(function() {

  //Post Types Carousels
  //5 columns
  $('.post-carousel.cards-5-columns .flex-container').slick({
    autoplay:true,
    dots:true,
    arrows: false,
    fade: false,
    speed: 1200,
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2,
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]
  });


  //Image Carousels
  //Standard - images are in same ratio.
  $('.standard-slider-one-column').slick({
    autoplay:true,
    dots:true,
    arrows: true,
    fade: true,
    speed: 1200,
  });

  $('.standard-slider-two-columns').slick({
    autoplay:true,
    dots:true,
    arrows: true,
    speed: 1200,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
    ]
  });

  $('.standard-slider-three-columns').slick({
    autoplay:true,
    dots:true,
    arrows: true,
    speed: 1200,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        }
    ]
  });

  $('.standard-slider-four-columns').slick({
    autoplay:true,
    dots:true,
    arrows: true,
    speed: 1200,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          }
        },
        {
            breakpoint: 550,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
        }
    ]
  });

  $('.standard-slider-five-columns').slick({
    autoplay:true,
    dots:true,
    arrows: true,
    speed: 1200,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
          }
        },
        {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            }
        }
    ]
  });

  $('.standard-slider-six-columns').slick({
    autoplay:true,
    dots:true,
    arrows: true,
    speed: 1200,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
          }
        },
        {
            breakpoint: 992,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            }
        }
    ]
  });


  $('.variable-width-slider').slick({
      dots:true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
  });








}); //end anonymous function
}); //end document ready
