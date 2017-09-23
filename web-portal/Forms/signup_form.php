
<?php
if ( isset( $_POST[ "submit" ] ) ) {

	session_start();
	$firstName = $_POST["f_name"];
	$lastName = $_POST["l_name"];
	$userName = $_POST["username"];
	$email = $_POST["email"];	
	$password = $_POST["password"];	 
	$confirm_password = $_POST["confirm_password"];	
	$regisNumber = $_POST["regnum"];
	$hospital = $_POST["hospital"];
	$pic = $_FILES['photo']['name'];
    $pic_loc = $_FILES['photo']['tmp_name'];
    $folder="images/Doctors/";
     


		if($password == $confirm_password){

			//--DB connection english
			include_once("../config/connection_safeplant/db_connect.php");

			$check="SELECT username FROM users_doctors WHERE username='$userName'";

			//Execute select SQL Querry
			$logPermition = mysqli_query( $con, $check );

			//read sigle row of result set
			$row = mysqli_fetch_array( $logPermition );

			if($row['username'] == $userName){
				echo "<script type='text/javascript'>confirm('The username you selected has already been taken.Please select a different username and try again!'); window.location.replace(\"../signup.php\");</script>";

			}else{

				if(move_uploaded_file($pic_loc,$folder.$pic)){
					echo "<script>alert('successfully uploaded');</script>";
				 }else{
					echo "<script>alert('error while uploading file');</script>";
				 }
				
				$sql="INSERT INTO users_doctors ". " (first_name,last_name,username,user_email,password,reg_num,hospital,img_url)
			VALUES ". "('$firstName','$lastName','$userName','$email','$password','$regisNumber','$hospital','$folder$pic')";
			$result = mysqli_query($con,$sql);

			//error code if the query fails to connect the db 
			if (!mysqli_query($con,$sql))
			{
				die('Error: ' . mysqli_error($con));
			} else{
				header('Location:../thanks.php');
				mysqli_close($con);
			}

		} 
			
	}else{
			echo '<script type="text/javascript">alert("Passwords does not match! Please re-enter."); window.location.replace("../signup.php");</script>';
	}
}

?>