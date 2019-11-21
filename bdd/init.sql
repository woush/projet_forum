-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 12 juin 2018 à 11:20
-- Version du serveur :  5.7.19-log
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forum`
--
/*DROP DATABASE IF EXISTS `3233052_forum`;*/
/*CREATE DATABASE IF NOT EXISTS `3233052_forum` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;*/
USE `3233052_forum`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `pseudo`, `mdp`) VALUES
(1, 'Admin', '$2y$10$yqw6AJaE6pZ.Gx898Th/T.XtFQMju7AvbspLKQIXoXHI5yXxCED2u');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `question` varchar(150) NOT NULL,
  `reponse` tinyint(1) NOT NULL,
  `path_photo` varchar(50) NOT NULL,
  `type_questionnaire` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `question`, `reponse`, `path_photo`, `type_questionnaire`) VALUES
(1, 'Lorsque l\'on déplace la souris, le curseur bouge', 1, 'ressources/img/questionnaire/image-f1.png', 1),
(2, 'Il existe plusieurs types de claviers', 1, 'ressources/img/questionnaire/image-f2.png', 1),
(3, 'De nos jours, les souris de bureau possèdent au moins 4 boutons', 0, 'ressources/img/questionnaire/image-f3.png', 1),
(4, 'Le logiciel Word permet de modifier des images', 0, 'ressources/img/questionnaire/image-f4.png', 1),
(5, 'Il faut avoir accès à internet pour pouvoir se connecter à Facebook', 1, 'ressources/img/questionnaire/image-f5.png', 1),
(6, 'Le logo de Twitter est un chien rouge', 0, 'ressources/img/questionnaire/image-f6.png', 1),
(7, 'Samsung est une marque de smartphones', 1, 'ressources/img/questionnaire/image-f7.png', 1),
(8, 'Les tablettes sont en général plus grandes que les smartphones', 1, 'ressources/img/questionnaire/image-f8.png', 1),
(9, 'Les virus d\'ordinateurs sont contagieux pour l\'Homme', 0, 'ressources/img/questionnaire/image-f9.png', 1),
(10, 'Il est possible de brancher un casque audio à son ordinateur', 1, 'ressources/img/questionnaire/image-f10.png', 1),
(11, 'Tous les claviers d\'ordinateurs possèdent la touches F13', 0, 'ressources/img/questionnaire/image-f11.png', 1),
(12, 'Un smartphone est un téléphone très limité en fonctionnalités', 0, 'ressources/img/questionnaire/image-f12.png', 1),
(13, 'Il est possible de contrôler certains appareils électriques à partir de son téléphone', 1, 'ressources/img/questionnaire/image-f13.png', 1),
(14, 'Il est possible de rouler en voiture depuis son smartphone', 0, 'ressources/img/questionnaire/image-f14.png', 1),
(15, 'Un ordinateur produit de la chaleur', 1, 'ressources/img/questionnaire/image-f15.png', 1),
(16, 'Le symbole d\'Apple est une poire', 0, 'ressources/img/questionnaire/image-f16.png', 1),
(17, 'Facebook est un logiciel de retouche de photos', 0, 'ressources/img/questionnaire/image-f17.png', 1),
(18, 'Photoshop est un réseau social où l\'on peut dialoguer avec ses amis', 0, 'ressources/img/questionnaire/image-f18.png', 1),
(19, 'eBay est un jeu vidéo de zombie mondialement connu', 0, 'ressources/img/questionnaire/image-f19.png', 1),
(20, 'Un antivirus permet de se protéger des données infectées', 1, 'ressources/img/questionnaire/image-f20.png', 1),
(21, 'Un bug est un défaut de réalisation dans un programme', 1, 'ressources/img/questionnaire/image-f21.png', 1),
(22, 'La corbeille est vidée tous les mardis soirs à 21h', 0, 'ressources/img/questionnaire/image-f22.png', 1),
(23, 'Il est possible de zoomer avec ses doigts sur un écran tactile', 1, 'ressources/img/questionnaire/image-f23.png', 1),
(24, 'Un e-mail est un courrier électronique', 1, 'ressources/img/questionnaire/image-f24.png', 1),
(25, 'Il est possible de mettre en veille un ordinateur', 1, 'ressources/img/questionnaire/image-f25.png', 1),
(26, 'Un bandit informatique est une personne qui tente de prendre le contrôle de votre ordinateur par effraction', 0, 'ressources/img/questionnaire/image-f26.png', 1),
(27, 'Les écrans sont composés de pixels', 1, 'ressources/img/questionnaire/image-f27.png', 1),
(28, 'Un Pop-up est un message électronique non sollicité qui encombre votre boîte de courrier internet', 0, 'ressources/img/questionnaire/image-f28.png', 1),
(29, 'Pour aller sur Internet, j\'utilise un aviateur', 0, 'ressources/img/questionnaire/image-f29.png', 1),
(30, 'Outlook est un moteur de recherche', 0, 'ressources/img/questionnaire/image-f30.png', 1),
(31, 'Lorsqu\'un fichier se retrouve dans la corbeille, il est perdu à tout jamais', 0, 'ressources/img/questionnaire/image-f31.png', 1),
(32, 'Dans un logiciel de traitement de texte, le pompier gère le style de l\'écriture', 0, 'ressources/img/questionnaire/image-f32.png', 1),
(33, 'Un « surfeur » est le nom donné au logiciel qui permet de surfer sur Internet', 0, 'ressources/img/questionnaire/image-f33.png', 1),
(34, 'Instagram est une application de messagerie instantanée en ligne', 0, 'ressources/img/questionnaire/image-f34.png', 1),
(35, 'Il existe des perches pour prendre des selfies', 1, 'ressources/img/questionnaire/image-f35.png', 1),
(36, 'Le « S » dans HTTPS indique que le site est sécurisé', 1, 'ressources/img/questionnaire/image-i1.png', 2),
(37, 'Les smartphones sont des mini-ordinateurs', 1, 'ressources/img/questionnaire/image-i2.png', 2),
(38, 'Le raccourci clavier « CTRL + C » permet de coller un élément préalablement copié', 0, 'ressources/img/questionnaire/image-i3.png', 2),
(39, 'Windows fabrique tous les ordinateurs du monde', 0, 'ressources/img/questionnaire/image-i4.png', 2),
(40, 'Il est impossible de recharger son téléphone via le port USB de son ordinateur', 0, 'ressources/img/questionnaire/image-i5.png', 2),
(41, 'Le système binaire n\'est composé que des chiffres 0, 1 et 2', 0, 'ressources/img/questionnaire/image-i6.png', 2),
(42, 'Les composants d\'un ordinateur sont reliés à une carte Père', 0, 'ressources/img/questionnaire/image-i7.png', 2),
(43, 'Les sites internet utilisent des brownies pour garder nos données', 0, 'ressources/img/questionnaire/image-i8.png', 2),
(44, 'Certains ordinateurs possèdent un écran tactile', 1, 'ressources/img/questionnaire/image-i9.png', 2),
(45, 'Un dossier permet de stocker un nombre infini de fichiers tant que ça ne dépasse pas la capacité maximale du disque dur', 1, 'ressources/img/questionnaire/image-i10.png', 2),
(46, 'Il est possible de partitionner son disque dur', 1, 'ressources/img/questionnaire/image-i11.png', 2),
(47, 'Il est possible de créer ses propres raccourcis clavier', 1, 'ressources/img/questionnaire/image-i12.png', 2),
(48, 'Un serveur est un « gros ordinateur » qui stocke des données', 1, 'ressources/img/questionnaire/image-i13.png', 2),
(49, 'Une « URL » est l\'adresse d\'un site internet', 1, 'ressources/img/questionnaire/image-i14.png', 2),
(50, 'La page d\'accueil internet peut être changée', 1, 'ressources/img/questionnaire/image-i15.png', 2),
(51, 'Il est possible d\'avoir la même adresse mail que son voisin', 0, 'ressources/img/questionnaire/image-i16.png', 2),
(52, 'Au démarrage de l\'ordinateur, on peut lancer automatiquement des programmes', 1, 'ressources/img/questionnaire/image-i17.png', 2),
(53, 'Windows Update sert à mettre à jour son système d\'exploitation', 1, 'ressources/img/questionnaire/image-i18.png', 2),
(54, 'L\'acronyme « FAI » signifie Fournisseur d\'Accès Internet', 1, 'ressources/img/questionnaire/image-i19.png', 2),
(55, 'Apple est un système d\'exploitation', 0, 'ressources/img/questionnaire/image-i20.png', 2),
(56, 'Supprimer le raccourci d\'un programme efface aussi le programme de l\'ordinateur', 0, 'ressources/img/questionnaire/image-i21.png', 2),
(57, 'Le Bluetooth permet l\'échange de données à très courte distance', 1, 'ressources/img/questionnaire/image-i22.png', 2),
(58, 'iTunes est une boutique en ligne d\'Apple', 1, 'ressources/img/questionnaire/image-i23.png', 2),
(59, 'Le Cloud est un système pour accrocher son smartphone ou sa tablette au mur', 0, 'ressources/img/questionnaire/image-i24.png', 2),
(60, 'Jack Zubertberg est le fondateur du réseau social Facebook', 0, 'ressources/img/questionnaire/image-i25.png', 2),
(61, 'Le logo de l\'application Periscope est un petit fantôme blanc sur fond jaune', 0, 'ressources/img/questionnaire/image-i26.png', 2),
(62, 'La phrase « OK Siri » permet de déclencher l\'application de commande vocale d\'Apple', 0, 'ressources/img/questionnaire/image-i27.png', 2),
(63, 'Le format d\'image JPEG permet de fournir un fond transparent à son image ', 0, 'ressources/img/questionnaire/image-i28.png', 2),
(64, 'Whatsapp est une application de messagerie instantanée', 1, 'ressources/img/questionnaire/image-i29.png', 2),
(65, 'Aucune intelligence artificielle n\'a réussi à battre le meilleur joueur d\'échecs humain', 0, 'ressources/img/questionnaire/image-i30.png', 2),
(66, 'Les deux sites les plus visités au monde sont Google et Youtube', 1, 'ressources/img/questionnaire/image-i31.png', 2),
(67, 'Le fait de tricher dans un jeu vidéo est aussi appelé « cheat »', 1, 'ressources/img/questionnaire/image-i32.png', 2),
(68, 'Avant Facebook, le réseau social qui dominait était MyFace', 0, 'ressources/img/questionnaire/image-i33.png', 2),
(69, 'WordPress est un logiciel de traitement de texte', 0, 'ressources/img/questionnaire/image-i34.png', 2),
(70, 'MOOC est un type de formation à distance ouvert à tous', 1, 'ressources/img/questionnaire/image-i35.png', 2),
(71, 'Les unités de stockages suivantes sont-elles classées dans l\'ordre : To, Mo, Ko, Go', 0, 'ressources/img/questionnaire/image-i36.png', 2),
(72, 'Google Trends est un outil permettant de connaître la fréquence à laquelle un terme a été tapé dans le moteur de recherche google', 1, 'ressources/img/questionnaire/image-i37.png', 2),
(73, 'Un « dogfie » est l\'appellation d\'une photo prise avec son chien', 0, 'ressources/img/questionnaire/image-i38.png', 2),
(74, 'Internet était à l\'origine une invention militaire', 1, 'ressources/img/questionnaire/image-d1.png', 3),
(75, 'Bill Gates a inventé Linux', 0, 'ressources/img/questionnaire/image-d2.png', 3),
(76, 'GladOS est le système d\'exploitation des smartphones Android', 0, 'ressources/img/questionnaire/image-d3.png', 3),
(77, 'Une souris a toujours eu au minimum 2 boutons', 0, 'ressources/img/questionnaire/image-d4.png', 3),
(78, 'Le nom « Google » provient d\'une expression française', 0, 'ressources/img/questionnaire/image-d5.png', 3),
(79, 'Java est un langage de programmation', 1, 'ressources/img/questionnaire/image-d6.png', 3),
(80, 'Un bug informatique mondial s\'est produit au passage de l\'an 2000', 1, 'ressources/img/questionnaire/image-d7.png', 3),
(81, 'Un « Cheval de Troie » est un programme malveillant dissimulé', 1, 'ressources/img/questionnaire/image-d8.png', 3),
(82, 'Le WiFi est une invention brevetée', 1, 'ressources/img/questionnaire/image-d9.png', 3),
(83, 'WaterFox est un navigateur internet', 1, 'ressources/img/questionnaire/image-d10.png', 3),
(84, 'Les smartphones possèdent un processeur', 1, 'ressources/img/questionnaire/image-d11.png', 3),
(85, 'La RAM est la mémoire du disque dur', 0, 'ressources/img/questionnaire/image-d12.png', 3),
(86, 'La touche « F2 » permet de renommer des fichiers', 1, 'ressources/img/questionnaire/image-d13.png', 3),
(87, 'Le raccourci « ALT + F4 » imprime l\'écran actuel', 0, 'ressources/img/questionnaire/image-d14.png', 3),
(88, 'Formater un ordinateur permet de créer un point de sauvegarde', 0, 'ressources/img/questionnaire/image-d15.png', 3),
(89, 'Dans le jeu original Tetris, il existe 7 formes différentes', 1, 'ressources/img/questionnaire/image-d16.png', 3),
(90, 'La version de Windows qui précède Windows XP est Windows 98', 0, 'ressources/img/questionnaire/image-d17.png', 3),
(91, 'Le jeu vidéo populaire Candy Crush Saga a été développé par King', 1, 'ressources/img/questionnaire/image-d18.png', 3),
(92, 'L\'application mobile de navigation GPS Waze a été rachetée par Microsoft', 0, 'ressources/img/questionnaire/image-d19.png', 3),
(93, 'En 3 jours, l\'intelligence artificielle de Google a appris le jeu de Go et écrasé la machine qui a détrôné l\'Homme', 1, 'ressources/img/questionnaire/image-d20.png', 3),
(94, 'La vidéo la plus consultée sur YouTube a dépassé les 5 milliards de vues', 1, 'ressources/img/questionnaire/image-d21.png', 3),
(95, 'L\'abréviation WWW est l\'acronyme de « World Wild Web»', 0, 'ressources/img/questionnaire/image-d22.png', 3),
(96, 'Sur un navigateur internet, l\'erreur 404 signifie que la page recherchée est introuvable', 1, 'ressources/img/questionnaire/image-d23.png', 3),
(97, 'Le « Fishing » est une technique frauduleuse utilisée par les pirates informatiques pour récupérer des informations', 0, 'ressources/img/questionnaire/image-d24.png', 3),
(98, 'En plus des versions Android Lollipop et Kitkat, il existe aussi la version Oreo', 1, 'ressources/img/questionnaire/image-d25.png', 3),
(99, 'Généralement, une page internet est composée de HTML et CSS', 1, 'ressources/img/questionnaire/image-d26.png', 3),
(100, 'Moodle est une application de partage de vidéos', 0, 'ressources/img/questionnaire/image-d27.png', 3),
(101, 'Facebook est apparu en 2003', 0, 'ressources/img/questionnaire/image-d28.png', 3),
(102, 'Dans le jeu Angry Birds, les cochons sont de couleur rose', 0, 'ressources/img/questionnaire/image-d29.png', 3),
(103, 'Les requêtes SKL permettent d\'échanger avec une base de données', 0, 'ressources/img/questionnaire/image-d30.png', 3),
(104, 'La définition de Licorne dans l\'univers des startups correspond à une société valorisée à 1 milliard de dollars sans être en bourse', 1, 'ressources/img/questionnaire/image-d31.png', 3),
(105, 'Les créateurs de Google sont Larry Page et Sergueï Brin', 1, 'ressources/img/questionnaire/image-d32.png', 3),
(106, 'L\'open source est le qualificatif associé à un logiciel libre de distribution et de modification du code', 1, 'ressources/img/questionnaire/image-d33.png', 3),
(107, 'L\'adresse MAC est l\'autre nom donné à l\'adresse du site Apple', 0, 'ressources/img/questionnaire/image-d34.png', 3),
(108, 'Didapage est un logiciel permettant à l\'utilisateur de créer des livres virtuels', 1, 'ressources/img/questionnaire/image-d35.png', 3),
(109, 'L\'iBeacon est une monnaie virtuelle', 0, 'ressources/img/questionnaire/image-d36.png', 3),
(110, 'Un CMS est un système de gestion de contenu destinés à la conception et à la mise à jour dynamique de sites Web', 1, 'ressources/img/questionnaire/image-d37.png', 3);

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_user` varchar(20) NOT NULL,
  `score_easy` int(2) NOT NULL DEFAULT '0',
  `score_medium` int(2) NOT NULL DEFAULT '0',
  `score_hard` int(2) NOT NULL DEFAULT '0',
  `score_total` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_score_to_util` (`pseudo_user`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `score`
--

INSERT INTO `score` (`id`, `pseudo_user`, `score_easy`, `score_medium`, `score_hard`, `score_total`) VALUES
(1, 'CrewStiant', 10, 10, 36, 56),
(2, 'Thor', 10, 20, 36, 66),
(3, 'Phoenix 2048', 10, 18, 36, 64),
(4, 'TheBrat', 10, 20, 32, 62),
(5, 'BlueStier', 10, 20, 40, 70),
(6, 'WAYLANDER ', 10, 20, 28, 58),
(7, 'Korgo', 8, 18, 32, 58),
(8, 'la_banane', 10, 20, 40, 70),
(9, 'Mat', 9, 18, 32, 59),
(10, 'Sham', 7, 0, 0, 7),
(11, 'Coralie', 10, 16, 20, 46),
(12, 'Nico', 10, 20, 28, 58),
(13, 'Rémi ', 8, 18, 36, 58),
(14, 'Scozor', 8, 18, 28, 58),
(15, 'Malanthe', 9, 18, 24, 51),
(16, 'Mackfly', 9, 0, 0, 9);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `tranche_d_age` enum('-18','18-25','+25') NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `nom`, `prenom`, `tranche_d_age`, `pseudo`, `mdp`) VALUES
(1, 'crew@crewstiant.tk', 'Crew', 'Stiant', '+25', 'CrewStiant', '$2y$10$8rXEUi92xN/8FR58NhbLGerRgJmpRyHS.fb6g59W3fafd5.rnAqCO'),
(8, 'julien.dequidt@lilo.org', 'Dequidt', 'Julien', '18-25', 'la_banane', '$2y$10$lJLLGrLgwIQA6xXuYsZ2Mex6gekdBgTo6yaDahTtZhDF1eRi9S02m'),

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `fk_score_to_util` FOREIGN KEY (`pseudo_user`) REFERENCES `utilisateur` (`pseudo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
