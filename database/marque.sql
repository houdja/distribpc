-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 30 nov. 2021 à 13:13
-- Version du serveur :  10.1.29-MariaDB
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `distribpc`
--

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id_marque` int(11) NOT NULL,
  `nom_marque` varchar(20) CHARACTER SET utf8 NOT NULL,
  `image_marque` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id_marque`, `nom_marque`, `image_marque`) VALUES
(1, 'AMD', 'amd.png'),
(2, 'Apple', 'apple.jpg'),
(3, 'ASUS', 'asus.gif'),
(4, 'Bird', 'bird.png'),
(5, 'DELL', 'dell.jpg'),
(6, 'Distribpc', 'distribpc.png'),
(7, 'Edifier', 'edifier.png'),
(8, 'Elgato', 'elgato.gif'),
(9, 'Fifine', 'fifine.jpg'),
(10, 'G.skill', 'gskill.png'),
(11, 'Gainward', 'gainward.png'),
(12, 'Gigabyte', 'gigabyte.jpg'),
(13, 'Hyper x', 'hyperx.jpg'),
(14, 'Intel', 'intel.png'),
(15, 'LG', 'LG.jpg'),
(16, 'Logitech', 'logitec.png'),
(17, 'MSI', 'logoMSI.jpg'),
(18, 'NVIDIA', 'nvidia.jpg'),
(19, 'Phillips', 'phillips.jpg'),
(20, 'Razer', 'razer.png'),
(21, 'Roccat', 'roccat.png'),
(22, 'Samsung', 'samsung.jpg'),
(23, 'Sapphire', 'sapphire.png'),
(24, 'Sennheiser', 'Sennheiser.jpg'),
(26, 'Aorus', 'aorus.jpg'),
(27, 'HP', 'hp.png'),
(30, 'Fox spirit', 'foxspirit.jpg'),
(31, 'Textorm', 'textorm.png'),
(32, 'Kingston', 'kingston.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id_marque`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id_marque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
