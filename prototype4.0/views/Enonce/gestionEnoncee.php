<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
 	
 	$message=$_POST['message'];
 	$messagewin=$_POST['messagewin'];
 	createEnoncee($message,$messagewin);
 	//header('Location: ../views/Enonce/ajoutEnoncee.php');
	
?>

<a href="http://localhost/hop3x/hop3x/prototype2.0/views/ajoutEnonce.php" class="btn btn-default">Retour</a>

<?php
	include("../../commons/commonEnd.php");
?>
