var loadMenuRapport = function(session_id){
	
	
	
	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("menuProjets").innerHTML = xmlhttp.responseText;                
                
            }
            else{
            	if((xmlhttp.readyState == 4) && (xmlhttp.status != 200)){
            		console.log("Ca marche pas: \nreadyState ="+xmlhttp.readyState+"\n status ="+xmlhttp.status);
            		alert("Il y a eu un probleme");
            	}
            }
        }
        xmlhttp.open("GET","../../back-side/projet/menuProjet.php?session_id="+session_id);
       
        	
        	
        xmlhttp.send();
        
        	
	
}

var newProjet = function(session_id){
	
	var nomProjet = document.getElementById("inputNomProjet").value;
	
	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		loadMenuRapport();
		console.log("nouveau projet  :"+xmlhttp.responseText);
            }
            else{
            	if((xmlhttp.readyState == 4) && (xmlhttp.status != 200)){
            		console.log("Ca marche pas: \nreadyState ="+xmlhttp.readyState+"\n status ="+xmlhttp.status);
            		alert("Il y a eu un probleme");
            	}
            }
        }
        xmlhttp.open("GET","../../back-side/projet/createProjet.php?session_id="+session_id+"&nom="+nomProjet);
       
        	
        	
        xmlhttp.send();
}


