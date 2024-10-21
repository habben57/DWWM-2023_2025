<?php
date_default_timezone_set('Europe/Paris');
//-----------------------exercice 6.a---------------------------------------------
//Créer une fonction « getToday() ». Cette fonction doit afficher et retourner la date du jour au format d/m/Y sous forme de 
//chaine de caractères (exemple : 21/10/2020).
//Aide et exemples : 
//https://www.php.net/manual/fr/function.date.php
//https://www.php.net/manual/fr/datetime.format.php#refsect1-datetime.format-examples

echo PHP_EOL;
$dateTime = new DateTime();
$dateTime = date('Y-m-d h:i:s');
echo ('Date du jour = ' . $dateTime);
echo PHP_EOL;
echo ' timestamp actuel : ' . time();

$date = date('d-F-Y');          //Modification format date
echo (' ('.$date.')');
echo PHP_EOL;
echo 'Timestamp actuel : ' .time();

ECHO '*********************';
echo PHP_EOL;
//----------------------exercice 6.b-------------------------------------------
//Créer une fonction « getTimeLeft() » acceptant un argument de type string et qui retourne une chaine de caractère.
//La valeur de l'argument représente une date au format Y-m-d (ex: 2020-11-23). 
//La fonction doit vérifier si la date fournie est valide (bon format, date cohérente).
//Si la date est ultérieure à la date du jour, la fonction retourne la différence en années/mois ou mois/jours (voir exemples).
//Si la date est égale à la date du jour, la fonction retourne « Aujourd'hui ».
//Si la date est antérieure à la date du jour, la fonction retourne « Évènement passé ».
//Exemples :
//Pour les exemples suivants: DateDuJour = 2020-01-30 (30 Janvier 2020)
//getTimeLeft ("2019-09-29"); // retourne « Évènement passé »
//getTimeLeft ("2020-01-30"); // retourne « Aujourd'hui »
//getTimeLeft ("2020-02-15"); // retourne « Dans 16 jours »
//getTimeLeft ("2020-05-16"); // retourne « Dans 4 mois et 17 jours »
//getTimeLeft ("2021-05-30"); // retourne « Dans 1 an et 4 mois »
//getTimeLeft ("2022-10-17"); // retourne « Dans 2 ans et 9 mois »
//--------date_default_timezone_set('UTC');   //fuseau horaire -----------
//---------------------------------------------------------------------------------------------------------------------------

$dateTime = new DateTime();                   // date et heure du jour
$dateTime = date('Y-m-d h:i:s');

$datetime2 = date($dateTime);  // date identique

$dateTime2 = date('2095-06-16  19:40:25'); // date sup

$dateTime2 = date('1983-06-16  19:40:25');  // date inferieure
echo PHP_EOL;
echo '****************exercice 6.a***********************';
echo PHP_EOL;
echo 'Date du jour ' . $dateTime;
echo PHP_EOL;
echo ' Timestamp du jour : ' . strtoTime($dateTime);
echo PHP_EOL;
//echo $dateTime2;
echo PHP_EOL;
//echo strtotime($dateTime2);

echo 'Nouvelle date ' . $dateTime2;
echo PHP_EOL;
echo ' Timestamp de la nouvelle date : ' . strtotime($dateTime2);
echo PHP_EOL;
echo '*************exercice 6.b**************************';

function getTimeLeft(string $chainedate): string
{
    $objDateJour = new DateTime("now");  //date du jour     
    $myObjetDateCreate = new DateTime($chainedate);      // nouvelle date creer


    $myDateInterval = date_diff($objDateJour, $myObjetDateCreate);      // interval entre date du jour et date creer


    echo PHP_EOL;

    if ($myDateInterval->invert === 1 && $myDateInterval->days == 0) {   // ===1 pour une diff negatif
        return "Cette date correspond à la date d'aujourd'hui. ";
    } elseif ($myDateInterval->invert === 1 && $myDateInterval->days != 0) {
        return ' Cette évenement est passé de : ' . $myDateInterval->y . ' ans, ' . $myDateInterval->m . ' mois, ' . $myDateInterval->d . ' jours, ' . $myDateInterval->h . ' heures, ' . $myDateInterval->i . ' minutes, et ' . $myDateInterval->s . ' secondes, ';
    } else {
        return   " Cette évenement est futur dans : " . $myDateInterval->y . ' ans, ' . $myDateInterval->m . ' mois, ' . $myDateInterval->d . ' jours, ' . $myDateInterval->h . ' heures, ' . $myDateInterval->i . ' minutes, et ' . $myDateInterval->s . ' secondes, ';
    }
}

echo PHP_EOL;
echo  getTimeLeft("2024-09-04 21:44:15");
echo PHP_EOL;
echo getTimeLeft("2029-11-20");
echo PHP_EOL;
echo getTimeLeft("1976-07-11");
echo PHP_EOL;
echo '*******************************************';


