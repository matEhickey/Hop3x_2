<?php

function createUsers(/*$id,*/$username,$motdePasse,$nom,$prenom,$email,$cleSecureCoockie,$typeUtilisateur){
	$serverName = "localhost";
	$usernam = "root";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete = "INSERT INTO `Users` (
		`username`,
		`motdePasse`,
		`nom`,
		`prenom`,
		`email`,
		`cleSecureCoockie`,
		`typeUtilisateur`
	)
	VALUES (
		'".$username."',
		'".$motdePasse."',
		'".$nom."',
		'".$prenom."',
		'".$email."',
		'".$cleSecureCoockie."',
		'".$typeUtilisateur."'
	);";
	$statement = $conn->query($requete);
	if($statement == TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function getUsers(){
	$serverName = "localhost";
	$usernam = "root";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete = "	SELECT * FROM  `Users` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"username" => $row['username'],"motdePasse" => $row['motdePasse'],"nom" => $row['nom'],"prenom" => $row['prenom'],"email" => $row['email'],"cleSecureCoockie" => $row['cleSecureCoockie'],"typeUtilisateur" => $row['typeUtilisateur']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

/*function getIdOfUsers($username){
	$serverName = "localhost";
	$usernam = "root";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete = "	SELECT * FROM  `Users` WHERE `username` =  ".$username;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"username" => $row['username'],"motdePasse" => $row['motdePasse'],"nom" => $row['nom'],"prenom" => $row['prenom'],"email" => $row['email'],"cleSecureCoockie" => $row['cleSecureCoockie'],"typeUtilisateur" => $row['typeUtilisateur']);
			array_push($retour,$temp);
		}
		
		
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour[0]['id']);
}*/

function updateUsers($id,$id,$username,$motdePasse,$nom,$prenom,$email,$cleSecureCoockie,$typeUtilisateur){
	$serverName = "localhost";
	$usernam = "root";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete ="UPDATE `Users` SET `id` = '".$id."' ,`username` = '".$username."' ,`motdePasse` = '".$motdePasse."' ,`nom` = '".$nom."' ,`prenom` = '".$prenom."' ,`email` = '".$email."' ,`cleSecureCoockie` = '".$cleSecureCoockie."' ,`typeUtilisateur` = '".$typeUtilisateur."' WHERE id=".$id;
	$statement = $conn->query($requete);	if($statement == TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function deleteUsers($id){
	$serverName = "localhost";
	$usernam = "root";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete ="DELETE FROM `Users` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}


?>