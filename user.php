<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Starting_PHP</title>
		<link rel="stylesheet" href="../style/css/style.css">
	</head>
	<body>
	<div id="no_scroll">
	<div class="ex">
	<?php
	if(isset($_GET["nom"], $_GET["prenom"])){
		echo "<p id='koukou'>".$_GET["nom"]." ".$_GET["prenom"]."</p>";
	}
	if(isset($_POST["nom"], $_POST["prenom"])){
		echo "<p id='koukou'>".$_POST["nom"]." ".$_POST["prenom"]."</p>";
	}
	?>
	</div>
	</div>
	</body>
</html>
