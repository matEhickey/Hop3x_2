<?php
	
	include("ControllerUtilisateurs.php");
	include("ControllerProfesseur.php");
	include("ControllerEtudiant.php");
	include("GenereInfoUtilisateurs.php");
	
	include("../../commons/commonBegin.php");
	include("../../views/users/formadmin.php");
	
?>
	<div class="col-md-9" style="padding:1%;">
		<div class="panel panel-default">
			<div class="panel-heading">
						<h3 class="panel-title">Ajuoter nouvel utilisateur</h3>
			</div>
			<div class="panel-body">

<?php	
//______________________Getting the parameters________________________________
	
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$cleSecureCoockie = rand (1000, 20000);
		
		//si c'est un professeur ou un eleve
		$tablevue = $_POST['choix'];
		
//________________________________Generate the username	____________________
		
		//$finusername = rand(01,99);  //normalement verifie dabord si le login n'est pas dupliqué
		$un = substr($nom, 0 , 3).substr($prenom, 0 , 3);//.$finusername;
		$a = 1;
		$y = FALSE;
		
		$validationUN = getUserName();
		if (sizeof($validationUN)== 0){
			$username = $un;
		}
		else{	
			while ($y == FALSE){
				foreach ($validationUN as $value){
					if(($s = in_array($un, $value)) == TRUE) {
						$b = 1;
					}else{
						$b = 0;
					}
			
					if ($b == 1){
						$un = substr($nom, 0 , 2).substr($prenom, 0 , 3).(string)$a;
						$username = $un;
						$a = $a+1; 
					}else{
						$username = $un;
						$y = TRUE;
					}
				}
			}
		}

//_______________________________Generate the password		
		/*$arr = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'); // get all the characters into an array
		shuffle($arr); // randomize the array
		$arr = array_slice($arr, 0, 6); // get the first six (random) characters out
		$str = implode('', $arr); // smush them back into a string
		$motdePasse = $str;*/
		
		$validationPW = getPassword();
		$str = GeneratePasse();
		$x = FALSE;
		$b = 0;
		if (sizeof($validationPW) == 0){
			$motdePasse = $str;
		}
		else{	
			while ($x == FALSE){
				foreach ($validationPW as $value){
					if(($s = in_array($str, $value)) == TRUE) {
						$b = 1;
					}else {
						$b = 0;	
					}
					if ($b == 1){
						$str = GeneratePasse();
						$motdePasse = $str;
					}else{
						$motdePasse = $str;
						$x = TRUE;
					}
				}
			}
		}	
//_______________________________CREATE_USER

		createUsers(/*$id,*/$username,$motdePasse,$nom,$prenom,$email,$cleSecureCoockie);
	
		
	
	include ("../../views/users/Utilisateurs.php");
	
	
	//si c'est un professeur, on l'ajoute aussi dans la table professeur
	if($tablevue == 'professeur'){
		
//_______________________________GET user_id for make him professeur
		$user_id = getUserIdByUsername($username);	// return -1 if problem
		if($user_id > 0){
			createProfesseur($user_id);
		}
		else{
			echo "Problem 1, username problem when storing teacher";
		}
	} 
	elseif($tablevue == 'etudiant'){
		$user_id = getUserIdByUsername($username);	// return -1 if problem
		if($user_id > 0){
			createEtudiant($user_id);
		}
		else{
			echo "Problem 1, username problem when storing student";
		}
	}
	
	
?>

	<input type="button" class="btn btn-primary btn-block" value="Ajouter plus" onClick="location.href='../../views/users/NouvelUtilisateur.php';">
</div>
		</div>
		</div>


<?php
	include("../../commons/commonEnd.php");
	include("../../views/users/formadminend.php");
?>
