<?php 
	error_reporting(E_ALL);
	include 'Database.php';

	if ($_POST['action'] == 'submitGuestMessage') {
		$values = $_POST['values'];
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
	<form action="" method="post" name="Submit" id="guestbookEntry">
		<div>
		<label for="txtFname">First Name:
		<input type="text" name="txtFname" id="txtFname"></label>

		<label for="txtLname">Last Name:
		<input type="text" name="txtLname" id="txtLname"></label>
		</div>

		<div>
		<label for="txtComments">Sign the guestbook:</label>
		<textarea name="txtComments" id="txtComments" cols="40" rows="5"></textarea>
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

	//Display and loop results from query
	if (count($result) > 0) { 
		foreach ($result as $key => $value)	{
			$fName = $value['firstName'];
			$lName = $value['lastName'];
			$sDate = $value['stampDate'];
			$comm = $value['Comments'];

		?>
				<div class="comments">
					<table>
					<tr>
						<td>
							<?php echo $fName;?>
						</td>

						<td>
							<?php echo $lName;?>
						</td>

						<td>
							<?php echo $sDate;?>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<?php echo $comm;?>
						</td>
					</tr>
				
					</table>
				</div>
			<?php } }; ?>
			
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