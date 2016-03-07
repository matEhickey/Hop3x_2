<?php 
	include("sessionController.php");
	$id = $_POST['id'];
	$id_group = $_POST['id_group'];
	$name = htmlentities($_POST["sessionName"]);
	$all_users = getAllUserForGroup($id_group);
	foreach ($all_users as $key => $value) 
	{
		$user_id = $value['id_user'];
		if($user_id != $id)
		{
			if(!createSession($user_id, $name))
			{
				echo "<h3>probleme d'insertion</h3>";
			}
		}
		
	}
	header('Location: ../../views/sessions/sessionProfesseur.php?id='.$id);
	
	
?>

