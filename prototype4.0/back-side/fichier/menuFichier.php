<?php
	include_once("fichierController.php");
	$projet_id = $_GET["projet_id"];
	$fichiers = getFichierByProjectID($projet_id);
	
	foreach($fichiers as $fichier){
		echo "<div class=\"row\">";
		echo "<button onclick=\"loadFichier(".$fichier["id"].")\">".$fichier["nom"].".".$fichier["language"]."</button>";
		echo "</div>";
	}
	echo "<div class=\"row\">";
	echo "<input type=\"text\" id=\"inputNomFichier\" placeholder=\"Nom du nouveau fichier\"></input>.<input type=\"text\" size=\"4\" id=\"inputExtenFichier\" placeholder=\"Extension\"></input><button onclick=\"newFichier(".$projet_id.")\">*</button>";
	echo "</div>";
?>
