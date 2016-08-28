-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2016 a las 19:57:10
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_salud`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ConsultarIncaAccidente` ()  NO SQL
select e.identificacion,e.nombre,t.nombre_tipo_incapacidad,c.nombre_accidente,i.descripcion_incapacidad, i.nivel_riesgo,i.fecha,i.valor_total_empresa,i.valor_total_eps,i.valor_total_incapacidad from tbl_incapacidad i JOIN empleados e ON i.id_empleado = e.identificacion
	JOIN tbl_tipo_incapacidad t ON i.id_tipo_incapacidad = t.id_tipo_incapacidad
    JOIN tbl_clases_accidente c ON i.id_accidente = c.id_accidente$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ConsultarIncaEnfermedad` ()  NO SQL
select e.identificacion,e.nombre,t.nombre_tipo_incapacidad,c.nombre_enfermedad,i.descripcion_incapacidad, i.nivel_riesgo,i.fecha,i.valor_total_empresa,i.valor_total_eps,i.valor_total_incapacidad from tbl_incapacidad i JOIN empleados e ON i.id_empleado = e.identificacion
	JOIN tbl_tipo_incapacidad t ON i.id_tipo_incapacidad = t.id_tipo_incapacidad
    JOIN tbl_clase_enfermedad c ON i.id_enfermedad = c.id_enfermedad$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `nombre` varchar(30) NOT NULL,
  `identificacion` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `profesion` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `salario` int(11) NOT NULL,
  `nivel_riesgo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`nombre`, `identificacion`, `direccion`, `profesion`, `cargo`, `salario`, `nivel_riesgo`) VALUES
