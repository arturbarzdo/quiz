<?php
class Pobierz_Pytanie{
	
	private $pytanie;
	private $odpA;
	private $odpB;
	private $odpC;
	private $odpD;
	private $odpowiedzPoprawna;
	private $tytul;
	
		function __construct($pytanie,$odpA,$odpB,$odpC,$odpD,$odpowiedzPoprawna,$tytul){
			$this->pytanie = $pytanie;
			$this->odpA = $odpA;
			$this->odpB = $odpB;
			$this->odpC = $odpC;
			$this->odpD = $odpD;
			$this->odpowiedzPoprawna = $odpowiedzPoprawna;
			$this->tytul = $tytul;
}

	public function setID($id){
		$this -> id = $id;
	}
	function getPytanie(){
		return "{$this ->pytanie}";
	}
	
	
	function getOdpA(){
		
		return "{$this->odpA}";
	}
	
		function getOdpB(){
		
		return "{$this->odpB}";
	}
	
		function getOdpC(){
		
		return "{$this->odpC}";
	}
	
		function getOdpD(){
		
		return "{$this->odpD}";
	}
	
		function getOdpPoprawna(){
		
		return "{$this->odpowiedzPoprawna}";
	}
	
		function getTytul(){
		
		return "{$this->tytul}";
	}
	public static function getInstance($id, PDO $pdo){
			
			$stmt = $pdo->prepare("SELECT * FROM pytania WHERE id=?");
			$result = $stmt->execute(array($id));
			$row = $stmt -> fetch();
			if (empty($row)){return null;}
			
			$pytanie1 = new Pobierz_Pytanie( $row["pytanie"],
											$row["odpA"],
											$row["odpB"],
											$row["odpC"],
											$row["odpD"],
											$row["odpPop"],
											$row["tytul"]);
				$pytanie1 -> setID($row['id']);
				return $pytanie1;}
				
	
}

	
?>