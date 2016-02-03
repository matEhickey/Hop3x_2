<?php	
	include_once "eventsController.php";
	
	$file_id = $_GET['file_id'];
	$time = $_GET['time'];
	$text = $_GET['text'];
	$removed = $_GET['removed'];
	
	
	
	$from_l = 0;
	$from_c = 0;
	$to_l = 0;
	$to_c = 0;

	print("  Recu serveur:");
	print("  file_id =".$file_id);
	print("  text ='".$text."'");
	print("  removed='".$removed."'");
	print("  at :".$time);
	print("\n");
	
	createEvenement($time,$file_id,$from_l,$from_c,$to_l,$to_c,$text,$removed);
	//print("   link:".$actual_link);
?>
