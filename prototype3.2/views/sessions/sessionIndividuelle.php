<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/sessions/sessionController.php");
	
	$id=$_GET["id"];
	$session=getSession($id);
	$idSession=$session[0]["id"];

?>

<h1>Session Individuelle</h1>

<div class="row">
	<?php 
	
	if($session===null){
		echo '<h3>Cette session n\'existe pas encore</h3> ';
	}
	else{
		echo 'identifiant de la session courante '.$session[0]["id"].'<br/>'; 
		echo 'nom de la session courante'.$session[0]["name"].'<br/>';
		echo 'identifant de l\'enseignant proprietaire de cette session '.$session[0]["user_id"].'<br/>';
	}
	

	echo '<a href="http://localhost/hop3x/prototype3.2/views/Enonce/listeEnoncee.php?idsession='.$idSession.'" class="btn btn-default">Ajouter un Enonce</a>';
	?>
</div>



<?php
	include("../../commons/commonEnd.php");
?>
