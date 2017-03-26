  <footer id="footer" class="dark">
    <div class="container">
      <div class="row">
        <div class="col-md-3"> 
          
          <!-- Footer Widget============================================= -->
          
          <div class="footer-widget">
            <h4><span>Safe Plant</span></h4>
            <ul class="footer-nav list-unstyled clearfix">
              <li><a href="index.php"><i class="fa fa-long-arrow-right"></i>Home</a></li>
              <li><a href="blog.php"><i class="fa fa-long-arrow-right"></i>Blog</a></li>
              <li><a href="pricing.php"><i class="fa fa-long-arrow-right"></i>Pricing</a></li>
              <li><a href="aboutus.php"><i class="fa fa-long-arrow-right"></i>About Us</a></li>
              <li><a href="contactus.php"><i class="fa fa-long-arrow-right"></i>Contact Us</a></li>
              <li><a href="volunteer.php"><i class="fa fa-long-arrow-right"></i>Volunteer</a></li>
              <li><a href="login.php"><i class="fa fa-long-arrow-right"></i>Log In</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3"> 
          
          <!-- Footer Widget============================================= -->
          
          <div class="footer-widget">
            <h4><span>newsletter</span></h4>
            <div class="newsletter clearfix"> <i class="fa fa-envelope"></i>
              <p class="newsletter-text">Sign up with your name and email to
                
                get updates fresh updates.</p>
              <div class="success" id="message-news" style="display:none;">Thank you! You have successfully subscribed.</div>
              <form name="newsletter_form" id="newsletter_form" method="post" action="submit.php" onSubmit="return false">
                <input type="text" name="news_name" id="news_name" placeholder="Your Name" onKeyPress="removeChecks();">
                <input type="email" name="news_email_address" id="news_email_address" placeholder="Email Address" onKeyPress="removeChecks();">
                <input type="submit" value="subscribe" class="btn btn-default btn-rounded" onClick="validateNewsletter();">
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-3"> 
          
          <!-- Footer Widget============================================= -->
          
          <div class="footer-widget">
            <h4><span>Latest Tweets</span></h4>
            <!--Twitter Widget by Aparecium Labs-->
            <div class="twitter-widget">
              <a class="twitter-timeline" href="https://twitter.com/safe_plant" data-width="300"
  data-height="300" data-chrome="nofooter noborders transparent" data-theme="dark" data-tweet-limit="1">Tweets by SAFE PLANT</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>
        </div>
        <div class="col-md-3"> 
          
          <!-- Footer Social Media============================================= -->
          
          <div class="footer-widget">
            <h4><span>get in touch</span></h4>
            <p>We value your feedback deeply and it'll help us in providing a quality service in the future. </p>
            <div class="contact-widget"> <i class="fa fa-home"></i>
              <p>No-255, Kalamulla, Kalutara.</p>
              <i class="fa fa-globe"></i>
              <p><a href="#.">safeplant.apareciumlabs.com</a></p>
              <i class="fa fa-envelope"></i>
              <p><a href="mailto:teamscorpion@apareciumlabs.com?Subject=Website%20Inquiry!">info@safeplant.apareciumlabs.com</a></p>
              <i class="fa fa-mobile"></i>
              <p class="phone-number">(+94) 777 933 830</p>
            </div>
            <ul class="social3 clearfix">
              <!--Social Media Buttons-->
				<?php
				$sql = "SELECT * FROM social_links";
				$result = $con->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row
					while($row = $result->fetch_assoc()) {
                	echo "<li><a href=\"{$row["url"]}\" target=\"_blank\"><i class=\"fa fa-{$row["social_name"]}\" ></i></a></li>";
					}
				}
				?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Copyright============================================= -->
    
    <p class="copyright text-center">Copyright &copy; 2017 Team Scorpion. All right reserved.</p>
    
    <!-- Footer Bottom============================================= -->
    
    <div class="container">
      <div class="row">
        <div class="col-md-2"><a href="#."><img src="images/team-scorpion-footer.png" alt="Team Scorpion" title="Medicom Logo"></a></div>
        <div class="col-md-10">
          <p class="footer-bottom-text">We are a passionate group of undergraduate students who believe in modern technology and we are looking forward to make a difference in the community using our knowledge. Technology is often misused in the current society and we are willing to break that hype.</p>
        </div>
      </div>
    </div>
  </footer>