<?php

$namn = $_POST["name"];
$adress = $_POST["adress"];
$mobil = $_POST["mobil"];

if ($namn == "Olle") {
    echo "<p>Hej vad trevligt att du är tillbaka</p>";
} else {
    echo "<p>Hej jag känner att du är ny</p>";
}
