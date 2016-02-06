<?php 
 	include("../../commons/commonBegin.php");
	include("sessionController.php");
	$id=$_GET["id"];
	$user_id=$_GET["user_id"];
	deleteSession($id);
	header('Location: ../../views/sessions/sessionView.php?user_id='.$user_id);
?>





<?php
	include("../../commons/commonEnd.php");
?>
