<?php 
 	include("../commons/commonBegin.php");
 	include("../back-side/EnonceController.php");
 	
 	
 	if(isset($_POST['creer'])){
	 	$message=$_POST['message'];
	 	$messagewin=$_POST['messagewin'];
	 	createEnoncee($message,$messagewin);
 	}
 	if(isset($_POST['Modifier'])){
 		$id=$_POST['id'];
 		$message=$_POST['message'];
	 	$messagewin=$_POST['messagewin'];
	 	updateEnoncee($id,$message,$messagewin);
 	}
 	
 	header('Location: ../views/ajoutEnonce.php');
	
?>


<?php
	include("../commons/commonEnd.php");
?>
