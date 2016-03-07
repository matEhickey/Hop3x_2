<?php
function getGroupsForProf($id_user)
{
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete = "	SELECT * FROM  `rgroup` ";
	$retour = [];
	$res = [];
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$temp = array("id_user" => $row['id_user'], "id_group" => $row['id_group']);
			array_push($retour, $temp);
		}
	}
	else { 
		die("fail requete");
	}
	foreach($retour as $key => $value) {
		if ($value['id_user'] == $id_user)
		{
			$temp = array("id_group" => $value['id_group']);
			array_push($res, $temp);
		}
	}
	$conn = null;
	return($res);
}

function getGroupName($id_group)
{
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);
	$requete = "	SELECT * FROM  `groups` ";
	$retour = [];
	$res = "";
	if ($statement = $conn->query($requete)) {
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id" => $row['id'], "nom" => $row['nom']);
			array_push($retour, $temp);
		}
	}
	else { 
		die("fail requete");
	}

	foreach($retour as $key => $value) {
		if ($value['id'] == $id_group)
		{
			$res = $value['nom'];
		}
	}

	$conn = null;
	return($res);
}
?>