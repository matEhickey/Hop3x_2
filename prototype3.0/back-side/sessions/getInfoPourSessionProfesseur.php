<?php
function getEtudiants($id_prof, $id_group)
{
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);

	$requete1 = "	SELECT * FROM  `relation_groupe` ";	
	$retour1 = [];
	if ($statement = $conn->query($requete1)) 
	{
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id_user" => $row['id_user'], "id_group" => $row['id_group']);
			array_push($retour1, $temp);
		}
	}
	else { 
		die("fail requete");
	}

	$id_user = [];
	foreach($retour1 as $key => $value) 
	{
		if (($value['id_group'] == $id_group) && ($value['id_user'] != $id_prof))
		{
				$temp = array("id_user" => $value['id_user']);
				array_push($id_user, $temp);
		}
	}

	$requete2 = "	SELECT * FROM  `utilisateurs` ";
	$retour2 = [];
	if ($statement = $conn->query($requete2)) 
	{
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id_user" => $row['id'], "nom" => $row['nom'], "prenom" => $row['prenom']);
			array_push($retour2, $temp);
		}
	}

	$result = [];
	$name = "";
	foreach ($id_user as $key => $value) {
		foreach ($retour2 as $key => $user) 
		{
			if ($value['id_user'] == $user['id_user'])
			{
				$name = $user["nom"]." ".$user['prenom'];
				$temp = array("id_user" => $value['id_user'], "user" => $name);
				array_push($result, $temp);
			}
		}
	}

	$conn = null;
	return($result);
}

function getSessionByIdGroup($id_group)
{
	$serverName = "localhost";
	$usernam = "root";
	$database = "hop3x";
	$password = "abcde";
	$conn = new PDO('mysql:host=localhost;dbname='.$database, $usernam, $password);

	$requete1 = "	SELECT * FROM  `relation_groupe` ";	
	$retour1 = [];
	if ($statement = $conn->query($requete1)) 
	{
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id_user" => $row['id_user'], "id_group" => $row['id_group']);
			array_push($retour1, $temp);
		}
	}
	else { 
		die("fail requete");
	}

	$id_user = [];
	foreach($retour1 as $key => $value) 
	{
		if ($value['id_group'] == $id_group)
		{
			$temp = array("id_user" => $value['id_user']);
			array_push($id_user, $temp);
		}
	}

	$requete2 = "	SELECT * FROM  `session` ";
	$retour2 = [];
	if ($statement = $conn->query($requete2)) 
	{
		while($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$temp = array("id_user" => $row['user_id'], "name" => $row['name']);
			array_push($retour2, $temp);
		}
	}

	$res = [];
	foreach ($id_user as $keys => $id) 
	{
		foreach($retour2 as $key => $value) 
		{
			if ($value['id_user'] == $id['id_user'])
			{
				$temp = array("name" => $value['name']);
				array_push($res, $temp);
			}
		}
	}

	$result = [];
	$result = unique_multidim_array($res,'name');
	$conn = null;
	return($result);
}
// La fonction supprime tous les doublons
function unique_multidim_array($array, $key) { 
    $temp_array = array(); 
    $i = 0; 
    $key_array = array(); 
    
    foreach($array as $val) { 
        if (!in_array($val[$key], $key_array)) { 
            $key_array[$i] = $val[$key]; 
            $temp_array[$i] = $val; 
        } 
        $i++; 
    } 
    return $temp_array; 
}
?>