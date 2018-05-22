-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2018 a las 19:30:10
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `newreset`
--
CREATE DATABASE IF NOT EXISTS `newreset` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `newreset`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_usuario`
--

CREATE TABLE `area_usuario` (
  `id_area` int(11) NOT NULL COMMENT 'ID Área',
  `nombre` varchar(15) NOT NULL COMMENT 'Nombre del área de la Institución a la que pertenece el usuario.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area_usuario`
--

INSERT INTO `area_usuario` (`id_area`, `nombre`) VALUES
(1, 'Académica'),
(2, 'Administrativa'),
(3, 'Técnica'),
(4, 'Tecnológica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_usuario`
--

CREATE TABLE `cargo_usuario` (
  `id_cargo` int(11) NOT NULL COMMENT 'ID Cargo',
  `nombre` varchar(50) NOT NULL COMMENT 'Nombre del cargo del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo_usuario`
--

INSERT INTO `cargo_usuario` (`id_cargo`, `nombre`) VALUES
(1, 'Técnico'),
(2, 'Rector'),
(3, 'Coordinador académico'),
(4, 'Profesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_ticket`
--

CREATE TABLE `categoria_ticket` (
  `id_categoria` int(11) NOT NULL COMMENT 'ID categoria de la incidencia.',
  `nombre` varchar(15) NOT NULL COMMENT 'Nombre del especificacion de la categoria de la incidencia.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria_ticket`
--

INSERT INTO `categoria_ticket` (`id_categoria`, `nombre`) VALUES
(1, 'Hardware'),
(2, 'Software');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(11) NOT NULL COMMENT 'ID Equipo',
  `cod_tipo_equipo` int(11) NOT NULL COMMENT 'Código del tipo de equipo desde tabla tipo_equipo\n- Escritorio\n- Portátil',
  `serial_equipo` varchar(30) NOT NULL COMMENT 'Número de Serial del equipo',
  `cod_estado_equipo` int(11) NOT NULL COMMENT 'Código del estado del equipo desde tabla estado_equipo\n- Inactivo\n- Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_equipo`
--

CREATE TABLE `estado_equipo` (
  `id_estado_equipo` int(11) NOT NULL COMMENT 'ID estado del equipo',
  `nombre` varchar(15) NOT NULL COMMENT 'Nombre del estado del equipo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_equipo`
--

INSERT INTO `estado_equipo` (`id_estado_equipo`, `nombre`) VALUES
(1, 'Inactivo'),
(2, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_ticket`
--

CREATE TABLE `estado_ticket` (
  `id_estado_ticket` int(11) NOT NULL COMMENT 'ID estado de la incidencia en el ticket',
  `nombre` varchar(15) NOT NULL COMMENT 'Nombre de estado de la incidencia en el ticket'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_ticket`
--

INSERT INTO `estado_ticket` (`id_estado_ticket`, `nombre`) VALUES
(1, 'Enviado'),
(2, 'Visto'),
(3, 'En proceso'),
(4, 'Solucionado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_usuario`
--

CREATE TABLE `estado_usuario` (
  `id_estado` int(11) NOT NULL COMMENT 'ID Estado del Usuario',
  `nombre` varchar(45) NOT NULL COMMENT 'Nombre de estado del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_usuario`
--

INSERT INTO `estado_usuario` (`id_estado`, `nombre`) VALUES
(1, 'Inactivo'),
(2, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_usuario`
--

CREATE TABLE `genero_usuario` (
  `id_genero` int(11) NOT NULL COMMENT 'ID Género',
  `nombre` varchar(15) NOT NULL COMMENT 'Nombre de Género'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero_usuario`
--

INSERT INTO `genero_usuario` (`id_genero`, `nombre`) VALUES
(1, 'Masculino'),
(2, 'Femenino ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_usuario`
--

CREATE TABLE `rol_usuario` (
  `id_rol` int(11) NOT NULL COMMENT 'ID Rol del Usuario',
  `nombre` varchar(50) NOT NULL COMMENT 'Nombre de Rol de usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol_usuario`
--

INSERT INTO `rol_usuario` (`id_rol`, `nombre`) VALUES
(1, 'Superadministrador'),
(2, 'Técnico'),
(3, 'Administrativo'),
(4, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL COMMENT 'ID Ticket ',
  `fecha_inicio` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de inicio del nuevo ticket',
  `fecha_fin` datetime NOT NULL COMMENT 'Fecha de finalizacion del ticket',
  `descrip_incidencia` text NOT NULL COMMENT 'Descripción de la incidencia',
  `archivo_evidencia` varchar(255) NOT NULL COMMENT 'Ruta de la carpeta que guarda los archivos evidencia',
  `cod_categoria` int(11) NOT NULL COMMENT 'Código de especificacion de la categoria de la incidencia desde tabla categoria\n- Hardware\n- Software',
  `cod_estado_ticket` int(11) NOT NULL COMMENT 'Código de estado de la incidencia en el ticket desde tabla estado_ticket\n- Enviado\n- Visto\n- En proceso\n- Solucionado',
  `cod_usuario` int(11) NOT NULL COMMENT 'Código de Usuario desde tabla Usuario ',
  `cod_equipo` int(11) NOT NULL COMMENT 'Código de Equipo desde tabla Equipo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento_usuario`
--

CREATE TABLE `tipo_documento_usuario` (
  `id_tipo_documento` int(11) NOT NULL COMMENT 'ID Tipo de documento del usuario',
  `nombre` varchar(50) NOT NULL COMMENT 'Nombre del Tipo de documento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_documento_usuario`
--

INSERT INTO `tipo_documento_usuario` (`id_tipo_documento`, `nombre`) VALUES
(1, 'Cedula de ciudadania'),
(2, 'Cedula de extranjeria'),
(3, 'Pasaporte'),
(4, 'NIT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_equipo`
--

CREATE TABLE `tipo_equipo` (
  `id_tipo_equipo` int(11) NOT NULL COMMENT 'ID tipo de equipo ',
  `nombre` varchar(15) NOT NULL COMMENT 'Nombre del tipo de equipo '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_equipo`
--

INSERT INTO `tipo_equipo` (`id_tipo_equipo`, `nombre`) VALUES
(1, 'Escritorio'),
(2, 'Portátil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL COMMENT 'ID Usuario',
  `cod_tipo_doc` int(11) NOT NULL COMMENT 'Tipo de documento del Usuario desde tabla tipo_documento_usuario\n- Cedula de ciudadania\n- Cedula de extranjeria\n- Pasaporte\n- NIT',
  `documento` varchar(20) NOT NULL COMMENT 'Número de documento del Usuario',
  `nombre` varchar(30) NOT NULL COMMENT 'Nombre del Usuario',
  `apellido` varchar(30) NOT NULL COMMENT 'Apellido del Usuario',
  `cod_genero` int(11) NOT NULL COMMENT 'Género del Usuario desde tabla genero_usuario\n- Masculino\n- Femenino',
  `email` varchar(50) NOT NULL COMMENT 'Email del Usuario',
  `password` varchar(60) NOT NULL COMMENT 'Contraseña del Usuario',
  `cod_area` int(11) NOT NULL COMMENT 'Código del área de la Institución a la que pertenece el usuario desde tabla area_usuario\n- Académica\n- Administrativa\n- Técnica\n- Tecnológica',
  `cod_cargo` int(11) NOT NULL COMMENT 'Código del cargo del usuario desde tabla cargo_usuario\n- Técnico\n- Rector\n- Coordinador académico\n- Profesor',
  `cod_rol` int(11) NOT NULL COMMENT 'Código del rol del usuario desde tabla rol_usuario\n- Técnico\n- Administrativo\n- Usuario',
  `cod_estado_usuario` int(11) NOT NULL COMMENT 'Código del estado del usuario desde tabla estado_usuario\n- Inactivo\n- Activo',
  `fecha_creado` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha creado del usuario en hora de sistema'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area_usuario`
--
ALTER TABLE `area_usuario`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `cargo_usuario`
--
ALTER TABLE `cargo_usuario`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `categoria_ticket`
--
ALTER TABLE `categoria_ticket`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`),
  ADD UNIQUE KEY `serial_equipo_UNIQUE` (`serial_equipo`),
  ADD KEY `fk_equipo_estado_equipo_idx` (`cod_estado_equipo`),
  ADD KEY `fk_equipo_tipo_equipo_idx` (`cod_tipo_equipo`);

--
-- Indices de la tabla `estado_equipo`
--
ALTER TABLE `estado_equipo`
  ADD PRIMARY KEY (`id_estado_equipo`);

--
-- Indices de la tabla `estado_ticket`
--
ALTER TABLE `estado_ticket`
  ADD PRIMARY KEY (`id_estado_ticket`);

--
-- Indices de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `genero_usuario`
--
ALTER TABLE `genero_usuario`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `fk_Ticket_Usuario_idx` (`cod_usuario`),
  ADD KEY `fk_Ticket_Equipo_idx` (`cod_equipo`),
  ADD KEY `fk_ticket_categoria_idx` (`cod_categoria`),
  ADD KEY `fk_ticket_estado_ticket_idx` (`cod_estado_ticket`);

--
-- Indices de la tabla `tipo_documento_usuario`
--
ALTER TABLE `tipo_documento_usuario`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `tipo_equipo`
--
ALTER TABLE `tipo_equipo`
  ADD PRIMARY KEY (`id_tipo_equipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `documento_UNIQUE` (`documento`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `fk_usuario_rol_idx` (`cod_rol`),
  ADD KEY `fk_usuario_area_idx` (`cod_area`),
  ADD KEY `fk_usuario_genero_idx` (`cod_genero`),
  ADD KEY `fk_usuario_tipo_documento_idx` (`cod_tipo_doc`),
  ADD KEY `fk_usuario_estado_idx` (`cod_estado_usuario`),
  ADD KEY `fk_usuario_cargo_idx` (`cod_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area_usuario`
--
ALTER TABLE `area_usuario`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Área', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cargo_usuario`
--
ALTER TABLE `cargo_usuario`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Cargo', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categoria_ticket`
--
ALTER TABLE `categoria_ticket`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID categoria de la incidencia.', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Equipo';

--
-- AUTO_INCREMENT de la tabla `estado_equipo`
--
ALTER TABLE `estado_equipo`
  MODIFY `id_estado_equipo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID estado del equipo', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_ticket`
--
ALTER TABLE `estado_ticket`
  MODIFY `id_estado_ticket` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID estado de la incidencia en el ticket', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado_usuario`
--
ALTER TABLE `estado_usuario`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Estado del Usuario', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `genero_usuario`
--
ALTER TABLE `genero_usuario`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Género', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol_usuario`
--
ALTER TABLE `rol_usuario`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Rol del Usuario', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Ticket ';

--
-- AUTO_INCREMENT de la tabla `tipo_documento_usuario`
--
ALTER TABLE `tipo_documento_usuario`
  MODIFY `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Tipo de documento del usuario', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_equipo`
--
ALTER TABLE `tipo_equipo`
  MODIFY `id_tipo_equipo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID tipo de equipo ', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Usuario';

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `fk_equipo_estado_equipo` FOREIGN KEY (`cod_estado_equipo`) REFERENCES `estado_equipo` (`id_estado_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_equipo_tipo_equipo` FOREIGN KEY (`cod_tipo_equipo`) REFERENCES `tipo_equipo` (`id_tipo_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_Ticket_Equipo` FOREIGN KEY (`cod_equipo`) REFERENCES `equipo` (`id_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Ticket_Usuario` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_categoria` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria_ticket` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_estado_ticket` FOREIGN KEY (`cod_estado_ticket`) REFERENCES `estado_ticket` (`id_estado_ticket`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_area` FOREIGN KEY (`cod_area`) REFERENCES `area_usuario` (`id_area`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_cargo` FOREIGN KEY (`cod_cargo`) REFERENCES `cargo_usuario` (`id_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_estado` FOREIGN KEY (`cod_estado_usuario`) REFERENCES `estado_usuario` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_genero` FOREIGN KEY (`cod_genero`) REFERENCES `genero_usuario` (`id_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`cod_rol`) REFERENCES `rol_usuario` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_tipo_documento` FOREIGN KEY (`cod_tipo_doc`) REFERENCES `tipo_documento_usuario` (`id_tipo_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
