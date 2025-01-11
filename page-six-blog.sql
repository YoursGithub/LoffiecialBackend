-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 07:32 PM
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
-- Database: `page-six-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `bio` longtext NOT NULL,
  `image` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `bio`, `image`, `created_at`, `updated_at`) VALUES
(1, 'saurojit karmakar', 'sdfssd', '/images/author/man.jpg', '2024-11-19 07:40:10', '2024-11-19 07:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `headline` tinyint(1) NOT NULL DEFAULT 0,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `headline`, `parent_id`, `created_at`, `updated_at`) VALUES
(2, 'l\'essentials', 0, NULL, '2024-11-18 03:18:55', '2025-01-08 23:31:00'),
(3, 'beauty', 0, NULL, '2024-11-18 03:19:03', '2025-01-08 23:31:15'),
(4, 'entertainment', 0, NULL, '2024-11-18 03:19:11', '2025-01-08 23:31:27'),
(5, 'lifestyle', 0, NULL, '2024-11-18 03:19:19', '2024-11-18 03:19:19'),
(6, 'fashion', 0, NULL, '2024-11-18 03:19:26', '2024-11-18 03:19:26'),
(7, 'music', 0, NULL, '2024-11-18 03:19:34', '2025-01-08 23:32:43'),
(9, 'celebrity', 0, NULL, '2025-01-08 23:33:15', '2025-01-08 23:33:15');

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
-- Table structure for table `first_posts`
--

CREATE TABLE `first_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `first_posts`
--

