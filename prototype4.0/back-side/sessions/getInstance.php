<?php
	include("instanceUniversitaireController.php");
	include("sessionController.php");
	include("sessionControllerUniversitaire.php");
	
	$user_id = $_GET["user_id"];
	$sessionUniv_id = $_GET["sessionUniv_id"];
	
	$instances = getInstanceuniversitaireByUserAndSessionUniv($user_id,$sessionUniv_id);
	$session_univ = getSessionUniversitairebyId($sessionUniv_id);
	
	
	
	$sessionAbstraite_id = $session_univ[0]['session_id'];
	$sessionAbstraite = getSessionbyId($sessionAbstraite_id);
	
	$sessionName =  $sessionAbstraite[0]['name'];
	
	//var_dump($sessionName);
	
	
	if(count($instances) == 0){
		//creation de la session
		$session_id = createSession($user_id,$sessionName);
		//Creation de l'instance
		createInstanceuniversitaire($sessionUniv_id,$user_id,$session_id);
	}
	else if((count($instances) < 0)||( count($instances) > 1)){
		echo "probleme singleton de la session (<0 ou >1)";
	}
	else{
		//instance existante
		$session_id = $instances[0]['session_id'];
		
	}
	
	if($session_id>0){
		//echo "good;";
		header('Location: ../../views/Editeur/editeur.php?session_id='.$session_id);
	}
	else{
		echo "pas good, session_id =".$session_id;
	}
	
	
?>
