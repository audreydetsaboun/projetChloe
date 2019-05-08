-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 06 mai 2019 à 13:02
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `ChloeBdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `FicheClient`
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

--
-- Déchargement des données de la table `FicheClient`
--

INSERT INTO `FicheClient` (`id_client`, `nom`, `prenom`, `adresse`, `CP`, `Ville`, `fixe`, `mobile`, `mail`, `particularites`, `date_inscription`) VALUES
(1, 'Petitpas', 'Audrey', '43 rue des marronniers', '77178', 'Saint Pathus', NULL, '0663263391', 'Audrey.petitpas@gmail.com', 'peau sèche', '2019-04-25'),
(2, 'Carbol', 'Béatrice', '11 rue Henri Guérin', '93460', 'Gournay sur Marne', NULL, '0620356271', 'beatrice.carbol@gmail.com', NULL, '2019-04-25'),
(3, 'Carbol', 'Claudine', '3 rue Charles de Gaulle', '94170', 'Le perreux sur Marne', '0143435654', '0665432100', 'claudine.carbol@gmail.com', 'peau mature', '2019-05-03'),
(4, 'Vevaud', 'Valentine', '105 avenue faidherbes', '94170', 'Le Perreux sur Marne', NULL, '0660473003', 'val.vevaud@orange.fr', NULL, '2019-05-03'),
(5, 'Detsaboun', 'Rose', '40 rue des Marronniers', '94170', 'Le Perreux sur Marne', NULL, '0767895432', 'rd2017@gmail.com', 'peau de bébé', '2019-05-01');

-- --------------------------------------------------------

--
-- Structure de la table `Forfait`
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
-- Structure de la table `Mail`
--

CREATE TABLE `Mail` (
  `id_mail` int(11) NOT NULL,
  `date_mail` date NOT NULL,
  `date_differee` date DEFAULT NULL,
  `objet` varchar(255) NOT NULL,
  `corps_message` text NOT NULL,
  `pj` varchar(255) NOT NULL,
  `signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Mail`
--

INSERT INTO `Mail` (`id_mail`, `date_mail`, `date_differee`, `objet`, `corps_message`, `pj`, `signature`) VALUES
(1, '2019-04-25', NULL, 'newsletter d\'avril', 'Bonjour! \r\nEn avril, ne te découvre pas d\'un fil...', '', 'Béatrice'),
(2, '2019-05-06', NULL, 'Newletter de Mai', 'Lorem Ipsum\r\n\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"Il ny a personne qui naime la souffrance pour elle-même, qui ne la recherche et qui ne la veuille pour elle-même...\"\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean posuere est leo. Suspendisse potenti. In vulputate nisi ac libero porttitor auctor. Phasellus tincidunt sem ut nunc congue condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam in ultricies dolor. Morbi a rhoncus purus.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nNam porttitor dui nec est pellentesque, eu eleifend libero tristique.\r\nCurabitur non elit eget ante blandit porttitor.\r\nNunc laoreet ligula sit amet ex elementum, at mollis ex sollicitudin.\r\nMaecenas sit amet tellus imperdiet erat semper porta in ut tellus.\r\nSed in ipsum vitae lorem accumsan placerat et a ligula.\r\n\r\nLorem ipsum.', '', 'Lorem ipsum.'),
(3, '2019-03-06', NULL, 'Newletter de mars', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem sapien, accumsan at venenatis eget, aliquam non nisi. Duis nec hendrerit lectus. Ut ut risus.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nVivamus feugiat neque vitae mi convallis, eget pharetra odio luctus.\r\nCurabitur condimentum enim in tellus cursus, non tempus dui consequat.\r\nSed at nisl vel dolor mollis tincidunt id quis nulla.\r\nProin iaculis nisi non neque malesuada molestie.\r\nPraesent ac lacus dictum, vulputate odio ut, volutpat magna.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In sem sapien, accumsan at venenatis eget, aliquam non nisi. Duis nec hendrerit lectus. Ut ut risus.', '', 'Lorem ipsum.');

-- --------------------------------------------------------

--
-- Structure de la table `Media`
--

CREATE TABLE `Media` (
  `id_media` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `lien` varchar(255) NOT NULL,
  `id_mail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Messagerie`
--

CREATE TABLE `Messagerie` (
  `id_client` int(11) NOT NULL,
  `id_mail` int(11) DEFAULT NULL,
  `id_texto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Texto`
--

CREATE TABLE `Texto` (
  `id_texto` int(11) NOT NULL,
  `date_texto` date NOT NULL,
  `date_differee` date NOT NULL,
  `corps_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `id` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`id`, `prenom`, `mdp`) VALUES
