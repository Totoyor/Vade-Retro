<?php

// Modèle requête supprimer_article

function suppr_article($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("DELETE FROM vr_blog_articles WHERE id_article = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}