<?php
require './dao/Restorepository.php';
require './dao/Dbconnect.php';




$objResto = new RestoRepository();

if (isset($_GET['id'])) {
    $objResto->deleteRow($_GET['id']);
}


//$research = $objResto->searchName("ladriatocau");
//$research = [];
$research = $objResto->searchAll();
// var_export($research);

?>

<!-- -------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html lang="fr-fr" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage listing restaurant</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <legend>LISTE RESTO</legend>

    <h3>Ajouter un Resto</h3>
    <a href="./view/Ajouter.php" target="_blank"><img src="icone\ajouter_vert_foncé.png"></a>


    <div>
        <table>
            <thead>
                <tr>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Prix</th>
                    <th>Commentaire</th>
                    <th>Note</th>
                    <th>Visite</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($research as $resto): ?>
                    <tr>
                        <td><a href=" ./view/Modifier.php?id=<?= $resto["id"] ?>"><img src="icone/modifier.png"></a></td>
                        <td><a href="./view/suprimer.php?id=<?= $resto["id"] ?>" $id="id"><img src="icone/poubelle.png"></a></td>

                        <td><?= $resto["id"] ?></td>
                        <td><?= $resto["nom"] ?></td>
                        <td><?= $resto["adresse"] ?></td>
                        <td><?= $resto["prix"] ?></td>
                        <td><?= $resto["commentaire"] ?></td>
                        <td><?= $resto["note"] ?></td>
                        <td><?= $resto["visite"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- <button id="delete1">Supprimer</button>
    <script>
        document.querySelector('#delete1').addEventListener('click', () => {
            const rep = confirm('Etes vous sûr ?')

            if (!rep) {
                return;
            }

            window.location = 'suprimer.php?id=1'
        }) -->
    </script>
</body>

</html>