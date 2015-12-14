<?php

// Modèle requête supprimer_user

function suppr_user($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("DELETE FROM vr_user WHERE id_user = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}