<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" itemscope itemtype="http://schema.org/Article"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" itemscope itemtype="http://schema.org/Article"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" itemscope itemtype="http://schema.org/Article"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" itemscope itemtype="http://schema.org/Article"> <!--<![endif]-->
	<head>

		<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet prefetch' type='text/css'>-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<link rel="stylesheet" href="css/normalize.min.css">
		<link rel="stylesheet" href="css/main.css">
		

		<link rel="stylesheet prefetch" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
		<link rel="stylesheet prefetch" type="text/css" href="http://fonts.googleapis.com/css?family=Allura">
		<script src="js/prefixfree.min.js"></script>

		<!--[if lt IE 9]>
			<script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
		<![endif]-->

		<!--[if gte IE 9]>
		  <style type="text/css">
		    .gradient {
		       filter: none;
		    }
		  </style>
		<![endif]-->
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<header class="siteHeader">
			<div class="branding">
				<div class="wrapper clearfix">
					<img class="logo" src="images/logo.png" />
					<span id="countdown"></span>
					<script>
					// Set the target date
					var target_date = new Date("Dec 13, 2014").setHours(14);

					// Create variables for time units
					var months, days, hours, minutes, seconds;

					//get tag element
					var countdown = document.getElementById("countdown");

					setInterval(function () {
  					//find amount of seconds between now and target
  					var current_date = new Date().getTime();
  					var seconds_left = (target_date - current_date) / 1000;
                    
  					days = parseInt(seconds_left / 86400);
  					seconds_left = seconds_left % 86400;
  
  					hours = parseInt(seconds_left / 3600);
  					seconds_left = seconds_left % 3600;
  
  					minutes = parseInt(seconds_left / 60);
  					seconds = parseInt(seconds_left % 60);
  
  					//format
  					// countdown.innerHTML = days + "d, " + hours + "h, " + minutes + "m, " + seconds + "s";
  					countdown.innerHTML = days + " DAYS LEFT";
					}, 1000);
					</script>
				</div>
			</div>
			<nav class="siteNav wrapper clearfix">
				<ul class="clearfix">
					<li><a href="index.php">Welcome</a></li>
					<li><a href="Ceremony.php">Ceremony</a></li>
					<li><a href="GuestInfo.php">Guest Info</a></li>
					<li><a href="WeddingParty.php">Wedding Party</a></li>
					<li><a href="Registry.php">Registry</a></li>
					<li><a href="RSVP.php">RSVP</a></li>
					<li><a href="Guestbook.php">Guestbook</a></li>
					<li><a href="Honeymoon.php">Honeymoon</a></li>
				</ul>
			</nav>
		</header>