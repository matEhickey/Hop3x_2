<?php
	include("eventsRemovedController.php");
	
	$event_id = $_GET['event_id'];
	$text = $_GET['text'];
	
	createEventremoved($event_id,$text);
	
?>
