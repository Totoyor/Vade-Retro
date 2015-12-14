<?php

// Modèle back-office/ajout_article

function ajout_article($titre, $auteur, $descr, $image_save, $date) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("INSERT INTO vr_blog_articles (titre_article, auteur_article,  descr_article, img_article, date_article) 
                                        VALUES (:nom, :auteur, :descr, :image, :date)");
        $query->bindValue(':nom', $titre, PDO::PARAM_STR);
        $query->bindValue(':auteur', $auteur, PDO::PARAM_STR);
        $query->bindValue(':descr', $descr, PDO::PARAM_STR);
        $query->bindValue(':image', $image_save, PDO::PARAM_STR);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->execute();
        return true;
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }

}