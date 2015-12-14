<?php

// Controleur secondaire - back-office/newsletter

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    include_once("modele/page/lire_newsletter.php");

    $newsletter = lire_newsletter();


    include_once("vue/page/newsletter.php");
}