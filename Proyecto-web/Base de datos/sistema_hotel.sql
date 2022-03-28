-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2022 a las 08:57:56
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
-- Base de datos: `sistema_hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idClientes` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Identificacion` varchar(45) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Fechadeingreso` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idClientes`, `Nombre`, `Apellidos`, `Telefono`, `Identificacion`, `Correo`, `Fechadeingreso`) VALUES
(1, 'Irving Noe', 'Ramirez', '7443366058', 'Credencial Electoral', 'irvingramirez772@gmail.com', '2022-03-27 22:47:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credito`
--

CREATE TABLE `credito` (
  `idTarjeta` int(11) NOT NULL,
  `Propietario` varchar(45) NOT NULL,
  `Num.Tarjeta` varchar(25) NOT NULL,
  `CVV` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `debito`
--

CREATE TABLE `debito` (
  `idTarjeta` int(11) NOT NULL,
  `Propietario` varchar(45) NOT NULL,
  `Num.Tarjeta` varchar(45) NOT NULL,
  `CVV` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `efectivo`
--

CREATE TABLE `efectivo` (
  `idEfectivo` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Monto` varchar(45) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapago`
--

CREATE TABLE `formapago` (
  `idPago` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Credito_idTarjeta` int(11) NOT NULL,
  `Debito_idTarjeta` int(11) NOT NULL,
  `Efectivo_idEfectivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `idHabitacion` int(11) NOT NULL,
  `NombreHab` varchar(45) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Precio` int(10) NOT NULL,
  `Piso` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `idReserva` int(11) NOT NULL,
  `Clientes_idClientes` int(11) NOT NULL,
  `Habitacion_idHabitacion` int(11) NOT NULL,
  `FormaPago_idPago` int(11) NOT NULL,
  `FechadeAlta` datetime NOT NULL,
  `Estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`);

--
-- Indices de la tabla `credito`
--
ALTER TABLE `credito`
  ADD PRIMARY KEY (`idTarjeta`);

--
-- Indices de la tabla `debito`
--
ALTER TABLE `debito`
  ADD PRIMARY KEY (`idTarjeta`);

--
-- Indices de la tabla `efectivo`
--
ALTER TABLE `efectivo`
  ADD PRIMARY KEY (`idEfectivo`);

--
-- Indices de la tabla `formapago`
--
ALTER TABLE `formapago`
  ADD PRIMARY KEY (`idPago`),
  ADD KEY `Credito_idTarjeta` (`Credito_idTarjeta`),
  ADD KEY `Debito_idTarjeta` (`Debito_idTarjeta`),
  ADD KEY `Efectivo_idEfectivo` (`Efectivo_idEfectivo`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`idHabitacion`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `Clientes_idClientes` (`Clientes_idClientes`),
  ADD KEY `Habitacion_idHabitacion` (`Habitacion_idHabitacion`),
  ADD KEY `FormaPago_idPago` (`FormaPago_idPago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `credito`
--
ALTER TABLE `credito`
  MODIFY `idTarjeta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `debito`
--
ALTER TABLE `debito`
  MODIFY `idTarjeta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `efectivo`
--
ALTER TABLE `efectivo`
  MODIFY `idEfectivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `formapago`
--
ALTER TABLE `formapago`
  MODIFY `idPago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `idHabitacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `formapago`
--
ALTER TABLE `formapago`
  ADD CONSTRAINT `formapago_ibfk_1` FOREIGN KEY (`Credito_idTarjeta`) REFERENCES `credito` (`idTarjeta`),
  ADD CONSTRAINT `formapago_ibfk_2` FOREIGN KEY (`Debito_idTarjeta`) REFERENCES `debito` (`idTarjeta`),
  ADD CONSTRAINT `formapago_ibfk_3` FOREIGN KEY (`Efectivo_idEfectivo`) REFERENCES `efectivo` (`idEfectivo`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`Clientes_idClientes`) REFERENCES `clientes` (`idClientes`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`Habitacion_idHabitacion`) REFERENCES `habitacion` (`idHabitacion`),
  ADD CONSTRAINT `reservas_ibfk_3` FOREIGN KEY (`FormaPago_idPago`) REFERENCES `formapago` (`idPago`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
