<?php

// Controleur secondaire - jeux-video/fiche produit

if(isset($_GET["ajout_panier"])) {
    
    $id = $_GET["ajout_panier"];
    
    include_once("modele/jeux-video/fiche.php");
    
    $lireJeu = lire_jeu($id);
    
    creer_panier();
    
    $ref = $lireJeu[1];
    $nom = $lireJeu[2];
    $descr = $lireJeu[3];
    $prix_ht = $lireJeu[5];
    $taux = $lireJeu[6];
    $qte = 1;
    
    ajout_produit($id, $ref, $nom, $descr, $prix_ht, $taux, $qte);
}


if(isset($_GET["id"])) {
    
    $id = $_GET["id"];
    
    include_once("modele/jeux-video/fiche.php");
    
    $lireJeu = lire_jeu($id);
    
    include_once("vue/jeux-video/fiche.php");
}
else {
    header("Location:?module=jeux-video&action=index");
}
