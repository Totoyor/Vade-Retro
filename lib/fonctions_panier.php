<?php

// fonctions :
// Ajouter Produit,combien produit, Supprimer produit, changer qte, recalculer panier et valider

function creer_panier() {
    // return true si la fonction crée le panier et false si le panier existe déjà
    if (!isset($_SESSION["panier"])) {    
    $_SESSION["panier"] = array();
    $_SESSION["panier"]["id_article"] = array();
    $_SESSION["panier"]["reference"] = array();
    $_SESSION["panier"]["nom"] = array();
    $_SESSION["panier"]["description"] = array();
    $_SESSION["panier"]["prix_ht"] = array();
    $_SESSION["panier"]["taux"] = array();
    $_SESSION["panier"]["quantite"] = array();
    return true;
    }
    else {
        return false;
    }
}

function ajout_produit($id, $ref, $nom, $descr, $prix_ht, $taux, $qte) {   

    if (!isset($_SESSION["panier"])) 
    {
    $_SESSION["panier"] = array();
    $_SESSION["panier"]["id_article"] = array();
    $_SESSION["panier"]["reference"] = array();
    $_SESSION["panier"]["nom"] = array();
    $_SESSION["panier"]["description"] = array();
    $_SESSION["panier"]["prix_ht"] = array();
    $_SESSION["panier"]["taux"] = array();
    $_SESSION["panier"]["quantite"] = array();
}

    
    $trouver_produit = array_search($id, $_SESSION["panier"]["id_article"]);

    if ($trouver_produit !== false) {
        //echo "<br/>trouvé";
        $_SESSION["panier"]["quantite"][$trouver_produit] += $qte;
}

    else {
        //echo "<br/>pas trouvé";
        array_push($_SESSION['panier']['id_article'], $id); // ID produit
        array_push($_SESSION['panier']['reference'], $ref); // réf produit
        array_push($_SESSION['panier']['nom'], $nom); // Nom produit
        array_push($_SESSION['panier']['description'], $descr); // Description produit
        array_push($_SESSION['panier']['prix_ht'], $prix_ht); // Prix HT produit
        array_push($_SESSION['panier']['taux'], $taux); // Taux TVA produit
        array_push($_SESSION['panier']['quantite'], $qte); // Quantité produit
    }
    return true;
}


function panier_nombre_ligne() {
    // retour : nombre de lignes dans le panier
    //echo count($_SESSION["panier"]["id_article"]);
    return count($_SESSION["panier"]["id_article"]);
}

function calculer_panier() {
    /*
    for ($i=0; $i<panier_nombre_ligne(); $i++) {
        $total_ligne = ($_SESSION["panier"]["prix_ht"][$i] * (1+$_SESSION["panier"]["taux"][$i] / 100)
                      * ($_SESSION["panier"]["quantite"][$i]));
        $total_panier += $total_ligne;
    }
    */
    $total_panier = 0;
    foreach ($_SESSION["panier"]["id_article"] as $key => $value) {
        $total_ligne = $_SESSION["panier"]["prix_ht"][$key] * (1+$_SESSION["panier"]["taux"][$key] /100)
            * $_SESSION["panier"]["quantite"][$key];
        
        $total_panier += $total_ligne;
    }
    return $total_panier;
}


function panier_supprimer_ligne($id) {
    
    $trouver_produit = array_search($id, $_SESSION["panier"]["id_article"]);

    if ($trouver_produit !== false) {
    
    unset($_SESSION['panier']['id_article'][$trouver_produit]); // ID produit
    unset($_SESSION['panier']['reference'][$trouver_produit]); // réf produit
    unset($_SESSION['panier']['nom'][$trouver_produit]); // Nom produit
    unset($_SESSION['panier']['description'][$trouver_produit]); // Description produit
    unset($_SESSION['panier']['prix_ht'][$trouver_produit]); // Prix HT produit
    unset($_SESSION['panier']['taux'][$trouver_produit]); // Taux TVA produit
    unset($_SESSION['panier']['quantite'][$trouver_produit]); // Quantité produit
    return true;
    }
    
    else {
        return false;
    
    }
}

function quantite_panier($id, $qte) {
    // $id : id du produit
    // $qte : quantité à modifier
    //retour : true si OK false si NOK (produit inexistant dans le panier)
    
    $trouver_produit = array_search($id, $_SESSION["panier"]["id_article"]);

    if ($trouver_produit !== false) {
    
    $_SESSION['panier']['quantite'][$trouver_produit] = $qte; // Quantité produit
    return true;
    }
    
    else {
        return false;
    
    }
}

function suppr_panier() {
     unset($_SESSION['panier']);
}

function panier_fetchall() {
    // retour : tableau des données du panier
    return $_SESSION["panier"];
}