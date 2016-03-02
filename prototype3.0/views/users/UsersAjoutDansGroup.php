<?php
	include("../../commons/commonBegin.php");
	include("../../commons/formadmin.php");
	include("../../back-side/users/scaffoldUsers.php");
	include("../../back-side/users/scaffoldGroup.php");
	//include("../../back-side/users/CreateGroup.php");
	include("../../commons/formgestiongroup.php");
	

	
?>	
	<script src = "../../js/SaveId.js"></script>
	<form name "Ajouter" action = "../../back-side/users/AjouterDansGroup.php" method = "POST">
	
<?php 
		$groupnom = $_POST['nom'];
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
		echo $group;
		$gprofesseur = getUsers();
		$a = count($gprofesseur);
			echo '<div class=table-responsive>';
			echo '<table class= table >';
			echo '<caption alighn = centre> Choisi utilisateur qui vous voulez ajouter :</caption>';
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
				echo '<td><input class="btn btn-primary btn-block" value = "Ajouter" name = "Ajouter" onClick="Save('.$id_us.','.$group.');"></td>';
				echo '</tr>';
				}
				
				
			echo '</table>';
			
			echo '</div>';
		
	
	
?>

</form>

<?php
	include("../../commons/formadminend.php");
	include("../../commons/commonEnd.php");
	include("../../commons/formgestiongroupend.php");
?>
