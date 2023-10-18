-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 06:34:31
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `thrustfile`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `action_events`
--

CREATE TABLE `action_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` char(36) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `actionable_type` varchar(255) NOT NULL,
  `actionable_id` bigint(20) UNSIGNED NOT NULL,
  `target_type` varchar(255) NOT NULL,
  `target_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fields` text NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'running',
  `exception` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `original` mediumtext DEFAULT NULL,
  `changes` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `action_events`
--

INSERT INTO `action_events` (`id`, `batch_id`, `user_id`, `name`, `actionable_type`, `actionable_id`, `target_type`, `target_id`, `model_type`, `model_id`, `fields`, `status`, `exception`, `created_at`, `updated_at`, `original`, `changes`) VALUES
(1, '99d9dac8-8505-4805-806b-b8e505b5838e', 1, 'Create', 'App\\Models\\Entidad', 1, 'App\\Models\\Entidad', 1, 'App\\Models\\Entidad', 1, '', 'finished', '', '2023-08-10 00:32:55', '2023-08-10 00:32:55', NULL, '{\"nombre\":\"claro\",\"razon_social\":\"claro sac\",\"num_razon\":\"123456789987\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:32:55.000000Z\",\"created_at\":\"2023-08-09T19:32:55.000000Z\",\"id\":1}'),
(2, '99d9db4f-bf08-43df-a636-04c8fcb02537', 1, 'Create', 'App\\Models\\Entidad', 2, 'App\\Models\\Entidad', 2, 'App\\Models\\Entidad', 2, '', 'finished', '', '2023-08-10 00:34:23', '2023-08-10 00:34:23', NULL, '{\"nombre\":\"Movistar\",\"razon_social\":\"movistar sac\",\"num_razon\":\"456445642121\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:34:23.000000Z\",\"created_at\":\"2023-08-09T19:34:23.000000Z\",\"id\":2}'),
(3, '99d9db69-544f-46eb-b7cd-42ff7a318a92', 1, 'Create', 'App\\Models\\Entidad', 3, 'App\\Models\\Entidad', 3, 'App\\Models\\Entidad', 3, '', 'finished', '', '2023-08-10 00:34:40', '2023-08-10 00:34:40', NULL, '{\"nombre\":\"Entel\",\"razon_social\":\"entel sac\",\"num_razon\":\"234234324324\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:34:40.000000Z\",\"created_at\":\"2023-08-09T19:34:40.000000Z\",\"id\":3}'),
(4, '99d9db8e-65d1-404a-8715-ff251ee389a1', 1, 'Create', 'App\\Models\\Entidad', 4, 'App\\Models\\Entidad', 4, 'App\\Models\\Entidad', 4, '', 'finished', '', '2023-08-10 00:35:04', '2023-08-10 00:35:04', NULL, '{\"nombre\":\"Bitel\",\"razon_social\":\"Bitel sac\",\"num_razon\":\"021212121212\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:35:04.000000Z\",\"created_at\":\"2023-08-09T19:35:04.000000Z\",\"id\":4}'),
(5, '99d9dc0c-f97b-4698-bf29-3c4567aeba6c', 1, 'Create', 'App\\Models\\Entidad', 5, 'App\\Models\\Entidad', 5, 'App\\Models\\Entidad', 5, '', 'finished', '', '2023-08-10 00:36:27', '2023-08-10 00:36:27', NULL, '{\"nombre\":\"Gosac\",\"razon_social\":\"Go sac\",\"num_razon\":\"4563215888\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:36:27.000000Z\",\"created_at\":\"2023-08-09T19:36:27.000000Z\",\"id\":5}'),
(6, '99d9dc9a-ac19-4fd2-a99a-4dffa28e73d3', 1, 'Create', 'App\\Models\\Departamento', 1, 'App\\Models\\Departamento', 1, 'App\\Models\\Departamento', 1, '', 'finished', '', '2023-08-10 00:38:00', '2023-08-10 00:38:00', NULL, '{\"entidad_id\":1,\"nombre\":\"Finanzas\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:38:00.000000Z\",\"created_at\":\"2023-08-09T19:38:00.000000Z\",\"id\":1}'),
(7, '99d9dcac-be98-4bbf-b6e7-8598c190a2a6', 1, 'Create', 'App\\Models\\Departamento', 2, 'App\\Models\\Departamento', 2, 'App\\Models\\Departamento', 2, '', 'finished', '', '2023-08-10 00:38:12', '2023-08-10 00:38:12', NULL, '{\"entidad_id\":2,\"nombre\":\"Tecnologia de informacion\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:38:12.000000Z\",\"created_at\":\"2023-08-09T19:38:12.000000Z\",\"id\":2}'),
(8, '99d9dccd-47de-43e7-b9d5-50402617f4ec', 1, 'Create', 'App\\Models\\Departamento', 3, 'App\\Models\\Departamento', 3, 'App\\Models\\Departamento', 3, '', 'finished', '', '2023-08-10 00:38:33', '2023-08-10 00:38:33', NULL, '{\"entidad_id\":5,\"nombre\":\"Finanzas\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:38:33.000000Z\",\"created_at\":\"2023-08-09T19:38:33.000000Z\",\"id\":3}'),
(9, '99d9dcda-4339-46ee-bd8a-4f00d03ba6ff', 1, 'Create', 'App\\Models\\Departamento', 4, 'App\\Models\\Departamento', 4, 'App\\Models\\Departamento', 4, '', 'finished', '', '2023-08-10 00:38:42', '2023-08-10 00:38:42', NULL, '{\"entidad_id\":4,\"nombre\":\"Recursos humanos\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:38:42.000000Z\",\"created_at\":\"2023-08-09T19:38:42.000000Z\",\"id\":4}'),
(10, '99d9dce8-35af-4ed5-a937-9fe7f88ddaaf', 1, 'Create', 'App\\Models\\Departamento', 5, 'App\\Models\\Departamento', 5, 'App\\Models\\Departamento', 5, '', 'finished', '', '2023-08-10 00:38:51', '2023-08-10 00:38:51', NULL, '{\"entidad_id\":2,\"nombre\":\"Recursos humanos\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:38:51.000000Z\",\"created_at\":\"2023-08-09T19:38:51.000000Z\",\"id\":5}'),
(11, '99d9dd52-5f27-4c68-b49f-6f7c1c55ed98', 1, 'Create', 'App\\Models\\Departamento', 6, 'App\\Models\\Departamento', 6, 'App\\Models\\Departamento', 6, '', 'finished', '', '2023-08-10 00:40:01', '2023-08-10 00:40:01', NULL, '{\"entidad_id\":1,\"nombre\":\"Logistica\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:40:01.000000Z\",\"created_at\":\"2023-08-09T19:40:01.000000Z\",\"id\":6}'),
(12, '99d9e04a-7785-4402-854b-ae654da566e9', 1, 'Create', 'App\\Models\\Suscripcion', 1, 'App\\Models\\Suscripcion', 1, 'App\\Models\\Suscripcion', 1, '', 'finished', '', '2023-08-10 00:48:19', '2023-08-10 00:48:19', NULL, '{\"nombre\":\"Basico\",\"precio\":\"100\",\"cant_usuarios\":\"10\",\"cant_descargas\":\"10\",\"fecha_inicio\":\"2023-08-09 17:00:00\",\"fecha_fin\":\"2023-08-31 17:00:00\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:48:19.000000Z\",\"created_at\":\"2023-08-09T19:48:19.000000Z\",\"id\":1}'),
(13, '99d9e246-dedb-40b4-9fe0-6072ed99bc0a', 1, 'Create', 'App\\Models\\Suscripcion', 2, 'App\\Models\\Suscripcion', 2, 'App\\Models\\Suscripcion', 2, '', 'finished', '', '2023-08-10 00:53:52', '2023-08-10 00:53:52', NULL, '{\"nombre\":\"intermedio\",\"precio\":\"150\",\"cant_usuarios\":\"15\",\"cant_descargas\":\"15\",\"meses\":\"15\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:53:52.000000Z\",\"created_at\":\"2023-08-09T19:53:52.000000Z\",\"id\":2}'),
(14, '99d9e25c-121a-4f5d-8e03-1ec76d289491', 1, 'Create', 'App\\Models\\Suscripcion', 3, 'App\\Models\\Suscripcion', 3, 'App\\Models\\Suscripcion', 3, '', 'finished', '', '2023-08-10 00:54:06', '2023-08-10 00:54:06', NULL, '{\"nombre\":\"Avanzado\",\"precio\":\"200\",\"cant_usuarios\":\"20\",\"cant_descargas\":\"20\",\"meses\":\"20\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T19:54:06.000000Z\",\"created_at\":\"2023-08-09T19:54:06.000000Z\",\"id\":3}'),
(15, '99d9e2ba-b55b-477d-9d92-63c494001bcc', 1, 'Create', 'App\\Models\\User', 2, 'App\\Models\\User', 2, 'App\\Models\\User', 2, '', 'finished', '', '2023-08-10 00:55:08', '2023-08-10 00:55:08', NULL, '{\"name\":\"claro\",\"email\":\"claro@gmail.com\",\"updated_at\":\"2023-08-09T19:55:08.000000Z\",\"created_at\":\"2023-08-09T19:55:08.000000Z\",\"id\":2}'),
(16, '99d9e2d5-270a-4b97-bc32-aed996194901', 1, 'Create', 'App\\Models\\User', 3, 'App\\Models\\User', 3, 'App\\Models\\User', 3, '', 'finished', '', '2023-08-10 00:55:25', '2023-08-10 00:55:25', NULL, '{\"name\":\"movistar\",\"email\":\"movistar@gmail.com\",\"updated_at\":\"2023-08-09T19:55:25.000000Z\",\"created_at\":\"2023-08-09T19:55:25.000000Z\",\"id\":3}'),
(17, '99da1dcd-3c73-4db1-af14-14abecc81e49', 1, 'Create', 'App\\Models\\Wallet', 1, 'App\\Models\\Wallet', 1, 'App\\Models\\Wallet', 1, '', 'finished', '', '2023-08-10 03:40:19', '2023-08-10 03:40:19', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T22:40:19.000000Z\",\"created_at\":\"2023-08-09T22:40:19.000000Z\",\"id\":1}'),
(18, '99da20cc-90e4-4b05-8e45-aa768c5617f2', 1, 'Create', 'App\\Models\\Wallet', 151881, 'App\\Models\\Wallet', 151881, 'App\\Models\\Wallet', 151881, '', 'finished', '', '2023-08-10 03:48:41', '2023-08-10 03:48:41', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T22:48:41.000000Z\",\"created_at\":\"2023-08-09T22:48:41.000000Z\",\"id\":151881}'),
(19, '99da20fd-7c87-43bc-9254-4853285d43a2', 1, 'Create', 'App\\Models\\Wallet', 151882, 'App\\Models\\Wallet', 151882, 'App\\Models\\Wallet', 151882, '', 'finished', '', '2023-08-10 03:49:14', '2023-08-10 03:49:14', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T22:49:14.000000Z\",\"created_at\":\"2023-08-09T22:49:14.000000Z\",\"id\":151882}'),
(20, '99da2102-6219-4967-bff3-cfb6f70f5b5d', 1, 'Create', 'App\\Models\\Wallet', 151883, 'App\\Models\\Wallet', 151883, 'App\\Models\\Wallet', 151883, '', 'finished', '', '2023-08-10 03:49:17', '2023-08-10 03:49:17', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T22:49:17.000000Z\",\"created_at\":\"2023-08-09T22:49:17.000000Z\",\"id\":151883}'),
(21, '99da2183-d5b1-496c-9154-d7cce8059c30', 1, 'Create', 'App\\Models\\Wallet', 151884, 'App\\Models\\Wallet', 151884, 'App\\Models\\Wallet', 151884, '', 'finished', '', '2023-08-10 03:50:42', '2023-08-10 03:50:42', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T22:50:42.000000Z\",\"created_at\":\"2023-08-09T22:50:42.000000Z\",\"id\":151884}'),
(22, '99da222c-af90-416b-ba99-9ef8c96454d8', 1, 'Create', 'App\\Models\\Wallet', 1, 'App\\Models\\Wallet', 1, 'App\\Models\\Wallet', 1, '', 'finished', '', '2023-08-10 03:52:32', '2023-08-10 03:52:32', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T22:52:32.000000Z\",\"created_at\":\"2023-08-09T22:52:32.000000Z\",\"id\":1}'),
(23, '99da2235-921e-4c6b-84ba-742ecd8218ee', 1, 'Create', 'App\\Models\\Wallet', 2, 'App\\Models\\Wallet', 2, 'App\\Models\\Wallet', 2, '', 'finished', '', '2023-08-10 03:52:38', '2023-08-10 03:52:38', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T22:52:38.000000Z\",\"created_at\":\"2023-08-09T22:52:38.000000Z\",\"id\":2}'),
(24, '99da2251-86f3-4902-aec4-f303bfe64d14', 1, 'Create', 'App\\Models\\Wallet', 3, 'App\\Models\\Wallet', 3, 'App\\Models\\Wallet', 3, '', 'finished', '', '2023-08-10 03:52:56', '2023-08-10 03:52:56', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T22:52:56.000000Z\",\"created_at\":\"2023-08-09T22:52:56.000000Z\",\"id\":3}'),
(25, '99da2583-aab0-41b0-b56b-ee9f63a1d092', 1, 'Create', 'App\\Models\\Wallet', 6, 'App\\Models\\Wallet', 6, 'App\\Models\\Wallet', 6, '', 'finished', '', '2023-08-10 04:01:53', '2023-08-10 04:01:53', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T23:01:52.000000Z\",\"created_at\":\"2023-08-09T23:01:52.000000Z\",\"id\":6}'),
(26, '99da25aa-b1de-41c8-b202-934d65855642', 1, 'Create', 'App\\Models\\Wallet', 7, 'App\\Models\\Wallet', 7, 'App\\Models\\Wallet', 7, '', 'finished', '', '2023-08-10 04:02:18', '2023-08-10 04:02:18', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T23:02:18.000000Z\",\"created_at\":\"2023-08-09T23:02:18.000000Z\",\"id\":7}'),
(27, '99da263c-0570-4471-988e-c2257a0f60d3', 1, 'Create', 'App\\Models\\Wallet', 1, 'App\\Models\\Wallet', 1, 'App\\Models\\Wallet', 1, '', 'finished', '', '2023-08-10 04:03:53', '2023-08-10 04:03:53', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T23:03:53.000000Z\",\"created_at\":\"2023-08-09T23:03:53.000000Z\",\"id\":1}'),
(28, '99da263e-aa3e-4608-a4c4-021d064a9653', 1, 'Create', 'App\\Models\\Wallet', 2, 'App\\Models\\Wallet', 2, 'App\\Models\\Wallet', 2, '', 'finished', '', '2023-08-10 04:03:55', '2023-08-10 04:03:55', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T23:03:55.000000Z\",\"created_at\":\"2023-08-09T23:03:55.000000Z\",\"id\":2}'),
(29, '99da2641-a89e-404a-9309-9ea49855a3df', 1, 'Create', 'App\\Models\\Wallet', 3, 'App\\Models\\Wallet', 3, 'App\\Models\\Wallet', 3, '', 'finished', '', '2023-08-10 04:03:57', '2023-08-10 04:03:57', NULL, '{\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T23:03:57.000000Z\",\"created_at\":\"2023-08-09T23:03:57.000000Z\",\"id\":3}'),
(30, '99da26ba-6948-457d-a2a1-48edca3a1ead', 1, 'Create', 'App\\Models\\Wallet', 4, 'App\\Models\\Wallet', 4, 'App\\Models\\Wallet', 4, '', 'finished', '', '2023-08-10 04:05:16', '2023-08-10 04:05:16', NULL, '{\"titulo\":\"wallet 4\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T23:05:16.000000Z\",\"created_at\":\"2023-08-09T23:05:16.000000Z\",\"id\":4}'),
(31, '99da2d49-63fc-4c46-985d-7c8af7bdde66', 1, 'Create', 'App\\Models\\Wallet', 6, 'App\\Models\\Wallet', 6, 'App\\Models\\Wallet', 6, '', 'finished', '', '2023-08-10 04:23:37', '2023-08-10 04:23:37', NULL, '{\"titulo\":\"sdfsdfsdfsdfsdf\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-09T23:23:36.000000Z\",\"created_at\":\"2023-08-09T23:23:36.000000Z\",\"id\":6}'),
(32, '99da3574-3e39-4be4-9f9d-7903c8b1133d', 1, 'Update', 'App\\Models\\Configuracion', 1, 'App\\Models\\Configuracion', 1, 'App\\Models\\Configuracion', 1, '', 'finished', '', '2023-08-10 04:46:27', '2023-08-10 04:46:27', '[]', '[]'),
(35, '99dc0834-15e9-4dc2-877b-59afa0bcf2be', 1, 'Attach', 'App\\Models\\User', 3, 'App\\Models\\Wallet', 1, 'Illuminate\\Database\\Eloquent\\Relations\\Pivot', NULL, '', 'finished', '', '2023-08-11 02:31:34', '2023-08-11 02:31:34', NULL, '{\"user_id\":\"3\",\"wallet_id\":\"1\"}'),
(39, '99dc245f-c339-4787-bc1a-4c48799ccee0', 1, 'Create', 'App\\Models\\EntidadUser', 1, 'App\\Models\\EntidadUser', 1, 'App\\Models\\EntidadUser', 1, '', 'finished', '', '2023-08-11 03:50:21', '2023-08-11 03:50:21', NULL, '{\"user_id\":\"3\",\"entidad_id\":\"2\",\"departamento_id\":\"2\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-10T22:50:21.000000Z\",\"created_at\":\"2023-08-10T22:50:21.000000Z\",\"id\":1}'),
(40, '99e44a36-b1ab-4828-a039-e33c2e776c7b', 1, 'Create', 'App\\Models\\EntidadSuscripcion', 1, 'App\\Models\\EntidadSuscripcion', 1, 'App\\Models\\EntidadSuscripcion', 1, '', 'finished', '', '2023-08-15 05:02:47', '2023-08-15 05:02:47', NULL, '{\"entidad_id\":\"1\",\"suscripcion_id\":\"1\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-15T00:02:46.000000Z\",\"created_at\":\"2023-08-15T00:02:46.000000Z\",\"id\":1}'),
(41, '99f058aa-9287-407c-9ad2-dc433089656c', 1, 'Update', 'App\\Models\\Wallet', 1, 'App\\Models\\Wallet', 1, 'App\\Models\\Wallet', 1, '', 'finished', '', '2023-08-21 04:53:07', '2023-08-21 04:53:07', '{\"titulo\":\"wallet 1\"}', '{\"titulo\":\"wallet principal\"}'),
(42, '99f058ef-d1f9-430a-aa5b-229e6959fe51', 1, 'Update', 'App\\Models\\User', 1, 'App\\Models\\User', 1, 'App\\Models\\User', 1, '', 'finished', '', '2023-08-21 04:53:53', '2023-08-21 04:53:53', '{\"email\":\"ilanvaldez34@gmail.com\"}', '{\"email\":\"principal@gmail.com\"}'),
(43, '99f05902-5341-4797-a0e6-a8c0121fa36a', 1, 'Update', 'App\\Models\\User', 1, 'App\\Models\\User', 1, 'App\\Models\\User', 1, '', 'finished', '', '2023-08-21 04:54:05', '2023-08-21 04:54:05', '{\"name\":\"alexis\"}', '{\"name\":\"Thrustfile\"}'),
(44, '99f05925-d7cf-4a0c-ab93-3addaf7a97f0', 1, 'Create', 'App\\Models\\User', 4, 'App\\Models\\User', 4, 'App\\Models\\User', 4, '', 'finished', '', '2023-08-21 04:54:28', '2023-08-21 04:54:28', NULL, '{\"name\":\"Alexis\",\"email\":\"ilanvaldez34@gmail.com\",\"updated_at\":\"2023-08-20T23:54:28.000000Z\",\"created_at\":\"2023-08-20T23:54:28.000000Z\",\"id\":4}'),
(45, '99f0594c-7c27-4e8f-985d-cc31ba995491', 1, 'Create', 'App\\Models\\UserWallet', 2, 'App\\Models\\UserWallet', 2, 'App\\Models\\UserWallet', 2, '', 'finished', '', '2023-08-21 04:54:53', '2023-08-21 04:54:53', NULL, '{\"user_id\":\"4\",\"wallet_id\":\"2\",\"admin_id\":\"1\",\"updated_at\":\"2023-08-20T23:54:53.000000Z\",\"created_at\":\"2023-08-20T23:54:53.000000Z\",\"id\":2}'),
(46, '99fbe646-3db0-4999-916a-6c7d86db71ab', 4, 'Create', 'App\\Models\\Wallet', 7, 'App\\Models\\Wallet', 7, 'App\\Models\\Wallet', 7, '', 'finished', '', '2023-08-26 22:43:12', '2023-08-26 22:43:12', NULL, '{\"titulo\":\"carloschipilin\",\"admin_id\":\"4\",\"updated_at\":\"2023-08-26T17:43:10.000000Z\",\"created_at\":\"2023-08-26T17:43:10.000000Z\",\"id\":7}'),
(48, '9a2cfce0-425b-424f-8c6e-d97ae1af151f', 4, 'Update', 'App\\Models\\Configuracion', 1, 'App\\Models\\Configuracion', 1, 'App\\Models\\Configuracion', 1, '', 'finished', '', '2023-09-20 08:21:57', '2023-09-20 08:21:57', '{\"logo\":null}', '{\"logo\":\"jZgjL5VRkxJRYQAzbAcW003C6mnKBFCupvhBmSax.svg\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividads`
--

CREATE TABLE `actividads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `entidad_id` bigint(20) UNSIGNED NOT NULL,
  `accion` varchar(255) DEFAULT NULL,
  `detalle` text DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracions`
--

CREATE TABLE `configuracions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `api` varchar(255) DEFAULT NULL,
  `endpoint_dev` varchar(255) DEFAULT NULL,
  `api_key_dev` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configuracions`
--

INSERT INTO `configuracions` (`id`, `api`, `endpoint_dev`, `api_key_dev`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'tatum', 'https://api.tatum.io/v3/algorand/', '183f2660-b5e6-4560-b9d9-cdaeb7f76711', 'jZgjL5VRkxJRYQAzbAcW003C6mnKBFCupvhBmSax.svg', NULL, '2023-09-20 08:21:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `entidad_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`, `entidad_id`, `admin_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Finanzas', 1, 1, '2023-08-10 00:38:00', '2023-08-10 00:38:00', NULL),
(2, 'Tecnologia de informacion', 2, 1, '2023-08-10 00:38:12', '2023-08-10 00:38:12', NULL),
(3, 'Finanzas', 5, 1, '2023-08-10 00:38:33', '2023-08-10 00:38:33', NULL),
(4, 'Recursos humanos', 4, 1, '2023-08-10 00:38:42', '2023-08-10 00:38:42', NULL),
(5, 'Recursos humanos', 2, 1, '2023-08-10 00:38:51', '2023-08-10 00:38:51', NULL),
(6, 'Logistica', 1, 1, '2023-08-10 00:40:01', '2023-08-10 00:40:01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entidad_id` bigint(20) UNSIGNED NOT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `documento_id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `descargas`
--

INSERT INTO `descargas` (`id`, `entidad_id`, `departamento_id`, `user_id`, `documento_id`, `fecha`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 7, 2, '2023-08-30 21:44:39', '2023-08-31 02:44:39', '2023-08-31 02:44:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesuscripcions`
--

CREATE TABLE `detallesuscripcions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `suscripcion_id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diapositivas`
--

CREATE TABLE `diapositivas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `size` int(20) DEFAULT NULL,
  `documento_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `diapositivas`
--

INSERT INTO `diapositivas` (`id`, `archivo`, `size`, `documento_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1.png', NULL, 1, 4, '2023-08-31 02:28:31', '2023-08-31 02:28:31'),
(2, '2.png', NULL, 1, 4, '2023-08-31 02:28:32', '2023-08-31 02:28:32'),
(3, '3.png', NULL, 1, 4, '2023-08-31 02:28:32', '2023-08-31 02:28:32'),
(4, '4.png', NULL, 1, 4, '2023-08-31 02:28:32', '2023-08-31 02:28:32'),
(5, '5.png', NULL, 1, 4, '2023-08-31 02:28:32', '2023-08-31 02:28:32'),
(6, '6.png', NULL, 2, 4, '2023-08-31 02:33:21', '2023-08-31 02:33:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `entidad_id` int(10) DEFAULT NULL,
  `nombre_doc` varchar(255) DEFAULT NULL,
  `nombre_original` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `orden` int(10) DEFAULT NULL,
  `fecha_carga` varchar(255) DEFAULT NULL,
  `tamano` varchar(255) DEFAULT NULL,
  `encriptado` varchar(255) DEFAULT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `nivel` int(10) DEFAULT 1,
  `estado` enum('completo','incompleto') NOT NULL DEFAULT 'incompleto',
  `certificado` varchar(255) DEFAULT NULL,
  `hash_archivo` varchar(255) DEFAULT NULL,
  `transaccion` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `user_id`, `entidad_id`, `nombre_doc`, `nombre_original`, `tipo`, `orden`, `fecha_carga`, `tamano`, `encriptado`, `archivo`, `nivel`, `estado`, `certificado`, `hash_archivo`, `transaccion`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 0, '1693430914.pdf', '1693430914.pdf', 'application/pdf', NULL, NULL, NULL, '1', NULL, 3, 'completo', NULL, '24FC88AF9B84D8B0C65AD40094071BE9C3771105EDE93022CC5B2BEF4051ADB0', '4XNB6UZSU4CLGHYUPDTD5VJPNDOBONSTGLNEKQDL7XQOXGGCCJLQ', NULL, '2023-08-31 02:28:22', '2023-08-31 02:29:10', NULL),
(2, 4, 1, '1693431203.pdf', '1693431203.pdf', 'application/pdf', NULL, NULL, NULL, '1', NULL, 3, 'completo', NULL, '982DFFA4813728FD2BC032C2CCEFB548A641AAEB284AA60FF3ECEC6941C9B1D6', 'IZ6DGTAL6UQD2WNN54O3N5XBXY5VDDC5F7YC3RUW46QOT63DGVIQ', NULL, '2023-08-31 02:33:03', '2023-08-31 02:33:41', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidads`
--

CREATE TABLE `entidads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `razon_social` varchar(255) DEFAULT NULL,
  `num_razon` varchar(255) DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entidads`
--

INSERT INTO `entidads` (`id`, `nombre`, `razon_social`, `num_razon`, `admin_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'claro', 'claro sac', '123456789987', 1, '2023-08-10 00:32:55', '2023-08-10 00:32:55', NULL),
(2, 'Movistar', 'movistar sac', '456445642121', 1, '2023-08-10 00:34:23', '2023-08-10 00:34:23', NULL),
(3, 'Entel', 'entel sac', '234234324324', 1, '2023-08-10 00:34:40', '2023-08-10 00:34:40', NULL),
(4, 'Bitel', 'Bitel sac', '021212121212', 1, '2023-08-10 00:35:04', '2023-08-10 00:35:04', NULL),
(5, 'Gosac', 'Go sac', '4563215888', 1, '2023-08-10 00:36:27', '2023-08-10 00:36:27', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad_suscripcions`
--

CREATE TABLE `entidad_suscripcions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `suscripcion_id` bigint(20) UNSIGNED NOT NULL,
  `entidad_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `fecha_inicio` datetime DEFAULT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entidad_suscripcions`
--

INSERT INTO `entidad_suscripcions` (`id`, `suscripcion_id`, `entidad_id`, `admin_id`, `fecha_inicio`, `fecha_fin`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, NULL, NULL, '2023-08-15 05:02:46', '2023-08-15 05:02:46', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad_users`
--

CREATE TABLE `entidad_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entidad_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entidad_users`
--

INSERT INTO `entidad_users` (`id`, `entidad_id`, `user_id`, `admin_id`, `departamento_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, 1, 2, '2023-08-11 03:50:21', '2023-08-11 03:50:21', NULL),
(2, 1, 4, 1, 6, '2023-08-11 03:50:21', '2023-08-11 03:50:21', NULL),
(3, 1, 5, 1, 6, '2023-08-11 03:50:21', '2023-08-11 03:50:21', NULL),
(4, 1, 7, NULL, 1, '2023-08-30 22:16:51', '2023-08-30 22:16:51', NULL),
(5, 1, 8, NULL, 6, '2023-08-30 22:53:25', '2023-08-30 22:53:25', NULL),
(6, 1, 9, NULL, 1, '2023-10-18 09:11:36', '2023-10-18 09:11:36', NULL),
(7, 1, 10, NULL, 1, '2023-10-18 09:17:50', '2023-10-18 09:17:50', NULL),
(8, 1, 11, NULL, 1, '2023-10-18 09:18:49', '2023-10-18 09:18:49', NULL),
(9, 1, 12, NULL, 1, '2023-10-18 09:19:41', '2023-10-18 09:19:41', NULL),
(10, 1, 13, NULL, 1, '2023-10-18 09:30:12', '2023-10-18 09:30:12', NULL),
(11, 1, 14, NULL, 1, '2023-10-18 09:31:56', '2023-10-18 09:31:56', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_01_000000_create_action_events_table', 1),
(4, '2019_05_10_000000_add_fields_to_action_events_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_07_29_151126_create_permission_tables', 1),
(8, '2023_07_29_155023_create_entidads_table', 1),
(9, '2023_07_29_155200_create_departamentos_table', 1),
(10, '2023_07_29_155502_create_actividads_table', 1),
(11, '2023_07_29_232658_create_suscripcions_table', 1),
(12, '2023_07_30_005146_create_detallesuscripcions_table', 1),
(13, '2023_07_30_011847_create_notas_table', 1),
(14, '2023_08_07_210551_create_wallets_table', 1),
(15, '2023_08_09_144410_create_entidad_suscripcions_table', 1),
(16, '2023_08_09_144631_create_entidad_users_table', 1),
(17, '2023_08_09_145738_create_user_wallets_table', 1),
(18, '2023_08_09_145838_create_documentos_table', 1),
(19, '2023_08_09_190910_create_descargas_table', 1),
(20, '2023_08_09_231037_create_configuracions_table', 2),
(21, '2023_08_19_151114_create_diapositivas_table', 3),
(23, '2023_08_20_194914_create_user_opts_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `nota` text DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `admin_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcions`
--

CREATE TABLE `suscripcions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `precio` varchar(255) DEFAULT NULL,
  `cant_usuarios` int(11) NOT NULL DEFAULT 0,
  `admin_id` bigint(20) DEFAULT NULL,
  `cant_descargas` int(11) NOT NULL DEFAULT 0,
  `meses` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `suscripcions`
--

INSERT INTO `suscripcions` (`id`, `nombre`, `precio`, `cant_usuarios`, `admin_id`, `cant_descargas`, `meses`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Basico', '100', 10, 1, 10, 10, '2023-08-10 00:48:19', '2023-08-10 00:48:19', NULL),
(2, 'intermedio', '150', 15, 1, 15, 15, '2023-08-10 00:53:52', '2023-08-10 00:53:52', NULL),
(3, 'Avanzado', '200', 20, 1, 20, 20, '2023-08-10 00:54:06', '2023-08-10 00:54:06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('superadmin','admin','user') DEFAULT 'user',
  `tipo_entidad` enum('negocio','persona','owner') NOT NULL DEFAULT 'negocio',
  `tipo_doc` varchar(255) DEFAULT NULL,
  `num_doc` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `tipo_entidad`, `tipo_doc`, `num_doc`, `celular`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Thrustfile', 'superadmin', 'owner', NULL, NULL, NULL, 'principal@gmail.com', NULL, '$2y$10$I6QUqwOFSD627p8uKoqpGeK5RvvVUd.beKyN3p4IPD1R8es7yrNwW', NULL, '2023-08-10 00:15:45', '2023-08-21 04:54:05', NULL),
(2, 'claro', 'user', 'negocio', NULL, NULL, NULL, 'claro@gmail.com', NULL, '$2y$10$xCDon6EpUY3jaFiHyvT2beZTMvAJ3wtV37QYNS3ZrNw//tIjyLEa6', NULL, '2023-08-10 00:55:08', '2023-08-10 00:55:08', NULL),
(3, 'movistar', 'user', 'negocio', 'dni', '32233223', '51999999999', 'movistar@gmail.com', NULL, '$2y$10$XqO.LERIvESnrPw226kfa.bCYOBGNPwoUNujVTS5r9IkoHgNytQCK', NULL, '2023-08-10 00:55:25', '2023-08-31 00:42:25', NULL),
(4, 'Alexis', 'admin', 'negocio', NULL, NULL, '51972843376', 'ilanvaldez34@gmail.com', NULL, '$2y$10$ZbGyvTjikYKGija9R3XW5eH9Aza9dIkjBOziWkeRhQLd2hrK7QlyC', NULL, '2023-08-21 04:54:28', '2023-08-21 04:54:28', NULL),
(5, 'chambers', 'user', 'persona', 'dni', '12362478', '999999999', 'ilanvaldez3d4@gmail.com', NULL, '$2y$10$ygWsxgtl8DaigahRabW/de7GkmeFl7Cr0teO/OHTjrySNKpGbEE7O', NULL, '2023-08-30 21:34:02', '2023-08-31 00:42:46', NULL),
(7, 'Ricardo', 'user', 'negocio', 'dni', '46848125', '51987456321', 'ricardo@gmail.com', NULL, '$2y$10$MxPMaN5mOmDeftfjqjlEN.wXfSqVzA0XZ/jEoh1rEru0AVMiDcnFG', NULL, '2023-08-30 22:16:51', '2023-08-30 22:16:51', NULL),
(8, 'cameron', 'user', 'negocio', 'dni', '45632141', '51987456321', 'cameron@gmail.com', NULL, '$2y$10$QLsT9yTXzzhWsu/2f/GDIeJoGOF1Xvjr5v01j.2rmNoknxcy6mwZa', NULL, '2023-08-30 22:53:25', '2023-08-30 22:53:25', NULL),
(9, 'Ilan Alexis Valdez Vásquez', 'user', 'negocio', 'dni', '21331231', '999999999', 'admin@fusetheme.com', NULL, '$2y$10$p8qwG5YoKYQRf3LlWDLjdOseJk5ux7LRkgtwJqZ2gRfJRnbuAEVZe', NULL, '2023-10-18 09:11:36', '2023-10-18 09:11:36', NULL),
(10, 'Ilan Alexis gervin', 'user', 'negocio', 'dni', '46848525', '999999999', 'ilanvaldez3ssss4@gmail.com', NULL, '$2y$10$n17LiYvuxOkZi4CbzZJkj.DpLvcHTjgoUyPGLwJmEP3AdYw0e.ra.', NULL, '2023-10-18 09:17:50', '2023-10-18 09:17:50', NULL),
(11, '.htaccess', 'user', 'negocio', 'dni', '65422222', '999999999', 'ilanvaldaaaaaez341@gmail.com', NULL, '$2y$10$0yD5QOJDNRJC6dUM1mT2N.PFcdu6h6BSwe.S8W/CQ59528lfrq9WC', NULL, '2023-10-18 09:18:49', '2023-10-18 09:18:49', NULL),
(12, 'Ilan Alexis Valdez Vásquez', 'user', 'negocio', 'dni', '21331231333', '999999999', 'adm33333in@fusetheme.com', NULL, '$2y$10$TXusnPZYZJM4eH94nX7.5OjyXPwAgLfOT8bUIZ654fy/jIIZkghpS', NULL, '2023-10-18 09:19:41', '2023-10-18 09:19:41', NULL),
(14, 'carlos macha', 'user', 'negocio', 'dni', '468485251', '999999999', 'movistarcccc@gmail.com', NULL, '$2y$10$jVQarTzGrytL0FpqXRKLz.Le1Om7EBkD1viQLNRMRtso2Fi5ydXba', NULL, '2023-10-18 09:31:56', '2023-10-18 09:31:56', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_otps`
--

CREATE TABLE `user_otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `expire_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_otps`
--

INSERT INTO `user_otps` (`id`, `user_id`, `otp`, `expire_at`, `created_at`, `updated_at`) VALUES
(1, 4, '396375', '2023-09-20 07:57:56', '2023-09-20 07:47:56', '2023-09-20 07:47:56'),
(2, 4, '320414', '2023-09-22 22:14:07', '2023-09-22 22:04:07', '2023-09-22 22:04:07'),
(3, 4, '775408', '2023-09-27 23:01:19', '2023-09-27 22:51:19', '2023-09-27 22:51:19'),
(4, 4, '140546', '2023-09-29 03:33:01', '2023-09-29 03:23:01', '2023-09-29 03:23:01'),
(5, 4, '129472', '2023-09-29 04:20:06', '2023-09-29 04:10:06', '2023-09-29 04:10:06'),
(6, 4, '128708', '2023-09-30 03:31:03', '2023-09-30 03:21:03', '2023-09-30 03:21:03'),
(7, 4, '423850', '2023-10-12 18:44:00', '2023-10-12 18:34:00', '2023-10-12 18:34:00'),
(8, 4, '383447', '2023-10-18 08:33:34', '2023-10-18 08:23:34', '2023-10-18 08:23:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_wallets`
--

CREATE TABLE `user_wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `wallet_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_wallets`
--

INSERT INTO `user_wallets` (`id`, `admin_id`, `user_id`, `wallet_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 1, 1, NULL, NULL, NULL),
(2, 1, 4, 2, '2023-08-21 04:54:53', '2023-08-21 04:54:53', NULL),
(3, NULL, 5, 8, '2023-08-30 21:34:02', '2023-08-30 21:34:02', NULL),
(4, NULL, 7, 9, '2023-08-30 22:16:51', '2023-08-30 22:16:51', NULL),
(5, NULL, 8, 10, '2023-08-30 22:53:26', '2023-08-30 22:53:26', NULL),
(6, NULL, 9, 11, '2023-10-18 09:11:37', '2023-10-18 09:11:37', NULL),
(7, NULL, 10, 12, '2023-10-18 09:17:52', '2023-10-18 09:17:52', NULL),
(8, NULL, 11, 13, '2023-10-18 09:18:51', '2023-10-18 09:18:51', NULL),
(9, NULL, 12, 14, '2023-10-18 09:19:43', '2023-10-18 09:19:43', NULL),
(10, NULL, 13, 15, '2023-10-18 09:30:13', '2023-10-18 09:30:13', NULL),
(11, NULL, 14, 16, '2023-10-18 09:31:58', '2023-10-18 09:31:58', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `mnemonic` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `wallets`
--

INSERT INTO `wallets` (`id`, `titulo`, `admin_id`, `address`, `secret`, `mnemonic`, `fecha`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'wallet principal', 1, 'KBM27HA6LWOGSSPMKJW73DCEYD3LAIP63C3MIEGQQ2D3Z5EK4UMYI55JIE', 'JO5PEPUPSEKEN3K44S3THKHC3WTINI3YIWJAO4GTZJ2PJQT3PP4VAWNPTQPF3HDJJHWFE3P5RRCMB5VQEH7NRNWECDIINB546SFOKGI', 'enact slab panda body circle face trash tone ivory patch vanish horse ask cigar cloth myself abstract evidence grace elder magnet ten slim abstract urban', '2023-08-09 23:03:53', '2023-08-10 04:03:53', '2023-08-21 04:53:07', NULL),
(2, 'wallet 2', 1, 'BB2NY4RB3ZQEL6M3QXUD6FFZ4P7F2RZMGYM6ZCGD7Q7GDB37TC5TQUK6OU', 'VU6APZ6YZXLYVCPK23VAJPJT3Z4CBAX5NRPGDNKIJNLHWM76APTAQ5G4OIQ54YCF7GNYL2B7CS46H7S5I4WDMGPMRDB7YPTBQ57ZROY', 'noble brother inform talk question glance february street outer village border mistake domain gauge gun fury promote carpet certain rely group zebra copy abstract that', '2023-08-09 23:03:55', '2023-08-10 04:03:55', '2023-08-10 04:03:55', NULL),
(3, 'wallet 3', 1, 'QFUP5RFOZNIVX252IPBHKV5DIEVRLL2X6R3IZKPH3T5G6BO3QF2OPHDIZI', 'UHBELQUBORGHLNLNE4STFBGXHNZF7VHA4GKOW5BIF3KZBL3KCFLYC2H6YSXMWUK35O5EHQTVK6RUCKYVV5L7I5UMVHT5Z6TPAXNYC5A', 'feature blade thrive elite ocean front horror cherry dwarf awkward type casual same crush audit neutral output peace novel ask game follow review able family', '2023-08-09 23:03:57', '2023-08-10 04:03:57', '2023-08-10 04:03:57', NULL),
(4, 'wallet 4', 1, 'NY46ELYZP7ULTX7ZCACYG2EYHHTOMC2QXBDPPAQ3DBXPC5PMT3EKA2PAUI', 'XSPPXPYUTVZWVVGSAJKLISWOJPLTEFOKA4YW2GS3CA72LHOCKRLG4OPCF4MX72FZ374RABMDNCMDTZXGBNILQRXXQINRQ3XROXWJ5SA', 'stuff unveil garment spend transfer box note actress melody client transfer input grant luxury dinner country ethics hockey market fault deputy cost razor able loud', '2023-08-09 23:05:16', '2023-08-10 04:05:16', '2023-08-10 04:05:16', NULL),
(6, 'sdfsdfsdfsdfsdf', 1, 'YOJG3MKBJADRO3F7JJKEWAJG57I3WCTRZ22BCT2PIEWLU6PKECW7GJINNI', 'K5IGPZ3GPSNAHBNXNVMZWP3375ZVPP5QXTBHGQHBRCTCUCZJPT74HETNWFAUQBYXNS7UUVCLAETO7UN3BJY45NARJ5HUCLF2PHVCBLI', 'april outer inhale shoe crunch domain rotate horror hen wrist rural divide puzzle cool tortoise section attack lunar dutch price bind apart winner abstract sock', '2023-08-09 23:23:37', '2023-08-10 04:23:36', '2023-08-10 04:23:37', NULL),
(7, 'carloschipilin', 4, 'OADR7J3YILIYCLGPH733IKGIGOP7OWAHFVG5FU2SKUPTR7LTCCTIHIRM6M', 'YXLO3YAJ7CKUS5YO3LVWRS7ZG37D7SF6ET3XZZ4QVEIVG2M6BKQHABY7U54EFUMBFTHT755UFDEDHH7XLADS2TOS2NJFKHZY7VZRBJQ', 'suffer resemble vacant letter cloud sponsor inhale sure buddy color language toddler lend rare chalk warm usage drum state country sport pole able absent tent', '2023-08-26 17:43:11', '2023-08-26 22:43:10', '2023-08-26 22:43:11', NULL),
(8, 'wallet 5', 4, 'HOQFY47O4XG45T6SRCH2YFEA64NQWOQV3ETINMPTOVLPVCOY5Q7WQESW3I', 'LAWH4M33XVMOGNUXTQQ5QBM6U5NRIVHV6Z35YORWD7DBSIORC66TXIC4OPXOLTOOZ7JIRD5MCSAPOGYLHIK5SJUGWHZXKVX2RHMOYPY', 'mention weather often stumble ramp rhythm rifle orient aerobic blast someone risk chunk fence response jewel fortune suggest auto organ drama violin trim absent illegal', '2023-08-30 16:34:02', '2023-08-30 21:34:02', '2023-08-30 21:34:02', NULL),
(9, 'wallet 7', 4, '4VOJTDJ5OMQXKBBJTLJX5T5KGA772UNLKJEWFEKKVS2RTIUHHSTNZUEEZY', '24KGJCXOMF5GOKHPSSCJ3HKHEF6WTOX7HK64PEUCTNU3Y3PRQBMOKXEZRU6XGILVAQUZVU36Z6VDAP75KGVVESLCSFFKZNIZUKDTZJQ', 'online motion early bus visit border junk neutral rack island phrase spirit spray update subject rule flight apart soccer shoot swarm detail series able they', '2023-08-30 17:16:51', '2023-08-30 22:16:51', '2023-08-30 22:16:51', NULL),
(10, 'wallet 8', 4, 'CRPNFU2X3KR2ZZ5DPASMR47WR6I6IVQBSMWH5T4XUU5Y2DEKHRUSJEJVOY', 'F3LY44GBANYEQOKXAPO2JYXGMEMZR55AFJRHUGH65W6QSNFB5M6RIXWS2NL5VI5M46RXQJGI6P3I7EPEKYAZGLD6Z6L2KO4NBSFDY2I', 'total deputy reunion despair theme faith right addict option melody vibrant noodle coral digital fence giraffe aunt wear want orange gym tribe urban ability degree', '2023-08-30 17:53:26', '2023-08-30 22:53:26', '2023-08-30 22:53:26', NULL),
(11, 'wallet 9', 4, 'QD4WNNOCXIU6OCRIISOCUXD2QJTSVYLQITBNUO3MADMOMI5SYQ6NZ5YSBI', 'ER5EMDGQVJQFIDW2KDMSHRXI7TMESTFH3RK3A56UVMKSWKXQJUAIB6LGWXBLUKPHBIUEJHBKLR5IEZZK4FYEJQW2HNWABWHGEOZMIPA', 'duty boring alert public scout never spare express kite blush inner more neck spread topple fiction voyage fade sting rally february lab act abandon scan', '2023-10-18 04:11:37', '2023-10-18 09:11:36', '2023-10-18 09:11:37', NULL),
(12, 'wallet 10', 4, 'GAXROXWUE472L5L42EBY3TWFYQMIVAOMPZEMOTPFGWGXPP5IM7R6QWTRJM', 'VZRVBXHTGSOR44VKZU6YFIR42UCUWAVJJ7B3FUNSU3PWEFPQBGVDALYXL3KCOP5F6V6NCA4NZ3C4IGEKQHGH4SGHJXSTLDLXX6UGPYY', 'into dose until execute denial marble fatal soap element meat oxygen front noodle dog later select curve slender spy combine client lab expect absent palace', '2023-10-18 04:17:52', '2023-10-18 09:17:51', '2023-10-18 09:17:52', NULL),
(13, 'wallet 11', 4, 'VX7EV5RDHGFVXJFOTDTWCMLPVTPF7ZO4NFVYLYJFQZTXHSB2PPCAEBRBEU', 'UKKSKAGH7FVKPGVFNPGKF6XM24T4ESJTHRT4A6ESPGAXJ2WWL5H237SK6YRTTC23USXJRZ3BGFX2ZXS74XOGS24F4ESYMZ3TZA5HXRA', 'reform north length organ sting prefer coast hill flower tunnel wait latin lounge sponsor thunder grunt blossom enemy rubber elite stay volcano kit able finger', '2023-10-18 04:18:51', '2023-10-18 09:18:50', '2023-10-18 09:18:51', NULL),
(14, 'wallet 12', 4, 'SLWTAFPEWAGNDBXQB6KVR7RU4DOATY7T3M5FA7EFBEUQJIRRN3HBNZ6OII', 'HR7PUF4UH5TC57NKPSUYOOU5YIDPQ7NZ46YT7BDCOASPWE7CBBRJF3JQCXSLADGRQ3YA7FKY7Y2OBXAJ4PZ5WOSQPSCQSKIEUIYW5TQ', 'shy try armor welcome small entire fitness lake vivid tube excess history useless garage differ rapid margin meat deal rather child decade aware about shock', '2023-10-18 04:19:43', '2023-10-18 09:19:42', '2023-10-18 09:19:43', NULL),
(15, 'wallet 13', 4, 'WDHOA7HCREWLSJRVT3RISZMFWYNCRAXYQHRKUS7EA6FFT3H3AFYONPJWCY', 'X24KUKCLOBLCCOUBGLMYZOF2LPO77KAV5BF3PUI6DNHN2KPGCQELBTXAPTRISLFZEY2Z5YUJMWC3MGRIQL4IDYVKJPSAPCSZ5T5QC4A', 'blind priority nephew again provide marriage antenna crater open timber tail stick zero health doll episode dad kitten assault stay father define doll abandon midnight', '2023-10-18 04:30:13', '2023-10-18 09:30:12', '2023-10-18 09:30:13', NULL),
(16, 'wallet 14', 4, '4OBYKXQ46P7KOPH75HFX2RFV4XB6BHYVU5AEUV3WVXMX7QTEKSMZ5PR2HE', 'WMNQAKYL3PO6RKWPNV32NRJFSSKT2466TEJRAO7E4CMIO52RFB7OHA4FLYOPH7VHHT76TS35IS26LQ7AT4K2OQCKK53K3WL7YJSFJGI', 'island about night radar roof riot later horse solve bird base flock kite orphan solve bean ginger movie idea kangaroo upper begin vanish about drama', '2023-10-18 04:31:58', '2023-10-18 09:31:57', '2023-10-18 09:31:58', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `action_events`
--
ALTER TABLE `action_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_events_actionable_type_actionable_id_index` (`actionable_type`,`actionable_id`),
  ADD KEY `action_events_batch_id_model_type_model_id_index` (`batch_id`,`model_type`,`model_id`),
  ADD KEY `action_events_user_id_index` (`user_id`);

--
-- Indices de la tabla `actividads`
--
ALTER TABLE `actividads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detallesuscripcions`
--
ALTER TABLE `detallesuscripcions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diapositivas`
--
ALTER TABLE `diapositivas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entidads`
--
ALTER TABLE `entidads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entidad_suscripcions`
--
ALTER TABLE `entidad_suscripcions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entidad_users`
--
ALTER TABLE `entidad_users`
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
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `suscripcions`
--
ALTER TABLE `suscripcions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_num_doc_unique` (`num_doc`);

--
-- Indices de la tabla `user_otps`
--
ALTER TABLE `user_otps`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_wallets`
--
ALTER TABLE `user_wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `action_events`
--
ALTER TABLE `action_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `actividads`
--
ALTER TABLE `actividads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detallesuscripcions`
--
ALTER TABLE `detallesuscripcions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `diapositivas`
--
ALTER TABLE `diapositivas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `entidads`
--
ALTER TABLE `entidads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `entidad_suscripcions`
--
ALTER TABLE `entidad_suscripcions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `entidad_users`
--
ALTER TABLE `entidad_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `suscripcions`
--
ALTER TABLE `suscripcions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `user_otps`
--
ALTER TABLE `user_otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `user_wallets`
--
ALTER TABLE `user_wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
