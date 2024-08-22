-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-08-2024 a las 05:11:47
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grafilar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `organizacion` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `geoposicion` varchar(100) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `organizacion`, `email`, `telefono`, `direccion`, `geoposicion`, `reg_date`) VALUES
(1, 'Cliente de Prueba', 'Instituto de prueba', 'prueba@gmail.com', '3804250007', 'San martin 287', NULL, '2024-08-21 19:31:27'),
(2, 'Juan Pérez', 'Colegio de Arquitectos', 'juan.perez@example.com', '123456789', 'Calle Falsa 123', 'geo1', NULL),
(3, 'María López', 'Colegio de Contadores', 'maria.lopez@example.com', '987654321', 'Avenida Siempre Viva 456', 'geo2', NULL),
(4, 'Carlos García', 'Colegio de Abogados', 'carlos.garcia@example.com', '456789123', 'Boulevard de los Sueños 789', 'geo3', NULL),
(5, 'Ana Martínez', 'Colegio de Ingenieros', 'ana.martinez@example.com', '789123456', 'Calle de la Esperanza 101', 'geo4', NULL),
(6, 'Luis Fernández', 'Colegio de Médicos', 'luis.fernandez@example.com', '321654987', 'Avenida de la Paz 202', 'geo5', NULL),
(7, 'Laura Gómez', 'Colegio de Arquitectos', 'laura.gomez@example.com', '654987321', 'Calle del Sol 303', 'geo6', NULL),
(8, 'Pedro Sánchez', 'Colegio de Contadores', 'pedro.sanchez@example.com', '123789456', 'Avenida del Mar 404', 'geo7', NULL),
(9, 'Sofía Ramírez', 'Colegio de Abogados', 'sofia.ramirez@example.com', '987321654', 'Boulevard del Río 505', 'geo8', NULL),
(10, 'Miguel Torres', 'Colegio de Ingenieros', 'miguel.torres@example.com', '456123789', 'Calle de la Luna 606', 'geo9', NULL),
(11, 'Elena Díaz', 'Colegio de Médicos', 'elena.diaz@example.com', '789456123', 'Avenida de las Estrellas 707', 'geo10', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenios`
--

CREATE TABLE `convenios` (
  `id` int NOT NULL,
  `nombre_institucion` varchar(100) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `descuento_porcentaje` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `convenios`
--

INSERT INTO `convenios` (`id`, `nombre_institucion`, `fecha_creacion`, `descuento_porcentaje`) VALUES
(1, 'Colegio de Arquitectos', '2023-01-15', 10.00),
(2, 'Colegio de Contadores', '2023-02-20', 15.00),
(3, 'Colegio de Abogados', '2023-03-10', 12.50),
(4, 'Colegio de Ingenieros', '2023-04-05', 20.00),
(5, 'Colegio de Médicos', '2023-05-25', 18.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedidos` (
  `id` int NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `geoposicion` varchar(255) NOT NULL,
  `tipo_documento` enum('30%','50%','100%') NOT NULL,
  `cantidad_hojas` int NOT NULL,
  `frente_dorso` enum('frente','frente_dorso') NOT NULL,
  `cantidad_ejemplares` int NOT NULL,
  `archivo` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedidos` (`id`, `cliente`, `nombre`, `email`, `telefono`, `direccion`, `geoposicion`, `tipo_documento`, `cantidad_hojas`, `frente_dorso`, `cantidad_ejemplares`, `archivo`, `fecha_creacion`) VALUES
(1, 'Cliente 1', 'Nombre 1', 'cliente1@example.com', '1234567890', 'Dirección 1', 'Geoposición 1', '30%', 10, 'frente', 5, 'archivo1.pdf', '2024-08-22 03:35:51'),
(2, 'Cliente 2', 'Nombre 2', 'cliente2@example.com', '1234567891', 'Dirección 2', 'Geoposición 2', '50%', 20, 'frente_dorso', 10, 'archivo2.pdf', '2024-08-22 03:35:51'),
(3, 'Cliente 3', 'Nombre 3', 'cliente3@example.com', '1234567892', 'Dirección 3', 'Geoposición 3', '100%', 15, 'frente', 3, 'archivo3.pdf', '2024-08-22 03:35:51'),
(4, 'Cliente 4', 'Nombre 4', 'cliente4@example.com', '1234567893', 'Dirección 4', 'Geoposición 4', '30%', 25, 'frente_dorso', 8, 'archivo4.pdf', '2024-08-22 03:35:51'),
(5, 'Cliente 5', 'Nombre 5', 'cliente5@example.com', '1234567894', 'Dirección 5', 'Geoposición 5', '50%', 30, 'frente', 12, 'archivo5.pdf', '2024-08-22 03:35:51'),
(6, 'Cliente 6', 'Nombre 6', 'cliente6@example.com', '1234567895', 'Dirección 6', 'Geoposición 6', '100%', 5, 'frente_dorso', 7, 'archivo6.pdf', '2024-08-22 03:35:51'),
(7, 'Cliente 7', 'Nombre 7', 'cliente7@example.com', '1234567896', 'Dirección 7', 'Geoposición 7', '30%', 18, 'frente', 9, 'archivo7.pdf', '2024-08-22 03:35:51'),
(8, 'Cliente 8', 'Nombre 8', 'cliente8@example.com', '1234567897', 'Dirección 8', 'Geoposición 8', '50%', 12, 'frente_dorso', 15, 'archivo8.pdf', '2024-08-22 03:35:51'),
(9, 'Cliente 9', 'Nombre 9', 'cliente9@example.com', '1234567898', 'Dirección 9', 'Geoposición 9', '100%', 22, 'frente', 4, 'archivo9.pdf', '2024-08-22 03:35:51'),
(10, 'Cliente 10', 'Nombre 10', 'cliente10@example.com', '1234567899', 'Dirección 10', 'Geoposición 10', '30%', 14, 'frente_dorso', 6, 'archivo10.pdf', '2024-08-22 03:35:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id` int NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `precio_base` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `convenios`
--
ALTER TABLE `convenios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `convenios`
--
ALTER TABLE `convenios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedidos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
