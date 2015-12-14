<?php

// Controleur secondaire - jeux-video/index

if(isset($_POST["filtre_console"])) {
    
    $filtre = $_POST["filtre_console"];
    include_once("modele/jeux-video/index.php");
    $retour_jeux = lire_jeux_filtre($filtre);
    
}
else {
    
    include_once("modele/jeux-video/index.php");
    $retour_jeux = lire_jeux();
}

$retour_cons_cat = lire_consoles_cat();

include_once("vue/jeux-video/index.php");