-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 07:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillinsiderz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apply_onines`
--

CREATE TABLE `apply_onines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marketing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_onines`
--

INSERT INTO `apply_onines` (`id`, `name`, `email`, `phone`, `city`, `degree`, `marketing`, `course`, `created_at`, `updated_at`) VALUES
(1, 'maroof subhani', 'maroofkhalid@gmail.com', '2342342342342', 'lahore', 'wererwrwr', '2', 'Friend', '2021-12-13 10:59:56', '2021-12-13 10:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `assignbadges`
--

CREATE TABLE `assignbadges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `badge_id` int(10) UNSIGNED NOT NULL,
  `trainer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assigncourses`
--

CREATE TABLE `assigncourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `trainer_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assigntrainers`
--

CREATE TABLE `assigntrainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `badge_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assigntrainers`
--

INSERT INTO `assigntrainers` (`id`, `trainer_id`, `badge_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 3, 9, 15, '2021-11-01 02:26:24', '2021-11-01 02:26:24'),
(2, 5, 10, 16, '2021-11-28 15:34:17', '2021-11-28 15:34:17'),
(3, 6, 11, 16, '2021-11-28 16:16:23', '2021-11-28 16:16:23'),
(4, 7, 12, 17, '2021-12-02 08:25:51', '2021-12-02 08:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `trainer_id` int(10) UNSIGNED DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` int(11) NOT NULL,
  `room_id` int(191) DEFAULT NULL,
  `slot_id` int(191) DEFAULT NULL,
  `days` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id`, `course_id`, `description`, `code`, `start`, `end`, `trainer_id`, `thumbnail`, `fee`, `room_id`, `slot_id`, `days`, `status`, `created_at`, `updated_at`) VALUES
(10, 16, '<span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span>', 'FSWD-1', '2021-11-24', '2021-11-29', 5, NULL, 12000, 5, 4, 'Monday,Tuesday,Wednesday', 0, '2021-11-28 15:34:17', '2021-11-28 16:44:56'),
(11, 16, '<p><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span></p><p><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span></p><hr><p><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span></p><hr><p><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span></p><hr><p><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span></p><hr><p><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span></p><hr><p><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\"><br></span></p><hr><p><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">If your site already have some unwanted content but you wish to clean it up then you can use this plugin&nbsp;</span><a href=\"https://wordpress.org/plugins/wordpress-reset/\" target=\"_blank\" rel=\"noopener\" style=\"background-color: rgb(255, 255, 255); color: rgba(46, 189, 255, 0.75); transition-duration: 0.2s; font-family: Raleway, Helvetica, Arial, sans-serif;\">WordPress Reset</a><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\">. Remember this plugin will wipe out your database bring it back to a state when you first installed WordPress and switch the theme to default theme If there is nothing to lose go ahead and after resetting switch the default theme to our theme.</span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\"><br></span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\"><br></span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\"><br></span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\"><br></span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\"><br></span><span style=\"color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\"><br></span>                                \r\n                        </p>', 'FSWD-2', '2021-11-27', '2021-12-03', 6, NULL, 12000, 5, 5, 'monday,wednesday', 0, '2021-11-28 16:16:23', '2021-11-28 16:16:23'),
(12, 17, '<span style=\"color: rgb(60, 72, 82); font-family: Muli, sans-serif; font-size: 15px; background-color: rgb(247, 248, 249);\">Full Stack Web Development&nbsp;</span><span style=\"color: rgb(60, 72, 82); font-family: Muli, sans-serif; font-size: 15px; background-color: rgb(247, 248, 249);\">Full Stack Web Development&nbsp;</span><span style=\"color: rgb(60, 72, 82); font-family: Muli, sans-serif; font-size: 15px; background-color: rgb(247, 248, 249);\">Full Stack Web Development&nbsp;</span><span style=\"color: rgb(60, 72, 82); font-family: Muli, sans-serif; font-size: 15px; background-color: rgb(247, 248, 249);\">Full Stack Web Development&nbsp;</span><span style=\"color: rgb(60, 72, 82); font-family: Muli, sans-serif; font-size: 15px; background-color: rgb(247, 248, 249);\">Full Stack Web Development&nbsp;</span><span style=\"color: rgb(60, 72, 82); font-family: Muli, sans-serif; font-size: 15px; background-color: rgb(247, 248, 249);\">Full Stack Web Development&nbsp;</span><span style=\"color: rgb(60, 72, 82); font-family: Muli, sans-serif; font-size: 15px; background-color: rgb(247, 248, 249);\">Full Stack Web Development&nbsp;</span><span style=\"color: rgb(60, 72, 82); font-family: Muli, sans-serif; font-size: 15px; background-color: rgb(247, 248, 249);\">Full Stack Web Development&nbsp;</span><span style=\"color: rgb(60, 72, 82); font-family: Muli, sans-serif; font-size: 15px; background-color: rgb(247, 248, 249);\">Full Stack Web Development&nbsp;</span><span style=\"color: rgb(60, 72, 82); font-family: Muli, sans-serif; font-size: 15px; background-color: rgb(247, 248, 249);\">Full Stack Web Development</span><br>', 'BBE-1', '2021-12-02', '2021-12-30', 7, NULL, 40000, 5, 1, 'Tue,Thu,Fri', 0, '2021-12-02 08:25:51', '2021-12-02 08:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `balances`
--

CREATE TABLE `balances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pending` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `balances`
--

INSERT INTO `balances` (`id`, `balance`, `pending`, `expense`, `created_at`, `updated_at`) VALUES
(1, '16500', '8000', '1500', '2021-11-03 23:09:12', '2021-12-01 11:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(191) DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `category_id`, `meta`, `description`, `tags`, `thumbnail`, `type`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Full Stack Web Development', 'full-stack-web-development', '4', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'hm,jiou', 'content/1636846261.jpg', 2, NULL, '2021-11-13 18:31:02', '2021-11-13 18:31:02'),
(3, 'Full Stack Web Development', 'full-stack-web-development', '4', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'hm,jiou', 'content/1636846261.jpg', 2, NULL, '2021-11-13 18:31:02', '2021-11-13 18:31:02'),
(4, 'Full Stack Web Development', 'full-stack-web-development', '4', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'hm,jiou', 'content/1636846261.jpg', 2, NULL, '2021-11-13 16:31:02', '2021-11-13 16:31:02'),
(5, 'Full Stack Web Development', 'full-stack-web-development', '4', NULL, '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'hm,jiou', 'content/1636846261.jpg', 2, NULL, '2021-11-13 18:31:02', '2021-11-13 18:31:02'),
(6, 'How to become full stack developers', 'how-to-become-full-stack-developers', '6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<p><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><span style=\"color: rgb(110, 124, 144); font-family: Muli, sans-serif; font-size: 15px;\">&nbsp;</span></p>', 'hjk,hj,h', 'content/1639171757.jpg', 2, NULL, '2021-12-10 16:29:19', '2021-12-10 16:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `description`, `thumbnail`, `created_at`, `updated_at`) VALUES
(4, 'Amazon', 'sfsfsafsaf', '1633392217.png', '2021-10-04 18:24:42', '2021-10-04 19:03:37'),
(6, 'WEB', 'HJKH', '1638374353.jpg', '2021-12-01 10:59:14', '2021-12-01 10:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciaw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedual` int(11) DEFAULT NULL,
  `regular_fee` int(11) DEFAULT NULL,
  `adm_fee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  `tags` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `slug`, `code`, `meta`, `description`, `duration`, `noc`, `ciaw`, `schedual`, `regular_fee`, `adm_fee`, `discount`, `fee`, `thumbnail`, `video`, `outline`, `status`, `tags`, `category_id`, `created_at`, `updated_at`) VALUES
(14, 'Digital Media Marketing', 'certified-digital-media-marketing', 'CDMM', 'Content is the information and experiences; directed at an end-user or audience in Content is the information and experiences; directed at an end-user or audie', '<span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Digital marketing is the marketing and advertising of a business, person, product, or service using online channels, electronic devices, and digital technologies. A few examples of digital marketing include&nbsp;</span><b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">social media, email, pay-per-click (PPC), search engine optimization (SEO), and more</b><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">.</span><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Digital marketing is the marketing and advertising of a business, person, product, or service using online channels, electronic devices, and digital technologies. A few examples of digital marketing include&nbsp;</span><b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">social media, email, pay-per-click (PPC), search engine optimization (SEO), and more</b><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">.</span><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Digital marketing is the marketing and advertising of a business, person, product, or service using online channels, electronic devices, and digital technologies. A few examples of digital marketing include&nbsp;</span><b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">social media, email, pay-per-click (PPC), search engine optimization (SEO), and more</b><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">.</span><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Digital marketing is the marketing and advertising of a business, person, product, or service using online channels, electronic devices, and digital technologies. A few examples of digital marketing include&nbsp;</span><b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">social media, email, pay-per-click (PPC), search engine optimization (SEO), and more</b><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">.</span><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Digital marketing is the marketing and advertising of a business, person, product, or service using online channels, electronic devices, and digital technologies. A few examples of digital marketing include&nbsp;</span><b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">social media, email, pay-per-click (PPC), search engine optimization (SEO), and more</b><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">.</span>', '06 Months', '48', NULL, 3, 50000, '2000', 50, 25000, 'content/1636759225.jpg', NULL, '1635712882asad-mukhtar-1-(4).pdf', 1, NULL, 4, '2021-10-31 15:41:22', '2021-11-12 18:20:25'),
(16, 'Full Stack Web Development', 'full-stack-web-development', 'FSWD', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text', '<p>                                <strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><ul><li>check</li><li>What heppend</li><li>Yo are here</li></ul><p><span style=\"background-color: rgb(255, 255, 0);\"><b>I am heading</b></span></p><p><span style=\"font-weight: bolder; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><p><span style=\"font-weight: bolder; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><p><span style=\"font-weight: bolder; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span>\r\n                            </p>', '06 Months', '73', NULL, 3, 24000, '2000', 50, 12000, 'content/1638304089.jpg', NULL, 'content/1636585909graphic-designing.pdf', 1, 'check,hats', 4, '2021-11-10 18:11:49', '2021-11-30 15:28:11'),
(17, 'Become Beauty Expert', 'become-beauty-expert', 'BBE', 'Content is the information and experiences; directed at an end-user or audience in  Content is the information and experiences; directed at an end-user or audie', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">Content is the information and experiences; directed at an end-user or audience in&nbsp;</span></p><ul><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">assa</span></li><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">saassa</span></li><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">saas</span></li><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\">asdas</span></li><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif;\"><br></span></li></ul>', '06 Months', '48', NULL, 2, 50000, '2000', 20, 40000, 'content/1638451403.jpg', NULL, 'content/1638451404complaintdetails.pdf', 1, 'haskas,asas,sas', 6, '2021-12-02 08:23:24', '2021-12-02 08:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Team Lead', '2021-11-06 17:57:14', '2021-11-06 17:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `badge_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `stuid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`id`, `course_id`, `badge_id`, `student_id`, `stuid`, `status`, `created_at`, `updated_at`) VALUES
(6, 15, 9, 2, 'FSWD-1-1', 'pending', '2021-11-05 19:05:30', '2021-11-05 19:05:30'),
(7, 16, 11, 3, 'FSWD-2-1', 'pending', '2021-12-01 11:00:44', '2021-12-01 11:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `expensecategories`
--

CREATE TABLE `expensecategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expensecategories`
--

INSERT INTO `expensecategories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing', '2021-11-07 15:03:38', '2021-11-07 15:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expensecategory_id` int(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `title`, `date`, `amount`, `expensecategory_id`, `created_at`, `updated_at`) VALUES
(5, 'Tea & Food', '2021-12-14', '1500', 1, '2021-11-30 15:26:15', '2021-11-30 15:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `badge_id` int(10) UNSIGNED DEFAULT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `noi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regular_fee` int(11) DEFAULT NULL,
  `admission_fee` int(11) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `paid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pending` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee_type` int(11) DEFAULT NULL,
  `enrollment_id` int(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `student_id`, `badge_id`, `course_id`, `noi`, `regular_fee`, `admission_fee`, `total_amount`, `paid`, `pending`, `fee_type`, `enrollment_id`, `created_at`, `updated_at`) VALUES
(63, 3, 11, 16, '3', 12000, 2000, 14000, '6000', '8000', 2, 7, '2021-12-01 11:01:13', '2021-12-01 11:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(1911) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`id`, `logo`, `icon`, `title`, `email`, `address`, `phone`, `phone1`, `description`, `tags`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Skillinsiderz', 'info@webeducatorz.com', 'Gulshan Abbas Scheme # 2 house # 5, Main Bazzar Mansoorah Multan road lahore , punjab pakistan', '03184544494', '4234923098', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'html,css,javascript,jquery', '2021-12-10 17:16:26', '2021-12-10 17:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instalments`
--

CREATE TABLE `instalments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `instalment_no` int(11) DEFAULT NULL,
  `last_day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `badge_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'unpaid',
  `method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instalments`
--

INSERT INTO `instalments` (`id`, `fee_id`, `student_id`, `amount`, `instalment_no`, `last_day`, `course_id`, `badge_id`, `type`, `created_at`, `updated_at`, `status`, `method`, `invoice`) VALUES
(11, 61, 2, 2000, 1, '2021-11-24', '15', '9', 'admission fee', '2021-11-05 19:06:30', '2021-11-05 19:09:31', 'paid', 'cash', '2021-11/Muhammad aSAD-.pdf'),
(12, 61, 2, 10000, 2, '2021-11-24', '15', '9', 'installment', '2021-11-05 19:06:30', '2021-11-05 19:10:44', 'paid', 'easypaisa', '2021-11/Muhammad aSAD-.pdf'),
(13, 61, 2, 10000, 3, '2021-11-24', '15', '9', 'installment', '2021-11-05 19:06:30', '2021-11-05 19:06:59', 'unpaid', NULL, NULL),
(14, 61, 2, 10000, 4, '2021-11-23', '15', '9', 'installment', '2021-11-05 19:06:30', '2021-11-05 19:07:07', 'unpaid', NULL, NULL),
(15, 61, 2, 10000, 5, '2021-11-25', '15', '9', 'installment', '2021-11-05 19:06:30', '2021-11-05 19:07:17', 'unpaid', NULL, NULL),
(16, 63, 3, 2000, 1, '2021-12-14', '16', '11', 'admission fee', '2021-12-01 11:01:13', '2021-12-01 11:02:35', 'paid', 'easypaisa', '2021-12/ASad 1 Mukhtar-.pdf'),
(17, 63, 3, 4000, 2, '2021-12-16', '16', '11', 'installment', '2021-12-01 11:01:13', '2021-12-01 11:01:45', 'unpaid', NULL, NULL),
(18, 63, 3, 4000, 3, '2021-12-16', '16', '11', 'installment', '2021-12-01 11:01:13', '2021-12-01 11:01:55', 'unpaid', NULL, NULL),
(19, 63, 3, 4000, 4, '2021-12-16', '16', '11', 'installment', '2021-12-01 11:01:13', '2021-12-01 11:05:32', 'paid', 'jazzcash', '2021-12/ASad 1 Mukhtar-.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `badge_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lecture` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(5, '2021_09_05_115115_create_courses_table', 2),
(6, '2021_09_05_122026_create_badges_table', 2),
(7, '2021_09_05_122524_create_trainers_table', 2),
(8, '2021_09_05_123635_create_assigncourses_table', 2),
(9, '2021_09_05_123938_create_assignbadges_table', 2),
(10, '2021_09_05_124235_create_students_table', 2),
(11, '2021_09_05_130449_create_stu_educations_table', 2),
(12, '2021_09_05_130613_create_stu_courses_table', 2),
(13, '2021_09_05_131900_create_teams_table', 2),
(14, '2021_09_05_132509_create_categories_table', 2),
(15, '2021_09_05_133247_create_admissions_table', 2),
(16, '2021_09_05_134351_create_inquiries_table', 2),
(17, '2021_09_07_121919_create_fees_table', 2),
(18, '2021_09_07_125012_create_instalments_table', 2),
(19, '2021_09_15_140820_create_enrollments_table', 2),
(20, '2021_10_04_194745_create_attendences_table', 3),
(21, '2021_10_04_195222_create_visits_table', 3),
(22, '2021_10_04_195353_create_notes_table', 3),
(23, '2021_10_08_220918_create_tcategories_table', 3),
(24, '2021_10_09_073154_create_timetables_table', 3),
(25, '2021_10_09_074524_create_slots_table', 3),
(26, '2021_10_09_074553_create_rooms_table', 3),
(27, '2021_10_12_194158_create_assigntrainers_table', 4),
(28, '2021_10_31_190904_create_balances_table', 5),
(29, '2021_11_03_233356_create_blogs_table', 6),
(30, '2021_11_03_233445_create_workshops_table', 6),
(31, '2021_11_03_235255_create_expenses_table', 7),
(32, '2021_11_06_222221_create_designations_table', 8),
(33, '2021_11_06_222251_create_staff_table', 8),
(34, '2021_11_06_223313_create_expensecategories_table', 8),
(35, '2021_11_14_215308_create_generals_table', 9),
(36, '2021_11_17_202959_create_lectures_table', 10),
(37, '2021_12_02_201258_create_permissions_table', 11),
(38, '2021_12_02_201324_create_roles_table', 11),
(39, '2021_12_02_201525_create_users_roles_table', 12),
(40, '2021_12_02_201624_create_roles_permissions_table', 13),
(42, '2014_10_12_100000_create_password_resets_table', 14),
(43, '2019_08_19_000000_create_failed_jobs_table', 14),
(44, '2019_12_14_000001_create_personal_access_tokens_table', 14),
(45, '2021_12_09_112717_create_contacts_table', 14),
(46, '2021_12_10_154455_create_apply_onines_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `route_name`, `created_at`, `updated_at`) VALUES
(1, 'course', 'courses', 'course', '2021-12-02 17:57:23', '2021-12-02 17:57:23'),
(3, 'acounts', 'acounts', 'acounts', '2021-12-03 10:39:26', '2021-12-03 10:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Coordinator', NULL, 1, '2021-12-03 05:49:44', '2021-12-03 05:49:44'),
(3, 'Admission Manager', 'admission-manager', 1, '2021-12-03 06:16:32', '2021-12-13 17:08:45'),
(5, 'Accounts', NULL, 1, '2021-12-04 02:16:47', '2021-12-04 02:17:44'),
(6, 'Admin', 'admin', 1, '2021-12-10 17:23:19', '2021-12-10 17:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles_permissions`
--

INSERT INTO `roles_permissions` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(5, 3, '2021-12-04 05:21:13', '2021-12-04 05:21:13'),
(6, 1, '2021-12-13 16:12:38', '2021-12-13 16:12:38'),
(6, 3, '2021-12-13 16:12:38', '2021-12-13 16:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `created_at`, `updated_at`) VALUES
(1, '1', '2021-10-09 07:05:37', '2021-10-09 07:05:37'),
(2, '2', '2021-10-09 07:05:57', '2021-10-09 07:05:57'),
(3, '3', '2021-10-09 07:12:26', '2021-10-09 07:12:26'),
(4, '4', '2021-10-09 07:12:34', '2021-10-09 07:12:34'),
(5, '5', '2021-10-09 07:12:43', '2021-10-09 07:12:43'),
(6, '6', '2021-10-09 07:12:53', '2021-10-09 07:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, '14:00', '16:00', '2021-10-09 06:41:29', '2021-10-09 06:41:29'),
(4, '16:00', '18:00', '2021-10-09 06:54:36', '2021-10-09 06:54:36'),
(5, '18:00', '20:00', '2021-10-09 07:02:21', '2021-10-09 07:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ec` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `designation_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `thumbnail`, `name`, `phone`, `email`, `description`, `salary`, `cnic`, `address`, `ec`, `status`, `designation_id`, `created_at`, `updated_at`) VALUES
(3, NULL, 'Muhammad aSAD', '+6805894526', 'axad03213@gmail.com', '<p>&nbsp;&nbsp;&nbsp;&nbsp;<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>                        \r\n                    </p>', '22000', '25555', 'Gulshan Abbas Scheme # 2 house # 5', '025465465', 1, 1, '2021-11-06 18:36:36', '2021-11-06 18:36:36'),
(4, NULL, 'Muhammad aSAD', '+6805894526', 'axad03213@gmail.com', '<p>&nbsp;&nbsp;&nbsp;&nbsp;<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>                        \r\n                    </p>', '22000', '25555', 'Gulshan Abbas Scheme # 2 house # 5', '025465465', 2, 1, '2021-11-06 19:31:18', '2021-11-06 19:33:28'),
(5, NULL, 'Muhammad Asad', '03374969039', 'axad03213@gmail.com', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '35000', '352023676515', 'Gulshan Abbas Scheme # 2 house # 5', '03124587963', 1, 1, '2021-11-10 15:52:34', '2021-11-10 15:52:34'),
(6, '1636578098.jpg', 'Muhammad aSAD', '+6805894526', 'axad03213@gmail.com', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span>                        \r\n                    </p>', '2200', '35202-3676051-5', 'Gulshan Abbas Scheme # 2 house # 5', '03124587963', 1, 1, '2021-11-10 16:01:39', '2021-11-10 16:01:39'),
(7, '1636584637.jpg', 'Muhammad aSAD', '+6805894526', 'axad03213@gmail.com', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', '22000', '35202-3676051-5', 'Gulshan Abbas Scheme # 2 house # 5', '03124587963', 1, 1, '2021-11-10 17:50:37', '2021-11-10 17:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religious` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stuid` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `thumbnail`, `name`, `cnic`, `email`, `fname`, `gender`, `phone`, `guardian_contact`, `dob`, `religious`, `address`, `city`, `state`, `country`, `stuid`, `reference`, `degree`, `institute`, `year`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Muhammad aSAD', '35202-3676051-5', 'axad03213@gmail.com', 'Muhammad', 'male', '5894526', '03120049959', '2021-11-04', 'muslim', 'Gulshan Abbas Scheme # 2 house # 5', 'lahore', 'PUNJAB', 'Palau', 'FSWD-1-1', 'physical marketing', 'BSc', 'virtual', '2020', NULL, '2021-11-03 18:12:14', '2021-11-03 18:12:14'),
(3, NULL, 'ASad 1 Mukhtar', '35202-3676051-5', 'axad03213@gmail.com', 'Muhammad', 'male', '04234923098', '03120049959', '2021-12-17', 'muslim', 'ajkghlk, hkghk', 'lahore', 'Alaska', 'Pakistan', 'FSWD-2-1', 'physical marketing', 'BSc', 'virtual', '2020', NULL, '2021-12-01 11:00:44', '2021-12-01 11:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `stu_courses`
--

CREATE TABLE `stu_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `badge_id` int(10) UNSIGNED DEFAULT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stu_educations`
--

CREATE TABLE `stu_educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tcategories`
--

CREATE TABLE `tcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timetables`
--

CREATE TABLE `timetables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mou` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic_i` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `picture`, `description`, `name`, `email`, `phone`, `phone2`, `address`, `document`, `mou`, `cnic_i`, `cnic`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(3, '1633736211.jpg', '<span style=\"color: rgb(57, 58, 61); font-family: &quot;Avenir Next forINTUIT&quot;, harmonyicons; font-size: 16px;\">If you run into trouble when you install QuickBooks Desktop, or when you open it after you install, we’re here to help. Follow the steps to help fix these errors and issues:</span><span style=\"color: rgb(57, 58, 61); font-family: &quot;Avenir Next forINTUIT&quot;, harmonyicons; font-size: 16px;\">If you run into trouble when you install QuickBooks Desktop, or when you open it after you install, we’re here to help. Follow the steps to help fix these errors and issues:</span><span style=\"color: rgb(57, 58, 61); font-family: &quot;Avenir Next forINTUIT&quot;, harmonyicons; font-size: 16px;\">If you run into trouble when you install QuickBooks Desktop, or when you open it after you install, we’re here to help. Follow the steps to help fix these errors and issues:</span>', 'Rana Mohsin Hussain', 'mmohsinhussain73@gmail.com', '+924234923098', '+923374969039', 'Gulshan Abbas Scheme # 2 house # 5', '1633731420full-stack-graphic-designing-(2).pdf', '1633731420Contract-of-Skill-Insiderz.docx', '1633731420.jpg', '35202-3676051-5', 0, 4, '2021-10-08 17:17:00', '2021-10-08 18:36:51'),
(4, '1636579803.jpg', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p><p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\"><br></span>                        \r\n                    </p>', 'Umair Farooq', 'umair@gmail.com', '4234923098', '2145024184', 'ajkghlk', '16365798032021-11-05t11-28-transaction-#4349724028473897-8596109.pdf', '16365798032021-11-05T11-28-Transaction-#4349724028473897-8596109.pdf', '1636579803.jpg', '35202-3676051-5', 0, 4, '2021-11-10 16:30:03', '2021-11-10 16:30:03'),
(5, 'content/1636582790.jpg', 'asdasd', 'Muhammad aSAD', 'axad03213@gmail.com', '+6805894526', '5555555555', 'Gulshan Abbas Scheme # 2 house # 5', 'content/1636582791document.pdf', 'content/1636582791mou.pdf', 'content/1636582791.jpg', '35202-367605-5', 0, 4, '2021-11-10 17:06:32', '2021-11-10 17:19:51'),
(6, 'content/1636583113.jpg', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>&nbsp;&nbsp;&nbsp;&nbsp;                        \r\n                    </p>', 'Muhammad aSAD', 'axad03213@gmail.com', '+6805894526', '+923374969039', 'Gulshan Abbas Scheme # 2 house # 5', 'content/1636583114documentpdf', 'content/1636583114moupdf', 'content1636583114.jpg', '35202-3676051-5', 0, 4, '2021-11-10 17:25:14', '2021-11-10 17:25:14'),
(7, 'content/1636583248.jpg', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 'Muhammad aSAD', 'axad03213@gmail.com', '+6805894526', '+923374969039', 'Gulshan Abbas Scheme # 2 house # 5', 'content/1636583248document.pdf', 'content/1636583248mou.pdf', 'content1636583248.jpg', '25555', 0, 4, '2021-11-10 17:27:28', '2021-11-10 17:27:28'),
(8, 'content/1636583330.jpg', '<strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>', 'John Doe', 'jhgjh@gmail.com', '+923374969039', '+923374969039', 'Gulshan Abbas Scheme # 2 house # 5', 'content/1636583330document.pdf', 'content/1636583330mou.pdf', 'content/1636583330.jpg', '35202-3676051-5', 0, 4, '2021-11-10 17:28:51', '2021-11-10 17:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desrciption` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_student` int(11) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `thumbnail`, `name`, `email`, `desrciption`, `phone`, `email_verified_at`, `password`, `is_student`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Asad', 'axad03213@gmail.com', NULL, NULL, NULL, '$2y$10$Q3EYUQ2O9J50E4Y8.keQNOgsXZQbuOtNFjxX.8mWVTyuPS9HggF6e', NULL, NULL, 'PcnzYyw66NGQENcunUjhvgxuSg3FtHY3UINbhvC0fRQI8iLYAQTMUb2qWBrg', '2021-09-28 18:46:52', '2021-09-28 18:46:52'),
(4, 'content/1638920189.jpg', 'Web Technologies', 'web03213@gmail.com', '<ul style=\"margin-bottom: 10px; color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\"><li>It is always recommended to install these demo content on a clean install only. Importing on sites with content or importing twice will duplicate menus, pages and all posts and will replace current theme options, sliders and widget settings.</li><li>It is always recommended to install these demo content on a clean install only. Importing on sites with content or importing twice will duplicate menus, pages and all posts and will replace current theme options, sliders and widget settings.</li></ul><hr><ul style=\"margin-bottom: 10px; color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\"><li>It is always recommended to install these demo content on a clean install only. Importing on sites with content or importing twice will duplicate menus, pages and all posts and will replace current theme options, sliders and widget settings.</li></ul><hr><ul style=\"margin-bottom: 10px; color: rgb(107, 107, 107); font-family: Raleway, Helvetica, Arial, sans-serif;\"><li>It is always recommended to install these demo content on a clean install only. Importing on sites with content or importing twice will duplicate menus, pages and all posts and will replace current theme options, sliders and widget settings.</li></ul>', '2145024184', NULL, '$2y$10$TWyYdHez7FAJLvWKAhhOOu10A9Jqf7l/0EoJ0jQA//D0Zs9BmO8Oy', NULL, NULL, NULL, '2021-12-07 18:36:29', '2021-12-07 18:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

CREATE TABLE `users_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 1, 6, NULL, NULL),
(1, 4, 3, '2021-12-07 18:36:29', '2021-12-07 18:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(191) DEFAULT NULL,
  `details` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meeting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `title`, `slug`, `description`, `category_id`, `date`, `start`, `end`, `reg_link`, `thumbnail`, `type`, `meeting`, `status`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing - Workshop', 'digital-marketing---workshop', '<p><br></p><p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 4, '2021-11-05', '14:00', '16:00', 'https://www.techniquehow.com/freeze-last-seen-on-whatsapp/', '1636069669.jpg', 'physical + online', 'https://www.techniquehow.com/freeze-last-seen-on-whatsapp/', 'coming soon', 'html,fsdf,sdf', '2021-11-04 18:47:50', '2021-11-04 18:47:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_onines`
--
ALTER TABLE `apply_onines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignbadges`
--
ALTER TABLE `assignbadges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assigncourses`
--
ALTER TABLE `assigncourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assigntrainers`
--
ALTER TABLE `assigntrainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balances`
--
ALTER TABLE `balances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expensecategories`
--
ALTER TABLE `expensecategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instalments`
--
ALTER TABLE `instalments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`),
  ADD KEY `roles_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_courses`
--
ALTER TABLE `stu_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_educations`
--
ALTER TABLE `stu_educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tcategories`
--
ALTER TABLE `tcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetables`
--
ALTER TABLE `timetables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `users_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apply_onines`
--
ALTER TABLE `apply_onines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignbadges`
--
ALTER TABLE `assignbadges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assigncourses`
--
ALTER TABLE `assigncourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assigntrainers`
--
ALTER TABLE `assigntrainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `balances`
--
ALTER TABLE `balances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expensecategories`
--
ALTER TABLE `expensecategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instalments`
--
ALTER TABLE `instalments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stu_courses`
--
ALTER TABLE `stu_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stu_educations`
--
ALTER TABLE `stu_educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tcategories`
--
ALTER TABLE `tcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetables`
--
ALTER TABLE `timetables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_permissions`
--
ALTER TABLE `users_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD CONSTRAINT `roles_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
