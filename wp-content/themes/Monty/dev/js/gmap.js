function initialize() {
    var map_canvas = document.getElementById( 'map_canvas' );

    var myLatlng = new google.maps.LatLng( 51.5800532, -0.3339417 );

    var map_options = {
        center: myLatlng,
        zoom: 16,
        panControl: false,
        zoomControl: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map( map_canvas, map_options );

    // Place a draggable marker on the map
    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        animation: google.maps.Animation.DROP,
        title: "MONTY ENGLISH LANGUAGE SCHOOL",
        icon: 'http://www.montyenglish.co.uk/wp-content/themes/Monty/images/office-building.png'
    });

    var contentString = 
        '<div id="gMap_infoWindow">'+
          '<h1>Monty English Language School</h1>'+
          '<p>348-350 Station Road</p>' +
          '<p>Harrow-on-the-Hill</p>' +
          '<p>London</p>' +
          '<p>HA1 2DR</p>' +
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    function toggleBounce() {
        if ( marker.getAnimation() !== null ) {
            marker.setAnimation( null );
            infowindow.open( map, marker );
        } 
        else {
            marker.setAnimation( google.maps.Animation.BOUNCE );
            infowindow.close();
      }
    }

    marker.setMap( map );
    marker.setAnimation( google.maps.Animation.BOUNCE );
    google.maps.event.addListener( marker, 'click', toggleBounce );
}

google.maps.event.addDomListener( window, 'load', initialize );