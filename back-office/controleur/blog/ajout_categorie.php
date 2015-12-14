<?php

// Controleur secondaire - back-office/ajout_article

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    if (isset($_POST["nom"])) {

        $titre = $_POST["nom"];
        $date = date("Y-m-d H:i:s");

        include_once("modele/blog/ajout_categorie.php");
        if (ajout_categorie($titre, $date) == false) {
            //echo "non réussi";
            header("Location:?module=blog&action=ajout_categorie&m=nok");
        }
        else {
            //echo  "réussi";
            header("Location:?module=blog&action=ajout_categorie&m=ok");
        }

    }

    include_once("vue/blog/ajout_categorie.php");
}