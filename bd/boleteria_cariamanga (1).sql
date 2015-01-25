-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-01-2015 a las 15:11:59
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `boleteria_cariamanga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `idadministrador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `cedula` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  PRIMARY KEY (`idadministrador`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idadministrador`, `nombre`, `email`, `clave`, `cedula`, `telefono`) VALUES
(3, 'fabricio', 'frsisalimao@unl.edu.ec', 'fabricio', '1105012866', '0986647089');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleto`
--

CREATE TABLE IF NOT EXISTS `boleto` (
  `idboleto` int(11) NOT NULL AUTO_INCREMENT,
  `numero_boleto` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `transaporte` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  `idreserva_oficina` int(11) NOT NULL,
  `idcompra` int(11) NOT NULL,
  `idreserva` int(11) NOT NULL,
  PRIMARY KEY (`idboleto`),
  KEY `fk_boleto_unidad_transaporte1_idx` (`transaporte`),
  KEY `fk_boleto_venta1_idx` (`idventa`),
  KEY `fk_boleto_reserva_oficina1_idx` (`idreserva_oficina`),
  KEY `fk_boleto_compra1_idx` (`idcompra`),
  KEY `fk_boleto_reserva1_idx` (`idreserva`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajero`
--

CREATE TABLE IF NOT EXISTS `cajero` (
  `idcajero` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `idadministrador` int(11) NOT NULL,
  PRIMARY KEY (`idcajero`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_cajero_administrador1_idx` (`idadministrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cajero`
--

INSERT INTO `cajero` (`idcajero`, `nombre`, `email`, `password`, `estado`, `idadministrador`) VALUES
(3, 'Fabricio Sisalima', 'frsisalimao@gmail.com', 'fabricio', 'activo', 3),
(4, 'Ruth Jiménez', 'rejimenezc@unl.edu.ec', 'ruth', 'activo', 3),
(5, 'doris', 'doris@unl.edu.ec', 'daoris', 'activo', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cambio_boleto`
--

CREATE TABLE IF NOT EXISTS `cambio_boleto` (
  `idcambio_boleto` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(45) NOT NULL,
  `hora` varchar(45) NOT NULL,
  `total_anterior` double NOT NULL,
  `total_nuevo` double NOT NULL,
  `idcajero` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  PRIMARY KEY (`idcambio_boleto`),
  KEY `fk_registro_cambioBoleto_cajero1_idx` (`idcajero`),
  KEY `fk_registro_cambioBoleto_venta1_idx` (`idventa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cambio_boleto`
--

INSERT INTO `cambio_boleto` (`idcambio_boleto`, `fecha`, `hora`, `total_anterior`, `total_nuevo`, `idcajero`, `idventa`) VALUES
(2, '17-12-2014', '14:23:45', 9, 12, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancelacion`
--

CREATE TABLE IF NOT EXISTS `cancelacion` (
  `idcancelacion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(45) NOT NULL,
  `hora` varchar(45) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idcompra` int(11) NOT NULL,
  PRIMARY KEY (`idcancelacion`),
  KEY `fk_cancelacion_cliente1_idx` (`idcliente`),
  KEY `fk_cancelacion_compra1_idx` (`idcompra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo_ruta`
--

CREATE TABLE IF NOT EXISTS `catalogo_ruta` (
  `idcatalogo_ruta` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad_origen` varchar(45) NOT NULL,
  `ciudad_destino` varchar(45) NOT NULL,
  `costo` varchar(45) NOT NULL,
  `idadministrador` int(11) NOT NULL,
  PRIMARY KEY (`idcatalogo_ruta`),
  KEY `fk_catalogo_ruta_administrador1_idx` (`idadministrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `catalogo_ruta`
--

INSERT INTO `catalogo_ruta` (`idcatalogo_ruta`, `ciudad_origen`, `ciudad_destino`, `costo`, `idadministrador`) VALUES
(1, 'Loja', 'Catamayo', '1', 3),
(2, 'Loja', 'Cariamanga', '3', 3),
(3, 'Loja', 'Guayaquil', '10', 3),
(4, 'Loja', 'Machala', '7', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `cedula` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idusuario`, `email`, `cedula`, `nombre`, `telefono`, `direccion`, `password`, `estado`) VALUES
(1, 'frsisalimao@gmail.com', '1105012866', 'Fabricio Sisalima', '0986647089', 'Cdla. Electrisista', '89afed7bb06c12e161ba6b11f5632ffb335974a347486a99c3355811cf6a0915', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `idcompra` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(45) NOT NULL,
  `hora` varchar(45) NOT NULL,
  `total` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `idcliente` int(11) NOT NULL,
  PRIMARY KEY (`idcompra`),
  KEY `fk_compra_usuario1_idx` (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE IF NOT EXISTS `devolucion` (
  `iddevolucion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(45) NOT NULL,
  `hora` varchar(45) NOT NULL,
  `idcajero` int(11) NOT NULL,
  `venta_idventa` int(11) NOT NULL,
  PRIMARY KEY (`iddevolucion`),
  KEY `fk_devolucion_cajero1_idx` (`idcajero`),
  KEY `fk_devolucion_venta1_idx` (`venta_idventa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `devolucion`
--

INSERT INTO `devolucion` (`iddevolucion`, `fecha`, `hora`, `idcajero`, `venta_idventa`) VALUES
(1, '12-12-2014', '13:23:40', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_viaje`
--

CREATE TABLE IF NOT EXISTS `horario_viaje` (
  `idhorario_viaje` int(11) NOT NULL AUTO_INCREMENT,
  `hora_salida` varchar(45) DEFAULT NULL,
  `hora_llegada` varchar(45) DEFAULT NULL,
  `idcatalogo_ruta` int(11) NOT NULL,
  PRIMARY KEY (`idhorario_viaje`),
  KEY `fk_horario_viaje_catalogo_ruta_idx` (`idcatalogo_ruta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `idreserva` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(45) NOT NULL,
  `hora` varchar(45) NOT NULL,
  `total` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `idcliente` int(11) NOT NULL,
  PRIMARY KEY (`idreserva`),
  KEY `fk_reserva_usuario1_idx` (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_oficina`
--

CREATE TABLE IF NOT EXISTS `reserva_oficina` (
  `idreserva_oficina` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(45) NOT NULL,
  `hora` varchar(45) NOT NULL,
  `total` varchar(45) NOT NULL,
  `idcajero` int(11) NOT NULL,
  PRIMARY KEY (`idreserva_oficina`),
  KEY `fk_reserva_oficina_cajero1_idx` (`idcajero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `reserva_oficina`
--

INSERT INTO `reserva_oficina` (`idreserva_oficina`, `fecha`, `hora`, `total`, `idcajero`) VALUES
(5, '12-23-2014', '13:23:00', '2', 4),
(6, '12-23-2014', '15:23:00', '10', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_transporte`
--

CREATE TABLE IF NOT EXISTS `unidad_transporte` (
  `idunidad_transaporte` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(45) NOT NULL,
  `numero_unidad` varchar(45) NOT NULL,
  `capacidad` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `idhorario_viaje` int(11) DEFAULT NULL,
  `idadministrador` int(11) NOT NULL,
  PRIMARY KEY (`idunidad_transaporte`),
  KEY `fk_unidad_transaporte_horario_viaje1_idx` (`idhorario_viaje`),
  KEY `fk_unidad_transporte_administrador1_idx` (`idadministrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `unidad_transporte`
--

INSERT INTO `unidad_transporte` (`idunidad_transaporte`, `placa`, `numero_unidad`, `capacidad`, `estado`, `idhorario_viaje`, `idadministrador`) VALUES
(1, 'LBB-231', '12', '50', 'activo', NULL, 3),
(2, 'LBA-546', '24', '48', 'activo', NULL, 3),
(3, 'PLS-2345', '59', '55', 'activo', NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `idventa` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(45) NOT NULL,
  `hora` varchar(45) NOT NULL,
  `total` double NOT NULL,
  `idcajero` int(11) NOT NULL,
  PRIMARY KEY (`idventa`),
  KEY `fk_venta_cajero1_idx` (`idcajero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idventa`, `fecha`, `hora`, `total`, `idcajero`) VALUES
(1, '12-12-2014', '09:20:00', 5, 4),
(2, '16-12-2014', '19:20:00', 7, 4),
(3, '19-12-2014', '12:20:00', 9, 4),
(4, '16-12-2014', '09:60:00', 7, 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `boleto`
--
ALTER TABLE `boleto`
  ADD CONSTRAINT `fk_boleto_compra1` FOREIGN KEY (`idcompra`) REFERENCES `compra` (`idcompra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_boleto_reserva1` FOREIGN KEY (`idreserva`) REFERENCES `reserva` (`idreserva`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_boleto_reserva_oficina1` FOREIGN KEY (`idreserva_oficina`) REFERENCES `reserva_oficina` (`idreserva_oficina`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_boleto_unidad_transaporte1` FOREIGN KEY (`transaporte`) REFERENCES `unidad_transporte` (`idunidad_transaporte`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_boleto_venta1` FOREIGN KEY (`idventa`) REFERENCES `venta` (`idventa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cajero`
--
ALTER TABLE `cajero`
  ADD CONSTRAINT `fk_cajero_administrador1` FOREIGN KEY (`idadministrador`) REFERENCES `administrador` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cambio_boleto`
--
ALTER TABLE `cambio_boleto`
  ADD CONSTRAINT `fk_registro_cambioBoleto_cajero1` FOREIGN KEY (`idcajero`) REFERENCES `cajero` (`idcajero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_registro_cambioBoleto_venta1` FOREIGN KEY (`idventa`) REFERENCES `venta` (`idventa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cancelacion`
--
ALTER TABLE `cancelacion`
  ADD CONSTRAINT `fk_cancelacion_cliente1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cancelacion_compra1` FOREIGN KEY (`idcompra`) REFERENCES `compra` (`idcompra`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `catalogo_ruta`
--
ALTER TABLE `catalogo_ruta`
  ADD CONSTRAINT `fk_catalogo_ruta_administrador1` FOREIGN KEY (`idadministrador`) REFERENCES `administrador` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_compra_usuario1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD CONSTRAINT `fk_devolucion_cajero1` FOREIGN KEY (`idcajero`) REFERENCES `cajero` (`idcajero`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_devolucion_venta1` FOREIGN KEY (`venta_idventa`) REFERENCES `venta` (`idventa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `horario_viaje`
--
ALTER TABLE `horario_viaje`
  ADD CONSTRAINT `fk_horario_viaje_catalogo_ruta` FOREIGN KEY (`idcatalogo_ruta`) REFERENCES `catalogo_ruta` (`idcatalogo_ruta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_reserva_usuario1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reserva_oficina`
--
ALTER TABLE `reserva_oficina`
  ADD CONSTRAINT `fk_reserva_oficina_cajero1` FOREIGN KEY (`idcajero`) REFERENCES `cajero` (`idcajero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `unidad_transporte`
--
ALTER TABLE `unidad_transporte`
  ADD CONSTRAINT `fk_unidad_transaporte_horario_viaje1` FOREIGN KEY (`idhorario_viaje`) REFERENCES `horario_viaje` (`idhorario_viaje`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_unidad_transporte_administrador1` FOREIGN KEY (`idadministrador`) REFERENCES `administrador` (`idadministrador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_venta_cajero1` FOREIGN KEY (`idcajero`) REFERENCES `cajero` (`idcajero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
