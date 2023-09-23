<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kalkulator</title>
	<link rel="stylesheet" href="style/calc.css">
	<link type="image/png" sizes="16x16" rel="icon" href="icon/idea-16.png">
	<link type="image/png" sizes="32x32" rel="icon" href="icon/idea-32.png">
	<link type="image/png" sizes="96x96" rel="icon" href="icon/idea-96.png">
	<link type="image/png" sizes="120x120" rel="icon" href="icon/idea-120.png">
	<link rel="icon" type="image/png" sizes="192x192" href="icon/idea-192.png">
	<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="icon/idea-180.png">
</head>

<body <?php if (array_key_exists('submit', $_POST)) echo "id='res'"; ?>>
	<?php
	function calc()
	{
		$p = 0;
		$p += ($_POST['ep'] * 0.35);
		$p += ($_POST['em'] * 0.35);
		$p += ($_POST['ea'] * 0.3);
		switch ($_POST['opol']) {
			case 1:
				$p += 0;
				break;
			case 2:
				$p += 2;
				break;
			case 3:
				$p += 8;
				break;
			case 4:
				$p += 14;
				break;
			case 5:
				$p += 17;
				break;
			case 6:
				$p += 18;
				break;
		}
		switch ($_POST['omat']) {
			case 1:
				$p += 0;
				break;
			case 2:
				$p += 2;
				break;
			case 3:
				$p += 8;
				break;
			case 4:
				$p += 14;
				break;
			case 5:
				$p += 17;
				break;
			case 6:
				$p += 18;
				break;
		}
		switch ($_POST['ofiz']) {
			case 1:
				$p += 0;
				break;
			case 2:
				$p += 2;
				break;
			case 3:
				$p += 8;
				break;
			case 4:
				$p += 14;
				break;
			case 5:
				$p += 17;
				break;
			case 6:
				$p += 18;
				break;
		}
		switch ($_POST['oang']) {
			case 1:
				$p += 0;
				break;
			case 2:
				$p += 2;
				break;
			case 3:
				$p += 8;
				break;
			case 4:
				$p += 14;
				break;
			case 5:
				$p += 17;
				break;
			case 6:
				$p += 18;
				break;
		}
		if ($_POST['add1'] == "true") $p += 7;
		if ($_POST['add2'] == "true") $p += 3;
		$add3 = 0;
		foreach ($_POST['achivements'] as &$ach) {
			$add3 += $ach;
			if ($add3 > 18) $add3 = 18;
		}
		$p += $add3;
		return $p;
	}
	if (array_key_exists('submit', $_POST)) {
		$points = calc();
		echo "<h1>Twoja ilość punktów to: $points</h1>";
	}
	?>
	<form name="calc" id="calc" method="post" <?php if (array_key_exists('submit', $_POST)) echo 'style="display: none"'; ?>>
		<h1 class="el txt">Kalkulator punktów</h1>
		<fieldset class="el field">
			<legend class="el txt">Wyniki egzaminów:</legend>
			<label for="ep" class="el txt">
				Język polski:
			</label>
			<input type="number" id="ep" name="ep" required min="0" max="100" class="el box">
			<label for="em" class="el txt">
				Matematyka:
			</label>
			<input type="number" id="em" name="em" required min="0" max="100" class="el box">
			<label for="ea" class="el txt">
				Język angielski:
			</label>
			<input type="number" id="ea" name="ea" required min="0" max="100" class="el box">
		</fieldset>
		<fieldset class="el field">
			<legend class="el txt">Oceny na świadectwie:</legend>
			<label for="opol" class="el txt">
				Język polski:
			</label>
			<input type="number" id="opol" name="opol" required min="1" max="6" class="el box">
			<label for="omat" class="el txt">
				Matematyka:
			</label>
			<input type="number" id="omat" name="omat" required min="1" max="6" class="el box">
			<label for="ofiz" class="el txt">
				Fizyka:
			</label>
			<input type="number" id="ofiz" name="ofiz" required min="1" max="6" class="el box">
			<label for="oang" class="el txt">
				Język angielski:
			</label>
			<input type="number" id="oang" name="oang" required min="1" max="6" class="el box">
		</fieldset>
		<label for="add1" class="el txt">
			Czy masz świadectwo z wyróżnieniem?
		</label>
		<div id="add1" class="choice">
			<div class="el sel">
				<input type="radio" id="add1T" name="add1" value="true" required tabindex="-1"><br>
				<label for="add1T" class="txt">Tak</label>
			</div>
			<div class="el sel">
				<input type="radio" id="add1N" name="add1" value="false" tabindex="-1"><br>
				<label for="add1N" class="txt">Nie</label>
			</div>
		</div>
		<label for="add2" class="el txt">
			Czy masz wpisany wolontariat na świdectwie?
		</label>
		<div id="add2" class="choice">
			<div class="el sel">
				<input type="radio" id="add2T" name="add2" value="true" required tabindex="-1"><br>
				<label for="add2T" class="txt">Tak</label>
			</div>
			<div class="el sel">
				<input type="radio" id="add2N" name="add2" value="false" tabindex="-1"><br>
				<label for="add2N" class="txt">Nie</label>
			</div>
		</div>
		<fieldset class="el field">
			<legend class="el txt">Osiągnięcia:</legend>
			<details tabindex="-1">
				<summary class="txt">
					konkurs o zasięgu ponadwojewódzkim organizowany przez kuratorów oświaty
				</summary>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach1" type="checkbox" value="10">
					<label class="txt" for="ach1">tytuł finalisty konkursu przedmiotowego</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach2" type="checkbox" value="7">
					<label class="txt" for="ach2">tytuł laureata konkursu tematycznego lub interdyscyplinarnego</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach3" type="checkbox" value="5">
					<label class="txt" for="ach3">tytuł finalisty konkursu tematycznego lub interdyscyplinarnego</label>
				</div>
			</details>
			<details tabindex="-1">
				<summary class="txt">
					konkurs o zasięgu międzynarodowym lub ogólnopolskim albo turniej o zasięgu ogólnopolskim
				</summary>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach4" type="checkbox" value="10">
					<label class="txt" for="ach4">tytuł finalisty konkursu z przedmiotu lub przedmiotów artystycznych objętych ramowym planem nauczania szkoły artystycznej</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach5" type="checkbox" value="4">
					<label class="txt" for="ach5">tytuł laureata turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach6" type="checkbox" value="3">
					<label class="txt" for="ach6">tytuł finalisty turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej</label>
				</div>
			</details>
			<details tabindex="-1">
				<summary class="txt">
					konkurs o zasięgu wojewódzkim organizowany przez kuratora oświaty
				</summary>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach7" type="checkbox" value="10">
					<label class="txt" for="ach7">przynajmniej dwa tytuły finalisty konkursu przedmiotowego</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach8" type="checkbox" value="7">
					<label class="txt" for="ach8">przynajmniej dwa tytuły laureata konkursu tematycznego lub interdyscyplinarnego</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach9" type="checkbox" value="5">
					<label class="txt" for="ach9">przynajmniej dwa tytuły finalisty konkursu tematycznego lub interdyscyplinarnego</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach10" type="checkbox" value="7">
					<label class="txt" for="ach10">tytuł finalisty konkursu przedmiotowego</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach11" type="checkbox" value="5">
					<label class="txt" for="ach11">tytuł laureata konkursu tematycznego lub interdyscyplinarnego</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach12" type="checkbox" value="3">
					<label class="txt" for="ach12">tytuł finalisty konkursu tematycznego lub interdyscyplinarnego</label>
				</div>
			</details>
			<details tabindex="-1">
				<summary class="txt">
					konkurs albo turniej, o zasięgu ponadwojewódzkim lub wojewódzkim
				</summary>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach13" type="checkbox" value="10">
					<label class="txt" for="ach13">przynajmniej dwa tytuły finalisty konkursu z przedmiotu lub przedmiotów artystycznych objętych ramowym planem nauczania szkoły artystycznej</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach14" type="checkbox" value="7">
					<label class="txt" for="ach14">przynajmniej dwa tytuły laureata turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach15" type="checkbox" value="5">
					<label class="txt" for="ach15">przynajmniej dwa tytuły finalisty turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach16" type="checkbox" value="7">
					<label class="txt" for="ach16">tytuł finalisty konkursu z przedmiotu lub przedmiotów artystycznych objętych ramowym planem nauczania szkoły artystycznej</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach17" type="checkbox" value="3">
					<label class="txt" for="ach17">tytuł laureata turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach18" type="checkbox" value="2">
					<label class="txt" for="ach18">tytuł finalisty turnieju z przedmiotu lub przedmiotów artystycznych nieobjętych ramowym planem nauczania szkoły artystycznej</label>
				</div>
			</details>
			<details tabindex="-1">
				<summary class="txt">
					wysokie miejsce w zawodach wiedzy innych niż wymienione, artystycznych lub sportowych, organizowanych przez kuratora oświaty lub inne podmioty działające na terenie szkoły, na szczeblu:
				</summary>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach19" type="checkbox" value="4">
					<label class="txt" for="ach19">międzynarodowym</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach20" type="checkbox" value="3">
					<label class="txt" for="ach20">krajowym</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach21" type="checkbox" value="2">
					<label class="txt" for="ach21">wojewódzkim</label>
				</div>
				<div class="sel">
					<input tabindex="-1" name="achivements[]" id="ach22" type="checkbox" value="1">
					<label class="txt" for="ach22">powiatowym</label>
				</div>
			</details>
			<input tabindex="-1" name="achivements[]" id="ach23" type="checkbox" value="0" style="display: none;" checked>
			<input tabindex="-1" name="achivements[]" id="ach24" type="checkbox" value="0" style="display: none;" checked>
		</fieldset>
		<input type="submit" id="submit" name="submit" value="Oblicz" class="el" tabindex="-1">
	</form>
</body>

</html>