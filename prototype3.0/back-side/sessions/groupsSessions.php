<script src="../../js/sessionByGroupAjax.js"></script>
<?php
	$user_id = $_GET['id'];
	$id_group = getGroupsForProf($user_id);
	foreach ($id_group as $id => $value)
	{
		$nom_group = getGroupName($value['id_group']);							
		echo '<input type = "button" class="btn btn-primary btn-block" value = "'.$nom_group.'" onClick="sessionsByGroups('.$id.','.$value['id_group'].');">';
	}		
?>