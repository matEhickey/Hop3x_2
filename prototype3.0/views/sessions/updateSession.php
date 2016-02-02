<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/sessions/sessionController.php");
	
	$id=$_GET["id"];
	$session=getSession($id);
?>


<h2><?php echo "Modification de la session id= ". $id;?></h2>


<div class="col-md-8">
	<form method="post" action="../../back-side/sessions/updateSession.php">
		<input type="hidden" name="id" value=<?php echo "\"".$session[0]['id']."\""; ?> />
		<div class="form-group">
		
			<label for="sessionName">Nom de la session</label>
			<input type="text" name="sessionName" value=  <?php echo "\"".$session[0]['name']."\""; ?>  />
		</div>
		<input type="hidden" name="user_id" value=  <?php echo "\"".$session[0]['user_id']."\""; ?>  />
		<input type="submit" name="modifier" value="Modifier" class="btn btn-submit">
	</form>
</div>

<?php
	include("../../commons/commonEnd.php");
?>
