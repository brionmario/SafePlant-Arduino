<?PHP
ob_start();
session_start();

//--DB connection english
include_once("../config/connection_safeplant/db_connect.php");   

if ( isset( $_POST[ "submit" ] ) ) {

	
	$feedback = $_POST["feedback"];
	$id = $_POST["id"];
	$status = 1;
	  
	//query to insert data in to the databse
	$sql="UPDATE feedback SET feedback = '$feedback', status='$status' WHERE id='$id'";

	//error code if the query fails to connect the db 
	if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  	}
//end of db injection

header("Location:../sensordata.php");
ob_end_flush();
}
?>