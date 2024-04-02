-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-03-2020 a las 21:25:38
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ag_contacto`
--

DROP TABLE IF EXISTS `ag_contacto`;
CREATE TABLE IF NOT EXISTS `ag_contacto` (
  `id_contacto` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_contacto`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `ag_contacto`
--

INSERT INTO `ag_contacto` (`id_contacto`, `nombres`, `apellidos`, `telefono`, `email`) VALUES
(1, 'Julio Eduardo', 'Rosales Vega', 67876567, 'julio@info.com'),
(2, 'Fernanda', 'Cabrera Arana', 45673876, 'fernanda@info.com'),
(3, 'Luis', 'Cardona', 78879877, 'luis@info.com'),
(4, 'Marcelo', 'Solares', 45637898, 'marcelo@info.com'),
(5, 'Mariela', 'Soto', 67387678, 'mariela@info.com'),
(6, 'Angel', 'Rodas', 45243678, 'angel@info.com'),
(7, 'Ruben', 'Aguirre', 7654326, 'ruben@info.com'),
(8, 'Rudy', 'Hernández', 53467287, 'rudy@info.com'),
(9, 'Jorge', 'Cabrera', 98789878, 'jorge@info.com'),
(10, 'Mynor', 'Alonzo', 45536789, 'mynor@gmail.com'),
(11, 'José', 'Maldonado', 78987898, 'jose@info.com'),
(12, 'Marta', 'Contreras', 36526873, 'marta@info.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
