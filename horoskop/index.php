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
        <h1>Dagens horoskop</h1>
        <?php
        
        $url = "https://astro.elle.se/";
        $sidan = file_get_contents($url);

        $start = strpos($sidan, "Väduren");

        echo "<h3>Värduren</h3>";

        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);
        //var_dump($start, $startTexten, $slutTexten);

        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
        echo "<p>$horoskop</p>";
        //Oxen
        $start = strpos($sidan, "Oxen");

        echo "<h3>Oxen</h3>";

        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);
        //var_dump($start, $startTexten, $slutTexten);

        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
        echo "<p>$horoskop</p>";
        //tvillingarna
        $start = strpos($sidan, "Tvillingarna");

        echo "<h3>Tvillingarna</h3>";

        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);
        //var_dump($start, $startTexten, $slutTexten);

        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
        echo "<p>$horoskop</p>";

        //kräftan
        $start = strpos($sidan, "Kräftan");

        echo "<h3>Kräftan</h3>";

        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);
        //var_dump($start, $startTexten, $slutTexten);

        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
        echo "<p>$horoskop</p>";

        ?>
    </div>
</body>
</html>