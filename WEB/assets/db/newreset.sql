-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema BDNew_Reset
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema BDNew_Reset
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BDNew_Reset` DEFAULT CHARACTER SET utf8 ;
USE `BDNew_Reset` ;

-- -----------------------------------------------------
-- Table `BDNew_Reset`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BDNew_Reset`.`Usuario` (
  `id_usuario` INT NOT NULL,
  `tipo_doc` ENUM('Seleccionar', 'Cedula de ciudadania', 'Cedula de extranjeria', 'Pasaporte', 'NIT') NOT NULL COMMENT 'Tipo de documento del Usuario',
  `documento` VARCHAR(45) NOT NULL COMMENT 'Numero de documento del Usuario',
  `apellido` VARCHAR(30) NOT NULL COMMENT 'Apellido del Usuario',
  `nombre` VARCHAR(30) NOT NULL COMMENT 'Nombre del Usuario',
  `genero` ENUM('Seleccionar', 'Masculino', 'Femenino', 'Indefinido') NOT NULL COMMENT 'Género del Usuario',
  `email` VARCHAR(50) NOT NULL COMMENT 'Email del Usuario',
  `password` VARCHAR(50) NOT NULL COMMENT 'Contraseña del Usuario',
  `cod_area` ENUM('Seleccionar', 'Tecnica', 'Administrativa', 'Academica', 'Tecnologica') NOT NULL COMMENT 'Código del área de la Institución a la que pertenece el usuario.',
  `cod_cargo` ENUM('Seleccionar', 'Tecnico', 'Rector', 'Coordinador academico', 'Profesor') NOT NULL COMMENT 'Código del cargo del usuario.',
  `cod_rol` ENUM('Seleccionar', 'Tecnico', 'Adminstrativo', 'Usuario') NOT NULL COMMENT 'Código del rol del usuario',
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BDNew_Reset`.`Equipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BDNew_Reset`.`Equipo` (
  `id_equipo` INT NOT NULL COMMENT 'ID Equipo',
  `cod_tipo_equipo` ENUM('Seleccione', 'Escritorio', 'Portátil') NOT NULL COMMENT 'Código del tipo de equipo ',
  `serial_equipo` VARCHAR(45) NOT NULL COMMENT 'Número de Serial del equipo',
  PRIMARY KEY (`id_equipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BDNew_Reset`.`Ticket`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BDNew_Reset`.`Ticket` (
  `id_ticket` INT NOT NULL COMMENT 'id Ticket ',
  `fecha_inicio` DATETIME NOT NULL COMMENT 'Fecha de inicio del nuevo ticket',
  `fecha_fin` DATETIME NOT NULL COMMENT 'Fecha de finalizacion  del ticket',
  `descrip_incidencia` TEXT(255) NOT NULL COMMENT 'Descripción de la incidencia',
  `archivo_evidencia` VARCHAR(255) NOT NULL COMMENT 'Ruta de la carpeta que guarda los archivos evidencia',
  `cod_categoria` ENUM('Seleccionar', 'Hardware', 'Software') NOT NULL COMMENT 'Código de especificacion de la categoria de la incidencia.',
  `cod_estado_ticket` ENUM('Enviado', 'Visto', 'En proceso', 'Solucionado') NOT NULL COMMENT 'Código de estado de la incidencia en el ticket',
  `cod_usuario` INT NOT NULL COMMENT 'Código de Usuario desde tabla Usuario ',
  `cod_equipo` INT NOT NULL COMMENT 'Código de Equipo desde tabla Equipo',
  PRIMARY KEY (`id_ticket`),
  INDEX `fk_Ticket_Usuario1_idx` (`cod_usuario` ASC),
  INDEX `fk_Ticket_Equipo1_idx` (`cod_equipo` ASC),
  CONSTRAINT `fk_Ticket_Usuario1`
    FOREIGN KEY (`cod_usuario`)
    REFERENCES `BDNew_Reset`.`Usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ticket_Equipo1`
    FOREIGN KEY (`cod_equipo`)
    REFERENCES `BDNew_Reset`.`Equipo` (`id_equipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
