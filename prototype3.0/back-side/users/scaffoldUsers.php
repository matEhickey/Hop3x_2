<?php

function createUsers(/*$id,*/$username,$motdePasse,$nom,$prenom,$email,$cleSecureCoockie){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam,$password);
	$requete = "INSERT INTO `Users` (
		`username`,
		`motdePasse`,
		`nom`,
		`prenom`,
		`email`,
		`cleSecureCoockie`
	)
	VALUES (
		'".$username."',
		'".$motdePasse."',
		'".$nom."',
		'".$prenom."',
		'".$email."',
		'".$cleSecureCoockie."'
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
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam,$password);
	$requete = "	SELECT * FROM  `Users` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"username" => $row['username'],"motdePasse" => $row['motdePasse'],"nom" => $row['nom'],"prenom" => $row['prenom'],"email" => $row['email'],"cleSecureCoockie" => $row['cleSecureCoockie']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function getUserIdByUsername($u_name){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	
	
	
	$user_id = -1;
	
	$users = getUsers();
	if(count($users)>0){
		foreach($users as $user){
			if($user["username"] == $u_name){
				$user_id = $user["id"];
			}
		}
	}
	
	
	
	
	return($user_id);
}



function updateUsers($id,$id,$username,$motdePasse,$nom,$prenom,$email,$cleSecureCoockie,$typeUtilisateur){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam,$password);
	$requete ="UPDATE `Users` SET `id` = '".$id."' ,`username` = '".$username."' ,`motdePasse` = '".$motdePasse."' ,`nom` = '".$nom."' ,`prenom` = '".$prenom."' ,`email` = '".$email."' ,`cleSecureCoockie` = '".$cleSecureCoockie."'  WHERE id=".$id;
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
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam,$password);
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
