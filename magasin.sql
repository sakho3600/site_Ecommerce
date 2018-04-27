-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 27 avr. 2018 à 17:08
-- Version du serveur :  10.1.25-MariaDB
-- Version de PHP :  7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `magasin`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` char(5) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `prix` decimal(8,2) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '1.jpg',
  `promo` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `designation`, `prix`, `categorie`, `image`, `promo`) VALUES
('1', 'super phone', '2000.00', 'mobile phone', 'm1.jpg', 1),
('11', 'panasonic', '22.22', 'cameras', '2.jpg', 0),
('12', 'PC ACER \r\nordinateur', '22.00', 'ordinateur,tablette', 'PC1.jpg', 0),
('13', 'qualite_camera', '33.00', 'cameras', '4.jpg', 0),
('2', 'bon_camera', '3000.00', 'cameras', '3.jpg', 0),
('A014', 'pc hp ordinateur', '5880.00', 'ordinateur,tablette', 'PC2.jpg', 0),
('A0154', 'PC DELl ordinateur', '7000.00', 'ordinateur,tablette', 'PC3.jpg', 0),
('A0188', 'super camera', '5000.00', 'cameras', '1.jpg', 0),
('A1021', 'samsung phone', '12000.00', 'mobile phone', 'm3.jpg', 0),
('CA300', 'nokia phone', '329.00', 'mobile phone', 'm2.png', 0),
('CAS07', 'samsung ordinateur', '26.90', 'ordinateur,tablette', 'PC4.jpg', 0),
('CP100', 'tosheba ordinateur', '1490.00', 'ordinateur,tablette', 'PC5.jpg', 0),
('DEL30', 'Portable Dell X300', '1715.00', 'ordinateur,tablette', 'PC8.jpg', 0),
('DVD75', 'phone samsung', '1700.50', 'mobile phone', 'm5.jpg', 0),
('gsg', 'fgg', '4664.00', 'bbb', '1.jpg', 0),
('HP497', 'super phone ', '1500.00', 'mobile phone', 'm6.jpg', 0),
('jj', 'jj', '11.00', 'jj', 'b1.jpg', 0),
('NIK55', 'Nikon phone', '269.00', 'mobile phone', 'm7.jpg', 0),
('NIK80', 'Nikon F80 phone', '479.00', 'mobile phone', 'm8.jpg', 1),
('SAX15', 'height camera ', '1999.00', 'cameras', '5.jpg', 0),
('SOXMP', 'new camera ', '2399.00', 'cameras', '11.jpg', 1),
('ss', 'sss', '44.00', 'ss', '11.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `Telephone` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `login`, `mail`, `Telephone`, `password`) VALUES
(1, 'essofyany', 'je suis là', 670749545, 'brahim'),
(2, 'nomm', 'emaill', 654844, 'pword'),
(3, 'nomsm', 'esmaill', 55, 'pwsord'),
(4, 'b', 'zzzz@hh.no', 1313131, '1'),
(5, 'essofyany', 'brahim.essofyany@gmail.com', 670749545, '19940150'),
(6, '', '', 0, ''),
(7, '', '', 0, ''),
(8, 'jhghg', 'ghghfgf@jhh.vv', 670164454, '456'),
(9, 'jhghg', 'ghghfgf@jhh.vv', 670164454, '123');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_cmd` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_cmd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne`
--

CREATE TABLE `ligne` (
  `id_comm` mediumint(8) UNSIGNED NOT NULL,
  `id_article` char(5) NOT NULL,
  `quantite` tinyint(3) UNSIGNED NOT NULL,
  `prix_unit` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_article` char(5) NOT NULL,
  `quantite` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `id_client`, `id_article`, `quantite`) VALUES
(18, 4, '12', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `passwd`, `email`) VALUES
(1, 'brahim', 'brahim', 'brahim.essofyany@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_cmd`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `ligne`
--
ALTER TABLE `ligne`
  ADD PRIMARY KEY (`id_comm`,`id_article`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `id_article` (`id_article`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_cmd` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ligne`
--
ALTER TABLE `ligne`
  MODIFY `id_comm` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
