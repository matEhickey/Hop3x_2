<?php
	include("../../commons/commonBegin.php");
	include("../../back-side/users/ControllerUtilisateurs.php");
	include("../../back-side/users/ControllerEtudiant.php");

	
?>	
	<script src = "../../js/SupprimerUtilisateur.js"></script>
	<form name "delete" action = "../../back-side/users/SupprimerUtilisateur.php" method = "POST">
<?php 
//effacement d'etudaints
	
		$gprofesseur = getEtudiant();
		$a = count($gprofesseur);
			echo '<div class="table-responsive header-fixed">';
			echo '<table class= "table" >';
			echo '<caption alighn = centre> List des utilisateurs :</caption>';
			echo '<tr class = active>';
                echo '<td>ID</td>';
                echo '<td>LOGIN</td>';
				echo '<td>PASSWORD</td>';
				echo '<td>NOM</td>';
				echo '<td>PRENOM</td>';
				echo '<td>E-MAIL</td>';
				echo '<td>CLE SECURE COOCKIE</td>';
				echo '<td>MODIFICATION</td>';
			echo '</tr>';
				foreach ($gprofesseur as $gprofesseurbyid){
					$id_us = getEtudiantId($gprofesseurbyid);
					
					echo '<tr>';
					
						foreach ($gprofesseurbyid as $sValue){
							echo "<td>{$sValue}</td>";
							}							
				 echo '<td><input class="btn btn-primary btn-block" value = "Supprimer" name = "delete" onClick="deleteUser('.$id_us.');"></td>';
				echo '</tr>';
				}
			echo '</table>';
			echo '</div>';
		
	
	
?>

</form>

<?php
	
	include("../../commons/commonEnd.php");
?>
