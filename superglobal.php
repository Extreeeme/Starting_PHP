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
			echo "<p id='koukou'>User Agent : ".$_SERVER['HTTP_USER_AGENT']."</p>";
			echo "<p id='koukou'>Adresse IP : ".$_SERVER["REMOTE_ADDR"]."</p>";
			echo "<p id='koukou'>Nom serveur : ".$_SERVER['SERVER_NAME']."</p>";
			
		?>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 2
			echo "<h3>EXERCICE 2</h3>";
			session_start();
			$_SESSION["age"] = 21;
			$_SESSION["nom"] = "Dagostino";
			$_SESSION["prenom"] = "Martin";
		?>
		<a id='koukou' href="superglobal2.php">SuperGlobal2</a>
		</div>
		</div>
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 3
			echo "<h3>EXERCICE 3</h3>";
			if(isset($_POST["nom"], $_POST["prenom"])){
				$_COOKIE["nom"] = $_POST["nom"];
				$_COOKIE["prenom"] = $_POST["prenom"];
				echo "<p id='koukou'>".$_COOKIE["nom"]."</p>";
				echo "<p id='koukou'>".$_COOKIE["prenom"]."</p>";
			}
			
		?>
		<form action="" method="post">
			<input type="text" name ="nom" placeholder="Nom">
			<input type="text" name ="prenom" placeholder="Prénom">
			<button type="submit">VALIDE FRERE</button>
		</form>
		</div>
		</div>
	</body>
</html>