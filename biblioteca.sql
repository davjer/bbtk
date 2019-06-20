-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-06-2019 a las 22:50:46
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lib_libros`
--

CREATE TABLE `lib_libros` (
  `lib_id` int(11) NOT NULL,
  `lib_nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `lib_review` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `lib_autor` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `lib_editorial` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `lib_usu_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lib_libros`
--

INSERT INTO `lib_libros` (`lib_id`, `lib_nombre`, `lib_review`, `lib_autor`, `lib_editorial`, `lib_usu_id`) VALUES
(1, 'Amnistia vs. Derechos Humanos. Buscando justicia', 'El presente informeDefensorial presenta los antecedes y el contexto político, institucional yjurídico en el que se promulgaron las leyes de amnistía y los parámetros devaloración, análisis y solución a las graves violaciones a los derechos humanosen el Perú. Asimismo, se analizan los límites de l...\r\n', 'Abad, Samuel; Soria, Daniel', 'Defensoría del Pueblo', 0),
(2, '\r\nLa problemática de los desplazados internos por violencia política y la comunidad internacional', 'Con la finalidad de queel tema del desplazamiento interno sea fácil de comprender es que la presente tesisuniversitaria ha sido elaborada en tres partes, mediante las cuales se ofreceun panorama de toda la problemática que envuelve al tema del desplazamiento. Enel Título Primero, se desarrolla to..', 'Abdala Tolay, Gandhira', 'Universidad Nacional Mayor de San Marcos. Programa Cybertesis', 0),
(3, '\r\nPrensa y violencia política (1980-1995). Aproximación a las visiones de los derechos humanos en el Perú', '\r\nEl presente trabajoofrece una aproximación a los cambios experimentados en una parte significativade las visiones sobre la violencia política y en especial respecto a losderechos humanos construidas en el Perú,puestas de relieve por un sector importante de la prensa nacional apartir de casos de e...', '\r\nAcevedo, Jorge', '\r\nLima. Asociación de Comunicadores Sociales Calandria, 2002, 145 pp', 1),
(4, 'Los rendidos. Sobre el don de perdonar', '\r\n"La naturalezade este documento es algo indefinida. Por su forma agrupa relatos cortos, amedia carrera entre reflexiones y apuntes biográficos de una época deviolencia. Llamémoslos textos de no-ficción, sencillos, para no enrarecer másel entreverado campo de la memoria. Sin embargo su contenido n', 'Agüero, José Carlos', 'Instituto de Estudios Peruanos (IEP)', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usu_usuarios`
--

CREATE TABLE `usu_usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `usu_password` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `usu_nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `usu_apellido` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usu_usuarios`
--

INSERT INTO `usu_usuarios` (`usu_id`, `usu_email`, `usu_password`, `usu_nombre`, `usu_apellido`) VALUES
(1, 'admin@mail.com', '123456', 'jhon', 'doe'),
(2, 'user1@mail.com', '123456', 'chriss', 'anderson'),
(3, 'user1@mail.com', '123456', 'user1', 'apellido 1'),
(4, 'mail3@mail.com', '123456', 'nombre3', 'apellido3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lib_libros`
--
ALTER TABLE `lib_libros`
  ADD PRIMARY KEY (`lib_id`);

--
-- Indices de la tabla `usu_usuarios`
--
ALTER TABLE `usu_usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lib_libros`
--
ALTER TABLE `lib_libros`
  MODIFY `lib_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usu_usuarios`
--
ALTER TABLE `usu_usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
