<h3>Eleves du groupes</h3>
<?php
	include "getInfoPourSessionProfesseur.php";
	include "sessionController.php";
	$id = $_GET['id'];
	$id_group = $_GET['id_group'];
	$id_session = $_GET['id_session'];
	$all_etudiants = getEtudiants($id, $id_group);
	foreach ($all_etudiants as $etudiant => $value)
	{
		$loc = 'location.href=\'../../views/sessions/sessionInfo.php?id_user='.$value['id_user'].'&id_session='.$id_session.'\'';
		echo '<input type = "button" class="btn btn-primary btn-block" value = "'.$value['user'].'" onClick = "'.$loc.';">';
	}
?>
