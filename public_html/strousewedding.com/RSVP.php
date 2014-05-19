<?php 
include_once 'Database.php';
include_once 'header.php';
?>

<!-- Open container div -->
<div class="content wrapper">

	<h1>RSVP</h1>

	<p>
		On this page you will enter your first and last name, which will then check a database to pull up your information to verify details.
		This will also allow you to RSVP to the wedding and reception, and even has a spot for the number of guests you are bringing and their general age.
		The information collected will help us figure out how many people are planning to attend, and if they are in a particular age range.  The main goal
		of all of this is to help us figure out how much it will cost for the reception, and to give the place an accurate count of the number of plates needed.
	</p>

	<!-- Select the php table we will be accessing -->
	<?php
		$table = 'Guests';
	?>

	<!-- Collect information for RSVP search -->
	<form method="get">
		<div>
			<div>
				<label for="txtFname">First Name:
				<input type="text" class="required" name="txtFname"></label>
			</div>

			<div>
				<label for="txtLname">Last Name:
				<input type="text" class="required" name="txtLname"></label>
			</div>
		</div>

	<input type="submit" name ="Search" value="Search">
	</form>
	<!-- End collect information form -->
	
	<!-- Begin database search for information provided -->
	<?php

		$firstName=mysqli_real_escape_string($connect,$_GET['txtFname']);
		$middleName=mysqli_real_escape_string($connect,$_GET['txtMname']);
		$lastName=mysqli_real_escape_string($connect,$_GET['txtLname']);
		$searchid = mysqli_real_escape_string($connect,$_GET['Search']);
		$rows=mysqli_query($connect,"SELECT guest_id, middleName FROM Guests WHERE `firstName` LIKE '$firstName' AND `lastName` LIKE '$lastName'");
		$resultName = array();

		//Place results of array into a row
		while($row = mysqli_fetch_assoc($rows))
			{	
				$resultName[] = $row;
			}

		//If only one result, take them to the edit page with that results information populating fields
		if (count($resultName) == 1)
		{
			foreach ($resultName as $key => $value)
			{
				echo' <script>
					window.location = "lookupRSVP.php?id=' . $value['guest_id'] . '";
				</script>';
			}
		}
		//If more than one result, display the results as links to the names available and add their Middle Name to distinguish between
		elseif(count($resultName) > 1)
			{
			foreach ($resultName as $key => $value)
					{
						$nameSearch = "$firstName" . " " . $value['middleName'] . " " . "$lastName";
						echo '<p><a href="lookupRSVP.php?id=' . $value['guest_id'] . '">' . $nameSearch . '</a></p>';
					}
		 	}
		
	?>

<!-- Close the whole container div -->
</div>

</body>
</HTML>