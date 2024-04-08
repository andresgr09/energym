-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-04-2023 a las 16:07:38
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `energym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_maquinas`
--

DROP TABLE IF EXISTS `categorias_maquinas`;
CREATE TABLE IF NOT EXISTS `categorias_maquinas` (
  `id_categoria_maquina` int(40) NOT NULL AUTO_INCREMENT,
  `cod_categoria` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `categoria_maquina` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_categoria_maquina`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias_maquinas`
--

INSERT INTO `categorias_maquinas` (`id_categoria_maquina`, `cod_categoria`, `categoria_maquina`) VALUES
(1, 'cm1', 'Cardio'),
(2, 'cm2', 'Musculación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `id_estado` int(5) NOT NULL AUTO_INCREMENT,
  `cod_estado` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `cod_estado`, `estado`) VALUES
(1, '0', 'No funcionando'),
(2, '1', 'Funcionando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_solicitudes`
--

DROP TABLE IF EXISTS `estado_solicitudes`;
CREATE TABLE IF NOT EXISTS `estado_solicitudes` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `cod_estado_solicitudes` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado_solicitud` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_solicitudes`
--

INSERT INTO `estado_solicitudes` (`id_estado`, `cod_estado_solicitudes`, `estado_solicitud`) VALUES
(1, '1', 'Pendiente'),
(2, '2', 'Aprobado'),
(3, '3', 'No aprobado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinas`
--

DROP TABLE IF EXISTS `maquinas`;
CREATE TABLE IF NOT EXISTS `maquinas` (
  `id_maquina` int(100) NOT NULL AUTO_INCREMENT,
  `codigo_maquina` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `maquina` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_marca` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_categoria` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_estado` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_maquina`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maquinas`
--

INSERT INTO `maquinas` (`id_maquina`, `codigo_maquina`, `maquina`, `fk_marca`, `fk_categoria`, `fk_estado`) VALUES
(1, 'mq1', 'Cinta de Correr', 'm2', 'cm1', '1'),
(2, 'mq2', 'Bicicleta vertical', 'm1', 'cm1', '1'),
(3, 'mq3', 'Elíptica', 'm2', 'cm1', '0'),
(4, 'mq4', 'Estepper o Escaladora', 'm3', 'cm1', '1'),
(5, 'mq5', 'Remo', 'm4', 'cm1', '1'),
(6, 'mq6', 'Banco olímpico', 'm5', 'cm2', '1'),
(7, 'mq7', 'Máquina de poleas', 'm6', 'cm2', '1'),
(8, 'mq9', 'Banco de abdominales', 'm3', 'cm2', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `id_marca` int(30) NOT NULL AUTO_INCREMENT,
  `cod_marca` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `cod_marca`, `marca`) VALUES
(1, 'm1', 'Lifefitness'),
(2, 'm2', 'Nautilus'),
(3, 'm3', 'Totalgym'),
(4, 'm4', 'Freemotion'),
(5, 'm5', 'Eleiko'),
(6, 'm6', 'Startrac');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE IF NOT EXISTS `permisos` (
  `id_permiso` int(100) NOT NULL AUTO_INCREMENT,
  `documento` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_id_rol` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `documento`, `fk_id_rol`) VALUES
(1, '1000253436', '1'),
(2, '46723846', '1'),
(3, '894621524', '1'),
(4, '64987546', '1'),
(5, '216548564', '1'),
(6, '6545412320', '1'),
(7, '100464218', '1'),
(8, '1203674984', '1'),
(9, '987454654', '1'),
(10, '1000253436', '2'),
(11, '52133442', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int(100) NOT NULL AUTO_INCREMENT,
  `rol` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'usuario'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

DROP TABLE IF EXISTS `solicitudes`;
CREATE TABLE IF NOT EXISTS `solicitudes` (
  `id_solicitud` int(100) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_documento` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fk_cod_estado_solicitud` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_solicitud`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`id_solicitud`, `fecha`, `hora`, `fk_documento`, `fk_cod_estado_solicitud`) VALUES
(1, '2023-03-30', '13', '1000253436', '2'),
(2, '2023-04-07', '12 ', '46723846', '3'),
(3, '2023-04-02', '8', '894621524', '1'),
(4, '2023-03-30', '17', '64987546', '3'),
(5, '2023-04-01', '11', '216548564', '2'),
(6, '2023-03-30', '14', '6545412320', '1'),
(7, '2023-04-04', '7', '100464218', '2'),
(8, '2023-04-06', '15', '1203674984', '3'),
(9, '2023-04-09', '9', '987454654', '2'),
(10, '2023-03-31', '6', '52133442', '3'),
(11, '2023-04-12', '10', '1000253436', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(100) NOT NULL AUTO_INCREMENT,
  `documento` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `documento`, `nombres`, `apellidos`, `password`) VALUES
(1, '1000253436', 'Andrés Felipe ', 'Granados Cano', '12345'),
(2, '46723846', 'Jose Antonio', 'Chipre Becerra', '45678'),
(3, '894621524', 'Brandon Andrés', 'Corredor Blanco', '897485'),
(4, '64987546', 'Karen Paola', 'Martinez Fonseca', '98784'),
(5, '216548564', 'Maximiliano', 'Castro Cortez', '784654'),
(6, '6545412320', 'Luz Matilde ', 'Valencia Garcia', '02456'),
(7, '100464218', 'Salome', 'Hurtado', '987987'),
(8, '1203674984', 'Melanny Sofia', 'Cano Perez', '68546544'),
(9, '987454654', 'German Ezequiel', 'Ducuara Sierra', '98465456'),
(10, '4654654', 'Miryam ', 'Cano Martinez', '6987655632Mk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
