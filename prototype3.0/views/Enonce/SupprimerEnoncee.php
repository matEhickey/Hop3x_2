<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	$id=$_GET["id"];
	$sessionUniversitaire_id=$_GET['sessionUniversitaire_id'];
	$enonce=getEnonceebyId($id);
	deleteEnoncee($id);
	header('Location: ../../views/Enonce/listeEnoncee.php?sessionUniversitaire_id='.$sessionUniversitaire_id);

	include("../../commons/commonEnd.php");
?>
