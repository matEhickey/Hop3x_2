<?php
class EnonceController{
	private $con=null;
	private $host = "localhost";
	private $username = "root";
	private $password = "Mahamat";
	private $database = "hop3x";

	/**
	*Fonction qui retourne la connexion PDO à utiliser
	*/
	public function getConnection(){
		if($con==null){
			$con =new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		}
		return $con;
	}

	/**
	*fonction qui ajoute des instances dans la base 
	*@message est le message en provenance de la page web
	*@messagewi est le messagewin en provenance de la page web
	*@sessionUniversitaire_id est l'identifiant de la session courante
	*/
	public function createEnoncee($message,$messagewin,$sessionUniversitaire_id){
		$conn=$this->getConnection();
		$requete = "INSERT INTO `enoncee` (
			`message`,
			`messagewin`,
			`sessionUniversitaire_id`
		)
		VALUES (
			'".$message."',
			'".$messagewin."',
			'".$sessionUniversitaire_id."'
		);";
		$statement = $conn->query($requete);
		if($statement == TRUE) {
			return true;
		}
		else{
			return false;
		}
	}

	/**
	*fonction qui retourne les enoncées par session 
	*@sessionUniversitaire_id est l'identifiant de la session courante
	*/
	public function getEnoncee($sessionUniversitaire_id){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete = "	SELECT * FROM  `enoncee` WHERE  sessionUniversitaire_id=".$sessionUniversitaire_id;
		$retour = [];
		if ($statement = $conn->query($requete)) {
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$temp = array("idEnonce" => $row['idEnonce'],
						"message" => $row['message'],
						"messagewin" => $row['messagewin'],
						"sessionUniversitaire_id" => $row['sessionUniversitaire_id']);
				array_push($retour,$temp);
			}
		}
		else { 
			die("fail requete");
		}
		$conn=null;
		return($retour);
	}

	/**
	*fonction qui retourne les enoncées par session
	*@idEnonce est l'identifant de l'enoncé courante
	*@sessionUniversitaire_id est l'identifiant de la session courante
	*/
	public function getEnonceebyIdandSession($idEnonce,$sessionUniversitaire_id){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete = "	SELECT * FROM  `enoncee` WHERE idEnonce=".$idEnonce." AND sessionUniversitaire_id = ".$sessionUniversitaire_id;
		$retour = [];
		if ($statement = $conn->query($requete)) {
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$temp = array("idEnonce" => $row['idEnonce'],
							"message" => $row['message'],
							"messagewin" => $row['messagewin'], 
							"sessionUniversitaire_id" => $row['sessionUniversitaire_id']);
				array_push($retour,$temp);
			}
		}
		else { 
			die("fail requete");
		}
		$conn=null;
		return($retour);
	}

	/**
	*fonction qui retourne un enoncée selon l'identifiant
	*@idEnonce est l'identifant de l'enoncé courante
	*/
	public function getEnonceebyId($idEnonce){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete = "	SELECT * FROM  `enoncee` WHERE idEnonce=".$idEnonce;
		$retour = [];
		if ($statement = $conn->query($requete)) {
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$temp = array("idEnonce" => $row['idEnonce'],
							"message" => $row['message'],
							"messagewin" => $row['messagewin'],
							"sessionUniversitaire_id" => $row['sessionUniversitaire_id']);
				array_push($retour,$temp);
			}
		}
		else { 
			die("fail requete");
		}
		$conn=null;
		return($retour);
	}

	/**
	*fonction qui met à jour la table Enoncée
	*@idEnonce est l'identifant de l'enoncé courante
	*@message est le message en provenance de la page web
	*@messagewin est le messagewin en provenance de la page web
	*@sessionUniversitaire_id est l'identifiant de la session courante
	*/
	public function updateEnoncee($idEnonce,$message,$messagewin,$sessionUniversitaire_id){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');;
		$requete ="UPDATE `enoncee` SET `idEnonce` = '".$idEnonce."' ,
				`message` = '".$message."' ,
				`messagewin` = '".$messagewin."', 
				`sessionUniversitaire_id`= '".$sessionUniversitaire_id."'
		WHERE id=".$idEnonce;
		$statement = $conn->query($requete);	
		if($statement == TRUE) {
			return 1;
		}
		else{
			return 0;
		}
		$conn=null;
	}


	/**
	*fonction qui supprime la table Enoncée
	*@idEnonce est l'identifant de l'enoncé courante
	*/
	public function deleteEnoncee($idEnonce){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete ="DELETE FROM `enoncee` WHERE `idEnonce` =".$idEnonce;
		$statement = $conn->query($requete);	
		if($statement == TRUE) {
			return 1;
		}
		else{
			return 0;
		}
		$conn=null;
	}

}
?>
