<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/test/TestController.php");
	$t=new TestController();
	if(isset($_POST['ajouter'])){
		$code=$_POST['code'];
		$message=$_POST['message'];
		$sessionUniversitaire_id=$_POST['sessionUniversitaire_id'];
		$id=$_POST['id'];
		$t->createTest($message,$code,$sessionUniversitaire_id);
	}
	if(isset($_POST['modifier'])){
		$test_id=$_GET['test_id'];
		$code=$_POST['code'];
		$message=$_POST['message'];
		$sessionUniversitaire_id=$_POST['sessionUniversitaire_id'];
		$id=$_POST['id'];
		$t->updateTest($test_id,$message,$code);
	}


	
	header('Location: ../../views/test/listTest.php?id='.$id.'&sessionUniversitaire_id='.$sessionUniversitaire_id );

	
?>


<?php
	include("../../commons/commonEnd.php");
?>
