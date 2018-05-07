-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema newreset
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema newreset
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `newreset` DEFAULT CHARACTER SET utf8 ;
USE `newreset` ;

-- -----------------------------------------------------
-- Table `newreset`.`Rol_Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `newreset`.`Rol_Usuario` (
  `idRol_Usuario` INT NOT NULL,
  `cod_tipo_usuario` ENUM('Seleccionar', 'Administrador', 'Estandar', 'Usuario') NOT NULL,
  PRIMARY KEY (`idRol_Usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `newreset`.`Cargo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `newreset`.`Cargo` (
  `idCargo` INT NOT NULL,
  `cod_tipo_cargo` ENUM('Seleccionar', 'Tecnico', 'Rector', 'Coordinador academico', 'Profesor') NOT NULL,
  PRIMARY KEY (`idCargo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `newreset`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `newreset`.`Usuario` (
  `idUsuario` INT NOT NULL,
  `cod_tipo_doc` ENUM('Seleccionar', 'Cedula de ciudadania', 'Cedula de extranjeria', 'Pasaporte', 'NIT') NOT NULL,
  `documento` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `cod_genero` ENUM('Seleccionar', 'Masculino', 'Femenino', 'Indefinido') NOT NULL,
  `telefono` INT NOT NULL,
  `mail` VARCHAR(100) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `cod_area` ENUM('Seleccionar', 'Tecnica', 'Administrativa', 'Academica', 'Tecnologica') NOT NULL,
  `TipoUsuario_idTipoUsuario` INT NOT NULL,
  `RolCargo_idRolCargo` INT NOT NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `fk_Usuario_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario` ASC),
  INDEX `fk_Usuario_RolCargo1_idx` (`RolCargo_idRolCargo` ASC),
  CONSTRAINT `fk_Usuario_TipoUsuario1`
    FOREIGN KEY (`TipoUsuario_idTipoUsuario`)
    REFERENCES `newreset`.`Rol_Usuario` (`idRol_Usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_RolCargo1`
    FOREIGN KEY (`RolCargo_idRolCargo`)
    REFERENCES `newreset`.`Cargo` (`idCargo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `newreset`.`Equipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `newreset`.`Equipo` (
  `idEquipo` INT NOT NULL,
  `cod_tipo_equipo` ENUM('Seleccione', 'Escritorio', 'Portátil') NOT NULL,
  `serial_equipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEquipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `newreset`.`Ticket`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `newreset`.`Ticket` (
  `idTicket` INT NOT NULL,
  `fecha_inicio` DATETIME NOT NULL,
  `fin_atencion` DATETIME NOT NULL,
  `descrip_incidencia` TEXT(1000) NOT NULL,
  `archivo_evidencia` VARCHAR(100) NOT NULL,
  `cod_categoria` ENUM('Seleccionar', 'Hardware', 'Software') NOT NULL,
  `cod_estado_ticket` ENUM('Seleccionar', 'Recibido', 'En tramite', 'Solucionado') NOT NULL,
  `Usuario_idUsuario` INT NOT NULL,
  `Equipo_idEquipo` INT NOT NULL,
  PRIMARY KEY (`idTicket`),
  INDEX `fk_Ticket_Usuario1_idx` (`Usuario_idUsuario` ASC),
  INDEX `fk_Ticket_Equipo1_idx` (`Equipo_idEquipo` ASC),
  CONSTRAINT `fk_Ticket_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `newreset`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ticket_Equipo1`
    FOREIGN KEY (`Equipo_idEquipo`)
    REFERENCES `newreset`.`Equipo` (`idEquipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
