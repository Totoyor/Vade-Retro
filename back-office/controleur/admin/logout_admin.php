<?php

// Destruction des variables de session
session_unset();

// Détruire la session
session_destroy();

// Effacer le cookie (si il y a)


// Rediriger vers page d'accueil
header("Location: ?");