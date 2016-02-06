<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	$idsession=$_GET['idsession'];
	$enoncees=getEnoncee($idsession);
	
?>


<h3>creation d enocee</h3>

<div class="row">
	<div class="col-md-2">
		<!--pour l'espacement-->
	</div>
	<div class="col-md-8">
		<form method="post" action="../../back-side/Enonce/gestionEnonce.php">
			<input type="hidden" name="idsession" value=<?php echo "\"".$idsession."\""; ?> ><br/>
			<label for="message">message</label>
			<textarea name="message" rows="4" cols="5">Saisir un texte ici.</textarea>
			<label for="messagewin">message win</label>
			<textarea name="messagewin" rows="4" cols="5">Saisir un texte ici.</textarea>
			<input type="submit" name="creer" value="creer" class="btn btn-default"/>
			<input type="reset" name="remettre" value="remettre" class="btn btn-danger"/>
		</form>

	</div>
	<div class="col-md-2">
		<!--pour l'espacement-->
	</div>
</div>
<?php
	include("../../commons/commonEnd.php");
?>
