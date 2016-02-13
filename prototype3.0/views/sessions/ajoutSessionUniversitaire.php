<?php 
include("../../commons/commonBegin.php");
include("../../back-side/sessions/sessionControllerUniversitaire.php");

$enseignant_id=$_GET['enseignant_id'];

?>

<div class="row">

<div class="col-md-2"></div>


<div class="col-md-8">

	<h3>Page d'ajout de Session</h3>
<form method="post" action="../../back-side/sessions/getSessionUniversitaire.php">
		<input type="hidden" name="enseignant_id" value=  <?php echo "\"".$enseignant_id."\""; ?> >
		<div class="form-group">
		
			<label for="sessionName">Nom de la session</label>
			<input type="text" name="sessionName" >
		</div>

		<div class="form-group">
			<label for="dateDebutSession">dateDebutSession</label>
			<input type="date" name="dateDebutSession" >
		</div>

		<div class="form-group">
			<label for="dateFinSession">dateFinSession</label>
			<input type="date" name="dateFinSession">
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