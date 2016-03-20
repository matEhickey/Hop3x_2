<?php
	include("../../commons/commonBegin.php");
	include("../../back-side/users/ControllerUtilisateurs.php");

	$del = $_POST['id'];

//effacement d'utilisateurs
	deleteUsers($del);
		
?>