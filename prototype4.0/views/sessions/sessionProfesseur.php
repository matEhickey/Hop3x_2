<?php
	include("../../commons/commonBegin.php");
	include("../../back-side/users/ControllerRelationGroupe.php");
	include("../../back-side/users/ControllerGroupe.php");
	include("../../back-side/sessions/sessionController.php");
	include("../../back-side/sessions/getInfoPourSessionProfesseur.php");

?>
<script src="../../js/etudiantsByGroupAjax.js"></script>
<script src="../../js/sessionByGroupAjax.js"></script>

	<title>Professeur</title>
		<div class="col-md-12" style="padding:1%;">
			<!-- Titre, et 2 types de sessions -->
			<div class="row">
				<h2 class="hop3xBox">Sessions Professeurs</h2>
				<div class="row">
					<div class="col-md-4" id="affichageGroupe">
						<h3>Affichage groupe</h3>
						<?php
							include("../../back-side/sessions/getGroupesPourProfesseur.php");
						?>							
					</div>

					<div class="col-md-4" id="sessionsUniversitaire">
						<h3>Sessions Universitaire</h3>
					</div>

					<div class="col-md-4" id="elevesDuGroupes">
						<h3>Eleves du groupes</h3>
					</div>
				</div>
				
			</div>
		</div>
<?php
	include("../../commons/commonEnd.php");
?>