('johnn jairo', '234324325', 'cra 44 sur', 'docente', 'ingeniero mercados', 2000000, 1),
('Blanca Helena Martinez', '52765987', 'Cll 34 B # 98-67', 'Bachiller', 'Servicios Generales', 700000, 2),
('Marcela Arias Guzman', '52786573', 'Cll 23# 67-89 ', 'Psicóloga ', 'Gerente Talento Humano', 1600000, 1),
('Luisa Quintanilla', '53674365', 'Cra 18 B # 26-15', 'Auxiliar Administrativo', 'Recepcionista', 700000, 1),
('Pedro Ramirez Carranza', '76543397', 'Cra 26 # 78-89', 'Economista', 'Director Financiero', 2500000, 1),
('Julio Valdez', '76549080', 'Cll 151 # 24-56', 'Ingeniero Industrial', 'Gerente de Producción', 2300000, 1),
('Jose Hurtado', '76985467', 'Cll 56 # 75-21', 'Pintor Industrial', 'Pintor', 950000, 3),
('Angel Vasquez Oviedo', '79153476', 'Cll 54 sur 16-25', 'Tecnico Industrial', 'Tornero', 950000, 5),
('Carlos Alberto Cardenas', '79376567', 'Diag 12 B # 34-90', 'Tecnico Industrial', 'Cortador', 950000, 5),
('Edgar Fernando Mora Alarcon', '79567945', 'Cll 80 # 67-54', 'Mercadeo y Ventas', 'Asesor Comercial', 1600000, 1),
('Alfonso Rojas Ortiz', '79876495', 'Diag 27 No 43-90', 'Troquelador', 'Troquelador', 950000, 5),
('German Augusto Calderon', '80537932', 'Cra 66 # 74-16', 'Tecnico Industrial', 'Soldador', 950000, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clases_accidente`
--

CREATE TABLE `tbl_clases_accidente` (
  `id_accidente` int(11) NOT NULL,
  `nombre_accidente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_clases_accidente`
--

INSERT INTO `tbl_clases_accidente` (`id_accidente`, `nombre_accidente`) VALUES
(1, 'Golpe'),
(2, 'Atrapamiento'),
(3, 'Contacto'),
(4, 'Pegar Contra'),
(5, 'Contacto Con'),
(6, 'Prendimiento'),
(7, 'Caída a Nivel'),
(8, 'Caída a Desnivel'),
(9, 'Aprisionamiento'),
(10, 'Sobreesfuerzo'),
(11, 'Exposición');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clase_enfermedad`
--

CREATE TABLE `tbl_clase_enfermedad` (
  `id_enfermedad` int(11) NOT NULL,
  `nombre_enfermedad` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_clase_enfermedad`
--

INSERT INTO `tbl_clase_enfermedad` (`id_enfermedad`, `nombre_enfermedad`) VALUES
(1, 'Estres'),
(2, 'Fatiga Visual'),
(3, 'Dolor de Espalda'),
(4, 'Síndrome de Fatiga Cronica'),
(5, 'Síndrome del Túnel Carpianao'),
(6, 'Problemas Gastricos'),
(7, 'Obesidad'),
(8, 'Lipoatrofia Semicircular'),
(9, 'Trantornos de Trauma Acumulativo'),
(10, 'Gripa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_incapacidad`
--

CREATE TABLE `tbl_incapacidad` (
  `id_incapacidad` int(11) NOT NULL,
  `id_tipo_incapacidad` int(11) NOT NULL,
  `descripcion_incapacidad` varchar(100) NOT NULL,
  `nivel_riesgo` int(11) DEFAULT NULL,
  `id_empleado` varchar(30) NOT NULL,
  `id_enfermedad` int(11) DEFAULT NULL,
  `id_accidente` int(11) DEFAULT NULL,
  `fecha` date NOT NULL,
  `valor_total_empresa` int(11) NOT NULL,
  `valor_total_eps` int(11) DEFAULT NULL,
  `valor_total_incapacidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_incapacidad`
--

INSERT INTO `tbl_incapacidad` (`id_incapacidad`, `id_tipo_incapacidad`, `descripcion_incapacidad`, `nivel_riesgo`, `id_empleado`, `id_enfermedad`, `id_accidente`, `fecha`, `valor_total_empresa`, `valor_total_eps`, `valor_total_incapacidad`) VALUES
(1, 1, 'vrtvrtvr', NULL, '53674365', 2, NULL, '0000-00-00', 0, 0, 0),
(2, 1, 'jhihi', NULL, '53674365', 7, NULL, '0000-00-00', 0, 0, 93333),
(3, 1, 'sgsag', NULL, '53674365', 2, NULL, '0000-00-00', 70000, 12508, 70000),
(4, 2, 'vrvr', NULL, '52765987', NULL, NULL, '0000-00-00', 46666, 8338, 46666),
(5, 2, 'jkhbjkbj', NULL, '52786573', NULL, NULL, '0000-00-00', 160000, 28588, 160000),
(6, 2, 'swvwve', 3, '79567945', NULL, 2, '0000-00-00', 106666, 19058, 106666),
(8, 1, 'hrhr', NULL, '79567945', 2, NULL, '0000-00-00', 106666, 19058, 106666),
(9, 1, 'je', NULL, '76549080', 1, NULL, '0000-00-00', 230000, 41096, 230000),
(10, 2, 'jholo', 1, '79567945', NULL, 2, '0000-00-00', 106666, 19058, 106666),
(11, 1, '', NULL, '52786573', 3, NULL, '0000-00-00', 160000, 28588, 160000),
(12, 2, 'jholo lopez', 2, '52786573', NULL, 2, '0000-00-00', 106666, 0, 106666),
(13, 2, 'bdfbdf', 1, '76985467', NULL, 5, '2016-08-28', 63333, 0, 63333),
(14, 1, '', NULL, '79567945', 9, NULL, '2016-08-28', 175216, 38117, 213333);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_incapacidad`
--

CREATE TABLE `tbl_tipo_incapacidad` (
  `id_tipo_incapacidad` int(11) NOT NULL,
  `nombre_tipo_incapacidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tipo_incapacidad`
--

INSERT INTO `tbl_tipo_incapacidad` (`id_tipo_incapacidad`, `nombre_tipo_incapacidad`) VALUES
(1, 'Enfermedad Laboral'),
(2, 'Accidente Laboral');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `tbl_clases_accidente`
--
ALTER TABLE `tbl_clases_accidente`
  ADD PRIMARY KEY (`id_accidente`);

--
-- Indices de la tabla `tbl_clase_enfermedad`
--
ALTER TABLE `tbl_clase_enfermedad`
  ADD PRIMARY KEY (`id_enfermedad`);

--
-- Indices de la tabla `tbl_incapacidad`
--
ALTER TABLE `tbl_incapacidad`
  ADD PRIMARY KEY (`id_incapacidad`),
  ADD KEY `fk_empleados` (`id_empleado`),
  ADD KEY `fk_incapacidad_enfermedad` (`id_tipo_incapacidad`),
  ADD KEY `fk_incapacidad_accidente` (`id_accidente`),
  ADD KEY `fk_incapacidad` (`id_enfermedad`);

--
-- Indices de la tabla `tbl_tipo_incapacidad`
--
ALTER TABLE `tbl_tipo_incapacidad`
  ADD PRIMARY KEY (`id_tipo_incapacidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_clases_accidente`
--
ALTER TABLE `tbl_clases_accidente`
  MODIFY `id_accidente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tbl_clase_enfermedad`
--
ALTER TABLE `tbl_clase_enfermedad`
  MODIFY `id_enfermedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_incapacidad`
--
ALTER TABLE `tbl_incapacidad`
  MODIFY `id_incapacidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_incapacidad`
--
ALTER TABLE `tbl_tipo_incapacidad`
  MODIFY `id_tipo_incapacidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_incapacidad`
--
ALTER TABLE `tbl_incapacidad`
  ADD CONSTRAINT `fk_empleados` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`identificacion`),
  ADD CONSTRAINT `fk_incapacidad` FOREIGN KEY (`id_enfermedad`) REFERENCES `tbl_clase_enfermedad` (`id_enfermedad`),
  ADD CONSTRAINT `fk_incapacidad_accidente` FOREIGN KEY (`id_accidente`) REFERENCES `tbl_clases_accidente` (`id_accidente`),
  ADD CONSTRAINT `fk_incapacidad_enfermedad` FOREIGN KEY (`id_tipo_incapacidad`) REFERENCES `tbl_tipo_incapacidad` (`id_tipo_incapacidad`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
