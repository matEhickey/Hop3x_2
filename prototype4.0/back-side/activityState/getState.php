<?php
	include_once "checkActivity.php";	
	$timeNow = $_GET['timeNow'];
	checkUserState($timeNow);
?>