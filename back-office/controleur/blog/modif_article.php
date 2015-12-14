<?php

// Controleur secondaire - back-office/modif_article

if (!isset($_SESSION["admin"])) {
    header('Location:?module=admin&action=login_admin');
}

else {

    // GET
    $id = $_GET["id"];


    if (isset($_GET["id"]) && isset($_GET["modif"])) {

        // POST
        $titre = $_POST["nom"];
        $auteur = $_POST["auteur"];
        $descr = $_POST["descr"];
        
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

        include("modele/blog/modif_article.php");

        $modifArticle = modif_article($id, $titre, $auteur, $descr, $image_save);
        $artModif = lire_article($id);
        }
    }

    elseif (isset($_GET["id"])) {
        include("modele/blog/modif_article.php");

        $artModif = lire_article($id);
    }

    include_once("vue/blog/modif_article.php");
}