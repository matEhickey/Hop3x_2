<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	$id=$_GET["id"];
	$enonce=getEnonceebyId($id);
	deleteEnoncee($id);
	//header('Location: ../Enonce/ajoutEnonce.php');
?>





<?php
	include("../../commons/commonEnd.php");
?>
