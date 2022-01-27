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
        <h1>Välkommen!</h1>
        
        <?php
        
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $gmail = filter_input(INPUT_POST, 'gmail', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $password2 = filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING);

        if ($password != $password2) {
            echo "<p> Dina lösenord är inte samma som ditt andra du valde se till så att dem stämmer!";
        } else {
            echo "<p> Välkommen $username, din gmail är $gmail hoppas att du kommer ha en bra tid hos oss!";
        }
        ?>
        
        <a href="./loggain.php">Logga in</a>
    </div>
</body>
</html>