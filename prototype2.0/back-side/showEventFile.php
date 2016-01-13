<?php
	include_once "eventsController.php";
	$file_id = $_GET['file_id'];
	$events = getEvenementhop3xFile($file_id);
	foreach($events as $event){
		foreach($event as $col){
			print($col." ");
		}
		print("<br>");
	}
?>