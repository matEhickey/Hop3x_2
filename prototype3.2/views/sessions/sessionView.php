<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/sessions/sessionController.php");
	
	/* Obtention des arguments */
	$user_id = $_GET['user_id'];
	$sessions = getSession();

?>




<p>
	<a class="btn btn-primary" href=<?php echo "\"ajoutSession.php?user_id=". $user_id ."\""; ?> >
		<span class="glyphicon glyphicon-plus"></span> Ajouter une session</a></p>
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<table class="table table-striped">
			<thead>		
			</thead>
			<?php 				
				foreach($sessions as $session){
					echo "<tr>";
						echo '<td>'.$session["name"].'</td>';
						echo '<td><a href="sessionIndividuelle.php?id='.$session["id"].'" class="btn btn-default">Visualiser</a></td>';
						echo '<td><a href="updateSession.php?id='.$session["id"].'" class="btn btn-default">Modifier</a></td>';
						echo '<td><a href="../../back-side/sessions/deleteSession.php?id='.$session["id"].'&user_id='.$user_id.'" class="btn btn-default"
							 onclick="return confirm(\'etes vous sur de vouloir supprimer la session \')">Supprimer</a></td>';
					echo "</tr>";	
				}
			?>
			</table>
<?php

	include("../../commons/commonEnd.php");
?>

