-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 14 juin 2023 à 18:00
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `homemade`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `numero_telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `numero_telephone`, `email`, `mot_de_passe`) VALUES
(1, 'Jaaouan', 'Ashraf', '123', 'ashraf@gmail.com', 'ashraf123'),
(2, 'Assaid', 'Amina', '0608091012', 'amina@gmail.com', 'amina123'),
(3, 'Zentari', 'Maryam', '0608091012', 'maryam@gmail.com', 'maryam123'),
(4, 'Samadi', 'Zaid', '0608091012', 'zaid@gmail.com', 'zaid123'),
(5, 'samia', 'taouali', '0656453423', 'samia123', 'samia123'),
(6, 'belyamani', 'ferdaous', '0656453423', 'ferdaous@gmail.com', 'ferdaous123');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `statut_commande` varchar(255) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_livraison` date DEFAULT NULL,
  `date_validation` date DEFAULT NULL,
  `adresse_livraison` varchar(255) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `titre`, `details`, `statut_commande`, `date_debut`, `date_livraison`, `date_validation`, `adresse_livraison`, `id_client`, `id_service`) VALUES
(1, 'Jus abricot', 'Je souhaiterais commander un jus d’abricot \navec une quantité de deux litres, s il vous plaît.', 'Livrer', '2023-06-12', '2023-06-21', '2023-06-11', '123 Maple AvenueAnytown,Tanger12345', 1, 1),
(2, 'Confiture Fraise', 'Je souhaiterais commander une Confiture defraise \r\navec une quantité de 1kg, s il vous plaît.', 'Rejeter', '2023-06-12', '2023-06-13', '2023-06-11', '123 Maple AvenueAnytown,Tanger12345', 1, 1),
(3, 'gateau chocolat', 'Je souhaiterais commander un gateau de chocolat, s il vous plaît.', 'Livrer', '2023-06-12', '2023-06-11', '2023-06-12', '123 Maple AvenueAnytown,Tanger12345', 1, 2),
(4, 'Salade de fruits', 'Je souhaiterais commander une Salade de fruits \r\navec une quantité de 500g, s il vous plaît.', 'En cours', NULL, NULL, NULL, '123 Maple AvenueAnytown,Tanger12345', 1, 4),
(5, 'Epices', 'Je souhaiterais commander 200G de Kamoun , 100g tahmira ,50g qasbour, s il vous plaît.', NULL, NULL, NULL, NULL, '123 Maple AvenueAnytown,Tanger12345', NULL, NULL),
(6, 'Glace caramel', 'Je souhaiterais commander un glace de caramel\r\navec une quantité de deux litres, s il vous plaît.', NULL, NULL, NULL, NULL, '123 Maple AvenueAnytown,Tanger12345', NULL, NULL),
(7, 'jus de fraise', 'Je souhaiterais commander un jus d’abricot ', NULL, NULL, NULL, NULL, 'Adress :1234 Maple AvenueAnytown, tanger 12345', NULL, NULL),
(11, 'jus de fraise', 'Je souhaiterais commander un jus d’abricot ', 'Livrer', NULL, NULL, NULL, 'complex el hassani', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `contenu` varchar(255) DEFAULT NULL,
  `date_creation` date DEFAULT current_timestamp(),
  `id_client` int(11) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `contenu`, `date_creation`, `id_client`, `id_service`) VALUES
