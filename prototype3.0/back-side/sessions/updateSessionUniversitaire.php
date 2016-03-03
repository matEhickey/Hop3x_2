<?php 
 	include("../../commons/commonBegin.php");
	include("sessionControllerUniversitaire.php");
	
	/* Obtention des parametres */
	$id=$_POST['id'];
	$enseignant_id= $_POST["enseignant_id"];
	$name=htmlentities($_POST["sessionName"]);
	$sessionName=htmlentities($_POST["sessionName"]);
	$dateDebutSession=$_POST["dateDebutSession"];
	$dateFinSession=$_POST["dateFinSession"];
	$s=new SessionUniversitaireController();
	
	/* Insertion d'une nouvelle session */
	if($s->updateSessionUniversitaire($id,$enseignant_id,$name,$dateDebutSession,$dateFinSession)){
		//Redirection vers la page qui liste les sessions
		header('Location: ../../views/sessions/sessionViewUniversitaire.php?enseignant_id='.$enseignant_id);
	}else{
		echo "<h3>Probleme avec la modification</h3>";
	}
?>



<?php
	include("../../commons/commonEnd.php");
?>



