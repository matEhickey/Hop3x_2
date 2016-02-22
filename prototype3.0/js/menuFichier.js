var showFichiers = function(projet_id){
	console.log("affichage fichiers du projet "+projet_id);
	
	
	
	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {               
                document.getElementById("menuFichiers"+projet_id).innerHTML = xmlhttp.responseText;
            }
            else{
            	if((xmlhttp.readyState == 4) && (xmlhttp.status != 200)){
            		console.log("Ca marche pas: \nreadyState ="+xmlhttp.readyState+"\n status ="+xmlhttp.status);
            		alert("Il y a eu un probleme");
            	}
            }
        }
        xmlhttp.open("GET","../../back-side/fichier/menuFichier.php?projet_id="+projet_id);
       
        	
        	
        xmlhttp.send();
	
}

var loadFichier = function(file_id){
	console.log("arrivé dans loadFichier");
	
	
	
	
	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {   
            	 
            	
            	DesactiveKeyboardEvent();
            	editor.getDoc().setValue(xmlhttp.responseText);
            	EditorSetFileId(file_id);
                ReactiveKeyboardEvent();
                
            }
            else{
            	if((xmlhttp.readyState == 4) && (xmlhttp.status != 200)){
            		console.log("Ca marche pas: \nreadyState ="+xmlhttp.readyState+"\n status ="+xmlhttp.status);
            		alert("Il y a eu un probleme");
            	}
            }
        }
        xmlhttp.open("GET","../../back-side/fichier/fichierRandom.php");
       
        	
        	
        xmlhttp.send();
	
}

var newFichier = function(projet_id){

	var nomFichier = document.getElementById("inputNomFichier").value;
	var language = document.getElementById("inputExtenFichier").value;


	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {   
            	
                showFichiers(projet_id);
            }
            else{
            	if((xmlhttp.readyState == 4) && (xmlhttp.status != 200)){
            		console.log("Ca marche pas: \nreadyState ="+xmlhttp.readyState+"\n status ="+xmlhttp.status);
            		alert("Il y a eu un probleme");
            	}
            }
        }
        xmlhttp.open("GET","../../back-side/fichier/createFichier.php?projet_id="+projet_id+"&nom="+nomFichier+"&language="+language);
       
        	
        	
        xmlhttp.send();
}