(1, 'J\'ai récemment acheté cette confiture faite maison et je dois dire que c\'est un véritable régal.La combinaison parfaite de fruits frais et de sucre crée une symphonie de saveurs dans chaque pot..', '2023-06-12', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `gallerie`
--

CREATE TABLE `gallerie` (
  `id_image` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `id_service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `gallerie`
--

INSERT INTO `gallerie` (`id_image`, `image`, `type`, `id_service`) VALUES
(4, 'imgs/jus1.svg', 'secondaire', 1),
(5, 'imgs/jus2.svg', 'secondaire', 1),
(6, 'imgs/jus3.svg', 'secondaire', 1),
(7, 'imgs/photo1.svg', 'primaire', 1),
(8, 'imgs/photo2.svg', 'primaire', 2),
(9, 'imgs/photo3.svg', 'primaire', 3),
(10, 'imgs/photo4.svg', 'primaire', 4),
(11, 'imgs/photo5.svg', 'primaire', 5),
(12, 'imgs/photo6.svg', 'primaire', 6);

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

CREATE TABLE `prestataire` (
  `id_prestataire` int(11) NOT NULL,
  `nom` int(100) DEFAULT NULL,
  `prenom` int(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `numero_telephone` varchar(20) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `prestataire`
--

INSERT INTO `prestataire` (`id_prestataire`, `nom`, `prenom`, `image`, `numero_telephone`, `mot_de_passe`, `email`) VALUES
(1, 0, 0, NULL, '060908076', 'salma123', 'salma@gmail.com'),
(2, 0, 0, NULL, '09876543421', 'yassmin123', 'yassmin@gmail.com'),
(3, 0, 0, NULL, '09876543421', 'doha123', 'doha@gmail.com'),
(4, 0, 0, NULL, '09876543421', 'nada123', 'nada@gmail.com'),
(5, 0, 0, NULL, '0656453423', 'haitam123', 'haitam@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id_service` int(11) NOT NULL,
  `image_categorie` varchar(255) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `min_prix` decimal(10,2) DEFAULT NULL,
  `max_prix` decimal(10,2) DEFAULT NULL,
  `id_prestataire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id_service`, `image_categorie`, `titre`, `description`, `categorie`, `min_prix`, `max_prix`, `id_prestataire`) VALUES
(1, 'imgs/catégorie6.svg', 'Jus naturels', 'jus naturels faites maison tu peux choisir les fruits que tu veux pour le jus y a des differents tailles 1L 20DH 2L 35DH 3L 70DH 4L 110DH 5L=130dh', 'produits faites maison', '20.00', '130.00', 1),
(2, '', 'Confitures naturels', 'confitures naturel 100% fruits naturels sucrée et sons sucre ta le choix pour choisires pour les taille y a différents taille entre 270G et 1kg', 'produits faites maison', '80.00', '300.00', NULL),
(3, '', 'epices faits maison', 'epices de la natures  broyées à la main tou ce qui ta cuisine veut', 'produits faites maison', '30.00', '300.00', NULL),
(4, '', ' Glaces faits maison', 'découvrez nos incroyables Glaces origine 100% faites maison fruits que vous voulez des gouts magiques chocolat , cookies ,caramel et plein des aromes pour vous vous pouvez commandez de 500g jusqu a 3kg ', 'produits faites maison', '100.00', '500.00', NULL),
(5, '', ' Salades fruits', 'Salades de fruits et dessert  avec des recettes originals pour donnerle vrai gout de salades les ingrédients naturel traditionels créer un gout origine  ', 'produits faites maison', '100.00', '500.00', NULL),
(6, '', ' Les gateaux', ' découvrez notre spéciales patisserie ,des délicieux galettes ,gateaux ,tartes ce que vous voulez contactez nous pour plus d informations ', 'produits faites maison', '100.00', '1000.00', NULL),
(13, 'imgs/catégorie1.svg', NULL, NULL, 'Beldi Couture', NULL, NULL, NULL),
(14, 'imgs/catégorie2.svg', NULL, NULL, 'Soins Du Hammam', NULL, NULL, NULL),
(15, 'imgs/catégorie3.svg', NULL, NULL, 'Beldi Cuisine', NULL, NULL, NULL),
(16, 'imgs/catégorie4.svg', NULL, NULL, 'Bijoux', NULL, NULL, NULL),
(17, 'imgs/catégorie5.svg', NULL, NULL, 'Produits Naturels', NULL, NULL, NULL),
(54, NULL, 'YOUGURT', 'yougurt naturel sans produits chimiques', '', '25.00', '23.00', 1),
(55, NULL, '', '', '', '0.00', '0.00', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_service` (`id_service`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_service` (`id_service`);

--
-- Index pour la table `gallerie`
--
ALTER TABLE `gallerie`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_service` (`id_service`);

--
-- Index pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD PRIMARY KEY (`id_prestataire`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `id_prestataire` (`id_prestataire`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `gallerie`
--
ALTER TABLE `gallerie`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT pour la table `prestataire`
--
ALTER TABLE `prestataire`
  MODIFY `id_prestataire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `services` (`id_service`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `services` (`id_service`);

--
-- Contraintes pour la table `gallerie`
--
ALTER TABLE `gallerie`
  ADD CONSTRAINT `gallerie_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `services` (`id_service`);

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`id_prestataire`) REFERENCES `prestataire` (`id_prestataire`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
