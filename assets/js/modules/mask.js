// Mask
window.mod.mask = function() {

	var init = function(){
		console.log('[brz] begin mask.js');
		initMasks();
	};

	var initMasks = function(){
		var masks = ['(00) 00000-0000', '(00) 0000-00009'],
		maskBehavior = function(val, e, field, options) {
			return val.length > 14 ? masks[0] : masks[1];
		};

		// Masks
		jQuery('.mask-phone').mask(maskBehavior, {onKeyPress:
			function(val, e, field, options) {
				field.mask(maskBehavior(val, e, field, options), options);
			}
		});

		jQuery('.mask-date').mask('00/00/0000');
		jQuery('.mask-cnpj').mask('00.000.000/0000-00', {reverse: true});
		jQuery('.mask-time').mask('00:00:00');
		jQuery('.mask-date-time').mask('00/00/0000 00:00:00');
		jQuery('.mask-cep').mask('00000-000');
		jQuery('.mask-phone-us').mask('(000) 000-0000');
		jQuery('.mask-cpf').mask('000.000.000-00', {reverse: true});
		jQuery('.mask-rg').mask('0.000.000', {reverse: true});
		jQuery('.mask-size').mask('0000,00', {reverse: true});
		jQuery('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
		jQuery('.mask-percent').mask('##0,00%', {reverse: true});
	};

	init();

};
