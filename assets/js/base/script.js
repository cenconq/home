jQuery(document).ready(function($) {

	/* Google Map */
    function initialize() {
    	var mapCanvas = document.getElementById('map-canvas');

        var mapOptions = {
        	center: new google.maps.LatLng(-35.3245810, 149.1401490),
        	zoom: 16,
        	disableDefaultUI: false,
        	streetViewControl: true,
        	mapTypeId: google.maps.MapTypeId.ROADMAP,
        	styles: [
			    {
			        "stylers": [
			            {
			                "hue": "#dd0d0d"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "elementType": "labels",
			        "stylers": [
			            {
			                "visibility": "on"
			            }
			        ]
			    },
			    {
			        "featureType": "road",
			        "elementType": "geometry",
			        "stylers": [
			            {
			                "lightness": 100
			            },
			            {
			                "visibility": "simplified"
			            }
			        ]
			    }
			]
        }

        var map = new google.maps.Map(mapCanvas, mapOptions);

		var icon = {
		    url: "/assets/images/marker.png",
		    scaledSize: new google.maps.Size(35, 51),
		    origin: new google.maps.Point(0,0),
		    anchor: new google.maps.Point(17.5, 25.5)
		};

		var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-35.3245810, 149.1401490),
            map: map,
           	icon: icon
        });
    }
    
    google.maps.event.addDomListener(window, 'load', initialize);

    /* Image slider - Get_Result Page */
    $(".search_result_gallery").royalSlider({
        keyboardNavEnabled: true,
        controlNavigation: 'none',
        loop: true,
        imageScalePadding: 0,
        minSlideOffset: 0,
        numImagesToPreload: 1
    });

    $("#get_result_gallery").royalSlider({
	    autoHeight: true,
	    arrowsNav: false,
	    fadeinLoadedSlide: false,
	    controlNavigationSpacing: 0,
	    controlNavigation: 'tabs',
	    imageScaleMode: 'none',
	    imageAlignCenter:false,
	    loop: false,
	    loopRewind: true,
	    numImagesToPreload: 6,
	    keyboardNavEnabled: true,
	    usePreloader: false
    });
});