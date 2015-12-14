<?php

// Controleur secondaire - back-office/index

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    include("modele/utilisateurs/gestion_users.php");
    include("modele/blog/gestion_commentaires.php");
    include("modele/commandes/gestion_commandes.php");
    
    $retour = lire_users();
    $retour_com = lire_commentaires();
    $retour_buy = lire_commandes();

    include_once("vue/page/index.php");
}