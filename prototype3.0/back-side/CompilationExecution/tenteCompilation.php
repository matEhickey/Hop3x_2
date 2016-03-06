<?php

//dossier session
	$session_id = $_GET['session_id'];
	$path = "../../tempFile/session_".$session_id."/coucou/";
	
	
	if(is_dir($path)){
		
		exec( "./exec.sh"  ,$chaine,$retvar);
		var_dump($chaine);

		echo "return val =".$retvar;
	
	
	}
	else{
		echo "no directory";
	}
	
?>
