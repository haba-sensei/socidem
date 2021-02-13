-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2021 a las 16:18:16
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
-- Base de datos: `socidem_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(15) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `last_login` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'algo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `cod_medico` varchar(100) NOT NULL,
  `pagoID` varchar(45) NOT NULL,
  `precio_consulta` decimal(16,2) NOT NULL,
  `fecha_start` varchar(30) NOT NULL,
  `fecha_end` varchar(30) NOT NULL,
  `cita` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`cita`)),
  `paciente` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`paciente`)),
  `tipo_cita` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `cod_medico`, `pagoID`, `precio_consulta`, `fecha_start`, `fecha_end`, `cita`, `paciente`, `tipo_cita`, `estado`) VALUES
(1, '4a813b86ddbe2e4375725e03c72e1009', '', '350.00', '2021-02-15T15:30:00Z', '2021-02-15T17:30:00Z', '{\"pagoID\":1233816454,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312331\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T09:20:32.000-04:00\",\"fecha_aproved\":\"2021-02-13T09:20:32.560-04:00\",\"order_number\":\"2325407062\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"jorge\",\"apellido_paciente\":\"acosta\",\"email_paciente\":\"lycan@gmail.com\",\"telefono_paciente\":\"123123123\",\"detalles_paciente\":\"algo\"}', 'presencial', 1),
(2, '4a813b86ddbe2e4375725e03c72e1009', '', '350.00', '2021-02-15T15:30:00Z', '2021-02-15T17:30:00Z', '{\"pagoID\":1233816454,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312331\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T09:20:32.000-04:00\",\"fecha_aproved\":\"2021-02-13T09:20:32.560-04:00\",\"order_number\":\"2325407062\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"jorge\",\"apellido_paciente\":\"acosta\",\"email_paciente\":\"lycan@gmail.com\",\"telefono_paciente\":\"123123123\",\"detalles_paciente\":\"algo\"}', 'presencial', 1),
(3, '4a813b86ddbe2e4375725e03c72e1009', '', '350.00', '2021-02-15T15:30:00Z', '2021-02-15T17:30:00Z', '{\"pagoID\":1233816454,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312331\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T09:20:32.000-04:00\",\"fecha_aproved\":\"2021-02-13T09:20:32.560-04:00\",\"order_number\":\"2325407062\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"jorge\",\"apellido_paciente\":\"acosta\",\"email_paciente\":\"lycan@gmail.com\",\"telefono_paciente\":\"1231232131\",\"detalles_paciente\":\"dasjdakdjaslu00f1d\"}', 'presencial', 1),
(4, '4a813b86ddbe2e4375725e03c72e1009', '', '350.00', '2021-02-15T15:30:00Z', '2021-02-15T17:30:00Z', '{\"pagoID\":1233816454,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312331\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T09:20:32.000-04:00\",\"fecha_aproved\":\"2021-02-13T09:20:32.560-04:00\",\"order_number\":\"2325407062\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"jack\",\"apellido_paciente\":\"black\",\"email_paciente\":\"lycan@gmail.com\",\"telefono_paciente\":\"12312312312\",\"detalles_paciente\":\"askdjasdlu00f1asj\"}', 'online', 1),
(5, '4a813b86ddbe2e4375725e03c72e1009', '', '350.00', '2021-02-15T15:30:00Z', '2021-02-15T17:30:00Z', '{\"pagoID\":1233816454,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312331\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T09:20:32.000-04:00\",\"fecha_aproved\":\"2021-02-13T09:20:32.560-04:00\",\"order_number\":\"2325407062\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"otro\",\"apellido_paciente\":\"es\",\"email_paciente\":\"lycan@gmail.com\",\"telefono_paciente\":\"123210812093\",\"detalles_paciente\":\"asjdkdkju00f1d\"}', 'online', 1),
(6, '4a813b86ddbe2e4375725e03c72e1009', '', '350.00', '2021-02-15T15:30:00Z', '2021-02-15T17:30:00Z', '{\"pagoID\":1233816454,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312331\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T09:20:32.000-04:00\",\"fecha_aproved\":\"2021-02-13T09:20:32.560-04:00\",\"order_number\":\"2325407062\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"nombre\",\"apellido_paciente\":\"apellido\",\"email_paciente\":\"asd@gmail.com\",\"telefono_paciente\":\"123123\",\"detalles_paciente\":\"askldaskd\"}', 'online', 1),
(7, '4a813b86ddbe2e4375725e03c72e1009', '', '350.00', '2021-02-15T15:30:00Z', '2021-02-15T17:30:00Z', '{\"pagoID\":1233816454,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312331\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T09:20:32.000-04:00\",\"fecha_aproved\":\"2021-02-13T09:20:32.560-04:00\",\"order_number\":\"2325407062\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"jorge\",\"apellido_paciente\":\"acosta\",\"email_paciente\":\"lycaa@mgail.com\",\"telefono_paciente\":\"2131231\",\"detalles_paciente\":\"dasdsadasd\"}', 'online', 1),
(8, '4a813b86ddbe2e4375725e03c72e1009', '', '350.00', '2021-02-15T15:30:00Z', '2021-02-15T17:30:00Z', '{\"pagoID\":1233816454,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312331\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T09:20:32.000-04:00\",\"fecha_aproved\":\"2021-02-13T09:20:32.560-04:00\",\"order_number\":\"2325407062\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"jorge\",\"apellido_paciente\":\"acosta\",\"email_paciente\":\"lycaa@mgail.com\",\"telefono_paciente\":\"2131231\",\"detalles_paciente\":\"dasdsadasd\"}', 'online', 1),
(9, '4a813b86ddbe2e4375725e03c72e1009', '', '350.00', '2021-02-20T15:00:00Z', '2021-02-20T17:30:00Z', '{\"pagoID\":1233816454,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312331\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T09:20:32.000-04:00\",\"fecha_aproved\":\"2021-02-13T09:20:32.560-04:00\",\"order_number\":\"2325407062\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"haba\",\"apellido_paciente\":\"hola\",\"email_paciente\":\"lsaldk@gmail.com\",\"telefono_paciente\":\"12312312312\",\"detalles_paciente\":\"weqeqweqe\"}', 'presencial', 1),
(10, '4a813b86ddbe2e4375725e03c72e1009', '', '350.00', '2021-02-20T15:00:00Z', '2021-02-20T17:30:00Z', '{\"pagoID\":1233816454,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312331\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T09:20:32.000-04:00\",\"fecha_aproved\":\"2021-02-13T09:20:32.560-04:00\",\"order_number\":\"2325407062\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"haba\",\"apellido_paciente\":\"hola\",\"email_paciente\":\"lsaldk@gmail.com\",\"telefono_paciente\":\"12312312312\",\"detalles_paciente\":\"weqeqweqe\"}', 'presencial', 1),
(11, '40efcd57401d2650ef30c25ff367e104', '', '15.00', '2021-02-15T15:30:00Z', '2021-02-15T17:30:00Z', '{\"pagoID\":1233816454,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312331\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T09:20:32.000-04:00\",\"fecha_aproved\":\"2021-02-13T09:20:32.560-04:00\",\"order_number\":\"2325407062\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"jack\",\"apellido_paciente\":\"black\",\"email_paciente\":\"lkl@gmail.com\",\"telefono_paciente\":\"12312312\",\"detalles_paciente\":\"asasdskjalda\"}', 'online', 1),
(13, 'f9999f8762b3bb2a0e27dc87feab1dda', '392b0d95e7ec01dfdce241f229f9cca0', '200.00', '2021-02-15T17:00:00Z', '2021-02-15T17:30:00Z', '{\"pagoID\":1233817801,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312312\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T10:30:38.000-04:00\",\"fecha_aproved\":\"2021-02-13T10:30:38.721-04:00\",\"order_number\":\"2325642552\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"jacy\",\"apellido_paciente\":\"aksljd\",\"email_paciente\":\"ajsdk@gmail.com\",\"telefono_paciente\":\"123123213123\",\"detalles_paciente\":\"askdu00f1lkdu00f1u00f1\"}', 'presencial', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_medica`
--

