<?php

// Controleur secondaire - packs/jeux


if(isset($_GET["console"])) {
    
    $console = $_GET["console"];
    
    include_once("modele/packs/fiche.php");
    
    $console_aff = lire_console($console);
    
    creer_panier();
    
    $ref = $console_aff[1];
    $nom = $console_aff[2];
    $descr = $console_aff[3];
    $prix_ht = $console_aff[5];
    $taux = $console_aff[6];
    $qte = 1;
    
    ajout_produit($console, $ref, $nom, $descr, $prix_ht, $taux, $qte);
    
    include_once("modele/packs/jeux.php");
    
    $retour_jeux = lire_jeux($console);
    
    include_once("vue/packs/jeux.php");
}    

else {
    header("Location:?module=packs&action=index");
}