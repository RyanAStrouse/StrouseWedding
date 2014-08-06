<?php 
	include 'Database.php';
	include_once('header.php');
?>


<!-- Directions Search -->
<script>
	var directionsDisplay;
	var directionsService = new google.maps.DirectionsService();
	

function initialize() {
	directionsDisplay = new google.maps.DirectionsRenderer();
	var mapOptions = {
		zoom:7,
		center: new google.maps.LatLng(37.996, -87.543)
	};

	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	directionsDisplay.setMap(map);
	directionsDisplay.setPanel(document.getElementById('directions-panel'));

	var control = document.getElementById('control');
	control.style.display = 'block';
	map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
}

function calcRoute() {
	var start = document.getElementById('start').value;
	var end = document.getElementById('end').value;
	var request = {
		origin:start,
		destination:end,
		travelMode: google.maps.TravelMode.DRIVING
	};

	directionsService.route(request, function(response, status) {
		if (status == google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(response);
		}
	});
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>


<!-- Open the container div -->	
<div class="content wrapper">

	<h1>Ceremony</h1>

	<p>
		Information regarding the ceremony will be provided here.
	</p>

	<p>
	The wedding ceremony will take place at "Our Lady of the Greenwood church" in Greenwood, IN.
	</p>

	<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDRgAVlGoi4cJdK__in0-jvws5uvBhYSv4&q=Our+Lady+Of+The+Greenwood,Greenwood+Indiana"></iframe>

	<p>
	The reception will take place afterwards at "Jonathon Byrd's Cafeteria" down a couple blocks from the church.
	</p>
	<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?origin=Our%20Lady%20of%20the%20Greenwood%20church%2C%20South%20Meridian%20Street%2C%20Greenwood%2C%20IN%2C%20United%20States&destination=Jonathan%20Byrd's%2C%20Byrd%20Way%2C%20Greenwood%2C%20IN%2C%20United%20States&key=AIzaSyDRgAVlGoi4cJdK__in0-jvws5uvBhYSv4"></iframe>

	
	<div>
		<p>Start:<input id="start" type="textbox" value="Evansville, IN"></p>

		<p>End:<input id="end" type="textbox" value="Our Lady of the Greenwood Church, Greenwood, IN"></p>
	
		<input type="button" value="Directions" onclick="calcRoute();">
	</div>

	<div id="directions-panel"></div>
	<div id="map-canvas" style="width: 600px; height: 450px;"></div>

<!-- Close the whole container div -->
</div>

<?php 	
	include_once('footer.php');
?>
