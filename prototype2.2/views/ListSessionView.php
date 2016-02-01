<?php 
 	include("../commons/commonBegin.php");
	include("../back-side/sessionController.php");
	

?>

<?php 
	$session = getSession_Hop3X();
	foreach($session as $s){
		echo '<div class="row">';
		echo '<a href="sessionIndividuelle.php?id='.$s["id"].'" class="btn btn-default">'.$s["name"].'</a>';
		echo '</div>';
	}
?>

<?php
	include("../commons/commonEnd.php");
?>

