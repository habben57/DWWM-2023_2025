<?php

//--------------------------exercice 4.a-------------------------------------
//Créer une fonction « isMajor() » acceptant un argument de type int. Elle devra retourner un booléen. 
//Si l’âge est supérieur ou égal à 18, elle doit retourner true. Sinon elle doit retourner false.
function isMajor(int $age): bool {
    if ($age < 18) {
        return false;   
    } else {
        return true;
    }
}

echo PHP_EOL;
var_dump(isMajor(17)) ;
echo PHP_EOL;
var_dump(isMajor(12));
echo PHP_EOL;
var_dump(isMajor(44));
echo PHP_EOL;
var_dump(isMajor(18));

//------------------exercice 4.b-------------------------------------------
//Créer une fonction « getRetired() » acceptant un argument de type int. Elle devra retourner un string. 
//Cette fonction permet de calculer le nombre d’années restant avant la retraite ou le nombre d’années depuis la retraite. 
//Pour cet exercice, l’âge de la retraite est fixé à 60 ans.

function getRetired(int $age): string {
        
        if($age < 60 && $age > -1) { // - de 60  
            $reste1 = 60  - $age;
            return "Il vous reste $reste1 années avant la retraite";
        } else if ($age > 60) {      // + de 60
            $reste2 = $age - 60;
            return "Vous êtes à la retraite depuis $reste2 années";
        } else if ($age <0) {        //    < à 0
            return 'Vous n \'êtes pas encore né';
        }
        else {                       // égal à 60
            return 'Vous prenez votre retraite cette année !';
        }
    }

echo PHP_EOL;
echo(getRetired(12));
echo PHP_EOL;
echo (getRetired(60));
echo PHP_EOL;
echo (getRetired(73));
echo PHP_EOL;
echo (getRetired(-2));

//-------------------------------exercice 4.c-----------------------------------------------
//Créer une fonction « getMax() » acceptant 3 arguments de type float.
//Cette fonction doit retourner la valeur du plus grand des 3 nombres. Limitez le résultat à 3 décimales
//Si au moins 2 des valeurs fournies sont égales la fonction retourne 0.

function getMax(float $a, float $b, float $c): float {
    //if((($a && $b) === 0) || (($a && $c) === 0) || (($b && $c) === 0)){
        if (($a==$b) || ($a==$c) || ($b==$c)){
        return 0;
    }
    
   return max(round($a,3), round($b,3), round($c,3));
    
}

echo PHP_EOL;
echo getMax(12, 2, 54);
echo PHP_EOL;
echo getMax(0, 82, 0);
echo PHP_EOL;
echo getMax(120, 60, 12);
echo PHP_EOL;
echo getMax(-25, -31, -6);
echo PHP_EOL;
echo getMax(3.222222, 89.3654, 136.95612);

//---------------------exercice 4.d------------------------------------------------------------------------
//Créez une fonction « capitalCity() » qui accepte un argument de type string (le pays dont on cherche la capitale). 
//Elle devra retourner le nom de la capitale des pays suivants :
//France => Paris
//Allemagne => Berlin
//Italie => Rome
//Maroc => Rabat
//Espagne => Madrid
//Portugal => Lisbonne
//Angleterre => Londres
//Si le pays ne fait pas partie de la liste ci-dessus, la fonction retourne la valeur « Capitale inconnue ».
//Note : Utilisez la structure SWITCH pour faire cet exercice.

function getCapitalCity(string $pays): string{


switch ($pays) {
    case "France":
        return "France => Paris";
        break;
    case "Allemagne":
        return "Allemagne => Berlin";
        break;
    case "Italie":
        return "Italie => Rome";
        break;
    case "Maroc":
        return "Maroc => Rabat";
        break;
    case "Espagne":
        return "Espagne => Madrid";
        break;
    case "Portugal":
        return "Portugale => Lisbonne";
        break;
    case "Angleterre":
        return "Angleterre => Londres";
        break;
    default:
        return "Capitale inconnue!";
        break;
    }
}

echo PHP_EOL;
echo getCapitalCity("Allemagne");
echo PHP_EOL;
echo getCapitalCity("Espagne");
echo PHP_EOL;
echo getCapitalCity("Angleterre");
echo PHP_EOL;
echo getCapitalCity("Bresil");
echo PHP_EOL;