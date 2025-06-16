-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2025 a las 21:53:13
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
-- Base de datos: `hospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `Id_medico` int(10) NOT NULL,
  `Nombre_medico` text NOT NULL,
  `Especialidad` text NOT NULL,
  `Telefono_medico` varchar(30) NOT NULL,
  `Id_paciente` int(10) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`Id_medico`, `Nombre_medico`, `Especialidad`, `Telefono_medico`, `Id_paciente`, `usuario`) VALUES
(1, 'Ruiz Palacios Diana Sofia', 'Pediatra', '1345671022', 1, NULL),
(2, 'Marlene Bravo Lopez', 'Geriatra', '2147483647', 2, NULL),
(3, 'Oscar Jesus Vargas Diaz', 'Neurocirujano', '2147483647', 3, NULL),
(4, 'Mia Colucci', 'Pediatra', '2722674269', 8, NULL),
(5, 'Yaritza Ozuna Malilla', 'Traumatologo', '2726723560', 5, NULL),
(6, 'Xochitl Tehuintle Xochiquiquisquitl', 'Cardiologo', '2721074223', 7, NULL),
(7, 'Juan Ramon Mendez Corzo', 'Oftalmólogo', '2722607187', 2, NULL),
(8, 'Timoteo Bragalas Chetumal', 'Fiosioterapia', '2721624255', 1, NULL),
(9, 'Ramsés Azarias Tomolole Ricastica', 'Urólogo', '2721368860', 10, NULL),
(10, 'Luis Loponsio Yatra Yankee', 'Cirujana Neonatal', '2722374211', 9, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `Id_paciente` int(10) NOT NULL,
  `Nombre` text NOT NULL,
  `Edad` int(3) NOT NULL,
  `Sexo` text NOT NULL,
  `Tel_paciente` int(10) NOT NULL,
  `Direcc_paciente` text NOT NULL,
  `Id_recep` int(10) DEFAULT NULL,
  `fechaN` varchar(10) DEFAULT NULL,
  `Algergias` varchar(200) DEFAULT NULL,
  `sangre` varchar(10) DEFAULT NULL,
  `nss` varchar(20) DEFAULT NULL,
  `curp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`Id_paciente`, `Nombre`, `Edad`, `Sexo`, `Tel_paciente`, `Direcc_paciente`, `Id_recep`, `fechaN`, `Algergias`, `sangre`, `nss`, `curp`) VALUES
(1, 'Vargas Hernandez Luis Fernando', 10, 'Masculino', 0, 'Calle Lirios #123', 2, '2013-05-20', 'Ninguna', 'O+', '12345678901', 'VAHL130520HVERLNA0'),
(2, 'Brito Mendez Alexandra', 20, 'Femenino', 1921899272, 'Calle Diamante #546', 1, '2004-08-10', 'Penicilina', 'A+', '1921899272', 'BRMA040810MVZLDN01'),
(3, 'Valeria Fuentes Ramirez', 13, 'Femenino', 1456781010, 'Unidad la joya #172', 5, '2011-01-15', 'Polen', 'B+', '1456781010', 'VARF110115MVZLLL02'),
(4, 'Ivana Lucia Puertos Zapata', 34, 'Femenino', 1298287676, 'Calle 25 de noviembre #27', 3, '1990-07-30', 'Ninguna', 'AB-', '1298287676', 'PZIL900730MVZLVN03'),
(5, 'Angel Rojas Vargas', 21, 'Masculino', 1234448530, 'Unidad Pluviosilla #984', 9, '2003-02-12', 'Lácteos', 'O-', '1234448530', 'ROVA030212HVZLNG04'),
(6, 'Maribel Feria Gutierrez', 69, 'Femenino', 1279388305, 'Unidad la fauna #291', 6, '1955-09-25', 'Aspirina', 'A-', '1279388305', 'FEGU550925MVZLLR05'),
(7, 'Francisco Juarez Salas', 38, 'Masculino', 1092872234, 'Fraccionamiento girasol #102', 5, '1986-12-05', 'Ninguna', 'B-', '1092872234', 'JUSA861205HVZLLC06'),
(8, 'Renata Ivette Valente Molina', 6, 'Femenino', 0, 'Norte 24, oriente 5 #2', 4, '2017-03-18', 'Chocolate', 'O+', '1458763220', 'VAMR170318MVZLLN07'),
(9, 'Pablo Gabriel Camarillo Jimenez', 19, 'Masculino', 1289986611, 'Calle Pinos #87', 6, '2005-11-22', 'Ninguna', 'A+', '1289986611', 'CAJP051122HVZLMN08'),
(10, 'Paola Gissele Camarillo Jimenez', 19, 'Femenino', 1277993562, 'Calle Pinos #87', 6, '2005-11-22', 'Ninguna', 'A+', '1277993562', 'CAPG051122MVZLMN09'),
(12, 'Jose Angel', 30, 'Hombre', 2147483647, 'Tecnm', 5, '1994-04-18', 'Mariscos', 'AB+', '1234', 'JOAN940418HVZLXX10'),
(14, 'Maria de los Angeles Puertos Lopez', 0, 'masculino', 2147483647, 'Andador 3, #18 U.H pluviosilla', NULL, '1975-10-02', 'Ninguna', 'O+', '0987654321', 'VAPL030315HVZRRSA1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcionista`
--

CREATE TABLE `recepcionista` (
  `Id_recep` int(10) NOT NULL,
  `Nombre` text NOT NULL,
  `Telefono_recep` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `recepcionista`
--

INSERT INTO `recepcionista` (`Id_recep`, `Nombre`, `Telefono_recep`) VALUES
(1, 'Susana Diaz Vallejo', 2011029881),
(2, 'Alejandra Moncada Ruiz', 2021039819),
(3, 'Manuel Elias Perez', 1701029770),
(4, 'Gabriela Montero Dominguez', 1856298021),
(5, 'Fatima Flores Gutierrez', 1791039660),
(6, 'Cristian Blanco Rosas', 1741059678),
(7, 'German Bernardo Solano Garcia', 1234567891),
(8, 'Patricia Lucia Mendez Cruz', 1755039709),
(9, 'Tamara Gomez Torres', 1982736457),
(10, 'Xavier de Jesus Olmos', 162103903),
(20, 'Luis Angel Rojas', 2147483647),
(22, 'Daniel', 128989);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`Id_medico`),
  ADD KEY `conexion_paci` (`Id_paciente`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`Id_paciente`),
  ADD KEY `conexion_recep` (`Id_recep`);

--
-- Indices de la tabla `recepcionista`
--
ALTER TABLE `recepcionista`
  ADD PRIMARY KEY (`Id_recep`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `Id_medico` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `Id_paciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `conexion_paci` FOREIGN KEY (`Id_paciente`) REFERENCES `paciente` (`Id_paciente`),
  ADD CONSTRAINT `conexion_paciente` FOREIGN KEY (`Id_paciente`) REFERENCES `paciente` (`Id_paciente`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `conexion_recep` FOREIGN KEY (`Id_recep`) REFERENCES `recepcionista` (`Id_recep`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
