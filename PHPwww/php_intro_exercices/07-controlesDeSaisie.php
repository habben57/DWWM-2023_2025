<?php

echo "*********************exercice 7.A********************************";
//Créez une fonction « stringLength() » qui accepte un argument de type string et retourne un booléen qui vaut
// true si la chaine de caractères contient au moins 9 caractères 
// false si elle contient moins de 9 caractères.
//Exemples :
//stringLength ("MotDePasseLong"); // retourne « true »
//stringLength ("azer"); // retourne « false »

function stringLength(string $maChaine): bool
{

    if (mb_strlen($maChaine) >= 9) {           // mb_strlen pour nombres de caracteres
        return true;
    } else {
        return false;
    }
}

echo PHP_EOL;
echo "La longueur de la chaine retourne : ";
echo var_dump(stringLength("§%abc9rrfge"));      //var dump pour retourner un booleen
echo $maChaine;
//-----------------------EXERCICE 7.B----------------------------
//Créez une fonction de vérification « passwordCheck() » acceptant un argument de type string. 
//Cette fonction retourne un booléen qui vaut true si le mot de passe respecte les règles suivantes :
//      Contient au moins 9 caractères
//      Contient au moins 1 chiffre
//      Contient au moins une majuscule et une minuscule
//      Contient au moins 1 caractère non alphanumérique
//Dans votre fonction, vous devez appeler la fonction « stringLength () » créée dans l’exercice précédent.

echo PHP_EOL;
echo "********************exercice 7.b**********************************";

$maChaine = "kfdelfzeofM";
echo PHP_EOL;
echo 'Votre mots de passe est : ' . $maChaine;
echo PHP_EOL;
function passWordCheck(string $maChaine): bool
{
    if (stringLength($maChaine) && preg_match('/[a-z]/', $maChaine) && preg_match('/[A-Z]/', $maChaine) && preg_match('/[0-9]/', $maChaine) && preg_match('/[^a-zA-Z0-9]/', $maChaine)) {
        echo 'mots de passe valide. ' . $maChaine . PHP_EOL;
        return true;
    } else {
        echo 'mots de passe invalide. ' . $maChaine . PHP_EOL;
        return false;
    }
}
var_dump(passWordCheck($maChaine));


echo "***********************exrecice 7.C*******************************";
$users = [
    'joe' => 'Azer1234§',
    'jack' => 'Azer-4321',
    'admin' => '1234_Azer',
];
function userLogin(string $nom, string $passe, array $users): bool{
    foreach ($users as $key => $value){
       if(stringLength($passe) && passWordCheck($passe) && $passe === $value && $nom == $key ) {
        return true;
       } else{
        echo 'utilisateur non trouvé OU mot de passe invalide';
        return false;
       }
    }
}
echo PHP_EOL;
//var_dump(userLogin('joe', 'zer1234§', $users));
var_dump(userLogin('admin', '1234_Azer', $users));
echo PHP_EOL;

