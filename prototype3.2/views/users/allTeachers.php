<?php
	include("../../commons/commonBegin.php");
	include("../../back-side/users/scaffoldUsers.php");
	include("../../back-side/users/scaffoldProfesseur.php");
	include("../../commons/formadmin.php");
	
	
	$professeurs = getProfesseur();
	
	
	
	echo "<h3>Enseignants</h3>";	
	
	echo "<div class=\"col-md-9\">   \n";
		foreach($professeurs as $prof){

				echo "<div class= \"row\" >  \n";
					echo "<button class=\"btn btn-primary btn-block\">".$prof["nom"]." ".$prof["prenom"]."</button>   \n";
				echo "</div>   \n";

		}
	echo "</div>   \n";
	
	
?>



<?php
	
	include("../../common/formadminend.php");
	include("../../common/commonEnd.php");
?>
