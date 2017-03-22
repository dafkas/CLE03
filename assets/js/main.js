/**
 * Created by marvin_blabla on 20-03-17.
 */
var map;
window.addEventListener('load', init);

function init()
{
    myMap();
    getPlaces();
}

function myMap() {
    var latlng = new google.maps.LatLng(51.917383,4.435506);
    map = new google.maps.Map(document.getElementById('googleMap'), {
        center: latlng,
        zoom: 17,
        scrollwheel: false
    });
}

function getPlaces()
{
    reqwest({
        url: 'includes/pages/map.php',
        contentType: 'application/json',
        success: setMarkers,
        error: errorHandler
    });
}

function errorHandler(e) {
    console.log(e);
}

function setMarkers(data) {
    var json = JSON.parse(data);
    for(var i = 0; i < json.length; i++) {
        console.log(json[i].lat)
        setMarker(json[i].lat, json[i].lng);
    }
}

function setMarker(lat, lng) {
    var latLng = new google.maps.LatLng(lat, lng);
    var marker = new google.maps.Marker({
        position: latLng,
        map: map
    });
}


