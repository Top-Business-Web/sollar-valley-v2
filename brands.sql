-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2023 at 11:43 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solar`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Must', 'assets/uploads/brands/87071674644567.png', '2023-01-25 11:02:47', '2023-01-25 11:02:47'),
(5, 'usfull', 'assets/uploads/brands/40181674645037.png', '2023-01-25 11:10:37', '2023-01-25 11:10:37'),
(7, 'suntree', 'assets/uploads/brands/9561674647848.png', '2023-01-25 11:57:28', '2023-01-25 11:57:28'),
(8, 'huawei', 'assets/uploads/brands/32521674653699.jpg', '2023-01-25 12:51:06', '2023-01-25 13:34:59'),
(9, 'newmax', 'assets/uploads/brands/56051674653885.jpg', '2023-01-25 13:38:05', '2023-01-25 13:38:05'),
(10, 'Yaskawa', 'assets/uploads/brands/18131674654089.jpg', '2023-01-25 13:41:29', '2023-01-25 13:41:29'),
(11, 'His', 'assets/uploads/brands/63781674654102.jpg', '2023-01-25 13:41:42', '2023-01-25 13:41:42'),
(12, 'vansan', 'assets/uploads/brands/82591674654125.jpg', '2023-01-25 13:42:05', '2023-01-25 13:42:05'),
(13, 'invt', 'assets/uploads/brands/62671674654235.jpg', '2023-01-25 13:42:46', '2023-01-25 13:43:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
