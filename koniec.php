<?php 
Session_start(); 
if((!isset($_SESSION['szanse']))||(($_SESSION['szanse']!=0)&&($_SESSION['iteracja']<=$_SESSION['warunek']))){
	header('location:index.html');
	exit();
	
}
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
			<img class="img" src="img/3.png"></div>
			<div id = "koniec">
			<p id="finish">KONIEC GRY - ZDOBYŁEŚ <?php print $_SESSION['punkty']; 
			session_destroy();?> 
			PUNKTÓW  </p>
				<form action="quiz.php" method="post">
				<div class="wysrodkowanie">
				<input class="przyciskiStart" type="submit" value="Zakończ quiz">
				<form>
				</div>	
			</div>
			
		</body>
</html>




