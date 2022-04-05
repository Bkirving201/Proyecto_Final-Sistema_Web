-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2022 a las 23:12:12
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
(31, 'Irving', 'Ramirez', '7443835662', 'Credencial ', 'irvingramirez772@gmail.com', '2022-04-05 14:52:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credito`
--

CREATE TABLE `credito` (
  `idTarjeta` int(11) NOT NULL,
  `Propietario` varchar(45) NOT NULL,
  `Num_Tarjeta` varchar(25) NOT NULL,
  `CVV` varchar(10) NOT NULL,
  `Caduca` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `debito`
--

CREATE TABLE `debito` (
  `idTarjeta` int(11) NOT NULL,
  `Propietario` varchar(45) NOT NULL,
  `Num_Tarjeta` varchar(45) NOT NULL,
  `CVV` varchar(45) NOT NULL,
  `Caduca` varchar(10) NOT NULL
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

--
-- Volcado de datos para la tabla `efectivo`
--

INSERT INTO `efectivo` (`idEfectivo`, `Nombre`, `Monto`, `Fecha`) VALUES
(20, 'Irving', '1300', '2022-04-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapago`
--

CREATE TABLE `formapago` (
  `idPago` int(11) NOT NULL,
  `NombrePago` varchar(20) NOT NULL,
  `credito_idTarjeta` int(11) DEFAULT NULL,
  `debito_idTarjeta` int(11) DEFAULT NULL,
  `efectivo_idEfectivo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formapago`
--

INSERT INTO `formapago` (`idPago`, `NombrePago`, `credito_idTarjeta`, `debito_idTarjeta`, `efectivo_idEfectivo`) VALUES
(17, 'Efectivo', NULL, NULL, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `idHabitacion` int(11) NOT NULL,
  `NombreHab` varchar(45) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Precio` int(10) NOT NULL,
  `Piso` int(10) NOT NULL,
  `Estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`idHabitacion`, `NombreHab`, `Descripcion`, `Precio`, `Piso`, `Estado`) VALUES
(1, 'Habitacion Chica', 'Cama individual, baño, sala tamaño de 18 m2', 800, 3, 'Disponible'),
(2, 'Habitacion Suite', 'Cama Queen Size, Jacuzzi, Gym incorporado,Comedor', 2500, 7, 'Disponible'),
(3, 'Habitacion Grande', 'Cama Matrimonial, Baño, television, aire, terraza', 1300, 1, 'Ocupada'),
(4, 'Habitacion Grande', 'Cama doble,Baño,Comedor,Armario pequeño', 1400, 3, 'Disponible'),
(5, 'Habitacion Mediana', 'Cama Individual,Armario pequeño,terraza,baño,sala,', 900, 2, 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `idReserva` int(11) NOT NULL,
  `clientes_idClientes` int(11) NOT NULL,
  `habitacion_idHabitacion` int(11) NOT NULL,
  `formaPago_idPago` int(11) NOT NULL,
  `FechadeAlta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`idReserva`, `clientes_idClientes`, `habitacion_idHabitacion`, `formaPago_idPago`, `FechadeAlta`) VALUES
(8, 31, 3, 17, '2022-04-05 14:52:03');

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
  ADD KEY `Credito_idTarjeta` (`credito_idTarjeta`),
  ADD KEY `Debito_idTarjeta` (`debito_idTarjeta`),
  ADD KEY `Efectivo_idEfectivo` (`efectivo_idEfectivo`);

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
  ADD KEY `Clientes_idClientes` (`clientes_idClientes`),
  ADD KEY `Habitacion_idHabitacion` (`habitacion_idHabitacion`),
  ADD KEY `FormaPago_idPago` (`formaPago_idPago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `credito`
--
ALTER TABLE `credito`
  MODIFY `idTarjeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `debito`
--
ALTER TABLE `debito`
  MODIFY `idTarjeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `efectivo`
--
ALTER TABLE `efectivo`
  MODIFY `idEfectivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `formapago`
--
ALTER TABLE `formapago`
  MODIFY `idPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `idHabitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `formapago`
--
ALTER TABLE `formapago`
  ADD CONSTRAINT `formapago_ibfk_1` FOREIGN KEY (`credito_idTarjeta`) REFERENCES `credito` (`idTarjeta`),
  ADD CONSTRAINT `formapago_ibfk_2` FOREIGN KEY (`debito_idTarjeta`) REFERENCES `debito` (`idTarjeta`),
  ADD CONSTRAINT `formapago_ibfk_3` FOREIGN KEY (`efectivo_idEfectivo`) REFERENCES `efectivo` (`idEfectivo`);

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
