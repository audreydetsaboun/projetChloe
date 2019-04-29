-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 24, 2019 at 09:34 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ChloeBdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `FicheClient`
--

CREATE TABLE `FicheClient` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `CP` varchar(5) DEFAULT NULL,
  `Ville` varchar(50) DEFAULT NULL,
  `fixe` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `particularites` varchar(255) DEFAULT NULL,
  `date_inscription` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Forfait`
--

CREATE TABLE `Forfait` (
  `id_forfait` int(11) NOT NULL,
  `date` date NOT NULL,
  `nom_forfait` varchar(30) NOT NULL,
  `duree_seance` int(11) NOT NULL,
  `qte_seances` int(11) NOT NULL,
  `qte_effectuee` int(11) NOT NULL,
  `qte_restante` int(11) NOT NULL,
  `zone_corps` varchar(255) NOT NULL,
  `prix_forfait` float NOT NULL,
  `montant_regle` float NOT NULL,
  `reste_a_payer` float NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Mail`
--

CREATE TABLE `Mail` (
  `id_mail` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_differee` date DEFAULT NULL,
  `objet` varchar(255) NOT NULL,
  `corps_message` text NOT NULL,
  `pj` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Media`
--

CREATE TABLE `Media` (
  `id_media` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `lien` varchar(255) NOT NULL,
  `id_mail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Messagerie`
--

CREATE TABLE `Messagerie` (
  `id_client` int(11) NOT NULL,
  `id_mail` int(11) DEFAULT NULL,
  `id_texto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Texto`
--

CREATE TABLE `Texto` (
  `id_texto` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_differee` date NOT NULL,
  `corps_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `VisitesClient`
--

CREATE TABLE `VisitesClient` (
  `id_visite` int(11) NOT NULL,
  `date` date NOT NULL,
  `soin` varchar(255) DEFAULT NULL,
  `achat_produit` varchar(255) DEFAULT NULL,
  `montant_depenses` float DEFAULT NULL,
  `promo` varchar(255) DEFAULT NULL,
  `cadeau` varchar(255) DEFAULT NULL,
  `forfait?` enum('non','oui') DEFAULT 'non',
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `FicheClient`
--
ALTER TABLE `FicheClient`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `Forfait`
--
ALTER TABLE `Forfait`
  ADD PRIMARY KEY (`id_forfait`),
  ADD KEY `id_client` (`id_client`);

--
-- Indexes for table `Mail`
--
ALTER TABLE `Mail`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indexes for table `Media`
--
ALTER TABLE `Media`
  ADD PRIMARY KEY (`id_media`),
  ADD KEY `id_mail` (`id_mail`);

--
-- Indexes for table `Messagerie`
--
ALTER TABLE `Messagerie`
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_mail` (`id_mail`),
  ADD KEY `id_texto` (`id_texto`);

--
-- Indexes for table `Texto`
--
ALTER TABLE `Texto`
  ADD PRIMARY KEY (`id_texto`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `VisitesClient`
--
ALTER TABLE `VisitesClient`
  ADD PRIMARY KEY (`id_visite`),
  ADD KEY `id_client` (`id_client`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `FicheClient`
--
ALTER TABLE `FicheClient`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Forfait`
--
ALTER TABLE `Forfait`
  MODIFY `id_forfait` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Mail`
--
ALTER TABLE `Mail`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Media`
--
ALTER TABLE `Media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Texto`
--
ALTER TABLE `Texto`
  MODIFY `id_texto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `VisitesClient`
--
ALTER TABLE `VisitesClient`
  MODIFY `id_visite` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Forfait`
--
ALTER TABLE `Forfait`
  ADD CONSTRAINT `forfait_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `FicheClient` (`id_client`);

--
-- Constraints for table `Media`
--
ALTER TABLE `Media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`id_mail`) REFERENCES `Mail` (`id_mail`);

--
-- Constraints for table `Messagerie`
--
ALTER TABLE `Messagerie`
  ADD CONSTRAINT `messagerie_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `FicheClient` (`id_client`),
  ADD CONSTRAINT `messagerie_ibfk_2` FOREIGN KEY (`id_mail`) REFERENCES `Mail` (`id_mail`),
  ADD CONSTRAINT `messagerie_ibfk_3` FOREIGN KEY (`id_texto`) REFERENCES `Texto` (`id_texto`);

--
-- Constraints for table `VisitesClient`
--
ALTER TABLE `VisitesClient`
  ADD CONSTRAINT `visitesclient_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `FicheClient` (`id_client`);
