<?php
	include("../commons/commonBegin.php");
	include("../back-side/EnonceController.php");
	
	$id=$_GET["id"];
	$enonce=getEnonceebyId($id);
	deleteEnoncee($id);
	header('Location: ../views/ajoutEnonce.php');
?>






<?php

	include("../commons/commonEnd.php");
?>

