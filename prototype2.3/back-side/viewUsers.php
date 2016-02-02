<?php
	include_once "usersController.php";
	$users= getUsershop3X();
	foreach($users as $user){
		foreach($user as $col){
			print($col." ");
		}
		print("<br>");
	}
?>