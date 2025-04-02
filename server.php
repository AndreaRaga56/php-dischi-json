<?php
$dischi = file_get_contents("./dischi.json");
$dischi = json_decode($dischi, true);

$newDisco = $_POST;

$dischi[]=$newDisco;

$dischiJson = json_encode($dischi);

file_put_contents("./dischi.json", $dischiJson);

header('Location: ./index.php');