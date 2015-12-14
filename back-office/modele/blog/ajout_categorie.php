<?php

// Modèle back-office/ajout_categorie

function ajout_categorie($titre, $date) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("INSERT INTO vr_blog_categorie (nom_categorie, date_categorie) 
                                        VALUES (:nom, :date)");
        $query->bindValue(':nom', $titre, PDO::PARAM_STR);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->execute();
        return true;
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }

}