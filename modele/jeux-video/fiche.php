<?php

// Modèle lire_jeu ($id)

function lire_jeu($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_jeux, vr_prod_console
                                        WHERE id_jeux = :id
                                        AND vr_prod_console_id_console = id_console");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $lireJeu = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $lireJeu;
}