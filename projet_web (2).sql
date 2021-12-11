-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 déc. 2021 à 18:35
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id_act` int(11) NOT NULL,
  `text` varchar(100) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `id_ad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `int_cat` int(40) NOT NULL,
  `nom_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`int_cat`, `nom_cat`) VALUES
(14, 'Mobiles'),
(15, 'Accesories'),
(16, 'Computer'),
(17, 'Audio');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `passwordd` varchar(30) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `noo` int(20) NOT NULL,
  `dateb` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `Role` varchar(20) DEFAULT 'user',
  `bloqué` int(1) NOT NULL,
  `verification` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `username`, `passwordd`, `nom`, `prenom`, `noo`, `dateb`, `email`, `Role`, `bloqué`, `verification`) VALUES
(1, 'kamel', '123456A', 'kamel', 'fridhi', 98653214, '0000-00-00', 'kamel.fridhi@esprit.tn', 'user', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `num_commande` int(11) NOT NULL,
  `date_commande` datetime NOT NULL,
  `status` varchar(11) CHARACTER SET latin1 NOT NULL,
  `prixTotal` float NOT NULL,
  `type_Livraison` varchar(11) CHARACTER SET latin1 NOT NULL,
  `type_Paiment` varchar(11) CHARACTER SET latin1 NOT NULL,
  `id_Client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `num_commande`, `date_commande`, `status`, `prixTotal`, `type_Livraison`, `type_Paiment`, `id_Client`) VALUES
(4, 9369087, '2021-12-11 14:47:18', 'Confirmed', 15, 'DELIVERY', 'ONLINE', 1),
(5, 7453244, '2021-12-11 15:28:21', 'Cancelled', 302, 'DELIVERY', 'ONLINE', 1),
(6, 7587314, '2021-12-11 16:18:55', 'PENDING', 150, 'DELIVERY', 'ONLINE', 1);

-- --------------------------------------------------------

--
-- Structure de la table `detailcommande`
--

CREATE TABLE `detailcommande` (
  `id_detcom` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `num_commande` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `detailcommande`
--

INSERT INTO `detailcommande` (`id_detcom`, `id_produit`, `num_commande`, `qty`) VALUES
(4, 45, 9369087, 3),
(5, 45, 7453244, 4),
(6, 46, 7453244, 2),
(7, 47, 7453244, 1),
(8, 49, 7453244, 2),
(9, 45, 7587314, 1),
(10, 46, 7587314, 1),
(11, 47, 7587314, 1),
(12, 48, 7587314, 1),
(13, 49, 7587314, 1);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_produit` int(11) NOT NULL,
  `qte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `id_client`, `id_produit`, `qte`) VALUES
(39, 1, 46, 1);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Tel` int(11) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `idprod` int(20) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `int_cat` int(20) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL,
  `quantite` int(100) NOT NULL,
  `disponibilite` varchar(70) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`idprod`, `nom`, `int_cat`, `description`, `prix`, `quantite`, `disponibilite`, `image`) VALUES
(45, 'IPHONE 12 PRO MAX 128 GO', 14, '6.7 Super Retina XDR OLED HDR10 display ', 4679000, 10, 'stock', 0x70726f64756374312e6a7067),
(46, 'PC PORTABLE APPLE MACBOOK PRO 16', 16, '16 \"UHD 3072x1920 IPS HDR display - Touch Bar - Intel Core i9-9880H, up to 4.8 GHz, 16 MB cache ', 9799000, 10, 'stock', 0x70726f64756374322e6a7067),
(47, 'Samsung Galaxy Note 20 Ultra', 14, 'The Galaxy Note20 ultra offers incomparable performance: 6.9 \"Super amoled + / 8GB memory / 256GB storage / Front camera 10.0 MP / Rear camera 12.0 MP + 16.0 MP + 108.0 MP / 4500 mAh battery ', 4299000, 30, 'In stock', 0x70726f64756374342e6a7067),
(48, 'IPHONE 11 64 GO - NOIR (MHDA3AA-A)', 14, '6.1 \"Retina IPS screen - Resolution: 828 x 1792 pixels - Processor: Apple A13 Bionic Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder) - Operating system: iOS 13 - RAM memory: 4 GB - Storage: 64 GB ', 2599000, 3, 'In stock', 0x70726f64756374362e706e67),
(49, 'TOSHIBA CANVIO BASICS EXTERNAL HARD DRIVE / 1TB / BLACK', 15, 'Disque dur externe de 2.5\" au design noir mat élégant - Capacité 1 To - Interface USB 3.0 - Taux de transfert de données: 5000 Mbit/s. - Compatible Winndows 7 / 8.1 / 10 et MacOS après reformatage - Couleur Noir - Garantie 1 an', 129000, 37, 'In stock', 0x70726f6475637431302e706e67);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `typer` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `date_rec` date NOT NULL,
  `comment` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `id_rec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`typer`, `etat`, `date_rec`, `comment`, `id`, `id_rec`) VALUES
('shipping', ' waiting', '2021-12-09', 'hey', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(11) NOT NULL,
  `content` varchar(11) NOT NULL,
  `id_reclamation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id_act`),
  ADD KEY `fk_id_act` (`id_ad`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`int_cat`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `detailcommande`
--
ALTER TABLE `detailcommande`
  ADD PRIMARY KEY (`id_detcom`),
  ADD KEY `fk_produit` (`id_produit`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD UNIQUE KEY `id_produit_2` (`id_produit`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`idprod`),
  ADD KEY `fk_int` (`int_cat`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_rec`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_reclamation` (`id_reclamation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `int_cat` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `detailcommande`
--
ALTER TABLE `detailcommande`
  MODIFY `id_detcom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `idprod` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id_rec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
