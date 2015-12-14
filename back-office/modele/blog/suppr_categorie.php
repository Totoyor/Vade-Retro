<?php

// Modèle requête supprimer_categorie

function suppr_categorie($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("DELETE FROM vr_blog_categorie WHERE id_blog_categorie = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}