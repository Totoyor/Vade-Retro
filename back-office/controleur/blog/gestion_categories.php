<?php

// Controleur secondaire - back-office/gestion_articles

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    if (isset($_GET["id"])) {

        $id = $_GET["id"];
        include("modele/blog/suppr_categorie.php");

        if (suppr_categorie($id) == true) {

            header("Location:?module=blog&action=gestion_categories&del=ok");
        }
        else {
            header("Location:?module=blog&action=gestion_categories&del=nok");
        }
    }

    include_once("modele/blog/gestion_categories.php");

    $retour_cat = lire_categories();

    include_once("vue/blog/gestion_categories.php");
}