<!DOCTYPE html>
<html>
<head>
	<title>Formulier met GET-methode</title>
</head>
<body>
	<form method="GET" action="">
		<label for="naam">Naam:</label>
		<input type="text" id="naam" name="naam" required><br>

		<label for="achternaam">Achternaam:</label>
		<input type="text" id="achternaam" name="achternaam" required><br>

		<label for="leeftijd">Leeftijd:</label>
		<input type="number" id="leeftijd" name="leeftijd" required><br>

		<label for="adres">Adres:</label>
		<input type="text" id="adres" name="adres" required><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br>

		<input type="submit" name="verzenden" value="Verzenden">
	</form>
    <?php
    if (isset($_POST["verzenden"])) {
		$naam = $_POST['naam'];
		$achternaam = $_POST['achternaam'];
		$leeftijd = $_POST['leeftijd'];
		$adres = $_POST['adres'];
		$email = $_POST['email'];

		echo "<p>je naam is: " . $naam . " " . $achternaam . "</p>";
		echo "<p>je leeftijd is: " . $leeftijd . "</p>";
		echo "<p>je adres is: " . $adres . "</p>";
		echo "<p>je e-mailadres is: " . $email . "</p>";
    }
	?>
</body>
</html>
