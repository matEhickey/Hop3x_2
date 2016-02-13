<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/sessions/sessionControllerUniversitaire.php");
	
	$id=$_GET["id"];
	$sessionUniversitaire=getSessionUniversitaire($id);
	$SessionUniversitaire_id=$sessionUniversitaire[0]["id"];

?>

<h1>Session Universitaire</h1>

<div class="row">
	<?php 
	
	if($sessionUniversitaire===null){
		echo '<h3>Cette session n\'existe pas encore</h3> ';
	}
	else{
		echo 'identifiant de la session courante '.$sessionUniversitaire[0]["id"].'<br/>'; 
		echo 'nom de la session courante'.$sessionUniversitaire[0]["name"].'<br/>';
		echo 'identifant de l\'enseignant proprietaire de cette session '.$sessionUniversitaire[0]["enseignant_id"].'<br/>';
	}
	

	echo '<a href="http://localhost/hop3x/prototype3.2/views/Enonce/listeEnoncee.php?sessionUniversitaire_id='.$SessionUniversitaire_id.'" class="btn btn-default">Ajouter un Enonce</a>';
	?>
</div>



<?php
	include("../../commons/commonEnd.php");
?>
