<?php
//tous les fonctions pour travail avec le tablo "professeur"

function createProfesseur($user_id){
	$serverName = "localhost";
	$usernam = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam ,$password);
	$requete = "INSERT INTO `professeur` (
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
function getProfesseur(){
	$serverName = "localhost";
	$usernam = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam , $password);

	$requete = "	SELECT * FROM  `professeur` INNER JOIN `Utilisateurs` ON professeur.user_id = Utilisateurs.id ";
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

function updateProfesseur($id,$user_id){
	$serverName = "localhost";
	$usernam = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam , $password);
	$requete ="UPDATE `professeur` SET `user_id` = '".$user_id."' WHERE id=".$id;
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
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam , $password);
	$requete ="DELETE FROM `professeur` WHERE `user_id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}

function getProfesseurId($pr){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$id = -1;
	$users = getProfesseur();
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
