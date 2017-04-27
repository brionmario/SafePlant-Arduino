<!--Developed by, 

▀▀█▀▀ ▒█▀▀▀ ░█▀▀█ ▒█▀▄▀█ 　 ▒█▀▀▀█ ▒█▀▀█ ▒█▀▀▀█ ▒█▀▀█ ▒█▀▀█ ▀█▀ ▒█▀▀▀█ ▒█▄░▒█ 
░▒█░░ ▒█▀▀▀ ▒█▄▄█ ▒█▒█▒█ 　 ░▀▀▀▄▄ ▒█░░░ ▒█░░▒█ ▒█▄▄▀ ▒█▄▄█ ▒█░ ▒█░░▒█ ▒█▒█▒█ 
░▒█░░ ▒█▄▄▄ ▒█░▒█ ▒█░░▒█ 　 ▒█▄▄▄█ ▒█▄▄█ ▒█▄▄▄█ ▒█░▒█ ▒█░░░ ▄█▄ ▒█▄▄▄█ ▒█░░▀█ 

© Aparecium Labs-->

<!DOCTYPE html>

<!--Database Connection-->
<?php 
	include_once("../../../config/connection_safeplant/db_connect.php");	
?>
<html>
  
<head>
    <title>Blog | Safe Plant</title>
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
        	<h1 class="entry-title">Blog</h1>
        	<h4>Stay tuned for daily<span>&ensp;updates</span></h4>
        </div>
    </section>
    <br>
    
    <div class="sub-page-content">
        
        <div class="container">
        	<div class="row blog-wrapper">
            	
                    <div class="col-md-6 clearfix">
                        <article class="blog-item blog-full-width">
                            <div class="blog-thumbnail">
                            <img alt="" src="images/blog-2-column-img1.jpg">
                            </div>
                            <div class="blog-full-width-date">
                                <p class="day">28</p><p class="monthyear">FEB 2014</p>
                                <a href="#."><i class="fa fa-comments"></i>15</a>
                            </div>
                            <div class="blog-content">
                            <h4 class="blog-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                            <p class="blog-meta">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>, <a href="#">illustration</a>, <a href="#">Logo</a></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl.</p>

<p>Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris. Natoque facilisis magna aptent morbi parturient facilisis facilisis condimentum justo ante habitant nulla blandit congue egestas mauris [...]</p>
                            <a href="#." class="btn btn-default btn-mini btn-rounded">READ MORE</a>
                            </div>
                        </article>
                 
                        <article class="blog-item blog-full-width">
                            <div class="blog-thumbnail">
                            <div id="carousel-blog" class="carousel slide default" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#carousel-blog" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-blog" data-slide-to="1"></li>
                                <li data-target="#carousel-blog" data-slide-to="2"></li>
                              </ol>
                            
                              <!-- Wrapper for slides -->
                              <div class="carousel-inner text-center">
                                <div class="item active">
                                  <img src="images/blog-2-column-img1.jpg" alt="" title="">
                                </div>
                                <div class="item">
                                  <img src="images/blog-2-column-img2.jpg" alt="" title="">
                                </div>
                                <div class="item">
                                  <img src="images/blog-2-column-img3.jpg" alt="" title="">
                                </div>
                              </div>
                            </div>
                                        </div>
                                        <div class="blog-full-width-date">
                                            <p class="day">28</p><p class="monthyear">FEB 2014</p>
                                            <a href="#."><i class="fa fa-comments"></i>15</a>
                                        </div>
                                        <div class="blog-content">
                                        <h4 class="blog-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                                        <p class="blog-meta">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>, <a href="#">illustration</a>, <a href="#">Logo</a></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl.</p>
        
        <p>Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris. Natoque facilisis magna aptent morbi parturient facilisis facilisis condimentum justo ante habitant nulla blandit congue egestas mauris [...]</p>
                                        <a href="#." class="btn btn-default btn-mini btn-rounded">READ MORE</a>
                                        </div>
                                    </article>
                       
                        <article class="blog-item blog-full-width last">
                                        <div class="blog-thumbnail">
                                        <img alt="" src="images/blog-2-column-img4.jpg">
                                        </div>
                                        <div class="blog-full-width-date">
                                            <p class="day">28</p><p class="monthyear">FEB 2014</p>
                                            <a href="#."><i class="fa fa-comments"></i>15</a>
                                        </div>
                                        <div class="blog-content">
                                        <h4 class="blog-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                                        <p class="blog-meta">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>, <a href="#">illustration</a>, <a href="#">Logo</a></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl.</p>
        
        <p>Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris. Natoque facilisis magna aptent morbi parturient facilisis facilisis condimentum justo ante habitant nulla blandit congue egestas mauris [...]</p>
                                        <a href="#." class="btn btn-default btn-mini btn-rounded">READ MORE</a>
                                        </div>
                                    </article>
                    </div>
        	<div class="col-md-6 clearfix">
                <article class="blog-item blog-full-width">
                                <div class="blog-thumbnail">
                                <img alt="" src="images/blog-2-column-img5.jpg">
                                </div>
                                <div class="blog-full-width-date">
                                	<p class="day">28</p><p class="monthyear">FEB 2014</p>
                                    <a href="#."><i class="fa fa-comments"></i>15</a>
                                </div>
                                <div class="blog-content">
                                <h4 class="blog-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                                <p class="blog-meta">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>, <a href="#">illustration</a>, <a href="#">Logo</a></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl.</p>

