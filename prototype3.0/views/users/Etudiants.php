<?php
	include("../../commons/commonBegin.php");
//montrer la table d'etudiants
?>	
	
<?php 
		$etudiant = getEtudiant();
			echo "<div class=table-responsive>";
			echo "<table class= table >";
			echo "<caption alighn = centre> List des utilisateurs :</caption>";
			echo "<tr class = active>";
                echo "<td>ID</td>";
                echo "<td>LOGIN</td>";
				echo "<td>PASSWORD</td>";
				echo "<td>NOM</td>";
				echo "<td>PRENOM</td>";
				echo "<td>E-MAIL</td>";
				echo "<td>CLE SECURE COOCKIE</td>";
			echo "</tr>";
				foreach ($etudiant as $etudiant){
					echo "<tr>";
						foreach ($etudiant as $sValue){
							echo "<td>{$sValue}</td>";
						}
					echo "</tr>";
				}
			echo "</table>";
			echo "</div>";
		
	
	
?>



<?php
	
	include("../../commons/commonEnd.php");
?>
