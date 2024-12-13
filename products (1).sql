-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 déc. 2024 à 21:16
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `beast`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(50) NOT NULL,
  `material` varchar(100) NOT NULL,
  `fabrication` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `img`, `price`, `name`, `description`, `color`, `material`, `fabrication`) VALUES
(1, 'img1.png', 220, 'VESTE BLEU', 'Après la veste noir iconique de BEAST, une nouvelle coloris fait son apparition. Très attirant, la veste bleu apporte sa touche d\'élégance et de beauté. ', 'Bleu', 'Coton ciré, Softshell,Pul, Polyester, Polyamide', 'Fabriqué en France'),
(2, 'img2.png', 90, 'PANTALON BEAST VERT', 'Le pantalon vert de la marque de BEAST, vous offre une qualité supérieur, capable de durer plusieurs années. Élégant, le pantalon peut s\'adapter à tout type de style vestimentaire.', 'Vert', 'Coton', 'Fabriqué en Turquie'),
(3, 'img3.png', 180, 'VESTE NOIR', 'La veste noir incontournable de la marque BEAST, une qualité exceptionnel, capable de s\'adapter à tout type d\'intempérie. Sa couleur sobre, capable de s\'adapter à tout type d\'habits.', 'Noir', 'Coton ciré, Softshell,Pul, Polyester, Polyamide', 'Fabriqué en France');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
