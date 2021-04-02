// Common
window.mod.common = function() {

	// Scope
	var that = this;

	var init = function() {
		console.log('[brz] begin common.js');
		initBackToTop();
		initCalendar();
		newsletterBehavior();
		window.mod['mask'] = new window.mod['mask']();
	};

	var initCalendar = function() {
		jQuery('.datepicker').datepicker();
	};

	var initBackToTop = function() {
		jQuery('.Button--backToTop').click(function() {
			console.log('[brz] click backToTop');
			$('html, body').animate(
					{scrollTop: 0},
					'2000'
				);
		});
	};

	var newsletterBehavior = function() {
		console.log('[brz] newsletterBehavior()');
		jQuery('.Newsletter-title').on('click', function() {
			$(this).toggleClass('Icon--down-openAfter').toggleClass('Icon--up-openAfter');
			$('.Newsletter-description, .Newsletter-email, .Newsletter-send').toggleClass('is-visible');
		});
	};

	init();

};

