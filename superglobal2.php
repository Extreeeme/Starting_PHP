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
		
		<div id="no_scroll">
		<div class="ex ">
		<?php
			//Exercice 4
			echo "<h3>EXERCICE 4</h3>";
			if(isset($_POST["nom"], $_POST["prenom"])){
				setcookie('nom', $_POST["nom"]);
				setcookie('prenom', $_POST["prenom"]);
				echo "<p id='koukou'>".$_POST["nom"]."</p>";
				echo "<p id='koukou'>".$_POST["prenom"]."</p>";
				echo "<form action='' method='post'>";
				echo "<input type='text' name ='nom' placeholder='Mofifier le Nom'>";;
				echo "<input type='text' name ='prenom' placeholder='Modifier le Prénom'>";
				echo "<button type='submit'>VALIDE FRERE</button>";
				echo "</form>";
			}elseif(isset($_COOKIE["nom"], $_COOKIE["prenom"])){
				echo "<p id='koukou'>".$_COOKIE["nom"]."</p>";
				echo "<p id='koukou'>".$_COOKIE["prenom"]."</p>";
				echo "<form action='' method='post'>";
				echo "<input type='text' name ='nom' placeholder='Mofifier le Nom'>";;
				echo "<input type='text' name ='prenom' placeholder='Modifier le Prénom'>";
				echo "<button type='submit'>VALIDE FRERE</button>";
				echo "</form>";
			}else{
				echo "<form action='' method='post'>";
				echo "<input type='text' name ='nom' placeholder='Mofifier le Nom'>";;
				echo "<input type='text' name ='prenom' placeholder='Modifier le Prénom'>";
				echo "<button type='submit'>VALIDE FRERE</button>";
				echo "</form>";
			}
			
				
		?>
		</div>
		</div>
	</body>
</html>