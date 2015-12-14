-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Lun 14 Décembre 2015 à 18:24
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `vanwelde`
--

-- --------------------------------------------------------

--
-- Structure de la table `vr_admin`
--

CREATE TABLE `vr_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(50) NOT NULL,
  `prenom_admin` varchar(50) NOT NULL,
  `mail_admin` varchar(50) NOT NULL,
  `password_admin` varchar(32) NOT NULL,
  `date_admin` datetime NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `mail_admin_UNIQUE` (`mail_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `vr_admin`
--

INSERT INTO `vr_admin` (`id_admin`, `nom_admin`, `prenom_admin`, `mail_admin`, `password_admin`, `date_admin`) VALUES
(6, 'Admin', 'Admin', 'admin@mail.fr', '21232f297a57a5a743894a0e4a801fc3', '2015-03-16 18:33:32'),
(7, 'test', 'test', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6', '2015-03-19 16:04:14');

-- --------------------------------------------------------

--
-- Structure de la table `vr_blog_articles`
--

CREATE TABLE `vr_blog_articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre_article` varchar(100) NOT NULL,
  `auteur_article` varchar(45) NOT NULL,
  `descr_article` varchar(2000) NOT NULL,
  `img_article` varchar(45) DEFAULT NULL,
  `date_article` datetime NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `vr_blog_articles`
--

INSERT INTO `vr_blog_articles` (`id_article`, `titre_article`, `auteur_article`, `descr_article`, `img_article`, `date_article`) VALUES
(1, 'DQN, l’intelligence artificielle fan de rétrogaming', 'Antonia Louveau', 'Si beaucoup de personnes aiment jouer aux jeux vidéo, en maîtriser toutes les mécaniques ou obtenir un score élevé peut s’avérer être une mission difficile. Mais les chercheurs du laboratoire Deep Mind de Google ont donné naissance à un joueur d’un nouveau genre : DQN. Derrière ces initiales ne se cachent pas une personne ou même un robot, mais un logiciel unique capable d’apprendre seul à jouer aux jeux vidéo.\r\n\r\nDes logiciels sachant jouer aux jeux vidéo existent déjà depuis plusieurs années. Mais là où DQN est différent, c’est que contrairement aux autres intelligences artificielles qui ne sont programmées que pour jouer à un jeu dont elles connaissent les règles, lui les ignore totalement et les apprend en jouant. Comme un humain qui découvre un titre pour la première fois. Et le moins que l’on puisse dire, c’est que le logiciel possède un certain talent.\r\n\r\nPour tester ses facultés, les chercheurs ont confronté DQN à 49 jeux issus du catalogue de l’Atari 2600. Et sur les 49 titres, DQN a réussi à égaler sur 28 d’entre eux le score que peut obtenir un bon joueur humain. Comme tous les joueurs, DQN a une stratégie : il se base sur les compteurs de score (présents dans les jeux de cette période) et définit en fonction de son expérience de jeu les actions qui lui rapporteront le plus de points. Et si le logiciel a pu jouer à Space Invaders, Pong ou Q-Bert, ses jeux fétiches sont Breakout, Boxing et Video Pinball.\r\n\r\nS’il est un bon joueur, DQN n’est pas pour autant le joueur ultime. Définir une stratégie sur un jeu récent ou sur un titre complexe comme un Zelda est encore impossible pour lui. Mais ses impressionnantes capacités, proche du comportement d’un cerveau humain, pourraient dans l’avenir être utilisées en médecine. Un petit pas pour le jeu vidéo, un grand pas pour les intelligences artificielles.', '213ffb0592cad87f190d49abbe197233.png', '2015-03-16 19:12:11'),
(2, 'Japan Expo 16e Impact', 'Thomas Vanwelden', 'Après un 15e anniversaire célébré en grande pompe, Japan Expo continue sur sa lancée et revient en 2015, comme à son habitude le premier week-end de juillet, pour 4 jours de divertissement, de découverte et de passion autour de la culture japonaise !\r\n\r\nVous pouvez dès maintenant noter les dates : le rendez-vous annuel de la culture et des loisirs japonais aura lieu en 2015 du 2 au 5 juillet, au Parc des Expositions de Paris-Nord Villepinte, pour Japan Expo 16e Impact !\r\n\r\nPréparez-vous à embarquer pour 4 jours entièrement dédiés au Japon et à sa culture : que vous soyez du genre curieux ou passionné depuis toujours, amoureux des traditions ou fan de manga, de J-music ou de jeux vidéo, c’est un petit bout de Japon qui vient à vous pendant ces quelques jours.\r\n\r\nVenez rencontrer les plus grands noms du manga et de l’animation, écouter les artistes phare de la J-music ou les stars de demain, assister aux shows grandioses de la scène principale, déguster les plats emblématiques de la cuisine japonaise, découvrir les prochaines sorties jeux vidéo en avant-première, vivre l’expérience du Japon traditionnel, déambuler dans les allées aux côtés des cosplayers les plus talentueux, et tout simplement vous amuser et profiter de ce moment unique.', 'c792cee4197ea245435bfda7cca334cf.png', '2015-03-16 19:12:39'),
(3, 'Les RetroGaming Days sont de retour du 28 au 29 mars pour sa 4e édition', 'Julien SImon', 'Les passionnés se retrouveront lors de tournois sur consoles rétro, un quizz de culture rétro-vidéoludique, et des consoles et bornes d''arcade en libre service. Les RetroGaming Days sont deux journées pour jouer et (re)découvrir l''histoire des jeux vidéos. Ouverts à tous, petits et grands, entrez dans le monde fabuleux du pixel, le tout dans une ambiance familiale, passionnée, et surtout ludique.\r\n\r\nRassemblant en un même lieu des machines de toutes les époques, venez jouer en libre service à des consoles emblématiques ayant bercé votre enfance, des ordinateurs à l''origine de la création des jeux vidéos, des bornes d''arcade, des systèmes importés du Japon et des Etats Unis jamais sortis sur notre continent, et plus encore...\r\n\r\nAu travers de tournois, tests musicaux, animations, exposants, invités, etc... l''association "Retro Event" vous accueillera à cet évènement annuel autour d’une même passion, le retrogaming. L’an dernier, 1500 visiteurs ont fait le succès de la troisième édition.', 'ea3d3a3f0281fc52b64dd8e846b39ecf.jpg', '2015-03-16 19:13:09'),
(4, 'Celio lance une collection dédiée au rétrogaming', 'Nicolas Mimault', 'Il est loin, le temps de la naissance de Mario ou Sonic. Désormais, le plombier à grosse moustache est obligé de passer dans tout un tas de pubs où les personnes présentes parlent à leur console pour se vendre. Évidemment ça ne fait pas vraiment rêver, mais c’est ainsi, il faut pouvoir écouler les stocks.\r\n\r\nSi vous êtes un peu nostalgique des débuts de Nintendo, une partie de la nouvelle collection de Celio devrait vous plaire (ou plaire à vos amis ou votre famille) ! À partir d’aujourd’hui sur Internet et début août dans les magasins, la grande enseigne va commercialiser tout un tas de vêtements se basant sur le rétrogaming. Des slips, des casquettes, des sacs, des t-shirts aux couleurs des jeux vidéo des années 80/90… Vous aurez de quoi vous faire sponsoriser par Sega ou Atari pendant des semaines entières.\r\n\r\nCôté carte bancaire, toute la gamme de vêtements reste très abordable avec des prix variants de 13,99€ à 39,99€. Pour découvrir la collection, rendez-vous sur le site de Celio, où elle sera bientôt mise en ligne, ainsi qu’en boutiques !', '22a4dae42435cf6f135e6764cd3d5f89.jpg', '2015-03-16 19:13:41'),
(5, 'La Gaming Expo de SXSW', 'Antonia Louveau', 'Il suffit de traverser le pont qui enjambe le fleuve Colorado pour accéder à la Gaming Expo, l''extension dédiée au jeu que le festival SXSW a initiée en 2013. Vous avez peu de chance d''y trouver les badges oranges qui caractérisent les participants aux sessions interactives, sur l''autre rive, à quelques minutes à pied pourtant. Un gouffre sépare le monde des hipsters barbus de celui plus coloré des geeks joyeux de la Gaming Expo. Pourtant il y a aussi de l''argent à gagner ici.\r\n \r\nEn trois ans, on ne peut pas dire que l''expérience soit un succès indiscutable.\r\nOn trouve toujours les ténors du marché, représentants les plateformes les plus populaires du secteur, comme Xbox ou Alienware. Mais la Gaming Expo, c''est surtout le lieu où de jeunes éditeurs viennent présenter leurs jeux. D''origines variées, ils proposent souvent des alternatives intéressantes aux grands noms du jeu vidéo. Mais au fil des années, ces éditeurs ont tendance à se réduire. Cette friche expérimentale est une caractéristique notable de l''Expo, qui mériterait d''être développée. Ne comptez pas trouver Ubisoft ou Electronic Arts ici, mais cette offre atypique de jeunes créateurs enthousiastes est un atout indéniable.\r\n \r\nPour diversifier et sans doute rendre l''événement un peu plus vivant, le festival a, dès 2014, commençé à organiser des compétitions quotidiennes durant les trois jours de l''Expo, avec comme point d''orgue une remise de prix, les Gaming Awards. L''accès au public a aussi été ouvert. Ces deux nouveautés ont radicalement modifié l''ambiance. Tout est devenu plus bruyant et la moyenne d''âge s''est considérablement rajeunie. Des "LAN parties" géantes (plus de 100 machines connectées), en accès libre, sont organisées dans des salles annexes.\r\n \r\nCette année, la VR d''Oculus, ou d''autres opérateurs de cette technologie, est visible sur nombre de stands, même si le casque n''est pas encore disponible dans le commerce. Une dizaine d''éditeurs travaillent à des jeux, et quelques équipes de développe', '09912327b83d1fc7e7bde4e5eb7ea0f9.jpg', '2015-03-18 16:03:57'),
(6, 'R-Kaid-R : la console idéale pour les rétrogamers', 'Nicolas Mimault', 'La console R-Kaid-R est l''accessoire indispensable pour tous les inconditionnels du retrogaming. Le système d''exploitation intégré permet de faire tourner des jeux d''anciennes consoles comme la Super NES, la PS One, la Megadrive, la Neo Geo et même l''Atari 2600 et quelques anciens titres qui tournaient sur PC. Cure de jouvence garantie avec des jeux comme Megaman ou Doom. Pour s''attacher les services de cette console d''exception, il ne faudra pas trop tarder puisqu''elle est produite à seulement 50 exemplaires. Du côté du prix, préparez-vous à casser votre image.\r\n tirelire et à débourser 2499 euros. Elle est disponible uniquement sur le site de la marque suédoise Love Hultèn. \r\n\r\nEn dehors de sa compatibilité avec de nombreux titres, la console R-Kaid-R séduit par son design particulièrement soigné. Le boîtier est en bois et les 50 consoles sont entièrement assemblées à la main pour une qualité de finition exceptionnelle. Un joystick et neuf gros boutons ronds vous replongeront immédiatement dans les salles d''arcade de votre enfance. Détail ultime, le joystick s''enlève pour servir de système de fermeture du boitier en bois. L''écran est un modèle huit pouces et la console dispose d''un port SD et d''un port USB.  \r\n', '493e595215428415a913d282aa25495a.jpg', '2015-03-18 16:06:36');

-- --------------------------------------------------------

--
-- Structure de la table `vr_blog_articles_has_vr_blog_categorie`
--

CREATE TABLE `vr_blog_articles_has_vr_blog_categorie` (
  `vr_blog_articles_id_article` int(11) NOT NULL,
  `vr_blog_categorie_id_blog_categorie` int(11) NOT NULL,
  PRIMARY KEY (`vr_blog_articles_id_article`,`vr_blog_categorie_id_blog_categorie`),
  KEY `fk_vr_blog_articles_has_vr_blog_categorie_vr_blog_categorie_idx` (`vr_blog_categorie_id_blog_categorie`),
  KEY `fk_vr_blog_articles_has_vr_blog_categorie_vr_blog_articles1_idx` (`vr_blog_articles_id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vr_blog_categorie`
--

CREATE TABLE `vr_blog_categorie` (
  `id_blog_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(45) NOT NULL,
  `date_categorie` datetime DEFAULT NULL,
  PRIMARY KEY (`id_blog_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `vr_blog_comment`
--

CREATE TABLE `vr_blog_comment` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `nom_comment` varchar(250) NOT NULL,
  `date_comment` datetime NOT NULL,
  `vr_user_id_user` int(11) NOT NULL,
  `vr_blog_articles_id_article` int(11) NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `fk_vr_blog_comment_vr_user1_idx` (`vr_user_id_user`),
  KEY `fk_vr_blog_comment_vr_blog_articles1_idx` (`vr_blog_articles_id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `vr_commandes`
--

CREATE TABLE `vr_commandes` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `ref_commande` varchar(5) NOT NULL,
  `montant_commande` int(11) NOT NULL,
  `qt_commande` int(11) NOT NULL,
  `livraison_commande` varchar(45) NOT NULL,
  `date_commande` datetime NOT NULL,
  `validation_commande` varchar(3) DEFAULT NULL,
  `vr_user_id_user` int(11) NOT NULL,
  `vr_prod_console_id_console` int(11) NOT NULL,
  PRIMARY KEY (`id_commande`),
  UNIQUE KEY `ref_commande_UNIQUE` (`ref_commande`),
  KEY `fk_vr_commandes_vr_user_idx` (`vr_user_id_user`),
  KEY `fk_vr_commandes_vr_prod_console1_idx` (`vr_prod_console_id_console`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Structure de la table `vr_commandes_has_vr_prod_jeux`
--

CREATE TABLE `vr_commandes_has_vr_prod_jeux` (
  `vr_commandes_id_commande` int(11) NOT NULL,
  `vr_prod_jeux_id_jeux` int(11) NOT NULL,
  PRIMARY KEY (`vr_commandes_id_commande`,`vr_prod_jeux_id_jeux`),
  KEY `fk_vr_commandes_has_vr_prod_jeux_vr_prod_jeux1_idx` (`vr_prod_jeux_id_jeux`),
  KEY `fk_vr_commandes_has_vr_prod_jeux_vr_commandes1_idx` (`vr_commandes_id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vr_contact`
--

CREATE TABLE `vr_contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nom_contact` varchar(45) NOT NULL,
  `prenom_contact` varchar(45) NOT NULL,
  `mail_contact` varchar(45) NOT NULL,
  `objet_contact` varchar(45) NOT NULL,
  `message_contact` varchar(500) NOT NULL,
  `date_contact` datetime NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Structure de la table `vr_newsletter`
--

CREATE TABLE `vr_newsletter` (
  `id_newsletter` int(11) NOT NULL AUTO_INCREMENT,
  `email_newsletter` varchar(45) NOT NULL,
  `date_newsletter` datetime NOT NULL,
  PRIMARY KEY (`id_newsletter`),
  UNIQUE KEY `email_newsletter_UNIQUE` (`email_newsletter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Structure de la table `vr_prod_console`
--

CREATE TABLE `vr_prod_console` (
  `id_console` int(11) NOT NULL AUTO_INCREMENT,
  `ref_console` varchar(5) NOT NULL,
  `nom_console` varchar(45) NOT NULL,
  `descr_console` varchar(1000) NOT NULL,
  `prix_ttc_console` float NOT NULL,
  `prix_ht_console` float NOT NULL,
  `tva_console` float DEFAULT NULL,
  `annee_console` int(4) NOT NULL,
  `stock_console` int(11) NOT NULL,
  `image_console` varchar(40) DEFAULT NULL,
  `date_console` datetime NOT NULL,
  PRIMARY KEY (`id_console`),
  UNIQUE KEY `ref_console_UNIQUE` (`ref_console`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `vr_prod_console`
--

INSERT INTO `vr_prod_console` (`id_console`, `ref_console`, `nom_console`, `descr_console`, `prix_ttc_console`, `prix_ht_console`, `tva_console`, `annee_console`, `stock_console`, `image_console`, `date_console`) VALUES
(1, 'CR420', 'Nintendo 64', 'Elle fut la dernière des consoles de cinquième génération à être sortie, en concurrence avec la Saturn et la PlayStation. La Nintendo 64 a plusieurs particularités : c''est une console « 64 bits » contrairement à ses principales concurrentes dites « 32 bits » ; l''entreprise a préféré le support cartouche, plus rentable pour Nintendo mais plus contraignant pour le développement et plus cher que le support CD proposé par ses concurrents ; elle innove en instaurant un joystick sur sa manette qui se révélera indispensable pour la 3D en temps réel ; et instaurera le multijoueurs jusqu''à quatre simultanément.', 165, 150, 10, 1997, 15, '5ad3a2ff4afc3008fe87d09c719f446f.jpg', '2015-03-16 16:43:39'),
(2, 'PL345', 'Playstation', 'La PlayStation une console de jeux vidéo de cinquième génération, produite par Sony Computer Entertainment à partir de 1994. La PlayStation originale fut la première machine de la gamme PlayStation, décliné ensuite en PSone (une version plus petite et plus légère que l''originale). Le 18 mai 2004, soit près de dix ans après son lancement, Sony annonce avoir distribué 100 millions de consoles dans le monde et plus de 962 millions de jeux PlayStation.', 110, 100, 10, 1995, 10, '1336c03367f44b36d3362a53a318fed0.jpg', '2015-03-16 16:51:12'),
(3, 'MD456', 'Mega Drive', 'Console de jeux vidéo de quatrième génération, conçue et commercialisée par Sega, il s’agit d’une console de salon. Conçue par une équipe de recherche et développement supervisée par Masami Ishikawa, le hardware de la Mega Drive est adapté du System 16 pour borne d''arcade, centré autour du microprocesseur Motorola 68000 en tant que processeur principal et du Zilog Z80 comme processeur secondaire. Le système prend en charge une ludothèque de plus de 900 jeux créés par Sega et par un large éventail d''éditeurs tiers, publiés sous forme de cartouche de jeu vidéo. La console est également compatible avec l’entièreté de la ludothèque de jeux Master System lorsque le Master System Converter est installé.', 165, 150, 10, 1990, 5, '814f7daa67764c5293e3454a2e4abe4f.jpg', '2015-03-16 17:07:50'),
(4, 'GB730', 'GameBoy', 'Console portable de jeux vidéo 8-bits de quatrième génération développée et fabriquée par Nintendo. Elle est initialement commercialisée au Japon le 21 avril 1989, puis en Amérique du Nord en octobre 1989, et en Europe le 28 septembre 1990. Elle est la première console portable de la gamme des Game Boy, elle est conçue par Gunpei Yokoi et Nintendo Research & Development 1 — la même équipe ayant conçu la série des Game and Watch ainsi que de nombreux jeux popularisés sur Nintendo Entertainment System.', 33, 30, 10, 1990, 20, '53616af170af5b81fab709d0da412d10.jpg', '2015-03-16 17:08:55'),
(5, 'NE321', 'NES', 'Pendant longtemps, la NES / Famicom a été la console de salon la plus vendue de Nintendo avec presque 62 millions d’unités écoulées. C’est seulement la Wii, courant 2009, qui a détrônée sont illustre ancêtre. Console de légende, elle a vue naître de nombreux personnages devenus emblématiques : Link, Samus, Bowser, Popo & Nana, etc… Le succès de la console fut énorme au Japon et en Amérique du Nord, ce qui aida à redynamiser l''industrie du jeu vidéo après le krach du jeu vidéo de 1983, et ce qui fixa les normes pour les consoles suivantes, du game design (Super Mario Bros. était le premier jeu vidéo qui justifiait l''achat de la console à lui tout seul, autrement dit un killer game) aux procédures de gestion.', 110, 100, 10, 1985, 20, '7546b815eef88600bfb796e27698d109.jpg', '2015-03-16 17:09:49'),
(6, 'SN964', 'Super Nintendo', 'En entier “Super Nintendo Entertainment System” ou appelée également “Super Famicon”. Face à la montée en puissance de Sega sur le marché européen, Nintendo réplique avec sa nouvelle console Super Nintendo, digne héritière de la NES. Lors de sa sortie en Europe en 1992, la console 16-bit fait sensation avec sa manette 6 boutons et son affichage 256 couleurs simultanées. La guerre entre les deux fabricants faisait rage et la Megadrive n''avait qu''à bien se tenir.', 55, 50, 10, 1992, 15, '750f30558475c120bd5531f466bd655f.jpg', '2015-03-16 17:10:45'),
(7, 'GB012', 'GameBoy Color', 'La Game Boy color, abrégée GBC, est la console de jeux vidéoportable succédant à la Game Boy. Créée par Nintendo, elle incorpore un écran couleur à peine plus grand que celui de la Game Boy. En revanche, son processeur est deux fois plus rapide, et sa mémoire deux fois plus grande. Elle est rétrocompatible avec tous les jeux Game Boy de première génération. La Game Boy Color est disponible en coques de différentes versions : translucide, violet, bleu, vert, fuchsia, jaune, violet translucide. des éditions limités ont également été éditées : Noir translucide, vert translucide, bleu nuit, bleu translucide, orange clair, vert et or et une dizaine d''autres variantes spécifiques, ainsi que 7 versions Pokémon.', 28, 25, 10, 1998, 20, '5f88def7b6a4e401d1bc8265a95b00b9.jpg', '2015-03-16 17:12:10');

-- --------------------------------------------------------

--
-- Structure de la table `vr_prod_jeux`
--

CREATE TABLE `vr_prod_jeux` (
  `id_jeux` int(11) NOT NULL AUTO_INCREMENT,
  `ref_jeux` varchar(5) NOT NULL,
  `nom_jeux` varchar(45) NOT NULL,
  `descr_jeux` varchar(1000) NOT NULL,
  `prix_ttc_jeux` float NOT NULL,
  `prix_ht_jeux` float NOT NULL,
  `tva_jeux` float DEFAULT NULL,
  `annee_jeux` int(4) NOT NULL,
  `stock_jeux` int(11) NOT NULL,
  `image_jeux` varchar(40) DEFAULT NULL,
  `date_jeux` datetime NOT NULL,
  `vr_prod_console_id_console` int(11) NOT NULL,
  PRIMARY KEY (`id_jeux`),
  UNIQUE KEY `ref_console_UNIQUE` (`ref_jeux`),
  KEY `fk_vr_prod_jeux_vr_prod_console1_idx` (`vr_prod_console_id_console`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Contenu de la table `vr_prod_jeux`
--

INSERT INTO `vr_prod_jeux` (`id_jeux`, `ref_jeux`, `nom_jeux`, `descr_jeux`, `prix_ttc_jeux`, `prix_ht_jeux`, `tva_jeux`, `annee_jeux`, `stock_jeux`, `image_jeux`, `date_jeux`, `vr_prod_console_id_console`) VALUES
(8, 'JB007', 'James Bond 007', 'Le Monde ne Suffit Pas sur PlayStation est un jeu de tir à la première personne reprenant l’univers du film éponyme. Dans le costume de 007, vous devrez démêler des complots, faire le ménage et mettre la main sur le mystérieux Renard. De nombreuses armes et divers gadgets vous aideront à mener votre mission à bien.', 6, 5, 10, 2000, 5, 'dd83c4ec9438b90d69475f46f66c0578.jpg', '2015-03-16 17:20:10', 2),
(9, 'AC200', 'Ace Combat 2', 'Ace Combat 2 sur PlayStation est le deuxième opus du jeu qui vous place aux commandes d’un avion de chasse. Vous incarnez ici un mercenaire engagé par des gouvernements pour lutter contre des terroristes. L’argent récolté lors de l’accomplissement des 30 missions servira à acheter armes et équipements.', 6, 5, 10, 1995, 5, 'bb8925072598c476786dd94e1fd729f2.jpg', '2015-03-16 17:21:01', 2),
(10, 'CB256', 'Crash Bandicoot ', 'Crash Bandicoot 2 : Cortex Strikes Back sur PlayStation est un jeu de plates-formes dans lequel vous incarnez le célèbre Crash qui doit aider son ennemi de toujours Neo Cortex à mettre la main sur 100 cristaux afin de sauver le monde d’une terrible menace. Les niveaux sont encore plus nombreux et variés, à l’image des niveaux enneigés très glissants ou d’autres en apesanteur. Certains boss du premier épisode sont de retour comme le mythique Ripper Roo.', 22, 20, 10, 1997, 5, 'ee7223c252c5f9635b349eddbe8cf2ae.jpg', '2015-03-16 17:23:56', 2),
(11, 'SM641', 'Super Mario 64', 'Super Mario 64 sur Nintendo 64 est le premier jeu 3D mettant en scène le plombier. Explorez et découvrez les secrets du château de Peach, trouvez les 120 étoiles et battez Bowser une nouvelle fois. Profitez aussi d’une nouvelle panoplie de mouvements pour le plombier à moustache.', 11, 10, 10, 1996, 3, '988d0f5dcd09c711f45d8c5cd3ec68b9.jpg', '2015-03-16 17:24:53', 1),
(12, 'DA012', 'Dead or Alive', 'Plastique généreuse des combattants, technicité, intensité des affrontements. Voici ce qui caractérise Dead or Alive sur PlayStation, jeu de baston faisant office de figure de proue du genre. Différents personnages aux caractéristiques de combat différentes ainsi que des environnements divers sont au programme de ce soft.', 11, 10, 10, 1998, 5, '1517da773772cb11b08493f08b2652db.jpg', '2015-03-16 17:27:52', 2),
(13, 'LZ659', 'The Legend of Zelda', 'The Legend of Zelda : Ocarina of Time est un jeu d’action/aventure sur Nintendo 64. C’est la première fois que Link évolue dans un univers tout en 3D. Le héros commence son aventure adolescent dans la forêt d’Hyrule en compagnie d’autres enfants. Mais un terrible danger guette ce petit monde féérique : des forces obscures veulent s’emparer de la triforce sacrée, à l’origine de l’équilibre d’Hyrule. À vous de les repousser, pour le bien de la princesse Zelda !', 26, 24, 10, 1998, 6, '47c7c32d9404004ea39598b9ed219209.jpg', '2015-03-16 17:28:58', 1),
(14, 'DB094', 'Diablo', 'Diablo sur PlayStation est un jeu d’action mêlé au jeu de rôle dans lequel vous incarnez un personnage parmi trois classes au choix. Votre but est d’explorer les souterrains d’un château en exterminant les monstres qui s’y trouvent afin d’accumuler de l’expérience et des objets pour devenir de plus en plus fort. Avancez et débusquez le mal au fond de sa tanière : éliminez Diablo pour récupérer la pierre d’âme et ainsi contenir le fléau qui ronge le monde.', 28, 25, 10, 1998, 5, '6692a6e831cdd623727d30cd18263ef0.jpg', '2015-03-16 17:30:19', 2),
(15, 'SB536', 'Super Smash Bros', 'Super Smash Bros est une jeu de combat sur Nintendo 64. Vous incarnez l’un des 8 personnages principaux et pouvez en débloquer 4 cachés. Vous retrouverez donc avec joie tous les petits personnages de l’univers Nintendo : Mario, Link, Kirby, Donkey Kong et les autres. Le jeu propose un mode solo ainsi qu’un mode multijoueurs jouable jusqu’à 4 joueurs.', 38, 35, 10, 1999, 7, '0c8cc5deae8cdec00827599f72402cac.jpg', '2015-03-16 17:30:42', 1),
(16, 'GE007', 'GoldenEye 007', 'GoldenEye 007 est un jeu de tir à la première personne sur Nintendo 64. Votre nom est Bond, James Bond. Vous êtes désigné pour couvrir les opérations en relation avec le satellite armé Golden Eye. Votre mission débute dans un complexe russe et s’étoffera tout au long de 12 environnement variés.', 33, 30, 10, 1997, 5, '5c235a1d6bce590442e69f4cce010f22.jpg', '2015-03-16 17:32:11', 1),
(17, 'MK102', 'Mario Kart 64', 'Mario Kart 64 sur Nintendo 64 est un jeu de courses qui prend place dans l’univers du plombier moustachu. Participez à des courses folles où tout est permis pour remporter la première place. Ramassez des armes sur le terrain pour les lancer à la face de vos poursuivants ou pour booster votre propre kart. ', 21, 19, 10, 1996, 8, 'bd6ed0948b6f1f4a1503d4c47530c53f.jpg', '2015-03-16 17:33:16', 1),
(18, 'DH100', 'Duck Hunt', 'Duck Hunt sur NES est un jeu de tir qui se joue avec le Zapper Light Gun. Vous devez tirer sur les canards que votre chien effraie en faisant bien attention à ne pas le blesser. À chaque round, le chien effraie un certain nombre de canards, vous devez alors les toucher avant qu’ils ne sortent de l’écran, mais attention, vous avez peu de balles alors vous n’avez pas le droit à l’erreur !\r\n', 15, 13, 10, 1987, 5, '94c5797592d8f919bb33dce84b003027.jpg', '2015-03-16 17:33:49', 5),
(19, 'DK641', 'Donkey Kong 64', 'Donkey Kong 64 est un jeu de plates-formes sorti sur Nintendo 64. Tout le clan des Kong est à nouveau en péril à cause de K Rool qui menace leur île avec une nouvelle arme. Incarnez 5 personnages différents dans ce jeu tout en trois dimensions.', 26, 24, 10, 1999, 6, 'febf4c598496a9fb68a41cbcbeec7830.jpg', '2015-03-16 17:34:29', 1),
(20, 'PS645', 'Pokémon Stadium', 'Pokémon Stadium est un jeu d’action sur Nintendo 64. Choisissez un groupe de 6 pokémons et essayez de vaincre tous les dresseurs d’une même arène. À chaque match, vous devez choisir les trois d’entre eux qui vous accompagneront, en fonction des caractéristiques des pokémons adverses.', 11, 10, 10, 1999, 5, 'a0a4a0b93bd43715207e0e9410edf977.jpg', '2015-03-16 17:36:32', 1),
(21, 'BM649', 'Bomberman 64', 'Bomberman 64 est un jeu d’action sur Nintendo 64. Vous incarnez Bomberman, ce joyeux petit amateur d’explosifs, et parcourez des niveaux en faisant exploser tout ce qui se trouve sur votre chemin, qu’il s’agisse de murs ou d’ennemis. Ce soft vous autre 24 niveaux ainsi que la possibilité de personnaliser votre petit poseur de bombes. Bomberman 64 est jouable à 4 sur le même écran.', 26, 24, 10, 1997, 6, '6d010720d16227a8453daceee7476f55.jpg', '2015-03-16 17:37:45', 1),
(23, 'DO041', 'Doom', 'Doom sur PlayStation est un jeu de tir à la première personne. La planète Mars est envahie par des créatures de l’enfer à la suite de plusieurs expériences scientifiques. Vous incarnez un Space Marine qui a été condamné à des travaux forcés sur la planète rouge. Se retrouvant seul dans la base humaine, il tente de survivre en éliminant tous les monstres autour de lui.', 15, 13, 10, 1995, 5, 'ee7a944ec0336d949598ad062680407a.jpg', '2015-03-16 17:38:53', 2),
(24, 'SH080', 'Sonic The Hedgehog', 'Propulsez Sonic, le hérisson bleu le plus rapide sur Terre, à travers d’époustouflants loopings et de vertigineux plongeons, en franchissant de la lave bouillonnante, des cascades et d’innombrables obstacles. Ramassez des rings et arrêtez le Dr. Eggman dans ses plans dans la domination du monde dans Sonic The Hedgehog sur Megadrive.', 6, 5, 10, 1991, 7, '6d986bc8d7d855b394c141629a393fbd.jpg', '2015-03-16 17:42:24', 3),
(25, 'DB431', 'Dragon Ball Z', 'Dragon Ball Z Ultimate Battle 22 sur PlayStation est un jeu de combat basé sur la célèbre franchise. Découvrez un univers mêlant 2D et 3D et regroupant 22 combattants, d’où le titre. Néanmoins, 5 autres personnages sont déblocables et permettent de retrouver, entre autres, un Sangoku juvénile.', 22, 20, 10, 1996, 5, 'f72e3b956ff7573df1f1e79f5f6a04c9.jpg', '2015-03-16 17:42:26', 2),
(26, 'FI200', 'Fifa 2000', 'FIFA 2000 est une jeu de sport sorti sur PlayStation. Les professionnels de la balle au pied se retrouvent encore sur le gazon pour se disputer l’honneur d’être les premiers à mettre le ballon au fond du filet. Choisissez votre équipe et menez-la à la victoire.', 33, 30, 10, 1999, 5, '53a09cb63a60fab36c02ee629a992841.jpg', '2015-03-16 17:43:19', 2),
(27, 'TT236', 'Tetris', 'Tetris sur NES est le célèbre puzzle-game dans lequel vous devez empiler des briques afin de constituer des lignes qui s’effaceront au fur et à mesure de votre progression. La difficulté augmente au fil de votre avancée. Cette version de Nintendo propose deux modes : le mode 1 où il faut assembler les blocs à l’infini et le mode B où il faut simplement réaliser 25 lignes.\r\n', 9, 8, 10, 1990, 5, '363391982c3d1ca1cb78bfdf8803950e.jpg', '2015-03-16 17:43:42', 5),
(28, 'AL971', 'Aladdin', 'Reprenant les différences séquences du film d’animation de Disney, Aladdin sur Megadrive permet de retrouver tous les personnages de l’histoire. Ce jeu de plates-formes propose effectivement de suivre Aladdin des rues d’Agrabah aux couloirs du palais royale en passant bien sûr par la célèbre caverne aux merveilles. Le Génie est aussi de la partie et permet de gagner des bonus.', 14, 13, 10, 1993, 8, '61424ca38de9cf61b1fe7a5b94e64103.jpg', '2015-03-16 17:43:49', 3),
(29, 'SS038', 'Super Street Fighter II : The New Challengers', 'Super Street Fighter II : The New Challengers est une variante de Street Fighter II sorti en 1994 sur Megadrive. Quatre nouveaux personnages sont au programme, en plus des boss cachés dans le jeu original, portant le nombre de personnages à un total de 16. Les fonctions multijoueurs apportent également des nouveautés avec le mode élimination et le mode tournoi à huit. Enfin il est toujours possible de jouer en solo en affrontant un à un tous les personnages du jeu.', 30, 27, 10, 1994, 9, '0ade11be843a387ffba152ee08e1760f.jpg', '2015-03-16 17:45:32', 3),
(30, 'MG156', 'Metal Gear', 'Metal Gear sur NES est un précurseur du jeu d’infiltration. Le héros, Solid Snake, doit infiltrer Outer Heaven, une base où se construit une nouvelle arme, le Metal Gear. Le jeu mêle un scénario complet à des phases de jeu d’action et d’infiltration. Divers boss, pièges, armes et équipements parsème le jeu offrant au joueur une aventure riche et variée.\r\n', 18, 16, 10, 1988, 5, '3dd8088536eacccd67b761189c540ce9.jpg', '2015-03-16 17:47:43', 5),
(31, 'SS987', 'Super Street Fighter II', 'Street Fighter II’ : Special Champion Edition sur Megadrive vous lance dans l’arène pour cette nouvelle déclinaison de la saga de Capcorn. Dans ce jeu de baston vous retrouvez huit combattants de légende ainsi que les quatre boss qui se sont débloqués dès le début du jeu (Balrog, Sagat, Vega et Mr. Bison). Maîtrisez chacune des techniques propres aux personnages dans ce titre à la jouabilité nerveuse et aux coups ravageurs. ', 16, 15, 10, 1993, 8, '8ed696b5049dd3e0694bb38dd052646a.jpg', '2015-03-16 17:48:15', 3),
(32, 'MK365', 'Mortal Kombat', 'Battez vos adversaires pour défier le guerrier Shokan nommé Goro, champion du tournoi depuis plus de 500 ans. Adaptation du célébrissime jeu d’arcade, Mortal Kombat sur Megadrive vous permet d’incarner 8 prétendants à la victoire finale, dont les protégés du seigneur Raiden, seuls remparts contre la menace qui pèse sur le Royaume de la Terre.', 11, 10, 10, 1993, 10, '5eef480e63e9eb4eac898ccd74e832c8.jpg', '2015-03-16 17:49:17', 3),
(33, 'MT222', 'Métroid', 'Découvrez les premières aventures de Samus Aran, chasseuse de prime intergalactique, dans Metroid sur NES. Engoncée dans votre armure, combattez des aliens dans ce jeu d’action se déroulant sur un plan horizontal. Transformez-vous à tout moment en boule morphing pour traverser des passages étroits. Infiltrez le complexe ennemi et détruisez leur leader : Mother Brain.\r\n', 55, 50, 10, 1988, 5, '5a9896a8e10095783271253cce4fc032.jpg', '2015-03-16 17:49:38', 5),
(34, 'VR722', 'Virtua Racing', 'Virtua Racing sur Megadrive est un jeu de courses proposant trois catégories d’automobiles, des formules 1, des stock-cars ainsi que des véhicules prototypes. Cinq circuits et trois modes de jeu sont mis à disposition : une course simple, un contre-la-montre ainsi qu’un mode versus qui permet d’affronter un adversaire en écran partagé.', 44, 40, 10, 1994, 7, 'aabd4947b9148e70fd63a7ec69a99eca.jpg', '2015-03-16 17:50:28', 3),
(35, 'SR116', 'Streets of Rage', 'Streets of Rage sur Megadrive vous propose de suivre l''histoire de trois jeunes agents de police aux prises avec une organisation criminelle, menée de main de fer par un certain Mr. X. Le jeu consiste à éliminer tous vos opposants grâce à divers coups, pour progresser dans le niveau et défier le boss. Chaque combattant dispose de ses propres qualités et désavantages.', 21, 19, 10, 1991, 6, 'df04b57e360322aad66e8638d7e31b46.jpg', '2015-03-16 17:51:31', 3),
(36, 'PM231', 'Pac-man', 'Pac-Man sur NES est l’adaptation d’un des plus gros succès arcades de toute l’histoire des jeux vidéo. Vous contrôlez Pac-Man, petite boule jaune croque-tout, dans des labyrinthes peuplés de fantômes colorés. Le but du jeu est de manger tous les petits points jaunes. Le moindre contact avec l’un des ectoplasmes est fatal.\r\n', 32, 29, 10, 1993, 5, '2e9ba0ceaceb037040220d77b58ac8f4.jpg', '2015-03-16 17:51:42', 5),
(37, 'RS030', 'The Revenge of Shinobi', 'The Revenge of Shinobi sur Megadrive est un jeu d''action où le joueur incarne un ninja. L''objectif est ici de se venger des criminels qui vous ont causé du tort. Vous devez nettoyer la zone de chaque niveau avant de pouvoir passer au niveau suivant. Pour cela, vous avez à disposition des shurikens, ainsi que des couteaux de lancer.', 32, 29, 10, 1989, 8, '09fc674e53dde19bf72f60d818da0be0.jpg', '2015-03-16 17:52:55', 3),
(38, 'ZD221', 'Zelda', 'The Legend of Zelda sur NES vous présente la première aventure du jeune Link. Débutez votre périple dans le fabuleux monde d’Hyrule. À l’aide de votre épée, de votre bouclier et de votre intelligence, retrouvez les huit fragments de la triforce et sauvez la princesse Zelda.\r\n', 49, 44, 10, 1987, 5, '3e08454974adde349af58fd740a72ce7.jpg', '2015-03-16 17:53:56', 5),
(39, 'KL558', 'Kirby''s Dream Land', 'Kirby''s Dream Land est un jeu de plates-formes sur Gameboy qui est le premier opus de la désormais célèbre série des Kirby. Découvrez les pouvoirs du petit bonhomme rose qui peut absorber ses ennemis et également des objets qu''il peut recracher pour se débarrasser des ennemis et il peut également voler, nager, etc.', 13, 12, 10, 1992, 7, '9ed57de470830334b03d0b5b45fdaa84.jpg', '2015-03-16 17:54:22', 4),
(40, 'WL992', 'Wario Land', 'Wario Land : Super Mario Land 3 est un jeu de plates-formes sur Gameboy. Des pirates ont volé une statue de la princesse Peach. Wario, gourmand qu''il est, veut reprendre la statue des mains des pirates afin de la revendre à la famille royale pour une coquette somme. Vous incarnez Wario et voyagez à travers un certain nombre de niveaux remplis d''action. Vous aurez à traiter avec de nombreux ennemis et des obstacles que vous devrez dépasser afin de parvenir à vos fins.', 11, 10, 10, 1994, 5, '34fb9ed4248f2e6fc7d811a896fd6dd8.jpg', '2015-03-16 17:55:10', 4),
(41, 'SM233', 'Super Mario Land', 'Super Mario Land sur Gameboy est un jeu de plates-formes dans lequel vous incarnez Mario, plombier moustachu, qui doit sauver la princesse Daisy retenue prisonnière dans un château. Vous partez donc à la recherche de votre dulcinée, explorant des terres étranges, peuplées de monstres.', 33, 30, 10, 1990, 8, '481e6f0f42cf2e03ef7e2c2a7f527d63.jpg', '2015-03-16 17:56:12', 4),
(42, 'DK134', 'Donkey Kong', 'Donkey Kong et Mario, alors appelé Jumpman, font leur première apparition sur Donkey Kong, qui est l’adaptation sur NES du jeu sorti en 1981 sur borne d’arcade. Jumpman doit délivrer sa petite amie Pauline, capturée par le gorille, en grimpant sur des échelles pour la rejoindre. Attention cependant aux tonneaux que Donkey Kong vous lance. Pour les éviter, Jumpman peut, comme son nom l’indique, sauter par dessus, mais aussi les détruire en utilisant des marteaux.\r\n', 72, 65, 10, 1986, 5, '4f77593437a3f586d95c8b61e4817350.jpg', '2015-03-16 17:56:19', 5),
(43, 'DK553', 'Donkey Kong Land', 'Donkey Kong Land sur Gameboy est un remake de Donkey Kong Country sur Super Nintendo. Donkey Kong et Diddy Kong font à nouveau équipe pour affronter de nombreux ennemis comme des cochons volants, des guêpes tueuses ou encore des reptiles. Il y a toutefois diverses améliorations comme par exemple l''ajout de niveaux et d''ennemis.', 17, 15, 10, 1995, 9, '2dcd558de5be1629cc3b7c9ceeda62b4.jpg', '2015-03-16 17:57:34', 4),
(44, 'LZ428', 'The Legend of Zelda', 'The Legend of Zelda : Link''s Awakening est un jeu d''action et d''aventure sur Gameboy. Vous incarnez le jeune Link, qui revient dans son pays natal d''Hyrule. Après d''extraordinaires aventures, notre héros rêve d''un repos mérité. Alors qu''il est sur le bateau qui le ramène au pays, une tempête se déchaîne, le bateau est abîmé et s''échoue sur une île mystérieuse nommée Cocolint. Vous apprenez alors que pour sortir de cet enfer, il vous faudra réveiller le mystique Poisson Rêve.', 42, 38, 10, 1993, 3, '1c2f1be6334af7ade16dba294888e1b8.jpg', '2015-03-16 17:58:55', 4),
(45, 'ME917', 'Megaman', 'Toujours entouré de ses robots de combats, le Dr Wily menace de nouveau la tranquillité de la planète. Pour contrer ses plans, Mega Man doit enfiler son armures et botter l''arrière train metallique de tous les ennemis. Si Mega Man : Dr. Wily''s Revenge est le premier volet de la série à être sorti sur Gameboy, le gameplay reste centré autour de l''action plate-forme et sur l''acquisition de nouveaux pouvoirs en battant les robots.', 11, 10, 10, 1991, 7, 'e234901d218d74d15d35ca9ac1068e03.jpg', '2015-03-16 17:59:47', 4),
(46, 'LE503', 'Lemmings', 'Votre tâche dans Lemmings sur Gameboy et Gameboy Color est de secourir les petites créatures aux cheveux verts sur 120 niveaux. Un pourcentage d''individus à maintenir en vie vous est indiqué pour chaque mission. A vous de vous adapter à la configuration du terrain de jeu en assignant des tâches telles que creuser, construire un escalier ou encore bloquer le passage dans l''optique de ramener à bon port vos infatigables Lemmings.', 44, 40, 10, 1991, 6, 'cd2551e0d187bd625a01896dd940215d.jpg', '2015-03-16 18:01:26', 4),
(47, 'BB350', 'Bubble Bobble', 'Bubble Bobble sur Gameboy est un jeu d''action dans lequel on incarne Bub et Bob, deux enfants transformés en dinosaures qui vont devoir sauver leurs fiancées des griffes de Bubbla. Le jeu se déroule sur des tableaux dans lesquels apparaissent des ennemis qu''il faut emprisonner dans des bulles avant de les faire exploser pour récupérer des points, tout en prenant en compte les courants d''air susceptibles de faire dévier les bulles, le tout sur une centaine de niveaux.', 17, 15, 10, 1991, 8, 'c5a4d6322a7af287b4f9b2a9599110c5.jpg', '2015-03-16 18:02:50', 4),
(48, 'DB123', 'Dragon Ball Z', 'Dragon Ball Z : Les Guerriers Légendaires sur Game Boy Color est un jeu de combat/réflexion situé dans l''univers du manga. Le titre s''étend de l''arrivée de Radditz sur Terre jusqu''à l''entraînement de Gohan par Piccolo et se joue grâce à un système de cartes. Les combats se déroulent en deux temps : une phase d''attaque et une de défense durant lesquelles il faut placer vos cartes efficacement pour remporter le duel.\r\n', 66, 60, 10, 2002, 5, 'b2b930a3c75bfb594531dcaf9a06b8ca.jpg', '2015-03-16 18:03:09', 7),
(49, 'HP', 'Harry Potter 1', 'Harry Potter à l''Ecole des Sorciers vous plonge dans l''univers magique du jeune magicien sur Gameboy. Au fil des diverses missions, vous découvrirez les nombreux secrets de Poudlard. En compagnie de vos amis Ron et Hermione, apprenez à chevaucher votre balai ainsi qu''à maîtriser les sortilèges pour devenir un vrai sorcier. Enfin, le Quidditch sera votre nouveau sport favori.\r\n', 36, 32, 10, 2001, 5, 'd10d7faa9b690f211f4b9d2ac0b97d8a.jpg', '2015-03-16 18:05:43', 7),
(50, 'MG157', 'Metal Gear', 'Vous incarnez Solid Snake, qui coule des jours paisibles dans sa demeure en Alaska. Un beau jour, Campbell, votre ancien chef, vient prendre de vos nouvelles… à dire vrai, il vient surtout vous chercher pour effectuer une opération militaire délicate. En effet, des terroristes se sont emparés du Metal Gear, un gros porteur nucléaire, et ont des projets pour le moins belliqueux. Votre mission : infiltrer Galuade, la base ennemie, et détruire le Metal Gear.\r\n', 55, 50, 10, 2000, 5, '6de5f662a8d3f80ab94d7560105f6c58.jpg', '2015-03-16 18:07:15', 7),
(51, 'PP216', 'Prince Of Persia', 'Prince of Persia sur Gameboy Color est un jeu de plates-formes se déroulant dans le Moyen-Orient. Le joueur contrôle le Prince de Perse qui peut marcher, courir, se baisser, sauter, s''accrocher et combattre à l''épée. Le but est de te\r\n', 32, 29, 10, 1999, 5, '68f4fb330618abb086832df681f45114.jpg', '2015-03-16 18:08:48', 7),
(52, 'RM174', 'Rayman', 'Dans le monde de Rayman, la nature et les habitants vivent en paix et Le Grand Protoon maintient l''équilibre et l''harmonie de cet univers. Jusqu''au jour où l''horrible Mister Dark le dérobe, plongeant le monde dans le chaos et les ténèbres. Rayman devra trouver et délivrer tous les toons puis anéantir Mister Dark pour délivrer le Grand Protoon. Rayman sur Gameboy est une des références du jeu de plates-formes.\r\n', 22, 20, 10, 2000, 5, '147322a13da7d0cb20b4d4140e62ae25.jpg', '2015-03-16 18:09:59', 7),
(53, 'RE329', 'Resident Evil', 'Cette mouture fut en fait la première tentative de Capcom en terme d''épisode nomade issu de leur célèbre franchise, deux ans avant l''épisode Gaiden sur la même machine. Malheureusement, le tout ne sera pas validé, la firme japonaise n''ayant pas été convaincu du potentiel de ce titre développé par les anglais de HotGen Studios. Vous me direz, à la vue du résultat, on les comprend un peu. D''ailleurs, pour l''anecdote, il suffit de comparer ce Resident Evil à l''épisode GBC de Alone in the Dark : The New Nightmare pour voir à quel point RE était en retard, graphiquement parlant. Ceci dit, il est intéressant de noter que le développement était arrivé relativement loin, du moins si on se base sur les visuels ci-dessous où l''on peut apercevoir les derniers environnements du jeu ou l''aventure de Chris et de Jill.', 22, 20, 10, 2003, 5, 'abf45fd435845329d07ce2a78e09f61b.jpg', '2015-03-16 18:13:31', 7),
(54, 'ZO132', 'Zelda Seasons', 'The Legend of Zelda : Oracle of Seasons est un jeu d''action et d''aventure sur Gameboy. Onox, le général des ténèbres, a capturé l''Oracle des Saisons afin de vider le royaume de toute vie. Les saisons sont en désordre et les forces du chaos grandissent. Vous incarnez donc Link et devez maîtriser le pouvoir des saisons afin de vaincre les forces maléfiques.\r\n', 32, 29, 10, 2001, 5, '0f0935ec34a38a44f9211cbe4105086a.jpg', '2015-03-16 18:15:24', 7),
(55, 'WL234', 'Wario Land 3', 'Wario Land 3 est un jeu de plates-formes et d''aventure sur Gameboy Color. Wario se retrouve piégé dans une boîte à musique et c''est à vous de l''aider à sortir de cet enfer. Foncez à travers 24 niveaux et découvrez plus d''une centaine de trésors et de clés cachées. Wario peut se transformer au cours de son périple en Bat-Wario, Wario Zombie, Wario à ressort et beaucoup d''autres encore. Ce soft est exclusivement solo.\r\n', 19, 17, 10, 2000, 5, 'f1804f7959286c8181d7fe293e4fbb75.jpg', '2015-03-16 18:17:04', 7),
(56, 'MB146', 'Mario Bros.', 'Super Mario Bros. sur NES est un jeu de plates-formes mettant en scène le désormais célèbre plombier à moustache et salopette rouge. Traversez de nombreux niveaux, sautez sur vos ennemis pour les éliminer, ramassez des champignons pour grandir et des fleurs pour cracher le feu. Affrontez le méchant Bowser et ses sbires afin de délivrer la délicieuse princesse Peach.\r\n', 26, 23, 10, 1987, 5, 'd482fd2ea21290648ddb2f33b9925f8d.jpg', '2015-03-16 18:23:52', 5),
(57, 'BM324', 'Bomber Man', 'Super Bomberman est l’apparition sur Super Nintendo du célèbre poseur de bombes qui a fait le tour des consoles dans les années 80 et 90. Une nouvelle fois, il faut faire exploser les ennemis présents à l’écran pour progresser dans les niveaux et atteindre des boss à éliminer. À noter qu’il s’agit de l’un des premiers jeux à utiliser le Super MultiTap pour pouvoir jouer à quatre, ce qui ajoute un grand intérêt au mode battle où le but est d’éliminer les autres poseurs de bombes.\r\n', 44, 40, 10, 1993, 5, '0fdb445da4bcc5e150b13c83bd4c36d4.jpg', '2015-03-16 18:30:20', 6),
(58, 'DK276', 'Donkey Kong', 'Dans Donkey Kong Country sur Super Nintendo, vous incarnez le célèbre gorille de Nintendo. Le King K. Rool a volé les bananes de Donkey qui décide alors de partir à sa recherche pour les récupérer. Deux personnages sont jouables, Donkey est plus grand et plus fort tandis que Diddy est plus rapide. Il est possible de jouer à deux, soit chacun son tour, soit en équipe. Des animaux vous aideront à franchir certains niveaux et à vaincre les Kremlings.\r\n', 33, 30, 10, 1994, 5, '45505a7751f1d5529571cb73a87d193d.jpg', '2015-03-16 18:32:30', 6),
(59, 'DB654', 'Dragon Ball Z', 'Dragon Ball Z est l’adaptation sur Super Nintendo du célèbre manga d’Akira Toriyama. Vous pouvez combattre en un contre un avec les personnages des sagas Freezer et Cell. Les coups sont variés et fidèles à Dragon Ball Z. Les animations avant et après les combats permettent aux joueurs de s’imprégner un peu plus de l’univers du manga.\r\n', 28, 25, 10, 1993, 5, '17d3fec7fc8e88dfd8577d25be13513d.jpg', '2015-03-16 18:34:11', 6),
(60, 'ML810', 'Mario Kart', 'Super Mario Kart sur Super Nintendo est un jeu de courses reprenant l’univers et les personnages de Mario. Après avoir choisi un pilote parmi les 8 proposés, lancez-vous dans les quatre coupes différentes pour essayer d’atteindre la plus haute marche du podium. Grâce à des bonus ramassés sur le circuit, tous les coups sont permis, à commencer par le larguage de peaux de banane et l’envoi de carapaces. Le mode Battle permet d’ailleurs d’affronter les autres à coup de carapaces.\r\n', 33, 30, 10, 1993, 5, '7f177c56f23206403106d72b30e28a31.jpg', '2015-03-16 18:37:49', 6),
(61, 'LO549', 'Legend Of Zelda', 'The Legend Of Zelda : A Link to the Past est un jeu d’aventure sur Super Nintendo dans lequel vous incarnez Link, jeune garçon d’Hyrule. Vous avez pour mission d’aller sauver la princesse Zelda des griffes du sorcier Agahnim avant qu’il ne libère le sceau des sept sages qui sépare le monde de la lumière du monde des ténèbres. Pour cela vous devez traverser de nombreux donjons remplis de monstres et trouver dans chacun d’eux des objets vous permettant de progresser dans votre quête.\r\n', 66, 60, 10, 1992, 5, 'bcf30af44234da907fa38159b24c48f8.jpg', '2015-03-16 18:45:02', 6),
(62, 'SM888', 'Super Mario World', 'Super Mario World sur Super Nintendo vous fait incarner les deux plombiers Mario et Luigi, à la poursuite de Bowser qui a kidnappé pour la énième fois la princesse Peach. Exploitez de nombreux objets tels que la plume permettant aux héros de planer pendant un court instant, et faites surtout connaissance avec le petit dinosaure vert Yoshi qui apparaît avec sa tribu pour la toute première fois dans la série.\r\n', 17, 15, 10, 1992, 5, '8f22ab7c89995ba66387ed01f0b37988.jpg', '2015-03-16 18:48:32', 6),
(63, 'SF999', 'Street Fighter 2', 'Street Fighter II sur Super Nintendo est le deuxième épisode du jeu de combat sorti en 1988 sur diverses consoles et bornes d’arcade. Vous avez le choix parmi huit personnages ayant chacun son propre style de jeu et ses propres techniques spéciales. Dans le mode solo, vous devez affronter les sept autres personnages plus quatre boss cachés. À deux, chacun choisit son camp pour tenter d’éliminer l’autre.\r\n', 21, 19, 10, 1992, 5, 'faf8e4ee0bd78f94ca2797a811eae1ed.jpg', '2015-03-16 18:50:01', 6),
(64, 'WW111', 'WWF', 'Ce jeu de catch permet de contrôler les plus grands catcheurs de l’époque : Macho Man, Undertaker, Jake the Snake, Hulk Hogan ou encore Earthquake. WWF Super Wrestlemania propose plusieurs modes de jeux : Un contre Un, Équipe et Survie (où le joueur doit enchaîner le maximum de matchs sans perdre.\r\n', 28, 25, 10, 1992, 5, '90a6603f5f4932a5a41e3a9fc0568fe7.jpg', '2015-03-16 18:51:37', 6);

-- --------------------------------------------------------

--
-- Structure de la table `vr_rachat`
--

CREATE TABLE `vr_rachat` (
  `id_rachat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_rachat` varchar(45) NOT NULL,
  `prenom_rachat` varchar(45) NOT NULL,
  `mail_rachat` varchar(45) NOT NULL,
  `adresse_rachat` varchar(45) NOT NULL,
  `ville_rachat` varchar(45) NOT NULL,
  `cp_rachat` int(5) NOT NULL,
  `pays_rachat` varchar(45) NOT NULL,
  `tel_rachat` int(10) NOT NULL,
  `objet_rachat` varchar(45) NOT NULL,
  `message_rachat` varchar(500) NOT NULL,
  `etat_rachat` varchar(45) NOT NULL,
  `img_rachat` varchar(32) DEFAULT NULL,
  `date_rachat` datetime NOT NULL,
  PRIMARY KEY (`id_rachat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `vr_user`
--

CREATE TABLE `vr_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `civilite_user` varchar(5) DEFAULT NULL,
  `nom_user` varchar(45) NOT NULL,
  `prenom_user` varchar(45) NOT NULL,
  `mail_user` varchar(50) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `adresse_user` varchar(50) DEFAULT NULL,
  `ville_user` varchar(50) DEFAULT NULL,
  `cp_user` int(5) DEFAULT NULL,
  `pays_user` varchar(45) DEFAULT NULL,
  `tel_user` int(10) DEFAULT NULL,
  `adresse_livraison_user` varchar(50) DEFAULT NULL,
  `ville_livraison_user` varchar(50) DEFAULT NULL,
  `cp_livraison_user` int(5) DEFAULT NULL,
  `pays_livraison_user` varchar(45) DEFAULT NULL,
  `validation_user` varchar(3) DEFAULT NULL,
  `date_user` datetime NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `mail_user_UNIQUE` (`mail_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `vr_blog_articles_has_vr_blog_categorie`
--
ALTER TABLE `vr_blog_articles_has_vr_blog_categorie`
  ADD CONSTRAINT `fk_vr_blog_articles_has_vr_blog_categorie_vr_blog_articles1` FOREIGN KEY (`vr_blog_articles_id_article`) REFERENCES `vr_blog_articles` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vr_blog_articles_has_vr_blog_categorie_vr_blog_categorie1` FOREIGN KEY (`vr_blog_categorie_id_blog_categorie`) REFERENCES `vr_blog_categorie` (`id_blog_categorie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vr_blog_comment`
--
ALTER TABLE `vr_blog_comment`
  ADD CONSTRAINT `fk_vr_blog_comment_vr_blog_articles1` FOREIGN KEY (`vr_blog_articles_id_article`) REFERENCES `vr_blog_articles` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vr_blog_comment_vr_user1` FOREIGN KEY (`vr_user_id_user`) REFERENCES `vr_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vr_commandes`
--
ALTER TABLE `vr_commandes`
  ADD CONSTRAINT `fk_vr_commandes_vr_prod_console1` FOREIGN KEY (`vr_prod_console_id_console`) REFERENCES `vr_prod_console` (`id_console`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vr_commandes_vr_user` FOREIGN KEY (`vr_user_id_user`) REFERENCES `vr_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vr_commandes_has_vr_prod_jeux`
--
ALTER TABLE `vr_commandes_has_vr_prod_jeux`
  ADD CONSTRAINT `fk_vr_commandes_has_vr_prod_jeux_vr_commandes1` FOREIGN KEY (`vr_commandes_id_commande`) REFERENCES `vr_commandes` (`id_commande`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vr_commandes_has_vr_prod_jeux_vr_prod_jeux1` FOREIGN KEY (`vr_prod_jeux_id_jeux`) REFERENCES `vr_prod_jeux` (`id_jeux`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `vr_prod_jeux`
--
ALTER TABLE `vr_prod_jeux`
  ADD CONSTRAINT `fk_vr_prod_jeux_vr_prod_console1` FOREIGN KEY (`vr_prod_console_id_console`) REFERENCES `vr_prod_console` (`id_console`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
