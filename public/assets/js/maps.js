$(document).ready(function() 
{
// Google Maps

map = new google.maps.Map(document.getElementById('map-canvas'), {
	center: {lat: 48.85, lng: 2.35},
	zoom: 5
});

var marker = new google.maps.Marker({
	position: {lat: 48.85, lng: 2.35},
	map: map,
	draggable: true
});

var input = document.getElementById('searchmap');
var searchBox = new google.maps.places.SearchBox(input);
map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

google.maps.event.addListener(searchBox,'places_changed',function() {
	var places = searchBox.getPlaces();
	var bounds = new google.maps.LatLngBounds();
	var i, place;
	for(i=0;place=places[i];i++) {
		bounds.extend(place.geometry.location);
		marker.setPosition(place.geometry.location);
	}
	map.fitBounds(bounds);
	map.setZoom(8);

});

google.maps.event.addListener(marker,'position_changed',function() {
	var lat = marker.getPosition().lat();
	var lng = marker.getPosition().lng();

	$('#lat').val(lat);
	$('#lng').val(lng);
});


$("form").bind("keypress", function (e) {
    if (e.keyCode == 13) {
        $("#searchmap").attr('value');
        //add more buttons here
        return false;
    }
});

});