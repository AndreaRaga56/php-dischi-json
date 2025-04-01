<?php
$dischi = file_get_contents("./dischi.json");
$dischi = json_decode($dischi);

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Disky</title>
</head>
<body>
    <header>
        <h1>Disky</h1>
    </header>

    <main class="container mt-5">
        <div class="row">
            <div class="my-card col-3">
                <div><img src="https://upload.wikimedia.org/wikipedia/en/3/3b/Dark_Side_of_the_Moon.png" alt=""></div>
                <h5 class="mt-3">The Dark Side of the Moon</h5>
                <p class="mt-2">Pink Floyd</p>
                <p class="mt-2">1973</p>
            </div>
        </div>

    </main>
</body>
</html>