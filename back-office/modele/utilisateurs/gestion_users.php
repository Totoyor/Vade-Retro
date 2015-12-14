<?php

// Modèle lire_users

function lire_users() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_user");
        $query->execute();
        $retour = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour;
}