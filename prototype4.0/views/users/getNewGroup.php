<?php

	//include("../../back-side/users/scaffoldUsers.php");
	include("../../commons/commonBegin.php");
	include("../../commons/formadmin.php");
	include("../../commons/formgestiongroup.php");
	//include ("UsersAjoutDansGroup.php");
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
	include("../../commons/formadminend.php");
	include("../../commons/commonEnd.php");
	include("../../commons/formgestiongroupend.php");
	include("../../commons/formgestionend.php");
?>
