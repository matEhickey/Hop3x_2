<script src="../../js/etudiantsByGroupAjax.js"></script>
<h3>Sessions Universitaire</h3>
<?php
	include "getInfoPourSessionProfesseur.php";
	include "sessionController.php";
	if (isset($_GET['id_group']))
	{
		$id_group = $_GET['id_group'];
		$id = $_GET['id'];
		$nom = "";
		$all_sessions = getSessionByIdGroup($id_group);
		foreach ($all_sessions as $session => $value)
		{
			$id_session = getIdSessionByName($value['name']);
			echo '<input type = "button" class="btn btn-primary btn-block" value = "'.$value['name'].'" onClick="etudiantsByGroup('.$id.','.$id_group.', '.$id_session.');">';
		}

	}
?>