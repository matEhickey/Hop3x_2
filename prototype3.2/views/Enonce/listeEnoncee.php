<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	$idsession=$_GET['idsession'];
	$enoncees=getEnoncee($idsession);
	
?>

<p>
	<a class="btn btn-primary" href=<?php echo "\"ajoutEnonce.php?idsession=". $idsession ."\""; ?> >
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
			<td>OPERATION</td>
		</thead>
		<?php 
		foreach($enoncees as $enoncee){
			echo "<tr>";
			echo "<td>".$enoncee["id"]."</td>";
			echo "<td>".$enoncee["message"]."</td>";
			echo "<td>".$enoncee["messagewin"]."</td>";
			echo "<td>".$enoncee["idsession"]."</td>";
			echo "<td><a href='ModifierEnoncee.php?id=".$enoncee["id"]."&idsession=".$idsession."' > <span class='glyphicon glyphicon-edit'></span>Modifier</a>";
			echo "<a href='SupprimerEnoncee.php?id=".$enoncee["id"]."&idsession=".$idsession."'
				onclick='return confirm(\" etes vous sur de vouloir supprimer cet enonce ?\")'
				  ><span class='glyphicon glyphicon-trash'></span>  Supprimer</a></td>";
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
