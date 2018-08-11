<?PHP
ob_start();
session_start();

//--DB connection english
include_once("../config/connection_safeplant/db_connect.php");   

$firstName = $_POST["app_fname"];
$lastName = $_POST["app_lname"];
$email = $_POST["app_email_address"];
$telNo = $_POST["app_phone"];
$color = $_POST["option"];
$quantity = $_POST["quantity"];
	  
//inject to db	  

	  //query to insert data in to the databse
	$sql="INSERT INTO order_details ". " (firstName,lastName,email,telNo,color,quantity)
	VALUES ". "('$firstName','$lastName','$email','$telNo','$color','$quantity')";

	//error code if the query fails to connect the db 
	if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  	}
//end of db injection

header("Location:../thanksorder.php");
ob_end_flush();

?>