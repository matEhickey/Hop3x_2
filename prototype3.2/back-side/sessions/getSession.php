<?php 
 	include("../../commons/commonBegin.php");
	include("sessionController.php");
	
	/* Obtention des parametres */
	$user_id= $_POST["user_id"];
	$name=htmlentities($_POST["sessionName"]);
	$sessionName=htmlentities($_POST["sessionName"]);
	$dateDebutSession=$_POST["dateDebutSession"];
	$dateFinSession=$_POST["dateFinSession"];

		
	/* Insertion d'une nouvelle session */
	if(createSession($user_id,$name,$dateDebutSession,$dateFinSession)){
		header('Location: ../../views/sessions/sessionView.php?user_id='.$user_id);
	}else{
		echo "<h3>probleme d'insertion</h3>";
	}
	
?>


<?php
	include("../../commons/commonEnd.php");
?>




