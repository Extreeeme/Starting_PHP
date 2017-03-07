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
			echo "<h3>EXERCICE1</h3>";
			$nOm = "Martin";
			echo "<p>".$nOm."</p>";
		?>
		</div>
		<div class="ex">
		<?php
			//Exercice 2
			echo "<h3>EXERCICE 2</h3>";
			$Nom = "HULEU";
			$prenom = "Eddy";
			$age = 4;
			echo "<p>". $Nom . " ". $prenom ." " . $age ."</p>";
		?>
		</div>
		<div class="ex">
		<?php
			//Exercice 3
			echo "<h3>EXERCICE 3</h3>";
			$kilometre = 1;
			echo "<p>Kilomètres : ";
			echo $kilometre."</p>";
			$kilometre = 3;
			echo "<p>Kilomètres : ";
			echo $kilometre."</p>";
			$kilometre = 125;
			echo "<p>Kilomètres : ";
			echo $kilometre."</p>";
		?>
		</div>
		<div class="ex">
		<?php
			//Exercice 4
			echo "<h3>EXERCICE 4</h3>";
			$un_string = "Coucou";
			$un_int = 42;
			$un_float = 3.2;
			$un_boolean = true;
			echo "<p>" . "Int : " . $un_int ."<br/>" . "Float : " .$un_float . "<br/>" . "String : ".$un_string. "<br/>" . "Boolean : ".$un_boolean;
		?>
		</div>
		<div class="ex">
		<?php
			//Exercice 5
			echo "<h3>EXERCICE 5</h3>";
			$void = (int)null;
			echo "<p>".$void."<br/>";
			$void = 42;
			echo $void . "</p>";
		?>
		</div>
		<div class="ex">
		<?php
			//Exercice 6
			echo "<h3>EXERCICE 6</h3>";
			$noms = "Aymeric";
			echo "<p>" . "Bonjour " . $noms . " comment vas-tu ? </p>";
		?>
		</div>
		<div class="ex">
		<?php
			//Exercice 7
			echo "<h3>EXERCICE 7</h3>";
			$NOM = "LACOSTE";
			$PRENOM = "Aymeric";
			$AGE = 12;
			echo "<p>" . "Bonjour " . $NOM ." ". $PRENOM. " tu as ".$AGE." ans </p>";
		?>
		</div>
		<div class="ex">
		<?php
			//Exercice 8
			echo "<h3>EXERCICE 8</h3>";
			$addition = 3 + 4;
			$addition2 = 5 * 20;
			$addition3 = 45 / 5;
			echo "<p> 3 + 4 = " . $addition . "<br/>5 * 20 = ".$addition2."<br/>45 / 5 = ".$addition3."</p>";

		?>
		</div>
	</body>
</html>