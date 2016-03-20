<?php
	include("../../commons/commonBegin.php");
	include("../../back-side/users/ControllerRelationGroupe.php");
	
	$user_id = $_POST['id'];
	$group_id = $_POST['id_group'];

//creation de relation entre d'utilisateur et groupe
	createRGroup($user_id, $group_id);
		
?>