<?php 
include 'Database.php';
include_once('header.php');
?>
		<div class="hero">
			<div class="slideShow wrapper">
				<img src="images/ringClose.jpg" alt="Ryan and Stephanie" />
			</div>
		</div>

		<div class="content wrapper clearfix">

			<h1>Welcome!</h1>
			<img src="images/happyCouple.jpg" alt="Ryan and Stephanie" class="framed" />
			<p>
				This website is dedicated to the wedding of Ryan Strouse and Stephanie Durbin.  
				Thank you for joining us for this once-in-a-lifetime occasion.  You will find out all the information regarding
				the upcoming ceremony, reception, registries, wedding party, how to RSVP, honeymoon plans, 
				and things to do in Indy if you are traveling.  Can't wait to see you all there!
			</p>
		</div>

		<script>
		/*
			var images = new Array();
			function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					images[i] = new Image();
					images[i].src = preload.arguments[i];
				}
			}
			preload(
				"../images/photo1.jpg",
				"../images/photo2.jpg",
				"../images/photo3.jpg",
				"../images/photo4.jpg"
			);

			var bgPath = '../images/photo';
			var img = 1;

			function swapImg() {
				$('.photoSlide').hide();
				$('.photoSlide').attr('style', 'background-image: url("' + bgPath + img + '.jpg");');
				if (img < 4) img++;
				else img = 1;
				setTimeout(function () {
					swapImg();
				}, 6000);
			}

			$(document).ready(function () {
				swapImg();
			});
*/
		</script>

<?php include_once('footer.php'); ?>