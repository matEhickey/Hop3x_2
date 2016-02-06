<?php 
 	include("../../commons/commonBegin.php");
	include("EnonceController.php");
 	
 	
 	if(isset($_POST['creer'])){
 		$idsession=$_POST['idsession'];
	 	$message=$_POST['message'];
	 	$messagewin=$_POST['messagewin'];
	 	createEnoncee($message,$messagewin,$idsession);
	 	//header('Location: ../../views/Enonce/listeEnoncee.php?idsession='.$idsession);	
 	}
 	if(isset($_POST['Modifier'])){
 		$idsession=$_POST['idsession'];
 		$id=$_POST['id'];
 		$message=$_POST['message'];
	 	$messagewin=$_POST['messagewin'];

	 	//echo "idsession :".$idsession;

	 	//echo "id :".$id;

	 	//echo "message :".$message;

	 	//echo "messagewin :".$messagewin;
	 	updateEnoncee($id,$message,$messagewin,$idsession);
	 	//$var='../../views/Enonce/listeEnoncee.php?idsession='.$idsession;
	 	//echo $idsession."<br/>";
	 	//header('Location: ../../views/Enonce/listeEnoncee.php?idsession='.$idsession);
 	}
 	header('Location: ../../views/Enonce/listeEnoncee.php?idsession='.$idsession);
 	

	include("../../commons/commonEnd.php");
?>
