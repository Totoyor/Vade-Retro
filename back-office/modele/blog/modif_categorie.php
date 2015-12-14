<?php

// Modèle lire_categorie

function lire_categorie($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_blog_categorie WHERE id_blog_categorie = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $catModif = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $catModif;
}


// Modèle modif_categorie

function modif_categorie($id, $titre) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("UPDATE vr_blog_categorie SET nom_categorie = :titre WHERE id_blog_categorie = :id"); 
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':titre', $titre, PDO::PARAM_STR);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}