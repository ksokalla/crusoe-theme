/*----------slick slider styles start--------*/
jQuery(document).ready(function () {
	'use strict';
	jQuery('.slidersokalla').slick({
		accessibility: true
		, adaptiveHeight: true
		, arrows: false
		, variableWidth: true
		, centerMode: true
		, centerPadding: '80px'
		, autoplay: true
		, infinite: true
		, slidesToShow: 1
		, slidesToScroll: 1
		, autoplaySpeed: 2000
		, outerEdgeLimit: false
		, placeholders: false
		, responsive: [
			{
				breakpoint: 768
				, settings: {
					arrows: false
					, centerMode: true
					, centerPadding: '40px'
					, slidesToShow: 1
				, }
    }
			, {
				breakpoint: 480
				, settings: {
					arrows: false
					, centerMode: true
					, centerPadding: '40px'
					, slidesToShow: 1
				, }
    }
  ]
	});
	/*----------slick slider styles end--------*/
	/*-----------scroll reveal start-----------*/
	window.sr = ScrollReveal().reveal('.crusoe-logo')
	sr.reveal('.crusoe-logo', {
		duration: 1000
	});
	/*-------scroll reveal end----------*/
	jQuery('br').remove();
	jQuery('p:empty').remove();
});
/*-------expandable apartment description start---*/
jQuery("#expandable").click(function () {
	jQuery("#expanded").slideToggle("slow", function () {});
});
/*-------expandable apartment description end---*/
/*-------remove header classes on resize start---*/
jQuery(window).on('resize',function(){
     if(jQuery(this).width() > 1230) {
        jQuery('div#margin-mod').addClass('header-brand-slogan');
		jQuery('div#padding-mod').addClass('header-brand-text');
	 }
     else {
        jQuery('div#margin-mod').removeClass('header-brand-slogan');
		jQuery('div#padding-mod').removeClass('header-brand-text');
	 }
});
/*-------remove header classes on resize end---*/
/*-------remove list class on resize start---*/
jQuery(window).on('resize',function(){
     if(jQuery(this).width() < 1141) {
        jQuery('ul.class-remove').removeClass('list2');
	 }
	 else {
        jQuery('ul.class-remove').addClass('list2');
	 }
});
/*-------remove list class on resize end---*/