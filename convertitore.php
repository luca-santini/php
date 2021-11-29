<?php
$temp = $_REQUEST['temp'] ?? 20;
$tempConv = $temp * 1.8 + 32;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <title>Convertitore di temperature</title>
</head>
<body>
<h1>Convertitore di temperature</h1>
<form>
	<p>Inserisci la temperatura <input name="temp" value"<?= $temp ?>">°</p>
	<p>Converti in <input type="submit" name="scale" value="Fahrenheit"></p>
</form>
<p><?= $temp ?>° Celsius corrispondono a <?= $tempConv ?>° Fahrenheit</p>
</body>
</html>
