<?php

// Controleur secondaire - back-office/gestion_articles

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    if (isset($_GET["id"])) {

        $id = $_GET["id"];
        include("modele/blog/suppr_article.php");

        if (suppr_article($id) == true) {

            header("Location:?module=blog&action=gestion_articles&del=ok");
        }
        else {
            header("Location:?module=blog&action=gestion_articles&del=nok");
        }
    }

    include_once("modele/blog/gestion_articles.php");

    $retour_art = lire_articles();

    include_once("vue/blog/gestion_articles.php");
}