<?php

   //--DB connection english
   include_once("../config/connection_safeplant/db_connect.php");

   session_start();
   $username = $_POST["username"];
   $password = $_POST["password"];
   

   //write sql querry
   $select="SELECT username,password FROM users_doctors WHERE username='$username' AND password='$password'";
   
   //Execute select SQL Querry
   $result=mysqli_query($con,$select);
   
   //read sigle row of result set
   $row=mysqli_fetch_array($result);
   
	   if($row['username'] == $username){

			 $_SESSION["userlog"] = $username;
		   	 $_SESSION['is_logged_in'] = true;
			 echo "<script type='text/javascript'>alert('Login Successful');window.location.replace(\"../patients.php\");</script>";

	   }else{
     
     		echo "<script type='text/javascript'>alert('Invalid Username and Password combination. Please enter the valid username and password.');window.location.replace(\"../login.php\");</script>";
   		}
   
   //close connection
   mysqli_close($con);
   
   ?>