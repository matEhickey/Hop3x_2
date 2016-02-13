<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/sessions/sessionControllerUniversitaire.php");
	
	/* Obtention des arguments */
	$enseignant_id = $_GET['enseignant_id'];
	$sessionsUniversitaires = getSessionUniversitaire();

?>




<p>
	<a class="btn btn-primary" href=<?php echo "\"ajoutSessionUniversitaire.php?enseignant_id=". $enseignant_id ."\""; ?> >
		<span class="glyphicon glyphicon-plus"></span> Ajouter une session Universitaire</a>
	<a class="btn btn-primary" href="#" >
		<span class="glyphicon glyphicon-plus"></span> Ajouter une session</a></p>

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
						echo '<td><a href="sessionUniversitaire.php?id='.$sessionUniversitaire["id"].'" class="btn btn-default">Visualiser</a></td>';
						echo '<td><a href="updateSessionUniversitaire.php?id='.$sessionUniversitaire["id"].'" class="btn btn-default">Modifier</a></td>';
						echo '<td><a href="../../back-side/sessions/deleteSessionUniversitaire.php?id='.$sessionUniversitaire["id"].'&enseignant_id='.$enseignant_id.'" class="btn btn-default"
							 onclick="return confirm(\'etes vous sur de vouloir supprimer la session \')">Supprimer</a></td>';
					echo "</tr>";	
				}
			?>
			</table>
<?php

	include("../../commons/commonEnd.php");
?>

