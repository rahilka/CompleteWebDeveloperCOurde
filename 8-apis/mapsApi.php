<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
    function initMap() {
            var skopje = {lat: 41.997346, lng: 21.427996};
            var negotino = {lat: 41.482922, lng: 22.092349};

            var map = new google.maps.Map(document.getElementById('map'), {
              center: skopje,
              scrollwheel: true,
              zoom: 7
            });

            var directionsDisplay = new google.maps.DirectionsRenderer({
              map: map
            });

            // Set destination, origin and travel mode.
            var request = {
              destination: negotino,
              origin: skopje,
              travelMode: 'DRIVING'
            };

            // Pass the directions request to the directions service.
            var directionsService = new google.maps.DirectionsService();
            directionsService.route(request, function(response, status) {
              if (status == 'OK') {
                // Display the route on the map.
                directionsDisplay.setDirections(response);
              }
            });
          }


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwH8Y7Z-glG0xApeZGJNlHGVbaboFHmfQ&callback=initMap"
    async defer></script>
  </body>
</html>
