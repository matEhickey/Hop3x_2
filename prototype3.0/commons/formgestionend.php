				<form name = "gestion" action = "../../back-side/users/SupprimerUsers.php" method = POST>
				<table class = "table">
					<caption>Changer des données</caption>
						<tr>
							<td alighn = "left">Saisissez l'id d'utilisateur dont vous voulez supprimer :<p><input type = "text" name = "id"></td>
							<td><input type = "submit" class="btn btn-primary btn-block" value = "Supprimer"></td>
						</tr>
				</table>
			</div>
			</form>
		</div>
		</div>
		

		


<?php
	include("../../commons/commonEnd.php");
	include("../../commons/formadminend.php");
?>