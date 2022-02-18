<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style4.css">
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="kontainer">
        <h1>Välkommen!</h1>

        <?php
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $gmail = filter_input(INPUT_POST, "gmail", FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

        if ($username == '') {
            if ($gmail == '') {
                if ($password == '') {
                    echo "<p> Du glömde ditt lösenord";
                }
                echo "<p> Du glömde din Gmail";
            }
            echo "<p> Du glömde ditt användarnamn";
        } else {
            $rader = file("accounts.txt");
            foreach ($rader as $rad) {
                $delar = explode("<br>", $rad);
                if ($username == $delar[0] && $gmail == $delar[1] && $password == $delar[2]) {
                    echo "<a href=\"./typingtest.html\">Till sidan</a>";
                    break;
                }
            }

            echo "<p> Välkommen $username!";
        }
        ?>
    </div>
</body>
</html>