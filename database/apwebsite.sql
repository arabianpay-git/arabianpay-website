-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2026 at 08:58 AM
-- Server version: 8.0.45-0ubuntu0.22.04.1
-- PHP Version: 8.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_evaluations`
--

CREATE TABLE `about_us_evaluations` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_evaluations`
--

INSERT INTO `about_us_evaluations` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'قيمنا', 'Our Values', 'قيمنا الأساسية التي نؤمن بها', 'Our core values that we believe in', '[]', '2025-12-09 14:13:51', '2025-12-09 14:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_maps`
--

CREATE TABLE `about_us_maps` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` text COLLATE utf8mb4_unicode_ci,
  `des_en` text COLLATE utf8mb4_unicode_ci,
  `des2_ar` text COLLATE utf8mb4_unicode_ci,
  `des2_en` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `about_us_maps`
--

INSERT INTO `about_us_maps` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `des2_ar`, `des2_en`, `image`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'حضورنا في المملكة', 'Our Presence in the Kingdom', 'تتمتع اريبيان باي بحضور واسع في مختلف مناطق ومدن المملكة العربية السعودية، حيث نقدم خدماتنا للموردين والتجار بكل كفاءة وموثوقية.', 'Arabian Pay has a strong presence across various regions and cities in the Kingdom of Saudi Arabia, providing efficient and reliable services to suppliers and merchants.', 'ونعمل باستمرار على توسيع نطاق خدماتنا لضمان الوصول إلى جميع أنحاء المملكة، مع الالتزام بتقديم مستوى موحد من الجودة والتميز في كل موقع نخدمه.', 'We continuously work to expand our services to ensure coverage across the entire Kingdom, while maintaining a consistent level of quality and excellence in every location we serve.', 'about-us/01KC21AKVQV3HXZW3WWMCSKW8S.svg', '[{\"number\":\" 1000+ \",\"label_ar\":\"\\u0645\\u0648\\u0631\\u062f \\u0646\\u0634\\u0637\",\"label_en\":\"Active Supplier\"},{\"number\":\"5000+\",\"label_ar\":\"\\u062a\\u0627\\u062c\\u0631 \\u0645\\u0633\\u062c\\u0644\",\"label_en\":\"gistered Merchant\"}]', '2025-12-09 14:01:41', '2025-12-19 22:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_panner_markettings`
--

CREATE TABLE `about_us_panner_markettings` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_panner_markettings`
--

INSERT INTO `about_us_panner_markettings` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `btn_ar`, `btn_en`, `image_ar`, `image_en`, `created_at`, `updated_at`) VALUES
(1, 'عن ارابيان باي', 'About Arabian Pay', NULL, NULL, 'اعرف المزيد', 'Learn More', NULL, NULL, '2025-12-09 14:13:48', '2025-12-10 10:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_test_mintionals`
--

CREATE TABLE `about_us_test_mintionals` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_test_mintionals`
--

INSERT INTO `about_us_test_mintionals` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'رؤيتنا ورسالتنا', 'Our Vision & Mission', ' نسعى لتمكين كل شركة في المملكة من تحقيق نمو مالي مستدام ومستقبل أمن ومزدهر', 'gdom to achieve sustainable financial growth and a secure, prosperous futu', '[{\"title_ar\":\"\\u0645\\u0646\\u0635\\u0629 \\u0631\\u0627\\u0626\\u062f\\u0629\",\"title_en\":\"Leading Platform\",\"des_ar\":\"\\u0645\\u0646\\u0635\\u0629 \\u0645\\u0627\\u0644\\u064a\\u0629 \\u0648\\u062a\\u0645\\u0648\\u064a\\u0644\\u064a\\u0629 \\u0631\\u0627\\u0626\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0645\\u0644\\u0643\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0633\\u0639\\u0648\\u062f\\u064a\\u0629\",\"des_en\":\"Leading financial and financing platform in Saudi Arabia\",\"icon\":\"<svg width=\\\"21\\\" height=\\\"19\\\" viewBox=\\\"0 0 21 19\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><path d=\\\"M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/svg>\"},{\"title_ar\":\"\\u062d\\u0644\\u0648\\u0644 \\u0645\\u0628\\u062a\\u0643\\u0631\\u0629\",\"title_en\":\"Innovative Solutions\",\"des_ar\":\"\\u062d\\u0644\\u0648\\u0644 \\u062f\\u0641\\u0639 \\u0648\\u062a\\u0645\\u0648\\u064a\\u0644 \\u0645\\u0628\\u062a\\u0643\\u0631\\u0629 \\u0648\\u0633\\u0647\\u0644\\u0629 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645\",\"des_en\":\"Innovative and easy-to-use payment and financing solutions\",\"icon\":\"<svg width=\\\"20\\\" height=\\\"20\\\" viewBox=\\\"0 0 20 20\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><path d=\\\"M9.44706 18.846C6.43635 17.9127 3.91372 15.8324 2.42427 13.0545C0.934827 10.2765 0.598174 7.02411 1.48706 4C4.60259 4.14257 7.65123 3.06658 9.98706 1C12.3229 3.06658 15.3715 4.14257 18.4871 4C19.1657 6.30911 19.1344 8.76894 18.3971 11.06\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/svg>\"},{\"title_ar\":\"\\u0623\\u0645\\u0627\\u0646 \\u0648\\u0634\\u0641\\u0627\\u0641\\u064a\\u0629\",\"title_en\":\"Security & Transparency\",\"des_ar\":\"\\u0623\\u0639\\u0644\\u0649 \\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0645\\u0627\\u0646 \\u0648\\u0627\\u0644\\u0634\\u0641\\u0627\\u0641\\u064a\\u0629 \\u0641\\u064a \\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0645\\u0639\\u0627\\u0645\\u0644\\u0627\\u062a\",\"des_en\":\"Highest standards of security and transparency in all transactions\",\"icon\":\"<svg width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><g opacity=\\\"0.5\\\"><path d=\\\"M6 5H18L21 10L12.5 19.5C12.4348 19.5665 12.357 19.6194 12.2712 19.6554C12.1853 19.6915 12.0931 19.7101 12 19.7101C11.9069 19.7101 11.8147 19.6915 11.7288 19.6554C11.643 19.6194 11.5652 19.5665 11.5 19.5L3 10L6 5Z\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><path d=\\\"M10 12.0008L8 9.80078L8.6 8.80078\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/g><\\/svg>\"},{\"title_ar\":\"\\u0631\\u0624\\u064a\\u062a\\u0646\\u0627\",\"title_en\":\"Our Vision\",\"des_ar\":\"\\u0623\\u0646 \\u0646\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629 \\u0627\\u0644\\u0631\\u0627\\u0626\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0645\\u0644\\u0643\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0633\\u0639\\u0648\\u062f\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0634\\u0631\\u0642 \\u0627\\u0644\\u0623\\u0648\\u0633\\u0637\\u060c \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u0645\\u0628\\u062a\\u0643\\u0631\\u0629 \\u062a\\u0633\\u0647\\u0644 \\u0627\\u0644\\u062d\\u064a\\u0627\\u0629 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629 \\u0644\\u0644\\u062c\\u0645\\u064a\\u0639.\",\"des_en\":\"To be the leading financial platform in Saudi Arabia and the Middle East, by providing innovative solutions that make financial life easier for everyone.\",\"icon\":\"<svg class=\\\"w-8 h-8 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M15 12a3 3 0 11-6 0 3 3 0 016 0z\\\"\\/><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z\\\"\\/><\\/svg>\"},{\"title_ar\":\"\\u0631\\u0633\\u0627\\u0644\\u062a\\u0646\\u0627\",\"title_en\":\"Our Mission\",\"des_ar\":\"\\u062a\\u0645\\u0643\\u064a\\u0646 \\u0627\\u0644\\u0634\\u0631\\u0643\\u0627\\u062a \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u062d\\u0644\\u0648\\u0644 \\u062f\\u0641\\u0639 \\u0648\\u062a\\u0645\\u0648\\u064a\\u0644 \\u0645\\u0631\\u0646\\u0629 \\u0648\\u0622\\u0645\\u0646\\u0629\\u060c \\u062a\\u0633\\u0627\\u0647\\u0645 \\u0641\\u064a \\u0646\\u0645\\u0648 \\u0627\\u0644\\u0627\\u0642\\u062a\\u0635\\u0627\\u062f \\u0648\\u0627\\u0632\\u062f\\u0647\\u0627\\u0631 \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0645\\u0644\\u0643\\u0629\",\"des_en\":\"Empowering individuals and businesses through flexible and secure payment and financing solutions that contribute to economic growth and business prosperity in the Kingdom.\",\"icon\":\"<svg class=\\\"w-8 h-8 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z\\\"\\/><\\/svg>\"},{\"title_ar\":\"\\u0627\\u0644\\u0623\\u0645\\u0627\\u0646\",\"title_en\":\"Security\",\"des_ar\":\"\\u0646\\u0636\\u0645\\u0646 \\u0623\\u0639\\u0644\\u0649 \\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0645\\u0627\\u0646 \\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u0643 \\u0648\\u0645\\u0639\\u0627\\u0645\\u0644\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\",\"des_en\":\"We ensure the highest security standards to protect your data and financial transactions\",\"icon\":\"<svg class=\\\"w-7 h-7 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z\\\"\\/><\\/svg>\"},{\"title_ar\":\"\\u0627\\u0644\\u0633\\u0631\\u0639\\u0629\",\"title_en\":\"Speed\",\"des_ar\":\"\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0641\\u0648\\u0631\\u064a\\u0629 \\u0644\\u0637\\u0644\\u0628\\u0627\\u062a\\u0643 \\u0645\\u0639 \\u0646\\u0638\\u0627\\u0645 \\u0630\\u0643\\u064a \\u064a\\u0642\\u064a\\u0651\\u0645 \\u0637\\u0644\\u0628\\u0643 \\u062e\\u0644\\u0627\\u0644 \\u062f\\u0642\\u0627\\u0626\\u0642\",\"des_en\":\"Instant processing of your requests with a smart system that evaluates your request within minutes\",\"icon\":\"<svg class=\\\"w-7 h-7 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M13 10V3L4 14h7v7l9-11h-7z\\\"\\/><\\/svg>\"},{\"title_ar\":\"\\u0627\\u0644\\u0634\\u0641\\u0627\\u0641\\u064a\\u0629\",\"title_en\":\"Transparency\",\"des_ar\":\"\\u0634\\u0641\\u0627\\u0641\\u064a\\u0629 \\u0643\\u0627\\u0645\\u0644\\u0629 \\u0641\\u064a \\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0645\\u0639\\u0627\\u0645\\u0644\\u0627\\u062a \\u0648\\u0627\\u0644\\u0631\\u0633\\u0648\\u0645 \\u0628\\u062f\\u0648\\u0646 \\u0623\\u064a \\u062a\\u0643\\u0627\\u0644\\u064a\\u0641 \\u0645\\u062e\\u0641\\u064a\\u0629\",\"des_en\":\"Complete transparency in all transactions and fees without any hidden costs\",\"icon\":\"<svg class=\\\"w-7 h-7 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z\\\"\\/><\\/svg>\"}]', '2025-12-09 14:13:50', '2026-01-11 10:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `abut_us_bottom_panners`
--

CREATE TABLE `abut_us_bottom_panners` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des2_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des2_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn2_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn2_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abut_us_bottom_panners`
--

INSERT INTO `abut_us_bottom_panners` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `des2_ar`, `des2_en`, `btn_ar`, `btn_en`, `btn2_ar`, `btn2_en`, `created_at`, `updated_at`) VALUES
(1, 'dv', 'vdddddd', 'vddv', 'v dx', 'fdf', 'dfdh', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `expiration` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coditions`
--

CREATE TABLE `coditions` (
  `title_ar` varchar(233) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_en` varchar(233) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `text_ar` text COLLATE utf8mb4_general_ci,
  `text_en` text COLLATE utf8mb4_general_ci NOT NULL,
  `intro_ar` text COLLATE utf8mb4_general_ci,
  `intro_en` text COLLATE utf8mb4_general_ci,
  `jsoning_hero` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `jsoning_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `id` bigint NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` text COLLATE utf8mb4_general_ci
) ;

--
-- Dumping data for table `coditions`
--

