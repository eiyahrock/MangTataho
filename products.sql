-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 05:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'ChilledTaho', 'ChilledTaho', 90.00, 'assets/productsContent/p-image-1.png'),
(2, 'TahoCheesecake', 'TahoCheesecake', 100.00, 'assets/no-bake-taho-cheesecake-1.png'),
(3, 'PremiumMatcha/Choco', 'PremiumSoy', 80.00, 'assets/productsContent/p-image-2.png'),
(4, 'TahoIceCream', 'TahoIceCream', 90.00, 'assets/taho-icecream-1.png'),
(5, 'TahoMilktea', 'TahoMilktea', 80.00, 'assets/taho-milktea-1.png'),
(6, 'PremiumSoymilk', 'PremiumSoymilk', 80.00, 'assets/productsContent/p-image-3.png'),
(7, 'Soymilk', 'Soymilk', 70.00, 'assets/productsContent/p-image-4.png'),
(8, 'Taho', 'Taho', 70.00, 'assets/productsContent/p-image-5.png'),
(9, 'Tofu', 'Tofu', 70.00, 'assets/productsContent/p-image-6.png'),
(10, 'Add-ons', 'Add-ons', 40.00, 'assets/productsContent/p-image-7.png'),
(11, 'MangtatahoBundle', 'Bundle', 200.00, 'assets/productsContent/p-image-8.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