CREATE TABLE `agenda_medica` (
  `id` int(11) NOT NULL,
  `cod_medico` varchar(45) NOT NULL,
  `agenda` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`agenda`)),
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda_medica`
--

INSERT INTO `agenda_medica` (`id`, `cod_medico`, `agenda`, `estado`) VALUES
(1, '4a813b86ddbe2e4375725e03c72e1009', '[{\"id\":\"1\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Electroterapia\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"2\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"3\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-15T10:30:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"4\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-16T12:00:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"5\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"6\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-16T10:30:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"7\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"8\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-18T10:00:00-05:00\",\"end\":\"2021-02-18T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"9\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-19T10:00:00-05:00\",\"end\":\"2021-02-19T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"10\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-20T10:00:00-05:00\",\"end\":\"2021-02-20T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"11\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-21T10:00:00-05:00\",\"end\":\"2021-02-21T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"12\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-22T10:00:00-05:00\",\"end\":\"2021-02-22T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"13\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-23T10:00:00-05:00\",\"end\":\"2021-02-23T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"}]', 1),
(2, 'f9999f8762b3bb2a0e27dc87feab1dda', '[{\"id\":\"1\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"2\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"3\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-15T10:30:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"4\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-16T12:00:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"5\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"6\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-16T10:30:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"7\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"8\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-18T10:00:00-05:00\",\"end\":\"2021-02-18T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"9\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-19T10:00:00-05:00\",\"end\":\"2021-02-19T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"10\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-20T10:00:00-05:00\",\"end\":\"2021-02-20T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"11\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-21T10:00:00-05:00\",\"end\":\"2021-02-21T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"12\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-22T10:00:00-05:00\",\"end\":\"2021-02-22T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"13\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-23T10:00:00-05:00\",\"end\":\"2021-02-23T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"}]', 1),
(3, '40efcd57401d2650ef30c25ff367e104', '[{\"id\":\"1\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"2\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"3\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-15T10:30:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"4\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-16T12:00:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"5\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"6\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-16T10:30:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"7\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"8\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-18T10:00:00-05:00\",\"end\":\"2021-02-18T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"9\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-19T10:00:00-05:00\",\"end\":\"2021-02-19T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"10\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-20T10:00:00-05:00\",\"end\":\"2021-02-20T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"11\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-21T10:00:00-05:00\",\"end\":\"2021-02-21T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"12\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-22T10:00:00-05:00\",\"end\":\"2021-02-22T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"13\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-23T10:00:00-05:00\",\"end\":\"2021-02-23T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"}]', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id`, `nombre`, `slug`) VALUES
(1, 'Alergista', 'alergista'),
(2, 'Anestesiólogo', 'anestesiologo'),
(3, 'Cardiólogo', 'cardiologo'),
(4, 'Cirujano', 'cirujano'),
(5, 'Cardiovascular y Torácico', 'cardiovascular-y-toracico'),
(6, 'Cirujano general', 'cirujano-general'),
(7, 'Cirujano maxilofacial', 'cirujano-maxilofacial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(150) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `last_login` varchar(45) NOT NULL,
  `rol` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`id`, `nombre_completo`, `correo`, `pass`, `last_login`, `rol`, `estado`) VALUES
