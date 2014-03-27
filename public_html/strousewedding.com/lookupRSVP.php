<?php
	include_once 'Database.php';
	include_once 'header.php';
?>

<div class="content wrapper">
	<h1>RSVP</h1>

	Lorem ipsum dolor sit amet, est atqui accumsan at, dicta debitis delicata ius cu. 
	Eum convenire persecuti vituperatoribus ex, pri et omittam deleniti, eum ne blandit eligendi maluisset. 
	Idque melius per te. Te mollis aliquam accommodare sit.  Mel eu fugit reformidans, mea animal saperet te. 
	Nusquam salutatus eos ne. Eius evertitur tincidunt ei sea, te stet liber commune eum, quo et aeterno equidem percipitur. 
	Vel suas homero no, simul feugiat probatus usu cu, ne quas altera nec. Ut tale atqui vix.  
	Usu ea assentior moderatius, in sapientem voluptatibus eum. Habeo eligendi referrentur has ea. 
	Ex nec sint labitur, mei tollit tempor et. Invenire voluptatibus ex usu, nam ludus percipitur at. 
	Soleat vivendo ex est, laudem omittam mel an, nemore interpretaris cum ut.
	<br><br>

	<!-- Collect information for RSVP form -->
	<?php
	$table="Guests";
	if(isset($_GET['guest_id']) AND !isset($_POST['txtFname']))
	{
		$searchid = mysql_real_escape_string($_GET['guest_id']);
		$result = mysql_query("SELECT `firstName`, `middleName`, `lastName`, `streetAddress`, `city`, `state`, `zip`, `email`, `plusOne`, `attending` FROM $table WHERE guest_id='$searchid'");
	}
	?>
		<form method="post" action="lookupRSVP.php?id="<?php echo $searchid; ?>" />
			<div>
				<label for="txtFname">First Name:</label>
				<input type="text" class="required" name="txtFname" value="<?php mysql_result($result,0,1); ?>" />
			</div>

			<div>
				<label for="txtMname">Middle Initial:</label>
				<input type="text" class="required" name="txtMname" value="<?php mysql_result($result,0,2); ?>" />
			</div>

			<div>
				<label for="txtLname">Last Name:</label>
				<input type="text" class="required" name="txtLname" value="<?php mysql_result($result,0,3); ?>" />
			</div>

			<div>
				<label for="txtStreetAddress">Street Address:</label>
				<input type="text" class="required" name="txtStreetAddress" value="<?php mysql_result($result,0,4); ?>" />
			</div>

			<div>
				<label for="txtCity">City:</label>
				<input type="text" class="required" name="txtCity" value="<?php mysql_result($result,0,5); ?>" />
			</div>

			<div>
				<label for="txtState">State:</label>
				<select name="txtState">
                <option value="" selected="<?php mysql_result($result,0,6); ?>" disabled="true">"<?php mysql_result($result,0,6); ?>" /></option>
	                <option value="AL">AL</option>
					<option value="AK">AK</option>
					<option value="AZ">AZ</option>
					<option value="AR">AR</option>
					<option value="CA">CA</option>
					<option value="CO">CO</option>
					<option value="CT">CT</option>
					<option value="DE">DE</option>
					<option value="DC">DC</option>
					<option value="FL">FL</option>
					<option value="GA">GA</option>
					<option value="HI">HI</option>
					<option value="ID">ID</option>
					<option value="IL">IL</option>
					<option value="IN">IN</option>
					<option value="IA">IA</option>
					<option value="KS">KS</option>
					<option value="KY">KY</option>
					<option value="LA">LA</option>
					<option value="ME">ME</option>
					<option value="MD">MD</option>
					<option value="MA">MA</option>
					<option value="MI">MI</option>
					<option value="MN">MN</option>
					<option value="MS">MS</option>
					<option value="MO">MO</option>
					<option value="MT">MT</option>
					<option value="NE">NE</option>
					<option value="NV">NV</option>
					<option value="NH">NH</option>
					<option value="NJ">NJ</option>
					<option value="NM">NM</option>
					<option value="NY">NY</option>
					<option value="NC">NC</option>
					<option value="ND">ND</option>
					<option value="OH">OH</option>
					<option value="OK">OK</option>
					<option value="OR">OR</option>
					<option value="PA">PA</option>
					<option value="RI">RI</option>
					<option value="SC">SC</option>
					<option value="SD">SD</option>
					<option value="TN">TN</option>
					<option value="TX">TX</option>
					<option value="UT">UT</option>
					<option value="VT">VT</option>
					<option value="VA">VA</option>
					<option value="WA">WA</option>
					<option value="WV">WV</option>
					<option value="WI">WI</option>
					<option value="WY">WY</option>			
                </select>
			</div>

			<div>
				<label for="txtZip">Zip:</label>
				<input type="text" class="required" name="txtZip" value="<?php mysql_result($result,0,7); ?>" />
			</div>

			<div>
				<label for="txtEmail">E-mail:</label>
				<input type="text" class="required" name="txtEmail" value="<?php mysql_result($result,0,8); ?>" />
			</div>

			<div>
				<label for="txtPlusOne">Plus One:</label>
				<input type="text" class="required" name="txtPlusOne" value="<?php mysql_result($result,0,9); ?>" />
			</div>
	
	<input class="btn" type="submit" value="Submit">	
	<input class="btn" type="submit" value="Go Back" formaction="RSVP.php">
	</form>
	<!-- End collect information form -->
	

	<!-- Edited out for now 
	<table>
	<?php
			$rows=mysql_query("SELECT * FROM $table WHERE `firstName` LIKE '$firstName' AND `middleName` LIKE '$middleName' AND `lastName` LIKE '$lastName'");
			$numrows= min(mysql_num_rows($rows),10);
			for($i=0; $i< $numrows;$i++)
			{
			echo '<tr>';
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
				echo '</tr>';
			}
	?>
	</table> -->

	Mei exerci utroque scripserit et, vis eu eligendi theophrastus reprehendunt. At mel sint decore, et vero cetero scriptorem mel. Nisl euripidis te eum, ex eros ornatus erroribus pro, mel et quas exerci elaboraret. Mutat modus zril sea ut. Congue aliquam deleniti duo ea. Mei alii error nonumy an, ex sea aliquando definitiones. No esse bonorum sea.
	<br><br>
	Ullum solet quaestio ius ex, aperiam scribentur id qui. Reque possim feugait no sea, sit quodsi convenire referrentur ne. Ad unum regione evertitur quo. Sed ad oratio vituperata. Imperdiet cotidieque delicatissimi cu nec. In pri tibique deterruisset.
	</div>

<!-- Close the whole container div -->
</div>

</body>


</HTML>