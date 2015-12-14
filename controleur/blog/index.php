<?php

// Controleur secondaire - blog/index


// Afficher les bons articles en fonction de la page

if (!isset($_GET["page"])) {
    $page = 1;
}
else {
    // Ajouter des tests
    $page = $_GET["page"];
}

$offset = ($page -1) * MAXART;


include_once("modele/blog/lire_articles.php");
include_once("modele/blog/lire_categories.php");

$articles = lire_articles();
$categories = lire_categories();

//$articles = lire_articles($offset, MAXART);


include_once("vue/blog/index.php");