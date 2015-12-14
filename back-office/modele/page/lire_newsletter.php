<?php

// Modèle lire_newsletter

function lire_newsletter() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_newsletter");
        $query->execute();
        $newsletter = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $newsletter;
}