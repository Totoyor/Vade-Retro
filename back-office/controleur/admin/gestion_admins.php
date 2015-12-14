<?php

// Controleur secondaire - back-office/gestion admins

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {
    
    include_once("modele/admin/gestion_admins.php");

    $retour_admin = lire_admins();

    include_once("vue/admin/gestion_admins.php");
}