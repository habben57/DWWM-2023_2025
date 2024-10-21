<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul de l'impot sur le revenu</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php
    require "./model/Contribuable.php";

    if (isset($_GET["envoie"]) && !empty($_GET["firstname"]) && !empty($_GET["lastname"]) && !empty($_GET["income"])) {
        $monContribuable = new Contribuable($_GET["firstname"], $_GET["lastname"], floatval($_GET["income"]));

        // echo "<h3> votre impot sera de : " . $monContribuable->calculImpot() . " € pour cette année </h3>";
    }
    ?>
    <form action="" method="get" enctype="text/plain">
        <fieldset>
            <legend class="textemulticolor">Coordonnées contribuable :</legend>
            <div>
                <label for="firstname">Votre nom :</label>
                <input type="text" name="firstname" id="firstname">


            </div>
            <div> <label for="lastname">Votre prénom :</label>
                <input type="text" name="lastname" id="lastname" require>

            </div>
            <div>
                <label for="income">Votre revenu annuel :</label>
                <input type="number" name="income" id="income" step="0.01" min="0">
            </div>

            <input type="submit" value="envoyer" name="envoie">
            <div>
                <label for="mensualite">Mensualité : </label>
                <input type="text" name="mensualite" id="mensualite" disabled="true" value="
                <?php
                //                      if (isset($monContribuable)) {
                //   Avec ifisset             echo $monContribuable->calculImpot() . " €";
                //                      } else {
                //                          echo "0";
                //                      }


                $mensualite = (isset($monContribuable)) ? $monContribuable->calculImpot() . "€" : "0 €";
                echo $mensualite;
                ?>
            
                ">
            </div>
            
        </fieldset>
    </form>


</body>

</html>