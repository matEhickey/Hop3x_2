<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	$sessionUniversitaire_id=$_GET['sessionUniversitaire_id'];
	$enoncees=getEnoncee($sessionUniversitaire_id);
	
?>

<p>
	<a class="btn btn-primary" href=<?php echo "\"ajoutEnonce.php?sessionUniversitaire_id=". $sessionUniversitaire_id ."\""; ?> >
		<span></span> Ajouter un enonce</a></p>
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
			<td>OPERATION</td>
		</thead>
		<?php 
		
		foreach($enoncees as $enoncee){
			echo "<tr>";
			echo "<td>".$enoncee["id"]."</td>";
			echo "<td>".str_replace("\n","<br>",$enoncee["message"])."</td>";
			echo "<td>".$enoncee["messagewin"]."</td>";
			echo "<td>".$enoncee["sessionUniversitaire_id"]."</td>";
			echo "<td><a href='../test/listTest.php?enonce_id=".$enoncee["id"]."&sessionUniversitaire_id=".$sessionUniversitaire_id."' class='btn btn-primary'>Gestion des Tests</a></td>";
			echo "<td><a href='ModifierEnoncee.php?id=".$enoncee["id"]."&sessionUniversitaire_id=".$sessionUniversitaire_id."' class='btn btn-primary' >Modifier</a>";
			echo "<a href='SupprimerEnoncee.php?id=".$enoncee["id"]."&sessionUniversitaire_id=".$sessionUniversitaire_id."'  class='btn btn-primary'
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
<button onclick="window.history.back();">Retour</button>


<?php
	include("../../commons/commonEnd.php");
?>
