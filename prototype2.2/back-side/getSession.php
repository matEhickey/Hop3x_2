<?php 
 	include("../commons/commonBegin.php");
	include("../back-side/sessionController.php");

	/*pour l'insertion*/
	if(isset($_POST['envoyer'])){
		$user_id=5;
		$name=htmlentities($_POST["sessionName"]);
		
		if(createSession_Hop3X($user_id,$name)){
			header('Location: ../views/sessionView.php');
		}else{
			echo "<h3>probleme d'insertion</h3>";
		}

		/*echo $user_id."\n";
		echo $name;*/
	}
	
	/*pour la modification*/
	if(isset($_POST['modifier'])){
		$id=$_POST['id'];
		$name=$_POST['sessionName'];
		$user_id=$_POST['user_id'];
		if(updateSession_Hop3X($id,$user_id,$name)){
			header('Location: ../views/sessionView.php');
		}else{
			echo "<h3>probleme de Modification</h3>";
		}

		/*echo "id= ".$id;
		echo "name: ".$name;
		echo "user_id: ".$user_id;*/
	}
?>

<a href="http://localhost/hop3x/hop3x/prototype2.0/views/sessionView.php" class="btn btn-default">Retourer a la page de session</a>


<?php
	include("../commons/commonEnd.php");
?>
