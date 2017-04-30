<?php
if (!isset($_POST['pytanie'] )){
	header('location:index.html');
	exit();
	
}
if (($_POST['pytanie']=="") || ($_POST['odpA']=="") || ($_POST['odpB']=="") || ($_POST['odpC']=="") || ($_POST['odpD']=="") || ($_POST['nazwa']=="") || ($_POST['tytul']=="")){

	header('location:bladPrzydodawaniuPytania.html');
	exit();
}
	

include('UstawPytanie.php');
include('DodajPytanie.php');
	$odp = new Ustaw_pytanie(			$_POST['pytanie'],
										$_POST['odpA'],
										$_POST['odpB'],
										$_POST['odpC'],
										$_POST['odpD'],
										$_POST['nazwa'],
										$_POST['tytul']);
										
	//print $pytanie->getPoprawna();
	$odp->setOdpowiedzPoprawna();
	//print $odp->getZwrocPytanie();
	
	//$odp->getSprawdzPytanie();
		
		 include('db.php');
			$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';',$user,$pass);
				$pdo->query ('SET NAMES utf8');
				$pdo->query ('SET CHARACTER_SET utf8_unicode_ci');
				$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$pytanie= new Dodaj_pytanie_do_bazy($odp->getPytanie(),$odp->getA(),$odp->getB(),
											$odp->getC(),$odp->getD(),$odp->getPoprawna(),$odp->getTytul());
		$pytanie->dodaj($pdo);	
		
		header('location:dodanoPytanie.html');
		
		//print $odp->getPytanie()." ".$odp->getA()." ".$odp->getB()." ".$odp->getC()." ".$odp->getD()." ".$odp->getPoprawna()." ".$odp->getTytul();
			
?>