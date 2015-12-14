<?php

// Controleur secondaire blog/article

if (isset($_GET["id"])) {
    
    include_once("modele/blog/lire_article.php");

    $article = lire_article($_GET["id"]);
}




//var_dump($article);
/**
include_once("modele/blog/lire_commentaires.php");
$commentaires = lire_commentaires($_GET["id"]);

**/

include_once("vue/blog/article.php");