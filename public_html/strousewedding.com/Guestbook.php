<?php 
	error_reporting(E_ALL);
	include 'Database.php';
	include_once('header.php');
?>

<!-- Open the container div -->
<div class="content wrapper">

	<h1>Guestbook</h1>

	<p>
		Feel free to leave a message in the guestbook!
	</p>

	<form action="post">
		<div>
		<label for="txtFName">First Name:
		<input type="text" name="txtFName"></label>

		<label for="txtLName">Last Name:
		<input type="text" name="txtLName"></label>
		</div>

		<div>
		<label for="txtComment">Sign the guestbook:</label>
		<textarea name="txtComments" cols="40" rows="5"></textarea>
		</div>

		<input class="button" type="submit" value="Submit">
		<input class="button" type="submit" value="Go Back">
		
 
	</form>

	<?php

	$table = mysqli_real_escape_string($connect,"Guests");
	$table2 = mysqli_real_escape_string($connect, "Comments");

	$rows = mysqli_query($connect,"SELECT $table.`guest_id`, $table.`firstName`, $table.`lastName`, $table2.`stampDate`, $table2.`Comments` FROM $table, $table2 WHERE $table.`guest_id`= $table2.`guest_id`");

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
</body>
</HTML>