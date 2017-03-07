

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Starting_PHP</title>
		<link rel="stylesheet" href="style/css/style.css">
	</head>
	<body>
		<div id="ex">
		<?php
			//Exercice 1
			echo "<h3>Exercice 1</h3>";
			$nom = "Martin";
			echo "<p>".$nom."</p>";
		?>
		</div>
		<div id="ex">
		<?php
			//Exercice 2
			echo "<h3>Exercice 2</h3>";
			$nom = "HULEU";
			$prenom = "Eddy";
			$age = 4;
			echo "<p>". $nom . " ". $prenom ." " . $age ."</p>";
		?>
		</div>
		<div id="ex">
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
		<div id="ex">
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
		<div id="ex">
		<?php
			//Exercice 5
			echo "<h3>Exercice 5</h3>";
			$void = (int)null;
			echo "<p>".$void."<br/>";
			$void = 42;
			echo $void . "</p>";
		?>
		</div>
	</body>
</html>