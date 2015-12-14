<?php

// Modèle requête supprimer_console

function suppr_console($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("DELETE FROM vr_prod_console WHERE id_console = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}