<?php

	//include("../../back-side/users/ControllerUtilisateurs.php");
	include("../../commons/commonBegin.php");
	include("formadmin.php");
	include("formgestiongroup.php");
	include("../../back-side/users/ControllerGroupe.php");

//creation et modification de nouveau groupe

	?>
		
	<form name = "gestion" action = "../../views/users/UsersAjoutDansGroup.php" method = POST>
				
				<table class = "table">
					<caption>Saisissez le nom de group</caption>
						<tr>
							<td alighn = "left"><p><!--p><select><option><input type = "text" name = "nom"></option></select></p-->
								<?php
								$group = getGroup();
								?>
								<select class="selectpicker" data-show-subtext="true" data-live-search="true" name="nom">
								<?php	
									foreach($group as $value => $key){
										echo '<option>'.$key['nom'].'</option>';
									}
								?>
								</select>
							</td>
							<td><input class="btn btn-primary btn-block" type ="submit" value = "Choisir" name = "Ajouter" onClick="location.href='../../views/users/UsersAjoutDansGroup.php';"></td>
						</tr>
				</table>
				
	
<?php
	include("formadminend.php");
	include("../../commons/commonEnd.php");
	include("formgestiongroupend.php");
	include("formgestionend.php");
?>
