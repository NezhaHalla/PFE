-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 avr. 2024 à 15:46
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `scholarnet`
--

-- --------------------------------------------------------

--
-- Structure de la table `assignments`
--

CREATE TABLE `assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `fichier` varchar(255) DEFAULT NULL,
  `deadline` datetime NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assignments`
--

INSERT INTO `assignments` (`id`, `titre`, `description`, `fichier`, `deadline`, `teacher_id`, `module_id`, `role`, `created_at`, `updated_at`) VALUES
(3, 'Automated Attendance', 'Automated Attendance Tracking Automated Attendance Tracking Automated Attendance Tracking', 'assignment/gpS15oaRcxbheqsF859kvjhKoX5YG6vmhwIIi83m.docx', '2024-02-29 05:05:00', 18, 9, 'TP', '2024-03-19 03:02:19', '2024-03-19 03:02:19'),
(4, 'Communication Portal', 'By wrapping the delete button code inside the @if directive, you ensure that the button is only displayed when the deadline has not passed. Adjust the condition as needed based on your specific requirements for handling deadlines.', 'assignment/aPw7svcQkhqVzKLsR1TJbrp0joqqzcXTPj0BuTnk.docx', '2024-05-04 21:37:00', 19, 10, 'Announce', '2024-03-21 21:39:50', '2024-03-21 21:39:50'),
(8, 'MVC and controller', 'Sur cette page, vous trouverez tous les devoirs envoyés par les étudiants, avec leur note attribuée par l\'enseignant.', NULL, '2024-05-25 17:54:00', 18, 9, 'TP', '2024-03-31 16:55:10', '2024-03-31 16:55:10'),
(9, 'Communication Portal', ', l\'étudiant trouve une liste des devoirs qu\'il a envoyés, avec des options pour télécharger le fichier ou supprimer le devoir.', 'assignment/iU5wEAcRBlGxVkg4eZoqRTMkm2Gm85FZKfRxDTcb.docx', '2024-05-19 17:56:00', 18, 9, 'EXAM', '2024-03-31 16:56:37', '2024-03-31 16:56:37'),
(10, 'Automated Attendance', 'Automated Attendance Trackinga Automated Attendance Trackinga Automated Attendance Trackinga', NULL, '2024-05-05 17:59:00', 18, 9, 'Announce', '2024-03-31 16:59:06', '2024-03-31 16:59:06'),
(11, 'Haking and security', 'dans cette page l\'etudent trouver une list des devoir il est envoie avec les option de telecharger fichier ou supprimer le devoir', 'assignment/nhymCQmbPvyfv5rT9sA11ZvFOLniHP9TCAXrPCBy.docx', '2024-04-28 18:08:00', 20, 11, 'TP', '2024-03-31 17:02:52', '2024-03-31 17:02:52'),
(12, 'Security accounts', 'Sur cette page, vous trouverez toutes les classes de l\'université avec les informations de chaque classe. Le bouton \"Afficher les étudiants présents\" permet de voir tous les étudiants présents dans la classe.', 'assignment/Ta2yxInVbLkWLsCf9MlMCcc4moxjrbxaJI1S4Tp6.docx', '2024-04-30 23:03:00', 20, 11, 'Announce', '2024-03-31 17:04:08', '2024-03-31 17:04:08'),
(13, 'Linux command', 'Sur cette page, vous trouverez toutes les classes de l\'université avec les informations de chaque classe. Le bouton \"Afficher les étudiants présents\" permet de voir tous les étudiants présents dans la classe.', 'assignment/0EP4FTyMCSDrUtpTFrykI4V6kH9bocsR0VxljEQz.docx', '2024-04-28 18:13:00', 20, 11, 'TP', '2024-03-31 17:10:23', '2024-03-31 17:10:23'),
(14, 'Terminal and shell', 'Sur cette page, vous trouverez toutes les classes de l\'université avec les informations de chaque classe. Le bouton \"Afficher les étudiants présents\" permet de voir tous les étudiants présents dans la classe.', NULL, '2024-05-25 18:15:00', 20, 11, 'EXAM', '2024-03-31 17:11:25', '2024-03-31 17:11:25');

-- --------------------------------------------------------

--
-- Structure de la table `assignment_student`
--

CREATE TABLE `assignment_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assignment_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `submission_status` varchar(255) DEFAULT NULL,
  `submission_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Note` double(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assignment_student`
--

