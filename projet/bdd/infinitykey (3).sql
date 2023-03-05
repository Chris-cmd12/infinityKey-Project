-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 18 déc. 2021 à 11:15
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `infinitykey`
--

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(255) NOT NULL,
  `id_products` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `platform` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `id_products`, `name`, `price`, `platform`, `image`) VALUES
(20, 12, 'The Legend of Zelda: Breath of the Wild', 65.99, '', 'jeu-nintendo-the-legend-of-zelda-breath-of-the-wild-switch-cover.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id_products` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `platform` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id_products`, `name`, `price`, `platform`, `image`) VALUES
(1, 'Age of Empires IV', 37.87, 'PC', 'age-of-empires-iv.jpg'),
(2, 'The Elder Scrolls V: Skyrim: Anniversary Edition', 31.99, 'PC', 'the-elder-scrolls-v-skyrim-anniversary-edition-anniversary-edition.jpg'),
(3, 'Microsoft Flight Simulator', 47.95, 'PC', 'microsoft-flight-simulator.jpg'),
(4, 'Halo Infinite - Campagne ', 46.98, 'XBOX', 'halo infinite.jpg'),
(5, 'Forza Horizon 5', 43.99, 'XBOX', 'forza5.jpg'),
(6, 'My Friend Peppa Pig ', 33.49, 'XBOX', 'my-friend-peppa-pig.jpg'),
(7, 'Ratchet & Clank Rift Apart', 64.99, 'PLAYSTATION', 'ratchet-clank-rift-apart.jpg'),
(8, 'Ghost of Tsushima', 54.96, 'PLAYSTATION', 'ghost-of-tsushima-directors-cut-ps5-directors-cut.jpg'),
(9, 'God of War', 33.95, 'PLAYSTATION', 'god-of-war.jpg'),
(10, 'Animal Crossing: New Horizons', 47.98, 'NINTENDO', 'jeu-nintendo-animal-crossing-new-horizons.jpg'),
(11, 'Super Smash Bros. Ultimate', 64.99, 'NINTENDO', 'jeu-nintendo-super-smash-bros-ultimate.jpg'),
(12, 'The Legend of Zelda: Breath of the Wild', 65.99, 'NINTENDO', 'jeu-nintendo-the-legend-of-zelda-breath-of-the-wild-switch-cover.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
