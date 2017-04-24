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
<html lang=”en”>
<head>
<base href="" />

<!-- Basic Page Needs================================================== -->

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="images/favicon.png">
<title>Safe Plant &raquo; Smart Wrist Band for Kidney Transplant After Care &#124; Mobile Application &#124; Web Platform</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">

<script src="https://use.fontawesome.com/cabb0fd36e.js"></script>

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

<!-- This page============================================= -->

<link href="css/revolution_style.css" rel="stylesheet">
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
<!-- Loader -->
<div id="preloader"></div>

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
  
  <div id="content-index"> 
    
    <!-- Main Banner============================================= -->
    
    <section id="slider" class="tp-banner-container index-rev-slider clearfix">
      <div class="tp-banner" >
        <ul>
          
          <!-- Fade============================================= -->
          
          <li data-transition="fade" data-slotamount="10" data-thumb=""> <img src="images/kidney-specialist.jpg" alt="image" />
            <div class="caption sft" data-x="0" data-y="180" data-speed="3000" data-start="1300" data-easing="easeOutBack"> 
            	<img src="images/kidney-icon.png" alt=""> 
            </div>
            <div class="caption lfr" data-x="770" data-y="100" data-speed="1500" data-start="900" data-easing="easeOutExpo">
            	<!--<img src="images/heart.png" alt=""/>-->
            </div>
            <div class="caption sft big_white" data-x="0" data-y="265" data-speed="1000" data-start="1700" data-easing="easeOutExpo"> <strong>Kidney Specialists</strong> </div>
            <div class="caption sfr medium_grey" data-x="0" data-y="340" data-speed="1000" data-start="2500" data-easing="easeOutExpo">We work with the best Urologists in the country.<br>Stand a chance to gain feedback from the best.</div>
            <div class="caption sfb" data-x="0" data-y="410" data-speed="2500" data-start="2500" data-easing="easeOutExpo"> <a href="index5.html" class="btn btn-rounded btn-bordered">Learn More</a></div>
          </li>
          
          <!-- Slide Right

					============================================= -->
          
          <li data-transition="slideright" data-slotamount="6" data-thumb=""> <img src="images/emergency-services.jpg" alt="image" />
            <div class="caption sft" data-x="500" data-y="180" data-speed="2000" data-start="1300" data-easing="easeOutBack"><img src="images/emergency-services-icon.png" alt=""></div>
            <div class="caption sft big_white" data-x="260" data-y="290" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong>emergency services</strong></div>
            <div class="caption sfb medium_grey text-center" data-x="140" data-y="370" data-speed="1500" data-start="2500" data-easing="easeOutExpo">If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut<br>
              volutpat eros  adipiscing elit Ut volutpat. 
              
              aliquam erat volutpat.</div>
            <div class="caption sfb" data-x="492" data-y="450" data-speed="2000" data-start="3000" data-easing="easeOutExpo"><a href="index5.html" class="btn btn-rounded btn-bordered">all in one</a></div>
          </li>
          
          <!-- Slide Up============================================= -->
          
          <li data-transition="slideup" data-slotamount="15" data-thumb=""> <img src="images/better-technology.jpg" alt="image" />
            <div class="caption sfl" data-x="0" data-y="180" data-speed="1500" data-start="1300" data-easing="easeOutBack"><img src="images/better-technology-icon.png" alt=""></div>
            <div class="caption sfr" data-x="600" data-y="0" data-speed="900" data-start="1500" data-easing="easeOutExpo"> <img src="images/tech-women.png" alt=""/></div>
            <div class="caption sft big_white" data-x="0" data-y="265" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong>better technology</strong></div>
            <div class="caption sfr medium_grey" data-x="0" data-y="340" data-speed="1500" data-start="2500" data-easing="easeOutExpo">If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur<br>
              adipiscing elit. Ut volutpat eros  adipiscing elit Ut volutpat. </div>
            <div class="caption sfb" data-x="0" data-y="410" data-speed="300" data-start="2500" data-easing="easeOutExpo"><a href="index5.html" class="btn btn-rounded btn-bordered">all in one</a></div>
          </li>
        </ul>
      </div>
    </section>
    
    <!-- Home Boxes============================================= 
    
    <div class="row text-center no-margin">
      <div class="col-md-4 bg-default">
        <div class="home-box"> <span class="glyphicon glyphicon-tint"></span>
          <h3>Emergency Case</h3>
          <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut volutpat eros s adipiscing elit. Ut volutpat eros sit.</p>
          <a href="#." class="btn-rounded btn-bordered">Read more</a> </div>
      </div>
      <div class="col-md-4">
        <div class="home-box opening-hours clearfix"> <span class="glyphicon glyphicon-time"></span>
          <h3>Opening Hours</h3>
          <p>If you need a doctor for to the consectetuer
            
            consectetur adipiscing Graphic Design is elit.</p>
          <ul class="list-unstyled">
            <li class="clearfix"> <span> Monday - Friday </span>
              <div class="value"> 8.00 - 16.00 </div>
            </li>
            <li class="clearfix"> <span> Saturday </span>
              <div class="value"> 9.30 - 15.30 </div>
            </li>
            <li class="clearfix"> <span> Sunday </span>
              <div class="value"> 9.30 - 17.00 </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 bg-default">
        <div class="home-box"> <span class="glyphicon glyphicon-tint"></span>
          <h3>Cancer Care</h3>
          <p>If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut volutpat eros s adipiscing elit. Ut volutpat eros sit.</p>
          <a href="#." class="btn-rounded btn-bordered">Read more</a> </div>
      </div>
    </div>-->
    
    <!-- Appointment============================================= -->
    
    <section class="appointment-sec text-center">
      <div class="container">
        <h1>Order Now!</h1>
        <p class="lead">Is aftercare a nightmare for you?<br/>Stop worrying. Order yourself a "Safe Plant" wristband today. Just starting at $19.99</p>
        <div class="row">
          <div class="col-md-6">
            <figure><img src="images/phone-watch.png" alt="image" title="Appointment image" class="img-responsive lady1"></figure>
          </div>
          <div class="col-md-6">
            <div class="appointment-form clearfix">
              <div class="success" id="message-app" style="display:none;"></div>
              <form name="appoint_form" id="appoint_form" method="post" action="submit.php" onSubmit="return false">
                <input type="text" name="app_fname" id="app_fname" placeholder="First Name" onKeyPress="removeChecks();">
                <input type="text" name="app_lname" id="app_lname" placeholder="Last Name" onKeyPress="removeChecks();">
                <input type="email" name="app_email_address" id="app_email_address" placeholder="Email Address" onKeyPress="removeChecks();">
                <input type="text" name="app_phone" id="app_phone" placeholder="Phone No"><br>
                <input type="submit" value="submit" class="btn btn-default btn-rounded" onClick="validateAppoint();">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- About============================================ -->
    
    <section class="about-sec text-center" data-stellar-background-ratio="0.01">
      <div class="container">
        <h1>Achievements</h1>
        <p class="lead"><!--Description--></p>
        <div class="row text-center" id="counters">
          <div class="col-md-3 col-xs-6">
            <div class="counter"> <span class="quantity-counter1 highlight">0</span>
              <h6 class="counter-details">Units Sold</h6>
            </div>
          </div>
          <div class="col-md-3 col-xs-6">
            <div class="counter"> <span class="quantity-counter2 highlight">0</span>
              <h6 class="counter-details">our staff</h6>
            </div>
          </div>
          <div class="col-md-3 col-xs-6">
            <div class="counter"> <span class="quantity-counter3 highlight">0</span>
              <h6 class="counter-details">clinic rooms</h6>
            </div>
          </div>
          <div class="col-md-3 col-xs-6">
            <div class="counter"> <span class="quantity-counter4 highlight">0</span>
              <h6 class="counter-details">machines</h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Team============================================= -->
    
    <section class="meet-the-doctors no-bg-img team-carousel">
      <div class="container">
        <h2 class="light bordered">Our <span>Doctors</span></h2>
        	<div id="team-carousel" class="owl-carousel wrapper-padding-none">
		
		<?php
			$sql = "SELECT * FROM doctors";
			$result = $con->query($sql);
				
				if ($result->num_rows > 0) {
				// output data of each row
					while($row = $result->fetch_assoc()) {
         				echo "<div class=\"team-member\">";
          					echo  "<div class=\"team-thumb\"> <img src=\"{$row["doc_image"]}\" class=\"img-rounded\" alt=\"\">";
							//echo "<div class="\links\">
						    	//echo "<a href=\"#.\"><i class=\"fa fa-facebook\"></i></a> <a href=\"#.\"><i class=\"fa fa-twitter\"></i></a> <a href=\"#.\">"<i class=\"fa fa-google-plus\">"</i></a>";
							//echo "</div>"; //<!--end of links-->
            				echo "</div>"; //<!--End of thumbnail-->
						
							echo "<h5><a>{$row["doc_Name"]}<br><span>{$row["doc_Post"]}</a></span></h5>";
            				echo "<p>{$row["doc_Description"]}</p>";
            				echo '<a href="member-detail.html"><em>- View Profile</em></a>';
						echo "</div>"; //<!--End of team member-->
					}
				}
			?>
        </div>
      </div>
    </section>
    
    <!--Prototype section-->
	<section class="medicom-awesome-features-sec" data-stellar-background-ratio="0.3">
		<div class="featires-overlay"></div>
		<div class="container">
			<div class="text-center">
				<h1 class="light">Safe Plant has an <span>Incredibly Awesome</span> Design</h1>
				<p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Nam vitae felis pretium, euismod ipsum nec</p>
			</div>
			<ul class="awesome-features list-unstyled pull-left text-right">
				<li><i class="pull-right img-circle fa fa-heartbeat"></i><span>Heart Rate</span>Checks and notifies if abnormal</li>
				<li class="middle"><i class="pull-right img-circle fa fa-thermometer-quarter"></i><span>Body Temperature</span>Constantly monitors for flus</li>
				<li><i class="pull-right img-circle fa fa-user-md"></i><span>Blood Pressure</span>Displays if normal or extreme</li>
			</ul>
			<div class="tab-slider">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active text-center">
							<img src="images/watch-slide1.png" alt="" title="">
						</div>
						<div class="item">
							<img src="images/watch-slide1.png" alt="" title="">
						</div>
						<div class="item">
							<img src="images/watch-slide1.png" alt="" title="">
						</div>
					</div>
				</div>
				<span class="hand"></span>
			</div>
			<ul class="awesome-features list-unstyled pull-right text-left">
				<li><i class="pull-left img-circle fa fa-bicycle"></i><span>Activity Tracker</span>Shows the number of steps, distance and calories.</li>
				<li class="middle"><i class="pull-left img-circle fa fa-plus-square"></i><span>Emergency SOS</span>Able to notify in case of emergencies</li>
				<li><i class="pull-left img-circle fa fa-battery-full"></i><span>Longer Batery Life</span>Lasts 48h minimum on full charge</li>
			</ul>
		</div>
	</section>
    
    <!-- Latest News============================================= -->
    <section class="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2 class="bordered light">Latest <span>News</span></h2>
            <div class="row">
             
             <!--Articles first Column-->
              <div class="col-md-5">   
               <!--Article 01 and 02-->
               <?php
				$sql = "SELECT * FROM blog_column1_homepage ORDER BY rand() LIMIT 2";
				$result = $con->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row
					while($row = $result->fetch_assoc()) {
					echo "<article class=\"blog-item\">";
						  echo "<div class=\"blog-thumbnail\"> <img alt=\"blog_image\" src=\"{$row["img_url"]}\">";
							echo "<div class=\"blog-date\">";
							  echo "<p class=\"day\">{$row["day"]}</p>";
							  echo "<p class=\"monthyear\">{$row["month_year"]}</p>";
							echo "</div>";
						  echo "</div>";
						  echo "<div class=\"blog-content\">";
							echo "<h4 class=\"blog-title\"><a href=\"{$row["blog_url"]}\">{$row["blog_title"]}</a></h4>";
							echo "<p class=\"blog-meta\">By: <a href=\"{$row["admin_url"]}\">{$row["admin"]}</a> | Tags:{$row["tags"]} </p>";
                        echo "<p>" . substr($row['description'],0,300) . " ....</p>";
							echo "<a href=\"{$row["blog_url"]}\" class=\"btn btn-default btn-mini btn-rounded\">READ MORE</a> </div>";
						echo "</article>";
					}
				}
				?>
              </div>
              
              <!--Articles second Column-->
              <div class="col-md-7">
               <!--Article 01 and 02-->
               <?php
				$sql = "SELECT * FROM blog_column2_homepage ORDER BY rand() LIMIT 2";
				$result = $con->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row
					while($row = $result->fetch_assoc()) {
					echo "<article class=\"blog-item\">";
						  echo "<div class=\"blog-thumbnail\"> <img alt=\"blog_image\" src=\"{$row["img_url"]}\">";
							echo "<div class=\"blog-date\">";
							  echo "<p class=\"day\">{$row["day"]}</p>";
							  echo "<p class=\"monthyear\">{$row["month_year"]}</p>";
							echo "</div>";
						  echo "</div>";
						  echo "<div class=\"blog-content\">";
							echo "<h4 class=\"blog-title\"><a href=\"{$row["blog_url"]}\">{$row["blog_title"]}</a></h4>";
							echo "<p class=\"blog-meta\">By: <a href=\"{$row["admin_url"]}\">{$row["admin"]}</a> | Tags:{$row["tags"]} </p>";
							echo "<p>{$row["description"]}</p>";
							echo "<a href=\"{$row["blog_url"]}\" class=\"btn btn-default btn-mini btn-rounded\">READ MORE</a> </div>";
						echo "</article>";
					}
				}
				?>
              </div>
              
            </div>
          </div>
          
          <!-- Sidebar============================================= -->
          
          <aside class="col-md-4">
            <h2 class="bordered light">Meet the <span>Volunteer of the month</span></h2>
            <div class="what-doctor-say clearfix">
              <div id="meet-doctors-carousel" class="owl-carousel meet-doctors-carousel text-center">
                <div class="item"> <img src="images/doctor-img.png" class="img-circle img-thumbnail list-inline" alt="" title="">
                  <h4>Dr.Saman Fernando<br />
                    <span>Urologist</span></h4>
                  <p>Dr.Saman has been with us for over a year now and he's contributed immensely to the community.</p>
                </div>
              </div>
            </div>
            
            <!--What to expect-->
            <h2 class="bordered light">What to expect after a <span>Kidney Transplant</span></h2>
            <div class="panel-group" id="accordion">
             <!--01-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title active"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <span><i class="fa fa-plus fa-minus"></i></span>Heart Conditions</a> </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">Kidney transplant patients are prone to heart conditions. So you have to be very careful and should constantly monitor your heart rate. Pulse should beat 60 to 100 times per minute on average.</div>
                </div>
              </div>
              <!--02-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <span><i class="fa fa-plus"></i></span>Flus</a> </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">Even a simple flu can cause severe damages once you get a transplantation. Body Temperature should be less than 38.5 °C at all times.</div>
                </div>
              </div>
              <!--03-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <span><i class="fa fa-plus"></i></span>High Blood Pressure</a> </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">Medication causes the blood pressure to rise automatically. Average blood pressure should be
