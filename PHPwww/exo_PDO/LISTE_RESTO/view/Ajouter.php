<?php
require '../dao/Restorepository.php';
require '../dao/Dbconnect.php';


//------------- verifie que les champs ne sont pas vide----------------
if (isset($_POST["envoyer"])) {
    if (isset($_POST["Nom"], $_POST['Adresse']) && isset($_POST["Adresse"]) && isset($_POST["Prix"]) && isset($_POST["Commentaire"]) and isset($_POST["Note"]) and isset($_POST["Visite"]))
        if (!empty($_POST["NOM"]) and !empty($_POST["Adresse"]) and !empty($_POST["Prix"]) and !empty($_POST["Commentaire"]) and !empty($_POST["Note"]) and !empty($_POST["Visite"]))

            $nbligne = $repo->addRow($_POST['nom'], $_POST['adresse'], floatval($_POST['prix']), $_POST['commentaire'], floatval($_POST['note']), $_POST['datevisite']);

    if ($nbligne == 1) {
        header('Location:http://localhost/exo_PDO/LISTE_RESTO/index.php');
    } else {
        echo "ajout echouée";
    }
}




$repo = new RestoRepository();


if (isset($_POST['envoyer'])) {

    $nbligne = $repo->addRow($_POST['nom'], $_POST['adresse'], floatval($_POST['prix']), $_POST['commentaire'], floatval($_POST['note']), $_POST['datevisite']);
    echo $nbligne;
    if ($nbligne == 1) {
        header('Location:http://localhost/exo_PDO/LISTE_RESTO/index.php');
    } else {
        echo "Ajout Resto a echouée";
    }
}

?>

<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="../css/styleAjouter.css">
</head>

<body>

    <section>

        <a href="index.php" value="retour"><img src="icone\arrow_left_alt_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.png"></a>

        <h1>Ajouter un Resto</h1>

        <form action="Ajouter.php" method="post">
            <label>Nom</label>
            <td><input type="text" value="" name="nom" required /></td>
            <label>Adresse</label>
            <td><input type="text" value="" name="adresse" required /></td>
            <label>Prix</label>
            <td><input type="number" value="" name="prix" required /></td>
            <label>Commentaire</label>
            <td><textarea name="commentaire" id="commentaire"></textarea></td>
            <label>Note</label>
            <td><input type="number" value="" max="10" min="0" step="0.01" value="" name="note" required /></td>
            <label>Date de visite</label>
            <td><input type="date" value="" name="datevisite" required /></td>

            <input type="submit" value="ajouter un Resto" class="btnSoumettre" name="envoyer" /></td>

        </form>
    </section>

</body>

</html>