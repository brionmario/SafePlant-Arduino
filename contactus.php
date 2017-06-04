<!--Developed by, 

▀▀█▀▀ ▒█▀▀▀ ░█▀▀█ ▒█▀▄▀█ 　 ▒█▀▀▀█ ▒█▀▀█ ▒█▀▀▀█ ▒█▀▀█ ▒█▀▀█ ▀█▀ ▒█▀▀▀█ ▒█▄░▒█ 
░▒█░░ ▒█▀▀▀ ▒█▄▄█ ▒█▒█▒█ 　 ░▀▀▀▄▄ ▒█░░░ ▒█░░▒█ ▒█▄▄▀ ▒█▄▄█ ▒█░ ▒█░░▒█ ▒█▒█▒█ 
░▒█░░ ▒█▄▄▄ ▒█░▒█ ▒█░░▒█ 　 ▒█▄▄▄█ ▒█▄▄█ ▒█▄▄▄█ ▒█░▒█ ▒█░░░ ▄█▄ ▒█▄▄▄█ ▒█░░▀█ 

© Aparecium Labs-->


<!DOCTYPE html>

<!--Database Connection-->
<?php 
	include_once("config/connection_safeplant/db_connect.php");	
?>
<html lang="en" class="no-js">

<head>

	<base href=""/>

	<!-- Basic Page Needs================================================== -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="icon" type="image/png" href="images/favicon.png">

	<title>Contact Us | Safe Plant</title>

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas================================================== -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone=no">

	<!-- Web Font============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">

	<!-- CSS================================================== -->
	<!-- Theme Color============================================= -->
	<link rel="stylesheet" id="color" href="css/red.css">

	<!-- Medicom Style============================================= -->
	<link rel="stylesheet" href="css/medicom.css">

	<!-- Bootstrap============================================= -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Theme Color============================================= -->
	<link href="css/light.css" rel="stylesheet" id="choose-theme">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->

	<!-- Header Scripts================================================== -->
	<script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body class="fixed-header">


	<!-- Document Wrapper============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header============================================= -->
		<header id="header" class="medicom-header medical-nav">

			<!-- Top Row============================================= -->
			<div class="solid-row" style="background-color:#e54242"></div>
			<div class="container">

				<!--Navigation bar begining-->
				<?php include_once("navigation-bar.php"); ?>
				<!--End of navigation bar-->

			</div>
		</header>

		<!-- Sub Page Banner============================================= -->

		<section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
			<div class="container">
				<h1 class="entry-title">Contact Us</h1>
				<p>We love feedback. Please drop us a message or call us if you have any issues.</p>
			</div>
		</section>

		<!-- Sub Page Content============================================= -->
		<div class="sub-page-content">
			<div class="container">
			<br>
				<h2 class="light bordered">Get<span>Directions</span></h2>
				<div class="row">
					<div class="col-md-12">
						<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d2931.679414191379!2d79.96897906824718!3d6.550630469237025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d6.5512438!2d79.97104019999999!5e0!3m2!1sen!2slk!4v1496587502345" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>></div>
							<div class="get-directions">
								<form action="http://maps.google.com/maps" method="get" target="_blank">
								   <input type="text" name="saddr" placeholder="Enter Your Address" />
								   <input type="hidden" name="daddr" value="Galle Rd, Katukurunda, Sri Lanka" />
								   <input type="submit" value="Get directions" class="direction-btn" />
								</form>
							</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8 contact-form">
						<h2 class="light bordered">Send us a <span>Message</span></h2>
						<form method="POST" action="Forms/contact.php">
							<input type="text" placeholder="First Name">
							<input type="text" placeholder="Email Address">
							<input type="text" placeholder="Subject">
							<textarea placeholder="Message"></textarea>
							<input type="submit" class="btn btn-default" value="Submit">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4">
						<h2 class="light bordered">get in <span>touch</span></h2>
						<div class="get-in-touch-widget">
							<ul class="list-unstyled">
							<li><i class="fa fa-phone"></i>(+94) 71 998 6124 / (+94) 777 933 830</li>
							<li><i class="fa fa-envelope"></i><a href="mailto:info@safeplant.apareciumlabs.com">info@safeplant.apareciumlabs.com</a></li>
							<li><i class="fa fa-globe"></i><a href="http://safeplant.azurewebsites.net/">safeplant.azurewebsites.net<a></li>
							<li><i class="fa fa-clock-o"></i>Mon - Sat 9:00am - 6:00 pm</li>
							<li><i class="fa fa-map-marker"></i>Near Galpinthaliya, Kalamulla, Kalutara, Sri Lanka.</li>
							</ul>
						</div>
					</div>
				</div>
				<br><br>
			</div>
		</div>
		
		<!--end sub-page-content-->

		<div class="colourfull-row"></div>

		<!-- Footer============================================= -->
		<?php include_once("footer.php");	 ?>

		<!-- back to top -->

		<a href="#." class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

	</div>
	<!--end #wrapper-->

	<!-- All Javascript ============================================= -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/waypoints.js"></script>
	<script src="js/jquery.uniform.js"></script>
	<script src="js/easyResponsiveTabs.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/jquery.mixitup.js"></script>
	<script src="js/forms-validation.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/jquery.easypiechart.min.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/color-switcher.js"></script>



</body>

</html>