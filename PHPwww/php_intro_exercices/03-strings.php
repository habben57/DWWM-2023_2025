<?php

//-----------exercice 3.a-------------------------
//Cette fonction doit retourner Le nom de l’inventeur de la formule « E = MC² ».

function getMC2(): string    
{
    return "Albert Einstein";
}

echo PHP_EOL;                       // retour a la ligne
echo getMC2();
echo PHP_EOL;


//-----------exercice 3.b------------------------
//Cette fonction doit retourner la concaténation des deux valeurs.
function getUserName(string $prenom, string $nom): string       
{
    return $prenom . $nom;     // suprimme l espace et retourne " michaëldevoldère "
}

echo getUserName("mickaël", "devoldère");
echo PHP_EOL;


//-----------exercice 3.c--------------------------
  //Cette fonction doit retourner la concaténation des deux valeurs avec un espace entre les 2, 
  // le prénom en minuscule et le nom en MAJUSCULE.
  
function getFullName(string $nom, string $prenom): string
{
    $prenom[0] = "M";                           // mdifie la premiere lettre 
    $nom = mb_convert_case($nom, MB_CASE_UPPER); // Modifie la casse d'une chaîne "MB_CASE_UPPER" majuscule ttes la chaine
    return "$prenom $nom";
}

echo getFullName('devoldère', 'mickaël');
echo PHP_EOL;

//------------exercice 3.d--------------------------
    //Cette fonction doit retourner une chaîne de caractères sous la forme :
    //« Bonjour prénom, nom. Connaissez-vous Einstein ? »

function getAskUser(): string
{
    
    return "Bonjour " . getFullName('devoldère', 'michaël'). ', Connaissez-vous ' . getMC2() . ' ?';
}

echo getAskUser();