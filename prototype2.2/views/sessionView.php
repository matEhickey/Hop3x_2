<?php 
 	include("../commons/commonBegin.php");
	include("../back-side/sessionController.php");

?>
<h1>Bonjour ca marche</h1>

<form method="post" action="../back-side/getSession.php">
<label for="sessionName">Nom de la session</label>
<input type="text" name="sessionName" placeholder="Nom de la session"/>
<input type="submit" name="envoyer" value="creer" id="envoyer" />

</form>


<?php 
	$sessions = getSession_Hop3X();
	
	foreach($sessions as $session){
		echo "<div class=\"row\">";
		
		
			echo '<a href="sessionIndividuelle.php?id='.$session["id"].'" class="btn btn-default">'.$session["name"].'</a>';
		
			echo '<a href="../back-side/updateSession.php?id='.$session["id"].'" class="btn btn-default">Modifier</a>';
		
			echo '<a href="../back-side/deleteSession.php?id='.$session["id"].'" class="btn btn-default"
				 onclick="return confirm(\'etes vous sur de vouloir supprimer la session \')">Supprimer</a>';
		
		
		echo "</div>";
		
	}
	
?>


<?php

	include("../commons/commonEnd.php");
?>

