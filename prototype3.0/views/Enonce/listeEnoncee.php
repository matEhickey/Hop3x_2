<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	$sessionUniversitaire_id=$_GET['sessionUniversitaire_id'];
	$ec=new EnonceController();
	$enoncees=$ec->getEnoncee($sessionUniversitaire_id);
	
?>

<div class="row hop3xBox">
			<!-- Panneau horizontal du dessus, fonctions importantes-->
			<h3>Liste des enonces</h3>
</div>
<hr>

<p>
	<a class="btn btn-primary" href=<?php echo "\"ajoutEnonce.php?sessionUniversitaire_id=". $sessionUniversitaire_id ."\""; ?> >
		<span class="glyphicon glyphicon-plus"></span> Ajouter un enonce</a></p>
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<table class="table table-striped">
		<thead>
			<td>ID</td>
			<td>MESSAGE</td>
			<td>MESSAGEWIN</td>
			<td>IDSESSION</td>
			<td>GESTION DES TESTS</td>
			<td>MODIFICATION</td>
			<td>SUPPRESSION</td>
		</thead>
		<?php 
		foreach($enoncees as $enoncee){
			echo "<tr>";
			echo "<td>".$enoncee["idEnonce"]."</td>";
			echo "<td>".$enoncee["message"]."</td>";
			echo "<td>".$enoncee["messagewin"]."</td>";
			echo "<td>".$enoncee["sessionUniversitaire_id"]."</td>";
			echo "<td><a href='../test/listTest.php?id=".$enoncee["idEnonce"]."&sessionUniversitaire_id=".$sessionUniversitaire_id."' class='btn btn-primary'>Gestion des Tests</a></td>";
			echo "<td><a href='ModifierEnoncee.php?id=".$enoncee["idEnonce"]."&sessionUniversitaire_id=".$sessionUniversitaire_id."' class='btn btn-primary' >Modifier</a></td>";
			echo "<td><a href='SupprimerEnoncee.php?id=".$enoncee["idEnonce"]."&sessionUniversitaire_id=".$sessionUniversitaire_id."'  class='btn btn-primary'
			onclick='return confirm(\" etes vous sur de vouloir supprimer cet enonce ?\")'
				  >Supprimer</a></td>";
			echo "</tr>";
		}
		?>
		</table>
	</div>
	<div class="col-md-2">
	</div>
</div>


<?php
	include("../../commons/commonEnd.php");
?>
