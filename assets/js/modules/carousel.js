// Carousel
window.mod.carousel = function() {

	var init = function(){
		console.log('[brz] begin carousel.js');
		initCarousel();
	};

	var initCarousel = function(){
		jQuery('.owl-carousel').owlCarousel({
			loop:true,
			nav:true,
			margin: 30,
			navText: [
				'<span class="own-buttonLeft">Voltar</span>',
				'<span class="own-buttonRight">Próximo</span>'
			],
			responsive:{
				0:{
					items:1,
					nav:true
				},
				768:{
					items:2,
					nav:false
				},
				1200:{
					items:3,
					nav:true,
					loop:false
				}
			}
		});
	};

	init();

};
