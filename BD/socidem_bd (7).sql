-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2021 a las 03:00:19
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
(26, 'f84db8e64d831f3c7ab5efd5cb3b00cb', 'ddcdf6f7be52e81df5d64573d86cf7d0', 'lycantroponatural@gmail.com', 'sala 1', 'abcde', 'ecb7b324d874fad51c5eef7eeb96b067', '150.00', '2021-02-17T10:30:00', '2021-02-17T12:30:00', '{\"pagoID\":1234171117,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"31231231\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-23T15:03:04.000-04:00\",\"fecha_aproved\":\"2021-02-23T15:03:04.469-04:00\",\"order_number\":\"2359698095\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"jorge\",\"apellido_paciente\":\"acosta\",\"email_paciente\":\"lycantroponatural@gmail.com\",\"telefono_paciente\":\"951617781\",\"detalles_paciente\":\"detalles medicos\"}', 'online', 3),
(27, 'f84db8e64d831f3c7ab5efd5cb3b00cb', 'cd38886f122eeebdf2875b7fabf8cebb', 'haba.dev.oficial@gmail.com', '', '', 'a5918812bc87c41c6f6e0547c1b14986', '150.00', '2021-02-18T10:00:00', '2021-02-18T12:30:00', '{\"pagoID\":1234183808,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312312\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-23T21:23:11.000-04:00\",\"fecha_aproved\":\"2021-02-23T21:23:11.918-04:00\",\"order_number\":\"2361124519\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"pedro\",\"apellido_paciente\":\"luis\",\"email_paciente\":\"haba.dev.oficial@gmail.com\",\"telefono_paciente\":\"951617781\",\"detalles_paciente\":\"detalles medicos\"}', 'presencial', 1),
(28, 'f84db8e64d831f3c7ab5efd5cb3b00cb', 'bf7fa2e713154a15afa66907347a9ab8', 'lycantroponatural@gmail.com', '', '', 'b18ad8823db009dae169784fe168db58', '150.00', '2021-02-19T10:00:00', '2021-02-19T12:30:00', '{\"pagoID\":1234185692,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312312\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-23T21:49:35.000-04:00\",\"fecha_aproved\":\"2021-02-23T21:49:36.129-04:00\",\"order_number\":\"2361195095\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"alfonso\",\"apellido_paciente\":\"barrancos\",\"email_paciente\":\"lycantroponatural@gmail.com\",\"telefono_paciente\":\"951617781\",\"detalles_paciente\":\"detalles medicos\"}', 'online', 1),
(29, 'f84db8e64d831f3c7ab5efd5cb3b00cb', 'ff301dcb89187798942eadea88e3b442', 'lycantroponatural@gmail.com', '', '', 'b18ad8823db009dae169784fe168db58', '150.00', '2021-02-21T10:00:00', '2021-02-21T12:30:00', '{\"pagoID\":1234185692,\"status\":\"approved\",\"status_detail\":\"accredited\",\"identificacion_number\":\"12312312\",\"identificacion_type\":\"DNI\",\"identificacion_nombre\":\"APROB\",\"fecha_created\":\"2021-02-23T21:49:35.000-04:00\",\"fecha_aproved\":\"2021-02-23T21:49:36.129-04:00\",\"order_number\":\"2361195095\",\"order_type\":\"mercadopago\"}', '{\"nombre_paciente\":\"alfonso\",\"apellido_paciente\":\"barrancos\",\"email_paciente\":\"lycantroponatural@gmail.com\",\"telefono_paciente\":\"951617781\",\"detalles_paciente\":\"detalles medicos\"}', 'online', 3);

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
(1, 'f84db8e64d831f3c7ab5efd5cb3b00cb', '[{\"id\":\"1\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Electroterapia\",\"start\":\"2021-02-15T12:00:00\",\"end\":\"2021-02-15T12:30:00\",\"extendedProps\":{\"status\":\"agendado\"},\"borderColor\":\"white\"},{\"id\":\"2\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-15T12:00:00\",\"end\":\"2021-02-15T12:30:00\",\"extendedProps\":{\"status\":\"agendado\"},\"borderColor\":\"white\"},{\"id\":\"3\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"algo\",\"start\":\"2021-02-15T10:30:00\",\"end\":\"2021-02-15T12:30:00\",\"extendedProps\":{\"status\":\"agendado\"},\"borderColor\":\"white\"},{\"id\":\"4\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-16T12:00:00\",\"end\":\"2021-02-16T12:30:00\",\"extendedProps\":{\"status\":\"agendado\"},\"borderColor\":\"white\"},{\"id\":\"5\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Atención Magnetoterapia\",\"start\":\"2021-02-17T10:30:00\",\"end\":\"2021-02-17T12:30:00\",\"extendedProps\":{\"status\":\"agendado\"},\"borderColor\":\"white\"},{\"id\":\"6\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-16T10:30:00\",\"end\":\"2021-02-16T12:30:00\",\"extendedProps\":{\"status\":\"agendado\"},\"borderColor\":\"white\"},{\"id\":\"7\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Atención Ultrasonido\",\"start\":\"2021-02-17T10:30:00\",\"end\":\"2021-02-17T12:30:00\",\"extendedProps\":{\"status\":\"agendado\"},\"borderColor\":\"white\"},{\"id\":\"8\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-18T10:00:00\",\"end\":\"2021-02-18T12:30:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"9\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-19T10:00:00\",\"end\":\"2021-02-19T12:30:00\",\"extendedProps\":{\"status\":\"agendado\"},\"borderColor\":\"white\"},{\"id\":\"10\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-20T10:00:00\",\"end\":\"2021-02-20T12:30:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"11\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-21T10:00:00\",\"end\":\"2021-02-21T12:30:00\",\"extendedProps\":{\"status\":\"agendado\"},\"borderColor\":\"white\"},{\"id\":\"12\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-22T10:00:00\",\"end\":\"2021-02-22T12:30:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"},{\"id\":\"13\",\"token\":\"f84db8e64d831f3c7ab5efd5cb3b00cb\",\"title\":\"Atención Electroterapia\",\"start\":\"2021-02-23T10:00:00\",\"end\":\"2021-02-23T12:30:00\",\"extendedProps\":{\"status\":\"libre\"},\"borderColor\":\"white\"}]', 1),
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
(15, 'Angelo Acosta', 'lycantroponatural@gmail.com', '202cb962ac59075b964b07152d234b70', 'Tuesday 23rd February 2021 08:51:45 PM', 1, 1);

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
(15, 'haba.dev.oficial@gmail.com', '202cb962ac59075b964b07152d234b70', 'ninoska vielma', '951617781', 2, 'Tuesday 23rd February 2021 08:21:56 PM', 1),
(16, 'lycantroponatural@gmail.com', '202cb962ac59075b964b07152d234b70', 'jorge acosta', '951617781', 2, 'Tuesday 23rd February 2021 08:12:03 PM', 1),
(17, 'jorge_081090@hotmail.com', '202cb962ac59075b964b07152d234b70', 'luis ulloa', '951617781', 2, 'Tuesday 23rd February 2021 12:05:11 PM', 1);

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
(13, 'lycantroponatural@gmail.com', '20601883164', '230220211812331000-Doctor-David-Ezpeleta.jpg', '951617781', 123456, 'Alergista', 'servicio 1,servicio 2,servicio 3,servicio 4,servicio 5', 'Especialista en Alergias', 'universidad de ejemplo', '8', 'lima', 'esta es mi biografia', 'clinica villa sur', 'av. lima sur', '150.00', 'f84db8e64d831f3c7ab5efd5cb3b00cb');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
