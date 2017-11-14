-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2017 a las 00:15:37
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `modelo_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_dependencia`
--

CREATE TABLE `area_dependencia` (
  `idarea_dependencia` int(11) NOT NULL,
  `descripcion_dependencia` varchar(45) NOT NULL,
  `gerencia_idgerencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area_dependencia`
--

INSERT INTO `area_dependencia` (`idarea_dependencia`, `descripcion_dependencia`, `gerencia_idgerencia`) VALUES
(1, 'IDIOMAS ', 3),
(2, 'TECNOLOGIA ', 3),
(4, 'BIENESTAR AL ESTUDIANTE ', 4),
(5, 'GERENCIA ', 1),
(7, 'ETICA DEL ESTUDIANTE ', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idcargo` int(11) NOT NULL,
  `descripcioncargo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idcargo`, `descripcioncargo`) VALUES
(1, 'RECTOR '),
(2, 'PROFESOR '),
(3, 'TECNICO '),
(4, 'COORDINADOR ACADEMICO '),
(5, 'COORDINADOR CONVIVENCIAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `descripcion`) VALUES
(1, 'HARDWARE'),
(2, 'SOFTWARE'),
(3, 'TELEFONIA IP'),
(4, 'REDES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idciudad` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `departamento_iddepartamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idciudad`, `nombre`, `departamento_iddepartamento`) VALUES
(1, 'LETICIA ', 1),
(2, 'MEDELLIN ', 2),
(3, 'ARAUCA ', 3),
(4, 'BARRANQUILLA ', 4),
(5, 'CARTAGENA', 5),
(6, 'TUNJA ', 6),
(7, 'MANIZALES', 7),
(8, 'FLORENCIA ', 8),
(9, 'YOPAL', 9),
(10, 'POPAYAN ', 10),
(11, 'VALLEDUPAR', 11),
(12, 'QUIBDO ', 12),
(13, 'MONTERIA', 13),
(14, 'BOGOTA', 14),
(15, 'PUERTO INIRIDA ', 15),
(16, 'SAN JOSE DEL GUAVIARE ', 16),
(17, 'NEIVA ', 17),
(18, 'RIOHACHA', 18),
(19, 'SANTA MARTA ', 19),
(20, 'VILLAVICENCIO', 20),
(21, 'PASTO ', 21),
(22, 'CUCUTA ', 22),
(23, 'MOCOA', 23),
(24, 'ARMENIA ', 24),
(25, 'PEREIRA ', 25),
(26, 'SAN ANDRES ', 26),
(27, 'BUCARAMANGA ', 27),
(28, 'SINCELEJO', 28),
(29, 'IBAGUE ', 29),
(30, 'CALI', 30),
(31, 'MITU', 31),
(32, 'PUERTO CARREÑO ', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `idclasificacion` int(11) NOT NULL,
  `descripcion_clasif` varchar(45) NOT NULL,
  `subcategoria_idsubcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`idclasificacion`, `descripcion_clasif`, `subcategoria_idsubcategoria`) VALUES
(1, 'Estándar local que permite una comunicación m', 1),
(2, 'instrucciones y guardar los resultados.', 2),
(3, 'almacena todos los programas y datos de la co', 3),
(4, 'procesamiento de los datos que provienen del ', 4),
(5, 'permite la entrada o salida de informacion en', 5),
(6, 'Convierte las señales digitales en analógicas', 6),
(7, 'formato para módulos de memoria RAM que consi', 7),
(8, 'módulos de memoria RAM que se conectan direct', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`iddepartamento`, `nombre`) VALUES
(1, 'AMAZONAS '),
(2, 'ANTIOQUIA '),
(3, 'ARAUCA '),
(4, 'ATLANTICO '),
(5, 'BOLIVAR '),
(6, 'BOYACA '),
(7, 'CALDAS '),
(8, 'CAQUETA '),
(9, 'CASANARE '),
(10, 'CAUCA '),
(11, 'CESAR '),
(12, 'CHOCO '),
(13, 'CORDOBA '),
(14, 'CUNDINAMARCA '),
(15, 'GUAINIA '),
(16, 'GUAVIARE '),
(17, 'HUILA '),
(18, 'LA GUAJIRA '),
(19, 'MAGDALENA'),
(20, 'META'),
(21, 'NARIÑO'),
(22, 'NORTE DE SANTANDER '),
(23, 'PUTUMAYO '),
(24, 'QUINDIO'),
(25, 'RISARALDA'),
(26, 'SAN ANDRES Y PROVIDENCIA'),
(27, 'SANTADER'),
(28, 'SUCRE'),
(29, 'TOLIMA '),
(30, 'VALLE DEL CAUCA '),
(31, 'VAUPES '),
(32, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipotipo`
--

CREATE TABLE `equipotipo` (
  `idequipotipo` int(11) NOT NULL,
  `descripcion_equipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipotipo`
--

INSERT INTO `equipotipo` (`idequipotipo`, `descripcion_equipo`) VALUES
(1, 'PORTATIL'),
(2, 'ESCRITORIO '),
(3, 'VIDEO BEAM ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `nombre`) VALUES
(1, 'ARCHIVADO '),
(2, 'EN PROCESO '),
(3, 'DENEGADO '),
(4, 'SOLUCIONADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerencia`
--

CREATE TABLE `gerencia` (
  `idgerencia` int(11) NOT NULL,
  `descripcion_gerencia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gerencia`
--

INSERT INTO `gerencia` (`idgerencia`, `descripcion_gerencia`) VALUES
(1, 'ADMINISTRATIVA '),
(2, 'CONVIVENCIAL '),
(3, 'RENDIMIENTO ACADEMICO '),
(4, 'PSICOLOGIA ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idperfil`, `nombre`) VALUES
(1, 'TECNICO'),
(2, 'RECTOR '),
(3, 'PROFESOR '),
(4, 'COODINADOR ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `idsexo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`idsexo`, `nombre`) VALUES
(1, 'FEMENINO '),
(2, 'MASCULINO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `idsubcategoria` int(11) NOT NULL,
  `subcategoriacol` varchar(45) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`idsubcategoria`, `subcategoriacol`, `categoria_idcategoria`) VALUES
(1, 'BOARD ', 1),
(2, 'RAM ', 1),
(3, 'DISCO DURO ', 1),
(4, 'TAJETA DE VIDEO', 1),
(5, 'TARJETA DE SONIDO ', 1),
(6, 'MODEM ', 1),
(7, 'SIMM', 1),
(8, 'DIMM', 1),
(9, 'ESCANER ', 1),
(10, 'TABLETA DIGITALIZADORA', 1),
(11, 'LAPIZ OPTICO', 1),
(12, 'CAMARA DIGITAL', 1),
(13, 'PROCESADOR ', 1),
(14, 'MEMORIA ', 1),
(15, 'PERIFERICO DE ALMACENACMIENTO ', 1),
(16, 'MS-WORD', 2),
(17, 'MS EXCEL ', 2),
(18, 'MS POWER POINT ', 2),
(19, 'SAP', 2),
(20, 'MS-DOS', 2),
(21, 'WINDOWS', 2),
(22, 'LINUX', 2),
(23, 'UNIX ', 2),
(24, 'CLIENTE ', 3),
(25, 'SERVIDOR ', 3),
(26, 'GATEWAYS ', 3),
(27, 'ESTACIONES DE TRABAJO ', 4),
(28, 'SISTEMA OPERATIVO DE RED ', 4),
(29, 'PROTOCOLOS DE COMUNICACION', 4),
(30, 'TARJETA DE INTERFACE DE RED', 4),
(31, 'CABLEADO', 4),
(32, 'HUB', 4),
(33, 'SWITCHS ', 4),
(34, 'REPETIDOR ', 4),
(35, 'PUENTE ', 4),
(36, 'RUTEADOR ', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `idticket` int(11) NOT NULL,
  `asunto_ticket` varchar(45) NOT NULL,
  `descrpcion_ticket` varchar(45) NOT NULL,
  `fecha_ticket` date NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `tiempo_atencion_idtiempo_atencion` int(11) NOT NULL,
  `equipotipo_idequipotipo` int(11) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  `estado_idestado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`idticket`, `asunto_ticket`, `descrpcion_ticket`, `fecha_ticket`, `usuario_idusuario`, `tiempo_atencion_idtiempo_atencion`, `equipotipo_idequipotipo`, `categoria_idcategoria`, `estado_idestado`) VALUES
(0, 'DAÑO EN EL MOUSE', 'NO SIRVE EL MOUSE', '2017-06-29', 2, 3, 2, 1, 2),
(1, 'DAÑO RED ', 'LA RED NO QUIERE SERVIR ', '2017-07-07', 1, 1, 1, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo_atencion`
--

CREATE TABLE `tiempo_atencion` (
  `idtiempo_atencion` int(11) NOT NULL,
  `descripcion_tiempo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiempo_atencion`
--

INSERT INTO `tiempo_atencion` (`idtiempo_atencion`, `descripcion_tiempo`) VALUES
(1, 'ALTO '),
(2, 'MEDIO '),
(3, 'BAJO ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `idtipodocumento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`idtipodocumento`, `nombre`) VALUES
(1, 'CEDULA DE CUIDADANIA '),
(2, 'CEDULA DE EXTRANJERIA '),
(3, 'PASAPORTE '),
(4, 'TRAJETA DE IDENTIDAD ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idtipousuario` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `perfil_idperfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idtipousuario`, `descripcion`, `perfil_idperfil`) VALUES
(1, 'SUPER ADMINISTRADOR ', 2),
(2, 'SUPER ADMINISTRADOR ', 1),
(3, 'ADMINISTRADOR ', 4),
(4, 'USUARIOS', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `documento` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `password_us` varchar(45) NOT NULL,
  `area_dependencia_idarea_dependencia` int(11) NOT NULL,
  `cargo_idcargo` int(11) NOT NULL,
  `tipousuario_idtipousuario` int(11) NOT NULL,
  `tipodocumento_idtipodocumento` int(11) NOT NULL,
  `sexo_idsexo` int(11) NOT NULL,
  `ciudad_idciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `documento`, `nombre`, `apellido`, `telefono`, `correo`, `password_us`, `area_dependencia_idarea_dependencia`, `cargo_idcargo`, `tipousuario_idtipousuario`, `tipodocumento_idtipodocumento`, `sexo_idsexo`, `ciudad_idciudad`) VALUES
(1, '12121200', 'DAYANNE ', 'ORTIZ ', '310212021', 'HAB@GMAIL.COM', '185151', 1, 2, 4, 1, 1, 14),
(2, '78785454', 'FABIAN ', 'LESMES ', '345554545', 'SKKLSL@GMAIL.COM', 'VAYUHH', 5, 1, 2, 2, 2, 2),
(3, '5482629529', 'CAMILA TORRES ', 'MELO ', '361545454', 'CAMILA@GMAIL.COM', '778788', 2, 2, 4, 3, 1, 10),
(4, '5252652652', 'ANDRES ', 'RODRIGUEZ ', '374545545', 'HAASGA@GMAIL.COM', 'VHSDRTAAAS', 4, 5, 3, 1, 2, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area_dependencia`
--
ALTER TABLE `area_dependencia`
  ADD PRIMARY KEY (`idarea_dependencia`),
  ADD KEY `fk_area_dependencia_gerencia1_idx` (`gerencia_idgerencia`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idcargo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idciudad`),
  ADD KEY `fk_ciudad_departamento1_idx` (`departamento_iddepartamento`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`idclasificacion`),
  ADD KEY `fk_clasificacion_subcategoria1_idx` (`subcategoria_idsubcategoria`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `equipotipo`
--
ALTER TABLE `equipotipo`
  ADD PRIMARY KEY (`idequipotipo`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `gerencia`
--
ALTER TABLE `gerencia`
  ADD PRIMARY KEY (`idgerencia`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idperfil`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`idsexo`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`idsubcategoria`),
  ADD KEY `fk_subcategoria_categoria_idx` (`categoria_idcategoria`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`idticket`),
  ADD KEY `fk_ticket_usuario1_idx` (`usuario_idusuario`),
  ADD KEY `fk_ticket_tiempo_atencion1_idx` (`tiempo_atencion_idtiempo_atencion`),
  ADD KEY `fk_ticket_equipotipo1_idx` (`equipotipo_idequipotipo`),
  ADD KEY `fk_ticket_categoria1_idx` (`categoria_idcategoria`),
  ADD KEY `fk_ticket_estado1_idx` (`estado_idestado`);

--
-- Indices de la tabla `tiempo_atencion`
--
ALTER TABLE `tiempo_atencion`
  ADD PRIMARY KEY (`idtiempo_atencion`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`idtipodocumento`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idtipousuario`),
  ADD KEY `fk_tipousuario_perfil1_idx` (`perfil_idperfil`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_area_dependencia1_idx` (`area_dependencia_idarea_dependencia`),
  ADD KEY `fk_usuario_cargo1_idx` (`cargo_idcargo`),
  ADD KEY `fk_usuario_tipousuario1_idx` (`tipousuario_idtipousuario`),
  ADD KEY `fk_usuario_tipodocumento1_idx` (`tipodocumento_idtipodocumento`),
  ADD KEY `fk_usuario_sexo1_idx` (`sexo_idsexo`),
  ADD KEY `fk_usuario_ciudad1_idx` (`ciudad_idciudad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area_dependencia`
--
ALTER TABLE `area_dependencia`
  MODIFY `idarea_dependencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idcargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `idclasificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `iddepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `equipotipo`
--
ALTER TABLE `equipotipo`
  MODIFY `idequipotipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `gerencia`
--
ALTER TABLE `gerencia`
  MODIFY `idgerencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idperfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `idsexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `idsubcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `tiempo_atencion`
--
ALTER TABLE `tiempo_atencion`
  MODIFY `idtiempo_atencion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `idtipodocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `idtipousuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `area_dependencia`
--
ALTER TABLE `area_dependencia`
  ADD CONSTRAINT `fk_area_dependencia_gerencia1` FOREIGN KEY (`gerencia_idgerencia`) REFERENCES `gerencia` (`idgerencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_ciudad_departamento1` FOREIGN KEY (`departamento_iddepartamento`) REFERENCES `departamento` (`iddepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD CONSTRAINT `fk_clasificacion_subcategoria1` FOREIGN KEY (`subcategoria_idsubcategoria`) REFERENCES `subcategoria` (`idsubcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `fk_subcategoria_categoria` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_ticket_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_equipotipo1` FOREIGN KEY (`equipotipo_idequipotipo`) REFERENCES `equipotipo` (`idequipotipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_estado1` FOREIGN KEY (`estado_idestado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_tiempo_atencion1` FOREIGN KEY (`tiempo_atencion_idtiempo_atencion`) REFERENCES `tiempo_atencion` (`idtiempo_atencion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ticket_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD CONSTRAINT `fk_tipousuario_perfil1` FOREIGN KEY (`perfil_idperfil`) REFERENCES `perfil` (`idperfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_area_dependencia1` FOREIGN KEY (`area_dependencia_idarea_dependencia`) REFERENCES `area_dependencia` (`idarea_dependencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_cargo1` FOREIGN KEY (`cargo_idcargo`) REFERENCES `cargo` (`idcargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_ciudad1` FOREIGN KEY (`ciudad_idciudad`) REFERENCES `ciudad` (`idciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_sexo1` FOREIGN KEY (`sexo_idsexo`) REFERENCES `sexo` (`idsexo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_tipodocumento1` FOREIGN KEY (`tipodocumento_idtipodocumento`) REFERENCES `tipodocumento` (`idtipodocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_tipousuario1` FOREIGN KEY (`tipousuario_idtipousuario`) REFERENCES `tipousuario` (`idtipousuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;