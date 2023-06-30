-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 08:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_settings`
--

CREATE TABLE `about_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title_description` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `freelance` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_settings`
--

INSERT INTO `about_settings` (`id`, `description`, `title`, `title_description`, `birth_date`, `age`, `website`, `degree`, `phone`, `email`, `city`, `freelance`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut la magna aliqua.', 'Quality Assurance Engineer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1998-06-12', '25', 'www.example.com', 'BSC computer science', '+94778720065', 'sasi.sasitharan12@gmail.com', 'watagoda', 'available', 'uploads/about/1687355228.jpg', '2023-06-21 08:16:41', '2023-06-22 07:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `contact_settings`
--

CREATE TABLE `contact_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_settings`
--

INSERT INTO `contact_settings` (`id`, `address`, `email`, `phone`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Sri Lanka , kandy', 'sasi.sasitharan12@gmail.com', '+94778720065', 'https://goo.gl/maps/xfjvf2vmqY2by39r7', '2023-06-23 02:21:27', '2023-06-23 03:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sasi tharan', 'sasi.sasitharan12@gmail.com', 'comments', 'sadsadsad', '2023-06-29 03:01:21', '2023-06-29 03:01:21'),
(2, 'sasi tharan', 'sasi.sasitharan12@gmail.com', 'comments', 'dsfdsf', '2023-06-29 03:01:50', '2023-06-29 03:01:50'),
(3, 'sasi tharan', 'sasi.sasitharan12@gmail.com', 'comments', 'zxcxzcxzc', '2023-06-29 03:02:45', '2023-06-29 03:02:45'),
(4, 'sasi tharan', 'sasi.sasitharan12@gmail.com', 'comments', 'xzcxzc', '2023-06-29 03:03:31', '2023-06-29 03:03:31'),
(5, 'sasi tharan', 'sasi.sasitharan12@gmail.com', 'xcvcxvcx', 'vcxvcxvx', '2023-06-29 03:05:46', '2023-06-29 03:05:46'),
(6, 'elucas', 'sasi.sasitharan12@gmail.com', 'xzcxzczxc', 'zxczxczxczxcxzc', '2023-06-29 03:06:51', '2023-06-29 03:06:51'),
(7, 'sasi tharan', 'sasi.sasitharan12@gmail.com', 'xcvcxvcx', 'dsxvvdsv', '2023-06-29 03:07:23', '2023-06-29 03:07:23'),
(8, 'sasi tharan', 'sasi.sasitharan12@gmail.com', 'dsfds', 'dsfdsfsd', '2023-06-29 03:08:15', '2023-06-29 03:08:15'),
(9, 'sasi', 'sasi.sasitharan12@gmail.com', 'comments', 'hi', '2023-06-29 03:10:16', '2023-06-29 03:10:16'),
(10, 'john', 'sasi.sasitharan12@gmail.com', 'comments john', 'dsfsdfdsfdsf', '2023-06-29 03:11:18', '2023-06-29 03:11:18'),
(11, 'asdasd', 'asdasd@gmail.com', 'asdasdsad', 'asdasdsads', '2023-06-29 03:13:21', '2023-06-29 03:13:21'),
(12, 'sasi tharan', 'sasi.sasitharan12@gmail.com', 'asdsad', 'sadsad', '2023-06-29 04:39:41', '2023-06-29 04:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `edu_settings`
--

CREATE TABLE `edu_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_to` varchar(255) NOT NULL,
  `end_to` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=active,1=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `edu_settings`
--

INSERT INTO `edu_settings` (`id`, `title`, `start_to`, `end_to`, `university`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bsc Computer Science', '2023', 'Present', 'ICBT', 'Top Up Degree', 0, '2023-06-28 00:12:14', '2023-06-28 00:26:07'),
(3, 'HND', '2021', '2022', 'ICBT', 'Higher National Diploma in Computing & Software Engineering', 0, '2023-06-28 00:27:54', '2023-06-28 00:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `fact_settings`
--

CREATE TABLE `fact_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clients` varchar(255) NOT NULL,
  `projects` varchar(255) NOT NULL,
  `hours_of_support` varchar(255) NOT NULL,
  `hard_workers` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fact_settings`
--

INSERT INTO `fact_settings` (`id`, `clients`, `projects`, `hours_of_support`, `hard_workers`, `created_at`, `updated_at`) VALUES
(1, '5', '5', '1500', '2', '2023-06-25 04:40:05', '2023-06-25 04:40:26');

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
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `designer` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `title`, `designer`, `link`, `year`, `created_at`, `updated_at`) VALUES
(1, 'MyPortfolio', 'Sasitharan', 'www.sasitharan.com', '2023', '2023-06-29 04:34:59', '2023-06-29 04:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `home_settings`
--

CREATE TABLE `home_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job1` varchar(255) DEFAULT NULL,
  `job2` varchar(255) DEFAULT NULL,
  `job3` varchar(255) DEFAULT NULL,
  `job4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_settings`
--

INSERT INTO `home_settings` (`id`, `name`, `job1`, `job2`, `job3`, `job4`, `created_at`, `updated_at`) VALUES
(1, 'Sasitharan Chandrasekaran', 'Quality Assurance Engineer', 'Full Stack Developer', 'Android Developer', 'Freelancer', '2023-06-21 07:13:34', '2023-06-22 07:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=active,1=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `link`, `class`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(2, 'https://www.linkedin.com/in/sasi-tharan/', 'linkedin', 'bx bxl-linkedin', 0, '2023-06-30 01:06:05', '2023-06-30 01:06:05'),
(3, 'https://www.whatsapp.com/', 'whatsapp', 'bx bxl-whatsapp', 0, '2023-06-30 01:06:23', '2023-06-30 01:06:23'),
(4, 'https://github.com/sactharan', 'gtihub', 'bx bxl-github', 0, '2023-06-30 01:06:41', '2023-06-30 01:06:41'),
(5, 'www.instagram.com', 'instagram', 'bx bxl-instagram', 0, '2023-06-30 01:08:15', '2023-06-30 01:08:15'),
(6, 'www.facebook.com', 'facebook', 'bx bxl-facebook', 0, '2023-06-30 01:08:32', '2023-06-30 01:08:32');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_20_135746_add_details_to_users_table', 2),
(7, '2023_06_21_122721_create_home_settings_table', 3),
(8, '2023_06_21_130258_create_about_settings_table', 4),
(9, '2023_06_22_060554_create_skills_table', 5),
(10, '2023_06_23_073207_create_contact_table', 6),
(11, '2023_06_23_073515_create_contact_table', 7),
(12, '2023_06_23_074433_create_contact_settings_table', 8),
(13, '2023_06_25_093748_create_summary_settings_table', 9),
(14, '2023_06_25_095829_create_fact_settings_table', 10),
(16, '2023_06_26_062726_create_professional_settings_table', 11),
(17, '2023_06_28_052918_create_edu_settings_table', 12),
(18, '2023_06_28_142452_create_skills_table', 13),
(19, '2023_06_28_145243_create_services_table', 14),
(20, '2023_06_28_153318_create_testimonials_table', 15),
(21, '2023_06_29_053821_create_contact_us_table', 16),
(23, '2023_06_29_095308_create_footer_table', 17),
(25, '2023_06_29_101234_create_portfolio_category_table', 18),
(27, '2023_06_29_102753_create_portfolio_table', 19),
(32, '2023_06_29_131550_create_links_table', 20);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=active,1=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `category_id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ecommerce Website', 'uploads/portfolio/1688044217.jpg', 0, '2023-06-29 07:40:17', '2023-06-29 07:40:17'),
(2, 2, 'Desktop Java Application', 'uploads/portfolio/1688044246.jpg', 0, '2023-06-29 07:40:46', '2023-06-29 07:40:46'),
(3, 3, 'Simple Pos Billing App', 'uploads/portfolio/1688044283.jpg', 0, '2023-06-29 07:41:23', '2023-06-29 07:41:23'),
(4, 4, 'Ecommerce Website Testing', 'uploads/portfolio/1688044315.jpg', 0, '2023-06-29 07:41:55', '2023-06-29 07:41:55'),
(5, 1, 'CRM App', 'uploads/portfolio/1688044335.png', 0, '2023-06-29 07:42:15', '2023-06-29 07:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_category`
--

CREATE TABLE `portfolio_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=active,1=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_category`
--

INSERT INTO `portfolio_category` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Website App', 0, '2023-06-29 04:55:28', '2023-06-29 04:55:28'),
(2, 'Desktop App', 0, '2023-06-29 04:55:40', '2023-06-29 04:55:40'),
(3, 'Mobile App', 0, '2023-06-29 04:55:53', '2023-06-29 04:55:53'),
(4, 'Software Testing', 0, '2023-06-29 04:56:03', '2023-06-29 04:56:33');

-- --------------------------------------------------------

--
-- Table structure for table `professional_settings`
--

CREATE TABLE `professional_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `start_to` varchar(255) NOT NULL,
  `end_to` varchar(255) NOT NULL,
  `point1` varchar(255) NOT NULL,
  `point2` varchar(255) NOT NULL,
  `point3` varchar(255) NOT NULL,
  `point4` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=active,1=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_settings`
--

INSERT INTO `professional_settings` (`id`, `title`, `address`, `start_to`, `end_to`, `point1`, `point2`, `point3`, `point4`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Associate Quality Assurance Engineer', 'Colombo, Sri Lanka', '2023- March', 'Present', 'Lead in the design, development, and implementation of the graphic, layout, and production communication materials', 'Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.', 'Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design', 'Oversee the efficient use of production project budgets ranging from $2,000 - $25,000', 0, NULL, '2023-06-27 09:29:33'),
(2, 'dsfcdsf', 'dsfdsf', 'dsfdsf', 'dsfsd', 'sdfds', 'dsfdsf', 'sdfdsf', 'dsfds', 1, '2023-06-27 08:19:35', '2023-06-27 09:28:31'),
(4, 'dsvfsdv', 'xcvcxv', 'cxvcx', 'cxv', 'xcvxcv', 'xcvcx', 'vcxvcxv', 'xcv', 1, '2023-06-27 09:24:49', '2023-06-27 09:25:09'),
(5, 'Quality Assurance Engineer', 'Colombo 10, Sri Lanka', '2022-June', '2022-Dec', 'Learned Software Testing Principle', 'Managed to write test case and test plan', 'worked on real projects with manual and automation testing', 'Learned selenium, appium, katalon, Java,', 0, '2023-06-27 09:28:17', '2023-06-27 09:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=active,1=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Website Development', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 0, '2023-06-28 09:37:16', '2023-06-28 09:37:16'),
(2, 'Software Web Application Testing', 'Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata', 0, '2023-06-28 09:37:38', '2023-06-28 09:37:38'),
(3, 'Mobile Application Development', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 0, '2023-06-28 09:37:57', '2023-06-28 09:37:57'),
(4, 'Software Code Bug Fixing', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 0, '2023-06-28 09:38:15', '2023-06-28 09:38:15'),
(5, 'Software Manual Testing with Reports', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 0, '2023-06-28 09:38:39', '2023-06-28 09:38:39'),
(6, 'Wordpress Developement', 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi', 0, '2023-06-28 09:39:00', '2023-06-28 09:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=active,1=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `percentage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HTML', '100', 0, '2023-06-28 09:10:12', '2023-06-28 09:10:12'),
(2, 'CSS', '90', 0, '2023-06-28 09:10:22', '2023-06-28 09:10:22'),
(3, 'JAVASCRIPT', '100', 0, '2023-06-28 09:10:35', '2023-06-28 09:10:35'),
(4, 'PHP', '90', 0, '2023-06-28 09:10:50', '2023-06-28 09:10:59'),
(5, 'LARAVEL', '75', 0, '2023-06-28 09:11:13', '2023-06-28 09:11:13'),
(6, 'JAVA', '80', 0, '2023-06-28 09:11:28', '2023-06-28 09:11:28'),
(7, 'WordPress', '100', 1, '2023-06-28 09:11:48', '2023-06-28 09:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `summary_settings`
--

CREATE TABLE `summary_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `summary_settings`
--

INSERT INTO `summary_settings` (`id`, `title`, `description`, `address`, `contact`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Sasitharan Chandrasekaran', 'Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.', 'Sri Lanka , kandy', '0778720065', 'sasi.sasitharan12@gmail.com', '2023-06-25 04:21:10', '2023-06-25 04:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=active,1=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job`, `review`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sara Wilson', 'Designer', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'uploads/testimonial/1687967376.jpg', 0, '2023-06-28 10:19:36', '2023-06-28 10:19:36'),
(3, 'Saindhavi', 'Store Owner', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'uploads/testimonial/1687968104.jpg', 0, '2023-06-28 10:31:44', '2023-06-28 10:31:44'),
(4, 'Ramkumar', 'Ceo of Coke', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'uploads/testimonial/1687968165.jpg', 0, '2023-06-28 10:32:46', '2023-06-28 10:32:46'),
(5, 'John Larson', 'Enterprenuer', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'uploads/testimonial/1687968188.jpg', 0, '2023-06-28 10:33:08', '2023-06-28 10:33:08'),
(6, 'Dilshan', 'Freelancer', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'uploads/testimonial/1687968213.jpg', 0, '2023-06-28 10:33:33', '2023-06-28 10:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user,1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_as`) VALUES
(1, 'admin', 'admin1@gmail.com', NULL, '$2y$10$8vI2186zQFzSY6vBAc.kF.JT3gl3JfQhVAxEHIr76GoRPeKQG.Cu6', NULL, '2023-06-20 07:49:58', '2023-06-20 07:49:58', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_settings`
--
ALTER TABLE `about_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_settings`
--
ALTER TABLE `contact_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edu_settings`
--
ALTER TABLE `edu_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fact_settings`
--
ALTER TABLE `fact_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_settings`
--
ALTER TABLE `home_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolio_category_id_foreign` (`category_id`);

--
-- Indexes for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_settings`
--
ALTER TABLE `professional_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary_settings`
--
ALTER TABLE `summary_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `about_settings`
--
ALTER TABLE `about_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_settings`
--
ALTER TABLE `contact_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `edu_settings`
--
ALTER TABLE `edu_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fact_settings`
--
ALTER TABLE `fact_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_settings`
--
ALTER TABLE `home_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio_category`
--
ALTER TABLE `portfolio_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `professional_settings`
--
ALTER TABLE `professional_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `summary_settings`
--
ALTER TABLE `summary_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `portfolio_category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
