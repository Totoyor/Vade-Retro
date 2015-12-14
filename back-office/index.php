<?php

// Controleur Principal - dispatcher

// Démarage de la session
session_start();

include_once("modele/pdo.php"); // Connexion PDO

//var_dump($_SESSION);

// Dispatcher
if (!isset ($_GET["module"])) {
    $module = "admin";
}
else {
    $module = $_GET["module"];
}

if (!isset ($_GET["action"])) {
    $action = "login_admin";
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
