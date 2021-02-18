-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2021 a las 19:04:23
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
  `cod_consulta` varchar(45) NOT NULL,
  `email_usuario` varchar(45) NOT NULL,
  `nombre_room` varchar(100) NOT NULL,
  `pass_room` varchar(100) NOT NULL,
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

INSERT INTO `agenda` (`id`, `cod_medico`, `cod_consulta`, `email_usuario`, `nombre_room`, `pass_room`, `pagoID`, `precio_consulta`, `fecha_start`, `fecha_end`, `cita`, `paciente`, `tipo_cita`, `estado`) VALUES
(13, 'f9999f8762b3bb2a0e27dc87feab1dda', 'd243800a7d0ba0f87081bcdd832bb05f', 'paciente@gmail.com', '', '', '392b0d95e7ec01dfdce241f229f9cca0', '200.00', '2021-02-15T14:00', '2021-02-15T14:30', '{\"pagoID\":1233817801,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312312\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T10:30:38.000-04:00\",\"fecha_aproved\":\"2021-02-13T10:30:38.721-04:00\",\"order_number\":\"2325642552\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"jacy\",\"apellido_paciente\":\"aksljd\",\"email_paciente\":\"ajsdk@gmail.com\",\"telefono_paciente\":\"123123213123\",\"detalles_paciente\":\"askdu00f1lkdu00f1u00f1\"}', 'presencial', 3),
(14, '40efcd57401d2650ef30c25ff367e104', '2d2d2d2d2dd2f3rg56y6u7u7i7i7i7iyy57', '1paciente@gmail.com', '', '', 'f604973dfc25d92ef82f847d3996cde1', '150.00', '2021-02-15T15:30', '2021-02-15T17:30', '{\"pagoID\":1233819118,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"32423423\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T11:28:05.000-04:00\",\"fecha_aproved\":\"2021-02-13T11:28:05.828-04:00\",\"order_number\":\"2325873069\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"jorge\",\"apellido_paciente\":\"acosta\",\"email_paciente\":\"lycan@gmail.com\",\"telefono_paciente\":\"12312312312312312\",\"detalles_paciente\":\"sdaadasdasdadasd\"}', 'online', 1),
(15, '4a813b86ddbe2e4375725e03c72e1009', 'ih8h8hiuihjg0ueohusgfjhkhfghrt98utr8tt', '1paciente@gmail.com', '', '', '461c5a615b01a4d1de91a16269034a8d', '350.00', '2021-02-15T15:30', '2021-02-15T17:30', '{\"pagoID\":1233823876,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"123123123213\",\"identificacion_type\":\"C.E\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T18:41:20.000-04:00\",\"fecha_aproved\":\"2021-02-13T18:41:20.854-04:00\",\"order_number\":\"2327410015\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"askldjlsd\",\"apellido_paciente\":\"ajkdalskdj\",\"email_paciente\":\"lyca@gmail.com\",\"telefono_paciente\":\"12312313123123\",\"detalles_paciente\":\"laksdjfaslkdjfaksdj \"}', 'presencial', 1),
(16, 'f9999f8762b3bb2a0e27dc87feab1dda', '90gu8gfhufd8ufdhuf8df8fdudf8u9ufd8f', 'paciente@gmail.com', '', '', '0873dbe092cd126961d3e936c2dfc9e8', '200.00', '2021-02-15T17:00', '2021-02-15T17:30', '{\"pagoID\":1233826007,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312321\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T19:29:13.000-04:00\",\"fecha_aproved\":\"2021-02-13T19:29:13.351-04:00\",\"order_number\":\"2327581680\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"sdq\",\"apellido_paciente\":\"qwe\",\"email_paciente\":\"qqwe@gmail.com\",\"telefono_paciente\":\"12312321\",\"detalles_paciente\":\"123123 12312 12 \"}', 'online', 1),
(17, 'f9999f8762b3bb2a0e27dc87feab1dda', 'ijdfjiogf98ufgiugj8gf89df98fdj89dfgj98f', 'paciente@gmail.com', '', '', '82a76277be25808b98e2f1d24d62cf1a', '200.00', '2021-02-16T14:30', '2021-02-16T15:00', '{\"pagoID\":1233826035,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12313123\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-13T19:42:10.000-04:00\",\"fecha_aproved\":\"2021-02-13T19:42:10.387-04:00\",\"order_number\":\"2327627977\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"sdq\",\"apellido_paciente\":\"qwe\",\"email_paciente\":\"qqwe@gmail.com\",\"telefono_paciente\":\"12312321\",\"detalles_paciente\":\"123123 12312 12 \"}', 'online', 2);

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
(1, '4a813b86ddbe2e4375725e03c72e1009', '[{\"id\":\"1\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Electroterapia\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"agendado\"},\"borderColor\":\"white\"},{\"id\":\"2\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"agendado\"},\"borderColor\":\"white\"},{\"id\":\"3\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-15T10:30:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"4\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-16T12:00:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"5\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"6\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-16T10:30:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"7\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"8\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-18T10:00:00-05:00\",\"end\":\"2021-02-18T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"9\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-19T10:00:00-05:00\",\"end\":\"2021-02-19T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"10\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-20T10:00:00-05:00\",\"end\":\"2021-02-20T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"11\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-21T10:00:00-05:00\",\"end\":\"2021-02-21T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"12\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-22T10:00:00-05:00\",\"end\":\"2021-02-22T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"13\",\"token\":\"4a813b86ddbe2e4375725e03c72e1009\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-23T10:00:00-05:00\",\"end\":\"2021-02-23T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"}]', 1),
(2, 'f9999f8762b3bb2a0e27dc87feab1dda', '[{\"id\":\"1\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"2\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"3\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-15T10:30:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"4\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-16T12:00:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"5\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"6\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-16T10:30:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"7\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"8\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-18T10:00:00-05:00\",\"end\":\"2021-02-18T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"9\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-19T10:00:00-05:00\",\"end\":\"2021-02-19T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"10\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-20T10:00:00-05:00\",\"end\":\"2021-02-20T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"11\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-21T10:00:00-05:00\",\"end\":\"2021-02-21T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"12\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-22T10:00:00-05:00\",\"end\":\"2021-02-22T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"13\",\"token\":\"f9999f8762b3bb2a0e27dc87feab1dda\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-23T10:00:00-05:00\",\"end\":\"2021-02-23T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"}]', 1),
(3, '40efcd57401d2650ef30c25ff367e104', '[{\"id\":\"1\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"2\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-15T12:00:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"3\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-15T10:30:00-05:00\",\"end\":\"2021-02-15T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"4\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-16T12:00:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"5\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"6\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-16T10:30:00-05:00\",\"end\":\"2021-02-16T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"7\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-17T10:30:00-05:00\",\"end\":\"2021-02-17T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"8\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-18T10:00:00-05:00\",\"end\":\"2021-02-18T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"9\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-19T10:00:00-05:00\",\"end\":\"2021-02-19T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"10\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-20T10:00:00-05:00\",\"end\":\"2021-02-20T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"11\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-21T10:00:00-05:00\",\"end\":\"2021-02-21T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"12\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-22T10:00:00-05:00\",\"end\":\"2021-02-22T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"13\",\"token\":\"40efcd57401d2650ef30c25ff367e104\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-23T10:00:00-05:00\",\"end\":\"2021-02-23T12:30:00-05:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"}]', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `cod_medico` varchar(45) NOT NULL,
  `cod_consulta` varchar(45) NOT NULL,
  `email_usuario` varchar(45) NOT NULL,
  `nombre_room` varchar(45) NOT NULL,
  `pass_room` varchar(45) NOT NULL,
  `nombre_paciente` varchar(45) NOT NULL,
  `apellido_paciente` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `detalle` text NOT NULL,
  `fecha_init` varchar(45) NOT NULL,
  `fecha_end` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `cod_medico`, `cod_consulta`, `email_usuario`, `nombre_room`, `pass_room`, `nombre_paciente`, `apellido_paciente`, `email`, `telefono`, `detalle`, `fecha_init`, `fecha_end`, `estado`) VALUES
