<?php

	include_once("reconstruct.php");
	$file_id = $_GET['id'];
	
	$content = reconstructFichier($file_id);

	echo $content;


?>
