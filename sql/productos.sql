-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-12-2024 a las 01:05:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'Camiseta de Algodón', 'Camiseta de algodón 100%, ideal para el verano. Disponible en varios colores.', 19.99, 'camiseta.webp'),
(2, 'Pantalón Deportivo', 'Pantalón deportivo cómodo y de alta calidad, perfecto para hacer ejercicio.', 34.50, 'pantalon.webp'),
(3, 'Zapatillas Running	', 'Zapatillas running con gran amortiguación, perfectas para corredores.', 59.99, 'zapatillas.webp'),
(4, 'Chaqueta Impermeable', 'Chaqueta ligera e impermeable, ideal para la lluvia. Disponible en varios tamaños.', 45.99, 'chaqueta.webp'),
(5, 'Gafas de Sol', 'Gafas de sol con protección UV, disponibles en diferentes estilos y colores.', 15.50, 'gafas_sol.webp'),
(6, 'Mochila Deportiva', 'Mochila resistente y espaciosa, perfecta para llevar tu equipo deportivo.', 29.99, 'mochila_deportiva.webp'),
(7, 'Reloj Inteligente', 'Reloj inteligente con funciones de monitoreo de salud, notificaciones y control de actividad física.', 149.99, 'reloj_inteligente.webp'),
(8, 'Auriculares Bluetooth', 'Auriculares inalámbricos con cancelación de ruido y alta calidad de sonido.', 79.99, 'auriculares_bluetooth.webp'),
(9, 'Botas de Senderismo', 'Botas resistentes y cómodas para caminatas largas en la montaña, con suela antideslizante.', 89.95, 'botas_senderismo.webp'),
(10, 'Camisa de Seda', 'Camisa elegante de seda, suave y fresca, disponible en varios colores y tallas.', 49.99, 'camisa_seda.webp');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
