
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Table structure for table `class_details`
--

CREATE TABLE `class_details` (
  `user_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `year` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `code`, `level`, `user_id`, `year`, `created_at`, `updated_at`) VALUES
(5, '56464', '5654', 5, 6, '2014', '2016-05-05 19:07:58', '2016-05-05 19:07:58'),
(6, 'fds', 'fdsf', 3, 6, '2013', '2016-05-05 19:44:08', '2016-05-05 19:44:08'),
(7, 'ten', 'ma', 1, 6, '2012', '2016-05-07 08:54:20', '2016-05-18 01:40:26'),
(9, 'ten', 'ma', 1, 6, '2013', '2016-05-07 09:01:11', '2016-05-18 01:40:32'),
(10, 'dsad', 'dsa', 1, 6, '2014', '2016-05-07 09:06:34', '2016-05-18 01:40:43'),
(11, 'gdfg', 'gfd', 1, 6, '2014', '2016-05-07 09:10:21', '2016-05-18 01:40:39'),
(12, 'gdgdf', 'C5-2015', 2, 7, '2010', '2016-05-18 03:28:05', '2016-05-18 03:28:05'),
(13, 'fsdfsdf', 'fdsfs', 1, 5, '2016', '2016-05-18 03:29:10', '2016-05-18 03:33:56'),
(14, 'fdsfs', 'fdsfsf', 1, 7, '2016', '2016-05-18 03:32:59', '2016-05-18 03:32:59'),
(15, 'dsada', 'eqeq', 1, 5, '2016', '2016-05-18 03:34:02', '2016-05-18 03:34:02'),
(16, 'fdsf', 'fsfsfs', 1, 5, '2016', '2016-05-18 03:37:49', '2016-05-18 03:37:49'),
(17, 'rewrw', 'rewrw', 1, 8, '2016', '2016-05-18 03:37:55', '2016-05-18 03:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `level`, `created_at`, `updated_at`) VALUES
(2, 'Tiếng Anh Lớp 1', 1, '2016-05-07 11:35:58', '2016-05-18 08:44:11'),
(3, 'Tiếng Anh Lớp 2', 2, '2016-05-07 11:36:07', '2016-05-18 08:44:26'),
(4, 'Tiếng Anh Lớp 3', 3, '2016-05-07 18:31:44', '2016-05-18 08:44:37'),
(5, 'Tiếng Anh Lớp 4', 4, '2016-05-08 03:14:14', '2016-05-18 08:44:56'),
(6, 'Tiếng Anh lớp 5', 5, '2016-05-18 08:45:08', '2016-05-18 08:45:08'),
(9, 'Ngáo', 0, '2016-06-02 07:38:39', '2016-06-02 07:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `created_by`, `published`, `created_at`, `updated_at`) VALUES
(1, 'Lớp học', 10, 1, '2016-05-17 20:38:01', '2016-05-17 20:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `file_mime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `gallery_id`, `file_name`, `file_size`, `file_mime`, `file_path`, `create_by`, `created_at`, `updated_at`) VALUES
(1, 1, '573be5d8ef08fadmin.PNG', '55351', 'image/png', 'gallery/images/573be5d8ef08fadmin.PNG', 0, '2016-05-17 20:47:37', '2016-05-17 20:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_26_112841_entrust_setup_tables', 1),
('2016_05_04_150457_create_classes_table', 1),
('2016_05_04_150614_create_courses_table', 1),
('2016_05_04_150631_create_multichoices_table', 1),
('2016_05_04_150706_create_unittests_table', 1),
('2016_05_04_150725_create_scores_table', 1),
('2016_05_06_030100_create_units_table', 1),
('2016_05_16_034419_image', 1),
('2016_05_16_034644_gallery', 1),
('2016_05_16_041808_create_news_table', 1),
('2016_05_17_082825_create_theories_table', 1),
('2016_05_19_040940_create_classdetails_table', 2),
('2016_05_28_131053_create_vocabularies_table', 2),
('2016_06_01_133450_create_subjects_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `multichoices`
--

CREATE TABLE `multichoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `reply1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reply4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `multichoices`
--

INSERT INTO `multichoices` (`id`, `question`, `reply1`, `reply2`, `reply3`, `reply4`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'cxvcxvcxvxcv', '13', 'w', 'rewr', 'rưerw', '3', '2016-05-07 21:56:22', '2016-05-07 21:56:22'),
(2, 'sffsdfdsfdsf', 'rwe', 'rewr', 'rrwrw', '34343', 'rewr', '2016-05-07 21:57:49', '2016-05-07 21:57:49'),
(3, 'dsadsad', 'gsad11', 'dsad2', 'dsada223', 'dadad224', 'dsad2', '2016-05-08 02:21:26', '2016-05-08 02:21:26'),
(4, 'dsaddsadasdas', '1111111111', '222222222222222', '3333333333333', '444444444444444', '222222222222222', '2016-05-08 02:22:43', '2016-05-08 02:22:43'),
(5, 'gfdgfdgd', '111111111111', '22222222222222', '3333333333333', '44444444444444444', '22222222222222', '2016-05-08 02:30:29', '2016-05-08 02:30:29'),
(7, 'sfdsfsd', 'fdsf', 'ư432', 'ưerw', 'rử', '1', '2016-05-13 22:07:18', '2016-05-13 22:07:18'),
(8, 'sfdsfsd', 'fdsf', 'ư432', 'ưerw', 'rử', '1', '2016-05-13 22:07:39', '2016-05-13 22:07:39'),
(11, 'fds', 'fds', 'fds', 'fds', 'fsfs', '1', '2016-05-14 00:54:28', '2016-05-14 00:54:28'),
(13, 'Correct the true answer:\n____ is this? (Đây là cái gì?)', 'When', 'Who', 'Which', 'What', 'When', '2016-05-14 00:56:30', '2016-06-01 08:14:33'),
(14, 'Correct the true answer:\n_OLOR', 'A', 'B', 'C', 'D', 'A', '2016-05-14 00:56:52', '2016-06-01 08:09:57'),
(24, '', '', '', '', '', '', '2016-05-19 06:35:10', '2016-05-19 06:35:10'),
(25, '', '', '', '', '', '', '2016-05-19 06:35:21', '2016-05-19 06:35:21'),
(26, '', '', '', '', '', '', '2016-05-19 06:35:29', '2016-05-19 06:35:29'),
(32, 'Correct the true answer\nBOY', 'Con trai', 'Con gái', 'Anh', 'Chị', 'Con trai', '2016-06-01 07:48:58', '2016-06-01 07:48:58'),
(33, 'Correct the true answer\nHELLO', 'Xin chào!', 'Tạm biệt!', 'Chúc ngủ ngon !', 'Hi', 'Xin chào!', '2016-06-01 07:50:22', '2016-06-01 07:50:22'),
(34, 'Correct the true answer\nHEL_O', 'K', 'P', 'L', 'H', 'L', '2016-06-01 07:56:56', '2016-06-01 07:56:56'),
(35, 'Correct the true answer\nAP_LE', 'K', 'P', 'L', 'H', 'P', '2016-06-01 07:57:56', '2016-06-01 07:57:56'),
(36, 'Correct the true answer\nANT', 'Con kiến', 'Con lợn', 'Con thỏ', 'Con trâu', 'Con kiến', '2016-06-01 07:58:22', '2016-06-01 07:58:22'),
(37, 'Correct the true answer\nY_LL_W', 'E__W', 'W__E', 'W__W', 'E__E', 'E__W', '2016-06-01 08:11:12', '2016-06-01 08:11:12'),
(38, 'Correct the true answer\nB_OWN', 'G', 'H', 'Y', 'R', 'R', '2016-06-01 08:11:55', '2016-06-01 08:11:55'),
(39, 'Correct the true answer\nGREEN', 'Màu đỏ', 'Màu xanh da trời', 'Màu xanh lá cây', 'Màu vàng', 'Màu xanh lá cây', '2016-06-01 08:12:37', '2016-06-01 08:12:37'),
(40, 'Correct the true answer\nBLUE', 'Màu đỏ', 'Màu xanh da trời', 'Màu xanh lá cây', 'Màu vàng', 'Màu xanh da trời', '2016-06-01 08:12:46', '2016-06-01 08:12:46'),
(41, 'Arrange the word to become a true answer:\nT/W/A/H', 'WHTA', 'HAWT', 'HATW', 'WHAT', 'WHAT', '2016-06-01 08:16:41', '2016-06-01 08:16:41'),
(42, 'Correct the true answer:\nBAL_OON', 'L', 'H', 'T', 'W', 'L', '2016-06-01 08:18:10', '2016-06-01 08:18:10'),
(43, 'Correct the true answer:\nWhat....this ?', 'are', 'be', 'is', 'none', 'is', '2016-06-01 08:19:00', '2016-06-01 08:19:00'),
(44, 'Correct the true answer:\nWhat....these ?', 'are', 'be', 'is', 'none', 'are', '2016-06-01 08:19:37', '2016-06-01 08:19:37'),
(45, 'Correct the true answer:\nMUM', 'Bố', 'Bà', 'Ông', 'Mẹ', 'Mẹ', '2016-06-01 08:20:20', '2016-06-01 08:20:20'),
(46, 'Correct the true answer:\nUNCLE', 'Bố', 'Bà', 'Chú/cậu', 'Mẹ', 'Chú/cậu', '2016-06-01 08:20:38', '2016-06-01 08:20:38'),
(47, 'Correct the true answer:\nDADDY', 'Bố', 'Bà', 'Chú/cậu', 'Mẹ', 'Bố', '2016-06-01 08:21:09', '2016-06-01 08:21:09'),
(48, 'Correct the true answer:\nGRANDMOTHER', 'Bố', 'Bà Nội/Ngoại', 'Chú/cậu', 'Mẹ', 'Bà Nội/Ngoại', '2016-06-01 08:21:37', '2016-06-01 08:21:37'),
(50, 'Correct the true answer:\nGR_ND_ATHER', 'A__A', 'E_F', 'F_A', 'A_F', 'A_F', '2016-06-01 08:22:45', '2016-06-01 08:22:45'),
(51, 'Choose the correct answer describe emotion:\n', 'Hurri', 'Hot', 'Hat', 'Short ', 'Hurri', '2016-06-02 07:55:09', '2016-06-02 07:56:28'),
(52, 'Choose the correct answer describe emotion:\n', 'Hurry', 'hugnry', 'tall', 'short', 'Hurry', '2016-06-02 07:55:43', '2016-06-02 07:55:43'),
(53, 'Choose the correct answer:\nH_RRY', 'U', 'R', 'I', 'O', 'U', '2016-06-02 08:03:46', '2016-06-02 08:03:46'),
(54, 'Choose the correct answer:\nHA_PY', 'U', 'R', 'P', 'P', 'P', '2016-06-02 08:05:38', '2016-06-02 08:05:38'),
(55, 'Choose the correct answer:\nHow is he ?', 'He is happy', 'she is happy', 'he is thirty', 'she is hot', 'He is happy', '2016-06-02 08:10:59', '2016-06-02 08:13:02'),
(56, 'Choose the correct answer:\nHUN__Y', 'GR', 'RG', 'PR', 'KG', 'GR', '2016-06-02 08:16:59', '2016-06-02 08:16:59'),
(57, 'Choose the correct answer:\nWhat is the number between "five" and "seven" ?', 'four', 'three', 'six', 'eight', 'six', '2016-06-02 08:38:02', '2016-06-02 08:38:02'),
(58, 'Choose the correct answer:\nWhat is the number between "one" and "three" ?', 'four', 'three', 'six', 'two', 'two', '2016-06-02 08:42:32', '2016-06-02 08:42:32'),
(59, 'Choose the correct answer:\nWhat is the number between "eight" and "ten" ?', 'four', 'nine', 'six', 'two', 'nine', '2016-06-02 08:43:42', '2016-06-02 08:43:42'),
(60, 'Choose the correct answer:\nWhat is the word decorate about emotion:', 'four', 'nine', 'old', 'sad', 'sad', '2016-06-02 08:45:31', '2016-06-02 08:45:31'),
(61, 'Choose the correct answer:\nWhat is the word decorate about school:', 'ereaser', 'nine', 'old', 'sad', 'ereaser', '2016-06-02 08:47:29', '2016-06-02 08:47:29'),
(62, 'Choose the correct answer:\nWhat is the word decorate about school:', 'ereser', 'ruler', 'old', 'sad', 'ruler', '2016-06-02 08:47:53', '2016-06-02 08:47:53'),
(63, 'Choose the correct answer:\nWhat is the word decorate about learning tools:', 'ereser', 'ruler', 'class', 'home', 'ruler', '2016-06-02 08:53:11', '2016-06-02 08:53:11'),
(64, 'Choose the correct answer:\nWhat is the word decorate about thing at home:', 'board', 'ruler', 'class', 'bedroom', 'bedroom', '2016-06-02 08:55:29', '2016-06-02 08:55:29'),
(65, 'Choose the correct answer:\nWhat is the word decorate about thing in the bagschool:', 'clear', 'ruler', 'class', 'bedroom', 'ruler', '2016-06-02 08:58:34', '2016-06-02 08:58:34'),
(66, 'Choose a school thing: ', 'door', 'window', 'ruler', 'train', 'ruler', '2016-06-02 09:02:59', '2016-06-02 09:02:59'),
(67, 'It....a pen', 'an', 'are', 'am', 'is', 'is', '2016-06-02 09:03:54', '2016-06-02 09:03:54'),
(68, 'This is an....', 'bird', 'bag', 'apple', 'book', 'apple', '2016-06-02 09:04:45', '2016-06-02 09:04:45'),
(69, 'This is a....', 'bird', 'umbrella', 'apple', 'ereaser', 'bird', '2016-06-02 09:05:06', '2016-06-02 09:05:06'),
(70, 'This is a....', 'board', 'umbrella', 'apple', 'ereaser', 'board', '2016-06-02 09:07:28', '2016-06-02 09:07:28'),
(71, 'This is ....bag', 'this', 'yes', 'my', 'doll', 'my', '2016-06-02 09:08:40', '2016-06-02 09:08:40'),
(72, 'This is ....bag', 'A', 'an', 'bear', 'doll', 'A', '2016-06-02 09:09:13', '2016-06-02 09:09:13'),
(73, 'is this your teddy ?', 'It''s a bike', 'Yes, it is', 'I like it', 'It''s a ball', 'It''s a bike', '2016-06-02 09:10:26', '2016-06-02 09:10:26'),
(74, 'is this your bike?', 'No, it isn''t', 'I''m fine, thanks', 'It''s bike', 'It''s a ball', 'It''s bike', '2016-06-02 09:11:22', '2016-06-02 09:11:22'),
(75, 'is this your book?', 'No, it isn''t', 'I''m fine, thanks', 'It''s bike', 'It''s a book', 'It''s a book', '2016-06-02 09:11:50', '2016-06-02 09:11:50'),
(76, 'What''s your favourite toy?', 'It''s green', 'It''s a cat', 'It''s a door', 'It''s a kite', 'It''s a kite', '2016-06-02 09:13:34', '2016-06-02 09:13:34'),
(77, 'What''s your favourite animal?', 'It''s green', 'It''s a cat', 'It''s a door', 'It''s a kite', 'It''s a cat', '2016-06-02 09:13:51', '2016-06-02 09:13:51'),
(78, 'What''s your favourite school tool?', 'It''s green', 'It''s a cat', 'It''s a ruler', 'It''s a kite', 'It''s a ruler', '2016-06-02 09:14:15', '2016-06-02 09:14:15'),
(79, 'Circle the odd-one-out: ', 'ball', 'window', 'kite', 'doll', 'ball', '2016-06-02 09:16:24', '2016-06-02 09:16:24'),
(80, 'you use .... to play socer. ', 'ball', 'window', 'kite', 'doll', 'ball', '2016-06-02 09:18:21', '2016-06-02 09:18:21'),
(81, 'What''s your father''s job ?', 'ball', 'window', 'doctor', 'doll', 'doctor', '2016-06-02 09:23:57', '2016-06-02 09:23:57'),
(82, 'What''s your mother''s job ?', 'ball', 'window', 'docto', 'teacher', 'teacher', '2016-06-02 09:24:33', '2016-06-02 09:24:33'),
(83, 'What''s your favourite thing?', 'ball', 'window', 'docto', 'teacher', 'ball', '2016-06-02 09:25:22', '2016-06-02 09:25:22'),
(84, 'What''s...... favourite thing?', 'your', 'him', 'her', 'teacher', 'your', '2016-06-02 09:28:03', '2016-06-02 09:28:03'),
(85, 'What''s...... favourite thing?', 'mother', 'him', 'your', 'teacher', 'your', '2016-06-02 09:30:20', '2016-06-02 09:30:20'),
(86, 'Where is your grandmother?', 'She is in the kitchen', 'She is on the kitchen', 'She is watching tivi', 'She is the teacher', 'She is in the kitchen', '2016-06-02 09:38:04', '2016-06-02 09:38:04'),
(87, 'What is your name?', 'I am ten', 'I''m fine, thanks', 'I''m happy', 'My name is Rosy', 'My name is Rosy', '2016-06-02 09:39:58', '2016-06-02 09:39:58'),
(88, 'How old are you?', 'I am ten', 'I''m in kitchen', 'my name is Tim', 'It is pen', 'I am ten', '2016-06-02 09:41:49', '2016-06-02 09:41:55'),
(89, 'What the day is it today?', 'It is Monday', 'I''m in kitchen', 'It is my friend', 'It is pen', 'It is Monday', '2016-06-02 09:42:58', '2016-06-02 09:42:58'),
(90, 'What is this?', 'It is Monday', 'I''m in kitchen', 'It is my friend', 'It is pen', 'It is pen', '2016-06-02 09:43:16', '2016-06-02 09:43:16'),
(91, 'How many days are there in the week ?', '5 days', '7 days', '6 days', '8days', '7 days', '2016-06-02 09:44:19', '2016-06-02 09:44:19'),
(92, 'What color is it ?', 'It is a pen', 'It is blue', 'I am a student', 'This is yellow pen', 'It is blue', '2016-06-02 09:45:16', '2016-06-02 09:45:16'),
(93, 'Are you student?', 'No, they aren''t', 'Yes, i am', 'No, i do not', 'Yes, i do', 'Yes, i am', '2016-06-02 09:46:07', '2016-06-02 09:46:07'),
(94, 'What......... is it? it is green', 'time', 'many', 'colour', 'number', 'colour', '2016-06-02 09:47:01', '2016-06-02 09:47:01'),
(95, 'What is your favorite number?', 'time', 'many', 'colour', 'horse', 'horse', '2016-06-02 09:47:54', '2016-06-02 09:47:54'),
(96, 'It''s got a sides. They are all the same.It''s a...........', 'square', 'circle', 'triangle', 'rectangle', 'square', '2016-06-02 09:50:52', '2016-06-02 09:50:52'),
(98, 'It''s not got sides. It''s smooth and sound .It''s a...........', 'square', 'circle', 'triangle', 'rectangle', 'circle', '2016-06-02 09:53:19', '2016-06-02 09:53:19'),
(99, 'It''s got three sides. It''s smooth and round. It''s a...........', 'square', 'circle', 'triangle', 'rectangle', 'triangle', '2016-06-02 10:02:53', '2016-06-02 10:02:53'),
(100, 'It''s got four sides. two long, two short. It''s a...........', 'square', 'circle', 'triangle', 'rectangle', 'rectangle', '2016-06-02 10:03:24', '2016-06-02 10:03:24'),
(101, 'he.....straight hair.', 'have got', 'got', 'has got', '''ve got', 'has got', '2016-06-02 10:04:46', '2016-06-02 10:04:46'),
(102, 'i............like monkeys.', 'don''t', 'do', 'does', 'are', 'don''t', '2016-06-02 10:21:21', '2016-06-02 10:21:29'),
(103, 'i...........giraffes.', 'likes', 'like', 'do', 'don''t', 'like', '2016-06-02 10:22:17', '2016-06-02 10:22:17'),
(104, 'they......big', 'are', 'like', 'is', 'don''t', 'are', '2016-06-02 10:22:43', '2016-06-02 10:22:43'),
(105, 'i......litter', 'are', 'like', 'is', 'am', 'am', '2016-06-02 10:23:09', '2016-06-02 10:23:09'),
(106, 'he.....tall', 'are', 'like', 'is', 'am', 'is', '2016-06-02 10:23:29', '2016-06-02 10:23:29'),
(107, 'I''m big. I''ve got four legs.i''m gray. What am I?', 'giraffes', 'elephant', 'monkey', 'parrot', 'elephant', '2016-06-02 10:25:38', '2016-06-02 10:25:38'),
(108, 'I''m tall. I''ve got four legs.i''m yellow and brown. What am I?', 'giraffes', 'elephant', 'monkey', 'parrot', 'giraffes', '2016-06-02 10:26:12', '2016-06-02 10:26:12'),
(109, 'I''m long. I''ve got no legs.i''m green. What am I?', 'sake', 'elephant', 'monkey', 'parrot', 'sake', '2016-06-02 10:26:55', '2016-06-02 10:26:55'),
(110, 'It''s a......monkey.', 'brown', 'like', 'got', 'four', 'brown', '2016-06-02 10:29:57', '2016-06-02 10:29:57'),
(111, 'they are......lions.', 'leg', 'like', 'big', 'get', 'big', '2016-06-02 10:31:07', '2016-06-02 10:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(10) UNSIGNED NOT NULL,
  `unit_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `value` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `unit_id`, `user_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 0, '2016-05-14 20:53:58', '2016-05-14 20:53:58'),
(2, 4, 3, 100, '2016-05-14 20:54:11', '2016-05-14 20:54:11'),
(3, 4, 3, 0, '2016-05-14 20:56:30', '2016-05-14 20:56:30'),
(4, 4, 2, 100, '2016-05-14 20:59:52', '2016-05-14 20:59:52'),
(18, 4, 4, 100, '2016-05-15 01:15:29', '2016-05-15 01:15:29'),
(19, 4, 8, 0, '2016-05-15 02:20:14', '2016-05-15 02:20:14'),
(20, 4, 8, 0, '2016-05-15 02:20:14', '2016-05-15 02:20:14'),
(21, 4, 8, 100, '2016-05-15 02:20:17', '2016-05-15 02:20:17'),
(22, 4, 7, 0, '2016-05-15 02:20:26', '2016-05-15 02:20:26'),
(23, 4, 7, 100, '2016-05-15 02:20:38', '2016-05-15 02:20:38'),
(24, 4, 7, 0, '2016-05-15 02:20:42', '2016-05-15 02:20:42'),
(25, 4, 2, 100, '2016-05-15 02:40:28', '2016-05-15 02:40:28'),
(26, 4, 2, 0, '2016-05-15 02:40:36', '2016-05-15 02:40:36'),
(27, 4, 1, 0, '2016-05-18 07:43:49', '2016-05-18 07:43:49'),
(28, 4, 1, 0, '2016-05-18 07:43:53', '2016-05-18 07:43:53'),
(29, 4, 1, 100, '2016-05-18 07:43:58', '2016-05-18 07:43:58'),
(30, 4, 1, 0, '2016-05-18 07:45:17', '2016-05-18 07:45:17'),
(31, 4, 1, 50, '2016-05-18 07:45:28', '2016-05-18 07:45:28'),
(32, 4, 1, 50, '2016-05-18 07:45:29', '2016-05-18 07:45:29'),
(33, 4, 1, 100, '2016-05-18 07:45:37', '2016-05-18 07:45:37'),
(34, 4, 4, 0, '2016-06-01 07:43:40', '2016-06-01 07:43:40'),
(35, 4, 4, 100, '2016-06-01 07:43:44', '2016-06-01 07:43:44'),
(36, 4, 4, 100, '2016-06-01 07:43:48', '2016-06-01 07:43:48'),
(37, 4, 4, 0, '2016-06-01 07:50:39', '2016-06-01 07:50:39'),
(38, 4, 4, 80, '2016-06-01 07:51:20', '2016-06-01 07:51:20'),
(39, 4, 4, 80, '2016-06-01 07:51:30', '2016-06-01 07:51:30'),
(40, 4, 4, 80, '2016-06-01 07:51:47', '2016-06-01 07:51:47'),
(41, 4, 4, 80, '2016-06-01 07:52:12', '2016-06-01 07:52:12'),
(42, 4, 4, 80, '2016-06-01 07:52:25', '2016-06-01 07:52:25'),
(43, 4, 4, 80, '2016-06-01 07:52:33', '2016-06-01 07:52:33'),
(44, 4, 4, 80, '2016-06-01 07:52:38', '2016-06-01 07:52:38'),
(45, 4, 4, 80, '2016-06-01 07:53:14', '2016-06-01 07:53:14'),
(46, 4, 4, 40, '2016-06-01 07:58:28', '2016-06-01 07:58:28'),
(47, 4, 4, 100, '2016-06-01 07:58:42', '2016-06-01 07:58:42'),
(48, 4, 4, 80, '2016-06-02 07:21:42', '2016-06-02 07:21:42'),
(49, 4, 4, 100, '2016-06-02 07:21:50', '2016-06-02 07:21:50'),
(50, 4, 4, 100, '2016-06-02 07:21:59', '2016-06-02 07:21:59'),
(51, 4, 4, 100, '2016-06-02 07:23:23', '2016-06-02 07:23:23'),
(52, 4, 4, 100, '2016-06-02 07:23:23', '2016-06-02 07:23:23'),
(53, 4, 4, 100, '2016-06-02 07:23:23', '2016-06-02 07:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `unit_id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trans` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `unit_id`, `text`, `trans`, `video`, `created_at`, `updated_at`) VALUES
(1, 36, 'Hãy cứ như vậy ôm em thế này, để ấm áp thêm một vài giây. \r\nBiết hết yêu rồi, mà chẳng muốn xa rời, và chẳng nói nên lời hỡi người. Chắc em sẽ thấy nhớ những lúc sánh đôi đi chung lối về.\r\nVà chắc em không thể quên đi những ngày qua…. \r\nTừ ngày mai không ', 'Hãy cứ như vậy ôm em thế này, để ấm áp thêm một vài giây. \r\nBiết hết yêu rồi, mà chẳng muốn xa rời, và chẳng nói nên lời hỡi người. Chắc em sẽ thấy nhớ những lúc sánh đôi đi chung lối về.\r\nVà chắc em không thể quên đi những ngày qua…. \r\nTừ ngày mai không ', '<iframe width="560" height="315" src="https://www.youtube.com/embed/irrqt8--gBs" frameborder="0" allowfullscreen></iframe>', '2016-06-02 07:41:01', '2016-06-02 07:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `theories`
--

CREATE TABLE `theories` (
  `id` int(10) UNSIGNED NOT NULL,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `theories`
--

INSERT INTO `theories` (`id`, `unit_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 4, '<div><span><strong><span style="color: #ff0000;">Hello</span><span style="color: #0000ff;">&nbsp;(Xin ch&agrave;o);<span style="color: #ff0000;"> Hi<span style="color: #0000ff;"> (Ch&agrave;o bạn)</span></span></span></strong></span></div>\n<div><span><strong><span style="color: #0000ff;"><span style="color: #ff0000;"><span style="color: #0000ff;"><span style="color: #ff0000;">Nice to meet you,Bob <span style="color: #0000ff;">(Rất vui được gặp bạn, Bob &agrave;)</span></span></span></span></span></strong></span></div>\n<div><span style="color: #ff0000;"><strong>What''s your name ?<span style="color: #0000ff;"> (T&ecirc;n của bạn l&agrave; g&igrave; ?)</span></strong></span></div>\n<div><span style="color: #ff0000;"><strong>My name is....<span style="color: #0000ff;">(T&ecirc;n t&ocirc;i l&agrave;....)</span></strong></span></div>\n<div><span style="color: #ff0000;"><strong><span style="color: #000000;">Hoặc</span> I am....<span style="color: #0000ff;">(T&ocirc;i l&agrave;....)</span></strong></span></div>\n<div><span style="color: #ff0000;"><strong>See you again soon! <span style="color: #0000ff;">(Sớm gặp lại bạn)</span></strong></span></div>\n<div><span style="color: #ff0000;"><strong>Goodbye ! <span style="color: #0000ff;">(Tạm biệt)</span></strong></span></div>\n<div><iframe src="https://www.youtube.com/embed/hbBmmcjm1l8" width="1075" height="531" frameborder="0" allowfullscreen="allowfullscreen"></iframe>\n<div class="embed-responsive embed-responsive-16by9">&nbsp;</div>\n</div>', '2016-05-17 19:38:33', '2016-05-30 21:13:22'),
(2, 0, '<div id="substream_0" class="_4ikz" data-referrer="substream_0">\n<div>\n<div id="u_ps_jsonp_2_0_0">\n<div>\n<div id="hyperfeed_story_id_573c8060a5c7a6a50154974" class="_5jmm _5pat _3lb4 _x72" data-ft="{&quot;qid&quot;:&quot;6286040326116219724&quot;,&quot;mf_story_key&quot;:&quot;6809771551682490543&quot;,&quot;fbfeed_location&quot;:1,&quot;insertion_position&quot;:0}" data-testid="fbfeed_story" data-cursor="MTQ2MzU4MjgxNToxNDYzNTgyODE1OjE6NjgwOTc3MTU1MTY4MjQ5MDU0MzoxNDYzNTgyNjc1OjA6MDow" data-dedupekey="6809771551682490543" data-timestamp="1463582675" data-story_below_count="0" data-snapshot_time_span="0" data-referrer="hyperfeed_story_id_573c8060a5c7a6a50154974" data-insertion-position="0">\n<div id="u_ps_jsonp_2_0_1" class="_4-u2 mbm _5v3q _4-u8">\n<div id="u_ps_jsonp_2_0_2" class="_3ccb" data-gt="{&quot;type&quot;:&quot;click2canvas&quot;,&quot;fbsource&quot;:703,&quot;ref&quot;:&quot;nf_generic&quot;}">\n<div class="userContentWrapper _5pcr">\n<div class="_1dwg">\n<div>\n<h5 id="js_1e" class="_1qbu _5pbw" data-ft="{&quot;tn&quot;:&quot;C&quot;}"><span class="fwn fcg"><span class="fcg"><span class="fwb"><a class="profileLink" href="https://www.facebook.com/huyen.bui.313924" data-ft="{&quot;tn&quot;:&quot;l&quot;}" data-hovercard="/ajax/hovercard/user.php?id=100003731507801">B&ugrave;i Kh&aacute;nh Huyền</a></span> đ&atilde; trả lời một <a href="https://www.facebook.com/photo.php?fbid=806642806136762&amp;set=a.108619645939085.10271.100003731507801&amp;type=3&amp;comment_id=806647309469645">b&igrave;nh luận</a> về mục n&agrave;y.</span></span></h5>\n</div>\n<div class="userContent">&nbsp;</div>\n<div class="_3x-2">\n<div data-ft="{&quot;tn&quot;:&quot;H&quot;}">&nbsp;</div>\n<div class="_5mxv">\n<div class="_5pbu _3ccb" data-gt="{&quot;type&quot;:&quot;click2canvas&quot;,&quot;fbsource&quot;:703,&quot;ref&quot;:&quot;nf_generic&quot;}">\n<div>&nbsp;</div>\n<div class="userContentWrapper _5pcr">\n<div class="_1dwg">\n<div class="_5x46">\n<div class="clearfix _5va3">\n<div class="_38vo"><img class="_s0 _5xib _5sq7 _44ma _rw img" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/p50x50/13221579_806642806136762_2097971690984459305_n.jpg?oh=79e1be1f1fda44805e50e9f773689e80&amp;oe=57A28756" alt="" /></div>\n<div class="clearfix _42ef">\n<div class="rfloat _ohf">&nbsp;</div>\n<div class="_5va4">\n<div>\n<div class="_6a _5u5j">\n<div class="_6a _6b">&nbsp;</div>\n<div class="_6a _5u5j _6b">\n<h6 class="_5pbw" data-ft="{&quot;tn&quot;:&quot;C&quot;}"><span class="fwn fcg"><span class="fcg"><span class="fwb"><a class="profileLink" href="https://www.facebook.com/huyen.bui.313924" data-ft="{&quot;tn&quot;:&quot;l&quot;}" data-hovercard="/ajax/hovercard/user.php?id=100003731507801">B&ugrave;i Kh&aacute;nh Huyền</a></span> đ&atilde; cập nhật ảnh đại diện của c&ocirc; ấy.</span></span></h6>\n<div class="_5pcp"><span class="fsm fwn fcg"><a class="_5pcq" href="https://www.facebook.com/photo.php?fbid=806642806136762&amp;set=a.108619645939085.10271.100003731507801&amp;type=3" target="" rel="theater"><abbr class="_5ptz timestamp livetimestamp" title="18 Th&aacute;ng 5 2016 l&uacute;c 18:53" data-utime="1463572430" data-shorten="1"><span id="js_1f" class="timestampContent">2 giờ</span></abbr></a></span> &middot; <a id="u_ps_jsonp_2_0_7" class="uiStreamPrivacy inlineBlock fbStreamPrivacy fbPrivacyAudienceIndicator _5pcq" href="https://www.facebook.com/" data-hover="tooltip"></a></div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class="userContent">&nbsp;</div>\n<div class="_3x-2">\n<div data-ft="{&quot;tn&quot;:&quot;H&quot;}">\n<div class="mtm">\n<div class="_46-h _517g"><img class="_46-i img" style="display: block; margin-left: auto; margin-right: auto;" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-0/p480x480/13221579_806642806136762_2097971690984459305_n.jpg?oh=c7011c1a86e08ae19bd202874043736e&amp;oe=57D9AC3D" alt="Ảnh của B&ugrave;i Kh&aacute;nh Huyền." width="480" height="480" /></div>\n</div>\n</div>\n</div>\n</div>\n<div><form id="u_ps_jsonp_2_0_8" class="commentable_item" action="https://www.facebook.com/ajax/ufi/modify.php" method="post" data-ft="{&quot;tn&quot;:&quot;]&quot;}">\n<div class="_sa_ _5vsi _ca7">\n<div class="_37uu">\n<div data-reactroot="">\n<div class="_3399 _a7s clearfix">\n<div class="_524d">\n<div class="_42nr">\n<div class="_khz"><a class="UFILikeLink _4x9- _4x9_ _48-k UFILinkBright" tabindex="0" href="https://www.facebook.com/" data-testid="fb-ufi-unlikelink">Th&iacute;ch</a><span class="accessible_elem" tabindex="-1">Hiển thị th&ecirc;m cảm x&uacute;c</span></div>\n<a class="comment_link _5yxe" title="Vi&ecirc;́t bình lu&acirc;̣n" href="https://www.facebook.com/" data-ft="{ &quot;tn&quot;: &quot;S&quot;, &quot;type&quot;: 24 }">B&igrave;nh luận</a><a class="share_action_link _5f9b" title="Gửi nội dung n&agrave;y đến bạn b&egrave; hoặc đăng tr&ecirc;n d&ograve;ng thời gian của bạn." href="https://www.facebook.com/" data-ft="{ &quot;tn&quot;: &quot;J&quot;, &quot;type&quot;: 25 }">Chia sẻ</a></div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div id="u_ps_jsonp_2_0_6" class="uiUfi UFIContainer _5pc9 _5vsj _5v9k">\n<div class="UFIList" data-reactroot="">\n<div class="UFIRow UFILikeSentence _4204 _4_dr">\n<div class="clearfix">\n<div class="_ohf rfloat">&nbsp;</div>\n<div class="">\n<div class="_ipp">\n<div class="_3t53 _4ar- _ipn"><a class="_2x4v" href="https://www.facebook.com/ufi/reaction/profile/browser/?ft_ent_identifier=806642806136762&amp;av=100008108976090" rel="ignore"><span class="_1g5v"><span data-hover="tooltip" data-tooltip-uri="/ufi/reaction/tooltip/?ft_ent_identifier=806642806136762&amp;av=100008108976090">120</span></span><span class="_4arz"><span data-hover="tooltip" data-tooltip-uri="/ufi/reaction/tooltip/?ft_ent_identifier=806642806136762&amp;av=100008108976090">Bạn, Huệ Lan, Mai Nhi v&agrave; 117 người kh&aacute;c</span></span></a></div>\n</div>\n</div>\n</div>\n</div>\n<h6 class="accessible_elem">B&igrave;nh luận</h6>\n<div>\n<div class="UFIRow UFIPagerRow _4oep _48pi">\n<div class="clearfix">\n<div class="_ohf rfloat"><span class="fcg UFIPagerCount">4 trong số 24</span></div>\n<div class=""><a class="UFIPagerLink" href="https://www.facebook.com/">Xem c&aacute;c b&igrave;nh luận trước</a></div>\n</div>\n</div>\n<div class="UFIRow _48ph UFIComment _4oep" data-ft="{&quot;tn&quot;:&quot;R2&quot;}">\n<div class="clearfix">\n<div class="_ohe lfloat"><a class="img _8o _8s UFIImageBlockImage" tabindex="-1" href="https://www.facebook.com/le.ngoclan.526?fref=ufi" data-ft="{&quot;tn&quot;:&quot;T&quot;}" data-hovercard="/ajax/hovercard/hovercard.php?id=100004156120181&amp;extragetparams=%7B%22on_public_ufi%22%3Afalse%2C%22hc_location%22%3A%22ufi%22%7D"><img class="img UFIActorImage _54ru img" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/p32x32/12745670_562574970557702_4695040883359349321_n.jpg?oh=dd7aee91350b6acc95ed1152445dab92&amp;oe=57E32FE8" alt="lan ngọc" /></a></div>\n<div class="">\n<div class="UFIImageBlockContent _42ef clearfix">\n<div class="_ohf rfloat">&nbsp;</div>\n<div class="">\n<div class="UFICommentContentBlock">\n<div class="UFICommentContent"><a class=" UFICommentActorName" dir="ltr" href="https://www.facebook.com/le.ngoclan.526?fref=ufi" data-ft="{&quot;tn&quot;:&quot;;&quot;}" data-hovercard="/ajax/hovercard/hovercard.php?id=100004156120181&amp;extragetparams=%7B%22is_public%22%3Afalse%2C%22hc_location%22%3A%22ufi%22%7D">lan ngọc</a>\n<div class="UFITranslatedText">&nbsp;</div>\n<div tabindex="0" data-testid="ufi_comment_sticker">&nbsp;</div>\n</div>\n<div class="fsm fwn fcg UFICommentActions"><a class="UFILikeLink" style="color: #365899; cursor: pointer; text-decoration: none; font-family: helvetica, arial, sans-serif;" title="Th&iacute;ch b&igrave;nh luận n&agrave;y" href="https://www.facebook.com/" data-ft="{&quot;tn&quot;:&quot;&gt;&quot;}" data-testid="ufi_comment_like_link">Th&iacute;ch</a> &middot; <a class="UFIReplyLink" href="https://www.facebook.com/">Trả lời</a> &middot; <a class="uiLinkSubtle" href="https://www.facebook.com/photo.php?fbid=806642806136762&amp;set=a.108619645939085.10271.100003731507801&amp;type=3&amp;comment_id=806687402798969&amp;comment_tracking=%7B%22tn%22%3A%22R2%22%7D" data-ft="{&quot;tn&quot;:&quot;N&quot;}" data-testid="ufi_comment_timestamp"><abbr class="livetimestamp" title="18 Th&aacute;ng 5 2016 l&uacute;c 21:15" data-utime="1463580920" data-shorten="true">31 ph&uacute;t</abbr></a></div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class="UFIRow UFIComment _4oep" data-ft="{&quot;tn&quot;:&quot;R1&quot;}">\n<div class="clearfix">\n<div class="_ohe lfloat"><a class="img _8o _8s UFIImageBlockImage" tabindex="-1" href="https://www.facebook.com/le.ngoclan.526?fref=ufi" data-ft="{&quot;tn&quot;:&quot;T&quot;}" data-hovercard="/ajax/hovercard/hovercard.php?id=100004156120181&amp;extragetparams=%7B%22on_public_ufi%22%3Afalse%2C%22hc_location%22%3A%22ufi%22%7D"><img class="img UFIActorImage _54ru img" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/p32x32/12745670_562574970557702_4695040883359349321_n.jpg?oh=dd7aee91350b6acc95ed1152445dab92&amp;oe=57E32FE8" alt="lan ngọc" /></a></div>\n<div class="">\n<div class="UFIImageBlockContent _42ef clearfix">\n<div class="_ohf rfloat">&nbsp;</div>\n<div class="">\n<div class="UFICommentContentBlock">\n<div class="UFICommentContent"><a class=" UFICommentActorName" dir="ltr" href="https://www.facebook.com/le.ngoclan.526?fref=ufi" data-ft="{&quot;tn&quot;:&quot;;&quot;}" data-hovercard="/ajax/hovercard/hovercard.php?id=100004156120181&amp;extragetparams=%7B%22is_public%22%3Afalse%2C%22hc_location%22%3A%22ufi%22%7D">lan ngọc</a> <span data-ft="{&quot;tn&quot;:&quot;K&quot;}"><span class="UFICommentBody">Thật bất ngờ ????????????</span></span>\n<div class="UFITranslatedText">&nbsp;</div>\n</div>\n<div class="fsm fwn fcg UFICommentActions"><a class="UFILikeLink" style="color: #365899; cursor: pointer; text-decoration: none; font-family: helvetica, arial, sans-serif;" title="Th&iacute;ch b&igrave;nh luận n&agrave;y" href="https://www.facebook.com/" data-ft="{&quot;tn&quot;:&quot;&gt;&quot;}" data-testid="ufi_comment_like_link">Th&iacute;ch</a> &middot; <a class="UFIReplyLink" href="https://www.facebook.com/">Trả lời</a> &middot; <a class="uiLinkSubtle" href="https://www.facebook.com/photo.php?fbid=806642806136762&amp;set=a.108619645939085.10271.100003731507801&amp;type=3&amp;comment_id=806687542798955&amp;comment_tracking=%7B%22tn%22%3A%22R1%22%7D" data-ft="{&quot;tn&quot;:&quot;N&quot;}" data-testid="ufi_comment_timestamp"><abbr class="livetimestamp" title="18 Th&aacute;ng 5 2016 l&uacute;c 21:15" data-utime="1463580955" data-shorten="true">31 ph&uacute;t</abbr></a></div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class="UFIRow UFIComment _4oep" data-ft="{&quot;tn&quot;:&quot;R0&quot;}">\n<div class="clearfix">\n<div class="_ohe lfloat"><a class="img _8o _8s UFIImageBlockImage" tabindex="-1" href="https://www.facebook.com/buivanlongphutho?fref=ufi" data-ft="{&quot;tn&quot;:&quot;T&quot;}" data-hovercard="/ajax/hovercard/hovercard.php?id=100003811735732&amp;extragetparams=%7B%22on_public_ufi%22%3Afalse%2C%22hc_location%22%3A%22ufi%22%7D"><img class="img UFIActorImage _54ru img" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/p32x32/12705169_710043925799325_2236412851515770838_n.jpg?oh=2c14d89e20f9bdbcb8fb9b7325e38d3c&amp;oe=57E6134F" alt="B&ugrave;i Văn Long" /></a></div>\n<div class="">\n<div class="UFIImageBlockContent _42ef clearfix">\n<div class="_ohf rfloat">&nbsp;</div>\n<div class="">\n<div class="UFICommentContentBlock">\n<div class="UFICommentContent"><a class=" UFICommentActorName" dir="ltr" href="https://www.facebook.com/buivanlongphutho?fref=ufi" data-ft="{&quot;tn&quot;:&quot;;&quot;}" data-hovercard="/ajax/hovercard/hovercard.php?id=100003811735732&amp;extragetparams=%7B%22is_public%22%3Afalse%2C%22hc_location%22%3A%22ufi%22%7D">B&ugrave;i Văn Long</a> <span data-ft="{&quot;tn&quot;:&quot;K&quot;}"><span class="UFICommentBody">Quay dc 180 độ giỏi thế</span></span>\n<div class="UFITranslatedText">&nbsp;</div>\n</div>\n<div class="fsm fwn fcg UFICommentActions"><a class="UFILikeLink" style="color: #365899; cursor: pointer; text-decoration: none; font-family: helvetica, arial, sans-serif;" title="Th&iacute;ch b&igrave;nh luận n&agrave;y" href="https://www.facebook.com/" data-ft="{&quot;tn&quot;:&quot;&gt;&quot;}" data-testid="ufi_comment_like_link">Th&iacute;ch</a> &middot; <a class="UFIReplyLink" href="https://www.facebook.com/">Trả lời</a> &middot; <a class="uiLinkSubtle" href="https://www.facebook.com/photo.php?fbid=806642806136762&amp;set=a.108619645939085.10271.100003731507801&amp;type=3&amp;comment_id=806689356132107&amp;comment_tracking=%7B%22tn%22%3A%22R0%22%7D" data-ft="{&quot;tn&quot;:&quot;N&quot;}" data-testid="ufi_comment_timestamp"><abbr class="livetimestamp" title="18 Th&aacute;ng 5 2016 l&uacute;c 21:19" data-utime="1463581169" data-shorten="true">27 ph&uacute;t</abbr></a></div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class="UFIRow UFILastCommentComponent UFIComment _4oep" data-ft="{&quot;tn&quot;:&quot;R&quot;}">\n<div class="clearfix">\n<div class="_ohe lfloat"><a class="img _8o _8s UFIImageBlockImage" tabindex="-1" href="https://www.facebook.com/conlatdatha.thanh?fref=ufi" data-ft="{&quot;tn&quot;:&quot;T&quot;}" data-hovercard="/ajax/hovercard/hovercard.php?id=100002874409081&amp;extragetparams=%7B%22on_public_ufi%22%3Afalse%2C%22hc_location%22%3A%22ufi%22%7D"><img class="img UFIActorImage _54ru img" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/p32x32/13062479_816924265080046_6492487771815466031_n.jpg?oh=017d1479ae68bd515431f2062d627a92&amp;oe=57E831AD" alt="Ha Tulip" /></a></div>\n<div class="">\n<div class="UFIImageBlockContent _42ef clearfix">\n<div class="_ohf rfloat">&nbsp;</div>\n<div class="">\n<div class="UFICommentContentBlock">\n<div class="UFICommentContent"><a class=" UFICommentActorName" dir="ltr" href="https://www.facebook.com/conlatdatha.thanh?fref=ufi" data-ft="{&quot;tn&quot;:&quot;;&quot;}" data-hovercard="/ajax/hovercard/hovercard.php?id=100002874409081&amp;extragetparams=%7B%22is_public%22%3Afalse%2C%22hc_location%22%3A%22ufi%22%7D">Ha Tulip</a> <span data-ft="{&quot;tn&quot;:&quot;K&quot;}"><span class="UFICommentBody">Y&ecirc;u anh đi</span></span>\n<div class="UFITranslatedText">&nbsp;</div>\n</div>\n<div class="fsm fwn fcg UFICommentActions"><a class="UFILikeLink" style="color: #365899; cursor: pointer; text-decoration: none; font-family: helvetica, arial, sans-serif;" title="Th&iacute;ch b&igrave;nh luận n&agrave;y" href="https://www.facebook.com/" data-ft="{&quot;tn&quot;:&quot;&gt;&quot;}" data-testid="ufi_comment_like_link">Th&iacute;ch</a> &middot; <a class="UFIReplyLink" href="https://www.facebook.com/">Trả lời</a> &middot; <a class="uiLinkSubtle" href="https://www.facebook.com/photo.php?fbid=806642806136762&amp;set=a.108619645939085.10271.100003731507801&amp;type=3&amp;comment_id=806692529465123&amp;comment_tracking=%7B%22tn%22%3A%22R%22%7D" data-ft="{&quot;tn&quot;:&quot;N&quot;}" data-testid="ufi_comment_timestamp"><abbr class="livetimestamp" title="18 Th&aacute;ng 5 2016 l&uacute;c 21:31" data-utime="1463581870" data-shorten="true">15 ph&uacute;t</abbr></a></div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div id="addComment_806642806136762" class="UFIRow _4oep UFIAddComment UFIAddCommentWithPhotoAttacher _2o9m" data-ft="{&quot;tn&quot;:&quot;[&quot;}">\n<div class="UFIMentionsInputWrap UFIStickersEnabledInput clearfix">\n<div class="_ohe lfloat">\n<div class="UFIReplyActorPhotoWrapper img _8o _8r UFIImageBlockImage"><img class="img UFIActorImage _54ru img" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/p32x32/13260265_1721198791493737_5193534242128159294_n.jpg?oh=e57f3fd016b019fb907265b032fff189&amp;oe=57DE19D0" alt="Gấu" /></div>\n</div>\n<div class="">\n<div class="UFIImageBlockContent _42ef _8u">\n<div class="UFICommentContainer">\n<div class="UFIInputContainer">\n<div>\n<div class="UFIAddCommentInput _1osb _1osc"><input class="_1osa mentionsHidden" name="add_comment_text" type="text" />Viết b&igrave;nh luận...</div>\n</div>\n<div class="UFICommentAttachmentButtons">\n<div class="_r1a UFIPhotoAttachLinkWrapper _m" data-hover="tooltip" data-tooltip-alignh="center" data-tooltip-content="Đ&iacute;nh k&egrave;m một ảnh hoặc video"><span class="UFICommentPhotoIcon"><input class="_n" title="Đ&iacute;nh k&egrave;m một ảnh hoặc video" accept="video/*, video/webm, video/x-ms-wmv, video/x-msvideo, video/3gpp, video/flv, video/mp4, video/quicktime, video/mpeg, video/ogv, image/*" name="file" type="file" /></span></div>\n<div class="UFICommentStickerIcon" tabindex="0">&nbsp;</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</form></div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div>&nbsp;</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div id="substream_1" class="_4ikz" data-referrer="substream_1">&nbsp;</div>\n<div id="more_pager_pagelet_573c805fb5d1f1501553983" data-referrer="more_pager_pagelet_573c805fb5d1f1501553983">&nbsp;</div>\n<div id="substream_0_573c80656654c1e89953719" class="_4ikz" data-referrer="substream_0_573c80656654c1e89953719">\n<div>\n<div id="u_jsonp_3_1">\n<div>\n<div id="hyperfeed_story_id_573c80658a1434f55198084" class="_5jmm _5pat _3lb4 _x72" data-ft="{&quot;qid&quot;:&quot;6286040326116219724&quot;,&quot;mf_story_key&quot;:&quot;6000708842659380225&quot;,&quot;fbfeed_location&quot;:1,&quot;insertion_position&quot;:2}" data-testid="fbfeed_story" data-cursor="MTQ2MzU4MjgxNToxNDYzNTgyODE1OjM6NjAwMDcwODg0MjY1OTM4MDIyNToxNDYzNTgwNTU0OjA6MDoyNjQw" data-dedupekey="6000708842659380225" data-timestamp="1463580554" data-story_below_count="0" data-snapshot_time_span="2640" data-referrer="hyperfeed_story_id_573c80658a1434f55198084" data-insertion-position="2">\n<div id="u_jsonp_3_2" class="_4-u2 mbm _5v3q _2l4l _4-u8">\n<div id="u_jsonp_3_3" class="_3ccb" data-gt="{&quot;type&quot;:&quot;click2canvas&quot;,&quot;fbsource&quot;:703,&quot;ref&quot;:&quot;nf_generic&quot;}">\n<div>&nbsp;</div>\n<div class="userContentWrapper _5pcr">\n<div class="_1dwg">\n<div class="_4r_y">&nbsp;</div>\n<div id="js_1i" class="_4gns accessible_elem">&nbsp;</div>\n<div class="_5x46">\n<div class="clearfix _5va3">\n<div class="_38vo"><img class="_s0 _5xib _5sq7 _44ma _rw img" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-1/p50x50/13173807_236519626705680_926899217339748542_n.jpg?oh=e9c9e94589de1026fdcdd5edcc11d679&amp;oe=57E6E1D3" alt="" /></div>\n<div class="clearfix _42ef">\n<div class="rfloat _ohf">&nbsp;</div>\n<div class="_5va4">\n<div>\n<div class="_6a _5u5j">\n<div class="_6a _6b">&nbsp;</div>\n<div class="_6a _5u5j _6b">\n<h5 id="js_1j" class="_5pbw" data-ft="{&quot;tn&quot;:&quot;C&quot;}"><span class="fwn fcg"><span class="fwb fcg" data-ft="{&quot;tn&quot;:&quot;;&quot;}"><a href="https://www.facebook.com/suri.quynh.56?fref=nf" data-hovercard="/ajax/hovercard/user.php?id=100010429328726&amp;extragetparams=%7B%22fref%22%3A%22nf%22%7D">Quỳnh Suri</a></span></span></h5>\n<div class="_5pcp"><span class="fsm fwn fcg"><a class="_5pcq" href="https://www.facebook.com/photo.php?fbid=241179956239647&amp;set=a.110744822616495.1073741828.100010429328726&amp;type=3" target="" rel="theater"><abbr class="_5ptz timestamp livetimestamp" title="18 Th&aacute;ng 5 2016 l&uacute;c 21:09" data-utime="1463580554" data-shorten="1"><span id="js_1k" class="timestampContent">37 ph&uacute;t</span></abbr></a> &middot; <a class="_5pcq" href="https://www.facebook.com/pages/Th%C3%A1i-Nguy%C3%AAn-th%C3%A0nh-ph%E1%BB%91/103998542969809" data-hovercard="/ajax/hovercard/page.php?id=103998542969809">Th&aacute;i Nguy&ecirc;n (th&agrave;nh phố)</a></span> &middot;\n<div class="_6a _29ee _4f-9 _43_1" data-hover="tooltip" data-tooltip-content="Đ&atilde; chia sẻ với: Mọi người">&nbsp;</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div id="js_1l" class="_5pbx userContent" data-ft="{&quot;tn&quot;:&quot;K&quot;}">\n<p>Đ&uacute;ng cũng được, sai cũng được<br />Chỉ đơn giản giờ bạn nữ ấy mu&ocirc;n được b&igrave;nh y&ecirc;n <em class="_3kkw _4-k1"><span class="accessible_elem">????</span></em><em class="_3kkw _4-k1"><span class="accessible_elem">????</span></em><em class="_3kkw _4-k1"><span class="accessible_elem">????</span></em></p>\n<div class="_5wpt">&nbsp;</div>\n</div>\n<div class="_3x-2">\n<div data-ft="{&quot;tn&quot;:&quot;H&quot;}">\n<div class="mtm">\n<div class="_5cq3" data-ft="{&quot;tn&quot;:&quot;E&quot;}">\n<div id="u_jsonp_3_6" class="uiScaledImageContainer _4-ep"><img class="scaledImageFitHeight img" src="https://scontent-sit4-1.xx.fbcdn.net/v/t1.0-0/p296x100/13256504_241179956239647_8764017791795610833_n.jpg?oh=e0786af7fafc0d4375918dd12c782ce7&amp;oe=57A34673" alt="Ảnh của Quỳnh Suri." width="296" height="394" /></div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>', '2016-05-17 19:44:29', '2016-05-18 07:48:59'),
(3, 6, '<div>C&aacute;c em ngeh đoạn hội thoại v&agrave; xem c&aacute;c bạn trong hội thoại muốn hỏi <span style="color: #ff0000;">C&aacute;i n&agrave;y l&agrave; g&igrave;? <span style="color: #0000ff;">C&aacute;i kia l&agrave; g&igrave;?</span></span> thfi n&oacute;i với nhau như thế n&agrave;o nh&eacute; !</div>\n<div>Một số mẫu c&acirc;u hỏi c&aacute;c em cần nhớ!</div>\n<div><span style="color: #ff0000;">What''s this ?</span> <span style="color: #0000ff;">(C&aacute;i n&agrave;y l&agrave; g&igrave; ?)</span></div>\n<div><span style="color: #ff0000;"><span style="color: #000000;">Trả lời:</span> This''s book</span>. <span style="color: #0000ff;">(Đ&acirc;y l&agrave; s&aacute;ch)</span></div>\n<div>\n<div><span style="color: #ff0000;">What''s that&nbsp;?</span> <span style="color: #0000ff;">(C&aacute;i kia&nbsp;l&agrave; g&igrave; ?)</span></div>\n<div><span style="color: #ff0000;"><span style="color: #000000;">Trả lời:</span> That''s book</span>. <span style="color: #0000ff;">(Đ&acirc;y l&agrave; s&aacute;ch)</span></div>\n</div>\n<div><iframe src="https://www.youtube.com/embed/Os3RY8mNwHc" width="1094" height="615" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>', '2016-05-17 19:52:35', '2016-05-30 21:54:12'),
(5, 7, '<div>&nbsp;</div>\n<div>Trong b&agrave;i học h&ocirc;m nay, ch&uacute;ng ta l&agrave;m quen với mẫu c&acirc;u hỏi <strong>Yes/No Question ?</strong></div>\n<div><span style="color: #993300;">D&ugrave;ng để hỏi về h&igrave;nh dạng hoặc&nbsp;nhận dạng về một người, một nơi chốn hoặc đồ vật n&agrave;o đ&oacute; .</span></div>\n<div><span style="color: #000000;"><strong>Cấu tr&uacute;c dạng c&acirc;u hỏi n&agrave;y:</strong></span></div>\n<div style="text-align: center;">\n<table style="height: 43px;" width="335">\n<tbody>\n<tr>\n<td>Is/<span style="color: #ff0000;">Are</span> + It/<span style="color: #ff0000;">they</span> + Noun <span style="color: #ff0000;">?</span></td>\n</tr>\n</tbody>\n</table>\n<div style="text-align: left;">C&acirc;u trả lời: <span style="color: #ff0000;">Yes, it is</span>. hoặc<span style="color: #800080;"> No, it isn''t</span> <span style="color: #993300;">(Đối với số &iacute;t)</span></div>\n<div style="text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ff0000;">&nbsp;Yes, they are</span> hoặc<span style="color: #0000ff;"> No, they aren''t</span> <span style="color: #993300;">(đối với số nhiều)</span></div>\n<div style="text-align: left;"><span style="color: #993300;">V&iacute; dụ:<span style="color: #000000;"><strong> Is it&nbsp;a plane?</strong></span> <span style="color: #0000ff;"><span style="color: #000000;">(N&oacute; l&agrave; m&aacute;y bay hả ?</span>)</span></span></div>\n<div style="text-align: left;"><span style="color: #993300;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Trả lời: <span style="color: #000000;"><span style="color: #0000ff;">Yes, it is</span> (V&acirc;ng, đ&uacute;ng rồi)</span></span></div>\n<div style="text-align: left;"><span style="color: #000000;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: #800080;"> No, It isn''t</span> (Kh&ocirc;ng, kh&ocirc;ng phải)</span></div>\n<div style="text-align: left;">*********</div>\n<div style="text-align: left;">\n<div style="text-align: left;"><span style="color: #993300;"><span style="color: #000000;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Are they bears?</strong></span> <span style="color: #0000ff;"><span style="color: #000000;">(Ch&uacute;ng l&agrave; gấu&nbsp;hả ?</span>)</span></span></div>\n<div style="text-align: left;"><span style="color: #993300;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Trả lời: <span style="color: #000000;"><span style="color: #0000ff;">Yes, they are</span>&nbsp;(V&acirc;ng, đ&uacute;ng rồi)</span></span></div>\n<div style="text-align: left;"><span style="color: #000000;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: #800080;"> No, they aren''t</span>&nbsp;(Kh&ocirc;ng, kh&ocirc;ng phải)</span></div>\n<div style="text-align: left;"><span style="color: #000000;"><iframe src="https://www.youtube.com/embed/Xn058zjoOYc" width="1003" height="752" frameborder="0" allowfullscreen="allowfullscreen"></iframe></span></div>\n</div>\n</div>', '2016-05-17 20:33:20', '2016-05-30 22:08:16'),
(6, 5, '<div><strong><span style="color: #ff0000;">Red <span style="color: #0000ff;">(M&agrave;u đỏ)<img style="width: 12%;" src="filemanager/userfiles/Untitled4.png" alt="" width="129" height="271" /></span></span></strong></div>\n<div><strong><span style="color: #ff0000;">Blue</span> <span style="color: #0000ff;">(M&agrave;u xanh)</span><img style="width: 12%;" src="filemanager/userfiles/bv.png" alt="" width="101" height="232" /></strong></div>\n<div><strong><span style="color: #ff0000;">Yellow</span> <span style="color: #0000ff;">(M&agrave;u v&agrave;ng)</span><img style="width: 12%;" src="filemanager/userfiles/x.png" alt="" width="88" height="202" /></strong></div>\n<div><strong><span style="color: #ff0000;">Stop</span> <span style="color: #0000ff;">(Dừng lại)</span><img style="width: 12%;" src="filemanager/userfiles/unnamed.png" alt="" width="179" height="179" /><span style="color: #ff0000;">&nbsp;</span></strong></div>\n<div><strong><span style="color: #ff0000;">Go</span><span style="color: #0000ff;">(Đi tiếp)<img style="width: 12%;" src="filemanager/userfiles/1434326141467upload_000152381.jpg" alt="" width="204" height="203" /></span></strong></div>\n<div>&nbsp;</div>\n<div>V&agrave; mẫu c&acirc;u hỏi: <strong><span style="color: #ff0000;">What color is it ?</span> <span style="color: #0000ff;">(Đ&acirc;y l&agrave; m&agrave;u g&igrave; ?)</span></strong></div>\n<div>C&acirc;u trả lời:<strong> <span style="color: #ff0000;">It''s red.</span> <span style="color: #0000ff;">(N&oacute; m&agrave;u đỏ)</span></strong></div>\n<div><strong><span style="color: #0000ff;"><iframe src="https://www.youtube.com/embed/sS6Q-KSCG5A" width="1094" height="615" frameborder="0" allowfullscreen="allowfullscreen"></iframe></span></strong></div>\n<div>&nbsp;</div>', '2016-05-19 05:58:48', '2016-05-30 21:49:01'),
(14, 14, '<div>Ch&uacute;ng ta c&ugrave;ng &ocirc;n lại b&agrave;i cũ nha c&aacute;c em !</div>\n<div><span style="background-color: #993366;">1</span>. C&acirc;u hỏi bắt đầu bằng Where (ở đ&acirc;u)...gọi alf dạng c&acirc;u hỏi th&ocirc;ng tin v&igrave; ch&uacute;ng ta sẽ pahir cung cấp người hỏi. Những từu n&agrave;y lu&ocirc;n đứng ở đầu c&acirc;u hỏi. Khi n&oacute;i ch&uacute;ng ta xuống&nbsp;giọng ở cuối c&acirc;u.</div>\n<div><strong><span style="color: #993366;">Mẫu c&acirc;u:</span></strong></div>\n<div>\n<table style="height: 37px;" width="162">\n<tbody>\n<tr>\n<td><span style="color: #000080;"><strong>where</strong></span> + <span style="color: #ff0000;">be</span>(is/are) + <span style="color: #ff0000;">S ?</span></td>\n</tr>\n</tbody>\n</table>\n<div>Trả lời: <span style="color: #0000ff;">S + be + từ/ cụm từ chỉ nơi chốn.</span>&nbsp;</div>\n<div>V&iacute; dụ:&nbsp;<span style="color: #ff6600;">Where''s your Grandma?</span> (b&agrave; của bạn ở đ&acirc;u vậy?)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #33cccc;">&nbsp;She is i the kitchen</span> (b&agrave; ở trong nh&agrave; bếp)</div>\n<div>Khi c&aacute;c em muốn x&aacute;c định th&ocirc;ng tin cần hỏi c&oacute; đ&uacute;ng hay kh&ocirc;ng, th&igrave; ch&uacute;ng ta sử dụng c&acirc;u hỏi Yes/No Question.</div>\n<div>V&iacute; dụ: Is he in his bedroom? (Anh ấy ở trong ph&ograve;ng ngủ phải kh&ocirc;ng?)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Yes, he is (V&acirc;ng, đ&uacute;ng rồi)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;No, he isn''t (Kh&ocirc;ng, kh&ocirc;ng c&oacute;)</div>\n<div><span style="color: #993366;">2</span>. SỞ HỮU C&Aacute;CH (Possessive Case) (hoặc c&ograve;n gọi l&agrave; sở hữu danh từ)</div>\n<div><span style="color: #993366;"><strong>C&ocirc;ng thức:</strong></span></div>\n<div>\n<table style="height: 41px;" width="380">\n<tbody>\n<tr>\n<td>&nbsp;<span style="color: #ff6600;"><span style="color: #800080;">Người l&agrave;m chủ</span> + ''S + <span style="color: #00ff00;">vật/người thuộc quyền sở hữu</span></span></td>\n</tr>\n</tbody>\n</table>\n<div>V&iacute; dụ:<span style="color: #000080;"> Mary''s shirt</span> (&Aacute;o sơ mi của Mary)</div>\n<div><span style="color: #33cccc;">Tom''s Father</span> (Cha của Tom)</div>\n<div><span style="color: #ff6600;">These are Billy''s shoes</span> (Đ&acirc;y l&agrave; đ&ocirc;i gi&agrave;y của Billy)</div>\n<div>C&aacute;c em nghe đoạn hội thoại sau để biết c&aacute;c bạn sử dụng nhwunxg điểm ngữu ph&aacute;p n&agrave;y như thế n&agrave;o nh&eacute;.</div>\n<div><iframe src="https://www.youtube.com/embed/qK9deRZJ-w8" width="1003" height="752" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>\n</div>\n</div>', '2016-05-20 00:36:41', '2016-05-30 23:27:21'),
(15, 9, '<div>Trong đoạn hội thoại This is my father, c&aacute;c em nghe bạn Feddie v&agrave; Lisa giưới thiệu về c&aacute;c th&agrave;nh vi&ecirc;n trong gia đ&igrave;nh của 2 bạn nha. :)</div>\n<div>Những c&acirc;u sau c&aacute;c em cần nhớ.&nbsp;</div>\n<div><strong><span style="color: #ff0000;">This is my sister,Lisa.</span><span style="color: #0000ff;">( Đ&acirc;y l&agrave; em g&aacute;i của t&ocirc;i, Lisa)</span></strong></div>\n<div><strong><span style="color: #ff0000;">Feddie is my brother.</span> <span style="color: #0000ff;">(Feddie l&agrave; anh&nbsp;trai của t&ocirc;i)</span></strong></div>\n<div><strong><span style="color: #ff0000;">This is my father</span> <span style="color: #0000ff;">( Đ&acirc;y l&agrave; bố t&ocirc;i)</span></strong></div>\n<div><strong><span style="color: #ff0000;">This is my mother</span> <span style="color: #0000ff;">( Đ&acirc;y l&agrave; mẹ&nbsp;t&ocirc;i)</span></strong></div>\n<div><strong>* Lưu &yacute;</strong>: trong b&agrave;i c&ograve;n c&oacute; c&aacute;c từ:<span style="color: #ff0000;">Grandpa</span> <span style="color: #0000ff;">(&ocirc;ng nội/ &ocirc;ng ngoại)</span>, <span style="color: #ff0000;">Grandma</span><span style="color: #0000ff;">(b&agrave; nội/ b&agrave; ngoại)</span>, <span style="color: #ff0000;">uncle</span> <span style="color: #0000ff;">(ch&uacute;/ cậu)</span>, <span style="color: #ff0000;">ant</span> <span style="color: #0000ff;">(c&ocirc;/ d&igrave;)</span></div>\n<div><span style="color: #0000ff;"><iframe src="https://www.youtube.com/embed/9ubRJp9DufQ" width="1004" height="753" frameborder="0" allowfullscreen="allowfullscreen"></iframe></span></div>', '2016-05-30 07:34:30', '2016-05-30 22:16:51'),
(16, 10, '<div>Khi c&aacute;c em muốn hỏi về t&igrave;nh trạng của 1 ai đ&oacute; như thế n&agrave;o thfi ta dunfgc ấu tr&uacute;c c&acirc;u:</div>\n<div>\n<table style="height: 21px;" width="190">\n<tbody>\n<tr>\n<td><span style="color: #ff0000;">How</span> +<span style="color: #ff0000;"> is</span>/<span style="color: #cc99ff;">are</span> +<span style="color: #ff0000;"> she(he)</span>/ <span style="color: #cc99ff;">you</span><span style="color: #ff0000;"> ?</span></td>\n</tr>\n</tbody>\n</table>\n<div>V&iacute; dụ: <span style="color: #ff0000;">How is she ?</span> <span style="color: #0000ff;">(C&ocirc; ấy nhưu thế n&agrave;o?)</span></div>\n<div>C&acirc;u trả lời:<span style="color: #ff0000;"> She is cold</span> <span style="color: #0000ff;">(C&ocirc; ấy lạnh)</span></div>\n<div>B&acirc;y giờ c&aacute;c em xem đoạn hội thoại How are you today? để nghe c&aacute;c bạn hỏi về trạng th&aacute;i của c&aacute;c bạn ng&agrave;y h&ocirc;m nay như thế n&agrave;o nh&eacute; !</div>\n<div><strong>C&acirc;u hỏi v&agrave;&nbsp;c&acirc;u trả lời c&aacute;c em cần nhớ:&nbsp;</strong></div>\n<div><span style="color: #0000ff;"><span style="color: #ff0000;">How are you today ?</span> (H&ocirc;m nay bạn thấy thế n&agrave;o?)</span></div>\n<div><span style="color: #0000ff;"><span style="color: #ff0000;">I''m happy</span> (T&ocirc;i rất vui vẻ)</span></div>\n<div><span style="color: #0000ff;"><iframe src="https://www.youtube.com/embed/hEipTvObf68" width="1004" height="565" frameborder="0" allowfullscreen="allowfullscreen"></iframe></span></div>\n<div>&nbsp;</div>\n</div>', '2016-05-30 07:35:43', '2016-05-30 22:38:27'),
(17, 11, '<div>Những con vật trong sở th&uacute; c&aacute;c em đ&atilde; biết t&ecirc;n chưa? Nếu chưa thfi ta sẽ hỏi nhưu thế n&agrave;o nhỉ? trong những con vật đ&oacute; em th&iacute;ch nhất l&agrave; những con n&agrave;o? Để trả lời c&acirc;u hỏi đ&oacute;, c&aacute;c em h&atilde;y xem đoạn hội thoại sau nh&eacute;!</div>\n<div><strong><span style="color: #000000;">C&acirc;u hỏi v&agrave; từ mới cần nhớ !&nbsp;</span></strong></div>\n<div><span style="color: #ff0000;">Welcome to....!</span> <span style="color: #0000ff;">(Ch&agrave;o mừng đến với....)</span></div>\n<div><span style="color: #ff0000;">What animal is that?</span> <span style="color: #0000ff;">(Đ&oacute; l&agrave; con vật g&igrave;?)</span></div>\n<div><strong><span style="color: #000000;">It''s a panda</span></strong> (N&oacute; l&agrave; 1 con gấu tr&uacute;c )</div>\n<div>Để biết con vật ăn thứ g&igrave; c&aacute;c em sẽ hỏi c&acirc;u sau:&nbsp;</div>\n<div><span style="color: #ff0000; background-color: #ffffff;">What do they eat ? </span><span style="color: #0000ff;">(Ch&uacute;ng ăn g&igrave;?)</span></div>\n<div><span style="color: #0000ff;">Pandas eat bamboo leaves</span> <span style="color: #000000;">(Gấu tr&uacute;c thfi ăn l&aacute; c&acirc;y tre)</span></div>\n<div><span style="color: #000000;"><iframe src="https://www.youtube.com/embed/Amtrv2DxSi8" width="1003" height="752" frameborder="0" allowfullscreen="allowfullscreen"></iframe></span></div>\n<div>&nbsp;</div>', '2016-05-30 07:36:16', '2016-05-30 22:45:31'),
(18, 12, '<div>Trong b&agrave;i học n&agrave;y, c&aacute;c em &ocirc;n lại những c&acirc;u hỏi về t&ecirc;n: <span style="color: #ff0000;"><strong>What''s your name?</strong></span> <span style="color: #0000ff;">(Bạn t&ecirc;n l&agrave; g&igrave;?)</span></div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: #ff0000;"><strong>My name is Rosy </strong><span style="color: #0000ff;">(T&ocirc;i t&ecirc;n l&agrave; Rosy)</span></span></div>\n<div><span style="color: #ff0000;"><span style="color: #0000ff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; C&acirc;u hỏi về sức khỏe: <span style="color: #000080; background-color: #ffffff;"><strong>How are you?</strong></span> <span style="color: #800080;">(Bạn c&oacute; khỏe kh&ocirc;ng ?)</span></span></span></div>\n<div><span style="color: #ff0000;"><span style="color: #0000ff;"><span style="color: #800080;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: #000080;"><strong>I''m fine, thank you</strong></span> (T&ocirc;i khỏe, cảm ơn bạn)</span></span></span></div>\n<div>\n<div><span style="color: #ff0000;"><span style="color: #0000ff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;C&acirc;u hỏi về tuổi:&nbsp;<span style="color: #000080; background-color: #ffffff;"><strong>How old are you?</strong></span> <span style="color: #800080;">(Bạn c&oacute; khỏe kh&ocirc;ng ?)</span></span></span></div>\n<div><span style="color: #ff0000;"><span style="color: #0000ff;"><span style="color: #800080;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: #000080;"><strong>I''m twelve</strong></span>&nbsp;(T&ocirc;i 12 tuổi)</span></span></span></div>\n<div>&nbsp;</div>\n<span style="color: #ff0000;"><span style="color: #0000ff;"><span style="color: #800080;">C&aacute;c em nghe v&agrave; tập&nbsp;v&agrave;o vai của c&aacute; nh&acirc;n&nbsp;vật trong hội thoại sau nh&eacute; ! &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></span></span></div>\n<div>&nbsp; &nbsp;&nbsp;<iframe src="https://www.youtube.com/embed/CPDu8vyu8fA" width="987" height="740" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>', '2016-05-30 07:37:08', '2016-05-30 22:53:58'),
(19, 12, '<div><iframe src="https://www.youtube.com/embed/BAiM0EXaVlM" width="420" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>', '2016-05-30 07:37:56', '2016-05-30 07:37:56'),
(20, 13, '<div><iframe src="https://www.youtube.com/embed/QlG2WEYC_iA" width="420" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>', '2016-05-30 07:39:07', '2016-05-30 07:39:07'),
(21, 13, '<div><iframe src="https://www.youtube.com/embed/QlG2WEYC_iA" width="420" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>', '2016-05-30 07:40:37', '2016-05-30 07:40:37'),
(22, 28, '<div>C&aacute;c em nghe đoạn hội thoại v&agrave; xem c&aacute;c bạn trong hội thoại muốn hỏi <span style="color: #ff0000;">C&aacute;i n&agrave;y l&agrave; g&igrave;? <span style="color: #0000ff;">C&aacute;i kia l&agrave; g&igrave;?</span></span> th&igrave;&nbsp;n&oacute;i với nhau như thế n&agrave;o nh&eacute; !</div>\n<div><strong>Một số mẫu c&acirc;u hỏi c&aacute;c em cần nhớ!</strong></div>\n<div><span style="color: #ff0000;">What''s this ?</span> <span style="color: #0000ff;">(C&aacute;i n&agrave;y l&agrave; g&igrave; ?)</span></div>\n<div><span style="color: #ff0000;"><span style="color: #000000;">Trả lời:</span> This''s book</span>. <span style="color: #0000ff;">(Đ&acirc;y l&agrave; s&aacute;ch)</span></div>\n<div>\n<div><span style="color: #ff0000;">What''s that&nbsp;?</span> <span style="color: #0000ff;">(C&aacute;i kia&nbsp;l&agrave; g&igrave; ?)</span></div>\n<div><span style="color: #ff0000;"><span style="color: #000000;">Trả lời:</span> That''s pen</span>. <span style="color: #0000ff;">(Đ&acirc;y l&agrave; b&uacute;t)</span></div>\n<div><span style="color: #0000ff;"><span style="color: #000000;">Một số từ trong b&agrave;i c&aacute;c em c&agrave;n nhớ:</span> <span style="color: #ff6600;">Rubber</span> <span style="color: #000000;">(cục tẩy)</span><img style="width: 62px; height: 88px;" src="filemanager/userfiles/timthumb.jpg" alt="" width="300" height="300" /></span></div>\n<div><span style="color: #0000ff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: #993366;">Pencil</span> <span style="color: #000000;">(B&uacute;t ch&igrave;)</span>&nbsp;<img class="" src="filemanager/userfiles/images.jpg" alt="" width="56" height="56" /></span></div>\n<div><span style="color: #0000ff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ff00ff;">&nbsp;Ruler</span> <span style="color: #000000;">(thước kẻ)</span>&nbsp;<img class="" src="filemanager/userfiles/e.jpg" alt="" width="59" height="59" /></span></div>\n<div><span style="color: #000000;">C&aacute;c em c&ugrave;ng nghe nội dung đoạn hội thoại sau n&oacute;i như thế n&agrave;o nh&eacute; !</span></div>\n<div><span style="color: #000000;"><iframe src="https://www.youtube.com/embed/E0LWjaOVFVs" width="702" height="526" frameborder="0" allowfullscreen="allowfullscreen"></iframe></span></div>\n<div>&nbsp;</div>\n</div>', '2016-05-30 07:47:46', '2016-05-30 23:10:30'),
(23, 29, '<div>B&agrave;i học h&ocirc;m nay c&aacute;c em sẽ học 1 số từ mới: <span style="color: #ff0000;">Doll</span><img class="" src="filemanager/userfiles/doll-18.jpg" alt="" width="117" height="117" /><span style="color: #800080;">(b&uacute;p b&ecirc;)</span></div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: #ff6600;">ball</span><img class="" src="filemanager/userfiles/45445a21484c1b.img.jpg" alt="" width="84" height="87" /><span style="color: #800080;">Quả b&oacute;ng</span></div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: #0000ff;">teddy</span><img class="" src="filemanager/userfiles/d.jpg" alt="" width="100" height="100" /><span style="color: #800080;">gấu b&ocirc;ng</span></div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #00ff00;">&nbsp;puzzle</span><img class="" src="filemanager/userfiles/df.jpg" alt="" width="112" height="84" /><span style="color: #800080;">lắp h&igrave;nh</span></div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ff00ff;">&nbsp;car</span>&nbsp;<img class="" src="filemanager/userfiles/jh.jpg" alt="" width="114" height="57" />&nbsp;<span style="color: #800080;">&ocirc;&nbsp;t&ocirc;</span></div>\n<div>V&agrave; dạng c&acirc;u hỏi:\n<table style="height: 27px;" width="127">\n<tbody>\n<tr>\n<td><strong><span style="color: #ff0000;">Is this your</span> + <span style="color: #0000ff;">S</span> <span style="color: #ff0000;">?</span></strong></td>\n</tr>\n</tbody>\n</table>\n&nbsp;Đ&acirc;y l&agrave;.... của bạn hả ?</div>\n<div>&nbsp;</div>\n<div>C&acirc;u trả lời:<span style="color: #3366ff;"><strong> Yes, it is</strong></span> (đ&uacute;ng rồi,n&oacute; l&agrave; của t&ocirc;i)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: #ff9900;"><strong>No, It isn''t</strong></span> (kh&ocirc;ng phải l&agrave; của t&ocirc;i)</div>\n<div><strong>V&iacute; dụ:</strong><span style="color: #008000;">&nbsp;<strong>Is this teddy ?</strong></span> (Đ&acirc;y l&agrave; con gấu của bạn c&oacute; phải k? )</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #3366ff;">&nbsp;<strong>Yes, it is</strong></span> (v&acirc;ng, đ&uacute;ng rồi)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong><span style="color: #ffcc00;">No, it isn''t</span></strong> (kh&ocirc;ng, kh&ocirc;ng phải)</div>\n<div>C&aacute;c em xem đoạn hội thoại sau v&agrave; tự m&igrave;nh đ&oacute;ng một nh&acirc;n vật trong đ&oacute; nh&eacute; !</div>\n<div><iframe src="https://www.youtube.com/embed/PCek5BBh-Sg" width="1003" height="752" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>\n<div>&nbsp;</div>', '2016-05-30 07:48:14', '2016-06-01 03:27:30'),
(24, 30, '<div>Trong b&agrave;i học n&agrave;y c&aacute;c em sẽ được học về c&aacute;ch n&oacute;i <strong><span style="color: #ff0000;">This is.....</span>(Đ&acirc;y l&agrave;) <span style="color: #800080;">d&agrave;nh cho số &iacute;t</span></strong></div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ff0000;">&nbsp;<strong>These are......</strong></span><strong>(Đ&acirc;y l&agrave; ) <span style="color: #800080;">d&agrave;nh cho số nhiều.</span></strong></div>\n<div>C&aacute;c em d&ugrave;ng c&aacute;c c&acirc;u n&agrave;y để giới thiệu về c&aacute;c bộ phận tr&ecirc;n cơ thể m&igrave;nh cho người kh&aacute;c biết.</div>\n<div><strong>V&iacute; dụ:</strong> <strong><span style="color: #ff0000;">This is my <span style="color: #0000ff;">nose</span></span></strong> (Đ&acirc;y l&agrave; c&aacute;i mũi của t&ocirc;i)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong><span style="color: #ff0000;">These are my <span style="color: #0000ff;">arms</span></span></strong> (Đ&acirc;y l&agrave; những c&aacute;nh&nbsp;tay của t&ocirc;i)</div>\n<div>C&aacute;c em v&agrave;o đoạn hội thoại sau v&agrave; thử v&agrave;o vai một nhận vật nh&eacute;.</div>\n<div><iframe src="https://www.youtube.com/embed/LG3DG4E9Ork" width="1003" height="752" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>', '2016-05-30 07:48:36', '2016-06-01 03:24:15');
INSERT INTO `theories` (`id`, `unit_id`, `content`, `created_at`, `updated_at`) VALUES
(25, 31, '<div>Khi c&aacute;c em muốn biết ai đ&oacute; l&agrave;m nghề g&igrave; th&igrave; ch&uacute;ng ta hỏi: <strong><span style="color: #ff0000;">What''s your job ?</span> </strong>(Bạn l&agrave;m nghề g&igrave; ?)</div>\n<div><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ff9900;">I am a teacher</span></strong> (T&ocirc;i l&agrave; gi&aacute;o vi&ecirc;n)&nbsp;</div>\n<div>c&acirc;u n&agrave;y d&ugrave;ng để ta hỏi trực tiếp người ta cần hỏi.</div>\n<div>C&ograve;n khi c&aacute;c em muốn khẳng định người đ&oacute; c&oacute; l&agrave;m nghề đ&oacute; th&ocirc;ng qua một người thứ ba th&igrave; ta hỏi:</div>\n<div>&nbsp;</div>\n<div>\n<table style="height: 38px;" width="446">\n<tbody>\n<tr>\n<td><span style="color: #ff0000;"><strong>&nbsp;Is<span style="color: #99cc00;"><span style="color: #ff9900;">(he/she</span>)</span> + <span style="color: #0000ff;">a/an</span> + <span style="color: #339966;">nghề nghiệp của người cần hỏi</span> ?</strong></span></td>\n</tr>\n</tbody>\n</table>\n<strong>V&iacute; dụ:</strong> Is he a doctor ? (Anh ấy c&oacute; phải l&agrave; b&aacute;c sĩ kh&ocirc;ng?)</div>\n<div><strong>C&acirc;u trả lời:</strong> <strong><span style="color: #0000ff;">yes, he is</span></strong> (Đ&uacute;ng, phải rồi)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #ff6600;">&nbsp;&nbsp;<strong>no, he isn''t</strong></span> (Kh&ocirc;ng, kh&ocirc;ng phải)</div>\n<div>C&aacute;c em c&ugrave;ng nghe c&aacute;c đoạn hội thoại sau nh&eacute; :</div>\n<div>&nbsp;<iframe src="https://www.youtube.com/embed/DEFFefdDuSc" width="1004" height="753" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>\n<div>&nbsp;</div>', '2016-05-30 07:49:08', '2016-06-01 03:37:59'),
(26, 15, '<div>Trong b&agrave;i n&agrave;y c&aacute;c em sẽ học về c&aacute;ch sử dụng của <strong><span style="color: #ff6600;">has</span><span style="color: #ff9900;">/<span style="color: #00ff00;">have</span></span><span style="color: #0000ff;"> got</span></strong> (c&oacute; nghĩa l&agrave; <strong>C&Oacute;</strong>)</div>\n<div>T&ugrave;y theo chủ ngữ m&agrave; <strong><span style="color: #00ff00;">have</span><span style="color: #ff6600;">/has</span> <span style="color: #0000ff;">got</span></strong> được d&ugrave;ng, cụ thể l&agrave;:</div>\n<div><img class="" src="filemanager/userfiles/Capture1.PNG" alt="" width="444" height="228" /></div>\n<div><strong>V&iacute; dụ: <span style="color: #0000ff;">I <span style="color: #00ff00;">have got</span> a new friend</span> </strong>(T&ocirc;i c&oacute; 1 người bạn mới)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong><span style="color: #ff6600;">she <span style="color: #00ff00;">has got</span> curly hair</span></strong> (C&ocirc; ấy c&oacute; m&aacute;i t&oacute;c quăn)</div>\n<div>+ Trong c&acirc;u phủ định th&igrave; cấu tr&uacute;c với <strong><span style="color: #00ff00;">have/has</span></strong> got l&agrave;:<strong><span style="color: #00ccff;"> S + have/has not + got...</span></strong></div>\n<div>+ Trong c&acirc;u nghi vấn&nbsp;th&igrave; cấu tr&uacute;c với <span style="color: #000080;"><strong>have/has</strong></span> got l&agrave;: <strong><span style="color: #000080;">Have/has + S + got ?</span></strong></div>\n<div><strong>V&iacute; dụ:</strong> <span style="color: #339966;"><strong>Has she got blue eyes ?</strong> </span>C&ocirc; ấy c&oacute; đ&ocirc;i mắt xanh phải kh&ocirc;ng ?</div>\n<div>C&aacute;c em c&ugrave;ng nghe đoạn hội thoại để xem c&aacute;ch sử dụng của <strong><span style="color: #993300;">have/has</span></strong> got nha :)</div>\n<div><iframe src="https://www.youtube.com/embed/n_V95owbh_8" width="1003" height="752" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>\n<div>&nbsp;</div>\n<div>&nbsp;</div>', '2016-05-30 07:52:38', '2016-06-01 03:53:22'),
(27, 16, '<div>&nbsp; &nbsp; Trong b&agrave;i n&agrave;y c&aacute;c em sẽ học về c&aacute;ch sử dụng của <strong><span style="color: #ff6600;">like</span></strong>&nbsp;(c&oacute; nghĩa l&agrave; <strong>th&iacute;ch</strong>) đ&oacute;ng vai tr&ograve; l&agrave; 1 động từ trong c&acirc;u.</div>\n<div><strong>V&iacute; dụ</strong>: <strong><span style="color: #0000ff;">I <span style="color: #ff6600;">like</span> animals</span></strong> (t&ocirc;i th&iacute;ch động vật)</div>\n<div>&nbsp; &nbsp; V&igrave; like l&agrave; động từ n&ecirc;n khi chủ ngữ trong c&acirc;u l&agrave; <span style="color: #800080;"><strong>She/ he/ it</strong></span> c&aacute;c em nhớ th&ecirc;m <strong><span style="color: #00ffff;">"s"</span></strong> v&agrave;o đằng sau <strong><span style="color: #ff6600;">like</span></strong> nh&eacute;. :)</div>\n<div><strong>V&iacute; dụ</strong>:<strong> <span style="color: #0000ff;">she<span style="color: #ff6600;">&nbsp;likes</span> animals</span></strong> (c&ocirc; ấy&nbsp;th&iacute;ch động vật)</div>\n<div>&nbsp; &nbsp; Nếu c&aacute;c em muốn n&oacute;i m&igrave;nh kh&ocirc;ng th&iacute;ch c&aacute;i g&igrave; đ&oacute; ch&uacute;ng ta chỉ việc th&ecirc;m từ <strong><span style="color: #339966;">"Don''t"</span></strong> v&agrave;o trước từ<strong><span style="color: #ff6600;"> like</span> </strong>l&agrave; được:</div>\n<div><strong>V&iacute; dụ</strong>: <strong><span style="color: #0000ff;">I <span style="color: #339966;">don''t</span><span style="color: #ff6600;"> like</span> animals</span></strong> (t&ocirc;i kh&ocirc;ng th&iacute;ch động vật)</div>\n<div>&nbsp; &nbsp; C&aacute;c em nghe đoạn hội thoại sauddeer xem bạn Rosy v&agrave; Billy sử dụng từ <strong><span style="color: #ff6600;">like</span></strong> nhưu thế n&agrave;o nha :)</div>\n<div><iframe src="https://www.youtube.com/embed/YIk4PFWDE_M" width="1003" height="752" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>', '2016-05-30 07:53:22', '2016-06-01 04:02:28'),
(28, 17, '<div>Trong b&agrave;i học lần trước c&aacute;c em đ&atilde; học c&aacute;ch sử dụng của từ <span style="color: #ff6600;">like</span> trong thể khẳng định v&agrave; phủ định, trong b&agrave;i n&agrave;y ch&uacute;ng ta tiếp tục học c&aacute;ch sử dụng của từ <span style="color: #ff6600;">like</span> nhưng&nbsp;ở thể nghi vấn:</div>\n<div>Ở thể nghi vấn c&aacute;c em mượn trợ động từ <span style="color: #0000ff;">Do/ Does</span> (t&ugrave;y theo ng&ocirc;i của&nbsp;chủ ngữ) đặt ở đầu c&acirc;u v&agrave; động từ <span style="color: #ff6600;">like</span> trở về dạng nguy&ecirc;n mẫu:&nbsp;</div>\n<div>Cấu tr&uacute;c c&acirc;u dạng n&agrave;y l&agrave;:&nbsp;</div>\n<div>\n<table style="height: 33px;" width="224">\n<tbody>\n<tr>\n<td><span style="color: #800080;"><strong><span style="color: #ff6600;">Do/does</span> + S +<span style="color: #00ff00;"> like</span> + Noun ?</strong></span></td>\n</tr>\n</tbody>\n</table>\n<div>C&acirc;u trả lời sẽ l&agrave;: <strong><span style="color: #0000ff;">Yes, i do</span></strong> hoặc <strong><span style="color: #339966;">Yes, she/he does</span></strong> (t&ugrave;y theo ng&ocirc;i m&agrave; sử dụng)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong><span style="color: #0000ff;">No, i don''t</span> </strong>hoặc <strong><span style="color: #339966;">No, she/he doesn''t</span>&nbsp;</strong>(t&ugrave;y theo ng&ocirc;i m&agrave; sử dụng)</div>\n<div><strong>V&iacute; dụ: <span style="color: #ff6600;">Do you like fish ?</span></strong> Bạn c&oacute; th&iacute;ch c&aacute; kh&ocirc;ng ?</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong><span style="color: #0000ff;">Yes, I do</span> </strong>&nbsp;C&oacute;, t&ocirc;i th&iacute;ch</div>\n<div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong><span style="color: #ff6600;"> Does he like fish ?</span></strong> Bạn c&oacute; th&iacute;ch c&aacute; kh&ocirc;ng ?</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong><span style="color: #0000ff;">No,&nbsp;he doesn''t</span></strong>&nbsp;Kh&ocirc;ng, c&ocirc; ấy kh&ocirc;ng th&iacute;ch.</div>\n<div>C&aacute;c em c&ugrave;ng nghe đoạn hội thoại sau nh&eacute;. :)</div>\n<div><iframe src="https://www.youtube.com/embed/86Uuot-iEy8" width="1003" height="752" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>\n</div>\n</div>', '2016-05-30 07:53:54', '2016-06-01 04:13:42'),
(29, 18, '<div>H&ocirc;m nay c&aacute;c em sẽ học c&aacute;ch sử dụng <span style="color: #0000ff;"><strong>There is</strong> <span style="color: #000000;">v&agrave;</span> <strong><span style="color: #ff00ff;">There are</span></strong></span> (nghĩa l&agrave; <strong>C&Oacute;</strong>)</div>\n<div>Cấu tr&uacute;c c&acirc;u there is v&agrave; there are l&agrave;:&nbsp;</div>\n<div><img class="" src="filemanager/userfiles/ff.PNG" alt="" width="535" height="127" /></div>\n<div>Cấu tr&uacute;c n&agrave;y d&ugrave;ng để giới thiệu c&oacute; c&aacute;i g&igrave; hoặc ai đ&oacute; ở đ&acirc;u trong hiện tại.</div>\n<div><strong>V&iacute; dụ: <span style="color: #ff6600;">There is a dog in the rug</span></strong> (C&oacute; 1 con ch&oacute; tr&ecirc;n tấm&nbsp;thảm)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #0000ff;">&nbsp;<strong>There are dog in the rug</strong></span> (C&oacute; những&nbsp;con ch&oacute; tr&ecirc;n tấm&nbsp;thảm)</div>\n<div><strong>*Lưu &yacute;:&nbsp;</strong></div>\n<div>+ Trước danh từ số &iacute;t d&ugrave;ng <strong><span style="color: #800080;">a/an/one</span></strong></div>\n<div>+&nbsp; Trước danh từ số &iacute;t kh&ocirc;ng đếm được d&ugrave;ng<span style="color: #800080;"> a/an</span> nhưng c&oacute; thể th&ecirc;m <strong><span style="color: #ff0000;">no, a litter, litter, much, a lot of</span></strong></div>\n<div><span style="color: #ff0000;">+ <strong><span style="color: #00ff00;">There is = there''s</span></strong></span></div>\n<div>+<strong> <span style="color: #993300;">There are</span> =<span style="color: #00ff00;"> there''re</span></strong></div>\n<div>+ Trước danh từ số nhiều thường c&oacute; số từ <strong>(<span style="color: #ff9900;">one, two,...</span>)</strong> hoặc <strong><span style="color: #008000;">many, some,....</span></strong></div>\n<div><strong><span style="color: #008000;"><iframe src="https://www.youtube.com/embed/mi-VOTG41WI" width="1004" height="753" frameborder="0" allowfullscreen="allowfullscreen"></iframe></span></strong></div>', '2016-05-30 07:54:56', '2016-06-01 04:29:54'),
(30, 32, '<div>H&ocirc;m nay ch&uacute;ng ta sẽ học về cash d&ugrave;ng của HAVE GOT để diễn tả &yacute; nghĩa l&agrave; C&Oacute;.</div>\n<div>Cấu tr&uacute;c c&acirc;u:\n<table style="height: 34px;" width="159">\n<tbody>\n<tr>\n<td><strong><span style="color: #ff0000;">S</span> + <span style="color: #0000ff;">have</span>/has <span style="color: #0000ff;">got</span> <span style="color: #ff0000;">+</span> O</strong></td>\n</tr>\n</tbody>\n</table>\n<div>V&iacute; dụ: <strong><span style="color: #ff0000;">I</span><span style="color: #0000ff;">''ve got</span> brown hair</strong> (Tooic &oacute; m&aacute;i t&oacute;c m&agrave;u n&acirc;u)</div>\n<div><span style="color: #ff0000;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>He''s</strong></span><strong> <span style="color: #0000ff;">got</span> a little brother</strong> (Anh ấy c&oacute; đứa em trai)</div>\n<div>*Nếu dạng c&acirc;u phủ định th&igrave; ta th&ecirc;m <strong>"NOT</strong>" sau <strong>Have</strong> hoặc <strong>Has</strong> t&ugrave;y theo ngooic ủa chủ ngữ</div>\n<div>Cấu tr&uacute;c c&acirc;u:</div>\n<div>\n<table style="height: 34px;" width="192">\n<tbody>\n<tr>\n<td><strong><span style="color: #ff0000;">S</span> + <span style="color: #0000ff;">have</span>/<span style="color: #ffcc00;">has</span> + not <span style="color: #0000ff;">got</span> <span style="color: #0000ff;">+</span> O</strong></td>\n</tr>\n</tbody>\n</table>\n<div>v&iacute; dụ: <strong><span style="color: #ff0000;">He</span> <span style="color: #ffcc00;">hasn''t</span> <span style="color: #0000ff;">got</span> brown eyes.</strong> (Anh ấy kh&ocirc;ng c&oacute; đ&ocirc;i mắt m&agrave;u n&acirc;u)</div>\n<div>*Nếu dạng c&acirc;u hỏi nghi vấn th&igrave; ta đưa <strong><span style="color: #0000ff;">Have</span></strong> hoặc <strong><span style="color: #ffcc00;">Has</span></strong> ra trước chủ ngữ.</div>\n<div>Cấu tr&uacute;c c&acirc;u:&nbsp;</div>\n<div>\n<table style="height: 34px;" width="186">\n<tbody>\n<tr>\n<td><strong><span style="color: #0000ff;">Have/</span><span style="color: #ffcc00;">has</span> + <span style="color: #ff0000;">S</span> <span style="color: #0000ff;">+ got +</span> O) ?</strong></td>\n</tr>\n</tbody>\n</table>\n<div>V&iacute; dụ: <strong><span style="color: #ffcc00;">Has</span> <span style="color: #ff0000;">he</span> <span style="color: #0000ff;">got</span> <span style="color: #000000;">brown eyes?</span></strong> (Đ&ocirc;i mắt anh ấy m&agrave;u n&acirc;u phải kh&ocirc;ng?)</div>\n<div><strong>*Lưu &yacute;</strong>: dạng r&uacute;t gọn</div>\n<div>''ve got = have got</div>\n<div>''s got = has got</div>\n<div>haven''t got = have not got</div>\n<div>hasn''t got = has not got</div>\n<div>C&aacute;c em c&ugrave;ng ngeh đoạn hội thoại sau để xem c&aacute;c bạn n&oacute;i như thế n&agrave;o nha !</div>\n<div><iframe src="https://www.youtube.com/embed/5lJhkWV9FRs" width="1003" height="752" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>\n</div>\n</div>\n</div>', '2016-05-30 08:01:46', '2016-05-30 23:41:51'),
(31, 35, '<div><strong>B&agrave;i học h&ocirc;m nay c&aacute; em sẽ học c&aacute;ch hỏi về thời gian</strong> <strong><span style="color: #ff6600;">What time is it ?</span></strong> hoặc <strong><span style="color: #0000ff;">What''s the time ?</span></strong> (mấy giờ rồi ?)</div>\n<div>C&oacute; hai c&aacute;ch th&ocirc;ng dụng để n&oacute;i về tiếng anh như sau:&nbsp;</div>\n<div><strong>1</strong>. Giờ trước, ph&uacute;t sau: đ&acirc;y l&agrave; c&aacute;ch n&oacute;i được d&ugrave;ng trong ngữ cảnh trang trọng, dễ&nbsp;nhớ.</div>\n<div><strong><em>V&iacute; dụ:</em></strong> <strong>7''45</strong>:<span style="color: #ff6600;"><strong> seven-forty-five</strong></span></div>\n<div><strong>2</strong>. Ph&uacute;t trước giờ sau: đ&acirc;y l&agrave; c&aacute;ch n&oacute;i phổ biến hơn.</div>\n<div>Từ ph&uacute;t thứ 1-&gt;30 d&ugrave;ng "<strong><span style="color: #99cc00;">past</span></strong>" từ ph&uacute;t thứ 31-?59 d&ugrave;ng "<span style="color: #0000ff;"><strong>to</strong></span>" v&agrave; giờ tăng th&ecirc;m 1.</div>\n<div><strong><em>V&iacute; dụ</em>:</strong> <strong>7''15</strong>: <strong><span style="color: #008000;">fifteen minutes <span style="color: #ff9900;">pass</span> seven.</span></strong></div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>7''45</strong>: <span style="color: #800080;"><strong>fifteen minutes <span style="color: #00ff00;">to</span> eight</strong></span>.</div>\n<div>Tuy nhi&ecirc;n người ta cũng c&oacute; c&aacute;ch n&oacute;i kh&aacute;c với giờ&nbsp;hơn/ k&eacute;m 15p v&agrave; 30p</div>\n<div><strong><span style="color: #0000ff;">''15 minutes past</span></strong> = <strong><span style="color: #008080;">a quater past</span></strong></div>\n<div>''<strong><span style="color: #800000;">15 minutes to</span></strong> = <strong><span style="color: #ff6600;">a quater to</span></strong></div>\n<div><strong>5''30</strong>: <strong><span style="color: #00ffff;">half past five.</span></strong></div>\n<div>C&aacute;c em c&ugrave;ng xem&nbsp;đoạn video sau nha. :)</div>\n<div><iframe src="https://www.youtube.com/embed/C5YgH8MVmIA" width="1040" height="585" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>\n<div>&nbsp;</div>', '2016-05-30 08:02:52', '2016-06-01 05:12:55'),
(32, 33, '<div>C&aacute;c c&acirc;u hỏi với từ để hỏi để cho ph&eacute;p người n&oacute;i t&igrave;m th&ocirc;ng tin hteem về chủ đề m&igrave;nh quan t&acirc;m.</div>\n<div>Cấu tr&uacute;c c&acirc;u:</div>\n<div><img class="" src="filemanager/userfiles/v.PNG" alt="" width="448" height="81" /></div>\n<div>Trong b&agrave;i học n&agrave;y c&aacute;c em sẽ học 2 từ để hỏi l&agrave; <strong><span style="color: #ff00ff;">What</span> </strong>v&agrave; <span style="color: #00ff00;"><strong>When</strong></span>:</div>\n<div>1. <span style="color: #ff00ff;"><strong>What</strong></span> l&agrave; "<strong><span style="color: #008000;">C&aacute;i g&igrave;</span></strong>" d&ugrave;ng để hỏi về đồ vật, sự việc.</div>\n<div>V&iacute; dụ: <strong><span style="color: #ff00ff;">What</span> <span style="color: #ff9900;">have we got on monday ?</span></strong> Ch&uacute;ng ta c&oacute; g&igrave; v&agrave;o thứ 2?</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #0000ff;"><strong>We''ve got English</strong>.</span> Ch&uacute;ng ta c&oacute; m&ocirc;n tiếng anh.</div>\n<div>2. When l&agrave; "<strong><span style="color: #008000;">khi n&agrave;o</span></strong>" d&ugrave;ng để hỏi về thời gian.</div>\n<div>V&iacute; dụ:<strong><span style="color: #00ff00;"> When</span> <span style="color: #ff9900;">have we got PE ?</span></strong> (tiết học thể dục khi n&agrave;o ?)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong><span style="color: #0000ff;">We''ve got PE on thursday</span>.</strong> (Ch&uacute;ng ta c&oacute; tiết học thể dục v&agrave;o thứ 5)</div>\n<div>Vậy l&agrave;&nbsp;c&aacute;c em biết c&aacute;ch sử dụng <strong><span style="color: #ff00ff;">What</span></strong> v&agrave;<strong> <span style="color: #00ff00;">When</span></strong> rồi. B&acirc;y giờ c&aacute;c em h&atilde;y xem video nha. :)</div>\n<div><iframe src="https://www.youtube.com/embed/iIsKgWQxjx8" width="1003" height="752" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>\n<div>&nbsp;</div>\n<div>&nbsp;</div>', '2016-05-30 08:03:24', '2016-06-01 04:44:31'),
(33, 34, '<div>Cấu tr&uacute;c c&acirc;u:<img class="" src="filemanager/userfiles/fs.PNG" alt="" width="392" height="67" /></div>\n<div><strong>V&iacute; dụ: <span style="color: #ff6600;">What do you like ?</span></strong> (Bạn th&iacute;ch l&agrave;m g&igrave; ?)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong><span style="color: #00ff00;"> I like balloons</span></strong> (T&ocirc;i th&iacute;ch b&oacute;ng)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong><span style="color: #ff6600;">What does he like ?</span></strong>&nbsp;(Anh ấy&nbsp;th&iacute;ch l&agrave;m g&igrave; ?)</div>\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong><span style="color: #00ff00;">He&nbsp;likes balloons</span></strong> (Anh ấy kh&ocirc;ng&nbsp;th&iacute;ch b&oacute;ng)</div>\n<div>C&aacute;c em nghe đoạn hội thoại sau để biết b&agrave;i học cụ thể hơn nh&aacute;. :)</div>\n<div><iframe src="https://www.youtube.com/embed/0W5r_RV_d2w" width="1003" height="752" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>\n<div>&nbsp;</div>', '2016-05-30 08:03:54', '2016-06-01 04:53:03');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exercise` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `course_id`, `name`, `exercise`, `created_at`, `updated_at`) VALUES
(1, 1, 'Unit3', '', '2016-05-07 17:39:57', '2016-05-07 18:05:56'),
(2, 1, 'Unit 2', '', '2016-05-07 17:40:14', '2016-05-07 17:40:14'),
(3, 1, 'Unit4', '', '2016-05-07 17:40:31', '2016-05-07 17:40:31'),
(4, 2, 'Starter : Hello !', '573dc07fe0837movie.swf', '2016-05-07 19:11:23', '2016-05-19 06:32:47'),
(5, 2, 'What colour is it ?', '573c92d582bd9movie.swf', '2016-05-07 19:16:54', '2016-05-18 09:05:41'),
(6, 2, 'What''s this ?', '573c932033752movie.swf', '2016-05-07 19:32:44', '2016-05-18 09:06:56'),
(7, 2, 'Is it a plane ?', '573c950e0b35dmovie.swf', '2016-05-07 19:33:51', '2016-05-18 09:15:10'),
(9, 3, 'Unit 1: This is my mum!', '573c974bc884fmovie.swf', '2016-05-18 09:24:11', '2016-05-18 09:24:43'),
(10, 3, 'Unit 2: He''s Happy', '573c97f5179a3movie.swf', '2016-05-18 09:26:30', '2016-05-18 09:27:33'),
(11, 3, 'Unit 3: They''re bears', '573c9baf54e5amovie.swf', '2016-05-18 09:40:13', '2016-05-18 09:43:27'),
(12, 3, 'Unit 4: Are they teacher ?', '573c9bea41ab7movie.swf', '2016-05-18 09:44:26', '2016-05-18 09:44:26'),
(13, 3, 'Unit 5: I''ve got a shirt', '573ca38bce62cmovie.swf', '2016-05-18 09:49:03', '2016-05-18 10:16:59'),
(14, 5, 'Starter: Welcome back !', '574cdc76b5b46movie.swf', '2016-05-18 10:21:30', '2016-05-30 17:36:06'),
(15, 5, 'Unit 1: A new friend !', '574cdc90b3e46movie.swf', '2016-05-18 10:51:44', '2016-05-30 17:36:32'),
(16, 5, 'Unit 2: I like Monkey !', '574cdcbe8dc46movie.swf', '2016-05-18 10:52:28', '2016-05-30 17:37:18'),
(17, 5, 'Unit 3: Dinnertime !', '574cdcdb4ec4emovie.swf', '2016-05-18 11:08:51', '2016-05-30 17:37:47'),
(18, 5, 'Unit 4: Tidy up !', '574cdcf75311cmovie.swf', '2016-05-18 11:18:46', '2016-05-30 17:38:15'),
(19, 7, 'Starter: Welcome back !', '573d1ebd288c7movie.swf', '2016-05-18 19:02:37', '2016-05-18 19:02:37'),
(20, 7, 'Unit 1: A new friend !', '573d31525f9cfmovie.swf', '2016-05-18 20:21:54', '2016-05-18 20:21:54'),
(21, 7, 'Unit 2: I like Monkeys', '573d3358e9a2emovie.swf', '2016-05-18 20:30:32', '2016-05-18 20:30:32'),
(22, 7, 'Unit 3: Dinnertime !', '573d37330ce61movie.swf', '2016-05-18 20:46:59', '2016-05-18 20:46:59'),
(23, 7, 'Unit 4: Tidy up !', '573d3d688a6demovie.swf', '2016-05-18 21:13:28', '2016-05-18 21:13:28'),
(24, 8, 'Starter: Hello Everyone!', '573d44a6d7841movie.swf', '2016-05-18 21:44:22', '2016-05-18 21:44:22'),
(25, 8, 'Unit 1: We have got English !', '573d4a5e5dbb6movie.swf', '2016-05-18 22:08:46', '2016-05-18 22:08:46'),
(26, 8, 'Unit 2: Let''s play after school.', '573d4f66f4092movie.swf', '2016-05-18 22:30:15', '2016-05-18 22:30:15'),
(27, 8, 'Unit 3: Let''s buy presents', '573d65f667ae0movie.swf', '2016-05-19 00:06:30', '2016-05-19 00:06:30'),
(28, 4, 'Unit 1: What''s this ?', '574c51f8322ccmovie.swf', '2016-05-30 07:43:59', '2016-05-30 07:45:12'),
(29, 4, 'Unit 2: Play time !', '574c521bcb381movie.swf', '2016-05-30 07:45:47', '2016-05-30 07:45:47'),
(30, 4, 'Unit 3: This is my nose', '574c524eb4c8dmovie.swf', '2016-05-30 07:46:38', '2016-05-30 07:46:38'),
(31, 4, 'Unit 4: He''s a hero', '574c5271ac37dmovie.swf', '2016-05-30 07:47:13', '2016-05-30 07:47:13'),
(32, 6, 'Unit 1: Hello, everyone !', '574c549b57d32movie.swf', '2016-05-30 07:56:27', '2016-05-30 07:56:27'),
(33, 6, 'Unit 2: We''ve got english', '574c54c383580movie.swf', '2016-05-30 07:57:07', '2016-05-30 07:57:07'),
(34, 6, 'Unit 3: Let''s buy presents', '574c558a9b353movie.swf', '2016-05-30 08:00:26', '2016-05-30 08:00:26'),
(35, 6, 'Unit 4: What''s the time ?', '574c55ad47267movie.swf', '2016-05-30 08:01:01', '2016-05-30 08:01:01'),
(36, 9, 'Thất tình', '', '2016-06-02 07:39:28', '2016-06-02 07:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `unittests`
--

CREATE TABLE `unittests` (
  `id` int(10) UNSIGNED NOT NULL,
  `unit_id` int(11) NOT NULL,
  `multi_choice_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `unittests`
--

INSERT INTO `unittests` (`id`, `unit_id`, `multi_choice_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2016-05-07 21:45:41', '2016-05-07 21:45:41'),
(2, 1, 4, '2016-05-08 02:22:43', '2016-05-08 02:22:43'),
(3, 0, 5, '2016-05-08 02:30:29', '2016-05-08 02:30:29'),
(7, 7, 11, '2016-05-14 00:54:28', '2016-05-14 00:54:28'),
(9, 6, 13, '2016-05-14 00:56:30', '2016-05-14 00:56:30'),
(10, 5, 14, '2016-05-14 00:56:52', '2016-05-14 00:56:52'),
(20, 0, 24, '2016-05-19 06:35:10', '2016-05-19 06:35:10'),
(21, 0, 25, '2016-05-19 06:35:21', '2016-05-19 06:35:21'),
(22, 0, 26, '2016-05-19 06:35:29', '2016-05-19 06:35:29'),
(28, 4, 32, '2016-06-01 07:48:58', '2016-06-01 07:48:58'),
(29, 4, 33, '2016-06-01 07:50:22', '2016-06-01 07:50:22'),
(30, 4, 34, '2016-06-01 07:56:57', '2016-06-01 07:56:57'),
(31, 4, 35, '2016-06-01 07:57:56', '2016-06-01 07:57:56'),
(32, 4, 36, '2016-06-01 07:58:22', '2016-06-01 07:58:22'),
(33, 5, 37, '2016-06-01 08:11:12', '2016-06-01 08:11:12'),
(34, 5, 38, '2016-06-01 08:11:55', '2016-06-01 08:11:55'),
(35, 5, 39, '2016-06-01 08:12:37', '2016-06-01 08:12:37'),
(36, 5, 40, '2016-06-01 08:12:46', '2016-06-01 08:12:46'),
(37, 6, 41, '2016-06-01 08:16:41', '2016-06-01 08:16:41'),
(38, 6, 42, '2016-06-01 08:18:11', '2016-06-01 08:18:11'),
(39, 6, 43, '2016-06-01 08:19:00', '2016-06-01 08:19:00'),
(40, 6, 44, '2016-06-01 08:19:37', '2016-06-01 08:19:37'),
(41, 9, 45, '2016-06-01 08:20:20', '2016-06-01 08:20:20'),
(42, 9, 46, '2016-06-01 08:20:38', '2016-06-01 08:20:38'),
(43, 9, 47, '2016-06-01 08:21:09', '2016-06-01 08:21:09'),
(44, 9, 48, '2016-06-01 08:21:37', '2016-06-01 08:21:37'),
(46, 9, 50, '2016-06-01 08:22:45', '2016-06-01 08:22:45'),
(47, 10, 51, '2016-06-02 07:55:09', '2016-06-02 07:55:09'),
(48, 10, 52, '2016-06-02 07:55:43', '2016-06-02 07:55:43'),
(49, 10, 53, '2016-06-02 08:03:46', '2016-06-02 08:03:46'),
(50, 10, 54, '2016-06-02 08:05:38', '2016-06-02 08:05:38'),
(51, 10, 55, '2016-06-02 08:10:59', '2016-06-02 08:10:59'),
(52, 11, 56, '2016-06-02 08:16:59', '2016-06-02 08:16:59'),
(53, 11, 57, '2016-06-02 08:38:02', '2016-06-02 08:38:02'),
(54, 11, 58, '2016-06-02 08:42:32', '2016-06-02 08:42:32'),
(55, 11, 59, '2016-06-02 08:43:42', '2016-06-02 08:43:42'),
(56, 11, 60, '2016-06-02 08:45:31', '2016-06-02 08:45:31'),
(57, 12, 61, '2016-06-02 08:47:30', '2016-06-02 08:47:30'),
(58, 12, 62, '2016-06-02 08:47:53', '2016-06-02 08:47:53'),
(59, 12, 63, '2016-06-02 08:53:11', '2016-06-02 08:53:11'),
(60, 12, 64, '2016-06-02 08:55:29', '2016-06-02 08:55:29'),
(61, 12, 65, '2016-06-02 08:58:34', '2016-06-02 08:58:34'),
(62, 28, 66, '2016-06-02 09:02:59', '2016-06-02 09:02:59'),
(63, 28, 67, '2016-06-02 09:03:55', '2016-06-02 09:03:55'),
(64, 28, 68, '2016-06-02 09:04:45', '2016-06-02 09:04:45'),
(65, 28, 69, '2016-06-02 09:05:06', '2016-06-02 09:05:06'),
(66, 28, 70, '2016-06-02 09:07:28', '2016-06-02 09:07:28'),
(67, 29, 71, '2016-06-02 09:08:40', '2016-06-02 09:08:40'),
(68, 29, 72, '2016-06-02 09:09:13', '2016-06-02 09:09:13'),
(69, 29, 73, '2016-06-02 09:10:26', '2016-06-02 09:10:26'),
(70, 29, 74, '2016-06-02 09:11:22', '2016-06-02 09:11:22'),
(71, 29, 75, '2016-06-02 09:11:50', '2016-06-02 09:11:50'),
(72, 30, 76, '2016-06-02 09:13:35', '2016-06-02 09:13:35'),
(73, 30, 77, '2016-06-02 09:13:51', '2016-06-02 09:13:51'),
(74, 30, 78, '2016-06-02 09:14:15', '2016-06-02 09:14:15'),
(75, 30, 79, '2016-06-02 09:16:24', '2016-06-02 09:16:24'),
(76, 30, 80, '2016-06-02 09:18:21', '2016-06-02 09:18:21'),
(77, 31, 81, '2016-06-02 09:23:57', '2016-06-02 09:23:57'),
(78, 31, 82, '2016-06-02 09:24:33', '2016-06-02 09:24:33'),
(79, 31, 83, '2016-06-02 09:25:22', '2016-06-02 09:25:22'),
(80, 31, 84, '2016-06-02 09:28:03', '2016-06-02 09:28:03'),
(81, 31, 85, '2016-06-02 09:30:20', '2016-06-02 09:30:20'),
(82, 14, 86, '2016-06-02 09:38:04', '2016-06-02 09:38:04'),
(83, 14, 87, '2016-06-02 09:39:58', '2016-06-02 09:39:58'),
(84, 14, 88, '2016-06-02 09:41:49', '2016-06-02 09:41:49'),
(85, 14, 89, '2016-06-02 09:42:58', '2016-06-02 09:42:58'),
(86, 14, 90, '2016-06-02 09:43:16', '2016-06-02 09:43:16'),
(87, 15, 91, '2016-06-02 09:44:19', '2016-06-02 09:44:19'),
(88, 15, 92, '2016-06-02 09:45:16', '2016-06-02 09:45:16'),
(89, 15, 93, '2016-06-02 09:46:07', '2016-06-02 09:46:07'),
(90, 15, 94, '2016-06-02 09:47:01', '2016-06-02 09:47:01'),
(91, 15, 95, '2016-06-02 09:47:54', '2016-06-02 09:47:54'),
(92, 16, 96, '2016-06-02 09:50:52', '2016-06-02 09:50:52'),
(94, 16, 98, '2016-06-02 09:53:19', '2016-06-02 09:53:19'),
(95, 16, 99, '2016-06-02 10:02:53', '2016-06-02 10:02:53'),
(96, 16, 100, '2016-06-02 10:03:24', '2016-06-02 10:03:24'),
(97, 16, 101, '2016-06-02 10:04:46', '2016-06-02 10:04:46'),
(98, 17, 102, '2016-06-02 10:21:21', '2016-06-02 10:21:21'),
(99, 17, 103, '2016-06-02 10:22:17', '2016-06-02 10:22:17'),
(100, 17, 104, '2016-06-02 10:22:43', '2016-06-02 10:22:43'),
(101, 17, 105, '2016-06-02 10:23:09', '2016-06-02 10:23:09'),
(102, 17, 106, '2016-06-02 10:23:29', '2016-06-02 10:23:29'),
(103, 18, 107, '2016-06-02 10:25:38', '2016-06-02 10:25:38'),
(104, 18, 108, '2016-06-02 10:26:12', '2016-06-02 10:26:12'),
(105, 18, 109, '2016-06-02 10:26:55', '2016-06-02 10:26:55'),
(106, 18, 110, '2016-06-02 10:29:57', '2016-06-02 10:29:57'),
(107, 18, 111, '2016-06-02 10:31:07', '2016-06-02 10:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int(11) NOT NULL DEFAULT '0',
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sex` tinyint(1) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `code`, `birthday`, `address`, `password`, `remember_token`, `class_id`, `admin`, `created_at`, `updated_at`, `sex`, `email`, `phone_number`) VALUES
(2, '222222222222', '22222222222', '0000-00-00', '222222222222222', '$2y$10$Oxd3uIr1Z51D6rJGn5YdJ.zhG5o4l5YkpDyZRekWOi7HI//6j2Aq2', NULL, 7, 0, '2016-05-07 09:12:22', '2016-05-07 09:45:47', 0, '', ''),
(3, '111111111111111', '1111111111111111', '0000-00-00', '1111111111111111', '$2y$10$kN0CZw9wXfUwBN.9FUQYqOFB7RXPFaWZlBd3dciKAEgnH2rC.euTy', NULL, 9, 0, '2016-05-07 09:12:33', '2016-05-07 09:44:19', 0, '', ''),
(4, '333333333333', '333333333333', '0000-00-00', '333333333333333', '$2y$10$MGH.rxeiLfHNe8fPI4Zfbem8D1zdQP36atAukfVttEoU5vhXbX0qe', NULL, 9, 0, '2016-05-07 09:45:58', '2016-05-07 09:45:58', 0, '', ''),
(5, 'aaaaa', 'fhghfg', '0000-00-00', '777777777777777', '$2y$10$hJfg.TfV7XvynbB4Ee5qquyqGUZqLvJRxEenELScoxLZh4MOJL5J.', NULL, 6, 1, '2016-05-07 10:31:43', '2016-05-18 07:49:26', 0, '', ''),
(6, 'Thủy', '1', '0000-00-00', '1', '$2y$10$afWVb9oizhuU2geIsp3PkOWh8s28p3iTNEI0Wut2Erex.E/1uBIFW', NULL, 7, 1, '2016-05-13 18:49:10', '2016-05-13 18:52:49', 0, '', ''),
(7, 'sdfsd', 'fdsf', '0000-00-00', 'fdsfs', '$2y$10$e3KlSEGoIQ.FFDU6kq1BGe9YMEZWV0NgRYjiyy4UuyeFmpNXU89la', NULL, 7, 1, '2016-05-08 03:13:37', '2016-05-08 03:13:37', 0, '', ''),
(8, 'AAAAAAAAAAAAA', '123', '0000-00-00', 'fdsfds', '$2y$10$Y3G8eIzkImcCVHVbABWA4e0Ksy/CEoNUTlIalMSfPs4TvKq/rZy96', NULL, 7, 1, '2016-05-13 18:46:00', '2016-05-13 18:46:00', 0, '', ''),
(11, 'Nguyễn Văn A', 'MSC1056', '0000-00-00', 'fdsfs', '$2y$10$s/37.wQ2OOyqfbu4r11Zy.hPSA9Q1VS0t2i7g4p3ilWmSPr7Tab.e', NULL, 5, 0, '2016-05-18 01:27:07', '2016-05-18 01:27:07', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vocabularies`
--

CREATE TABLE `vocabularies` (
  `id` int(10) UNSIGNED NOT NULL,
  `unit_id` int(11) NOT NULL,
  `word` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mean` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vocabularies`
--

INSERT INTO `vocabularies` (`id`, `unit_id`, `word`, `mean`, `image`, `created_at`, `updated_at`) VALUES
(2, 0, 'Ant', 'Con kiến', '574c6fdc14c4cant.jpg', '2016-05-30 09:52:44', '2016-05-30 09:52:44'),
(3, 0, 'Bag', 'Cái cặp', '574c700964330bag.jpg', '2016-05-30 09:53:29', '2016-05-30 09:53:29'),
(5, 4, 'Bag', 'Cái cặp', '574cf6db31e9bbag.jpg', '2016-05-30 09:54:23', '2016-05-30 19:28:43'),
(6, 4, 'Boy', 'Con trai', '574c705896c79boy.jpg', '2016-05-30 09:54:48', '2016-05-30 09:54:48'),
(8, 4, 'Ant', 'Con Kiến', '574c73f4e8642cuo-doi-cua-kien-bao-tin-nhanh-5.jpg', '2016-05-30 10:10:12', '2016-05-30 10:10:12'),
(9, 4, 'Apple', 'Quả táo', '574c7448918a9apple.jpg', '2016-05-30 10:11:36', '2016-05-30 10:11:36'),
(10, 4, 'Balloon', 'Quả Bóng', '574c74cca7e6eballoon.jpg', '2016-05-30 10:13:48', '2016-05-30 10:13:48'),
(14, 4, 'Bicycle', 'Xe Đạp', '574c760c87661bicycle.jpg', '2016-05-30 10:19:08', '2016-05-30 10:19:08'),
(15, 4, 'Bird', 'Con Chim', '574c760c91b3dbird.jpg', '2016-05-30 10:19:08', '2016-05-30 10:19:08'),
(17, 4, 'Buffalo', 'Con Trâu', '574c764d663fdbuffalo.jpg', '2016-05-30 10:20:13', '2016-05-30 10:20:13'),
(19, 5, 'Green', 'Màu xanh lá cây', '574c789ae1f34verde -agua.jpg', '2016-05-30 10:30:02', '2016-05-30 10:30:02'),
(20, 5, 'Yellow', 'Màu vàng', '574c789aea49111133699_10152714417892312_8965113757447783090_n.jpg', '2016-05-30 10:30:02', '2016-05-30 10:30:02'),
(21, 5, 'Brown', 'Màu nâu', '574c789b0ace4D51D2_brownjpg.jpg', '2016-05-30 10:30:03', '2016-05-30 10:30:03'),
(22, 5, 'White', 'Màu trắng', '574c789b27600image_1417587680.jpg', '2016-05-30 10:30:03', '2016-05-30 10:30:03'),
(23, 5, 'Black', 'Màu đen', '574c789b347c6day-chinh-la-mau-den-nhat-trong-tat-ca-cac-mau-den.jpg', '2016-05-30 10:30:03', '2016-05-30 10:30:03'),
(24, 5, 'Blue', 'Màu xanh da trời', '574c789b3f5d8rainbow-1.jpg', '2016-05-30 10:30:03', '2016-05-30 10:30:03'),
(25, 5, 'Pink', 'Màu hồng', '574c789b4a521lbbl4ps_hi_2.gif', '2016-05-30 10:30:03', '2016-05-30 10:30:03'),
(26, 5, 'Red', 'Màu đỏ', '574c78f73e63fred.jpg', '2016-05-30 10:31:35', '2016-05-30 10:31:35'),
(27, 6, 'Crayon', 'Bút sáp màu', '574c7b7784fd7crayon.jpg', '2016-05-30 10:42:15', '2016-05-30 10:42:15'),
(29, 6, 'Cat', 'Con mèo', '574c7b77ad8e7cat.jpg', '2016-05-30 10:42:15', '2016-05-30 10:42:15'),
(31, 6, 'Chair', 'Ghế', '574c7b77d6755chair.JPG', '2016-05-30 10:42:15', '2016-05-30 10:42:15'),
(32, 6, 'Desk', 'Bàn', '574c7b77e13c1desk.jpg', '2016-05-30 10:42:15', '2016-05-30 10:42:15'),
(33, 6, 'Global', 'Toàn cầu', '574c7b780283dglobal.jpg', '2016-05-30 10:42:16', '2016-05-30 10:42:16'),
(35, 6, 'Car', 'ô tô', '574c7bc7492f0car.jpg', '2016-05-30 10:43:35', '2016-05-30 10:43:35'),
(36, 6, 'Crocodile', 'Cá Sấu', '574c7c0e3a0b8crocodile.jpg', '2016-05-30 10:44:46', '2016-05-30 10:44:46'),
(37, 6, 'Map', 'Bản đồ', '574c7c9f0c7femap.jpg', '2016-05-30 10:47:11', '2016-05-30 10:47:11'),
(39, 7, 'Puppet', 'Con rối', '574cc862f2a22images.jpg', '2016-05-30 16:10:26', '2016-05-30 16:10:26'),
(41, 7, 'Giraffe', 'Hươu cao cổ', '574cc8630edc3giraffe.jpg', '2016-05-30 16:10:27', '2016-05-30 16:10:27'),
(42, 7, 'Elephant', 'Con Voi', '574cc8fa5606eelephant.jpg', '2016-05-30 16:12:58', '2016-05-30 16:12:58'),
(43, 7, 'Plane', 'Máy bay', '574cc8fa633a4uu-dai-dac-biet-tu-chuong-trinh-khoanh-khac-vang-lan-6-cua-vietnam-airlines.jpg', '2016-05-30 16:12:58', '2016-05-30 16:12:58'),
(44, 9, 'Mom', 'Mẹ', '574ccb1487d48mom.png', '2016-05-30 16:21:56', '2016-05-30 16:21:56'),
(45, 9, 'Dad', 'Bố', '574ccb14966e8dad.jpg', '2016-05-30 16:21:56', '2016-05-30 16:21:56'),
(46, 9, 'Brother', 'Anh trai', '574ccb14b3572letter-brother-25530184.jpg', '2016-05-30 16:21:56', '2016-05-30 16:21:56'),
(47, 9, 'Sister', 'Chị gái', '574ccb14cb1d6letter-sister-28599508.jpg', '2016-05-30 16:21:56', '2016-05-30 16:21:56'),
(48, 9, 'Grandmother', 'Bà nội, bà ngoại', '574ccb14e0d39gm.png', '2016-05-30 16:21:56', '2016-05-30 16:21:56'),
(49, 9, 'Grandfather', 'Ông nôi, ông ngoại', '574ccb14eede8grandfather4.png', '2016-05-30 16:21:56', '2016-05-30 16:21:56'),
(50, 10, 'Hot', 'Nóng', '574ccc8b26ebfdcb4143c591703c41acedd610475aa1b.jpg', '2016-05-30 16:28:11', '2016-05-30 16:28:11'),
(51, 10, 'Happy', 'Vui vẻ', '574ccc8b3f3dcdepositphotos_13422852-Cartoon-cute-little-happy-boy.jpg', '2016-05-30 16:28:11', '2016-05-30 16:28:11'),
(52, 10, 'Sad', 'Buồn', '574ccc8b4d14bsa.jpg', '2016-05-30 16:28:11', '2016-05-30 16:28:11'),
(53, 10, 'Tired', 'Mệt mỏi', '574ccc8b679dft.jpg', '2016-05-30 16:28:11', '2016-05-30 16:28:11'),
(54, 10, 'Hungry', 'ĐÓi bụng', '574ccc8b6fe44hungry-man-cartoon.jpg', '2016-05-30 16:28:11', '2016-05-30 16:28:11'),
(55, 10, 'Cold', 'Lạnh', '574ccc8b7a9d926e2e40ca00e2a5adddecb19c3d4cdf6.jpg', '2016-05-30 16:28:11', '2016-05-30 16:28:11'),
(56, 10, 'Angry', 'Tức giận', '574ccc8b85b46ag.jpg', '2016-05-30 16:28:11', '2016-05-30 16:28:11'),
(57, 11, 'Bear', 'Gấu', '574cce7841b9ec.png', '2016-05-30 16:36:24', '2016-05-30 16:36:24'),
(58, 11, 'Tiger', 'Hổ', '574cce785f330tiger.jpg', '2016-05-30 16:36:24', '2016-05-30 16:36:24'),
(59, 11, 'Chicken', 'Gà', '574cce7868befg.png', '2016-05-30 16:36:24', '2016-05-30 16:36:24'),
(60, 11, 'Duck', 'Vịt', '574cce787378e16496620-Funny-duck-cartoon-Stock-Vector-animal.jpg', '2016-05-30 16:36:24', '2016-05-30 16:36:24'),
(61, 11, 'Hippo', 'Hà mã', '574cce787bc03hippo.jpg', '2016-05-30 16:36:24', '2016-05-30 16:36:24'),
(62, 11, 'Panda', 'Gấu trúc', '574cce78867f7Panda.jpg', '2016-05-30 16:36:24', '2016-05-30 16:36:24'),
(63, 11, 'Zoo', 'Vườn bách thú', '574cce7896e60cartoon-children-at-zoo-1898900.jpg', '2016-05-30 16:36:24', '2016-05-30 16:36:24'),
(64, 12, 'Teacher', 'Giáo viên', '574ccfbe4443d27656773-Cartoon-female-teacher-standing-next-to-a-blackboard--Stock-Vector.jpg', '2016-05-30 16:41:50', '2016-05-30 16:41:50'),
(66, 12, 'Waiter', 'Bồi bàn', '574ccfbe5b9a9e.jpg', '2016-05-30 16:41:50', '2016-05-30 16:41:50'),
(67, 12, 'Doctor', 'Bác sĩ', '574ccfbe63e97doc.jpg', '2016-05-30 16:41:50', '2016-05-30 16:41:50'),
(68, 12, 'Nurse', 'Y tá', '574ccfbe6eac02645bff0709e4cf23bcaff6690965816.jpg', '2016-05-30 16:41:50', '2016-05-30 16:41:50'),
(69, 12, 'Pupil', 'Học sinh', '574cd00eb725dr.jpg', '2016-05-30 16:43:10', '2016-05-30 16:43:10'),
(70, 13, 'Shirt', 'Áo sơ mi', '574cd102ed42a264790_main.jpg', '2016-05-30 16:47:14', '2016-05-30 16:47:14'),
(71, 13, 'Jumper', 'Áo len', '574cd1030ad7eFAS127_KELLYGREEN.jpg', '2016-05-30 16:47:15', '2016-05-30 16:47:15'),
(72, 13, 'Jacket', 'Áo Khoác', '574cd1031648983620_SHKP.jpg', '2016-05-30 16:47:15', '2016-05-30 16:47:15'),
(73, 13, 'Hat', 'Mũ', '574cd1031df2ad.jpg', '2016-05-30 16:47:15', '2016-05-30 16:47:15'),
(74, 13, 'Belt', 'Thắt lưng', '574cd103261b8a.jpg', '2016-05-30 16:47:15', '2016-05-30 16:47:15'),
(76, 28, 'Bookshelf', 'Kệ để sách', '574cd23b374ccstock-photo-bookshelf-background-196039253.jpg', '2016-05-30 16:52:27', '2016-05-30 16:52:27'),
(77, 28, 'Eraser', 'Cục tẩy', '574cd23b4476atimthumb.jpg', '2016-05-30 16:52:27', '2016-05-30 16:52:27'),
(78, 28, 'Ruler', 'Thước kẻ', '574cd23b5227ce.jpg', '2016-05-30 16:52:27', '2016-05-30 16:52:27'),
(79, 28, 'Pencil', 'Bút chì', '574cd23b626d8images.jpg', '2016-05-30 16:52:27', '2016-05-30 16:52:27'),
(80, 28, 'Book', 'Sách', '574cd2946a791c.jpg', '2016-05-30 16:53:56', '2016-05-30 16:53:56'),
(81, 29, 'Fig', 'Quả sung', '574cd8de6bdecd.jpg', '2016-05-30 17:20:46', '2016-05-30 17:20:46'),
(82, 29, 'Teddy', 'Gấu bông', '574cd8de78c97r.jpg', '2016-05-30 17:20:46', '2016-05-30 17:20:46'),
(83, 29, 'Doll', 'Búp bê', '574cd8de80f4fdoll-18.jpg', '2016-05-30 17:20:46', '2016-05-30 17:20:46'),
(84, 29, 'Puzzle', 'Câu đố', '574cd8de8ec19images.jpg', '2016-05-30 17:20:46', '2016-05-30 17:20:46'),
(85, 29, 'Kite', 'Diều', '574cd8dea9a9c51DxkkTOjuL._SL1000_.jpg', '2016-05-30 17:20:46', '2016-05-30 17:20:46'),
(86, 30, 'Face', 'Khuôn mặt', '574cda6e8985fsd.png', '2016-05-30 17:27:26', '2016-05-30 17:27:26'),
(87, 30, 'Eye', 'Mắt', '574cda6e9a9d46111853_f520.jpg', '2016-05-30 17:27:26', '2016-05-30 17:27:26'),
(88, 30, 'Ear', 'Tai', '574cda6ea24d9cartoon-illustration-ear-human-isolated-white-background-66923443.jpg', '2016-05-30 17:27:26', '2016-05-30 17:27:26'),
(89, 30, 'Finger', 'Ngón tay', '574cda6eb000fdrawing-art-cartoon-hand-pointing-finger-gesture-vector-illustration-29948065.jpg', '2016-05-30 17:27:26', '2016-05-30 17:27:26'),
(91, 30, 'Lips', 'Đôi môi', '574cdab3cb94ehow-to-draw-a-mouth-cartoon-lips_184760.jpg', '2016-05-30 17:28:35', '2016-05-30 17:28:35'),
(92, 31, 'Policeman', 'Cảnh sát', '574cdbcc6bf80kiMbeE7yT.png', '2016-05-30 17:33:16', '2016-05-30 17:33:16'),
(93, 31, 'Pilot', 'Phi công', '574cdbcc74c9fxc.jpg', '2016-05-30 17:33:16', '2016-05-30 17:33:16'),
(94, 31, 'Farmer', 'Nông dân', '574cdbcc7ec558068991-A-Farmer-Planting-Rice-in-His-Ricefield--Stock-Photo-cartoon.jpg', '2016-05-30 17:33:16', '2016-05-30 17:33:16'),
(95, 31, 'Buider', 'Người xây dựng', '574cdbcc87b44stock-photo-house-builder-cartoon-illustration-169046759.jpg', '2016-05-30 17:33:16', '2016-05-30 17:33:16'),
(96, 14, 'One', 'Số 1', '574cdde68590c13276671-cartoon-illustration-with-number-one-and-giraffe-Stock-Vector.jpg', '2016-05-30 17:42:14', '2016-05-30 17:42:14'),
(106, 14, 'two', 'số 2', '574cdf6cabb4ctwo.jpg', '2016-05-30 17:48:44', '2016-05-30 17:48:44'),
(107, 14, 'three', 'số 3', '574cdf6cba65bthree.jpg', '2016-05-30 17:48:44', '2016-05-30 17:48:44'),
(108, 14, 'four', 'số 4', '574cdf6cc2a84four.jpg', '2016-05-30 17:48:44', '2016-05-30 17:48:44'),
(109, 14, 'five', 'số 5', '574cdf6ccab90five.jpg', '2016-05-30 17:48:44', '2016-05-30 17:48:44'),
(110, 14, 'six', 'số 6', '574cdf6cd32e1six.jpg', '2016-05-30 17:48:44', '2016-05-30 17:48:44'),
(111, 14, 'seven', 'số 7', '574cdf6cdb326seven.jpg', '2016-05-30 17:48:44', '2016-05-30 17:48:44'),
(112, 14, 'eight', 'số 8', '574cdf6ce37bceight.jpg', '2016-05-30 17:48:44', '2016-05-30 17:48:44'),
(113, 14, 'nine', 'số 9', '574cdf6cf0f44nine.jpg', '2016-05-30 17:48:44', '2016-05-30 17:48:44'),
(114, 14, 'ten', 'số 10', '574cdf6d17ce9te n.jpg', '2016-05-30 17:48:45', '2016-05-30 17:48:45'),
(115, 15, 'John', 'Bạn John', '574ce0e8d722fpocket_john_watson_by_hotaruxsasuke1233-d5sqk8i.png', '2016-05-30 17:55:04', '2016-05-30 17:55:04'),
(116, 15, 'Elsa', 'Bạn Elsa', '574ce0e8ef49bdg.jpg', '2016-05-30 17:55:04', '2016-05-30 17:55:04'),
(117, 15, 'Princess', 'Công chúa', '574ce0e908fcdnh.jpg', '2016-05-30 17:55:05', '2016-05-30 17:55:05'),
(118, 15, 'Prince', 'Hoàng tử', '574ce0e913ea015660610-vector-Prince-charming-Stock-Vector-prince-king-cartoon.jpg', '2016-05-30 17:55:05', '2016-05-30 17:55:05'),
(119, 15, 'King', 'Vua', '574ce0e91b67042505485-cartoon-king-holding-a-golden-scepter.jpg', '2016-05-30 17:55:05', '2016-05-30 17:55:05'),
(120, 16, 'zebra horse', 'Ngựa vằn', '574ce2544fef0maxresdefault.jpg', '2016-05-30 18:01:08', '2016-05-30 18:01:08'),
(121, 16, 'swan', 'thiên nga', '574ce2545d3ea3d-cartoon-swan-lwp-1-2-s-307x512.jpg', '2016-05-30 18:01:08', '2016-05-30 18:01:08'),
(122, 16, 'horse', 'ngựa', '574ce2546647a7684740-Illustration-of-walking-beautiful-yellow-horse-Stock-Vector-horse-cartoon-animal.jpg', '2016-05-30 18:01:08', '2016-05-30 18:01:08'),
(123, 16, 'lion', 'sư tử', '574ce25473164f.jpg', '2016-05-30 18:01:08', '2016-05-30 18:01:08'),
(124, 16, 'monkey', 'khỉ', '574ce2547b163df.jpg', '2016-05-30 18:01:08', '2016-05-30 18:01:08'),
(125, 17, 'rice', 'gạo', '574ce455d5ee8Thai_jasmine_rice_uncooked_periodic.jpg', '2016-05-30 18:09:41', '2016-05-30 18:09:41'),
(126, 17, 'meat', 'thịt', '574ce455ddb8d18782386-illustration-of-Meat-Stock-Vector-meat-cartoon-food.jpg', '2016-05-30 18:09:41', '2016-05-30 18:09:41'),
(127, 17, 'fish', 'cá', '574ce455e6040images.png', '2016-05-30 18:09:41', '2016-05-30 18:09:41'),
(128, 17, 'karrot', 'củ cà rốt', '574ce45601608images.jpg', '2016-05-30 18:09:42', '2016-05-30 18:09:42'),
(129, 17, 'tomato', 'quả cà chua', '574ce4560d89dimages (1).jpg', '2016-05-30 18:09:42', '2016-05-30 18:09:42'),
(130, 17, ' vegetables', 'rau', '574ce456151bcd.jpg', '2016-05-30 18:09:42', '2016-05-30 18:09:42'),
(131, 17, ' cauliflower', 'súp lơ', '574ce4561d629top-8-loai-rau-cu-tot-nhat-qua-dat-cho-ba-bau-1.jpg', '2016-05-30 18:09:42', '2016-05-30 18:09:42'),
(132, 17, 'egg', 'trứng', '574ce456256ad12771734-Vector-Egg-Isolated-on-White-Background-Stock-Vector-egg-cartoon-eggs.jpg', '2016-05-30 18:09:42', '2016-05-30 18:09:42'),
(133, 18, 'cupboard', 'tủ quần áo', '574ce5dbe0b1e835_P_1356484207961.jpg', '2016-05-30 18:16:11', '2016-05-30 18:16:11'),
(134, 18, 'bed', 'giường ngủ', '574ce5dbf1d9e1217009-legato-float-walnut-bed-a_3.jpg', '2016-05-30 18:16:11', '2016-05-30 18:16:11'),
(135, 18, ' pillow', 'gối', '574ce5dc05c2bgoi-trang-tri-sofa-soft-decor-40st-40x40x15cm-tim-0676-430379-1-product.jpg', '2016-05-30 18:16:12', '2016-05-30 18:16:12'),
(136, 18, 'blanket', 'chăn', '574ce5dc162e4d.jpg', '2016-05-30 18:16:12', '2016-05-30 18:16:12'),
(141, 18, 'bin', 'thùng rác', '574ce63d06723small_1371_thung-rac-dap-chan-vuong-Duy-Tan.gif', '2016-05-30 18:17:49', '2016-05-30 18:17:49'),
(142, 18, 'rug', 'thảm', '574ce63d17d66images (2).jpg', '2016-05-30 18:17:49', '2016-05-30 18:17:49'),
(143, 32, 'uncle', 'chú, bác, cậu, dượng', '574ce8ad7b712letter-uncle-28599476.jpg', '2016-05-30 18:28:13', '2016-05-30 18:28:13'),
(144, 32, 'aunt', 'cô, mợ, thím, bác gái', '574ce8ad89d26letter-aunt-28599488.jpg', '2016-05-30 18:28:13', '2016-05-30 18:28:13'),
(146, 32, 'straight hair', 'tóc thẳng', '574ce8ada23d215577952-Portrait-illustration-of-beautiful-woman-smiling-with-fringe-and-long-hair-Stock-Vector.jpg', '2016-05-30 18:28:13', '2016-05-30 18:28:13'),
(149, 32, 'curly hải', 'tóc xoăn', '574ce8add56e4525b6d517b333fc68bdbb25c40bc6f89.jpg', '2016-05-30 18:28:13', '2016-05-30 18:28:13'),
(150, 32, 'long hair', 'tóc dài', '574ce9f571ca16445738-Head-of-a-young-beautiful-woman-with-long-hair--Stock-Vector-hair-cartoon-face.jpg', '2016-05-30 18:33:41', '2016-05-30 18:33:41'),
(151, 32, 'cousin', 'anh em (họ)', '574ce9f57f473c.jpg', '2016-05-30 18:33:41', '2016-05-30 18:33:41'),
(152, 32, 'short hair', 'tóc ngắn', '574ce9f5874ddv.jpg', '2016-05-30 18:33:41', '2016-05-30 18:33:41'),
(153, 33, 'music', 'âm nhạc', '574cebc178bd7cartoon-kids-musical-bar-eps-22779566.jpg', '2016-05-30 18:41:21', '2016-05-30 18:41:21'),
(154, 33, 'art', 'nghệ thuật', '574cebc187028v.jpg', '2016-05-30 18:41:21', '2016-05-30 18:41:21'),
(155, 33, 'math', 'môn toán', '574cebc1906e843844797-cartoon-style-math-learning-game-illustration-mathematical-arithmetic-logic-operator-symbols-icon-se.jpg', '2016-05-30 18:41:21', '2016-05-30 18:41:21'),
(156, 33, 'english', 'tiếng anh', '574cebc198c4d13376726-Young-boy-reading-an-English-book-Stock-Vector-english-cartoon-learning.jpg', '2016-05-30 18:41:21', '2016-05-30 18:41:21'),
(157, 33, 'art room', 'phòng mỹ thuật', '574cebc1a0cb2Winnie-the-font-b-Pooh-b-font-cartoon-wall-sticker-font-b-baby-b-font-kids.jpg', '2016-05-30 18:41:21', '2016-05-30 18:41:21'),
(158, 33, 'science', 'khoa học', '574cebc1b111b14842312-Science-Inventor-Boy-Cartoon-Student-with-Lab-Coat-and-Scientific-Experiment-Equipment-Illustration-Stock-Vector.jpg', '2016-05-30 18:41:21', '2016-05-30 18:41:21'),
(159, 34, 'card', 'thiệp', '574ceebc600adFree-Shipping-24pcs-lot-3D-Cartoon-Cute-font-b-Baby-b-font-Shower-Invitation-font-b.jpg', '2016-05-30 18:54:04', '2016-05-30 18:54:04'),
(160, 34, 'present', 'quà', '574ceebc74e3fgceoM5ndi.jpg', '2016-05-30 18:54:04', '2016-05-30 18:54:04'),
(161, 34, 'cake', 'bánh', '574ceebc84a5aimages.jpg', '2016-05-30 18:54:04', '2016-05-30 18:54:04'),
(162, 34, 'chocolate', 'sô-cô-la', '574ceebc8f6cadi9raRM4T.png', '2016-05-30 18:54:04', '2016-05-30 18:54:04'),
(163, 34, 'party', 'bữa tiệc', '574ceebc9d1b6tea-party-clip-art1.jpg', '2016-05-30 18:54:04', '2016-05-30 18:54:04'),
(164, 35, 'getup', 'thức dậy', '574cf21420dda39820938-cartoon-children-wake-up.jpg', '2016-05-30 19:08:20', '2016-05-30 19:08:20'),
(165, 35, 'have a breakfast', 'ăn sáng', '574cf21432506h.jpg', '2016-05-30 19:08:20', '2016-05-30 19:08:20'),
(166, 35, 'go to school', 'đi đến trường', '574cf2143d02achildren-go-to-school-back-boy-girl-together-cartoon-illustration-33316717.jpg', '2016-05-30 19:08:20', '2016-05-30 19:08:20'),
(167, 35, 'come home', 'về nhà', '574cf2144d81cbackhome.jpg', '2016-05-30 19:08:20', '2016-05-30 19:08:20'),
(168, 35, 'in the morning', 'buổi sáng', '574cf2145b093happy-colorful-illustration-children-29768690.jpg', '2016-05-30 19:08:20', '2016-05-30 19:08:20'),
(169, 35, 'in the afternoon', 'buổi chiều', '574cf21468eb6Good-Afternoon-Cartoon-Gra.gif', '2016-05-30 19:08:20', '2016-05-30 19:08:20'),
(170, 35, 'in the evening', 'buổi tối', '574cf214735damaxresdefault.jpg', '2016-05-30 19:08:20', '2016-05-30 19:08:20'),
(171, 35, 'at night', 'vào ban đêm', '574cf2148231e723-56.jpg', '2016-05-30 19:08:20', '2016-05-30 19:08:20'),
(172, 35, 'go to bed', 'đi ngủ', '574cf2148bb72dreaming.jpg', '2016-05-30 19:08:20', '2016-05-30 19:08:20'),
(173, 35, 'have dinner', 'ăn tối', '574cf214a18d1thanksgiving-family-cartoon.jpg', '2016-05-30 19:08:20', '2016-05-30 19:08:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_details`
--
ALTER TABLE `class_details`
  ADD PRIMARY KEY (`user_id`,`class_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multichoices`
--
ALTER TABLE `multichoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theories`
--
ALTER TABLE `theories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unittests`
--
ALTER TABLE `unittests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vocabularies`
--
ALTER TABLE `vocabularies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `multichoices`
--
ALTER TABLE `multichoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `theories`
--
ALTER TABLE `theories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `unittests`
--
ALTER TABLE `unittests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `vocabularies`
--
ALTER TABLE `vocabularies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
