function Save(id, nom){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      location.reload();
    }
  };
  var send_post="id=" + id + "&id_group=" + nom;
  xhttp.open("POST", "http://localhost/hop3x/prototype3.0/back-side/users/AjouterDansGroup.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //xhttp.send("id="+ id, "id_group="+ nom);
  xhttp.send(send_post);
  
}
