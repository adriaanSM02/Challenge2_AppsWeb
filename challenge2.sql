-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2023 a las 01:31:40
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `challenge2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `phone`, `address`, `tax_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Libby Gulgowski IV', 'cdeckow@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7094270285', 'fi6XtrgHks', '241', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(2, 'Ms. Susanna Armstrong IV', 'tkiehn@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7227276393', 'iqW9LADb6M', '613', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(3, 'Mr. Sim Franecki Sr.', 'botsford.junius@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7095108028', 'KiX4txKGwi', '34', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(4, 'Marvin Heathcote', 'amertz@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7016009192', 'yxuzsfJzXa', '516', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(5, 'Celia Barrows', 'aylin.lakin@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7225823469', 'wmk1zHromC', '691', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(6, 'Prof. Monroe Langworth', 'jo.roberts@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7165285092', 'Ttrg9V4jiA', '991', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(7, 'Dr. Conner Kerluke DDS', 'windler.shakira@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7136571701', 'jDiaJKbywh', '28', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(8, 'Eve Kub', 'oconnell.yasmin@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7199222148', 'WErUyTLytT', '862', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(9, 'Chesley Gutkowski II', 'vallie.braun@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7140740537', 'NNbwdCAV3C', '538', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(10, 'Prof. Frederick Orn Jr.', 'zbeer@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7154949749', 'C98o0kDD1d', '830', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(11, 'Evangeline Fisher', 'melyssa.hegmann@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7198018792', 'B72GaaS0NP', '453', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(12, 'Abbigail Nolan', 'ybergstrom@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7116812010', 'st7G076tPF', '293', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(13, 'Alyce Lebsack', 'cade.king@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7047621400', 'et8Wt6Lx4j', '259', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(14, 'Ms. Kimberly Goyette', 'sgrady@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7141773440', '483JRJ754P', '343', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(15, 'Mr. King Dooley IV', 'harrison.cummings@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC', '7178310348', 'CVSwWPMwAM', '75', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_08_173236_create_clients_table', 1),
(6, '2023_04_08_173246_create_staff_table', 1),
(7, '2023_04_08_173254_create_orders_table', 1),
(8, '2023_04_08_173302_create_orderdetails_table', 1),
(9, '2023_04_08_173310_create_products_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `quantity`, `active`, `created_at`, `updated_at`) VALUES
(1, 356, 329, 57, 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(2, 269, 70, 55, 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(3, 792, 612, 79, 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(4, 560, 280, 89, 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(5, 684, 858, 66, 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(6, 749, 702, 70, 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(7, 837, 612, 87, 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(8, 383, 464, 55, 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(9, 869, 388, 96, 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(10, 395, 118, 83, 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(11, 628, 199, 73, 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(12, 25, 53, 99, 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(13, 620, 986, 82, 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(14, 122, 779, 71, 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(15, 330, 211, 80, 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `total` double(8,2) NOT NULL,
  `subtotal` double(8,2) NOT NULL,
  `vat` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateNtime` datetime NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `staff_id`, `total`, `subtotal`, `vat`, `status`, `notes`, `dateNtime`, `photo1`, `photo2`, `active`, `created_at`, `updated_at`) VALUES
(1, 374, 664, 59.34, 54.96, 77.94, 'sale', 'Comments', '2023-03-12 21:27:26', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(2, 282, 183, 99.10, 78.27, 70.28, 'sale', 'Comments', '2023-03-15 00:55:17', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(3, 130, 706, 74.11, 67.28, 67.68, 'sale', 'Comments', '2023-04-10 10:21:49', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(4, 747, 561, 93.98, 83.06, 72.96, 'sale', 'Comments', '2023-03-23 00:13:12', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(5, 851, 621, 79.54, 73.67, 94.62, 'sale', 'Comments', '2023-04-08 15:40:50', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(6, 161, 379, 92.63, 85.11, 91.36, 'sale', 'Comments', '2023-04-01 02:27:54', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(7, 447, 163, 97.14, 64.19, 78.16, 'sale', 'Comments', '2023-03-14 20:01:54', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(8, 676, 511, 51.66, 87.30, 70.43, 'sale', 'Comments', '2023-04-08 03:37:40', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(9, 682, 353, 77.16, 90.94, 74.22, 'sale', 'Comments', '2023-03-16 22:00:10', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(10, 599, 666, 77.42, 51.98, 94.44, 'sale', 'Comments', '2023-03-16 11:14:00', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(11, 524, 820, 58.88, 83.94, 81.23, 'sale', 'Comments', '2023-03-23 16:00:34', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(12, 342, 181, 63.19, 66.97, 52.90, 'sale', 'Comments', '2023-03-27 20:28:22', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(13, 790, 625, 89.97, 71.47, 55.94, 'sale', 'Comments', '2023-03-12 09:33:09', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(14, 285, 911, 83.43, 98.45, 95.69, 'sale', 'Comments', '2023-04-05 19:17:59', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(15, 974, 130, 75.85, 89.24, 94.63, 'sale', 'Comments', '2023-04-06 03:16:56', 'https://picsum.photos/400/200', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `stock`, `price`, `description`, `photo`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Francisca Conn V', 522, 57.79, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(2, 'Nicolette Dietrich', 935, 87.91, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(3, 'Georgianna Lueilwitz', 173, 67.89, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(4, 'Dr. Alanna Greenfelder Jr.', 157, 90.64, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(5, 'Cordia Mitchell', 536, 71.43, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(6, 'Rowena Reynolds', 821, 84.96, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(7, 'Wilson Watsica', 258, 93.78, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(8, 'Josefa Prosacco MD', 786, 57.54, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(9, 'Erika Wiza', 868, 83.23, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(10, 'Mr. Dejuan Kassulke DDS', 772, 67.42, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(11, 'Margarete Bins', 145, 72.46, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(12, 'Bertha Batz', 448, 91.43, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(13, 'Mr. Mervin Stracke', 976, 58.80, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(14, 'Kristina Torp', 1000, 68.55, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(15, 'Isidro Parisian', 696, 78.66, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga esse ut totam rem. Nobis architecto unde in distinctio aliquid laborum ducimus odio adipisci explicabo odit sint, voluptate velit iusto blanditiis.', 'https://picsum.photos/400/200', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `staff`
--

INSERT INTO `staff` (`id`, `name`, `role`, `email`, `password`, `tax_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Kavon Mayert', 'Odell Jakubowski V', 'heichmann@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '155', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(2, 'Conrad Dietrich', 'Mr. Chase Kohler V', 'georgianna.schuster@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '13', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(3, 'Monroe Bernhard', 'Elyse Gerlach', 'scorkery@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '114', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(4, 'Amira Cassin', 'Mac Sanford', 'susie41@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '91', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(5, 'Prof. Jakayla Heidenreich IV', 'Dr. Roger Lockman', 'xrohan@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '62', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(6, 'Aliza Bednar', 'Prof. Mittie O\'Hara', 'orn.kelton@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '180', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(7, 'Raymond Ebert', 'Harvey Quigley', 'schaefer.curt@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '39', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(8, 'Prof. Modesto Herzog', 'Emery Sawayn', 'aubrey17@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '12', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(9, 'Sheridan Flatley', 'Alisha Dibbert', 'deckow.shakira@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '142', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(10, 'Moses Schulist', 'Johan Connelly', 'leannon.magdalena@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '13', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(11, 'Estella Kunde', 'Ora Hoppe', 'dickinson.oral@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '153', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(12, 'Novella Bartell', 'Werner Hayes', 'horacio96@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '165', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(13, 'Rosa Pacocha', 'Mauricio Goyette', 'santa66@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '101', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(14, 'Alphonso Gibson', 'Urban Hettinger', 'cmclaughlin@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '74', 0, '2023-04-11 03:52:40', '2023-04-11 03:52:40'),
(15, 'Prof. Ezequiel Raynor', 'Karlee Schaden', 'samanta.paucek@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '80', 1, '2023-04-11 03:52:40', '2023-04-11 03:52:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
