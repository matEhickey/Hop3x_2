<?php
	$user_id = $_GET['user_id'];
	$time = $_GET['time'];
	include_once "activityUsers.php";
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	echo "well received user: ".$user_id." - ".$time;
	createActivity_Users($user_id, $time);
?>