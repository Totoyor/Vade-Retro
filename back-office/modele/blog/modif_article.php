<?php

// Modèle lire_article

function lire_article($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_blog_articles WHERE id_article = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $artModif = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $artModif;
}


// Modèle modif_article

function modif_article($id, $titre, $auteur, $descr, $image_save) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("UPDATE vr_blog_articles SET titre_article = :titre, auteur_article = :auteur, descr_article = :descr, img_article = :image WHERE id_article = :id"); 
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':titre', $titre, PDO::PARAM_STR);
        $query->bindValue(':auteur', $auteur, PDO::PARAM_STR);
        $query->bindValue(':descr', $descr, PDO::PARAM_STR);
        $query->bindValue(':image', $image_save, PDO::PARAM_STR);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}