<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/test/TestController.php");
	$id=$_GET['id'];
	$sessionUniversitaire_id=$_GET['sessionUniversitaire_id'];
	$t=new TestController();
	$test_id=$_GET['test_id'];
	$t->deleteTest($test_id);
	
	header('Location: ../../views/test/listTest.php?id='.$id.'&sessionUniversitaire_id='. $sessionUniversitaire_id );

	include("../../commons/commonEnd.php");
?>
