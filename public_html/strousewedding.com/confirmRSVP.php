
<?php
	include_once 'Database.php';
	include_once 'header.php';
?>

<div class="main-wrapper">
	<?php
	$table = mysqli_real_escape_string($connect, "Guests");
	$firstName = mysqli_real_escape_string($connect,$_POST['txtFname']);
	$middleName = mysqli_real_escape_string($connect,$_POST['txtMname']);
	$lastName = mysqli_real_escape_string($connect,$_POST['txtLname']);
	$streetAddress = mysqli_real_escape_string($connect,$_POST['txtStreetAddress']);
	$city = mysqli_real_escape_string($connect,$_POST['txtCity']);
	$state = mysqli_real_escape_string($connect,$_POST['txtState']);
	$zip = mysqli_real_escape_string($connect,$_POST['txtZip']);
	$email = mysqli_real_escape_string($connect,$_POST['txtEmail']);
	$totalAttend = mysqli_real_escape_string($connect,$_POST['totalAttend']);
	$isAttend = mysqli_real_escape_string($connect,$_POST['radAttending']);
	$ageOneToFour = mysqli_real_escape_string($connect,$_POST['ageOneToFour']);
	$ageFourToEleven = mysqli_real_escape_string($connect,$_POST['ageFiveToEleven']);
	$ageElevenUp = mysqli_real_escape_string($connect,$_POST['ageTwelveUp']);
	$addGuest = mysqli_query($connect, "INSERT INTO $table (firstName, middleName, lastName, streetAddress, city, state, zip, email, totalAttend, isAttend, ageOneToFour, ageFiveToEleven, ageTwelveUp) VALUES('$firstName','$middleName','$lastName','$streetAddress','$city','$state','$zip','$email','$totalAttend','$isAttend','$ageOneToFour','$ageFiveToEleven','$ageTwelveUp')");
	?>

</div>

</body>
<<<<<<< HEAD
</HTML>
=======
</HTML>

>>>>>>> 02143cd3f42af9d8c518c3c7d81c106b244d9c64
