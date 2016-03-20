<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/test/TestController.php");

	if($_GET['enonce_id']==null || $_GET['sessionUniversitaire_id']==null){
		//header('Location: ../../views/Utilitaires/404.php');
		echo "probleme enonce_id ou sessionuniv id non defini" ;
		//exit;
	}

		$enonce_id=$_GET['enonce_id'];
		$sessionUniversitaire_id=$_GET['sessionUniversitaire_id'];
		$tests=getTestbySession($sessionUniversitaire_id);

	


?>
<p>
	<a class="btn btn-primary" href=<?php echo "\"ajoutTest.php?enonce_id=".$enonce_id."&sessionUniversitaire_id=". $sessionUniversitaire_id ."\""; ?> >
		<span></span> Ajouter un Test</a></p>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
		<table class="table table-striped">
			<thead>
				<tr>
					<td>ID</td>
					<td>MESSAGE</td>
					<td>CODE</td>
					<td>MODIFIER</td>
					<td>SUPPRIMER</td>
				</tr>
			</thead>
			<?php
				foreach ($tests as $test) {
					echo "<tr>";
					echo "<td>".$test['id']."</td>";
					echo "<td>".$test['message']."</td>";
					echo "<td>".$test['code']."</td>";
					echo "<td><a href='modifiertest.php?test_id=".$test['id']."&id=".$enonce_id."' class='btn btn-primary'>MODIFIER</a></td>";
					echo "<td><a href='../../back-side/test/supprimertest.php?test_id=".$test['id']."&enonce_id=".$enonce_id."&sessionUniversitaire_id=".$sessionUniversitaire_id."' class='btn btn-primary'>SUPPRIMER</a></td>";
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
