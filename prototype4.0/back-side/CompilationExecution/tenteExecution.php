<?php


	include("../projet/projetController.php");
	include_once("../fichier/fichierController.php");
	
	
	$session_id = $_GET['session_id'];
	$file_id = $_GET['file_id'];
	
	$project_id = getProjetByFile_id($file_id);
	//get projet by file name
	$projetName = getProjetByID($project_id)[0]["nom"];
	
	//get filename by fileid
	$file = getFichierByID($file_id)[0];
	$filename = $file["nom"].".".$file["language"] ;
	
	$path = "../../../../tempFile/session_".$session_id."/".$projetName."/";
	
	//commande du language
	
	if($file["language"] == "py"){
		$commande = "python ";
		$cmd = 	$commande.$path.$filename;
	}
	else if($file["language"] == "java"){
		$commande = "java ";
		$cmd = 	"cd ".$path.";".$commande.$file["nom"];
	}
	else if($file["language"] == "rb"){
		$commande = "ruby ";
		$cmd = 	$commande.$path.$filename;
	}
	else if($file["language"] == "c"){
		$commande = "./";
		$cmd = 	$commande.$path.$filename;
	}
	else{
		$cmd = "echo \"Probleme de l'extension, choisir un fichier .rb .py .java ou .c\"";
	}
	
	if(is_dir($path)){
		
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