INSERT INTO `assignment_student` (`id`, `assignment_id`, `student_id`, `submission_status`, `submission_date`, `created_at`, `updated_at`, `Note`) VALUES
(2, 3, 27, NULL, NULL, '2024-03-19 03:02:19', '2024-03-19 03:02:19', NULL),
(3, 3, 28, NULL, NULL, '2024-03-19 03:02:19', '2024-03-19 03:02:19', NULL),
(4, 4, 27, NULL, NULL, '2024-03-21 21:39:50', '2024-03-21 21:39:50', 18.50),
(5, 4, 28, NULL, NULL, '2024-03-21 21:39:50', '2024-03-21 21:39:50', NULL),
(6, 4, 35, NULL, NULL, '2024-03-21 21:39:50', '2024-03-21 21:39:50', NULL),
(16, 8, 27, NULL, NULL, '2024-03-31 16:55:11', '2024-03-31 16:55:11', 18.00),
(17, 8, 28, NULL, NULL, '2024-03-31 16:55:11', '2024-03-31 16:55:11', NULL),
(18, 8, 35, NULL, NULL, '2024-03-31 16:55:11', '2024-03-31 16:55:11', NULL),
(19, 9, 27, NULL, NULL, '2024-03-31 16:56:37', '2024-03-31 16:56:37', 12.50),
(20, 9, 28, NULL, NULL, '2024-03-31 16:56:37', '2024-03-31 16:56:37', NULL),
(21, 9, 35, NULL, NULL, '2024-03-31 16:56:37', '2024-03-31 16:56:37', NULL),
(22, 10, 27, NULL, NULL, '2024-03-31 16:59:06', '2024-03-31 16:59:06', 13.75),
(23, 10, 28, NULL, NULL, '2024-03-31 16:59:06', '2024-03-31 16:59:06', NULL),
(24, 10, 35, NULL, NULL, '2024-03-31 16:59:06', '2024-03-31 16:59:06', NULL),
(25, 11, 27, NULL, NULL, '2024-03-31 17:02:52', '2024-03-31 17:02:52', 14.00),
(26, 11, 28, NULL, NULL, '2024-03-31 17:02:52', '2024-03-31 17:02:52', NULL),
(27, 11, 35, NULL, NULL, '2024-03-31 17:02:52', '2024-03-31 17:02:52', NULL),
(28, 12, 27, NULL, NULL, '2024-03-31 17:04:08', '2024-03-31 17:04:08', 15.50),
(29, 12, 28, NULL, NULL, '2024-03-31 17:04:08', '2024-03-31 17:04:08', NULL),
(30, 12, 35, NULL, NULL, '2024-03-31 17:04:08', '2024-03-31 17:04:08', NULL),
(31, 13, 27, NULL, NULL, '2024-03-31 17:10:23', '2024-03-31 17:10:23', 15.00),
(32, 13, 28, NULL, NULL, '2024-03-31 17:10:23', '2024-03-31 17:10:23', NULL),
(33, 13, 35, NULL, NULL, '2024-03-31 17:10:23', '2024-03-31 17:10:23', NULL),
(34, 14, 27, NULL, NULL, '2024-03-31 17:11:25', '2024-03-31 17:11:25', 12.75),
(35, 14, 28, NULL, NULL, '2024-03-31 17:11:25', '2024-03-31 17:11:25', NULL),
(36, 14, 35, NULL, NULL, '2024-03-31 17:11:25', '2024-03-31 17:11:25', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `assignment_submissions`
--

CREATE TABLE `assignment_submissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `assignment_id` bigint(20) UNSIGNED NOT NULL,
  `id_student` bigint(20) UNSIGNED NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `assignment_submissions`
--

INSERT INTO `assignment_submissions` (`id`, `assignment_id`, `id_student`, `fichier`, `created_at`, `updated_at`) VALUES
(7, 8, 27, 'exercices/qvxlT659I0ErkGxWq0aSrIserE4xlgO9hiOZ373p.png', '2024-03-31 17:12:36', '2024-03-31 17:12:36'),
(8, 9, 27, 'exercices/tl1d1KSNMR7VestlaCmnrzGrTqAhvB9cKss7dXMz.docx', '2024-03-31 17:13:31', '2024-03-31 17:13:31'),
(9, 10, 27, 'exercices/F4yxTsnj3Pgqo5tvJe2zmm9lYV3Fn1cQ4qwWc26y.docx', '2024-03-31 17:14:21', '2024-03-31 17:14:21'),
(10, 11, 27, 'exercices/VK6AThHJLjIww4knvd7Lo6y840A2ePfQjeDrdthW.docx', '2024-03-31 17:15:52', '2024-03-31 17:15:52'),
(11, 12, 27, 'exercices/A7kZdD25oeKBccS5n63jMWkO6vYAyypJVsLXjPIz.docx', '2024-03-31 17:16:26', '2024-03-31 17:16:26'),
(12, 13, 27, 'exercices/P1rHbZOfJGmqDZufL7FA23KYyNpeLKWJRVVXVplS.docx', '2024-03-31 17:17:07', '2024-03-31 17:17:07'),
(13, 14, 27, 'exercices/3hMKiLB7BMhblODewWZVMPxQ6WMq7cSXGPdvHrfy', '2024-03-31 17:18:07', '2024-03-31 17:18:07'),
(14, 4, 27, 'exercices/FiuMg3rNSx9XEFRd8m1yrGXzxrEgI0XAPCWvEJwk.png', '2024-04-01 00:16:23', '2024-04-01 00:16:23');

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Branch` varchar(255) NOT NULL,
  `Level` varchar(255) NOT NULL,
  `Year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `Name`, `Branch`, `Level`, `Year`, `created_at`, `updated_at`) VALUES
(1, 'GI1_2024', 'Genie Informaique', 'First Year', 2024, '2024-03-14 03:39:01', '2024-03-14 03:39:01'),
(2, 'SD1_2024', 'Science Donnes', 'First Year', 2024, '2024-03-14 03:41:16', '2024-03-14 03:41:16'),
(3, 'GI2_2024', 'Genie Informaique', 'Second Year', 2024, '2024-03-14 03:41:47', '2024-03-14 03:41:47'),
(4, 'SD2_2024', 'Science Donnes', 'Second Year', 2024, '2024-03-14 03:42:11', '2024-03-14 03:42:11');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `subject`, `message`, `created_at`, `updated_at`, `is_read`) VALUES
(1, 'nezha', 'halla', 'nezhahella@gmail.com', 'JavaScript Errors', 'JavaScript Errors JavaScript Errors JavaScript Errors JavaScript Errors JavaScript ErrorsJavaScript ErrorsJavaScript Errors JavaScript Errors', '2024-03-28 21:47:44', '2024-03-30 14:38:43', 1);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_26_213334_create_users_table', 2),
(6, '2024_02_26_214139_create_publications_table', 3),
(7, '2024_03_01_121437_publications', 4),
(8, '2024_03_02_153818_create_users_table', 5),
(11, '2024_03_02_153837_create_publications_table', 6),
(12, '2024_03_03_143549_users_table', 7),
(13, '2024_03_04_223635_classes_table', 8),
(14, '2024_03_04_230249_add_class_id_to_users_table', 8),
(15, '2024_03_14_045045_create_soumestres_table', 9),
(16, '2024_03_14_045106_create_modules_table', 9),
(17, '2024_03_14_045125_create_resources_table', 9),
(18, '2024_03_14_045206_create_student__modules_table', 9),
(19, '2024_03_14_161948_create_years_table', 9),
(20, '2024_03_14_162051_create_student_soumestres_table', 9),
(21, '2024_03_14_164748_add_id_soumestre_to_modules', 10),
(22, '2024_03_14_235814_add_level_to_years', 11),
(23, '2024_03_17_172354_assignments', 12),
(24, '2024_03_17_172415_student_assignments', 12),
(25, '2024_03_18_011700_assignment_submissions', 13),
(26, '2024_03_18_035051_create_contacts_table', 14),
(27, '2024_03_19_012905_add_description_to_assignment_submissions_table', 15),
(28, '2024_03_21_205448_create_contacts_table', 16),
(29, '2024_03_22_014918_add_is_read_to_contacts_table', 16),
(30, '2024_03_22_175317_modify_fichier_column_in_assignments_table', 16),
(31, '2024_03_28_220005_remove_title_from_assignment_submissions', 17),
(32, '2024_03_28_220034_remove_description_from_assignment_submissions', 17),
(33, '2024_03_28_224144_add_is_readr_to_resources_table', 18),
(34, '2024_03_31_190754_remove__note_from_assignment_student', 19),
(35, '2024_03_31_191104_add__note_to_assignment_submissions', 20),
(36, '2024_03_31_192132_add__note_to_assignment_student', 21),
(37, '2024_03_31_192654_remove__note_from_assignment_submissions', 22);

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_teacher` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_soumestre` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id`, `id_teacher`, `nom`, `created_at`, `updated_at`, `id_soumestre`) VALUES
(1, 18, 'Html & Css', '2024-03-18 01:39:42', '2024-03-18 01:39:42', 1),
(2, 19, 'Langague C', '2024-03-18 01:40:08', '2024-03-18 01:40:08', 1),
(3, 20, 'Systeme dexploitation', '2024-03-18 01:41:27', '2024-03-18 01:41:27', 1),
(4, 21, 'Oracle', '2024-03-18 01:42:14', '2024-03-18 01:42:14', 1),
(5, 22, 'Language Python', '2024-03-18 01:45:01', '2024-03-18 01:45:01', 2),
(6, 23, 'Language Java', '2024-03-18 01:45:27', '2024-03-18 01:45:27', 2),
(7, 24, 'Mathematique and Algebre', '2024-03-18 01:45:58', '2024-03-18 01:45:58', 2),
(8, 25, 'Systeme dinformation', '2024-03-18 01:46:37', '2024-03-18 01:46:37', 2),
(9, 18, 'Laravel and PHP', '2024-03-18 01:47:08', '2024-03-18 01:47:08', 3),
(10, 19, 'Langague Cpp', '2024-03-18 01:47:41', '2024-03-18 01:47:41', 3),
(11, 20, 'Linux and Shell', '2024-03-18 01:48:16', '2024-03-18 01:48:16', 3),
(12, 21, 'Method Merise', '2024-03-18 01:48:42', '2024-03-18 01:48:42', 3),
(13, 22, 'Intelligence Artificielle', '2024-03-18 01:49:21', '2024-03-18 01:49:21', 4),
(14, 23, 'Java Avances', '2024-03-18 01:49:54', '2024-03-18 01:49:54', 4),
(15, 24, 'Analyse and Static', '2024-03-18 01:50:31', '2024-03-18 01:50:31', 4),
(16, 25, 'Modelisation UML', '2024-03-18 01:51:16', '2024-03-18 01:51:16', 4);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
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
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagepub` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `imagepub`, `titre`, `description`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'publicaion/AkrFUDGXZaO3W8DuBTDJb3XLOxKa6NHhLg2JIFMQ.jpg', 'Virtual Classroom Integration', 'Experience seamless integration of virtual classrooms into our school management system, providing students and teachers with a dynamic online learning environment.', 'announcement', '2024-03-03 16:49:50', '2024-03-03 16:49:50', NULL),
(2, 'publicaion/lsMW5WTvVddYjrgHRWRkfcWJkPJRLC1xpILCH0pf.jpg', 'Automated Attendance Tracking', 'Our advanced attendance tracking feature automates the tedious task of taking attendance, saving time for teachers and ensuring accurate records for administrative purposes.', 'announcement', '2024-03-03 16:50:43', '2024-03-03 16:50:43', NULL),
(3, 'publicaion/ejbtm54QyE7WcMRnl33SdSQq0XGhkgisugApSysy.jpg', 'Automated Attendance Tracking', 'Our advanced attendance tracking feature automates the tedious task of taking attendance, saving time for teachers and ensuring accurate records for administrative purposes.', 'announcement', '2024-03-03 16:51:18', '2024-03-03 16:51:18', NULL),
(4, 'publicaion/72qdE8LUoQMbleCMyOxr9Xa9dDZHoi2ch5gzgh90.jpg', 'Automated Attendance Tracking', 'Our advanced attendance tracking feature automates the tedious task of taking attendance, saving time for teachers and ensuring accurate records for administrative purposes.', 'announcement', '2024-03-03 16:51:46', '2024-03-03 16:51:46', NULL),
(5, 'publicaion/4TsLGw3z3cIH3MLOuEDAsQzJLg25Zhrc8xRfQDgq.jpg', 'Parent-Teacher Communication Portal', 'Stay connected with your child\'s education through our intuitive parent-teacher communication portal, facilitating easy communication and collaboration between parents and educators.', 'publication', '2024-03-03 16:52:45', '2024-03-03 16:52:45', NULL),
(6, 'publicaion/YfQxXgFyBnAmNk0AjkPXr2GNv0Eyb36QkoLRqk3H.jpg', 'Parent-Teacher Communication Portal', 'Stay connected with your child\'s education through our intuitive parent-teacher communication portal, facilitating easy communication and collaboration between parents and educators.', 'publication', '2024-03-03 16:54:08', '2024-03-03 16:54:08', NULL),
(7, 'publicaion/bROYRh4YzAzq1Lmld8555sSDIU7Lulri1aLIgcSC.jpg', 'Parent-Teacher Communication Portal', 'Stay connected with your child\'s education through our intuitive parent-teacher communication portal, facilitating easy communication and collaboration between parents and educators.', 'publication', '2024-03-03 16:54:36', '2024-03-03 16:54:36', NULL),
(8, 'publicaion/hPmo2g5JZRnga3Pf6kgoRi3ktbGTDUQOTDwTWSyZ.jpg', 'Parent-Teacher Communication Portal', 'Stay connected with your child\'s education through our intuitive parent-teacher communication portal, facilitating easy communication and collaboration between parents and educators.', 'publication', '2024-03-03 16:55:13', '2024-03-03 16:55:13', NULL),
(9, 'publicaion/RB8bWSLMcraFzSZrleth9rMuoib5ycTV1OFcSKhr.jpg', 'Parent-Teacher Communication Portal', 'Stay connected with your child\'s education through our intuitive parent-teacher communication portal, facilitating easy communication and collaboration between parents and educators.', 'publication', '2024-03-03 16:58:48', '2024-03-03 16:58:48', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `id_module` bigint(20) UNSIGNED NOT NULL,
  `id_teacher` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_readr` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `resources`
