<?php

class TestController{
	private $host = "localhost";
	private $username = "root";
	private $password = "abcde";
	private $database = "hop3x";
	private $con=null;
	function createTest($message,$code,$sessionUniversitaire_id){
		
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete = "INSERT INTO `test` (
			`message`,
			`code`,
			`sessionUniversitaire_id`
		)
		VALUES (
			'".$message."',
			'".$code."',
			'".$sessionUniversitaire_id."'
		);";
		$statement = $conn->query($requete);
		if($statement == TRUE) {
			echo "<h3>Les modifications ont été prises en compte</h3>";
		}
		else{
			echo "<h3>Erreur, veuillez recommencer</h3>";
		}
		$conn=null;
	}
	function getTest(){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete = "	SELECT * FROM  `test` ";
		$retour = [];
		if ($statement = $conn->query($requete)) {
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$temp = array("id" => $row['id'],"message" => $row['message'],"code" => $row['code'], 'sessionUniversitaire_id' => $row['sessionUniversitaire_id']);
				array_push($retour,$temp);
			}
		}
		else { 
			die("fail requete");
		}
		$conn=null;
		return($retour);
	}

	function getTestbyId($test_id){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete = "	SELECT * FROM  `test` WHERE id='".$test_id."'";
		$retour = [];
		if ($statement = $conn->query($requete)) {
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$temp = array("id" => $row['id'],"message" => $row['message'],"code" => $row['code'],'sessionUniversitaire_id' => $row['sessionUniversitaire_id']);
				array_push($retour,$temp);
			}
		}
		else { 
			die("fail requete");
		}
		$conn=null;
		return($retour);
	}
	function getTestbySession($sessionUniversitaire_id){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete = "	SELECT * FROM  `test` WHERE sessionUniversitaire_id='".$sessionUniversitaire_id."'";
		$retour = [];
		if ($statement = $conn->query($requete)) {
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$temp = array("id" => $row['id'],"message" => $row['message'],"code" => $row['code'],'sessionUniversitaire_id' => $row['sessionUniversitaire_id']);
				array_push($retour,$temp);
			}
		}
		else { 
			die("fail requete");
		}
		$conn=null;
		return($retour);
	}
	function updateTest($id,$message,$code){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete ="UPDATE `test` SET `id` = '".$id."' ,`message` = '".$message."' ,`code` = '".$code."' WHERE id=".$id;
		$statement = $conn->query($requete);	if($statement == TRUE) {
			echo "<h3>Les modifications ont été prises en compte</h3>";
		}
		else{
			echo "<h3>Erreur, veuillez recommencer</h3>";
		}
		$conn=null;
	}
	function deleteTest($id){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$requete ="DELETE FROM `test` WHERE `id` =".$id;
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