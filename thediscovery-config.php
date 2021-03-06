<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-config.php");
	
	// Reset time on the cookie storing the likes
    if (!isset($_COOKIE["loves"])) {
        setcookie("loves", serialize(array(0)), time() + (86400 * 30), "/");
    }
    
    // Connect to the database
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysqli_error($con));
	if (!$con) die('Could not connect: ' . mysqli_error($con));
	mysqli_select_db($con, "discovery") or die(mysqli_error($con));

	// Ensure correct timezone
	date_default_timezone_set("America/New_York");

	// For referencing the year
	define(YEAR, date('Y'));

	// Branded version of "THE DISCOVERY" (with icon)
	define(THE_DISCOVERY, "<font style=\"white-space: nowrap;\">The Disc<i class=\"demo-icon icon-eye\" style=\"margin: 0 -1.1em 0 -.25em;\"><font style=\"color:transparent;\">o</font></i>very</font>");
?>