--

INSERT INTO `resources` (`id`, `titre`, `description`, `fichier`, `id_module`, `id_teacher`, `created_at`, `updated_at`, `is_readr`) VALUES
(1, 'Laravel Basics', 'to ensure the label appears above the input and the error message appears below it.', 'course/AUO7u5PEgiADLVhgfMsqNzbLOo1mlSPXenkT3szH.docx', 9, 18, '2024-03-18 02:16:55', '2024-03-18 02:16:55', 0),
(2, 'Html Cours', 'to ensure the label appears above the input and the error message appears below it.', 'course/hrOb5wlF83RyGrvKHynY22GRDqjEdNiZjspS25fI.docx', 1, 18, '2024-03-18 02:17:25', '2024-03-18 02:17:25', 0),
(3, 'Basics Lang C', 'to ensure the label appears above the input and the error message appears below it.', 'course/Q0AVFJ21NvDFy7DmkdYGWhft8HqAB6ZdEG1qKfWE.docx', 2, 19, '2024-03-18 02:20:22', '2024-03-18 02:20:22', 0),
(4, 'Basics Lang C++', 'to ensure the label appears above the input and the error message appears below it.', 'course/iDgDCXpPD8BvjB4Nd8Bs4N2OQvEAgevENg18HKkE.docx', 10, 19, '2024-03-18 02:20:44', '2024-03-18 02:20:44', 0),
(5, 'Terminal command', 'to ensure the label appears above the input and the error message appears below it.', 'course/63VPaxxdhd1OkyXigOjv9SBehOJW5n8wikPQPpu0.docx', 11, 20, '2024-03-18 02:22:12', '2024-03-18 02:22:12', 0),
(6, 'Windows vs Linux', 'to ensure the label appears above the input and the error message appears below it.', 'course/AzSP78VuwkhUvzTWHOU0OAQwNetDTylCkD98v6o2.docx', 3, 20, '2024-03-18 02:22:53', '2024-03-18 02:22:53', 0),
(7, 'Installation de programme', 'to ensure the label appears above the input and the error message appears below it.', 'course/2Fr02jHpHPqvLcHM8vTU5DTQTvRlPMZOiQNdobK7.docx', 4, 21, '2024-03-18 02:24:14', '2024-03-18 02:24:14', 0),
(8, 'MCD and MLD', 'to ensure the label appears above the input and the error message appears below it.', 'course/yYsQReVN5oT7ROPzqwdZ7kYv4mK5eXeJXlgG6u47.docx', 12, 21, '2024-03-18 02:24:46', '2024-03-31 20:58:13', 1),
(9, 'Loop and Condition', 'to ensure the label appears above the input and the error message appears below it.', 'course/zmFBAMIZbE6l0ponKhTou7qT8uV5pCECWIn6aqqy.docx', 5, 22, '2024-03-18 02:29:14', '2024-03-18 02:29:14', 0),
(10, 'Machine learning', 'to ensure the label appears above the input and the error message appears below it.', 'course/PI6evj5L1ZmP8nzYHstX7V2fR8eJAuZPNsJfMyL7.docx', 13, 22, '2024-03-18 02:29:53', '2024-03-18 02:29:53', 0),
(11, 'Learning lists', 'to ensure the label appears above the input and the error message appears below it.', 'course/UfwXni2vRVsjIvZWe0FhFNmp12Qhiq8idv167gC5.docx', 6, 23, '2024-03-18 02:34:03', '2024-03-18 02:34:03', 0),
(12, 'Learning Maps', 'to ensure the label appears above the input and the error message appears below it.', 'course/4epuiSm7HvqrYS5CjwuXKQ9LmK8p5giUuSI92wC2.docx', 14, 23, '2024-03-18 02:34:30', '2024-03-18 02:34:30', 0),
(13, 'Chapitre 1 et 2', 'to ensure the label appears above the input and the error message appears below it.', 'course/V6Ff8q5zqpi9WqTP1DSjvUFzepZyjQby9qDmkDpa.docx', 7, 24, '2024-03-18 02:36:49', '2024-03-18 02:36:49', 0),
(14, 'Chapitre 4', 'to ensure the label appears above the input and the error message appears below it.', 'course/mqIj4kZ8XaDgrOiqPhUjr56kiRxz8zpvfzApnuQV.docx', 15, 24, '2024-03-18 02:37:25', '2024-03-18 02:37:25', 0),
(15, 'Installation et mise a jour', 'to ensure the label appears above the input and the error message appears below it.', 'course/5PB8k0oOEUsJHdV0azMyRD6tkGu5OmtzmU2Rj6U9.docx', 16, 25, '2024-03-18 02:40:07', '2024-03-18 02:40:07', 0),
(16, 'Student Information Database', 'to ensure the label appears above the input and the error message appears below it.', 'course/7RKCxM2ljTjzdlIEGsBozf36yS7jv5xDEKdJfcF1.docx', 8, 25, '2024-03-18 02:40:45', '2024-03-18 02:40:45', 0);

