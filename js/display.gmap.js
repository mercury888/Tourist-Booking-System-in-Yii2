// This example creates an interactive map which constructs a
// polyline based on user clicks. Note that the polyline only appears
// once its path property contains two LatLng coordinates.

var poly;
var map;
var markers = [];
var start,end;
var infoWindows = [];

function initialize(mapid) {

    var mapOptions = {
        zoom: 7,
        // Center the map on Kathmandu, Nepal.
        center: new google.maps.LatLng(27.7000, 85.3333)
    };
    
    map = new google.maps.Map(document.getElementById(mapid), mapOptions);
  
}
    
/**
 * Handles click events on a map, and adds a new point to the Polyline.
 * @param {google.maps.MouseEvent} event
 */
function addMarker(latitude,longitude,locationName){
    // Add a new marker.
    var marker = new google.maps.Marker({
            position  : new google.maps.LatLng(latitude,longitude),
            map       : map,
            title     : locationName,
            icon      : 'https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=' + generateLetterFromId(markers.length) + '|C82828|FFFFFF'
        });
    markers.push({name:locationName,marker:marker});
    
    marker.setMap(map);
    drawPolyline();  
    var infowindow = new google.maps.InfoWindow({ content:locationName});
    infoWindows.push(infowindow);
    google.maps.event.addListener(marker, 'click', function() {
       $.each(infoWindows,function(_,infoWindow){
            infoWindow.close();
       });
        infowindow.open(map,marker);
    });

}

/**
 * Draws the polyline that connects all the markers on the map.
 */
function drawPolyline() {
    var path = [];
    $.each(markers, function(markerId, point) {
        path.push(point.marker.getPosition());
        point.marker.setIcon('https://chart.googleapis.com/chart?chst=d_map_pin_letter&chld=' + generateLetterFromId(markerId)  + '|FF9900|000000');
    });
    
    if (poly) {
        poly.setPath(path);
    } else {
        var polyOptions = {
            strokeColor: '#000000',
            strokeOpacity: 1.0,
            strokeWeight: 3,
            //editable:true
          };
          poly = new google.maps.Polyline(polyOptions);
          poly.setMap(map);
    }
    fitBounds();
}

function generateLetterFromId(id) {
    return String.fromCharCode(65 + id);
}

function fitBounds(){
   var zoom = 8;
    if (markers.length == 0) {
        map.setZoom(zoom);
    } else if (markers.length == 1) {
        map.setCenter(markers[0].marker.getPosition());
        map.setZoom(zoom);
    } else {
        var bounds = new google.maps.LatLngBounds();
        $.each(markers, function(_, point) {
            bounds.extend(point.marker.getPosition());
        });
        map.fitBounds(bounds);
    }
}