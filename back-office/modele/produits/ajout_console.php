<?php

// Modèle ajout_console

function ajout_console($ref, $nom, $descr, $annee, $prix, $prixht, $tva, $stock, $date, $image_save) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("INSERT INTO vr_prod_console (ref_console, nom_console, descr_console, annee_console, prix_ttc_console, prix_ht_console, tva_console, stock_console, date_console, image_console) 
                                        VALUES (:ref, :nom, :descr, :annee, :prix, :prixht, :tva, :stock, :date, :image)");
        $query->bindValue(':ref', $ref, PDO::PARAM_STR);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':descr', $descr, PDO::PARAM_STR);
        $query->bindValue(':annee', $annee, PDO::PARAM_INT);
        $query->bindValue(':prix', $prix, PDO::PARAM_INT);
        $query->bindValue(':prixht', $prixht, PDO::PARAM_INT);
        $query->bindValue(':tva', $tva, PDO::PARAM_INT);
        $query->bindValue(':stock', $stock, PDO::PARAM_INT);
        $query->bindValue(':date', $date, PDO::PARAM_STR);
        $query->bindValue(':image', $image_save, PDO::PARAM_STR);
        $query->execute();
        return true;
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }

}