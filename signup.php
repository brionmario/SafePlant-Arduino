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
<html><head>
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Signup | Safe Plant</title>
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
   
	
 	<style type="text/css">
	.input-label{
		color: black;
		font-weight: 700;
		}
	</style>
	
	<style type="text/css">
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
	.form-control, .thumbnail {
		border-radius: 2px;
	}
	.btn-danger {
		background-color: #B73333;
	}

	/* File Upload */
	.fake-shadow {
		box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
	}
	.fileUpload {
		position: relative;
		overflow: hidden;
	}
	.fileUpload #logo-id {
		position: absolute;
		top: 0;
		right: 0;
		margin: 0;
		padding: 0;
		font-size: 33px;
		cursor: pointer;
		opacity: 0;
		filter: alpha(opacity=0);
	}
	.img-preview {
		max-width: 100%;
	}
	</style>
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
        	<h1 class="entry-title">Signup</h1>
        	<h4>Start contributing for a greater cause.<span style="color: red">&ensp;Sign up now.</span></h4>
        </div>
    </section>
    <br>
    
	<div class="sub-page-content">
		<div class="container">
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">

					<div style="padding-top:30px" class="panel-body">

						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

						<form action="Forms/signup_form.php" id="loginform" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">

						
							<label for="firstname" class="input-label">First Name</label>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"></span>
								<input id="first_name" type="text" class="form-control" name="f_name" value="" placeholder="Enter First Name" required />
							</div>

							<label for="lastname" class="input-label">Last Name</label>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"></span>
								<input id="last_name" type="text" class="form-control" name="l_name" value="" placeholder="Enter Last Name" required />
							</div>
							
							<label for="username" class="input-label">Username</label>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"></span>
								<input id="signup_username" type="text" class="form-control" name="username" value="" placeholder="username" required />
							</div>

                            <label for="user_email" class="input-label">Email</label>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"></span>
                                <input id="email" type="email" class="form-control" name="email" value="" placeholder=" email" required />
                            </div>

							<label for="password" class="input-label">Password</label>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"></span>
								<input id="login-password" type="password" class="form-control" name="password" placeholder="Password" required />
							</div>
                            
                            <label for="confirmPassword" class="input-label">Confirm Password</label>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"></span>
								<input id="confirm_login-password" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required />
							</div>

							<label for="avatar" class="input-label">Add a profile picture</label>
							<div class="input-group">
								<div class="main-img-preview">
									<img class="thumbnail img-preview" src="images/doctors/avatar.jpg" title="Preview Logo">
								</div>
								<div class="input-group">
									<input id="avatar" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
									<div class="input-group-btn">
										<div class="fileUpload btn btn-danger fake-shadow">
											<span><i class="glyphicon glyphicon-upload"></i>Upload Photo</span>
											<input id="logo-id" name="photo" type="file" class="attachment_upload">
										</div>
									</div>
								</div>
								<p class="help-block">* Recommended - 718px X 718px</p>
							</div>
                            <br>

                            <label for="reg_num" class="input-label">Registration Number</label>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"></span>
                                <input id="regnum" type="text" class="form-control" name="regnum" value="" placeholder="Enter Registration Number" required />
                            </div>

                            <label for="hospital" class="input-label">Hospital</label>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"></span>
                                <input id="hospital" type="text" class="form-control" name="hospital" value="" placeholder="Enter the Hospital where you work" required />
                            </div>


							<center>
								<div class="input-group">
									<div style="margin-top:10px">
										<input value="Signup" name="submit" type="submit" id="btn-signup" href="#" class="btn btn-success" />
									</div>
								</div>


								<div style="margin-top:10px" class="form-group">
									<!-- Button -->
									<div class="col-sm-12 controls">
										
									</div>
								</div>
							</center>


							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
										<center><p>If you've already registered, <a href="login.php" title="">Login here</a></p></center>
									</div>
								</div>
							</div>
						</form>
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
    
    <!--Image upload snippet-->
    <script type="text/javascript">

		$(document).ready(function() {
		var brand = document.getElementById('logo-id');
		brand.className = 'attachment_upload';
		brand.onchange = function() {
			document.getElementById('avatar').value = this.value.substring(12);
		};

		// Source: http://stackoverflow.com/a/4459419/6396981
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function(e) {
					$('.img-preview').attr('src', e.target.result);
				};
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#logo-id").change(function() {
			readURL(this);
		});
	});

	</script>
   
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