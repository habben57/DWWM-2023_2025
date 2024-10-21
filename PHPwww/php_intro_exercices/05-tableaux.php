<?php

//Pour les exemples et vos tests, le tableau ci-dessous sera utilisé :
//➢ $names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo' ];



//----------------------------------exercice 5.a-------------------------------------------------------------------
//Créer une fonction « firstItem() » qui accepte un argument de type array. Elle devra retourner 
//le premier élément du tableau. Si le tableau est vide, la fonction retourne null.
//  exemple: firstItem ($names); // retourne << Joe >>

$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];

function firstItem(array $names): ?string
{
    if (empty($names)) {
        return null;
    }

    $premierElement = $names[0];
    return " Le premier element est : $premierElement.";
}
// if (var_dump(firstItem($names))) {
//     var_dump(firstItem($names));
// } else {
//     echo PHP_EOL;
//     echo firstItem($names);
//     echo PHP_EOL;
// }

//-----------------------exercice 5.b-----------------------------------------

//Créer une fonction « lastItem() » acceptant un argument de type array. Elle devra retourner le dernier élément du tableau. Si le 
//tableau est vide, il faudra retourner null.
//Exemple : 
//lastItem ($names); // retourne « Néo »

function lastItem(array $names): string
{
    return end($names);
}
echo " Le dernier element est : " . lastItem($names) . ".";       // end() Retourne la valeur du dernier élément ou false si le tableau est vide.
echo PHP_EOL;

if (var_dump(lastItem($names))) {
    var_dump(lastItem($names));
} else {
    echo PHP_EOL;
    echo firstItem($names);
    echo PHP_EOL;
}

//------------------------exercice 5.c-----------------------------------------
//Créer une fonction « sortItems() » acceptant un argument de type array. 
//Cette fonction retourne le tableau trié par ordre décroissant. Si le tableau est vide, il faudra retourner un tableau vide.
//Exemple : 
//sortItems ($names); // retourne « ['Zoé', 'Néo', 'Léa', 'Joe', 'Jack'] »
echo PHP_EOL;
echo "Ordre alphabetique décroissant : ";
function sortItems(array $names): array
{
    rsort($names);
    // print_r($names);
    return $names;
}

$names = array('Zoé', 'Néo', 'Léa', 'Joe', 'Jack');
rsort($names);                                           // rsort() ordre alphabetique decroissant 
foreach ($names as $val) {
    echo " " . $val . ", ";
}

//------------------------exercice 5.d----------------------------------------
//Créer une fonction « stringItems() » acceptant un argument de type array. 
//Cette fonction retourne une chaine de caractère contenant tous les éléments du tableau triés par ordre croissant et séparés par 
//une virgule et un espace. Si le tableau est vide, il faudra retourner la valeur « Nothing to display ».
//Exemple : 
//sortItems ($names); // retourne « Jack, Joe, Léa, Néo, Zoé »
echo PHP_EOL;
echo "Ordre alphabetique croissant : ";
function stringItems(array $names): array
{
    return ($names);
}

sort($names);                                                 // sort() = ordre croissant
foreach ($names as $val) {
    echo " " . $val . ", ";
}
