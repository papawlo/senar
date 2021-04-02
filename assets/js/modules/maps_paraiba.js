// Maps Paraiba
window.mod.maps_paraiba = function() {

	var init = function() {
		console.log('[brz] begin maps_paraiba.js');
		initMapParaiba();
	};

	var initMapParaiba = function() {

		$.get($('.lt-map .lt-map-content').data('cidades'), function(data) {
			var options = $("#cidade");
			$.each(data, function() {
				options.append($("<option />").val(this.name).text(this.name));
			});
		});

		var url = $('.lt-map .lt-map-content .map-image').attr('src');

		$('.lt-map .lt-map-content .map-image').remove();
		$('.close-lt-map-widget').on('click', function() {
			$('g.city').each(function() {
				if (cidades_com_sinal.indexOf($(this).attr("id")) > -1) {
					$(this).find('path').css('fill', '#e8e8e8');
				} else {
					$(this).find('path').css('fill', '');
				}
			});
			$('.lt-map-widget').fadeOut();
		})

		$('.lt-map .lt-map-content').load(url, null, function() {
			$(this).find('g.city').each(function() {

				if (cidades_com_sinal.indexOf($(this).attr("id")) > -1) {
					$(this).find('path').css('fill', '#e8e8e8');
				}

				$(this).on('click', function() {
					var id = $(this).attr('id');

					var top = $(this).offset().top - 100;
					var left = $(this).offset().left;

					$('g.city').each(function() {
						$(this).find('path').css('fill', '');
					});

					$(this).find('path').css('fill', '#b5db8b');

					$.get($('.lt-map .lt-map-content').data('cidades'), function(data) {
						for (var i in data) {
							if (id === i) {
								if (left > 600) {
									$('.lt-map-widget').css({
										top: top - 20,
										left: left - 200
									});

									$('.lt-map-widget').addClass('right');
								} else {
									$('.lt-map-widget').css({
										top: top,
										left: left
									});

									$('.lt-map-widget').removeClass('right');
								}

								$('.lt-map-widget').fadeIn();
								$('.g-city-name').html(data[i].name);
								$('.g-city-population b').html(data[i].population);
							}
						}
					});
				});
			});
		});

	};

	init();

};

