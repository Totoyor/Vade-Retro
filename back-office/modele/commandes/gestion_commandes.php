<?php

// Modèle lire_commandes

function lire_commandes() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_commandes");
        $query->execute();
        $retour_buy = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_buy;
}