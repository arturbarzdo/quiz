<?php
class Dodaj_pytanie_do_bazy{
	
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


	
		function dodaj(PDO $pdo){
			$pytanie = $pdo->exec("INSERT INTO pytania (pytanie,odpA,odpB,odpC,odpD,odpPop,tytul)VALUES(
									'{$this->pytanie}',
									'{$this->odpA}',
									'{$this->odpB}',
									'{$this->odpC}',
									'{$this->odpD}',
									'{$this->odpowiedzPoprawna}',
									'{$this->tytul}')");
																
			
		}

}
/*$pdo = new PDO('mysql:host=localhost;dbname=quiz;','root','');
				$pdo->query ('SET NAMES utf8');
				$pdo->query ('SET CHARACTER_SET utf8_unicode_ci');
				$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
		$pytanie= new Dodaj_pytanie_do_bazy('Jakie auto dostał Spejson po zdaniu prawka?','BMW','kalibre','poloneza','malucha','malucha' );
		$pytanie->dodaj($pdo);	*/

?>