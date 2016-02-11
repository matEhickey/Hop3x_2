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

//utilise le username pour renvoyer le user et ses champs
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

//utilise le username pour renvoyer le user et ses champs
function getUserByUsername($u_name){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	
	
	
	$userRetour = -1;
	
	$users = getUsers();
	if(count($users)>0){
		foreach($users as $user){
			if($user["username"] == $u_name){
				$userRetour = $user;
			}
		}
	}
	
	return($userRetour);
}

//utilise le id pour renvoyer le user et ses champs
function getUserById($id){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	
	
	
	$userRetour = -1;
	
	$users = getUsers();
	if(count($users)>0){
		foreach($users as $user){
			if($user["id"] == $id){
				$userRetour = $user;
			}
		}
	}
	
	return($userRetour);
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


//verifie si le login et le password sont correspondant dans la base
function loginPasswordOK($username,$password){
	
	$ok = -1;
	$user = getUserByUsername($username);
	if($user != -1){
		if(strcmp($user["motdePasse"],$password)==0){
			$ok = $user;
		}
	}
	return($ok);
}


/*
fonction qui renvoi faux si l'ulitisateur n'est pas coonecte
 (ie qu'il n'as pas de cookie id, ou que son cooki id et cleSecure ne correspondent pas)
 et qui renvoi son id si il est bien connecté
*/
function isConnected(){
	
	$user_id = $_COOKIE["id"];
	//echo 
	if($user_id != null){
		$user = getUserById(intval($user_id));
		if(strcmp($user["cleSecureCoockie"],$user["cleSecureCoockie"])==0){
			return($user["id"]);
		}
		else{
			return(false);
		}
	}
	else{
		return(false);
	}
}

function getPassword(){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete = "	SELECT `motdePasse` FROM  `Users` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("motdePasse" => $row['motdePasse']);
		array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function getUserName(){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete = "	SELECT `username` FROM  `Users` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("username" => $row['username']);
		array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}


?>
