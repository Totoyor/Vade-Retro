<?php

// Modèle login_admin

function login_admin($email, $mdp) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_admin
                                        WHERE mail_admin = :mail
                                        AND password_admin = :mdp");
        $query->bindValue(':mail', $email, PDO::PARAM_STR);
        $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
        $query->execute();
        $admin = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $admin;
}