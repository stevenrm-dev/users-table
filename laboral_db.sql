-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-02-2024 a las 20:26:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laboral_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `age` date DEFAULT NULL,
  `dni` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `userName`, `email`, `phone`, `age`, `dni`) VALUES
(12, 'Paul Doe', 'p@mail.com', '988888845', '1975-02-02', '44444444A'),
(13, 'Sarah Doe', 's@email.com', '988888899', '1995-12-14', '44444444B'),
(14, 'John Doe', 'john@email.com', '988888811', '1970-05-18', '44444454B'),
(15, 'John Smith', 'j@email.com', '988888858', '1999-02-02', '44444412C'),
(16, 'Dave Doe', 'dd@mail.com', '988888111', '1965-11-11', '44444444Y'),
(17, 'Dina Doe', 'dd2@email.com', '988888877', '2000-10-16', '44444444W'),
(18, 'Peter Parker', 'pp@mail.com', '948888888', '1993-11-11', '44444462F'),
(19, 'Bruce Banner', 'bb@mail.com', '988188899', '1955-12-13', '44444492A'),
(20, 'Zoe Doe', 'zd@mail.com', '944188888', '1963-10-04', '54444444A'),
(21, 'Ken Barbie', 'kb@mail.com', '988838811', '1933-05-05', '44681444K'),
(22, 'Harry Ford', 'hf@mail.com', '998888854', '1970-01-01', '44434125H');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
