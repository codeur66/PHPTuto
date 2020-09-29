<?php
// Les variables super globales sont des variables intégrées qui sont toujours disponibles dans toutes les étendues.
echo "\$GLOBALS <br>";
//$GLOBALS : tableau permet de stocker des variables globales
$x = 75;
$y = 25;
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z."<br>";

//$_SERVER : Variable super globale qui contient des informations sur les en-têtes, les chemins et les emplacements des scripts.
echo "\$_SERVER <br>";
echo "\$_SERVER['PHP_SELF'] ==> ".$_SERVER['PHP_SELF']."<br>";
echo "\$_SERVER['SERVER_NAME'] ==> ".$_SERVER['SERVER_NAME']."<br>";
echo "\$_SERVER['HTTP_HOST'] ==> ".$_SERVER['HTTP_HOST']."<br>";
echo "\$_SERVER['HTTP_REFERER'] ==> ".(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'inconnue')."<br>";
echo "\$_SERVER['HTTP_USER_AGENT'] ==> ".$_SERVER['HTTP_USER_AGENT']."<br>";
echo "\$_SERVER['SCRIPT_NAME'] ==> ".$_SERVER['SCRIPT_NAME']."<br>";

//$_REQUEST : permet de collecter des données après avoir soumis un formulaire HTML.


/*
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
 * */

?>