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
			$koukou = 0;
			while ($koukou < 10) {
				echo "<p id='koukou'>".$koukou;
				$koukou ++;
			}
			echo "</p>";
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex">
		<?php
			//Exercice 2
			echo "<h3>EXERCICE 2</h3>";
			$koko = 0;
			$kiki = 42;
			while ($koko <=20) {
				$TOTAL = $koko * $kiki;
				echo "<p id='koukou2'>".$TOTAL;
				$koko ++;
			}
			echo "</p>";

		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex">
		<?php
			//Exercice 3
			echo "<h3>EXERCICE 3</h3>";
			$kyky = 100;
			$keke = 42;
			while($kyky >=10){
				$total = $kyky * $keke;
				echo "<p id='koukou2'>".$total;
				$kyky --;
			}
			echo "</p>";
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex">
		<?php
			//Exercice 4
			echo "<h3>EXERCICE 4</h3>";
			$lili = 1;
			while ($lili < 10) {
				echo "<p id='koukou'>".$lili;
				$lili = $lili + $lili/2;
			}
			echo "</p>";
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex">
		<?php
			//Exercice 5
			echo "<h3>EXERCICE 5</h3>";
			for ($i=0; $i < 15; $i++) { 
				echo "<p id='koukou'> On y arrive presque ! </p>";
			}
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex">
		<?php
			//Exercice 6
			echo "<h3>EXERCICE 6</h3>";
			for ($i=20; $i >0; $i--) { 
				echo "<p id='koukou'>C'est presque bon !</p>";
			}
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex">
		<?php
			//Exercice 7
			echo "<h3>EXERCICE 7</h3>";
			for ($i=1; $i < 100; $i= $i+15) { 
				echo "<p id='koukou'>On tiens le bambou !</p>";
			}
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex">
		<?php
			//Exercice 8
			echo "<h3>EXERCICE 8</h3>";
			for ($i=200; $i >0 ; $i= $i-12) { 
				echo "<p id='koukou'>Enfin !!!</p>";
			}
		?>
		</div>
		</div>

		<div id="no_scroll">
		<div class="ex">
		
		</div>
		</div>
	</body>
</html>