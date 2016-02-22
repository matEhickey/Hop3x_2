<?php
	include_once("projetController.php");
	$session_id = $_GET["session_id"];
	$nom = $_GET["nom"];
	createProjet($session_id,$nom);
	
	
	
?>