(1, 'f9999f8762b3bb2a0e27dc87feab1dda', 'd243800a7d0ba0f87081bcdd832bb05f', 'paciente@gmail.com', 'med_1', 'ed93e7ea710fd80f353893e0ccf40203', 'jorge', 'acosta', 'lycan@gmail.com', '123123123', 'lkjalkjsdflakjflaksjflkajs sdakljf skladjf lkasjdf lsajd fkljsaf d', '2021/02/17', '2021/02/17', 0);

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
(8, 'David Sanchez', 'lycantroponatural@gmail.com', '202cb962ac59075b964b07152d234b70', 'Thursday 18th February 2021 12:55:13 PM', 1, 1),
(9, 'Jorge Ulloa', 'qwe@gmail.com', '202cb962ac59075b964b07152d234b70', 'Tuesday 9th February 2021 11:24:40 PM', 1, 1),
(10, 'Angelina Klaus', 'algo@gmail.com', '202cb962ac59075b964b07152d234b70', 'Thursday 11th February 2021 05:41:57 AM', 1, 1),
(11, 'algo1', 'asd@gmail.com', '202cb962ac59075b964b07152d234b70', 'Saturday 13th February 2021 05:51:19 PM', 1, 1),
(12, 'Jorge Acosta', 'algo123@gmail.com', '202cb962ac59075b964b07152d234b70', 'Saturday 13th February 2021 06:25:43 PM', 1, 1);

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
(1, 'paciente@gmail.com', 'd243800a7d0ba0f87081bcdd832bb05f', 'primer paciente', '951617781', 2, 'Thursday 18th February 2021 12:41:09 PM', 1),
(9, 'lycantroponatural@gmail.com', '77f40f9a74af37ed4b38bd489bcf5940', 'Haba Sensei', '----', 2, 'Saturday 13th February 2021 06:30:19 PM', 1);

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
  `servicios` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
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
(7, 'qwe@gmail.com', '123456789', '11022021115445004.jpg', '1231123213', 032421, 'Anestesiólogo', 'Blanqueamiento S/ 100,opcion S/ 299,opcion 3 S/ 1500', 'medico odontologo', 'alguna unversidad', '8', 'Lima', 'lorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsumlorem itsum', 'santa maria ', 'lima centro', '150.00', '40efcd57401d2650ef30c25ff367e104'),
(8, 'algo@gmail.com', '20601883164', '121815744_2514298298865851_1576893882356889816_o.jpg', '12312312312', 092837, 'Especialista en Medicina Física y Rehabilitación', 'Electroterapia,Ultrasonido,Magnetoterapia', 'Médico Especialista en Traumatología y Cirugía Ort', 'Universidad Peruana Cayetano Heredia', '12', 'Chorrillos', 'algo de mi algo de mi  algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi algo de mi ', 'Clínica Villa Sur', 'Av. César Vallejo S/N, Villa EL Salvador 15842', '350.00', '4a813b86ddbe2e4375725e03c72e1009'),
(9, 'asd@gmail.com', '213123123112', '1302202123572181d4rYBu2IL._AC_UY1000_.jpg', '12312312313', 928376, 'Alergista', 'algo 1,algo 2 ,algo 3', 'Medico alergista', 'universidad algo', '8', 'Chorrillos', 'asd kjalsd lkasjd lkajsd lkjasd lkjkasd lkjasd ', 'Clinica villa sur', 'av algo cerca de algo', '250.00', 'a860f4ddb0ae9af3ff0766292bbce9e0'),
(10, 'algo123@gmail.com', '123123123123', '140220210027551000-Doctor-David-Ezpeleta.jpg', '12313123123', 929234, 'Anestesiólogo', 'algo 2 ,algo 4,algo 5', 'medico en algo', 'universidad en algo', '8', 'Chorrillos', 'aqweqweqwe qwe qwqwe qwe ', 'Clinica algo 1', 'av cerca de algo', '210.00', 'edb1e05e789ac2ec122768dbb8f88487');

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
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `agenda_medica`
--
ALTER TABLE `agenda_medica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
