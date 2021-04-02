// Maps
window.mod.maps = function() {

	var that = this;
	var map;
	var openWindow = [];
	var info = [];

	var init = function() {
		console.log('[brz] begin maps.js');
		loadScript();
	};

	var loadMarkers = function(data){
		for(k in data) {
			var point = new google.maps.LatLng(data[k].coord[0],data[k].coord[1]);
			var marker = new google.maps.Marker({
				map: map,
				position: point,
				icon: new google.maps.MarkerImage(data[k].marker, null, null, null, new google.maps.Size(100,100))
			});
			var content = [
			'<b>',
			data[k].nome,
			'</b><br>',
			data[k].endereco
			].join('');

			markerClick(marker, content);
		}
	};

	var loadScript = function() {
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&' +
		'callback=mod.maps.loadMap';
		document.body.appendChild(script);
	};

	var markerClick = function(marker, content) {
		var infowindow = new google.maps.InfoWindow({
			content: content
		});

		google.maps.event.addListener(marker, 'click', function() {
			map.panTo(marker.getPosition());

			if(typeof openWindow[0] !== 'undefined')
				openWindow[0].close();
			openWindow.pop();

			infowindow.open(map,marker);
			openWindow.push(infowindow);
		});

		google.maps.event.addListener(infowindow, 'closeclick', function(){
			map.panTo(new google.maps.LatLng(info[0].coord[0], info[0].coord[1]));
		});
	};

	this.loadMap = function() {
		// console.log('loading google maps');
		var infoData = {
			nome: $('#map-canvas').data('name'),
			endereco: $('#map-canvas').data('address'),
			coord: [parseFloat($('#map-canvas').data('lat')), parseFloat($('#map-canvas').data('lng'))],
			marker: $('#map-canvas').data('marker')
		};
		info.push(infoData);
		var mapCenter = new google.maps.LatLng(info[0].coord[0], info[0].coord[1])
		var mapOptions = {
			zoom: 18,
			center: mapCenter,
			scrollwheel: false
		};

		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		loadMarkers(info);
	};

	init();

};
