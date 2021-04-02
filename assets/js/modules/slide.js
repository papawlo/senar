// Slide
window.mod.slide = function() {

	var init = function(){
		console.log('[brz] begin slide.js');
		initSlide();
	};

	var initSlide = function(){
		jQuery('.owl-slide').owlCarousel({
			loop:true,
			nav:true,
			margin: 0,
			items:1,
			animateOut: 'fadeOut',
			navText: [
				'<span class="own-buttonLeft"><i class="Icon Icon--left-openBefore"></i></span>',
				'<span class="own-buttonRight"><i class="Icon Icon--right-openBefore"></i></span>'
			],
		});
	};

	init();

};
