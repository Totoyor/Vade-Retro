<?php
try
{
    $dns = '<YOUR_HOST>';
    $utilisateur = '<YOUR_USERNAME>';
    $motDePasse = '<YOUR_PASSWORD>';

    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    $connexion = new PDO ( $dns, $utilisateur, $motDePasse, $options );
}
catch ( Exception $e )
{
    echo "Connexion à MYSQL impossible : ".$e->getMessage();
    die();
}