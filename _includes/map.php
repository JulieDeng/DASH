<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Loading markers from CSV</title>
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.css' rel='stylesheet' />
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.Default.css' rel='stylesheet' />
<style>
  /*body { margin:0; padding:0; }*/
  .stylemap { position:absolute; top:0; bottom:0; width:100%; }
</style>
</head>

<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js'></script>

<div id ="maptest" class = "stylemap"></div>
 

<script>
<?php include "get_data.php" ?>

L.mapbox.accessToken = 'pk.eyJ1IjoianVsaWVkZW5nIiwiYSI6ImY5MGU3MTcwZTYyYmZjZjczMTk5MzU0NjQ3MDAyNmMyIn0.5P_srsXjYo0VfIhNHmZ56A';
var map = L.mapbox.map('maptest', 'mapbox.streets')
    .setView([-6, 15], 3);
var markerClusters = L.markerClusterGroup();
for ( var i = 0; i < markers.length; ++i ){
 
  var m = L.marker( markers[i]);
 
  markerClusters.addLayer( m );
}



map.addLayer( markerClusters );

</script>

</html>

