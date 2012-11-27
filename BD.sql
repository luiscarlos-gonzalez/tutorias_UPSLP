-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2012 a las 05:29:59
-- Versión del servidor: 5.5.28
-- Versión de PHP: 5.4.6-1ubuntu1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `BD`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE IF NOT EXISTS `Alumno` (
  `matricula` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `carrera` varchar(5) NOT NULL,
  `semestre` int(11) NOT NULL,
  `matriculaTutor` int(11) NOT NULL,
  `grupo` varchar(10) NOT NULL,
  PRIMARY KEY (`matricula`),
  KEY `matriculaTutor` (`matriculaTutor`),
  KEY `carrera_alum` (`carrera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`matricula`, `nombre`, `carrera`, `semestre`, `matriculaTutor`, `grupo`) VALUES
(70246, 'Diana', 'ITMA', 8, 20345, 'Bunsen'),
(70456, 'Niko', 'ITI', 5, 20344, 'Bunsen'),
(70643, 'Orvill Rata de laboratorio', 'ITMA', 2, 20345, 'Bunsen'),
(70678, 'Claudia Bernal', 'ITI', 7, 20344, 'Bunsen');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `alumnos_de_quinto`
--
CREATE TABLE IF NOT EXISTS `alumnos_de_quinto` (
`matricula` int(11)
,`nombre` varchar(200)
,`carrera` varchar(5)
,`semestre` int(11)
,`matriculaTutor` int(11)
,`grupo` varchar(10)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Boleta`
--

CREATE TABLE IF NOT EXISTS `Boleta` (
  `matricula` int(11) NOT NULL,
  `clave_materia` varchar(50) NOT NULL,
  `calificacion_parcial_1` float NOT NULL,
  `calificacion_parcial_2` float NOT NULL,
  `calificacion_parcial_3` float NOT NULL,
  KEY `matricula` (`matricula`),
  KEY `clave_materia` (`clave_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Boleta`
--

INSERT INTO `Boleta` (`matricula`, `clave_materia`, `calificacion_parcial_1`, `calificacion_parcial_2`, `calificacion_parcial_3`) VALUES
(70246, 'fis1', 9, 8.5, 6),
(70246, 'mat1', 6, 5, 7),
(70456, 'fis1', 8, 7, 9),
(70456, 'mat1', 6, 6, 8),
(70643, 'fis2', 9, 9, 10),
(70678, 'mat2', 8, 9, 10);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `calificaciones_arriba_de_7_primer_parcial`
--
CREATE TABLE IF NOT EXISTS `calificaciones_arriba_de_7_primer_parcial` (
`matricula` int(11)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Kardex`
--

CREATE TABLE IF NOT EXISTS `Kardex` (
  `id_kardex` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `creditos` int(11) NOT NULL,
  `final` float NOT NULL,
  `extra` float NOT NULL,
  `regu` float NOT NULL,
  `semestre` int(11) NOT NULL,
  PRIMARY KEY (`id_kardex`),
  KEY `matricula` (`matricula`),
  KEY `clave` (`clave`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Kardex`
--

INSERT INTO `Kardex` (`id_kardex`, `matricula`, `status`, `clave`, `creditos`, `final`, `extra`, `regu`, `semestre`) VALUES
(1, 70643, 'A', 'fis1', 8, 9, 0, 0, 1),
(2, 70643, 'A', 'mat1', 8, 7, 0, 0, 1),
(3, 70643, 'A', 'inv', 8, 10, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Materia`
--

CREATE TABLE IF NOT EXISTS `Materia` (
  `clave` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `semestre` int(11) NOT NULL,
  PRIMARY KEY (`clave`),
  KEY `nom_materia` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Materia`
--

INSERT INTO `Materia` (`clave`, `nombre`, `semestre`) VALUES
('fis1', 'Física 1', 1),
('fis2', 'Física 2', 2),
('inv', 'Metodologías de la investigación ', 1),
('mat1', 'Matemáticas 1', 1),
('mat2', 'Matemáticas 2 ', 2),
('web1', 'Programacion web 1', 3),
('web2', 'Programación Web 2', 4);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `nombre_tutores`
--
CREATE TABLE IF NOT EXISTS `nombre_tutores` (
`nombre` varchar(200)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tutor`
--

CREATE TABLE IF NOT EXISTS `Tutor` (
  `matricula` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20346 ;

--
-- Volcado de datos para la tabla `Tutor`
--

INSERT INTO `Tutor` (`matricula`, `nombre`) VALUES
(20344, 'Adel Ortega'),
(20345, 'Dr. Mono Lopez');

-- --------------------------------------------------------

--
-- Estructura para la vista `alumnos_de_quinto`
--
DROP TABLE IF EXISTS `alumnos_de_quinto`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alumnos_de_quinto` AS select `Alumno`.`matricula` AS `matricula`,`Alumno`.`nombre` AS `nombre`,`Alumno`.`carrera` AS `carrera`,`Alumno`.`semestre` AS `semestre`,`Alumno`.`matriculaTutor` AS `matriculaTutor`,`Alumno`.`grupo` AS `grupo` from `Alumno` where (`Alumno`.`semestre` = 5);

-- --------------------------------------------------------

--
-- Estructura para la vista `calificaciones_arriba_de_7_primer_parcial`
--
DROP TABLE IF EXISTS `calificaciones_arriba_de_7_primer_parcial`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `calificaciones_arriba_de_7_primer_parcial` AS select `Boleta`.`matricula` AS `matricula` from `Boleta` where (`Boleta`.`calificacion_parcial_1` > 7);

-- --------------------------------------------------------

--
-- Estructura para la vista `nombre_tutores`
--
DROP TABLE IF EXISTS `nombre_tutores`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nombre_tutores` AS select `Tutor`.`nombre` AS `nombre` from `Tutor`;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD CONSTRAINT `Alumno_ibfk_1` FOREIGN KEY (`matriculaTutor`) REFERENCES `Tutor` (`matricula`);

--
-- Filtros para la tabla `Boleta`
--
ALTER TABLE `Boleta`
  ADD CONSTRAINT `Boleta_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `Alumno` (`matricula`),
  ADD CONSTRAINT `Boleta_ibfk_2` FOREIGN KEY (`clave_materia`) REFERENCES `Materia` (`clave`);

--
-- Filtros para la tabla `Kardex`
--
ALTER TABLE `Kardex`
  ADD CONSTRAINT `Kardex_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `Alumno` (`matricula`),
  ADD CONSTRAINT `Kardex_ibfk_2` FOREIGN KEY (`clave`) REFERENCES `Materia` (`clave`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
