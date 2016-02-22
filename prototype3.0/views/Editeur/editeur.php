<?php
	include("../../commons/commonBegin.php");
	$session = $_GET["session_id"];
	
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
    <script src="../../js/myAjax.js"></script>
    <script src="../../js/prototype1.js"></script>
    <script src="../../js/activityAjax.js"></script>
	<script src="../../js/stateAjax.js"></script>
	<script src="../../js/menuProjet.js"></script>
	<script src="../../js/menuFichier.js"></script>
    
   


		<div class="row hop3xBox">
			<!-- Panneau horizontal du dessus, fonctions importantes-->
			<ol class="list-inline">
				<li><button class="btn btn-primary">Nouveau</button></li>
				<li><button class="btn btn-primary">Compiler</button></li>
				<li><button class="btn btn-primary">Executer</button></li>
				<li><input type="text" class="form-control" id="search-button" placeholder="Search"></li>
				<li><input type="text" class="form-control" id="replace_button" placeholder="Replace"></li>
				<li><button class="btn btn-primary">Remplacer</button></li>
			
			</ol>
		</div>
		<hr>
		<div class="row">
		<!-- Panneau central, avec le panneau de navigation des fichiers, l editeur de texte, et le menu de tests-->
			<div class="col-md-2" id="menuProjets">
				<!-- fichiers-->
				
			</div>
			
			<div class="col-md-10">
				<!-- editeur -->			
				
					
					 <div  align="left">
					 
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
						    editor.on('change', function(ed,ev){handler(ed,ev)});
						    
						    //recupere la session
						    var session = "<?php Print($session); ?>";
    						    
						    
						    
						    loadMenuRapport(session);
						    //gestion de l'etat d'activite de l'utilisateur
						    //activityTick();
						    //checkState();
						    
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