-- --------------------------------------------------------

--
-- Structure de la table `soumestres`
--

CREATE TABLE `soumestres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `filiere` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `soumestres`
--

INSERT INTO `soumestres` (`id`, `nom`, `filiere`, `year`, `created_at`, `updated_at`) VALUES
(1, 'GIS1_2024', 'Genie Informatique', 2024, '2024-03-17 22:04:54', '2024-03-17 22:04:54'),
(2, 'SDS1_2024', 'Sience Donnes', 2024, '2024-03-17 22:05:35', '2024-03-17 22:05:35'),
(3, 'GIS3_2024', 'Genie Informatique', 2024, '2024-03-17 22:06:24', '2024-03-17 22:06:24'),
(4, 'SDS3_2024', 'Sience Donnes', 2024, '2024-03-17 22:07:19', '2024-03-17 22:07:19');

-- --------------------------------------------------------

--
-- Structure de la table `student_soumestres`
--

CREATE TABLE `student_soumestres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_soumestre` bigint(20) UNSIGNED NOT NULL,
  `id_student` bigint(20) UNSIGNED NOT NULL,
  `note` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `student_soumestres`
--

INSERT INTO `student_soumestres` (`id`, `id_soumestre`, `id_student`, `note`, `created_at`, `updated_at`) VALUES
(2, 3, 27, 0.00, '2024-03-18 02:01:16', '2024-03-18 02:01:16'),
(3, 3, 28, 0.00, '2024-03-18 02:02:37', '2024-03-18 02:02:37'),
(4, 1, 29, 0.00, '2024-03-18 02:03:31', '2024-03-18 02:03:31'),
(5, 1, 30, 0.00, '2024-03-18 02:04:18', '2024-03-18 02:04:18'),
(6, 2, 31, 0.00, '2024-03-18 02:05:21', '2024-03-18 02:05:21'),
(7, 2, 32, 0.00, '2024-03-18 02:06:17', '2024-03-18 02:06:17'),
(8, 4, 33, 0.00, '2024-03-18 02:07:17', '2024-03-18 02:07:17'),
(9, 4, 34, 0.00, '2024-03-18 02:08:20', '2024-03-18 02:08:20'),
(10, 3, 35, 0.00, '2024-03-21 04:02:25', '2024-03-21 04:02:25');

-- --------------------------------------------------------

--
-- Structure de la table `student__modules`
--

CREATE TABLE `student__modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_student` bigint(20) UNSIGNED NOT NULL,
  `id_module` bigint(20) UNSIGNED NOT NULL,
  `Note` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `student__modules`
--

INSERT INTO `student__modules` (`id`, `id_student`, `id_module`, `Note`, `created_at`, `updated_at`) VALUES
(1, 27, 9, 11.06, '2024-03-18 02:01:16', '2024-04-01 01:39:27'),
(2, 27, 10, 18.50, '2024-03-18 02:01:16', '2024-04-01 00:19:40'),
(3, 27, 11, 14.31, '2024-03-18 02:01:16', '2024-04-01 01:39:27'),
(4, 27, 12, 0.00, '2024-03-18 02:01:16', '2024-04-01 00:11:06'),
(5, 28, 9, 0.00, '2024-03-18 02:02:37', '2024-03-18 02:02:37'),
(6, 28, 10, 0.00, '2024-03-18 02:02:37', '2024-03-18 02:02:37'),
(7, 28, 11, 0.00, '2024-03-18 02:02:37', '2024-03-18 02:02:37'),
(8, 28, 12, 0.00, '2024-03-18 02:02:37', '2024-03-18 02:02:37'),
(9, 29, 1, 0.00, '2024-03-18 02:03:31', '2024-03-18 02:03:31'),
(10, 29, 2, 0.00, '2024-03-18 02:03:31', '2024-03-18 02:03:31'),
(11, 29, 3, 0.00, '2024-03-18 02:03:31', '2024-03-18 02:03:31'),
(12, 29, 4, 0.00, '2024-03-18 02:03:31', '2024-03-18 02:03:31'),
(13, 30, 1, 0.00, '2024-03-18 02:04:18', '2024-03-18 02:04:18'),
(14, 30, 2, 0.00, '2024-03-18 02:04:18', '2024-03-18 02:04:18'),
(15, 30, 3, 0.00, '2024-03-18 02:04:18', '2024-03-18 02:04:18'),
(16, 30, 4, 0.00, '2024-03-18 02:04:18', '2024-03-18 02:04:18'),
(17, 31, 5, 0.00, '2024-03-18 02:05:21', '2024-03-18 02:05:21'),
(18, 31, 6, 0.00, '2024-03-18 02:05:21', '2024-03-18 02:05:21'),
(19, 31, 7, 0.00, '2024-03-18 02:05:21', '2024-03-18 02:05:21'),
(20, 31, 8, 0.00, '2024-03-18 02:05:21', '2024-03-18 02:05:21'),
(21, 32, 5, 0.00, '2024-03-18 02:06:17', '2024-03-18 02:06:17'),
(22, 32, 6, 0.00, '2024-03-18 02:06:17', '2024-03-18 02:06:17'),
(23, 32, 7, 0.00, '2024-03-18 02:06:17', '2024-03-18 02:06:17'),
(24, 32, 8, 0.00, '2024-03-18 02:06:17', '2024-03-18 02:06:17'),
(25, 33, 13, 0.00, '2024-03-18 02:07:17', '2024-03-18 02:07:17'),
(26, 33, 14, 0.00, '2024-03-18 02:07:17', '2024-03-18 02:07:17'),
(27, 33, 15, 0.00, '2024-03-18 02:07:17', '2024-03-18 02:07:17'),
(28, 33, 16, 0.00, '2024-03-18 02:07:17', '2024-03-18 02:07:17'),
(29, 34, 13, 0.00, '2024-03-18 02:08:20', '2024-03-18 02:08:20'),
(30, 34, 14, 0.00, '2024-03-18 02:08:20', '2024-03-18 02:08:20'),
(31, 34, 15, 0.00, '2024-03-18 02:08:20', '2024-03-18 02:08:20'),
(32, 34, 16, 0.00, '2024-03-18 02:08:20', '2024-03-18 02:08:20'),
(33, 35, 9, 0.00, '2024-03-21 04:02:25', '2024-03-21 04:02:25'),
(34, 35, 10, 0.00, '2024-03-21 04:02:25', '2024-03-21 04:02:25'),
(35, 35, 11, 0.00, '2024-03-21 04:02:25', '2024-03-21 04:02:25'),
(36, 35, 12, 0.00, '2024-03-21 04:02:25', '2024-03-21 04:02:25');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `DateDeNaissance` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(150) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `class_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `gender`, `DateDeNaissance`, `email`, `email_verified_at`, `password`, `image`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `class_id`) VALUES
(17, 'Admin Admin', 'Admin', 'Male', '2024-03-14 00:00:00', 'admin@gmail.com', NULL, '$2y$12$N5GY4xUckL8hGGw22k85GOjqElF5Tv0oC9vJFqMjDBKN067RIEgjC', 'blog/JidUo0DG5dVCLLdrk7wabTkAtBx7CZshOY93HGDF.png', NULL, NULL, '2024-03-17 23:13:54', '2024-03-17 23:13:54', NULL),
(18, 'Gounane Gounane', 'Teacher', 'Male', '2024-03-01 00:00:00', 'gounane@gmail.com', NULL, '$2y$12$ZQK1xhQrz/HOcdhubsfMNuqgmDy/JlSd3w0JHkPKddOown.5/u3fq', 'blog/5bZWLwQlfKmUTDx4kWlptFGdnuHz325G9fcKS1KL.png', NULL, NULL, '2024-03-17 23:28:24', '2024-03-17 23:28:24', NULL),
(19, 'Shouhad Shouhad', 'Teacher', 'Female', '2024-03-01 00:00:00', 'shouhad@gmail.com', NULL, '$2y$12$gS5lC39RVVeldN7rPp9DAeT/t7FfMspsVKiod.nkOpFlzbVZhrQhu', 'blog/UEwcd9IsJzMXfrmr68SBGH6YZFeI73xlbKWgBcYg.jpg', NULL, NULL, '2024-03-17 23:29:28', '2024-03-17 23:29:28', NULL),
(20, 'Youssef You', 'Teacher', 'Male', '2024-03-01 00:00:00', 'youssef@gmail.com', NULL, '$2y$12$N59/6/Hs8BO3ASPnfpHN0ekEQXgh9QjP3dAKIChIrDd6G4KPSN0vW', 'blog/9A9AjCCejf0N2aiWP8CgGTijg7gM6Sk6njlGVPGx.png', NULL, NULL, '2024-03-17 23:30:39', '2024-03-17 23:30:39', NULL),
(21, 'Zehra Ouarda', 'Teacher', 'Female', '2024-03-01 00:00:00', 'zehra@gmail.com', NULL, '$2y$12$o3.DpZ4djY8TsiQMNDQIsumSEKKo.aj7LaQRiGtiBfz9PPru1Ol5W', 'blog/nf24LCSsmTbUHeekOMpAjci5SasqM2xmH3ss7ZGu.jpg', NULL, NULL, '2024-03-17 23:31:53', '2024-03-17 23:31:53', NULL),
(22, 'Hanan bebe', 'Teacher', 'Female', '2024-03-01 00:00:00', 'hanane@gmail.com', NULL, '$2y$12$e/QLhUXtFj01FiSh.RAeUulfLQX0IcAquzNd/66GJVw.9qwqY8enu', 'blog/Y7WIVAjal78tx2CU48WwpwddxJ4uioZzvM7likzB.jpg', NULL, NULL, '2024-03-17 23:32:47', '2024-03-17 23:32:47', NULL),
(23, 'Ben Kiran', 'Teacher', 'Male', '2024-03-01 00:00:00', 'kiran@gmail.com', NULL, '$2y$12$d17InL/6Bq1DmaUu3qAb0eeWIt5eP.0w.a08My6Crazd.Qv6qMNja', 'blog/SWLfcwNV2awIIkmmTU3LO0FtdC7zaHKul5UUxua4.png', NULL, NULL, '2024-03-17 23:33:43', '2024-03-17 23:33:43', NULL),
(24, 'Mourabit Mourabit', 'Teacher', 'Male', '2024-03-01 00:00:00', 'mourabit@gmail.com', NULL, '$2y$12$TJFUrG/.1DYg3JxpYt9fDOi8bMDt2sotknoSqi75ZU148pPBlT/y6', 'blog/lbQuLnnwJjiq3m3ZfkAuQkskgU6rH7wr2GsxmQiO.png', NULL, NULL, '2024-03-17 23:34:49', '2024-03-17 23:34:49', NULL),
(25, 'Bou rfia', 'Teacher', 'Male', '2024-03-02 00:00:00', 'rfia@gmail.com', NULL, '$2y$12$K.gOfSiMKngvKmXbaatPve8t/TIX5i/SAFcSPR.JJmNTP0ssNqT62', 'blog/djPS0DJnA7nFIMsjSTGVzG8DPRqTuXfGVRc2INND.png', NULL, NULL, '2024-03-17 23:35:54', '2024-03-17 23:35:54', NULL),
(27, 'Nezha Halla', 'Student', 'Female', '2024-02-28 00:00:00', 'nezhahella@gmail.com', NULL, '$2y$12$RQemFaDWPijgf6JHh3jbA.wzSoV/S7.SBy9j/umNT84KkFIyoZUCu', 'blog/miSRleio9zfSsg0Fn50UncOjmNBo5PXeitjsRZSK.jpg', NULL, NULL, '2024-03-18 02:01:16', '2024-03-19 12:19:32', 3),
(28, 'Khadi Oubaha', 'Student', 'Female', '2024-03-07 00:00:00', 'khadiouba@gmail.com', NULL, '$2y$12$cVUmu.jsxQa27vK/DFz8f.lIl39JytVlzAduqn4YiHTzEq5XS5VTO', 'blog/YHdDRRgupuUVruEW4jXBjs4n2AUxGRqZXsnN58ot.jpg', NULL, NULL, '2024-03-18 02:02:37', '2024-03-18 02:02:37', 3),
(29, 'Safa Doulf', 'Student', 'Female', '2024-02-26 00:00:00', 'safa@gmail.com', NULL, '$2y$12$dEZs7IEXR2KA3QhWtfG/Xu7ZGfAbiM7f5PdlZkuNKU0uvxiKsgyZy', 'blog/cdVTlhOuoFI91FRSFv96Kx9yVyaBhA0wXXo4zvOe.jpg', NULL, NULL, '2024-03-18 02:03:31', '2024-03-18 02:03:31', 1),
(30, 'Kenza Mahou', 'Student', 'Female', '2024-03-05 00:00:00', 'kenza@gmail.com', NULL, '$2y$12$pX.DkkP1STZDxb5MS9ygbOKiEC63rnPpAsERncBFeBlz1rfQjN0BK', 'blog/BXadqxgohAIbae03frU1JfAepxpcHyF5phyJDB5D.jpg', NULL, NULL, '2024-03-18 02:04:18', '2024-03-18 02:04:18', 1),
(31, 'Ibrahim Hel', 'Student', 'Male', '2024-04-04 00:00:00', 'ibrahims@gmail.com', NULL, '$2y$12$y78YuhkWCMxhAw1A.mHPI.gYKCNzqtJLh04jBYdH.cY.V42UkUAR6', 'blog/zJqyB82sVsZ2UamDZE2tZF2jWMiv8KYqw4S8JYuH.jpg', NULL, NULL, '2024-03-18 02:05:21', '2024-03-18 02:05:21', 2),
(32, 'Madi Malek', 'Student', 'Female', '2024-02-26 00:00:00', 'madi@gmail.com', NULL, '$2y$12$rOs0yYMliv.QQQZ1/rRDxefN3AKGpYvTIiYZzokr6cd4yxYCrIEW2', 'blog/CA5A9JI0PF2BI99ODM0m5PI5hoWy7fRPo0U7ajAs.jpg', NULL, NULL, '2024-03-18 02:06:17', '2024-03-18 02:06:17', 2),
(33, 'Mary Doul', 'Student', 'Female', '2024-03-01 00:00:00', 'mary@gmail.com', NULL, '$2y$12$ZWYfBpyNm9hZ7G3VHbL8SujI/3C/NKaTrdYfPf9Ja58QW9HvzNH4K', 'blog/Egf31ff8KGHMaBErjVvn4OdCEoAQK2SEYSZ3PfiP.jpg', NULL, NULL, '2024-03-18 02:07:17', '2024-03-18 02:07:17', 4),
(34, 'Hassan wasif', 'Student', 'Male', '2024-02-09 00:00:00', 'hassan@gmail.com', NULL, '$2y$12$KTndcRf93kUC9FL/qszxT.QHhkfFvfJM2aWM67wAp03xNMMdMaeQa', 'blog/6OTETlVyJo2wr9rI4bitRwhT1V2WSXEJUTrjbWKE.jpg', NULL, NULL, '2024-03-18 02:08:20', '2024-03-18 02:08:20', 4),
(35, 'Nezha Halla', 'Student', 'Female', '2024-03-01 00:00:00', 'nezhahella2@gmail.com', NULL, '$2y$12$F.AAmHCo8aSlorN3mxHLn.dIjQDbeIybuGhZLAHtjCAin.V9z1A0a', 'blog/YDwCT8QsAYmavoGzcTbrxMKJcWJwD4WzAgexg4hW.jpg', NULL, NULL, '2024-03-21 04:02:25', '2024-03-21 04:02:25', 3);

