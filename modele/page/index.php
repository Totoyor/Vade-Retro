<?php

// Modèle lire_consoles / 1er produit en avant

function lire_consoles_avant1() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_console
                                        LIMIT 0,1");
        $query->execute();
        $retour_cons_av1 = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_cons_av1;
}

// Modèle lire_consoles / 2eme produit en avant

function lire_consoles_avant2() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_console
                                        LIMIT 5,1");
        $query->execute();
        $retour_cons_av2 = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_cons_av2;
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


// Modèle lire_jeux

function lire_jeux() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_jeux, vr_prod_console
                                        WHERE vr_prod_console_id_console = id_console
                                        LIMIT 0,5 ");
        $query->execute();
        $retour_jeux = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_jeux;
}


// Modèle lire_jeux filtré par une console

function lire_jeux_filtre($filtre) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_jeux, vr_prod_console
                                        WHERE id_console = vr_prod_console_id_console
                                        AND vr_prod_console_id_console = :filtre
                                        LIMIT 0,5 ");
        $query->bindValue(':filtre', $filtre, PDO::PARAM_INT);
        $query->execute();
        $retour_jeux = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_jeux;
}