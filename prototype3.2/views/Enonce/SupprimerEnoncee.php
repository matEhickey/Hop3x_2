<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	$id=$_GET["id"];
	$idsession=$_GET['idsession'];
	$enonce=getEnonceebyId($id);
	deleteEnoncee($id);
	header('Location: ../../views/Enonce/listeEnoncee.php?idsession='.$idsession);

	include("../../commons/commonEnd.php");
?>
