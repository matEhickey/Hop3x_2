<?php
	include("..commonBegin.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Administrateur</title>
	</head>

	<body>
		<h1></h1>
		<p>Choisi du type d'utilisateur :</p>
		<form action="administrareur.php" method="post">
			<p><input type="radio" name="etudiant" value="etudiant">Etudiant<Br>
			<input type="radio" name="prifesseur" value="professeur">Professeur<Br>
		</form>
	</body>
</html>

<?php
	include("..commonEnd.php");
?>