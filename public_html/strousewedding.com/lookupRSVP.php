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
	<form method="post" id="subForm" action="lookupRSVP.php">
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

	<input class="btn" type="submit" value="Search">
	</form>

	<form>
	<input class="btn" type="submit" value="Go Back" formaction="RSVP.php">
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