<!--connection file-->
<?php
	$con=mysqli_connect("127.0.0.1:55112","azure","6#vWHD_$","safeplant_db");
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
