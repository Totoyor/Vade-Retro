<?php

// Modèle lire_rachats

function lire_rachats() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_rachat");
        $query->execute();
        $retour_rachat = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_rachat;
}


// Modèle lire_contacts

function lire_contacts() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_contact");
        $query->execute();
        $retour_contact = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_contact;
}