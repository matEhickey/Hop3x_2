<?php
	include("../../commons/commonBegin.php");
	//include("../../back-side/users/ControllerUtilisateurs.php");
	
//montrer la table d'utilisateurs
?>	
	
<?php 
		$gprofesseur = getUsers();
			echo '<div class=table-responsive>';
			echo '<table class= table >';
			echo '<caption alighn = centre> List des utilisateurs :</caption>';
			echo '<tr class = active>';
                echo '<td>ID</td>';
                echo '<td>LOGIN</td>';
				echo '<td>PASSWORD</td>';
				echo '<td>NOM</td>';
				echo '<td>PRENOM</td>';
				echo '<td>E-MAIL</td>';
				echo '<td>CLE SECURE COOCKIE</td>';
			echo '</tr>';
				foreach ($gprofesseur as $gprofesseur){
					echo '<tr>';
						foreach ($gprofesseur as $sValue){
							echo "<td>{$sValue}</td>";
						}
					echo '</tr>';
				}
			echo '</table>';
			echo '</div>';
		
	
	
?>



<?php
	
	include("../../commons/commonEnd.php");
?>