-- --------------------------------------------------------

--
-- Structure de la table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_student` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignments_teacher_id_foreign` (`teacher_id`),
  ADD KEY `assignments_module_id_foreign` (`module_id`);

--
-- Index pour la table `assignment_student`
--
ALTER TABLE `assignment_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignment_student_assignment_id_foreign` (`assignment_id`),
  ADD KEY `assignment_student_student_id_foreign` (`student_id`);

--
-- Index pour la table `assignment_submissions`
--
ALTER TABLE `assignment_submissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assignment_submissions_assignment_id_foreign` (`assignment_id`),
  ADD KEY `assignment_submissions_id_student_foreign` (`id_student`);

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modules_id_teacher_foreign` (`id_teacher`),
  ADD KEY `modules_id_soumestre_foreign` (`id_soumestre`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resources_id_module_foreign` (`id_module`),
  ADD KEY `resources_id_teacher_foreign` (`id_teacher`);

--
-- Index pour la table `soumestres`
--
ALTER TABLE `soumestres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `student_soumestres`
--
ALTER TABLE `student_soumestres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_soumestres_id_soumestre_foreign` (`id_soumestre`),
  ADD KEY `student_soumestres_id_student_foreign` (`id_student`);

--
-- Index pour la table `student__modules`
--
ALTER TABLE `student__modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student__modules_id_student_foreign` (`id_student`),
  ADD KEY `student__modules_id_module_foreign` (`id_module`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_class_id_foreign` (`class_id`);

