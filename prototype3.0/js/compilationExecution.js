var compile = function(session_id){
	//creation des fichiers temporaire
	creerDossier(session_id);
	
}


var creerDossier = function(session_id){

	
	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               document.getElementById("debugView").innerHTML += xmlhttp.responseText;
            }
            else{
            	if((xmlhttp.readyState == 4) && (xmlhttp.status != 200)){
            		console.log("Ca marche pas: \nreadyState ="+xmlhttp.readyState+"\n status ="+xmlhttp.status);
            		alert("Probleme avec la creation du dossier");
            		//erreurSauvegarde();
            	}
            }
        }
        xmlhttp.open("GET","../../back-side/CompilationExecution/createDirectory.php?"        							
        						+"session_id="+session_id);
       
        xmlhttp.send();


}