INSERT INTO `first_posts` (`id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 61, '2025-01-02 04:42:31', '2025-01-09 22:49:58'),
(2, 53, '2024-11-20 04:47:02', '2025-01-02 04:42:40');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_05_132302_create_posts_table', 1),
(6, '2024_10_04_203157_create_first_posts_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED DEFAULT NULL,
  `trending` tinyint(1) NOT NULL DEFAULT 0,
  `title` text NOT NULL,
  `slug` longtext NOT NULL,
  `blog` longtext NOT NULL,
  `thumbnail` longtext NOT NULL,
  `description` longtext DEFAULT NULL,
  `image_caption` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `author_id`, `trending`, `title`, `slug`, `blog`, `thumbnail`, `description`, `image_caption`, `keywords`, `created_at`, `updated_at`, `deleted_at`) VALUES
(21, 2, 1, 0, 'title for post - 5689', 'title-for-post-5689', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/gratisography-cyber-kitty-1170x780_1722245825.jpg', 'Description', NULL, 'keyyy', '2024-11-19 07:42:32', '2024-11-20 03:49:54', NULL),
(23, 6, 1, 0, 'title for post - 8774', 'title-for-post-8774', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/HE.jpg', 'Description', NULL, 'keyyy', '2024-11-19 07:42:32', '2024-11-22 04:34:42', NULL),
(24, 6, 1, 0, 'title for post - 7311', 'title-for-post-7311', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-19 07:42:32', '2024-11-19 07:42:32', NULL),
(26, 3, 1, 0, 'title for post - 4881', 'title-for-post-4881', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-19 07:42:32', '2024-11-19 07:42:32', NULL),
(27, 5, 1, 0, 'title for post - 7910', 'title-for-post-7910', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-19 07:42:32', '2024-11-19 07:42:32', NULL),
(28, 6, 1, 0, 'title for post - 7309', 'title-for-post-7309', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-19 07:42:32', '2024-11-19 07:42:32', NULL),
(30, 4, 1, 0, 'title for post - 8132', 'title-for-post-8132', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-19 07:42:32', '2024-11-19 07:42:32', NULL),
(32, 5, 1, 0, 'title for post - 9355', 'title-for-post-9355', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-19 07:42:32', '2024-11-19 07:42:32', NULL),
(35, 5, 1, 0, 'title for post - 5221', 'title-for-post-5221', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-19 07:42:32', '2024-11-19 07:42:32', NULL),
(37, 2, 1, 0, 'title for post - 4754', 'title-for-post-4754', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-19 07:42:32', '2024-11-19 07:42:32', NULL),
(41, 4, 1, 0, 'title for post - 5717', 'title-for-post-5717', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:03', '2024-11-22 04:38:03', NULL),
(42, 3, 1, 0, 'title for post - 4311', 'title-for-post-4311', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:03', '2024-11-22 04:38:03', NULL),
(44, 5, 1, 1, 'title for post - 6127', 'title-for-post-6127', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2025-01-09 23:21:07', NULL),
(45, 2, 1, 0, 'mcuu title', 'mcuu-title', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', 'image source www.google.comsss', 'keyyy', '2024-11-22 04:38:04', '2025-01-02 04:34:20', NULL),
(48, 3, 1, 0, 'title for post - 9169', 'title-for-post-9169', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2024-11-22 04:38:04', NULL),
(49, 3, 1, 0, 'title for post - 6299', 'title-for-post-6299', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2024-11-22 04:38:04', NULL),
(50, 6, 1, 0, 'title for post - 9979', 'title-for-post-9979', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2024-11-22 04:38:04', NULL),
(51, 5, 1, 1, 'title for post - 5480', 'title-for-post-5480', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2025-01-09 23:38:56', NULL),
(52, 4, 1, 0, 'title for post - 6628', 'title-for-post-6628', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/gratisography-cyber-kitty-1170x780_1722245825.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2025-01-02 15:06:14', NULL),
(53, 7, 1, 1, 'wwwwwwwww title for post - 3483', 'wwwwwwwww-title-for-post-3483', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/gratisography-cyber-kitty-1170x780_1722245825.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2025-01-09 23:39:22', NULL),
(54, 5, 1, 0, 'title for post - 3026', 'title-for-post-3026', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2024-11-22 04:38:04', NULL),
(55, 2, 1, 0, 'title for post - 7914', 'title-for-post-7914', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2024-11-22 04:38:04', NULL),
(56, 7, 1, 0, 'title for post - 9963', 'title-for-post-9963', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2024-11-22 04:38:04', NULL),
(57, 4, 1, 0, 'title for post - 3496', 'title-for-post-3496', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2024-11-22 04:38:04', NULL),
(58, 4, 1, 0, 'title for post - 1247', 'title-for-post-1247', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2024-11-22 04:38:04', NULL);
INSERT INTO `posts` (`id`, `category_id`, `author_id`, `trending`, `title`, `slug`, `blog`, `thumbnail`, `description`, `image_caption`, `keywords`, `created_at`, `updated_at`, `deleted_at`) VALUES
(59, 3, 1, 0, 'title for post - 5969', 'title-for-post-5969', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2024-11-22 04:38:04', NULL),
(60, 5, 1, 0, 'title for post - 9147', 'title-for-post-9147', '<p>This story contains major spoilers for Deadpool &amp; Wolverine.</p><p>Emma Corrin has spent much of the past year trying to not let anything slip. Across a months-long promotional tour for Deadpool &amp; Wolverine—in which they play villainous mutant Cassandra Nova —they\'ve been unable to get into any real specifics. When they spoke to GQ for a feature story this spring, they couldn\'t even confirm who they were playing.</p><p>But the movie is finally in theaters, and Disney\'s snipers are off to surveil some other poor soul. So we grabbed an extra 30 minutes with them to get into everything, including killing an iconic Marvel hero played by a beloved Marvel Cinematic Universe actor, the practical effects behind Cassandra\'s final scene, and their future in the MCU.</p><p>GQ: Deadpool &amp; Wolverine is finally out. Are you relieved?</p><p>Emma Corrin: Yeah, I can finally breathe and stop this insane filter that I\'ve had to have doing interviews.</p><p>WATCH</p><p>&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1170/780;\" src=\"/images/posts/gratisography-cyber-kitty-1170x780_1722245825.jpg\" width=\"1170\" height=\"780\"></figure><p><br>The last time you spoke to us, you couldn\'t talk about your character, Cassandra Nova. So, let\'s get into it. How much reading did you have to do?</p><p>I actually didn\'t end up doing that much. There\'s a huge Marvel database online, which is really cool and very extensive. Each character has details, powers and history. And I read that and the main thing that stood out to me was her origin story, being the evil twin sister of Charles Xavier, and how he kills her in the womb with his powers and thinks she\'s dead. And then she</p>', '/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg', 'Description', NULL, 'keyyy', '2024-11-22 04:38:04', '2024-11-22 04:38:04', NULL),
(61, 6, 1, 1, 'Sed similique eos e', 'sed-similique-eos-e', '<h2 class=\"wp-block-heading\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;clear:both;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">A Thriving Industry in the Digital<a href=\"https://fhm.com/the-wild-world-of-adult-camming-inside-the-live-streaming-craze/\"> </a>Age</h2><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">The adult camming industry has completely transformed how viewers interact with adult entertainment, becoming a cultural and economic force. This industry thrives on real-time engagement beyond pre-recorded movies and producing highly customized user experiences. Millions of users sign up daily to interact with artists, participate in live discussions, and watch an ever-growing selection of performances. However, navigating this fast-paced world can take time and effort because of many platforms and possibilities. Knowing its history, distinctive appeal, and industry difficulties helps clarify the elements influencing its success and continuous change.</p><p>&nbsp;</p><h2 class=\"wp-block-heading\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;clear:both;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">The Evolution of Adult Camming</h2><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Since its inception, adult camming has advanced significantly. Previously regarded as a specialized sector, it now accounts for much of the entertainment industry. The shift to live streaming from pre-recorded content has revolutionized user interaction. Through live chat, tipping, and private sessions, camming provides a two-way exchange that lets users speak with performers directly, unlike traditional forms.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Technological developments have been essential to this development. Virtual reality, high-definition video, and faster internet have improved the user experience by making live streaming more accessible and engaging. Platforms have likewise become more diverse to serve a wider variety of interests, nationalities, and preferences. In addition to the quest for more authentic and customized interactions, which has altered how individuals consume pornographic content, camming has evolved as a result of technological improvements.</p><h2 class=\"wp-block-heading\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;clear:both;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">What Makes Camming Unique?</h2><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">The appeal of camming is that it is different from other types of adult entertainment. Unlike pre-recorded video, the real-time element produces an interactive experience. By submitting requests or interacting with performers in an impromptu and intimate manner, viewers have direct control over the entertainment.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Camming also empowers models by giving them control over their performances. Many performers work independently or under flexible arrangements, choosing their schedules, themes, and engagement levels. This agency has made camming a preferred avenue for many<a href=\"https://fhm.com/the-wild-world-of-adult-camming-inside-the-live-streaming-craze/\"> seeking</a> to enter the <a style=\"background-color:transparent;box-sizing:border-box;color:rgb(255, 50, 9);text-decoration:none;transition:0.3s linear;\" href=\"https://en.wikipedia.org/wiki/Sex_industry\" target=\"_blank\" rel=\"noreferrer noopener\">adult entertainment industry</a>.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">On the user side, the variety of performers and the ability to filter by preferences—such as age, language, or interests—ensure there’s something for everyone. This customization enhances the user experience and drives the industry’s broad appeal, attracting audiences worldwide.</p><h2 class=\"wp-block-heading\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;clear:both;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Challenges in the Industry</h2><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Despite its popularity, the adult camming industry faces several challenges. One of the most pressing issues is maintaining trust and safety. Users and performers must navigate concerns around data privacy, financial security, and ethical platform practices. Transparency is essential, but not all platforms uphold high standards.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">There is also fierce competition due to the sheer volume of platforms and performances. Because of this, visitors may find it challenging to determine which websites are trustworthy and worthwhile. Performers may experience burnout or pressure to live up to inflated expectations due to trying to stand out in a crowded market.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Lastly, the stigma associated with adult labor persists, which hinders the general acceptance of camming as a respectable profession. While progress has been made, challenges in destigmatization persist for both performers and the platforms that support them.</p><h2 class=\"wp-block-heading\" style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;clear:both;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;letter-spacing:normal;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">The Role of Reviews and Feedback in Camming</h2><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">In an industry as vast as camming, reviews and feedback are critical in guiding users and performers. Reliable reviews through popular <a style=\"background-color:transparent;box-sizing:border-box;color:rgb(255, 50, 9);text-decoration:none;transition:0.3s linear;\" href=\"https://camsrank.com/\" target=\"_blank\" rel=\"noreferrer noopener\">user-rating platforms like CamsRank</a> help users identify platforms that align with their preferences, offering insights into video quality, ease of navigation, model diversity, and payment security. They also provide a sense of accountability, pushing platforms to improve their services.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">User feedback can be equally valuable for performers. Constructive reviews allow models to adjust their performances, enhance offerings, and build stronger relationships with their audience. However, not all reviews are equal—objective, balanced evaluations are crucial to avoid misinformation or bias.</p><p style=\"-webkit-text-stroke-width:0px;background-color:rgb(255, 255, 255);box-sizing:border-box;color:rgb(0, 0, 0);font-family:Roboto, sans-serif;font-size:18px;font-style:normal;font-variant-caps:normal;font-variant-ligatures:normal;font-weight:400;letter-spacing:0.5px;margin:1em 0px;orphans:2;text-align:start;text-decoration-color:initial;text-decoration-style:initial;text-decoration-thickness:initial;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;\">Integrating expert assessments and user-generated content creates a comprehensive picture of the industry. This dual approach ensures that platforms remain competitive while providing users with trustworthy information to make informed choices.</p>', '/images/thumbnail/LEARNING.png', 'Vero in pariatur Ve', 'Amet porro cumque l', 'Reprehenderit volupt', '2025-01-01 09:23:21', '2025-01-09 22:52:47', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$iWb9WBKd1r15cvfQ1s87OeRnisnRQVMLOozW3EBSacM98fDRnHW/m', 'lSVqobGaKAkKqoy2J9PasqU8wyRRCguCQuZdvQOaPp9ks2LqAQcqd6zyOlrN', '2024-11-18 03:17:58', '2024-11-18 03:17:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `first_posts`
--
ALTER TABLE `first_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `first_posts_post_id_foreign` (`post_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_author_id_foreign` (`author_id`);

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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `first_posts`
--
ALTER TABLE `first_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `first_posts`
--
ALTER TABLE `first_posts`
  ADD CONSTRAINT `first_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
