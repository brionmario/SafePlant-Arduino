    <div class="top-sec">
        <div class="container"></div>
        	<div class="top-sec-detail" id="top-sec-detail">
            <div class="container">
            <div class="row">
            	<div class="col-md-6">
            	<ul class="contact-info">
                	<li><i class="fa fa-mobile"></i><a href="tel:+94-777-933-830">(+94) 777 933 830</a></li>
                    <li><i class="fa fa-envelope"></i> <a href="mailto:teamscorpion@apareciumlabs.com?Subject=Website%20Inquiry!">info@safeplant.apareciumlabs.com</a></li>
                </ul>
                </div>
                <div class="col-md-6">
                <ul class="social2">
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
        	<a href="#." class="toggle-btn" id="toggle-btn"><i class="fa fa-plus"></i></a>
        </div>