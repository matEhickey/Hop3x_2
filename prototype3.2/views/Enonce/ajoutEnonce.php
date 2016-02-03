<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	$idsession=$_GET['idsession'];
	$enoncees=getEnoncee($idsession);
	
?>


<h3>creation d enocee</h3>

<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
	<form method="post" action="../../back-side/Enonce/gestionEnonce.php">
		<label for="idsession">idsession</label>
		<input type="text" name="idsession" value=<?php echo "\"".$idsession."\""; ?> ReadOnly><br/>
		<label for="message">message</label>
		<textarea name="message" rows="4" cols="5">Saisir un texte ici.</textarea>
		<label for="messagewin">message win</label>
		<textarea name="messagewin" rows="4" cols="5">Saisir un texte ici.</textarea>
		<input type="submit" name="creer" value="creer" class="btn btn-default"/>
		<input type="reset" name="remettre" value="remettre" class="btn btn-danger"/>
	</form>
</div>
<div class="col-md-3">
</div>
</div>

<div class="row">
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
	echo "<td><a href='ModifierEnoncee.php?id=".$enoncee["id"]."' class=\"btn btn-default\">Modifier</a>";
	echo "<a href='SupprimerEnoncee.php?id=".$enoncee["id"]."'
		onclick='return confirm(\" etes vous sur de vouloir supprimer cet enonce ?\")'
		 class='btn btn-danger' >  Supprimer</a></td>";
	echo "</tr>";
}

?>
</table>


</div>
<?php
	include("../../commons/commonEnd.php");
?>
