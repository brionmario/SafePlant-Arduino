<?php
session_start();
$_SESSION['is_logged_in'] = false;
session_destroy(); 

echo "<script type='text/javascript'>alert('Successfully logged out.');window.location.replace(\"index.php\");</script>";
?>