<?php

function createEtudiant($user_id){
	$serverName = "localhost";
	$usernam = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam ,$password);
	$requete = "INSERT INTO `etudiants` (
		`user_id`
	)
	VALUES (
		'".$user_id."'
	);";
	$statement = $conn->query($requete);
	/*if($statement == TRUE) {
		echo "<h4>Les modifications ont ete prises en compte</h4>";
	}
	else{
		echo "<h4>Erreur, veuillez recommencer</h4>";
	}*/
	$conn=null;
}
function getEtudiant(){
	$serverName = "localhost";
	$usernam = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam , $password);

	$requete = "	SELECT * FROM  `etudiants` INNER JOIN `Users` ON etudiants.user_id = Users.id ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("user_id" => $row['user_id'],"username" => $row['username'],"motdePasse" => $row['motdePasse'],"nom" => $row['nom'], "prenom" => $row['prenom'] , "email" => $row['email'] , "cleSecureCoockie" => $row['cleSecureCoockie']);
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
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
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
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete ="DELETE FROM `etudiant` WHERE `user_id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}

function getEtudiantId($pr){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$id = -1;
	$users = getEtudiant();
	if(count($users)>0){
		foreach($users as $user){
			if($user["user_id"] == $pr["user_id"]){
				$id = $user["user_id"];
			}
		}
	}	
	return($id);
}
?>