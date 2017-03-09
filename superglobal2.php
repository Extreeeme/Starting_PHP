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
			//Exercice 2
			echo "<h3>EXERCICE 2</h3>";
			session_start();
			echo "<p id='koukou'>".$_SESSION["age"]."</p>";
			echo "<p id='koukou'>".$_SESSION["nom"]."</p>";
			echo "<p id='koukou'>".$_SESSION["prenom"]."</p>";
			
		?>

		</div>
		</div>
		<a  href="superglobal.php">SuperGlobal</a>
	</body>
</html>