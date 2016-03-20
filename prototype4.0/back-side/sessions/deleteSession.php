<?php 
 	include("../../commons/commonBegin.php");
	include("sessionController.php");
	$id=$_GET["id"];
	deleteSession($id);
	header('Location: ../../views/sessions/sessionView.php');
?>





<?php
	include("../../commons/commonEnd.php");
?>
