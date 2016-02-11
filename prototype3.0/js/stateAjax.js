var checkState = function()
    {
            var time = 10000;
            //var timeNow = Date.now();
            setInterval(function(){
            ajaxStateUser(Date.now());
            }, time);
    }

var ajaxStateUser = function(timeNow)
{

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
                try {
                	var fonctionne = true;//parseInt(document.getElementById("debug").innerHTML);
                	if(fonctionne){
               		 	//alert("ca a la l'air de fonctionner");
			}
			else{ 
				alert("Il y a eu un probleme 1, veuillez recommencer svp");
			 }
                }
                catch(e){
                	alert("Il y a eu un probleme 2, veuillez recommencer svp");
                	console.log(e);
                }
                
                
            }
            else{
            	if((xmlhttp.readyState == 4) && (xmlhttp.status != 200)){
            		console.log("Ca marche pas: \nreadyState ="+xmlhttp.readyState+"\n status ="+xmlhttp.status);
            		alert("Il y a eu un probleme");
            		erreurSauvegarde();
            	}
            }
        }
        xmlhttp.open("GET","http://localhost/Hop3x_2/prototype3.0/back-side/activityState/getState.php?timeNow="+ timeNow);     	
        xmlhttp.send();
        
        	
	
}