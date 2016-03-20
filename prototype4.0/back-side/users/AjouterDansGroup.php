<?php
	include("../../commons/commonBegin.php");
	include("../../back-side/users/scaffoldRGroup.php");

	$user_id = $_POST['id'];
	$group_id = $_POST['id_group'];

	createRGroup($user_id, $group_id);
		
?>