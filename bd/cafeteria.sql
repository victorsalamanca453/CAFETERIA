-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2022 a las 22:08:16
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `Nombre_Producto` varchar(200) NOT NULL,
  `Referencia` varchar(200) NOT NULL,
  `Precio` int(10) NOT NULL,
  `Peso` int(10) NOT NULL,
  `Categoria` varchar(200) NOT NULL,
  `Stock` int(10) NOT NULL,
  `Fecha_Creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `Nombre_Producto`, `Referencia`, `Precio`, `Peso`, `Categoria`, `Stock`, `Fecha_Creacion`) VALUES
(1, 'papa', '2023', 10, 10, 'fruver', 0, '2022-11-03'),
(2, 'pera', '2021', 500, 20, 'fruver', 0, '2022-11-03'),
(3, 'Leche', '2027', 2000, 1, 'Lacteos', 30, '2022-11-03'),
(4, 'Chocorramo', '2028', 2500, 5, 'Pasteles', 40, '2022-11-03'),
(5, 'Yogurt', '2029', 1600, 2, 'Lacteos', 0, '2022-11-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_producto`, `cantidad`) VALUES
(2, 5, 3),
(3, 1, 2),
(4, 1, 2),
(6, 5, 3),
(7, 1, 10),
(8, 1, 3),
(9, 1, 34),
(10, 1, 10),
(11, 1, 2),
(12, 1, 10),
(13, 1, 20),
(14, 1, 20),
(15, 1, 20),
(16, 1, 20),
(17, 1, 20),
(18, 1, 20),
(19, 1, 20),
(20, 1, 20),
(21, 1, 20),
(22, 1, 20),
(23, 1, 20),
(24, 2, 2),
(25, 2, 2),
(26, 2, 2),
(27, 2, 2),
(28, 2, 2),
(29, 2, 2),
(30, 5, 1),
(31, 5, 1),
(32, 5, 1),
(33, 5, 1),
(34, 4, 2),
(35, 4, 2),
(36, 4, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_productos` (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `id_productos` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
