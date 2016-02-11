<?php
	
	include("scaffoldUsers.php");
	include("scaffoldProfesseur.php");
	include("scaffoldEtudiant.php");
	include("GenereteInfoUser.php");
	
?>
<?php
	$tablevue = $_POST['choix'];
	//si d'administrateur veut voir seulement des professeurs
	if($tablevue == 'professeur'){
		include("../../commons/formgestion.php");
		include("../../views/users/allTeachers.php");
		include("../../commons/formgestionend.php");		
	}
	//si d'administrateur veut voir toutes les utilisateurs
	elseif($tablevue == 'utilisateur'){
		include("../../commons/formgestion.php");
		include("../../views/users/allUsers.php");
		include("../../commons/formgestionend.php");
	}
	//si d'administrateur veut voir seulement des etudiants
	elseif ($tablevue == 'etudiant'){
		include("../../commons/formgestion.php");
		include("../../views/users/allStudents.php");
		include("../../commons/formgestionend.php");
	}

?>

<?php
	include("../../commons/commonEnd.php");
	include("../../commons/formadminend.php");
?>