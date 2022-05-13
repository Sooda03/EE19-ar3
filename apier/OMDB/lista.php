<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OMDB</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="kontainer">
        <h1>Lista filmer på OMDB</h1>

        <form id="formularet" action="#" method="POST">
            <div class="mb-3">
                <label for="sökterm" class="form-label">Sökterm</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sökterm" required>
            </div>
            <button type="submit" class="btn btn-primary">Sök</button>
        </form>

        <?php
        $sökterm = filter_input(INPUT_POST, "sökterm");

        if ($sökterm) {

            $url = "https://www.omdbapi.com/?apikey=ea805224&s=";

            $data = file_get_contents($url . "&s=" . $sökterm);

            $dataJson = json_decode($data);

            $Search = $dataJson->Search;
            $totalResults = $dataJson->totalResults;

            echo "<p>Hittade $totalResults filmer med söktermen \"$sökterm\"</p>";

            echo "<div class=\"grid\">";
                
            foreach ($Search as $film) {
                $Title = $film->Title;
                $Year = $film->Year;
                $Type = $film->Type;
                $Poster = $film->Poster;

                echo "<div class=\"card\" style=\"width: 18rem;\">";
                echo "<img src=\"$Poster\" alt=\"$sökterm\">";
                echo "<div class=\"card-body\">";
                echo "<h5 class=\"card-title\">Card title</h5>$Title</h5>";
                echo "<p class=\"card-text\">$Type - $Year</p>";
                echo "</div>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>