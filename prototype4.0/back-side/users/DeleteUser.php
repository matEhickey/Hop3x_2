<?php
	include("../../commons/commonBegin.php");
	include("../../back-side/users/scaffoldUsers.php");

	$del = $_POST['id'];
	deleteUsers($del);
		
?>