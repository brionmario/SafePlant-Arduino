<!--Starting a session if exist-->
<?php 
    if (!isset($_SESSION)) {
    session_start();
}
?>
<nav class="navbar navbar-default" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display============================================= -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		<a class="navbar-brand" href="index.html"><img src="images/safeplant_logo.png" alt="Safe Plant Logo" title=""></a> </div>
	<div class="collapse navbar-collapse navbar-right" id="primary-nav">
		<ul class="nav navbar-nav">
		
			<!--Home-->
			<li class="dropdown"> <a href="index.php" class="dropdown-toggle">
				<i class="fa fa-home"></i>Home</a>
			</li>
			<li class="dropdown"> <a href="blog.php" class="dropdown-toggle" >
				<i class="fa fa-rss"></i>blog</a>
			</li>
			<li class="dropdown"> <a href="aboutus.php" class="dropdown-toggle" >
				<i class="fa fa-users"></i>About Us</a>
			</li>
			<li class="dropdown"> <a href="contactus.php" class="dropdown-toggle" >
				<i class="fa fa-phone"></i>Contact Us</a>
			</li>
			<li class="dropdown"> <a href="signup.php" class="dropdown-toggle" >
				<i class="fa fa-user-md"></i>Volunteer</a>
			</li>
			<?php 
				if(isset($_SESSION['is_logged_in'])) {
					echo "<li class=\"dropdown last\"> <a href=\"patients.php\" class=\"dropdown-toggle\" ><i class=\"fa fa-user\"></i>Patients</a>";
					echo "<li class=\"dropdown last\"> <a href=\"logout.php\" class=\"dropdown-toggle\" ><i class=\"fa fa-sign-in\"></i>Logout</a>";
				}else{
					echo "<li class=\"dropdown last\"> <a href=\"login.php\" class=\"dropdown-toggle\" ><i class=\"fa fa-sign-in\"></i>Login</a>";
				}
			?>
			</li>
		</ul>
	</div>
</nav>