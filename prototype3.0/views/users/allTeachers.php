<?php
	include("../../commons/commonBegin.php");

	
	//montrer de tablo des professeurs
	$professeurs = getProfesseur();
	
	echo "<div class=table-responsive>";
			echo "<table class= table >";
			echo "<caption alighn = centre> List des professeurs :</caption>";
			echo "<tr class = active>";
                echo "<td>ID</td>";
                echo "<td>LOGIN</td>";
				echo "<td>PASSWORD</td>";
				echo "<td>NOM</td>";
				echo "<td>PRENOM</td>";
				echo "<td>E-MAIL</td>";
				echo "<td>CLE SECURE COOCKIE</td>";
			echo "</tr>";
				foreach ($professeurs as $professeurs){
					echo "<tr>";
						foreach ($professeurs as $sValue){
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
