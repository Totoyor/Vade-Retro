<?php

// Modèle lire_commentaires

function lire_commentaires($id) {
    
 //echo "modele lire_commentaires"; 
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("select * from blog_comments 
                                        where comment_post_ID = :id
                                        order by comment_date desc");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $article = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connection à MYSQL impossible : ".$e->getMessage();
    }
    return $commentaires;
}