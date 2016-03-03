<?php

function createInstanceuniversitaire($sessionUniv_id,$user_id,$session_id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "INSERT INTO `instanceUniversitaire` (
		`sessionUniv_id`,
		`user_id`,
		`session_id`
		
	)
	VALUES (
		'".$sessionUniv_id."',
		'".$user_id."',
		'".$session_id."'
	);";
	$statement = $conn->query($requete);
	if($statement == TRUE) {
		
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function getInstanceuniversitaireByUserAndSessionUniv($user_id,$sessionUniv_id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete = "	SELECT * FROM  `instanceUniversitaire` WHERE `user_id` = ".$user_id." AND `sessionUniv_id` = ".$sessionUniv_id;
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"sessionUniv_id" => $row['sessionUniv_id'],"user_id" => $row['user_id'],"session_id" =>$row['session_id']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function updateInstanceuniversitaire($id,$sessionUniv_id,$user_id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete ="UPDATE `instanceUniversitaire` SET `sessionUniv_id` = '".$sessionUniv_id."' ,`user_id` = '".$user_id."' WHERE id=".$id;
	$statement = $conn->query($requete);	if($statement == TRUE) {
		echo "<h3>Les modifications ont été prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function deleteInstanceuniversitaire($id){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);

	$requete ="DELETE FROM `instanceUniversitaire` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont été prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}


?>
