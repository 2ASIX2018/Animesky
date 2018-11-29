-- MySQL Script generated by MySQL Workbench
-- dijous, 22 de novembre de 2018, 12:03:10 CET
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `animesky` DEFAULT CHARACTER SET utf8 ;
USE `animesky` ;

-- -----------------------------------------------------
-- Table `mydb`.`serie`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `animesky`.`serie` ;

CREATE TABLE IF NOT EXISTS `animesky`.`serie` (
  `Idserie` INT(11) NOT NULL,
  `Nom` VARCHAR(45) NULL DEFAULT NULL,
  `Idioma` VARCHAR(45) NULL DEFAULT NULL,
  `Genere_idGenere` INT(11) NOT NULL,
  `Valoració` VARCHAR(45) NULL DEFAULT NULL,
  `Fecha Inicio` DATE NULL DEFAULT NULL,
  `Fecha Fin` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`Idserie`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Capituls`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `animesky`.`Capituls` ;

CREATE TABLE IF NOT EXISTS `animesky`.`Capituls` (
  `idCapituls` INT(11) NOT NULL,
  `Nº Tempo` INT(11) NULL DEFAULT NULL,
  `Nº Cap` INT(11) NULL DEFAULT NULL,
  `Titol` VARCHAR(45) NULL DEFAULT NULL,
  `Sinopsis` VARCHAR(45) NULL DEFAULT NULL,
  `Duració` VARCHAR(45) NULL DEFAULT NULL,
  `Valoració` FLOAT(2,1) NULL DEFAULT NULL,
  `serie_Idserie` INT(11) NOT NULL,
  PRIMARY KEY (`idCapituls`),
  INDEX `fk_Capituls_serie1_idx` (`serie_Idserie` ASC),
  CONSTRAINT `fk_Capituls_serie1`
    FOREIGN KEY (`serie_Idserie`)
    REFERENCES `animesky`.`serie` (`Idserie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `animesky`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `animesky`.`usuarios` (
  `nombre` VARCHAR(40) NOT NULL,
  `contraseña` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`nombre`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
