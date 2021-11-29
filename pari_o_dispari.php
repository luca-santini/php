<?php
$num = $_REQUEST['num'];
function check($num) {
    if($num % 2 === 0)  {
        echo "è pari";
    } else {
        echo "è dispari";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <title>Numero pari o dispari</title>
</head>
<body>
<h1>Numero pari o dispari</h1>
<form>
	<p>Inserisci un numero <input name="num" value"<?= $num ?>"><input type="submit" name="scale" value="calcola"></p>
</form>
<p>Il numero <?php echo check($num) ?></p>
</body>
</html>
