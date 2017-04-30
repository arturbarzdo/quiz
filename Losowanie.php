<?php 
class Losowanie{
	private $ilosc_pytan;
	private $ilosc_liczb_do_wylosowania;
	private $ilosc_liczb_wylosowanych;
	
	function __construct($ilePytan, $ileDowylosowania, $ileWylosowano){
		$this -> ilosc_pytan = $ilePytan;
		$this -> ilosc_liczb_do_wylosowania = $ileDowylosowania;
		$this -> ilosc_liczb_wylosowanych = $ileWylosowano;
	}
		function getTAblicaLiczbWylosowanych(){
			
			for ($i=1; $i<=$this->ilosc_liczb_do_wylosowania; $i++){
				do{
						$liczba=rand(1,$this->ilosc_pytan);
						$losowanie_ok=true;
				 
					for ($j=1; $j<=$this->ilosc_liczb_wylosowanych; $j++){
						
						if ($liczba==$wylosowane[$j]) $losowanie_ok=false;
					}
				 
					if ($losowanie_ok==true){
						
						$this->ilosc_liczb_wylosowanych++;
						$wylosowane[$this->ilosc_liczb_wylosowanych]=$liczba;
					}
				} while($losowanie_ok!=true);
			}
			return $wylosowane;
		}
	
}
	


?>