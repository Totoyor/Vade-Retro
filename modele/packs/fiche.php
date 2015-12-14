<?php

// Modèle lire_console ($id)

function lire_console($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_prod_console WHERE id_console = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $console_aff = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $console_aff;
}