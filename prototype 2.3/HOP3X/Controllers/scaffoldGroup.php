<?php

function createGroup($id,$nom){
	$serverName = "localhost";
	$usernam = "root";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete = "INSERT INTO `Group` (
		`id`,
		`nom`
	)
	VALUES (
		'".$id."',
		'".$nom."'
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
function getGroup(){
	$serverName = "localhost";
	$usernam = "root";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete = "	SELECT * FROM  `Group` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"nom" => $row['nom']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function updateGroup($id,$id,$nom){
	$serverName = "localhost";
	$usernam = "root";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete ="UPDATE `Group` SET `id` = '".$id."' ,`nom` = '".$nom."' WHERE id=".$id;
	$statement = $conn->query($requete);	if($statement == TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function deleteGroup($id){
	$serverName = "localhost";
	$usernam = "root";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete ="DELETE FROM `Group` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}


?>