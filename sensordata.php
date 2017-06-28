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
<html>
  
<head>
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Brion Mario - Data | Safe Plant</title>
    <!-- Mobile Specific Metas================================================== -->

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone=no">

	<!--theme colour-->
	<link rel="stylesheet" id="color" href="css/red.css">
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- medicom style -->
    <link href="css/medicom.css" rel="stylesheet">
    
    <!-- masonary -->
    <link href="css/style-masonary.css" rel="stylesheet">
     	
	<!-- This page============================================= -->
	<link href="css/settings.css" rel="stylesheet">

	<!-- Bootstrap============================================= -->

	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Theme Skin============================================= -->

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
   
    <div id="wrapper">
    
    
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
    
    
    <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
    	<div class="container">
        	<h1 class="entry-title">Brion Mario</h1>
        	<h4>See the progression of the<span>&ensp;patient</span></h4>
        </div>
    </section>
    <br>
    
    <div class="sub-page-content">
		<div class="container">
			<div class="row">
			<center>
				<iframe width="450" height="260" style="border: 1px solid #cccccc;margin-right: 50px" src="https://thingspeak.com/channels/208912/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Body+Temperature&type=column"></iframe>
				
				<iframe width="450" height="260" style="border: 1px solid #cccccc;margin-left: 50px" src="https://thingspeak.com/channels/208912/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Heart+Rate&type=line"></iframe>
			</center>	
			</div>
			<br class="clearfix">
			<div class="row">
			<center>
				<iframe width="450" height="260" style="border: 1px solid #cccccc;margin-right: 50px" src="https://thingspeak.com/channels/208912/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Blood+Pressure&type=spline"></iframe>
				
				<iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/208912/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
			</center>	
			</div>
			<br class="clearfix">
			<br class="clearfix">
		</div>
          
          <hr />
          <div class="container">
			<div class="row">
				<h1 align="center">Give Feedback</h1>
				<h6 align="center"> Please take a few moments to answer the following questions</h6>
			</div>
			<br class="clearfix">
			<br class="clearfix">
			<?php
					$sql = "SELECT * FROM feedback";
					$result = $con->query($sql);
				
					if ($result->num_rows > 0) {
					// output data of each row
						while($row = $result->fetch_assoc()) {
							
							if($row["status"] == 0) {
								$id = $row["status"];
								echo '<div class="row">';
								echo '<div class="col-md-12">';
									echo '<div class="cart-shipping clearfix">';
										if (is_null($row["date"])){
											echo "<h4 class=\"light\"><span>Date - </span>Not Available</h4><br>";
										} else {
											echo "<h4 class=\"light\"><span>Date - </span>{$row["date"]}</h4><br>";
										}
										
											echo '<form action="Forms/feedback_form.php" method="POST">';
												echo "<input name=\"id\" type=\"hidden\" value=\"{$row['id']}\" />";
												echo "<label class=\"col-md-2\">Question - </label>";
												echo '<div class="col-md-10">';
													echo "<p>{$row["question"]}</p>";
												echo '</div>';

												echo "<label class=\"col-md-2\">Feedback - </label>";
												
												echo '<div class="col-md-10">';

													echo '<input name="feedback" type="text" required/>';

												echo '</div>';

												echo '<input name="submit" class="btn-danger" type="submit" value="SUBMIT"/>';

											echo '</form>';

									echo '</div> ';
								echo '</div>';
							echo '</div>';
							echo '<br class="clearfix"><br class="clearfix">';
							}
						}
					}
			?>
			
		</div>
    	<div class="clr"></div>    
    </div><!--end sub-page-content-->
    

    
    <div class="colourfull-row"></div>
    <div class="colourfull-row"></div>
  
	  <!-- Footer============================================= -->
	  <?php include_once("footer.php");	 ?>
	  
    </div><!--end #wrapper-->
    
    <script src="js/jquery.html"></script>
    <script src="js/bootstrap.min.html"></script>
    <script src="js/jquery.anythingslider.html"></script>
    <script src="js/jquery.stellar.js"></script>
    <!--jCarousel library-->
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <script src="js/color-switcher.js"></script>
    
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

	<!-- This page============================================= --> 

	<script src="js/jquery.themepunch.plugins.min.js"></script> 
	<script src="js/jquery.themepunch.revolution.min.js"></script> 
	<script src="js/color-switcher.js"></script> 
    <script type="text/javascript">
		jQuery(function($){
			// parallaax
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 0
			});
			
		   // AnythingSlider initialization
			$('#slider').anythingSlider();
			
			//jcarousel
			jQuery('#doctors-list').jcarousel({
				scroll :1
			});
			
			//team description box
			$(".team-des-btn").click(function(){
				$('.meet-the-doctors').find('div#team-desc').fadeOut();
				$('.meet-the-doctors').find('a.team-des-btn i').removeClass("fa-minus");				
				$(this).parent().find('div#team-desc').fadeToggle();
				$(this).parent().find('a.team-des-btn i').toggleClass("fa-minus");
			  });

			jQuery('#').click({
				scroll :1
			});
			 	
		})(jQuery);

	</script>
  </body>
</html>
