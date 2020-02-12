<script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('mapa-servicios'), {
          zoom: 5,
          center: {lat: 41.702140, lng: -2.390367}
          
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }

      var locations = [
        {lat: 38.190964, lng: -0.552841}, // Pola
        {lat: 38.195854, lng: -0.562425}, // Santa Pola
        {lat: 38.357407, lng: -0.492582}, // Alicante
        {lat: 38.268376, lng: -0.703983}, // Elche
        {lat: 38.271678, lng: -0.686045}, // Elche
        {lat: 37.986422, lng: -0.668793}, //Torrevieja
        {lat: 38.536082, lng: -0.124626}, //Benidorm
        {lat: 38.399931, lng: -0.437393}, //San Juan de Alicante
        {lat: 38.347580, lng: -0.767369} // Aspe
      ]
    </script>
    <!-- Replace following script src -->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclustererplus@4.0.1.min.js">
    </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1kkYqANDKDB7qmDhFmHE2C1IkC_BfVHk&callback=initMap" type="text/javascript"></script>