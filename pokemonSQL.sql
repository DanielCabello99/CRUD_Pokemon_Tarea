-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 27-01-2024 a las 21:31:51
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenadores`
--

CREATE TABLE `entrenadores` (
  `nomEnt` varchar(25) NOT NULL,
  `genEnt` varchar(30) NOT NULL,
  `numPok` varchar(30) NOT NULL,
  `regEnt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `entrenadores`
--

INSERT INTO `entrenadores` (`nomEnt`, `genEnt`, `numPok`, `regEnt`) VALUES
('Cintia', 'Femenino', '6', 'Sinnoh'),
('Misty', 'Femenino', '4', 'Kanto'),
('N', 'Masculino', '6', 'Teselia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `numPok` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `nomPok` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `genPok` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `tipPok` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`numPok`, `nomPok`, `genPok`, `tipPok`) VALUES
('133', 'Eevee', 'Hembra', 'Normal'),
('25', 'Pikachu', 'Macho', 'Eléctrico'),
('4', 'Charmander', 'Hembra', 'Fuego'),
('69', 'Bellsprout', 'Macho', 'Planta, Veneno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD PRIMARY KEY (`nomEnt`);

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`numPok`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
