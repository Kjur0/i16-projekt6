<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Podsumowanie</title>
	<link rel="stylesheet" href="style/complete.css">
	<link type="image/png" sizes="16x16" rel="icon" href="icon/done-16.png">
	<link type="image/png" sizes="32x32" rel="icon" href="icon/done-32.png">
	<link type="image/png" sizes="96x96" rel="icon" href="icon/done-96.png">
	<link type="image/png" sizes="120x120" rel="icon" href="icon/done-120.png">
	<link rel="icon" type="image/png" sizes="192x192" href="icon/done-192.png">
	<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="icon/done-180.png">
</head>

<body>
	<?php
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$bdate = date_format(date_create($_POST["bdate"]), "d.m.Y");
	switch ($_POST['gen']) {
		case 'M':
			$gen = "Mężczyzna";
			break;
		case 'K':
			$gen = "Kobieta";
			break;
	}
	$address = str_replace("\n", "<br>", $_POST["address"]);
	$points = $_POST["points"];
	switch ($_POST['prof']) {
		case 'MECH':
			$prof = "Technik Mechatronik";
			break;
		case 'INF':
			$prof = "Technik Informatyk";
			break;
		case 'PROG':
			$prof = "Technik Programista";
			break;
	}
	$l[] = $_POST["lang"];
	switch ($l[0][0]) {
		case "EN":
			$lang = "Angielski";
			break;
		case "DE":
			$lang = "Niemiecki";
			break;
		case "ES":
			$lang = "Hiszpański";
			break;
	}
	if (array_key_exists(1, $l[0]))
		switch ($l[0][1]) {
			case "DE":
				$lang = $lang . " i Niemiecki";
				break;
			case "ES":
				$lang = $lang . " i Hiszpański";
				break;
		}
	$phone = $_POST["phone"];
	$mail = $_POST["mail"];
	echo <<<EOD
	<fieldset>
		<legend>Podsumowanie</legend>
		<table>
		<tr><th>Imię:</th><td>$fname</td></tr>
		<tr><th>Nazwisko:</th><td>$lname</td></tr>
		<tr><th>Data urodzenia:</th><td>$bdate</td></tr>
		<tr><th>Płeć:</th><td>$gen</td></tr>
		<tr><th>Miejsce zamieszkania:</th><td>$address</td></tr>
		<tr><th>Ilość punktów:</th><td>$points</td></tr>
		<tr><th>Profil klasy:</th><td>$prof</td></tr>
		<tr><th>Wybrane języki:</th><td>$lang</td></tr>
		<tr><th>Telefon kontaktowy:</th><td>$phone</td></tr>
		<tr><th>E-mail:</th><td>$mail</td></tr>
		</table>
	</fieldset>
	EOD;
	?>
</body>

</html>