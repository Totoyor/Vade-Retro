<?php

// Controleur secondaire - back-office/contact

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    include_once("modele/page/lire_contacts.php");

    $retour_contact = lire_contacts();
    $retour_rachat = lire_rachats();

    include_once("vue/page/contact.php");
}