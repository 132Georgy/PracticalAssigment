-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2020 at 10:03 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internetshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `model_id`, `name`, `code`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'BMW x5', 'bmw-x5', 'The BMW X5 is a mid-size, rear-wheel drive luxury SUV produced by BMW. The X5 made its debut in 1999. It was BMW\'s first SUV and it also featured all-wheel drive and was available with either manual or automatic transmission.', NULL, 70000, NULL, NULL),
(2, 1, 'BMW 750', 'bmw-750', 'The BMW 7 Series is a full-size luxury sedan produced by the German automaker BMW since 1977. It is the successor to the BMW E3 \"New Six\" sedan and is currently in its sixth generation.', NULL, 72000, NULL, NULL),
(3, 5, 'Audi Q8', 'audi-q8', 'The Audi Q8 is a mid-size luxury crossover SUV coupé made by Audi that was launched in 2018.[3] It is the flagship of the Audi SUV line, and is being produced at the Volkswagen Bratislava Plant.', NULL, 65000, NULL, NULL),
(4, 3, 'Toyota Land Cruiser', 'toyota-land-cruiser', 'The Toyota Land Cruiser is a series of four-wheel drive vehicles produced by the Japanese automobile manufacturer Toyota. It is Toyota\'s longest running series of models and the 2nd longest SUV in production behind the Chevrolet Suburban. As of 2019, the sales of the Land Cruiser totalled more than 10 million units worldwide.', NULL, 55000, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
