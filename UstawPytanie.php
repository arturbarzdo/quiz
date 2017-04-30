<?php
class Ustaw_pytanie{
	
	private $pytanie;
	private $odpowiedz;
	private $A;
	private $B;
	private $C;
	private $D;
	private $poprawna;
	private $tytul;
	
		function __construct($pyt,$A,$B,$C,$D,$odpowiedz,$tytul){
			
			$this -> pytanie = $pyt;
			$this -> odpowiedz = $odpowiedz;
			$this -> tytul = $tytul;
			$this -> A = $A;
			$this -> B = $B;
			$this -> C = $C;
			$this -> D = $D;
		}
	
	
	function setOdpowiedzPoprawna(){
		switch($this->odpowiedz){
			case 'A':
				$this->poprawna = $this->A;
				break;
			case 'B':
				$this->poprawna= $this->B;
				break;
			case 'C':
				$this->poprawna = $this->C;
				break;
			case 'D':
				$this->poprawna = $this->D;
				break;
		}
		
	}
	
	
	function getPytanie(){
		return $this->pytanie;
	}
	function getA(){
		return $this->A;
	}
	function getB(){
		return $this->B;
	}
	function getC(){
		return $this->C;
	}
	function getD(){
		return $this->D;
	}
	function getPoprawna(){
		return $this->poprawna;
	}
	function getTytul(){
		return $this->tytul;
	}
	
		/*function getZwrocPytanie(){
			return "'{$this->pytanie}','{$this->A}','{$this->B}','{$this->C}','{$this->D}','{$this->poprawna}'";
		}*/
}

?>