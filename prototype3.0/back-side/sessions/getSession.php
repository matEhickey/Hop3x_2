<?php 
 	include("../../commons/commonBegin.php");
	include("sessionController.php");
	
	/* Obtention des parametres */
	$user_id= $_POST['user_id'];
	$name=htmlentities($_POST["sessionName"]);
		
	/* Insertion d'une nouvelle session */
	if(createSession($user_id,$name) < 0){
		header('Location: ../../views/sessions/sessionView.php');
	}else{
		echo "<h3>probleme d'insertion</h3>";
	}
	
?>

<a href="../../views/sessionView.php" class="btn btn-default">Retour</a>


<?php
	include("../../commons/commonEnd.php");
?>




