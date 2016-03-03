<?php
public class ProjetController{
	private $host = "localhost";
	private $username = "root";
	private $password = "abcde";
	private $database = "hop3x";
	private $con=null;


	public function getConnexion(){
		return new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
	}
	function createProjet($nom){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete = "INSERT INTO `projet` (
			`nom`
		)
		VALUES (
			'".$nom."'
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
	function getProjet(){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username,'');
		$requete = "	SELECT * FROM  `projet` ";
		$retour = [];
		if ($statement = $conn->query($requete)) {
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$temp = array("id" => $row['id'],"nom" => $row['nom']);
				array_push($retour,$temp);
			}
		}
		else { 
			die("fail requete");
		}
		$conn=null;
		return($retour);
	}
	function updateProjet($id,$nom){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username,'');
		$requete ="UPDATE `projet` SET `id` = '".$id."' ,`nom` = '".$nom."' WHERE id=".$id;
		$statement = $conn->query($requete);	if($statement == TRUE) {
			echo "<h3>Les modifications ont été prises en compte</h3>";
		}
		else{
			echo "<h3>Erreur, veuillez recommencer</h3>";
		}
		$conn=null;
	}
	function deleteProjet($id){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete ="DELETE FROM `projet` WHERE `id` =".$id;
		$statement = $conn->query($requete);	if($statement== TRUE) {
			echo "<h3>Les modifications ont été prises en compte</h3>";
		}
		else{
			echo "<h3>Erreur, veuillez recommencer</h3>";
		}
		$conn=null;
	}

}
?>