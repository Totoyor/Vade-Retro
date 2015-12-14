<?php

// Modèle lire_articles

function lire_articles() {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("select * from vr_blog_articles 
                                        order by date_article desc");
        //$query->bindValue(':limite', $limite, PDO::PARAM_INT);
        //$query->bindValue(':offset', $offset, PDO::PARAM_INT);
        $query->execute();
        $articles = $query->fetchAll();
    }
    catch (Exception $e) {
            echo "Connection à MYSQL impossible : ".$e->getMessage();
    }
    return $articles;
}