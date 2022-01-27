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
            echo "<p> Välkommen $username!";
        }
        ?>
            <a href="...">Till sidan</a>
    </div>
</body>
</html>