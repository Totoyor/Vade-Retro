<?php

// Controleur Principal - dispatcher

define("_INCLUDE_", TRUE);

include_once("modele/pdo.php"); // Connexion PDO
include_once("config/config.inc.php"); // Fichier config
include_once("lib/lib.php"); // Sécurisation de la session
include_once("lib/fonctions_panier.php"); // Fonctions du panier

TOTO_session_start(SESSION_NAME);

if (!isset ($_GET["module"])) {
    $module = "page";
}
else {
    $module = $_GET["module"];
}

if (!isset ($_GET["action"])) {
    $action = "index";
}
else {
    $action = $_GET["action"];
}


$url = "controleur/".$module."/".$action.".php";

if (file_exists($url)) {
    include_once($url);
}

else {
   include_once("vue/404.php");   
}
