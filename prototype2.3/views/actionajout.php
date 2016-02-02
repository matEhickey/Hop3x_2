<?php
	include("http://localhost/HOP3X/Design/commonBegin.php");
	include("http://localhost/HOP3X/Controllers/scaffoldUsers.php");
	include("http://localhost/HOP3X/Controllers/scaffoldProfesseur.php");
	include("http://localhost/HOP3X/Controllers/scaffoldEtudiant.php");
	include("http://localhost/HOP3X/Design/formadmin.php");
?>

		<div class="col-md-9" style="padding:1%;">
		<div class="panel panel-default">
			<div class="panel-heading">
						<h3 class="panel-title">Ajuoter nouvel utilisateur</h3>
			</div>
			<div class="panel-body">
<?php
	
	$tablevue = $_POST['choix'];
	
	if($tablevue == 'professeur'){
		$nomprof = $_POST['nom'];
		$prenomprof = $_POST['prenom'];
		$emailprof = $_POST['email'];
//_______________________________Generate the password		
			$arr = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'); // get all the characters into an array
			shuffle($arr); // randomize the array
			$arr = array_slice($arr, 0, 6); // get the first six (random) characters out
			$str = implode('', $arr); // smush them back into a string
//____________________________________________________
		$motdePasse = $str;		
		$username = substr($nomprof, 0 , 2).substr($prenomprof, 0 , 3);
		$cleSecureCoockie = rand (1000, 20000);
		$typeUtilisateur = 1;
//_______________________________CREATE_PROFESSEUR
		createUsers(/*$id,*/$username,$motdePasse,$nomprof,$prenomprof,$emailprof,$cleSecureCoockie,$typeUtilisateur);
		
		//$user_id = getIdOfUsers($username);
		
		//$idprof = creqteProf($user_id);
		
		$nprofesseur = createProfesseur($nomprof,$prenomprof,$emailprof);
	
		
//_______________________________GET_PROFESSEUR
		$gprofesseur = getUsers();
			echo "<div class=table-responsive>";
			echo "<table class= table >";
			echo "<caption alighn = centre> List des professeurs</caption>";
			echo "<tr class = active>";
                echo "<td>ID</td>";
                echo "<td>NOM</td>";
				echo "<td>PRENOM</td>";
				echo "<td>E-MAIL</td>";
			echo "</tr>";
				foreach ($gprofesseur as $gprofesseur){
					echo "<tr>";
						foreach ($gprofesseur as $sValue){
							echo "<td>{$sValue}</td>";
						}
					echo "</tr>";
}
			echo "</table>";
			echo "</div>";
	}

?>
	<input type = "button" value = "Ajouter plus" onclick=" location.href='http://localhost/a.php'" >
</div>
		</div>
		</div>



<?php
	include("http://localhost/HOP3X/Design/commonEnd.php");
	include("http://localhost/HOP3X/Design/formadminend.php");
?>