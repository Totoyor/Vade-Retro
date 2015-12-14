<?php

// Controleur secondaire - page/index

if(isset($_POST["filtre_console"])) {
    
    $filtre = $_POST["filtre_console"];
    include_once("modele/page/index.php");
    $retour_jeux = lire_jeux_filtre($filtre);
    
}
else {
    
    include_once("modele/page/index.php");
    $retour_jeux = lire_jeux();

}
    

$retour_cons_cat = lire_consoles_cat();
$retour_cons_av1 = lire_consoles_avant1();
$retour_cons_av2 = lire_consoles_avant2();

include_once("vue/page/index.php");