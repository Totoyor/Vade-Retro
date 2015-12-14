<?php

// Controleur secondaire - blog/modif_categorie

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    if (isset($_GET["id"]) && isset($_GET["modif"])) {

        $id = $_GET["id"]; 
        $titre = $_POST["nom"];

        include("modele/blog/modif_categorie.php");

        $modifCategorie = modif_categorie($id, $titre);
        $catModif = lire_categorie($id);
    }

    elseif (isset($_GET["id"])) {

        $id = $_GET["id"];

        include("modele/blog/modif_categorie.php");

        $catModif = lire_categorie($id);
    }


    include_once("vue/blog/modif_categorie.php");
}