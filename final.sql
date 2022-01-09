-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-05-2020 a las 19:48:44
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistica`
--

CREATE TABLE `artistica` (
  `id` int(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `seccion` varchar(10) NOT NULL,
  `1ra` int(11) NOT NULL,
  `2da` int(11) NOT NULL,
  `3ra` int(11) NOT NULL,
  `4ta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `artistica`
--

INSERT INTO `artistica` (`id`, `nombre`, `apellido`, `seccion`, `1ra`, `2da`, `3ra`, `4ta`) VALUES
(1, 'Stud', 'Student', '5toA', 100, 100, 100, 100),
(2, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(3, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(4, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(5, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(6, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(7, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(8, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(9, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(10, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(11, 'Student', 'Student', '5toB', 0, 0, 0, 0),
(12, 'Student', 'Student', '5toC', 0, 0, 0, 0),
(13, 'Student', 'Student', '5toD', 0, 0, 0, 0),
(14, 'Student', 'Student', '5toE', 0, 0, 0, 0),
(15, 'Student', 'Student', '6toA', 0, 0, 0, 0),
(16, 'Student', 'Student', '6toB', 0, 0, 0, 0),
(17, 'Student', 'Student', '6toC', 0, 0, 0, 0),
(18, 'Student', 'Student', '6toD', 0, 0, 0, 0),
(19, 'Student', 'Student', '6toE', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fihr`
--

CREATE TABLE `fihr` (
  `id` int(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `seccion` varchar(10) NOT NULL,
  `1ra` int(11) NOT NULL,
  `2da` int(11) NOT NULL,
  `3ra` int(11) NOT NULL,
  `4ta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fihr`
--

INSERT INTO `fihr` (`id`, `nombre`, `apellido`, `seccion`, `1ra`, `2da`, `3ra`, `4ta`) VALUES
(1, 'Stud', 'Student', '5toA', 0, 0, 0, 0),
(2, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(3, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(4, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(5, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(6, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(7, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(8, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(9, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(10, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(11, 'Student', 'Student', '5toB', 0, 0, 0, 0),
(12, 'Student', 'Student', '5toC', 0, 0, 0, 0),
(13, 'Student', 'Student', '5toD', 0, 0, 0, 0),
(14, 'Student', 'Student', '5toE', 0, 0, 0, 0),
(15, 'Student', 'Student', '6toA', 0, 0, 0, 0),
(16, 'Student', 'Student', '6toB', 0, 0, 0, 0),
(17, 'Student', 'Student', '6toC', 0, 0, 0, 0),
(18, 'Student', 'Student', '6toD', 0, 0, 0, 0),
(19, 'Student', 'Student', '6toE', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisica`
--

CREATE TABLE `fisica` (
  `id` int(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `seccion` varchar(10) NOT NULL,
  `1ra` int(11) NOT NULL,
  `2da` int(11) NOT NULL,
  `3ra` int(11) NOT NULL,
  `4ta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fisica`
--

INSERT INTO `fisica` (`id`, `nombre`, `apellido`, `seccion`, `1ra`, `2da`, `3ra`, `4ta`) VALUES
(1, 'Stud', 'Student', '5toA', 0, 0, 0, 0),
(2, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(3, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(4, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(5, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(6, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(7, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(8, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(9, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(10, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(11, 'Student', 'Student', '5toB', 0, 0, 0, 0),
(12, 'Student', 'Student', '5toC', 0, 0, 0, 0),
(13, 'Student', 'Student', '5toD', 0, 0, 0, 0),
(14, 'Student', 'Student', '5toE', 0, 0, 0, 0),
(15, 'Student', 'Student', '6toA', 0, 0, 0, 0),
(16, 'Student', 'Student', '6toB', 0, 0, 0, 0),
(17, 'Student', 'Student', '6toC', 0, 0, 0, 0),
(18, 'Student', 'Student', '6toD', 0, 0, 0, 0),
(19, 'Student', 'Student', '6toE', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingles`
--

CREATE TABLE `ingles` (
  `id` int(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `seccion` varchar(10) NOT NULL,
  `1ra` int(11) NOT NULL,
  `2da` int(11) NOT NULL,
  `3ra` int(11) NOT NULL,
  `4ta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingles`
--

INSERT INTO `ingles` (`id`, `nombre`, `apellido`, `seccion`, `1ra`, `2da`, `3ra`, `4ta`) VALUES
(1, 'Stud', 'Student', '5toA', 0, 0, 0, 0),
(2, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(3, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(4, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(5, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(6, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(7, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(8, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(9, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(10, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(11, 'Student', 'Student', '5toB', 0, 0, 0, 0),
(12, 'Student', 'Student', '5toC', 0, 0, 0, 0),
(13, 'Student', 'Student', '5toD', 0, 0, 0, 0),
(14, 'Student', 'Student', '5toE', 0, 0, 0, 0),
(15, 'Student', 'Student', '6toA', 0, 0, 0, 0),
(16, 'Student', 'Student', '6toB', 0, 0, 0, 0),
(17, 'Student', 'Student', '6toC', 0, 0, 0, 0),
(18, 'Student', 'Student', '6toD', 0, 0, 0, 0),
(19, 'Student', 'Student', '6toE', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguaje`
--

CREATE TABLE `lenguaje` (
  `id` int(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `seccion` varchar(10) NOT NULL,
  `1ra` int(11) NOT NULL,
  `2da` int(11) NOT NULL,
  `3ra` int(11) NOT NULL,
  `4ta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lenguaje`
--

INSERT INTO `lenguaje` (`id`, `nombre`, `apellido`, `seccion`, `1ra`, `2da`, `3ra`, `4ta`) VALUES
(1, 'Stud', 'Student', '5toA', 0, 0, 0, 0),
(2, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(3, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(4, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(5, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(6, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(7, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(8, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(9, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(10, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(11, 'Student', 'Student', '5toB', 0, 0, 0, 0),
(12, 'Student', 'Student', '5toC', 0, 0, 0, 0),
(13, 'Student', 'Student', '5toD', 0, 0, 0, 0),
(14, 'Student', 'Student', '5toE', 0, 0, 0, 0),
(15, 'Student', 'Student', '6toA', 0, 0, 0, 0),
(16, 'Student', 'Student', '6toB', 0, 0, 0, 0),
(17, 'Student', 'Student', '6toC', 0, 0, 0, 0),
(18, 'Student', 'Student', '6toD', 0, 0, 0, 0),
(19, 'Student', 'Student', '6toE', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matematicas`
--

CREATE TABLE `matematicas` (
  `id` int(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `seccion` varchar(10) NOT NULL,
  `1ra` int(11) NOT NULL,
  `2da` int(11) NOT NULL,
  `3ra` int(11) NOT NULL,
  `4ta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `matematicas`
--

INSERT INTO `matematicas` (`id`, `nombre`, `apellido`, `seccion`, `1ra`, `2da`, `3ra`, `4ta`) VALUES
(1, 'Stud', 'Student', '5toA', 0, 0, 0, 0),
(2, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(3, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(4, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(5, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(6, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(7, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(8, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(9, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(10, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(11, 'Student', 'Student', '5toB', 0, 0, 0, 0),
(12, 'Student', 'Student', '5toC', 0, 0, 0, 0),
(13, 'Student', 'Student', '5toD', 0, 0, 0, 0),
(14, 'Student', 'Student', '5toE', 0, 0, 0, 0),
(15, 'Student', 'Student', '6toA', 0, 0, 0, 0),
(16, 'Student', 'Student', '6toB', 0, 0, 0, 0),
(17, 'Student', 'Student', '6toC', 0, 0, 0, 0),
(18, 'Student', 'Student', '6toD', 0, 0, 0, 0),
(19, 'Student', 'Student', '6toE', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `naturales`
--

CREATE TABLE `naturales` (
  `id` int(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `seccion` varchar(10) NOT NULL,
  `1ra` int(11) NOT NULL,
  `2da` int(11) NOT NULL,
  `3ra` int(11) NOT NULL,
  `4ta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `naturales`
--

INSERT INTO `naturales` (`id`, `nombre`, `apellido`, `seccion`, `1ra`, `2da`, `3ra`, `4ta`) VALUES
(1, 'Stud', 'Student', '5toA', 0, 0, 0, 0),
(2, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(3, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(4, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(5, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(6, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(7, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(8, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(9, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(10, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(11, 'Student', 'Student', '5toB', 0, 0, 0, 0),
(12, 'Student', 'Student', '5toC', 0, 0, 0, 0),
(13, 'Student', 'Student', '5toD', 0, 0, 0, 0),
(14, 'Student', 'Student', '5toE', 0, 0, 0, 0),
(15, 'Student', 'Student', '6toA', 0, 0, 0, 0),
(16, 'Student', 'Student', '6toB', 0, 0, 0, 0),
(17, 'Student', 'Student', '6toC', 0, 0, 0, 0),
(18, 'Student', 'Student', '6toD', 0, 0, 0, 0),
(19, 'Student', 'Student', '6toE', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sociales`
--

CREATE TABLE `sociales` (
  `id` int(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `seccion` varchar(10) NOT NULL,
  `1ra` int(11) NOT NULL,
  `2da` int(11) NOT NULL,
  `3ra` int(11) NOT NULL,
  `4ta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sociales`
--

INSERT INTO `sociales` (`id`, `nombre`, `apellido`, `seccion`, `1ra`, `2da`, `3ra`, `4ta`) VALUES
(1, 'Stud', 'Student', '5toA', 0, 0, 0, 0),
(2, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(3, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(4, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(5, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(6, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(7, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(8, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(9, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(10, 'Student', 'Student', '5toA', 0, 0, 0, 0),
(11, 'Student', 'Student', '5toB', 0, 0, 0, 0),
(12, 'Student', 'Student', '5toC', 0, 0, 0, 0),
(13, 'Student', 'Student', '5toD', 0, 0, 0, 0),
(14, 'Student', 'Student', '5toE', 0, 0, 0, 0),
(15, 'Student', 'Student', '6toA', 0, 0, 0, 0),
(16, 'Student', 'Student', '6toB', 0, 0, 0, 0),
(17, 'Student', 'Student', '6toC', 0, 0, 0, 0),
(18, 'Student', 'Student', '6toD', 0, 0, 0, 0),
(19, 'Student', 'Student', '6toE', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_admin`
--

CREATE TABLE `users_admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users_admin`
--

INSERT INTO `users_admin` (`id`, `nombre`, `apellido`, `email`, `password`, `avatar`) VALUES
(1, 'Admin', 'Admin', 'admin1@mail.com', '$2y$10$4AsiZ6r.yPh4eXb39UOCYuP7/MrogiWVMZEp683EfAfzp7s.Bzk1m', 'perfiles/default.jpg'),
(2, 'Admin', 'Admin', 'admin2@mail.com', '$2y$10$jUmWLok4axIuepIMRSv4PutHVKoNq6bhR0F3Co7BZ6LVuCklYbA0a', 'perfiles/default.jpg'),
(3, 'Admin', 'Admin', 'admin3@mail.com', '$2y$10$EwLjcPICa86p6Zuin.V0lei0h0eaEdKAxxfn.lF01GXoNgyZYlb9S', 'perfiles/default.jpg'),
(4, 'Admin', 'Admin', 'admin4@mail.com', '$2y$10$qi3r6jWJuLSgWZAiIiP9o.dheBiman.atIBP1vLJF81YMlhSCz65y', 'perfiles/default.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_student`
--

CREATE TABLE `users_student` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `seccion` varchar(20) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users_student`
--

INSERT INTO `users_student` (`id`, `nombre`, `apellido`, `email`, `password`, `seccion`, `avatar`) VALUES
(1, 'Stud', 'Student', 'student1@mail.com', '$2y$10$4WVp3eA4HsyEQ5in31lmo.Vgx2yu7m/pNnFO5yjgAjBlliG4VjA0i', '5toA', 'perfiles/default.jpg'),
(2, 'Student', 'Student', 'student2@mail.com', '$2y$10$ctKiEY0THdsl7rP5c1JtKesffgcGbarrqBxW8ptZ74TQ8IPnqAuPK', '5toA', 'perfiles/default.jpg'),
(3, 'Student', 'Student', 'student3@mail.com', '$2y$10$ZYEeB7DRLvLMT2G74QAOFOCn/3K6etP0hC6DXGCO.icyAhLlLkapy', '5toA', 'perfiles/default.jpg'),
(4, 'Student', 'Student', 'student4@mail.com', '$2y$10$epmtDC3I.s5DwP90I8CALuqfvx3N0tAe3pQTkCL706xFfTtJQBM/O', '5toA', 'perfiles/default.jpg'),
(5, 'Student', 'Student', 'student5@mail.com', '$2y$10$GPzFEM3T2sonRzIvGukQleLIAGZv6.bhBUDP5mX.p0Uqj9pxSS0TS', '5toA', 'perfiles/default.jpg'),
(6, 'Student', 'Student', 'student6@mail.com', '$2y$10$ZFqY6Df999Tzuw/hU9VLdOcoSyZLU8Vu/mn0peh.nsSx5uLTortJu', '5toA', 'perfiles/default.jpg'),
(7, 'Student', 'Student', 'student7@mail.com', '$2y$10$ChcYOLmHsBZnq6AHoaPiA.KiX/aJwS22KFJvjFJgTYWtbxIFzrIMK', '5toA', 'perfiles/default.jpg'),
(8, 'Student', 'Student', 'student8@mail.com', '$2y$10$IfFC2f/ApVDlipVXDm6etuNEIp/nO38AHbQJKhzUJxQ1OOzKLFuki', '5toA', 'perfiles/default.jpg'),
(9, 'Student', 'Student', 'student9@mail.com', '$2y$10$g3TX90PDwa6bfwJ/u6JzMeL07jQlEhcyZODSAyk6eYqpDEKf4zTpq', '5toA', 'perfiles/default.jpg'),
(10, 'Student', 'Student', 'student10@mail.com', '$2y$10$W5QWn2yGA2hm4jVk4z5SN.In6EpLHnPxxhSEd0fjfBtAgfn1S5m66', '5toA', 'perfiles/default.jpg'),
(11, 'Student', 'Student', 'student11@mail.com', '$2y$10$HGbVPGsgc.wnFNgpkIhfneSxdZwng.zF683XTTTQMU5bv/63QGww6', '5toB', 'perfiles/default.jpg'),
(12, 'Student', 'Student', 'student12@mail.com', '$2y$10$0UT9yr8qJnVIoCgEUkCXoONYbTOLp39ITvNeHsO56Nc3SkMQ6G/Da', '5toC', 'perfiles/default.jpg'),
(13, 'Student', 'Student', 'student13@mail.com', '$2y$10$3XmiWpwNLBGAd5v/E7SDkuex9SaAIk8FrxhA9LLu0/EFJ7iqS6egq', '5toD', 'perfiles/default.jpg'),
(14, 'Student', 'Student', 'student14@mail.com', '$2y$10$/e14AyF1cEYELxmMQTnaIeL6NnhNncqywtGxo/OLjugkoq4p3ZB6O', '5toE', 'perfiles/default.jpg'),
(15, 'Student', 'Student', 'student15@mail.com', '$2y$10$hSq7wjGcUxrIqXHPh.Wpyuo9UrqxmdUbGabwV5vvT5ADt6cmCDDdq', '6toA', 'perfiles/default.jpg'),
(16, 'Student', 'Student', 'student16@mail.com', '$2y$10$Tl4tX9J5yHLlPa92RC1Vn.z90Dz3.m1tDrwbJzlWF6KfU2B7QXtEK', '6toB', 'perfiles/default.jpg'),
(17, 'Student', 'Student', 'student17@mail.com', '$2y$10$bkDnmUDOW5agOZTQ5QG85.yNgtxu3p7CELcuqiarxRCqIbQ16aIHm', '6toC', 'perfiles/default.jpg'),
(18, 'Student', 'Student', 'student18@mail.com', '$2y$10$PpfkJOe8Y87INRQFbrIa/uhCmyw2o1UkGHhhZ4llEyC2HePTvBkw6', '6toD', 'perfiles/default.jpg'),
(19, 'Student', 'Student', 'student19@mail.com', '$2y$10$v.FX0xtM346f9Rw5KeBgjutm6bx1lfzaaJmpBWCkA2O5kl4WjKrKG', '6toE', 'perfiles/default.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_teacher`
--

CREATE TABLE `users_teacher` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `materia` varchar(50) NOT NULL,
  `materia2` varchar(50) NOT NULL,
  `materia3` varchar(50) NOT NULL,
  `materia4` varchar(50) NOT NULL,
  `materia5` varchar(50) NOT NULL,
  `materia6` varchar(50) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users_teacher`
--

INSERT INTO `users_teacher` (`id`, `nombre`, `apellido`, `email`, `password`, `materia`, `materia2`, `materia3`, `materia4`, `materia5`, `materia6`, `avatar`) VALUES
(1, 'Teacher', 'Teacher', 'teacher1@mail.com', '$2y$10$OQ5Y21g/XRYlqhaDVHp09O65lCjjVwfq9MKllhu3t8HWfZunW08uO', 'artistica', '', '', '', '', '', 'perfiles/default.jpg'),
(2, 'Teacher', 'Teacher', 'teacher2@mail.com', '$2y$10$1Sozpxif990tXZSm.efVmO8wlGupWnWPgyYVHu4qfaIJEgDns7a.i', 'fihr', '', '', '', '', '', 'perfiles/default.jpg'),
(3, 'Teacher', 'Teacher', 'teacher3@mail.com', '$2y$10$iOg.mPACSx47jN497oEV8OYZhkq8jjRyQP.BQ0DR4Dbf3CTW7qegO', 'fisica', '', '', '', '', '', 'perfiles/default.jpg'),
(4, 'Teacher', 'Teacher', 'teacher4@mail.com', '$2y$10$TiCswt9xb7Aatoo/5u9YxOjZeH48xn063/D/ybn4DiC39tbiy/HAW', 'ingles', '', '', '', '', '', 'perfiles/default.jpg'),
(5, 'Teacher', 'Teacher', 'teacher5@mail.com', '$2y$10$ymxmfp4ThgZ.KEkDPpACbePgK.Jqb9g.nKWi/glRp6OaTyz0c5Woa', 'lenguaje', '', '', '', '', '', 'perfiles/default.jpg'),
(6, 'Teacher', 'Teacher', 'teacher6@mail.com', '$2y$10$kSHs2AfHf70NBYh/jo6tlO9FnKkYOfD/gzPHjOC2TQDkRfIoHZmqS', 'matematicas', '', '', '', '', '', 'perfiles/default.jpg'),
(7, 'Teacher', 'Teacher', 'teacher7@mail.com', '$2y$10$erpwxKlnlmC3hVqOwHspRORhSRF8g2xANhjj0QE1YuSeTe6fsN0nq', 'naturales', '', '', '', '', '', 'perfiles/default.jpg'),
(8, 'Teacher', 'Teacher', 'teacher8@mail.com', '$2y$10$Ai8Un8Vf.GIgm4SD9Ho5Fe2E7UYnK7rYAyAyNj7l5/ReMiGwygACu', 'sociales', '', '', '', '', '', 'perfiles/default.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistica`
--
ALTER TABLE `artistica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fihr`
--
ALTER TABLE `fihr`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fisica`
--
ALTER TABLE `fisica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingles`
--
ALTER TABLE `ingles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lenguaje`
--
ALTER TABLE `lenguaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matematicas`
--
ALTER TABLE `matematicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `naturales`
--
ALTER TABLE `naturales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sociales`
--
ALTER TABLE `sociales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_student`
--
ALTER TABLE `users_student`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_teacher`
--
ALTER TABLE `users_teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistica`
--
ALTER TABLE `artistica`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `fihr`
--
ALTER TABLE `fihr`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `fisica`
--
ALTER TABLE `fisica`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `ingles`
--
ALTER TABLE `ingles`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `lenguaje`
--
ALTER TABLE `lenguaje`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `matematicas`
--
ALTER TABLE `matematicas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `naturales`
--
ALTER TABLE `naturales`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `sociales`
--
ALTER TABLE `sociales`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users_student`
--
ALTER TABLE `users_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users_teacher`
--
ALTER TABLE `users_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
