<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/sessions/sessionController.php");
	include("../../back-side/users/scaffoldUsers.php");//pour tester la connection
	
	

	/* Obtention des arguments */
	$user_id = isConnected();
	
	//si pas connecté retour vers la page d'accueil
	if($user_id == false){
		header('Location: ../../views/Acceuil/index.php?message=Probleme de connection');
		
	}
	
	$sessions = getSessionByUser($user_id);

?>


<form method="post" action="../../back-side/sessions/getSession.php">
	<label for="sessionName">Nom de la session</label>
	<input type="text" name="sessionName" placeholder="Nom de la session"/>
	<input type="submit" name="envoyer" value="creer" id="envoyer" />
	<input type ="hidden" name="user_id" value= <?php echo "\"".$user_id."\"" ?> >
	
</form>


<?php 
	
	
	foreach($sessions as $session){
		echo "<div class=\"row\">";
		
		
			echo '<a href="../Editeur/editeur.php?session_id='.$session["id"].'" class="btn btn-default">'.$session["name"].'</a>';
		
			echo '<a href="updateSession.php?id='.$session["id"].'" class="btn btn-default">Modifier</a>';
		
			echo '<a href="../../back-side/sessions/deleteSession.php?id='.$session["id"].'" class="btn btn-default"
				 onclick="return confirm(\'etes vous sur de vouloir supprimer la session \')">Supprimer</a>';
		
		
		echo "</div>";
		
	}
	
?>


<?php

	include("../../commons/commonEnd.php");
?>

