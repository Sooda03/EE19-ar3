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
        <h1>Välkommen</h1>

        <?php

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $gmail = filter_input(INPUT_POST, 'gmail', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $password2 = filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING);
        if ($username && $gmail && $password && $password2) {

            if ($password == $password2) {

                $datum = strftime("%H: %M %A %d %B");

                $content = "$username<br>$gmail<br>$password<br>$password2\n";

                file_put_contents("accounts.txt", $content, FILE_APPEND);

                echo "<p>Det sparades!</p>";
                echo "<p> Välkommen $username, din gmail är $gmail hoppas att du kommer ha en bra tid hos oss!";
            } else {
                echo "<p>Du måste använda samma lösenord som det du anger igen!</p>";
            }
        } else {

            echo "<p>Ditt konto sparades inte</p>";
        }
        ?>
        <a href="./loggain.php">Logga in</a>
    </div>
</body>
</html>