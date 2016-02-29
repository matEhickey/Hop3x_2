<?php	
	include_once "eventsTextController.php";
	
	$event_id = $_GET['event_id'];
	$text = $_GET['text'];
	
	
	
	
	//var_dump($_GET);


	
	echo createEventtext($event_id,$text);

?>
