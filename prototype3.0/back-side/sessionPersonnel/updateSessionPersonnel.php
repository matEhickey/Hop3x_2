<?php 
 	include ("../../back-side/sessionPersonnel/sessionPersonnelController.php");
 	$id=$_POST['id'];
 	$titre=$_POST['titre'];
 	$commentaire=$_POST['commentaire'];
 	$s=new sessionPersonnelController();
 	$s->updateSessionpersonnelle($id,$titre,$commentaire);



	header('Location: ../../views/sessionPersonnel/listSessionPersonnel.php');


?>