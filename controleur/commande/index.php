<?php

// Controleur secondaire - Commande/index

if (!isset($_SESSION)) {
    
    header("Location:?module=user&action=connexion");
}
else {
    
    include_once("modele/commande/index.php");

    $id = $_SESSION["user"]["id_user"];

    $user_account = lire_user($id);

    $total_panier = calculer_panier();
    
    $ref_commande = $_GET["ref_commande"];

    include_once("vue/commande/index.php");
}