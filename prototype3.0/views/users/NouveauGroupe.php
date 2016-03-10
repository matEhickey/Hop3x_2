<?php

	//include("../../back-side/users/ControllerUtilisateurs.php");
	include("../../commons/commonBegin.php");
	include("formadmin.php");
	include("formgestiongroup.php");

//creation et modification de nouveau groupe
	?>
	<form name = "gestion" action = "../../views/users/UsersAjoutDansGroup.php" method = POST>
	<table class = "table">
					<caption>Saisissez le nom de group</caption>
						<tr>
							<td alighn = "left"><p><input type = "text" name = "nom"></p></td>
							<td><input class="btn btn-primary btn-block" type ="submit" value = "Ajouter" name = "Ajouter" onClick="location.href='../../views/users/UsersAjoutDansGroup.php';"></td>
						</tr>
				</table>
<?php
	include("formadminend.php");
	include("../../commons/commonEnd.php");
	include("formgestiongroupend.php");
	include("formgestionend.php");
?>
