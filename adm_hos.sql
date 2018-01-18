-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2014 a las 19:35:05
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `adm_hos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermero`
--

CREATE TABLE IF NOT EXISTS `enfermero` (
  `DNI` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Hospital_idHospital` int(11) NOT NULL,
  PRIMARY KEY (`DNI`,`Hospital_idHospital`),
  KEY `fk_Enfermero_Hospital_idx` (`Hospital_idHospital`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enfermero`
--

INSERT INTO `enfermero` (`DNI`, `Nombre`, `Apellido`, `Hospital_idHospital`) VALUES
(34682497, 'Pepe', 'Gomez', 3),
(36487268, 'Maria', 'Villafuente', 2),
(45245511, 'Lorenzo', 'Ruiz', 1),
(55324178, 'Paula', 'Ruano', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `idHospital` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Entidad` varchar(20) NOT NULL,
  `Ubicación` varchar(20) NOT NULL,
  PRIMARY KEY (`idHospital`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hospital`
--

INSERT INTO `hospital` (`idHospital`, `Nombre`, `Entidad`, `Ubicación`) VALUES
(1, 'Lorena', 'Publica', 'Lima'),
(2, 'Regional', 'Publica', 'Lima'),
(3, 'La Inmaculada', 'Privado', 'Granada'),
(4, 'Quiron', 'Privado', 'Madrid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE IF NOT EXISTS `medico` (
  `DNI` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `Especialidad` varchar(45) NOT NULL,
  `Hospital_idHospital` int(11) NOT NULL,
  PRIMARY KEY (`DNI`,`Hospital_idHospital`),
  KEY `fk_Medico_Hospital1_idx` (`Hospital_idHospital`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`DNI`, `Nombre`, `Apellidos`, `Especialidad`, `Hospital_idHospital`) VALUES
(12456798, 'Jaime', 'Salinas Perez', 'Quirofano', 1),
(32144327, 'Luisa', 'Miranda Saez', 'Odontologa', 4),
(33422214, 'Carmen', 'Peña Ortiz', 'Ginecologa', 3),
(43215331, 'Francisco', 'Mora Gonzalez', 'Psicologo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `DNI` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `Examen` varchar(45) NOT NULL,
  `Prueba` varchar(45) NOT NULL,
  `Medico_DNI` int(11) NOT NULL,
  `Medico_Hospital_idHospital` int(11) NOT NULL,
  PRIMARY KEY (`DNI`,`Medico_DNI`,`Medico_Hospital_idHospital`),
  KEY `fk_Paciente_Medico1_idx` (`Medico_DNI`,`Medico_Hospital_idHospital`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`DNI`, `Nombre`, `Apellidos`, `Examen`, `Prueba`, `Medico_DNI`, `Medico_Hospital_idHospital`) VALUES
(11335577, 'Sara', 'Miranda Lopez', 'contusion del pie derecho', 'positivo', 12456798, 1),
(22446688, 'Rocio', 'Almiron Sallo', 'lesion leve', 'negativo', 12456798, 1),
(32456879, 'Ricardo', 'Chavez Tapa', 'lesion de clavicula', 'negativo', 32144327, 4),
(99064332, 'Raul', 'Moreno Santo', 'caries en las encias', 'positivo', 32144327, 4);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `enfermero`
--
ALTER TABLE `enfermero`
  ADD CONSTRAINT `fk_Enfermero_Hospital` FOREIGN KEY (`Hospital_idHospital`) REFERENCES `hospital` (`idHospital`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_Medico_Hospital1` FOREIGN KEY (`Hospital_idHospital`) REFERENCES `hospital` (`idHospital`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_Paciente_Medico1` FOREIGN KEY (`Medico_DNI`, `Medico_Hospital_idHospital`) REFERENCES `medico` (`DNI`, `Hospital_idHospital`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
