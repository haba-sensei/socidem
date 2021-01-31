-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2020 a las 19:21:03
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fashionbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bannhm`
--

CREATE TABLE `bannhm` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_spanish2_ci NOT NULL,
  `link` text COLLATE utf8_spanish2_ci NOT NULL,
  `save` text COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `bannhm`
--

INSERT INTO `bannhm` (`id`, `img`, `link`, `save`, `titulo`) VALUES
(1, 'sub-banner1.jpg', 'javascript:', 'save 30%', 'Hombres'),
(2, 'sub-banner2.jpg', 'javascript:', 'save 60%', 'Mujeres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fashion_trends`
--

CREATE TABLE `fashion_trends` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_spanish2_ci NOT NULL,
  `titulo1` text COLLATE utf8_spanish2_ci NOT NULL,
  `titulo2` text COLLATE utf8_spanish2_ci NOT NULL,
  `subtitulo` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `fashion_trends`
--

INSERT INTO `fashion_trends` (`id`, `img`, `titulo1`, `titulo2`, `subtitulo`) VALUES
(1, '1.jpg', '2020', 'fashion trends', 'special offer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `img`) VALUES
(1, '1.png'),
(2, '2.png'),
(3, '3.png'),
(4, '4.png'),
(5, '5.png'),
(6, '6.png'),
(7, '7.png'),
(8, '8.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `correo` text COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` text COLLATE utf8_spanish2_ci NOT NULL,
  `pais` text COLLATE utf8_spanish2_ci NOT NULL,
  `ciudad` text COLLATE utf8_spanish2_ci NOT NULL,
  `imagen_perfil` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `correo`, `telefono`, `pais`, `ciudad`, `imagen_perfil`) VALUES
(1, 'a@gmail.com', '123-123-1234', 'venezuela', 'araure', '2.jpg'),
(2, 'b@gmail.com', '123-123-1234', 'venezuela', 'acarigua', '2.jpg'),
(3, 'c@gmail.com', '123-123-1234', 'asdas', 'asdasd', '2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider_principal`
--

CREATE TABLE `slider_principal` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish2_ci NOT NULL,
  `subtitulo` text COLLATE utf8_spanish2_ci NOT NULL,
  `btnUrl` text COLLATE utf8_spanish2_ci NOT NULL,
  `btnText` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `slider_principal`
--

INSERT INTO `slider_principal` (`id`, `img`, `titulo`, `subtitulo`, `btnUrl`, `btnText`) VALUES
(1, '1.jpg', 'welcome to fashion', 'men fashion', 'javascript:', 'shop now'),
(2, '2.jpg', 'welcome to fashion', 'women fashion', 'javascript:', 'shop now');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `usuario` text NOT NULL,
  `correo` text NOT NULL,
  `clave` text NOT NULL,
  `perfil` text NOT NULL,
  `estado` int(11) NOT NULL,
  `last_login` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `correo`, `clave`, `perfil`, `estado`, `last_login`) VALUES
(1, 'admin', 'master2', 'admin_user', 'a@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 'Saturday 17th October 2020 01:03:35 PM'),
(2, 'jorge', 'acosta', 'asd', 'b@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'vendedor', 1, 'Friday 16th October 2020 03:14:07 PM'),
(3, 'luis', 'falla', 'd', 'c@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'vendedor', 1, 'Friday 16th October 2020 07:46:44 PM'),
(29, 'asdad', 'asdasda', 'g', 'z@gmail.com', '202cb962ac59075b964b07152d234b70', 'cliente', 1, 'Friday 16th October 2020 03:14:07 PM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bannhm`
--
ALTER TABLE `bannhm`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fashion_trends`
--
ALTER TABLE `fashion_trends`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider_principal`
--
ALTER TABLE `slider_principal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bannhm`
--
ALTER TABLE `bannhm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fashion_trends`
--
ALTER TABLE `fashion_trends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `slider_principal`
--
ALTER TABLE `slider_principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
