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
		?>
		</div>
		<div class="ex ">
		<?php
			//Exercice 5
			echo "<h3>EXERCICE 5</h3>";
		?>
		</div>
		<div class="ex ">
		<?php
			//Exercice 6
			echo "<h3>EXERCICE 6</h3>";
		?>
		</div>
		<div class="ex ">
		<?php
			//Exercice 7
			echo "<h3>EXERCICE 7</h3>";
		?>
		</div>
		<div class="ex ">
		<?php
			//Exercice 8
			echo "<h3>EXERCICE 8</h3>";
		?>
		</div>

	</body>
</html>