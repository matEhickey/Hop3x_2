<?php

function createSession($user_id,$name,$dateDebutSession,$dateFinSession){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');

	$requete = "INSERT INTO `session` (
		`user_id`,
		`name`,
		`dateDebutSession`,
		`dateFinSession`
	)
	VALUES (
		'".$user_id."',
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
function getSession(){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	$requete = "	SELECT * FROM  `session` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"user_id" => $row['user_id'],"name" => $row['name'],
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

function getSessionbyId($id){
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
			$temp = array("id" => $row['id'],"user_id" => $row['user_id'],"name" => $row['name'],
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
function updateSession($id,$user_id,$name,$dateDebutSession,$dateFinSession){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, '');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete ="UPDATE `session` SET `id` = '".$id."' ,`user_id` = '".$user_id."' ,`name` = '".$name."',
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
function deleteSession($id){
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
