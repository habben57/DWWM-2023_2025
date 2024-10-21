<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicules</title>
</head>
<body>
    
</body>

<?php

require_once './models/Voiture.php';
require_once './models/Motor.php';
require_once './models/RaceCars.php';

$voitures = [];
$json = json_decode(file_get_contents("./MarqueVoiture.json"));

var_dump($json);

?>
</html>