INSERT INTO `coditions` (`title_ar`, `title_en`, `text_ar`, `text_en`, `intro_ar`, `intro_en`, `jsoning_hero`, `jsoning_content`, `id`, `created_at`, `updated_at`) VALUES
('الأحكام والشروط', 'Terms & Conditions', 'توضح هذه السياسة آلية جمع واستخدام وحماية بياناتك الشخصية عند استخدام خدمات اريبيان باي ، سواء كنت عميلًا أو موردًا أو تاجرًا. ومن خلال استخدامك للمنصة، فإنك تقرّ بموافقتك على الالتزام بالممارسات والسياسات الموضحة هنا.', 'This policy explains how we collect, use, and protect your personal information while using ArabianPay services, whether you are a customer, supplier, or merchant. By using our platform, you agree to the practices outlined in this policy.', 'في اريبيان باي، نولي خصوصيتك أقصى درجات الاهتمام، وندرك تمامًا أهمية حماية بياناتك الشخصية. نلتزم بتطبيق أعلى معايير الأمان لضمان تجربة موثوقة وآمنة، قائمة على الشفافية وبناء الثقة في جميع المعاملات التي تتم عبر منصتنا.', 'At ArabianPay, we respect your privacy and recognize the importance of protecting your personal data. We are committed to providing a safe and reliable experience, built on transparency and trust in every transaction you make through our platform.', '[{\"title_ar\":\"\\u0634\\u0631\\u0648\\u0637 \\u0648\\u0627\\u0636\\u062d\\u0629\",\"title_en\":\"Clear Terms\",\"des_ar\":\"\\u0646\\u0642\\u062f\\u0645 \\u0634\\u0631\\u0648\\u0637\\u0627\\u064b \\u0648\\u0627\\u0636\\u062d\\u0629 \\u0648\\u0634\\u0641\\u0627\\u0641\\u0629 \\u0644\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0645\\u0646\\u0635\\u062a\\u0646\\u0627\",\"des_en\":\"We provide clear and transparent terms for using our platform\",\"icon\":\"<svg width=\\\"21\\\" height=\\\"19\\\" viewBox=\\\"0 0 21 19\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><path d=\\\"M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/svg>\"},{\"title_ar\":\"\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0642\\u0627\\u0646\\u0648\\u0646\\u064a\\u0629\",\"title_en\":\"Legal Protection\",\"des_ar\":\"\\u0646\\u062d\\u0645\\u064a \\u062d\\u0642\\u0648\\u0642\\u0643 \\u0648\\u062d\\u0642\\u0648\\u0642\\u0646\\u0627 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0634\\u0631\\u0648\\u0637 \\u0648\\u0627\\u0636\\u062d\\u0629\",\"des_en\":\"We protect your rights and ours through clear terms\",\"icon\":\"<svg width=\\\"20\\\" height=\\\"20\\\" viewBox=\\\"0 0 20 20\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><path d=\\\"M9.44706 18.846C6.43635 17.9127 3.91372 15.8324 2.42427 13.0545C0.934827 10.2765 0.598174 7.02411 1.48706 4C4.60259 4.14257 7.65123 3.06658 9.98706 1C12.3229 3.06658 15.3715 4.14257 18.4871 4C19.1657 6.30911 19.1344 8.76894 18.3971 11.06\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/svg>\"},{\"title_ar\":\"\\u062a\\u062d\\u062f\\u064a\\u062b\\u0627\\u062a \\u0645\\u0633\\u062a\\u0645\\u0631\\u0629\",\"title_en\":\"Regular Updates\",\"des_ar\":\"\\u0646\\u062d\\u062f\\u062b \\u0634\\u0631\\u0648\\u0637\\u0646\\u0627 \\u0628\\u0627\\u0646\\u062a\\u0638\\u0627\\u0645 \\u0644\\u0636\\u0645\\u0627\\u0646 \\u0627\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0627\\u0644\\u0643\\u0627\\u0645\\u0644\\u0629\",\"des_en\":\"We regularly update our terms to ensure complete protection\",\"icon\":\"<svg width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><g opacity=\\\"0.5\\\"><path d=\\\"M6 5H18L21 10L12.5 19.5C12.4348 19.5665 12.357 19.6194 12.2712 19.6554C12.1853 19.6915 12.0931 19.7101 12 19.7101C11.9069 19.7101 11.8147 19.6915 11.7288 19.6554C11.643 19.6194 11.5652 19.5665 11.5 19.5L3 10L6 5Z\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><path d=\\\"M10 12.0008L8 9.80078L8.6 8.80078\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/g><\\/svg>\"}]', '[{\"title_ar\":\"1. \\u0645\\u0642\\u062f\\u0645\\u0629\",\"title_en\":\"1. Introduction\",\"content_ar\":\"\\u0645\\u0631\\u062d\\u0628\\u0627\\u064b \\u0628\\u0643 \\u0641\\u064a \\u0645\\u0646\\u0635\\u0629 ArabianPay. \\u0646\\u062d\\u0646 \\u0645\\u0644\\u062a\\u0632\\u0645\\u0648\\u0646 \\u0628\\u062d\\u0645\\u0627\\u064a\\u0629 \\u062e\\u0635\\u0648\\u0635\\u064a\\u062a\\u0643 \\u0648\\u0636\\u0645\\u0627\\u0646 \\u0623\\u0645\\u0627\\u0646 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629.\",\"content_en\":\"Welcome to ArabianPay platform. We are committed to protecting your privacy and ensuring the security of your personal and financial information.\",\"items\":[]},{\"title_ar\":\"2. \\u0627\\u0644\\u0642\\u0628\\u0648\\u0644 \\u0628\\u0627\\u0644\\u0634\\u0631\\u0648\\u0637\",\"title_en\":\"2. Acceptance of Terms\",\"content_ar\":\"\\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u0644\\u0648\\u0635\\u0648\\u0644 \\u0625\\u0644\\u0649 \\u0645\\u0646\\u0635\\u0629 \\u0627\\u0631\\u064a\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a \\u0648\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645\\u0647\\u0627\\u060c \\u0641\\u0625\\u0646\\u0643 \\u062a\\u0642\\u0628\\u0644 \\u0648\\u062a\\u0648\\u0627\\u0641\\u0642 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0627\\u0644\\u062a\\u0632\\u0627\\u0645 \\u0628\\u0647\\u0630\\u0647 \\u0627\\u0644\\u0623\\u062d\\u0643\\u0627\\u0645 \\u0648\\u0627\\u0644\\u0634\\u0631\\u0648\\u0637. \\u0625\\u0630\\u0627 \\u0643\\u0646\\u062a \\u0644\\u0627 \\u062a\\u0648\\u0627\\u0641\\u0642 \\u0639\\u0644\\u0649 \\u0623\\u064a \\u062c\\u0632\\u0621 \\u0645\\u0646 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0634\\u0631\\u0648\\u0637\\u060c \\u0641\\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0639\\u062f\\u0645 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0645\\u0646\\u0635\\u062a\\u0646\\u0627.\\n\\n\\u0646\\u062d\\u062a\\u0641\\u0638 \\u0628\\u0627\\u0644\\u062d\\u0642 \\u0641\\u064a \\u062a\\u062d\\u062f\\u064a\\u062b \\u0623\\u0648 \\u062a\\u0639\\u062f\\u064a\\u0644 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0634\\u0631\\u0648\\u0637 \\u0641\\u064a \\u0623\\u064a \\u0648\\u0642\\u062a \\u062f\\u0648\\u0646 \\u0625\\u0634\\u0639\\u0627\\u0631 \\u0645\\u0633\\u0628\\u0642. \\u0627\\u0633\\u062a\\u0645\\u0631\\u0627\\u0631 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645\\u0643 \\u0644\\u0644\\u0645\\u0646\\u0635\\u0629 \\u0628\\u0639\\u062f \\u0623\\u064a \\u062a\\u063a\\u064a\\u064a\\u0631\\u0627\\u062a \\u064a\\u0634\\u0643\\u0644 \\u0645\\u0648\\u0627\\u0641\\u0642\\u062a\\u0643 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0634\\u0631\\u0648\\u0637 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062b\\u0629.\",\"content_en\":\"By accessing and using the ArabianPay platform, you accept and agree to be bound by these terms and conditions. If you do not agree to any part of these terms, you must not use our platform.\\n\\nWe reserve the right to update or modify these terms at any time without prior notice. Your continued use of the platform after any changes constitutes your acceptance of the updated terms.\",\"items\":[]},{\"title_ar\":\"3. \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629\",\"title_en\":\"3. Platform Usage\",\"content_ar\":\"\\u0623\\u0646\\u062a \\u0645\\u0633\\u0624\\u0648\\u0644 \\u0639\\u0646 \\u0627\\u0644\\u062d\\u0641\\u0627\\u0638 \\u0639\\u0644\\u0649 \\u0633\\u0631\\u064a\\u0629 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u062d\\u0633\\u0627\\u0628\\u0643 \\u0648\\u0643\\u0644\\u0645\\u0629 \\u0627\\u0644\\u0645\\u0631\\u0648\\u0631. \\u064a\\u062c\\u0628 \\u0639\\u0644\\u064a\\u0643 \\u0625\\u062e\\u0637\\u0627\\u0631\\u0646\\u0627 \\u0641\\u0648\\u0631\\u0627\\u064b \\u0628\\u0623\\u064a \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u063a\\u064a\\u0631 \\u0645\\u0635\\u0631\\u062d \\u0628\\u0647 \\u0644\\u062d\\u0633\\u0627\\u0628\\u0643 \\u0623\\u0648 \\u0623\\u064a \\u062e\\u0631\\u0642 \\u0644\\u0644\\u0623\\u0645\\u0627\\u0646.\\n\\n\\u064a\\u062c\\u0628 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629 \\u0641\\u0642\\u0637 \\u0644\\u0644\\u0623\\u063a\\u0631\\u0627\\u0636 \\u0627\\u0644\\u0642\\u0627\\u0646\\u0648\\u0646\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0635\\u0631\\u062d \\u0628\\u0647\\u0627. \\u064a\\u062d\\u0638\\u0631 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629 \\u0644\\u0623\\u064a \\u063a\\u0631\\u0636 \\u063a\\u064a\\u0631 \\u0642\\u0627\\u0646\\u0648\\u0646\\u064a \\u0623\\u0648 \\u063a\\u064a\\u0631 \\u0645\\u0635\\u0631\\u062d \\u0628\\u0647.\",\"content_en\":\"You are responsible for maintaining the confidentiality of your account information and password. You must notify us immediately of any unauthorized use of your account or any security breach.\\n\\nThe platform should only be used for legal and authorized purposes. It is prohibited to use the platform for any illegal or unauthorized purpose.\",\"items\":[]},{\"title_ar\":\"4. \\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629\",\"title_en\":\"4. Privacy Policy\",\"content_ar\":\"\\u0646\\u062d\\u0646 \\u0645\\u0644\\u062a\\u0632\\u0645\\u0648\\u0646 \\u0628\\u062d\\u0645\\u0627\\u064a\\u0629 \\u062e\\u0635\\u0648\\u0635\\u064a\\u062a\\u0643. \\u0646\\u062c\\u0645\\u0639 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0641\\u0642\\u0637 \\u0639\\u0646\\u062f\\u0645\\u0627 \\u062a\\u0643\\u0648\\u0646 \\u0636\\u0631\\u0648\\u0631\\u064a\\u0629 \\u0644\\u062a\\u0642\\u062f\\u064a\\u0645 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\u0648\\u062a\\u062d\\u0633\\u064a\\u0646 \\u062a\\u062c\\u0631\\u0628\\u062a\\u0643.\\n\\n\\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u062a\\u064a \\u0646\\u062c\\u0645\\u0639\\u0647\\u0627 \\u0642\\u062f \\u062a\\u0634\\u0645\\u0644:\",\"content_en\":\"We are committed to protecting your privacy. We collect personal information only when necessary to provide our services and improve your experience.\\n\\nThe information we collect may include:\",\"items\":[{\"text_ar\":\"\\u0627\\u0644\\u0627\\u0633\\u0645 \\u0648\\u0639\\u0646\\u0648\\u0627\\u0646 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a\",\"text_en\":\"Name and email address\"},{\"text_ar\":\"\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u062d\\u0633\\u0627\\u0628 \\u0627\\u0644\\u0645\\u0635\\u0631\\u0641\\u064a \\u0648\\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\",\"text_en\":\"Bank account and financial information\"},{\"text_ar\":\"\\u0633\\u062c\\u0644 \\u0627\\u0644\\u0645\\u0639\\u0627\\u0645\\u0644\\u0627\\u062a \\u0648\\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\",\"text_en\":\"Transaction and operation records\"},{\"text_ar\":\"\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u062c\\u0647\\u0627\\u0632 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0635\\u0641\\u062d\",\"text_en\":\"Device and browser information\"}]},{\"title_ar\":\"5. \\u062d\\u0645\\u0627\\u064a\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\",\"title_en\":\"5. Data Protection\",\"content_ar\":\"\\u0646\\u0633\\u062a\\u062e\\u062f\\u0645 \\u062a\\u0642\\u0646\\u064a\\u0627\\u062a \\u062a\\u0634\\u0641\\u064a\\u0631 \\u0645\\u062a\\u0642\\u062f\\u0645\\u0629 \\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629. \\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u064a\\u062a\\u0645 \\u0646\\u0642\\u0644\\u0647\\u0627 \\u0648\\u062a\\u062e\\u0632\\u064a\\u0646\\u0647\\u0627 \\u0628\\u0634\\u0643\\u0644 \\u0622\\u0645\\u0646 \\u0648\\u0641\\u0642\\u0627\\u064b \\u0644\\u0623\\u0639\\u0644\\u0649 \\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0645\\u0627\\u0646.\\n\\n\\u0644\\u0627 \\u0646\\u0634\\u0627\\u0631\\u0643 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0645\\u0639 \\u0623\\u0637\\u0631\\u0627\\u0641 \\u062b\\u0627\\u0644\\u062b\\u0629 \\u0625\\u0644\\u0627 \\u0641\\u064a \\u0627\\u0644\\u062d\\u0627\\u0644\\u0627\\u062a \\u0627\\u0644\\u0645\\u0637\\u0644\\u0648\\u0628\\u0629 \\u0642\\u0627\\u0646\\u0648\\u0646\\u064a\\u0627\\u064b \\u0623\\u0648 \\u0628\\u0645\\u0648\\u0627\\u0641\\u0642\\u062a\\u0643 \\u0627\\u0644\\u0635\\u0631\\u064a\\u062d\\u0629.\",\"content_en\":\"We use advanced encryption technologies to protect your personal and financial information. All data is transmitted and stored securely in accordance with the highest security standards.\\n\\nWe do not share your personal information with third parties except in cases required by law or with your explicit consent.\",\"items\":[]},{\"title_ar\":\"6. \\u062d\\u0642\\u0648\\u0642 \\u0627\\u0644\\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\",\"title_en\":\"6. User Rights\",\"content_ar\":\"\\u0644\\u062f\\u064a\\u0643 \\u0627\\u0644\\u062d\\u0642 \\u0641\\u064a:\",\"content_en\":\"You have the right to:\",\"items\":[{\"text_ar\":\"\\u0627\\u0644\\u0648\\u0635\\u0648\\u0644 \\u0625\\u0644\\u0649 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629\",\"text_en\":\"Access your personal information\"},{\"text_ar\":\"\\u0637\\u0644\\u0628 \\u062a\\u0635\\u062d\\u064a\\u062d \\u0623\\u0648 \\u062d\\u0630\\u0641 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643\",\"text_en\":\"Request correction or deletion of your information\"},{\"text_ar\":\"\\u0627\\u0644\\u0627\\u0639\\u062a\\u0631\\u0627\\u0636 \\u0639\\u0644\\u0649 \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u0643\",\"text_en\":\"Object to processing of your data\"},{\"text_ar\":\"\\u0637\\u0644\\u0628 \\u0646\\u0642\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u0643\",\"text_en\":\"Request transfer of your data\"}]},{\"title_ar\":\"7. \\u0627\\u0644\\u0645\\u0633\\u0624\\u0648\\u0644\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0636\\u0645\\u0627\\u0646\\u0627\\u062a\",\"title_en\":\"7. Liability and Warranties\",\"content_ar\":\"\\u0646\\u0642\\u062f\\u0645 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\\"\\u0643\\u0645\\u0627 \\u0647\\u064a\\\" \\u062f\\u0648\\u0646 \\u0623\\u064a \\u0636\\u0645\\u0627\\u0646\\u0627\\u062a \\u0635\\u0631\\u064a\\u062d\\u0629 \\u0623\\u0648 \\u0636\\u0645\\u0646\\u064a\\u0629. \\u0644\\u0627 \\u0646\\u0636\\u0645\\u0646 \\u0623\\u0646 \\u0627\\u0644\\u062e\\u062f\\u0645\\u0629 \\u0633\\u062a\\u0643\\u0648\\u0646 \\u0645\\u062a\\u0627\\u062d\\u0629 \\u0628\\u0634\\u0643\\u0644 \\u0645\\u0633\\u062a\\u0645\\u0631 \\u0623\\u0648 \\u062e\\u0627\\u0644\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0623\\u062e\\u0637\\u0627\\u0621.\\n\\n\\u0644\\u0646 \\u0646\\u0643\\u0648\\u0646 \\u0645\\u0633\\u0624\\u0648\\u0644\\u064a\\u0646 \\u0639\\u0646 \\u0623\\u064a \\u0623\\u0636\\u0631\\u0627\\u0631 \\u0645\\u0628\\u0627\\u0634\\u0631\\u0629 \\u0623\\u0648 \\u063a\\u064a\\u0631 \\u0645\\u0628\\u0627\\u0634\\u0631\\u0629 \\u0646\\u0627\\u062a\\u062c\\u0629 \\u0639\\u0646 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0623\\u0648 \\u0639\\u062f\\u0645 \\u0627\\u0644\\u0642\\u062f\\u0631\\u0629 \\u0639\\u0644\\u0649 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0645\\u0646\\u0635\\u062a\\u0646\\u0627.\",\"content_en\":\"We provide our services \\\"as is\\\" without any express or implied warranties. We do not guarantee that the service will be continuously available or error-free.\\n\\nWe will not be liable for any direct or indirect damages resulting from the use or inability to use our platform.\",\"items\":[]},{\"title_ar\":\"8. \\u0627\\u0644\\u062a\\u0639\\u062f\\u064a\\u0644\\u0627\\u062a \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0634\\u0631\\u0648\\u0637\",\"title_en\":\"8. Modifications to Terms\",\"content_ar\":\"\\u0646\\u062d\\u062a\\u0641\\u0638 \\u0628\\u0627\\u0644\\u062d\\u0642 \\u0641\\u064a \\u062a\\u0639\\u062f\\u064a\\u0644 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0634\\u0631\\u0648\\u0637 \\u0641\\u064a \\u0623\\u064a \\u0648\\u0642\\u062a. \\u0633\\u064a\\u062a\\u0645 \\u0625\\u0634\\u0639\\u0627\\u0631\\u0643 \\u0628\\u0623\\u064a \\u062a\\u063a\\u064a\\u064a\\u0631\\u0627\\u062a \\u062c\\u0648\\u0647\\u0631\\u064a\\u0629 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0623\\u0648 \\u0625\\u0634\\u0639\\u0627\\u0631 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629.\\n\\n\\u0627\\u0633\\u062a\\u0645\\u0631\\u0627\\u0631 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645\\u0643 \\u0644\\u0644\\u0645\\u0646\\u0635\\u0629 \\u0628\\u0639\\u062f \\u0627\\u0644\\u062a\\u0639\\u062f\\u064a\\u0644\\u0627\\u062a \\u064a\\u0634\\u0643\\u0644 \\u0645\\u0648\\u0627\\u0641\\u0642\\u062a\\u0643 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0634\\u0631\\u0648\\u0637 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062b\\u0629.\",\"content_en\":\"We reserve the right to modify these terms at any time. You will be notified of any material changes via email or notification on the platform.\\n\\nYour continued use of the platform after modifications constitutes your acceptance of the updated terms.\",\"items\":[]},{\"title_ar\":\"9. \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0645\\u0639\\u0646\\u0627\",\"title_en\":\"9. Contact Us\",\"content_ar\":\"\\u0625\\u0630\\u0627 \\u0643\\u0627\\u0646 \\u0644\\u062f\\u064a\\u0643 \\u0623\\u064a \\u0623\\u0633\\u0626\\u0644\\u0629 \\u062d\\u0648\\u0644 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0634\\u0631\\u0648\\u0637 \\u0623\\u0648 \\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629\\u060c \\u064a\\u0645\\u0643\\u0646\\u0643 \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0645\\u0639\\u0646\\u0627 \\u0639\\u0628\\u0631:\\n\\n\\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a: legal@arabianpay.com\\n\\u0627\\u0644\\u0647\\u0627\\u062a\\u0641: 920031271\",\"content_en\":\"If you have any questions about these terms or privacy policy, you can contact us via:\\n\\nEmail: legal@arabianpay.com\\nPhone: 920031271\",\"items\":[]}]', 1, '2025-12-09', '2025-12-19 22:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complaint` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','under_review','resolved','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `admin_response` text COLLATE utf8mb4_unicode_ci,
  `resolved_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_panners`
--

CREATE TABLE `contact_panners` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `contact_requests`
--

CREATE TABLE `contact_requests` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','read','replied','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `admin_notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluationtranslations`
--

CREATE TABLE `evaluationtranslations` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fetures_panners`
--

CREATE TABLE `fetures_panners` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sup_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sup_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `fetures_panners`
--

INSERT INTO `fetures_panners` (`id`, `title_ar`, `title_en`, `sup_ar`, `sup_en`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'مع ارابيان باي نضمنلك', 'With ArabianPay, we guarantee', 'تجربة تمويل متكاملة من الشراء إلى السداد', 'A complete financing experience from purchase to repayment', '[{\"image\":\"feature\\/01KBY5EAHZ19D47Q99FBT6F0WW.svg\",\"title_ar\":\"\\u062a\\u0645\\u0648\\u064a\\u0644 \\u0645\\u0631\\u0646 \\u0644\\u0644\\u0628\\u0636\\u0627\\u0626\\u0639\",\"title_en\":\"Flexible Inventory Financing\",\"des_ar\":\"\\u0645\\u0648\\u0651\\u0644 \\u0645\\u0634\\u062a\\u0631\\u064a\\u0627\\u062a\\u0643 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0648\\u0631\\u062f\\u064a\\u0646 \\u0628\\u0643\\u0644 \\u0633\\u0647\\u0648\\u0644\\u0629\\u060c \\u0648\\u062c\\u0647\\u0651\\u0632 \\u0645\\u062e\\u0632\\u0648\\u0646\\u0643 \\u062f\\u0648\\u0646 \\u0627\\u0644\\u062a\\u0623\\u062b\\u064a\\u0631 \\u0639\\u0644\\u0649 \\u0633\\u064a\\u0648\\u0644\\u062a\\u0643 \\u0627\\u0644\\u062a\\u0634\\u063a\\u064a\\u0644\\u064a\\u0629\\u060c \\u0645\\u0639 \\u062e\\u0637\\u0637 \\u0633\\u062f\\u0627\\u062f \\u0645\\u0631\\u0646\\u0629 \\u062a\\u0646\\u0627\\u0633\\u0628 \\u062d\\u062c\\u0645 \\u0623\\u0639\\u0645\\u0627\\u0644\\u0643.\",\"des_en\":\"Finance your inventory purchases seamlessly and keep your operations running smoothly with flexible repayment plans that fit your business cash flow.\"},{\"image\":\"feature\\/01KBY5JVBBRPPH77XNKJPCKKGG.svg\",\"title_ar\":\"\\u0634\\u0631\\u0627\\u0621 \\u0645\\u0628\\u0627\\u0634\\u0631 \\u0645\\u0646 \\u0645\\u0648\\u0631\\u062f\\u064a\\u0646 \\u0645\\u0648\\u062b\\u0648\\u0642\\u064a\\u0646\",\"title_en\":\"Direct Access to Trusted Suppliers\",\"des_ar\":\"\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0648\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0628\\u0627\\u0634\\u0631\\u0629 \\u0645\\u0639 \\u0645\\u0648\\u0631\\u062f\\u064a\\u0646 \\u0645\\u0639\\u062a\\u0645\\u062f\\u064a\\u0646\\u060c \\u0648\\u0627\\u0633\\u062a\\u0641\\u062f \\u0645\\u0646 \\u062a\\u062c\\u0631\\u0628\\u0629 \\u0634\\u0631\\u0627\\u0621 \\u0645\\u0646\\u0638\\u0645\\u0629 \\u062a\\u0636\\u0645\\u0646 \\u0644\\u0643 \\u0633\\u0631\\u0639\\u0629 \\u0627\\u0644\\u062a\\u0646\\u0641\\u064a\\u0630 \\u0648\\u0648\\u0636\\u0648\\u062d \\u0627\\u0644\\u0625\\u062c\\u0631\\u0627\\u0621\\u0627\\u062a.\",\"des_en\":\"Connect and transact directly with trusted suppliers through a structured and transparent purchasing experience designed for business efficiency.\"},{\"image\":\"feature\\/01KBY5JVH1P3PCZVWPGDYXS4Y1.svg\",\"title_ar\":\"\\u0633\\u062f\\u0627\\u062f \\u0645\\u0646\\u0638\\u0645 \\u0628\\u062f\\u0648\\u0646 \\u0636\\u063a\\u0637\",\"title_en\":\"Structured, Stress-Free Repayment\",\"des_ar\":\"\\u0642\\u0633\\u0651\\u0645 \\u0642\\u064a\\u0645\\u0629 \\u0641\\u0648\\u0627\\u062a\\u064a\\u0631\\u0643 \\u0639\\u0644\\u0649 \\u0623\\u0642\\u0633\\u0627\\u0637 \\u0648\\u0627\\u0636\\u062d\\u0629 \\u0648\\u0645\\u062c\\u062f\\u0648\\u0644\\u0629\\u060c \\u0648\\u0627\\u062f\\u0641\\u0639 \\u0628\\u0631\\u0627\\u062d\\u0629 \\u062a\\u0627\\u0645\\u0629 \\u062f\\u0648\\u0646 \\u0645\\u0641\\u0627\\u062c\\u0622\\u062a \\u0623\\u0648 \\u062a\\u0639\\u0642\\u064a\\u062f\\u060c \\u0645\\u0639 \\u0645\\u062a\\u0627\\u0628\\u0639\\u0629 \\u0643\\u0627\\u0645\\u0644\\u0629 \\u0644\\u062d\\u0627\\u0644\\u0629 \\u0627\\u0644\\u0633\\u062f\\u0627\\u062f.\",\"des_en\":\"Split your invoices into clear, scheduled installments and repay with confidence\\u2014no surprises, no complexity, just full control.\"}]', '2025-12-08 13:02:42', '2025-12-29 10:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `feture_panner_translations`
--

CREATE TABLE `feture_panner_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `feture_panner_id` bigint UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hero_home_mains`
--

CREATE TABLE `hero_home_mains` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageletf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagemiddle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titleline_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titleline_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_home_mains`
--

INSERT INTO `hero_home_mains` (`id`, `image`, `imageletf`, `imageright`, `imagemiddle`, `title_ar`, `title_en`, `titleline_ar`, `titleline_en`, `des_ar`, `des_en`, `number`, `created_at`, `updated_at`) VALUES
(1, '01KBVYYWZCFB0JQ3XK2J7GXR4H.png', 'hero_main/01KDARRHEXW2BDVCJCN4MAFW7A.png', 'hero_main/01KDARRHEY3WPBFSD34KTZF5V1.png', '01KBVYYX5G42KCHBE368Z3NYAG.png', 'قسّم فاتورة بضاعتك ', 'Split your purchase ', 'وانت مرتاح', 'pay with ease', 'خلّ مخزونك جاهز اليوم  والسداد على أقساط تناسبك', 'Get your inventory financed today, and repay in structured installments.', '20000', '2025-12-07 16:30:56', '2025-12-29 10:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `homepanner_markettings`
--

CREATE TABLE `homepanner_markettings` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepanner_markettings`
--

INSERT INTO `homepanner_markettings` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `list`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ليش تختار ارابيان باي', 'Why Choose Arabianpay', 'نقيّم احتياجات منشأتك بناءً على نشاطك وحجم عملياتك، لنمنحك حلول تمويل واقعية تدعم قراراتك التشغيلية دون تعقيد.', 'Financing solutions that support your operational decisions without complexity', '[{\"icon\":\"<svg xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\" class=\\\"w-5 h-5\\\" fill=\\\"none\\\" viewBox=\\\"0 0 24 24\\\" stroke=\\\"#0B1140\\\" stroke-width=\\\"2\\\"> <path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" d=\\\"M5 13l4 4L19 7\\\"><\\/path>                                 <\\/svg>\",\"title_ar\":\"\\u062a\\u0645\\u0648\\u064a\\u0644 \\u0630\\u0643\\u064a \\u064a\\u0646\\u0627\\u0633\\u0628 \\u0623\\u0639\\u0645\\u0627\\u0644\\u0643\",\"title_en\":\"Smart financing tailored to your business\"},{\"icon\":\"<svg xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\" class=\\\"w-5 h-5\\\" fill=\\\"none\\\" viewBox=\\\"0 0 24 24\\\" stroke=\\\"#0B1140\\\" stroke-width=\\\"2\\\"> <path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" d=\\\"M5 13l4 4L19 7\\\"><\\/path>                                 <\\/svg>\",\"title_ar\":\"\\u0633\\u062f\\u0627\\u062f \\u0645\\u0631\\u0646 \\u0628\\u062f\\u0648\\u0646 \\u0636\\u063a\\u0637\",\"title_en\":\"Flexible, stress-free repayment\"},{\"icon\":\"<svg xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\" class=\\\"w-5 h-5\\\" fill=\\\"none\\\" viewBox=\\\"0 0 24 24\\\" stroke=\\\"#0B1140\\\" stroke-width=\\\"2\\\"> <path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" d=\\\"M5 13l4 4L19 7\\\"><\\/path>                                 <\\/svg>\",\"title_ar\":\"\\u0645\\u0648\\u0631\\u062f\\u0648\\u0646 \\u0645\\u0648\\u062b\\u0648\\u0642\\u0648\\u0646 \\u0641\\u064a \\u0645\\u0646\\u0635\\u0629 \\u0648\\u0627\\u062d\\u062f\\u0629\",\"title_en\":\"Trusted suppliers in one platform\"},{\"icon\":\"<svg xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\" class=\\\"w-5 h-5\\\" fill=\\\"none\\\" viewBox=\\\"0 0 24 24\\\" stroke=\\\"#0B1140\\\" stroke-width=\\\"2\\\"> <path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" d=\\\"M5 13l4 4L19 7\\\"><\\/path>                                 <\\/svg>\",\"title_ar\":\"\\u062a\\u062d\\u0643\\u0645 \\u0648\\u0648\\u0636\\u0648\\u062d \\u0641\\u064a \\u0643\\u0644 \\u062e\\u0637\\u0648\\u0629\",\"title_en\":\"Full control and clarity at every step\"}]', 'homepanner-markittings/iPhone-mockup.svg', '2025-12-08 10:55:46', '2025-12-29 10:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `home_bottom_panners`
--

CREATE TABLE `home_bottom_panners` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iphone_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iphone_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `and_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `and_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_bottom_panners`
--

INSERT INTO `home_bottom_panners` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `iphone_ar`, `iphone_en`, `and_ar`, `and_en`, `created_at`, `updated_at`) VALUES
(1, 'بخطوات بسيطة ارابيان باي تُسهّل الدفع والتقسيط', 'With simple steps, Arabian Pay makes payment and installments easy.', 'حمّل تطبيق ارابيان باي وابدأ رحلتك خلال دقائق. تسجيل سهل وبسيط بدون أي تعقيدات أو شروط معقدة', 'Download the ArabianPay app and start your journey in minutes. Easy and simple registration with no complications or complex requirements', 'الايفون', 'for iPhone', 'الاندرويد', ' for Android', '2025-12-07 17:19:14', '2025-12-29 11:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `home_panner_partners`
--

CREATE TABLE `home_panner_partners` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `home_panner_partners`
--

INSERT INTO `home_panner_partners` (`id`, `title_ar`, `title_en`, `link_ar`, `link_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'اشترِ بضاعتك من كبار الموردين في المملكة', 'Buy your goods from top suppliers in the Kingdom', 'اطلب الان من خلال ارابيان باي', 'Now ordering via Arabian Pay', '[{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.50.58.jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.50.59 (4).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.50.59 (3).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.50.59 (2).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.50.59.jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.50.59 (5).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.50.59 (6).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.00 (2).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.00 (3).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.00 (4).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.00 (5).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.00 (6).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.01 (1).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.01 (2).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.01 (3).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.01 (4).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.02.jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.02 (1).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.02 (2).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.03.jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.03 (1).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.03 (2).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.04.jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.04 (1).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.04 (2).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.51.04 (3).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 16.59.52.jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 17.36.51.jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 17.57.43.jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-01 at 18.02.12.jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/AyCzd5ZF_400x400.jpg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/1702804469499.jpg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/ZRANsj6s_400x400.jpg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/fb235005-e645-4b28-b341-35f60808096c.png\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-04 at 15.40.06.jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-04 at 15.40.06 (1).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-04 at 15.40.06 (2).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-04 at 15.40.06 (3).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-04 at 15.40.07.jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-04 at 15.40.07 (1).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-04 at 15.40.07 (2).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-04 at 15.40.07 (3).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-04 at 15.40.07 (4).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-04 at 15.40.07 (5).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-04 at 15.40.08.jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-05 at 17.35.22.jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-05 at 17.35.23.jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-05 at 17.35.23 (1).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-05 at 17.35.23 (2).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-05 at 17.35.23 (3).jpeg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/WhatsApp Image 2026-01-05 at 17.35.23 (4).jpeg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/\\u062a\\u0646\\u0632\\u064a\\u0644.png\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/462743878_1580066505922525_1896891297280434957_n.jpg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/images.jpg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/images (1).jpg\"},{\"position\":\"bottom\",\"file\":\"home_panner_partners\\/591d8121-bb43-4467-a362-4565306f6ae6.jpg\"},{\"position\":\"top\",\"file\":\"home_panner_partners\\/5bf7e6c6-e1bd-48a6-8e87-0fa194af6981-200x.jpeg\"}]', '2025-12-08 12:10:23', '2026-01-11 11:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `home_panner_q_a_s`
--

CREATE TABLE `home_panner_q_a_s` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `home_panner_q_a_s`
--

INSERT INTO `home_panner_q_a_s` (`id`, `title_ar`, `title_en`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'كل اللي تحتاج تعرفه عن ارابيان باي', 'All you need to know about Arabianpay', '[{\"number\":1,\"question_ar\":\"\\u0645\\u0627 \\u0647\\u064a \\u0627\\u0631\\u0627\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a\\u061f \",\"question_en\":\"What is ArabianPay? \",\"answer_ar\":\"\\u0623\\u0631\\u0627\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a \\u0634\\u0631\\u0643\\u0629 \\u062a\\u0645\\u0648\\u064a\\u0644 \\u0630\\u0643\\u064a\\u0629 \\u0628\\u0646\\u0638\\u0627\\u0645 \\u0627\\u0634\\u062a\\u0631\\u0650 \\u0627\\u0644\\u0622\\u0646 \\u0648 \\u0627\\u0644\\u062a\\u0633\\u0648\\u064a\\u0629 \\u0644\\u0627\\u062d\\u0642\\u0627 (BNSL) \\u0645\\u062e\\u0635\\u0651\\u0635\\u0629 \\u0644\\u0642\\u0637\\u0627\\u0639 \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644\\u060c \\u062a\\u0631\\u0628\\u0637 \\u0627\\u0644\\u0645\\u0646\\u0634\\u0622\\u062a \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629 \\u0628\\u0627\\u0644\\u0645\\u0648\\u0631\\u062f\\u064a\\u0646\\u060c \\u0648\\u062a\\u064f\\u0645\\u0643\\u0651\\u0646\\u0647\\u0627 \\u0645\\u0646 \\u062a\\u0645\\u0648\\u064a\\u0644 \\u0645\\u0634\\u062a\\u0631\\u064a\\u0627\\u062a\\u0647\\u0627 \\u0627\\u0644\\u062a\\u0634\\u063a\\u064a\\u0644\\u064a\\u0629 \\u0648\\u062a\\u062c\\u0647\\u064a\\u0632 \\u0645\\u062e\\u0632\\u0648\\u0646\\u0647\\u0627 \\u0645\\u0639 \\u0633\\u062f\\u0627\\u062f \\u0645\\u0631\\u0646 \\u0639\\u0644\\u0649 \\u0623\\u0642\\u0633\\u0627\\u0637.\",\"answer_en\":\"Arabian Pay is a smart financing company using the Buy Now, Settle Later (BNSL) system dedicated to the business sector, connecting businesses with suppliers and enabling them to finance their operational purchases and stock inventory with flexible installment payments.\"},{\"number\":2,\"question_ar\":\"\\u0645\\u0646 \\u064a\\u0645\\u0643\\u0646\\u0647 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0627\\u0631\\u0627\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a\\u061f\",\"question_en\":\"Who can use ArabianPay?\",\"answer_ar\":\"\\u0623\\u0631\\u0627\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a \\u0645\\u062a\\u0627\\u062d \\u0644\\u0644\\u0645\\u0646\\u0634\\u0622\\u062a \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0633\\u062c\\u0651\\u0644\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0645\\u0644\\u0643\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0633\\u0639\\u0648\\u062f\\u064a\\u0629\\u060c \\u062e\\u0635\\u0648\\u0635\\u064b\\u0627 \\u0627\\u0644\\u0645\\u0646\\u0634\\u0622\\u062a \\u0627\\u0644\\u0635\\u063a\\u064a\\u0631\\u0629 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0648\\u0633\\u0637\\u0629\\u060c \\u0627\\u0644\\u062a\\u064a \\u062a\\u062d\\u062a\\u0627\\u062c \\u0625\\u0644\\u0649 \\u062a\\u0645\\u0648\\u064a\\u0644 \\u0645\\u0634\\u062a\\u0631\\u064a\\u0627\\u062a\\u0647\\u0627 \\u0627\\u0644\\u062a\\u0634\\u063a\\u064a\\u0644\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0648\\u0631\\u062f\\u064a\\u0646.\\n\\u0648 \\u064a\\u0634\\u062a\\u0631\\u0637 \\u0648\\u062c\\u0648\\u062f \\u0633\\u062c\\u0644 \\u062a\\u062c\\u0627\\u0631\\u064a \\u0633\\u0627\\u0631\\u064a\\u060c \\u0648\\u062d\\u0633\\u0627\\u0628 \\u0628\\u0646\\u0643\\u064a \\u0641\\u0639\\u0651\\u0627\\u0644\\u060c \\u0648\\u0627\\u062c\\u062a\\u064a\\u0627\\u0632 \\u0645\\u062a\\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u062a\\u062d\\u0642\\u0642 \\u0648\\u0627\\u0644\\u062a\\u0642\\u064a\\u064a\\u0645 \\u0627\\u0644\\u0627\\u0626\\u062a\\u0645\\u0627\\u0646\\u064a.\",\"answer_en\":\"ArabianPay is available for registered businesses in Saudi Arabia, particularly SMEs, that require financing for operational purchases from suppliers.\"},{\"number\":3,\"question_ar\":\"\\u0647\\u0644 \\u0623\\u0631\\u0627\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a \\u0645\\u062e\\u0635\\u0651\\u0635 \\u0644\\u0644\\u0623\\u0641\\u0631\\u0627\\u062f \\u0623\\u0645 \\u0644\\u0642\\u0637\\u0627\\u0639 \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 \\u0641\\u0642\\u0637\\u061f\",\"question_en\":\"Is ArabianPay designed for individuals, or exclusively for businesses?\",\"answer_ar\":\"\\u0623\\u0631\\u0627\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a \\u0645\\u062e\\u0635\\u0651\\u0635 \\u062d\\u0635\\u0631\\u064a\\u064b\\u0627 \\u0644\\u0642\\u0637\\u0627\\u0639 \\u0627\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644 (B2B)\\u060c \\u0648\\u0644\\u0627 \\u064a\\u0642\\u062f\\u0651\\u0645 \\u062e\\u062f\\u0645\\u0627\\u062a \\u062a\\u0645\\u0648\\u064a\\u0644 \\u0644\\u0644\\u0623\\u0641\\u0631\\u0627\\u062f.\",\"answer_en\":\"ArabianPay is designed exclusively for businesses (B2B) and does not offer financing services to individual consumers.\"},{\"number\":4,\"question_ar\":\"\\u0643\\u064a\\u0641 \\u064a\\u062a\\u0645 \\u062a\\u062d\\u062f\\u064a\\u062f \\u062d\\u062f \\u0627\\u0644\\u062a\\u0645\\u0648\\u064a\\u0644 \\u0644\\u0645\\u0646\\u0634\\u0623\\u062a\\u064a\\u061f\",\"question_en\":\"How is my business\\u2019s financing limit calculated?\",\"answer_ar\":\"\\u064a\\u062a\\u0645 \\u062a\\u062d\\u062f\\u064a\\u062f \\u062d\\u062f \\u0627\\u0644\\u062a\\u0645\\u0648\\u064a\\u0644 \\u0628\\u0646\\u0627\\u0621\\u064b \\u0639\\u0644\\u0649 \\u0646\\u0634\\u0627\\u0637 \\u0627\\u0644\\u0645\\u0646\\u0634\\u0623\\u0629\\u060c \\u062d\\u062c\\u0645 \\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0627\\u062a\\u060c \\u062a\\u0627\\u0631\\u064a\\u062e\\u0647\\u0627 \\u0627\\u0644\\u062a\\u0634\\u063a\\u064a\\u0644\\u064a\\u060c \\u0648\\u0645\\u0633\\u062a\\u0648\\u0649 \\u0627\\u0644\\u0627\\u0644\\u062a\\u0632\\u0627\\u0645\\u060c \\u0648\\u0630\\u0644\\u0643 \\u0644\\u0636\\u0645\\u0627\\u0646 \\u062a\\u0642\\u062f\\u064a\\u0645 \\u062d\\u0644\\u0648\\u0644 \\u062a\\u0645\\u0648\\u064a\\u0644 \\u0648\\u0627\\u0642\\u0639\\u064a\\u0629 \\u062a\\u0646\\u0627\\u0633\\u0628 \\u0642\\u062f\\u0631\\u062a\\u0643 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0633\\u062f\\u0627\\u062f.\",\"answer_en\":\"The financing limit is determined based on your business activity, operational scale, and overall assessment to ensure a practical and sustainable financing solution.\"},{\"number\":5,\"question_ar\":\"\\u0643\\u064a\\u0641 \\u064a\\u062a\\u0645 \\u0633\\u062f\\u0627\\u062f \\u0627\\u0644\\u0623\\u0642\\u0633\\u0627\\u0637\\u061f \\u0648\\u0647\\u0644 \\u0627\\u0644\\u0633\\u062f\\u0627\\u062f \\u0645\\u0631\\u0646\\u061f\",\"question_en\":\"How does installment repayment work, and is it flexible?\",\"answer_ar\":\"\\u0646\\u0639\\u0645\\u060c \\u0627\\u0644\\u0633\\u062f\\u0627\\u062f \\u064a\\u062a\\u0645 \\u0639\\u0628\\u0631 \\u0623\\u0642\\u0633\\u0627\\u0637 \\u0645\\u062c\\u062f\\u0648\\u0644\\u0629 \\u0648\\u0648\\u0627\\u0636\\u062d\\u0629 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u062b\\u0644\\u0627\\u062b \\u0627\\u0642\\u0633\\u0627\\u0637 \\u0634\\u0647\\u0631\\u064a\\u0629 \\u0645\\u062a\\u0633\\u0627\\u0648\\u064a\\u0629\\u060c \\u0645\\u0635\\u0645\\u0651\\u0645\\u0629 \\u0644\\u062a\\u0646\\u0627\\u0633\\u0628 \\u062a\\u062f\\u0641\\u0642\\u0643 \\u0627\\u0644\\u0646\\u0642\\u062f\\u064a\\u060c \\u0628\\u062f\\u0648\\u0646 \\u062a\\u0639\\u0642\\u064a\\u062f \\u0623\\u0648 \\u0645\\u0641\\u0627\\u062c\\u0622\\u062a\\u060c \\u0645\\u0639 \\u0625\\u0645\\u0643\\u0627\\u0646\\u064a\\u0629 \\u0645\\u062a\\u0627\\u0628\\u0639\\u0629 \\u062d\\u0627\\u0644\\u0629 \\u0627\\u0644\\u0633\\u062f\\u0627\\u062f \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629.\",\"answer_en\":\"Yes, repayments are made through clear and scheduled installments spread over three equal monthly payments. The structure is designed to fit your cash flow, with no complexity or surprises, and with full visibility to track repayment status through the platform.\"},{\"number\":6,\"question_ar\":\"\\u0645\\u0627 \\u0627\\u0644\\u0630\\u064a \\u064a\\u0645\\u064a\\u0651\\u0632 \\u0623\\u0631\\u0627\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a \\u0639\\u0646 \\u0637\\u0631\\u0642 \\u0627\\u0644\\u062a\\u0645\\u0648\\u064a\\u0644 \\u0627\\u0644\\u062a\\u0642\\u0644\\u064a\\u062f\\u064a\\u0629\\u061f\",\"question_en\":\"What makes ArabianPay different from traditional financing solutions?\",\"answer_ar\":\"\\u0623\\u0631\\u0627\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a \\u062a\\u0648\\u0641\\u0631 \\u062a\\u062c\\u0631\\u0628\\u0629 \\u062a\\u0645\\u0648\\u064a\\u0644 \\u0645\\u062a\\u0643\\u0627\\u0645\\u0644\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0634\\u0631\\u0627\\u0621 \\u0625\\u0644\\u0649 \\u0627\\u0644\\u0633\\u062f\\u0627\\u062f \\u0645\\u0639 \\u0633\\u0631\\u0639\\u0629 \\u0641\\u064a \\u0627\\u0644\\u062a\\u0646\\u0641\\u064a\\u0630\\u060c \\u0648\\u062a\\u0639\\u0627\\u0645\\u0644 \\u0645\\u0628\\u0627\\u0634\\u0631 \\u0645\\u0639 \\u0645\\u0648\\u0631\\u062f\\u064a\\u0646 \\u0645\\u0648\\u062b\\u0648\\u0642\\u064a\\u0646\\u060c \\u0648\\u0645\\u0631\\u0648\\u0646\\u0629 \\u0623\\u0639\\u0644\\u0649 \\u0645\\u0642\\u0627\\u0631\\u0646\\u0629 \\u0628\\u0627\\u0644\\u062a\\u0645\\u0648\\u064a\\u0644 \\u0627\\u0644\\u062a\\u0642\\u0644\\u064a\\u062f\\u064a.\",\"answer_en\":\"Arabian Pay provides a fully integrated financing experience from purchase to repayment, with fast execution, direct dealings with trusted suppliers, and greater flexibility compared to traditional financing\"}]', '2025-12-08 10:27:46', '2026-03-11 14:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `jobcategories`
--

CREATE TABLE `jobcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobcategories`
--

INSERT INTO `jobcategories` (`id`, `name_ar`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'التطوير والبرمجة', 'Development & Programming', '2025-12-09 15:53:40', '2025-12-09 15:53:40'),
(2, 'المالية والمحاسبة', 'Finance & Accounting', '2025-12-09 15:53:40', '2025-12-09 15:53:40'),
(3, 'التسويق والمبيعات', 'Marketing & Sales', '2025-12-09 15:53:40', '2025-12-09 15:53:40'),
(4, 'الموارد البشرية', 'Human Resources', '2025-12-09 15:53:40', '2025-12-09 15:53:40'),
(5, 'الدعم الفني', 'Technical Support', '2025-12-09 15:53:40', '2025-12-09 15:53:40'),
(6, 'إدارة المشاريع', 'Project Management', '2025-12-09 15:53:40', '2025-12-09 15:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_panners`
--

CREATE TABLE `jobs_panners` (
  `id` bigint UNSIGNED NOT NULL,
  `jobcategory` bigint UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `requirements_ar` text COLLATE utf8mb4_unicode_ci,
  `requirements_en` text COLLATE utf8mb4_unicode_ci,
  `salary_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs_panners`
--

INSERT INTO `jobs_panners` (`id`, `jobcategory`, `name_ar`, `name_en`, `location_ar`, `location_en`, `description_ar`, `description_en`, `requirements_ar`, `requirements_en`, `salary_ar`, `salary_en`, `type_ar`, `type_en`, `experience_ar`, `experience_en`, `created_at`, `updated_at`) VALUES
(17, 1, 'مطور Full Stack', 'Full Stack Developer', 'الرياض، المملكة العربية السعودية', 'Riyadh, Saudi Arabia', 'نبحث عن مطور Full Stack محترف للانضمام إلى فريقنا التقني. سيكون مسؤولاً عن تطوير وصيانة التطبيقات والأنظمة من البداية حتى النهاية.\n\nالمسؤوليات:\n• تطوير تطبيقات ويب وتطبيقات موبايل\n• العمل على Backend و Frontend\n• تصميم وتطوير APIs\n• اختبار وضمان جودة الكود\n• التعاون مع فريق التطوير', 'We are looking for a professional Full Stack Developer to join our technical team. You will be responsible for developing and maintaining applications and systems from start to finish.\n\nResponsibilities:\n• Develop web and mobile applications\n• Work on Backend and Frontend\n• Design and develop APIs\n• Test and ensure code quality\n• Collaborate with the development team', 'المتطلبات:\n• خبرة لا تقل عن 3 سنوات في تطوير Full Stack\n• إتقان PHP, Laravel, JavaScript, Vue.js أو React\n• معرفة بقواعد البيانات MySQL/PostgreSQL\n• خبرة في Git و DevOps\n• القدرة على العمل ضمن فريق', 'Requirements:\n• At least 3 years of experience in Full Stack development\n• Proficiency in PHP, Laravel, JavaScript, Vue.js or React\n• Knowledge of MySQL/PostgreSQL databases\n• Experience with Git and DevOps\n• Ability to work in a team', '15,000 - 25,000 ريال', '15,000 - 25,000 SAR', 'دوام كامل', 'Full Time', '3+ سنوات', '3+ Years', '2025-12-09 16:14:35', '2025-12-09 16:14:35'),
(18, 1, 'مطور Backend', 'Backend Developer', 'الرياض، المملكة العربية السعودية', 'Riyadh, Saudi Arabia', 'نبحث عن مطور Backend محترف للانضمام إلى فريقنا. سيكون مسؤولاً عن تطوير وصيانة الخوادم وقواعد البيانات والAPIs.\n\nالمسؤوليات:\n• تطوير وصيانة APIs\n• العمل على قواعد البيانات وتحسين الأداء\n• تطبيق معايير الأمان\n• التعاون مع فريق Frontend', 'We are looking for a professional Backend Developer to join our team. You will be responsible for developing and maintaining servers, databases, and APIs.\n\nResponsibilities:\n• Develop and maintain APIs\n• Work on databases and performance optimization\n• Implement security standards\n• Collaborate with Frontend team', 'المتطلبات:\n• خبرة في PHP و Laravel\n• معرفة بقواعد البيانات MySQL/PostgreSQL\n• خبرة في RESTful APIs\n• معرفة بأساسيات الأمان', 'Requirements:\n• Experience in PHP and Laravel\n• Knowledge of MySQL/PostgreSQL databases\n• Experience with RESTful APIs\n• Knowledge of security basics', '12,000 - 20,000 ريال', '12,000 - 20,000 SAR', 'دوام كامل', 'Full Time', '2+ سنوات', '2+ Years', '2025-12-09 16:14:35', '2025-12-09 16:14:35'),
(19, 1, 'مطور Frontend', 'Frontend Developer', 'جدة، المملكة العربية السعودية', 'Jeddah, Saudi Arabia', 'نبحث عن مطور Frontend محترف لإنشاء واجهات مستخدم جميلة وسهلة الاستخدام.\n\nالمسؤوليات:\n• تطوير واجهات مستخدم متجاوبة\n• العمل مع Vue.js أو React\n• تحسين تجربة المستخدم\n• التعاون مع فريق التصميم', 'We are looking for a professional Frontend Developer to create beautiful and user-friendly interfaces.\n\nResponsibilities:\n• Develop responsive user interfaces\n• Work with Vue.js or React\n• Improve user experience\n• Collaborate with design team', 'المتطلبات:\n• خبرة في JavaScript, Vue.js أو React\n• معرفة بـ HTML, CSS, Tailwind CSS\n• خبرة في تصميم متجاوب\n• اهتمام بالتفاصيل', 'Requirements:\n• Experience in JavaScript, Vue.js or React\n• Knowledge of HTML, CSS, Tailwind CSS\n• Experience in responsive design\n• Attention to detail', '10,000 - 18,000 ريال', '10,000 - 18,000 SAR', 'دوام كامل', 'Full Time', '2+ سنوات', '2+ Years', '2025-12-09 16:14:35', '2025-12-09 16:14:35'),
(20, 1, 'مطور تطبيقات الهاتف', 'Mobile App Developer', 'الرياض، المملكة العربية السعودية', 'Riyadh, Saudi Arabia', 'نبحث عن مطور تطبيقات موبايل محترف لتطوير تطبيقات iOS و Android.\n\nالمسؤوليات:\n• تطوير تطبيقات موبايل عالية الجودة\n• العمل مع Flutter أو React Native\n• اختبار التطبيقات وإصلاح الأخطاء\n• نشر التطبيقات على المتاجر', 'We are looking for a professional Mobile App Developer to develop iOS and Android applications.\n\nResponsibilities:\n• Develop high-quality mobile applications\n• Work with Flutter or React Native\n• Test applications and fix bugs\n• Publish applications to stores', 'المتطلبات:\n• خبرة في Flutter أو React Native\n• معرفة بـ iOS و Android\n• خبرة في نشر التطبيقات\n• مهارات حل المشاكل', 'Requirements:\n• Experience in Flutter or React Native\n• Knowledge of iOS and Android\n• Experience in app publishing\n• Problem-solving skills', '14,000 - 22,000 ريال', '14,000 - 22,000 SAR', 'دوام كامل', 'Full Time', '3+ سنوات', '3+ Years', '2025-12-09 16:14:35', '2025-12-09 16:14:35'),
(21, 2, 'محاسب مالي', 'Financial Accountant', 'الرياض، المملكة العربية السعودية', 'Riyadh, Saudi Arabia', 'نبحث عن محاسب مالي محترف للانضمام إلى فريقنا المالي.\n\nالمسؤوليات:\n• إعداد القوائم المالية\n• متابعة الحسابات اليومية\n• إعداد التقارير المالية\n• التعاون مع الفريق المالي', 'We are looking for a professional Financial Accountant to join our finance team.\n\nResponsibilities:\n• Prepare financial statements\n• Monitor daily accounts\n• Prepare financial reports\n• Collaborate with finance team', 'المتطلبات:\n• شهادة جامعية في المحاسبة أو المالية\n• خبرة لا تقل عن 2 سنوات\n• معرفة ببرامج المحاسبة\n• مهارات تحليلية قوية', 'Requirements:\n• University degree in Accounting or Finance\n• At least 2 years of experience\n• Knowledge of accounting software\n• Strong analytical skills', '8,000 - 15,000 ريال', '8,000 - 15,000 SAR', 'دوام كامل', 'Full Time', '2+ سنوات', '2+ Years', '2025-12-09 16:14:35', '2025-12-09 16:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `btn_ar`, `btn_en`, `image`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'منصة مالية وتمويلية تفهمك', 'A financial platform and financing that understands you', NULL, NULL, 'انضم الى ارابيان باي الآن', 'Join Arabian Pay now', 'merchant/HeroApp.svg', '[{\"icon\":\"<svg width=\\\"21\\\" height=\\\"19\\\" viewBox=\\\"0 0 21 19\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\">                                 <path d=\\\"M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\"><\\/path>                             <\\/svg>\",\"title_ar\":\"\\u062a\\u0645\\u0648\\u064a\\u0644 \\u0641\\u0648\\u0631\\u064a\",\"title_en\":\"Instant financing\",\"des_ar\":\"\\u0627\\u0628\\u062f\\u0623 \\u062a\\u062c\\u0631\\u0628\\u062a\\u0643 \\u0645\\u0628\\u0627\\u0634\\u0631\\u0629 \\u0625\\u0644\\u0649 \\u0623\\u0642\\u0635\\u0649 \\u062d\\u062f \\u0645\\u0645\\u0627 \\u062a\\u062a\\u0645\\u0646\\u0649\",\"des_en\":\"Start your experience right away, to the fullest extent you could ever wish for.\"},{\"icon\":\"<svg width=\\\"20\\\" height=\\\"20\\\" viewBox=\\\"0 0 20 20\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\">                                 <path d=\\\"M9.44706 18.846C6.43635 17.9127 3.91372 15.8324 2.42427 13.0545C0.934827 10.2765 0.598174 7.02411 1.48706 4C4.60259 4.14257 7.65123 3.06658 9.98706 1C12.3229 3.06658 15.3715 4.14257 18.4871 4C19.1657 6.30911 19.1344 8.76894 18.3971 11.06\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\"><\\/path>                             <\\/svg>\",\"title_ar\":\"30 \\u0623\\u0644\\u0641 : 2\",\"title_en\":\"30,000 : 2\",\"des_ar\":\"\\u062d\\u062f \\u062a\\u0645\\u0648\\u064a\\u0644\\u0643 \\u064a\\u0648\\u0635\\u0644 \\u0644\\u0640 \\u0663\\u0660 \\u0623\\u0644\\u0641 \\u0628\\u062f\\u0648\\u0646 \\u0623\\u064a \\u0648\\u062b\\u0627\\u0626\\u0642 \\u0645\\u0643\\u0627\\u0646 \\u0639\\u0645\\u0644\\u0643\",\"des_en\":\"Your funding limit is up to 30,000 without any documents from your workplace.\"},{\"icon\":\"<svg width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\">                                 <g opacity=\\\"0.5\\\">                                     <path d=\\\"M6 5H18L21 10L12.5 19.5C12.4348 19.5665 12.357 19.6194 12.2712 19.6554C12.1853 19.6915 12.0931 19.7101 12 19.7101C11.9069 19.7101 11.8147 19.6915 11.7288 19.6554C11.643 19.6194 11.5652 19.5665 11.5 19.5L3 10L6 5Z\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\"><\\/path>                                     <path d=\\\"M10 12.0008L8 9.80078L8.6 8.80078\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\"><\\/path>                                 <\\/g>                             <\\/svg>\",\"title_ar\":\"\\u062a\\u0642\\u0633\\u064a\\u0637 \\u0645\\u0631\\u064a\\u062d\",\"title_en\":\"Easy installment plans\",\"des_ar\":\"\\u0642\\u0633\\u0637 \\u0645\\u062f\\u0641\\u0648\\u0639\\u0627\\u062a\\u0643 \\u0639\\u0644\\u0649 \\u0663 \\u062f\\u0641\\u0639\\u0627\\u062a\",\"des_en\":\"Pay your fees in 3 installments\"}]', '2025-12-08 16:12:01', '2026-01-11 07:55:44');

-- --------------------------------------------------------

--
-- Table structure for table `merchantsteps_panners`
--

CREATE TABLE `merchantsteps_panners` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btna` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sup_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sup_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btnd_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btnd_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subdes_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subdes_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchantsteps_panners`
--

INSERT INTO `merchantsteps_panners` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `btna`, `btng`, `number`, `sup_ar`, `sup_en`, `btnd_ar`, `btnd_en`, `subdes_ar`, `subdes_en`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'كمشتري، كيف تحصل على التمويل بسهولة؟', 'كمشتري، كيف تحصل على التمويل بسهولة؟', 'ابدأ رحلتك التمويلية خلال دقائق عبر تطبيق اريبيان باي من التحميل إلى استلام التمويل، كل شيء يتم بسرعة وأمان تام.\n\n', 'Start your financing journey in minutes with the ArabianPay app  from uploading to receiving financing, everything is done quickly and securely.', 'App Store', 'Google Play', '1', 'حمل تطبيق ArabianPay', 'حمل تطبيق ArabianPay', 'لنظام أندرويد', 'لنظام الآيفون', 'ابدأ بتحميل التطبيق من متجر App Store أو Google Play وابدأ رحلتك التمويلية.', 'Start by downloading the app from the App Store or Google Play and begin your financing journey.', '[{\"number\":\"2\",\"title_ar\":\"\\u0623\\u0646\\u0634\\u0626 \\u062d\\u0633\\u0627\\u0628\\u0643 \\u0648\\u062a\\u062d\\u0642\\u0642 \\u0645\\u0646 \\u0647\\u0648\\u064a\\u062a\\u0643\",\"title_en\":\"Create your account and verify your identity\",\"des_ar\":\"\\u0633\\u062c\\u0651\\u0644 \\u0643\\u0645\\u0648\\u0631\\u062f \\u062c\\u062f\\u064a\\u062f \\u0648\\u0623\\u0643\\u0645\\u0644 \\u062e\\u0637\\u0648\\u0627\\u062a \\u0627\\u0644\\u062a\\u062d\\u0642\\u0642 \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0628\\u0647\\u0648\\u064a\\u062a\\u0643 \\u062e\\u0644\\u0627\\u0644 \\u062f\\u0642\\u0627\\u0626\\u0642.\",\"des_en\":\"Register as a new supplier and complete the electronic verification steps with your identity in minutes.\"},{\"number\":\"3\",\"title_ar\":\"\\u0627\\u062e\\u062a\\u0631 \\u0627\\u0644\\u0645\\u0646\\u062a\\u062c\\u0627\\u062a \\u0627\\u0644\\u062a\\u064a \\u062a\\u0631\\u064a\\u062f \\u062a\\u0645\\u0648\\u064a\\u0644\\u0647\\u0627\",\"title_en\":\"Choose the products you want to finance.\",\"des_ar\":\"\\u0633\\u062c\\u0651\\u0644 \\u0643\\u0645\\u0648\\u0631\\u062f \\u062c\\u062f\\u064a\\u062f \\u0648\\u0623\\u0643\\u0645\\u0644 \\u062e\\u0637\\u0648\\u0627\\u062a \\u0627\\u0644\\u062a\\u062d\\u0642\\u0642 \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0628\\u0647\\u0648\\u064a\\u062a\\u0643 \\u062e\\u0644\\u0627\\u0644 \\u062f\\u0642\\u0627\\u0626\\u0642.\",\"des_en\":\"Register as a new supplier and complete the electronic verification steps with your identity in minutes.\"},{\"number\":\"4\",\"title_ar\":\"\\u0627\\u0633\\u062a\\u0644\\u0645 \\u062a\\u0645\\u0648\\u064a\\u0644\\u0643 \\u0641\\u0648\\u0631\\u0627\\u064b\",\"title_en\":\"\\u0627\\u0633\\u062a\\u0644\\u0645 \\u062a\\u0645\\u0648\\u064a\\u0644\\u0643 \\u0641\\u0648\\u0631\\u0627\\u064b\",\"des_ar\":\"\\u0633\\u062c\\u0651\\u0644 \\u0643\\u0645\\u0648\\u0631\\u062f \\u062c\\u062f\\u064a\\u062f \\u0648\\u0623\\u0643\\u0645\\u0644 \\u062e\\u0637\\u0648\\u0627\\u062a \\u0627\\u0644\\u062a\\u062d\\u0642\\u0642 \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0628\\u0647\\u0648\\u064a\\u062a\\u0643 \\u062e\\u0644\\u0627\\u0644 \\u062f\\u0642\\u0627\\u0626\\u0642.\",\"des_en\":\"Register as a new supplier and complete the electronic verification steps with your identity in minutes.\"}]', '2025-12-08 17:18:54', '2026-03-11 15:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `merchant_bottom_panners`
--

CREATE TABLE `merchant_bottom_panners` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchant_motivation_panners`
--

CREATE TABLE `merchant_motivation_panners` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchant_motivation_panners`
--

INSERT INTO `merchant_motivation_panners` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `btn_ar`, `btn_en`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'إختارها... ندفعها', 'Choose it... We pay', 'منصة مدفوعات ذكية تجمع بين البساطة، الثقة، والحضور الدائم، لدعم نمو أعمالك في كل مكان.\n', ' smart payment platform combining simplicity, trust, and constant presence to support your business growth everywhere', 'حمل تطبيق ارابيان باي الآن', 'Download the Arabian Pay app now', '[{\"icon\":\"<svg width=\\\"40\\\" height=\\\"40\\\" viewBox=\\\"0 0 40 40\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\">                             <path d=\\\"M15 23.332C15 26.0937 19.4767 28.332 25 28.332C30.5233 28.332 35 26.0937 35 23.332C35 20.5704 30.5233 18.332 25 18.332C19.4767 18.332 15 20.5704 15 23.332Z\\\" stroke=\\\"#383838\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\"><\\/path>                             <path d=\\\"M15 23.332V29.9987C15 32.7587 19.4767 34.9987 25 34.9987C30.5233 34.9987 35 32.7587 35 29.9987V23.332\\\" stroke=\\\"#383838\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\"><\\/path>                             <path d=\\\"M5 10C5 11.7867 6.90667 13.4367 10 14.33C13.0933 15.2233 16.9067 15.2233 20 14.33C23.0933 13.4367 25 11.7867 25 10C25 8.21333 23.0933 6.56333 20 5.67C16.9067 4.77667 13.0933 4.77667 10 5.67C6.90667 6.56333 5 8.21333 5 10Z\\\" stroke=\\\"#222222\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\"><\\/path>                             <path d=\\\"M5 10V26.6667C5 28.1467 6.28667 29.0833 8.33333 30\\\" stroke=\\\"#222222\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\"><\\/path>                             <path d=\\\"M5 18.332C5 19.812 6.28667 20.7487 8.33333 21.6654\\\" stroke=\\\"#222222\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\"><\\/path>                         <\\/svg>\",\"title_ar\":\"\\u0645\\u0646\\u0635\\u0629 \\u0645\\u062f\\u0641\\u0648\\u0639\\u0627\\u062a \\u0630\\u0643\\u064a\\u0629 \\u0645\\u0628\\u0646\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0628\\u0633\\u0627\\u0637\\u0629 \\u0648\\u0627\\u0644\\u062b\\u0642\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0648\\u0627\\u062c\\u062f \\u0641\\u064a \\u0643\\u0644 \\u0645\\u0643\\u0627\\u0646 \\u0644\\u062f\\u0639\\u0645 \\u0646\\u0645\\u0648 \\u0623\\u0639\\u0645\\u0627\\u0644\\u0643.\",\"title_en\":\"A smart payment platform built on simplicity, trust, and ubiquity to support your business growth.\"},{\"icon\":\"<svg width=\\\"40\\\" height=\\\"40\\\" viewBox=\\\"0 0 40 40\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\">                             <path d=\\\"M19.0999 34.7433C14.0821 33.1879 9.87768 29.7206 7.39527 25.0908C4.91286 20.4609 4.35177 15.0402 5.83325 10C11.0258 10.2376 16.1069 8.44429 19.9999 5C23.893 8.44429 28.974 10.2376 34.1666 10C35.2977 13.8485 35.2454 17.9482 34.0166 21.7667\\\" stroke=\\\"#383838\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\"><\\/path>                             <path d=\\\"M25 31.6654L28.3333 34.9987L35 28.332\\\" stroke=\\\"#383838\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\"><\\/path>                         <\\/svg>\",\"title_ar\":\"\\u0645\\u0646\\u0635\\u0629 \\u0645\\u062f\\u0641\\u0648\\u0639\\u0627\\u062a \\u0630\\u0643\\u064a\\u0629 \\u0645\\u0628\\u0646\\u064a\\u0629 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0628\\u0633\\u0627\\u0637\\u0629 \\u0648\\u0627\\u0644\\u062b\\u0642\\u0629 \\u0648\\u0627\\u0644\\u062a\\u0648\\u0627\\u062c\\u062f \\u0641\\u064a \\u0643\\u0644 \\u0645\\u0643\\u0627\\u0646 \\u0644\\u062f\\u0639\\u0645 \\u0646\\u0645\\u0648 \\u0623\\u0639\\u0645\\u0627\\u0644\\u0643.\",\"title_en\":\"A smart payment platform built on simplicity, trust, and ubiquity to support your business growth.\"}]', '2025-12-08 16:58:46', '2025-12-20 01:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2025_09_02_111119_create_panners_table', 1),
(2, '2025_09_02_111131_create_panner_translations_table', 1),
(3, '2025_09_02_111202_create_customers_table', 1),
(4, '2025_12_04_031651_create_homepanner_markettings_table', 1),
(5, '2025_12_04_031719_create_home_panner_partners_table', 2),
(6, '2025_12_04_031721_create_home_panner_q_a_s_table', 2),
(7, '2025_12_04_031724_create_home_bottom_panners_table', 3),
(8, '2025_12_04_031726_create_about_us_panner_markettings_table', 3),
(9, '2025_12_04_031729_create_about_us_test_mintionals_table', 3),
(10, '2025_12_04_031731_create_about_us_evaluations_table', 3),
(11, '2025_12_04_031733_create_abut_us_bottom_panners_table', 3),
(12, '2025_12_04_031736_create_jobs_panners_table', 3),
(13, '2025_12_04_031738_create_jobcategories_table', 3),
(14, '2025_12_04_031741_create_support_us_table', 3),
(15, '2025_12_04_031743_create_support_panners_table', 3),
(16, '2025_12_04_031745_create_supliers_table', 3),
(17, '2025_12_04_031748_create_suplier_panners_table', 3),
(18, '2025_12_04_031750_create_suplier_bottom_panners_table', 4),
(19, '2025_12_04_031752_create_fetures_panners_table', 5),
(20, '2025_12_04_031755_create_polices_table', 6),
(21, '2025_12_04_031757_create_merchants_table', 6),
(22, '2025_12_04_031800_create_merchant_motivation_panners_table', 6),
(23, '2025_12_04_031802_create_merchantsteps_panners_table', 6),
(24, '2025_12_04_031804_create_merchant_bottom_panners_table', 6),
(25, '2025_12_05_034004_create_feture_panner_translations_table', 6),
(26, '2025_12_05_052149_create_hero_home_mains_table', 6),
(27, '2025_12_05_053921_create_contact_panners_table', 6),
(28, '2025_12_05_054752_create_support_translations_table', 7),
(29, '2025_12_05_054827_create_support_categories_table', 7),
(30, '2025_12_05_061759_create_evaluationtranslations_table', 8),
(31, '2025_12_09_165725_create_about_us_maps_table', 9),
(32, '2025_12_09_172232_create_support_contacts_table', 10),
(33, '2025_12_09_175143_add_columns_to_support_panners_table', 11),
(34, '2025_12_09_175145_add_jsoning_to_support_us_table', 12),
(36, '2025_12_09_175240_fix_support_panners_table_columns', 13),
(37, '2025_12_09_181808_add_fields_to_coditions_table', 14),
(38, '2025_12_09_183527_add_fields_to_polices_table', 15),
(39, '2025_12_09_185911_add_details_fields_to_jobs_panners_table', 16),
(40, '2025_12_09_192859_create_news_table', 17),
(41, '2025_12_09_202916_create_visitors_table', 18),
(42, '2025_12_09_203037_create_contact_requests_table', 19),
(43, '2025_12_09_203040_create_complaints_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `content_ar` text COLLATE utf8mb4_unicode_ci,
  `content_en` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published_at` date DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `views` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_ar`, `title_en`, `description_ar`, `description_en`, `content_ar`, `content_en`, `image`, `author_ar`, `author_en`, `published_at`, `is_published`, `views`, `created_at`, `updated_at`) VALUES
(1, 'أرابيان باي Arabian Pay، الشركة الرائدة في مجال التقنيات المالية، تحصل على تمويل ما قبل التأسيس (Pre-Seed) من مجموعة شركات البسامي الدولية', 'Arabian Pay أرابيان باي, a Leading Fintech Company, Secures Pre-Seed Funding from AL Bassami International Group Company', 'أرابيان باي Arabian Pay، الشركة الرائدة في مجال التقنيات المالية، تحصل على تمويل ما قبل التأسيس (Pre-Seed) من مجموعة شركات البسامي الدولية', 'Arabian Pay أرابيان باي, a Leading Fintech Company, Secures Pre-Seed Funding from AL Bassami International Group Company.', 'الرياض، المملكة العربية السعودية (18 مارس 2025) – أعلنت أرابيان باي، المنصة الوطنية الرائدة في قطاع التقنية المالية، عن توقيع اتفاقية للحصول على تمويل ضمن جولة الاستثمار ما قبل التأسيس (Pre-Seed) من مجموعة البسامي القابضة، إحدى الشركات الرائدة في قطاع الخدمات اللوجستية والنقل داخل المملكة وعلى مستوى العالم. وقد شهد مراسم التوقيع كل من محمد راشد العبداللطيف، المؤسس والرئيس التنفيذي لأرابيان باي، وعمر البسامي، الرئيس التنفيذي لمجموعة البسامي القابضة.\n\nتعزز هذه الاتفاقية الشراكة بين \"أرابيان باي\" و\"مجموعة البسامي\"، حيث توفر لأرابيان باي ليس فقط استثمارًا ماليًا، بل أيضًا مسارًا استراتيجيًا للتعاون. ويمثل هذا الدعم دفعة قوية لابتكارات أرابيان باي في قطاع التقنية المالية، وتوسيع انتشارها في السوق، والمساهمة في دعم النمو الاقتصادي في المملكة. كما يأتي هذا الاستثمار متوافقًا مع رؤية أرابيان باي الأوسع في تعزيز الشمول المالي ومساعدة الشركات على تجاوز تحديات التدفق النقدي.\n\nوتواصل \"أرابيان باي\" توسعها وتعميق ابتكاراتها في الحلول المالية، مع تركيزها على نموذج “اشترِ الآن وادفع لاحقًا” (BNSL) لدعم الشركات الصغيرة والمتوسطة.\n\nويستند استثمار \"مجموعة البسامي\" إلى النجاحات المتواصلة التي حققتها \"أرابيان باي\" في تقديم حلول مالية مبتكرة للشركات الصغيرة والمتوسطة وإعادة تشكيل طرق الوصول إلى التمويل. ومن خلال هذا التعاون، ستتمكن الشركات من تقسيم المدفوعات إلى ثلاث دفعات عند الشراء من الموردين والتجار دون أي فوائد.\n\nومن خلال هذه الشراكة، ستعمل \"أرابيان باي\" على تسريع تطوير منصتها، وتوسيع شراكاتها، وتعزيز منظومتها المالية لتوفير حلول دفع أكثر ذكاءً ومرونة للشركات الصغيرة والمتوسطة. كما تعكس هذه الخطوة التزام الجانبين بدفع مسيرة التحول الرقمي وفتح آفاق اقتصادية جديدة للشركات في المملكة. وستسهم هذه المبادرة في نمو الاقتصاد الوطني، خصوصًا مع استمرار السعودية في ترسيخ مكانتها كسوق استراتيجي رئيسي لخدمات التقنية المالية، بما يتماشى مع رؤية المملكة 2030.\n\nإذا رغبت في نسخة مختصرة للبيان الصحفي، أو صياغة إعلامية جاهزة للنشر، يمكنني تجهيزها لك.', 'Riyadh, KSA (March 18, 2025) – Arabian Pay, the leading national fintech platform, has announced the signing of an agreement to secure funding as part of its Pre-Seed investment round from Al Bassami Holding Group, a leader in the logistics and transportation sector in the Kingdom and globally. The signing ceremony was attended by Mohammed Alabdulatif محمد راشد العبداللطيف, Founder and CEO of Arabian Pay, and Omar Albassami, CEO of Al Bassami Holding Group.\n\nThis agreement strengthens the partnership between \"Arabian Pay\" and \"Al Bassami Group,\" providing Arabian Pay with not only financial investment but also a strategic pathway for collaboration. This support fuels Arabian Pay’s innovations in fintech, expands its market presence, and contributes to economic growth in the Kingdom. Additionally, this investment aligns with Arabian Pay’s broader vision of enhancing financial inclusion and helping businesses overcome cash flow challenges.\n\n\"Arabian Pay\" is actively expanding and deepening its innovation in financial solutions, focusing on the \"Buy Now, Pay Later\" (BNSL) model to support small and medium-sized enterprises (SMEs).\n\nThe investment from \"Al Bassami Group\" is based on \"Arabian Pay’s\" consistent success in providing financial solutions for SMEs and reshaping access to financing. Through this collaboration, businesses will be able to split payments into three installments when purchasing from suppliers and merchants without incurring any interest.\n\nWith this partnership, \"Arabian Pay\" will accelerate the development of its platform, expand its partnerships, and strengthen its financial ecosystem, offering SMEs smarter and more flexible payment solutions. Furthermore, this collaboration reflects both companies\' shared commitment to driving digital transformation and opening new economic opportunities for businesses in the Kingdom. This initiative will contribute to the growth of the national economy, especially as Saudi Arabia continues to position itself as a key strategic market for fintech services, aligning with Vision 2030.', 'news/01KC2AWVRFS0T9PMBGZ11ENCZQ.svg', 'فريق ArabianPay', 'ArabianPay Team', '2025-12-04', 1, 250, '2025-12-09 16:53:33', '2026-03-25 23:53:46'),
(2, 'أرابيان باي Arabian Pay توقّع شراكة استراتيجية في الأمن السيبراني مع شركة Rewterz', 'Arabian Pay أرابيان باي Signs Strategic Cybersecurity Partnership with Rewterz', 'أرابيان باي Arabian Pay توقّع شراكة استراتيجية في الأمن السيبراني مع شركة Rewterz', 'Arabian Pay أرابيان باي Signs Strategic Cybersecurity Partnership with Rewterz\n', 'الرياض، المملكة العربية السعودية (6 مارس 2025) – أعلنت أرابيان باي، المنصة الرائدة في حلول التقنية المالية والمتخصصة في خدمات \"اشترِ الآن وادفع لاحقًا\" (BNSL) للمؤسسات متناهية الصغر والصغيرة، عن توقيع شراكة استراتيجية مع Rewterz، الشركة العالمية المتخصصة في الأمن السيبراني. وقد جرت مراسم التوقيع بحضور محمد راشد العبداللطيف، الرئيس التنفيذي لأرابيان باي، وأسد طارق بُريـرو، كبير مسؤولي الأعمال (CBO) في Rewterz. وتؤكد هذه الشراكة التزام أرابيان باي بأعلى مستويات الأمان والموثوقية في خدماتها المالية.\n\nتعمل أرابيان باي على إعادة تعريف الطريقة التي تدير بها الشركات الصغيرة التزاماتها المالية من خلال تقديم حلول دفع مرنة بنظام \"اشترِ الآن وادفع لاحقًا\"، مما يمكّن المنشآت من تقسيم المدفوعات إلى ثلاث دفعات عند الشراء من الموردين. وتوفر المنصة منظومة تجارية متكاملة تربط الشركات بشركاء التجارة والوكلاء والموزعين، مانحةً إياهم مرونة مالية أكبر.\n\nومن خلال الاستفادة من خبرات Rewterz المتقدمة في الأمن السيبراني، تعمل أرابيان باي على تعزيز بنيتها الأمنية لحماية المعاملات وتأمين بيانات المستخدمين وضمان سلامة المنصة. وتُعَدّ Rewterz، التي تأسست عام 2006، من الأسماء الموثوقة عالميًا في الأمن السيبراني، حيث تقدم حلولاً أمنية متطورة وخدمات استخبارات التهديدات للمنشآت حول العالم.\n\nتشكل هذه الشراكة خطوة مهمة في مسيرة أرابيان باي نحو قيادة الابتكار في قطاع التقنية المالية مع الحفاظ على أعلى معايير الأمان. ونتطلع إلى تعاون مثمر يُسهم في تشكيل مستقبل مالي أكثر أمانًا وسهولة للشركات الصغيرة.', 'Riyadh, KSA (March 6, 2025) – Arabian Pay, a leading fintech platform specializing in Buy Now, Pay Later (BNSL) solutions for micro-enterprises and small businesses, has officially signed a strategic partnership with Rewterz, a globally recognized cybersecurity leader. The signing took place in the presence of Mohammed Alabdulatif محمد راشد العبداللطيف, CEO of Arabian Pay, and Asad Tariq Buriro, Chief Business Officer (CBO) of Rewterz. This collaboration reinforces Arabian Pay’s commitment to ensuring the highest standards of security and reliability for its financial services.\n\nArabian Pay is transforming the way small businesses manage their financial commitments by providing flexible BNSL solutions, allowing establishments to split payments into three installments when purchasing from suppliers. Our platform fosters a thriving ecosystem that connects businesses with trade partners, agents, and distributors, empowering them with greater financial flexibility.\n\nBy leveraging Rewterz’s cutting-edge cybersecurity expertise, Arabian Pay is enhancing its security infrastructure to protect transactions, safeguard user data, and strengthen platform integrity. Established in 2006, Rewterz is a trusted name in cybersecurity, providing advanced security solutions and threat intelligence to businesses worldwide.\n\nThis partnership marks a significant milestone in our mission to drive fintech innovation while maintaining best-in-class security. We look forward to a successful collaboration in shaping the future of secure and accessible financial solutions for small businesses.', 'news/01KC2AYHCRMWF4Q87N44ZCTDW7.svg', 'قسم الشراكات', 'Partnerships Dept.', '2025-11-29', 1, 207, '2025-12-09 16:53:33', '2026-03-25 23:53:43'),
(3, 'منصة Arabian Pay تسعى للاستحواذ على السوق السعودي والتوسع عربياً', 'Arabian Pay aims to dominate the Saudi market and expand across the Arab region', 'منصة Arabian Pay تسعى للاستحواذ على السوق السعودي والتوسع عربياً', 'Arabian Pay aims to dominate the Saudi market and expand across the Arab region', 'حوار مع محمد راشد العبد اللطيف، المؤسس لشركة Arabian Pay، خلال ملتقى بيبان 2025، أوضح أن الشركة تُعد منصة وطنية متخصصة في مجال التقنية المالية، تقدم خدمات “اشترِ الآن وادفع لاحقًا” (BNSL) مخصصة للشركات الصغيرة والمتوسطة والشركات الناشئة. وأشار إلى أن خطط Arabian Pay المستقبلية تركز على الاستحواذ على حصة كبيرة من السوق المحلي، تمهيدًا للتوسع إلى الأسواق العربية الأخرى.', 'Interview with Mohammed Rashid Al-Abdulatif, founder of Arabian Pay, during the Biban 2025 Forum.\nHe explained that the company is a national platform specializing in financial technology, offering Buy Now, Pay Later (BNSL) services tailored for small and medium-sized enterprises and startups. He added that Arabian Pay’s future plans focus on capturing a significant share of the local market as a stepping stone toward expanding into other Arab markets.', 'news/01KC2AZ8KBFH7VJK8RQBKGM42P.svg', 'فريق المحتوى', 'Content Team', '2025-11-24', 1, 193, '2025-12-09 16:53:33', '2026-03-25 23:53:40'),
(4, 'شراكة استراتيجية مع جمعية مكافحة الاحتيال السعودية', 'Strategic Partnership with the Saudi Anti-Fraud Association', 'شراكة استراتيجية مع جمعية مكافحة الاحتيال السعودية', 'Strategic Partnership with the Saudi Anti-Fraud Association', 'يسعدنا الإعلان عن توقيع ArabianPay بقيادة الرئيس التنفيذي Mohammed Alabdulatif، شراكة استراتيجية مع جمعية مكافحة الاحتيال السعودية Saudi Anti-Fraud Association (SAFA) لتعزيز التزامنا بمكافحة غسيل الأموال وضمان النزاهة المالية.\n\nتتماشى هذه الشراكة مع رؤيتنا المشتركة لتعزيز الشفافية والثقة والتميز في الامتثال المالي، بما يتوافق مع رؤية المملكة 2030. من خلال هذا التعاون، نسعى إلى تطبيق أفضل الممارسات في مكافحة الاحتيال المالي وزيادة الوعي.\n\nنتطلع إلى شراكة مثمرة تحقق تأثيرًا إيجابيًا في القطاع المالي.', 'We are pleased to announce that ArabianPay, led by CEO Mohammed Alabdulatif, has signed a strategic partnership with the Saudi Anti-Fraud Association (SAFA) to strengthen our commitment to combating money laundering and ensuring financial integrity.\n\nThis partnership aligns with our shared vision of promoting transparency, trust, and excellence in financial compliance, in line with Saudi Arabia’s Vision 2030. Through this collaboration, we aim to implement best practices in combating financial fraud and increasing awareness.\n\nWe look forward to a fruitful partnership that will create a positive impact in the financial sector.', 'news/01KDAS99C40E845WWD2XE7ZVK9.jpg', 'خدمة العملاء', 'Customer Support', '2025-11-19', 1, 190, '2025-12-09 16:53:33', '2026-03-25 23:53:38'),
(5, 'فريق TBY في المملكة العربية السعودية يلتقي الرئيس التنفيذي', 'The TBY team in Saudi Arabia meets with the CEO', 'فريق TBY في المملكة العربية السعودية يلتقي الرئيس التنفيذي', 'The TBY team in Saudi Arabia meets with the CEO', 'التقى فريق TBY في المملكة العربية السعودية مع محمد راشد العبداللطيف، الرئيس التنفيذي لشركة أرابيان باي Arabian Pay، لبحث كيفية إعادة تشكيل الشركة لتمويل الأعمال بين الشركات (B2B) لدعم المنشآت الصغيرة والمتوسطة، من خلال منصتها المرخّصة من ساما والمبنية على نموذج \"اشترِ الآن وادفع لاحقًا\" (BNSL).\n\nتقدّم أرابيان باي حلول ائتمان سريعة ومضمنة، مصممة خصيصًا لتلبية احتياجات التدفقات النقدية لدى الشركات الصغيرة. وبفضل محركها المعزز بالذكاء الاصطناعي ونموذجها المعتمد على المورّدين، تتيح المنصة عمليات تسجيل فورية، وامتثالاً فعالاً، ومرونة في الدفع.\n\nوفي إطار التطور المتسارع لقطاع التقنية المالية في المملكة، تسعى أرابيان باي إلى ترسيخ موقعها كشريك للبنية التحتية الرقمية يربط بين الشركات الصغيرة والمتوسطة والموردين والمؤسسات المالية، بما يتماشى مع رؤية السعودية 2030.', 'TBY’s team in Saudi Arabia met with Mohammed Alabdulatif, CEO of Arabian Pay أرابيان باي, to explore how the company is reshaping B2B financing for SMEs through its SAMA-licensed BNSL platform.\n\nArabian Pay provides fast, embedded credit solutions tailored to the cash flow needs of small businesses. With its AI-powered engine and supplier-led model, the platform enables real-time onboarding, compliance, and payment flexibility.\n\nAs part of Saudi Arabia’s fintech evolution, Arabian Pay is positioning itself as a digital infrastructure partner that bridges SMEs, suppliers, and financial institutions under Vision 2030.', 'news/01KDASD5Z9HADQHTPXSDF7N2SN.jpg', 'قسم العمليات', 'Operations Dept.', '2025-11-14', 1, 276, '2025-12-09 16:53:33', '2026-03-25 23:53:36'),
(6, 'ميزة جديدة للتقارير اللحظية', 'New real-time reporting feature', 'تقارير مباشرة للأداء والمعاملات للتجار.', 'Live performance and transactions reports for merchants.', 'أطلقنا ميزة التقارير اللحظية التي تتيح للتجار متابعة الأداء المالي مباشرة.\nتوفر الميزة لوحات تحكم مرئية وتنبيهات فورية.', 'We launched a real-time reporting feature enabling merchants to monitor financial performance live.\nThe feature provides visual dashboards and instant alerts.', 'news/01KC2B517FKDX4NZ2KQFSZHP6Y.svg', 'فريق المنتج', 'Product Team', '2025-11-09', 1, 184, '2025-12-09 16:53:33', '2026-03-25 23:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `panners`
--

CREATE TABLE `panners` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panner_translations`
--

CREATE TABLE `panner_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `id` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, '2025-03-11 05:25:31', '2025-03-11 05:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `polices`
--

CREATE TABLE `polices` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(233) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(233) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_ar` text COLLATE utf8mb4_unicode_ci,
  `text_en` text COLLATE utf8mb4_unicode_ci,
  `intro_ar` text COLLATE utf8mb4_unicode_ci,
  `intro_en` text COLLATE utf8mb4_unicode_ci,
  `jsoning_hero` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `jsoning_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `polices`
--

INSERT INTO `polices` (`id`, `title_ar`, `title_en`, `text_ar`, `text_en`, `intro_ar`, `intro_en`, `jsoning_hero`, `jsoning_content`, `created_at`, `updated_at`) VALUES
(1, 'سياسة الخصوصية', 'Privacy Policy', 'توضح هذه السياسة كيفية جمع واستخدام وحماية معلوماتك الشخصية أثناء استخدام خدمات ArabianPay سواء كنت عميلًا أو موردًا أو تاجرًا. باستخدامك لمنصتنا، فإنك توافق على الممارسات الموضحة في هذه السياسة.', 'This policy explains how we collect, use, and protect your personal information while using ArabianPay services, whether you are a customer, supplier, or merchant. By using our platform, you agree to the practices described in this policy.', 'في اريبيان باي، نحترم خصوصيتك وندرك أهمية حماية بياناتك الشخصية. نلتزم بتوفير تجربة آمنة وموثوقة، مبنية على الشفافية والثقة في كل عملية تقوم بها من خلال منصتنا.', 'At ArabianPay, we respect your privacy and recognize the importance of protecting your personal data. We are committed to providing a safe and reliable experience, built on transparency and trust in every transaction you make through our platform.', '[{\"title_ar\":\"\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\",\"title_en\":\"Data Protection\",\"des_ar\":\"\\u0646\\u062d\\u0645\\u064a \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0628\\u0623\\u0639\\u0644\\u0649 \\u0645\\u0639\\u0627\\u064a\\u064a\\u0631 \\u0627\\u0644\\u0623\\u0645\\u0627\\u0646\",\"des_en\":\"We protect your personal information with the highest security standards\",\"icon\":\"<svg width=\\\"21\\\" height=\\\"19\\\" viewBox=\\\"0 0 21 19\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><path d=\\\"M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/svg>\"},{\"title_ar\":\"\\u0634\\u0641\\u0627\\u0641\\u064a\\u0629 \\u0643\\u0627\\u0645\\u0644\\u0629\",\"title_en\":\"Full Transparency\",\"des_ar\":\"\\u0646\\u0648\\u0636\\u062d \\u0644\\u0643 \\u0643\\u064a\\u0641\\u064a\\u0629 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u0643 \\u0628\\u0634\\u0643\\u0644 \\u0648\\u0627\\u0636\\u062d\",\"des_en\":\"We clearly explain how we use your data\",\"icon\":\"<svg width=\\\"20\\\" height=\\\"20\\\" viewBox=\\\"0 0 20 20\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><path d=\\\"M9.44706 18.846C6.43635 17.9127 3.91372 15.8324 2.42427 13.0545C0.934827 10.2765 0.598174 7.02411 1.48706 4C4.60259 4.14257 7.65123 3.06658 9.98706 1C12.3229 3.06658 15.3715 4.14257 18.4871 4C19.1657 6.30911 19.1344 8.76894 18.3971 11.06\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/svg>\"},{\"title_ar\":\"\\u0633\\u064a\\u0637\\u0631\\u0629 \\u0643\\u0627\\u0645\\u0644\\u0629\",\"title_en\":\"Full Control\",\"des_ar\":\"\\u0644\\u062f\\u064a\\u0643 \\u0627\\u0644\\u0633\\u064a\\u0637\\u0631\\u0629 \\u0627\\u0644\\u0643\\u0627\\u0645\\u0644\\u0629 \\u0639\\u0644\\u0649 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629\",\"des_en\":\"You have full control over your personal data\",\"icon\":\"<svg width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><g opacity=\\\"0.5\\\"><path d=\\\"M6 5H18L21 10L12.5 19.5C12.4348 19.5665 12.357 19.6194 12.2712 19.6554C12.1853 19.6915 12.0931 19.7101 12 19.7101C11.9069 19.7101 11.8147 19.6915 11.7288 19.6554C11.643 19.6194 11.5652 19.5665 11.5 19.5L3 10L6 5Z\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><path d=\\\"M10 12.0008L8 9.80078L8.6 8.80078\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/g><\\/svg>\"}]', '[{\"title_ar\":\"1. \\u0645\\u0642\\u062f\\u0645\\u0629\",\"title_en\":\"1. Introduction\",\"content_ar\":\"\\u0645\\u0631\\u062d\\u0628\\u0627\\u064b \\u0628\\u0643 \\u0641\\u064a \\u0645\\u0646\\u0635\\u0629 ArabianPay. \\u0646\\u062d\\u0646 \\u0645\\u0644\\u062a\\u0632\\u0645\\u0648\\u0646 \\u0628\\u062d\\u0645\\u0627\\u064a\\u0629 \\u062e\\u0635\\u0648\\u0635\\u064a\\u062a\\u0643 \\u0648\\u0636\\u0645\\u0627\\u0646 \\u0623\\u0645\\u0627\\u0646 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0648\\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629. \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0633\\u0629 \\u062a\\u0648\\u0636\\u062d \\u0643\\u064a\\u0641\\u064a\\u0629 \\u062c\\u0645\\u0639 \\u0648\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0648\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u0643 \\u0639\\u0646\\u062f \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627.\\n\\n\\u0646\\u0644\\u062a\\u0632\\u0645 \\u0628\\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0644\\u0648\\u0627\\u0626\\u062d \\u0627\\u0644\\u0645\\u0639\\u0645\\u0648\\u0644 \\u0628\\u0647\\u0627 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0645\\u0644\\u0643\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0633\\u0639\\u0648\\u062f\\u064a\\u0629 \\u0641\\u064a\\u0645\\u0627 \\u064a\\u062a\\u0639\\u0644\\u0642 \\u0628\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0648\\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629.\",\"content_en\":\"Welcome to ArabianPay platform. We are committed to protecting your privacy and ensuring the security of your personal and financial information. This policy explains how we collect, use, and protect your data when using our services.\\n\\nWe comply with all applicable laws and regulations in Saudi Arabia regarding data protection and privacy.\",\"items\":[]},{\"title_ar\":\"2. \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u062a\\u064a \\u0646\\u062c\\u0645\\u0639\\u0647\\u0627\",\"title_en\":\"2. Information We Collect\",\"content_ar\":\"\\u0646\\u062c\\u0645\\u0639 \\u0623\\u0646\\u0648\\u0627\\u0639\\u0627\\u064b \\u0645\\u062e\\u062a\\u0644\\u0641\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0644\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0648\\u062a\\u062d\\u0633\\u064a\\u0646 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627:\",\"content_en\":\"We collect different types of information to provide and improve our services:\",\"items\":[{\"text_ar\":\"\\u0627\\u0644\\u0627\\u0633\\u0645 \\u0627\\u0644\\u0643\\u0627\\u0645\\u0644 \\u0648\\u062a\\u0627\\u0631\\u064a\\u062e \\u0627\\u0644\\u0645\\u064a\\u0644\\u0627\\u062f\",\"text_en\":\"Full name and date of birth\"},{\"text_ar\":\"\\u0639\\u0646\\u0648\\u0627\\u0646 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0648\\u0631\\u0642\\u0645 \\u0627\\u0644\\u0647\\u0627\\u062a\\u0641\",\"text_en\":\"Email address and phone number\"},{\"text_ar\":\"\\u0631\\u0642\\u0645 \\u0627\\u0644\\u0647\\u0648\\u064a\\u0629 \\u0627\\u0644\\u0648\\u0637\\u0646\\u064a\\u0629 \\u0623\\u0648 \\u0631\\u0642\\u0645 \\u0627\\u0644\\u0625\\u0642\\u0627\\u0645\\u0629\",\"text_en\":\"National ID or residence number\"},{\"text_ar\":\"\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u062d\\u0633\\u0627\\u0628 \\u0627\\u0644\\u0645\\u0635\\u0631\\u0641\\u064a \\u0648\\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\",\"text_en\":\"Bank account and financial information\"},{\"text_ar\":\"\\u0639\\u0646\\u0648\\u0627\\u0646 \\u0627\\u0644\\u0633\\u0643\\u0646\",\"text_en\":\"Home address\"},{\"text_ar\":\"\\u0633\\u062c\\u0644 \\u0627\\u0644\\u0645\\u0639\\u0627\\u0645\\u0644\\u0627\\u062a \\u0648\\u0627\\u0644\\u0639\\u0645\\u0644\\u064a\\u0627\\u062a \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\",\"text_en\":\"Transaction and financial operation records\"},{\"text_ar\":\"\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u062c\\u0647\\u0627\\u0632 \\u0648\\u0627\\u0644\\u0645\\u062a\\u0635\\u0641\\u062d\",\"text_en\":\"Device and browser information\"},{\"text_ar\":\"\\u0639\\u0646\\u0648\\u0627\\u0646 IP \\u0648\\u0645\\u0648\\u0642\\u0639\\u0643 \\u0627\\u0644\\u062c\\u063a\\u0631\\u0627\\u0641\\u064a\",\"text_en\":\"IP address and your geographic location\"},{\"text_ar\":\"\\u0633\\u062c\\u0644 \\u0627\\u0644\\u062a\\u0635\\u0641\\u062d \\u0648\\u0627\\u0644\\u062a\\u0641\\u0627\\u0639\\u0644 \\u0645\\u0639 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629\",\"text_en\":\"Browsing and interaction history with the platform\"}]},{\"title_ar\":\"3. \\u0643\\u064a\\u0641\\u064a\\u0629 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643\",\"title_en\":\"3. How We Use Your Information\",\"content_ar\":\"\\u0646\\u0633\\u062a\\u062e\\u062f\\u0645 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643 \\u0644\\u0644\\u0623\\u063a\\u0631\\u0627\\u0636 \\u0627\\u0644\\u062a\\u0627\\u0644\\u064a\\u0629:\",\"content_en\":\"We use your information for the following purposes:\",\"items\":[{\"text_ar\":\"\\u062a\\u0642\\u062f\\u064a\\u0645 \\u0648\\u062a\\u062d\\u0633\\u064a\\u0646 \\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627 \\u0627\\u0644\\u0645\\u0627\\u0644\\u064a\\u0629\",\"text_en\":\"Provide and improve our financial services\"},{\"text_ar\":\"\\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0627\\u0645\\u0644\\u0627\\u062a \\u0648\\u0627\\u0644\\u0645\\u062f\\u0641\\u0648\\u0639\\u0627\\u062a\",\"text_en\":\"Process transactions and payments\"},{\"text_ar\":\"\\u0627\\u0644\\u062a\\u062d\\u0642\\u0642 \\u0645\\u0646 \\u0647\\u0648\\u064a\\u062a\\u0643 \\u0648\\u0645\\u0646\\u0639 \\u0627\\u0644\\u0627\\u062d\\u062a\\u064a\\u0627\\u0644\",\"text_en\":\"Verify your identity and prevent fraud\"},{\"text_ar\":\"\\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0645\\u0639\\u0643 \\u0628\\u0634\\u0623\\u0646 \\u062d\\u0633\\u0627\\u0628\\u0643 \\u0648\\u062e\\u062f\\u0645\\u0627\\u062a\\u0646\\u0627\",\"text_en\":\"Communicate with you about your account and our services\"},{\"text_ar\":\"\\u0625\\u0631\\u0633\\u0627\\u0644 \\u0627\\u0644\\u062a\\u062d\\u062f\\u064a\\u062b\\u0627\\u062a \\u0648\\u0627\\u0644\\u0639\\u0631\\u0648\\u0636 \\u0627\\u0644\\u062a\\u0631\\u0648\\u064a\\u062c\\u064a\\u0629 (\\u0628\\u0645\\u0648\\u0627\\u0641\\u0642\\u062a\\u0643)\",\"text_en\":\"Send updates and promotional offers (with your consent)\"},{\"text_ar\":\"\\u062a\\u062d\\u0644\\u064a\\u0644 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629 \\u0644\\u062a\\u062d\\u0633\\u064a\\u0646 \\u062a\\u062c\\u0631\\u0628\\u062a\\u0643\",\"text_en\":\"Analyze platform usage to improve your experience\"},{\"text_ar\":\"\\u0627\\u0644\\u0627\\u0645\\u062a\\u062b\\u0627\\u0644 \\u0644\\u0644\\u0642\\u0648\\u0627\\u0646\\u064a\\u0646 \\u0648\\u0627\\u0644\\u0644\\u0648\\u0627\\u0626\\u062d \\u0627\\u0644\\u0645\\u0639\\u0645\\u0648\\u0644 \\u0628\\u0647\\u0627\",\"text_en\":\"Comply with applicable laws and regulations\"}]},{\"title_ar\":\"4. \\u062d\\u0645\\u0627\\u064a\\u0629 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\",\"title_en\":\"4. Data Protection\",\"content_ar\":\"\\u0646\\u0633\\u062a\\u062e\\u062f\\u0645 \\u062a\\u0642\\u0646\\u064a\\u0627\\u062a \\u062a\\u0634\\u0641\\u064a\\u0631 \\u0645\\u062a\\u0642\\u062f\\u0645\\u0629 \\u0648\\u0623\\u0633\\u0627\\u0644\\u064a\\u0628 \\u0623\\u0645\\u0646\\u064a\\u0629 \\u0642\\u0648\\u064a\\u0629 \\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643:\\n\\n\\u0639\\u0644\\u0649 \\u0627\\u0644\\u0631\\u063a\\u0645 \\u0645\\u0646 \\u062c\\u0647\\u0648\\u062f\\u0646\\u0627\\u060c \\u0644\\u0627 \\u064a\\u0645\\u0643\\u0646 \\u0636\\u0645\\u0627\\u0646 \\u0627\\u0644\\u0623\\u0645\\u0627\\u0646 \\u0627\\u0644\\u0645\\u0637\\u0644\\u0642 \\u0644\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u0646\\u0642\\u0648\\u0644\\u0629 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0625\\u0646\\u062a\\u0631\\u0646\\u062a. \\u0646\\u0646\\u0635\\u062d\\u0643 \\u0628\\u0627\\u062a\\u062e\\u0627\\u0630 \\u0627\\u062d\\u062a\\u064a\\u0627\\u0637\\u0627\\u062a \\u0625\\u0636\\u0627\\u0641\\u064a\\u0629 \\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643.\",\"content_en\":\"We use advanced encryption technologies and strong security methods to protect your information:\\n\\nDespite our efforts, absolute security of data transmitted over the internet cannot be guaranteed. We advise you to take additional precautions to protect your information.\",\"items\":[{\"text_ar\":\"\\u062a\\u0634\\u0641\\u064a\\u0631 SSL\\/TLS \\u0644\\u062c\\u0645\\u064a\\u0639 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a \\u0627\\u0644\\u0645\\u0646\\u0642\\u0648\\u0644\\u0629\",\"text_en\":\"SSL\\/TLS encryption for all transmitted data\"},{\"text_ar\":\"\\u062a\\u062e\\u0632\\u064a\\u0646 \\u0622\\u0645\\u0646 \\u0644\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u0627\\u0644\\u062d\\u0633\\u0627\\u0633\\u0629\",\"text_en\":\"Secure storage of sensitive information\"},{\"text_ar\":\"\\u0645\\u0631\\u0627\\u0642\\u0628\\u0629 \\u0645\\u0633\\u062a\\u0645\\u0631\\u0629 \\u0644\\u0644\\u0623\\u0646\\u0634\\u0637\\u0629 \\u0627\\u0644\\u0645\\u0634\\u0628\\u0648\\u0647\\u0629\",\"text_en\":\"Continuous monitoring of suspicious activities\"},{\"text_ar\":\"\\u0623\\u0646\\u0638\\u0645\\u0629 \\u062d\\u0645\\u0627\\u064a\\u0629 \\u0645\\u0646 \\u0627\\u0644\\u0641\\u064a\\u0631\\u0648\\u0633\\u0627\\u062a \\u0648\\u0627\\u0644\\u0628\\u0631\\u0645\\u062c\\u064a\\u0627\\u062a \\u0627\\u0644\\u062e\\u0628\\u064a\\u062b\\u0629\",\"text_en\":\"Protection systems against viruses and malware\"},{\"text_ar\":\"\\u0648\\u0635\\u0648\\u0644 \\u0645\\u062d\\u062f\\u0648\\u062f \\u0644\\u0644\\u0645\\u0648\\u0638\\u0641\\u064a\\u0646 \\u0627\\u0644\\u0645\\u0635\\u0631\\u062d \\u0644\\u0647\\u0645 \\u0641\\u0642\\u0637\",\"text_en\":\"Limited access to authorized employees only\"}]},{\"title_ar\":\"5. \\u0645\\u0634\\u0627\\u0631\\u0643\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\",\"title_en\":\"5. Information Sharing\",\"content_ar\":\"\\u0644\\u0627 \\u0646\\u0628\\u064a\\u0639 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629 \\u0644\\u0623\\u0637\\u0631\\u0627\\u0641 \\u062b\\u0627\\u0644\\u062b\\u0629. \\u0642\\u062f \\u0646\\u0634\\u0627\\u0631\\u0643 \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\\u0643 \\u0641\\u0642\\u0637 \\u0641\\u064a \\u0627\\u0644\\u062d\\u0627\\u0644\\u0627\\u062a \\u0627\\u0644\\u062a\\u0627\\u0644\\u064a\\u0629:\",\"content_en\":\"We do not sell your personal information to third parties. We may share your information only in the following cases:\",\"items\":[{\"text_ar\":\"\\u0645\\u0639 \\u0645\\u0632\\u0648\\u062f\\u064a \\u0627\\u0644\\u062e\\u062f\\u0645\\u0627\\u062a \\u0627\\u0644\\u0645\\u0648\\u062b\\u0648\\u0642\\u064a\\u0646 \\u0627\\u0644\\u0630\\u064a\\u0646 \\u064a\\u0633\\u0627\\u0639\\u062f\\u0648\\u0646\\u0646\\u0627 \\u0641\\u064a \\u062a\\u0634\\u063a\\u064a\\u0644 \\u0645\\u0646\\u0635\\u062a\\u0646\\u0627\",\"text_en\":\"With trusted service providers who help us operate our platform\"},{\"text_ar\":\"\\u0639\\u0646\\u062f\\u0645\\u0627 \\u064a\\u0643\\u0648\\u0646 \\u0630\\u0644\\u0643 \\u0645\\u0637\\u0644\\u0648\\u0628\\u0627\\u064b \\u0642\\u0627\\u0646\\u0648\\u0646\\u064a\\u0627\\u064b \\u0623\\u0648 \\u0627\\u0633\\u062a\\u062c\\u0627\\u0628\\u0629 \\u0644\\u0637\\u0644\\u0628 \\u062d\\u0643\\u0648\\u0645\\u064a\",\"text_en\":\"When required by law or in response to a government request\"},{\"text_ar\":\"\\u0644\\u062d\\u0645\\u0627\\u064a\\u0629 \\u062d\\u0642\\u0648\\u0642\\u0646\\u0627 \\u0648\\u0645\\u0645\\u062a\\u0644\\u0643\\u0627\\u062a\\u0646\\u0627 \\u0648\\u0623\\u0645\\u0646 \\u0645\\u0633\\u062a\\u062e\\u062f\\u0645\\u064a\\u0646\\u0627\",\"text_en\":\"To protect our rights, property, and user security\"},{\"text_ar\":\"\\u0641\\u064a \\u062d\\u0627\\u0644\\u0629 \\u0627\\u0644\\u0627\\u0646\\u062f\\u0645\\u0627\\u062c \\u0623\\u0648 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062d\\u0648\\u0627\\u0630 \\u0623\\u0648 \\u0628\\u064a\\u0639 \\u0627\\u0644\\u0623\\u0635\\u0648\\u0644\",\"text_en\":\"In case of merger, acquisition, or asset sale\"},{\"text_ar\":\"\\u0628\\u0645\\u0648\\u0627\\u0641\\u0642\\u062a\\u0643 \\u0627\\u0644\\u0635\\u0631\\u064a\\u062d\\u0629\",\"text_en\":\"With your explicit consent\"}]},{\"title_ar\":\"6. \\u062d\\u0642\\u0648\\u0642\\u0643\",\"title_en\":\"6. Your Rights\",\"content_ar\":\"\\u0644\\u062f\\u064a\\u0643 \\u0627\\u0644\\u062d\\u0642\\u0648\\u0642 \\u0627\\u0644\\u062a\\u0627\\u0644\\u064a\\u0629 \\u0641\\u064a\\u0645\\u0627 \\u064a\\u062a\\u0639\\u0644\\u0642 \\u0628\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629:\",\"content_en\":\"You have the following rights regarding your personal data:\",\"items\":[{\"text_ar\":\"\\u062d\\u0642 \\u0627\\u0644\\u0648\\u0635\\u0648\\u0644: \\u064a\\u0645\\u0643\\u0646\\u0643 \\u0637\\u0644\\u0628 \\u0646\\u0633\\u062e\\u0629 \\u0645\\u0646 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u0643 \\u0627\\u0644\\u0634\\u062e\\u0635\\u064a\\u0629\",\"text_en\":\"Right of access: You can request a copy of your personal data\"},{\"text_ar\":\"\\u062d\\u0642 \\u0627\\u0644\\u062a\\u0635\\u062d\\u064a\\u062d: \\u064a\\u0645\\u0643\\u0646\\u0643 \\u0637\\u0644\\u0628 \\u062a\\u0635\\u062d\\u064a\\u062d \\u0623\\u064a \\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a \\u063a\\u064a\\u0631 \\u062f\\u0642\\u064a\\u0642\\u0629\",\"text_en\":\"Right of rectification: You can request correction of any inaccurate information\"},{\"text_ar\":\"\\u062d\\u0642 \\u0627\\u0644\\u062d\\u0630\\u0641: \\u064a\\u0645\\u0643\\u0646\\u0643 \\u0637\\u0644\\u0628 \\u062d\\u0630\\u0641 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u0643 \\u0641\\u064a \\u0638\\u0631\\u0648\\u0641 \\u0645\\u0639\\u064a\\u0646\\u0629\",\"text_en\":\"Right of deletion: You can request deletion of your data under certain circumstances\"},{\"text_ar\":\"\\u062d\\u0642 \\u0627\\u0644\\u0627\\u0639\\u062a\\u0631\\u0627\\u0636: \\u064a\\u0645\\u0643\\u0646\\u0643 \\u0627\\u0644\\u0627\\u0639\\u062a\\u0631\\u0627\\u0636 \\u0639\\u0644\\u0649 \\u0645\\u0639\\u0627\\u0644\\u062c\\u0629 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u0643\",\"text_en\":\"Right to object: You can object to the processing of your data\"},{\"text_ar\":\"\\u062d\\u0642 \\u0646\\u0642\\u0644 \\u0627\\u0644\\u0628\\u064a\\u0627\\u0646\\u0627\\u062a: \\u064a\\u0645\\u0643\\u0646\\u0643 \\u0637\\u0644\\u0628 \\u0646\\u0642\\u0644 \\u0628\\u064a\\u0627\\u0646\\u0627\\u062a\\u0643 \\u0625\\u0644\\u0649 \\u062e\\u062f\\u0645\\u0629 \\u0623\\u062e\\u0631\\u0649\",\"text_en\":\"Right to data portability: You can request transfer of your data to another service\"},{\"text_ar\":\"\\u062d\\u0642 \\u0633\\u062d\\u0628 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0641\\u0642\\u0629: \\u064a\\u0645\\u0643\\u0646\\u0643 \\u0633\\u062d\\u0628 \\u0645\\u0648\\u0627\\u0641\\u0642\\u062a\\u0643 \\u0641\\u064a \\u0623\\u064a \\u0648\\u0642\\u062a\",\"text_en\":\"Right to withdraw consent: You can withdraw your consent at any time\"}]},{\"title_ar\":\"7. \\u0645\\u0644\\u0641\\u0627\\u062a \\u062a\\u0639\\u0631\\u064a\\u0641 \\u0627\\u0644\\u0627\\u0631\\u062a\\u0628\\u0627\\u0637 (Cookies)\",\"title_en\":\"7. Cookies\",\"content_ar\":\"\\u0646\\u0633\\u062a\\u062e\\u062f\\u0645 \\u0645\\u0644\\u0641\\u0627\\u062a \\u062a\\u0639\\u0631\\u064a\\u0641 \\u0627\\u0644\\u0627\\u0631\\u062a\\u0628\\u0627\\u0637 \\u0644\\u062a\\u0630\\u0643\\u0631 \\u062a\\u0641\\u0636\\u064a\\u0644\\u0627\\u062a\\u0643 \\u0648\\u062a\\u062d\\u0633\\u064a\\u0646 \\u062a\\u062c\\u0631\\u0628\\u062a\\u0643. \\u064a\\u0645\\u0643\\u0646\\u0643 \\u0627\\u0644\\u062a\\u062d\\u0643\\u0645 \\u0641\\u064a \\u0645\\u0644\\u0641\\u0627\\u062a \\u062a\\u0639\\u0631\\u064a\\u0641 \\u0627\\u0644\\u0627\\u0631\\u062a\\u0628\\u0627\\u0637 \\u0645\\u0646 \\u062e\\u0644\\u0627\\u0644 \\u0625\\u0639\\u062f\\u0627\\u062f\\u0627\\u062a \\u0627\\u0644\\u0645\\u062a\\u0635\\u0641\\u062d.\\n\\n\\u0623\\u0646\\u0648\\u0627\\u0639 \\u0645\\u0644\\u0641\\u0627\\u062a \\u062a\\u0639\\u0631\\u064a\\u0641 \\u0627\\u0644\\u0627\\u0631\\u062a\\u0628\\u0627\\u0637 \\u0627\\u0644\\u062a\\u064a \\u0646\\u0633\\u062a\\u062e\\u062f\\u0645\\u0647\\u0627:\",\"content_en\":\"We use cookies to remember your preferences and improve your experience. You can control cookies through your browser settings.\\n\\nTypes of cookies we use:\",\"items\":[{\"text_ar\":\"\\u0645\\u0644\\u0641\\u0627\\u062a \\u062a\\u0639\\u0631\\u064a\\u0641 \\u0627\\u0644\\u0627\\u0631\\u062a\\u0628\\u0627\\u0637 \\u0627\\u0644\\u0636\\u0631\\u0648\\u0631\\u064a\\u0629 \\u0644\\u062a\\u0634\\u063a\\u064a\\u0644 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629\",\"text_en\":\"Essential cookies for platform operation\"},{\"text_ar\":\"\\u0645\\u0644\\u0641\\u0627\\u062a \\u062a\\u0639\\u0631\\u064a\\u0641 \\u0627\\u0644\\u0627\\u0631\\u062a\\u0628\\u0627\\u0637 \\u0627\\u0644\\u0648\\u0638\\u064a\\u0641\\u064a\\u0629 \\u0644\\u062a\\u0630\\u0643\\u0631 \\u062a\\u0641\\u0636\\u064a\\u0644\\u0627\\u062a\\u0643\",\"text_en\":\"Functional cookies to remember your preferences\"},{\"text_ar\":\"\\u0645\\u0644\\u0641\\u0627\\u062a \\u062a\\u0639\\u0631\\u064a\\u0641 \\u0627\\u0644\\u0627\\u0631\\u062a\\u0628\\u0627\\u0637 \\u0627\\u0644\\u062a\\u062d\\u0644\\u064a\\u0644\\u064a\\u0629 \\u0644\\u0641\\u0647\\u0645 \\u0643\\u064a\\u0641\\u064a\\u0629 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629\",\"text_en\":\"Analytical cookies to understand how the platform is used\"}]},{\"title_ar\":\"8. \\u0627\\u0644\\u062a\\u063a\\u064a\\u064a\\u0631\\u0627\\u062a \\u0639\\u0644\\u0649 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0633\\u0629\",\"title_en\":\"8. Changes to This Policy\",\"content_ar\":\"\\u0642\\u062f \\u0646\\u062d\\u062f\\u062b \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0633\\u0629 \\u0645\\u0646 \\u0648\\u0642\\u062a \\u0644\\u0622\\u062e\\u0631. \\u0633\\u0646\\u0642\\u0648\\u0645 \\u0628\\u0625\\u0634\\u0639\\u0627\\u0631\\u0643 \\u0628\\u0623\\u064a \\u062a\\u063a\\u064a\\u064a\\u0631\\u0627\\u062a \\u062c\\u0648\\u0647\\u0631\\u064a\\u0629 \\u0639\\u0628\\u0631 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a \\u0623\\u0648 \\u0625\\u0634\\u0639\\u0627\\u0631 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0646\\u0635\\u0629.\\n\\n\\u0646\\u0646\\u0635\\u062d\\u0643 \\u0628\\u0645\\u0631\\u0627\\u062c\\u0639\\u0629 \\u0647\\u0630\\u0647 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0633\\u0629 \\u0628\\u0627\\u0646\\u062a\\u0638\\u0627\\u0645 \\u0644\\u0644\\u0628\\u0642\\u0627\\u0621 \\u0639\\u0644\\u0649 \\u0627\\u0637\\u0644\\u0627\\u0639 \\u0628\\u0622\\u062e\\u0631 \\u0627\\u0644\\u062a\\u062d\\u062f\\u064a\\u062b\\u0627\\u062a. \\u0627\\u0633\\u062a\\u0645\\u0631\\u0627\\u0631 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645\\u0643 \\u0644\\u0644\\u0645\\u0646\\u0635\\u0629 \\u0628\\u0639\\u062f \\u0627\\u0644\\u062a\\u063a\\u064a\\u064a\\u0631\\u0627\\u062a \\u064a\\u0634\\u0643\\u0644 \\u0645\\u0648\\u0627\\u0641\\u0642\\u062a\\u0643 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u0645\\u062d\\u062f\\u062b\\u0629.\",\"content_en\":\"We may update this policy from time to time. We will notify you of any material changes via email or notification on the platform.\\n\\nWe advise you to review this policy regularly to stay informed of the latest updates. Your continued use of the platform after changes constitutes your acceptance of the updated policy.\",\"items\":[]},{\"title_ar\":\"9. \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0645\\u0639\\u0646\\u0627\",\"title_en\":\"9. Contact Us\",\"content_ar\":\"\\u0625\\u0630\\u0627 \\u0643\\u0627\\u0646 \\u0644\\u062f\\u064a\\u0643 \\u0623\\u064a \\u0623\\u0633\\u0626\\u0644\\u0629 \\u0623\\u0648 \\u0627\\u0633\\u062a\\u0641\\u0633\\u0627\\u0631\\u0627\\u062a \\u062d\\u0648\\u0644 \\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629 \\u0647\\u0630\\u0647\\u060c \\u064a\\u0645\\u0643\\u0646\\u0643 \\u0627\\u0644\\u062a\\u0648\\u0627\\u0635\\u0644 \\u0645\\u0639\\u0646\\u0627 \\u0639\\u0628\\u0631:\",\"content_en\":\"If you have any questions or inquiries about this privacy policy, you can contact us via:\",\"items\":[{\"text_ar\":\"\\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a: privacy@arabianpay.com\",\"text_en\":\"Email: privacy@arabianpay.com\"},{\"text_ar\":\"\\u0627\\u0644\\u0647\\u0627\\u062a\\u0641: 920031271\",\"text_en\":\"Phone: 920031271\"},{\"text_ar\":\"\\u0627\\u0644\\u0639\\u0646\\u0648\\u0627\\u0646: \\u0627\\u0644\\u0631\\u064a\\u0627\\u0636\\u060c \\u0627\\u0644\\u0645\\u0645\\u0644\\u0643\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0633\\u0639\\u0648\\u062f\\u064a\\u0629\",\"text_en\":\"Address: Riyadh, Saudi Arabia\"}]}]', '2025-12-09 15:40:22', '2025-12-20 02:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2025-03-11 07:22:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `permission_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-03-11 07:22:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0Gt2PoCU0jqpTvTHHpDhgPaQU21wWiunFPUU4tXw', NULL, '10.0.52.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSEdBQ3FzcXBCUUoxR0JmYnhvcFp5R2JEdGFYZjRzRVRZMEdFR2k2UCI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774500202),
('6ozvFQ3LoFUm5W4eML0jkKl3xyfnIoVvWClApQLx', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMTh1TWMwYTNtdGF0UExSdVFFanVWYW1LOHdtbk55OVBrbnBuS1loSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvaW5kZXgucGhwIjtzOjU6InJvdXRlIjtOO319', 1774510378),
('808qeFwWO0rQS170zwIsYmHOywlWyNsas2qanxGc', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT3lkeDVZRDBjNHZoV0dxRWhRaVE0WEg0TWRrQjJyaVVzMUpjejV4WCI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjMzOiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyL2NvbnRhY3QiO3M6NToicm91dGUiO3M6NzoiY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1774505127),
('8zKh98O9C5NbCygsM1Ss1SFUaMNrMyjkOVY7QkdH', NULL, '10.0.52.170', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWXZ5UVpuY1JrQ3Q3RmpwblVJcjNIZWNDcFFvRjZxZTdGclFjcW1vMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Nzc6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvYXI/Yz0yLTEtMi10b24tYWMtaHAtcm90YXJ5LWNvbXByZXNzb3ItMTY2LXJyLTY0dzNMeUZtIjtzOjU6InJvdXRlIjtOO31zOjY6ImxvY2FsZSI7czoyOiJhciI7fQ==', 1774509257),
('A7iRZnXDs8N4vqdsdnRyalyx2Phc4BtYdpA7GsZH', NULL, '10.0.52.170', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia3U3cnUxVzd6aEZWcEIyM0tIU25OQ09lelhRS056NE5OQVVIdVBVYiI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774507891),
('ab0kfggaK5obYFi1KBowaIERBXGvnt2gHkDNlro3', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUmZ4Z05uNVNTWVRVTGR5TmtLVnUzSDIzMDMxbVo0aTcyeDZHblZGUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MTAzOiJodHRwczovL2FyYWJpYW5wYXkubmV0L2luZGV4LnBocD9vcmRlcj1hc2Mmb3JkZXJieT1pZCZwYWdlPTEmcGVyX3BhZ2U9MTAwJnJlc3Rfcm91dGU9JTJGd3AlMkZ2MiUyRnVzZXJzIjtzOjU6InJvdXRlIjtOO319', 1774504556),
('AzhHMSoALNavH2puo3zmWo141HQ7rnBOTOMIgswC', NULL, '10.0.52.170', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia251T0Q2ZmJ4WUZ6d2pFdENObXJKYTNLOElKbmZWSXdpVG5KQmdMUSI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjE3MzoiaHR0cHM6Ly9hcmFiaWFucGF5Lm5ldC9hcj9mYmNsaWQ9SXdaWGgwYmdOaFpXMENNVEVBYzNKMFl3WmhjSEJmYVdRTU1qVTJNamd4TURRd05UVTRBQUVlSTM5WTI3UUFXTjZsYzdHMU56UmNVQTVuOHhJUTA3bHFIY09oNkNRcUNQRFBSR0NiZVF1eV9LN2dlb2tfYWVtX3FfTHA1WnNIb1hja0dIcWpvNXdDOUEiO3M6NToicm91dGUiO047fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1774511392),
('cPRA03VpjmjjYVLgIQGTnxoKVTVn3yJfVcPHuIWu', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSmF2d2p6RENCQ0t0TFl3a21teXBIQVdUc1YxNjBWb01GTENLcGxKYSI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjMzOiJodHRwczovL2FyYWJpYW5wYXkubmV0L2VuL3N1cHBvcnQiO3M6NToicm91dGUiO3M6Nzoic3VwcG9ydCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1774505129),
('e2q72KnDrraUhw345kiKgFUyJfbystU8otDFr4Se', NULL, '10.0.52.170', 'GoogleOther', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSnNvd1pRM2VPVTM4WHAzdVVlZmtBc0dIRXZscUlodGlNRUJqbzEyMSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319fQ==', 1774508788),
('er6hrjGmKtJMH4ygSXLrB1lFtLMrVY0L7tmuoGmM', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSEF0STB5Q1p5ZUdwMlAxYjFzRU9tWlBaaWZheUdjRGllaDVIc2sxNCI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjEwNjoiaHR0cHM6Ly9hcmFiaWFucGF5Lm5ldC9pbmRleC5waHAvYXI/b3JkZXI9YXNjJm9yZGVyYnk9aWQmcGFnZT0xJnBlcl9wYWdlPTEwMCZyZXN0X3JvdXRlPSUyRndwJTJGdjIlMkZ1c2VycyI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1774504557),
('fuVyjiCzJ3ESdBnyT8kecA8BVxTyLcg8zgWZODiD', NULL, '10.0.52.170', 'Mozilla/5.0 (compatible; DotBot/1.2; +https://opensiteexplorer.org/dotbot; help@moz.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMnpsTDM5UG1LOTRiT2xpZ00xQkVmV1R0WjUzYUVtSHllYk1HYURHWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQiO3M6NToicm91dGUiO047fX0=', 1774504396),
('g09xONAqdJVDzegtLPydlNH8h81wd3RK59VTKB9A', NULL, '10.0.52.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Safari/605.1.15', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNktibEUzZEZyOXFzcGhUWmJqQk5WZElNR0tZSWtFYTA3WnBHNlJxNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvYXIvbWVyY2hhbnQiO3M6NToicm91dGUiO047fXM6NjoibG9jYWxlIjtzOjI6ImFyIjt9', 1774512710),
('G6PseTNppUkSb2bEDXUeVAEtt7MpZKB7DxYe5mAN', NULL, '10.0.52.170', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTkNYdHJnOFN2UlVUTzRQUmZtRmdVRlc3VW9MY1dydmJuTTBSUVEwUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvYXIiO3M6NToicm91dGUiO047fXM6NjoibG9jYWxlIjtzOjI6ImFyIjt9', 1774509548),
('geVJu8FNBcjTzvK0RAo6fXMiW0XQaxbdmQstTLcL', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVU5COERZbnE1T3BoR0F0aElDZERIZHRRQmNZUnNuaW1JRGhqOExJZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQiO3M6NToicm91dGUiO047fX0=', 1774505125),
('GF0bge5B38GVElloK9bwyQSqzaTTl4JELAfUrdvH', NULL, '10.0.52.170', 'Mozilla/5.0 (X11; Linux i686; rv:124.0) Gecko/20100101 Firefox/124.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFB5OW1KYzE0N0lWZThFY3ZkUGloSEpCMExzQ1ZGSk4xcFIxUWg5NiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQiO3M6NToicm91dGUiO047fX0=', 1774508791),
('Gj984pYLPmb0EKG7ttev2z4a2eABYEHTFf3fKHZg', NULL, '10.0.52.170', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUndTQ0tBaFQ3RmFpeUJ0RWFuWUFYdHJvd1B1R3FWb1lNZ0NqS1lGbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQiO3M6NToicm91dGUiO047fX0=', 1774509398),
('gyUlaBq6TFiMrKgcKOlls5IkRZHINnMgqCMZIbvx', NULL, '10.0.52.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVm9TaGdGMlZYdGJMMDZ6V1Qydk14V1FLV3ZsRFR3ZjdHUTVvYkM1UiI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjM0OiJodHRwczovL2FyYWJpYW5wYXkubmV0L2VuL3N1cHBsaWVyIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774510979),
('JDDDC0DLbgHYqyJZDdjTvbTLDFTGC4dORyYqzD7h', NULL, '10.0.52.170', 'GoogleOther', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoib0VKT2R5QWxVbXhha3hoUnFRZU5IcHVObVozc2RMSmd4d2JkY25wQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvYXIiO3M6NToicm91dGUiO047fXM6NjoibG9jYWxlIjtzOjI6ImFyIjt9', 1774510947),
('Ka1sMA5T3N6n7ADOA022mrQ35VHSWxABqqAYjTef', NULL, '10.0.52.170', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUmFTczZmQWVVWDBsZDdGekZrdDdvWk1KcFBBRXc5dWQwc1p2SVVuZiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MTczOiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyP2ZiY2xpZD1Jd1pYaDBiZ05oWlcwQ01URUFjM0owWXdaaGNIQmZhV1FNTWpVMk1qZ3hNRFF3TlRVNEFBRWVJMzlZMjdRQVdONmxjN0cxTnpSY1VBNW44eElRMDdscUhjT2g2Q1FxQ1BEUFJHQ2JlUXV5X0s3Z2Vva19hZW1fcV9McDVac0hvWGNrR0hxam81d0M5QSI7czo1OiJyb3V0ZSI7Tjt9czo2OiJsb2NhbGUiO3M6MjoiYXIiO30=', 1774511277),
('KS9MNRfsG9vs4Hnczb0ZEHXHn7RwLr6B0yefnXeb', NULL, '10.0.52.170', 'Mozilla/5.0 (X11; Linux i686; rv:124.0) Gecko/20100101 Firefox/124.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSGJqZHppRkRYblBpVndFRFE5WnR6Zld0a3BKcFczVHd1TUpVS1pBSSI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774508792),
('niTky0am1SrGuc4PC7bFyqBnG3KcNVMsXmaT9Ksy', NULL, '10.0.52.170', 'SmarterMail/9560', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU3N6TE5NV2ZiM21VbjJQQjQ5Q1QzNUhsSUphOFhBTFpDcVFRVDd3TCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvYXIiO3M6NToicm91dGUiO047fXM6NjoibG9jYWxlIjtzOjI6ImFyIjt9', 1774513489),
('oa4GroxFGAWARIkE5qMabAnAP7PtNiPzDun0939O', NULL, '10.0.52.170', 'Mozilla/5.0 (iPhone; CPU iPhone OS 26_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/23D8133 [FBAN/FBIOS;FBAV/553.0.0.43.84;FBBV/911230482;FBDV/iPhone14,5;FBMD/iPhone;FBSN/iOS;FBSV/26.3.1;FBSS/3;FBID/phone;FBLC/en_US;FBOP/5;FBRV/917879360]', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiamQ0TWxuazRHRnF6Y0pXeWlkTU1oZXZPNDFaOUVRUzVIa1dPMXUzcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MTczOiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyP2ZiY2xpZD1Jd1pYaDBiZ05oWlcwQ01URUFjM0owWXdaaGNIQmZhV1FNTWpVMk1qZ3hNRFF3TlRVNEFBRWU5S3U5MDY4cEszSWZtSzJ5SkZzaDB0dzZRUlkxbHJuNjR0T3BzdGVNcGtaSnFIalQxZkxwRjI3RnRMRV9hZW1fQVVHaTBiMmhaYjhwcE5BcHZBdl84QSI7czo1OiJyb3V0ZSI7Tjt9czo2OiJsb2NhbGUiO3M6MjoiYXIiO30=', 1774510976),
('p7QWV9OAJlFBhEmimWgmEbpxSRpgKrgMEM52svd3', NULL, '10.0.52.170', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT2FDM05JemZ6eE52RlF2TTBJV1p3TmJyQWROWEprYnhQQlUzZ0libyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQiO3M6NToicm91dGUiO047fX0=', 1774507890),
('PEA9GiIqFhqgfkm8SlvL1BWgSKV4pkj8fzwqvNF5', NULL, '10.0.52.170', 'GoogleOther', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ2p2QVpvWTQxWjZOVXRmdnNpVmRJZlJXaFQ5RWNkbkNsbm52NlgyUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvYXIiO3M6NToicm91dGUiO047fXM6NjoibG9jYWxlIjtzOjI6ImFyIjt9', 1774510952),
('poSyD0IgRVeXE6IQ0Cbeu7Ij4bVc7SrxPU1oS8jc', NULL, '10.0.52.170', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSGRrRlZ2RHBBaXRXYmdUTEQzOWwwZk1QSzVlakZUeHhtbFBrRFAxYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MTczOiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyP2ZiY2xpZD1Jd1pYaDBiZ05oWlcwQ01URUFjM0owWXdaaGNIQmZhV1FNTWpVMk1qZ3hNRFF3TlRVNEFBRWV3cGxsY0VKWFhHWHAxYjFhdDNicWpaU194NTdsa05QSXpRa1NTOF9saHhkaXFycmVDa3BSbVphVkFVNF9hZW1fUXBuS2dDVFU2T2JEMFVLUWtXVm1HdyI7czo1OiJyb3V0ZSI7Tjt9czo2OiJsb2NhbGUiO3M6MjoiYXIiO30=', 1774510978),
('Ptw9XMFYfq87rul8lCD3RONXsnBizrlZPLimLcuW', NULL, '10.0.52.170', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko); compatible; ChatGPT-User/1.0; +https://openai.com/bot', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWkhjVmlHbDFlRFZxaUNqRVk4VHpOUEhEbmFHUE9LdXJEc3dyUFdMQSI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774509398),
('QOXOYDKODLJsTBKGxxqyodDP3RqLbyYQj4XYshQG', NULL, '10.0.52.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36; compatible; OAI-SearchBot/1.3; +https://openai.com/searchbot', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNjUzRnp0U3E0aWhUNjlwNlNsR0hnemxnZ1EyRFpaNDV3Uk8zQ25jMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvYXIvbWVyY2hhbnQiO3M6NToicm91dGUiO047fXM6NjoibG9jYWxlIjtzOjI6ImFyIjt9', 1774510008),
('qzJUQgFEXW8zCR2C6Uoh6eq7ajZelK8DcVANTkxB', NULL, '10.0.52.170', 'axios/1.13.5', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGlpYWNCWGV4cURvWEF3Y2Nzc1ZWWlFXZFFCb09yNzN5SG5kVUdtYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQiO3M6NToicm91dGUiO047fX0=', 1774505152),
('RsJ1jas2NFREz8Y5LwsjSmXY2r63x5FBwR6TUovf', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiM3dnS21YZXpYd2JNQkV2UkJKNGI1V29PUENpcHV2SmZWSWRvMlZxcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzM6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvYXIvam9icy8xNyI7czo1OiJyb3V0ZSI7czoxMToiam9icy5kZXRhaWwiO31zOjY6ImxvY2FsZSI7czoyOiJhciI7fQ==', 1774507167),
('Sdbr8h8E2SgoSoeETuzL1h2ke91W0DV05Uz417pE', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia1BDRWdBOGhVZ2VZMUhiVXpRd05WTnZoeElKcU5maVpFbXZTeWtRRiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvaW5kZXgucGhwP2F1dGhvcj0xIjtzOjU6InJvdXRlIjtOO319', 1774507988),
('Tg8O62Sj8WpNyAvpM1dAuJ0K2OU7Ua9dqhRZlecE', NULL, '10.0.52.170', 'Mozilla/5.0 (Linux; Android 7.0;) AppleWebKit/537.36 (KHTML, like Gecko) Mobile Safari/537.36 (compatible; PetalBot;+https://webmaster.petalsearch.com/site/petalbot)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQUJTMWhpTzJvaHVzcUhRNGlJZ2J4Ykd4ZFZ1WFZSSGJNcTdBSjhxbSI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjQxOiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyL2pvYnM/Y2F0ZWdvcnk9MSI7czo1OiJyb3V0ZSI7czo0OiJqb2JzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1774514265),
('uegcMdedBnamOSvCxlQs0Tzb9yaeaAUHiGwndJrY', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUDNIc3ZDM1JTQURzczVtSVZPVEFhV21WMEdDYjBHQWlKQTBqVFlUOCI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjMzOiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyL3N1cHBvcnQiO3M6NToicm91dGUiO3M6Nzoic3VwcG9ydCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1774505128),
('uHZqdgPv6fB9nFwiWUmjmhAVYKuh2khGoQtHgtQE', NULL, '10.0.52.170', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTkRhMTk0VHRTdkdMSm1TcjlJOHFwN2ZmRktXVHdrR1FXNVVaWHJ3NCI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjE3MzoiaHR0cHM6Ly9hcmFiaWFucGF5Lm5ldC9hcj9mYmNsaWQ9SXdaWGgwYmdOaFpXMENNVEVBYzNKMFl3WmhjSEJmYVdRTU1qVTJNamd4TURRd05UVTRBQUVlOUt1OTA2OHBLM0lmbUsyeUpGc2gwdHc2UVJZMWxybjY0dE9wc3RlTXBrWkpxSGpUMWZMcEYyN0Z0TEVfYWVtX0FVR2kwYjJoWmI4cHBOQXB2QXZfOEEiO3M6NToicm91dGUiO047fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1774511089),
('UOMq80hJZ0NPsvHGZlktIx6Ba1XePCLrt4HPQVOa', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRHlrUG5rdFQwc0JpY2FGRGJ3MXZHUnVEWWFPbHROWlhFQjFuNkNhNCI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774505126),
('w4uMEKnddK5ZFGClaYpRtvUWC1ooc0unKqragIip', NULL, '10.0.52.170', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.7680.153 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOGtZaGlpSDJGSXk3Q2xLUml3Mkk1TmpBYVZRZ2dwRVZPaGo3SzVwayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvYXIiO3M6NToicm91dGUiO047fXM6NjoibG9jYWxlIjtzOjI6ImFyIjt9', 1774506260),
('wAw23aABg9vRNcdzGRKn4z5b7Jg9tCI3B6IYzEFq', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY1JVWE1PekZFQTBXY3VPTm5TWHg5QkRhWFlSaHphUUpDdkZoWllnZyI7czo2OiJsb2NhbGUiO3M6MjoiZW4iO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjMzOiJodHRwczovL2FyYWJpYW5wYXkubmV0L2VuL2NvbnRhY3QiO3M6NToicm91dGUiO3M6NzoiY29udGFjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1774505127),
('wdN0rzjgPMNsPEnx7Rhp6UDeKpoQ1eyDKdI0O5pi', NULL, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiazdzSjZER2ZtZnRVTEN3TmpXb05XakNuSG9LT0xDR3ZreUZKbkM2ZSI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjQ0OiJodHRwczovL2FyYWJpYW5wYXkubmV0L2luZGV4LnBocC9hcj9hdXRob3I9MSI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1774507988),
('XC2ycvliN6JeoUqwUtLiF36zZf7YVL1HaEqRmutt', NULL, '10.0.52.170', 'GoogleOther', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid3FhUWI1cjQxeExleFpOd0RRQjhhcXRBYUg2cThEcWpFT2c4eDQzWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vYXJhYmlhbnBheS5uZXQvYXIiO3M6NToicm91dGUiO047fXM6NjoibG9jYWxlIjtzOjI6ImFyIjt9', 1774510820),
('YAh0tHpymK8YvTdWJeUPGpMtft081RCZOyv3BO6F', 1, '10.0.52.170', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaTdpSUhxSEdIa0xWcmlzN0d3NkcwTk9ETDRvVTU3ZkVYWnJkeDI0VyI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjI1OiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyIjtzOjU6InJvdXRlIjtOO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774512553),
('z7Vp8VmZI0z68vZmZmccyokYa6N5otu2ZlAZrqVf', NULL, '10.0.52.170', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiamV5WHljeWJxczhNdVZYa08yTlRmZzVIMmVXUlBRNmRmZExOaFJGTSI7czo2OiJsb2NhbGUiO3M6MjoiYXIiO3M6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjMxOiJodHRwczovL2FyYWJpYW5wYXkubmV0L2FyL3Rlcm1zIjtzOjU6InJvdXRlIjtzOjU6InRlcm1zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1774506145),
('zumt5XZxg5sCNgxAYqTBhu0K9gVf07cOFBia0oFg', NULL, '10.0.52.170', 'GoogleOther', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiOUg0eWQwdExDRkliY2RxbVlaenV2cmVGNHB2em94Y0czTlBzTWt2RyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319fQ==', 1774504069);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint UNSIGNED NOT NULL,
  `phonea1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonea2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonesana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonewhats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wechatlink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatslink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facelink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitterlink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instegramlink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `phonea1`, `phonea2`, `phonesana`, `phonewhats`, `wechatlink`, `whatslink`, `facelink`, `twitterlink`, `instegramlink`, `mail`, `created_at`, `updated_at`) VALUES
(1, '967784197777', '967784197777', '967784197777', '967784197777', NULL, 'https://wa.me/967784197777', 'https://facebook.com', 'https://x.com', 'https://www.instagram.com', 'samatours@gmail.com', '2025-03-12 01:57:04', '2025-08-10 22:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `btn_ar`, `btn_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'تمكين مدفوعاتك بسهولة في السعودية وحول العالم', 'Enable your payments easily in Saudi Arabia and worldwide', 'حوّل زيارات متجرك إلى مبيعات حقيقية مع تجربة دفع سلسة وخطط مرنة', 'Turn your store visits into real sales with a seamless payment experience and flexible plans', 'انضم الى اريبيان باي الان', 'Join Arabian Bay now', 'home_panner_partners/01KBY6GJRFQNCA5H6KABJVT890.svg', '2025-12-08 13:21:24', '2025-12-20 01:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `suplier_bottom_panners`
--

CREATE TABLE `suplier_bottom_panners` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `suplier_bottom_panners`
--

INSERT INTO `suplier_bottom_panners` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'نموك يبدأ من هنا', 'Your growth starts here', 'آلاف المتاجر في المملكة اعتمدت حلولنا كأفضل بوابات الدفع الإلكتروني، انضم إليهم اليوم.', 'Thousands of stores in the Kingdom have adopted our solutions as the best electronic payment gateways, join them today.', '[{\"image\":\"supplier\\/01KBYD3BHWJJ8888FG9GM8BESH.svg\",\"title_ar\":\"\\u062e\\u064a\\u0627\\u0631\\u0627\\u062a \\u062f\\u0641\\u0639 \\u0645\\u0631\\u0646\\u0629 \\u062a\\u0646\\u0627\\u0633\\u0628 \\u0643\\u0644 \\u0639\\u0645\\u064a\\u0644\",\"title_en\":\"Flexible payment options to suit every customer\",\"bg_color\":\"#ffffff\",\"des_ar\":\"\\u0627\\u062d\\u0635\\u0644 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0641\\u0642\\u0629 \\u062e\\u0644\\u0627\\u0644 \\u062f\\u0642\\u0627\\u0626\\u0642 \\u0641\\u0642\\u0637. \\u0646\\u0638\\u0627\\u0645\\u0646\\u0627 \\u0627\\u0644\\u0630\\u064a \\u064a\\u0642\\u0648\\u0645 \\u0628\\u0637\\u0644\\u0628\\u0627\\u062a \\u0633\\u0631\\u064a\\u0639\\u0629 \\u064a\\u0645\\u0646\\u062d\\u0643 \\u062a\\u062c\\u0631\\u0628\\u0629 \\u0633\\u0644\\u0633\\u0629 \\u0645\\u0646 \\u0623\\u0648\\u0644 \\u0645\\u0631\\u0629.\",\"des_en\":\"Get approved in just minutes. Our fast order processing system gives you a seamless experience from the very first time.\",\"topbtn_ar\":\"\\u0627\\u0631\\u064a\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a \\u0644\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644\",\"topbtn_en\":\"Arabian Bay for Business\",\"bootombtn_ar\":\"\\u0627\\u0639\\u0631\\u0641 \\u0623\\u0643\\u062b\\u0631\",\"bootombtn_en\":\"learn more\"},{\"image\":\"supplier\\/01KBYD3BN8VVTDYXQHQ8SGSDYF.svg\",\"title_ar\":\"\\u0634\\u0631\\u0627\\u0643\\u0629 \\u062a\\u0633\\u0627\\u0639\\u062f\\u0643 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0646\\u0645\\u0648\",\"title_en\":\"A partnership that helps you grow\",\"bg_color\":\"#f0ebeb\",\"des_ar\":null,\"des_en\":null,\"topbtn_ar\":null,\"topbtn_en\":\"A partnership that helps you grow\",\"bootombtn_ar\":\"\\u0627\\u0639\\u0631\\u0641 \\u0623\\u0643\\u062b\\u0631\",\"bootombtn_en\":\"learn more\"},{\"image\":\"supplier\\/01KBYD3BQ1TFMWXXA874Y3Z0AF.svg\",\"title_ar\":\"\\u0632\\u064a\\u0627\\u062f\\u0629 \\u0641\\u064a \\u0627\\u0644\\u0645\\u0628\\u064a\\u0639\\u0627\\u062a \\u0648\\u0627\\u0644\\u0637\\u0644\\u0628\",\"title_en\":\"Increase in sales and demand\",\"bg_color\":\"#ffffff\",\"des_ar\":\"\\u0627\\u062d\\u0635\\u0644 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0645\\u0648\\u0627\\u0641\\u0642\\u0629 \\u062e\\u0644\\u0627\\u0644 \\u062f\\u0642\\u0627\\u0626\\u0642 \\u0641\\u0642\\u0637. \\u0646\\u0638\\u0627\\u0645\\u0646\\u0627 \\u064a\\u0642\\u062f\\u0651\\u0645 \\u062a\\u062c\\u0631\\u0628\\u0629 \\u0633\\u0631\\u064a\\u0639\\u0629 \\u0648\\u0645\\u0648\\u062b\\u0648\\u0642\\u0629 \\u0644\\u0639\\u0645\\u0644\\u0627\\u0626\\u0643.\",\"des_en\":\"Get approved in just minutes. Our system offers a fast and reliable experience for your clients.\",\"topbtn_ar\":\"\\u0627\\u0631\\u064a\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a \\u0644\\u0644\\u0623\\u0639\\u0645\\u0627\\u0644\",\"topbtn_en\":\"Arabian Bay for Business\",\"bootombtn_ar\":\"\\u0627\\u0639\\u0631\\u0641 \\u0623\\u0643\\u062b\\u0631\",\"bootombtn_en\":\"learn more\"}]', '2025-12-08 15:16:31', '2025-12-08 15:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `suplier_panners`
--

CREATE TABLE `suplier_panners` (
  `id` bigint UNSIGNED NOT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` text COLLATE utf8mb4_unicode_ci,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suplier_panners`
--

INSERT INTO `suplier_panners` (`id`, `des_ar`, `des_en`, `jsoning`, `main_image`, `side_image`, `created_at`, `updated_at`) VALUES
(1, 'اريبيان باي مدفوعات ذكية، بسيطة، وموثوقة لنمو أعمالك', 'rabianPay Smart, Simple, and Reliable Payments to Grow Your Business', '[{\"title_aar\":\"\\u0632\\u064a\\u0627\\u062f\\u0629 \\u0641\\u064a \\u0645\\u062a\\u0648\\u0633\\u0637 \\u0642\\u064a\\u0645\\u0629 \\u0627\\u0644\\u0637\\u0644\\u0628\",\"title_en\":\"Increase in average order value\",\"number\":46},{\"title_aar\":\"\\u0639\\u0627\\u0626\\u062f \\u0639\\u0644\\u0649 \\u0645\\u064a\\u0632\\u0627\\u0646\\u064a\\u0629 \\u0627\\u0644\\u062a\\u0633\\u0648\\u064a\\u0642\",\"title_en\":\"Return on marketing budget\",\"number\":15},{\"title_aar\":\"\\u0627\\u0646\\u062e\\u0641\\u0627\\u0636 \\u0641\\u064a \\u0637\\u0644\\u0628\\u0627\\u062a \\u0627\\u0644\\u062f\\u0641\\u0639 \\u0639\\u0646\\u062f \\u0627\\u0644\\u0627\\u0633\\u062a\\u0644\\u0627\\u0645\",\"title_en\":\"A decrease in cash on delivery orders\",\"number\":46}]', 'supplier/01KBYAM3N10XTM686GTH0G21QT.svg', 'supplier/01KBYAM3QEH381PSCTRWFFNK48.png', '2025-12-08 14:23:45', '2025-12-20 01:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `support_categories`
--

CREATE TABLE `support_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `support_categories`
--

INSERT INTO `support_categories` (`id`, `name_ar`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'الأسئلة الشائعة', 'FAQ', '2025-12-09 14:50:59', '2025-12-09 14:50:59'),
(2, 'الأدلة والبرامج التعليمية', 'Guides & Tutorials', '2025-12-09 14:50:59', '2025-12-09 14:50:59'),
(3, 'الدعم الفني', 'Technical Support', '2025-12-09 14:50:59', '2025-12-09 14:50:59'),
(4, 'الشروط والأحكام', 'Terms & Conditions', '2025-12-09 14:50:59', '2025-12-09 14:50:59'),
(5, 'سياسة الخصوصية', 'Privacy Policy', '2025-12-09 14:50:59', '2025-12-09 14:50:59'),
(6, 'استفسارات عامة', 'General Inquiries', '2025-12-09 14:50:59', '2025-12-09 14:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `support_contacts`
--

CREATE TABLE `support_contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` text COLLATE utf8mb4_unicode_ci,
  `des_en` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` text COLLATE utf8mb4_unicode_ci,
  `address_en` text COLLATE utf8mb4_unicode_ci,
  `jsoning` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `support_contacts`
--

INSERT INTO `support_contacts` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `email`, `phone`, `address_ar`, `address_en`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'تواصل معنا', 'Contact Us', 'املأ النموذج أدناه وسنقوم بالرد عليك في أقرب وقت ممكن', 'Fill out the form below and we will get back to you as soon as possible', 'support@arabianpay.com', '920031271', 'الرياض، المملكة العربية السعودية', 'Riyadh, Saudi Arabia', '[{\"type\":\"email\",\"title_ar\":\"\\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a\",\"title_en\":\"Email\",\"value\":\"support@arabianpay.com\",\"icon\":\"<svg class=\\\"w-6 h-6 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\\\"\\/><\\/svg>\"},{\"type\":\"phone\",\"title_ar\":\"\\u0627\\u0644\\u0647\\u0627\\u062a\\u0641\",\"title_en\":\"Phone\",\"value\":\"920031271\",\"icon\":\"<svg class=\\\"w-6 h-6 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z\\\"\\/><\\/svg>\"},{\"type\":\"address\",\"title_ar\":\"\\u0627\\u0644\\u0639\\u0646\\u0648\\u0627\\u0646\",\"title_en\":\"Address\",\"value\":\"\\u0627\\u0644\\u0631\\u064a\\u0627\\u0636\\u060c \\u0627\\u0644\\u0645\\u0645\\u0644\\u0643\\u0629 \\u0627\\u0644\\u0639\\u0631\\u0628\\u064a\\u0629 \\u0627\\u0644\\u0633\\u0639\\u0648\\u062f\\u064a\\u0629\",\"icon\":\"<svg class=\\\"w-6 h-6 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z\\\"\\/><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M15 11a3 3 0 11-6 0 3 3 0 016 0z\\\"\\/><\\/svg>\"}]', '2025-12-09 14:51:01', '2025-12-09 14:51:01');

-- --------------------------------------------------------

--
-- Table structure for table `support_panners`
--

CREATE TABLE `support_panners` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` text COLLATE utf8mb4_unicode_ci,
  `des_en` text COLLATE utf8mb4_unicode_ci,
  `btn_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `side_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `support_panners`
--

INSERT INTO `support_panners` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `btn_ar`, `btn_en`, `image_ar`, `image_en`, `main_image`, `side_image`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'مركز المساعدة والدعم', 'Help & Support Center', NULL, NULL, 'تواصل معنا الآن', 'Contact Us Now', NULL, NULL, NULL, NULL, '[{\"title_ar\":\"\\u062f\\u0639\\u0645 \\u0641\\u0648\\u0631\\u064a\",\"title_en\":\"Instant Support\",\"des_ar\":\"\\u0641\\u0631\\u064a\\u0642 \\u0627\\u0644\\u062f\\u0639\\u0645 \\u0645\\u062a\\u0627\\u062d \\u0639\\u0644\\u0649 \\u0645\\u062f\\u0627\\u0631 \\u0627\\u0644\\u0633\\u0627\\u0639\\u0629 \\u0644\\u0645\\u0633\\u0627\\u0639\\u062f\\u062a\\u0643\",\"des_en\":\"Support team available 24\\/7 to help you\",\"icon\":\"<svg width=\\\"21\\\" height=\\\"19\\\" viewBox=\\\"0 0 21 19\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><path d=\\\"M1 17.0212L2.3 13.1212C-0.0239997 9.68421 0.874 5.24921 4.4 2.74721C7.926 0.246207 12.99 0.451206 16.245 3.22721C19.5 6.00421 19.94 10.4932 17.274 13.7282C14.608 16.9632 9.659 17.9432 5.7 16.0212L1 17.0212Z\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/svg>\"},{\"title_ar\":\"24\\/7\",\"title_en\":\"24\\/7\",\"des_ar\":\"\\u062e\\u062f\\u0645\\u0629 \\u0639\\u0645\\u0644\\u0627\\u0621 \\u0645\\u062a\\u0627\\u062d\\u0629 \\u0639\\u0644\\u0649 \\u0645\\u062f\\u0627\\u0631 \\u0627\\u0644\\u0633\\u0627\\u0639\\u0629 \\u0637\\u0648\\u0627\\u0644 \\u0623\\u064a\\u0627\\u0645 \\u0627\\u0644\\u0623\\u0633\\u0628\\u0648\\u0639\",\"des_en\":\"Customer service available 24\\/7 throughout the week\",\"icon\":\"<svg width=\\\"20\\\" height=\\\"20\\\" viewBox=\\\"0 0 20 20\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><path d=\\\"M9.44706 18.846C6.43635 17.9127 3.91372 15.8324 2.42427 13.0545C0.934827 10.2765 0.598174 7.02411 1.48706 4C4.60259 4.14257 7.65123 3.06658 9.98706 1C12.3229 3.06658 15.3715 4.14257 18.4871 4C19.1657 6.30911 19.1344 8.76894 18.3971 11.06\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/svg>\"},{\"title_ar\":\"\\u062d\\u0644\\u0648\\u0644 \\u0633\\u0631\\u064a\\u0639\\u0629\",\"title_en\":\"Quick Solutions\",\"des_ar\":\"\\u0625\\u062c\\u0627\\u0628\\u0627\\u062a \\u0641\\u0648\\u0631\\u064a\\u0629 \\u0644\\u062c\\u0645\\u064a\\u0639 \\u0627\\u0633\\u062a\\u0641\\u0633\\u0627\\u0631\\u0627\\u062a\\u0643 \\u0648\\u0645\\u0634\\u0627\\u0643\\u0644\\u0643\",\"des_en\":\"Instant answers to all your inquiries and problems\",\"icon\":\"<svg width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\" fill=\\\"none\\\" xmlns=\\\"http:\\/\\/www.w3.org\\/2000\\/svg\\\"><g opacity=\\\"0.5\\\"><path d=\\\"M6 5H18L21 10L12.5 19.5C12.4348 19.5665 12.357 19.6194 12.2712 19.6554C12.1853 19.6915 12.0931 19.7101 12 19.7101C11.9069 19.7101 11.8147 19.6915 11.7288 19.6554C11.643 19.6194 11.5652 19.5665 11.5 19.5L3 10L6 5Z\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><path d=\\\"M10 12.0008L8 9.80078L8.6 8.80078\\\" stroke=\\\"white\\\" stroke-width=\\\"2\\\" stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" \\/><\\/g><\\/svg>\"}]', '2025-12-09 14:53:57', '2025-12-09 14:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `support_translations`
--

CREATE TABLE `support_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `support_category_id` bigint UNSIGNED NOT NULL,
  `qa_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qa_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_us`
--

CREATE TABLE `support_us` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsoning` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- Dumping data for table `support_us`
--

INSERT INTO `support_us` (`id`, `title_ar`, `title_en`, `des_ar`, `des_en`, `jsoning`, `created_at`, `updated_at`) VALUES
(1, 'كيف يمكننا مساعدتك؟', 'How can we help you?', 'اختر الموضوع الذي تحتاج مساعدة فيه', 'Choose the topic you need help with', '[{\"title_ar\":\"\\u0627\\u0644\\u0623\\u0633\\u0626\\u0644\\u0629 \\u0627\\u0644\\u0634\\u0627\\u0626\\u0639\\u0629\",\"title_en\":\"FAQ\",\"des_ar\":\"\\u0627\\u0628\\u062d\\u062b \\u0639\\u0646 \\u0625\\u062c\\u0627\\u0628\\u0627\\u062a \\u0644\\u0644\\u0623\\u0633\\u0626\\u0644\\u0629 \\u0627\\u0644\\u0623\\u0643\\u062b\\u0631 \\u0634\\u064a\\u0648\\u0639\\u0627\\u064b\",\"des_en\":\"Find answers to the most common questions\",\"icon\":\"<svg class=\\\"w-8 h-8 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z\\\"\\/><\\/svg>\",\"link\":\"#faq\"},{\"title_ar\":\"\\u0627\\u0644\\u0623\\u062f\\u0644\\u0629 \\u0648\\u0627\\u0644\\u0628\\u0631\\u0627\\u0645\\u062c \\u0627\\u0644\\u062a\\u0639\\u0644\\u064a\\u0645\\u064a\\u0629\",\"title_en\":\"Guides & Tutorials\",\"des_ar\":\"\\u062a\\u0639\\u0644\\u0645 \\u0643\\u064a\\u0641\\u064a\\u0629 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0645\\u0646\\u0635\\u0629 \\u0627\\u0631\\u064a\\u0628\\u064a\\u0627\\u0646 \\u0628\\u0627\\u064a\",\"des_en\":\"Learn how to use ArabianPay platform\",\"icon\":\"<svg class=\\\"w-8 h-8 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253\\\"\\/><\\/svg>\",\"link\":\"#guides\"},{\"title_ar\":\"\\u0627\\u0644\\u062f\\u0639\\u0645 \\u0627\\u0644\\u0641\\u0646\\u064a\",\"title_en\":\"Technical Support\",\"des_ar\":\"\\u0627\\u062d\\u0635\\u0644 \\u0639\\u0644\\u0649 \\u0645\\u0633\\u0627\\u0639\\u062f\\u0629 \\u0641\\u0648\\u0631\\u064a\\u0629 \\u0645\\u0646 \\u0641\\u0631\\u064a\\u0642 \\u0627\\u0644\\u062f\\u0639\\u0645\",\"des_en\":\"Get instant help from the support team\",\"icon\":\"<svg class=\\\"w-8 h-8 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z\\\"\\/><\\/svg>\",\"link\":\"#technical\"},{\"title_ar\":\"\\u0627\\u0644\\u0634\\u0631\\u0648\\u0637 \\u0648\\u0627\\u0644\\u0623\\u062d\\u0643\\u0627\\u0645\",\"title_en\":\"Terms & Conditions\",\"des_ar\":\"\\u0627\\u0637\\u0644\\u0639 \\u0639\\u0644\\u0649 \\u0634\\u0631\\u0648\\u0637 \\u0627\\u0644\\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0648\\u0633\\u064a\\u0627\\u0633\\u0629 \\u0627\\u0644\\u062e\\u0635\\u0648\\u0635\\u064a\\u0629\",\"des_en\":\"Read terms of use and privacy policy\",\"icon\":\"<svg class=\\\"w-8 h-8 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z\\\"\\/><\\/svg>\",\"link\":\"#terms\"},{\"title_ar\":\"\\u0633\\u0627\\u0639\\u0627\\u062a \\u0627\\u0644\\u0639\\u0645\\u0644\",\"title_en\":\"Working Hours\",\"des_ar\":\"\\u0641\\u0631\\u064a\\u0642 \\u0627\\u0644\\u062f\\u0639\\u0645 \\u0645\\u062a\\u0627\\u062d \\u0639\\u0644\\u0649 \\u0645\\u062f\\u0627\\u0631 \\u0627\\u0644\\u0633\\u0627\\u0639\\u0629 \\u0637\\u0648\\u0627\\u0644 \\u0623\\u064a\\u0627\\u0645 \\u0627\\u0644\\u0623\\u0633\\u0628\\u0648\\u0639\",\"des_en\":\"Support team available 24\\/7 throughout the week\",\"icon\":\"<svg class=\\\"w-8 h-8 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z\\\"\\/><\\/svg>\",\"value\":\"24\\/7\"},{\"title_ar\":\"\\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a\",\"title_en\":\"Email\",\"des_ar\":\"\\u0631\\u0627\\u0633\\u0644\\u0646\\u0627 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0628\\u0631\\u064a\\u062f \\u0627\\u0644\\u0625\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a\",\"des_en\":\"Contact us by email\",\"icon\":\"<svg class=\\\"w-8 h-8 text-white\\\" fill=\\\"none\\\" stroke=\\\"currentColor\\\" viewBox=\\\"0 0 24 24\\\"><path stroke-linecap=\\\"round\\\" stroke-linejoin=\\\"round\\\" stroke-width=\\\"2\\\" d=\\\"M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z\\\"\\/><\\/svg>\",\"value\":\"support@arabianpay.com\"}]', '2025-12-09 14:52:20', '2025-12-09 14:52:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ALI', 'arabian@gmail.com', '2025-12-05 10:52:54', '$2y$12$b0e7u7khXNO0NF4Zm67KaOK.fDpLeYXzhlfh8nOx25g5.iXTngx.6', 'active', 'am4pH9xseISDwcBHdj68fT1yf9SxWoqF0UAcIkRg2oMEtyJH6YuzlmfHQ7FM', NULL, NULL),
(2, 'sadam', 'sadamo@g.com', '2025-12-05 10:52:20', '$2y$12$JKdSqX5LGj7d9zD1w5Pzd.uhiw3vYNQjTYEJrU52RVtDXIbnRYsJy', 'active', NULL, '2025-12-05 15:45:23', '2025-12-05 15:45:23'),
(3, 'sadami', 's@gmail.com', NULL, '$2y$12$SPKA8BhOHIIhX.WREtNY/ed3pHStSmrUKKUKI34QAbMUAlkLlJVr.', 'active', NULL, '2025-12-05 18:46:46', '2025-12-05 18:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-03-11 05:26:31', '2025-03-11 05:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visited_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `url`, `referer`, `country`, `city`, `visited_at`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/support', 'http://127.0.0.1:8000/ar/support', NULL, NULL, '2025-12-09 17:55:56', '2025-12-09 17:55:56', '2025-12-09 17:55:56'),
(2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/admin', NULL, NULL, '2025-12-09 17:56:19', '2025-12-09 17:56:19', '2025-12-09 17:56:19'),
(3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/admin', NULL, NULL, '2025-12-09 17:57:15', '2025-12-09 17:57:15', '2025-12-09 17:57:15'),
(4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/admin', NULL, NULL, '2025-12-09 17:57:20', '2025-12-09 17:57:20', '2025-12-09 17:57:20'),
(5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/admin', NULL, NULL, '2025-12-09 17:57:25', '2025-12-09 17:57:25', '2025-12-09 17:57:25'),
(6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/admin', NULL, NULL, '2025-12-09 17:58:45', '2025-12-09 17:58:45', '2025-12-09 17:58:45'),
(7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/support', 'http://127.0.0.1:8000/ar/support', NULL, NULL, '2025-12-09 17:58:51', '2025-12-09 17:58:51', '2025-12-09 17:58:51'),
(8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/support', 'http://127.0.0.1:8000/ar/support?', NULL, NULL, '2025-12-09 17:58:56', '2025-12-09 17:58:56', '2025-12-09 17:58:56'),
(9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/support', 'http://127.0.0.1:8000/ar/support?', NULL, NULL, '2025-12-09 18:00:34', '2025-12-09 18:00:34', '2025-12-09 18:00:34'),
(10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/about', 'http://127.0.0.1:8000/ar/support?', NULL, NULL, '2025-12-09 18:00:38', '2025-12-09 18:00:38', '2025-12-09 18:00:38'),
(11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/merchant', 'http://127.0.0.1:8000/ar/about', NULL, NULL, '2025-12-09 18:00:40', '2025-12-09 18:00:40', '2025-12-09 18:00:40'),
(12, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/supplier', 'http://127.0.0.1:8000/ar/merchant', NULL, NULL, '2025-12-09 18:00:42', '2025-12-09 18:00:42', '2025-12-09 18:00:42'),
(13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/supplier', NULL, NULL, '2025-12-09 18:00:43', '2025-12-09 18:00:43', '2025-12-09 18:00:43'),
(14, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/news', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:00:45', '2025-12-09 18:00:45', '2025-12-09 18:00:45'),
(15, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/news', 'http://127.0.0.1:8000/ar/news', NULL, NULL, '2025-12-09 18:00:48', '2025-12-09 18:00:48', '2025-12-09 18:00:48'),
(16, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/news', NULL, NULL, '2025-12-09 18:00:51', '2025-12-09 18:00:51', '2025-12-09 18:00:51'),
(17, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:00:55', '2025-12-09 18:00:55', '2025-12-09 18:00:55'),
(18, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:01:55', '2025-12-09 18:01:55', '2025-12-09 18:01:55'),
(19, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:02:21', '2025-12-09 18:02:21', '2025-12-09 18:02:21'),
(20, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:02:24', '2025-12-09 18:02:24', '2025-12-09 18:02:24'),
(21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:02:31', '2025-12-09 18:02:31', '2025-12-09 18:02:31'),
(22, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:02:34', '2025-12-09 18:02:34', '2025-12-09 18:02:34'),
(23, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:02:36', '2025-12-09 18:02:36', '2025-12-09 18:02:36'),
(24, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:02:38', '2025-12-09 18:02:38', '2025-12-09 18:02:38'),
(25, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:02:48', '2025-12-09 18:02:48', '2025-12-09 18:02:48'),
(26, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:02:50', '2025-12-09 18:02:50', '2025-12-09 18:02:50'),
(27, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:02:54', '2025-12-09 18:02:54', '2025-12-09 18:02:54'),
(28, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:02:57', '2025-12-09 18:02:57', '2025-12-09 18:02:57'),
(29, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:02:59', '2025-12-09 18:02:59', '2025-12-09 18:02:59'),
(30, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:03:26', '2025-12-09 18:03:26', '2025-12-09 18:03:26'),
(31, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/news', NULL, NULL, '2025-12-09 18:03:27', '2025-12-09 18:03:27', '2025-12-09 18:03:27'),
(32, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:03:28', '2025-12-09 18:03:28', '2025-12-09 18:03:28'),
(33, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:03:32', '2025-12-09 18:03:32', '2025-12-09 18:03:32'),
(34, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/news', NULL, NULL, '2025-12-09 18:03:41', '2025-12-09 18:03:41', '2025-12-09 18:03:41'),
(35, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:03:43', '2025-12-09 18:03:43', '2025-12-09 18:03:43'),
(36, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:03:45', '2025-12-09 18:03:45', '2025-12-09 18:03:45'),
(37, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:03:48', '2025-12-09 18:03:48', '2025-12-09 18:03:48'),
(38, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/news', NULL, NULL, '2025-12-09 18:03:55', '2025-12-09 18:03:55', '2025-12-09 18:03:55'),
(39, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:03:58', '2025-12-09 18:03:58', '2025-12-09 18:03:58'),
(40, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:04:00', '2025-12-09 18:04:00', '2025-12-09 18:04:00'),
(41, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:04:04', '2025-12-09 18:04:04', '2025-12-09 18:04:04'),
(42, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:04:06', '2025-12-09 18:04:06', '2025-12-09 18:04:06'),
(43, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:04:09', '2025-12-09 18:04:09', '2025-12-09 18:04:09'),
(44, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:04:29', '2025-12-09 18:04:29', '2025-12-09 18:04:29'),
(45, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:04:31', '2025-12-09 18:04:31', '2025-12-09 18:04:31'),
(46, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:04:34', '2025-12-09 18:04:34', '2025-12-09 18:04:34'),
(47, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:04:37', '2025-12-09 18:04:37', '2025-12-09 18:04:37'),
(48, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:04:40', '2025-12-09 18:04:40', '2025-12-09 18:04:40'),
(49, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/contact', NULL, NULL, '2025-12-09 18:04:47', '2025-12-09 18:04:47', '2025-12-09 18:04:47'),
(50, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:04:50', '2025-12-09 18:04:50', '2025-12-09 18:04:50'),
(51, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:04:53', '2025-12-09 18:04:53', '2025-12-09 18:04:53'),
(52, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:04:58', '2025-12-09 18:04:58', '2025-12-09 18:04:58'),
(53, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:05:01', '2025-12-09 18:05:01', '2025-12-09 18:05:01'),
(54, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:05:06', '2025-12-09 18:05:06', '2025-12-09 18:05:06'),
(55, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:05:08', '2025-12-09 18:05:08', '2025-12-09 18:05:08'),
(56, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:05:12', '2025-12-09 18:05:12', '2025-12-09 18:05:12'),
(57, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:05:14', '2025-12-09 18:05:14', '2025-12-09 18:05:14'),
(58, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:05:43', '2025-12-09 18:05:43', '2025-12-09 18:05:43'),
(59, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/contact', NULL, NULL, '2025-12-09 18:05:46', '2025-12-09 18:05:46', '2025-12-09 18:05:46'),
(60, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:06:16', '2025-12-09 18:06:16', '2025-12-09 18:06:16'),
(61, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:06:19', '2025-12-09 18:06:19', '2025-12-09 18:06:19'),
(62, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:06:22', '2025-12-09 18:06:22', '2025-12-09 18:06:22'),
(63, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:06:24', '2025-12-09 18:06:24', '2025-12-09 18:06:24'),
(64, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:06:46', '2025-12-09 18:06:46', '2025-12-09 18:06:46'),
(65, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:06:48', '2025-12-09 18:06:48', '2025-12-09 18:06:48'),
(66, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:06:51', '2025-12-09 18:06:51', '2025-12-09 18:06:51'),
(67, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:05', '2025-12-09 18:07:05', '2025-12-09 18:07:05'),
(68, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:07', '2025-12-09 18:07:07', '2025-12-09 18:07:07'),
(69, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:09', '2025-12-09 18:07:09', '2025-12-09 18:07:09'),
(70, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:13', '2025-12-09 18:07:13', '2025-12-09 18:07:13'),
(71, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:15', '2025-12-09 18:07:15', '2025-12-09 18:07:15'),
(72, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:17', '2025-12-09 18:07:17', '2025-12-09 18:07:17'),
(73, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:19', '2025-12-09 18:07:19', '2025-12-09 18:07:19'),
(74, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:22', '2025-12-09 18:07:22', '2025-12-09 18:07:22'),
(75, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:24', '2025-12-09 18:07:24', '2025-12-09 18:07:24'),
(76, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:25', '2025-12-09 18:07:25', '2025-12-09 18:07:25'),
(77, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:29', '2025-12-09 18:07:29', '2025-12-09 18:07:29'),
(78, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:32', '2025-12-09 18:07:32', '2025-12-09 18:07:32'),
(79, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:38', '2025-12-09 18:07:38', '2025-12-09 18:07:38'),
(80, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/contact', NULL, NULL, '2025-12-09 18:07:44', '2025-12-09 18:07:44', '2025-12-09 18:07:44'),
(81, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:47', '2025-12-09 18:07:47', '2025-12-09 18:07:47'),
(82, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:49', '2025-12-09 18:07:49', '2025-12-09 18:07:49'),
(83, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:51', '2025-12-09 18:07:51', '2025-12-09 18:07:51'),
(84, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:54', '2025-12-09 18:07:54', '2025-12-09 18:07:54'),
(85, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:07:58', '2025-12-09 18:07:58', '2025-12-09 18:07:58'),
(86, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs/20', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:08:02', '2025-12-09 18:08:02', '2025-12-09 18:08:02'),
(87, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/contact', NULL, NULL, '2025-12-09 18:08:05', '2025-12-09 18:08:05', '2025-12-09 18:08:05'),
(88, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:08:09', '2025-12-09 18:08:09', '2025-12-09 18:08:09'),
(89, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:08:11', '2025-12-09 18:08:11', '2025-12-09 18:08:11'),
(90, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:08:19', '2025-12-09 18:08:19', '2025-12-09 18:08:19'),
(91, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:08:21', '2025-12-09 18:08:21', '2025-12-09 18:08:21'),
(92, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:08:23', '2025-12-09 18:08:23', '2025-12-09 18:08:23'),
(93, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:08:26', '2025-12-09 18:08:26', '2025-12-09 18:08:26'),
(94, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/contact', NULL, NULL, '2025-12-09 18:08:48', '2025-12-09 18:08:48', '2025-12-09 18:08:48'),
(95, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:08:52', '2025-12-09 18:08:52', '2025-12-09 18:08:52'),
(96, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:08:54', '2025-12-09 18:08:54', '2025-12-09 18:08:54'),
(97, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:03', '2025-12-09 18:10:03', '2025-12-09 18:10:03'),
(98, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:05', '2025-12-09 18:10:05', '2025-12-09 18:10:05'),
(99, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:10:16', '2025-12-09 18:10:16', '2025-12-09 18:10:16'),
(100, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:20', '2025-12-09 18:10:20', '2025-12-09 18:10:20'),
(101, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:22', '2025-12-09 18:10:22', '2025-12-09 18:10:22'),
(102, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:25', '2025-12-09 18:10:25', '2025-12-09 18:10:25'),
(103, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:32', '2025-12-09 18:10:32', '2025-12-09 18:10:32'),
(104, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:35', '2025-12-09 18:10:35', '2025-12-09 18:10:35'),
(105, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:38', '2025-12-09 18:10:38', '2025-12-09 18:10:38'),
(106, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:42', '2025-12-09 18:10:42', '2025-12-09 18:10:42'),
(107, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:49', '2025-12-09 18:10:49', '2025-12-09 18:10:49'),
(108, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:55', '2025-12-09 18:10:55', '2025-12-09 18:10:55'),
(109, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:10:58', '2025-12-09 18:10:58', '2025-12-09 18:10:58'),
(110, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:11:00', '2025-12-09 18:11:00', '2025-12-09 18:11:00'),
(111, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:11:08', '2025-12-09 18:11:08', '2025-12-09 18:11:08'),
(112, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:11:09', '2025-12-09 18:11:09', '2025-12-09 18:11:09'),
(113, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:11:11', '2025-12-09 18:11:11', '2025-12-09 18:11:11'),
(114, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:11:18', '2025-12-09 18:11:18', '2025-12-09 18:11:18'),
(115, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:11:20', '2025-12-09 18:11:20', '2025-12-09 18:11:20'),
(116, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:11:24', '2025-12-09 18:11:24', '2025-12-09 18:11:24'),
(117, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:14:29', '2025-12-09 18:14:29', '2025-12-09 18:14:29'),
(118, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:14:31', '2025-12-09 18:14:31', '2025-12-09 18:14:31'),
(119, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:16:01', '2025-12-09 18:16:01', '2025-12-09 18:16:01'),
(120, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:16:04', '2025-12-09 18:16:04', '2025-12-09 18:16:04'),
(121, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:16:10', '2025-12-09 18:16:10', '2025-12-09 18:16:10'),
(122, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:17:19', '2025-12-09 18:17:19', '2025-12-09 18:17:19'),
(123, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:17:22', '2025-12-09 18:17:22', '2025-12-09 18:17:22'),
(124, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:17:34', '2025-12-09 18:17:34', '2025-12-09 18:17:34'),
(125, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:17:40', '2025-12-09 18:17:40', '2025-12-09 18:17:40'),
(126, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:18:11', '2025-12-09 18:18:11', '2025-12-09 18:18:11'),
(127, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:18:20', '2025-12-09 18:18:20', '2025-12-09 18:18:20'),
(128, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:18:22', '2025-12-09 18:18:22', '2025-12-09 18:18:22'),
(129, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:19:00', '2025-12-09 18:19:00', '2025-12-09 18:19:00'),
(130, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:19:06', '2025-12-09 18:19:06', '2025-12-09 18:19:06'),
(131, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:20:39', '2025-12-09 18:20:39', '2025-12-09 18:20:39'),
(132, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:21:08', '2025-12-09 18:21:08', '2025-12-09 18:21:08'),
(133, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/en/jobs', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:21:17', '2025-12-09 18:21:17', '2025-12-09 18:21:17'),
(134, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:21:36', '2025-12-09 18:21:36', '2025-12-09 18:21:36'),
(135, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:21:52', '2025-12-09 18:21:52', '2025-12-09 18:21:52'),
(136, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:22:00', '2025-12-09 18:22:00', '2025-12-09 18:22:00'),
(137, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/contact', 'http://127.0.0.1:8000/ar/merchant', NULL, NULL, '2025-12-09 18:22:04', '2025-12-09 18:22:04', '2025-12-09 18:22:04'),
(138, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:22:07', '2025-12-09 18:22:07', '2025-12-09 18:22:07'),
(139, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:22:19', '2025-12-09 18:22:19', '2025-12-09 18:22:19'),
(140, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:22:28', '2025-12-09 18:22:28', '2025-12-09 18:22:28'),
(141, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:22:32', '2025-12-09 18:22:32', '2025-12-09 18:22:32'),
(142, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/contact', 'http://127.0.0.1:8000/ar/merchant', NULL, NULL, '2025-12-09 18:22:46', '2025-12-09 18:22:46', '2025-12-09 18:22:46'),
(143, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/contact', NULL, NULL, '2025-12-09 18:23:03', '2025-12-09 18:23:03', '2025-12-09 18:23:03'),
(144, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:23:05', '2025-12-09 18:23:05', '2025-12-09 18:23:05'),
(145, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/contact', NULL, NULL, '2025-12-09 18:23:08', '2025-12-09 18:23:08', '2025-12-09 18:23:08'),
(146, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/contact', NULL, NULL, '2025-12-09 18:23:15', '2025-12-09 18:23:15', '2025-12-09 18:23:15'),
(147, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:23:20', '2025-12-09 18:23:20', '2025-12-09 18:23:20'),
(148, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/livewire/update', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:23:23', '2025-12-09 18:23:23', '2025-12-09 18:23:23'),
(149, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:23:26', '2025-12-09 18:23:26', '2025-12-09 18:23:26'),
(150, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs?category=1', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:23:28', '2025-12-09 18:23:28', '2025-12-09 18:23:28'),
(151, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs?category=2', 'http://127.0.0.1:8000/ar/jobs?category=1', NULL, NULL, '2025-12-09 18:23:31', '2025-12-09 18:23:31', '2025-12-09 18:23:31'),
(152, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs?category=4', 'http://127.0.0.1:8000/ar/jobs?category=2', NULL, NULL, '2025-12-09 18:23:34', '2025-12-09 18:23:34', '2025-12-09 18:23:34'),
(153, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/jobs?category=4', NULL, NULL, '2025-12-09 18:23:36', '2025-12-09 18:23:36', '2025-12-09 18:23:36'),
(154, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs?category=1', NULL, NULL, NULL, '2025-12-09 18:23:41', '2025-12-09 18:23:41', '2025-12-09 18:23:41'),
(155, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs?category=1', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, '2025-12-09 18:23:42', '2025-12-09 18:23:42', '2025-12-09 18:23:42'),
(156, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs?category=2', 'http://127.0.0.1:8000/ar/jobs?category=1', NULL, NULL, '2025-12-09 18:23:48', '2025-12-09 18:23:48', '2025-12-09 18:23:48'),
(157, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs?category=3', 'http://127.0.0.1:8000/ar/jobs?category=2', NULL, NULL, '2025-12-09 18:23:50', '2025-12-09 18:23:50', '2025-12-09 18:23:50'),
(158, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs?category=5', 'http://127.0.0.1:8000/ar/jobs?category=3', NULL, NULL, '2025-12-09 18:23:53', '2025-12-09 18:23:53', '2025-12-09 18:23:53'),
(159, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', 'http://127.0.0.1:8000/ar/jobs?category=5', NULL, NULL, '2025-12-09 18:23:55', '2025-12-09 18:23:55', '2025-12-09 18:23:55'),
(160, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/2.1.49 Chrome/138.0.7204.251 Electron/37.7.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:23:58', '2025-12-09 18:23:58', '2025-12-09 18:23:58'),
(161, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'http://127.0.0.1:8000/ar/jobs', NULL, NULL, NULL, '2025-12-09 18:25:11', '2025-12-09 18:25:11', '2025-12-09 18:25:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_evaluations`
--
ALTER TABLE `about_us_evaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_maps`
--
ALTER TABLE `about_us_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_panner_markettings`
--
ALTER TABLE `about_us_panner_markettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_test_mintionals`
--
ALTER TABLE `about_us_test_mintionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abut_us_bottom_panners`
--
ALTER TABLE `abut_us_bottom_panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `coditions`
--
ALTER TABLE `coditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_panners`
--
ALTER TABLE `contact_panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_requests`
--
ALTER TABLE `contact_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluationtranslations`
--
ALTER TABLE `evaluationtranslations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fetures_panners`
--
ALTER TABLE `fetures_panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feture_panner_translations`
--
ALTER TABLE `feture_panner_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feture_panner_translations_feture_panner_id_locale_unique` (`feture_panner_id`,`locale`),
  ADD KEY `feture_panner_translations_locale_index` (`locale`);

--
-- Indexes for table `hero_home_mains`
--
ALTER TABLE `hero_home_mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepanner_markettings`
--
ALTER TABLE `homepanner_markettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_bottom_panners`
--
ALTER TABLE `home_bottom_panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_panner_partners`
--
ALTER TABLE `home_panner_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_panner_q_a_s`
--
ALTER TABLE `home_panner_q_a_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobcategories`
--
ALTER TABLE `jobcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_panners`
--
ALTER TABLE `jobs_panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchantsteps_panners`
--
ALTER TABLE `merchantsteps_panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant_bottom_panners`
--
ALTER TABLE `merchant_bottom_panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant_motivation_panners`
--
ALTER TABLE `merchant_motivation_panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panners`
--
ALTER TABLE `panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panner_translations`
--
ALTER TABLE `panner_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polices`
--
ALTER TABLE `polices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suplier_bottom_panners`
--
ALTER TABLE `suplier_bottom_panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suplier_panners`
--
ALTER TABLE `suplier_panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_categories`
--
ALTER TABLE `support_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_contacts`
--
ALTER TABLE `support_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_panners`
--
ALTER TABLE `support_panners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_translations`
--
ALTER TABLE `support_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_translations_jsoning_index` (`jsoning`(768));

--
-- Indexes for table `support_us`
--
ALTER TABLE `support_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_evaluations`
--
ALTER TABLE `about_us_evaluations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us_maps`
--
ALTER TABLE `about_us_maps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_us_panner_markettings`
--
ALTER TABLE `about_us_panner_markettings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us_test_mintionals`
--
ALTER TABLE `about_us_test_mintionals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `abut_us_bottom_panners`
--
ALTER TABLE `abut_us_bottom_panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coditions`
--
ALTER TABLE `coditions`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_panners`
--
ALTER TABLE `contact_panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_requests`
--
ALTER TABLE `contact_requests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluationtranslations`
--
ALTER TABLE `evaluationtranslations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fetures_panners`
--
ALTER TABLE `fetures_panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feture_panner_translations`
--
ALTER TABLE `feture_panner_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_home_mains`
--
ALTER TABLE `hero_home_mains`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepanner_markettings`
--
ALTER TABLE `homepanner_markettings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_bottom_panners`
--
ALTER TABLE `home_bottom_panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_panner_partners`
--
ALTER TABLE `home_panner_partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_panner_q_a_s`
--
ALTER TABLE `home_panner_q_a_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobcategories`
--
ALTER TABLE `jobcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs_panners`
--
ALTER TABLE `jobs_panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merchantsteps_panners`
--
ALTER TABLE `merchantsteps_panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `merchant_bottom_panners`
--
ALTER TABLE `merchant_bottom_panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchant_motivation_panners`
--
ALTER TABLE `merchant_motivation_panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `panners`
--
ALTER TABLE `panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panner_translations`
--
ALTER TABLE `panner_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `polices`
--
ALTER TABLE `polices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  MODIFY `permission_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suplier_bottom_panners`
--
ALTER TABLE `suplier_bottom_panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suplier_panners`
--
ALTER TABLE `suplier_panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `support_categories`
--
ALTER TABLE `support_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `support_contacts`
--
ALTER TABLE `support_contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_panners`
--
ALTER TABLE `support_panners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_translations`
--
ALTER TABLE `support_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_us`
--
ALTER TABLE `support_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
