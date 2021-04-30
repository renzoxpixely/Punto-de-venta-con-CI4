-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2021 a las 02:07:27
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE `cajas` (
  `id` int(11) NOT NULL,
  `numero_caja` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `folio` int(11) NOT NULL,
  `activo` tinyint(4) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_modifica` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`id`, `numero_caja`, `nombre`, `folio`, `activo`, `fecha_alta`, `fecha_modifica`) VALUES
(1, '1', 'Caja general', 1, 1, '2021-04-29 13:37:25', NULL),
(2, '2', 'Caja secundaria', 1, 1, '2021-04-29 13:39:16', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` smallint(6) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT 1,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_edit` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `activo`, `fecha_alta`, `fecha_edit`) VALUES
(1, 'Limpiezaaa', 1, '2021-04-24 04:19:26', '2021-04-25 14:15:55'),
(2, 'po', 0, '2021-04-24 04:19:51', '2021-04-24 04:20:03'),
(3, 'fvhv', 1, '2021-04-24 04:20:11', '2021-04-24 04:20:11'),
(4, 'rrrr', 0, '2021-04-25 14:07:22', '2021-04-25 14:07:31'),
(5, '', 1, '2021-04-25 14:32:05', '2021-04-25 14:32:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT 1,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_edit` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `telefono`, `correo`, `activo`, `fecha_alta`, `fecha_edit`) VALUES
(1, 'asdfsa', 'asdfasdf', '234234', 'r@asf.com', 1, '2021-04-28 17:50:26', '2021-04-28 17:50:26'),
(6, '', NULL, NULL, NULL, 1, '2021-04-28 16:54:59', '2021-04-28 16:54:59'),
(7, '', NULL, NULL, NULL, 1, '2021-04-28 17:06:11', '2021-04-28 17:06:11'),
(8, '', NULL, NULL, NULL, 1, '2021-04-28 17:54:37', '2021-04-28 17:54:37'),
(9, '', NULL, NULL, NULL, 1, '2021-04-28 17:15:16', '2021-04-28 17:15:16'),
(10, 'uiop', 'uiop', '78', 'safd@asdfasd.com', 1, '2021-04-28 17:50:37', '2021-04-28 17:50:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `valor` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `nombre`, `valor`) VALUES
(1, 'tienda_nombre', 'Tienda CDF'),
(2, 'tienda_rfc', 'xxxxx00000xxxx'),
(3, 'tienda_telefono', '45454545455'),
(4, 'tienda_email', 'tienda@tienda.com'),
(5, 'tienda_direccion', 'Avenido Nueva Esperanza'),
(6, 'ticket_leyenda', 'Gracias por comprar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `precio_venta` decimal(10,2) NOT NULL,
  `precio_compra` decimal(10,2) NOT NULL DEFAULT 0.00,
  `existencias` int(11) NOT NULL DEFAULT 0,
  `stock_minimo` int(11) NOT NULL DEFAULT 0,
  `inventariable` tinyint(4) NOT NULL,
  `id_unidad` smallint(6) NOT NULL,
  `id_categoria` smallint(6) NOT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT 1,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_edit` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `precio_venta`, `precio_compra`, `existencias`, `stock_minimo`, `inventariable`, `id_unidad`, `id_categoria`, `activo`, `fecha_alta`, `fecha_edit`) VALUES
(1, '341465', 'Galleta', '15.00', '12.00', 0, 10, 1, 1, 3, 1, '2021-04-26 14:24:45', '2021-04-26 14:24:45'),
(2, 'WPTXS', 'Kilogramosss', '2432.00', '32432.00', 0, 324, 1, 4, 1, 0, '2021-04-26 13:55:35', '2021-04-26 13:55:35'),
(3, '123412488', 'asdf888', '132488.00', '12388.00', 0, 108, 0, 8, 3, 1, '2021-04-26 14:04:42', '2021-04-26 14:04:42'),
(4, 'qqqqq', 'qqqqqqqq', '15.00', '32432.00', 0, 10, 1, 1, 3, 1, '2021-04-26 13:55:58', '2021-04-26 13:55:58'),
(7, '4234', 'Galleta', '3243.00', '324.00', 0, 234, 0, 4, 1, 1, '2021-04-28 13:44:18', '2021-04-28 13:44:18'),
(10, '234', 'Galleta', '124.00', '2414.00', 0, 1034, 0, 4, 3, 1, '2021-04-28 13:45:42', '2021-04-28 13:45:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(4) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_modifica` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `activo`, `fecha_alta`, `fecha_modifica`) VALUES
(1, 'Administrador', 1, '2021-04-29 13:38:40', NULL),
(2, 'Cajero', 1, '2021-04-29 13:38:40', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `id` smallint(6) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_corto` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(3) NOT NULL DEFAULT 1,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_edit` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `unidades`
--

INSERT INTO `unidades` (`id`, `nombre`, `nombre_corto`, `activo`, `fecha_alta`, `fecha_edit`) VALUES
(1, 'Kilogramosssqq', 'Kgssqq', 1, '2021-04-23 19:53:53', '2021-04-23 19:53:53'),
(3, 'asdf', 'asdf', 1, '2021-04-25 16:29:44', '2021-04-25 16:29:44'),
(4, 'qwer', 'qwer', 1, '2021-04-25 14:01:43', '2021-04-25 14:01:43'),
(5, 'zcxv', 'zcxv', 1, '2021-04-23 19:54:37', '2021-04-23 19:54:37'),
(6, '', '', 1, '2021-04-25 18:25:34', '2021-04-25 18:25:34'),
(7, '', '', 1, '2021-04-25 16:19:38', '2021-04-25 16:19:38'),
(8, 'caja', 'caja', 1, '2021-04-25 16:20:28', '2021-04-25 16:20:28'),
(9, '', '', 1, '2021-04-26 15:51:26', '2021-04-26 15:51:26'),
(10, '', '', 1, '2021-04-26 15:51:45', '2021-04-26 15:51:45'),
(11, '', 'asd', 1, '2021-04-26 16:01:55', '2021-04-26 16:01:55'),
(12, '', '', 1, '2021-04-26 16:02:18', '2021-04-26 16:02:18'),
(13, '', '', 1, '2021-04-26 16:02:46', '2021-04-26 16:02:46'),
(14, '', 'adfadf', 1, '2021-04-26 16:06:33', '2021-04-26 16:06:33'),
(15, 'asdf', '', 1, '2021-04-26 16:07:35', '2021-04-26 16:07:35'),
(16, '', '', 1, '2021-04-26 16:20:35', '2021-04-26 16:20:35'),
(17, 'asdf', '', 1, '2021-04-28 00:26:30', '2021-04-28 00:26:30'),
(18, 'asfdsaf', 'fasdfasdf', 1, '2021-04-28 00:45:23', '2021-04-28 00:45:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(130) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_caja` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `activo` tinyint(4) NOT NULL,
  `fecha_alta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_modifica` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `id_caja`, `id_rol`, `activo`, `fecha_alta`, `fecha_modifica`) VALUES
(1, 'marco', '$2y$10$AgMp9R7T/3o5/wWRszhISOotOhgknzN85MUd8k2q8ulFQ3NEA16yC', 'Marco Robles', 1, 1, 1, '2021-04-29 14:24:29', '2021-04-29 14:24:29'),
(2, 'admin', '$2y$10$lGK6RH8hIfrxcF3VEZjqV.9vK7fbOwFt2G8YhyZl30EmpQ6jzmc7.', 'admin', 1, 1, 1, '2021-04-29 19:38:50', '2021-04-29 19:38:50'),
(4, 'asdf', '$2y$10$kInYS.YzFWGraORThi99z.CmCj7RdTzHo5/0MLmMs1OC2KAxxUguu', 'asdf', 1, 1, 1, '2021-04-29 23:52:16', '2021-04-29 23:52:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD KEY `fk_producto_unidad` (`id_unidad`),
  ADD KEY `fk_producto_categoria` (`id_categoria`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_caja` (`id_caja`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cajas`
--
ALTER TABLE `cajas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_producto_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `fk_producto_unidad` FOREIGN KEY (`id_unidad`) REFERENCES `unidades` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuario_caja` FOREIGN KEY (`id_caja`) REFERENCES `cajas` (`id`),
  ADD CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
