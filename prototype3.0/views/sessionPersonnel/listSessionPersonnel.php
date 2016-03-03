<?php 
 	include("../../commons/commonBegin.php");
	include ("../../back-side/sessionPersonnel/sessionPersonnelController.php");
	$s=new sessionPersonnelController();
	$sessions=$s->getSessionpersonnelle();
	
?>
<div class="row hop3xBox">
			<!-- Panneau horizontal du dessus, fonctions importantes-->
			<h2>Liste des sessions personnels</h2>
</div>
<hr>
	<div class="col-md-2">

	</div>
	<div class="col-md-8">
		<a class="btn btn-primary" href="ajoutSessionPersonnel.php">
		<span class="glyphicon glyphicon-plus"></span> Ajouter une session Personnelle</a>
		<table class="table table-striped">
			<thead>
				<td>ID</td>
				<td>TITRE</td>
				<td>COMMENTAIRE</td>
				<td>MODIFIER</td>
				<td>SUPPRIMER</td>
			</thead>
			<tbody>
				<?php
					foreach ($sessions as $session) {
						echo "<tr>";
						echo "<td>".$session["id"]."</td>";
						echo "<td>".$session["titre"]."</td>";
						echo "<td>".$session["commentaire"]."</td>";
						echo "<td><a href='../Projet/ajoutprojet.php?id=".$session["id"]."' class='btn btn-default'>Voir la session</a></td>";
						echo "<td><a href='ModifierSessionPersonnel.php?id=".$session["id"]."' class='btn btn-default'>MODIFIER</a></td>";
						echo "<td><a href='../../back-side/sessionPersonnel/SupprimerSessionPersonnel.php?id=".$session["id"]."' class='btn btn-default' 
						onclick='return confirm(\'etes vous sur de vouloir supprimer la session \')>SUPPRIMER</a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="col-md-2">

	</div>
<?php
	include("../../commons/commonEnd.php");
?>