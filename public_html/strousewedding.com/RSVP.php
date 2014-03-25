<?php 
include_once 'Database.php';
include_once 'header.php';
?>
	<div class="content wrapper">
	<h1>RSVP</h1>

	Lorem ipsum dolor sit amet, est atqui accumsan at, dicta debitis delicata ius cu. Eum convenire persecuti vituperatoribus ex, pri et omittam deleniti, eum ne blandit eligendi maluisset. Idque melius per te. Te mollis aliquam accommodare sit.  Mel eu fugit reformidans, mea animal saperet te. Nusquam salutatus eos ne. Eius evertitur tincidunt ei sea, te stet liber commune eum, quo et aeterno equidem percipitur. Vel suas homero no, simul feugiat probatus usu cu, ne quas altera nec. Ut tale atqui vix.  Usu ea assentior moderatius, in sapientem voluptatibus eum. Habeo eligendi referrentur has ea. Ex nec sint labitur, mei tollit tempor et. Invenire voluptatibus ex usu, nam ludus percipitur at. Soleat vivendo ex est, laudem omittam mel an, nemore interpretaris cum ut.
	<br><br>

	<!-- Select the php table we will be accessing -->
	<?php
		$table = 'Guests';
	?>

	<!-- Collect information for RSVP form -->
	<form method="get">
		<div>
			<div>
				<label for="txtFname">First Name:</label>
				<input type="text" class="required" name="txtFname">
			</div>

			<div>
				<label for="txtMname">Middle Name:</label>
				<input type="text" class="required" name="txtMname">
			</div>

			<div>
				<label for="txtLname">Last Name:</label>
				<input type="text" class="required" name="txtLname">
			</div>
		</div>

	<input class="btn" type="submit" name ="Search" value="Search">
	</form>
	<!-- End collect information form -->

	<!-- Begin database search for information provided -->
	<?php
		{
		$firstName=mysql_real_escape_string($_GET['txtFname']);
		$middleName=mysql_real_escape_string($_GET['txtMname']);
		$lastName=mysql_real_escape_string($_GET['txtLname']);
		$searchid = mysql_real_escape_string($_GET['Search']);
		$rows=mysql_query("SELECT * FROM $table WHERE `firstName` LIKE '$firstName' AND `middleName` LIKE '$middleName' AND `lastName` LIKE '$lastName'");
		/* $result = mysql_query("SELECT `firstName`, `middleName`, `lastName`, `streetAddress`, `city`, `state`, `zip`, `email`, `plusOne`, `attending` FROM $table WHERE guest_id='$searchid'");
		while($rows = mysql_fetch_array($result, mysql_assoc))
			{
				$name = $rows["$txtFname" AND "$txtMname" AND "$txtLname"];
				$id = $rows["guest_id"];
			}

			echo '<a href="lookupRSVP.php?id=' . mysql_result($rows,$i,'guest_id') . '">$name</a>';)*/
		}
	?>

	<!-- Display results in a div (edited out for now) -->
	<div>
	<table>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Street Address</th>
			<th>City</th>
			<th>State</th>
			<th>Zip</th>
			<th>E-mail</th>
			<th>+1's</th>
			<th>Attending</th>
		</tr>


		<!--Grab the data from the table in database -->
		<?php
			$firstName=mysql_real_escape_string($_GET['txtFname']);
			$middleName=mysql_real_escape_string($_GET['txtMname']);
			$lastName=mysql_real_escape_string($_GET['txtLname']); 
			$rows=mysql_query("SELECT * FROM $table WHERE `firstName` LIKE '$firstName' AND `middleName` LIKE '$middleName' AND `lastName` LIKE '$lastName'");
			$numrows= min(mysql_num_rows($rows),10);
			$nameSearch = "$firstName" . " " . "$middleName" . " " . "$lastName";
			for($i=0; $i< $numrows;$i++)
			{

				echo '<td><a href="lookupRSVP.php?id=' . mysql_result($rows,$i,'guest_id') . '">' . $nameSearch . '</a></td>';
				/*echo '<tr>';
				echo '<td>' . mysql_result($rows,$i,'guest_id') . '</td>';
				echo '<td>' . mysql_result($rows,$i,'firstName') . '</td>';
				echo '<td>' . mysql_result($rows,$i,'middleName') . '</td>';
				echo '<td>' . mysql_result($rows,$i,'lastName') . '</td>';
				echo '<td>' . mysql_result($rows,$i,'streetAddress') . '</td>';
				echo '<td>' . mysql_result($rows,$i,'city') . '</td>';
				echo '<td>' . mysql_result($rows,$i,'state') . '</td>';
				echo '<td>' . mysql_result($rows,$i,'zip') . '</td>';
				echo '<td>' . mysql_result($rows,$i,'email') . '</td>';
				echo '<td>' . mysql_result($rows,$i,'plusOne') . '</td>';
				echo '<td>' . mysql_result($rows,$i,'attending') . '</td>';
				echo '</tr>';*/
			}
		?>
	</table>
	</div>
	

	</br>
	Mei exerci utroque scripserit et, vis eu eligendi theophrastus reprehendunt. At mel sint decore, et vero cetero scriptorem mel. Nisl euripidis te eum, ex eros ornatus erroribus pro, mel et quas exerci elaboraret. Mutat modus zril sea ut. Congue aliquam deleniti duo ea. Mei alii error nonumy an, ex sea aliquando definitiones. No esse bonorum sea.
	<br><br>
	Ullum solet quaestio ius ex, aperiam scribentur id qui. Reque possim feugait no sea, sit quodsi convenire referrentur ne. Ad unum regione evertitur quo. Sed ad oratio vituperata. Imperdiet cotidieque delicatissimi cu nec. In pri tibique deterruisset.
	</div>

<!-- Close the whole container div -->
</div>

</body>


</HTML>