<p>Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris. Natoque facilisis magna aptent morbi parturient facilisis facilisis condimentum justo ante habitant nulla blandit congue egestas mauris [...]</p>
                                <a href="#." class="btn btn-default btn-mini btn-rounded">READ MORE</a>
                                </div>
                            </article>
                
                <article class="blog-item blog-full-width">
                                <div class="blog-thumbnail">
                                <div id="carousel-blog2" class="carousel slide default" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-blog2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-blog2" data-slide-to="1"></li>
                        <li data-target="#carousel-blog2" data-slide-to="2"></li>
                      </ol>
                    
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner text-center">
                        <div class="item active">
                          <img src="images/blog-2-column-img6.jpg" alt="" title="">
                        </div>
                        <div class="item">
                          <img src="images/blog-2-column-img1.jpg" alt="" title="">
                        </div>
                        <div class="item">
                          <img src="images/blog-2-column-img2.jpg" alt="" title="">
                        </div>
                      </div>
					</div>
                                </div>
                                <div class="blog-full-width-date">
                                	<p class="day">28</p><p class="monthyear">FEB 2014</p>
                                    <a href="#."><i class="fa fa-comments"></i>15</a>
                                </div>
                                <div class="blog-content">
                                <h4 class="blog-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                                <p class="blog-meta">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>, <a href="#">illustration</a>, <a href="#">Logo</a></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl.</p>

<p>Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris. Natoque facilisis magna aptent morbi parturient facilisis facilisis condimentum justo ante habitant nulla blandit congue egestas mauris [...]</p>
                                <a href="#." class="btn btn-default btn-mini btn-rounded">READ MORE</a>
                                </div>
                            </article>
				
                <article class="blog-item blog-full-width last">
                                <div class="blog-thumbnail">
                                <img alt="" src="images/blog-2-column-img3.jpg">
                                </div>
                                <div class="blog-full-width-date">
                                	<p class="day">28</p><p class="monthyear">FEB 2014</p>
                                    <a href="#."><i class="fa fa-comments"></i>15</a>
                                </div>
                                <div class="blog-content">
                                <h4 class="blog-title"><a href="#">Latest Blog Graphic Image Post</a></h4>
                                <p class="blog-meta">By: <a href="#">admin</a> | Tags: <a href="#">Graphic</a>, <a href="#">illustration</a>, <a href="#">Logo</a></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec eros eget nisl fringilla commodo. Maecenas ornare, augue ut ultricies tristique, enim lectus pretium quam, quis bibendum metus tellus sed magna. Donec eu dolor Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl.</p>

<p>Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris. Natoque facilisis magna aptent morbi parturient facilisis facilisis condimentum justo ante habitant nulla blandit congue egestas mauris [...]</p>
                                <a href="#." class="btn btn-default btn-mini btn-rounded">READ MORE</a>
                                </div>
                            </article>
            </div>
        </div>
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