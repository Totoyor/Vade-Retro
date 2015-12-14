<?php

// Controleur secondaire - packs/index

if(isset($_GET["id"])) {
    
    $id = $_GET["id"];

    include_once("modele/packs/fiche.php");

    $console_aff = lire_console($id);
}

include_once("vue/packs/fiche.php");