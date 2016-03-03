<?php
class SessionUniversitaireController{
	private $host = "localhost";
	private $username = "root";
	private $password = "abcde";
	private $database = "hop3x";
	private $con=null;

	function createSessionUniversitaire($enseignant_id,$name,$dateDebutSession,$dateFinSession){		
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$requete = "INSERT INTO `session` (
			`enseignant_id`,`name`,`dateDebutSession`,`dateFinSession`)VALUES(
			'".$enseignant_id."',
			'".$name."',
			'".$dateDebutSession."',
			'".$dateFinSession."'
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
	function getSessionUniversitaire(){		
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		//$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$requete = "	SELECT * FROM  `session` ";
		$retour = [];
			if ($statement = $conn->query($requete)) {
				while($row = $statement->fetch(PDO::FETCH_ASSOC)){
					$temp = array("id" => $row['id'],"enseignant_id" => $row['enseignant_id'],"name" => $row['name'],
								"dateDebutSession" => $row['dateDebutSession'], "dateFinSession" => $row['dateFinSession']
							);
					array_push($retour,$temp);
				}
			}
			else { 
				die("fail requete");
			}
		
		$conn=null;
		return($retour);
	}


	function getSessionUniversitairebyId($id){		
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$requete = "SELECT * FROM  `session` WHERE `id` =".$id ;
		$retour = [];
			if ($statement = $conn->query($requete)) {
				while($row = $statement->fetch(PDO::FETCH_ASSOC)){
					$temp = array("id" => $row['id'],"enseignant_id" => $row['enseignant_id'],"name" => $row['name'],
								"dateDebutSession" => $row['dateDebutSession'], "dateFinSession" => $row['dateFinSession']);
					array_push($retour,$temp);
				}
			}
			else { 
				die("fail requete");
			}
		$conn=null;
		return($retour);
	}
	function updateSessionUniversitaire($id,$enseignant_id,$name,$dateDebutSession,$dateFinSession){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$requete ="UPDATE `session` SET `id` = '".$id."' ,`enseignant_id` = '".$enseignant_id."' ,`name` = '".$name."',
							`dateDebutSession`= '".$dateDebutSession."', `dateFinSession` = '".$dateFinSession."' WHERE id=".$id;
		$statement = $conn->query($requete);	
		if($statement == TRUE) {
			return true;
		}
		else{
			return false;
		}
		$conn=null;			
	}
	
	function deleteSessionUniversitaire($id){
		$conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, '');
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$requete ="DELETE FROM `session` WHERE `id` =".$id;
		$statement = $conn->query($requete);	if($statement== TRUE) {
			return true;
		}
		else{
			return false;
		}
		$conn=null;
		
	}

}
?>
