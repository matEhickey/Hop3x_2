<?php 
 	include("../../commons/commonBegin.php");
	
	
?>
<div class="row hop3xBox">
			<!-- Panneau horizontal du dessus, fonctions importantes-->
			<h2>Ajout d' une session Universitaire</h2>
</div>
<hr>

<div class="col-md-2"></div>

<div class="col-md-8">
	<form method="post" action="../../back-side/sessionPersonnel/gestionSessionpersonnelle.php">
		<div class="form-group">
		
			<label for="titre">Titre de la session</label>
			<input type="text" name="titre">
		</div>

		<div class="form-group">
		
			<label for="commentaire">Commentaire de la session</label>
			<textarea name="commentaire" placeholder="Le commentaire ici"></textarea>
		</div>
		
		<input type="submit" name="Ajouter" value="Ajouter" class="btn btn-default">
		<input type="reset" value="Remettre" class="btn btn-danger">
	</form>
</div>


<div class="col-md-2"></div>
<?php
	include("../../commons/commonEnd.php");
?>