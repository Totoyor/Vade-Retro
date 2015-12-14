<?php

// Modèle lire_article

function lire_article($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_blog_articles
                                        where id_article = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $article = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connection à MYSQL impossible : ".$e->getMessage();
    }
    return $article;
}