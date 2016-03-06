<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/sessions/sessionControllerUniversitaire.php");
	
	/* Obtention des arguments */
	$enseignant_id = $_GET['enseignant_id'];
	$sessionsUniversitaires = getSessionUniversitaire();	//mais a quoi sert de recuperer un enseignant id si c'est pour donner tout les sessions confondu ???

?>




<p>
	<a class="btn btn-primary" href=<?php echo "\"ajoutSessionUniversitaire.php?enseignant_id=". $enseignant_id ."\""; ?> >
		 Ajouter une session Universitaire</a>
</p>

<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<table class="table table-striped">
			<thead>		
			</thead>
			<?php 				
				foreach($sessionsUniversitaires as $sessionUniversitaire){
					echo "<tr>";
						echo '<td>'.$sessionUniversitaire["name"].'</td>';
						echo '<td><a href="../Enonce/listeEnoncee.php?sessionUniversitaire_id='.$sessionUniversitaire["id"].'" class="btn btn-default">Visualiser</a></td>';
						echo '<td><a href="updateSessionUniversitaire.php?id='.$sessionUniversitaire["id"].'" class="btn btn-default">Modifier</a></td>';
						echo '<td><a href="../../back-side/sessions/deleteSessionUniversitaire.php?id='.$sessionUniversitaire["id"].'&enseignant_id='.$enseignant_id.'" class="btn btn-default"
							 onclick="return confirm(\'etes vous sur de vouloir supprimer la session \')">Supprimer</a></td>';
					echo "</tr>";	
				}
			?>
			</table>
			<button onclick="window.history.back();">Retour</button>
<?php

	include("../../commons/commonEnd.php");
?>

