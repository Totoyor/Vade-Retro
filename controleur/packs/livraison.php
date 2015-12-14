<?php

// Controleur secondaire - packs/livraison

if (!isset($_SESSION["user"])) {
    header("Location:?module=user&action=login");
}
else {
    
    if(isset($_POST["adresse_liv"])) {
        include_once("modele/packs/livraison.php");
        
        $id = $_SESSION["user"]["id_user"];
        $tel = $_POST["tel"];
        $adresse_liv = $_POST["adresse_liv"];
        $ville_liv = $_POST["ville_liv"];
        $cp_liv = $_POST["cp_liv"];
        $pays_liv = $_POST["pays_liv"];
        
        if(modif_user($id, $tel, $adresse_liv, $ville_liv, $cp_liv, $pays_liv) == true) {
            
            $total_panier = calculer_panier();
            
            $ref = uniqid(mt_rand());
            $montant = $total_panier;
            $qte = 1;
            $date = date("Y-m-d H:i:s");
            $user = $_SESSION["user"]["id_user"];
            $console = $_SESSION["panier"]["id_article"][0];
            
            if(ajout_commande($ref, $montant, $qte, $date, $user, $console) == true) {
                
                header("Location:?module=commande&action=index&ref_commande=".$user."");
            }
            else {
                header("Location:?module=packs&action=livraison&commande=nok");
            }
        }
        else {
            header("Location:?module=packs&action=livraison&modif=nok");
        }
    }
    
    include_once("vue/packs/livraison.php");
}