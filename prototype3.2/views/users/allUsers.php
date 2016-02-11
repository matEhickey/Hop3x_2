<?php
	include("../../commons/commonBegin.php");
	include("../../back-side/users/scaffoldUsers.php");
	include("../../back-side/users/scaffoldProfesseur.php");
	include("../../commons/formadmin.php");
	
	
	$users = getUsers();
	
	
	echo "<h3>Utilisateurs</h3>";
	
	echo "<div class=\"col-md-9\">   \n";
		foreach($users as $user){
			echo "<div class= \"row\" >  \n";
		
				echo "<button class=\"btn btn-primary btn-block\">".$user["nom"]."</button>   \n";
		
		
			echo "</div>   \n";
		}
	echo "</div>   \n";
	
	
?>



<?php
	
	include("../../common/formadminend.php");
	include("../../common/commonEnd.php");
?>
