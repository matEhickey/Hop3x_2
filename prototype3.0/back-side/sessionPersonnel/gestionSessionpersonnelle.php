<?php 
	include ('sessionPersonnelController.php');
	$s=new sessionPersonnelController();

	$titre=$_POST['titre'];
	$commentaire=$_POST['commentaire'];
	$s->createSessionpersonnelle($titre,$commentaire);
	header('Location: ../../views/sessionPersonnel/listSessionPersonnel.php');
?>