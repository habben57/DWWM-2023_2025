<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcul pret</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
</body>
<?php

//require_once './models/contribuable.php';
require_once './models/pret.php';
// if (isset($_GET['okbutton']) && isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['revenu']) && $_GET['revenu'] > 0) {
//     $monContribuable = new Contribuable($_GET['firstname'], $_GET['lastname'], $_GET['revenu']);
// }

if (isset($_GET['valider']) && isset($_GET['k']) && isset($_GET['ta']) && isset($_GET['an']) && $_GET['an'] > 0) {
    $monPret = new Pret($_GET['k'], $_GET['ta'], $_GET['an']);
}
?>

<!-- <form action="index.php" method="get" enctype="multipart/form-data">
    <label for="firstname">Prénom:</label>
    <input name="firstname" id="firstname" type="text"><br>
    <label for="lastname">Nom:</label>
    <input name="lastname" id="lastname" type="text"><br>
    <label for="revenu">Vos revenus:</label>
    <input name="revenu" id="revenu" type="number" step="0.01"><br>  
    <button type="submit" name="okbutton">Ok</button>
    <p>------</p>
</form> -->

    <form action="index.php" method="get" enctype="multipart/form-data">
        <fieldset>
            <legend>Calcul mensualité</legend>

            <div>
                <label class="fix" for="k">Capital emprunté : </label>
                <input name="k" id="k" type="number" step="0.01" placeholder="En euros" value="<?= $capital = $_GET['k'] ?? "0";
                                                                                                 ?>"><br>                        
            </div>

            <div>
                <label class="fix" for="ta">Taux d'intérêt en %: </label>
                <input name="ta" id="ta" type="number" step="0.01" placeholder="0" value="<?= $interet = $_GET['ta'] ?? "0";
                                                                                            ?>"><br>
            </div>

            <div>
                <label class="fix" for="an">Durée de remboursement en année : </label>
                <input name="an" id="an" type="number" step="0.01" placeholder="0" value="<?= $nbannees = $_GET['an'] ?? "0";
                                                                                            ?>"><br>
            </div>

            <div>
                <button type="submit" name="valider">Valider</button>

                <label for="mensualite">Mensualité : </label>
                <input type="text" name="mensualite" id="mensualite" disabled="true" value="
                    <?php
                    $mensualite = (isset($monPret)) ? $monPret->calculMensualite() . "€" : 0 . "€";

                    echo $mensualite;
                    ?> ">
            </div>



        </fieldset>
    </form>

<p>
</p>

    <div>
        <?php

            if (isset($monPret)) {            
                echo "" . $monPret->tableauAmortissement();
            }
             
            // creation d un fichier Json qui contiendra le tableau d amortissement
            $mesdata = $monPret->getTableauAmortissement();
            $json = json_encode($mesdata, JSON_PRETTY_PRINT);
            file_put_contents("tableau_pret.json", $json);

        ?>
    </div>

</html>