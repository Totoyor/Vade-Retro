<?php

// Modèle requête supprimer_jeu

function suppr_jeu($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("DELETE FROM vr_prod_jeux WHERE id_jeux = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}