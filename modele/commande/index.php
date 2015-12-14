<?php

// Modèle lire_user

function lire_user($id) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_user WHERE id_user = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $user_account = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $user_account;
}