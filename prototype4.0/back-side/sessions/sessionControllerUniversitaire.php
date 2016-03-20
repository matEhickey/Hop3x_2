<?php

function createSessionUniversitaire($enseignant_id,$session_id,$dateDebutSession,$dateFinSession){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "INSERT INTO `sessionUniversitaire` (
		`enseignant_id`,
		`session_id`,
		`dateDebutSession`,
		`dateFinSession`
	)
	VALUES (
		'".$enseignant_id."',
		'".$session_id."',
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
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	$requete = "	SELECT * 
				FROM `session` INNER JOIN  `sessionUniversitaire`  
				ON session.id = sessionUniversitaire.session_id ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row["id"],"enseignant_id" => $row['enseignant_id'],"session_id" => $row['session_id'],
						"dateDebutSession" => $row['dateDebutSession'], "dateFinSession" => $row['dateFinSession'],
						"name" => $row["name"]
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
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "	SELECT * FROM  `sessionUniversitaire` WHERE `id` = ".$id;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"enseignant_id" => $row['enseignant_id'],"session_id" => $row['session_id'],
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
function updateSessionUniversitaire($id,$enseignant_id,$session_id,$dateDebutSession,$dateFinSession){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete ="UPDATE `sessionUniversitaire` SET `id` = '".$id."' ,`enseignant_id` = '".$enseignant_id."' ,`session_id` = '".$session_id."',
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
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete ="DELETE FROM `sessionUniversitaire` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		return true;
	}
	else{
		return false;
	}
	$conn=null;
}


?>
