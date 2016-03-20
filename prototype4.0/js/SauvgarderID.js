function Save(id, nom){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    
  	};
  var send_post="id=" + id + "&id_group=" + nom;
  xhttp.open("POST", "../../back-side/users/AjouterDansGroupe.php", true);	
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //xhttp.send("id="+ id, "id_group="+ nom);
  xhttp.send(send_post);
  
}
