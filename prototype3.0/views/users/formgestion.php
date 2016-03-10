<?php
	include("../../commons/commonBegin.php");
	include("formadmin.php");

?>
		<form name = "gestion" action = "../../back-side/users/FiltredUtilisateurs.php" method = POST>
		<div class="col-md-9" style="padding:1%;">
		<div class="panel panel-default">
			<div class="panel-heading">
						<h3 class="panel-title">Gestion des données</h3>
			</div>
			<div class="panel-body">
				<table class = "table">
					<caption>Filtre de données</caption>
						<tr>
							<td><input type="radio" name="choix" value="utilisateur" checked > Voir des données des utilisateurs</Br>
								<input type="radio" name="choix" value="professeur"> Voir des données des professeurs</Br>
								<input type="radio" name="choix" value="etudiant"> Voir des données des etudiants</Br>
								</td>
							<td valighn = "center"><input type = "submit" class="btn btn-primary btn-block" value = "Choisir"></td>
						</tr>
				</table>
				</form>