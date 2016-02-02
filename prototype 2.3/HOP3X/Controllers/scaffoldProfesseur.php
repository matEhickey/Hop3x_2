<?php

function createProfesseur($nom,$prenom,$email){
	$serverName = "localhost";
	$usernam = "root";
	//$password = "";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam /*$password*/);
	$requete = "INSERT INTO `professeur` (
		`nom`,
		`prenom`,
		`email`
	)
	VALUES (
		'".$nom."',
		'".$prenom."',
		'".$email."'
	);";
	$statement = $conn->query($requete);
	if($statement == TRUE) {
		echo "<h4>Les modifications ont ete prises en compte</h4>";
	}
	else{
		echo "<h4>Erreur, veuillez recommencer</h4>";
	}
	$conn=null;
}
function getProfesseur(){
	$serverName = "localhost";
	$usernam = "root";
	//$password = "12345";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam /*$password*/);

	$requete = "	SELECT * FROM  `professeur` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("idProfesseur" => $row['idProfesseur'],"nom" => $row['nom'],"prenom" => $row['prenom'],"email" => $row['email']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function updateProfesseur($id,$idEtudiant,$nom,$prenom,$group,$email){
	$serverName = "localhost";
	$usernam = "root";
	//$password = "12345";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam /*$password*/);
	$requete ="UPDATE `etudiant` SET `idEtudiant` = '".$idEtudiant."' ,`nom` = '".$nom."' ,`prenom` = '".$prenom."' ,`group` = '".$group."' ,`email` = '".$email."' WHERE id=".$id;
	$statement = $conn->query($requete);	if($statement == TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function deleteProfesseur($id){
	$serverName = "localhost";
	$usernam = "root";
	//$password = "12345";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam /*$password*/);
	$requete ="DELETE FROM `etudiant` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}


?>