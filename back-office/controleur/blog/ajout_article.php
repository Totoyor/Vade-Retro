<?php

// Controleur secondaire - back-office/ajout_article

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    if (isset($_POST["nom"])) {

        $titre = $_POST["nom"];
        $auteur = $_POST["auteur"];
        $descr = $_POST["descr"];
        $date = date("Y-m-d H:i:s");
        
        // Ajout d'une image
        if (isset($_FILES["image"])) {
            
            // Controller l'extension de l'image
            $ext = array('jpg', 'jpeg', 'gif', 'png');
            $ext_upload =  strtolower(substr(strrchr($_FILES["image"]["name"], '.') ,1));
            if (in_array($ext_upload, $ext)) {
                // Création du nom et enregistrement de l'image
                $size = getimagesize($_FILES["image"]["tmp_name"]);
                $url_image = md5(uniqid(rand(), true));
                $exp_image = explode(".",$_FILES['image']['name']);
                move_uploaded_file($_FILES['image'] ['tmp_name'],"../assets/images/".$url_image.".".$exp_image[count($exp_image)-1]);
                $image_save = $url_image.".".$exp_image[count($exp_image)-1];
            }

        include_once("modele/blog/ajout_article.php");
        if (ajout_article($titre, $auteur, $descr, $image_save, $date) == false) {
            //Ajout non réussi;
            header("Location:?module=blog&action=ajout_article&m=nok");
        }
        else {
            //Ajout réussi;
            header("Location:?module=blog&action=ajout_article&m=ok");
        }

    }
}

    include_once("vue/blog/ajout_article.php");
}