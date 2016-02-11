<?php 
 	include("../../commons/commonBegin.php");
	include("sessionController.php");
	
	/* Obtention des parametres */
	$id=$_POST['id'];
	$user_id= $_POST["user_id"];
	$name=htmlentities($_POST["sessionName"]);
	$sessionName=htmlentities($_POST["sessionName"]);
	$dateDebutSession=$_POST["dateDebutSession"];
	$dateFinSession=$_POST["dateFinSession"];
	
	/* Insertion d'une nouvelle session */
	if(updateSession($id,$user_id,$name,$dateDebutSession,$dateFinSession)){
		//Redirection vers la page qui liste les sessions
		header('Location: ../../views/sessions/sessionView.php?user_id='.$user_id);
	}else{
		echo "<h3>Probleme avec la modification</h3>";
	}
?>



<?php
	include("../../commons/commonEnd.php");
?>



