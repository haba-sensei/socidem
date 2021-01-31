-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2020 a las 05:49:45
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `bann_hm`
--

CREATE TABLE `bann_hm` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_spanish2_ci NOT NULL,
  `link` text COLLATE utf8_spanish2_ci NOT NULL,
  `save` text COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `bann_hm`
--

INSERT INTO `bann_hm` (`id`, `img`, `link`, `save`, `titulo`) VALUES
(1, 'sub-banner1.jpg', 'javascript:', 'save 30%', 'Hombres'),
(2, 'sub-banner2.jpg', 'javascript:', 'save 60%', 'Mujeres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bann_promo`
--

CREATE TABLE `bann_promo` (
  `id` int(11) NOT NULL,
  `img` text COLLATE utf8_spanish2_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish2_ci NOT NULL,
  `subtitulo` text COLLATE utf8_spanish2_ci NOT NULL,
  `link` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `bann_promo`
--

INSERT INTO `bann_promo` (`id`, `img`, `titulo`, `subtitulo`, `link`) VALUES
(1, '5.jpg', 'casual collection', 'festive sale', 'javascript:'),
(2, '6.jpg', 'going out collection', 'upto 80% off', 'javascript:'),
(3, '8.jpg', 'shoes & sandle', 'new collection', 'javascript:');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `short-name` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `short-name`, `estado`) VALUES
(1, 'algo 1', 'algo-1', 1),
(2, 'algo 2', 'algo-2', 1),
(3, 'algo 3', 'algo-3', 1),
(4, 'algo 4', 'algo-4', 1),
(5, 'algo5', 'algo-5', 1),
(6, 'algo 6', 'algo-6', 1),
(7, 'algo 7', 'algo-7', 1);

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
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `img` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `img`) VALUES
(1, 'nike1', '1.png'),
(2, 'nike2', '2.png'),
(3, 'nike3', '3.png'),
(4, 'nike4', '4.png'),
(5, 'nike5', '5.png'),
(6, 'nike6', '6.png'),
(7, 'nike7', '7.png'),
(8, 'nike8', '8.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moneda`
--

CREATE TABLE `moneda` (
  `id` int(11) NOT NULL,
  `moneda` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `moneda`
--

INSERT INTO `moneda` (`id`, `moneda`) VALUES
(1, '₡');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_menu`
--

CREATE TABLE `orden_menu` (
  `id` int(11) NOT NULL,
  `nosotros` int(11) NOT NULL,
  `comprar` int(11) NOT NULL,
  `vendedores` int(11) NOT NULL,
  `contacto` int(11) NOT NULL,
  `como_ser_vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `orden_menu`
--

INSERT INTO `orden_menu` (`id`, `nosotros`, `comprar`, `vendedores`, `contacto`, `como_ser_vendedor`) VALUES
(1, 1, 2, 3, 4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `original`
--

CREATE TABLE `original` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `original`
--

INSERT INTO `original` (`id`, `nombre`) VALUES
(1, 'si'),
(2, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nro_orden` text NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `productos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`productos`)),
  `medio` text NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data`)),
  `totalLocal` double(6,2) NOT NULL,
  `totalUSD` double(6,2) NOT NULL,
  `tazaCambio` double(6,2) NOT NULL,
  `fecha` text NOT NULL,
  `estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `nro_orden`, `id_cliente`, `productos`, `medio`, `data`, `totalLocal`, `totalUSD`, `tazaCambio`, `fecha`, `estado`) VALUES
(1, 'OP000000', 1, '[{\"idProd\":\"10\",\"nombreProd\":\"jSlim Fit Cotton Shirt 10\",\"precioLocal\":500,\"precioUSD\":0.83}]', 'paypal', '{\"1\":{\"transID\":\"4F694394GB433292W\",\"estatus\":\"COMPLETED\",\"name_client\":\"John\",\"email_client\":null,\"country_client\":\"PE\",\"create_time\":\"2020-11-07T17:11:10Z\",\"update_time\":\"2020-11-07T17:11:37Z\"}}', 500.00, 0.83, 605.74, 'Saturday 7th November 2020 12:11:40 PM', 'COMPLETED'),
(2, 'OP000001', 1, '[{\"idProd\":\"10\",\"nombreProd\":\"jSlim Fit Cotton Shirt 10\",\"precioLocal\":500,\"precioUSD\":0.83},{\"idProd\":\"9\",\"nombreProd\":\"iSlim Fit Cotton Shirt 9\",\"precioLocal\":500,\"precioUSD\":0.83},{\"idProd\":\"8\",\"nombreProd\":\"hSlim Fit Cotton Shirt 8\",\"precioLocal\":500,\"precioUSD\":0.83},{\"idProd\":\"7\",\"nombreProd\":\"gSlim Fit Cotton Shirt 7\",\"precioLocal\":500,\"precioUSD\":0.83},{\"idProd\":\"3\",\"nombreProd\":\"cSlim Fit Cotton Shirt 3\",\"precioLocal\":500,\"precioUSD\":0.83}]', 'paypal', '{\"1\":{\"transID\":\"8CX842870A868232L\",\"estatus\":\"COMPLETED\",\"name_client\":\"John\",\"email_client\":null,\"country_client\":\"PE\",\"create_time\":\"2020-11-12T00:07:01Z\",\"update_time\":\"2020-11-12T00:07:41Z\"}}', 2500.00, 4.13, 605.74, 'Wednesday 11th November 2020 07:07:44 PM', 'COMPLETED');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `correo` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `pais` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ciudad` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `distrito` text NOT NULL,
  `direccion` text NOT NULL,
  `imagen_perfil` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ban_perfil` text NOT NULL,
  `detalles` text NOT NULL,
  `tipo` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `log_rating` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `correo`, `telefono`, `pais`, `ciudad`, `distrito`, `direccion`, `imagen_perfil`, `ban_perfil`, `detalles`, `tipo`, `log_rating`) VALUES
