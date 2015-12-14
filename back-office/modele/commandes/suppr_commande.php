<?php

// Modèle requête supprimer_commande

function suppr_commande($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("DELETE FROM vr_commandes WHERE id_commande = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}