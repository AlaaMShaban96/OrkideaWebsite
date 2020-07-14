
var map;

function initMap() {           
              
    var latitude = 32.853375; // YOUR LATITUDE VALUE
    var longitude = 13.085025 ; // YOUR LONGITUDE VALUE
    
    var myLatLng = {lat: latitude, lng: longitude};
    
    map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 14,
      disableDoubleClickZoom: true, // disable the default map zoom on double click
    });
    
    // Update lat/long value of div when anywhere in the map is clicked    
    google.maps.event.addListener(map,'click',function(event) {                
        document.getElementById('latclicked').innerHTML = event.latLng.lat();
        document.getElementById('latclicked-x').value = event.latLng.lat();
        document.getElementById('longclicked').innerHTML =  event.latLng.lng();
        document.getElementById('longclicked-y').value =  event.latLng.lng();
        console.log();
    });
    
    // Update lat/long value of div when you move the mouse over the map
    google.maps.event.addListener(map,'mousemove',function(event) {
        document.getElementById('latmoved').innerHTML = event.latLng.lat();
        document.getElementById('longmoved').innerHTML = event.latLng.lng();
    });
            
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      //title: 'Hello World'
      
      // setting latitude & longitude as title of the marker
      // title is shown when you hover over the marker
      title: latitude + ', ' + longitude 
    });    
    
    // Update lat/long value of div when the marker is clicked
    marker.addListener('click', function(event) {              
      document.getElementById('latclicked').innerHTML = event.latLng.lat();
      document.getElementById('longclicked').innerHTML =  event.latLng.lng();
    });
    
    // Create new marker on double click event on the map
    google.maps.event.addListener(map,'dblclick',function(event) {
        var marker = new google.maps.Marker({
          position: event.latLng, 
          map: map, 
          title: event.latLng.lat()+', '+event.latLng.lng()
        });
        
        // Update lat/long value of div when the marker is clicked
        marker.addListener('click', function() {
          document.getElementById('latclicked').innerHTML = event.latLng.lat();
          document.getElementById('longclicked').innerHTML =  event.latLng.lng();
        });            
    });
    
    // Create new marker on single click event on the map
    /*google.maps.event.addListener(map,'click',function(event) {
        var marker = new google.maps.Marker({
          position: event.latLng, 
          map: map, 
          title: event.latLng.lat()+', '+event.latLng.lng()
        });                
    });*/
}
