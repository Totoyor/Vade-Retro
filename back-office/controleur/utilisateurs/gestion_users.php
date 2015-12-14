<?php

// Controleur secondaire - back-office/gestion_users

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    include("modele/utilisateurs/gestion_users.php");

    if (isset($_GET["id"])) {

        $id = $_GET["id"];
        include("modele/utilisateurs/suppr_user.php");

        if (suppr_user($id) == true) {

            header("Location:?module=utilisateurs&action=gestion_users&del=ok");
        }
        else {
            header("Location:?module=utilisateurs&action=gestion_user&del=nok");
        }
    }

    $retour = lire_users();

    include_once("vue/utilisateurs/gestion_users.php");
}