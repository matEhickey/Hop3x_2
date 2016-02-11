<?php
	include_once "activityUsers.php";	
	
	$user_id = $_GET['user_id'];
	$time = $_GET['time'];
	
	echo "well received user: ".$user_id." - ".$time;
	createActivity($user_id, $time);
?>
