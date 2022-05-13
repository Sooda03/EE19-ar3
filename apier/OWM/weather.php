<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Vädret idag i Stockholm</h1>
        <?php
        // Api nyckel
        $appid = "22ee1d58f7adae08ee71fa7c0bd24481";

        // Stad
        $stad = "stockholm";

        // Address till tjänsten
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$stad&appid=$appid&units=metric";

        //echo "<p>$url</p>";

        // Anropa apiet
        $json = file_get_contents($url);
        //echo $json;

        // Avkoda JSON
        $data = json_decode($json);

        // Plocka ut data vi är intreserad av
        // "coord", "weather", "main", "wind"
        $coord = $data->coord;
        $weather = $data->weather;
        $main = $data->main;
        $wind = $data->wind;

        //Url för bilden

        $BildUrl = "http://openweathermap.org/img/wn/10d@2x.png";

        // Plocka isär coord
        $lon = $coord->lon;
        $lat = $coord->lat;

        // Plocka isär main
        $temp = $main->temp;

        // Plocka isär wind
        $speed = $wind->speed;

        // Plocka isär "weather", "ikonen"
        $description = $weather[0]->description;
        $icon = $weather[0]->icon;
        // SKriv ut allt
        echo "<p>Temperaturen är $temp&deg;C</p>";
        echo "<p>Kordinaterna är (lat, lon) $lat, $lon</p>";
        echo "<p>Vindhastigheten är $speed m/s</p>";
        echo "<p>Vädret är \"$description\"</p>";
        echo "<img src=\"$BildUrl\">";
        ?>
    </div>
</body>
</html>