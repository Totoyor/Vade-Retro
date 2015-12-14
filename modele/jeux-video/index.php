<?php

// Modèle lire_jeux

function lire_jeux() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_jeux, vr_prod_console
                                        WHERE vr_prod_console_id_console = id_console");
        $query->execute();
        $retour_jeux = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_jeux;
}

// Modèle lire_consoles (categories)

function lire_consoles_cat() {
    
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

// Modèle lire_jeux filtré par une console

function lire_jeux_filtre($filtre) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_jeux, vr_prod_console
                                        WHERE id_console = vr_prod_console_id_console
                                        AND vr_prod_console_id_console = :filtre
                                        ");
        $query->bindValue(':filtre', $filtre, PDO::PARAM_INT);
        $query->execute();
        $retour_jeux = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_jeux;
}