<?php

// Modèle login_user

function login_user($mail, $password_md5) {
    
    global $connexion;
    
    try {
        $query = $connexion->prepare("SELECT * FROM vr_user
                                        WHERE mail_user = :mail
                                        AND password_user = :password");
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->bindValue(':password', $password_md5, PDO::PARAM_STR);
        $query->execute();
        $user = $query->fetch();
    }
    catch (Exception $e) {
            echo "Connexion à MYSQL impossible : ".$e->getMessage();
    }
    return $user;
}