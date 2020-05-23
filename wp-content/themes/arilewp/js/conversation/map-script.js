(function($){

	function homemap_init() {

		var styles = [{"featureType":"poi","elementType":"all","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":-100},{"visibility":"off"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":-100},{"visibility":"off"}]},{"featureType":"administrative","elementType":"all","stylers":[{"hue":"#000000"},{"saturation":0},{"lightness":-100},{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":-100},{"visibility":"off"}]},{"featureType":"road.local","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"transit","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":0},{"lightness":-100},{"visibility":"off"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"hue":"#000000"},{"saturation":-100},{"lightness":-100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbbbbb"},{"saturation":-100},{"lightness":26},{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"hue":"#bbbbbb"},{"saturation":-100},{"lightness":-3},{"visibility":"on"}]}];

		var mapOptions = {
			zoom: 2,
			minZoom: 2,
			scrollwheel: false,
			draggable: true,
			streetViewControl: false,
			mapTypeControlOptions: {
				mapTypeIds: [],
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			disableDefaultUI: false,
			styles: styles,
			scaleControl: true
		};

		$('#map').jMapping({
			force_zoom_level: 3,
			default_zoom_level: 3,
			category_icon_options: function( category ) {
				if (category.charAt(0).match(/[a-c]/i)){
					return new google.maps.MarkerImage( $(this).attr('data-icon') );
				} else if (category.charAt(0).match(/[d-z]/i)){
					return new google.maps.MarkerImage( $(this).attr('data-icon') );
				} else {
					return new google.maps.MarkerImage( $(this).attr('data-icon') );
				}
			},
			map_config: mapOptions
		});

	}

	$(window).on('load', function() {
		homemap_init();	
	});

})(jQuery);