<?php
	include("../commons/commonBegin.php");
?>

    <!-- CodeMirror-->
    	<link rel=stylesheet href="../codemirror/lib/codemirror.css">
	
	<script src="../codemirror/lib/codemirror.js"></script>
	
	
<!-- 	<script src="../codemirror/mode/xml/xml.js"></script>
	<script src="../codemirror/mode/javascript/javascript.js"></script>
	<script src="../codemirror/mode/css/css.js"></script>
	<script src="../codemirror/mode/htmlmixed/htmlmixed.js"></script>

	<script src="../codemirror/mode/clike/clike.js"></script>
-->
	<script src="../codemirror/mode/python/python.js"></script>
	<script src="../codemirror/addon/edit/matchbrackets.js"></script>
	<!-- <script src="../codemirror/doc/activebookmark.js"></script> -->
    
    
    
    <!--Custom javascript-->
    <script src="../js/myAjax.js"></script>
    <script src="../js/prototype1.js"></script>

    
   


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
			<div class="col-md-2">
				<!-- fichiers-->
				<ol style="list-style-type:none;">
					<li><button class="btn btn-primary btn-lg btn-block">fichier 1</button></li>
					<li><button class="btn btn-primary btn-lg btn-block">fichier 2</button></li>
					<li><button class="btn btn-primary btn-lg btn-block">fichier 3</button></li>
				</ol>
			</div>
			
			<div class="col-md-8">
				<!-- editeur -->			
				
					
					 <div  align="left">
						  <textarea  id="editeur">
def createD(f,table,server,user,password,db):
    f.write("function delete"+table.title()+"($id){\n")
    createConnection(f,server,user,password,db)
    f.write("\t$requete =\"DELETE FROM `"+table+"` WHERE `id` =\".$id;\n")

    f.write("\tif($conn->query($requete) === TRUE) {\n")
    f.write("\t\techo \"<h3>Les modifications ont ete prises en compte</h3>\";\n")
    f.write("\t}\n")
    
    f.write("\telse{\n")
    f.write("\t\techo \"<h3>Erreur, veuillez recommencer</h3>\";\n")
    f.write("\t}\n")
    
    f.write("\t$conn->close();\n")
						  </textarea>
					</div>
				
				
				
					<script>
					
					
						
						
						//main
						$(document).ready(function(){
						
						    var editor = CodeMirror.fromTextArea(document.getElementById("editeur"), {
						      mode: {name: "python",
						               version: 3,
						               singleLineStringErrors: false},
						        lineNumbers: true,
						        indentUnit: 4,
						        matchBrackets: true
						    });
						    
						    begin = Date.now();
						    editor.on('change', function(ed,ev){handler(ed,ev)});
						});
					   
					  </script>
				
			</div>
			
			
			
			
			
			
			
			
			
			<div class="col-md-2">
				<!-- tests -->
				<ol style="list-style-type:none;">
					<li><button class="btn btn-primary btn-lg btn-block" onclick="enableDescrTest(1);">Test 1</button></li>
					<div id="descrTest1" class="descrTest" style="display:none;">
					<p>Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito</p>
					<button class="btn btn-primary">Executer</button>
					</div>
					<li><button class="btn btn-primary btn-lg btn-block" onclick="enableDescrTest(2);">Test 2</button></li>
					<div id="descrTest2" class="descrTest" style="display:none;">
					<p>Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito</p>								
					<button class="btn btn-primary">Executer</button>
					</div>
					<li><button class="btn btn-primary btn-lg btn-block" onclick="enableDescrTest(3);">Test 3</button></li>
					<div id="descrTest3" class="descrTest" style="display:none;">
					<p>Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito</p>
					<button class="btn btn-primary">Executer</button>
					</div>
				</ol>
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
				<h3>Debug (devellopement/tests)</h3>
				<textarea disabled class="form-control" id="debugView" rows=10> # </textarea>
				<a href="accueil.php"><button class="btn btn-primary btn-lg btn-block">Retour aux sessions</button></a>
			</div>
			
			
		
		</div>
		
		
		


<?php
	include("../commons/commonEnd.php");
?>

