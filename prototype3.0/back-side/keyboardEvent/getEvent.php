<?php	
	include_once "eventsController.php";
	
	$file_id = $_GET['file_id'];
	$time = $_GET['time'];
	$text = $_GET['text'];
	$removed = $_GET['removed'];
	
	
	
	$from_l = $_GET['from_l'];
	$from_c = $_GET['from_c'];
	$to_l = $_GET['to_l'];
	$to_c = $_GET['to_c'];
	
	//var_dump($_GET);


	
	createEvenement($time,$file_id,$from_l,$from_c,$to_l,$to_c,$text,$removed);

?>
