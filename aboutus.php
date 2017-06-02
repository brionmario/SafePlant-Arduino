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

	<title>About Us | Safe Plant</title>

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
			<div class="overlay"></div>
			<div class="container">
				<h1 class="entry-title">about us</h1>
				<p>We want to change the world</p>
			</div>
		</section>

		<!-- Sub Page Content============================================= -->

		<div id="sub-page-content">
			<div class="container big-font">
				<h2 class="light bordered main-title">who <span>we are</span></h2>
				<div class="media pull-right"><a href="http://vimeo.com/36031564" class="fancybox-media"><img src="images/video-icon.png" class="img-rounded" alt="" title=""></a>
				</div>

				<p>We are a passionate group of undergraduate students who believe in modern technology and we are looking forward to make a difference in the community using our knowledge. Technology is often misused in the current society and we are willing to break that hype.</p>

				<a href="#." class="btn btn-default btn-rounded">read more</a>

			</div>

			<div class="height20"></div>

			<!-- Meet the Doctor============================================= -->

			<section class="meet-the-doctors text-center">
				<div class="container">
					<h1 class="light">meet the <span>perfect specialists</span> team</h1>
					<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat nibh euismod tincidunt ut laoreet dolore magna.</p>
					<div class="team-member-description one">
						<div class="team-member-desc-inner team-desc">
							<h5>Dr.Kylee Leewan<span>Physical Therapist</span></h5>
							<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised...<a href="member-detail.html">Read more</a>
							</p>
							<ul class="list-unstyled social2 white">
								<li><a href="#." class="fb"><i class="fa fa-twitter"></i></a>
								</li>

								<li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a>
								</li>

								<li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a>
								</li>

							</ul>

							<span class="pointing-arrow"></span>
						</div>
						<a href="#." class="team-des-btn"><i class="fa fa-plus"></i></a>
					</div>

					<div class="team-member-description two">
						<div class="team-member-desc-inner team-desc">
							<h5>Dr.Kylee Leewan<span>Physical Therapist</span></h5>

							<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised...<a href="member-detail.html">Read more</a>
							</p>

							<ul class="list-unstyled social2 white">

								<li><a href="#." class="fb"><i class="fa fa-twitter"></i></a>
								</li>

								<li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a>
								</li>

								<li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a>
								</li>

							</ul>

							<span class="pointing-arrow"></span>
						</div>
						<a href="#." class="team-des-btn"><i class="fa fa-plus"></i></a>
					</div>

					<div class="team-member-description four">
						<div class="team-member-desc-inner team-desc">
							<h5>Dr.Kylee Leewan<span>Physical Therapist</span></h5>

							<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised...<a href="member-detail.html">Read more</a>
							</p>

							<ul class="list-unstyled social2 white">

								<li><a href="#." class="fb"><i class="fa fa-twitter"></i></a>
								</li>

								<li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a>
								</li>

								<li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a>
								</li>

							</ul>

							<span class="pointing-arrow"></span>
						</div>
						<a href="#." class="team-des-btn"><i class="fa fa-plus"></i></a>
					</div>



					<div class="team-member-description five">
						<div class="team-member-desc-inner team-desc">
							<h5>Dr.Kylee Leewan<span>Physical Therapist</span></h5>
							<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised...<a href="member-detail.html">Read more</a>
							</p>
							
							<ul class="list-unstyled social2 white">

								<li><a href="#." class="fb"><i class="fa fa-twitter"></i></a>
								</li>

								<li><a href="#." class="twitter"><i class="fa fa-facebook"></i></a>
								</li>

								<li><a href="#." class="g-plus"><i class="fa fa-google-plus"></i></a>
								</li>

							</ul>

							<span class="pointing-arrow"></span>

						</div>

						<a href="#." class="team-des-btn"><i class="fa fa-plus"></i></a>

					</div>



					<div id="team-carousel" class="owl-carousel two">



						<div class="team-member">

							<div class="team-thumb">

								<img src="images/team-member-img1.jpg" class="img-rounded" alt="">

								<div class="links"><a href="#."><i class="fa fa-facebook"></i></a>

									<a href="#."><i class="fa fa-twitter"></i></a>

									<a href="#."><i class="fa fa-google-plus"></i></a>
								</div>

							</div>

							<h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor.</p>

							<a href="member-detail.html"><em>- View Profile</em></a>

						</div>



						<div class="team-member">

							<div class="team-thumb">

								<img src="images/team-member-img2.jpg" class="img-rounded" alt="">

								<div class="links"><a href="#."><i class="fa fa-facebook"></i></a>

									<a href="#."><i class="fa fa-twitter"></i></a>

									<a href="#."><i class="fa fa-google-plus"></i></a>
								</div>

							</div>

							<h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor.</p>

							<a href="member-detail.html"><em>- View Profile</em></a>

						</div>



						<div class="team-member">

							<div class="team-thumb">

								<img src="images/team-member-img3.jpg" class="img-rounded" alt="">

								<div class="links"><a href="#."><i class="fa fa-facebook"></i></a>

									<a href="#."><i class="fa fa-twitter"></i></a>

									<a href="#."><i class="fa fa-google-plus"></i></a>
								</div>

							</div>

							<h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor.</p>

							<a href="member-detail.html"><em>- View Profile</em></a>

						</div>



						<div class="team-member">

							<div class="team-thumb">

								<img src="images/team-member-img1.jpg" class="img-rounded" alt="">

								<div class="links"><a href="#."><i class="fa fa-facebook"></i></a>

									<a href="#."><i class="fa fa-twitter"></i></a>

									<a href="#."><i class="fa fa-google-plus"></i></a>
								</div>

							</div>

							<h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor.</p>

							<a href="member-detail.html"><em>- View Profile</em></a>

						</div>



						<div class="team-member">

							<div class="team-thumb">

								<img src="images/team-member-img2.jpg" class="img-rounded" alt="">

								<div class="links"><a href="#."><i class="fa fa-facebook"></i></a>

									<a href="#."><i class="fa fa-twitter"></i></a>



									<a href="#."><i class="fa fa-google-plus"></i></a>
								</div>

							</div>

							<h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor.</p>

							<a href="member-detail.html"><em>- View Profile</em></a>

						</div>



						<div class="team-member">

							<div class="team-thumb">

								<img src="images/team-member-img3.jpg" class="img-rounded" alt="">

								<div class="links"><a href="#."><i class="fa fa-facebook"></i></a>

									<a href="#."><i class="fa fa-twitter"></i></a>

									<a href="#."><i class="fa fa-google-plus"></i></a>
								</div>

							</div>

							<h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor.</p>

							<a href="member-detail.html"><em>- View Profile</em></a>

						</div>



						<div class="team-member">

							<div class="team-thumb">

								<img src="images/team-member-img1.jpg" class="img-rounded" alt="">

								<div class="links"><a href="#."><i class="fa fa-facebook"></i></a>

									<a href="#."><i class="fa fa-twitter"></i></a>

									<a href="#."><i class="fa fa-google-plus"></i></a>
								</div>

							</div>

							<h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor.</p>

							<a href="member-detail.html"><em>- View Profile</em></a>

						</div>



						<div class="team-member">

							<div class="team-thumb">

								<img src="images/team-member-img2.jpg" class="img-rounded" alt="">

								<div class="links"><a href="#."><i class="fa fa-facebook"></i></a>

									<a href="#."><i class="fa fa-twitter"></i></a>

									<a href="#."><i class="fa fa-google-plus"></i></a>
								</div>

							</div>

							<h5><a href="#.">J. Vicente Gaby</a><br><span>senior doctor at medicom</span></h5>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor.</p>

							<a href="member-detail.html"><em>- View Profile</em></a>

						</div>



					</div>



				</div>

			</section>







			<!-- Features============================================= -->

			<section class="features">



				<div class="container">



					<div class="row">



						<div class="col-md-6">



							<div class="feature">

								<i class="pull-left feature-icon fa fa-user-md"></i>

								<div class="feature-content">

									<h5><a href="#.">Creative doctors</a></h5>

									<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised only five Power of centuries.</p>

									<a href="#."><dfn>- Learn more</dfn></a>

								</div>

							</div>



						</div>



						<div class="col-md-6">



							<div class="feature">

								<i class="pull-left feature-icon fa fa-clock-o"></i>

								<div class="feature-content">

									<h5><a href="#.">24/7 Live Support</a></h5>

									<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised only five Power of centuries.</p>

									<a href="#."><dfn>- Learn more</dfn></a>

								</div>

							</div>



						</div>



					</div>



					<div class="row">

						<div class="col-md-6">



							<div class="feature">

								<i class="pull-left feature-icon fa fa-tint"></i>

								<div class="feature-content">

									<h5><a href="#.">cancer care</a></h5>

									<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised only five Power of centuries.</p>

									<a href="#."><dfn>- Learn more</dfn></a>

								</div>

							</div>



						</div>



						<div class="col-md-6">



							<div class="feature">

								<i class="pull-left feature-icon fa fa-phone-square"></i>

								<div class="feature-content">

									<h5><a href="#.">emergency services</a></h5>

									<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining popularised only five Power of centuries.</p>

									<a href="#."><dfn>- Learn more</dfn></a>

								</div>

							</div>



						</div>



					</div>



				</div>



			</section>









			<!-- Our Hospitals and Why Choose Medicom============================================= -->

			<div class="container padding-top-35 clearfix">



				<div class="row">



					<div class="col-md-6">



						<h2 class="light bordered">our <span>hospital</span></h2>



						<div class="slider-mini no-margin-bottom">



							<div id="our-hospital" class="owl-carousel text-center">



								<div class="item">

									<img src="images/hospital-img.jpg" alt="" title="">

								</div>



								<div class="item">

									<img src="images/hospital-img2.jpg" alt="" title="">

								</div>



							</div>



						</div>



					</div>



					<div class="col-md-6">



						<h2 class="light bordered">why <span>choose medicom</span></h2>



						<div class="panel-group accordian-style2" id="accordion2">



							<div class="panel panel-default">



								<div class="panel-heading">

									<h4 class="panel-title">

									<a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">

									  <i class="fa fa-medkit"></i>our responsibility<i class="fa fa-angle-down pull-right"></i>

									</a>

								  </h4>

								



								</div>



								<div id="collapseOne" class="panel-collapse collapse in">

									<div class="panel-body">

										Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.<br/><br/>veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde sed quia consequuntur. Page Maker including versions.

									</div>

								</div>

							</div>



							<div class="panel panel-default">



								<div class="panel-heading">

									<h4 class="panel-title">

									<a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">

									  <i class="fa fa-heart"></i>heart specialist<i class="fa fa-angle-down pull-right"></i>

									</a>

								  </h4>

								



								</div>



								<div id="collapseTwo" class="panel-collapse collapse">

									<div class="panel-body">

										Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.<br/><br/>veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde sed quia consequuntur. Page Maker including versions.

									</div>

								</div>



							</div>



							<div class="panel panel-default">



								<div class="panel-heading">

									<h4 class="panel-title">

									<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">

									  <i class="fa fa-eye"></i>eye specialist<i class="fa fa-angle-down pull-right"></i>

									</a>

								  </h4>

								



								</div>



								<div id="collapseThree" class="panel-collapse collapse">

									<div class="panel-body">

										Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.<br/><br/>veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde sed quia consequuntur. Page Maker including versions.

									</div>

								</div>



							</div>



							<div class="panel panel-default">



								<div class="panel-heading">

									<h4 class="panel-title">

									<a data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">

									  <i class="fa fa-mobile"></i>responsive design<i class="fa fa-angle-down pull-right"></i>

									</a>

								  </h4>

								



								</div>



								<div id="collapseFour" class="panel-collapse collapse">

									<div class="panel-body">

										Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.<br/><br/>veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde sed quia consequuntur. Page Maker including versions.

									</div>

								</div>



							</div>



						</div>



					</div>



				</div>



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