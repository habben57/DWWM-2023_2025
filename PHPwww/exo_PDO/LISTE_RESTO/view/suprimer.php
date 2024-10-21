<?php
require './Restorepository.php';
require './Dbconnect.php';


//verification si id existe
if (!isset($_GET['id'])) {
header("Location: .");

exit;
}

//vérifier que chaque caractère d'un texte est numérique ou non
if (!ctype_digit($_GET['id'])) {
http_response_code(400);

exit;
}

$myconnect = new Dbconnect("localhost", "guide", "root", "");
$myPDO = $myconnect->tryConnect();

$repo = new RestoRepository($myPDO);
$resto = $repo->searchOne($_GET['id']);

//si la resource n esxiste pas retourn "404 not found"
if ($resto === []) {
    http_response_code(404);
    
    exit;
}

$repo->deleteRow($_GET['id']);

header("Location: ."); // retour page d acceuil

exit;