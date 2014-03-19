<?php 

include 'Database.php';

include_once('header.php');

?>

		<div class="hero">
			<div class="slideShow wrapper">
				<div class="photoSlide"></div>
			</div>
		</div>

		<div class="content wrapper">

			<h1>Welcome!</h1>
			
			<p>Lorem ipsum dolor sit amet, est atqui accumsan at, dicta debitis delicata ius cu. Eum convenire persecuti vituperatoribus ex, pri et omittam deleniti, eum ne blandit eligendi maluisset. Idque melius per te. Te mollis aliquam accommodare sit. Mel eu fugit reformidans, mea animal saperet te. Nusquam salutatus eos ne. Eius evertitur tincidunt ei sea, te stet liber commune eum, quo et aeterno equidem percipitur. Vel suas homero no, simul feugiat probatus usu cu, ne quas altera nec. Ut tale atqui vix. Usu ea assentior moderatius, in sapientem voluptatibus eum. Habeo eligendi referrentur has ea. Ex nec sint labitur, mei tollit tempor et. Invenire voluptatibus ex usu, nam ludus percipitur at. Soleat vivendo ex est, laudem omittam mel an, nemore interpretaris cum ut.</p>

			<p>Mei exerci utroque scripserit et, vis eu eligendi theophrastus reprehendunt. At mel sint decore, et vero cetero scriptorem mel. Nisl euripidis te eum, ex eros ornatus erroribus pro, mel et quas exerci elaboraret. Mutat modus zril sea ut. Congue aliquam deleniti duo ea. Mei alii error nonumy an, ex sea aliquando definitiones. No esse bonorum sea.</p>

			<p>Ullum solet quaestio ius ex, aperiam scribentur id qui. Reque possim feugait no sea, sit quodsi convenire referrentur ne. Ad unum regione evertitur quo. Sed ad oratio vituperata. Imperdiet cotidieque delicatissimi cu nec. In pri tibique deterruisset.</p>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
		<script>
			var images = new Array();
			function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					images[i] = new Image();
					images[i].src = preload.arguments[i];
				}
			}
			preload(
				"../images/photo1.jpg",
				"../images/photo2.jpg",
				"../images/photo3.jpg",
				"../images/photo4.jpg"
			);

			var bgPath = '../images/photo';
			var img = 1;

			function swapImg() {
				$('.photoSlide').hide();
				$('.photoSlide').attr('style', 'background-image: url("' + bgPath + img + '.jpg");');
				if (img < 4) img++;
				else img = 1;
				setTimeout(function () {
					swapImg();
				}, 6000);
			}

			$(document).ready(function () {
				swapImg();
			});
		</script>

<?php include_once('footer.php'); ?>