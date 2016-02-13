<?php 
 	include("../../commons/commonBegin.php");
	include("sessionControllerUniversitaire.php");
	
	/* Obtention des parametres */
	$enseignant_id= $_POST["enseignant_id"];
	$name=htmlentities($_POST["sessionName"]);
	$sessionName=htmlentities($_POST["sessionName"]);
	$dateDebutSession=$_POST["dateDebutSession"];
	$dateFinSession=$_POST["dateFinSession"];

		
	/* Insertion d'une nouvelle session */
	if(createSessionUniversitaire($enseignant_id,$name,$dateDebutSession,$dateFinSession)){
		header('Location: ../../views/sessions/sessionViewUniversitaire.php?enseignant_id='.$enseignant_id);
	}else{
		echo "<h3>probleme d'insertion</h3>";
	}
	
?>


<?php
	include("../../commons/commonEnd.php");
?>




