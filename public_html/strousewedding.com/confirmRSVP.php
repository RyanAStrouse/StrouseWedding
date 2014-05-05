<?php
	include_once 'Database.php';
	include_once 'header.php';
?>

	<div class="main-wrapper">

	<h1>RSVP</h1>

	Lorem ipsum dolor sit amet, est atqui accumsan at, dicta debitis delicata ius cu. Eum convenire persecuti vituperatoribus ex, pri et omittam deleniti, eum ne blandit eligendi maluisset. Idque melius per te. Te mollis aliquam accommodare sit.  Mel eu fugit reformidans, mea animal saperet te. Nusquam salutatus eos ne. Eius evertitur tincidunt ei sea, te stet liber commune eum, quo et aeterno equidem percipitur. Vel suas homero no, simul feugiat probatus usu cu, ne quas altera nec. Ut tale atqui vix.  Usu ea assentior moderatius, in sapientem voluptatibus eum. Habeo eligendi referrentur has ea. Ex nec sint labitur, mei tollit tempor et. Invenire voluptatibus ex usu, nam ludus percipitur at. Soleat vivendo ex est, laudem omittam mel an, nemore interpretaris cum ut.
	<br><br>

	<!-- Collect information for RSVP form -->
	<form method="post" id="subForm" action="confirmRSVP.php">
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

		<div>
			<div>
				<label for="txtStAddress">Street Address:
				<input type="text" class="required" name="txtStAddress"></label>
			</div>
		</div>

		<div>
			<div>
				<label for="txtCity">City:
				<input type="text" class="required" name="txtCity"></label>
			</div>

			<div>
				<label for="txtState">State:
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
				</select></label>
			</div>

			<div>
				<label for="txtZip">Zip:
				<input type="text" class="required" name="txtZip" size="7"></label>
			</div>
		</div>

		<div>
			<div>
				<label for="txtEmail">E-mail:
				<input type="text" class="required" name="txtEmail"></label>
			</div>
		</div>

		<label for="txtPlusOne" class="inline">Total Number Attending:
				<select name="numberAttending" class="inline">
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

				<label for="oneToFour" class="inline" style="width: 85px">1-4:
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
				</select></label>

				<br />

				<label for="fourToEleven" class="inline" style="width: 85px">4-11:
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
				</select></label>

				<br />

				<label for="twelveAndUp" class="inline" style="width: 85px">12 and up:
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
				</select></label>

				<br />
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