(5, 'Pedro Salinas', 'lycan@gmail.com', '202cb962ac59075b964b07152d234b70', 'Monday 8th February 2021 08:41:51 PM', 1, 0),
(8, 'David Sanchez', 'lycantroponatural@gmail.com', '202cb962ac59075b964b07152d234b70', 'Thursday 11th February 2021 08:44:29 PM', 1, 1),
(9, 'Jorge Ulloa', 'qwe@gmail.com', '202cb962ac59075b964b07152d234b70', 'Tuesday 9th February 2021 11:24:40 PM', 1, 1),
(10, 'Angelina Klaus', 'algo@gmail.com', '202cb962ac59075b964b07152d234b70', 'Thursday 11th February 2021 05:41:57 AM', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresias`
--

CREATE TABLE `membresias` (
  `id` int(11) NOT NULL,
  `dni` varchar(15) NOT NULL,
  `tipo_membresia` varchar(30) NOT NULL,
  `fecha_inicio` varchar(15) NOT NULL,
  `fecha_fin` varchar(15) NOT NULL,
  `monto` decimal(16,2) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `rol` int(11) NOT NULL,
  `last_login` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `correo`, `pass`, `nombre`, `telefono`, `rol`, `last_login`, `estado`) VALUES
(1, 'paciente@gmail.com', 'd243800a7d0ba0f87081bcdd832bb05f', 'primer paciente', '951617781', 2, 'Saturday 6th Fe', 1),
(9, 'lycantroponatural@gmail.com', '77f40f9a74af37ed4b38bd489bcf5940', 'Haba Sensei', '----', 2, 'Saturday 13th February 2021 06:35:21 AM', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_reservas`
--

CREATE TABLE `pago_reservas` (
  `id` int(11) NOT NULL,
  `codReserva` varchar(45) NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data`)),
  `total` decimal(16,2) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `documento` varchar(45) NOT NULL,
  `foto` text NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `num_colegiatura` int(6) UNSIGNED ZEROFILL DEFAULT NULL,
  `especialidad` varchar(100) NOT NULL,
  `servicios` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `universidad` varchar(50) NOT NULL,
  `años` varchar(50) NOT NULL,
  `ubicacion` varchar(75) NOT NULL,
  `sobre_mi` text NOT NULL,
  `nombre_clinica` varchar(100) NOT NULL,
  `direccion_clinica` varchar(100) NOT NULL,
  `precio_consulta` decimal(16,2) NOT NULL,
  `codigo_referido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `correo`, `documento`, `foto`, `telefono`, `num_colegiatura`, `especialidad`, `servicios`, `titulo`, `universidad`, `años`, `ubicacion`, `sobre_mi`, `nombre_clinica`, `direccion_clinica`, `precio_consulta`, `codigo_referido`) VALUES
(6, 'lycantroponatural@gmail.com', '20601883164', '110220211114261000-Doctor-David-Ezpeleta.jpg', '123123123', 098273, 'Alergista', 'algo 1 ,algo 2,algo 3', 'medico odontologico', 'uptp jj montilla ', '8', 'lima', 'algo de mi', 'clinica santa maria', 'lima centro', '200.00', 'f9999f8762b3bb2a0e27dc87feab1dda'),
(7, 'qwe@gmail.com', '123456789', '11022021115445004.jpg', '1231123213', 032421, 'Anestesiólogo', 'Blanqueamiento ,opcion 2,opcion 3 ', 'medico odontologo', 'alguna unversidad', '8', 'Lima', 'lorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsum', 'santa maria ', 'lima centro', '150.00', '40efcd57401d2650ef30c25ff367e104'),
(8, 'algo@gmail.com', '20601883164', '121815744_2514298298865851_1576893882356889816_o.jpg', '12312312312', 092837, 'Especialista en Medicina Física y Rehabilitación', 'Electroterapia,Ultrasonido,Magnetoterapia', 'Médico Especialista en Traumatología y Cirugía Ort', 'Universidad Peruana Cayetano Heredia', '12', 'Chorrillos', 'algo de mi algo de mi  algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi ', 'Clínica Villa Sur', 'Av. César Vallejo S/N, Villa EL Salvador 15842', '350.00', '4a813b86ddbe2e4375725e03c72e1009');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_membresias`
--

CREATE TABLE `planes_membresias` (
  `id` int(11) NOT NULL,
  `nombre_plan` varchar(45) NOT NULL,
  `detalles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`detalles`)),
  `precio` double(16,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_referidos`
--

CREATE TABLE `plan_referidos` (
  `id` int(11) NOT NULL,
  `nombre_institucion` varchar(100) NOT NULL,
  `representante` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `cci` varchar(15) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `codReserva` varchar(45) NOT NULL,
  `paciente` varchar(45) NOT NULL,
  `medico` varchar(45) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `hora` varchar(15) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `rol`, `estado`) VALUES
(1, 'medico', '1', 'activo'),
(2, 'paciente', '2', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `agenda_medica`
--
ALTER TABLE `agenda_medica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `agenda_medica`
--
ALTER TABLE `agenda_medica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
