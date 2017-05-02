<!--connection file-->
<?php
	$con=mysqli_connect("localhost","root","","safeplant");
	//mysql_query("SET NAMES 'utf8'"); 
	//mysql_query("SET CHARACTER SET 'utf8'");

	// Check connection
	if (mysqli_connect_errno())
  	{
  	//echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}
	//echo "<script type='text/javascript'>alert('Connection States : Good !');</script>";
	//echo  "Connection Successful !" ;
	
?>