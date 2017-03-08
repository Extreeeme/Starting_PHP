<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Starting_PHP</title>
		<link rel="stylesheet" href="style/css/style.css">
	</head>
	<body>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 1
			echo "<h3>EXERCICE 1</h3>";
			function true(){
				return true;
			}
			if(true()){
				echo "<p id='koukou'>TEST OK</p>";
			}else{
				echo "<p>ERREUR</p>";
			}
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 2
			echo "<h3>EXERCICE 2</h3>";
			function koko(string $koukou){
				return $koukou;
			}
			if(koko("TEST OK") == "TEST OK"){
				echo "<p id='koukou'>TEST OK</p>";
			}else{
				echo "<p>ERREUR</p>";
			}
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 3
			echo "<h3>EXERCICE 3</h3>";
			function eh(string $azerty, string $aze){
				return $azerty.$aze;
			}
			if(eh("1","2") == "12"){
				echo "<p id='koukou'>TEST OK</p>";
			}else{
				echo "<p>ERREUR</p>";
			}
		?>
		</div>
		</div>
	</body>
</html>