<?php

// Controleur secondaire - back-office/modif_commande

if(isset($_GET["id_modif"])) {
    
    $id = $_GET["id_modif"];
    
    include_once("modele/commandes/modif_commande.php");
    
    $ref = $_POST["ref"];
    $montant = $_POST["montant"];
    $qte = $_POST["qt"];
    
    $modifCommande = modif_commande($id, $ref, $montant, $qte);
}

if(isset($_GET["id"])) {
    
    $id = $_GET["id"];

    include_once("modele/commandes/modif_commande.php");

    $commandeAff = lire_commande($id);
}


include_once("vue/commandes/modif_commande.php");