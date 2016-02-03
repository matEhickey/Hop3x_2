<?php

function createEvenement($time,$file_id,$from_l,$from_c,$to_l,$to_c,$text,$removed){
	$serverName = "localhost";
	$username = "root";
	$password = "abcde";
	$database = "hop3x";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete = "INSERT INTO `evenement` (
		`time`,
		`file_id`,
		`from_l`,
		`from_c`,
		`to_l`,
		`to_c`,
		`text`,
		`removed`
	)
	VALUES (
		'".$time."',
		'".$file_id."',
		'".$from_l."',
		'".$from_c."',
		'".$to_l."',
		'".$to_c."',
		'".$text."',
		'".$removed."'
	);";
	$statement = $conn->query($requete);
	if($statement == TRUE) {
		echo "<h3>Les modifications ont été prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function getEvenement(){
	$serverName = "localhost";
	$username = "mathi006_bdd";
	$password = "abcde";
	$database = "mathi006_unique";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete = "	SELECT * FROM  `evenement` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"time" => $row['time'],"file_id" => $row['file_id'],"from_l" => $row['from_l'],"from_c" => $row['from_c'],"to_l" => $row['to_l'],"to_c" => $row['to_c'],"text" => $row['text'],"removed" => $row['removed']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}


function getEvenementhop3xFile($file_id){
	$serverName = "localhost";
	$username = "mathi006_bdd";
	$password = "abcde";
	$database = "mathi006_unique";
	//$conn = new mysqli($servername, $username, $password,$database);
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete = "	SELECT * FROM  `evenement` WHERE `file_id` = '".$file_id."' ORDER BY `time`";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){

			$temp = array("id" => $row['id'],"time" => $row['time'],"file_id" => $row['file_id'],"from_l" => $row['from_l'],"from_c" => $row['from_c'],"to_l" => $row['to_l'],"to_c" => $row['to_c'],"text" => $row['text'],"removed" => $row['removed']);
			array_push($retour,$temp);
			
		}
	}
	else { 
		die("fail requete");
	}
	$conn = null;
	return($retour);
}


function updateEvenement($id,$id,$time,$file_id,$from_l,$from_c,$to_l,$to_c,$text,$removed){
	$serverName = "localhost";
	$username = "mathi006_bdd";
	$password = "abcde";
	$database = "mathi006_unique";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete ="UPDATE `evenement` SET `id` = '".$id."' ,`time` = '".$time."' ,`file_id` = '".$file_id."' ,`from_l` = '".$from_l."' ,`from_c` = '".$from_c."' ,`to_l` = '".$to_l."' ,`to_c` = '".$to_c."' ,`text` = '".$text."' ,`removed` = '".$removed."' WHERE id=".$id;
$statement = $conn->query($requete);	if($statement == TRUE) {
		echo "<h3>Les modifications ont été prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function deleteEvenement($id){
	$serverName = "localhost";
	$username = "mathi006_bdd";
	$password = "abcde";
	$database = "mathi006_unique";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$requete ="DELETE FROM `evenement` WHERE `id` =".$id;
$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont été prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}


?>
