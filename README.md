# Vade-Retro

Vade-Rétro est un site fictif de vente de jeux-vidéos et de consoles rétro gaming !
Il a été crée dans le cadre du projet de fin d'année de l'EEMI (École Européenne des métiers de l'internet) en deuxième année.

  - Vente de packs rétrogaming (Console + manettes + jeux)
  - Rachat de consoles et de jeux vidéos rétros

### Version
1.0

### Technos
Vade-Retro n'utilise aucun framework :
* Aucun Framework CSS n'était autorisé
* Aucun Framework PHP n'était autorisé
* Tout est donc fait "Maison"

Excepté pour le back-office :
* [Bootstrap] - Un thème gratuit de back office basé sur Bootstrap 3


### Installation

Installation via le Terminal :

```sh
$ git init
$ git clone https://github.com/Totoyor/Vade-Retro
```

Il faut ensuite changer le fichier qui gère PDO :
* 1. Changez vos information de base de donnée dans `modele/pdo-sample.php`
* 2 .Renommez-le en pdo.php

### Base de données

Une base de donnée comprenant tous les jeux et consoles du site est disponible :
* 1. Créer une base de donnée nommée 'vanwelde'
* 2. Installer le fichier vanwelde.sql dans votre la base de donnée 'vanwelde'

Accéder au back-office :

Il faut d'abord changer le fichier qui gère PDO pour le back-office :
* 1. Changez vos information de base de donnée dans `back-office/modele/pdo-sample.php`
* 2. Renommez-le en pdo.php

Un compte admin par défaut est inclus dans la base de donnée :
```sh
username  = admin@mail.fr
password = admin
```


### Développement
Nous étions 4 dans ce projet :

* 1 Développeur ([Thomas Vanwelden](https://github.com/Totoyor))
* 2 Designers (Nicolas Mimault & Julien Simon)
* 1 Webmarketeur (Antonia Louveau)


### Démo

- [Démo](http://vanwelde.etudiant-eemi.com/perso/Vade-Retro/)


[//]: # (Liens)

   [Bootstrap]: <http://twitter.github.com/bootstrap/>

