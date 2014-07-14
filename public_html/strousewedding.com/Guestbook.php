<?php
	include 'Database.php';

	if ($_POST['action'] == 'submitGuestMessage') {
		$values = $_POST['values'];
		$table2 = mysqli_real_escape_string($connect, "Comments");
		$firstName = mysqli_real_escape_string($connect,$values[0][value]);
		$lastName = mysqli_real_escape_string($connect,$values[1][value]);
		$comments = mysqli_real_escape_string($connect,$values[2][value]);

		mysqli_query($connect, "INSERT INTO $table2 (firstName, lastName, Comments) VALUES ('$firstName','$lastName','$comments')"); 

		echo 'Success';
		exit;
	}
	/*
	if (isset($_POST['Submit']))
	{
	$table2 = mysqli_real_escape_string($connect, "Comments");
	$firstName = mysqli_real_escape_string($connect,$_POST['txtFname']);
	$lastName = mysqli_real_escape_string($connect,$_POST['txtLname']);
	$comments = mysqli_real_escape_string($connect,$_POST['txtComments']);

	mysqli_query($connect, "INSERT INTO $table2 (firstName, lastName, Comments) VALUES ('$firstName','$lastName','$comments')"); 
	}
	*/

	include_once('header.php');
?>

<!-- Open the container div -->
<div class="content wrapper">

	<h1>Guestbook</h1>

	<p>
		Feel free to leave a message in the guestbook!
	</p>

	<div>
	<form action="" method="post" name="Submit" id="guestbookEntry" class="clearfix">
		<div style="width: 48%; margin: .5em 1%; float: left;">
			<label for="txtFname">First Name:
			<input type="text" name="txtFname" id="txtFname"></label>
		</div>

		<div style="width: 48%; margin: .5em 1%; float: left;">
			<label for="txtLname">Last Name:
			<input type="text" name="txtLname" id="txtLname"></label>
		</div>

		<div style="width: 98%; margin: 0 1%;">
			<label for="txtComments">Sign the guestbook:</label>
			<textarea name="txtComments" id="txtComments" rows="8"></textarea>
		</div>

		<input class="button" type="submit" name="Submit" value="Submit">
	</form>
	</div>
	<?php

	$table = mysqli_real_escape_string($connect,"Guests");
	$table2 = mysqli_real_escape_string($connect, "Comments");

	$rows = mysqli_query($connect,"SELECT `firstName`, `lastName`, `stampDate`, `Comments` FROM $table2");

	//Put the results of query into an array
	$result = array();

	//While there are results place them into a row
	while ($row = mysqli_fetch_assoc($rows))
	{
		$result[] = $row;
	}
	?>

	<ul class="comments">
		<?php
		//Display and loop results from query
		if (count($result) > 0) { 
			foreach ($result as $key => $value)	{
				$fName = $value['firstName'];
				$lName = $value['lastName'];
				$sDate = strtotime($value['stampDate']);
				$comm = $value['Comments'];
			?>
				<li>
					<h3><?php echo $fName;?> <?php echo $lName;?> <span class="timeStamp"><?php echo date('F jS, Y', $sDate); ?></span></h3>
					<p><?php echo $comm;?></p>
				</li>
			<?php } 
		}; 
		?>
	</ul>

<!-- Close the whole container div -->
</div>

<div id="guestConfirm" class="popupContainer">
    <div class="popupContent contentItem textCI">
        <b class="closePopup"><a onclick="$('#guestConfirm').toggle();" title="Toggle Visibility">X</a></b>
        <p>Your comment has been submitted.</p>
    </div>
</div>

<?php 	
	include_once('footer.php');
?>
