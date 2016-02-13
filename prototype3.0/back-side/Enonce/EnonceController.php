<?php

function createEnoncee($message,$messagewin,$sessionUniversitaire_id){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete = "INSERT INTO `enoncee` (
		`message`,
		`messagewin`,
		`sessionUniversitaire_id`
	)
	VALUES (
		'".$message."',
		'".$messagewin."',
		'".$sessionUniversitaire_id."'
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
function getEnoncee($sessionUniversitaire_id){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete = "	SELECT * FROM  `enoncee` WHERE  sessionUniversitaire_id=".$sessionUniversitaire_id;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"message" => $row['message'],"messagewin" => $row['messagewin'],"sessionUniversitaire_id" => $row['sessionUniversitaire_id']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function getEnonceebyIdandSession($id,$sessionUniversitaire_id){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete = "	SELECT * FROM  `enoncee` WHERE id=".$id." AND sessionUniversitaire_id = ".$sessionUniversitaire_id;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"message" => $row['message'],"messagewin" => $row['messagewin'], "sessionUniversitaire_id" => $row['sessionUniversitaire_id']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function getEnonceebyId($id){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete = "	SELECT * FROM  `enoncee` WHERE id=".$id;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"message" => $row['message'],"messagewin" => $row['messagewin'],"sessionUniversitaire_id" => $row['sessionUniversitaire_id']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function updateEnoncee($id,$message,$messagewin,$sessionUniversitaire_id){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete ="UPDATE `enoncee` SET `id` = '".$id."' ,`message` = '".$message."' ,`messagewin` = '".$messagewin."', `sessionUniversitaire_id`= '".$sessionUniversitaire_id."' WHERE id=".$id;
	$statement = $conn->query($requete);	
	if($statement == TRUE) {
		return 1;
	}
	else{
		return 0;
	}
	$conn=null;
}
function deleteEnoncee($id){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete ="DELETE FROM `enoncee` WHERE `id` =".$id;
	$statement = $conn->query($requete);	
	if($statement == TRUE) {
		return 1;
	}
	else{
		return 0;
	}
	$conn=null;
}


?>
