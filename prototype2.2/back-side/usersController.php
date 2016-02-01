<?php

function createUsershop3X($username,$mdp,$nom,$prenom,$email,$cookieSecure){
	$serverName = "localhost";
	$username = "mathi006_bdd";
	$password = "abcde";
	$database = "mathi006_unique";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete = "INSERT INTO `usersHop3x` (
		`username`,
		`mdp`,
		`nom`,
		`prenom`,
		`email`,
		`cookieSecure`
	)
	VALUES (
		'".$username."',
		'".$mdp."',
		'".$nom."',
		'".$prenom."',
		'".$email."',
		'".$cookieSecure."'
	);";
	$statement = $conn->query($requete);
	if($statement == TRUE) {
		echo "<h3>Les modifications ont été prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function getUsershop3X(){
	$serverName = "localhost";
	$username = "mathi006_bdd";
	$password = "abcde";
	$database = "mathi006_unique";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete = "	SELECT * FROM  `usersHop3x` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"username" => $row['username'],"mdp" => $row['mdp'],"nom" => $row['nom'],"prenom" => $row['prenom'],"email" => $row['email'],"cookieSecure" => $row['cookieSecure']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function updateUsershop3X($id,$id,$username,$mdp,$nom,$prenom,$email,$cookieSecure){
	$serverName = "localhost";
	$username = "mathi006_bdd";
	$password = "abcde";
	$database = "mathi006_unique";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete ="UPDATE `usersHop3x` SET `id` = '".$id."' ,`username` = '".$username."' ,`mdp` = '".$mdp."' ,`nom` = '".$nom."' ,`prenom` = '".$prenom."' ,`email` = '".$email."' ,`cookieSecure` = '".$cookieSecure."' WHERE id=".$id;
	$statement = $conn->query($requete);	if($statement == TRUE) {
		echo "<h3>Les modifications ont été prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function deleteUsershop3X($id){
	$serverName = "localhost";
	$username = "mathi006_bdd";
	$password = "abcde";
	$database = "mathi006_unique";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete ="DELETE FROM `usersHop3x` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont été prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}


?>