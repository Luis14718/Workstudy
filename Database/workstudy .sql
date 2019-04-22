-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2019 a las 02:29:34
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `workstudy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userID` int(11) NOT NULL,
  `permiso` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Hours` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `userID`, `permiso`, `name`, `lastname`, `Department`, `Hours`, `status`) VALUES
(1, 'luis14718', 'admin', 7735279, 'student', 'Luis ', 'Rodriguez', 'marketing', 0, 0),
(2, 'admin', 'admin', 77352, 'admin', 'admin', 'admin', 'library', 0, 1),
(3, 'mendie123', 'student', 7568754, 'student', 'Gandy', 'Mendieta', 'bursars', 0, 0),
(4, 'whatever123', 'student1', 545465, 'student', 'whatever', 'whatever', 'it', 0, 0),
(6, 'hello123', 'hello', 1212321, 'student', 'hello', 'hello', 'business', 0, 0),
(7, 'gladis123', 'gladis', 122313, 'student', 'gladis', 'zamora', 'marketing', 0, 0),
(8, 'new', 'new', 12313, 'student', 'new ', 'student', 'it', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `montlyhoursreport`
--

CREATE TABLE `montlyhoursreport` (
  `IDreport` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_recorderHr` float NOT NULL,
  `date_of_delivery` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `players`
--

INSERT INTO `players` (`id`, `firstname`, `lastname`) VALUES
(1, 'Bob', 'Baker'),
(2, 'Tim', 'Thomas'),
(3, 'Rachel', 'Roberts'),
(4, 'Sam', 'Smith');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `qr`
--

CREATE TABLE `qr` (
  `IDqr` int(50) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `deparment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `qr`
--
ALTER TABLE `qr`
  ADD PRIMARY KEY (`IDqr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
