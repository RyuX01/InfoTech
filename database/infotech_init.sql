-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 23 juil. 2022 à 13:50
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `infotech_init`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `cart_user_FK` (`user_id`),
  KEY `cart_product_FK` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Laptop'),
(2, 'SmartPhone'),
(3, 'Tablettes');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) DEFAULT NULL,
  `client_lastname` varchar(50) DEFAULT NULL,
  `client_phone` varchar(50) DEFAULT NULL,
  `client_address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_title` varchar(50) DEFAULT NULL,
  `comment_content` text,
  `comment_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `COMMENT_user_FK` (`user_id`),
  KEY `COMMENT_product_FK` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_email` varchar(50) DEFAULT NULL,
  `emp_username` varchar(50) DEFAULT NULL,
  `emp_password` varchar(50) DEFAULT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `emp_lastname` varchar(50) DEFAULT NULL,
  `emp_phone` varchar(50) DEFAULT NULL,
  `emp_salaire` varchar(50) DEFAULT NULL,
  `emp_status` varchar(50) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `emp_role_FK` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`emp_id`, `emp_email`, `emp_username`, `emp_password`, `emp_name`, `emp_lastname`, `emp_phone`, `emp_salaire`, `emp_status`, `role_id`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'admin', 'admin', '456789', '10000', 'activer', 1);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `payment_status` varchar(50) NOT NULL,
  `total_price` decimal(15,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `privilege`
--

DROP TABLE IF EXISTS `privilege`;
CREATE TABLE IF NOT EXISTS `privilege` (
  `priv_id` int(11) NOT NULL AUTO_INCREMENT,
  `priv_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`priv_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `privilege`
--

INSERT INTO `privilege` (`priv_id`, `priv_name`) VALUES
(1, 'admin'),
(2, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(500) DEFAULT NULL,
  `product_brand` varchar(500) DEFAULT NULL,
  `product_qt` int(11) DEFAULT NULL,
  `product_price` decimal(15,2) DEFAULT NULL,
  `product_description` varchar(500) DEFAULT NULL,
  `product_info1` varchar(100) DEFAULT NULL,
  `product_info2` varchar(100) DEFAULT NULL,
  `product_info3` varchar(100) DEFAULT NULL,
  `product_info4` varchar(100) DEFAULT NULL,
  `product_img` varchar(500) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `product_category_FK` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_brand`, `product_qt`, `product_price`, `product_description`, `product_info1`, `product_info2`, `product_info3`, `product_info4`, `product_img`, `cat_id`) VALUES
(43, 'iPad 10,2', 'Apple', 20, '285.09', '32 Go - Gris sidÃ©ral', '32 Go - Gris sidÃ©ral', NULL, NULL, NULL, NULL, 1),
(38, 'MacBook Air', 'MacBook ', 20, '375.82', 'Core i5 - 1,8 GHz - SSD 128 Go', 'Core i5 - 1,8 GHz - SSD 128 Go', NULL, NULL, NULL, NULL, 1),
(39, 'AirPods (2016)', 'Apple', 30, '80.88', 'avec boitier de charge Lightning - Blanc', 'avec boitier de charge Lightning - Blanc', NULL, NULL, NULL, NULL, 1),
(40, 'Apple Watch (Series 6)', 'Apple', 80, '302.00', 'Septembre 2020 44 mm - Aluminium Argent - Bracelet Sport Blanc', 'Septembre 2020 44 mm - Aluminium Argent - Bracelet Sport Blanc', NULL, NULL, NULL, NULL, 1),
(42, 'Souris ', 'Apple', 20, '24.99', 'Advance Shape 6D Sans fil', 'Advance Shape 6D Sans fil', NULL, NULL, NULL, NULL, 1),
(37, 'Nintendo Switch OLED', 'oled', 20, '319.00', '64Go - Blanc/Noir', '64Go - Blanc/Noir', NULL, NULL, NULL, NULL, 1),
(44, 'Dell Latitude E7470 14', 'Dell', 20, '291.69', 'Core i5 2,4 GHz - SSD 256 Go - 16 Go AZERTY - FranÃ§ais', 'Core i5 2,4 GHz - SSD 256 Go - 16 Go AZERTY - FranÃ§ais', NULL, NULL, NULL, NULL, 1),
(45, 'Apple Watch (Series SE)', 'Apple', 20, '264.00', 'GPS 40 mm - Aluminium Argent - Bracelet sport Blanc', 'GPS 40 mm - Aluminium Argent - Bracelet sport Blanc', NULL, NULL, NULL, NULL, 1),
(41, 'iPhone 12 Pro', 'Apple', 20, '777.51', '128 Go - Bleu pacifique - DÃ©bloquÃ©', '128 Go - Bleu pacifique - DÃ©bloquÃ©', NULL, NULL, NULL, NULL, 1),
(36, 'Apple Watch (Series SE)', 'Apple', 30, '254.99', 'GPS 40 mm - Aluminium Gris sidÃ©ral - Bracelet sport Noir', 'GPS 40 mm - Aluminium Gris sidÃ©ral - Bracelet sport Noir', NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`rating_id`),
  KEY `rating_user_FK` (`user_id`),
  KEY `rating_product_FK` (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'developpeur front end'),
(3, 'developpeur backt end'),
(4, 'developpeur front end');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(50) DEFAULT NULL,
  `user_username` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `priv_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_privilege_FK` (`priv_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_username`, `user_password`, `priv_id`) VALUES
(2, 'test@gmail.com', 'test', '123', 2),
(8, 'test2@gmail.com', 'test2', '123', 2),
(7, 'test3@gmail.com', 'test3', '123', 2),
(9, 'test4@gmail.com', 'test4', '1234', 2),
(10, 'hash@gmail.com', 'testhash', 'hh', 2),
(12, 'admin@gmail.com', 'admin', 'admin', 1),
(13, 'manelhamici9@gmail.com', 'Manel-Hamici2', '123', 2),
(14, 'zakari@gmail.com', 'zakari', '123', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user_wishlist`
--

DROP TABLE IF EXISTS `user_wishlist`;
CREATE TABLE IF NOT EXISTS `user_wishlist` (
  `whishlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`whishlist_id`),
  KEY `user_wishlist_user_FK` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `wishlist_p`
--

DROP TABLE IF EXISTS `wishlist_p`;
CREATE TABLE IF NOT EXISTS `wishlist_p` (
  `product_id` int(11) NOT NULL,
  `whishlist_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`whishlist_id`),
  KEY `whishlist_p_user_wishlist0_FK` (`whishlist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
