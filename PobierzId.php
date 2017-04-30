<?php
class Pobierz_najwieksze_id_z_bazy{
	private $maxId;
	
	function __construct($mId){
		$this -> maxId= $mId;
	}
	function getId(){
		return $this->maxId;
	}
	public static function getMaxId(PDO $pdo){
		$stmt = $pdo->prepare("SELECT id FROM pytania where id=(Select  MAX(id) FROM pytania)");
		 $result = $stmt->execute(array());
			$row = $stmt -> fetch();
			if (empty($row)){return null;}
		
          $nId = new Pobierz_najwieksze_id_z_bazy($row["id"]);
		
		return $nId;
		
	}
	
}

	
?>