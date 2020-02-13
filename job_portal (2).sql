-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 04:42 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`id`, `job_id`, `user_id`, `message`) VALUES
(1, 1, 40, 'unqualified'),
(2, 3, 40, 'fggf'),
(3, 1, 41, NULL),
(4, 2, 41, ''),
(5, 4, 41, ''),
(6, 1, 40, NULL),
(7, 9, 40, NULL),
(8, 6, 40, NULL),
(9, 6, 40, NULL),
(10, 6, 40, NULL),
(11, 6, 40, NULL),
(12, 3, 41, NULL),
(13, 2, 40, 'ttttt');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sslc_school` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sslc_place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sslc_percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sslc_year` year(4) NOT NULL,
  `hsc_school` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_year` year(4) NOT NULL,
  `ug_college` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ug_place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ug_percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ug_year` year(4) NOT NULL,
  `pg_college` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pg_place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pg_percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pg_year` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `sslc_school`, `sslc_place`, `sslc_percentage`, `sslc_year`, `hsc_school`, `hsc_place`, `hsc_percentage`, `hsc_year`, `ug_college`, `ug_place`, `ug_percentage`, `ug_year`, `pg_college`, `pg_place`, `pg_percentage`, `pg_year`, `created_at`, `updated_at`, `user_id`, `status`) VALUES
(1, 'Fayville', 'West Maudemouth', '220', 2019, 'Pourosmouth', 'Terrellside', '366', 2020, 'Anahi Hermann', 'Carolyneview', '474', 2019, 'Brionna Spinka Sr.', 'North Noelmouth', '291', 2020, NULL, NULL, NULL, NULL),
(2, 'West Hansview', 'West Roberta', '419', 2019, 'Simburgh', 'Danton', '26', 2019, 'Ford Crooks Sr.', 'New Alexandriahaven', '188', 2020, 'Joshua Watsica', 'North Newtonville', '310', 2020, NULL, NULL, 40, 1),
(3, 'Augustshire', 'North Adolphshire', '186', 2019, 'Westonbury', 'Odashire', '26', 2019, 'Adell Hamill DDS', 'Mosciskiberg', '149', 2020, 'Estella Kuhic', 'McCulloughbury', '666', 2020, NULL, NULL, NULL, NULL),
(4, 'North Valentina', 'Marianatown', '419', 2020, 'Spinkaport', 'Sanfordburgh', '26', 2020, 'Gavin Dibbert', 'Raheemmouth', '188', 2019, 'Adolph Borer', 'Volkmantown', '310', 2019, NULL, NULL, 33, NULL),
(5, 'North Valentina', 'Marianatown', '419', 2020, 'Spinkaport', 'Sanfordburgh', '26', 2020, 'Gavin Dibbert', 'Raheemmouth', '188', 2019, 'Adolph Borer', 'Volkmantown', '310', 2019, NULL, NULL, 33, NULL),
(6, 'Bechtelarfort', 'Borerton', '419', 2020, 'Mazieview', 'Kunzestad', '26', 2019, 'Adrain Kunze MD', 'Ankundingside', '188', 2019, 'Mr. Harley Schiller', 'Uptonland', '310', 2020, NULL, NULL, 33, NULL),
(7, 'Bechtelarfort', 'Borerton', '419', 2020, 'Mazieview', 'Kunzestad', '26', 2019, 'Adrain Kunze MD', 'Ankundingside', '188', 2019, 'Mr. Harley Schiller', 'Uptonland', '310', 2020, NULL, NULL, 33, NULL),
(8, 'Bechtelarfort', 'Borerton', '419', 2020, 'Mazieview', 'Kunzestad', '26', 2019, 'Adrain Kunze MD', 'Ankundingside', '188', 2019, 'Mr. Harley Schiller', 'Uptonland', '310', 2020, NULL, NULL, 33, NULL),
(9, 'Bechtelarfort', 'Borerton', '419', 2020, 'Mazieview', 'Kunzestad', '26', 2019, 'Adrain Kunze MD', 'Ankundingside', '188', 2019, 'Mr. Harley Schiller', 'Uptonland', '310', 2020, NULL, NULL, 33, NULL),
(10, 'Hoegerburgh', 'Armstrongmouth', '122', 2019, 'Roobside', 'Darrickside', '486', 2020, 'Mrs. Joel Crist', 'East Derrick', '474', 2019, 'Daron Friesen', 'Jordyport', '469', 2020, NULL, NULL, NULL, NULL),
(11, 'Hoegerburgh', 'Armstrongmouth', '122', 2019, 'Roobside', 'Darrickside', '486', 2020, 'Mrs. Joel Crist', 'East Derrick', '474', 2019, 'Daron Friesen', 'Jordyport', '469', 2020, NULL, NULL, NULL, NULL),
(12, 'Shayneburgh', 'Blandaton', '590', 2019, 'South Ciara', 'Kenyonberg', '607', 2019, 'Jakayla Vandervort', 'West Maximusborough', '89', 2019, 'Tyra Marks', 'Conroyland', '175', 2020, NULL, NULL, 41, NULL),
(13, 'Angelinehaven', 'East Blake', '292', 2019, 'Champlinberg', 'West Aydenbury', '328', 2020, 'Anabelle Satterfield PhD', 'Emmerichfurt', '368', 2020, 'Doyle Legros', 'North Josefinaland', '178', 2020, NULL, NULL, 39, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passedout_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hiring_process` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `posted_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_name`, `company_email`, `name`, `job_title`, `location`, `qualification`, `passedout_year`, `skills`, `last_date`, `job_type`, `job_role`, `job_category`, `hiring_process`, `experience`, `job_description`, `website`, `user_id`, `created_at`, `updated_at`, `posted_date`, `delete_status`) VALUES
(1, 'Tcs', 'Tcs@gmail.com', 'Preston Quitzon', 'Direct Intranet Manager', 'New Chadberg', 'bsc', '2020-05-13', 'communication', '2019-10-15', 'Chief Integration Engineer', 'Principal Paradigm Officer', 'Bpo', 'face interview', '1 year', 'Principal Intranet Developer', 'www.tcs.com', 38, NULL, NULL, '2020-04-12', NULL),
(2, 'Dickinson - Koss', 'your.email+faker29630@gmail.com', 'Preston Quitzon', 'District Quality Director', 'Rogahnfort', 'Thiel Inc', '2020-04-05 19:05:40', 'quaerat quaerat ut', '2020-07-08 10:11:44', 'District Factors Agent', 'Principal Configuration Producer', 'International Implementation Designer', 'iste nesciunt quia', 'Dolore iusto blanditiis nam dolorum quos cum commodi.', 'Internal Branding Orchestrator', 'Ipsam mollitia ut.', 38, NULL, NULL, '2020-05-29 15:20:42', NULL),
(3, 'Borer Inc', 'your.email+faker95958@gmail.com', 'Willie Veum', 'International Quality Associate', 'New Bertram', 'bcom', '2020-02-14 19:37:12', 'illum sed quod', '2019-11-24 07:58:49', 'Dynamic Division Strategist', 'International Group Assistant', 'Dynamic Operations Orchestrator', 'est et voluptas', 'Excepturi culpa odio nam neque non nihil ut.', 'Internal Response Agent', 'Quo et non provident voluptas labore nam modi ipsam.', 34, NULL, NULL, '2020-05-29 17:44:32', NULL),
(4, 'Dare - Block', 'your.email+faker37213@gmail.com', 'Willie Veum', 'Human Creative Producer', 'South Orieshire', 'Schroeder - Schulist', '2019-03-16 04:43:43', 'vel quod ut', '2020-12-29 19:54:33', 'Dynamic Mobility Technician', 'Investor Integration Supervisor', 'Principal Response Producer', 'minus occaecati velit', 'Deleniti cumque rerum maiores molestias in voluptas sint error ratione.', 'Investor Optimization Specialist', 'Voluptatem nesciunt tempore quas.', 34, NULL, NULL, '2019-02-06 16:24:42', NULL),
(5, 'Nader - McKenzie', 'your.email+faker46966@gmail.com', 'Preston Quitzon', 'Human Applications Agent', 'Wunschmouth', 'Bosco, Welch and Herzog', '2020-08-01 05:58:48', 'porro recusandae voluptatem', '2019-11-10 09:33:59', 'Corporate Mobility Supervisor', 'Product Brand Orchestrator', 'Customer Implementation Director', 'aut ut quia', 'Distinctio nihil rerum ut dolores mollitia tenetur.', 'District Research Producer', 'Assumenda inventore quibusdam voluptatem atque sed sed.', 38, NULL, NULL, '2019-08-20 21:28:56', NULL),
(6, 'Altenwerth, Herman and Douglas', 'your.email+faker37433@gmail.com', 'Preston Quitzon', 'Regional Security Planner', 'Eichmannbury', 'Dicki, Kirlin and Hickle', '2019-06-20 23:02:53', 'quis nesciunt omnis', '2020-07-30 02:46:20', 'Legacy Configuration Technician', 'Direct Paradigm Liason', 'Senior Identity Analyst', 'rerum voluptas quos', 'Ad commodi quo labore.', 'Customer Communications Specialist', 'Enim voluptatem et sint vitae sit ad similique eos.', 38, NULL, NULL, '2020-09-03 12:33:39', 1),
(7, 'Hane, Schuppe and Hauck', 'your.email+faker87720@gmail.com', 'Preston Quitzon', 'Human Functionality Technician', 'Faymouth', 'Boyle Inc', '2019-09-28 16:22:30', 'sed non nam', '2020-01-02 04:04:33', 'Direct Applications Coordinator', 'National Tactics Administrator', 'Human Quality Orchestrator', 'officiis ipsa velit', 'Architecto in est qui sunt unde id voluptatem est.', 'Senior Branding Architect', 'Sunt eveniet consequatur inventore voluptas ut laboriosam aut facere pariatur.', 38, NULL, NULL, '2020-04-07 08:37:59', 1),
(9, 'Kozey Inc', 'your.email+faker46464@gmail.com', 'Preston Quitzon', 'Lead Directives Orchestrator', 'Niamouth', 'Fadel - Heathcote', '2019-05-29 23:12:02', 'est provident sit', '2019-07-26 18:07:21', 'Corporate Assurance Coordinator', 'Dynamic Infrastructure Developer', 'Legacy Applications Associate', 'et quia ea', 'Aspernatur odio tenetur ut.', 'Dynamic Operations Specialist', 'Labore quos voluptas vel blanditiis minus officiis ipsam voluptatibus et.', 38, NULL, NULL, '2019-07-21 05:16:19', 1),
(10, 'Glover Group', 'your.email+faker29624@gmail.com', 'Willie Veum', 'Corporate Marketing Representative', 'Jeremyton', 'Kemmer - Stokes', '2020-03-06 07:15:52', 'fugiat provident accusantium', '2019-11-24 11:42:41', 'Regional Usability Planner', 'Senior Implementation Consultant', 'Principal Metrics Liason', 'quasi blanditiis ut', 'Rerum autem sint.', 'Product Quality Planner', 'Cupiditate cumque quae ea dolor magnam.', 34, NULL, NULL, '2019-12-14 11:08:04', NULL),
(11, 'Rolfson Inc', 'your.email+faker10698@gmail.com', 'Willie Veum', 'Internal Branding Agent', 'New Johan', 'Kuhic, Cummerata and Torphy', '2019-08-03 23:29:16', 'sint ut nemo', '2021-01-17 04:53:55', 'Dynamic Web Agent', 'Dynamic Accounts Developer', 'Senior Marketing Consultant', 'molestias omnis ipsam', 'Facilis iusto rem reprehenderit placeat quaerat quo quis et.', 'Investor Accounts Orchestrator', 'Labore voluptatem soluta vel voluptas laudantium minima non.', 34, NULL, NULL, '2020-12-30 21:02:47', NULL),
(12, 'Corwin, Rempel and Medhurst', 'your.email+faker12698@gmail.com', 'Willie Veum', 'Lead Assurance Facilitator', 'East Hank', 'Hickle LLC', '2020-07-14 16:08:43', 'quaerat eius cupiditate', '2019-09-05 18:45:07', 'Corporate Infrastructure Architect', 'Global Marketing Assistant', 'Principal Program Executive', 'impedit at dolores', 'Dicta minima quae ullam.', 'Legacy Functionality Planner', 'Voluptatem enim cum totam voluptatem nobis ut quaerat porro.', 34, NULL, NULL, '2020-02-17 19:21:25', NULL),
(13, 'Donnelly - Yundt', 'your.email+faker96690@gmail.com', 'Willie Veum', 'Lead Metrics Agent', 'Leannabury', 'Ernser, Farrell and Wilkinson', '2020-08-25 10:17:19', 'nulla sit et', '2020-06-02 06:10:44', 'Direct Research Analyst', 'Lead Applications Associate', 'Customer Optimization Architect', 'velit aliquid alias', 'Nostrum nihil dignissimos veritatis qui vel in.', 'Human Solutions Strategist', 'Perspiciatis explicabo aliquid et quod.', 34, NULL, NULL, '2020-03-13 00:23:01', NULL),
(14, 'West, Herzog and Rath', 'your.email+faker97977@gmail.com', 'Willie Veum', 'Future Accountability Coordinator', 'Bergstrommouth', 'Barton LLC', '2019-11-08 03:15:33', 'aperiam soluta eos', '2019-02-01 22:30:16', 'Forward Directives Orchestrator', 'Direct Quality Analyst', 'National Paradigm Orchestrator', 'accusantium earum maiores', 'Culpa voluptate earum in laborum.', 'Product Directives Officer', 'Debitis esse et est accusamus dignissimos.', 34, NULL, NULL, '2020-03-26 15:34:31', NULL),
(15, 'Hilpert Inc', 'your.email+faker84975@gmail.com', 'Willie Veum', 'Forward Web Assistant', 'Bradleyton', 'Ruecker, Ankunding and Connelly', '2019-10-16 06:56:13', 'repudiandae porro temporibus', '2020-01-19 20:45:39', 'Senior Assurance Developer', 'Dynamic Paradigm Technician', 'Principal Response Manager', 'esse voluptas aut', 'Aut et quo sed distinctio.', 'Regional Quality Planner', 'Qui et fuga vel dicta sunt sed.', 34, NULL, NULL, '2020-02-16 18:25:01', NULL),
(16, 'Ankunding - Schimmel', 'your.email+faker58400@gmail.com', 'Willie Veum', 'Human Accountability Executive', 'Mikelside', 'Kuhlman and Sons', '2019-11-13 13:16:38', 'omnis est eius', '2020-02-17 04:41:56', 'National Quality Manager', 'Principal Research Specialist', 'National Mobility Specialist', 'et dolor odio', 'Quaerat nam beatae voluptatem expedita voluptatem.', 'Corporate Directives Analyst', 'Voluptas distinctio possimus inventore.', 34, NULL, NULL, '2019-11-20 22:51:22', NULL),
(17, 'asdhkjadh', 'csdhshdlk', 'Preston Quitzon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, NULL, NULL, NULL, 1),
(18, 'asdhkjadh', 'csdhshdlk', 'Preston Quitzon', 'gfjhfkdhc', 'hgfjhfh', 'gkgkj', 'hlhfjhgh', 'fgrkhgk', 'hggfjhk', 'ffjhgkhg', 'chgkjh', 'vchgfjhg', 'hfgjgkjkj', 'ghfjhgkj', 'hgcfhjgj', 'hgfghj', 38, NULL, NULL, 'fjgkgkjh', 1),
(19, 'asdhkjadh', 'csdhshdlk', 'Preston Quitzon', 'gfjldhgls', 'uyuygh', 'gitiutu', 'furytkuh', 'hvjuruytkujh', 'vjhgigukh', 'gytiuyui', 'uhfytiuyjkh', 'jhghgjhl', 'hjghkjh', 'hfyutgukjhj', 'kjhggkj', 'hgkhkjh', 38, NULL, NULL, 'hgytiyuh', 1),
(20, 'asdhkjadh', 'csdhshdlk', 'Preston Quitzon', 'gfjhfkdhc', 'hgfjhfh', 'gkgkj', 'hlhfjhgh', 'fgrkhgk', 'vjhgigukh', 'gytiuyui', 'chgkjh', 'jhghgjhl', 'hfgjgkjkj', 'hfyutgukjhj', 'hgcfhjgj', 'hgfghj', 38, NULL, NULL, 'fjgkgkjh', 1),
(21, 'asdhkjadh', 'csdhshdlk', 'Preston Quitzon', 'gfjhfkdhc', 'uyuygh', 'gkgkj', 'hlhfjhgh', 'fgrkhgk', 'hggfjhk', 'gytiuyui', 'chgkjh', 'vchgfjhg', 'hfgjgkjkj', 'ghfjhgkj', 'hgcfhjgj', 'hgfghj', 38, NULL, NULL, 'hgytiyuh', 1),
(22, 'Muller, Langosh and Sporer', 'your.email+faker91471@gmail.com', 'Hari sudhan', 'Future Configuration Representative', 'East Lillie', 'Metz and Sons', '2020-07-16 14:59:42', 'nisi maxime ea', '2019-06-01 22:11:15', 'Legacy Assurance Coordinator', 'District Optimization Liason', 'Product Marketing Agent', 'quas reprehenderit a', 'Unde incidunt consectetur exercitationem culpa necessitatibus voluptatem ipsam nulla.', 'Customer Research Manager', 'Rem aliquam illo voluptatem qui.', 44, NULL, NULL, '2019-11-19 20:15:23', NULL),
(23, 'Corkery, Spinka and Lynch', 'your.email+faker91066@gmail.com', 'Preston Quitzon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, NULL, NULL, NULL, 1),
(24, 'Corkery, Spinka and Lynch', 'your.email+faker91066@gmail.com', 'Preston Quitzon', 'Human Paradigm Representative', 'Bransonside', 'Roob - Ondricka', '2020-02-05 14:05:45', 'et ipsam voluptatem', '2020-10-19 00:50:13', 'Dynamic Research Consultant', 'Central Quality Specialist', 'Regional Mobility Liason', 'quia enim quidem', 'Corrupti et numquam sed animi recusandae.', 'International Integration Administrator', 'Qui qui accusamus aliquid aperiam ipsum.', 38, NULL, NULL, '2020-05-11 16:13:59', NULL);

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2020_01_22_125453_create_education_table', 2),
(6, '2020_01_22_130617_add_user_id_to_education_table', 3),
(7, '2020_01_22_131323_add_skills_to_users_table', 4),
(8, '2020_01_22_134118_add_city_to_users_table', 5),
(9, '2020_01_22_144716_add_status_to_education_table', 6),
(10, '2020_01_22_161100_add_address_to_users_table', 7),
(11, '2020_01_23_115947_create_jobproviders_table', 8),
(12, '2020_01_23_120041_create_jobsummary_table', 8),
(13, '2020_01_23_121018_add_users_id_to_jobsummary_table', 9),
(14, '2020_01_24_092649_add_users_id_to_jobproviders_table', 10),
(15, '2020_01_24_092758_add_ref_id_to_jobsummary_table', 11),
(16, '2020_01_24_112447_alter_users_id_in_jobproviders_table', 12),
(17, '2020_01_24_112800_alter_ref_id_in_jobsummary_table', 13),
(18, '2020_01_24_122239_create_jobs_table', 14),
(19, '2020_01_24_123835_alter_user_id_in_jobs_table', 15),
(20, '2020_01_24_124159_add_posted_date_to_jobs_table', 16),
(21, '2020_01_24_141150_add_name_in_jobs_table', 17),
(22, '2020_01_27_073753_create_applied_users_table', 18),
(23, '2020_01_27_075659_create_applied_table', 19),
(24, '2020_01_27_080051_alter_user_id_in_applied_table', 20),
(25, '2020_01_27_111416_add_applied_to_jobs_table', 21),
(26, '2020_01_27_122342_add_appliedstatus_to_applied_table', 22),
(27, '2020_01_27_131126_add_posted_by_in_applied_table', 23),
(28, '2020_01_27_150932_create_applied_table', 24),
(29, '2020_01_27_151141_alter_user_id_in_applied_table', 25),
(30, '2020_01_28_061356_alter_job_id_in_applied_table', 26),
(31, '2020_01_28_135652_alter_appliedstatus_in_applied_table', 27),
(32, '2020_01_28_155919_alter_mail_in_applied_table', 28),
(33, '2020_01_29_075923_delete_mail_in_applied_table', 29),
(34, '2020_01_29_080106_create_message_table', 30),
(35, '2020_01_29_080853_create_message_table', 31),
(36, '2020_01_29_081112_alter_columns_in_message_table', 32),
(37, '2020_01_29_105603_add_column_in_applied_table', 33),
(38, '2020_01_29_110025_alter_message_in_applied_table', 34),
(39, '2020_01_30_142848_add_delete_status_in_users_table', 35),
(40, '2020_01_31_125403_add_delete_status_in_jobs_table', 36),
(41, '2020_01_31_125716_drop_applied_in_jobs_table', 37);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('faker333@gmail.com', '$2y$10$fN51.1XDaAcm6Y4luzFGsutWRYrmvfqXhorMTJLgBiZD7nZ10l6zG', '2020-02-04 02:38:33'),
('faker12345@gmail.com', '$2y$10$l3cFydArvMpomu5Xu/8dX.DXqmLp7DyUUiIOwqdrlJOrWUPSBy0qG', '2020-02-04 03:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projects` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addressline1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addressline2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile_no`, `user_type`, `remember_token`, `created_at`, `updated_at`, `skills`, `projects`, `addressline1`, `addressline2`, `city`, `state`, `country`, `zip`, `delete_status`) VALUES
(1, 'Justice Blick', 'faker21904@gmail.com', NULL, '$2y$10$aYriU5YT0kQc3SDJKJ9tje7o5dq7VrduzJ3Nw7f6aiui1Xnu0aacm', '149-471-8458', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(2, 'Jamil Murazik', 'faker59763@gmail.com', NULL, '$2y$10$uVzL/QZzPaOf7zLTabByLu1tRj7903VRWyFlecKgkAIGVg0lwtMBe', '408-689-0362', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(3, 'Brooklyn Weber', 'faker48812@gmail.com', NULL, '$2y$10$rHDRwJX2OnLIDf4wWuI6ZOeXX1JkcpjWsHMQrvvLMMYZcAt1/i80C', '684-299-3666', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(4, 'Fabiola Heidenreich', 'faker98330@gmail.com', NULL, '$2y$10$hALJBVGl8QURx2ORex2tneU309HkCWTcexprvMjBFx8Sr3LYB0AhK', '449-359-6684', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(5, 'Kiarra Kreiger', 'faker71833@gmail.com', NULL, '$2y$10$pCJU.3/5fv6LfCkZBlloOuPcPjEvP9HLYVL3ouK3bLMEKBiOEdr/u', '019-475-4012', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(6, 'Bria Ziemann', 'faker20744@gmail.com', NULL, '$2y$10$RVJiim3ZAjXD67ejDK1Yk.EB1j7Z/WeG4.2M5oBbT/mSS0DjXG6Ua', '745-735-5134', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(7, 'Ulices Hilpert', 'faker91243@gmail.com', NULL, '$2y$10$ELcugybG6T66vZriedT3UeYNtDqFqdKtfLcBeGSS.KXIOFZ9mou1y', '365-729-8032', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(8, 'Stephanie Fahey', 'faker90977@gmail.com', NULL, '$2y$10$cAYErY3O.RPK6CUkaJpchOwQm/jiaUmVtZXXo7jZOZ.lb4IYOLD4a', '066-453-8373', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(9, 'Nikko Green', 'faker30674@gmail.com', NULL, '$2y$10$m3.AoUfMM2bxDsi9m4mVxOYgcmM662pV2kFVmhRhlEoE7nkh9ktQq', '349-090-3659', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(10, 'Diego Turner', 'faker99241@gmail.com', NULL, '$2y$10$fy5n/ku/zxKbnxNV5w6cies0n77Fd4dbvJ8RK9jKqL7R3s/6APx.m', '647-443-4967', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(11, 'Aditya Kemmer', 'faker92357@gmail.com', NULL, '$2y$10$SPE9dcBJVzAFgxsL0zDs4.9KNaoQyfsPSafdSIj7FoSyjA.olp8Bu', '732-640-1626', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(12, 'Audra Dooley', 'faker37756@gmail.com', NULL, '$2y$10$1AyYKFCayGQVbPNLxzsGh.nGGXF.aSzaQtsDM27GExdc73X5vBg8e', '244-329-5520', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(13, 'Mikayla Keeling', 'faker85665@gmail.com', NULL, '$2y$10$eRFURUnlilNVJ/i8QeNDeumT0yApEcB1Ka.sqamWuYqCoMzplixPq', '257-727-1258', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(14, 'Aurelia McGlynn', 'faker65505@gmail.com', NULL, '$2y$10$dX/l57ucDHzN/VTiZyBzd.HxdWGt2AiMbu.uCk8OQuqMyNAQ9F16O', '227-533-7992', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(15, 'Kory Bailey', 'faker42400@gmail.com', NULL, '$2y$10$Vu4nMdpVgn6ifdjFIFGOT..G1J4Qrz8xffoMOm/0BkVad6y.4SQEy', '040-308-6925', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(16, 'Vance Wolf', 'faker80519@gmail.com', NULL, '$2y$10$nqXnrTlHbpvW.4a0lfrCJukFfP3Cpwtd3QLZChiAIYxFIyftp7taW', '946-114-8672', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(17, 'Kenya Welch', 'faker96580@gmail.com', NULL, '$2y$10$3/NMzYVoSQ.OJqE/DaJ5OeK1B5OrjqSt2bDDlZQ2/8EjzRfTbqUyS', '990-508-1679', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(18, 'Georgiana Stracke', 'faker11417@gmail.com', NULL, '$2y$10$r8MapjvDIQ1b8xJ3TfxFD.XPsBHMHbg/HKqQjFGAb3wy0gSV0667u', '351-878-2320', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(19, 'Deva dharani', 'dharani@gmail.com', NULL, '$2y$10$U/rc25c5roCIdC6nx51dBuJSg4yXItJ2XmOgYWOFsR5X2OSm64q6O', '6374665570', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(20, 'Blaze Monahan', 'faker88603@gmail.com', NULL, '$2y$10$C8MQjUvijkFi5d5wf.GAmutemVgPTRiFfFLGf.zBoIjFoNlAcbZ8G', '676-640-6935', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(21, 'Santiago Stoltenberg', 'faker42129@gmail.com', NULL, '$2y$10$Zf46KfTrxhU/1R3K9uOhzOS/vWepynDkndPtfEwNWMIsMENkTXlaq', '577-645-4805', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(22, 'Carlos Padberg', 'faker75817@gmail.com', NULL, '$2y$10$8I0XBom8sLjpmaWzRBwNteHnRFKeOpWpX4XwD86M.LOOXynywnYbm', '658-991-4343', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(23, 'Destini Fritsch', 'faker94318@gmail.com', NULL, '$2y$10$JX/v5epZEZjcEalVBJz1J.c.8fWyoEkZGNE.ETpM4kLykELiEZh9S', '867-068-7424', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(24, 'Lillian Nader', 'faker62239@gmail.com', NULL, '$2y$10$WnAfmyvpkbVhYksGJY7/ru5bj6Azseg4y2Iw9b5U9YuGYo9llgP3.', '450-320-4147', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(25, 'Edyth Collier', 'faker82892@gmail.com', NULL, '$2y$10$tJwnC8bvSlHywsP14ZTZXOwB3.6Rzn21XJjtKk/E8A9rjxblg7d2i', '860-443-2354', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(26, 'Ressie Rowe', 'faker78431@gmail.com', NULL, '$2y$10$L/NL.GypP7drR7J5qb38cet.Z4NJGJyDM.lQRvcUo4CQOtkCujxD2', '875-867-8356', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(27, 'Don Schmidt', 'faker99925@gmail.com', NULL, '$2y$10$rdik.2MW4L0fomYzFSku/.wQk5EbC9136LEVT3/PCmBlizjvnhRkq', '372-077-6317', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(28, 'Roy Rodriguez', 'faker81333@gmail.com', NULL, '$2y$10$jkixmiNHbeG4jcU1j6eLuePu0.ZliNNybVNPxALDGNpkrYA8ul8sW', '251-771-5677', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(29, 'Jolie Hammes', 'faker48453@gmail.com', NULL, '$2y$10$N.Awo.310h24IlR0Xj5KDOwkyCZm0JXoMzxLFE4ZFnKSQzDvaWfQe', '386-942-8852', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(30, 'Kenyon Schiller', 'faker41305@gmail.com', NULL, '$2y$10$feqYOwIwLl9Vr1mT5974Fuwf0cHGDKSL6bmn1785y5bn3PPTLZCFq', '376-205-4624', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(31, 'Miracle McLaughlin', 'faker97268@gmail.com', NULL, '$2y$10$ZALywJJXLViHJsEgcjfOZeYzur2N6q2Sjwi37c36hWmPGGiFlJv5e', '737-345-4007', NULL, NULL, NULL, NULL, 'Dolorem ut sed iure.', 'Repudiandae aut qui quia autem et quod dolor aperiam.', 'In assumenda distinctio.', 'Nikolausfort', '73629 Dooley Manors', 'Et accusamus ut laboriosam nemo laborum fugiat et.', 'Omari Hand', 'Molestiae occaecati commodi rem nostrum.', NULL),
(32, 'Haven Krajcik', 'faker84799@gmail.com', NULL, '$2y$10$KaCJ4lLSyuG7oncXy0biSunJvyE2SEcafzCkyGpdNuT0Zt0mguMQK', '411-889-8245', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(33, 'Mavis Wyman', 'faker10144@gmail.com', NULL, '$2y$10$RmOYv3eBVMv8Oq3/Ao0oSOBO2wvJS7DAue36aGcwiikJ0VUSFt1US', '378-425-5454', NULL, NULL, NULL, NULL, 'quaerat voluptas quisquam', 'eligendi iusto quae', '', '', 'East Francescoport', 'Utah', 'Montserrat', '83648', NULL),
(34, 'Willie Veum', 'faker60520@gmail.com', NULL, '$2y$10$HYSSAktYqotFuqUhiO3YauSSG.hG1bUtiKBmyWyeibvHhgC1lIbl6', '219-400-4799', 5, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(35, 'Vivian Willms', 'faker67724@gmail.com', NULL, '$2y$10$Bd5NwzU/K/D/DOZawodK3u.SGIvVHLUiBcH2TyTREnng7s/HI7GAy', '403-367-3999', 1, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(36, 'Gage Hoppe', 'faker87930@gmail.com', NULL, '$2y$10$vE3aeh.BM6UqC2pkqVAKp.eeX/4/ERXwv5FWqc/2wL4GCqjVo4Nwq', '642-026-5445', 3, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(37, 'Katherine Kunze', 'lakshmi@gmail.com', NULL, '$2y$10$TmscxWjVm7xY3FB58umM1.vXgU73peB579GXo/qR6.lIOIOnPiNvq', '684-496-4766', NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(38, 'Preston Quitzon', 'faker12345@gmail.com', NULL, '$2y$10$tWbFpdW24goL0u7fe3JH/eI7gXrSUZGHAXDr772v9CwDaj9.Bhb2a', '014-021-0419', 5, NULL, NULL, NULL, '', '', '', '', '', '', '', '', NULL),
(39, 'Felicita Wiegand', 'faker111@gmail.com', NULL, '$2y$10$CAcACF6PTPB2g6yMfgsIAeLyh6O84uhNqgRMfAuvws1TKX3pLwoXq', '408-742-4757', 3, 'x8f4TFyMPg6LGuVXXZ1DhjZuEkKvBEVsbGJOAZqVzUV4hirs6OvVsVpVbKrO', NULL, NULL, 'provident eius inventore', 'sit maxime labore', '1828 O\'Hara Glen', '3597 Rodriguez Keys', 'New Sidneybury', 'Minnesota', 'Solomon Islands', '72426', NULL),
(40, 'Ms. Adelle Rohan', 'faker333@gmail.com', NULL, '$2y$10$p140MGetHuf2YrXyEinueO85zDZ3qbeH4vZiXhT7VDrX64tsT.hcu', '651-379-5847', 4, NULL, NULL, NULL, 'optio nihil quibusdam', 'omnis ut laudantium', '28300 Seamus Square', '9595 Hayes Spring', 'South Berniehaven', 'Kentucky', 'Israel', '69220-1972', NULL),
(41, 'Ivy Wiegand', 'dhara@gmail.com', NULL, '$2y$10$xKhkO0o3x/z2RmCxpwCKNuaJwg9kCdkvV8j09W5.EcRi5z3inBBZa', '831-747-7813', 4, NULL, NULL, NULL, 'eaque eius velit', 'nihil distinctio quia', '1858 Raymond Port', '0282 Yoshiko Mountain', 'South Myriam', 'Arizona', 'United Arab Emirates', '92507-5207', NULL),
(42, 'Thaddeus Gutkowski', 'your.email+faker57803@gmail.com', NULL, '$2y$10$YJ1wFUOudbYlQjIjPEMqdu1LTv2.MFZJU3T7I5DY8s7tK21zvICLi', '088-151-4360', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Novella McGlynn', 'your.email+faker67311@gmail.com', NULL, '$2y$10$crGQfnpxQxWi/DciX.ho/uBmysgLW9v1Ny6.WMXQFACK49D/paZaK', '539-874-0208', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Hari sudhan', 'hari@gmail.com', NULL, '$2y$10$4CC2vEdHPejDJRylRcHdyumvfbdnXvVwjvOdn60Ron2BFX2HpKhG.', '345456456', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Gokul krishna', 'krishna@gmail.com', NULL, '$2y$10$9vH6p1Vlkotvhndm/dXLqOB/e3WY/2xVfDZQ/OHcVDoGXOp8vCuoS', '3435565', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Muthu lakshmi', 'lakshmi12345@gmail.com', NULL, '$2y$10$n6kCrVxJPJBSA4SH4EluDOSKSFCc3oMTsjd0et2kKfGFKDembtLS.', '879896786', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Roshan kumar', 'rosan@gmail.com', NULL, '$2y$10$rH2rEIVdvGxkPhVpUBR8r.8r3AtNROoiThq8cJoB/XncHxsEihlYu', '73487346928', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Raj hari', 'raj@gmail.com', NULL, '$2y$10$gm3SPbPh/XYC7wGPwSuHButXjZonq9zHReGkT4M8SwOa8p.59661e', '547658', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Vinoth kumar', 'vinoth@gmail.com', NULL, '$2y$10$6RJiBFvXDI6o7gX55wny0eF9FmgtVjPDL..HTtpDNaKl/ggv6OZWe', '587365983', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Akila murugan', 'akila@gmail.com', NULL, '$2y$10$n4MdPCiEjOpEn.TYChEVAe35/Rw28xMuLIX9hhffe/cG7aEpUvEX2', '7364764823', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Yovel ravi', 'yovel@gmail.com', NULL, '$2y$10$Q4y0G4tNSrqy3a/zZ5isTuoouC0p/k79RnmDROlIVvi6.Vyb3fCMm', '436546756', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Dinesh kumar', 'dinesh@gmail.com', NULL, '$2y$10$jsssuD1FJ2NVMyL/F6kb8O6pVCF4hy4Nvg7jxQG5OxOSzteYegsjC', '658572639', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Abi ravi', 'abi@gmail.com', NULL, '$2y$10$n0at4oYNzUi7kQhqfX9glub1ZdXROG/qXrQynLZPH2BfikYpTO6yC', '6356547836', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applied_user_id_foreign` (`user_id`),
  ADD KEY `applied_job_id_foreign` (`job_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_user_id_foreign` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applied`
--
ALTER TABLE `applied`
  ADD CONSTRAINT `applied_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `applied_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
