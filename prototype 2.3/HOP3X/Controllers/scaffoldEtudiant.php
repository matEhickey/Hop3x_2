<?php

function createEtudiant($nom,$prenom,$group,$email){
	$serverName = "localhost";
	$usernam = "root";
	//$password = "";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam /*$password*/);
	$requete = "INSERT INTO `etudiant` (
		`nom`,
		`prenom`,
		`group`,
		`email`
	)
	VALUES (
		'".$nom."',
		'".$prenom."',
		'".$group."',
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
function getEtudiant(){
	$serverName = "localhost";
	$usernam = "root";
	//$password = "12345";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam /*$password*/);

	$requete = "	SELECT * FROM  `etudiant` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("idEtudiant" => $row['idEtudiant'],"nom" => $row['nom'],"prenom" => $row['prenom'],"group" => $row['group'],"email" => $row['email']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function updateEtudiant($id,$nom,$prenom,$group,$email){
	$serverName = "localhost";
	$usernam = "root";
	//$password = "12345";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam /*$password*/);
	$requete ="UPDATE `etudiant` SET `nom` = '".$nom."' ,`prenom` = '".$prenom."' ,`group` = '".$group."' ,`email` = '".$email."' WHERE id=".$id;
	$statement = $conn->query($requete);	if($statement == TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function deleteEtudiant($id){
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