-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2022 a las 22:38:09
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `No. habitación` int(2) NOT NULL,
  `Tipo de habitación` varchar(20) NOT NULL,
  `Tipo de cama` varchar(20) NOT NULL,
  `Limite de personas` int(2) NOT NULL,
  `Estado` varchar(10) DEFAULT NULL,
  `Precio por noche` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`No. habitación`, `Tipo de habitación`, `Tipo de cama`, `Limite de personas`, `Estado`, `Precio por noche`) VALUES
(1, 'Sencilla', 'Individual', 1, 'Disponible', '500'),
(2, 'Sencilla', 'Individual', 1, 'Disponible', '500'),
(3, 'Sencilla', 'Matrimonial', 2, 'Disponible', '650'),
(4, 'Sencilla', 'Matrimonial', 2, 'Disponible', '650'),
(7, 'Doble', 'Individual', 2, 'Disponible', '650'),
(8, 'Doble', 'Individual', 2, 'Disponible', '650');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
