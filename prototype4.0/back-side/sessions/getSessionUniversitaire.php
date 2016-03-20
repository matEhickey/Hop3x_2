<?php 
 	include("../../commons/commonBegin.php");
 	include("sessionController.php");
	include("sessionControllerUniversitaire.php");
	
	/* Obtention des parametres */
	$enseignant_id= $_POST["enseignant_id"];
	$name=htmlentities($_POST["name"]);
	$dateDebutSession=$_POST["dateDebutSession"];
	$dateFinSession=$_POST["dateFinSession"];
	
	/* Insertion d'une nouvelle session abstraite */
	$user_id = 0; //-> get user_id by enseignant _id
	//recupere l'id insere
	$session_id = createSession($user_id,$name);
	
	
	
	/* Insertion d'une nouvelle session universitaire */
	if(createSessionUniversitaire($enseignant_id,$session_id,$dateDebutSession,$dateFinSession)){
		header('Location: ../../views/sessions/sessionViewUniversitaire.php?enseignant_id='.$enseignant_id);
	}else{
		echo "<h3>probleme d'insertion</h3>";
	}
	
?>


<?php
	include("../../commons/commonEnd.php");
?>




