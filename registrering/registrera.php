<?php
include "konfigdb.php";
session_start();
if (!isset($_SESSION['inloggad'])) {
    $_SESSION['inloggad'] = false;
}
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
                        <a class="nav-link-active" aria-current="page" href="#">Registrera</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./loggain.php">Logga in</a>
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Logga ut</a>
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
            <form action="registrera.php" method="POST">
                <h3>Registrera användare</h3>
                <div class="row mb-3">
                    <label for="inputNamn" class="col-sm-2 col-form-label">Namn</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNamn" name="namn">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputLösenord" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputLösenord" name="lösenord">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrera</button>
            </form>
            <?php
            // Ta emot data från formuläret

            $namn = filter_input(INPUT_POST, "namn");
            $email = filter_input(INPUT_POST, "email");
            $lösenord = filter_input(INPUT_POST, "lösenord");

            // Testa att det funkar
            //var_dump($namn, $email, $lösenord);


            // Kolla att det inte är null

            if ($namn && $email && $lösenord) {

                //Kolla att användarnamn eller email inte används
                $sql = "SELECT * FROM register WHERE namn='$namn' OR epost='$email'";

                $resultat = $conn->query($sql);

                // Hittar vi samma användarnamn eller email
                if ($resultat->num_rows > 0) {
                    echo "<p class=\"alert alert-warning\">Användarnamnet eller email används redan.</p>";
                } else {

                    $hash = password_hash($lösenord, PASSWORD_DEFAULT);

                    // Lagra i databasen
                    // 1. SQL-kommandot
                    $sql = "INSERT INTO register (namn, epost, hash) VALUES ('$namn', '$email', '$hash')";

                    //die();

                    // 2. Kör SQL kommandot
                    $resultat = $conn->query($sql);

                    // 3. Funkade SQL-kommandot?
                    if (!$resultat) {
                        die("<p class=\"alert alert-danger\">Någoting är fel med SQL-satsen!</p>");
                    } else {
                        echo "<p class=\"alert alert-success\">Användaren $namn är registrerad!</p>";
                    }
                }
            }
            ?>
        </main>
    </div>
</body>
</html>