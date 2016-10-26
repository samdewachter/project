@extends('layouts.app')


@section('content')


<script>


var myLatLng = {lat:51.223086, lng: 4.411032};
var myMarkerPos = {lat:51.253086, lng: 4.411032};
var markers = [];


function initialize()
{
  
  var mapProp = {
    center:myLatLng,
    zoom:8,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };


  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var geocoder = new google.maps.Geocoder();
  var btns = document.getElementsByClassName("adresMap");
  var btn = document.getElementById("locateall");

  for (var i=0, ilen=btns.length; i<ilen; i++)
  {

      var address = btns[i].innerHTML;
      geocodeAddress(geocoder, map, address);

  }

  
  btn.addEventListener('click', function()
  {
    for (var i=0, ilen=btns.length; i<ilen; i++)
      {
        deleteMarkers();
        var address = btns[i].innerHTML;
        geocodeAddress(geocoder, map, address);
      }
  })
      




  for (var i=0, ilen=btns.length; i<ilen; i++)
  {
    btns[i].addEventListener('click', function(event)
    {
      deleteMarkers();
      var btn = event.currentTarget;
      var address = btn.innerHTML;
      geocodeAddress(geocoder, map, address);
    });
  }

}


function setMapOnAll(map)
{
  for (var i = 0; i < markers.length; i++) {
  markers[i].setMap(map);
  }
}


function clearMarkers()
{
  setMapOnAll(null);
}


function deleteMarkers()
{
  clearMarkers();
  markers = [];
}

function geocodeAddress(geocoder, resultsMap, address)
{
  //alert(address);
  //var address = document.getElementById('address').value;
  //setMapOnAll(null);
  geocoder.geocode({'address': address},

  function(results, status)
  {

    if (status === google.maps.GeocoderStatus.OK)
    {
      resultsMap.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
      map: resultsMap,
      position: results[0].geometry.location});

      markers.push(marker);
    }

    else
    {
      alert('Geocode was not successful for the following reason: ' + status);
    }

  });
}

  google.maps.event.addDomListener(window, 'load', initialize);

</script>

<div class="container clearfix">

    <button class="locateall btn btn-primary" id="locateall">Geef alle adressen weer</button>
    
    <div class="mapExpl">
        <p>Druk op de projectnaam om het project te bekijken.</p>
        <p>Druk het adres om de locatie op de map weer te geven.</p>

        
    </div>
    <div class="projectmap-wrapper">
        <div class="projectmap">
            <ul class="slider">
                @foreach ($projects as $project)

                    <li>
                        <a class="maplink project-link" id="name_{{ $project->id }}"href="catalogs/{{ $project->id }}"><h2>{{ $project->name }}</h2></a>
                        <button class="adresMap btn btn-primary" id="address_{{ $project->id }}">{{$project->adres}}</button>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>
    <div class="map-wrapper">
        <div class="map" id="googleMap"></div>
    </div>


</div>

<!--<div class="container">
  <div class="mapExpl">
    <p>Druk op de projectnaam om het project te bekijken.</p>
    <p>Druk het adres om de locatie op de map weer te geven.</p>
  </div>
  <div class="projectmap-wrapper">
    <div class="projectmap">
      @foreach ($projects as $project)
      <h1><a class="maplink" href="catalogs/{{ $project->id }}">{{ $project->name }}</h1></a>
      <button class="adresMap btn btn-primary" id="address_{{ $project->id }}">{{$project->adres}}</button>
      <br>
      <br>
      <hr>
      @endforeach
    </div>
  </div>
  <div class="map-wrapper">
    <div class="map" id="googleMap"></div>
  </div>
</div>-->
@endsection