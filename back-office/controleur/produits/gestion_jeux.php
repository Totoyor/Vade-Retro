<?php

// Controleur secondaire - back-office/gestion_jeux

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    if (isset($_GET["id"])) {

        $id = $_GET["id"];
        include("modele/produits/suppr_jeux.php");

        if (suppr_jeu($id) == true) {

            header("Location:?module=produits&action=gestion_jeux&del=ok");
        }
        else {
            header("Location:?module=produits&action=gestion_jeux&del=nok");
        }
    }

    include("modele/produits/gestion_jeux.php");

    $retour = lire_jeux();

    include_once("vue/produits/gestion_jeux.php");
}