var SauvegardeKeyboardEvent = function(file_id,time,from_l,to_l,from_c,to_c,text,removed){
	
	
	
	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //document.getElementById("debugView").innerHTML += xmlhttp.responseText;
                if(parseInt(xmlhttp.responseText) > 0 ){
                	var event_id = parseInt(xmlhttp.responseText);
                	for(var i = 0; i<text.length ; i++){
                		//console.log( "try to save :"+text[i]+"  sur l'event "+event_id);
                		saveTextEvent(event_id,text[i]);
                	}
                	for(var i = 0; i<removed.length ; i++){
                		//console.log( "try to save :"+text[i]+"  sur l'event "+event_id);
                		saveRemovedEvent(event_id,removed[i]);
                	}
                }
                else{
                	console.log("probleme, event_id : "+xmlhttp.responseText);
                }
            }
            else{
            	if((xmlhttp.readyState == 4) && (xmlhttp.status != 200)){
            		console.log("Ca marche pas: \nreadyState ="+xmlhttp.readyState+"\n status ="+xmlhttp.status);
            		alert("Il y a eu un probleme");
            		//erreurSauvegarde();
            	}
            }
        }
        xmlhttp.open("GET","../../back-side/keyboardEvent/getEvent.php?"        							+"file_id="+file_id
        						+"&time="+time
        						+"&from_l="+from_l
        						+"&to_l="+to_l
        						+"&from_c="+from_c
        						+"&to_c="+to_c
        						+"&text="+text+"&removed="+removed);
       
        	
        	
        xmlhttp.send();
        
        	
	
}


var saveTextEvent = function(event_id,text){

	
	if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        

        
        
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               console.log(xmlhttp.responseText);
               //alert("ca marche");
            }
            else{
            	if(xmlhttp.readyState != 4){
            		//console.log("probleme avec le readyState(save event) :"+xmlhttp.readyState);
            		//console.log("reponse :"+xmlhttp.responseText);
            		
            		//probleme, readystate est bloque a 1, sauf exception, bizarre
            	}
            	else{
            		console.log("probleme avec le status :"+xmlhttp.status);
            	}
            	
            	
            }
        }
        
        
        
        xmlhttp.open("POST","../../back-side/keyboardEvent/getLigneText.php");
        var params = "event_id="+event_id+"&text="+encrypt(text);
        console.log(text);
        
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.setRequestHeader("Content-length", params.length);
        xmlhttp.setRequestHeader("Connection", "close");
       
        xmlhttp.send(params);


}

var saveRemovedEvent = function(event_id,text){

	
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
            		console.log("Il y a eu un probleme avec les ligne de l'event");
            		//erreurSauvegarde();
            	}
            }
        }
        xmlhttp.open("GET","../../back-side/keyboardEvent/getRemovedText.php?"        							
        						+"event_id="+event_id
        						+"&text="+text);
       
        xmlhttp.send();


}

//car chaine.replace ne detecte pas l'apostrophe
var remplaceApostrophe = function(chaine){
	var nouvelleChaine="";
	for(var i = 0; i<chaine.length;i++){
		if(chaine[i] == "'"){
			nouvelleChaine += '¥';
			console.log("apostr");
		}
		else{
			nouvelleChaine+=chaine[i];
		}
	}
	return nouvelleChaine;
}



//fonctions de convertion de char non admissibles
//il existe une fonction decrypt(chaine) qui fait la reciproque en php

var encrypt = function(chaine){
	var retour = chaine.replace("+","®");
	var retour = retour.replace("&","™");
	retour = remplaceApostrophe(retour);
	return(retour);
}







