<?php
	
	include("scaffoldUsers.php");
	include("scaffoldProfesseur.php");
	
	include("../../commons/commonBegin.php");
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	//echo $username."<br>";
	//echo $password."<br>";
	
	//si le username ou le mdp est vide, retour a la page d acceuil
	if((strcmp($username,"")==0)||(strcmp($password,"") == 0)){
		header('Location: ../../views/Acceuil/index.php?messageVous devez remplir vos identifiants');
	}
	else{
		
		$user = loginPasswordOK($username,$password);
		$userStatus = checkEtudProf($username);	
		
		
		if($user<0){
			header('Location: ../../views/Acceuil/index.php?message=Mauvais login ou mot de passe');
		}
		else{
			//login and password correspondent, on enregistre les cookies et on accede aux sessions
			$id = $user["id"];
			$cookie = $user["cleSecureCoockie"];
			
			
			setcookie("id",$id,0,"/","localhost");
			setcookie("cleSecureCoockie",$cookie,0,"/","localhost");
			
			//si l'enregistrement des cookies s'est bien passé on accede aux sessions.
			if(isConnected()==false){
				header('Location: ../../views/Acceuil/index.php?message=Il y a eu un probleme avec la connection');
			}
			else{
				if ($userStatus == "etudiant")
				{
					echo '<script>sendUserIdAjax('.$id.');</script>';
					header('Location: ../../views/sessions/sessionView.php');
				}
				if ($userStatus == "professeur")
				{
					echo "<script>sendUserIdAjax(".$id.");</script>";
					header('Location: ../../views/sessions/sessionProfesseur.php?id='.$id);
				}
				
			}
			
		}
	
	
	
	
	}



	include("../../commons/commonEnd.php");

?>



