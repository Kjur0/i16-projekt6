<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rejestracja</title>
	<script src="http://code.jquery.com/jquery-1.4.4.js"></script>
	<script src="script.js" defer></script>
	<link rel="stylesheet" href="style/index.css">
	<link type="image/png" sizes="16x16" rel="icon" href="icon/edit-16.png">
	<link type="image/png" sizes="32x32" rel="icon" href="icon/edit-32.png">
	<link type="image/png" sizes="96x96" rel="icon" href="icon/edit-96.png">
	<link type="image/png" sizes="120x120" rel="icon" href="icon/edit-120.png">
	<link rel="icon" type="image/png" sizes="192x192" href="icon/edit-192.png">
	<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="icon/edit-180.png">
</head>

<body>
	<form action="calc.php" method="post" name="formcalc" id="formcalc" target="_blank"></form>
	<form action="complete.php" method="post" name="form" id="form">
		<h1 class="txt el">Formularz rejestracji kandydata do szkoły</h1>
		<label for="fname" class="txt el">Imię:</label>
		<input type="text" id="fname" name="fname" placeholder="Imię" required class="el box"><br>
		<label for="lname" class="txt el">Nazwisko:</label>
		<input type="text" id="lname" name="lname" placeholder="Nazwisko" required class="el box"><br>
		<label for="bdate" class="txt el">Data urodzenia:</label>
		<input type="date" id="bdate" name="bdate" required class="el box"><br>
		<label for="gen" class="txt el">Płeć:</label>
		<div id="gen" class="choice">
			<div class="el sel">
				<input type="radio" id="genM" name="gen" value="M" required tabindex="-1"><br class="br">
				<label for="genM" class="txt">Mężczyzna</label>
			</div>
			<div class="el sel">
				<input type="radio" id="genK" name="gen" value="K" required tabindex="-1"><br class="br">
				<label for="genK" class="txt">Kobieta</label>
			</div>
		</div><br>
		<label for="address" class="txt el">Miejsce zamieszkania:</label>
		<textarea id="address" name="address" placeholder="Miejsce zamieszkania" required class="el box"></textarea><br>
		<label for="points" class="txt el">Ilość punktów:</label>
		<div class="el">
			<input type="number" id="points" name="points" placeholder="Punkty" required min="0" max="200" class="el box"><button tabindex="-1" form="formcalc" class="el" id="calc">Kalkulator</button>
		</div><br>
		<label for="prof" class="txt el">Profil klasy:</label>
		<select name="prof" id="prof" required class="el box">
			<option value="">➡ Proszę wybrać opcję ⬅</option>
			<option value="MECH">Technik Mechatronik</option>
			<option value="INF">Technik Informatyk</option>
			<option value="PROG">Technik Programista</option>
		</select><br>
		<label for="lang" class="txt el">Wybór języków (wybierz 2):</label>
		<div id="lang" class="choice">
			<div class="el sel">
				<input type="checkbox" id="langEN" name="lang[]" value="EN" tabindex="-1"><br class="br">
				<label for="langEN" class="txt">Angielski</label>
			</div>
			<div class="el sel">
				<input type="checkbox" id="langDE" name="lang[]" value="DE" tabindex="-1"><br class="br">
				<label for="langDE" class="txt">Niemiecki</label>
			</div>
			<div class="el sel">
				<input type="checkbox" id="langES" name="lang[]" value="ES" tabindex="-1"><br class="br">
				<label for="langES" class="txt">Hiszpański</label>
			</div>
		</div><br>
		<label for="phone" class="txt el">Telefon kontaktowy:</label>
		<input type="tel" id="phone" name="phone" required placeholder="Numer telofonu" class="el box" maxlength="11" pattern="(\+[0-9][0-9])?[0-9]{9}"><br>
		<label for="mail" class="txt el">E-mail:</label>
		<input type="email" id="mail" name="mail" required placeholder="E-mail" class="el box"><br>
		<input type="submit" id="submit" name="submit" value="Prześlij" tabindex="-1" class="el">
	</form>
</body>

</html>