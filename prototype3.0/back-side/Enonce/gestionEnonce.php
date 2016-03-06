<?php 
 	include("../../commons/commonBegin.php");
	include("EnonceController.php");
 	
 	
 	if(isset($_POST['creer'])){
 		$sessionUniversitaire_id=$_POST['sessionUniversitaire_id'];
	 	$message=$_POST['message'];
	 	$messagewin=$_POST['messagewin'];
	 	createEnoncee(htmlentities($message),htmlentities($messagewin),$sessionUniversitaire_id);
	 	//header('Location: ../../views/Enonce/listeEnoncee.php?idsession='.$idsession);	
 	}
 	if(isset($_POST['Modifier'])){
 		$sessionUniversitaire_id=$_POST['sessionUniversitaire_id'];
 		$id=$_POST['id'];
 		$message=$_POST['message'];
	 	$messagewin=$_POST['messagewin'];

	 	//echo "idsession :".$idsession;

	 	//echo "id :".$id;

	 	//echo "message :".$message;

	 	//echo "messagewin :".$messagewin;
	 	updateEnoncee($id,htmlentities($message),htmlentities($messagewin),$sessionUniversitaire_id);
	 	//$var='../../views/Enonce/listeEnoncee.php?idsession='.$idsession;
	 	//echo $idsession."<br/>";
	 	//header('Location: ../../views/Enonce/listeEnoncee.php?idsession='.$idsession);
 	}
 	header('Location: ../../views/Enonce/listeEnoncee.php?sessionUniversitaire_id='.$sessionUniversitaire_id);
 	

	include("../../commons/commonEnd.php");
?>
