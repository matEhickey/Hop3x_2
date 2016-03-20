<?php 
 	include("../../commons/commonBegin.php");
	include("sessionController.php");
	include("sessionPersoController.php");
	
	/* Obtention des parametres */
	$user_id= $_POST['user_id'];
	$name=htmlentities($_POST["sessionName"]);
	
	$session_id = createSession($user_id,$name);	
	
	/* Insertion d'une nouvelle session */
	if($session_id > 0){
		createSessionperso($session_id);
		header('Location: ../../views/sessions/sessionView.php');
	}else{
		echo "<h3>probleme d'insertion</h3>";
	}
	
?>

<a href="../../views/sessionView.php" class="btn btn-default">Retour</a>


<?php
	include("../../commons/commonEnd.php");
?>




