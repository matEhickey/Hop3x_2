<?php
	
	//get the projects and files
	include("../reconstruction/reconstruct.php");
	include("../projet/projetController.php");
	include_once("../fichier/fichierController.php");
	
	//dossier session
	$session_id = $_GET['session_id'];
	$path = "../../../../tempFile/session_".$session_id;
	
	
	
	if(!is_dir($path)){
		mkdir($path);
	}
		
			$projets = getProjetBySession($session_id);
			foreach($projets as $projet){
				$projectDir = $path."/".$projet["nom"];
				if(!is_dir($projectDir)){
					mkdir($projectDir);
				}
				$files = getFichierByProjectID($projet["id"]);
				foreach($files as $file){
					$fileName = $file["nom"].".".$file["language"];
					$pathAndFile = $projectDir."/".$fileName;
					$newfile = fopen($pathAndFile,"w+");
					chmod($pathAndFile, 0777);
			
					$content = reconstructFichier($file["id"]);
			
			
					fwrite($newfile,$content);
					fclose($newfile);
				}
			}
		
	

?>
