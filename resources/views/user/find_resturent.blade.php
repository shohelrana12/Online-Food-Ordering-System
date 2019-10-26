@extends("user.layouts.base")
@section("main")
<section id="map-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="search">
             <!-- <input id="pac-input" class="search-restaurant" type="text" placeholder="Search Box" onchange="initMap()"> -->
          </div>
          <div id="map"></div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBULAgH0vJt-Sce1kRDfw8MImLIu61IG_0&libraries=places"></script>
  
  <script type="text/javascript">
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
   
    var markers =JSON.parse({!! json_encode($markers) !!}) ;
    console.log(markers);
    var infoWindowContent =JSON.parse({!! json_encode($infowindow) !!}); 
    console.log(infoWindowContent);  
       
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(50);

    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0],
            
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
    
  </script>
@endpush