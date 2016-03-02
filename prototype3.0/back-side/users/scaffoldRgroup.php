<?php

function createRgroup($id_user,$id_group){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete = "INSERT INTO `rgroup` (
		`id_user`,
		`id_group`
	)
	VALUES (
		'".$id_user."',
		'".$id_group."'
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
function getRgroup(){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete = "	SELECT * FROM  `RGroup` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"id_user" => $row['id_user'],"id_group" => $row['id_group']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function updateRgroup($id,$id,$id_user,$id_group){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete ="UPDATE `RGroup` SET `id` = '".$id."' ,`id_user` = '".$id_user."' ,`id_group` = '".$id_group."' WHERE id=".$id;
	$statement = $conn->query($requete);	if($statement == TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}
function deleteRgroup($id){
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete ="DELETE FROM `RGroup` WHERE `id` =".$id;
	$statement = $conn->query($requete);	if($statement== TRUE) {
		echo "<h3>Les modifications ont ete prises en compte</h3>";
	}
	else{
		echo "<h3>Erreur, veuillez recommencer</h3>";
	}
	$conn=null;
}


?>