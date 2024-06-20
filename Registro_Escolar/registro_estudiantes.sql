-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2024 a las 11:20:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `domicilio` varchar(255) DEFAULT NULL,
  `nombre_usuario` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `foto_carnet` varchar(255) DEFAULT NULL,
  `partida_bautismo` varchar(255) DEFAULT NULL,
  `traslado_foto` varchar(255) DEFAULT NULL,
  `contacto_personal` varchar(255) DEFAULT NULL,
  `contacto_tutor` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `curso`, `edad`, `domicilio`, `nombre_usuario`, `contrasena`, `correo`, `foto_carnet`, `partida_bautismo`, `traslado_foto`, `contacto_personal`, `contacto_tutor`, `estado`, `rol`) VALUES
(1, '', '', '', 20, '', 'administrador', 'admin', 'admin@gmail', '', '', '', '', '', '', 'admin'),
(2, 'Cris', 'Abeme', '6', 12, 'Oyyala', '', 'cristiano', 'cristina@gmail.com', '', '', '', '2272789', '8378378', 'espera', ''),
(14, 'Anjabi', 'Ndong', '6', 15, 'Bata', 'Antonio', 'antonio', 'antonio@gmail.com', '', '', 'ft3.jpg', '22254687', '78728', 'espera', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
