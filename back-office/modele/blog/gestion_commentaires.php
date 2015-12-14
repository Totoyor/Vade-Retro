<?php

// Modèle lire_commentaires

function lire_commentaires() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_blog_comment");
        $query->execute();
        $retour_com = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_com;
}