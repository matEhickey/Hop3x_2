
<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/test/TestController.php");


	$id=$_GET['id'];
	$test_id=$_GET['test_id'];
	$test=getTestbyId($test_id);

?>
<h1>Modification</h1>
<div class="row">


<div class="col-md-2"></div>
<div class="col-md-8">
	<form action="../../back-side/test/gestionTest.php" method="post" class="form-horizontal">
		<input type="hidden" name="sessionUniversitaire_id" value=<?php echo "\"".$test[0]['sessionUniversitaire_id']."\"";?>>
		<input type="hidden" name="id" value=<?php echo "\"".$id."\"";?>>
	  <div class="form-group">
	    <label for="message" class="col-sm-2 control-label">Message</label>
	    <div class="col-sm-10">
	      <textarea class="form-control" name="message" rows="3" placeholder="Votre message Ici" ><?php echo $test[0]['message'];?></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="code" class="col-sm-2 control-label">Code</label>
	    <div class="col-sm-10">
	     <textarea class="form-control" name="code" rows="3" placeholder="Votre Code Ici" ><?php echo $test[0]['code'];?></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <input type="submit" class="btn btn-default" name="modifier"/>
	      <input type="reset" class="btn btn-danger" name="Remettre"/>
	    </div>
  		</div>
	</form>
</div>
<div class="col-md-2"></div>
</div>


<?php
	include("../../commons/commonEnd.php");
?>