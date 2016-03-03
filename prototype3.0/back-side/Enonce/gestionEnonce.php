<?php 
 	include("../../commons/commonBegin.php");
	include("EnonceController.php");
 	$ec=new EnonceController();
 	
 	if(isset($_POST['creer'])){
 		$sessionUniversitaire_id=$_POST['sessionUniversitaire_id'];
	 	$message=$_POST['message'];
	 	$messagewin=$_POST['messagewin'];
	 	$ec->createEnoncee($message,$messagewin,$sessionUniversitaire_id);
 	}
 	if(isset($_POST['modifier'])){
 		$sessionUniversitaire_id=$_POST['sessionUniversitaire_id'];
 		$id=$_POST['idEnonce'];
 		$message=$_POST['message'];
	 	$messagewin=$_POST['messagewin'];
	 	$ec->updateEnoncee($idEnonce,$message,$messagewin,$sessionUniversitaire_id);
 	}
 	header('Location: ../../views/Enonce/listeEnoncee.php?sessionUniversitaire_id='.$sessionUniversitaire_id);
 	

	include("../../commons/commonEnd.php");
?>
