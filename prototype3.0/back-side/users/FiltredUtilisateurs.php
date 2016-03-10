<?php
	
	//include("scaffoldUsers.php");
	//include("scaffoldProfesseur.php");
	//include("scaffoldEtudiant.php");
	include("GenereInfoUtilisateurs.php");
	
?>
<?php
	$tablevue = $_POST['choix'];
	
	if($tablevue == 'professeur'){
		include("../../views/users/formgestion.php");
		include("../../views/users/ProfesseursSupprimer.php");
		include("../../views/users/formgestionend.php");		
	}
	elseif($tablevue == 'utilisateur'){
		include("../../views/users/formgestion.php");
		include("../../views/users/UtilisateursSupprimer.php");
		include("../../views/users/formgestionend.php");
	}
	elseif ($tablevue == 'etudiant'){
		include("../../views/users/formgestion.php");
		include("../../views/users/EtudiantsSupprimer.php");
		include("../../views/users/formgestionend.php");
	}

?>

<?php
	include("../../commons/commonEnd.php");
	include("../../views/users/formadminend.php");
?>