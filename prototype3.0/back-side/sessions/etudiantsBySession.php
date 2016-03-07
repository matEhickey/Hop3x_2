<?php
	include_once "etudiantsSession.php";
	//$id_group = $_GET['id_group'];
	//$name = $_GET['name'];
	$name = "MadWorld";
	$id_group = 1;
	$all_etudiants = getEtudiants($id_group, $name);
	foreach ($all_etudiants as $etudiant => $value)
	{
		//echo "<div class=\"row\">";	
		//echo $value['name'];
		echo '<input type = "button" class="btn btn-primary btn-block" value = "'.$value['user'].'">';
		//echo "</div>";
	}
?>
