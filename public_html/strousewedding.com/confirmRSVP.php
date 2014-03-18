<?php
	require_once 'Template.php';
?>

<!DOCTYPE html>

<HTML>

<head>
	<!--Keep a constant header across all pages-->
	<?php
	Headconstant();
	?>	
</head>

<body>

<!-- Contain everything into a div -->
<div class="container_12">

	<!-- MENU -->
	<div id='cssmenu'>
		<?php
			MainNav();
		?>
	</div>
	<!-- END MENU -->

	<div class="main-wrapper">

	<h1>RSVP</h1>

	Lorem ipsum dolor sit amet, est atqui accumsan at, dicta debitis delicata ius cu. Eum convenire persecuti vituperatoribus ex, pri et omittam deleniti, eum ne blandit eligendi maluisset. Idque melius per te. Te mollis aliquam accommodare sit.  Mel eu fugit reformidans, mea animal saperet te. Nusquam salutatus eos ne. Eius evertitur tincidunt ei sea, te stet liber commune eum, quo et aeterno equidem percipitur. Vel suas homero no, simul feugiat probatus usu cu, ne quas altera nec. Ut tale atqui vix.  Usu ea assentior moderatius, in sapientem voluptatibus eum. Habeo eligendi referrentur has ea. Ex nec sint labitur, mei tollit tempor et. Invenire voluptatibus ex usu, nam ludus percipitur at. Soleat vivendo ex est, laudem omittam mel an, nemore interpretaris cum ut.
	<br><br>

	<!-- Collect information for RSVP form -->
	<form method="post" id="subForm" action="confirmRSVP.php">
		<div>
			<div>
				<label for="txtFname">First Name:</label>
				<input type="text" class="required" name="txtFname">
			</div>

			<div>
				<label for="txtMname">Middle Initial:</label>
				<input type="text" class="required" name="txtMname">
			</div>

			<div>
				<label for="txtLname">Last Name:</label>
				<input type="text" class="required" name="txtLname">
			</div>
		</div>

		<div>
			<div>
				<label for="txtStAddress">Street Address:</label>
				<input type="text" class="required" name="txtStAddress">
			</div>
		</div>

		<div>
			<div>
				<label for="txtCity">City:</label>
				<input type="text" class="required" name="txtCity">
			</div>

			<div>
				<label for="txtState">State:</label>
				<select name="txtState">
					<option value="" class="required" selected="selected" disabled="true">--</option>
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
				<input type="text" class="required" name="txtZip" size="7">
			</div>
		</div>

		<div>
			<div>
				<label for="txtEmail">E-mail:</label>
				<input type="text" class="required" name="txtEmail">
			</div>
		</div>

	<input class="btn" type="submit" value="Submit">
	<input class="btn" type="reset" value="Reset">

	</form>
	<!-- End collect information form -->

	Mei exerci utroque scripserit et, vis eu eligendi theophrastus reprehendunt. At mel sint decore, et vero cetero scriptorem mel. Nisl euripidis te eum, ex eros ornatus erroribus pro, mel et quas exerci elaboraret. Mutat modus zril sea ut. Congue aliquam deleniti duo ea. Mei alii error nonumy an, ex sea aliquando definitiones. No esse bonorum sea.
	<br><br>
	Ullum solet quaestio ius ex, aperiam scribentur id qui. Reque possim feugait no sea, sit quodsi convenire referrentur ne. Ad unum regione evertitur quo. Sed ad oratio vituperata. Imperdiet cotidieque delicatissimi cu nec. In pri tibique deterruisset.
	</div>

<!-- Close the whole container div -->
</div>

</body>


</HTML>