-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 10:06 AM
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
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 'Albania', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(2, 'Romania', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(3, 'Brazil', '2', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(4, 'Panama', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(5, 'Comoros', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(6, 'Costa Rica', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(7, 'Dominican Republic', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(8, 'Morocco', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(9, 'Egypt', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(10, 'Ghana', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(11, 'Uganda', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(12, 'Uganda', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(13, 'Sudan', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(14, 'Honduras', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(15, 'Jordan', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(16, 'Malaysia', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(17, 'Madgascar', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(18, 'Maldives', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(19, 'Mauritania ', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(20, 'Mauritius', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(21, 'Mogolia', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(22, 'Mogolia', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(23, 'Montenegro', '1', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(24, 'Myanmar', '17', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(25, 'Myanmar', '19', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(26, 'Nepal', '20', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(27, 'Niger', '21', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(28, 'Pakistan', '22', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(29, 'Palestine', '23', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(30, 'Serbia', '24', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(31, 'Swaziland', '26', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(32, 'Swaziland', '27', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(33, 'Tonga', '28', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(34, 'Tanzania', '28', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(35, 'Kenya', '28', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(36, 'Zimbabwe', '29', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(37, 'Zimbabwe', '30', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(38, 'Jordan PPFA', '31', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(39, 'South Sudan', '25', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(40, 'Egypt', '25', '2022-10-20 05:02:48', '2022-10-20 05:02:48');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_15_052348_create_projects_table', 1),
(6, '2022_10_15_052455_create_countries_table', 1),
(7, '2022_10_15_052518_create_statuses_table', 1),
(8, '2022_10_15_052534_create_offices_table', 1),
(9, '2022_10_15_052550_create_readinesses_table', 1),
(10, '2022_10_15_072245_create_readiness_types_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Europe Office', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(2, 'Economy Division', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(3, 'Ecosystems', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(4, 'Latin America Office', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(5, 'CTCN', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(6, 'West Asia Office', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(7, 'Asia Pacific Office', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(8, 'Africa Office', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(9, 'Policy & Programme Division', '2022-10-20 05:02:48', '2022-10-20 05:02:48');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grant_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_gcf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_disbursement_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `readiness` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `readiness_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `reference`, `name`, `grant_amount`, `date_gcf`, `first_disbursement_amount`, `readiness`, `readiness_type_id`, `office_id`, `status_id`, `start_date`, `end_date`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'ALB-RS-001', 'Readiness support to Albania', '300000', '11/15/2016', '147500', 'Readiness', '1', '1', '3', '11/15/2016', '8/30/2017', '12', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(2, 'BRA-RS-001', 'Technology Needs Assessment for the Implementation of Climate Action Plans', '700000', '06/20/2018', '197450', 'Readiness', '2', '2', '1', '06/20/2018', '12/19/2019 12:00:00', '18', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(3, 'COM-RS-001', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n                    2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.', '426080', '11/01/2018', '147500', 'Readiness', '1', '3', '3', '11/01/2018', '8/30/2017', '24', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(4, 'CRI-RS-002', 'Building sub-national capacities for the implementation of the National Adaptation Plan in Costa Rica', '2861917', '10/23/2018', '350575.33', 'National Adaptation Plans', '3', '4', '1', '10/23/2018', '10/23/2021', '36', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(5, 'DOM-RS-002', 'Building capacity to advance National Adaptation Plan Process in the Dominican Republic', '2998325', '07/11/2018', '1161912', 'National Adaptation Plans', '3', '4', '1', '07/11/2018', '06/10/2021', '36', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(6, 'EGY-RS-001', 'Supporting Egypt’s engagement with the Green Climate Fund: Logical framework support', '300000', '05/02/2017', '122456', 'Readiness', '1', '3', '1', '04/24/2017', '10/23/2018 12:00:00', '18', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(7, 'GHA-RS-001', 'Drought Early Warning and Forecasting System: Improving resiliency of crops to drought through strengthened early warning within Ghana, Uganda and Sudan', '300150', '05/02/2017', '300150', 'Readiness', '2', '5', '2', '05/15/2017', '05/10/2019', '24', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(8, 'HND-RS-002', 'Supporting strategic planning to engage with the GCF and comply with the national commitments under the Paris Agreement regarding the LULUCF sector', '764960', '1/18/2018', '243515', 'Readiness', '4', '4', '1', '1/18/2018', '7/19/2019  12:00:00 PM', '18', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(9, 'JOR-RS-001', 'Strengthening NDA of Jordan to deliver on GCF Investment Framework', '300000', '6/15/2017', '150000', 'Readiness', '1', '6', '1', '6/15/2017', '12/14/2018  12:00:00 PM', '18', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(10, 'MDG-RS-001', 'Building Capacity in Madagascar to engage with the GCF', '300000', '7/20/2018', '177588', 'Readiness', '1', '3', '1', '7/20/2018', '7/19/2019', '12', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(11, 'MLY-RS-002', 'Accessing REDD+ result-based payments in Malaysia', '819230', '11/12/2018', '465695.33', 'Readiness', '4', '7', '1', '11/12/2018', '11/13/2020', '24', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(12, 'MDV-RS-001', 'Establishing and strengthening National Designated Authority (NDA), and developing strategic framework for engagement with the GCF in Maldives', '300000', '6/16/2017', '198545', 'Readiness', '1', '7', '1', '6/16/2017', '6/13/2018', '12', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(13, 'MRT-RS-002', 'Building capacity to advance National Adaptation Plan Process in Mauritania', '2670374', '7/17/2018', '742163', 'National Adaptation Plans', '3', '8', '1', '7/17/2018', '7/8/2021', '36', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(14, 'MUS-RS-002', 'Climate Change Vulnerability and Adaptation Study for Port of Port Louis', '324764', '1/22/2018', '324764', 'Readiness', '2', '5', '1', '1/22/2018', '4/19/2019  6:00:00 AM', '15', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(15, 'MNG-RS-003', 'Scaling-up of Implementation of Low-Carbon District Heating Systems in Mongolia', '368000', '2/1/2018', '250000', 'Readiness', '2', '7', '1', '2/1/2018', '2/1/2019', '12', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(16, 'MNG-RS-004', 'Building capacity to advance National Adaptation Plan Process in Mongolia', '2895461', '6/20/2018', '406123', 'National Adaptation Plans', '3', '7', '1', '6/20/2018', '6/19/2021', '24', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(17, 'MMR-RS-002', 'Establishing and Strengthening National Designated Authority (NDA), and Developing Strategic Framework for Engagement with the GCF in Myanmar', '300000', '11/10/2017', '115840', 'Readiness', '1', '7', '1', '11/10/2017', '5/11/2019  12:00:00 PM', '18', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(18, 'MNE-RS-001', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n                    2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.', '300000', '11/15/2016', '145300', 'Readiness', '1', '1', '1', '8/30/2016', '6/19/2021', '12', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(19, 'MMR-RS-001', 'Building capacity to advance National Adaptation Plan Process in Mongolia', '336520', '7/26/2017', '336520', 'Readiness', '2', '5', '1', '7/26/2017', '7/26/2018', '12', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(20, 'NPL-RS-001', 'Building Capacity to Advance National Adaptation Plan Process in Nepal', '2935350', '5/15/2017', '465410', 'National Adaptation Plans', '3', '7', '1', '5/15/2017', '5/14/2020', '36', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(21, 'NER-RS-002', 'Building Niger’s engagement with the GCF: Establishment and strengthening of the NDA, and elaboration of a country programme identifying strategic priorities', '300000', '6/20/2018', '138100', 'Readiness', '1', '3', '4', '6/20/2018', '12/19/2019  12:00:00 PM', '18', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(22, 'PAK-RS-003', 'Building capacity to advance National Adaptation Plan Process in Pakistan', '2969674', '3/2/2018', '675420', 'National Adaptation Plans', '3', '7', '1', '3/3/2018', '3/4/2021', '', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(23, 'PSE-RS-002', 'Technology Road Map for the Implementation of Climate Action Plans in Palestine.', '254100', '10/18/2017', '254100', 'Readiness', '2', '5', '1', '10/18/2017', '10/18/2018', '12', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(24, 'SRB-RS-001', 'Developing the capacities of the Republic of Serbia for an effective engagement with the Green Climate Fund', '300000', '1/12/2018', '130000', 'Readiness', '1', '1', '1', '1/12/2018', '1/12/2019', '12', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(25, 'SSD-RS-001', 'Republic of South Sudan Green Climate Fund’s Readiness and Preparatory Support Project ', '300000', '6/20/2018', '153178', 'Readiness', '1', '9', '1', '6/20/2018', '12/19/2019  12:00:00 PM', '18', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(26, 'SWZ-RS-002', 'Green Climate Fund Readiness Support for Swaziland', '299032', '3/12/2018', '83046', 'Readiness', '1', '3', '1', '3/12/2018', '3/13/2020', '24', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(27, 'SWZ-RS-003', 'Building capacity to advance National Adaptation Plan process in Swaziland ', '2796359', '6/28/2018', '744662', 'National Adaptation Plans', '3', '8', '1', '6/28/2018', '6/27/2021', '36', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(28, 'TON-RS-002', 'Technology Road Map for the Implementation of Climate Action Plans in Palestine.', '200000', '4/20/2017', '200000', 'Readiness', '2', '5', '1', '4/20/2017', '10/9/2017  12:00:00 PM', '6', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(29, 'ZWE-RS-001', '1. Establishing and strengthening National Designated Authorities or Focal Points;\r\n                    2. Developing strategic frameworks for engagement with the GCF, including the preparation of country programmes.', '300000', '3/5/2018', '121354', 'Readiness', '1', '3', '1', '3/5/2018', '3/4/2020', '24', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(30, 'ZWE-RS-002', 'Building capacity to advance National Adaptation Plan Process in Zimbabwe ', '2993349', '5/11/2018', '877525', 'National Adaptation Plans', '3', '8', '1', '5/11/2018', '5/13/2021', '36', '2022-10-20 05:02:48', '2022-10-20 05:02:48'),
(31, 'S1-32GCL-000023', 'Jordan Integrated Landscape Management Initiative (JILMI)', '2886275', '3/5/2018', '278946.28', 'Readiness', '1', '3', '1', '8/28/2018', '12/28/2019', '12', '2022-10-20 05:02:48', '2022-10-20 05:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `readinesses`
--

CREATE TABLE `readinesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `readiness_types`
--

CREATE TABLE `readiness_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `readiness_types`
--

INSERT INTO `readiness_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Capacity Building', '2022-10-20 05:02:47', '2022-10-20 05:02:47'),
(2, 'FI/TNA/other', '2022-10-20 05:02:47', '2022-10-20 05:02:47'),
(3, 'NAP', '2022-10-20 05:02:47', '2022-10-20 05:02:47'),
(4, 'REDD+', '2022-10-20 05:02:47', '2022-10-20 05:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'under implementation', '2022-10-20 05:02:47', '2022-10-20 05:02:47'),
(2, 'completion report submitted', '2022-10-20 05:02:47', '2022-10-20 05:02:47'),
(3, 'completed', '2022-10-20 05:02:47', '2022-10-20 05:02:47'),
(4, 'requesting funds', '2022-10-20 05:02:47', '2022-10-20 05:02:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `projects_reference_unique` (`reference`);

--
-- Indexes for table `readinesses`
--
ALTER TABLE `readinesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `readiness_types`
--
ALTER TABLE `readiness_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `readinesses`
--
ALTER TABLE `readinesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `readiness_types`
--
ALTER TABLE `readiness_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
