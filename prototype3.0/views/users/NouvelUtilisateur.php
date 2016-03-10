<?php
	include("../../commons/commonBegin.php");
	include("formadmin.php");
//creation de nouvel utilisateur
?>

		<div class="col-md-9" style="padding:1%;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-tile">Ajouter nouvel utilisateur</h4>
				</div>
				<form name = "admin" action = "../../back-side/users/PrendreNouvelUtilisateur.php" method = "POST">
					<div class="row">
						<div class="col-sm-11 col-md-11">
							<div class="thumbnail">
								<div class="caption">
									<div class="panel-body">
									
										<table class = "table">
				
										<caption>Saisissez les informations</caption>
										
											<tr>
												<td alighn = "left"><input type="radio" name="choix" value="etudiant" checked> Ajouter du nouvel etudiant</Br></td>
												<td alighn = "left"><input type="radio" name="choix" value="professeur"> Ajouter du nouveau professeur</Br></td>	
											</tr>
											<tr>
												<td alighn = "left" valign = "middle">Nom : </td>
												<td alighn = "left"><p><input type = "text" name = "nom"></p></td>
											</tr>
				
											<tr>
												<td alighn = "left" valign = "middle">Prenom : </td>
												<td alighn = "left"><p><input type = "text" name = "prenom"></p></td>
											</tr>

											<tr>
												<td alighn = "left" valign = "middle">E-mail : </td>
												<td alighn = "left"><p><input type = "email" name = "email"></p></td>
											</tr>
										</table>
										
									
								</div>
								
							</div>
							<input type = "submit" class="btn btn-primary btn-block" value = "Ajouter">
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		

<?php
	include("formadminend.php");
	include("../../commons/commonEnd.php");
	
?>
