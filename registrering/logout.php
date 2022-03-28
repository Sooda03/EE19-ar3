<?php
include "konfigdb.php";
session_start();
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloggen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if ($_SESSION['inloggad'] == true) {
        echo "<p class=\"alert alert-success\">Du är inloggad!</p>";
    } else {
        echo "<p class=\"alert alert-info\">Du är inte inloggad!</p>";
    }
    ?>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>
            <ul class="nav nav-tabs">
                <?php
                if ($_SESSION['inloggad'] == false) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./registrera.php">Registrera</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./loggain.php">Logga in</a>
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link-active" aria-current="page" href="#">Logga ut</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./admin.php">Admin</a>
                    </li>
            </ul>
        <?php
                }
        ?>
        </nav>
        <main>
            <?php
            $_SESSION['inloggad'] = false;
            echo "<p class=\"alert alert-warning\">Du är inte inloggad!</p>";

            header("Location: loggain.php");

            ?>
        </main>
    </div>
</body>
</html>