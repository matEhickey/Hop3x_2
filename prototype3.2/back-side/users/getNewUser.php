<?php
	
	include("scaffoldUsers.php");
	include("scaffoldProfesseur.php");
	
	include("../../commons/commonBegin.php");
	include("../../commons/formadmin.php");
	
?>


<?php
	
	
	

	
//______________________Getting the parameters________________________________
	
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$cleSecureCoockie = rand (1000, 20000);
		
		//si c'est un professeur ou un eleve
		$tablevue = $_POST['choix'];
	
	
	
//________________________________Generate the username	____________________
		
		
		$finusername = rand(01,99);  //normalement verifie dabord si le login n'est pas dupliqué
		$username = substr($nom, 0 , 3).substr($prenom, 0 , 3).$finusername;
		
		
//_______________________________Generate the password		
		$arr = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'); // get all the characters into an array
		shuffle($arr); // randomize the array
		$arr = array_slice($arr, 0, 6); // get the first six (random) characters out
		$str = implode('', $arr); // smush them back into a string
		$motdePasse = $str;
		
//Tests reception params
		
		echo "<br>Infos nouvel user <br>";
		echo "nom :".$nom."<br>";
		echo "prenom :".$prenom."<br>";
		echo "email :".$email."<br>";
		echo "username :".$username."<br>";
		echo "securepass :".$cleSecureCoockie."<br>";
		echo "mdp :".$motdePasse."<br>";
		
		
//_______________________________CREATE_USER

		createUsers(/*$id,*/$username,$motdePasse,$nom,$prenom,$email,$cleSecureCoockie);
	
		
	
	
	
	
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
?>




<?php
	include("../../common/commonEnd.php");
	include("../../common/formadminend.php");
?>
