<?php

class SessionPersonnelController{
	private $host = "localhost";
	private $username = "root";
	private $password = "abcde";
	private $database = "hop3x";
	private $con=null;
	function createSessionpersonnelle($titre,$commentaire){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$requete = "INSERT INTO `SessionPersonnelle` (
			`titre`,
			`commentaire`
		)
		VALUES (
			'".$titre."',
			'".$commentaire."'
		);";
		$statement = $conn->query($requete);
		if($statement == TRUE) {
			return true;
		}
		else{
			return false;
		}
		$conn=null;
	}
	function getSessionpersonnelle(){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$requete = "	SELECT * FROM  `SessionPersonnelle` ";
		$retour = [];
		if ($statement = $conn->query($requete)) {
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$temp = array("id" => $row['id'],"titre" => $row['titre'],"commentaire" => $row['commentaire']);
				array_push($retour,$temp);
			}
		}
		else { 
			die("fail requete");
		}
		$conn=null;
		return($retour);
	}
	function getSessionpersonnellebyId($id){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$requete = "	SELECT * FROM  `SessionPersonnelle` WHERE id=".$id;
		$retour = [];
		if ($statement = $conn->query($requete)) {
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$temp = array("id" => $row['id'],"titre" => $row['titre'],"commentaire" => $row['commentaire']);
				array_push($retour,$temp);
			}
		}
		else { 
			die("fail requete");
		}
		$conn=null;
		return($retour);
	}
	function updateSessionpersonnelle($id,$titre,$commentaire){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$requete ="UPDATE `SessionPersonnelle` SET `id` = '".$id."' ,`titre` = '".$titre."' ,`commentaire` = '".$commentaire."' WHERE id=".$id;
		$statement = $conn->query($requete);	
		if($statement == TRUE) {
			return true;
		}
		else{
			return false;
		}
		$conn=null;
	}
	function deleteSessionpersonnelle($id){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$requete ="DELETE FROM `SessionPersonnelle` WHERE `id` =".$id;
		$statement = $conn->query($requete);	
		if($statement== TRUE) {
			return true;
		}
		else{
			return false;
		}
	}

}
?>