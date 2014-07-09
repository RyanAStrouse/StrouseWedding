<?php
	include_once 'Database.php';

	if ($_POST['action'] == 'guestConfirmPop') {
		$values = $_POST['values'];

		print_r($values);

		$table = mysqli_real_escape_string($connect, "Guests");
		$firstName = mysqli_real_escape_string($connect,$values[0][value]);
		$lastName = mysqli_real_escape_string($connect,$values[1][value]);
		$streetAddress = mysqli_real_escape_string($connect,$values[2][value]);
		$city = mysqli_real_escape_string($connect,$values[3][value]);
		$state = mysqli_real_escape_string($connect,$values[4][value]);
		$zip = mysqli_real_escape_string($connect,$values[5][value]);
		$email = mysqli_real_escape_string($connect,$values[6][value]);
		$isAttend = mysqli_real_escape_string($connect,$values[7][value]);
		$ageOneToFour = mysqli_real_escape_string($connect,$values[8][value]);
		$ageFiveToEleven = mysqli_real_escape_string($connect,$values[9][value]);
		$ageTwelveUp = mysqli_real_escape_string($connect,$values[10][value]);
		$guest_id = mysqli_real_escape_string($connect,$values[11][value]);

		$totalAttend = $ageOneToFour + $ageFiveToEleven + $ageTwelveUp;

		mysqli_query($connect, "UPDATE $table SET firstName = '$firstName', lastName = '$lastName', streetAddress = '$streetAddress', city = '$city', state = '$state', zip = '$zip', email = '$email', totalAttend = '$totalAttend', isAttend = '$isAttend', ageOneToFour = '$ageOneToFour', ageFiveToEleven = '$ageFiveToEleven', ageTwelveUp = '$ageTwelveUp' WHERE guest_id = '$guest_id'");

		echo 'Success';
		exit;
		}

	include_once 'header.php';
?>

