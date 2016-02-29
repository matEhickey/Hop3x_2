<?php
	include_once("projetController.php");
	//include_once("projetController.php");
	
	
	$session_id = $_GET["session_id"];
	$projets = getProjetBySession($session_id);
	
	
	foreach($projets as $projet){
		echo "<div class=\"row\">";
		echo "<button class=\"btn btn-primary\" onclick=\"showFichiers(".$projet["id"].")\">".$projet["nom"]."</button>";
		echo "<div id=\"menuFichiers".$projet["id"]."\">   </div>";
		echo "</div>";
	}
		echo "<div class=\"row\">";
		echo "<input type=\"text\" id=\"inputNomProjet\" placeholder=\"Nom du nouveau projet\"></input><button class=\"btn btn-primary\" onclick=\"newProjet(".$session_id.")\">*</button>";
		echo "</div>";


?>

