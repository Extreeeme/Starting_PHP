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
		<div class="ex ">
		<?php
			//Exercice 1
			echo "<h3>EXERCICE 1</h3>";
			$age = 21;
			if($age >= 18){
				echo "<p>Vous êtes majeur.</p>";
			}else{
				echo "<p>Vous êtes mineur.</p>";
			}
		?>
		</div>
		<div class="ex ">
		<?php
			//Exercice 2
			echo "<h3>EXERCICE 2</h3>";
			$is_easy = true;
			if($is_easy == true){
				echo "<p>C'est facile</p>";
			}else{
				echo "<p>C'est difficile</p>";
			}

		?>
		</div>
		<div class="ex ">
		<?php
			//Exercice 3
			echo "<h3>EXERCICE 3</h3>";
			$AGE = 25;
			$GENRE = "femme";
			if($GENRE == 'femme' && $AGE >=18){
				echo "<p>Vous êtes une femme et vous êtes majeure";
			}elseif($GENRE == 'femme' && $AGE <18){
				echo "<p>Vous êtes une femme et vous êtes mineure";
			}elseif($GENRE == 'homme' && $AGE>=18){
				echo "<p>Vous êtes un homme et vous êtes majeur";
			}else{
				echo "<p>Vous êtes un homme et vous êtes mineur";
			}
		?>
		</div>
		<div class="ex ">
		<?php
			//Exercice 4
			echo "<h3>EXERCICE 4</h3>";
			$magnitude = 9;
			switch ($magnitude) {
				case '1':
					echo "<p>Micro-séisme impossible à ressentir.</p>";
					break;
				case '2':
					echo "<p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p>";
					break;
				case '3':
					echo "<p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p>";
					break;
				case '4':
					echo "<p> Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p>";
					break;
				case '5':
					echo "<p>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p>";
					break;
				case '6':
					echo "<p> Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</p>";
					break;
				case '7':
					echo "<p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p>";
					break;
				case '8':
					echo "<p>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p>";
					break;
				case '9':
					echo "<p>Séisme capable de tout détruire sur une très vaste zone.</p>";
					break;
			}
		?>
		</div>
		<div class="ex ">
		<?php
			//Exercice 5
			echo "<h3>EXERCICE 5</h3>";
			$maVariable = "Femme";
			if($maVariable == 'Homme'){
				echo "<p>C'est un développeur !";
			}else{
				echo "<p>C'est une développeuse";
			}

		?>
		</div>
		<div class="ex ">
		<?php
			//Exercice 6
			echo "<h3>EXERCICE 6</h3>";
			$MAVARIABLE = false;
			if($MAVARIABLE == true){
				echo "<p>C'est OK !</p>";
			}else{
				echo "<p>C'est pas bon !</p>";
			}
		?>
		</div>
		<div class="ex ">
		<?php
			//Exercice 7
			echo "<h3>EXERCICE 7</h3>";
			$monAge = 21;
			if($monAge >=18){
				echo "<p>Tu est majeur";
			}else{
				echo "<p>Tu n'est pas majeur";
			}
		?>
		</div>
		<div class="ex ">
		<?php
			//Exercice 8
			echo "<h3>EXERCICE 8</h3>";
			$MAVARIABLe = false;
			if($MAVARIABLe){
				echo "<p>C'est OK !</p>";
			}else{
				echo "<p>C'est pas bon !</p>";
			}
		?>
		</div>

	</body>
</html>