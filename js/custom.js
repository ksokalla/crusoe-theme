jQuery(document).ready(function () {
    'use strict';
  	jQuery('.slidersokalla').slick({
		accessibility: true,
		adaptiveHeight: false,
		arrows: false,
		variableWidth: true,
		centerMode: true,
		centerPadding: '80px',
		autoplay: true,
		infinite: true,
		slidesToShow: 1,
  		slidesToScroll: 1,
		autoplaySpeed: 2000,
		responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1,
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1,
      }
    }
  ]
		
	});
    /*-----------scroll reveal-----------*/
	
	window.sr = ScrollReveal().reveal('#crusoe-logo')
	
	sr.reveal('#crusoe-logo', {duration: 1000});

	
/*-------scroll reveal end----------*/
});

