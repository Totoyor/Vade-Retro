<?php

// Modèle lire_admins

function lire_admins() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_admin");
        $query->execute();
        $retour_admin = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_admin;
}