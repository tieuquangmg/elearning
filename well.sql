-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2016 at 03:38 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `well`
--

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

DROP TABLE IF EXISTS `audios`;
CREATE TABLE IF NOT EXISTS `audios` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `unit_id` int(11) NOT NULL,
  `create_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`id`, `name`, `description`, `url`, `unit_id`, `create_by`, `created_at`, `updated_at`) VALUES
(1, 'bai 1', 'dfadfsdfsdfsd', 'gallery/audios/Animals-MartinGarrix-2830755.mp3', 6, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_by` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `limit` tinyint(4) NOT NULL DEFAULT '20',
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `classes_code_unique` (`code`),
  KEY `classes_subject_id_user_id_create_by_index` (`subject_id`,`user_id`,`create_by`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `code`, `subject_id`, `user_id`, `create_by`, `year`, `start_date`, `end_date`, `semester`, `limit`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Toán cao cap n01', 'math011', 5, 16, 16, 2016, '0000-00-00', '0000-00-00', 1, 44, 1, '2016-07-30 20:00:36', '2016-09-26 03:56:25'),
(2, 'Toán cao cap n02', 'math02', 5, 16, 16, 2016, '2016-01-01', '2016-01-01', 1, 50, 1, '2016-07-30 20:00:36', '2016-07-30 20:00:36'),
(4, 'Anh văn N01', 'anhk9n01', 10, 16, 0, 2016, '0000-00-00', '0000-00-00', 1, 20, 1, '2016-08-04 18:36:21', '2016-08-04 18:36:21'),
(5, 'Anh văn N02', 'anhk802', 10, 16, 0, 2016, '0000-00-00', '0000-00-00', 1, 20, 1, '2016-08-04 18:36:48', '2016-08-04 18:36:48'),
(6, 'Tư tưởng hồ chí minh k9-N01', 'hochiminhk901', 1, 16, 0, 2016, '0000-00-00', '0000-00-00', 1, 20, 1, '2016-08-04 18:37:24', '2016-08-04 18:37:24'),
(7, 'Xác xuất thông kê N01', 'thongkek901', 9, 16, 0, 2016, '0000-00-00', '0000-00-00', 1, 20, 1, '2016-08-04 18:37:52', '2016-08-04 18:37:52'),
(8, 'Toán cao cấp 2 - N03', 'math2N03', 4, 16, 0, 2016, '0000-00-00', '0000-00-00', 1, 20, 1, '2016-08-04 18:38:34', '2016-08-04 18:38:34'),
(9, 'Hóa đại cương', 'hoak9n01', 13, 16, 0, 2016, '0000-00-00', '0000-00-00', 1, 20, 1, '2016-08-04 18:38:58', '2016-08-04 18:38:58'),
(12, 'Anh văn cơ sở n01', 'anhvann01', 11, 16, 0, 2016, '0000-00-00', '0000-00-00', 1, 20, 1, '2016-08-04 18:42:32', '2016-08-04 18:42:32'),
(13, 'Anh văn cơ sở n04', 'anhk9n04', 1, 16, 0, 2018, '0000-00-00', '0000-00-00', 0, 20, 1, '2016-08-04 18:43:16', '2016-08-06 00:07:30'),
(14, 'toan cao cap 1 n04', 'mathn04', 5, 16, 0, 2017, '0000-00-00', '0000-00-00', 0, 20, 1, '2016-08-04 18:43:36', '2016-08-06 00:07:37'),
(15, 'toan cao cap 1 n03', 'math04', 5, 16, 0, 2017, '0000-00-00', '0000-00-00', 2, 20, 1, '2016-08-06 21:13:50', '2016-08-06 21:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `class_detail`
--

DROP TABLE IF EXISTS `class_detail`;
CREATE TABLE IF NOT EXISTS `class_detail` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class_detail_user_id_class_id_index` (`user_id`,`class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=139 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class_detail`
--

INSERT INTO `class_detail` (`id`, `user_id`, `class_id`) VALUES
(78, 12, 14),
(77, 11, 14),
(76, 10, 14),
(75, 9, 14),
(74, 8, 14),
(60, 9, 1),
(59, 8, 1),
(50, 3, 1),
(58, 4, 1),
(57, 2, 1),
(73, 3, 14),
(24, 2, 4),
(26, 2, 6),
(27, 2, 7),
(29, 2, 9),
(30, 2, 12),
(135, 9, 15),
(72, 4, 14),
(132, 3, 15),
(70, 15, 14),
(79, 13, 14),
(90, 3, 13),
(89, 4, 13),
(87, 15, 13),
(91, 8, 13),
(92, 9, 13),
(93, 10, 13),
(94, 11, 13),
(95, 12, 13),
(96, 13, 13),
(97, 14, 13),
(98, 11, 12),
(99, 14, 12),
(100, 14, 14),
(103, 10, 1),
(104, 11, 1),
(105, 12, 1),
(106, 2, 16),
(107, 3, 16),
(108, 4, 16),
(109, 8, 16),
(110, 9, 16),
(111, 10, 16),
(112, 2, 17),
(113, 3, 17),
(114, 11, 16),
(115, 12, 16),
(116, 13, 16),
(117, 14, 16),
(118, 15, 16),
(133, 4, 15),
(136, 10, 15),
(134, 8, 15),
(131, 2, 15),
(128, 11, 15),
(129, 12, 15),
(130, 13, 15),
(137, 14, 15),
(138, 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `class_meeting`
--

DROP TABLE IF EXISTS `class_meeting`;
CREATE TABLE IF NOT EXISTS `class_meeting` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `class_id` int(11) NOT NULL,
  `meeting_id` int(11) NOT NULL,
  `attendee_pw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `moderator_pw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3355 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class_meeting`
--

INSERT INTO `class_meeting` (`id`, `class_id`, `meeting_id`, `attendee_pw`, `moderator_pw`, `created_at`, `updated_at`) VALUES
(3334, 1, 100, '2mep0g8n', 'QvPaj7jg', '2016-09-19 06:43:15', '2016-10-14 17:27:37'),
(3346, 1, 100, '2mep0g8n', 'QvPaj7jg', '2016-10-14 09:44:17', '2016-10-14 17:27:37'),
(3344, 2, 100, 'MHpbXReY', 'UEwJK8O4', '2016-09-19 08:14:36', '2016-09-22 10:17:36'),
(3347, 1, 100, '2mep0g8n', 'QvPaj7jg', '2016-10-14 09:44:36', '2016-10-14 17:27:37'),
(3348, 1, 100, '2mep0g8n', 'QvPaj7jg', '2016-10-14 09:44:53', '2016-10-14 17:27:37'),
(3349, 1, 100, '2mep0g8n', 'QvPaj7jg', '2016-10-14 09:45:03', '2016-10-14 17:27:37'),
(3350, 1, 100, '2mep0g8n', 'QvPaj7jg', '2016-10-14 15:28:16', '2016-10-14 17:27:37'),
(3351, 1, 100, '2mep0g8n', 'QvPaj7jg', '2016-10-14 15:38:55', '2016-10-14 17:27:37'),
(3352, 1, 100, '2mep0g8n', 'QvPaj7jg', '2016-10-14 15:39:12', '2016-10-14 17:27:37'),
(3353, 1, 100, '2mep0g8n', 'QvPaj7jg', '2016-10-14 15:47:45', '2016-10-14 17:27:37'),
(3354, 1, 100, '2mep0g8n', 'QvPaj7jg', '2016-10-14 17:14:49', '2016-10-14 17:27:37');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `theory_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `parent_id`, `comment`, `user_id`, `theory_id`, `created_at`, `updated_at`) VALUES
(235, 228, 'fghfgh', 3, 6, '2016-10-08 07:55:17', '2016-10-08 07:55:17'),
(236, 234, 'fgh', 2, 6, '2016-10-08 07:55:47', '2016-10-08 07:55:47'),
(237, 226, 'ádasd', 2, 5, '2016-10-11 08:06:01', '2016-10-11 08:06:01'),
(238, 226, 'sads', 2, 5, '2016-10-11 08:06:05', '2016-10-11 08:06:05'),
(239, 226, '111111111', 2, 5, '2016-10-11 08:06:07', '2016-10-11 08:06:07'),
(234, 0, 'fdfgdfg', 3, 6, '2016-10-08 07:55:14', '2016-10-08 07:55:14'),
(233, 228, 'ssadsd', 2, 6, '2016-10-08 07:48:28', '2016-10-08 07:48:28'),
(232, 228, 'sdsd', 2, 6, '2016-10-08 07:48:24', '2016-10-08 07:48:24'),
(227, 223, 'sdasdasd', 2, 5, '2016-09-23 02:47:00', '2016-09-23 02:47:00'),
(228, 0, 'sdasdasd', 2, 6, '2016-09-23 02:47:12', '2016-09-23 02:47:12'),
(229, 228, 'asdads', 2, 6, '2016-09-23 02:47:21', '2016-09-23 02:47:21'),
(230, 228, '123456789', 2, 6, '2016-09-23 02:47:28', '2016-09-23 02:47:28'),
(226, 0, 'sdasd', 2, 5, '2016-09-23 02:46:56', '2016-09-23 02:46:56'),
(225, 223, '123123123', 2, 5, '2016-09-09 09:00:22', '2016-09-09 09:00:22'),
(224, 223, '123', 2, 5, '2016-09-09 08:57:54', '2016-09-09 08:57:54'),
(223, 0, '123', 2, 5, '2016-09-09 08:57:41', '2016-09-09 08:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `create_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `documents_unit_id_create_by_index` (`unit_id`,`create_by`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `path`, `unit_id`, `create_by`, `created_at`, `updated_at`) VALUES
(3, 'đề cương', 'document/57a35b131777f1.JPG', 6, 0, '2016-08-04 08:11:15', '2016-10-07 03:16:36'),
(2, 'tai lieu 02', 'document/579deb286e56a160730_인천공항_출국_트와이스_직찍_by_스피넬-24.jpg', 2, 0, '2016-07-31 05:12:24', '2016-07-31 05:12:24'),
(4, 'tai lieu on tap', 'document/57f71370d97fakey splash.txt', 6, 0, '2016-10-07 03:16:00', '2016-10-07 03:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

DROP TABLE IF EXISTS `exams`;
CREATE TABLE IF NOT EXISTS `exams` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `create_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exams_subject_id_create_by_index` (`subject_id`,`create_by`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fill_in_blank`
--

DROP TABLE IF EXISTS `fill_in_blank`;
CREATE TABLE IF NOT EXISTS `fill_in_blank` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fill_in_blank_question_id_index` (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `created_by`, `published`, `created_at`, `updated_at`) VALUES
(1, 'dsdasd', 2, 1, '2016-10-07 04:48:57', '2016-10-07 04:48:57');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `file_mime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_gallery_id_index` (`gallery_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_tests`
--

DROP TABLE IF EXISTS `lesson_tests`;
CREATE TABLE IF NOT EXISTS `lesson_tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `work_time` int(11) NOT NULL,
  `score` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lesson_tests_user_id_lesson_id_index` (`user_id`,`lesson_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matching`
--

DROP TABLE IF EXISTS `matching`;
CREATE TABLE IF NOT EXISTS `matching` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `premise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `response` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pr_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `re_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `matching_question_id_index` (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
CREATE TABLE IF NOT EXISTS `meeting` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `unit_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `welcome` text CHARACTER SET utf8,
  `record` tinyint(1) DEFAULT NULL,
  `meta` text CHARACTER SET utf8,
  `auto_start_recording` tinyint(1) NOT NULL,
  `allow_start_top_recording` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10008 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `unit_id`, `name`, `welcome`, `record`, `meta`, `auto_start_recording`, `allow_start_top_recording`, `created_at`, `updated_at`) VALUES
(100, 6, 'Bài 1', 'Chào mừng các bạn đến với lớp ngày hôm nay', 0, NULL, 0, 1, '2016-09-16 09:21:10', '2016-09-16 09:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `form` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `form`, `to`, `content`, `created_at`, `updated_at`) VALUES
(1, 10, 2, 'xin chao', '2016-08-08 17:00:00', '2016-08-08 17:00:00'),
(2, 11, 2, 'xin chao', '2016-07-31 17:00:00', '2016-07-31 17:00:00'),
(3, 12, 2, 'xin chao', '2016-07-31 17:00:00', '2016-07-31 17:00:00'),
(4, 13, 2, 'xin chao', '2016-07-31 17:00:00', '2016-07-31 17:00:00'),
(5, 14, 2, 'xin chao', '2016-07-31 17:00:00', '2016-07-31 17:00:00'),
(6, 15, 2, 'xin chao', '2016-07-31 17:00:00', '2016-07-31 17:00:00'),
(7, 16, 2, 'xin chao', '2016-07-31 17:00:00', '2016-07-31 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_26_112841_entrust_setup_tables', 1),
('2016_05_05_025821_ans_multi_choice', 1),
('2016_05_05_025834_ans_word_blank', 1),
('2016_05_05_025843_ans_multi_choice_text', 1),
('2016_05_05_025855_ans_fill_in_blank', 1),
('2016_05_05_025930_ans_sequence', 1),
('2016_05_05_025942_ans_matching', 1),
('2016_05_05_025959_ans_multi_response', 1),
('2016_05_05_030039_ans_type_in', 1),
('2016_06_02_034012_st_unit', 1),
('2016_06_02_035507_Tests', 1),
('2016_06_02_035531_st_test_detail', 1),
('2016_06_02_035840_st_class', 1),
('2016_06_02_040041_st_class_detail', 1),
('2016_06_02_040402_ps_news', 1),
('2016_06_02_040430_ps_image', 1),
('2016_06_02_040508_ps_gallery', 1),
('2016_06_02_040614_ps_contact', 1),
('2016_06_02_042403_ps_message', 1),
('2016_06_02_042425_ps_new_message', 1),
('2016_06_08_074327_question', 1),
('2016_06_08_074342_MiniTest', 1),
('2016_06_14_103739_TrueFalse', 1),
('2016_07_16_102631_user_test', 1),
('2016_07_16_102807_reply_test', 1),
('2016_07_24_025225_subject', 1),
('2016_07_29_033242_theory', 1),
('2016_07_29_033305_document', 1),
('2016_07_29_033348_notify', 1),
('2016_07_29_033520_exam', 1),
('2016_07_31_025149_question_bank', 2),
('2016_08_06_123206_create_theory_tests_table', 3),
('2016_08_06_123227_create_unit_tests_table', 3),
('2016_08_06_123252_create_subject_tests_table', 3),
('2016_08_06_123320_create_lesson_tests_table', 3),
('2016_08_06_123336_create_section_tests_table', 3),
('2016_08_06_123934_create_subject_test_details_table', 3),
('2016_08_06_123945_create_unit_test_details_table', 3),
('2016_08_06_124000_create_theory_test_details_table', 3),
('2016_08_06_132843_create_theory_questions_table', 3),
('2016_08_06_132853_create_unit_questions_table', 3),
('2016_08_06_132904_create_subject_questions_table', 3),
('2016_08_13_090447_create_user_theory_table', 4),
('2016_08_13_092618_create_user_theory_table', 5),
('2016_08_29_145443_create_news_category_table', 6),
('2016_09_06_094236_create_comments_table', 7),
('2016_09_13_145135_create_meeting_table', 8),
('2016_09_13_145938_create_unit_meeting_table', 8),
('2016_09_16_195904_create_class_meeting_table', 9),
('2016_10_11_163226_create_slide_videos_table', 10),
('2016_10_11_171445_create_audios_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `mini_test`
--

DROP TABLE IF EXISTS `mini_test`;
CREATE TABLE IF NOT EXISTS `mini_test` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insistence` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL DEFAULT '600',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mini_test`
--

INSERT INTO `mini_test` (`id`, `name`, `insistence`, `description`, `time`, `created_at`, `updated_at`) VALUES
(1, 'dfsd', 'sdfs', 'fsf', 33, '2016-07-31 18:25:27', '2016-07-31 18:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `multi_choice`
--

DROP TABLE IF EXISTS `multi_choice`;
CREATE TABLE IF NOT EXISTS `multi_choice` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `multi_choice_question_id_index` (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `multi_choice_text`
--

DROP TABLE IF EXISTS `multi_choice_text`;
CREATE TABLE IF NOT EXISTS `multi_choice_text` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no` tinyint(4) NOT NULL,
  `answer` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `multi_choice_text_question_id_index` (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `multi_response`
--

DROP TABLE IF EXISTS `multi_response`;
CREATE TABLE IF NOT EXISTS `multi_response` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `audio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `multi_response_question_id_index` (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `news_category_id` int(10) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `source` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_view` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_category_id`, `user_id`, `title`, `intro`, `content`, `view`, `source`, `last_view`, `active`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Thông báo mở lớp hỗ trợ ôn tập kỹ năng lập trình cho sinh viên K14 (16/02/2016)', 'Thông báo mở lớp hỗ trợ ôn tập kỹ năng lập trình cho sinh viên K14 (16/02/2016)', '<div class="div-baiviet">\r\n<div class="chitiet"><span id="lblChitiet">Căn cứ v&agrave;o kết quả thi học kỳ m&ocirc;n Nhập m&ocirc;n lập tr&igrave;nh của sinh vi&ecirc;n&nbsp; K14 - khoa CNTT. Để gi&uacute;p sinh vi&ecirc;n n&acirc;ng cao kỹ năng lập tr&igrave;nh v&agrave; n&acirc;ng cao kết quả&nbsp; kỳ thi kết th&uacute;c học phần. Ph&ograve;ng Đ&agrave;o tạo th&ocirc;ng b&aacute;o mở lớp hỗ trợ &ocirc;n tập kỹ năng lập tr&igrave;nh cho sinh vi&ecirc;n K14 c&aacute;c nh&oacute;m ng&agrave;nh CNTT, KHMT, HTTT, TT&amp;MMT. Chi tiết thời gian phụ đạo như file đ&iacute;nh k&egrave;m. Thời gian tối c&aacute;c ng&agrave;y 24-25/02/2016 tại c&aacute;c ph&ograve;ng m&aacute;y khu giảng đường C4</span></div>\r\n</div>', 1, '', '2016-08-01 08:49:31', 1, 0, '2016-07-31 18:49:25', '2016-08-04 09:08:17'),
(2, 1, 2, 'Tạp chí KHNN số 47 (Tháng 6/2016)', 'Tạp chí KHNN số 47 (Tháng 6/2016)', '<div class="div-baiviet">\r\n<p><strong>L&Yacute; LUẬN NG&Ocirc;N NGỮ</strong><br /><br /><strong>1. NGUYỄN VIỆT TIẾN &ndash; </strong>Hướng tới việc ph&acirc;n loại c&acirc;u trả lời.<br /><br /><strong>2. VŨ TH&Uacute;Y NGA &ndash; </strong>Thời v&agrave; một số vấn đề li&ecirc;n quan đến giảng dạy thời trong tiếng Nhật.</p>\r\n<p><strong>3. VŨ HƯNG &ndash;&nbsp;</strong>Đối chiếu động từ trạng th&aacute;i &ldquo;死&rdquo; trong tiếng H&aacute;n hiện đại v&agrave; động từ &ldquo;chết&rdquo; trong tiếng Việt.<br /><br /><strong>PHƯƠNG PH&Aacute;P GIẢNG DẠY</strong><br /><br /><strong>4.&nbsp;VŨ VĂN ĐẠI, PHẠM THỊ THANH H&Agrave; &ndash;&nbsp;</strong>Giao thoa ng&ocirc;n ngữ: R&agrave;o cản v&ocirc; h&igrave;nh đối với giao tiếp bằng ngoại ngữ.<br /><br /><strong>5. HUANG FU QUAN (</strong><strong>黄甫全</strong><strong>)</strong><strong>, TRẦN KHAI XU&Acirc;N (</strong><strong>陈开春</strong><strong>) &ndash;</strong><strong>&nbsp;</strong>Bước đầu t&igrave;m hiểu m&ocirc; h&igrave;nh thiết kế b&agrave;i giảng m&ocirc;n tiếng Trung Quốc tổng hợp theo phương thức học kết hợp: Khảo s&aacute;t trường hợp Khoa tiếng Trung, Trường Đại học Sư phạm TP. Hồ Ch&iacute; Minh.<br /><br /><strong>6. HO&Agrave;NG NAM HẢI &ndash;&nbsp;</strong>Sử dụng c&ocirc;ng nghệ th&ocirc;ng tin trong giảng dạy kĩ năng đọc hiểu: Lợi &iacute;ch, th&aacute;ch thức v&agrave; giải ph&aacute;p.<br /><br /><strong>VĂN H&Oacute;A-VĂN HỌC</strong><br /><br /><strong>7. NGUYỄN MINH NGUYỆT &ndash;&nbsp;</strong>Giao tiếp li&ecirc;n văn h&oacute;a trong hội nhập nghề nghiệp Ph&aacute;p ngữ.<br /><br /><strong>8. TRỊNH THỊ THU H&Agrave; &ndash;&nbsp;</strong>Một số đặc trưng văn h&oacute;a Th&aacute;i Lan qua c&aacute;c th&agrave;nh ngữ c&oacute; chứa từ &ldquo;nước&rdquo;.<br /><br /><strong>9.&nbsp;MITSUHIRO TOKUNAGA &ndash;&nbsp;</strong>Quan điểm về khai s&aacute;ng văn minh: Phong c&aacute;ch sống v&agrave; tư duy của nh&acirc;n vật Daisuke&nbsp;Nagai trong t&aacute;c phẩm&nbsp;<em>Từ đ&oacute;&nbsp;</em>(And Then) của Soseki Natsume.<br /><br /><strong>TRAO ĐỔI TH&Ocirc;NG TIN</strong><br /><br /><strong>10.&nbsp;PHAN THỊ KIM NG&Acirc;N, PHẠM THỊ PHƯỢNG &ndash;&nbsp;</strong>T&aacute;c động&nbsp;của định hướng thị trường tới sự h&agrave;i l&ograve;ng của sinh vi&ecirc;n về lựa chọn trường đại học.<br />&nbsp;<br /><br />Tổng bi&ecirc;n tập: GS.TS VŨ VĂN ĐẠI &bull; Ph&oacute; Tổng bi&ecirc;n tập: PGS.TSKH NGUYỄN Đ&Igrave;NH LUẬN &bull;<br /><br />Thư k&yacute;: TS NGUYỄN T&Ocirc; CHUNG &bull;<br /><br />Ban bi&ecirc;n tập: TS Trần Quang Anh, PGS.TS Trần Quang B&igrave;nh, TS Nguyễn T&ocirc; Chung, GS.TS Nguyễn Thiện Gi&aacute;p, ThS L&ecirc; Quốc Hạnh, GS.TS Nguyễn Văn Khang, PGS.TS Đường C&ocirc;ng Minh, TS L&ecirc; Văn Nh&acirc;n, TS Nguyễn Thị C&uacute;c Phương, PGS.TS Trần Thị Chung To&agrave;n, PGS.TS Nguyễn Văn Tr&agrave;o, GS.TS Ho&agrave;ng Văn V&acirc;n<br /><br />Trị sự: PGS.TS Trần Quang B&igrave;nh (Trưởng ban); ThS T&ocirc;n Quang H&ograve;a; ThS Đinh Thị Hải, Nguyễn Văn Nghĩa, Nguyễn Phương T&uacute; &bull;<br /><br />Trụ sở: Ph&ograve;ng Quản l&iacute; Khoa học, Trường Đại học H&agrave; Nội, Km 9, đường Nguyễn Tr&atilde;i, quận Thanh Xu&acirc;n - H&agrave; Nội &bull;<br />ĐT:<span class="apple-converted-space">&nbsp;<span class="skypev3tbinjectionprint">04 &ndash; 35530728; Fax: 04 &ndash; 38544550; e-mail:<span class="apple-converted-space">&nbsp; <a href="mailto:tckhnn@hanu.edu.vn">tckhnn@hanu.edu.vn</a>,<span class="apple-converted-space">&nbsp;&nbsp;<br />Giấy ph&eacute;p xuất bản số: 744/GP-BTTTT, ng&agrave;y 16.5.2011 &bull; ISSN: 1859-2503<br /><br /><strong><br />NỘI DUNG T&Oacute;M TẮT</strong><br />&nbsp;<br /><br /><strong>1.&nbsp;</strong><strong>NGUYỄN VIỆT TIẾN &ndash;&nbsp;</strong>Hướng tới việc ph&acirc;n loại c&acirc;u trả lời<em>&nbsp;(Ng&ocirc;n ngữ viết: tiếng Ph&aacute;p)</em><br /><br /><em>&ldquo;Cặp C&acirc;u hỏi-Trả lời, được sử dụng như khung nghi&ecirc;n cứu đ&atilde; chứng tỏ được t&iacute;nh hữu dụng của n&oacute; trong c&aacute;c nghi&ecirc;n cứu về c&acirc;u hỏi v&agrave; h&agrave;nh vi hỏi. Tuy nhi&ecirc;n, cho đến nay, c&acirc;u trả lời vẫn c&ograve;n chưa được đề cập đến như một đối tượng nghi&ecirc;n cứu độc lập. Một nghi&ecirc;n cứu tr&ecirc;n b&igrave;nh diện hệ thống v&agrave; dụng học của c&acirc;u trả lời (định nghĩa, m&ocirc; tả, chức năng, gi&aacute; trị v&agrave; ph&acirc;n loại) sẽ cho ph&eacute;p hiểu r&otilde; hơn v&agrave; do vậy, sẽ sử dụng tốt hơn từng c&aacute; thể cũng như quan hệ h&agrave;nh chức của bộ ba h&agrave;nh vi hỏi-c&acirc;u hỏi-c&acirc;u trả lời trong c&aacute;c nghi&ecirc;n cứu về ng&ocirc;n ngữ, giao tiếp v&agrave; gi&aacute;o học ph&aacute;p ngoại ngữ. B&agrave;i viết n&agrave;y đưa ra những cơ sở đầu ti&ecirc;n đi theo hướng tr&ecirc;n, nhằm g&oacute;p phần bổ khuyết thiếu hụt tr&ecirc;n trong c&aacute;c nghi&ecirc;n cứu hiện nay.</em><br /><br /><strong><em>Từ kho&aacute;:</em></strong><em>&nbsp;cặp c&acirc;u hỏi-trả lời, bộ ba h&agrave;nh vi hỏi-c&acirc;u hỏi-c&acirc;u trả lời, c&acirc;u trả lời (định nghĩa, gi&aacute; trị, ph&acirc;n loại), c&acirc;u đ&aacute;p.</em><br /><br /><em>The Question-Answer pair used as a research framework has proved useful in studies on questions and questioning behaviors. However, until now, the answer has yet been mentioned as an independent research subject. A study on systematic and pracmatic aspects of the answer (definition, description, function, value and category) would facilitate deeper understanding, thus, better use of each component as well as functional relation among questioning behavior &ndash; question &ndash; answer in studies on language, communication and foreign language teaching methodology. This article attempts to provide the first step in this research direction, helping to narow the gaps in current research.</em><br /><br /><strong><em>Keywords:&nbsp;</em></strong><em>question-answer pair, questioning behavior-question-answer, answer (definition, value and category), response.</em><em>&rdquo;</em><br /><br />&nbsp;<br /><br /><strong>2. VŨ TH&Uacute;Y NGA&nbsp;&ndash;&nbsp;</strong>Thời v&agrave; một số vấn đề li&ecirc;n quan đến giảng dạy thời trong tiếng Nhật<em>&nbsp;(Ng&ocirc;n ngữ viết: tiếng Nhật)</em><br /><br /><em>&ldquo;Trong tiếng Nhật, Thời l&agrave; th&agrave;nh phần ngữ ph&aacute;p kh&ocirc;ng thể thiếu trong c&acirc;u. Ngo&agrave;i lớp từ vựng chỉ thời gian, Thời trong tiếng Nhật được biểu hiện nhất qu&aacute;n cả ở động từ, t&iacute;nh từ v&agrave; cấu tr&uacute;c vị ngữ chứa danh từ. Trong khi đ&oacute;, tiếng Việt l&agrave; ng&ocirc;n ngữ kh&ocirc;ng ngữ ph&aacute;p h&oacute;a Thời n&ecirc;n việc nắm bắt v&agrave; chuyển dịch c&aacute;c biểu hiện thời gian giữa hai ng&ocirc;n ngữ Nhật-Việt được cho l&agrave; kh&oacute; khăn kh&ocirc;ng nhỏ đối với người sử dụng. B&agrave;i viết nhằm g&oacute;p phần n&acirc;ng cao &yacute; thức cũng như hiệu quả sử dụng Thời trong việc dạy v&agrave; học tiếng Nhật.</em><br /><br /><strong><em>Từ kho&aacute;:</em></strong><em>&nbsp;Thời, tiếng Nhật, tiếng Việt, nắm bắt, chuyển dịch.</em><br /><br /><em>In the Japanese language, Tense is a vitally important part of a sentence. Besides words</em><em>&nbsp;expressing time, tense in Japanese is shown through verbs, adjectives and also predicate noun compounds. The Vietnamese language, however, has no grammatical tense signals, causing big difficulty in understandingas well as translating time expressions from/to the two languages. This study could be an attempt to focus on the Tense in Japanese teaching.</em><br /><br /><strong><em>Keywords:&nbsp;</em></strong><em>Tense, Japanese,Vietnamese, understand, translate.&rdquo;</em><br /><br />&nbsp;<br /><br /><strong>3.&nbsp;</strong><strong>VŨ HƯNG &ndash;&nbsp;</strong>Đối chiếu động từ trạng th&aacute;i &ldquo;死&rdquo; trong tiếng H&aacute;n hiện đại v&agrave; động từ &ldquo;chết&rdquo; trong tiếng Việt<em>&nbsp;(Ng&ocirc;n ngữ viết: tiếng Trung Quốc)</em><br /><br /><em>&ldquo;</em><em>B&agrave;i nghi&ecirc;n cứu căn cứ v&agrave;o đặc điểm chức năng c&uacute; ph&aacute;p v&agrave; chức năng ngữ nghĩa của từng loại</em><em>&nbsp;động từ</em><em>&nbsp;vận dụng phương ph&aacute;p đối chiếu so s&aacute;nh, khảo s&aacute;t động từ trạng th&aacute;i &ldquo;sǐ&rdquo; của tiếng H&aacute;n v&agrave; động từ&nbsp;</em><em>t</em><em>ương đương</em><em>&nbsp;</em><em>&ldquo;chết&rdquo; của tiếng&nbsp;</em><em>V</em><em>iệt. Từ đ&oacute;, t&igrave;m ra điểm kh&aacute;c biệt v&agrave; l&yacute; do dẫn đến sự kh&aacute;c biệt&nbsp;</em><em>giữa&nbsp;</em><em>hai ng&ocirc;n ngữ tr&ecirc;n phương diện chức năng c&uacute; ph&aacute;p v&agrave; chức năng ngữ nghĩa</em><em>.</em><br /><br /><strong><em>Từ kh&oacute;a:</em></strong><em>&nbsp;Tiếng H&aacute;n hiện đại; động từ trạng th&aacute;i;</em><em>&nbsp;sǐ; ch</em><em>ết;&nbsp;</em><em>đối chiếu</em><em>.</em><br /><br /><em>T</em><em>his&nbsp;</em><em>paper</em><em>&nbsp;</em><em>investigates the Chinese stative verb &lsquo;si&rsquo; and its equivalent &lsquo;chết&rsquo; in Vietnames based on&nbsp;</em><em>co</em><em>ntrastive</em><em>&nbsp;analysis</em><em>&nbsp;and&nbsp;</em><em>the syntactic and semantic function</em><em>s</em><em>&nbsp;</em><em>each verb</em><em>. Then</em><em>ce,</em><em>&nbsp;it&nbsp;</em><em>identifies the</em><em>&nbsp;differences</em><em>&nbsp;in&nbsp;</em><em>syntactic and semantic</em><em>-</em><em>function</em><em>al aspect</em><em>&nbsp;</em><em>between the two languages as well as their causes</em><em>.</em><br /><br /><strong><em>K</em></strong><strong><em>eywords:</em></strong><em>&nbsp;</em><em>Modern Chinese, Stative verbs, si, Chet, co</em><em>ntrastive</em><em>.</em><em>&rdquo;</em><br /><br />&nbsp;<br /><br /><strong>4.&nbsp;VŨ VĂN ĐẠI, PHẠM THỊ THANH H&Agrave; &ndash;&nbsp;</strong>Giao thoa ng&ocirc;n ngữ: R&agrave;o cản v&ocirc; h&igrave;nh đối với giao tiếp bằng ngoại ngữ<em>&nbsp;(Ng&ocirc;n ngữ viết: tiếng Việt)</em><br /><br /><em>&ldquo;</em><em>Giao thoa ng&ocirc;n ngữ l&agrave; sự chuyển di ti&ecirc;u cực từ ng&ocirc;n ngữ 1 (L1) sang ng&ocirc;n ngữ 2 (L2) v&agrave; ngược lại khi c&oacute; sự tiếp x&uacute;c giữa c&aacute;c ng&ocirc;n ngữ. Hiện tượng n&agrave;y đ&atilde; được nhiều nh&agrave; nghi&ecirc;n cứu xem x&eacute;t từ g&oacute;c độ t&acirc;m l&yacute; học, ng&ocirc;n ngữ học v&agrave; phương ph&aacute;p giảng dạy ngoại ngữ. Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i tiếp cận vấn đề từ một g&oacute;c độ kh&aacute;c, g&oacute;c độ t&acirc;m l&yacute;-ng&ocirc;n ngữ học, v&agrave; cho rằng giao thoa&nbsp;</em><em>l&agrave; việc người học sử dụng c&aacute;c c&ocirc;ng cụ diễn đạt của L2 để dịch tư duy bằng L1, theo đ&uacute;ng sơ đồ tư duy của L1. Từ c&aacute;ch tiếp cận n&agrave;y ch&uacute;ng t&ocirc;i đề xuất hai phương hướng khắc phục lỗi: tăng cường năng lực L2 v&agrave; học c&aacute;ch tư duy bằng L2</em><em>.</em><br /><br /><strong><em>Từ kh&oacute;a:</em></strong><em>&nbsp;tiếp x&uacute;c ng&ocirc;n ngữ, giao thoa, chuyển di ti&ecirc;u cực, lỗi, t&acirc;m l&yacute; ng&ocirc;n ngữ học, dịch tư duy.</em><br /><br /><em>Language interference is a negative</em>&nbsp;<em>transfer from one language (L1) to another (L2) and backwards when users are exposed to two languages. This phenomenon has caught researchers'' attention from the perspective of psychology, linguistics, and foreign language teaching methodology. In this article, a different approach - psycholinguistic perspective, is adopted, assuming that language nterference occurs when a learner uses L2 tools of ideas expression to translate from L1, copying L1 thinking. Thence, we offer two recommendations to correct errors: enhancing the proficency of L2 and learning to think in L2</em><em>.</em><br /><br /><strong><em>Keywords:</em></strong><em>&nbsp;language exposure, interference, negative transfer, error, psycholinguistic, thoughts&nbsp;transfer.&rdquo;</em><br /><br />&nbsp;<br /><br /><strong>5.&nbsp;HUANG FU QUAN (</strong><strong>黄甫全</strong><strong>)</strong><strong>, TRẦN KHAI XU&Acirc;N (</strong><strong>陈开春</strong><strong>) &ndash;</strong><strong>&nbsp;</strong>Bước đầu t&igrave;m hiểu m&ocirc; h&igrave;nh thiết kế b&agrave;i giảng m&ocirc;n tiếng Trung Quốc tổng hợp theo phương thức học kết hợp: Khảo s&aacute;t trường hợp Khoa tiếng Trung, Trường Đại học Sư phạm TP. Hồ Ch&iacute; Minh<em>&nbsp;(Ng&ocirc;n ngữ viết: tiếng Trung Quốc)</em><br /><br /><em>&ldquo;</em><em>Với sự b&ugrave;ng nổ của&nbsp;</em><em>việc&nbsp;</em><em>c&ocirc;ng nghệ th&ocirc;ng tin h&oacute;a gi&aacute;o dục đại học, c&ocirc;ng nghệ th&ocirc;ng tin đang thay đổi c&aacute;ch thức học tập của sinh vi&ecirc;n với tốc độ kinh ngạc. Sau giai đoạn cao tr&agrave;o của nghi&ecirc;n cứu v&agrave; ứng dụng đại tr&agrave;, ch&uacute;ng ta cần nh&igrave;n nhận lại vấn đề c&ocirc;ng nghệ th&ocirc;ng tin h&oacute;a một c&aacute;ch kỹ lưỡng v&agrave; to&agrave;n diện hơn. Tuy phương ph&aacute;p học tập trực tuyến mang nhiều ưu điểm vượt trội,&hellip; nhưng lại kh&ocirc;ng thể thay thế ho&agrave;n to&agrave;n hoạt động dạy học tr&ecirc;n lớp do thiếu sự can thiệp của gi&aacute;o vi&ecirc;n. Trong bối cảnh đ&oacute;, kh&aacute;i niệm ứng dụng phương ph&aacute;p học tập kết hợp (Blending Learning) ra đời. L&agrave;m thế n&agrave;o để ph&acirc;n t&iacute;ch đầy đủ mức độ can dự v&agrave;o qu&aacute; tr&igrave;nh học tập của phương ph&aacute;p học tập trực tuyến? L&agrave;m thế n&agrave;o ph&aacute;t huy vai tr&ograve; của gi&aacute;o vi&ecirc;n v&agrave; chuy&ecirc;n gia gi&aacute;o dục trong phương ph&aacute;p học n&agrave;y? Hai c&acirc;u hỏi tr&ecirc;n l&agrave; vấn đề ch&uacute;ng ta c&ugrave;ng quan t&acirc;m. Học tập kết hợp l&agrave; phương ph&aacute;p kết hợp dạy học truyền thống tr&ecirc;n lớp với dạy học từ xa m&agrave; trong đ&oacute; gi&aacute;o vi&ecirc;n đ&oacute;ng vai tr&ograve; chủ đạo v&agrave; học sinh đ&oacute;ng vai tr&ograve; chủ thể. Phương ph&aacute;p n&agrave;y vừa ph&aacute;t huy ưu thế của học tập trực tuyến, vừa thu được hiệu suất cao nhất với mức đầu tư thấp nhất. Tr&ecirc;n cương vị l&agrave; gi&aacute;o vi&ecirc;n trực tiếp tham gia v&agrave;o qu&aacute; tr&igrave;nh giảng dạy, ch&uacute;ng t&ocirc;i nhận thấy hiệu quả của dạy học tr&ecirc;n lớp kh&ocirc;ng cao, người học thiếu động lực học tập. Đồng thời, việc dạy học của gi&aacute;o vi&ecirc;n chỉ dừng ở phạm vi lớp học, do đ&oacute; việc ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin chỉ diễn ra trong phạm vi lớp học. Hiện nay, việc kết hợp một c&aacute;ch hợp l&yacute; phương ph&aacute;p truyền thống với c&ocirc;ng nghệ th&ocirc;ng tin sẽ t&aacute;c động t&iacute;ch cực đến qu&aacute; tr&igrave;nh đổi mới dạng thức, n&acirc;ng cao chất lượng của việc giảng dạy tiếng Trung. Con đường kết hợp n&agrave;y th&uacute;c đẩy động cơ học tập, n&acirc;ng cao hiệu quả học tập của người học, đồng thời định h&igrave;nh được m&ocirc; h&igrave;nh giảng dạy mới</em><em>.</em><br /><br /><em>Ch&uacute;ng t&ocirc;i nhận thấy phương ph&aacute;p học tập kết hợp ch&iacute;nh l&agrave; con đường để thực hiện c&aacute;c mục ti&ecirc;u n&oacute;i tr&ecirc;n. Phương ph&aacute;p n&agrave;y kh&ocirc;ng những ph&ugrave; hợp với bối cảnh đổi mới gi&aacute;o dục trong thời đại c&ocirc;ng nghệ th&ocirc;ng tin, m&agrave; c&ograve;n đ&aacute;p ứng nhu cầu đổi mới chương tr&igrave;nh đ&agrave;o tạo của trường ch&uacute;ng t&ocirc;i</em><em>.</em><br /><br /><strong><em>Từ kh&oacute;a:&nbsp;</em></strong><em>học tập kết hợp, thiết kế chương tr&igrave;nh đ&agrave;o tạo, học phần &ldquo;tiếng Trung Quốc tổng hợp&rdquo;.</em><br /><br /><em>With&nbsp;</em><em>its&nbsp;</em><em>increasing use in tertiary-level training,&nbsp;</em><em>information technology (IT)&nbsp;</em><em>is changing the way students learn with&nbsp;</em><em>incredable</em><em>&nbsp;speed.&nbsp;</em><em>It&nbsp;</em><em>is necessary to&nbsp;</em><em>take a more careful and comprehesive look at</em><em>&nbsp;</em><em>the application of IT after massive research into it. Despite its considerable advantages, online learning fails to completely replace offline learning due to the lack of teachers&rsquo; intervention. In this context, the term blended learning was coined. How to fully analyse the level of intervention in learning process using online learning? How to maximize the role of teachers and educators in this studying method? These questions are of great interest. Blended learning is a method combining traditional and distance training, in which teachers and students play leading and subjective roles, respectively. This method not only promotes advantages of online learning but also obtains highest performance with less investments. As teachers, we realize the low outcomes of traditional learning and the lack of motivation among students. Besides, teaching activities only occur within classrooms, thus, the application of IT also remains within classrooms. The appropriate combination of traditional learning and IT will exert positive effects on the improvement of Chinese language teaching. It provides motivation for students, enhances learning outcomes and develops a new teaching model.</em><br /><br /><em>We are aware that blended learning is a way to achieve these goals. It is effective not only in education renovation in information technology era but also curriculum improvement of our university as well</em><em>.</em><br /><br /><strong><em>Keywords:</em></strong><em>&nbsp;blended learning, curriculum development, &lsquo;general Chinese language&rsquo; module</em><em>.</em><em>&rdquo;&nbsp;</em><br /><br />&nbsp;<br /><br /><strong>6.&nbsp;</strong><strong>HO&Agrave;NG NAM HẢI &ndash;&nbsp;</strong>Sử dụng c&ocirc;ng nghệ th&ocirc;ng tin trong giảng dạy kĩ năng đọc hiểu: Lợi &iacute;ch, th&aacute;ch thức v&agrave; giải ph&aacute;p<em>&nbsp;(Ng&ocirc;n ngữ viết: tiếng Anh)</em><br /><br /><em>&ldquo;Tại Trường Đại học H&agrave; Nội, việc ứng dụng c&ocirc;ng nghệ th&ocirc;ng tin trong giảng dạy lu&ocirc;n được l&atilde;nh đạo nh&agrave; trường v&agrave; c&aacute;c đơn vị động vi&ecirc;n, tạo điều kiện tối đa. Trong khu&ocirc;n khổ b&agrave;i viết n&agrave;y, t&aacute;c giả xin chia sẻ những lợi &iacute;ch v&agrave; c&aacute;c c&aacute;ch sử dụng c&ocirc;ng nghệ th&ocirc;ng tin trong việc dạy kỹ năng đọc hiểu cho sinh vi&ecirc;n Việt Nam. Hy vọng rằng b&agrave;i viết sẽ g&oacute;p phần gi&uacute;p cho những b&agrave;i giảng đọc hiểu trở n&ecirc;n hấp dẫn v&agrave; hiệu quả hơn, đồng thời th&uacute;c đẩy sinh vi&ecirc;n tham gia t&iacute;ch cực hơn v&agrave;o qu&aacute; tr&igrave;nh tự trau dồi kỹ năng đọc hiểu bằng tiếng Anh</em><em>.</em><br /><br /><span class="hps"><strong><em>Từ kh&oacute;a:</em></strong><span class="hps"><em>&nbsp;c&ocirc;ng nghệ th&ocirc;ng tin, giảng dạy kỹ năng đọc hiểu, đọc hiểu.</em><br /><br /><em>At Hanoi University, the use of Information and Communication Technology (ICT) in teaching and learning has become increasingly encouraged by educational leaders in all the majors/subjects taught. Within the scope of this paper, I would like to address the following main issues: the benefits of using ICT in teaching reading and how to use ICT in teaching reading effectively with the available ICT facilities at Hanoi University. Challenges in ICT application and solutions to those challenges in teaching reading are also presented in the final section of this paper.</em><br /><br /><strong><em>Keywords:</em></strong><em>&nbsp;ICT, teaching reading comprehension skills, reading comprehension.&rdquo;</em><br /><br />&nbsp;<br /><br /><strong>7. NGUYỄN MINH NGUYỆT &ndash;&nbsp;</strong>Giao tiếp li&ecirc;n văn h&oacute;a trong hội nhập nghề nghiệp Ph&aacute;p ngữ<em>&nbsp;(Ng&ocirc;n ngữ viết: tiếng Ph&aacute;p)</em><br /><br /><em>&ldquo;Nghi&ecirc;n cứu n&agrave;y đề cập tới việc c&aacute;c chủ thể giao tiếp lu&ocirc;n cố gắng h&ograve;a hợp &ldquo;c&aacute;i t&ocirc;i&rdquo; của họ với người đối diện trong khi tương t&aacute;c v&agrave; trong c&aacute;c t&igrave;nh huống nghề nghiệp. Tr&ecirc;n thực tế, họ thực sự t&ocirc;n trọng c&aacute;c quy tắc chung v&agrave; mong th&iacute;ch ứng được với c&aacute;c t&igrave;nh huống giao tiếp. Tuy nhi&ecirc;n, d&ugrave; kh&ocirc;ng chủ &yacute;, họ đ&atilde; tự tạo th&ecirc;m cho m&igrave;nh kh&oacute; khăn khi giao tiếp bởi v&igrave; c&aacute;c chiến lược họ sử dụng khi tương t&aacute;c v&ocirc; h&igrave;nh trung cản trở &yacute; đồ giao tiếp của họ</em><em>.</em><br /><br /><span class="hps"><strong><em>Từ kh&oacute;a:</em></strong><span class="hps"><em>&nbsp;giao tiếp li&ecirc;n văn h&oacute;a, hội nhập nghề nghiệp, Ph&aacute;p, hợp t&aacute;c, chiến lược tương t&aacute;c, Việt Nam.</em><br /><br /><em>This research discusses the efforts of communicators to adapt to each other when interacting in profession-related encounters. In fact, they really obey general rules and expect to adapt themselves in communication situations. However, the subjects unconsciously make difficulties for themselves when communicating as their interactional strategies somehow hinder their intentions.</em><br /><br /><strong><em>Keywords:</em></strong><em>&nbsp;intercultural communication, professional integration, French, cooperation, interactional strategies, Vietnam.&rdquo;</em><br /><br /><strong>&nbsp;</strong><br /><br /><strong>8. TRỊNH THỊ THU H&Agrave; &ndash;&nbsp;</strong>Một số đặc trưng văn h&oacute;a Th&aacute;i Lan qua c&aacute;c th&agrave;nh ngữ c&oacute; chứa từ &ldquo;nước&rdquo;<em>&nbsp;(Ng&ocirc;n ngữ viết: tiếng Việt)</em><br /><br /><em>&ldquo;Th&agrave;nh ngữ l&agrave; một loại cụm từ cố định, c&oacute; h&igrave;nh th&aacute;i - cấu tr&uacute;c bền vững, c&oacute; &yacute; nghĩa ho&agrave;n&nbsp;chỉnh, b&oacute;ng bẩy, được sử dụng rộng r&atilde;i trong giao tiếp h&agrave;ng ng&agrave;y, đặc biệt l&agrave; trong khẩu ngữ<sup>1</sup>.<span class="apple-converted-space">&nbsp;Do t&iacute;nh chất đặc th&ugrave; về cấu tạo h&igrave;nh thức v&agrave; về nội dung &yacute; nghĩa n&ecirc;n th&agrave;nh ngữ thường lưu giữ rất nhiều những đặc trưng phản &aacute;nh r&otilde; c&aacute;ch tư duy, đặc điểm lịch sử văn h&oacute;a cũng như kh&ocirc;ng gian, m&ocirc;i trường tự nhi&ecirc;n v&agrave; x&atilde; hội của con người l&agrave; chủ nh&acirc;n của kho t&agrave;ng th&agrave;nh ngữ đ&oacute;. Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i mong muốn cung cấp cho bạn đọc một c&aacute;ch tiếp cận, kh&aacute;m ph&aacute; mới những n&eacute;t đặc trưng của đất nước v&agrave; con người Th&aacute;i Lan qua những c&acirc;u th&agrave;nh ngữ c&oacute; chứa từ &ldquo;nước&rdquo;, từ đ&oacute; gi&uacute;p cho những người quan t&acirc;m n&acirc;ng cao hiểu biết của m&igrave;nh hơn về đất nước v&agrave; con người Th&aacute;i Lan, đặc biệt l&agrave; tr&ecirc;n b&igrave;nh diện văn h&oacute;a</span></em><em>.</em><br /><br /><strong><em>Từ kho&aacute;:</em></strong><em>&nbsp;đặc trưng, văn h&oacute;a, th&agrave;nh ngữ, nước, khẩu ngữ.</em><br /><br /><em>An idiom is a fixed expression with stable structural pattern that has a complete, figurative meaning. Idioms are widely used in daily communication, particularly in informal language. Because of its syntactic and semantic features, an idiom clearly reflects ways of thinking, socio-cultural identities, natural and social contexts of the users. In this article, we hope to provide a new approach to Thai national identity through idioms containing &lsquo;water&rsquo;, thus, widen the knowledge of readers about Thai culture and people</em><em>.</em><br /><br /><strong><em>Keywords:&nbsp;</em></strong><em>characteristics, culture, idioms, water, informal language</em><em>.&rdquo;</em><br /><br />&nbsp;<br /><br /><strong>9.&nbsp;MITSUHIRO TOKUNAGA &ndash;&nbsp;</strong>Quan điểm về khai s&aacute;ng văn minh: Phong c&aacute;ch sống v&agrave; tư duy của nh&acirc;n vật Daisuke&nbsp;Nagai trong t&aacute;c phẩm&nbsp;<em>Từ đ&oacute;&nbsp;</em>(And Then) của Soseki Natsume&nbsp;<em>(Ng&ocirc;n ngữ viết: tiếng Anh)</em><br /><br /><em>&ldquo;Việc nghi&ecirc;n cứu phong c&aacute;ch sống v&agrave; tư duy của nh&acirc;n vật ch&iacute;nh Daisuke Nagai trong t&aacute;c phẩm &ldquo;Từ đ&oacute;&rdquo; (And Then) của Soseki Natsume ch&uacute; trọng đến nhiều vấn đề li&ecirc;n quan đến khai s&aacute;ng văn minh của Nhật Bản thời Minh Trị, khi đất nước trải qua c&ocirc;ng cuộc hiện đại h&oacute;a một c&aacute;ch mạnh mẽ. D&ugrave; ho&agrave;n th&agrave;nh xuất sắc bậc đại học nhưng Daisuke kh&ocirc;ng t&igrave;m việc l&agrave;m v&agrave; bằng l&ograve;ng với cuộc sống nhờ v&agrave;o t&agrave;i sản của cha. Anh biện minh cho t&igrave;nh trạng của m&igrave;nh bằng c&aacute;ch tuy&ecirc;n bố rằng những người c&oacute; việc l&agrave;m tr&ecirc;n khắp thế giới phải d&agrave;nh hết thời gian vất vả cho c&ocirc;ng việc, do đ&oacute; mất đi sự tự do tinh thần để suy nghĩ. Daisuke đặc biệt nghĩ nhiều về cha m&igrave;nh &ndash; &ocirc;ng Toku, anh trai Seigo v&agrave; những người bạn như Hiraoka. Tuy nhi&ecirc;n, sau khi Daisuke t&igrave;m c&aacute;ch cướp Michiyo &ndash; vợ của Hiraoka, cha anh đ&atilde; tức giận cắt hết c&aacute;c khoản hỗ trợ t&agrave;i ch&iacute;nh cho anh v&agrave; ch&iacute;nh điều n&agrave;y đ&atilde; khiến Daisuke phải t&igrave;m việc l&agrave;m. Yếu tố ph&ecirc; b&igrave;nh văn h&oacute;a trong cuốn tiểu thuyết n&agrave;y chỉ c&oacute; thể thấy được từ g&oacute;c nh&igrave;n của c&aacute;c nh&agrave; ph&ecirc; b&igrave;nh v&agrave; người đọc. Dựa v&agrave;o ph&aacute;t hiện n&agrave;y, b&agrave;i viết l&agrave;m s&aacute;ng tỏ c&aacute;c điều kiện v&agrave; vấn đề li&ecirc;n quan đến khai s&aacute;ng văn minh tại Nhật Bản hiện đại bằng c&aacute;ch giải m&atilde; những suy nghĩ của Daisuke v&agrave; ph&acirc;n t&iacute;ch quan hệ của nh&acirc;n vật với những người xung quanh</em><em>.</em><br /><br /><strong><em>Từ kh&oacute;a:&nbsp;</em></strong><em>Soseki Natsume, &ldquo;Từ đ&oacute;&rdquo;, Daisuke Nagai, Nhật Bản, khai s&aacute;ng văn minh, hiện đại h&oacute;a, tốt nghiệp đại học hạng ưu, tự do tinh thần, chỉ tr&iacute;ch văn h&oacute;a, vấn đề.</em><br /><br /><em>An examination of the way of thinking and living espoused by Daisuke Nagai, the protagonist of Soseki Natsume&rsquo;s &ldquo;And Then&rdquo;, brings into focus various issues brought about by Japan&rsquo;s cultural enlightenment in the Meiji period, during which the country underwent rapid modernization. Although Daisuke was one of the university-educated elites, he did not seek employment and was content to live off the assets of his father. He rationalized his situation by claiming that working people throughout the world toil their time away, thereby losing the spiritual freedom to think. Daisuke&rsquo;s thoughts turned specifically to his father Toku, his elder brother Seigo, and to such people as his friend Hiraoka. Nevertheless, after Daisuke attempted to steal Hiraoka&rsquo;s wife Michiyo, he was cut off financially by his infuriated father, and found himself in the position of needing to find a job. At that time, it became clear that the cultural criticism that arouse in the novel could only have been conceived from the condescending attitudes of critics and spectators. Based on this revelation, this article attempts to elucidate the conditions and problems associated with cultural enlightenment in modern Japan by deciphering Daisuke&rsquo;s thoughts and analyzing his relationships with those around him.</em><br /><br /><strong><em>Key words:&nbsp;</em></strong><em>Soseki Natsume, &lsquo;And Then&rsquo;, Daisuke Nagai, Japan, cultural enlightenment, modernization, university-educated elite, spiritual freedom, cultural criticism, issues.&rdquo;</em><br /><br />&nbsp;<br /><br /><strong>10.&nbsp;PHAN THỊ KIM NG&Acirc;N, PHẠM THỊ PHƯỢNG &ndash;&nbsp;</strong>T&aacute;c động&nbsp;của định hướng thị trường tới sự h&agrave;i l&ograve;ng của sinh vi&ecirc;n về lựa chọn trường đại học<em>&nbsp;(Ng&ocirc;n ngữ viết: tiếng Anh)</em><br /><br /><em>&ldquo;B&agrave;i nghi&ecirc;n cứu đề cập một kh&iacute;a cạnh của lĩnh vực marketing được thực hiện trong bối cảnh gi&aacute;o dục đại học, đ&oacute; l&agrave; t&aacute;c động của định hướng thị trường tới sự h&agrave;i l&ograve;ng của sinh vi&ecirc;n. Sinh vi&ecirc;n l&agrave; nh&oacute;m kh&aacute;ch h&agrave;ng ch&iacute;nh của c&aacute;c trường đại học v&agrave; nghi&ecirc;n cứu đ&atilde; thực hiện điều tra đối với sinh vi&ecirc;n một trường đại học lớn ở H&agrave; Nội. Kết quả nghi&ecirc;n cứu cho thấy sinh vi&ecirc;n h&agrave;i l&ograve;ng với sự lựa chọn trường đại học của m&igrave;nh, v&agrave; định hướng thị trường của trường đ&atilde; t&aacute;c động tới sự h&agrave;i l&ograve;ng đ&oacute; mặc d&ugrave; sự t&aacute;c động n&agrave;y kh&ocirc;ng chi phối nhiều sự h&agrave;i l&ograve;ng của sinh vi&ecirc;n. Nghi&ecirc;n cứu chỉ ra định hướng thị trường c&oacute; thể gi&uacute;p trường đại học thay đổi c&aacute;c hoạt động để thỏa m&atilde;n nhu cầu v&agrave; mong đợi của sinh vi&ecirc;n, n&acirc;ng cao uy t&iacute;n cho trường.</em><br /><br /><strong><em>Từ kh&oacute;a:</em></strong><em>&nbsp;định hướng thị trường, sự h&agrave;i l&ograve;ng của sinh vi&ecirc;n, m&ocirc; h&igrave;nh MARKO, gi&aacute;o dục đại học.</em><br /><br /><em>The study presents a relevant aspect of marketing approach in the context of tertiary education namely market orientation and its effects on satisfaction of students, who are main customers of higher education institutions. The respondents in the study were students at a big university in Hanoi. The result shows that students were satisfied with their choice of university and the market orientation of university do have some effects on students&rsquo; satisfaction. It is pointed out in the research that market orientation can help universities alter their activities to meets their students&rsquo; needs and expectation, thus, improve their reputation</em><em>.&nbsp;</em><br /><br /><strong><em>Key words:&nbsp;</em></strong><em>market orientation, student satisfaction, MARKO model, tertiary education.&rdquo;</em>&nbsp;</span></span></span></span></span></span></span></span></p>\r\n</div>', 1, '', '2016-08-01 08:50:56', 1, 0, '2016-07-31 18:50:39', '2016-08-04 09:11:31'),
(4, 2, 2, 'Chuẩn bị thành lập Câu lạc bộ khối Y - Dược trực thuộc Hiệp hội', '(GDVN) - Chiều 3/8, Hiệp hội có cuộc trao đổi với Cục Khoa học công nghệ và Đào tạo (Bộ Y tế) về việc chuẩn bị thành lập Câu lạc bộ khối Y - Dược trực thuộc Hiệp hội.', '<div>\r\n<p>Thấy r&otilde;, tr&igrave;nh độ đội ngũ giảng vi&ecirc;n c&aacute;c trường đặc biệt l&agrave; khối trường cao đẳng cần n&acirc;ng cao chất lượng để đ&aacute;p ứng y&ecirc;u cầu cho n&ecirc;n tại cuộc trao đổi với Cục Khoa học c&ocirc;ng nghệ v&agrave; Đ&agrave;o tạo (Bộ Y tế),&nbsp;PGS.TS Trần Xu&acirc;n Nhĩ &ndash; Ph&oacute; Chủ tịch Hiệp hội c&aacute;c trường Đại học, Cao đẳng Việt Nam cho rằng, đ&atilde; đến l&uacute;c c&aacute;c trường đại học, cao đẳng khối y-dược cần tổ chức phối hợp với nhau tạo sự đồng thuận trong việc giải quyết chuy&ecirc;n m&ocirc;n, hoạt động trong c&aacute;c nh&agrave; trường.&nbsp;<br /><br />Cũng theo Ph&oacute; Chủ tịch, hiện nay, c&oacute; 10 trường đại học, 27 trường cao đẳng khối c&aacute;c trường y &ndash; dược đang l&agrave; th&agrave;nh vi&ecirc;n của Hiệp hội. Việc th&agrave;nh lập c&acirc;u lạc bộ sẽ tạo ra sự đồng thuận giữa c&aacute;c trường.&nbsp;</p>\r\n<table class="picture">\r\n<tbody>\r\n<tr>\r\n<td class="pic"><em><a class="fancybox" title="" href="http://img.giaoduc.net.vn/Uploaded/thuylinh/2016_08_03/yduoc.jpg" rel="gallery"><img src="http://img.giaoduc.net.vn/Uploaded/thuylinh/2016_08_03/yduoc.jpg" alt="" /></a></em></td>\r\n</tr>\r\n<tr>\r\n<td class="caption"><em>Chuẩn bị th&agrave;nh lập C&acirc;u lạc bộ khối Y - Dược trực thuộc Hiệp hội</em></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>Tuy nhi&ecirc;n, Ph&oacute; Chủ tịch cũng cho biết th&ecirc;m,&nbsp;nếu trường n&agrave;o chưa trực thuộc Hiệp hội th&igrave; ho&agrave;n to&agrave;n c&oacute; thể l&agrave;m thủ tục để &ldquo;kết nạp&rdquo; v&agrave; hoạt động trong c&acirc;u lạc bộ n&agrave;y.&nbsp;<br /><br />Nh&igrave;n nhận về mục ti&ecirc;u của Hiệp hội, GS.TS Nguyễn C&ocirc;ng Khẩn &ndash; Cục trưởng Cục Khoa học c&ocirc;ng nghệ v&agrave; Đ&agrave;o tạo (Bộ Y tế) cho rằng:</p>\r\n<p>"<em>Việc Hiệp hội c&oacute; &yacute; tưởng th&agrave;nh lập C&acirc;u lạc bộ khối y &ndash; dược (hay c&ograve;n gọi l&agrave; khối khoa học sức khỏe) l&agrave; ho&agrave;n to&agrave;n ph&ugrave; hợp với chủ trương của Bộ Y tế đi đến chuẩn năng lực đ&agrave;o tạo, c&aacute;c trường hỗ trợ lẫn nhau từ giảng vi&ecirc;n đến bệnh viện thực h&agrave;nh để n&acirc;ng cao mặt bằng chất lượng y dược Việt Nam</em>".&nbsp;<br /><br />Tại đ&acirc;y, hai b&ecirc;n đ&atilde; th&agrave;nh lập ban chủ nhiệm l&acirc;m thời từ đ&oacute; triệu tập c&aacute;c trường để thống nhất x&acirc;y dựng điều lệ hoạt động c&acirc;u lạc bộ trong thời gian tới.&nbsp;</p>\r\n</div>', 1, '', '2016-08-04 23:13:59', 1, 0, '2016-08-04 09:13:56', '2016-08-04 16:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

DROP TABLE IF EXISTS `news_category`;
CREATE TABLE IF NOT EXISTS `news_category` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Thông báo', '2016-08-28 17:00:00', '2016-08-28 17:00:00'),
(3, 'Tin đơn vị, sinh viên', '2016-08-28 17:00:00', '2016-08-28 17:00:00'),
(4, 'Thông tin tuyển sinh', '2016-08-28 17:00:00', '2016-08-28 17:04:00'),
(1, 'Bản tin', '2016-08-28 23:11:09', '2016-08-29 11:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `new_messages`
--

DROP TABLE IF EXISTS `new_messages`;
CREATE TABLE IF NOT EXISTS `new_messages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `form` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `new_messages_message_id_index` (`message_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifies`
--

DROP TABLE IF EXISTS `notifies`;
CREATE TABLE IF NOT EXISTS `notifies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` smallint(6) NOT NULL DEFAULT '0',
  `unit_id` int(10) UNSIGNED NOT NULL,
  `create_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifies_unit_id_create_by_index` (`unit_id`,`create_by`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(4, 'course_create', 'Tạo lớp mới', '<div>Tạo lớp mới</div>', '2016-08-04 09:00:11', '2016-08-04 09:00:11'),
(5, 'create_new_blog', 'Viết bài mới', '<div>Viết b&agrave;i mới</div>', '2016-08-04 09:00:55', '2016-08-04 09:00:55'),
(6, 'view_course', 'Xem nội dung bài học', '<div>Xem nội dung b&agrave;i học</div>', '2016-08-04 09:02:44', '2016-08-04 09:02:44'),
(7, 'edit_and_manager_subject ', 'tạo và quản lý môn học', '<div>tạo v&agrave; quản l&yacute; m&ocirc;n học</div>', '2016-08-04 09:04:27', '2016-08-04 09:04:27'),
(8, 'manager_user', 'quản lý thành viên', '<div>th&ecirc;m sửa x&oacute;a th&agrave;nh vi&ecirc;n</div>', '2016-08-04 09:05:26', '2016-08-04 09:05:26'),
(9, 'manager_class', 'quản lý lớp học', '<div>th&ecirc;m sửa x&oacute;a c&aacute;c lớp học</div>', '2016-08-04 09:06:19', '2016-08-04 09:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(4, 5),
(4, 7),
(5, 5),
(5, 7),
(6, 4),
(6, 5),
(6, 7),
(7, 5),
(7, 7),
(8, 5),
(9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `score` tinyint(4) NOT NULL,
  `type` varchar(48) COLLATE utf8_unicode_ci NOT NULL,
  `mini_test_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `question_mini_test_id_index` (`mini_test_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_banks`
--

DROP TABLE IF EXISTS `question_banks`;
CREATE TABLE IF NOT EXISTS `question_banks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `reply1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `question_banks_unit_id_index` (`unit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_banks`
--

INSERT INTO `question_banks` (`id`, `unit_id`, `question`, `reply1`, `reply2`, `reply3`, `reply4`, `answer`, `active`, `created_at`, `updated_at`) VALUES
(5, 6, 'Để dãn khoảng cách giữa các dòng là 1.5 line, cần thực hiện:', 'Format/paragraph/line spacing', 'Nhấn Ctrl + 5 tại dòng đó', 'Cả hai cách A và B đều thực hiện được', 'Cả 2 cách A và B đều không thực hiện được', 'Format/paragraph/line spacing', 1, '2016-08-04 08:16:11', '2016-08-04 08:16:11'),
(6, 6, 'Để lựa chọn toàn bộ một ô trong bảng, bạn sẽ\r\n', 'Nhấn đúp chuột vào ô đó', 'Bôi đen văn bản đang có trong ô đó', 'Nhấn chuột ở vị trí góc trái dưới của ô đó', 'Nhấn chuột ở bên trên ô đó', 'Bôi đen văn bản đang có trong ô đó', 1, '2016-08-04 08:16:43', '2016-08-04 08:16:43'),
(7, 6, 'Để tô màu nền cho một ô trong bảng cần thực hiện chọn ô này và thực hiện tiếp việc chọn màu từ:', 'Fortmat / Background', 'Format / Border and Sharding', 'Table / Background', 'Table/ Border and Sharding', 'Format / Border and Sharding', 1, '2016-08-04 08:17:27', '2016-08-04 08:17:27'),
(8, 6, 'Để xem nhanh một tài liệu trước khi in cần thực hiện:', 'Nhấn chuột vào nút Print Preview trên thanh công cụ Standard', 'Nhấn tổ hợp phím Ctrl+P', 'Nhấn chuột vào biểu tượng máy in trên thanh công cụ Standard', 'Cả ba cách trên đều cho ra cùng một kết quả', 'Nhấn chuột vào nút Print Preview trên thanh công cụ Standard', 1, '2016-08-04 08:17:55', '2016-08-04 08:17:55'),
(9, 6, 'Khẳng định nào sau đây là đúng:', 'Có thể áp dụng chữ hoa đầu đoạn (Drop Cap) cho tất cả các đoạn trong tài liệu kể cả các đoạn văn bản nằm trong bảng (Table)', 'Chỉ có thể áp dụng chữ hoa đầu đoạn cho đoạn đầu tiên tài liệu', 'Không thể áp dụng chữ hoa đầu đoạn cho các đoạn được định dạng kiểu danh sách liệt kê', 'Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu', 'Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu', 1, '2016-08-04 08:18:39', '2016-08-04 08:18:39'),
(10, 6, 'Khẳng định nào sau đây là đúng?', 'Công cụ kiểm tra lỗi chính tả và ngữ pháp của Word cho phép kiểm tra lỗi chính tả và ngữ pháp trong tài liệu của bạn bằng mọi thứ tiếng, ngoại trừ tiếng Việt.', 'Để thiết lập chế độ kiểm tra chính tả và ngữ pháp, cần đánh dấu vào lựa chọn AutoCorrect trong thực đơn lệnh Tools.', 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.', 'Tất cả các khẳng định trên đều chưa hợp lý.', 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.', 1, '2016-08-04 08:19:20', '2016-08-04 08:19:20'),
(11, 6, 'Khẳng định nào sau đây là sai? Dữ liệu trộn thư (ví dụ, danh sách khách mời) có thể được lưu trữ trong:', 'Tệp tin Word (có phần mở rộng là .doc)', 'Tệp tin văn bản (có phần mở rộng là .txt)', 'Tệp tin Excel (có phần mở rộng là .xls)', 'Tệp tin thực thi (có phần mở rộng .exe)', 'Tệp tin văn bản (có phần mở rộng là .txt)', 1, '2016-08-04 08:22:04', '2016-08-04 08:22:04'),
(14, 6, '<div>Để bảo vệ một sheet bằng password, ta phải v&agrave;o :</div>', 'File chọn Protection chọn Protect Sheet', 'Tools chọn Protection chọn Protect Sheet', 'Edit chọn Protection chọn Protect Sheet', 'Data chọn Protection chọn Protect Sheet', 'Edit chọn Protection chọn Protect Sheet', 1, '2016-08-04 08:32:16', '2016-08-04 08:32:16'),
(15, 6, '<div>Địa chỉ B$3 l&agrave; địa chỉ</div>', 'Tương đối', 'Tuyệt đối', 'Hỗn hợp', 'Biểu diễn sai', 'Tuyệt đối', 1, '2016-08-04 08:32:45', '2016-08-04 08:32:45'),
(16, 6, '<div>Để định dạng dữ liệu tại cột Điểm TB HK1 l&agrave; kiểu số c&oacute; một chữ số ở phần thập ph&acirc;n, ta chọn cột dữ liệu, nhắp chuột v&agrave;o thực đơn lệnh Format, chọn:</div>\r\n<div><img class="" src="../../filemanager/userfiles/excel_31.1.jpg" alt="" width="707" height="423" /></div>', 'Cells', 'Column', 'AutoFormat', 'Conditional Formatting ', 'Column', 1, '2016-08-04 08:33:49', '2016-08-04 08:33:49'),
(17, 6, '<div>Để đ&oacute;ng (tắt) một sổ bảng t&iacute;nh (workbook) đang mở m&agrave; kh&ocirc;ng đ&oacute;ng chương tr&igrave;nh MS Excel, bạn sử dụng c&aacute;ch n&agrave;o trong số c&aacute;c c&aacute;ch dưới đ&acirc;y?</div>', 'Vào thực đơn lệnh File, chọn lệnh Close', 'Vào thực đơn lệnh File, chọn lệnh Exit', 'Vào thực đơn lệnh File, chọn lệnh Quit', 'Nhấn chuột vào biểu tượng đóng (x) ở góc phải trên cùng của cửa sổ.', 'Vào thực đơn lệnh File, chọn lệnh Exit', 1, '2016-08-04 08:34:40', '2016-08-04 08:34:40'),
(18, 6, '<div>Để đếm số SV xếp loại Đạt v&agrave; Kh&ocirc;ng đạt như h&igrave;nh minh họa, tại &ocirc; D9, ta sử dụng h&agrave;m:</div>\r\n<div><img class="" src="../../filemanager/userfiles/excel_31.1.jpg" alt="" width="707" height="423" /></div>', 'SUMIF', 'COUNTIF', 'COUNT', 'VLOOKUP ', 'COUNTIF', 1, '2016-08-04 08:35:38', '2016-08-04 08:35:38'),
(19, 6, '<div>Để biểu diễn số liệu dạng phần trăm, sử dụng biểu đồ kiểu n&agrave;o dưới đ&acirc;y l&agrave; hợp l&yacute; nhất:</div>', 'Biểu đồ cột đứng (Column)', 'Biểu đồ phân tán XY (XY Scatter)', 'Biểu đồ đường gấp khúc (Line)', 'Biểu đồ dạng quạt tròn (Pie)', 'Biểu đồ phân tán XY (XY Scatter)', 1, '2016-08-04 08:37:35', '2016-08-04 08:37:35'),
(20, 6, '<div>Để chọn to&agrave;n bộ c&aacute;c &ocirc; tr&ecirc;n bảng t&iacute;nh bằng tổ họp ph&iacute;m bạn chọn:</div>', 'Nhấn tổ hợp phím Ctrl + A', 'Nhấn tổ hợp phím Ctrl + All', 'Nhấn tổ hợp phím Ctrl + Alt +Space', 'Cả hai cách thứ nhất và thứ 3 đều được', 'Nhấn tổ hợp phím Ctrl + All', 1, '2016-08-04 08:38:42', '2016-08-04 08:38:42'),
(21, 6, '<div>Để che giấu hay hiển thị c&aacute;c thanh c&ocirc;ng cụ, bạn chọn mục n&agrave;o trong số c&aacute;c mục sau:</div>', 'Vào thực đơn lệnh File, chọn lệnh Page Setup', 'Vào thực đơn lệnh View, chọn lệnh Toolbars', 'Vào thực đơn lệnh Insert, chọn lệnh Object', 'Vào thực đơn lệnh Tools, chọn lệnh Options', 'Vào thực đơn lệnh View, chọn lệnh Toolbars', 1, '2016-08-04 08:39:14', '2016-08-04 08:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `reply_test`
--

DROP TABLE IF EXISTS `reply_test`;
CREATE TABLE IF NOT EXISTS `reply_test` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_test_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reply_test_user_test_id_question_id_index` (`user_test_id`,`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(4, 'student', 'Sinh viên', '<div>Sinh vi&ecirc;n</div>', '2016-08-01 07:55:32', '2016-08-04 08:40:41'),
(6, 'administrator', 'Quản trị viên', '<div>Quản trị vi&ecirc;n</div>', '2016-08-04 08:41:34', '2016-08-04 08:41:34'),
(5, 'manager', 'Quản lý hệ thống', '<div>Quản l&yacute; hệ thống</div>', NULL, '2016-08-04 08:40:28'),
(7, 'teacher', 'Giáo viên', '<div>Gi&aacute;o vi&ecirc;n</div>', '2016-08-04 08:42:32', '2016-08-04 08:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(2, 4),
(3, 4),
(4, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(16, 5),
(16, 7);

-- --------------------------------------------------------

--
-- Table structure for table `section_tests`
--

DROP TABLE IF EXISTS `section_tests`;
CREATE TABLE IF NOT EXISTS `section_tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `section_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `work_time` int(11) NOT NULL,
  `score` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `section_tests_user_id_section_id_index` (`user_id`,`section_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sequence`
--

DROP TABLE IF EXISTS `sequence`;
CREATE TABLE IF NOT EXISTS `sequence` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sequence_question_id_index` (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide_videos`
--

DROP TABLE IF EXISTS `slide_videos`;
CREATE TABLE IF NOT EXISTS `slide_videos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `unit_id` int(11) NOT NULL,
  `create_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide_videos`
--

INSERT INTO `slide_videos` (`id`, `name`, `description`, `url`, `unit_id`, `create_by`, `created_at`, `updated_at`) VALUES
(1, 'bai 1', 'bai hocj dau tien', 'kcyYhl9wpmU', 6, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `attention` text COLLATE utf8_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `image`, `description`, `attention`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Tư tưởng Hồ Chí Minh', 'image/subject/57aa18c5a9eb8bac-ho-dang-cam-quyen.jpg', 'Tư tưởng HCM là một hệ thống quan điểm toàn diện và sâu sắc về những vấn đề cơ bản của CMVN, từ cách mạng dân tộc dân chủ nhân dân đến CMXHCN, là kết quả của sự vận dụng sáng tạo và  phát triển chủ nghĩa Mác- Lênin vào điều kiện cụ thể nước ta, đồng thời là sự kết tinh tinh hoa dân tộc và trí tuệ thời đại nhằm giải phóng dân tộc, giải phóng giai cấp và giải phóng con người', '<ul class="section img-text">', 1, '2016-07-30 19:59:46', '2016-08-09 17:54:13'),
(9, 'Xác suất thống kê', 'image/subject/57aa18acc69b9study-probability-with-two-dice-and-a-spreadsheet-270x283.jpg', 'xác suất là ngành toán học chuyên nghiên cứu xác suất. Các nhà toán học coi xác suất là các số trong khoảng [0,1], được gán tương ứng với một biến cố mà khả năng xảy ra hoặc không xảy ra là ngẫu nhiên. Kí hiệu xác suất P(E) được gán cho biến cố E theo tiên đề xác suất.', '<ul class="section img-text">', 1, '2016-08-04 07:31:49', '2016-08-09 17:53:48'),
(4, 'Toán cao cấp 2', 'image/subject/57aa18bd678a5phuong-phap-hoc-tot-mon-toan0.jpg', 'Môn toán cao cấp B2 cung cấp các kiến thức cơ bản về Đại số tuyến tính, phép tính Vi tích phân của hàm hai biến và Phương trình vi phân thường.', '<ul class="section img-text">', 1, '2016-07-31 02:18:24', '2016-09-22 10:30:17'),
(5, 'Toán cao cấp 1', 'image/subject/57aa18b549a13maths-problems-marilyn-ftr.jpg', 'môn Toán cao cấp 1 nhằm giúp các bạn củng cố những kiến thức cơ bản của Toán học cao cấp, từ đó giúp các bạn có định hướng học tập và ôn thi môn học một cách hiệu quả.', '<ul class="section img-text">', 1, '2016-07-31 02:28:58', '2016-08-09 17:53:57'),
(10, 'Anh văn 1', 'image/subject/57aa18a3a8ea1Errors-to-Avoid-While-Learning-English.png', 'Anh văn cơ sở do đặc biệt chú trọng vào việc phát triển kỹ năng đọc; những thuật ngữ và từ vựng quan trọng được tách ra thành một mục riêng để thu hút và phát triển vốn từ của học viên; trong mỗi bài có phần bài tập ngữ pháp giúp học viên ôn lai những điểm ngữ pháp cơ bản.', '<ul class="section img-text">', 1, '2016-08-04 07:33:30', '2016-08-09 17:53:39'),
(11, 'Anh văn cơ sở', 'image/subject/57aa18968afb7gia_su_tieng_anh_TPHCM.jpg', 'Anh văn cơ sở do đặc biệt chú trọng vào việc phát triển kỹ năng đọc; những thuật ngữ và từ vựng quan trọng được tách ra thành một mục riêng để thu hút và phát triển vốn từ của học viên; trong mỗi bài có phần bài tập ngữ pháp giúp học viên ôn lai những điểm ngữ pháp cơ bản.', '<ul class="section img-text">', 1, '2016-08-04 07:34:06', '2016-08-09 17:53:26'),
(12, 'Đường lối cách mạng của Đảng CSVN', 'image/subject/57aa188d58aaftranhcodong_giaoduc_so1.jpg', 'a) Trang bị cho sinh viên những hiểu biết cơ bản về đường lối của Đảng trong thời kỳ cách mạng dân tộc, dân chủ nhân dân và trong thời kỳ xây dựng chủ nghĩa xã hội.\r\nb) Bồi dưỡng cho sinh viên niềm tin vào sự lãnh đạo của Đảng theo mục tiêu, lý tưởng của Đảng, nâng cao ý thức trách nhiệm của sinh viên trước những nhiệm vụ trọng đại của đất nước.\r\nc) Giúp sinh viên vận dụng kiến thức chuyên ngành để chủ động, tích cực trong giải quyết những vấn đề kinh tế, chính trị, văn hoá, xã hội theo đường lối, chính sách của Đảng.', '<ul class="section img-text">', 1, '2016-08-04 07:34:52', '2016-08-09 17:53:17'),
(13, 'Hoá đại cương', 'image/subject/57aa187e199a3himiya-6.jpg', 'Hóa học là một trong những lĩnh vực khoa học tự nhiên nghiên cứu về thế giới vật chất và sự vận động của nó, nhằm tìm ra các quy luật vận động để vận dụng vào cuộc sống. Sự vận động hóa học của vật chất đó là quá trình biến đổi chất này thành chất khác. Ví dụ như sự oxi hóa kim loại bởi oxi của không khí, sự phân hủy các chất hữu cơ bởi các vi khuẩn, sự quang hợp biến khí cacbonic và hơi nước thành các hợp chất gluxit, sự đốt cháy nhiên liệu tạo ra năng lượng dùng trong đời sống và sản xuất. Những sự chuyển hóa các chất như trên gọi là hiện tượng hóa học hay phản ứng hóa học. Các phản ứng hóa học xảy ra thường kèm theo sự biến đổi năng lượng dưới các dạng khác nhau (nhiệt, điện, quang, cơ, .) được gọi là những hiện tượng kèm theo phản ứng hóa học. Khả năng phản ứng hóa học của các chất phụ thuộc vào thành phần, cấu tạo phân tử và trạng thái tồn tại của chúng, điều kiện thực hiện phản ứng, đó là tính chất hóa học của các chất. ', '<ul class="section img-text">', 1, '2016-08-04 07:35:22', '2016-08-09 17:53:02'),
(14, 'Những nguyên lý cơ bản của CN Mác-Lênin', 'image/subject/57aa186e86ef1c.mac-ang.jpg', 'Môn học Những nguyên lý cơ bản của chủ nghĩa Mác-Lênin nhằm\r\ngiúp cho sinh viên:\r\n- Xác lập cơ sở lý luận cơ bản nhất để từ đó có thể tiếp cận được nội\r\ndung môn học Tư tưởng Hồ Chí Minh và Đường lối cách mạng của Đảng\r\nCộng sản Việt Nam, hiểu biết nền tảng tư tưởng của Đảng;\r\n- Xây dựng niềm tin, lý tưởng cách mạng cho sinh viên;\r\n- Từng bước xác lập thế giới quan, nhân sinh quan và phương pháp\r\nluận chung nhất để tiếp cận các khoa học chuyên ngành được đào tạo.', '<ul class="section img-text">', 1, '2016-08-04 07:36:11', '2016-08-09 17:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `subject_questions`
--

DROP TABLE IF EXISTS `subject_questions`;
CREATE TABLE IF NOT EXISTS `subject_questions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `reply1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_questions_subject_id_index` (`subject_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_tests`
--

DROP TABLE IF EXISTS `subject_tests`;
CREATE TABLE IF NOT EXISTS `subject_tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `reply1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_tests_subject_id_index` (`subject_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_test_details`
--

DROP TABLE IF EXISTS `subject_test_details`;
CREATE TABLE IF NOT EXISTS `subject_test_details` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject_test_id` int(10) UNSIGNED NOT NULL,
  `subject_question_id` int(10) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject_test_details_subject_test_id_subject_question_id_index` (`subject_test_id`,`subject_question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `number_question` int(10) DEFAULT NULL,
  `scoring` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL DEFAULT '7200',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tests_unit_id_index` (`unit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `unit_id`, `name`, `description`, `active`, `number_question`, `scoring`, `time`, `created_at`, `updated_at`) VALUES
(1, 6, 'Luyện tập trắc nghiệm 1-1', 'Đây là bài luyện tập trắc nghiệm tính điểm chuyên cần. Các anh/chị cần làm bài ít nhất 10 lần để nắm vững kiến thức.', 1, 10, 1, 1200, NULL, '2016-08-31 18:34:56'),
(2, 7, 'Luyện tập trắc nghiệm 2', 'Đây là bài luyện tập trắc nghiệm tính điểm chuyên cần. Các anh/chị cần làm bài ít nhất 10 lần để nắm vững kiến thức.', 1, 10, 1, 1200, NULL, NULL),
(3, 8, 'Luyện tập trắc nghiệm 3', 'Đây là bài luyện tập trắc nghiệm tính điểm chuyên cần. Các anh/chị cần làm bài ít nhất 10 lần để nắm vững kiến thức.', 1, 10, 1, 1200, NULL, NULL),
(4, 6, 'Luyện tập trắc nghiệm 1-2', 'Đây là bài luyện tập trắc nghiệm tính điểm chuyên cần. Các anh/chị cần làm bài ít nhất 10 lần để nắm vững kiến thức.', 1, 10, 1, 1200, NULL, '2016-08-31 18:35:52'),
(15, 6, 'Luyện tập trắc nghiệm 1-3', 'Đây là bài luyện tập trắc nghiệm tính điểm chuyên cần. Các anh/chị cần làm bài ít nhất 10 lần để nắm vững kiến thức.', 1, 10, 1, 1200, '2016-09-16 10:00:17', '2016-09-16 10:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `test_detail`
--

DROP TABLE IF EXISTS `test_detail`;
CREATE TABLE IF NOT EXISTS `test_detail` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `test_id` int(10) UNSIGNED NOT NULL,
  `mini_test_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `test_detail_test_id_mini_test_id_index` (`test_id`,`mini_test_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theories`
--

DROP TABLE IF EXISTS `theories`;
CREATE TABLE IF NOT EXISTS `theories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `position` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `notify` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `theories_unit_id_create_by_index` (`unit_id`,`create_by`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theories`
--

INSERT INTO `theories` (`id`, `unit_id`, `position`, `name`, `intro`, `image`, `content`, `create_by`, `created_at`, `updated_at`, `notify`, `active`, `time`) VALUES
(1, 2, 1, 'ccghjg2', 'cchjghjgh2', '', '<div>222</div>', 0, '2016-07-31 04:40:00', '2016-07-31 05:11:16', 1, 1, 1200000),
(2, 2, 2, '3333', '333', '', '<div>3333</div>', 0, '2016-07-31 05:11:25', '2016-07-31 05:11:25', 1, 1, 1200000),
(3, 2, 3, '4444444', '44444444444444', '', '<div>44444444444</div>', 0, '2016-07-31 05:11:33', '2016-07-31 05:11:33', 1, 1, 1200000),
(5, 6, 1, '1.1 Giới hạn hàm số', 'Giới hạn hữu hạn của hàm số khi x tiến\r\nvề một số hữu hạn', '', '<div><img class="" src="http://localhost/true/public/filemanager/userfiles/image/1.JPG" alt="" width="542" height="562" /></div>\r\n<div><img class="" src="http://localhost/true/public/filemanager/userfiles/image/2.JPG" alt="" width="550" height="583" /></div>\r\n<div><img class="" src="http://localhost/true/public/filemanager/userfiles/image/3.JPG" alt="" width="595" height="574" /></div>\r\n<div><img class="" src="http://localhost/true/public/filemanager/userfiles/image/4.JPG" alt="" width="545" height="573" /></div>\r\n<div><img class="" src="http://localhost/true/public/filemanager/userfiles/image/5.JPG" alt="" width="589" height="570" /></div>', 0, '2016-08-04 08:08:14', '2016-09-23 08:55:25', 1, 1, 1200000),
(6, 6, 2, '1.2 Giới hạn phải, giới hạn trái', 'Giới hạn phải, giới hạn trái', '', '<div><iframe width="640" height="480" src="https://www.youtube.com/embed/BW-vuvSqRyE" frameborder="0" allowfullscreen></iframe></div>', 0, '2016-08-04 08:09:28', '2016-08-18 09:28:43', 1, 1, 1200000),
(7, 6, 3, '1.3 Vô cùng bé (VCB), vô cùng lớn (VCL)', 'Vô cùng bé (VCB), vô cùng lớn (VCL)', '', '<div>&nbsp;<img class="" src="http://localhost/true/public/filemanager/userfiles/1.PNG" alt="" width="942" height="950" /></div>', 0, '2016-08-04 08:09:47', '2016-09-23 08:42:16', 1, 1, 1200000),
(8, 6, 4, '1.4 Hàm số liên tục', 'Hàm số liên tục', '', '<div>&nbsp;</div>\r\n<div><iframe src="https://www.youtube.com/embed/UGQ_PQ5Td2I" width="640" height="360" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>', 0, '2016-08-04 08:10:12', '2016-08-18 09:32:09', 1, 1, 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `theory_questions`
--

DROP TABLE IF EXISTS `theory_questions`;
CREATE TABLE IF NOT EXISTS `theory_questions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `theory_id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `reply1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `theory_questions_theory_id_index` (`theory_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theory_tests`
--

DROP TABLE IF EXISTS `theory_tests`;
CREATE TABLE IF NOT EXISTS `theory_tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `theory_test_id` int(10) UNSIGNED NOT NULL,
  `theory_question_id` int(10) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `theory_tests_theory_test_id_theory_question_id_index` (`theory_test_id`,`theory_question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theory_test_details`
--

DROP TABLE IF EXISTS `theory_test_details`;
CREATE TABLE IF NOT EXISTS `theory_test_details` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `theory_test_id` int(10) UNSIGNED NOT NULL,
  `theory_question_id` int(10) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `theory_test_details_theory_test_id_theory_question_id_index` (`theory_test_id`,`theory_question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `true_false`
--

DROP TABLE IF EXISTS `true_false`;
CREATE TABLE IF NOT EXISTS `true_false` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `true_false_question_id_index` (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_in`
--

DROP TABLE IF EXISTS `type_in`;
CREATE TABLE IF NOT EXISTS `type_in` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type_in_question_id_index` (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `units_subject_id_index` (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `subject_id`, `position`, `name`, `image`, `description`, `active`, `created_at`, `updated_at`) VALUES
(7, 5, 2, '2 PHÉP TÍNH VI PHÂN HÀM MỘT BIẾN', 'image/subject/57a356f97ea25hqdefault (1).jpg', 'PHÉP TÍNH VI PHÂN HÀM MỘT BIẾN', 1, '2016-08-04 07:53:45', '2016-08-04 07:53:45'),
(6, 5, 1, '1 GIỚI HẠN HÀM SỐ. HÀM SỐ LIÊN TỤC', 'image/subject/57a3564bca18dXuctu.com_GioiHan-LienTuc-Dao-Ham.PNG', 'Giới hạn hữu hạn của hàm số khi x tiến\r\nvề một số hữu hạn) Cho hàm số y = f(x) xác định trong tập D.\r\nGiá trị L được gọi là giới hạn của hàm số f(x) tại điểm a, ký hiệu\r\nlimx→a\r\nf (x) = L, nếu với mọi ϵ > 0 cho trước nhỏ tùy ý, tồn tại δ > 0 sao\r\ncho |f(x) − L| < ϵ với mọi x ∈ D thỏa điều kiện |x − a| < δ.', 1, '2016-08-03 18:56:35', '2016-08-04 07:50:51'),
(8, 5, 3, '3 TÍCH PHÂN ', 'image/subject/57a3573a67bd1Integral_example.svg.png', 'TÍCH PHÂN ', 1, '2016-08-04 07:54:50', '2016-08-04 07:54:50'),
(9, 5, 4, '4 Ma trận và định thức', 'image/subject/57a357832c789300px-Determinant_example.svg.png', 'Ma trận và định thức', 1, '2016-08-04 07:56:03', '2016-08-04 07:56:03'),
(10, 5, 5, '5 Hệ phương trình tuyến tính', 'image/subject/57a357c98156d300px-Quadratic_equation_coefficients.png', 'Hệ phương trình tuyến tính', 1, '2016-08-04 07:57:13', '2016-08-04 07:57:13'),
(11, 5, 6, '6 Không gian vector', 'image/subject/57a357e676bc7442416-539_1421408846.jpg', 'Không gian vector', 1, '2016-08-04 07:57:42', '2016-08-04 07:57:42'),
(16, 14, 0, 'value', 'image/subject/57a3573a67bd1Integral_example.svg.png', 'con ', 1, '2016-10-06 07:54:13', '2016-10-13 06:44:31'),
(15, 14, 0, 'bai 1', 'image/subject/57a3573a67bd1Integral_example.svg.png', 'con ', 1, '2016-10-06 06:32:15', '2016-10-06 09:40:07'),
(17, 14, 0, 'bai 1', 'image/subject/57a3573a67bd1Integral_example.svg.png', 'con ', 1, '2016-10-06 08:37:31', '2016-10-07 02:12:30'),
(18, 14, 0, 'sdasd', 'image/subject/57a3573a67bd1Integral_example.svg.png', 'con asdasd', 1, '2016-10-06 08:39:07', '2016-10-07 02:12:46'),
(19, 14, 0, 'wdsads', 'image/subject/57a3573a67bd1Integral_example.svg.png', 'sdsdsd', 0, '2016-10-07 01:57:26', '2016-10-07 01:57:26'),
(20, 14, 0, 'dsdasd', 'image/subject/57a3573a67bd1Integral_example.svg.png', 'sdsd', 0, '2016-10-07 01:57:44', '2016-10-07 02:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `unit_meeting`
--

DROP TABLE IF EXISTS `unit_meeting`;
CREATE TABLE IF NOT EXISTS `unit_meeting` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `unit_id` int(11) NOT NULL,
  `meeting_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unit_meeting`
--

INSERT INTO `unit_meeting` (`id`, `unit_id`, `meeting_id`, `created_at`, `updated_at`) VALUES
(1, 6, 1000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit_questions`
--

DROP TABLE IF EXISTS `unit_questions`;
CREATE TABLE IF NOT EXISTS `unit_questions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `reply1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `unit_questions_unit_id_index` (`unit_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_tests`
--

DROP TABLE IF EXISTS `unit_tests`;
CREATE TABLE IF NOT EXISTS `unit_tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `work_time` int(11) NOT NULL,
  `score` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `unit_testscol` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `unit_tests_user_id_unit_id_index` (`user_id`,`unit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unit_tests`
--

INSERT INTO `unit_tests` (`id`, `unit_id`, `user_id`, `name`, `start_time`, `work_time`, `score`, `created_at`, `updated_at`, `status`, `unit_testscol`) VALUES
(17, 9, 2, 'bài 1', '2016-08-17 16:37:34', 1200, 6, '2016-08-17 09:37:34', '2016-08-17 09:37:57', 1, NULL),
(16, 8, 2, 'bài 1', '2016-08-17 16:26:33', 1200, 6, '2016-08-17 09:26:33', '2016-08-17 09:26:57', 1, NULL),
(15, 7, 2, 'bài 1', '2016-08-17 16:04:12', 1200, 2, '2016-08-17 09:04:12', '2016-08-17 09:04:24', 1, NULL),
(20, 0, 2, NULL, '2016-08-31 09:52:04', 1200, 0, '2016-08-31 02:52:04', '2016-08-31 02:52:04', 1, NULL),
(19, 0, 2, NULL, '2016-08-31 09:36:20', 1200, 0, '2016-08-31 02:36:20', '2016-08-31 02:36:20', 1, NULL),
(21, 0, 2, NULL, '2016-08-31 09:52:41', 1200, 0, '2016-08-31 02:52:41', '2016-08-31 02:52:41', 1, NULL),
(22, 0, 2, NULL, '2016-08-31 09:52:53', 1200, 0, '2016-08-31 02:52:53', '2016-08-31 02:52:53', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `unit_test_details`
--

DROP TABLE IF EXISTS `unit_test_details`;
CREATE TABLE IF NOT EXISTS `unit_test_details` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `unit_test_id` int(10) UNSIGNED NOT NULL,
  `question_bank_id` int(10) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `unit_test_details_unit_test_id_question_bank_id_index` (`unit_test_id`,`question_bank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=363 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unit_test_details`
--

INSERT INTO `unit_test_details` (`id`, `unit_test_id`, `question_bank_id`, `answer`, `reply`, `created_at`, `updated_at`) VALUES
(360, 48, 14, 'Edit chọn Protection chọn Protect Sheet', '', '2016-10-11 17:43:34', '2016-10-11 17:43:34'),
(361, 48, 15, 'Tuyệt đối', '', '2016-10-11 17:43:34', '2016-10-11 17:43:34'),
(362, 48, 16, 'Column', '', '2016-10-11 17:43:34', '2016-10-11 17:43:34'),
(359, 48, 11, 'Tệp tin văn bản (có phần mở rộng là .txt)', '', '2016-10-11 17:43:34', '2016-10-11 17:43:34'),
(358, 48, 10, 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.', '', '2016-10-11 17:43:34', '2016-10-11 17:43:34'),
(357, 48, 9, 'Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu', '', '2016-10-11 17:43:34', '2016-10-11 17:43:34'),
(356, 48, 8, 'Nhấn chuột vào nút Print Preview trên thanh công cụ Standard', '', '2016-10-11 17:43:34', '2016-10-11 17:43:34'),
(355, 48, 7, 'Format / Border and Sharding', '', '2016-10-11 17:43:34', '2016-10-11 17:43:34'),
(354, 48, 6, 'Bôi đen văn bản đang có trong ô đó', '', '2016-10-11 17:43:34', '2016-10-11 17:43:34'),
(353, 48, 5, 'Format/paragraph/line spacing', '', '2016-10-11 17:43:34', '2016-10-11 17:43:34'),
(350, 47, 14, 'Edit chọn Protection chọn Protect Sheet', 'Data chọn Protection chọn Protect Sheet', '2016-10-11 16:29:05', '2016-10-11 16:39:48'),
(351, 47, 15, 'Tuyệt đối', '', '2016-10-11 16:29:05', '2016-10-11 16:29:05'),
(352, 47, 16, 'Column', '', '2016-10-11 16:29:05', '2016-10-11 16:29:05'),
(349, 47, 11, 'Tệp tin văn bản (có phần mở rộng là .txt)', '', '2016-10-11 16:29:05', '2016-10-11 16:29:05'),
(348, 47, 10, 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.', '', '2016-10-11 16:29:05', '2016-10-11 16:29:05'),
(347, 47, 9, 'Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu', '', '2016-10-11 16:29:05', '2016-10-11 16:29:05'),
(346, 47, 8, 'Nhấn chuột vào nút Print Preview trên thanh công cụ Standard', '', '2016-10-11 16:29:05', '2016-10-11 16:29:05'),
(345, 47, 7, 'Format / Border and Sharding', '', '2016-10-11 16:29:05', '2016-10-11 16:29:05'),
(344, 47, 6, 'Bôi đen văn bản đang có trong ô đó', 'Nhấn đúp chuột vào ô đó', '2016-10-11 16:29:05', '2016-10-11 16:31:15'),
(343, 47, 5, 'Format/paragraph/line spacing', 'Cả 2 cách A và B đều không thực hiện được', '2016-10-11 16:29:05', '2016-10-11 16:31:14'),
(340, 46, 11, 'Tệp tin văn bản (có phần mở rộng là .txt)', 'Tệp tin văn bản (có phần mở rộng là .txt)', '2016-09-21 07:48:46', '2016-09-21 08:08:10'),
(336, 46, 7, 'Format / Border and Sharding', 'Format / Border and Sharding', '2016-09-21 07:48:46', '2016-09-22 09:18:58'),
(337, 46, 8, 'Nhấn chuột vào nút Print Preview trên thanh công cụ Standard', 'Nhấn tổ hợp phím Ctrl+P', '2016-09-21 07:48:46', '2016-09-22 09:18:59'),
(338, 46, 9, 'Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu', 'Chỉ có thể áp dụng chữ hoa đầu đoạn cho đoạn đầu tiên tài liệu', '2016-09-21 07:48:46', '2016-09-22 09:19:00'),
(333, 46, 12, 'đâsd', 'đâsd', '2016-09-21 07:48:46', '2016-09-22 09:19:07'),
(332, 45, 15, 'Tuyệt đối', 'Tuyệt đối', '2016-09-21 07:16:47', '2016-09-21 07:44:45'),
(330, 45, 11, 'Tệp tin văn bản (có phần mở rộng là .txt)', '', '2016-09-21 07:16:47', '2016-09-21 07:16:47'),
(342, 46, 15, 'Tuyệt đối', 'Tương đối', '2016-09-21 07:48:46', '2016-09-22 09:19:11'),
(341, 46, 14, 'Edit chọn Protection chọn Protect Sheet', 'Edit chọn Protection chọn Protect Sheet', '2016-09-21 07:48:46', '2016-09-22 09:19:08'),
(339, 46, 10, 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.', 'Để thiết lập chế độ kiểm tra chính tả và ngữ pháp, cần đánh dấu vào lựa chọn AutoCorrect trong thực đơn lệnh Tools.', '2016-09-21 07:48:46', '2016-09-22 09:19:02'),
(334, 46, 5, 'Format/paragraph/line spacing', 'Nhấn Ctrl + 5 tại dòng đó', '2016-09-21 07:48:46', '2016-09-21 07:48:51'),
(335, 46, 6, 'Bôi đen văn bản đang có trong ô đó', 'Nhấn chuột ở vị trí góc trái dưới của ô đó', '2016-09-21 07:48:46', '2016-09-21 07:48:52'),
(331, 45, 14, 'Edit chọn Protection chọn Protect Sheet', '', '2016-09-21 07:16:47', '2016-09-21 07:16:47'),
(329, 45, 10, 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.', 'Để thiết lập chế độ kiểm tra chính tả và ngữ pháp, cần đánh dấu vào lựa chọn AutoCorrect trong thực đơn lệnh Tools.', '2016-09-21 07:16:47', '2016-09-21 07:41:40'),
(328, 45, 9, 'Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu', 'Chỉ có thể áp dụng chữ hoa đầu đoạn cho đoạn đầu tiên tài liệu', '2016-09-21 07:16:47', '2016-09-21 07:41:26'),
(326, 45, 7, 'Format / Border and Sharding', '', '2016-09-21 07:16:47', '2016-09-21 07:16:47'),
(327, 45, 8, 'Nhấn chuột vào nút Print Preview trên thanh công cụ Standard', '', '2016-09-21 07:16:47', '2016-09-21 07:16:47'),
(313, 44, 12, 'đâsd', '', '2016-09-21 06:58:01', '2016-09-21 06:58:01'),
(314, 44, 5, 'Format/paragraph/line spacing', '', '2016-09-21 06:58:01', '2016-09-21 06:58:01'),
(315, 44, 6, 'Bôi đen văn bản đang có trong ô đó', '', '2016-09-21 06:58:01', '2016-09-21 06:58:01'),
(316, 44, 7, 'Format / Border and Sharding', '', '2016-09-21 06:58:01', '2016-09-21 06:58:01'),
(317, 44, 8, 'Nhấn chuột vào nút Print Preview trên thanh công cụ Standard', '', '2016-09-21 06:58:01', '2016-09-21 06:58:01'),
(318, 44, 9, 'Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu', '', '2016-09-21 06:58:01', '2016-09-21 06:58:01'),
(319, 44, 10, 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.', '', '2016-09-21 06:58:01', '2016-09-21 06:58:01'),
(320, 44, 11, 'Tệp tin văn bản (có phần mở rộng là .txt)', '', '2016-09-21 06:58:01', '2016-09-21 06:58:01'),
(321, 44, 14, 'Edit chọn Protection chọn Protect Sheet', '', '2016-09-21 06:58:01', '2016-09-21 06:58:01'),
(322, 44, 15, 'Tuyệt đối', '', '2016-09-21 06:58:01', '2016-09-21 06:58:01'),
(323, 45, 12, 'đâsd', '', '2016-09-21 07:16:47', '2016-09-21 07:16:47'),
(324, 45, 5, 'Format/paragraph/line spacing', '', '2016-09-21 07:16:47', '2016-09-21 07:16:47'),
(325, 45, 6, 'Bôi đen văn bản đang có trong ô đó', '', '2016-09-21 07:16:47', '2016-09-21 07:16:47'),
(311, 43, 14, 'Edit chọn Protection chọn Protect Sheet', 'Tools chọn Protection chọn Protect Sheet', '2016-09-20 06:44:20', '2016-09-20 09:05:17'),
(312, 43, 15, 'Tuyệt đối', 'Hỗn hợp', '2016-09-20 06:44:20', '2016-09-20 09:30:19'),
(303, 43, 12, 'đâsd', 'ádas', '2016-09-20 06:44:20', '2016-09-20 07:05:27'),
(304, 43, 5, 'Format/paragraph/line spacing', 'Cả hai cách A và B đều thực hiện được', '2016-09-20 06:44:20', '2016-09-20 10:27:49'),
(305, 43, 6, 'Bôi đen văn bản đang có trong ô đó', 'Bôi đen văn bản đang có trong ô đó', '2016-09-20 06:44:20', '2016-09-20 07:04:30'),
(306, 43, 7, 'Format / Border and Sharding', 'Format / Border and Sharding', '2016-09-20 06:44:20', '2016-09-20 07:04:37'),
(307, 43, 8, 'Nhấn chuột vào nút Print Preview trên thanh công cụ Standard', 'Nhấn tổ hợp phím Ctrl+P', '2016-09-20 06:44:20', '2016-09-20 07:08:16'),
(308, 43, 9, 'Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu', 'Không thể áp dụng chữ hoa đầu đoạn cho các đoạn được định dạng kiểu danh sách liệt kê', '2016-09-20 06:44:20', '2016-09-20 07:05:19'),
(309, 43, 10, 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.', 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.', '2016-09-20 06:44:20', '2016-09-20 07:05:23'),
(310, 43, 11, 'Tệp tin văn bản (có phần mở rộng là .txt)', 'Tệp tin văn bản (có phần mở rộng là .txt)', '2016-09-20 06:44:20', '2016-09-20 07:05:24'),
(293, 42, 12, 'đâsd', 'ádas', '2016-08-31 09:17:22', '2016-08-31 09:17:38'),
(294, 42, 5, 'Format/paragraph/line spacing', 'Nhấn Ctrl + 5 tại dòng đó', '2016-08-31 09:17:22', '2016-08-31 09:17:39'),
(295, 42, 6, 'Bôi đen văn bản đang có trong ô đó', 'Bôi đen văn bản đang có trong ô đó', '2016-08-31 09:17:22', '2016-08-31 09:17:42'),
(296, 42, 7, 'Format / Border and Sharding', 'Format / Border and Sharding', '2016-08-31 09:17:22', '2016-08-31 09:17:42'),
(297, 42, 8, 'Nhấn chuột vào nút Print Preview trên thanh công cụ Standard', 'Nhấn tổ hợp phím Ctrl+P', '2016-08-31 09:17:22', '2016-08-31 09:17:44'),
(298, 42, 9, 'Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu', 'Chỉ có thể áp dụng chữ hoa đầu đoạn cho đoạn đầu tiên tài liệu', '2016-08-31 09:17:22', '2016-08-31 09:17:45'),
(299, 42, 10, 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.', 'Để thiết lập chế độ kiểm tra chính tả và ngữ pháp, cần đánh dấu vào lựa chọn AutoCorrect trong thực đơn lệnh Tools.', '2016-08-31 09:17:22', '2016-08-31 09:17:48'),
(300, 42, 11, 'Tệp tin văn bản (có phần mở rộng là .txt)', 'Tệp tin văn bản (có phần mở rộng là .txt)', '2016-08-31 09:17:22', '2016-08-31 09:17:48'),
(301, 42, 14, 'Edit chọn Protection chọn Protect Sheet', 'Tools chọn Protection chọn Protect Sheet', '2016-08-31 09:17:22', '2016-08-31 09:17:49'),
(302, 42, 15, 'Tuyệt đối', 'Tuyệt đối', '2016-08-31 09:17:22', '2016-08-31 09:17:51'),
(292, 41, 15, 'Tuyệt đối', 'Tuyệt đối', '2016-08-31 02:55:02', '2016-08-31 09:08:24'),
(290, 41, 11, 'Tệp tin văn bản (có phần mở rộng là .txt)', 'Tệp tin văn bản (có phần mở rộng là .txt)', '2016-08-31 02:55:02', '2016-08-31 09:39:35'),
(291, 41, 14, 'Edit chọn Protection chọn Protect Sheet', 'File chọn Protection chọn Protect Sheet', '2016-08-31 02:55:02', '2016-08-31 09:12:33'),
(289, 41, 10, 'Những từ mầu đỏ đưa ra trong hộp thoại Spelling and Grammar là những từ bị sai hoàn toàn, bắt buộc chúng ta phải sửa.', 'Công cụ kiểm tra lỗi chính tả và ngữ pháp của Word cho phép kiểm tra lỗi chính tả và ngữ pháp trong tài liệu của bạn bằng mọi thứ tiếng, ngoại trừ tiếng Việt.', '2016-08-31 02:55:02', '2016-08-31 09:08:26'),
(283, 41, 12, 'đâsd', 'ádas', '2016-08-31 02:55:02', '2016-08-31 09:39:37'),
(284, 41, 5, 'Format/paragraph/line spacing', 'Nhấn Ctrl + 5 tại dòng đó', '2016-08-31 02:55:02', '2016-09-05 04:05:31'),
(285, 41, 6, 'Bôi đen văn bản đang có trong ô đó', 'Bôi đen văn bản đang có trong ô đó', '2016-08-31 02:55:02', '2016-08-31 09:08:28'),
(286, 41, 7, 'Format / Border and Sharding', 'Format / Border and Sharding', '2016-08-31 02:55:02', '2016-08-31 09:39:31'),
(287, 41, 8, 'Nhấn chuột vào nút Print Preview trên thanh công cụ Standard', 'Nhấn chuột vào biểu tượng máy in trên thanh công cụ Standard', '2016-08-31 02:55:02', '2016-08-31 03:20:28'),
(288, 41, 9, 'Không thể áp dụng chữ hoa đầu đoạn cho nhiều đoạn trong cùng một trang tài liệu', 'Chỉ có thể áp dụng chữ hoa đầu đoạn cho đoạn đầu tiên tài liệu', '2016-08-31 02:55:02', '2016-08-31 09:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manager` tinyint(1) NOT NULL DEFAULT '1',
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_number_unique` (`phone_number`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `code`, `email`, `phone_number`, `sex`, `password`, `birthday`, `address`, `image`, `remember_token`, `manager`, `active`, `created_at`, `updated_at`) VALUES
(3, 'phan văn', 'quang', 'abc', 'dtc345332343@ictu.edu.vn', '1323445359', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', 'nam dinh', 'images/people/no-avatar.jpg', '5Nh0ckF36hMb2BIU9WalWbBthExoNta1O6iaJFBO0UWlHrHREIBXr63uHp3F', 1, 1, '2016-08-02 01:24:15', '2016-10-08 07:55:25'),
(2, 'lê công', 'vinh', 'abc', 'hocsinh@gmail.com', '0987656778', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', 'ha noi 1', 'images/people/Le_Cong_Vinh_1985.jpg', 'DsA543wVJHgcGGCjVzuoi8wfZOpW9lVllB2jSGRpbI0dnKzyQYc0vn2P910L', 1, 1, '2016-07-30 20:54:47', '2016-10-14 15:26:01'),
(4, 'hồng', 'sơn', 'abc', 'dtc345332311@ictu.edu.vn', '01665653999', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', 'gggfh', 'images/people/no-avatar.jpg', 'IaTy7eY4ByHgXEI5uHBTaO2BoqHM7TLURj3uw1efMlMzT8rBfHOZVte41OiU', 1, 1, '2016-08-02 19:49:25', '2016-09-16 08:34:55'),
(8, 'nguyễn công ', 'phượng', 'abc', 'dtc2345645576@ictu.edu.vn', '0978875643', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', '', 'images/people/no-avatar.jpg', 'Z8jZiaMaShcI62hmGjTBfOFaA4ioxfgX6HIRGVdjjTHNlpLbAN5RCOxxOZY6', 1, 1, '2016-08-04 09:26:08', '2016-08-09 04:23:59'),
(9, 'nguyễn tuấn', 'anh', 'abc', 'hocsinh1@gmail.com', '0956647583', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', '', 'images/people/no-avatar.jpg', '25KT6rPiPh4FJM8eWAakKHc6NrgSSso4ABoE5oENQOTObblzfykoIWe66t88', 1, 1, '2016-08-04 09:26:48', '2016-09-16 09:05:12'),
(10, 'nguyễn văn', 'quyết', 'abc', 'dtc345333311@ictu.edu.vn', '1665651232', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', 'Nguyễn Trãi, Hà Nội', 'images/people/no-avatar.jpg', NULL, 1, 1, '2016-08-04 09:27:26', '2016-08-08 01:50:54'),
(11, 'nguyễn văn ', 'toàn', 'abc', 'dtc345223211@ictu.edu.vn', '166566543', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', 'Nguyễn Trãi, Hà Nội', 'images/people/no-avatar.jpg', 'RUrUgeUXF6o5nrm09bHv1acqEslWeaVfr15XuDMWpj8vJSzS3vx64W2cmTkC', 1, 1, '2016-08-04 09:28:05', '2016-09-16 08:38:08'),
(12, 'mạc hồng', 'quân', 'abc', 'dtc345332341@ictu.edu.vn', '1665653933', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', 'Nguyễn Trãi, Hà Nội', 'images/people/no-avatar.jpg', 'JslRGka1Ck5Hh8EQCNVro3eiJipInXWVVC8Am3Mc6rvDUqHqtilCBIEPnY65', 1, 1, '2016-08-04 09:28:43', '2016-09-16 08:38:35'),
(13, 'lương xuân', 'trường', 'abc', 'dtc345331231@ictu.edu.vn', '1665655511', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', 'Nguyễn Trãi, Hà Nội', 'images/people/no-avatar.jpg', NULL, 1, 1, '2016-08-04 09:29:21', '2016-08-08 01:50:53'),
(14, 'phạm văn', 'quyến', 'abc', 'dtc3453567811@ictu.edu.vn', '166543456', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', 'Nguyễn Trãi, Hà Nội', 'images/people/no-avatar.jpg', NULL, 1, 1, '2016-08-04 09:29:52', '2016-10-08 02:17:30'),
(15, 'trần phi', 'sơn', 'abc', 'dtc3453445211@ictu.edu.vn', '16656534545', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', 'Nguyễn Trãi, Hà Nội', 'images/people/no-avatar.jpg', NULL, 1, 1, '2016-08-04 09:30:30', '2016-08-08 01:50:56'),
(16, 'đỗ duy ', 'mạnh', 'abc', 'giaovien@gmail.com', '1665656578', 1, '$2y$10$cGxdVIVYi3cIhZnEtLSur.bpOOs.KoeWw1tAjrNbXgwlJ1QenC0Gu', '2016-08-02', 'Nguyễn Trãi, Hà Nội', 'images/people/no-avatar.jpg', 'osZ8cZHLTmOsaE0sEALiyIe7Alt5NX0ISDJcJqChXRnWsRxxSvpm8OXxlUBh', 1, 1, '2016-08-04 09:32:32', '2016-10-14 16:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_test`
--

DROP TABLE IF EXISTS `user_test`;
CREATE TABLE IF NOT EXISTS `user_test` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `work_time` int(10) DEFAULT NULL,
  `score` tinyint(4) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_test_user_id_test_id_index` (`user_id`,`test_id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_test`
--

INSERT INTO `user_test` (`id`, `user_id`, `test_id`, `start_time`, `end_time`, `work_time`, `score`, `status`, `created_at`, `updated_at`) VALUES
(14, 4, 1, NULL, NULL, NULL, 8, NULL, NULL, NULL),
(13, 3, 3, NULL, NULL, NULL, 5, NULL, NULL, NULL),
(12, 3, 2, NULL, NULL, NULL, 7, NULL, NULL, NULL),
(11, 3, 1, NULL, NULL, NULL, 8, NULL, NULL, NULL),
(10, 2, 3, NULL, NULL, NULL, 8, NULL, NULL, NULL),
(9, 2, 2, NULL, NULL, NULL, 7, NULL, NULL, NULL),
(48, 2, 1, '2016-10-12 00:43:34', NULL, 1194, 0, NULL, '2016-10-11 17:43:34', '2016-10-11 17:43:41'),
(15, 4, 2, NULL, NULL, NULL, 7, NULL, NULL, NULL),
(16, 4, 3, NULL, NULL, NULL, 4, NULL, NULL, NULL),
(17, 8, 1, NULL, NULL, NULL, 8, NULL, NULL, NULL),
(18, 8, 2, NULL, NULL, NULL, 6, NULL, NULL, NULL),
(19, 8, 3, NULL, NULL, NULL, 5, NULL, NULL, NULL),
(20, 9, 1, NULL, NULL, NULL, 7, NULL, NULL, NULL),
(21, 9, 2, NULL, NULL, NULL, 8, NULL, NULL, NULL),
(22, 9, 3, NULL, NULL, NULL, 7, NULL, NULL, NULL),
(23, 10, 1, NULL, NULL, NULL, 9, NULL, NULL, NULL),
(24, 10, 2, NULL, NULL, NULL, 6, NULL, NULL, NULL),
(25, 10, 3, NULL, NULL, NULL, 4, NULL, NULL, NULL),
(26, 11, 1, NULL, NULL, NULL, 5, NULL, NULL, NULL),
(27, 11, 2, NULL, NULL, NULL, 7, NULL, NULL, NULL),
(28, 11, 3, NULL, NULL, NULL, 6, NULL, NULL, NULL),
(29, 12, 1, NULL, NULL, NULL, 5, NULL, NULL, NULL),
(30, 12, 2, NULL, NULL, NULL, 8, NULL, NULL, NULL),
(31, 12, 3, NULL, NULL, NULL, 8, NULL, NULL, NULL),
(32, 13, 1, NULL, NULL, NULL, 5, NULL, NULL, NULL),
(33, 13, 2, NULL, NULL, NULL, 3, NULL, NULL, NULL),
(34, 13, 3, NULL, NULL, NULL, 7, NULL, NULL, NULL),
(35, 14, 1, NULL, NULL, NULL, 9, NULL, NULL, NULL),
(36, 14, 2, NULL, NULL, NULL, 8, NULL, NULL, NULL),
(37, 14, 3, NULL, NULL, NULL, 8, NULL, NULL, NULL),
(38, 15, 1, NULL, NULL, NULL, 9, NULL, NULL, NULL),
(39, 15, 2, NULL, NULL, NULL, 5, NULL, NULL, NULL),
(40, 15, 3, NULL, NULL, NULL, 5, NULL, NULL, NULL),
(42, 2, 4, '2016-08-31 16:17:22', NULL, 1200, 4, 1, '2016-08-31 09:17:22', '2016-08-31 09:17:52'),
(46, 2, 15, '2016-09-21 14:48:46', NULL, 1150, 8, 1, '2016-09-21 07:48:46', '2016-09-22 09:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `user_theory`
--

DROP TABLE IF EXISTS `user_theory`;
CREATE TABLE IF NOT EXISTS `user_theory` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `theory_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `watch_time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1028 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_theory`
--

INSERT INTO `user_theory` (`id`, `user_id`, `theory_id`, `start_time`, `watch_time`, `created_at`, `updated_at`) VALUES
(1023, 2, 8, '0000-00-00 00:00:00', 1200000, '2016-08-16 03:57:33', '2016-08-24 09:48:41'),
(1021, 2, 7, '0000-00-00 00:00:00', 120000, '2016-08-15 08:44:24', '2016-08-18 10:20:31'),
(1020, 2, 6, '0000-00-00 00:00:00', 0, '2016-08-15 08:23:31', '2016-10-08 08:01:00'),
(1019, 2, 5, '0000-00-00 00:00:00', 0, '2016-08-13 04:24:55', '2016-10-11 08:39:51'),
(1025, 2, 10, '0000-00-00 00:00:00', 1200000, '2016-09-23 04:35:45', '2016-09-23 04:35:45'),
(1026, 2, 11, '0000-00-00 00:00:00', 1200000, '2016-09-24 03:02:22', '2016-09-24 03:02:22'),
(1027, 3, 6, '0000-00-00 00:00:00', 0, '2016-10-08 07:49:10', '2016-10-08 07:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `word_blank`
--

DROP TABLE IF EXISTS `word_blank`;
CREATE TABLE IF NOT EXISTS `word_blank` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `word_blank_question_id_index` (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
