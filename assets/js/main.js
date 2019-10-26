function initMap() {
    var map;
    var nlatitude ;
    var nlongitude;
    var ntitle;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
        center: {lat: 23.777176, lng: 90.399452},
        zoom: 13,
    };

    // Multiple markers location, latitude, and longitude
    var markers = [
            ["Daffodil","23.75400338779741","90.37662414510964"],
            ["Rapa Plaza","23.75552308629466","90.37550465426733"],
            ["BTI Tower","23.757283","90.389993"],
            ["Tejgaon Police Station","23.761447","90.389757"],
    ];
                        
    // Info window content
    var infoWindowContent = [
            [
             '<div class="info_content">' +
             '<h3>Daffodil International University</h3>' +
             '<p>University</p>' + '</div>'
           ],
           [
             '<div class="info_content">' +
             '<h3>Rapa Plaza</h3>' +
             '<p>Shopping MAll</p>' + '</div>'
           ],
           [
             '<div class="info_content">' +
             '<h3>BTI Tower, Green Road</h3>' +
             '<p> Lalmatia, Dhaka</p>' + '</div>'
           ],
           [
             '<div class="info_content">' +
             '<h3>1215, Bangladesh</h3>' +
             '<p>Sher-E-Bangla Nagar, Dhaka</p>' + '</div>'
           ]
    ];
       

    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(50);

    var input = document.getElementById('pac-input');
    var autocomplete = new google.maps.places.Autocomplete(input);

    
    if(input.value.length !=0){
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var searchplace = autocomplete.getPlace();
                ntitle = searchplace.name;
                nlatitude = searchplace.geometry.location.lat();
                nlongitude = searchplace.geometry.location.lng();
        });
        service = new google.maps.places.PlacesService(map);
        service.nearbySearch(request);
    }

    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Add info window to marker    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
    });
    
}

// Load initialize function
google.maps.event.addDomListener(window, 'load', initMap);