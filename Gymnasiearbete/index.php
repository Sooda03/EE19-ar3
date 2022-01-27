<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
</head>

<body>
    <div class="kontainer">
        <h1>Registrera dig!</h1>
        <form class="kol2" action="svar.php" method="post">
            <label>Användarnamn</label>
            <input type="text" name="username">
            <label>Gmail</label>
            <input type="text" name="gmail">
            <label>Lösenord</label>
            <input type="password" name="password">
            <label>Ange Lösenordet igen</label>
            <input type="password" name="password2">
            <button>Registrera dig!</button>
            <a href="./vadär.html">>>Vill du veta mer om typeracers?<<</a>
                    <a href="./loggain.php"> >>Redan konto?<<</a>

            <?php

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $gmail = filter_input(INPUT_POST, 'gmail', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password2 = filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING);
    
    if ($username && $gmail && $password && $password2) {

        if ($password == $password2) {

        $datum = strftime("%H: %M %A %d %B");

        $content = "<p>$username<br>$gmail<br>$password<br>$password2</p>";
    
        file_put_contents("accounts.txt", $content, FILE_APPEND);

        echo "<p>Det sparades!</p>";
        } else {
            echo "<p>Du måste använda samma lösenord som det du anger igen!</p>";
        }
    } else {

        echo "<p>Ditt konto sparades inte</p>";
        
            }
    
            ?>
        </form>
    </div>
</body>

</html>