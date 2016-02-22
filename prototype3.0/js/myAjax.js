var SauvegardeEvent = function(file_id,time,from_l,to_l,from_c,to_c,text,removed){
	
	
	
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
