-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-07-2017 a las 15:39:47
-- Versión del servidor: 5.7.18-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smsperutec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id` int(11) NOT NULL,
  `id_clientes` int(11) NOT NULL,
  `detalle` text NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id`, `id_clientes`, `detalle`, `fecha_creacion`) VALUES
(1, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su cita programada el 2017-05-01 con PERUTEC SAC - Lo Esperamos - Gracias', '2017-05-02 03:44:14'),
(2, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su cita programada el 2017-05-01 con PERUTEC SAC - Lo Esperamos - Gracias', '2017-05-02 03:46:16'),
(3, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su cita programada el 2017-05-01 con PERUTEC SAC - Lo Esperamos - Gracias', '2017-05-02 03:53:48'),
(4, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su cita programada el 01/05/2017 con PERUTEC SAC - Lo Esperamos - Gracias', '2017-05-02 03:59:27'),
(5, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su cita programada el 01/05/2017 con PERUTEC SAC - Lo Esperamos - Gracias', '2017-05-02 04:04:04'),
(6, 1, 'Sr(a) ".$fullname.", para hacerle recordar su cita programada el ".$fecha." con PERUTEC SAC - Lo Esperamos - Gracias"', '2017-05-02 04:22:31'),
(7, 1, 'Sr(a) ".$fullname.", para hacerle recordar su cita programada el ".$fecha." con PERUTEC SAC - Lo Esperamos - Gracias"', '2017-05-02 04:24:47'),
(8, 1, 'Sr(a) ".$fullname.", para hacerle recordar su cita programada el ".$fecha." con PERUTEC SAC - Lo Esperamos - Gracias"', '2017-05-02 04:25:15'),
(9, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su cita programada el 01/05/2017 con PERUTEC SAC - Lo Esperamos - Gracias', '2017-05-02 04:28:55'),
(10, 1, 'Sr(a) ".$fullname.", para hacerle recordar su cita programada el ".$fecha." con PERUTEC SAC - Lo Esperamos - Gracias"', '2017-05-02 04:44:18'),
(11, 1, 'Sr(a) , para hacerle recordar su cita programada el  con PERUTEC SAC - Lo Esperamos - Gracias', '2017-05-02 05:06:16'),
(12, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su cita programada el 02/05/2017 con PERUTEC SAC - Lo Esperamos - Gracias', '2017-05-02 05:07:59'),
(13, 1, '"Sr(a) ".$fullname.", para hacerle recordar su cita programada el ".$fecha." con PERUTEC SAC - Lo Esperamos - Gracias"', '2017-05-02 05:11:48'),
(14, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su visita de consultoria a la empresa CREATIVO EPM el dia  02/05/2017 - Gracias', '2017-05-02 05:15:58'),
(15, 2, 'Sr(a) JOSE ADRIAN, para hacerle recordar su visita de consultoria a la empresa CREATIVO EPM el dia  02/05/2017 - Gracias', '2017-05-02 05:16:25'),
(16, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su visita de consultoria a la empresa CREATIVO EPM el dia  02/05/2017 - Gracias', '2017-05-02 05:22:28'),
(17, 3, 'Sr(a) ANDREA  ALVARADO, para hacerle recordar su visita de consultoria a la empresa CREATIVO EPM el dia  03/05/2017 - Gracias', '2017-05-04 01:32:51'),
(18, 3, 'Sr(a) ANDREA  ALVARADO, para hacerle recordar su visita de consultoria a la empresa CREATIVO EPM el dia  03/05/2017 - Gracias', '2017-05-04 01:33:08'),
(19, 2, 'Sr(a) JOSE ADRIAN, para hacerle recordar su visita de consultoria a la empresa CREATIVO EPM el dia  06/05/2017 - Gracias', '2017-05-06 21:05:34'),
(20, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su visita de consultoria a la empresa CREATIVO EPM el dia  06/05/2017 - Gracias', '2017-05-06 23:26:31'),
(21, 3, 'Sr(a) JORGE REYNA, para hacerle recordar su visita de consultoria a la empresa CREATIVO EPM el dia  10/05/2017 - Gracias', '2017-05-10 20:06:19'),
(22, 3, 'Sr(a) JORGE REYNA, para hacerle recordar su visita de consultoria a la empresa CREATIVO EPM el dia  10/05/2017 - Gracias', '2017-05-10 20:07:39'),
(23, 2, 'Sr(a) JOSE ADRIAN, para hacerle recordar su visita de consultoria a la empresa CREATIVO EPM el dia  12/05/2017 - Gracias', '2017-05-13 00:59:49'),
(24, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su visita de consultoria a la empresa CREATIVO EPM el dia  12/05/2017 - Gracias', '2017-05-13 00:59:58'),
(25, 1, 'Sr(a) LUIS CLAUDIO, para hacerle recordar su cita programada el 14/05/2017 con PERUTEC SAC - Lo(@) Esperamos - Gracias', '2017-05-14 05:24:29'),
(26, 4, 'Sr(a) MISY , para hacerle recordar su cita programada el 14/05/2017 con PERUTEC SAC - Lo(@) Esperamos - Gracias', '2017-05-14 05:27:15'),
(27, 1, 'Sr(a) LUIS CLAUDIO, para recordarle los cambios subidos a Trello(App Costos) - Gracias', '2017-05-16 23:29:12'),
(28, 1, 'Sr(a) LUIS CLAUDIO, para recordarle los cambios subidos a Trello(App Costos)- 16/05/2017 - Gracias', '2017-05-16 23:30:35'),
(29, 2, 'Sr(a) JOSE ADRIAN, para recordarle los cambios subidos a Trello(App Costos)- 16/05/2017 - Gracias', '2017-05-16 23:30:59'),
(30, 6, 'Sr(a) ISA ZUMAETA, para recordarle los cambios subidos a Trello(App Costos)- 16/05/2017 - Gracias', '2017-05-16 23:31:10'),
(31, 5, 'Sr(a) JUAN CASTILLO, para recordarle los cambios subidos a Trello(App Costos)- 16/05/2017 - Gracias', '2017-05-16 23:31:18'),
(32, 1, 'Sr(a) LUIS CLAUDIO, para recordarle los cambios subidos a Trello(App Costos)- 20/05/2017 - Gracias', '2017-05-20 01:18:55'),
(33, 1, 'Sr(a) LUIS CLAUDIO, para recordarle los cambios subidos a Trello(App Costos)- 27/05/2017 - Gracias', '2017-05-28 04:09:36'),
(34, 6, 'Sr(a) ISA ZUMAETA, para recordarle los cambios subidos a Trello(App Costos)- 29/05/2017 - Gracias', '2017-05-29 20:37:06'),
(35, 1, 'Sr(a) LUIS CLAUDIO, para recordarle los cambios subidos a Trello(App Costos)- 01/06/2017 - Gracias', '2017-06-01 20:47:06'),
(36, 1, 'Sr(a) LUIS CLAUDIO, para recordarle los cambios subidos a Trello(App Costos)- 01/06/2017 - Gracias', '2017-06-01 20:47:47'),
(37, 2, 'Sr(a) JOSE ADRIAN, para recordarle los cambios subidos a Trello(App Costos)- 01/06/2017 - Gracias', '2017-06-01 20:48:22'),
(38, 1, 'Sr(a) LUIS CLAUDIO, para recordarle los cambios subidos a Trello(App Costos)- 01/06/2017 - Gracias', '2017-06-02 04:22:53'),
(39, 2, 'Sr(a) JOSE ADRIAN, para recordarle los cambios subidos a Trello(App Costos)- 05/06/2017 - Gracias', '2017-06-06 02:58:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombres`, `apellidos`, `numero`, `fecha_creacion`) VALUES
(1, 'LUIS', 'CLAUDIO', '997935085', '2017-05-02 03:07:56'),
(2, 'JOSE', 'ADRIAN', '991564111', '2017-05-02 03:54:54'),
(3, 'JORGE', 'REYNA', '5930982705363', '2017-05-04 01:31:49'),
(4, 'MISY', '', '949604889', '2017-05-14 05:26:24'),
(5, 'JUAN', 'CASTILLO', '994660120', '2017-05-16 23:28:57'),
(6, 'ISA', 'ZUMAETA', '989245578', '2017-05-16 23:28:57'),
(7, 'RUBEN', '', '945537733', '2017-05-27 05:39:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantilla`
--

CREATE TABLE `plantilla` (
  `id` int(11) NOT NULL,
  `mensaje` varchar(140) NOT NULL,
  `item` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plantilla`
--

INSERT INTO `plantilla` (`id`, `mensaje`, `item`, `tipo`, `fecha_creacion`) VALUES
(1, '"Sr(a) ".$fullname.", para hacerle recordar su cita programada el ".$fecha." con PERUTEC SAC - Lo Esperamos - Gracias"', 1, 1, '2017-05-02 04:09:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `usuario`, `pass`, `fecha_creacion`) VALUES
(1, 'LUIS AUGUSTO', '46794282', '287adce16e31c75db5a3c1f5e4317105', '2017-05-02 02:57:13'),
(2, 'JOSE ADRIAN', '45119735', 'a13dec27eebdeab2fd2dff986c0a3d2f', '2017-05-02 04:21:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `plantilla`
--
ALTER TABLE `plantilla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
