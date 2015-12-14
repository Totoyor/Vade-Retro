<?php

// Modèle lire_jeu ($id)

function lire_jeu($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_jeux WHERE id_jeux = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $lireJeu = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $lireJeu;
}


// Modèle modif_jeu

function modif_jeu($id, $ref, $nom, $descr, $prixttc, $prixht, $tva, $annee, $stock, $console) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("UPDATE vr_prod_jeux SET ref_jeux = :ref, nom_jeux = :nom, descr_jeux = :descr, prix_ttc_jeux = :prixttc, prix_ht_jeux = :prixht, tva_jeux = :tva, annee_jeux = :annee, stock_jeux = :stock, vr_prod_console_id_console = :console WHERE id_jeux = :id"); 
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':ref', $ref, PDO::PARAM_STR);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':descr', $descr, PDO::PARAM_STR);
        $query->bindValue(':prixttc', $prixttc, PDO::PARAM_INT);
        $query->bindValue(':prixht', $prixht, PDO::PARAM_INT);
        $query->bindValue(':tva', $tva, PDO::PARAM_INT);
        $query->bindValue(':annee', $annee, PDO::PARAM_INT);
        $query->bindValue(':stock', $stock, PDO::PARAM_INT);
        $query->bindValue(':console', $console, PDO::PARAM_INT);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }

}