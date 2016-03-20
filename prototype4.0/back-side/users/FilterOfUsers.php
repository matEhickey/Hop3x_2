<?php
	
	//include("scaffoldUsers.php");
	//include("scaffoldProfesseur.php");
	//include("scaffoldEtudiant.php");
	include("GenereteInfoUser.php");
	
?>
<?php
	$tablevue = $_POST['choix'];
	
	if($tablevue == 'professeur'){
		include("../../commons/formgestion.php");
		include("../../views/users/allTeachersDelete.php");
		include("../../commons/formgestionend.php");		
	}
	elseif($tablevue == 'utilisateur'){
		include("../../commons/formgestion.php");
		include("../../views/users/allUsersDelete.php");
		include("../../commons/formgestionend.php");
	}
	elseif ($tablevue == 'etudiant'){
		include("../../commons/formgestion.php");
		include("../../views/users/allStudentsDelete.php");
		include("../../commons/formgestionend.php");
	}

?>

<?php
	include("../../commons/commonEnd.php");
	include("../../commons/formadminend.php");
?>