<?php

//----------addition de deux nombres exercice 2.A-----------------
//Créer une fonction « getSum() » qui accepte deux arguments de type int. Elle devra retourner la somme des deux valeurs.
function getSum (int $a, int $b): int {
    $calcul = $a + $b;
    return $calcul;
}

echo ("Addition");
echo PHP_EOL;
echo getSum(5,3);

echo PHP_EOL;  //retour a la ligne

//------------soustraction exo 2.b-------------------------------
//Créer une fonction « getSub() » qui accepte deux arguments de type int. Elle devra retourner la soustraction des deux valeurs.
function getSub (int $a, int $b): int {
    $calcul = $b - $a;
    return $calcul;  
}

echo ("soustraction");
echo PHP_EOL;
echo getSub(5,3);
echo PHP_EOL;
echo getSub(3, 5);

echo PHP_EOL;

//-------------multiplication exo 2.c----------------------------
//Créer une fonction « getSub() » qui accepte deux arguments de type int. Elle devra retourner la soustraction des deux valeurs.
function getMulti(float $a, float $b): float {
    $calcul = $a * $b;
    return $calcul; 
}

echo("multiplication");
echo PHP_EOL;
echo getMulti(5.6, 3);
echo PHP_EOL;
echo getMulti(5.6, 3.7);

echo PHP_EOL;

//-------------division exo 2.d------------------------------------
//Créer une fonction « getSub() » qui accepte deux arguments de type int. Elle devra retourner la soustraction des deux valeurs.
function getDiv(int $a, int $b): float {

    if ($b  === 0 ) {
        return 0;
    }
    $calcul = $a / $b;
    return round($calcul,2);   // 
    
  //  $format_a = round($calcul, 2);
   // $format_b= number_format($b, 2);
}

echo("division");
echo PHP_EOL;
echo getDiv(20, 3);
echo PHP_EOL;
echo getDiv(20, 0);

echo PHP_EOL;