<?php
	include("../../commons/commonBegin.php");
?>

	<title>Info</title>
		<div class="col-md-12" style="padding:1%;">
			<!-- Titre, et 2 types de sessions -->
			<div class="row">
				<h2 class="hop3xBox">Information</h2>
				<div class="row">
					<div class="col-md-4" id="info">
						<?php 
							$id_user = $_GET['id_user'];
							$id_session = $_GET['id_session'];
							echo '<label for="user" >ID étudiant : '.$id_user.'</label> <br/>';
							echo '<label for="user" >ID session : '.$id_session.'</label> <br/>';
						?>						
					</div>
				</div>
				
			</div>
		</div>
<?php
	include("../../commons/commonEnd.php");
?>
