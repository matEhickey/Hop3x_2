<?php	
	include_once "eventsTextController.php";
	
	$event_id = $_POST['event_id'];
	$text = $_POST['text'];
	
	
	
	
	//var_dump($_POST);


	
	createEventtext($event_id,$text);

?>
