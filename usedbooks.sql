-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 19, 2023 at 07:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usedbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogcomments`
--

CREATE TABLE `blogcomments` (
  `id` bigint(20) NOT NULL,
  `blog_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `likes` bigint(20) DEFAULT NULL,
  `commentdate` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogcomments`
--

INSERT INTO `blogcomments` (`id`, `blog_id`, `user_id`, `comment`, `likes`, `commentdate`, `created_at`, `updated_at`) VALUES
(1, 10, 21, 'a', NULL, '2023-03-15', '2023-03-15 16:14:08', '2023-03-15 16:14:08'),
(2, 10, 21, 'comment', NULL, '2023-03-15', '2023-03-15 16:15:45', '2023-03-15 16:15:45'),
(3, 10, 21, 'abc', NULL, '2023-03-16', '2023-03-16 05:31:29', '2023-03-16 05:31:29'),
(4, 11, 17, 'rwwr', NULL, '2023-03-16', '2023-03-16 05:47:17', '2023-03-16 05:47:17'),
(5, 11, 17, 'comment demo', NULL, '2023-03-16', '2023-03-16 05:54:35', '2023-03-16 05:54:35'),
(6, 11, 17, 'asd', NULL, '2023-03-17', '2023-03-17 10:36:49', '2023-03-17 10:36:49'),
(7, 10, 24, 'demo', NULL, '2023-03-17', '2023-03-17 10:37:39', '2023-03-17 10:37:39'),
(8, 24, 24, 'nice', NULL, '2023-04-19', '2023-04-19 10:35:35', '2023-04-19 10:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(80) NOT NULL,
  `blog_description` text NOT NULL,
  `bdate` date NOT NULL,
  `bimage1` varchar(60) DEFAULT NULL,
  `bimage2` varchar(60) DEFAULT NULL,
  `blikes` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `blog_title`, `blog_description`, `bdate`, `bimage1`, `bimage2`, `blikes`, `created_at`, `updated_at`) VALUES
(23, 24, 'Synergistically fabricate backend niches', 'Efficiently network prospective content without performance based data. Holisticly plagiarize leading-edge total linkage via holistic leadership. Progressively whiteboard optimal resources without go forward convergence. Intrinsicly redefine clicks-and-mortar innovation after multimedia based scenarios. Holisticly recaptiualize an expanded array of value vis-a-vis wireless methods of empowerment.\r\n\r\nObjectively benchmark cooperative bandwidth and client-focused strategic theme areas. Rapidiously create global experiences for standardized systems. Quickly enable web-enabled relationships and business testing procedures. Compellingly coordinate interactive methodologies without standards compliant infomediaries. Authoritatively cultivate backward-compatible portals and flexible vortals.\r\n\r\nMonotonectally promote visionary web-readiness vis-a-vis inexpensive expertise. Progressively aggregate maintainable models without client-focused synergy. Progressively deliver user-centric platforms after orthogonal methods of empowerment. Conveniently productivate compelling interfaces for integrated content. Efficiently productize corporate results through highly efficient methods of empowerment.\r\n\r\nSeamlessly transform client-centric convergence after an expanded array of convergence. Compellingly leverage existing superior potentialities.', '2023-04-19', '1681900107.jpg', NULL, NULL, '2023-04-19 10:28:27', '2023-04-19 10:28:27'),
(24, 24, 'Dramatically integrate viral technologies', 'Seamlessly syndicate out-of-the-box quality vectors via multimedia based bandwidth. Monotonectally supply team driven quality vectors via mission-critical networks. Efficiently leverage existing top-line communities for business human capital. Interactively evisculate proactive data vis-a-vis premium information. Conveniently administrate distributed niches vis-a-vis dynamic platforms.\r\n\r\nHolisticly aggregate market-driven networks for reliable core competencies. Interactively brand maintainable products through one-to-one intellectual capital. Globally simplify leading-edge schemas with one-to-one leadership. Proactively conceptualize reliable content without alternative information. Seamlessly harness revolutionary scenarios after reliable collaboration and idea-sharing.', '2023-04-19', '1681900518.jpg', NULL, NULL, '2023-04-19 10:35:18', '2023-04-19 10:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` bigint(20) NOT NULL,
  `sellers_id` bigint(20) NOT NULL,
  `seller` varchar(100) DEFAULT NULL,
  `bookname` varchar(40) NOT NULL,
  `bookdescription` text NOT NULL,
  `location` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `bookdate` date NOT NULL,
  `price` float NOT NULL,
  `coverpage1` varchar(60) NOT NULL,
  `coverpage2` varchar(40) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `sellers_id`, `seller`, `bookname`, `bookdescription`, `location`, `address`, `phonenumber`, `bookdate`, `price`, `coverpage1`, `coverpage2`, `created_at`, `updated_at`) VALUES
