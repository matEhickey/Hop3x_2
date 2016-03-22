<?php

	//include("../../back-side/users/ControllerUtilisateurs.php");
	include("../../commons/commonBegin.php");
	include("formadmin.php");
	include("formgestiongroup.php");
	include("../../back-side/users/ControllerGroupe.php");

//creation et modification de nouveau groupe

//wtf, on ne peut donc creer qu'un seul groupe nommé, et quand on en select un il en crée un nouveau vide ? aussi super le formulaire qui n'est pas fermé (</form>) et le bouton en javascript vers une vues qui doit manipuler la bdd. n'importe quoi, tout a refaire! (pire, 2 pages font presque la meme chose, et le bouton gestion groupe change parfois et ne vient pas ici...)

	?>
		
	<form name = "gestion" action = "../../views/users/UsersAjoutDansGroup.php" method = POST>
				
				<table class = "table">
					<caption>Saisissez le nom de groupe</caption>
						<tr>
							<td alighn = "left"><p><!--p><select><option><input type = "text" name = "nom"></option></select></p-->
								<p> Creer le nouveau groupe : </p>
								<input type = "text" name = "nom">
								<p></p>
								<p> ou choisir le nom du groupe qui existe : </p>
								<?php
								$group = getGroup();
								?>
								<select class="selectpicker" data-show-subtext="true" data-live-search="true" name="nom1">
								<option value=""></option>
								<?php	
									foreach($group as $value => $key){
										echo '<option>'.$key['nom'].'</option>';
									}
								?>
								</select>
							</td>
							<td><p></p><input class="btn btn-primary btn-block" type ="submit" value = "Choisir" name = "Ajouter" onClick="location.href='../../views/users/UsersAjoutDansGroup.php';"></td>
						</tr>
				</table>
				
	
<?php
	include("formadminend.php");
	include("../../commons/commonEnd.php");
	include("formgestiongroupend.php");
	include("formgestionend.php");
?>
