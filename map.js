function initMap() {
  // The location of Uluru
  var benjis = {lat: 46.2428, lng: -119.136};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 17, center: benjis});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: benjis, map: map});
}
