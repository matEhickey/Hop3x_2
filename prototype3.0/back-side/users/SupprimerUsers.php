<?php
	include("../../commons/commonBegin.php");
	include("../../commons/formadmin.php");
	include("scaffoldUsers.php");
	include("scaffoldProfesseur.php");
	include("scaffoldEtudiant.php");
	include("GenereteInfoUser.php");
	
?>
<?php
	$id_del = $_POST['id'];

		deleteUsers($id_del);
		include("../../views/users/allUsersDelete.php");

	
		//deleteProfesseur($id);
		//deleteEtudiant($id);
	
?>

<?php
	include("../../commons/commonEnd.php");
	include("../../commons/formadminend.php");
?>