--
-- Index pour la table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`),
  ADD KEY `years_id_student_foreign` (`id_student`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `assignment_student`
--
ALTER TABLE `assignment_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `assignment_submissions`
--
ALTER TABLE `assignment_submissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `soumestres`
--
ALTER TABLE `soumestres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `student_soumestres`
--
ALTER TABLE `student_soumestres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `student__modules`
--
ALTER TABLE `student__modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assignments_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `assignment_student`
--
ALTER TABLE `assignment_student`
  ADD CONSTRAINT `assignment_student_assignment_id_foreign` FOREIGN KEY (`assignment_id`) REFERENCES `assignments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assignment_student_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `assignment_submissions`
--
ALTER TABLE `assignment_submissions`
  ADD CONSTRAINT `assignment_submissions_assignment_id_foreign` FOREIGN KEY (`assignment_id`) REFERENCES `assignments` (`id`),
  ADD CONSTRAINT `assignment_submissions_id_student_foreign` FOREIGN KEY (`id_student`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_id_soumestre_foreign` FOREIGN KEY (`id_soumestre`) REFERENCES `soumestres` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `modules_id_teacher_foreign` FOREIGN KEY (`id_teacher`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_id_module_foreign` FOREIGN KEY (`id_module`) REFERENCES `modules` (`id`),
  ADD CONSTRAINT `resources_id_teacher_foreign` FOREIGN KEY (`id_teacher`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `student_soumestres`
--
ALTER TABLE `student_soumestres`
  ADD CONSTRAINT `student_soumestres_id_soumestre_foreign` FOREIGN KEY (`id_soumestre`) REFERENCES `soumestres` (`id`),
  ADD CONSTRAINT `student_soumestres_id_student_foreign` FOREIGN KEY (`id_student`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `student__modules`
--
ALTER TABLE `student__modules`
  ADD CONSTRAINT `student__modules_id_module_foreign` FOREIGN KEY (`id_module`) REFERENCES `modules` (`id`),
  ADD CONSTRAINT `student__modules_id_student_foreign` FOREIGN KEY (`id_student`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);

--
-- Contraintes pour la table `years`
--
ALTER TABLE `years`
  ADD CONSTRAINT `years_id_student_foreign` FOREIGN KEY (`id_student`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
