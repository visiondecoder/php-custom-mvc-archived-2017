
function initMap() {
   

    var map = new google.maps.Map(document.getElementById('contact-map'), {
        zoom: 10,
        center: new google.maps.LatLng(23.874813, 90.385773),
        disableDefaultUI: true,
        styles: [
            {
                elementType: 'labels',
                stylers: [{
                    visibility: 'on'
                }]
            },
            {
                elementType: 'geometry',
                stylers: [{
                    color: '#f7f1df'
                }]
            },
            {
                featureType: 'administrative.locality',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#333333'
                }]
            },
            {
                featureType: 'poi.park',
                elementType: 'geometry',
                stylers: [{
                    color: '#f7f1df'
                }]
            },
            {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{
                    color: '#f7f1df'
                }]
            },
            {
                featureType: 'road',
                elementType: 'geometry.stroke',
                stylers: [{
                    color: '#f7f1df'
                }]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{
                    color: '#ffdf5f'
                }]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{
                    color: '#f7f1df'
                }]
            },
            {
                featureType: 'water',
                elementType: 'geometry',
                stylers: [{
                    color: '#a2daf2'
                }]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#a2daf2'
                }]
            },
            {
                "featureType": "road",
                "elementType": "labels",
                "stylers": [
                    { "visibility": "off" }
                ]
            }
        ]
    });
     marker = new google.maps.Marker({
         position: new google.maps.LatLng(23.874813, 90.385773),
         map: map,
         icon: 'img/marker.png',
         animation: google.maps.Animation.DROP,
     });
}