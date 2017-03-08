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
			$MOIS = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre", "Décembre"];
			foreach ($MOIS as $key => $value) {
				echo "<p id='koukou'>".$value."</p>";
			}
			
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 2
			echo "<h3>EXERCICE 2</h3>";
			echo "<p id='koukou'>".$MOIS[2]."</p>";
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 3
			echo "<h3>EXERCICE 3</h3>";
			echo "<p id='koukou'>".$MOIS[5]."</p>";
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 4
			echo "<h3>EXERCICE 4</h3>";
			$MOIS[3] = "Julien";
			echo "<p id='koukou'>".$MOIS[3] . "</p>";
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 5
			echo "<h3>EXERCICE 5</h3>";
			$POSTE = [["Aisne",02],["Nord", 59],["Oise", 60],["Pas-de-Calais", 62],["Somme", 80]];
			foreach ($POSTE as $key => $value) {
				echo "<p id='koukou'>". $value[0]." (".$value[1] . ")</p>";
			}
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 6
			echo "<h3>EXERCICE 6</h3>";
			echo "<p id='koukou'>".$POSTE[1][1]."</p>";
		?>
		</div>
		</div>

	</body>
</html>