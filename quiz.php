<?php 
Session_start(); 
include('PobierzId.php');
include('Pobierz.php');
include('Losowanie.php');

  include('db.php');
$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';',$user,$pass);
	$pdo->query ('SET NAMES utf8');
	$pdo->query ('SET CHARACTER_SET utf8_unicode_ci');
		$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	
	
	$ile_pytan_w_bazie = Pobierz_najwieksze_id_z_bazy::getMaxId($pdo);
	$liczba_pytan = $ile_pytan_w_bazie->getId();
	
	
	
if(!isset($_SESSION['poczatek_gry'])){
	if(!isset($_POST['poc'])){
		
		header('location:index.html');
		exit();
		
	}
}

if((!isset($_SESSION['punkty']))||(!isset($_SESSION['szanse']))){
		
		
		$_SESSION['warunek'] = 20;
		$tab = new Losowanie($liczba_pytan,$_SESSION['warunek'],0);
		$_SESSION['tablica'] = $tab->getTAblicaLiczbWylosowanych();
		$_SESSION['iteracja'] = 1;
		$_SESSION['punkty'] = 0;
		$_SESSION['szanse'] = 5;
		$_SESSION['poczatek_gry']=1;
	}
	else if(($_SESSION['szanse']==0)){ 
		header('location:koniec.php');
		exit();
	}
	else if($_SESSION['iteracja']>$_SESSION['warunek']){
		header('location:koniec.php');
		exit();
	}
  
	
	$obj = Pobierz_Pytanie::getInstance($_SESSION['tablica'][$_SESSION['iteracja']],$pdo);
?>
<!DOCTYPE html>
<html lang="pl-PL">
	<head>
		<title> Quiz </title>
		<link rel="stylesheet" href="styl.css" type="text/css" />
		
	</head>
		<body>
		<?php $tytul=$obj->getTytul(); ?>
			<div id="naglowek">
			<img class="img" src="img/<?php print $tytul;?>/1.png">
			<img class="img" src="img/<?php print $tytul;?>/2.png"> 
			<img class="img" src="img/<?php print $tytul;?>/3.png"></div>
			<div  id="szanse"><span id="text-szanse">Twoje szanse:</span>
			<?php 
			for ($i = 0; $i<$_SESSION['szanse'];$i++){
				print '<img class="szanse" src="img/'.$tytul.'/4.png">';
			}
			?>
			</div>
				<div id="pytanie"><?php print $obj->getPytanie(); ?></div>
				<div id="odp">
				<div class="odp"><a href= "odpA.php"><?php print $obj->getOdpA(); ?></a></div>
				<div class="odp"><a href= "odpB.php"><?php print $obj->getOdpB(); ?></a></div>
				<div id="clear"></div>
				<div class="odp"><a href= "odpC.php"><?php print $obj->getOdpC(); ?></a></div>
				<div class="odp"><a href= "odpD.php"><?php print $obj->getOdpD(); ?></a></div>
				</div>
				
				<?php //print $_SESSION['punkty'];
				//print $_SESSION['iteracja']."<br/>";
				//print $_SESSION['warunek'];?>
		</body>
</html>




