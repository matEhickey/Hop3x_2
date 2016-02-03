<?php 
 	include("../../commons/commonBegin.php");
	include("sessionController.php");
	
	/* Obtention des parametres */
	$id=$_POST['id'];
	$name=htmlentities($_POST['sessionName']);
	$user_id=$_POST['user_id'];
	
	/* Insertion d'une nouvelle session */
	if(updateSession($id,$user_id,$name)){
		//Redirection vers la page qui liste les sessions
		header('Location: ../../views/sessions/sessionView.php');
	}else{
		echo "<h3>Probleme avec la modification</h3>";
	}
?>

<a href="../../views/sessionView.php" class="btn btn-default">Retour</a>


<?php
	include("../../commons/commonEnd.php");
?>



