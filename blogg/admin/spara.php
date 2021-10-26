<?php

$rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING);
$meddelande = filter_input(INPUT_POST, 'meddelande', FILTER_SANITIZE_STRING);


if ($rubrik && $meddelande) {
    $texten = "<h3>$rubrik</h3><p>$meddelande</p>";
    
    file_put_contents("blogg.txt", $texten, FILE_APPEND);
}
?>