<?php

// Controleur secondaire - panier/panier

if(isset($_GET["panier"]) == 'delete') {
    suppr_panier();
    header("Location?module=panier&action=panier");
}

if(isset($_GET["modif"]) == 'suppr_art') {
    $id = $_GET["id_art"];
    if (panier_supprimer_ligne($id) == true) {
        header("Location:?module=panier&action=panier&suppr=ok");
    }
}

if(isset($_GET["modif_quant"]) == 'qte') {
    
    $id = $_GET["id_art"];
    $qte = $_POST["quantite"];
    if (quantite_panier($id, $qte) == true) {
        header("Location:?module=panier&action=panier&qt=ok");
    }
}

if(isset($_POST["id_jeu"])) {
    
    foreach ($_POST["id_jeu"] as $key => $id) {
        
        include_once("modele/panier/panier.php");

        $lireJeu = lire_jeu($id);

        $ref = $lireJeu[1];
        $nom = $lireJeu[2];
        $descr = $lireJeu[3];
        $prix_ht = $lireJeu[5];
        $taux = $lireJeu[6];
        $qte = 1;

        ajout_produit($id, $ref, $nom, $descr, $prix_ht, $taux, $qte);
    }
}


$nombre_articles = panier_nombre_ligne();

$total_panier = calculer_panier();

include_once("vue/panier/panier.php");