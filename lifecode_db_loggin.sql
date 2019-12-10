-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-12-2019 a las 08:31:54
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lifecode_db_loggin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_login`
--

CREATE TABLE `users_login` (
  `users_login_id` int(4) NOT NULL,
  `users_login_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_login_password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_login_last_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users_login`
--

INSERT INTO `users_login` (`users_login_id`, `users_login_name`, `users_login_password`, `users_login_last_date`) VALUES
(1, 'test@gmail.com', '$2y$10$Ck.kHIu1iln/p1WIssf4UeFPnL9zq9H6J7PkavjkuB81NNlogQAkG', '2019-12-10 02:21:41'),
(5, 'designerbyron@gmail.com', '$2y$10$ECRi2PkWimPa94qjh1b5JOo9moac4n3HeXRjOe9V0N7/HWiKtMmkm', '2019-12-10 02:49:19'),
(6, 'test2@gmail.com', '$2y$10$4BwyJr/G8Tcd521.t0Ykn.fNbwPThnnU/8jlL4UHwKFlKOFaI6Ene', '2019-12-10 03:02:07'),
(7, 'test2@gmail.com', '$2y$10$R3EVJJFolmc/Tawv3aYnr.reW4s4Zs/GKSwdV8EgyQRixfG96daMy', '2019-12-10 03:02:13'),
(8, 'byron', '$2y$10$Aul0c/Fv4kyDDdn6bkkXEuozheVfHPTb3NVMFuPcvoiHfEZ9ZFHxe', '2019-12-10 04:04:30'),
(9, 'designerbyron2@gmail.com', '$2y$10$Mb2ml5ImdlzCdtm5QLV.COhhjw2MG8RtSccIErtu9zd.EiKrFfLJO', '2019-12-10 04:11:56'),
(10, 'designerbyron3@gmail.com', '$2y$10$Bv2cE2IHYB0sUA1eJY3vEeJiiLVhOutA0SV4F99qitdg9Mtex3atq', '2019-12-10 05:41:09'),
(11, 'mario@mail.com', '$2y$10$MMJ0XPZMGDgmSOdL2VWOVOS7xhQ0XOXDa9kteCHcLF9V4pRvI1y4S', '2019-12-10 07:17:57');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`users_login_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users_login`
--
ALTER TABLE `users_login`
  MODIFY `users_login_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
