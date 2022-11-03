-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 02-09-2022 a las 15:57:34
-- Versión del servidor: 5.7.34
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `SisAcad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` int(11) NOT NULL,
  `id_matricula` int(11) NOT NULL,
  `nro_calificacion` int(2) NOT NULL,
  `calificacion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

CREATE TABLE `condicion` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `codigo` varchar(10) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_institucionales`
--

CREATE TABLE `datos_institucionales` (
  `cod_modular` varchar(10) COLLATE utf32_spanish2_ci NOT NULL,
  `ruc` int(11) NOT NULL,
  `nombre_institucion` varchar(200) COLLATE utf32_spanish2_ci NOT NULL,
  `departamento` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `provincia` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `distrito` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf32_spanish2_ci NOT NULL,
  `telofono` varchar(15) COLLATE utf32_spanish2_ci NOT NULL,
  `correo` varchar(200) COLLATE utf32_spanish2_ci NOT NULL,
  `nro_resolucion` varchar(50) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id` int(11) NOT NULL,
  `dni` int(8) NOT NULL,
  `apellidos_nombres` varchar(130) COLLATE utf32_spanish2_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `direccion` varchar(150) COLLATE utf32_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf32_spanish2_ci NOT NULL,
  `id_genero` int(11) NOT NULL,
  `nivel_educacion` varchar(200) COLLATE utf32_spanish2_ci NOT NULL,
  `cond_laboral` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `dni` int(8) NOT NULL,
  `apellidos_nombres` varchar(130) COLLATE utf32_spanish2_ci NOT NULL,
  `id_genero` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
  `direccion` varchar(200) COLLATE utf32_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf32_spanish2_ci NOT NULL,
  `anio_ingreso` date NOT NULL,
  `id_programa_estudios` int(11) NOT NULL,
  `id_semestre` int(11) NOT NULL,
  `seccion` varchar(1) COLLATE utf32_spanish2_ci NOT NULL,
  `turno` varchar(20) COLLATE utf32_spanish2_ci NOT NULL,
  `id_condicion` int(11) NOT NULL,
  `discapacidad` varchar(2) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `genero` varchar(50) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id` int(11) NOT NULL,
  `id_periodo_acad` int(11) NOT NULL,
  `id_programa_estudio` int(11) NOT NULL,
  `id_semestre` int(11) NOT NULL,
  `id_programacion_ud` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo_profesional`
--

CREATE TABLE `modulo_profesional` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE utf32_spanish2_ci NOT NULL,
  `nro_modulo` int(2) NOT NULL,
  `id_programa_estudio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo_academico`
--

CREATE TABLE `periodo_academico` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) COLLATE utf32_spanish2_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `director` varchar(130) COLLATE utf32_spanish2_ci NOT NULL,
  `fecha_actas` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presente_periodo_acad`
--

CREATE TABLE `presente_periodo_acad` (
  `id` int(11) NOT NULL,
  `id_periodo_acad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion_unidad_didactica`
--

CREATE TABLE `programacion_unidad_didactica` (
  `id` int(11) NOT NULL,
  `id_unidad_didactica` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `id_periodo_acad` int(11) NOT NULL,
  `id_programa_estudio` int(11) NOT NULL,
  `id_semestre` int(11) NOT NULL,
  `cant_calificacion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_estudios`
--

CREATE TABLE `programa_estudios` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) COLLATE utf32_spanish2_ci NOT NULL,
  `tipo` varchar(30) COLLATE utf32_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `resolucion` varchar(30) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id` int(11) NOT NULL,
  `id_usuario_docente` int(11) NOT NULL,
  `id_tipo_reporte` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(3) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_reporte`
--

CREATE TABLE `tipo_reporte` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_didactica`
--

CREATE TABLE `unidad_didactica` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `id_programa_estudio` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL,
  `id_semestre` int(11) NOT NULL,
  `creditos` int(2) NOT NULL,
  `horas` int(2) NOT NULL,
  `tipo` varchar(100) COLLATE utf32_spanish2_ci NOT NULL,
  `orden` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_docentes`
--

CREATE TABLE `usuarios_docentes` (
  `id` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `password` varchar(1000) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_estudiante`
--

CREATE TABLE `usuarios_estudiante` (
  `id` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `password` varchar(1000) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_matricula` (`id_matricula`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `condicion`
--
ALTER TABLE `condicion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genero` (`id_genero`),
  ADD KEY `id_programa_estudios` (`id_programa_estudios`),
  ADD KEY `id_semestre` (`id_semestre`),
  ADD KEY `id_condicion` (`id_condicion`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_periodo_acad` (`id_periodo_acad`),
  ADD KEY `id_programa_estudio` (`id_programa_estudio`),
  ADD KEY `id_semestre` (`id_semestre`),
  ADD KEY `id_programacion_ud` (`id_programacion_ud`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `modulo_profesional`
--
ALTER TABLE `modulo_profesional`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_programa_estudio` (`id_programa_estudio`);

--
-- Indices de la tabla `periodo_academico`
--
ALTER TABLE `periodo_academico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `presente_periodo_acad`
--
ALTER TABLE `presente_periodo_acad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_periodo_acad` (`id_periodo_acad`);

--
-- Indices de la tabla `programacion_unidad_didactica`
--
ALTER TABLE `programacion_unidad_didactica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unidad_didactica` (`id_unidad_didactica`),
  ADD KEY `id_docente` (`id_docente`),
  ADD KEY `id_periodo_acad` (`id_periodo_acad`),
  ADD KEY `id_programa_estudio` (`id_programa_estudio`),
  ADD KEY `id_semestre` (`id_semestre`);

--
-- Indices de la tabla `programa_estudios`
--
ALTER TABLE `programa_estudios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario_docente` (`id_usuario_docente`),
  ADD KEY `id_tipo_reporte` (`id_tipo_reporte`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_reporte`
--
ALTER TABLE `tipo_reporte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidad_didactica`
--
ALTER TABLE `unidad_didactica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_programa_estudio` (`id_programa_estudio`),
  ADD KEY `id_modulo` (`id_modulo`),
  ADD KEY `id_semestre` (`id_semestre`);

--
-- Indices de la tabla `usuarios_docentes`
--
ALTER TABLE `usuarios_docentes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indices de la tabla `usuarios_estudiante`
--
ALTER TABLE `usuarios_estudiante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `condicion`
--
ALTER TABLE `condicion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulo_profesional`
--
ALTER TABLE `modulo_profesional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodo_academico`
--
ALTER TABLE `periodo_academico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `presente_periodo_acad`
--
ALTER TABLE `presente_periodo_acad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programacion_unidad_didactica`
--
ALTER TABLE `programacion_unidad_didactica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programa_estudios`
--
ALTER TABLE `programa_estudios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_reporte`
--
ALTER TABLE `tipo_reporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidad_didactica`
--
ALTER TABLE `unidad_didactica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios_docentes`
--
ALTER TABLE `usuarios_docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios_estudiante`
--
ALTER TABLE `usuarios_estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`id_matricula`) REFERENCES `matricula` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `docente_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`id_programa_estudios`) REFERENCES `programa_estudios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiante_ibfk_3` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiante_ibfk_4` FOREIGN KEY (`id_condicion`) REFERENCES `condicion` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`id_periodo_acad`) REFERENCES `periodo_academico` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`id_programa_estudio`) REFERENCES `programa_estudios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `matricula_ibfk_3` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `matricula_ibfk_4` FOREIGN KEY (`id_programacion_ud`) REFERENCES `programacion_unidad_didactica` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `matricula_ibfk_5` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `modulo_profesional`
--
ALTER TABLE `modulo_profesional`
  ADD CONSTRAINT `modulo_profesional_ibfk_1` FOREIGN KEY (`id_programa_estudio`) REFERENCES `programa_estudios` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `presente_periodo_acad`
--
ALTER TABLE `presente_periodo_acad`
  ADD CONSTRAINT `presente_periodo_acad_ibfk_1` FOREIGN KEY (`id_periodo_acad`) REFERENCES `periodo_academico` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `programacion_unidad_didactica`
--
ALTER TABLE `programacion_unidad_didactica`
  ADD CONSTRAINT `programacion_unidad_didactica_ibfk_1` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `programacion_unidad_didactica_ibfk_2` FOREIGN KEY (`id_periodo_acad`) REFERENCES `periodo_academico` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `programacion_unidad_didactica_ibfk_3` FOREIGN KEY (`id_unidad_didactica`) REFERENCES `unidad_didactica` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `programacion_unidad_didactica_ibfk_4` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `programacion_unidad_didactica_ibfk_5` FOREIGN KEY (`id_programa_estudio`) REFERENCES `programa_estudios` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `reporte_ibfk_1` FOREIGN KEY (`id_usuario_docente`) REFERENCES `usuarios_docentes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reporte_ibfk_2` FOREIGN KEY (`id_tipo_reporte`) REFERENCES `tipo_reporte` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `unidad_didactica`
--
ALTER TABLE `unidad_didactica`
  ADD CONSTRAINT `unidad_didactica_ibfk_1` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `unidad_didactica_ibfk_2` FOREIGN KEY (`id_programa_estudio`) REFERENCES `programa_estudios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `unidad_didactica_ibfk_3` FOREIGN KEY (`id_modulo`) REFERENCES `modulo_profesional` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_docentes`
--
ALTER TABLE `usuarios_docentes`
  ADD CONSTRAINT `usuarios_docentes_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_estudiante`
--
ALTER TABLE `usuarios_estudiante`
  ADD CONSTRAINT `usuarios_estudiante_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
