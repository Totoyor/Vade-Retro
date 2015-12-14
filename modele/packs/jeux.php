<?php

// Modèle lire_jeux

function lire_jeux($console) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_jeux, vr_prod_console
                                        WHERE :id = vr_prod_console_id_console
                                        AND id_console = vr_prod_console_id_console");
        $query->bindValue(':id', $console, PDO::PARAM_INT);
        $query->execute();
        $retour_jeux = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $retour_jeux;
}