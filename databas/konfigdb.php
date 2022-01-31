<?php
// Aktivera felmeddelanden under utveckling

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

// Uppgifter för att logga in med mysql-databasen
$user = "movies_db";
$pass = "F).Rh)9xSpa9D2lI";
$host = "localhost";
$databas = "movies_db";

// 1. Logga in
$conn = new mysqli($host, $user, $pass, $databas);

// Gick det att ansluta?
if ($conn->connect_error) {
    die("Fel! Något gick åt skogen." . $conn->connect_error);
} else {
    //echo "Yes! Vi är inloggade i mysql.";
}
?>