<div class="content wrapper">
	<h1>RSVP</h1>

	<p>
		Please confirm the details on this page, in case the mailing address has changed since you received your invitation in the mail.
		Feel free to adjust this information up until December 1st, 2014 as that is the final day we can submit changes of attendance to 
		the reception event.  Thank you.
	</p>
	
	<!-- Collect information for RSVP form -->
	<?php
	$searchid = mysqli_real_escape_string($connect,$_GET['id']);
	$table = "Guests";

	$result = mysqli_query($connect,"SELECT `guest_id`, `firstName`, `middleName`, `lastName`, `streetAddress`, `city`, `state`, `zip`, `email`, `totalAttend`, `isAttend`, `ageOneToFour`,`ageFiveToEleven`,`ageTwelveUp` FROM $table WHERE guest_id='$searchid'");

	while ($row = mysqli_fetch_assoc($result))
		{
	?>
			<form action="" method="post" name="Submit" id="guestConfirm" class="clearfix">

				<label for="txtFname">First Name:</label>
				<input type="text" class="required" name="txtFname" id="txtFname" value="<?php echo $row['firstName'];?>" />

				<label for="txtLname">Last Name:</label>
				<input type="text" class="required" name="txtLname" value="<?php echo $row['lastName'];?>" />

				<label for="txtStreetAddress">Street Address:</label>
				<input type="text" class="required" name="txtStreetAddress" value="<?php echo $row['streetAddress'];?>" />

				<label for="txtCity">City:</label>
				<input type="text" class="required" name="txtCity" value="<?php echo $row['city'];?>" />

				<label for="txtState">State:</label>
				<select name="txtState">
	                <option value="AL" <?php if ($row['state'] == 'AL') { echo 'selected'; } ?>>AL</option>
					<option value="AK" <?php if ($row['state'] == 'AK') { echo 'selected'; } ?>>AK</option>
					<option value="AZ" <?php if ($row['state'] == 'AZ') { echo 'selected'; } ?>>AZ</option>
					<option value="AR" <?php if ($row['state'] == 'AR') { echo 'selected'; } ?>>AR</option>
					<option value="CA" <?php if ($row['state'] == 'CA') { echo 'selected'; } ?>>CA</option>
					<option value="CO" <?php if ($row['state'] == 'CO') { echo 'selected'; } ?>>CO</option>
					<option value="CT" <?php if ($row['state'] == 'CT') { echo 'selected'; } ?>>CT</option>
					<option value="DE" <?php if ($row['state'] == 'DE') { echo 'selected'; } ?>>DE</option>
					<option value="DC" <?php if ($row['state'] == 'DC') { echo 'selected'; } ?>>DC</option>
					<option value="FL" <?php if ($row['state'] == 'FL') { echo 'selected'; } ?>>FL</option>
					<option value="GA" <?php if ($row['state'] == 'GA') { echo 'selected'; } ?>>GA</option>
					<option value="HI" <?php if ($row['state'] == 'HI') { echo 'selected'; } ?>>HI</option>
					<option value="ID" <?php if ($row['state'] == 'ID') { echo 'selected'; } ?>>ID</option>
					<option value="IL" <?php if ($row['state'] == 'IL') { echo 'selected'; } ?>>IL</option>
					<option value="IN" <?php if ($row['state'] == 'IN') { echo 'selected'; } ?>>IN</option>
					<option value="IA" <?php if ($row['state'] == 'IA') { echo 'selected'; } ?>>IA</option>
					<option value="KS" <?php if ($row['state'] == 'KS') { echo 'selected'; } ?>>KS</option>
					<option value="KY" <?php if ($row['state'] == 'KY') { echo 'selected'; } ?>>KY</option>
					<option value="LA" <?php if ($row['state'] == 'LA') { echo 'selected'; } ?>>LA</option>
					<option value="ME" <?php if ($row['state'] == 'ME') { echo 'selected'; } ?>>ME</option>
					<option value="MD" <?php if ($row['state'] == 'MD') { echo 'selected'; } ?>>MD</option>
					<option value="MA" <?php if ($row['state'] == 'MA') { echo 'selected'; } ?>>MA</option>
					<option value="MI" <?php if ($row['state'] == 'MI') { echo 'selected'; } ?>>MI</option>
					<option value="MN" <?php if ($row['state'] == 'MN') { echo 'selected'; } ?>>MN</option>
					<option value="MS" <?php if ($row['state'] == 'MS') { echo 'selected'; } ?>>MS</option>
					<option value="MO" <?php if ($row['state'] == 'MO') { echo 'selected'; } ?>>MO</option>
					<option value="MT" <?php if ($row['state'] == 'MT') { echo 'selected'; } ?>>MT</option>
					<option value="NE" <?php if ($row['state'] == 'NE') { echo 'selected'; } ?>>NE</option>
					<option value="NV" <?php if ($row['state'] == 'NV') { echo 'selected'; } ?>>NV</option>
					<option value="NH" <?php if ($row['state'] == 'NH') { echo 'selected'; } ?>>NH</option>
					<option value="NJ" <?php if ($row['state'] == 'NJ') { echo 'selected'; } ?>>NJ</option>
					<option value="NM" <?php if ($row['state'] == 'NM') { echo 'selected'; } ?>>NM</option>
					<option value="NY" <?php if ($row['state'] == 'NY') { echo 'selected'; } ?>>NY</option>
					<option value="NC" <?php if ($row['state'] == 'NC') { echo 'selected'; } ?>>NC</option>
					<option value="ND" <?php if ($row['state'] == 'ND') { echo 'selected'; } ?>>ND</option>
					<option value="OH" <?php if ($row['state'] == 'OH') { echo 'selected'; } ?>>OH</option>
					<option value="OK" <?php if ($row['state'] == 'OK') { echo 'selected'; } ?>>OK</option>
					<option value="OR" <?php if ($row['state'] == 'OR') { echo 'selected'; } ?>>OR</option>
					<option value="PA" <?php if ($row['state'] == 'PA') { echo 'selected'; } ?>>PA</option>
					<option value="RI" <?php if ($row['state'] == 'RI') { echo 'selected'; } ?>>RI</option>
					<option value="SC" <?php if ($row['state'] == 'SC') { echo 'selected'; } ?>>SC</option>
					<option value="SD" <?php if ($row['state'] == 'SD') { echo 'selected'; } ?>>SD</option>
					<option value="TN" <?php if ($row['state'] == 'TN') { echo 'selected'; } ?>>TN</option>
					<option value="TX" <?php if ($row['state'] == 'TX') { echo 'selected'; } ?>>TX</option>
					<option value="UT" <?php if ($row['state'] == 'UT') { echo 'selected'; } ?>>UT</option>
					<option value="VT" <?php if ($row['state'] == 'VT') { echo 'selected'; } ?>>VT</option>
					<option value="VA" <?php if ($row['state'] == 'VA') { echo 'selected'; } ?>>VA</option>
					<option value="WA" <?php if ($row['state'] == 'WA') { echo 'selected'; } ?>>WA</option>
					<option value="WV" <?php if ($row['state'] == 'WV') { echo 'selected'; } ?>>WV</option>
					<option value="WI" <?php if ($row['state'] == 'WI') { echo 'selected'; } ?>>WI</option>
					<option value="WY" <?php if ($row['state'] == 'WY') { echo 'selected'; } ?>>WY</option>			
                </select>

				<label for="txtZip">Zip:</label>
				<input type="text" class="required" name="txtZip" value="<?php echo $row['zip'];?>" />

				<label for="txtEmail">E-mail:</label>
				<input type="text" class="required" name="txtEmail" value="<?php echo $row['email'];?>" />

				<p><strong>Attending:</strong></p>

				<label for="cannotAttend">
					<input type="radio" name="isAttend" id="cannotAttend" value="CannotAttend" <?php if ($row['isAttend'] == 'CannotAttend') { echo 'checked'; } ?>/>Cannot Attend
				</label>
				<label for="wedding">
					<input type="radio" name="isAttend" id="wedding" value="Wedding" <?php if ($row['isAttend'] == 'Wedding') { echo 'checked'; } ?>/>Wedding
				</label>
				<label for="reception">
					<input type="radio" name="isAttend" id="reception" value="Reception" <?php if ($row['isAttend'] == 'Reception') { echo 'checked'; } ?>/>Reception
				</label>
				<label for="both">
					<input type="radio" name="isAttend" id="both" value="Both" checked <?php if ($row['isAttend'] == 'Both') { echo 'checked'; } elseif ($row['isAttend'] !== 'CannotAttend' || $row['isAttend'] !== 'Wedding' || $row['isAttend'] !== 'Reception') {echo 'checked';} ?>/>Both
				</label>

				<p><strong>Age of Attendees:</strong></p>

				<label for="ageOneToFour" class="inline" style="width: 85px">1-4:</label>
				<select name="ageOneToFour" class="inline">
					<option value="0" <?php if ($row['ageOneToFour'] == '0') { echo 'selected'; } ?>>0</option>
					<option value="1" <?php if ($row['ageOneToFour'] == '1') { echo 'selected'; } ?>>1</option>
					<option value="2" <?php if ($row['ageOneToFour'] == '2') { echo 'selected'; } ?>>2</option>
					<option value="3" <?php if ($row['ageOneToFour'] == '3') { echo 'selected'; } ?>>3</option>
					<option value="4" <?php if ($row['ageOneToFour'] == '4') { echo 'selected'; } ?>>4</option>
					<option value="5" <?php if ($row['ageOneToFour'] == '5') { echo 'selected'; } ?>>5</option>
					<option value="6" <?php if ($row['ageOneToFour'] == '6') { echo 'selected'; } ?>>6</option>
					<option value="7" <?php if ($row['ageOneToFour'] == '7') { echo 'selected'; } ?>>7</option>
					<option value="8" <?php if ($row['ageOneToFour'] == '8') { echo 'selected'; } ?>>8</option>
					<option value="9" <?php if ($row['ageOneToFour'] == '9') { echo 'selected'; } ?>>9</option>
					<option value="10"<?php if ($row['ageOneToFour'] == '10') { echo 'selected'; } ?>>10</option>
				</select>

				<br />

				<label for="ageFiveToEleven" class="inline" style="width: 85px">4-11:</label>
				<select name="ageFiveToEleven" class="inline">
					<option value="0" <?php if ($row['ageFiveToEleven'] == '0') { echo 'selected'; } ?>>0</option>
					<option value="1" <?php if ($row['ageFiveToEleven'] == '1') { echo 'selected'; } ?>>1</option>
					<option value="2" <?php if ($row['ageFiveToEleven'] == '2') { echo 'selected'; } ?>>2</option>
					<option value="3" <?php if ($row['ageFiveToEleven'] == '3') { echo 'selected'; } ?>>3</option>
					<option value="4" <?php if ($row['ageFiveToEleven'] == '4') { echo 'selected'; } ?>>4</option>
					<option value="5" <?php if ($row['ageFiveToEleven'] == '5') { echo 'selected'; } ?>>5</option>
					<option value="6" <?php if ($row['ageFiveToEleven'] == '6') { echo 'selected'; } ?>>6</option>
					<option value="7" <?php if ($row['ageFiveToEleven'] == '7') { echo 'selected'; } ?>>7</option>
					<option value="8" <?php if ($row['ageFiveToEleven'] == '8') { echo 'selected'; } ?>>8</option>
					<option value="9" <?php if ($row['ageFiveToEleven'] == '9') { echo 'selected'; } ?>>9</option>
					<option value="10"<?php if ($row['ageFiveToEleven'] == '10') { echo 'selected'; } ?>>10</option>
				</select>

				<br />

				<label for="ageTwelveUp" class="inline" style="width: 85px">12 and up:</label>
				<select name="ageTwelveUp" class="inline">
					<option value="0" <?php if ($row['ageTwelveUp'] == '0') { echo 'selected'; } ?>>0</option>
					<option value="1" <?php if ($row['ageTwelveUp'] == '1') { echo 'selected'; } ?>>1</option>
					<option value="2" <?php if ($row['ageTwelveUp'] == '2') { echo 'selected'; } ?>>2</option>
					<option value="3" <?php if ($row['ageTwelveUp'] == '3') { echo 'selected'; } ?>>3</option>
					<option value="4" <?php if ($row['ageTwelveUp'] == '4') { echo 'selected'; } ?>>4</option>
					<option value="5" <?php if ($row['ageTwelveUp'] == '5') { echo 'selected'; } ?>>5</option>
					<option value="6" <?php if ($row['ageTwelveUp'] == '6') { echo 'selected'; } ?>>6</option>
					<option value="7" <?php if ($row['ageTwelveUp'] == '7') { echo 'selected'; } ?>>7</option>
					<option value="8" <?php if ($row['ageTwelveUp'] == '8') { echo 'selected'; } ?>>8</option>
					<option value="9" <?php if ($row['ageTwelveUp'] == '9') { echo 'selected'; } ?>>9</option>
					<option value="10"<?php if ($row['ageTwelveUp'] == '10') { echo 'selected'; } ?>>10</option>
				</select>

				<br />

				<input type="hidden" name="guest_id" value="<?php echo $searchid; ?>" />

				<input class="button" type="Submit" value="Confirm">	
				<button class="button"><a href="RSVP.php">Go Back</a></button>
				
			</form>
		<?php } ?>


<!-- Close the whole container div -->
</div>

<!-- confirmation popup -->
	<div id="guestConfirmPop" class="popupContainer">
    	<div class="popupContent contentItem textCI">
	        <b class="closePopup"><a onclick="$('#guestConfirmPop').toggle();" title="Toggle Visibility">X</a></b>
	        <p>You have confirmed your RSVP, thanks!</p>
   	 	</div>
	</div>

<?php 	
	include_once('footer.php');
?>
