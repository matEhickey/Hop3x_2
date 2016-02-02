<?php
	include("http://localhost/HOP3X/Design/commonBegin.php");
	include("http://localhost/HOP3X/Design/formadmin.php");
?>

		<form name = "gestion" action = "actiog.php" method = POST>
		<div class="col-md-9" style="padding:1%;">
		<div class="panel panel-default">
			<div class="panel-heading">
						<h3 class="panel-title">Gestion des données</h3>
			</div>
			<div class="panel-body">
				<input type="radio" name="choix" value="etudiant" checked> Gestion des données des etudiants</Br>
				<p></p>
				<input type="radio" name="choix" value="professeur"> Gestion des données des professeurs</Br>
				<p></p>
				<input type = "submit" value = "Choisir">
				
		</div>
			</div>
		</div>
		

<?php
	include("http://localhost/HOP3X/Design/commonEnd.php");
	include("http://localhost/HOP3X/Design/formadminend.php");
?>