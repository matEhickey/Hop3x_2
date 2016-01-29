<?php

function createActivity_Users($user_id,$time){
	$serverName = "localhost";
	$username = "root";
	$password = "";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	
	$requete = "INSERT INTO `activity_users` (
		`user_id`,
		`time`
	)
	VALUES (
		'".$user_id."',
		'".$time."'
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
function getActivity_Users(){
	$serverName = "localhost";
	$username = "root";
	$password = "";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	
	$requete = "	SELECT * FROM  `activity_users` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("user_id" => $row['user_id'],"time" => $row['time']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function updateActivity_Users($id,$user_id,$time){
	$serverName = "localhost";
	$username = "root";
	$password = "";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	
	$requete ="UPDATE `activity_users` SET `user_id` = '".$user_id."' ,`time` = '".$time."' WHERE id=".$id;
	$statement = $conn->query($requete);	if($statement == TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function deleteActivity_Users($id){
	$serverName = "localhost";
	$username = "root";
	$password = "";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	
	$requete ="DELETE FROM `activity_users` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}


?>