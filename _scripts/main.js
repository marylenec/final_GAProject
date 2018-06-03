
function initMap() {

var styles = [ 
          {
          //   stylers: [
          //     { hue: '#00ffe6'},
          //     { saturation: -20 }
          //   ]
          // }, {
            featureType: 'road',
            elementType: 'geometry',  
            stylers: [
              { lightness:100 },
              { visibility: 'simplified' }
            ]
          }, {
              featureType: 'road',
              elementType: 'labels',
              stylers: [
                { visibility: 'off' }
              ]
          }  
        ];
               
var map = new google.maps.Map(document.getElementById('map'), {
  center: {lat: 30.0447721, lng: -96.3309825},
  zoom: 15,
  zoomControl: true,
  mapTypeControl: true,
  scaleControl: true,
  streetViewControl: true,
  rotateControl: true,
  fullscreenControl: false,
  styles: styles
});

var marker = new google.maps.Marker({
  position: {lat: 30.0447721, lng: -96.3309825},
  map: map
});
//how to console lat lng
// console.log(marker.position[1]);
}
