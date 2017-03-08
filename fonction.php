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
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 4
			echo "<h3>EXERCICE 4</h3>";
			function lala(int $num, int $num2){
				if($num > $num2){
					return "Le premier nombre est plus grand";
				}elseif($num < $num2){
					return "Le premier nombre est plus petit";
				}else{
					return "Les deux nombres sont identiques";
				}
			}
			if(lala(2, 2) == "Les deux nombres sont identiques"){
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
			//Exercice 5
			echo "<h3>EXERCICE 5</h3>";
			function plop(int $NOMBRE, string $PHRASE){
				return $NOMBRE.$PHRASE;
			}
			if(plop(2, "GNE") == "2GNE"){
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
			//Exercice 6
			echo "<h3>EXERCICE 6</h3>";
			function plup(string $nom, string $prenom, int $age){
				return "Bonjour ".$prenom." ".$nom." tu as ".$age." ans.";
			}
			if(plup("DAGOSTINO", "Martin", 21) == "Bonjour Martin DAGOSTINO tu as 21 ans."){
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
			//Exercice 7
			echo "<h3>EXERCICE 7</h3>";
			function coucou(int $AGE, string $Genre){
				if($AGE>=18 && $Genre=="Homme"){
					return "Vous êtes un homme et vous êtes majeur";
				}elseif($AGE<18 && $Genre=="Homme"){
					return "Vous êtes un homme et vous êtes mineur";
				}elseif($AGE<18 && $Genre=="Femme"){
					return "Vous êtes une femme et vous êtes mineur";
				}else{
					return "Vous êtes une femme et vous êtes majeur";
				}
			}
			if(coucou(21, "Homme") == "Vous êtes un homme et vous êtes majeur"){
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
			//Exercice 8
			echo "<h3>EXERCICE 8</h3>";
			function coucou2($n1 = 1, $n2=2, $n3=3){
				return $n1+$n2+$n3;
			}
			if(coucou2() == 6){
				echo "<p id='koukou'>TEST OK</p>";
			}else{
				echo "<p>ERREUR</p>";
			}
		?>
		</div>
		</div>
	</body>
</html>