<?php

//dossier session
	$session_id = $_GET['session_id'];
	$path = "../../../../tempFile/session_".$session_id."/coucou/";
	
	
	if(is_dir($path)){
		
		
		
		echo(passthru("python ".$path."coucou.py"));					//"python ../../tempFile/session_".$session_id."/coucou/coucou.py"));
		
	
	
	}
	else{
		echo "no directory";
	}
	
?>
