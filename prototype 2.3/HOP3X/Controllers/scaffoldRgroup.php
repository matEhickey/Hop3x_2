<?php

function createRgroup($id,$idEtudiate,$id_group){
	$serverName = "localhost";
	$usernam = "root";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete = "INSERT INTO `RGroup` (
		`id`,
		`idEtudiate`,
		`id_group`
	)
	VALUES (
		'".$id."',
		'".$idEtudiate."',
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
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete = "	SELECT * FROM  `RGroup` ";
	$retour = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id" => $row['id'],"idEtudiate" => $row['idEtudiate'],"id_group" => $row['id_group']);
			array_push($retour,$temp);
		}
	}
	else { 
		die("fail requete");
	}
	$conn=null;
	return($retour);
}
function updateRgroup($id,$id,$idEtudiate,$id_group){
	$serverName = "localhost";
	$usernam = "root";
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
	$requete ="UPDATE `RGroup` SET `id` = '".$id."' ,`idEtudiate` = '".$idEtudiate."' ,`id_group` = '".$id_group."' WHERE id=".$id;
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
	$database = "test_db";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam);
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