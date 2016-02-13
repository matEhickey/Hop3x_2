<?php

function createSessionUniversitaire($enseignant_id,$name,$dateDebutSession,$dateFinSession){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');

	$requete = "INSERT INTO `session` (
		`enseignant_id`,
		`name`,
		`dateDebutSession`,
		`dateFinSession`
	)
	VALUES (
		'".$enseignant_id."',
		'".$name."',
		'".$dateDebutSession."',
		'".$dateFinSession."'
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
function getSessionUniversitaire(){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete = "	SELECT * FROM  `session` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"enseignant_id" => $row['enseignant_id'],"name" => $row['name'],
						"dateDebutSession" => $row['dateDebutSession'], "dateFinSession" => $row['dateFinSession']
					);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}

function getSessionUniversitairebyId($id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete = "	SELECT * FROM  `session` WHERE `id` =".$id;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"enseignant_id" => $row['enseignant_id'],"name" => $row['name'],
						"dateDebutSession" => $row['dateDebutSession'], "dateFinSession" => $row['dateFinSession']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function updateSessionUniversitaire($id,$enseignant_id,$name,$dateDebutSession,$dateFinSession){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete ="UPDATE `session` SET `id` = '".$id."' ,`enseignant_id` = '".$enseignant_id."' ,`name` = '".$name."',
						`dateDebutSession`= '".$dateDebutSession."', `dateFinSession` = '".$dateFinSession."' WHERE id=".$id;
	$statement = $conn->query($requete);	
	if($statement == TRUE) {
		return true;
	}
	else{
		return false;
	}
	$conn=null;
}
function deleteSessionUniversitaire($id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete ="DELETE FROM `session` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		return true;
	}
	else{
		return false;
	}
	$conn=null;
}


?>
