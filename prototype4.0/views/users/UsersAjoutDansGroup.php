<?php
	include("../../commons/commonBegin.php");
	include("formadmin.php");
	include("../../back-side/users/ControllerUtilisateurs.php");
	include("../../back-side/users/ControllerGroupe.php");
	//include("../../back-side/users/CreateGroup.php");
	include("formgestiongroup.php");
	
//ajouter nouvel utilisateur dans le groupe
	
?>	
	<script src = "../../js/SauvgarderID.js"></script>
	<form name "Ajouter" action = "../../back-side/users/AjouterDansGroupe.php" method = "POST">
	
<?php 
		//$groupnom = $_POST['nom'];
		if ($_POST['nom1'] == ""){
			$groupnom = $_POST['nom'];
		}
		else{
			$groupnom = $_POST['nom1'];
		}
		
		echo "Ajouter d'utilisateurs dans le groupe : {$groupnom}";
		$validation = getGroupName();
		
		/*foreach($validation as $value => $key){
		echo $key['nom'];
		}*/
		$y = TRUE;
		$b = 0;
		$i = 0;

		if (sizeof($validation)>0){
			while ($y == TRUE && $i < count($validation)){
				foreach($validation as $key => $value){
					if($value['nom'] == $groupnom){
						$y = FALSE;
						break;
					}
					else{
						$y = TRUE;
						$i++;
					}
			
				}
			}
		}
		else{
			createGroup($groupnom);
			$y = FALSE;
		}

		if($y == TRUE){
			createGroup($groupnom);
		}
		

		$group = getIdGroupByNom($groupnom);
		$gprofesseur = getUsers();
		$a = count($gprofesseur);
			echo '<div class=table-responsive>';
			echo '<table class= table >';
			echo '<caption alighn = centre> Choisi l\'utilisateur qui vous voulez ajouter :</caption>';
			echo '<tr class = active>';
                echo '<td>ID</td>';
                echo '<td>LOGIN</td>';
				echo '<td>PASSWORD</td>';
				echo '<td>NOM</td>';
				echo '<td>PRENOM</td>';
				echo '<td>E-MAIL</td>';
				echo '<td>CLE SECURE COOCKIE</td>';
				echo '<td>SELECTION</td>';
			echo '</tr>';
				foreach ($gprofesseur as $gprofesseurbyid){
					$id_us = getUserId($gprofesseurbyid);
					
					echo '<tr>';
					
						foreach ($gprofesseurbyid as $sValue){
							echo "<td>{$sValue}</td>";
							}							
					echo '<td><input class="btn btn-primary btn-block" value = "Ajouter" name = "Ajouter" onClick="Save('.$id_us.','.$group.');"></td>';			//pourquoi faire une sauvegarde en ajax? un changement de page pour aller au plus simple aurait ete bien plus intelligent.. surtout vue le message que cela affiche
					echo '</tr>';
				}
				
				
			echo '</table>';
			
			echo '</div>';
		
	
	
?>

</form>

<?php
	include("formadminend.php");
	include("../../commons/commonEnd.php");
	include("formgestiongroupend.php");
?>
