<?php 
 	include("../../commons/commonBegin.php");
	include("sessionControllerUniversitaire.php");
	$id=$_GET["id"];
	$enseignant_id=$_GET["enseignant_id"];
	deleteSessionUniversitaire($id);
	header('Location: ../../views/sessions/sessionViewUniversitaire.php?enseignant_id='.$enseignant_id);
?>





<?php
	include("../../commons/commonEnd.php");
?>