bellow 130/80 mmHg.</div>
                </div>
              </div>
              <!--04-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"> <span><i class="fa fa-plus"></i></span>Weight Gain</a> </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                  <div class="panel-body">Weight gain is a common side effect after a kidney transplant. Exercise and physical activity should be a regular part of your life after transplantation.</div>
                </div>
              </div>
              <!--05-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"> <span><i class="fa fa-plus"></i></span>Doctor visits</a> </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                  <div class="panel-body">You must meet the surgical team at least twice a week to Inquire about any dose changes, vaccines etc</div>
                </div>
              </div>
              <!--06-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"> <span><i class="fa fa-plus"></i></span>Eat Healthy Food</a> </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                  <div class="panel-body">Healthy balanced diet keep patient feeling good. Always eat healthy and nutritious food</div>
                </div>
              </div>
              <!--07-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"> <span><i class="fa fa-plus"></i></span>Weight Loss </a> </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse">
                  <div class="panel-body"> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Aldus
                    
                    Page Maker including versions. </div>
                </div>
              </div>
              <!--08-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight"> <span><i class="fa fa-plus"></i></span>Medication</a> </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse">
                  <div class="panel-body">Anti-rejection medications has to be taken daily in the proper dose and at the right time. Don’t miss your Medicine</div>
                </div>
              </div>
              <!--09-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine"> <span><i class="fa fa-plus"></i></span>Quit bad habbits</a> </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse">
                  <div class="panel-body">Refrain from alcohol, keep healthy weight &amp; quit smoking. Quit all your bad habits</div>
                </div>
              </div>
              <!--10-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen"> <span><i class="fa fa-plus"></i></span>Vaccination</a> </h4>
                </div>
                <div id="collapseTen" class="panel-collapse collapse">
                  <div class="panel-body"> Vulnerability to germs increase after the surgery. Take necessary vaccines to prevent rejection</div>
                </div>
              </div>
              <!--11-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven"> <span><i class="fa fa-plus"></i></span>Anxiety and Depression</a> </h4>
                </div>
                <div id="collapseEleven" class="panel-collapse collapse">
                  <div class="panel-body">Anxiety and Depression are common among transplant patients. Always seek professional help</div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>
    
    <!-- App Store============================================ -->
    
    <section class="medicom-app" data-stellar-background-ratio="0.01">
      <div class="container">
        <div class="row">
          <div class="col-md-5"> <img src="images/mobile-hand.png" class="app-img" alt="App in Hand" title=""> </div>
          <div class="col-md-7">
            <div class="medicom-app-content">
              <h1>Safe Plant App Available</h1>
              <p class="lead">Stay connected with the community. Download our mobile application today at the following app stores.<span>AVAILABLE ON STORES</span> </p>
              <ul class="list-unstyled app-buttons">
                <li><a href="#."><img src="images/app-store-btn.png" alt="" title="App Store"></a></li>
                <li><a href="#."><img src="images/play-store-btn.png" alt="" title="Google App"></a></li>
                <li><a href="#."><img src="images/windows-store-btn.png" alt="" title="Windows App"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Testimonials============================================= -->
    
    <section class="testimonials bg-white text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="carousel-testimonials" class="owl-carousel slide testimonials-carousel">
                
				<!--Getting testimonials from the DB-->
                <?php
					$sql = "SELECT * FROM testimonials ORDER BY rand() LIMIT 5";
					$result = $con->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
						while($row = $result->fetch_assoc()) {
							echo '<div class="item">';
                			echo '<h1>What Our patients Say About Us</h1>';
							echo "<p>{$row["comment"]}</p>";
							echo "<div class=\"testimonials-patient-detail\"><img src=\"{$row["img_url"]}\" class=\"img-circle img-thumbnail\" alt=\"Patient Image\" title=\"{$row["name"]}\">";
							echo "<p>{$row["name"]}<span>{$row["patient_type"]}</span></p></div></div>";
						}
					}
				?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--end #content-index-->
  
  <div class="colourfull-row"></div>
  
  <!-- Footer============================================= -->
  <?php include_once("footer.php");	 ?>

  
  <!-- back to top --> 
  
  <a href="#." class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a> 
  
</div><!--end #wrapper--> 



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

<script>

	(function () {

		// Revolution slider
		var revapi;

		revapi = jQuery('.tp-banner').revolution(
		{
			delay:9000,

			startwidth:1170,

			startheight:682,

			hideThumbs:200,

			fullWidth:"on",

			forceFullWidth:"on"

		});		

	})();

</script>

</body>
</html>