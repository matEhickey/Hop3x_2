<?php 
include("../../commons/commonBegin.php");
include("../../back-side/sessions/sessionControllerUniversitaire.php");

$enseignant_id=$_GET['enseignant_id'];

?>

<div class="row hop3xBox">
			<!-- Panneau horizontal du dessus, fonctions importantes-->
			<h3>Page d'ajout de Session</h3>
</div>
<hr>
<div class="row">

<div class="col-md-2"></div>


<div class="col-md-8">

	
<form method="post" action="../../back-side/sessions/getSessionUniversitaire.php">
		<input type="hidden" name="enseignant_id" value=  <?php echo "\"".$enseignant_id."\""; ?> >
		<div class="form-group">
		
			<label for="sessionName" class="col-sm-3 control-label">Nom de la session</label>
			<div class="col-sm-9">
				<input type="text" name="sessionName" class="form-control">
			</div>
		</div>

		<div class="form-group">
			<label for="dateDebutSession" class="col-sm-3 control-label">dateDebutSession</label>
			<div class="col-sm-9">
				<input type="date" name="dateDebutSession" class="form-control" >
			</div>
		</div>

		<div class="form-group">
			<label for="dateFinSession" class="col-sm-3 control-label">dateFinSession</label>
			<div class="col-sm-9">
				<input type="date" name="dateFinSession" class="form-control">
			</div>
		</div>

	<input type="submit" name="envoyer" value="creer" class="btn btn-default" />
	<input type="reset" value="vider les champs" class="btn btn-danger">
	
</form>

</div>
<div class="col-md-2"></div>
</div>
<?php

	include("../../commons/commonEnd.php");
?>