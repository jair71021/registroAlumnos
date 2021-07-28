-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2021 a las 23:33:25
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registroalumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_alumnos`
--

CREATE TABLE `t_alumnos` (
  `id_alumnos` int(4) NOT NULL,
  `nombre` varchar(220) NOT NULL,
  `apellidopaterno` varchar(220) NOT NULL,
  `apellidomaterno` varchar(220) NOT NULL,
  `fechanacimiento` varchar(220) NOT NULL,
  `nummatricula` varchar(220) NOT NULL,
  `area` varchar(220) NOT NULL,
  `sexo` varchar(220) NOT NULL,
  `miimagen` text NOT NULL,
  `extension` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_alumnos`
--

INSERT INTO `t_alumnos` (`id_alumnos`, `nombre`, `apellidopaterno`, `apellidomaterno`, `fechanacimiento`, `nummatricula`, `area`, `sexo`, `miimagen`, `extension`) VALUES
(32, 'Jared', 'Lopez ', 'Galindo', '2021-07-28', '1790015', 'Sistemas', 'Hombre', '111.jpg', 'jpg'),
(33, 'Jair', 'Suarez', 'Romero', '1999-02-26', '1790075', 'Sistemas', 'Hombre', 'jair.jpg', 'jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_alumnos`
--
ALTER TABLE `t_alumnos`
  ADD PRIMARY KEY (`id_alumnos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_alumnos`
--
ALTER TABLE `t_alumnos`
  MODIFY `id_alumnos` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
