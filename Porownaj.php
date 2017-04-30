<?php
class Porownaj{
	private $odpUzytkownika;
	private $odpPrawidlowa;
	
	function __construct($odpu,$odpp){
		$this -> odpUzytkownika = $odpu;
		$this -> odpPrawidlowa = $odpp;
	}
		function getPunkty(){
			if($this->odpUzytkownika===$this->odpPrawidlowa){
				return 0;
			}
			else return -1;
		}
}

?>