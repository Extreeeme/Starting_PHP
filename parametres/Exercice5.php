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
	<h3>Exercice 5</h3>
	<?php
	if(isset($_GET["semaine"])){
		echo "<p id='koukou'>".$_GET["semaine"]."</p>";
	}else{
		echo "<p id='koukou'>LE PARAMETRE N'EXISTE PAS</p>";
		echo "<p id='koukou'>ZBLEH</p>";
	}
	?>
	</div>
	</div>
	</body>
</html>
