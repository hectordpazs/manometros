-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 18:08:23
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pozos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pozo`
--

CREATE TABLE `pozo` (
  `no` int(11) NOT NULL,
  `id_pozo` varchar(20) NOT NULL,
  `medicion` int(20) NOT NULL,
  `fecha` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pozo`
--

INSERT INTO `pozo` (`no`, `id_pozo`, `medicion`, `fecha`) VALUES
(6, '252', 5050, '2021-11-07 12:50:00.000000'),
(7, '252', 25252525, '2021-11-07 11:50:00.000000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pozo`
--
ALTER TABLE `pozo`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pozo`
--
ALTER TABLE `pozo`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
