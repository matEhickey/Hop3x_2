<?php
	include("http://localhost/HOP3X/Design/commonBegin.php");
	include("http://localhost/HOP3X/Design/formadmin.php");
?>

		<div class="col-md-9" style="padding:1%;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-tile">Ajouter nouvel utilisateur</h4>
				</div>
				<form name = "admin" action = "actionajout.php" method = POST>
					<div class="row">
						<div class="col-sm-9 col-md-8">
							<div class="thumbnail">
								<div class="caption">
									<div class="panel-body">
									
										<table class = "table">
				
										<caption>Saisissez les informations</caption>
										
											<tr>
												<td><input type="radio" name="choix" value="etudiant" checked> Ajouter du nouvel etudiant</Br></td>
												<td><input type="radio" name="choix" value="professeur"> Ajouter du nouveau professeur</Br></td>
											</tr>
											<tr>
												<td alighn = "left" valign = "middle">Nom : </td>
												<td><p><input type = "text" name = "nom"></p></td>
											</tr>
				
											<tr>
												<td alighn = "left" valign = "middle">Prenom : </td>
												<td><p><input type = "text" name = "prenom"></p></td>
											</tr>

											<tr>
												<td alighn = "left" valign = "middle">E-mail : </td>
												<td><p><input type = "email" name = "email"></p></td>
											</tr>
										</table>
										<input type = "submit" value = "Ajouter">
									
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		

<?php
	include("http://localhost/HOP3X/Design/commonEnd.php");
	include("http://localhost/HOP3X/Design/formadminend.php");
?>