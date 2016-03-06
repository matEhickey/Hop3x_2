<?php
	
	
	
	//dossier session
	$session_id = $_GET['session_id'];
	$path = "../../tempFile/session_".$session_id;
	
	
	
	if(is_dir($path)){
		rmdir($path);
	}
	
	mkdir($path);
	
	
	//get the projects and files
	include("../reconstruction/reconstruct.php");
	include("../projet/projetController.php");
	include_once("../fichier/fichierController.php");
	
	$projets = getProjetBySession($session_id);
	foreach($projets as $projet){
		$projectDir = $path."/".$projet["nom"];
		mkdir($projectDir);
		$files = getFichierByProjectID($projet["id"]);
		foreach($files as $file){
			$fileName = $file["nom"].".".$file["language"];
			$newfile = fopen($projectDir."/".$fileName,"w+");
			
			$content = reconstructFichier($file["id"]);
			
			
			fwrite($newfile,$content);
			fclose($newfile);
		}
	}

?>
