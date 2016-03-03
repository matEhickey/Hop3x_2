<?php 
include ('sessionPersonnelController.php');
	$s=new sessionPersonnelController();
	$id=$_GET['id'];
	$s->deleteSessionpersonnelle($id);

	header('Location: ../../views/sessionPersonnel/listSessionPersonnel.php');

?>