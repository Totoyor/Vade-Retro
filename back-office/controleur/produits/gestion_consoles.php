<?php

// Controleur secondaire - back-office/gestion_consoles

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    if (isset($_GET["id"])) {

        $id = $_GET["id"];
        include("modele/produits/suppr_console.php");

        if (suppr_console($id) == true) {

            header("Location:?module=produits&action=gestion_consoles&del=ok");
        }
        else {
            header("Location:?module=produits&action=gestion_consoles&del=nok");
        }
    }


    include("modele/produits/gestion_consoles.php");

    $retour_cons = lire_consoles();

    include_once("vue/produits/gestion_consoles.php");
}