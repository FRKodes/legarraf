var myLatlng = new google.maps.LatLng(20.699776,-103.417528);
var neruda = new google.maps.LatLng(20.697196,-103.390865);
var chapalita = new google.maps.LatLng(20.708532,-103.411972);
var andares = new google.maps.LatLng(20.665309,-103.408640);
var toscana = new google.maps.LatLng(20.729280,-103.435140);
var mapOptions = {
  zoom: 12,
  center: myLatlng
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);

var marker = new google.maps.Marker({
    position: neruda,
    title:"LE GARRAF Pablo Neruda"
});

var marker_chapalita = new google.maps.Marker({
    position: chapalita,
    title:"LE GARRAF Chapalita"
});

var marker_andares = new google.maps.Marker({
    position: andares,
    title:"LE GARRAF Andares"
});

var marker_toscana = new google.maps.Marker({
    position: toscana,
    title:"LE GARRAF Toscana"
});

// To add the marker to the map, call setMap();
marker_toscana.setMap(map);
marker_andares.setMap(map);
marker_chapalita.setMap(map);
marker.setMap(map);