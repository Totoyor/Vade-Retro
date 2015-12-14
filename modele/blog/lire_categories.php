<?php

// Modèle lire_categories

function lire_categories() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_blog_categorie
                                        ORDER BY id_blog_categorie");
        $query->execute();
        $categories = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $categories;
}