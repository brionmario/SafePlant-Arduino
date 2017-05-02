<!--Develo

▀▀█▀▀ ▒█▀▀▀ ░█▀▀█ ▒█▀▄▀█ 　 ▒█▀▀▀█ ▒█▀▀█ ▒█▀▀▀█ ▒█▀▀█ ▒█▀▀█ ▀█▀ ▒█▀▀▀█ ▒█▄░▒█
░▒█░░ ▒█▀▀▀ ▒█▄▄█ ▒█▒█▒█ 　 ░▀▀▀▄▄ ▒█░░░ ▒█░░▒█ ▒█▄▄▀ ▒█▄▄█ ▒█░ ▒█░░▒█ ▒█▒█▒█
░▒█░░ ▒█▄▄▄ ▒█░▒█ ▒█░░▒█ 　 ▒█▄▄▄█ ▒█▄▄█ ▒█▄▄▄█ ▒█░▒█ ▒█░░░ ▄█▄ ▒█▄▄▄█ ▒█░░▀█

© Aparecium Labs-->

<!DOCTYPE html>

<!--Database Connection-->
<?php
include_once("config/connection_safeplant/db_connect.php");
?>ped by,
<html>
<head>
<meta charset="UTF-8">
<title>Pricing | Safe Plant</title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<!--theme colour-->
	<link rel="stylesheet" id="color" href="css/blue.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- medicom style -->
    <link href="css/medicom.css" rel="stylesheet">
    
    <!-- horizontal scroller style -->
    <link href="css/jcarousel-skin.css" rel="stylesheet">
    
    <!-- horizontal scroller style -->
 	<link href="css/owl.carousel.css" rel="stylesheet">
    
    <!-- pie chart style -->
    <link rel="stylesheet" href="css/piechart-style.css"/>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 
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
        	<h1 class="entry-title">PRICING</h1>
        	<h4>Check out our pricing <span>&ensp;packages</span></h4>
        </div>
    </section>
    <br>
    
    
    <div class="sub-page-content">
    	
        
        <div class="container">
            
        	<!--<h2 class="light bordered">Pricing <span>table</span></h2>-->
            <div class="row">
            	<div class="col-md-6">
                	<div class="pricing-table2">
                    	<div class="table-heading">
                            <p class="price">
                                <span>$</span><strong>15</strong>.99
                            </p>
                            <h3>standard<span>monthly plan</span></h3>
                        </div>
                        <ul class="list-unstyled">
                        	<li>Theme Update</li>
                        	<li>Most Wanted</li>
                        	<li>Layerd Photoshop PSD</li>
                        	<li>5 e-mail Account</li>
                        	<li>70MB Monthly Traffic</li>
                        	<li>24/7 Live Support</li>
                        </ul>
                        <a href="#." class="btn btn-dark btn-rounded">sign up</a>
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="pricing-table2 highlight">
                    	<div class="table-heading">
                            <p class="price">
                                <span>$</span><strong>15</strong>.99
                            </p>
                            <h3>standard<span>monthly plan</span></h3>
                        </div>
                        <ul class="list-unstyled">
                        	<li>Theme Update</li>
                        	<li>Most Wanted</li>
                        	<li>Layerd Photoshop PSD</li>
                        	<li>5 e-mail Account</li>
                        	<li>70MB Monthly Traffic</li>
                        	<li>24/7 Live Support</li>
                        </ul>
                        <a href="#." class="btn btn-default btn-rounded">sign up</a>
                    </div>
                </div>
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
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.anythingslider.html"></script>
    <script src="js/jquery.stellar.js"></script>
    <script src="js/color-switcher.js"></script>

    <!--pie chart-->
	<script src="js/jquery.easypiechart.min.js"></script>
    <!--jCarousel library-->
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <script src="js/waypoints.js"></script>
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
				$('.meet-the-doctors').find('a.team-des-btn').removeClass("active");				
				$(this).parent().find('div#team-desc').fadeToggle();
				$(this).parent().find('a.team-des-btn i').toggleClass("fa-minus");
				$(this).parent().find('a.team-des-btn').toggleClass("active");
			  });


			
			//owl carousel
			$("#medicom-carousel").owlCarousel({
				items : 3,
				itemsDesktop : [1170,3],
				itemsDesktopSmall : [979,3]
			  });
			 	
			//pie charts	
			$('#pie-charts').waypoint(function(direction) {			
				$('.chart').easyPieChart({
					easing: 'easeOutBounce',
					onStep: function(from, to, percent) {
						$(this.el).find('.percent').text(Math.round(percent));
					}
				});
				}, {
				offset: function() {
					return $.waypoints('viewportHeight') - $(this).height() + 100;
				}
			});
		})(jQuery);

	</script>
    
  </body>
</html>