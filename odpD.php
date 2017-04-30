<?php
Session_start(); 
include('Pobierz.php');
include('db.php');
$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';',$user,$pass);
	$pdo->query ('SET NAMES utf8');
	$pdo->query ('SET CHARACTER_SET utf8_unicode_ci');
	$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$obj = Pobierz_Pytanie::getInstance($_SESSION['tablica'][$_SESSION['iteracja']],$pdo);
include('Porownaj.php');
	$porownaj = new Porownaj($obj->getOdpD(),$obj->getOdpPoprawna());
$porownaj->getPunkty();

$napis="";
?>




<!DOCTYPE html>
<html lang="pl-PL">
	<head>
		<title> Quiz </title>
		<link rel="stylesheet" href="styl.css" type="text/css" />
		
	</head>
		<body>
			<div id="naglowek">
				<img class="img" src="img/1.png">
				<img class="img" src="img/2.png">
				<img class="img" src="img/3.png">
			</div>
				<div id="pytanie"><?php print $obj->getPytanie(); ?></div>
				<div id="odp">
				<?php
				if($porownaj->getPunkty()==0){
					print "<div id=\"poprawna\">{$obj->getOdpPoprawna()}</div>";
					print "<div class=\"przycisk\"><a href =\"quiz.php\">Odpowiedż poprawna!!! graj dalej</a></div>";
					$_SESSION['punkty']+=10;
					
				}
				else{
					print "<div id=\"zla\">{$obj->getOdpD()}</div>";
					print "<div id=\"poprawna\">{$obj->getOdpPoprawna()}</div>";
					switch($_SESSION['szanse']){
					case 1:
						$napis = "to już ostatni dzik ziomeczku - kończe grę";
						break;
					case 2:
						$napis = "przedostatni dzik ziomeczku - gram dalej";
						break;
					case 3:
						$napis = "kolejny dzik poszedł się je*** - gram dalej";
						break;
					case 4:
						$napis = "i po dziku - gram dalej";
						break;
					case 5:
						$napis = "pierwszy dzik poszedł jak zły - gram dalej";
						break;
					}
					print "<div class=\"przycisk\"><a href =\"quiz.php\">Odpowiedż błędna!!! {$napis}</a></div>";
					$_SESSION['szanse']-=1;
				
				}
				?>
				
				</div>
				<?php //print $_SESSION['punkty'];
				$_SESSION['iteracja']++;?>
		</body>
</html>