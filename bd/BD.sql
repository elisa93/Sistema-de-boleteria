SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `boleteria_cariamanga` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `boleteria_cariamanga` ;

-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`cliente` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `cedula` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`administrador` (
  `idadministrador` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(100) NOT NULL,
  `cedula` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idadministrador`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`cajero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`cajero` (
  `idcajero` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `contraseña` VARCHAR(100) NULL,
  `estado` VARCHAR(45) NULL,
  `idadministrador` INT NOT NULL,
  PRIMARY KEY (`idcajero`),
  INDEX `fk_cajero_administrador1_idx` (`idadministrador` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  CONSTRAINT `fk_cajero_administrador1`
    FOREIGN KEY (`idadministrador`)
    REFERENCES `boleteria_cariamanga`.`administrador` (`idadministrador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`catalogo_ruta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`catalogo_ruta` (
  `idcatalogo_ruta` INT NOT NULL AUTO_INCREMENT,
  `ciudad_origen` VARCHAR(45) NOT NULL,
  `catalogo_rutacol` VARCHAR(45) NOT NULL,
  `costo` VARCHAR(45) NOT NULL,
  `idadministrador` INT NOT NULL,
  PRIMARY KEY (`idcatalogo_ruta`),
  INDEX `fk_catalogo_ruta_administrador1_idx` (`idadministrador` ASC),
  CONSTRAINT `fk_catalogo_ruta_administrador1`
    FOREIGN KEY (`idadministrador`)
    REFERENCES `boleteria_cariamanga`.`administrador` (`idadministrador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`horario_viaje`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`horario_viaje` (
  `idhorario_viaje` INT NOT NULL AUTO_INCREMENT,
  `hora_salida` VARCHAR(45) NULL,
  `hora_llegada` VARCHAR(45) NULL,
  `idcatalogo_ruta` INT NOT NULL,
  PRIMARY KEY (`idhorario_viaje`),
  INDEX `fk_horario_viaje_catalogo_ruta_idx` (`idcatalogo_ruta` ASC),
  CONSTRAINT `fk_horario_viaje_catalogo_ruta`
    FOREIGN KEY (`idcatalogo_ruta`)
    REFERENCES `boleteria_cariamanga`.`catalogo_ruta` (`idcatalogo_ruta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`unidad_transporte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`unidad_transporte` (
  `idunidad_transaporte` INT NOT NULL AUTO_INCREMENT,
  `placa` VARCHAR(45) NOT NULL,
  `numero_unidad` VARCHAR(45) NOT NULL,
  `capacidad` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `idhorario_viaje` INT NULL,
  `idadministrador` INT NOT NULL,
  PRIMARY KEY (`idunidad_transaporte`),
  INDEX `fk_unidad_transaporte_horario_viaje1_idx` (`idhorario_viaje` ASC),
  INDEX `fk_unidad_transporte_administrador1_idx` (`idadministrador` ASC),
  CONSTRAINT `fk_unidad_transaporte_horario_viaje1`
    FOREIGN KEY (`idhorario_viaje`)
    REFERENCES `boleteria_cariamanga`.`horario_viaje` (`idhorario_viaje`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_unidad_transporte_administrador1`
    FOREIGN KEY (`idadministrador`)
    REFERENCES `boleteria_cariamanga`.`administrador` (`idadministrador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`venta` (
  `idventa` INT NOT NULL AUTO_INCREMENT,
  `fecha` VARCHAR(45) NOT NULL,
  `hora` VARCHAR(45) NOT NULL,
  `total` DOUBLE NOT NULL,
  `idcajero` INT NOT NULL,
  PRIMARY KEY (`idventa`),
  INDEX `fk_venta_cajero1_idx` (`idcajero` ASC),
  CONSTRAINT `fk_venta_cajero1`
    FOREIGN KEY (`idcajero`)
    REFERENCES `boleteria_cariamanga`.`cajero` (`idcajero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`reserva_oficina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`reserva_oficina` (
  `idreserva_oficina` INT NOT NULL AUTO_INCREMENT,
  `fecha` VARCHAR(45) NOT NULL,
  `hora` VARCHAR(45) NOT NULL,
  `total` VARCHAR(45) NOT NULL,
  `idcajero` INT NOT NULL,
  PRIMARY KEY (`idreserva_oficina`),
  INDEX `fk_reserva_oficina_cajero1_idx` (`idcajero` ASC),
  CONSTRAINT `fk_reserva_oficina_cajero1`
    FOREIGN KEY (`idcajero`)
    REFERENCES `boleteria_cariamanga`.`cajero` (`idcajero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`compra` (
  `idcompra` INT NOT NULL AUTO_INCREMENT,
  `fecha` VARCHAR(45) NOT NULL,
  `hora` VARCHAR(45) NOT NULL,
  `total` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `idcliente` INT NOT NULL,
  PRIMARY KEY (`idcompra`),
  INDEX `fk_compra_usuario1_idx` (`idcliente` ASC),
  CONSTRAINT `fk_compra_usuario1`
    FOREIGN KEY (`idcliente`)
    REFERENCES `boleteria_cariamanga`.`cliente` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`reserva`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`reserva` (
  `idreserva` INT NOT NULL AUTO_INCREMENT,
  `fecha` VARCHAR(45) NOT NULL,
  `hora` VARCHAR(45) NOT NULL,
  `total` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `idcliente` INT NOT NULL,
  PRIMARY KEY (`idreserva`),
  INDEX `fk_reserva_usuario1_idx` (`idcliente` ASC),
  CONSTRAINT `fk_reserva_usuario1`
    FOREIGN KEY (`idcliente`)
    REFERENCES `boleteria_cariamanga`.`cliente` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`boleto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`boleto` (
  `idboleto` INT NOT NULL AUTO_INCREMENT,
  `numero_boleto` VARCHAR(45) NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `transaporte` INT NOT NULL,
  `idventa` INT NOT NULL,
  `idreserva_oficina` INT NOT NULL,
  `idcompra` INT NOT NULL,
  `idreserva` INT NOT NULL,
  PRIMARY KEY (`idboleto`),
  INDEX `fk_boleto_unidad_transaporte1_idx` (`transaporte` ASC),
  INDEX `fk_boleto_venta1_idx` (`idventa` ASC),
  INDEX `fk_boleto_reserva_oficina1_idx` (`idreserva_oficina` ASC),
  INDEX `fk_boleto_compra1_idx` (`idcompra` ASC),
  INDEX `fk_boleto_reserva1_idx` (`idreserva` ASC),
  CONSTRAINT `fk_boleto_unidad_transaporte1`
    FOREIGN KEY (`transaporte`)
    REFERENCES `boleteria_cariamanga`.`unidad_transporte` (`idunidad_transaporte`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_boleto_venta1`
    FOREIGN KEY (`idventa`)
    REFERENCES `boleteria_cariamanga`.`venta` (`idventa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_boleto_reserva_oficina1`
    FOREIGN KEY (`idreserva_oficina`)
    REFERENCES `boleteria_cariamanga`.`reserva_oficina` (`idreserva_oficina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_boleto_compra1`
    FOREIGN KEY (`idcompra`)
    REFERENCES `boleteria_cariamanga`.`compra` (`idcompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_boleto_reserva1`
    FOREIGN KEY (`idreserva`)
    REFERENCES `boleteria_cariamanga`.`reserva` (`idreserva`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`cambio_boleto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`cambio_boleto` (
  `idcambio_boleto` INT NOT NULL AUTO_INCREMENT,
  `fecha` VARCHAR(45) NOT NULL,
  `hora` VARCHAR(45) NOT NULL,
  `total_anterior` DOUBLE NOT NULL,
  `total_nuevo` DOUBLE NOT NULL,
  `idcajero` INT NOT NULL,
  `idventa` INT NOT NULL,
  PRIMARY KEY (`idcambio_boleto`),
  INDEX `fk_registro_cambioBoleto_cajero1_idx` (`idcajero` ASC),
  INDEX `fk_registro_cambioBoleto_venta1_idx` (`idventa` ASC),
  CONSTRAINT `fk_registro_cambioBoleto_cajero1`
    FOREIGN KEY (`idcajero`)
    REFERENCES `boleteria_cariamanga`.`cajero` (`idcajero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_registro_cambioBoleto_venta1`
    FOREIGN KEY (`idventa`)
    REFERENCES `boleteria_cariamanga`.`venta` (`idventa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`devolucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`devolucion` (
  `iddevolucion` INT NOT NULL AUTO_INCREMENT,
  `fecha` VARCHAR(45) NOT NULL,
  `hora` VARCHAR(45) NOT NULL,
  `idcajero` INT NOT NULL,
  `venta_idventa` INT NOT NULL,
  PRIMARY KEY (`iddevolucion`),
  INDEX `fk_devolucion_cajero1_idx` (`idcajero` ASC),
  INDEX `fk_devolucion_venta1_idx` (`venta_idventa` ASC),
  CONSTRAINT `fk_devolucion_cajero1`
    FOREIGN KEY (`idcajero`)
    REFERENCES `boleteria_cariamanga`.`cajero` (`idcajero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_devolucion_venta1`
    FOREIGN KEY (`venta_idventa`)
    REFERENCES `boleteria_cariamanga`.`venta` (`idventa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `boleteria_cariamanga`.`cancelacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `boleteria_cariamanga`.`cancelacion` (
  `idcancelacion` INT NOT NULL AUTO_INCREMENT,
  `fecha` VARCHAR(45) NOT NULL,
  `hora` VARCHAR(45) NOT NULL,
  `idcliente` INT NOT NULL,
  `idcompra` INT NOT NULL,
  PRIMARY KEY (`idcancelacion`),
  INDEX `fk_cancelacion_cliente1_idx` (`idcliente` ASC),
  INDEX `fk_cancelacion_compra1_idx` (`idcompra` ASC),
  CONSTRAINT `fk_cancelacion_cliente1`
    FOREIGN KEY (`idcliente`)
    REFERENCES `boleteria_cariamanga`.`cliente` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cancelacion_compra1`
    FOREIGN KEY (`idcompra`)
    REFERENCES `boleteria_cariamanga`.`compra` (`idcompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
