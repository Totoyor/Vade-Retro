<?php

// Modèle lire_articles

function lire_articles() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_blog_articles");
        $query->execute();
        $retour_art = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_art;
}