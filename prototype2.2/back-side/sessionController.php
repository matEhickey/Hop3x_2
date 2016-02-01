<?php

function createSession_Hop3X($user_id,$name){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "INSERT INTO `session_hop3x` (
		`user_id`,
		`name`
	)
	VALUES (
		'".$user_id."',
		'".$name."'
	);";
	$statement = $conn->query($requete);
	if($statement == TRUE) {
		return true;
	}
	else{
		return false;
	}
	$conn=null;
}
function getSession_Hop3X(){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete = "	SELECT * FROM  `session_hop3x` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"user_id" => $row['user_id'],"name" => $row['name']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function getSession_Hop3XbyId($id){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete = "	SELECT * FROM  `session_hop3x` WHERE `id` =".$id;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"user_id" => $row['user_id'],"name" => $row['name']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function updateSession_Hop3X($id,$user_id,$name){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete ="UPDATE `session_hop3x` SET `id` = '".$id."' ,`user_id` = '".$user_id."' ,`name` = '".$name."' WHERE id=".$id;
	$statement = $conn->query($requete);	
	if($statement == TRUE) {
		return true;
	}
	else{
		return false;
	}
	$conn=null;
}
function deleteSession_Hop3X($id){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete ="DELETE FROM `session_hop3x` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		return true;
	}
	else{
		return false;
	}
	$conn=null;
}


?>
