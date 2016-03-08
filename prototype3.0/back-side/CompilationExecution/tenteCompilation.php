<?php

//dossier session
	$session_id = $_GET['session_id'];
	$path = "../../../../tempFile/session_".$session_id."/coucou/";
	
	
	if(is_dir($path)){
		
		$cmd = 	"python ".$path."coucou.py";
		$error_log = "";
		$cmd.=" 2>&1";	//to display the errors
		
		exec($cmd,$output,$return_var);
		foreach($output as $line){
			echo $line."\n";
		}
		
	
	
	}
	else{
		echo "no directory";
	}
	
?>
