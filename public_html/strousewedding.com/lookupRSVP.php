<?php
	include_once 'Database.php';
	include_once 'header.php';
?>

<div class="content wrapper">
	<h1>RSVP</h1>

	<p>
		Please confirm the details on this page, in case the mailing address has changed since you received your invitation in the mail.
		Feel free to adjust this information up until Decemeber 1st, 2014 as that is the final day we can submit changes of attendance to 
		the reception event.  Thank you.
	</p>
	
	<!-- Collect information for RSVP form -->
	<?php
	$table="Guests";
	$searchid = mysql_real_escape_string($_GET['id']);
	$result = mysql_query("SELECT `guest_id`, `firstName`, `middleName`, `lastName`, `streetAddress`, `city`, `state`, `zip`, `email`, `plusOne`, `attending` FROM $table WHERE guest_id='$searchid'");
	
		{
		echo'
			<form method="post" action="confirmRSVP.php?id='. mysql_result($result, 0,0) . '">

				<label for="txtFname">First Name</label>
				<input type="text" class="required" name="txtFname" id="txtFname" value="' . mysql_result($result,0,1) .'" />

				<label for="txtLname">Last Name
				<input type="text" class="required" name="txtLname" value="' . mysql_result($result,0,3) .'" /></label>

				<label for="txtStreetAddress">Street Address
				<input type="text" class="required" name="txtStreetAddress" value="' . mysql_result($result,0,4) .'" /></label>

				<label for="txtCity">City
				<input type="text" class="required" name="txtCity" value="' . mysql_result($result,0,5) .'" /></label>

				<label for="txtState">State
				<select name="txtState">
                <option value="" selected="' . mysql_result($result,0,6) .'" disabled="true">' . mysql_result($result,0,6) .'</option>
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
                </select></label>

				<label for="txtZip">Zip
				<input type="text" class="required" name="txtZip" value="' . mysql_result($result,0,7) .'" /></label>

				<label for="txtEmail">E-mail
				<input type="text" class="required" name="txtEmail" value="' . mysql_result($result,0,8) .'" /></label>

				<label for="txtPlusOne" class="inline">Total Number Attending:
				<select name="numberAttending" class="inline">
                	<option value="" selected="' . mysql_result($result,0,9) .'" disabled="true">' . mysql_result($result,0,9) .'</option>
                	<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select></label>

				<p><strong>Attending</strong></p>

				<label for="cannotAttend">
					<input type="radio" name="radAttending" id="cannotAttend" value="cannotAttend" />Cannot Attend
				</label>
				<label for="wedding">
					<input type="radio" name="radAttending" id="wedding" value="wedding" />Wedding
				</label>
				<label for="reception">
					<input type="radio" name="radAttending" id="reception" value="reception" />Reception
				</label>
				<label for="both">
					<input type="radio" name="radAttending" id="both" value="both" />Both
				</label>

				<p><strong>Age of Attendees</strong></p>

				<label for="oneToFour" class="inline" style="width: 85px">1-4:</label>
				<select name="oneToFour" class="inline">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>

				<br />

				<label for="fourToEleven" class="inline" style="width: 85px">4-11:</label>
				<select name="fourToEleven" class="inline">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>

				<br />

				<label for="twelveAndUp" class="inline" style="width: 85px">12 and up:</label>
				<select name="twelveAndUp" class="inline">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>

				<br />

				<div class="formActions">
					<input class="btn" type="submit" value="Confirm">	
					<input class="btn" type="submit" value="Go Back" formaction="RSVP.php">
				</div>
			</form>';
		}?>


<!-- Close the whole container div -->
</div>

</body>


</HTML>