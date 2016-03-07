<?php
function getEtudiants($id_group, $name_session)
{
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);

	$requete = "	SELECT * FROM  `rgroup` ";
	$id_user = [];
	$retour = [];
	if ($statement = $conn->query($requete)) 
	{
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id_user" => $row['id_user'], "id_group" => $row['id_group']);
			array_push($retour, $temp);
		}
	}
	else { 
		die("fail requete");
	}
	foreach($retour as $key => $value) 
	{
		if ($value['id_group'] == $id_group)
		{
				$temp = array("id_user" => $value['id_user']);
				array_push($id_user, $temp);
		}
	}


	$requete1 = "	SELECT * FROM  `session` ";
	$retour2 = [];
	if ($statement = $conn->query($requete1)) 
	{
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id_user" => $row['user_id'], "name" => $row['name']);
			array_push($retour2, $temp);
		}
	}

	$id_user2 = [];
	foreach($retour2 as $key => $value) 
	{
		if ($value['name'] == $name_session)
		{
			$temp = array("id_user" => $value['id_user']);
			array_push($id_user2, $temp);
		}
	}

	$id = [];
	foreach ($id_user as $keys => $value) 
	{
		foreach($id_user2 as $key => $value2) 
		{
			if ($value['id_user'] == $value2['id_user'])
			{
				$temp = array("id_user" => $value2['id_user']);
				array_push($id, $temp);
			}
		}
	}


	$requete2 = "	SELECT * FROM  `users` ";
	$retour3 = [];
	if ($statement = $conn->query($requete2)) 
	{
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id_user" => $row['id'], "nom" => $row['nom'], "prenom" => $row['prenom']);
			array_push($retour3, $temp);
		}
	}
	$res = [];
	$name = "";
	foreach ($id as $key => $value) {
		foreach ($retour3 as $key => $user) 
		{
			if ($value['id_user'] == $user['id_user'])
			{
				$name = $user["nom"]." ".$user['prenom'];
				$temp = array("id_user" => $value['id_user'], "user" => $name);
				array_push($res, $temp);
			}
		}
	}

	$conn=null;
	return($res);
}

function getNameSessionById($id)
{
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);

	$requete = "	SELECT * FROM  `session` ";
	$retour = [];
	if ($statement = $conn->query($requete)) 
	{
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id" => $row['id'], "name" => $row['name']);
			array_push($retour, $temp);
		}
	}
	else { 
		die("fail requete");
	}
	$res = "";
	foreach($retour as $key => $value) 
	{
		if ($value['id'] == $id)
		{
			$res = $value['name'];
		}
	}

	$conn=null;
	return($res);
}
?>