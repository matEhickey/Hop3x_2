<?php 
 	include("../commons/commonBegin.php");
	include("../back-side/sessionController.php");
	$id=$_GET["id"];
	deleteSession_Hop3X($id);
	header('Location: ../views/sessionView.php');
?>





<?php
	include("../commons/commonEnd.php");
?>
