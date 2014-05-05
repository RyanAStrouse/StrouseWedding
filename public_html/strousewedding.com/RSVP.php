<?php 
include_once 'Database.php';
include_once 'header.php';
?>
	<div class="content wrapper">
	<h1>RSVP</h1>

	<p>On this page you will enter your first and last name, which will then check a database to pull up your information to verify details.
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
		
		$firstName=mysql_real_escape_string($_GET['txtFname']);
		$lastName=mysql_real_escape_string($_GET['txtLname']);
		$searchid = mysql_real_escape_string($_GET['Search']);
		$rows=mysql_query("SELECT * FROM $table WHERE `firstName` LIKE '$firstName' AND `lastName` LIKE '$lastName'");
		$numrows = min(mysql_num_rows($rows),10);
		while ($row = mysql_fetch_assoc($rows))
		{
			$middleName=$row["middleName"];
		}	
		$nameSearch = "$firstName" . " " . "$middleName" . " " . "$lastName";
		for($i=0; $i< $numrows;$i++)
			{
				echo '<td><a href="lookupRSVP.php?id=' . mysql_result($rows,$i,'guest_id') . '">' . $nameSearch . '</a></td>';
			}
		
	?>

<!-- Close the whole container div -->
</div>
</body>
</HTML>