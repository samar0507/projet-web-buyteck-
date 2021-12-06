-- phpMyAdmin SQL Dump

-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 04:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_web`
--
CREATE DATABASE IF NOT EXISTS `projet_web` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projet_web`;

-- --------------------------------------------------------

--
-- Table structure for table `actualites`
--

CREATE TABLE `actualites` (
  `id_act` int(11) NOT NULL,
  `text` varchar(100) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `id_ad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `actualites`:
--   `id_ad`
--       `admin` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `admin`:
--   `id`
--       `personne` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `int_cat` int(40) NOT NULL,
  `nom_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `categories`:
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date_creation_co` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `client`:
--   `id`
--       `personne` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `id_com` int(11) NOT NULL,
  `date_com` date NOT NULL,
  `montant_com` int(11) NOT NULL,
  `lieu_liv` varchar(50) NOT NULL,
  `mode_paiement` varchar(30) NOT NULL,
  `quantite` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `reference` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `commandes`:
--   `id`
--       `client` -> `id`
--   `reference`
--       `produits` -> `refference`
--

-- --------------------------------------------------------

--
-- Table structure for table `paniers`
--

CREATE TABLE `paniers` (
  `id_panier` int(11) NOT NULL,
  `nbr_pro` int(11) NOT NULL,
  `etat_panier` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `reference` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `paniers`:
--   `id`
--       `personne` -> `id`
--   `reference`
--       `produits` -> `refference`
--

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Tel` int(11) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `personne`:
--

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `idprod` int(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `int_cat` int(20) NOT NULL,
  `description` text NOT NULL,
  `prix` int(100) NOT NULL,
  `quantite` int(100) NOT NULL,
  `disponibilite` varchar(70) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `produits`:
--   `id_cat`
--       `categories` -> `int_cat`
--

-- --------------------------------------------------------

--
-- Table structure for table `reclamation`
--

CREATE TABLE `reclamation` (
  `id_rec` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `date_rec` date NOT NULL,
  `id` int(11) NOT NULL,
  `id_ad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `reclamation`:
--   `id_ad`
--       `admin` -> `id`
--   `id`
--       `client` -> `id`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id_act`),
  ADD KEY `fk_id_act` (`id_ad`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `fk_id_a` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`int_cat`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`username`),
  ADD KEY `fk_id_p` (`id`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD KEY `fk_idp` (`id`),
  ADD KEY `fk_pp` (`reference`);

--
-- Indexes for table `paniers`
--
ALTER TABLE `paniers`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `fk_id_pan` (`id`),
  ADD KEY `fk_ref_pan` (`reference`);

--
-- Indexes for table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--

--
-- Indexes for table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_rec`),
  ADD KEY `pk_id_rec` (`id`),
  ADD KEY `fk_idad_rec` (`id_ad`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actualites`
--
ALTER TABLE `actualites`
  ADD CONSTRAINT `fk_id_act` FOREIGN KEY (`id_ad`) REFERENCES `admin` (`id`);

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_id_a` FOREIGN KEY (`id`) REFERENCES `personne` (`id`);

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_id_p` FOREIGN KEY (`id`) REFERENCES `personne` (`id`);

--
-- Constraints for table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `fk_idp` FOREIGN KEY (`id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `fk_pp` FOREIGN KEY (`reference`) REFERENCES `produits` (`refference`);

--
-- Constraints for table `paniers`
--
ALTER TABLE `paniers`
  ADD CONSTRAINT `fk_id_pan` FOREIGN KEY (`id`) REFERENCES `personne` (`id`),
 
--

--
-- Constraints for table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `fk_idad_rec` FOREIGN KEY (`id_ad`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `pk_id_rec` FOREIGN KEY (`id`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
