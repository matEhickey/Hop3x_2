<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	$ec=new EnonceController();
	$idEnonce=$_GET["idEnonce"];
	$sessionUniversitaire_id=$_GET['sessionUniversitaire_id'];
	$enonce=$ec->getEnonceebyId($idEnonce);	
	$ec->deleteEnoncee($idEnonce);
	header('Location: ../../views/Enonce/listeEnoncee.php?sessionUniversitaire_id='.$sessionUniversitaire_id);

	include("../../commons/commonEnd.php");
?>
