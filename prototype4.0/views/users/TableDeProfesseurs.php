<?php
	include("../../commons/commonBegin.php");
	include("formadmin.php");
	include("../../back-side/users/ControllerProfesseur.php");

//montrer la table de professeurs

?>
		<form name = "gestion" action = "../../back-side/users/FiltredUtilisateurs.php" method = POST>
		<div class="col-md-9" style="padding:1%;">
		<div class="panel panel-default">
			<div class="panel-heading">
						<h3 class="panel-title">Gestion des données</h3>
			</div>
			<div class="panel-body">
				
<?php
	include ("Professeurs.php");
?>
			</div>
		</div>
		</div>
		</form>

		


<?php
	include("../../commons/commonEnd.php");
	include("formadminend.php");
?>