(25, 24, 'albin joseph', 'demo book 1', 'demo book description 1', 'location 1', 'address 1', '123456789', '2023-04-19', 111, '1681889931.jpg', '1681889931.jpg', '2023-04-19 07:38:51', '2023-04-19 07:38:51'),
(26, 24, 'albin joseph', 'demo book 2', 'demo book description 2', 'location 2', 'address 2', '123456789', '2023-04-19', 222, '1681890125.jpg', '1681890125.jpg', '2023-04-19 07:42:05', '2023-04-19 07:42:05'),
(27, 24, 'albin joseph', 'demo book 3', 'demo book description 3', 'location 3', 'address 3', '123456789', '2023-04-19', 333, '1681890182.jpg', '1681890182.jpg', '2023-04-19 07:43:02', '2023-04-19 07:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `bookcomplaint`
--

CREATE TABLE `bookcomplaint` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `buyer_id` bigint(20) UNSIGNED NOT NULL,
  `complaint` text NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookcomplaint`
--

INSERT INTO `bookcomplaint` (`id`, `seller_id`, `book_id`, `buyer_id`, `complaint`, `status`, `created_at`, `updated_at`) VALUES
(2, 21, 6, 25, 'Your Book is not worthy', 0, '2023-04-11 06:12:08', '2023-04-11 00:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `booksales`
--

CREATE TABLE `booksales` (
  `id` bigint(20) NOT NULL,
  `book_id` bigint(20) NOT NULL,
  `bname` varchar(40) NOT NULL,
  `buyer_id` bigint(20) NOT NULL,
  `seller_id` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `amount` float NOT NULL,
  `status` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booksales`
--

INSERT INTO `booksales` (`id`, `book_id`, `bname`, `buyer_id`, `seller_id`, `date`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 20, 'firstbook', 25, 24, '2023-04-10 00:00:00', 445, 1, '2023-04-10 09:48:42', '2023-04-19 09:31:31'),
(4, 6, 'e', 25, 21, '2023-04-10 00:00:00', 11, 1, '2023-04-10 09:57:54', '2023-04-11 09:46:28'),
(5, 7, 'demo book', 25, 21, '2023-04-10 00:00:00', 120, 1, '2023-04-10 10:36:04', '2023-04-11 09:44:52'),
(6, 22, 'Birthday Gift', 24, 25, '2023-04-13 00:00:00', 520, 0, '2023-04-13 06:21:16', '2023-04-13 06:21:16'),
(7, 6, 'e', 24, 21, '2023-04-13 00:00:00', 11, 0, '2023-04-13 06:27:50', '2023-04-13 06:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `booksellers`
--

CREATE TABLE `booksellers` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `contact_no` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `location` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ctitle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `ctitle`, `description`, `image`, `created_at`, `updated_at`) VALUES
(10, 'UPSC CMS Exam 2023', 'To apply for the UPSC CMS exam 2023, candidates can follow these simple steps: Go to the official website of UPSC CMS 2023 at upsc.gov.in Click on the UPSC CMS Exam 2023 link available on the home page. A new page will open where candidates can check the direct link to apply. Then, do the registration and fill in the application form. Make the payment of the application fee. Once done, click on the submit button.', '1681899544.png', '2023-04-19 10:19:04', '2023-04-19 10:19:04'),
(11, 'ടി.എച്ച്.ഡി.സിയില്‍ എന്‍ജിനീയറിങ് ട്രെയിനി | സ്‌റ്റൈപെന്‍ഡ്: 50,000 രൂപ......', 'യോഗ്യത: 65 ശതമാനം മാര്‍ക്കോടെ നേടിയ ബി.ഇ./ ബി.ടെക്./ ബി.എസ്സി. (എന്‍ജിനീയറിങ്). സിവില്‍, ഇലക്ട്രിക്കല്‍, ഇലക്ട്രിക്കല്‍ (പവര്‍), ഇലക്ട്രിക്കല്‍ ആന്‍ഡ്...', '1681899835.jpg', '2023-04-19 10:23:55', '2023-04-19 10:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `career_comments`
--

CREATE TABLE `career_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `career_id` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `commentdate` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `commentreplies`
--

CREATE TABLE `commentreplies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buyer_id` bigint(20) NOT NULL,
  `seller_id` bigint(20) NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text DEFAULT NULL,
  `reply` text DEFAULT NULL,
  `date` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commentreplies`
--

INSERT INTO `commentreplies` (`id`, `buyer_id`, `seller_id`, `book_id`, `comment`, `reply`, `date`, `created_at`, `updated_at`) VALUES
(1, 25, 21, 6, 'test', 'test reply', '2023-04-10 00:00:00', '2023-04-10 10:17:29', '2023-04-10 15:53:17'),
(2, 25, 21, 6, 'test again', NULL, '2023-04-10 00:00:00', '2023-04-10 10:22:21', '2023-04-10 10:22:21'),
(3, 25, 21, 7, 'tets', NULL, '2023-04-10 00:00:00', '2023-04-10 10:36:18', '2023-04-10 10:36:18'),
(4, 25, 21, 8, 'test', NULL, '2023-04-10 00:00:00', '2023-04-10 10:52:38', '2023-04-10 10:52:38'),
(5, 24, 21, 6, 'nice', NULL, '2023-04-13 00:00:00', '2023-04-13 06:25:59', '2023-04-13 06:25:59'),
(6, 24, 21, 7, 'HELLO', NULL, '2023-04-13 00:00:00', '2023-04-13 11:25:45', '2023-04-13 11:25:45'),
(7, 17, 21, 7, 'hello', NULL, '2023-04-13 00:00:00', '2023-04-13 11:27:52', '2023-04-13 11:27:52'),
(8, 17, 21, 7, 'hi', NULL, '2023-04-13 00:00:00', '2023-04-13 11:28:49', '2023-04-13 11:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `message_subject` varchar(50) NOT NULL,
  `message_content` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `message_subject`, `message_content`, `created_at`, `updated_at`) VALUES
(1, 0, '1', 'qwe', '2023-02-28 13:12:39', '0000-00-00 00:00:00'),
(5, 24, 'demo message', 'demo message', '2023-04-19 09:10:00', '2023-04-19 09:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phoneno` varchar(20) DEFAULT NULL,
  `utype` int(10) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneno`, `utype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'albin', 'albin@gmail.com', NULL, 1, NULL, '$2y$10$RC2HG0zzlpPDV8wFXBU39OoEGwcFstH0S2bRWxdKRwEO6/qm5gFgy', NULL, '2023-01-11 05:29:53', '2023-02-21 01:19:08'),
(9, 'acs', 'adc@gmail.com', NULL, 1, NULL, '$2y$10$7Nu/Q8FSnXjU53cMVXm9J.zZN8Rtf0q7UgeZFvdWltq8jsTAjcyXC', NULL, '2023-01-12 05:07:33', '2023-01-12 05:07:33'),
(10, 'albin2', 'albin2@gmail.com', NULL, 2, NULL, '$2y$10$ISOb1RDNWPRdavzFd9ojCOGpvZ1BxPFMlinoh/L/8QyqMQUDjabv6', NULL, '2023-01-12 05:41:13', '2023-01-12 05:41:13'),
(11, 'abcd', 'abcd@gmail.com', NULL, 1, NULL, '$2y$10$ifAGFgbLtzQYc1n1Ag2UdefT71Pte.XKRpQVcSEKWgGsMfIhNfl/G', NULL, '2023-01-19 03:22:42', '2023-01-19 03:22:42'),
(13, 'abc', 'abc@gmail.com', NULL, 2, NULL, '$2y$10$KJDHTLfNWBN9586hQjuk7ut4q/1RmraricLcr4W0S9qLR3zRmcMPK', NULL, '2023-01-19 03:38:58', '2023-01-19 03:38:58'),
(17, 'gathul', 'gathul@gmail.com', NULL, 2, NULL, '$2y$10$yfDk7bTceqz8jobTlrKkhuxYl0UA.HSiJ96aVOVmIfuQjFMOQwI5q', NULL, '2023-01-21 04:06:24', '2023-03-08 11:08:57'),
(18, 'soya', 'soya@gmail.com', NULL, 1, NULL, '$2y$10$WDluWZWGCy52WI5254JHouip1jq72s7yR0V./6Mki7XYp1vmPBdMm', NULL, '2023-01-25 01:21:58', '2023-01-25 01:21:58'),
(19, 'shibina', 'shibina@gmail.com', '12345', 2, NULL, '$2y$10$JQfHEgcmXAkvJ1POkmGgm.oRUN0TVxmYNiO6fVVeth9jU9eW9y952', NULL, '2023-02-06 05:29:32', '2023-02-06 05:29:32'),
(20, 'arunima', 'arunima@gmail.com', '7902748478', 2, NULL, '$2y$10$NEdvGljnVwxrgmaNdi8mAenkbM6bMW6oPWmclwfetiQZEdvKYoiDW', NULL, '2023-02-07 01:11:56', '2023-02-20 05:46:50'),
(21, 'albin', 'albin123@gmail.com', NULL, 1, NULL, '$2y$10$.4JfG13nCnYuHEm5B.ELEuYF/.iyIyIIYN6Efg2r33BWe5cnMtcrq', NULL, '2023-02-22 04:53:40', '2023-02-22 04:53:40'),
(22, 'albz', 'albz@gmail.com', NULL, 1, NULL, '$2y$10$JL2JTDgzuyY25c.ErZMIvuHRY8l1/RoW3QFPhwgX7BwkXqv7rUnMi', NULL, '2023-03-08 10:07:37', '2023-03-08 10:07:37'),
(23, 'aa', 'aa@gmail.com', '111', 2, NULL, '$2y$10$N2GGarnRovWR2KXW5mKWtuo4582p9UMqB5TMIqN6Xhe62yxzFg2Pe', NULL, '2023-03-08 11:01:13', '2023-03-08 11:01:13'),
(24, 'albin joseph', 'albinjoseph@gmail.com', '9902941309', 2, NULL, '$2y$10$6uB7bMslKA2nUdrbvHP05.EUF25vaY4KIypcUAJG2GTPlFr3XhaCy', NULL, '2023-03-08 23:52:04', '2023-03-08 23:52:04'),
(25, 'joseph', 'joseph@gmail.com', '9656323656', 2, NULL, '$2y$10$0zj/IKxZkttPEOgNWEHLieLqpyGv4q2lQfyGi3dxUF25EQHU24wjC', NULL, '2023-04-10 03:47:59', '2023-04-10 03:47:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogcomments`
--
ALTER TABLE `blogcomments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`blog_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sellers_id` (`sellers_id`);

--
-- Indexes for table `bookcomplaint`
--
ALTER TABLE `bookcomplaint`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `sellers_id` (`seller_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `buyer_id` (`buyer_id`);

--
-- Indexes for table `booksales`
--
ALTER TABLE `booksales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `buyer` (`buyer_id`),
  ADD KEY `bname` (`bname`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `booksellers`
--
ALTER TABLE `booksellers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_comments`
--
ALTER TABLE `career_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `career_id` (`career_id`);

--
-- Indexes for table `commentreplies`
--
ALTER TABLE `commentreplies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id` (`buyer_id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogcomments`
--
ALTER TABLE `blogcomments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `bookcomplaint`
--
ALTER TABLE `bookcomplaint`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booksales`
--
ALTER TABLE `booksales`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booksellers`
--
ALTER TABLE `booksellers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `career_comments`
--
ALTER TABLE `career_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `commentreplies`
--
ALTER TABLE `commentreplies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
