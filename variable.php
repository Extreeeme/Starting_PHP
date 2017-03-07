

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Starting_PHP</title>
		<link rel="stylesheet" href="style/css/style.css">
	</head>
	<body>
		<div class="ex "  id="ex1">
		<?php
			//Exercice 1
			echo "<h3>Exercice 1</h3>";
			$nOm = "Martin";
			echo "<p>".$nOm."</p>";
		?>
		</div>
		<div class="ex" id="ex2">
		<?php
			//Exercice 2
			echo "<h3>Exercice 2</h3>";
			$Nom = "HULEU";
			$prenom = "Eddy";
			$age = 4;
			echo "<p>". $Nom . " ". $prenom ." " . $age ."</p>";
		?>
		</div>
		<div class="ex"  id="ex3">
		<?php
			//Exercice 3
			echo "<h3>Exercice 3</h3>";
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
		<div class="ex" id="ex4">
		<?php
			//Exercice 4
			echo "<h3>Exercice 4</h3>";
			$string = "Coucou";
			$int = 42;
			$float = 3.2;
			$boolean = true;
			echo "<p>" . "Int : " . $int ."<br/>" . "Float :" .$float . "<br/>" . "String : ".$string. "<br/>" . "Boolean : ".$boolean;
		?>
		</div>
		<div class="ex" id="ex5">
		<?php
			//Exercice 5
			echo "<h3>Exercice 5</h3>";
			$void = (int)null;
			echo "<p>".$void."<br/>";
			$void = 42;
			echo $void . "</p>";
		?>
		</div>
		<div class="ex" id="ex6">
		<?php
			//Exercice 6
			echo "<h3>Exercice 6</h3>";
			$noms = "Aymeric";
			echo "<p>" . "Bonjour " . $noms . " comment vas-tu ? </p>";
		?>
		</div>
	</body>
</html>