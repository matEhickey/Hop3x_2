<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	$ec=new EnonceController();
	$sessionUniversitaire_id=$_GET['sessionUniversitaire_id'];
	$enoncees=$ec->getEnoncee($sessionUniversitaire_id);
	
?>

<div class="row hop3xBox">
			<!-- Panneau horizontal du dessus, fonctions importantes-->
			<h3>creation d enocee</h3>
</div>
<hr>





<div class="row">
	<div class="col-md-2">
		<!--pour l'espacement-->
	</div>
	<div class="col-md-8">
		<form method="post" action="../../back-side/Enonce/gestionEnonce.php">
			<input type="hidden" name="sessionUniversitaire_id" value=<?php echo "\"".$sessionUniversitaire_id."\""; ?> ><br/>
			<div class="form-group">
				<label for="message">message</label>
				<textarea name="message" rows="4" cols="5">Votre texte</textarea>
			</div>
			<div class="form-group">
				<label for="messagewin">message win</label>
				<textarea name="messagewin" rows="4" cols="5">Votre texte</textarea>
			</div>
			<div class="form-group">
			<input type="submit" name="creer" value="creer" class="btn btn-default"/>
			<input type="reset" name="remettre" value="remettre" class="btn btn-danger"/>
		</div>
		</form>

	</div>
	<div class="col-md-2">
		<!--pour l'espacement-->
	</div>
</div>
<?php
	include("../../commons/commonEnd.php");
?>
