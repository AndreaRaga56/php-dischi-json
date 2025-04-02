<?php
$dischi = file_get_contents("./dischi.json");
$dischi = json_decode($dischi, true);

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
    <header class="mb-5">
        <h1>Disky</h1>
    </header>



    <main class="container text-center mb-5">
        <form class="mt-5 mb-5" action="./server.php" method="POST">
            <h2 class="m-2">Aggiungi un Nuovo Album</h2>
            <div class="row mb-3">
                <div class="col">
                    <label for="titolo" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="titolo" name="titolo" required>
                </div>
                <div class="col">
                    <label for="artista" class="form-label">Artista</label>
                    <input type="text" class="form-control" id="artista" name="artista" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="anno_pubblicazione" class="form-label">Anno di Pubblicazione</label>
                    <input type="number" class="form-control" id="anno_pubblicazione" name="anno_pubblicazione" required>
                </div>
                <div class="col">
                    <label for="url_cover" class="form-label">URL Copertina</label>
                    <input type="url" class="form-control" id="url_cover" name="url_cover" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi Album</button>
        </form>

        <hr>

        <div class="row row-cols-md-3 g-5 mt-2">
            <?php
            foreach ($dischi as $disco) {
                echo '<div class="col">
                        <div class="my-card h-100">
                            <div class="img-container"><img src="' . $disco['url_cover'] . '" alt=""></div>
                            <h5 class="mt-3">' . $disco['titolo'] . '</h5>
                            <p class="mt-2">' . $disco['artista'] . '</p>
                            <p class="mt-2">' . $disco['anno_pubblicazione'] . '</p>
                        </div>
                    </div>';
            } ?>
        </div>

    </main>
</body>

</html>