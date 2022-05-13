<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chuck Norris Skämt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <h1>Dagens Chuck Norris skämt</h1>
    <?php
    // Address till tjänsten
    $url = "https://api.chucknorris.io/jokes/random";

    // Anrop till api:et
    $json = file_get_contents($url);

    // Avkoda json-svaret
    $data = json_decode($json);

    // Plocka ut bilden
    $bildUrl = $data->icon_url;

    // Plocka ut skämtet
    $skämt = $data->value;

    // Skriv skämtet, dvs "value
    echo "<p>$skämt</p>";
    echo "<img src=\"$bildUrl\">";
    ?>
    </div>
</body>
</html>