<?php
// Slå på felrapportering
ini_set("display_errors", 1);
error_reporting(E_ALL);

// Uppgifter för databasen, användare, lösen
$användare = "bloggen_db";
$password = "89B68!ZtMLcuanGV";
$databas = "bloggen_db";
$host = "localhost";

// Logga in
$conn = new mysqli($host, $användare, $password, $databas);

        // Gick det att ansluta?
        if ($conn->connect_error) {
            die("Någoting blev fel! " . $conn->connect_error);
        } else {
            //echo"<p>Hurra! Det gick bra att ansluta till databasen!</p>";
        }
?>