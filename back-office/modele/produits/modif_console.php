<?php

// Modèle lire_console ($id)

function lire_console($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_console WHERE id_console = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $consModif = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $consModif;
}


// Modèle modif_console

function modif_console($id, $ref, $nom, $descr, $prixttc, $prixht, $tva, $annee, $stock, $image) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("UPDATE vr_prod_console SET ref_console = :ref, nom_console = :nom, descr_console = :descr, prix_ttc_console = :prixttc, prix_ht_console = :prixht, tva_console = :tva, annee_console = :annee, stock_console = :stock, image_console = :image WHERE id_console = :id"); 
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':ref', $ref, PDO::PARAM_STR);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':descr', $descr, PDO::PARAM_STR);
        $query->bindValue(':prixttc', $prixttc, PDO::PARAM_INT);
        $query->bindValue(':prixht', $prixht, PDO::PARAM_INT);
        $query->bindValue(':tva', $tva, PDO::PARAM_INT);
        $query->bindValue(':annee', $annee, PDO::PARAM_INT);
        $query->bindValue(':stock', $stock, PDO::PARAM_INT);
        $query->bindValue(':image', $image, PDO::PARAM_STR);
        $query->execute();
        return true;
  
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return false;
}