<?php
	include("../../commons/commonBegin.php");
	include("../../commons/formadmin.php");
	include("ControllerUtilisateurs.php");
	include("ControllerProfesseur.php");
	include("ControllerEtudiant.php");
	include("GenereInfoUtilisateurs.php");
	
?>
<?php
	$id_del = $_POST['id'];

		deleteUsers($id_del);
		include("../../views/users/UtilisateursSupprimer.php");
		//deleteProfesseur($id);
		//deleteEtudiant($id);
	
?>

<?php
	include("../../commons/commonEnd.php");
	include("../../commons/formadminend.php");
?>