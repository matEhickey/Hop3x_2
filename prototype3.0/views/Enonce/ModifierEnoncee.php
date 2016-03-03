
<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	
	$idEnonce=$_GET["id"];
	$sessionUniversitaire_id=$_GET["sessionUniversitaire_id"];
	$ec=new EnonceController();
	$enonce=$ec->getEnonceebyId($idEnonce);
?>
<div class="row hop3xBox">
			<!-- Panneau horizontal du dessus, fonctions importantes-->
			<h3>Modification d enonce</h3>
</div>
<hr>

<div class="row">
	<div class="col-md-3">
	</div>
	<div class="col-md-6">
	<form method="post" action="../../back-side/Enonce/gestionEnonce.php">
		<input type="hidden" name="sessionUniversitaire_id" value=<?php echo "\"".$sessionUniversitaire_id."\""; ?> ><br/>
		<input type="hidden" name="idEnonce" value=<?php echo "\"".$enonce[0]['idEnonce']."\"";?>  >
		<div class="form-group">
			<label for="message">message</label>
			<textarea name="message" rows="4" cols="5"><?php echo $enonce[0]['message']; ?></textarea>
		</div>
		<div class="form-group">
			<label for="messagewin">message win</label>
			<textarea name="messagewin" rows="4" cols="5"><?php echo $enonce[0]['messagewin']; ?></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="modifier" value="Modifier" class="btn btn-default"/>
			<input type="reset" name="remettre" value="remettre" class="btn btn-danger"/>
		</div>
	</form>

	</div>
	<div class="col-md-3">
	</div>
</div>
<?php
	include("../../commons/commonEnd.php");
?>