(1, 'a@gmail.com', '123-123-1234', 'venezuela', 'araure', 'sadd', 'asda', '2.jpg', '12.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eligendi modi deleniti quas enim quam debitis rerum quod nihil, dignissimos voluptatum nam corporis ut architecto voluptatem, vero ea praesentium reprehenderit.', 'normal', '{\"log_rating\":{\"1\":{\"idProd\":\"1\",\"rating\":\"3\"},\"2\":{\"idProd\":\"2\",\"rating\":\"3\"},\"3\":{\"idProd\":\"3\",\"rating\":\"3\"}}}'),
(2, 'b@gmail.com', '123-123-1234', 'venezuela', 'acarigua', 'sss', 'ddd', '1.jpg', '12.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eligendi modi deleniti quas enim quam debitis rerum quod nihil, dignissimos voluptatum nam corporis ut architecto voluptatem, vero ea praesentium reprehenderit.', 'destacado', '{\"log_rating\":{\"1\":{\"idProd\":\"1\",\"rating\":\"3\"},\"2\":{\"idProd\":\"2\",\"rating\":\"3\"},\"3\":{\"idProd\":\"3\",\"rating\":\"3\"}}}'),
(3, 'c@gmail.com', '123-123-1234', 'asdas', 'asdasd', 'aa', 'ssd', '2.jpg', '12.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eligendi modi deleniti quas enim quam debitis rerum quod nihil, dignissimos voluptatum nam corporis ut architecto voluptatem, vero ea praesentium reprehenderit.', 'destacado', '{\"log_rating\":{\"1\":{\"idProd\":\"1\",\"rating\":\"3\"},\"2\":{\"idProd\":\"2\",\"rating\":\"3\"},\"3\":{\"idProd\":\"3\",\"rating\":\"3\"}}}'),
(4, 'd@gmail.com', '123-123-1234', 'asdas', 'asdasd', 'rew', 'qwe', '3.jpg', '12.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eligendi modi deleniti quas enim quam debitis rerum quod nihil, dignissimos voluptatum nam corporis ut architecto voluptatem, vero ea praesentium reprehenderit.', 'destacado', '{\"log_rating\":{\"1\":{\"idProd\":\"1\",\"rating\":\"3\"},\"2\":{\"idProd\":\"2\",\"rating\":\"3\"},\"3\":{\"idProd\":\"3\",\"rating\":\"3\"}}}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `shortname` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `categoria` int(11) NOT NULL,
  `detalle` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `detalle_largo` text NOT NULL,
  `variaciones` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `precio` double(6,2) NOT NULL,
  `descuento` int(11) NOT NULL,
  `tipo` text NOT NULL,
  `imagen` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`imagen`)),
  `rating` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`rating`)),
  `Fregistro` text NOT NULL,
  `num_ventas` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_vendedor`, `nombre`, `shortname`, `categoria`, `detalle`, `detalle_largo`, `variaciones`, `precio`, `descuento`, `tipo`, `imagen`, `rating`, `Fregistro`, `num_ventas`, `estado`) VALUES
(1, 2, 'aSlim Fit Cotton Shirt 1', 'slim-fit-cotton-shirt-1', 2, 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.', '{\"variaciones\":{\"talla\":{\"name\":\"S\"},\"marca\":{\"name\":\"nike2\"},\"original\":{\"opcion\":\"no\"}}}', 400.00, 0, 'promocional', '{\"Imagenes\":{\"front\":{\"name\":\"front\",\"url\":\"1.jpg\"},\"back\":{\"name\":\"front\",\"url\":\"2.jpg\"},\"slider1\":{\"name\":\"slider 1\",\"url\":\"1.jpg\"},\"slider2\":{\"name\":\"slider 2\",\"url\":\"2.jpg\"},\"slider3\":{\"name\":\"slider 3\",\"url\":\"3.jpg\"},\"slider4\":{\"name\":\"slider 4\",\"url\":\"4.jpg\"}}}', '{\"rating\":{\"1\":{\"name\":\"1 estrella\",\"cantidad\":\"0\"},\"2\":{\"name\":\"2 estrella\",\"cantidad\":\"1\"},\"3\":{\"name\":\"3 estrella\",\"cantidad\":\"2\"},\"4\":{\"name\":\"4 estrella\",\"cantidad\":\"3\"},\"5\":{\"name\":\"5 estrella\",\"cantidad\":\"4\"},\"promedio\":{\"total\":\"4.11\"}}}', '26/10/2020', 10, 1),
(2, 3, 'bSlim Fit Cotton Shirt 2', 'slim-fit-cotton-shirt', 2, 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.', '{\"variaciones\":{\"talla\":{\"name\":\"S\"},\"marca\":{\"name\":\"nike1\"},\"original\":{\"opcion\":\"no\"}}}', 800.00, 30, 'promocional', '{\"Imagenes\":{\"front\":{\"name\":\"front\",\"url\":\"3.jpg\"},\"back\":{\"name\":\"front\",\"url\":\"4.jpg\"},\"slider1\":{\"name\":\"slider 1\",\"url\":\"1.jpg\"},\"slider2\":{\"name\":\"slider 2\",\"url\":\"2.jpg\"},\"slider3\":{\"name\":\"slider 3\",\"url\":\"3.jpg\"},\"slider4\":{\"name\":\"slider 4\",\"url\":\"4.jpg\"}}}', '{\"rating\":{\"1\":{\"name\":\"1 estrella\",\"cantidad\":\"0\"},\"2\":{\"name\":\"2 estrella\",\"cantidad\":\"1\"},\"3\":{\"name\":\"3 estrella\",\"cantidad\":\"2\"},\"4\":{\"name\":\"4 estrella\",\"cantidad\":\"3\"},\"5\":{\"name\":\"5 estrella\",\"cantidad\":\"4\"},\"promedio\":{\"total\":\"4.11\"}}}', '26/10/2020', 4, 1),
(3, 2, 'cSlim Fit Cotton Shirt 3', 'slim-fit-cotton-shirt', 2, 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.', '{\"variaciones\":{\"talla\":{\"name\":\"S\"},\"marca\":{\"name\":\"nike1\"},\"original\":{\"opcion\":\"si\"}}}', 500.00, 30, 'promocional', '{\"Imagenes\":{\"front\":{\"name\":\"front\",\"url\":\"5.jpg\"},\"back\":{\"name\":\"front\",\"url\":\"6.jpg\"},\"slider1\":{\"name\":\"slider 1\",\"url\":\"1.jpg\"},\"slider2\":{\"name\":\"slider 2\",\"url\":\"2.jpg\"},\"slider3\":{\"name\":\"slider 3\",\"url\":\"3.jpg\"},\"slider4\":{\"name\":\"slider 4\",\"url\":\"4.jpg\"}}}', '{\"rating\":{\"1\":{\"name\":\"1 estrella\",\"cantidad\":\"0\"},\"2\":{\"name\":\"2 estrella\",\"cantidad\":\"1\"},\"3\":{\"name\":\"3 estrella\",\"cantidad\":\"2\"},\"4\":{\"name\":\"4 estrella\",\"cantidad\":\"3\"},\"5\":{\"name\":\"5 estrella\",\"cantidad\":\"4\"},\"promedio\":{\"total\":\"4.11\"}}}', '26/10/2020', 5, 1),
(4, 3, 'dSlim Fit Cotton Shirt 4', 'slim-fit-cotton-shirt', 1, 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.', '{\"variaciones\":{\"talla\":{\"name\":\"S\"},\"marca\":{\"name\":\"nike1\"},\"original\":{\"opcion\":\"si\"}}}', 500.00, 30, 'promocional', '{\"Imagenes\":{\"front\":{\"name\":\"front\",\"url\":\"7.jpg\"},\"back\":{\"name\":\"front\",\"url\":\"8.jpg\"},\"slider1\":{\"name\":\"slider 1\",\"url\":\"1.jpg\"},\"slider2\":{\"name\":\"slider 2\",\"url\":\"2.jpg\"},\"slider3\":{\"name\":\"slider 3\",\"url\":\"3.jpg\"},\"slider4\":{\"name\":\"slider 4\",\"url\":\"4.jpg\"}}}', '{\"rating\":{\"1\":{\"name\":\"1 estrella\",\"cantidad\":\"0\"},\"2\":{\"name\":\"2 estrella\",\"cantidad\":\"1\"},\"3\":{\"name\":\"3 estrella\",\"cantidad\":\"2\"},\"4\":{\"name\":\"4 estrella\",\"cantidad\":\"3\"},\"5\":{\"name\":\"5 estrella\",\"cantidad\":\"4\"},\"promedio\":{\"total\":\"4.11\"}}}', '26/10/2020', 7, 1),
(5, 2, 'eSlim Fit Cotton Shirt 5', 'slim-fit-cotton-shirt', 1, 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.', '{\"variaciones\":{\"talla\":{\"name\":\"S\"},\"marca\":{\"name\":\"nike1\"},\"original\":{\"opcion\":\"si\"}}}', 500.00, 30, 'promocional', '{\"Imagenes\":{\"front\":{\"name\":\"front\",\"url\":\"9.jpg\"},\"back\":{\"name\":\"front\",\"url\":\"10.jpg\"},\"slider1\":{\"name\":\"slider 1\",\"url\":\"1.jpg\"},\"slider2\":{\"name\":\"slider 2\",\"url\":\"2.jpg\"},\"slider3\":{\"name\":\"slider 3\",\"url\":\"3.jpg\"},\"slider4\":{\"name\":\"slider 4\",\"url\":\"4.jpg\"}}}', '{\"rating\":{\"1\":{\"name\":\"1 estrella\",\"cantidad\":\"0\"},\"2\":{\"name\":\"2 estrella\",\"cantidad\":\"1\"},\"3\":{\"name\":\"3 estrella\",\"cantidad\":\"2\"},\"4\":{\"name\":\"4 estrella\",\"cantidad\":\"3\"},\"5\":{\"name\":\"5 estrella\",\"cantidad\":\"4\"},\"promedio\":{\"total\":\"4.11\"}}}', '26/10/2020', 87, 1),
(6, 3, 'fSlim Fit Cotton Shirt 6', 'slim-fit-cotton-shirt', 1, 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.', '{\"variaciones\":{\"talla\":{\"name\":\"S\"},\"marca\":{\"name\":\"nike1\"},\"original\":{\"opcion\":\"si\"}}}', 500.00, 30, 'destacado', '{\"Imagenes\":{\"front\":{\"name\":\"front\",\"url\":\"11.jpg\"},\"back\":{\"name\":\"front\",\"url\":\"12.jpg\"},\"slider1\":{\"name\":\"slider 1\",\"url\":\"1.jpg\"},\"slider2\":{\"name\":\"slider 2\",\"url\":\"2.jpg\"},\"slider3\":{\"name\":\"slider 3\",\"url\":\"3.jpg\"},\"slider4\":{\"name\":\"slider 4\",\"url\":\"4.jpg\"}}}', '{\"rating\":{\"1\":{\"name\":\"1 estrella\",\"cantidad\":\"0\"},\"2\":{\"name\":\"2 estrella\",\"cantidad\":\"1\"},\"3\":{\"name\":\"3 estrella\",\"cantidad\":\"2\"},\"4\":{\"name\":\"4 estrella\",\"cantidad\":\"3\"},\"5\":{\"name\":\"5 estrella\",\"cantidad\":\"4\"},\"promedio\":{\"total\":\"4.11\"}}}', '26/10/2020', 45, 1),
(7, 4, 'gSlim Fit Cotton Shirt 7', 'slim-fit-cotton-shirt', 1, 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.', '{\"variaciones\":{\"talla\":{\"name\":\"S\"},\"marca\":{\"name\":\"nike1\"},\"original\":{\"opcion\":\"si\"}}}', 500.00, 30, 'destacado', '{\"Imagenes\":{\"front\":{\"name\":\"front\",\"url\":\"13.jpg\"},\"back\":{\"name\":\"front\",\"url\":\"14.jpg\"},\"slider1\":{\"name\":\"slider 1\",\"url\":\"1.jpg\"},\"slider2\":{\"name\":\"slider 2\",\"url\":\"2.jpg\"},\"slider3\":{\"name\":\"slider 3\",\"url\":\"3.jpg\"},\"slider4\":{\"name\":\"slider 4\",\"url\":\"4.jpg\"}}}', '{\"rating\":{\"1\":{\"name\":\"1 estrella\",\"cantidad\":\"0\"},\"2\":{\"name\":\"2 estrella\",\"cantidad\":\"1\"},\"3\":{\"name\":\"3 estrella\",\"cantidad\":\"2\"},\"4\":{\"name\":\"4 estrella\",\"cantidad\":\"3\"},\"5\":{\"name\":\"5 estrella\",\"cantidad\":\"4\"},\"promedio\":{\"total\":\"4.11\"}}}', '26/10/2020', 12, 1),
(8, 3, 'hSlim Fit Cotton Shirt 8', 'slim-fit-cotton-shirt', 1, 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.', '{\"variaciones\":{\"talla\":{\"name\":\"S\"},\"marca\":{\"name\":\"nike1\"},\"original\":{\"opcion\":\"si\"}}}', 500.00, 30, 'destacado', '{\"Imagenes\":{\"front\":{\"name\":\"front\",\"url\":\"15.jpg\"},\"back\":{\"name\":\"front\",\"url\":\"16.jpg\"},\"slider1\":{\"name\":\"slider 1\",\"url\":\"1.jpg\"},\"slider2\":{\"name\":\"slider 2\",\"url\":\"2.jpg\"},\"slider3\":{\"name\":\"slider 3\",\"url\":\"3.jpg\"},\"slider4\":{\"name\":\"slider 4\",\"url\":\"4.jpg\"}}}', '{\"rating\":{\"1\":{\"name\":\"1 estrella\",\"cantidad\":\"0\"},\"2\":{\"name\":\"2 estrella\",\"cantidad\":\"1\"},\"3\":{\"name\":\"3 estrella\",\"cantidad\":\"2\"},\"4\":{\"name\":\"4 estrella\",\"cantidad\":\"3\"},\"5\":{\"name\":\"5 estrella\",\"cantidad\":\"4\"},\"promedio\":{\"total\":\"4.11\"}}}', '26/10/2020', 133, 1),
(9, 2, 'iSlim Fit Cotton Shirt 9', 'slim-fit-cotton-shirt', 1, 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.', '{\"variaciones\":{\"talla\":{\"name\":\"S\"},\"marca\":{\"name\":\"nike1\"},\"original\":{\"opcion\":\"si\"}}}', 500.00, 30, 'destacado', '{\"Imagenes\":{\"front\":{\"name\":\"front\",\"url\":\"17.jpg\"},\"back\":{\"name\":\"front\",\"url\":\"18.jpg\"},\"slider1\":{\"name\":\"slider 1\",\"url\":\"1.jpg\"},\"slider2\":{\"name\":\"slider 2\",\"url\":\"2.jpg\"},\"slider3\":{\"name\":\"slider 3\",\"url\":\"3.jpg\"},\"slider4\":{\"name\":\"slider 4\",\"url\":\"4.jpg\"}}}', '{\"rating\":{\"1\":{\"name\":\"1 estrella\",\"cantidad\":\"0\"},\"2\":{\"name\":\"2 estrella\",\"cantidad\":\"1\"},\"3\":{\"name\":\"3 estrella\",\"cantidad\":\"2\"},\"4\":{\"name\":\"4 estrella\",\"cantidad\":\"3\"},\"5\":{\"name\":\"5 estrella\",\"cantidad\":\"4\"},\"promedio\":{\"total\":\"4.11\"}}}', '26/10/2020', 22, 1),
(10, 3, 'jSlim Fit Cotton Shirt 10', 'slim-fit-cotton-shirt', 1, 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos est vel molestias, delectus voluptate fuga assumenda deserunt alias atque. Inventore voluptates, provident quidem necessitatibus magni natus! Voluptatibus magnam vero consequuntur.', '{\"variaciones\":{\"talla\":{\"name\":\"S\"},\"marca\":{\"name\":\"nike1\"},\"original\":{\"opcion\":\"si\"}}}', 500.00, 30, 'destacado', '{\"Imagenes\":{\"front\":{\"name\":\"front\",\"url\":\"19.jpg\"},\"back\":{\"name\":\"front\",\"url\":\"20.jpg\"},\"slider1\":{\"name\":\"slider 1\",\"url\":\"1.jpg\"},\"slider2\":{\"name\":\"slider 2\",\"url\":\"2.jpg\"},\"slider3\":{\"name\":\"slider 3\",\"url\":\"3.jpg\"},\"slider4\":{\"name\":\"slider 4\",\"url\":\"4.jpg\"}}}', '{\"rating\":{\"1\":{\"name\":\"1 estrella\",\"cantidad\":\"0\"},\"2\":{\"name\":\"2 estrella\",\"cantidad\":\"1\"},\"3\":{\"name\":\"3 estrella\",\"cantidad\":\"2\"},\"4\":{\"name\":\"4 estrella\",\"cantidad\":\"3\"},\"5\":{\"name\":\"5 estrella\",\"cantidad\":\"4\"},\"promedio\":{\"total\":\"4.11\"}}}', '26/10/2020', 0, 1);

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
(1, '1.jpg', 'welcome to fashion', 'men fashion', 'javascript:', 'Comprar Ahora'),
(2, '2.jpg', 'welcome to fashion', 'women fashion', 'javascript:', 'Comprar Ahora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`id`, `nombre`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

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
(1, 'admin', 'master2', 'admin_user', 'a@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 'Saturday 21st November 2020 01:36:15 AM'),
(2, 'jorge', 'acosta', 'asd', 'lycantroponatural2@gmail.com', '77f40f9a74af37ed4b38bd489bcf5940', 'vendedor', 1, 'Wednesday 11th November 2020 06:59:04 PM'),
(3, 'luis', 'falla', 'd', 'c@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'vendedor', 1, 'Friday 16th October 2020 07:46:44 PM'),
(4, 'asdad', 'asdasda', 'g', 'd@gmail.com', '202cb962ac59075b964b07152d234b70', 'vendedor', 1, 'Friday 16th October 2020 03:14:07 PM'),
(6, 'jorge acosta', '-', 'jorge acosta', 'haba.dev.oficial@gmail.com', 'e1c40b9dff3d83582dc192afec007bf2', 'cliente', 0, 'Tuesday 10th November 2020 01:16:26 PM'),
(7, 'algo', 'asdasd', 'haba', 'lycantroponatural@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'cliente', 1, 'Saturday 21st November 2020 12:15:19 AM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bann_hm`
--
ALTER TABLE `bann_hm`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bann_promo`
--
ALTER TABLE `bann_promo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
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
-- Indices de la tabla `moneda`
--
ALTER TABLE `moneda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orden_menu`
--
ALTER TABLE `orden_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `original`
--
ALTER TABLE `original`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`categoria`);

--
-- Indices de la tabla `slider_principal`
--
ALTER TABLE `slider_principal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bann_hm`
--
ALTER TABLE `bann_hm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `bann_promo`
--
ALTER TABLE `bann_promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT de la tabla `moneda`
--
ALTER TABLE `moneda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `orden_menu`
--
ALTER TABLE `orden_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `original`
--
ALTER TABLE `original`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `slider_principal`
--
ALTER TABLE `slider_principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `moneda`
--
ALTER TABLE `moneda`
  ADD CONSTRAINT `moneda_ibfk_1` FOREIGN KEY (`id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
