<?php

// Controleur secondaire - gestion-compte/commandes user

if (!isset($_SESSION["user"])) {
    header("Location:?module=user&action=login");
}
else {
    
    include_once("modele/gestion-compte/commande.php");
    
    $id = $_SESSION["user"][0];
    
    $user_commande = lire_commande($id);
    
    include_once("vue/gestion-compte/commande.php");
}