<?php

// Modèle ajout_jeux

function ajout_jeux($ref, $nom, $descr, $annee, $prix, $prixht, $tva, $stock, $date, $image, $console) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("INSERT INTO vr_prod_jeux (ref_jeux, nom_jeux, descr_jeux, annee_jeux, prix_ttc_jeux, prix_ht_jeux, tva_jeux, stock_jeux, date_jeux, image_jeux, vr_prod_console_id_console) 
                                        VALUES (:ref, :nom, :descr, :annee, :prix, :prixht, :tva, :stock, :date, :image, :console)");
        $query->bindValue(':ref', $ref, PDO::PARAM_STR);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':descr', $descr, PDO::PARAM_STR);
        $query->bindValue(':annee', $annee, PDO::PARAM_INT);
        $query->bindValue(':prix', $prix, PDO::PARAM_INT);
        $query->bindValue(':prixht', $prixht, PDO::PARAM_INT);
        $query->bindValue(':tva', $tva, PDO::PARAM_INT);
        $query->bindValue(':stock', $stock, PDO::PARAM_INT);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->bindValue(':image', $image, PDO::PARAM_STR);
        $query->bindValue(':console', $console, PDO::PARAM_INT);
        $query->execute();
        return true;
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    
}