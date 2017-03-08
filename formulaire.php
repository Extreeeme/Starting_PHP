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
		<form action="user.php" methode="get">
			<input type="text" name ="nom" placeholder="Nom">
			<input type="text" name ="prenom" placeholder="Prénom">
			<button type="submit">VALIDE FRERE</button>
		</form>
		</div>
		</div>

		<div id="no_scroll">
		<div class="ex ">
		<form action="user.php" methode="post">
			<input type="text" name ="nom" placeholder="Nom">
			<input type="text" name ="prenom" placeholder="Prénom">
			<button type="submit">VALIDE FRERE</button>
		</form>
		</div>
		</div>

		<div id="no_scroll">
		<div class="ex ">
		<?php if(isset($_POST["select"], $_POST["nom"], $_POST["prenom"])){ ?>
		<?php echo "<p id='koukou'>". $_POST["select"]. " ". $_POST["nom"]. " ".$_POST["prenom"]; ?>
		<?php }else{ ?>


		<form action="" method="POST">
			<select name="select" >
				<option value="Mr">Mr</option>
				<option value="Mme">Mme</option>
			</select>
				<input type="text" name ="nom" placeholder="Nom">
				<input type="text" name ="prenom" placeholder="Prénom">
				<button type="submit">VALIDE FRERE</button>
		</form>
		<?php }?>
		</div>
		</div>
	</body>
</html>