<?php

// Controleur secondaire - back-office/gestion_commentaires

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    if (isset($_GET["id"])) {

        $id = $_GET["id"];
        include("modele/blog/suppr_commentaire.php");

        if (suppr_commentaire($id) == true) {

            header("Location:?module=blog&action=gestion_commentaires&del=ok");
        }
        else {
            header("Location:?module=blog&action=gestion_commentaires&del=nok");
        }
    }

    include_once("modele/blog/gestion_commentaires.php");

    $retour_com = lire_commentaires();

    include_once("vue/blog/gestion_commentaires.php");
}