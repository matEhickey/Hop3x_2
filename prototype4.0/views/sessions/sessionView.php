.<?php 
 	include("../../commons/commonBegin.php");
	include("../../back-side/sessions/sessionController.php");
	include("../../back-side/sessions/sessionPersoController.php");
	include("../../back-side/sessions/sessionControllerUniversitaire.php");
	include("../../back-side/users/ControllerProfesseur.php");
	include("../../back-side/users/ControllerUtilisateurs.php");//pour tester la connection
	
	
	

	/* Obtention des arguments */
	$user_id = isConnected();
	
	
	//si pas connecté retour vers la page d'accueil
	if($user_id == false){
		header('Location: ../../views/Acceuil/index.php?message=Probleme de connection');
		
	}
	
	$sessions = getSessionpersoByUser($user_id);
	$sessionsUniversitaires = getSessionUniversitaire();
	
	

?>



	<div class="col-md-2">
		<!-- boutton de deconnection, logo, username-->
			<div class="row" align="center">
			<a href="../Acceuil/index.php"><button class="btn btn-primary btn-block">Deconnection</button></a>
			</div>
			<hr>
			<div class="row">
				<img  src="http://hop3x.univ-lemans.fr/hop3x.png">
			</div>
			<div class="row">
			<p></p>
			</div>
			<!-- infos instruction, message ?-->
			<div class="row" style="padding-top:18%;">
				<h3>Info</h3>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed commodo ante. Pellentesque congue faucibus ultrices.
				Nulla consequat id nisl et convallis. Maecenas euismod pulvinar commodo. 
				Quisque consequat scelerisque nisl, et vestibulum lectus dignissim vel. Integer eget sem pellentesque, 
				hendrerit felis luctus, convallis mauris. In maximus, quam dapibus aliquam scelerisque, nulla mi placerat nibh, 
				non consequat est tellus vitae mauris. Sed interdum iaculis mauris, at tristique purus. Fusce sit amet vestibulum odio.
				</p>
			</div>
	</div>

	<div class="col-md-10">
		<h3>Sessions universitaires</h3>
		<ul class="list-inline" style="overflow-x: scroll; white-space:nowrap;">	<!-- instances des classes universitaire -->
			<?php 
				foreach($sessionsUniversitaires as $sessionUniv){
					echo "<li style=\"padding: 0px 20px;\">";
					echo '<a href="../../back-side/sessions/getInstance.php?user_id='.$user_id.'&sessionUniv_id='.$sessionUniv['id'].'" class="btn btn-default btn-block">'.$sessionUniv["name"].'</a><br>';
					echo "<p>Debut:".$sessionUniv["dateDebutSession"]."</p>";
					echo "<p>Fin:".$sessionUniv["dateFinSession"]."</p>";
					echo "</li>";	
				}
				if(count($sessionsUniversitaires)==0){
					echo "<li>";
					echo "Pas encore de sessions a afficher";
					echo "</dli>";	
				}
			?>
		</ul>
		<hr>
		
			<h3>Sessions personnelles</h3>
			<ul class="list-inline" style="overflow-x: scroll; white-space:nowrap;">	<!-- session personnelles -->
			
				<?php 
					foreach($sessions as $session){
						echo "<li><div style=\"padding: 0px 20px;\">";
			
		
							echo '<a href="../Editeur/editeur.php?session_id='.$session["id"].'" class="btn btn-default btn-block">'.$session["name"].'</a><br>';
		
							echo '<a href="updateSession.php?id='.$session["id"].'" class="btn btn-default btn-block">Modifier nom</a><br>';
		
							echo '<a href="../../back-side/sessions/deleteSession.php?id='.$session["id"].'" class="btn btn-default btn-block"
								 onclick="return confirm(\'etes vous sur de vouloir supprimer la session \')">Supprimer</a><br>';
		
						echo "</div></li>";	
					}
					if(count($sessions)==0){
						echo "<il>";
						echo "Pas encore de sessions a afficher";
						echo "</il>";	
					}
				?>
				
				

			</ul>
			
			<div>
			<form method="post" action="../../back-side/sessions/getSession.php">
				<label for="sessionName">Créer une nouvelle session</label>
				<input type="text" name="sessionName" placeholder="Nom de la session"/>
				<input type="submit" name="envoyer" value="creer" id="envoyer" />
				<input type ="hidden" name="user_id" value= <?php echo "\"".$user_id."\"" ?> >
	
			</form>
			</div>

		


	</div>





<?php

	include("../../commons/commonEnd.php");
?>

