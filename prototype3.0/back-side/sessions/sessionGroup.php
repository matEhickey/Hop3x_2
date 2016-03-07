<?php
function getSession($id_group)
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
	$conn=null;
	return($result);
}

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
 function getIdSessionByName ($name)
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

	foreach($retour as $key => $value) 
	{
		if ($value['name'] == $name)
		{
			$res = $value['id'];
		}
	}

	$conn=null;
	return($res);
 }

?>