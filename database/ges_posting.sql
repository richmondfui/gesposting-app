-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 02:04 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ges_posting`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `othername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residential_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssnit_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghanaian_lang_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghanaian_lang_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghanaian_lang_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_attended` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_from` date NOT NULL,
  `college_to` date NOT NULL,
  `college_certificate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_offered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `code`, `title`, `firstname`, `lastname`, `othername`, `gender`, `dob`, `marital_status`, `nationality`, `residential_address`, `email`, `mobile_number`, `ssnit_number`, `ghanaian_lang_1`, `ghanaian_lang_2`, `ghanaian_lang_3`, `college_attended`, `college_from`, `college_to`, `college_certificate`, `course_offered`, `staff_id`, `registered_number`, `region_1`, `region_2`, `region_3`, `status`, `created_at`, `updated_at`) VALUES
(1, '151c4b36e8', 'Miss', 'Kylie', 'Blankenship', 'Sean Suarez', 'Male', '1986-03-24', 'Divorced', 'xezim@mailinator.com', 'Adipisci minima duis', 'rumipapip@mailinator.net', 'lalo@mailinator.net', 'hefoce@mailinator.net', 'bilywypeb@mailinator.net', 'dyqahena@mailinator.net', 'juwiz@mailinator.net', 'cawujewa@mailinator.net', '2005-06-22', '1982-12-14', 'C:\\xampp\\tmp\\php812E.tmp', 'sybefi@mailinator.com', 'qucapy@mailinator.net', 'jecifanyny@mailinator.net', 'Ahafo', 'Greater Accra', 'Greater Accra', 'posted', '2020-08-13 16:40:16', '2020-08-15 20:50:42'),
(2, 'fe4a324173', 'Miss', 'Britanni', 'Cabrera', 'Jayme Beach', 'Female', '2012-10-10', 'Married', 'mibe@mailinator.com', 'Et illo dolores repu', 'nocez@mailinator.net', 'sorymycer@mailinator.com', 'nokequfofe@mailinator.net', 'modu@mailinator.com', 'fanogevehy@mailinator.net', 'cuty@mailinator.com', 'tawicu@mailinator.net', '2013-05-17', '2008-11-02', 'C:\\xampp\\tmp\\phpEF0B.tmp', 'cadek@mailinator.com', 'kyweqysubu@mailinator.com', 'fezuken@mailinator.net', 'Ashanti', 'Ahafo', 'Ahafo', 'posted', '2020-08-13 16:54:56', '2020-08-15 22:28:10'),
(3, '4e90370b68', 'Mrs', 'Tarik', 'Clark', 'Ramona Donovan', 'Male', '1970-06-22', 'Single', 'kyve@mailinator.net', 'Voluptatibus delenit', 'paja@mailinator.net', 'zymaq@mailinator.net', 'gyfab@mailinator.com', 'nuvuryq@mailinator.net', 'dimodofi@mailinator.com', 'tomuvok@mailinator.net', 'vonyg@mailinator.com', '1981-06-22', '2017-10-17', 'C:\\xampp\\tmp\\php8C9F.tmp', 'sozuq@mailinator.com', 'heru@mailinator.net', 'jemumisy@mailinator.com', 'Ahafo', 'Greater Accra', 'Greater Accra', 'posted', '2020-08-13 16:56:42', '2020-08-15 22:28:55'),
(4, 'c07b45bcec', 'Miss', 'Jana', 'Stone', 'Bertha Kaufman', 'Female', '2007-03-05', 'Single', 'vehumahome@mailinator.net', 'Itaque quas delectus', 'wumab@mailinator.com', 'feri@mailinator.com', 'tepubyju@mailinator.com', 'teda@mailinator.net', 'joronyne@mailinator.com', 'huciko@mailinator.net', 'mokavisej@mailinator.net', '2001-01-03', '1985-05-05', 'C:\\xampp\\tmp\\phpC2E5.tmp', 'gupaga@mailinator.net', 'hyhen@mailinator.net', 'muwuba@mailinator.com', 'Ahafo', 'Ashanti', 'Greater Accra', 'pending', '2020-08-13 19:27:40', '2020-08-13 19:27:40'),
(6, 'df2ad82d16', 'Mrs', 'Autumn', 'Butler', 'Vernon Hahn', 'Male', '1991-01-27', 'Single', 'puno@mailinator.com', 'Reprehenderit nihil', 'pyjyqodava@mailinator.com', 'guvubo@mailinator.com', 'wejohymily@mailinator.net', 'nakocyp@mailinator.com', 'zijebe@mailinator.net', 'vudixurur@mailinator.com', 'sygowiz@mailinator.com', '2018-05-09', '1984-08-21', 'C:\\xampp\\tmp\\php9DFA.tmp', 'bokotom@mailinator.net', 'sahyd@mailinator.net', 'hila@mailinator.net', 'Ashanti', 'Ashanti', 'Greater Accra', 'pending', '2020-08-13 20:05:44', '2020-08-13 20:05:44'),
(7, '8f0baf1117', 'Miss', 'Winifred', 'Holland', 'Kimberley Hayes', 'Female', '1976-03-06', 'Single', 'rikekipih@mailinator.com', 'Sequi dolorum sapien', 'katicuco@mailinator.net', 'wixalohopy@mailinator.com', 'tavimab@mailinator.net', 'qozuda@mailinator.net', 'mati@mailinator.com', 'kogelify@mailinator.com', 'datutem@mailinator.net', '2012-11-25', '1977-04-25', 'C:\\xampp\\tmp\\php3F2D.tmp', 'wohe@mailinator.com', 'zuzitocoby@mailinator.net', 'kumib@mailinator.net', 'Ashanti', 'Ahafo', 'Greater Accra', 'pending', '2020-08-13 20:06:25', '2020-08-13 20:06:25'),
(8, '884e53dbbc', 'Miss', 'Lionel', 'Valentine', 'Denton Gilmore', 'Female', '1988-09-25', 'Single', 'mapiqeky@mailinator.net', 'Eum ipsa consequatu', 'banotomaf@mailinator.net', 'biqycoce@mailinator.com', 'losyki@mailinator.com', 'zytonod@mailinator.com', 'xumiwyqir@mailinator.com', 'dypajewibi@mailinator.net', 'wonykego@mailinator.com', '2019-05-03', '2008-12-16', 'C:\\xampp\\tmp\\php5F9E.tmp', 'xafi@mailinator.net', 'wala@mailinator.com', 'woxoresesi@mailinator.com', 'Ahafo', 'Greater Accra', 'Ahafo', 'pending', '2020-08-13 20:12:01', '2020-08-13 20:12:01'),
(10, '0531f8c9d5', 'Mrs', 'Lionel', 'Mckinney', 'Maris Best', 'Male', '1984-05-19', 'Divorced', 'vyqup@mailinator.net', 'Excepturi duis cillu', 'cenor@mailinator.com', 'qyjeh@mailinator.net', 'zilixutapa@mailinator.net', 'limeqyw@mailinator.com', 'qiwawyqab@mailinator.net', 'kirekod@mailinator.net', 'baton@mailinator.net', '1997-06-23', '2001-11-06', 'C:\\xampp\\tmp\\php46DF.tmp', 'byxic@mailinator.com', 'pota@mailinator.com', 'jisaz@mailinator.com', 'Ashanti', 'Greater Accra', 'Ahafo', 'pending', '2020-08-13 20:14:06', '2020-08-13 20:14:06'),
(11, '2d21fc6538', 'Miss', 'Baxter', 'Henry', 'Kylee Lancaster', 'Female', '1999-12-06', 'Single', 'hevizizy@mailinator.com', 'Et veniam deserunt', 'gikim@mailinator.com', 'raqofuqy@mailinator.net', 'nyluzig@mailinator.com', 'qitavy@mailinator.com', 'vawudakek@mailinator.com', 'pobulyz@mailinator.net', 'fefy@mailinator.net', '1982-07-28', '1976-04-26', 'C:\\xampp\\tmp\\phpEC47.tmp', 'cugusofew@mailinator.com', 'licole@mailinator.com', 'tetu@mailinator.net', 'Greater Accra', 'Greater Accra', 'Ahafo', 'pending', '2020-08-13 20:14:49', '2020-08-13 20:14:49'),
(12, '4a922fa771', 'Mrs', 'Jena', 'Terrell', 'Camden Gallagher', 'Female', '1981-10-05', 'Married', 'tapev@mailinator.com', 'Dolore ipsum qui re', 'puhixyzy@mailinator.com', 'zesy@mailinator.com', 'camawat@mailinator.com', 'wohamyju@mailinator.net', 'micudunylu@mailinator.com', 'rizujazi@mailinator.com', 'mumuzalut@mailinator.com', '1979-07-10', '2014-12-25', 'C:\\xampp\\tmp\\php1363.tmp', 'sozecoqu@mailinator.com', 'vyvunedys@mailinator.net', 'tapi@mailinator.net', 'Ahafo', 'Greater Accra', 'Greater Accra', 'pending', '2020-08-13 20:16:04', '2020-08-13 20:16:04'),
(13, '996c366b16', 'Mrs', 'Yen', 'Ratliff', 'Barry Holmes', 'Female', '2002-06-04', 'Married', 'lufuw@mailinator.net', 'Dolorem molestias et', 'gazy@mailinator.net', 'vitewaq@mailinator.net', 'fimu@mailinator.net', 'gaza@mailinator.com', 'pymaca@mailinator.net', 'cati@mailinator.com', 'razo@mailinator.net', '1973-12-02', '2005-02-26', 'C:\\xampp\\tmp\\phpF796.tmp', 'jepoho@mailinator.com', 'kufuduvyw@mailinator.com', 'retyciqap@mailinator.com', 'Ashanti', 'Greater Accra', 'Ashanti', 'pending', '2020-08-13 20:23:36', '2020-08-13 20:23:36'),
(14, 'c2d2342d1d', 'Mrs', 'Kane', 'Frank', 'Burke Copeland', 'Female', '1973-03-17', 'Single', 'cyniqa@mailinator.com', 'Aliquam ex illo volu', 'dobot@mailinator.com', 'gosilemu@mailinator.net', 'lumohones@mailinator.com', 'jipupi@mailinator.net', 'sexuc@mailinator.com', 'sohegov@mailinator.net', 'tyjavija@mailinator.com', '2013-02-05', '2020-08-09', 'C:\\xampp\\tmp\\php16E5.tmp', 'xitugy@mailinator.com', 'cilomo@mailinator.com', 'jofulugam@mailinator.com', 'Ahafo', 'Ahafo', 'Ahafo', 'pending', '2020-08-13 20:59:46', '2020-08-13 20:59:46'),
(15, '15503e1803', 'Miss', 'Sigourney', 'Melton', 'Marvin Compton', 'Male', '2018-10-05', 'Divorced', 'cymykyna@mailinator.net', 'Ex occaecat quidem r', 'xyjyze@mailinator.net', 'xoly@mailinator.net', 'lifavugady@mailinator.net', 'secez@mailinator.net', 'sunoqubepu@mailinator.com', 'duzylaj@mailinator.net', 'padycisa@mailinator.com', '2011-01-04', '1971-02-02', 'C:\\xampp\\tmp\\php6CC2.tmp', 'memaxumaxa@mailinator.com', 'zexipy@mailinator.net', 'detisiso@mailinator.com', 'Greater Accra', 'Greater Accra', 'Ahafo', 'pending', '2020-08-14 06:57:37', '2020-08-14 06:57:37'),
(16, '7fbe0f647f', 'Mrs', 'Margaret', 'Marsh', 'Aubrey Chambers', 'Female', '2020-12-06', 'Married', 'sovewame@mailinator.com', 'Nisi sint totam max', 'linutesa@mailinator.net', 'geqozusel@mailinator.net', 'paxusolog@mailinator.net', 'wytur@mailinator.net', 'nuraz@mailinator.net', 'vupojud@mailinator.net', 'cohemy@mailinator.net', '2017-07-22', '1986-05-08', 'C:\\xampp\\tmp\\php8A1E.tmp', 'haba@mailinator.com', 'xerozuva@mailinator.net', 'gixo@mailinator.net', 'Greater Accra', 'Ahafo', 'Ahafo', 'pending', '2020-08-15 21:38:28', '2020-08-15 21:38:28'),
(17, '66882ea67e', 'Miss', 'Acton', 'Hahn', 'Lacota Compton', 'Female', '2017-10-02', 'Married', 'weko@mailinator.net', 'Nisi nemo architecto', 'juzucugiv@mailinator.net', 'jidufik@mailinator.net', 'jycudu@mailinator.net', 'jofanupiz@mailinator.net', 'tahuq@mailinator.net', 'laqiloho@mailinator.com', 'herybo@mailinator.net', '1992-06-19', '1991-08-06', 'C:\\xampp\\tmp\\php5099.tmp', 'jizipydul@mailinator.net', 'meti@mailinator.com', 'nycyrif@mailinator.net', 'Greater Accra', 'Ahafo', 'Ashanti', 'pending', '2020-08-15 21:43:40', '2020-08-15 21:43:40'),
(18, '5a768e23f7', 'Miss', 'Adele', 'Kennedy', 'Colleen Burke', 'Male', '1985-01-17', 'Divorced', 'nyqyh@mailinator.com', 'Est nostrud rerum co', 'juryjimi@mailinator.net', 'suhowugud@mailinator.com', 'xomumarohu@mailinator.net', 'fijyzi@mailinator.net', 'syjowapo@mailinator.com', 'vuqosucam@mailinator.com', 'calesanyro@mailinator.com', '1975-10-23', '1981-01-07', 'C:\\xampp\\tmp\\php8BDE.tmp', 'lurymuk@mailinator.com', 'masidu@mailinator.com', 'tukynyqek@mailinator.net', 'Ashanti', 'Greater Accra', 'Greater Accra', 'pending', '2020-08-15 21:43:55', '2020-08-15 21:43:55'),
(19, '8664ce95f8', 'Miss', 'Caleb', 'Boone', 'Gisela Huff', 'Female', '2017-12-15', 'Divorced', 'lexajo@mailinator.com', 'Iste dolorem consect', 'cejybutyxu@mailinator.net', 'mohiz@mailinator.com', 'tilez@mailinator.net', 'gocy@mailinator.com', 'hugytykim@mailinator.net', 'myvo@mailinator.net', 'xypa@mailinator.net', '1995-10-21', '2003-06-07', 'C:\\xampp\\tmp\\php6590.tmp', 'cuqamit@mailinator.com', 'xenoro@mailinator.net', 'tizyviri@mailinator.net', 'Ashanti', 'Ahafo', 'Greater Accra', 'pending', '2020-08-15 22:58:02', '2020-08-15 22:58:02'),
(20, '151c4b36e7', 'Mrs', 'Colleen', 'Cash', 'Jerry Landry', 'Female', '2007-05-06', 'Divorced', 'gixon@mailinator.com', 'Sed voluptate assume', 'qapawewe@mailinator.com', 'vezum@mailinator.net', 'vifol@mailinator.com', 'timoqod@mailinator.com', 'recenyzyl@mailinator.com', 'kynisefozo@mailinator.com', 'zamunis@mailinator.com', '2001-07-23', '1983-08-23', 'C:\\xampp\\tmp\\phpA89B.tmp', 'dewuji@mailinator.com', 'kiquragym@mailinator.net', 'zysadubyry@mailinator.net', 'Ahafo', 'Ahafo', 'Greater Accra', 'pending', '2020-08-15 23:00:30', '2020-08-15 23:00:30'),
(21, 'd5161bb353', 'Miss', 'Phillip', 'Guzman', 'Mufutau Santana', 'Female', '1985-04-02', 'Married', 'zyrewutob@mailinator.com', 'Neque cupiditate sin', 'pehudagogy@mailinator.com', 'dyciwaqo@mailinator.net', 'vawa@mailinator.com', 'qogol@mailinator.net', 'vynuka@mailinator.com', 'mopehusi@mailinator.net', 'jese@mailinator.com', '2017-12-02', '1993-07-12', 'C:\\xampp\\tmp\\phpA6CC.tmp', 'qefe@mailinator.com', 'pitypaf@mailinator.net', 'wufofacu@mailinator.net', 'Greater Accra', 'Greater Accra', 'Ashanti', 'pending', '2020-08-15 23:49:39', '2020-08-15 23:49:39'),
(23, '5e0783eedc', 'Miss', 'Imelda', 'Weber', 'Kessie Middleton', 'Male', '1988-01-03', 'Single', 'dovizofos@mailinator.com', 'Odit consequatur At', 'pife@mailinator.net', 'kajes@mailinator.net', 'husakaq@mailinator.net', 'tyfugusu@mailinator.com', 'xyquwaca@mailinator.net', 'rewati@mailinator.com', 'gafipepyni@mailinator.com', '2003-05-28', '2020-04-25', 'C:\\xampp\\tmp\\php211F.tmp', 'pyfo@mailinator.com', 'culyz@mailinator.net', 'mabihoxar@mailinator.com', 'Ashanti', 'Ahafo', 'Ashanti', 'pending', '2020-08-15 23:50:10', '2020-08-15 23:50:10'),
(24, 'd1f295e812', 'Miss', 'Quincy', 'Mack', 'Aimee Witt', 'Male', '2002-02-04', 'Divorced', 'lyrahilov@mailinator.com', 'Aut ut sunt et maior', 'wyricuxuw@mailinator.net', 'fypaziz@mailinator.net', 'matyrydozu@mailinator.com', 'hogagu@mailinator.com', 'hakycu@mailinator.com', 'favobi@mailinator.com', 'tudejasyli@mailinator.com', '1989-06-20', '1994-12-09', 'C:\\xampp\\tmp\\php7ED8.tmp', 'hacu@mailinator.com', 'sojiboxyl@mailinator.com', 'qobyxake@mailinator.net', 'Greater Accra', 'Ashanti', 'Ahafo', 'pending', '2020-08-15 23:56:02', '2020-08-15 23:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `user_id`, `name`, `description`, `location`, `created_at`, `updated_at`) VALUES
(1, 2, 'Juaboso District', NULL, 'Juaboso', '2020-08-13 16:30:49', '2020-08-13 16:31:23'),
(2, 3, 'Gomoa District', NULL, 'Gomoa', '2020-08-13 16:31:07', '2020-08-13 16:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2020_08_07_191823_create_districts_table', 1),
(5, '2020_08_08_222412_create_schools_table', 1),
(6, '2020_08_08_231214_create_teachers_table', 1),
(7, '2020_08_08_234052_create_applicants_table', 1),
(8, '2020_08_09_110449_create_roles_table', 1),
(9, '2020_08_09_110504_create_role_user_table', 1),
(10, '2020_08_12_075534_create_permissions_table', 1),
(11, '2020_08_12_081031_create_permission_role_table', 1),
(12, '2020_08_12_134935_create_permission_user_table', 1),
(13, '2020_08_13_192133_create_notifications_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'CRUD Districts', NULL, '2020-08-13 16:25:41', '2020-08-13 16:25:41'),
(2, 'CRUD Schools', NULL, '2020-08-13 16:25:41', '2020-08-13 16:25:41'),
(3, 'CRU Teachers', NULL, '2020-08-13 16:35:24', '2020-08-13 16:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
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
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Regional HR', NULL, '2020-08-13 16:25:41', '2020-08-13 16:25:41'),
(2, 'District HR', NULL, '2020-08-13 16:25:41', '2020-08-13 16:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `user_id`, `district_id`, `name`, `location`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Anweafutu D/A JHS', 'Anweafutu', '2020-08-13 17:33:25', '2020-08-13 17:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `school_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `othername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residential_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssnit_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_attended` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_from` date DEFAULT NULL,
  `college_to` date DEFAULT NULL,
  `college_certificate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_offered` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `district_id`, `school_id`, `title`, `firstname`, `lastname`, `othername`, `gender`, `dob`, `marital_status`, `nationality`, `residential_address`, `email`, `mobile_number`, `ssnit_number`, `college_attended`, `college_from`, `college_to`, `college_certificate`, `course_offered`, `staff_id`, `registered_number`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Miss', 'Kylie', 'Blankenship', 'Sean Suarez', 'Male', '1986-03-24', 'Divorced', 'xezim@mailinator.com', 'Adipisci minima duis', 'rumipapip@mailinator.net', 'lalo@mailinator.net', 'hefoce@mailinator.net', 'cawujewa@mailinator.net', '2005-06-22', '1982-12-14', 'C:\\xampp\\tmp\\php812E.tmp', 'sybefi@mailinator.com', 'qucapy@mailinator.net', 'jecifanyny@mailinator.net', '2020-08-15 20:50:42', '2020-08-15 20:50:42'),
(2, 1, NULL, 'Miss', 'Britanni', 'Cabrera', 'Jayme Beach', 'Female', '2012-10-10', 'Married', 'mibe@mailinator.com', 'Et illo dolores repu', 'nocez@mailinator.net', 'sorymycer@mailinator.com', 'nokequfofe@mailinator.net', 'tawicu@mailinator.net', '2013-05-17', '2008-11-02', 'C:\\xampp\\tmp\\phpEF0B.tmp', 'cadek@mailinator.com', 'kyweqysubu@mailinator.com', 'fezuken@mailinator.net', '2020-08-15 22:28:10', '2020-08-15 22:28:10'),
(3, 2, NULL, 'Mrs', 'Tarik', 'Clark', 'Ramona Donovan', 'Male', '1970-06-22', 'Single', 'kyve@mailinator.net', 'Voluptatibus delenit', 'paja@mailinator.net', 'zymaq@mailinator.net', 'gyfab@mailinator.com', 'vonyg@mailinator.com', '1981-06-22', '2017-10-17', 'C:\\xampp\\tmp\\php8C9F.tmp', 'sozuq@mailinator.com', 'heru@mailinator.net', 'jemumisy@mailinator.com', '2020-08-15 22:28:54', '2020-08-15 22:28:54');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Richmond Fui', 'admin@admin.com', NULL, '$2y$10$ZR9yMEZmnTdrezMMjtQTs.iHKYOlVX3rF7bOUBCWDisjLwdC8hjj2', 'HzA7S2bvDNBKLBsYQhghaxYmRvtbsmCz3ULougmaD0uJbWx1kv14lpOdBoW0', NULL, NULL),
(2, 'Nii Amartey', 'amartey@admin.com', NULL, '$2y$10$0IzUkXiC7P8u1JUylZKkhuwZXMQaBEv5ROpUjm.sfRRulkIMunPDi', '0ThAdWrGregPWrfUrBtYiWPsepOin2Pkttg5LpNYCkxB2z98ZR4OfXFU3I6z', NULL, '2020-08-13 17:03:01'),
(3, 'Ernest Asare', 'asare@admin.com', NULL, '$2y$10$mwheT4FVBltN6S0HLxldR.SUn20qO8yVEcXffom8aizTn6vPNLRiS', 'mBnKZmGSAba5BuOg6JjubbXlzSVbatMF5mZ3XVTmM04fLhT2zK2vVcp4uDGu', NULL, '2020-08-13 16:32:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `applicants_email_unique` (`email`),
  ADD UNIQUE KEY `applicants_staff_id_unique` (`staff_id`),
  ADD UNIQUE KEY `applicants_registered_number_unique` (`registered_number`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `districts_name_unique` (`name`),
  ADD KEY `districts_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`permission_id`,`user_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schools_name_unique` (`name`),
  ADD KEY `schools_user_id_foreign` (`user_id`),
  ADD KEY `schools_district_id_foreign` (`district_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`),
  ADD UNIQUE KEY `teachers_staff_id_unique` (`staff_id`),
  ADD UNIQUE KEY `teachers_registered_number_unique` (`registered_number`),
  ADD KEY `teachers_district_id_foreign` (`district_id`),
  ADD KEY `teachers_school_id_foreign` (`school_id`);

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
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schools_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teachers_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
