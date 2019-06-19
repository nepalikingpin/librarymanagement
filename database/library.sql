-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 07:54 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bookId` int(10) UNSIGNED NOT NULL,
  `bookTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edition` int(10) UNSIGNED NOT NULL,
  `catId` int(10) UNSIGNED NOT NULL,
  `totalAvail` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `totalIss` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `catName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`created_at`, `updated_at`, `bookId`, `bookTitle`, `edition`, `catId`, `totalAvail`, `totalIss`, `catName`) VALUES
('2019-06-11 07:37:05', '2019-06-11 07:37:05', 1, 'DS', 5, 2, 5, 0, 'Textbook'),
('2019-06-11 21:31:38', '2019-06-11 21:31:38', 3, 'TOC', 5, 2, 55, 0, 'Textbook');

-- --------------------------------------------------------

--
-- Table structure for table `books_categories`
--

CREATE TABLE `books_categories` (
  `catId` int(10) UNSIGNED NOT NULL,
  `catName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books_categories`
--

INSERT INTO `books_categories` (`catId`, `catName`) VALUES
(1, 'Novel'),
(2, 'Textbook'),
(3, 'Biography'),
(4, 'Fiction'),
(5, 'Horror'),
(6, 'Thriller'),
(7, 'AutoBiography'),
(8, 'Romance');

-- --------------------------------------------------------

--
-- Table structure for table `books_issueds`
--

CREATE TABLE `books_issueds` (
  `issueId` int(10) UNSIGNED NOT NULL,
  `issueDate` datetime NOT NULL,
  `bookId` int(10) UNSIGNED NOT NULL,
  `memId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books_issueds`
--

INSERT INTO `books_issueds` (`issueId`, `issueDate`, `bookId`, `memId`) VALUES
(1, '2019-05-14 00:00:00', 1, 1),
(2, '2019-06-14 00:00:00', 3, 1),
(3, '2019-06-05 00:00:00', 1, 1),
(4, '2019-06-22 00:00:00', 1, 1),
(5, '2019-06-18 00:00:00', 3, 1),
(6, '2019-06-13 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `books_returneds`
--

CREATE TABLE `books_returneds` (
  `returnId` int(10) UNSIGNED NOT NULL,
  `retDate` datetime NOT NULL,
  `bookId` int(10) UNSIGNED NOT NULL,
  `memId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books_returneds`
--

INSERT INTO `books_returneds` (`returnId`, `retDate`, `bookId`, `memId`) VALUES
(1, '2019-06-11 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memId` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `memName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'null',
  `cnic` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'null',
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'null',
  `dept` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'null',
  `memType` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regNo` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'null',
  `picLink` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memId`, `created_at`, `updated_at`, `memName`, `email`, `contact`, `cnic`, `address`, `dept`, `memType`, `regNo`, `picLink`) VALUES
(1, '2019-06-11 07:50:55', '2019-06-11 07:50:55', 'Safal Mahat', 'safal@sa.sa', '2535', '22', 'Thankot', 'csit', 'Student', 'null', 'null'),
(2, '2019-06-11 20:48:08', '2019-06-11 20:48:08', 'saugat', 'sau@sau.sau', '2535', '5', 'kalanki', 'csit', 'Student', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `mem_staffs`
--

CREATE TABLE `mem_staffs` (
  `memId` int(10) UNSIGNED NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mem_students`
--

CREATE TABLE `mem_students` (
  `memId` int(10) UNSIGNED NOT NULL,
  `regNo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mem_students`
--

INSERT INTO `mem_students` (`memId`, `regNo`, `batch`) VALUES
(1, '25869', 5),
(2, '1122', 5);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2009_10_12_000000_create_users_table', 1),
(2, '2009_10_12_100000_create_password_resets_table', 1),
(3, '2010_06_08_221617_create_books_categories_table', 1),
(4, '2011_06_08_221451_create_books_table', 1),
(5, '2018_06_08_221116_create_members_table', 1),
(6, '2018_06_08_221306_create_mem_staffs_table', 1),
(7, '2018_06_08_221404_create_mem_students_table', 1),
(8, '2018_06_08_221516_create_books_returneds_table', 1),
(9, '2019_06_08_221452_create_books_issueds_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'saugat', 'sau@sau.sau', '$2y$10$1awv75yObQkb.w1t8YzyqunWv/pNUEjpd9Gv5OOJ51k7bBTch1lXa', 'ogPNdyUXqTKMRpXzWJbNmlaQd1m1ACBXRwNDzZfQ1vAYNUQ7asoexanVWAyI', '2019-06-11 07:36:03', '2019-06-11 07:36:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`),
  ADD KEY `books_catid_foreign` (`catId`);

--
-- Indexes for table `books_categories`
--
ALTER TABLE `books_categories`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `books_issueds`
--
ALTER TABLE `books_issueds`
  ADD PRIMARY KEY (`issueId`),
  ADD KEY `books_issueds_bookid_foreign` (`bookId`),
  ADD KEY `books_issueds_memid_foreign` (`memId`);

--
-- Indexes for table `books_returneds`
--
ALTER TABLE `books_returneds`
  ADD PRIMARY KEY (`returnId`),
  ADD KEY `books_returneds_bookid_foreign` (`bookId`),
  ADD KEY `books_returneds_memid_foreign` (`memId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memId`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indexes for table `mem_staffs`
--
ALTER TABLE `mem_staffs`
  ADD PRIMARY KEY (`memId`);

--
-- Indexes for table `mem_students`
--
ALTER TABLE `mem_students`
  ADD PRIMARY KEY (`memId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `books_categories`
--
ALTER TABLE `books_categories`
  MODIFY `catId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `books_issueds`
--
ALTER TABLE `books_issueds`
  MODIFY `issueId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `books_returneds`
--
ALTER TABLE `books_returneds`
  MODIFY `returnId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_catid_foreign` FOREIGN KEY (`catId`) REFERENCES `books_categories` (`catId`);

--
-- Constraints for table `books_issueds`
--
ALTER TABLE `books_issueds`
  ADD CONSTRAINT `books_issueds_bookid_foreign` FOREIGN KEY (`bookId`) REFERENCES `books` (`bookId`),
  ADD CONSTRAINT `books_issueds_memid_foreign` FOREIGN KEY (`memId`) REFERENCES `members` (`memId`);

--
-- Constraints for table `books_returneds`
--
ALTER TABLE `books_returneds`
  ADD CONSTRAINT `books_returneds_bookid_foreign` FOREIGN KEY (`bookId`) REFERENCES `books` (`bookId`),
  ADD CONSTRAINT `books_returneds_memid_foreign` FOREIGN KEY (`memId`) REFERENCES `members` (`memId`);

--
-- Constraints for table `mem_staffs`
--
ALTER TABLE `mem_staffs`
  ADD CONSTRAINT `mem_staffs_memid_foreign` FOREIGN KEY (`memId`) REFERENCES `members` (`memId`);

--
-- Constraints for table `mem_students`
--
ALTER TABLE `mem_students`
  ADD CONSTRAINT `mem_students_memid_foreign` FOREIGN KEY (`memId`) REFERENCES `members` (`memId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
