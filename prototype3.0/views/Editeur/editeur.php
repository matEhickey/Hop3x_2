<?php
	include("../../commons/commonBegin.php");
	include_once("../../back-side/sessions/sessionControllerUniversitaire.php");
	include_once("../../back-side/sessions/instanceUniversitaireController.php");
	include("../../back-side/users/scaffoldUsers.php");//pour tester la connection
	
	$session = $_GET["session_id"];
	$user_id = isConnected();
	
	$isSessionUniversitaire = isUniversitaire($session);	//si la session est une instance d'un session universitaire (retourne sa valeur ou false)
	
	if($isSessionUniversitaire){
		include("../../back-side/Enonce/EnonceController.php");
		$sessionUniversitaire_id = $isSessionUniversitaire;
		$enonces = getEnoncee($sessionUniversitaire_id);
	}
?>

    <!-- CodeMirror-->
    	<link rel=stylesheet href="../../codemirror/lib/codemirror.css">
	
	<script src="../../codemirror/lib/codemirror.js"></script>
	
	
<!-- 	<script src="../codemirror/mode/xml/xml.js"></script>
	<script src="../codemirror/mode/javascript/javascript.js"></script>
	<script src="../codemirror/mode/css/css.js"></script>
	<script src="../codemirror/mode/htmlmixed/htmlmixed.js"></script>

	<script src="../codemirror/mode/clike/clike.js"></script>
-->
	<script src="../../codemirror/mode/python/python.js"></script>
	<script src="../../codemirror/addon/edit/matchbrackets.js"></script>
	<!-- <script src="../codemirror/doc/activebookmark.js"></script> -->
    
    
    
    <!--Custom javascript-->
    <script src="../../js/keyboardEventAjax.js"></script>
    <script src="../../js/editeurCommon.js"></script>
    <script src="../../js/activityAjax.js"></script>
	<script src="../../js/stateAjax.js"></script>
	<script src="../../js/menuProjet.js"></script>
	<script src="../../js/menuFichier.js"></script>
    	<script src="../../js/compilationExecution.js"></script>
   


		<div class="row hop3xBox">
			<!-- Panneau horizontal du dessus, fonctions importantes-->
			<ol class="list-inline">
				<li><button class="btn btn-primary" onclick=<?php echo  "  \"compile(".$session.")\"  "    ?>>Compiler</button></li>
				<li><button class="btn btn-primary">Executer</button></li>
				<li><input type="text" class="form-control" id="search-button" placeholder="Search"></li>
				<li><input type="text" class="form-control" id="replace_button" placeholder="Replace"></li>
				<li><button class="btn btn-primary">Remplacer</button></li>
			
			</ol>
		</div>
		<hr>
		<div class="row">
		<!-- Panneau central, avec , le panneau de navigation des fichiers, la vue enonce, l editeur de texte, et le menu de tests-->
			<div class="col-md-2" id="menuProjets">
				<!-- fichiers-->
				
			</div>
			
			<div class="col-md-10">
				
				<?php
					if($isSessionUniversitaire){
				?>
				<!-- enonces -->
					<div class="row" id="fenetreEnonce" style="background-color: yellow;">
						<p>Enonces</p>
						<?php
							for($i=0;$i<count($enonces);$i++){
								echo "<p id=\"messageEnonce".$i."\" class=\"enonce\"> <button onclick=\"enoncePrecedent(); \"><<</button> ".$enonces[$i]["message"]." <button onclick=\"enonceSuivant();\">>></button></p>";
								echo "<p id=\"messageWinEnonce".$i."\" style=\"display: none;\">".$enonces[$i]["messagewin"]."</p>";
							}
						
						
						?>
					</div>
				<?php
					}
				?>
				
				<!-- editeur -->			
				
					
					 <div  align="left" style="padding-top: 15px;">
					 
					 <!-- Ici viendra le code -->
						  <textarea  id="editeur"></textarea>
					</div>
				
				
				
					<script>
					
					
						
						
						//main javascript
						$(document).ready(function(){
						
						    editor = CodeMirror.fromTextArea(document.getElementById("editeur"), {		//editor est global (il appartient donc a window)
						      mode: {name: "python",
						               version: 3,
						               singleLineStringErrors: false},
						        lineNumbers: true,
						        indentUnit: 4,
						        matchBrackets: true
						    });
						    
						    begin = Date.now();
						    
						    //Au debut, il n'y a pas de fichier ouvert, donc desact l'edition
						    //on la remet det qu'un fichier est charger
						    editor.setOption("readOnly",true);
						    editor.on('change', function(ed,ev){saveEvent(ed,ev)});
						    
						    //recupere la session
						    var session = "<?php Print($session); ?>";
    						    var user_id = "<?php Print($user_id); ?>";
						    loadMenuRapport(session);
						    //gestion de l'etat d'activite de l'utilisateur
						    activityTick(user_id);
						  
						    
						    initEnonces();
						    
						});
					   
					  </script>
				
			</div>
			
			
			
			
			
			
			
			
			
			
		</div>
		
		
		
		<div class="row">
		
		<!-- Menu debug et output du programme -->
			<!--
			<div class="col-md-3">
			</div>
			-->
			<div class="col-md-6">
				<h3>Terminal</h3>
				<textarea disabled class="form-control">User: ~/Documents/Projet1/  :  </textarea>
			</div>
			
			<div class="col-md-6">
				<h3>Debug (developpement/tests)</h3>
				<textarea disabled class="form-control" id="debugView" rows=10> # </textarea>
				<a href="../sessions/sessionView.php"><button class="btn btn-primary btn-lg btn-block">Retour aux sessions</button></a>
			</div>
			
			
		
		</div>
		
		
		


<?php
	include("../../commons/commonEnd.php");
?>

