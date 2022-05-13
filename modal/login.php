<?php
include "konfigdb.php";

$email = filter_input(INPUT_POST, "email");
$password = filter_input(INPUT_POST, "password");

//echo"$email && $password";

if ($email && $password) {

    //Kolla att användarnamn eller email inte används
    $sql = "SELECT * FROM register WHERE epost='$email'";

    $resultat = $conn->query($sql);

    // 3. Funkade SQL-kommandot?
    if (!$resultat) {
        echo "1";
    } else {
        // Plocka ut svaret och lägg till det i arrayen $rad
        $rad = $resultat->fetch_assoc();

        if (password_verify($password, $rad['hash'])) {
            echo "2";
        } else {
            echo "3";
        }
    }
}
?>