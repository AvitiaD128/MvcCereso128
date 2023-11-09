-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2023 a las 21:22:05
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cereso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_prisioneros`
--

CREATE TABLE `tbl_prisioneros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `fechaN` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `motivoEnc` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_prisioneros`
--

INSERT INTO `tbl_prisioneros` (`id`, `nombre`, `apellido`, `estado`, `fechaN`, `direccion`, `motivoEnc`, `sexo`) VALUES
(1, 'Diego', 'Avitia', 'Chihuauha', '12/12/24', 'calle toro360', 'Asesinato', 'masculino'),
(2, 'Carlos', 'Avitia', 'Chihuauha', '11/11/24', 'calle CAR360', 'Robo', 'Masculino');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_prisioneros`
--
ALTER TABLE `tbl_prisioneros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_prisioneros`
--
ALTER TABLE `tbl_prisioneros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
