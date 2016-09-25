<?php
    if (!isset($_COOKIE["loves"])) {
        setcookie("loves", serialize(array(0)), time() + (86400 * 30), "/");
    }
    
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysqli_error($con));
	if (!$con)
		{
		die('Could not connect: ' . mysqli_error($con));
		}

	mysqli_select_db($con, "discovery") or die(mysqli_error($con));
	date_default_timezone_set("America/New_York");
	$timestamp = date("m/d/Y, h:i A");
	$date = date("m/d/Y");
	$ip =  $_SERVER['REMOTE_ADDR'];
	if (isset($_SESSION['valid']))
	{
		$username = $_SESSION['userid'];
		$pagerequest = $_SERVER["REQUEST_URI"];
		mysqli_query($con, "UPDATE userinfo SET lastActive='$timestamp', lastPage='$pagerequest' WHERE username='$username'");
	}

	global $currentYear;
	$currentYear = date('Y');
?>
