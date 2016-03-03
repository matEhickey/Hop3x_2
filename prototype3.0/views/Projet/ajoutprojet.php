<?php 
 	include("../../commons/commonBegin.php");
 	include '../../back-side/Projet/projetController.php';

 	$p=new ProjetController();

 	if(isset($_POST['nom'])){
 		$nom=$_POST['nom'];
 	}
?>
<div class="row hop3xBox">
			<!-- Panneau horizontal du dessus, fonctions importantes-->
			<h2>Liste des Projets</h2>
</div>
<hr>
	<div class="col-md-3">
		<ul style="list-style:none;">
			<li><a href="#" class="btn btn-primary">projet1</a></li>
			<li><a href="#" class="btn btn-primary">projet2</a></li>
		</ul>
	</div>
	<div class="col-md-9">
		<form method="" action="">

			<textarea name="" row="10" placeholder="votre  code ici" name="nom" ></textarea>
		</form>
		
	</div>
	
<?php
	include("../../commons/commonEnd.php");
?>