<?php

// Modèle lire_consoles

function lire_consoles() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_console");
        $query->execute();
        $retour_cons = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_cons;
}