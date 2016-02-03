<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/Enonce/EnonceController.php");
	$id=$_GET["id"];
	$enonce=getEnonceebyId($id);
?>
<h3>Modification d enonce</h3>

<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<form method="post" action="../../back-side/Enonce/gestionEnonce.php">
	<input type="hidden" name="id" value=<?php echo "\"".$enonce[0]['id']."\"";?>  >
	<label for="message">message</label>
	<textarea name="message" rows="4" cols="5"><?php echo $enonce[0]['message']; ?></textarea>
	<label for="messagewin">message win</label>
	<textarea name="messagewin" rows="4" cols="5"><?php echo $enonce[0]['messagewin']; ?></textarea>
	<input type="submit" name="Modifier" value="Modifier" class="btn btn-default"/>
	<input type="reset" name="remettre" value="remettre" class="btn btn-danger"/>
</form>

</div>
<div class="col-md-3">
</div>
</div>
<?php
	include("../../commons/commonEnd.php");
?>
