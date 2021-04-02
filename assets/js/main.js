// Main
(function(window, document, $) {
	'use strict';

	window.mod = {};

	jQuery(function($){
		// Carregando os modulos
		window.mod.common = new window.mod.common();

		var bodyClasses = $('body').attr('class').split(' ');
		$.each(bodyClasses, function(key, val) {
			val = val.replace(/[-]/g, '');
//                        console.log(key + ' => ' + val);
			if (window.mod[val] !== undefined) {				 
				window.mod[val] = new window.mod[val]();
			}
		});
	});

})(window, document, jQuery);
