<?php 

if (!defined("_INCLUDE_")) {
    die("Tentative de piratage !");
}

define("MAXART", 5);        // Nombres d'articles MAX par Pages
define("MAXCHAR", 100);     // Nombres de caractères max par présentation d'article
define("SESSION_NAME", "VADE_RETRO"); // Nom de la session


// Affichage des erreurs
if (defined('DEBUG') && DEBUG) {
    //en mode debug on affiche les erreurs et warnings
    ini_set('display_errors, 1');
    error_reporting(E_ALL);
    // error_reporting(E_ALL & ~E_DEPRECATED);
}
else {
    //en mode non DEBUG, on affiche aucun message
    ini_set('display_errors', 0);
    error_reporting(0);
}