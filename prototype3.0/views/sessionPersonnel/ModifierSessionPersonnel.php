<?php 
 	include("../../commons/commonBegin.php");
 	include ("../../back-side/sessionPersonnel/sessionPersonnelController.php");
 	$id=$_GET['id'];
 	$s=new sessionPersonnelController();
 	$session=$s->getSessionpersonnellebyId($id);
	
	
?>
<div class="row hop3xBox">
			<!-- Panneau horizontal du dessus, fonctions importantes-->
			<h2>Modification d' une session Universitaire</h2>
</div>
<hr>

<div class="col-md-2"></div>

<div class="col-md-8">
	<form method="post" action="../../back-side/sessionPersonnel/updateSessionPersonnel.php">

		<input type="hidden" name="id" value= <?php echo "\"".$session[0]['id']."\""; ?>>
		<div class="form-group">
			<label for="titre">Titre de la session</label>
			<input type="text" name="titre" value=<?php echo "\"".$session[0]['titre']."\""; ?>>
		</div>

		<div class="form-group">
			<label for="commentaire">Commentaire de la session</label>
			<textarea name="commentaire"><?php echo $session[0]['commentaire']; ?></textarea>
		</div>
		
		<input type="submit" name="modifier" value="Modifier" class="btn btn-default">
		<input type="reset" value="Remettre" class="btn btn-danger">
	</form>
</div>


<div class="col-md-2"></div>
<?php
	include("../../commons/commonEnd.php");
?>