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
    <title>Patients | Safe Plant</title>
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
        	<h1 class="entry-title">OUR PATIENTS</h1>
        	<h4>Welcome<span style="color: red">
        	<?php 
				if(!empty($_SESSION['userlog'])){
					$userName = $_SESSION["userlog"] ; 
					if(isset($_SESSION["userlog"])){
						echo "Dr.{$userName}";
					}
				}
		 	?>
       		</span></h4>
        </div>
    </section>
    <br>
    
    <div class="sub-page-content">
        <div class="container">
     		<div class="row">
           		<br/>
            	<?php
					$sql = "SELECT * FROM users_patients";
					$result = $con->query($sql);
				
					if ($result->num_rows > 0) {
					// output data of each row
						while($row = $result->fetch_assoc()) {
							echo '<div class="col-md-6 padding-bottom-60 clearfix">';
								echo "<a href=\"{$row["data_url"]}\" target=\"_blank\"><div class=\"doctors-img\"><img src=\"{$row["img_url"]}\" width=\"234\" alt=\"\" title=\"\"></div></a>";
								echo '<div class="doctors-detail">';
										echo "<a href=\"{$row["data_url"]}\" target=\"_blank\"><h4>{$row["first_name"]}&ensp;{$row["last_name"]}<span>{$row["age"]} Years Old</span></h4></a>";
										echo "<p><label class=\"heading\">Operation</label><label class=\"detail\">{$row["operated"]}</label></p>";
										echo "<p><label class=\"heading\">Weight</label><label class=\"detail\">{$row["weight"]} KG</label></p>";
										echo "<p><label class=\"heading\">Status</label><label class=\"detail\">{$row["status"]}</label></p>";
										echo "<p><label class=\"heading\">Memo</label><label class=\"detail\">{$row["memo"]}</label></p>";
								echo '</div>';
							echo '</div>';
						}
					}
				?>
            </div>       
        </div>
    
    <div class="clr"></div>    
    </div><!--end sub-page-content-->
    

    
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