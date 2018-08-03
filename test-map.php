<?
/*
Template Name: test map
*/
?>

<? get_header() ?>


<div class=" third_row_contact">

    <div id="map" style="width: 100%; height: 750px;"></div>
<input id="submit" type="button" value="Reverse Geocode">

</div>

 <script type="text/javascript">
    var locations = [
      ['Polypac', 48.054196, -1.91236, 4],
      ['Test numéro 1', 48.154196, -1.91236, 3],
      ['Test numéro 2', 48.154196, -1.81236, 2],
      ['Test numéro 3', 48.151196, -1.85257, 1],
    ];

            var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 40.731, lng: -73.997}
        });
        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;

        document.getElementById('submit').addEventListener('click', function() {
          geocodeLatLng(geocoder, map, infowindow);
        });

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }


      function geocodeLatLng(geocoder, map, infowindow) {


        var latlng      = {lat: 48.054196, lng: -1.91236 };

        geocoder.geocode({'location': latlng}, function(results, status) {

          if (status === 'OK') {

            if (results[1]) {

              map.setZoom(11);
              var marker = new google.maps.Marker({
                position: latlng,
                map: map
              });

              infowindow.setContent(results[1].formatted_address);
              infowindow.open(map, marker);

            } else {

              window.alert('No results found');
            }

          } else {

            window.alert('Geocoder failed due to: ' + status);

          }

        });

      }

    document.getElementById('submit').addEventListener('click', function() {
      geocodeLatLng(geocoder, map, infowindow);
      console.log('test');
    });


  </script>

<? get_footer() ?>
