var sessionsByGroups = function(id, id_group){

    if (window.XMLHttpRequest) 
    {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
        
    xhttp.onreadystatechange = function() 
    {
        if (xhttp.readyState == 4 && xhttp.status == 200) 
        {
            document.getElementById("sessionsUniversitaire").innerHTML = xhttp.responseText;                
        }
        else{
            if((xhttp.readyState == 4) && (xhttp.status != 200))
            {
                console.log("Ca marche pas: \nreadyState ="+xhttp.readyState+"\n status ="+xhttp.status);
                alert("Il y a eu un probleme");
            }
        }
    }

    xhttp.open("GET", "../../back-side/sessions/getSessionByGroup.php?id=" + id + "&id_group=" + id_group);
    xhttp.send();
}
