<?php

// Controleur secondaire - back-office/gestion_commandes

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {
    
    if(isset($_GET["suppr"])) {
        
        include_once("modele/commandes/suppr_commande.php");
        
        $id = $_GET["suppr"];
        
        if(suppr_commande($id) == true) {
            header("Location:?module=commandes&action=gestion_commandes&del=ok");
        }
        else {
            header("Location:?module=commandes&action=gestion_commandes&del=nok");
        }
    }

    include_once("modele/commandes/gestion_commandes.php");

    $retour_buy = lire_commandes();

    include_once("vue/commandes/gestion_commandes.php");
}