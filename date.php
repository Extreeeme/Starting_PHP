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
			echo "<p id='koukou'>".date("d/m/Y")."</p>";
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 2
			echo "<h3>EXERCICE 2</h3>";
			echo "<p id='koukou'>".date("d-m-Y")."</p>";
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 3
			echo "<h3>EXERCICE 3</h3>";
			echo "<p id='koukou'>".strftime("%A %e %B %Y")."</p>";
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 3
			echo "<h3>EXERCICE 3</h3>";
			echo "<p id='koukou'>". time()."</p>";
			echo "<p id='koukou'>". mktime(15, 34, 12, 03, 2, 2016)."</p>";
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 3
			echo "<h3>EXERCICE 3</h3>";
			$jour = round((time() - mktime(0, 0, 0, 05, 16, 2016)) / 60/60/24);
			echo "<p id='koukou'>".$jour."</p>";
		?>
		</div>
		</div>
		
		
	</body>
</html>