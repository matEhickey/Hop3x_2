<?php

function createEnoncee($message,$messagewin,$dateDebutSession,$dateFinSession,$idsession){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete = "INSERT INTO `enoncee` (
		`message`,
		`messagewin`,
		`idsession`
	)
	VALUES (
		'".$message."',
		'".$messagewin."',
		'".$idsession."'
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
function getEnoncee($idsession){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete = "	SELECT * FROM  `enoncee` WHERE  idsession=".$idsession;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"message" => $row['message'],"messagewin" => $row['messagewin'],"idsession" => $row['idsession']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function getEnonceebyIdandSession($id,$idsession){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete = "	SELECT * FROM  `enoncee` WHERE id=".$id." AND idsession = ".$idsession;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"message" => $row['message'],"messagewin" => $row['messagewin'], "idsession" => $row['idsession']);
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
			$temp = array("id" => $row['id'],"message" => $row['message'],"messagewin" => $row['messagewin'],"idsession" => $row['idsession']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function updateEnoncee($id,$message,$messagewin,$idsession){
	$serverName = "localhost";
	$username = "root";
	$password = "Mahamat";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete ="UPDATE `enoncee` SET `id` = '".$id."' ,`message` = '".$message."' ,`messagewin` = '".$messagewin."', `idsession`= '".$idsession."' WHERE id=".$id;
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
