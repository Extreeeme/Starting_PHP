<?php
	if(isset($_GET["mois"], $_GET["annee"])){
		$mois = (int) $_GET["mois"];
		$annee = (int) $_GET["annee"];
	}else{
		$mois = date('m');
		$annee = date(' Y');
	}
	$calendrier = new DateTime($annee .'-' .$mois .'-1');
	$nombreDeJours = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
	$numDuMois = [];
	switch ($calendrier->format('l')) {
		case 'Monday':
			$index = 0;
			break;
		case 'Tuesday' :
			$index = 1;
			break;
		case 'Wednesday' :
			$index = 2;
			break;
		case 'Thursday' :
			$index = 3;
			break;
		case 'Friday' :
			$index = 4;
			break;
		case 'Saturday' :
			$index = 5;
			break;
		case 'Sunday' :
			$index = 6;
			break;
	}
	for ($i=0; $i < $index; $i++) { 
		array_push($numDuMois, ' ');
	}
	for ($numeroJour=1; $numeroJour <= $nombreDeJours ; $numeroJour++) { 
		array_push($numDuMois, $numeroJour);
	}
	for ($i=0; $i < 6-$index; $i++) { 
		array_push($numDuMois, ' ');
	}
	$numtour = 0;
?>


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
		<table>
			<tr>
				<td colspan="7"><?=$calendrier->format('m-Y')?></td>
			</tr>
			<tr>
				<td>Lu</td>
				<td>Ma</td>
				<td>Me</td>
				<td>Je</td>
				<td>Ve</td>
				<td>Sa</td>
				<td>Di</td>
			</tr>
			<?php
				$numeroJour = 1;
				for ($semaine=0; $semaine <=4; $semaine++) { 
				echo "<tr>";
				for ($jour=0; $jour <=6 ; $jour++) { 
					echo "<td>$numDuMois[$numtour]</td>";
					$numtour++;
					
				}
				echo "</tr>";
			}
			?>
		</table>

		<form action="" method="get">
			<select name="mois">
				<option value="1">Janvier</option>
				<option value="2">Février</option>
				<option value="3">Mars</option>
				<option value="4">Avril</option>
				<option value="5">Mai</option>
				<option value="6">Juin</option>
				<option value="7">Juillet</option>
				<option value="8">Août</option>
				<option value="9">Septembre</option>
				<option value="10">Octobre</option>
				<option value="11">Novembre</option>
				<option value="12">Décembre</option>
			</select>
			<select name="annee">
				<?php for ($i=2000; $i <=2100 ; $i++) { 
					echo "<option value='$i'>$i</option>";
				}
				?>
			</select>
			<button type="submit">OK FRERE</button>
		</form>
	</body>
</html>