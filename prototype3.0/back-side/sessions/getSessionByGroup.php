<script src="../../js/etudiantsBySessionAjax.js"></script>
<h3>Sessions Universitaire</h3>
<?php
	include "sessionGroup.php";
	if (isset($_GET['id_group']))
	{
		$id_group = $_GET['id_group'];
		$id = $_GET['id'];
		$nom = "";
		$all_sessions = getSession($id_group);
		foreach ($all_sessions as $session => $value)
		{
			$id_session = getIdSessionByName($value['name']);
			echo '<input type = "button" class="btn btn-primary btn-block" value = "'.$value['name'].'" onClick="etudiantsBySessions('.$id.','.$id_group.', '.$id_session.');">';
		}

		if (empty($all_sessions))
		{
			echo '<form method="post" action="../../back-side/sessions/getSessionProf.php">';
			echo '<label for="sessionName" >Nom de la session : </label> <br/> ';
			echo '<input type="text" name="sessionName" placeholder="Nom de la session"/>';
			echo '<br/>';
			echo '<input type="submit" class="btn btn-primary btn-block" name="envoyer" value="Creer" id="envoyer" />';
			echo '<input type ="hidden" name="id_group" value="'.$id_group.'">';
			echo '<input type ="hidden" name="id" value="'.$id.'">';
			echo '</form>';
		}
	}
?>