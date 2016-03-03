<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/sessions/sessionControllerUniversitaire.php");
	
	$id=$_GET["id"];
	$sessionUniversitaire=getSessionUniversitaire($id);	//tu n'appele pas la fonction que tu veut, il sagit de getSessionUniversitairebyId 
	$SessionUniversitaire_id=$sessionUniversitaire[0]["id"];	//2 fois la meme variable, qui est surtout contenu dans la variable ..

?>

<h1>Session Universitaire</h1>

<div class="row">
	<?php 
	
	if($sessionUniversitaire===null){	
		echo '<h3>Cette session n\'existe pas encore</h3> ';	//faux, test si la fonction getSessionUniversitaire renvoi un objet (un tableau vide est different de null)....
	}
	else{
		echo 'identifiant de la session courante: '.$sessionUniversitaire[0]["id"].'<br/>'; 
		echo 'nom de la session courante: '.$sessionUniversitaire[0]["name"].'<br/>';
		echo 'identifant de l\'enseignant proprietaire de cette session: '.$sessionUniversitaire[0]["enseignant_id"].'<br/>';
	}
	

	echo '<a href="http://localhost/hop3x/prototype3.0/views/Enonce/listeEnoncee.php?sessionUniversitaire_id='.$SessionUniversitaire_id.'" class="btn btn-default">Ajouter un Enonce</a>';
	?>
</div>



<?php
	include("../../commons/commonEnd.php");
?>
