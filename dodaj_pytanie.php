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
				<div id="form">
					<form action="validuj.php" method="post" >
					
					<div id="pytanie">
								Pytanie<br/> <textarea name="pytanie" cols="60" rows="2" ></textarea><br/></div>
						<div id="odp">
						
							<div class="odpf">
								Odpowiedź A <textarea name="odpA" cols="30" rows="2" > </textarea>
							</div>
							
							<div class="odpf">
								Odpowiedź B <textarea name="odpB" cols="30" rows="2" > </textarea>
							</div>
							
						<div id="clear"></div>
						
							<div class="odpf">
								Odpowiedź C <textarea name="odpC" cols="30" rows="2" > </textarea>
							</div>
							
							<div class="odpf">
								Odpowiedź D <textarea name="odpD" cols="30" rows="2" > </textarea>
							</div>
							
							
							<div id="input">poprawna odpowiedz to:
						A<input type="radio" name="nazwa" value="A" />
						B<input type="radio" name="nazwa" value="B" />
						C<input type="radio" name="nazwa" value="C" />
						D<input type="radio" name="nazwa" value="D" /><br/>
						pytanie dotyczy:<br/>
						<input type="radio" name="tytul" value="BlokEkipa" />Blok Ekipa<br/>
						<input type="radio" name="tytul" value="KapitanBomba" />Kapitan Bomba<br/>
						<input type="radio" name="tytul" value="LGD" />Laserowy Gniew Dzidy<br/>
						<br/>
					<input type="submit" value="dodaj pytanie"></div>
						</div>
						
						
					</form>
				</div>
			
		</body>
</html>