<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>temperaturomvandlare</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h3>Hur varmt är det?</h3>
<?php
$temp = filter_input(INPUT_POST, 'temp', FILTER_SANITIZE_STRING);
$riktning = filter_input(INPUT_POST, 'riktning', FILTER_SANITIZE_STRING);

echo "<p>Temperaturen blir $temp&deg;</p>";

if ($riktning == "cf") {
    $farenheit = $temp * 1.8 + 32;
    echo "<p>$temp&deg; Celsius är $farenheit&deg; Farenheit";
} else {
    $celsius = ($temp - 32) / 1.8;
    echo "<p>$temp&deg; Farenheit är $celsius&deg; Celsius";
}


?>
    </div>
</body>
</html>