('audrey.detsaboun@gmail.com', 'Audrey', 'AppliChloe1202'),
('beatrice.carbol@gmail.com', 'Béatrice', 'AppliChloe1710');

-- --------------------------------------------------------

--
-- Structure de la table `VisitesClient`
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
-- Déchargement des données de la table `VisitesClient`
--

INSERT INTO `VisitesClient` (`id_visite`, `date`, `soin`, `achat_produit`, `montant_depenses`, `promo`, `cadeau`, `forfait?`, `id_client`) VALUES
(1, '2019-05-02', 'Soin des jambes', 'crème visage', 75, NULL, NULL, 'non', 1),
(2, '2019-05-03', 'soin visage', 'boucles d\'oreilles', 45, NULL, NULL, 'oui', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `FicheClient`
--
ALTER TABLE `FicheClient`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `Forfait`
--
ALTER TABLE `Forfait`
  ADD PRIMARY KEY (`id_forfait`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `Mail`
--
ALTER TABLE `Mail`
  ADD PRIMARY KEY (`id_mail`);

--
-- Index pour la table `Media`
--
ALTER TABLE `Media`
  ADD PRIMARY KEY (`id_media`),
  ADD KEY `id_mail` (`id_mail`);

--
-- Index pour la table `Messagerie`
--
ALTER TABLE `Messagerie`
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_mail` (`id_mail`),
  ADD KEY `id_texto` (`id_texto`);

--
-- Index pour la table `Texto`
--
ALTER TABLE `Texto`
  ADD PRIMARY KEY (`id_texto`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `VisitesClient`
--
ALTER TABLE `VisitesClient`
  ADD PRIMARY KEY (`id_visite`),
  ADD KEY `id_client` (`id_client`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `FicheClient`
--
ALTER TABLE `FicheClient`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Forfait`
--
ALTER TABLE `Forfait`
  MODIFY `id_forfait` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Mail`
--
ALTER TABLE `Mail`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Media`
--
ALTER TABLE `Media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Texto`
--
ALTER TABLE `Texto`
  MODIFY `id_texto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `VisitesClient`
--
ALTER TABLE `VisitesClient`
  MODIFY `id_visite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Forfait`
--
ALTER TABLE `Forfait`
  ADD CONSTRAINT `forfait_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `FicheClient` (`id_client`);

--
-- Contraintes pour la table `Media`
--
ALTER TABLE `Media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`id_mail`) REFERENCES `Mail` (`id_mail`);

--
-- Contraintes pour la table `Messagerie`
--
ALTER TABLE `Messagerie`
  ADD CONSTRAINT `messagerie_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `FicheClient` (`id_client`),
  ADD CONSTRAINT `messagerie_ibfk_2` FOREIGN KEY (`id_mail`) REFERENCES `Mail` (`id_mail`),
  ADD CONSTRAINT `messagerie_ibfk_3` FOREIGN KEY (`id_texto`) REFERENCES `Texto` (`id_texto`);

--
-- Contraintes pour la table `VisitesClient`
--
ALTER TABLE `VisitesClient`
  ADD CONSTRAINT `visitesclient_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `FicheClient` (`id_client`);
