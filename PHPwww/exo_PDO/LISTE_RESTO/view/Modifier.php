<?php
require '../dao/Restorepository.php';
require '../dao/Dbconnect.php';

//---------------- traitement-------------------

//verification si id existe
if (!isset($_GET['id'])) {
    header("Location: .");

    exit;
}

//verification que se soit que des nombres 
if (!ctype_digit($_GET['id'])) {
    http_response_code(400);

    exit;
}



$repo = new RestoRepository();
$resto = $repo->searchOne($_GET['id']);

//si la resource n esxiste pas retourn "404 not found"
if ($resto === []) {
    http_response_code(404);
    echo "la ligne à modifier n'existe pas! ";
    exit;
}
if (isset($_POST['envoyer'])) {

    $nbligne = $repo->updateRow(intval($_GET['id']), $_POST['nom'], $_POST['adresse'], floatval($_POST['prix']), $_POST['commentaire'], floatval($_POST['note']), $_POST['datevisite']);
    echo $nbligne;
    if ($nbligne == 1) {
        header('Location:http://localhost/exo_PDO/LISTE_RESTO/index.php');
    } else {
        echo "mise a jour echouée";
    }
}
// var_dump($resto);
// die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modiffier Resto</title>
    <link rel="stylesheet" href="../css/styleModif.css">
</head>

<body>

    <!-- *********************************************************************************** -->
    <?php
    // //------------- verifie que les champs ne sont pas vide----------------
    // if (isset($_POST["envoyer"])) {
    //         //
    //         //
    //         // a voir
    //         //


    //     $repo->updateRow($_GET["nom"], $_GET["adresse"], $_GET["prix"], $_GET["commentaire"], $_GET["note"], $_GET["visite"]);
    // }

    //--------------verifie que se soit que des caracteres alphabetique-------------------
    // $str = $_POST["str"];
    // $confirmer_modification = $_POST["confirmer modification"];
    // $message = "";
    // if (isset($confirmer_modification)) {
    //     if (preg_match("#[a-zA-Z]#", $str))
    //         $message = "<li style='color:green'>Chaine valide</li>";
    //     else
    //         $message = "<li style='color:red'>Chaine invalide</li>";
    // }


    ?>

    <section>
        <a href="index.php" value="retour"><img src="../icone\arrow_left_alt_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.png"></a>

        <h1>Modifier un Resto</h1>
        <form action="<?= 'Modifier.php?id=' . $_GET['id'] ?>" method="POST">
            <label>Nom</label>
            <td><input type="text" value="<?= $resto["nom"] ?>" name="nom" required /></td>
            <label>Adresse</label>
            <td><input type="text" value="<?= $resto["adresse"] ?>" name="adresse" required /></td>
            <label>Prix</label>
            <td><input type="number" value="<?= $resto["prix"] ?>" name="prix" required /></td>
            <label>Commentaire</label>
            <td><textarea name="commentaire"><?= $resto["commentaire"] ?></textarea></td>
            <label>Note</label>
            <td><input type="number" max="10" min="0" step="0.01" value="<?= $resto["note"] ?>" name="note" required /></td>
            <label>Date de visite</label>
            <td><input type="date" value="<?= $resto["visite"] ?>" name="datevisite" required /></td>

            <input type="submit" href="" value="confirmer modification" class="btnSoumettre" name="envoyer" /></td>

        </form>
    </section>

    <!-- ----------------------------------------------------------------------------------------------------->
    <!-- <div class="Modif"> -->
    <!-- <form method="POST" action="<?= "Modifier.php?id=" . $resto["id"] ?>">
            <table>
                <thead>
                    <tr>
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
                    <tr>
                        <td><?= $resto["id"] ?></td>
                        
                        <label>Nom</label>
                        <td><input type="text" value="<?= $resto["nom"] ?>" name="nom" /></td>
                        <label>Adresse</label>
                        <td><input type="text" value="<?= $resto["adresse"] ?>" name="adresse" /></td>
                        <label>Prix</label>
                        <td><input type="number" value="<?= $resto["prix"] ?>" name="prix" /></td>      
                        <label>Commentaire</label>
                        <td><textarea name="commentaire"><?= $resto["Commentaire"] ?></textarea></td>
                        <label>Note</label>
                        <td><input type="number" max="10" min="0" step="0.01" value="<?= $resto["Note"] ?>" name="note" /></td>
                        <label>Date de visite</label>
                        <td><input type="date" value="<?= $resto["visite"] ?>" name="datevisite" /></td>

                    </tr>
                </tbody>
            </table>
            <input type="submit" value="confirmer modification" class="btnSoumettre" name="envoyer" />
        </form> -->

    <!-- </div> -->
</body>

</html>