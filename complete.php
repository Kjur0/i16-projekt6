<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Podsumowanie</title>
	<link rel="stylesheet" href="styles/complete.css">
	<link type="image/png" sizes="16x16" rel="icon" href="icons/done-16.png">
	<link type="image/png" sizes="32x32" rel="icon" href="icons/done-32.png">
	<link type="image/png" sizes="96x96" rel="icon" href="icons/done-96.png">
	<link type="image/png" sizes="120x120" rel="icon" href="icons/done-120.png">
	<link rel="icon" type="image/png" sizes="192x192" href="icons/done-192.png">
	<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="icons/done-180.png">
	<script src="scripts/complete.js" defer></script>
</head>

<body>
	<fieldset>
		<legend>Podsumowanie</legend>
		<?php

		require "vendor/autoload.php";

		use Nette\Utils\Validators;

		function validate()
		{
			$err = 0;
			if (!array_key_exists("lang", $_POST) || count($_POST["lang"]) != 2) {
				$err += 1;
			}
			if (preg_match("/(\+[0-9][0-9])?[0-9]{9}/", $_POST["phone"]) == 0) {
				$err += 2;
			}
			if (!Validators::isEmail($_POST["mail"])) {
				$err += 4;
			}
			return $err;
		}

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
		$l = [];
		$l = $_POST["lang"];
		switch ($l[0]) {
			case "EN":
				$lang = "Angielski";
				break;
			case "DE":
				$lang = "Niemiecki";
				break;
		}
		switch ($l[1]) {
			case "DE":
				$lang = $lang . " i Niemiecki";
				break;
			case "ES":
				$lang = $lang . " i Hiszpański";
				break;
		}
		$phone = $_POST["phone"];
		$mail = $_POST["mail"];
		$err = validate();
		if ($err == 0) {
			echo <<<EOD

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
				EOD;
		}
		if ($err & 1) {
			echo "<p class=\"error\">Błąd z wyborem języków</p>";
		}
		if ($err & 2) {
			echo "<p class=\"error\">Nieprawidłowy numer telefonu</p>";
		}
		if ($err & 4) {
			echo "<p class=\"error\">Nieprawidłowy adres e-mail</p>";
		}
		?>
		<button id="go-back">◀Powrót!</button>
	</fieldset>
</body>

</html>