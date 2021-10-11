<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>textomvandlare</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h3>Din text här</h3>
<?php
$texten = filter_input(INPUT_POST, 'texten', FILTER_SANITIZE_STRING);
$riktning = filter_input(INPUT_POST, 'riktning', FILTER_SANITIZE_STRING);

if ($riktning == "stora") {
    echo "<p>" . strtoupper($texten) . "</p>";
} else {
    echo "<p>" . strtolower($texten) . "</p>";
}


?>
    </div>
</body>
</html>