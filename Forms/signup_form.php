<?PHP
ob_start();
session_start();

//--DB connection english
include_once("../config/connection_safeplant/db_connect.php");   

$firstName = $_POST["f_name"];
$lastName = $_POST["l_name"];
$userName = $_POST["username"];
$email = $_POST["email"];	
$password = $_POST["password"];	 
$regisNumber = $_POST["regnum"];
$hospital = $_POST["hospital"];
	  
//inject to db	  

	  //query to insert data in to the databse
	$sql="INSERT INTO users_doctors ". " (first_name,last_name,username,user_email,password,reg_num,hospital)
	VALUES ". "('$firstName','$lastName','$userName','$email','$password','$regisNumber','$hospital')";

	//error code if the query fails to connect the db 
	if (!mysqli_query($con,$sql))
  	{
  		die('Error: ' . mysqli_error($con));
  	}
//end of db injection

header("Location:../login.php");
ob_end_flush();

?>