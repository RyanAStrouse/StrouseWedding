
<?php

//Could also use .php page and pull it into HTML using "include_once"
Function Headconstant()
	{
		echo'<title>Best Wedding Ever!</title>
			 <link rel="stylesheet" type="text/css" href="/css/main.css"/>
			 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Allura"/>
			 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans"/>';

	}


//Navigation bar
Function MainNav()
{
	echo"<ul>

		<li><a href='index.php'><span>Welcome</span></a></li>
		<li><a href='Ceremony.php'><span>Ceremony</span></a></li>
		<li><a href='GuestInfo.php'><span>Guest Info</span></a></li>
		<li><a href='WeddingParty.php'><span>Wedding Party</span></a></li>
		<li><a href='Registry.php'><span>Registry</span></a></li>
		<li><a href='RSVP.php'><span>RSVP</span></a></li>
		<li><a href='Guestbook.php'><span>Guestbook</span></a></li>
		<li><a href='Honeymoon.php'><span>Honeymoon</span></a></li>

		</ul>";
}


?>

