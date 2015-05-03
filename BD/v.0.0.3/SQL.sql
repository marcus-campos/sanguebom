-- MySQL Script generated by MySQL Workbench
-- 05/03/15 13:00:16
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`estado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(75) NOT NULL,
  `uf` CHAR(2) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cidade` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(75) NOT NULL,
  `estado_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_cidade_estado_idx` (`estado_id` ASC),
  CONSTRAINT `fk_cidade_estado`
    FOREIGN KEY (`estado_id`)
    REFERENCES `mydb`.`estado` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipo_sangue`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tipo_sangue` (
  `idtipo_sangue` INT NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(10) NOT NULL,
  `descricao` VARCHAR(1000) NULL,
  PRIMARY KEY (`idtipo_sangue`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`pessoa` (
  `idpessoa` INT NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(11) NOT NULL,
  `email` VARCHAR(100) NULL,
  `tipo_sangue_idtipo_sangue` INT NOT NULL,
  `cidade_id` INT NOT NULL,
  PRIMARY KEY (`idpessoa`),
  INDEX `fk_pessoa_cidade1_idx` (`cidade_id` ASC),
  INDEX `fk_pessoa_tipo_sangue1_idx` (`tipo_sangue_idtipo_sangue` ASC),
  CONSTRAINT `fk_pessoa_cidade1`
    FOREIGN KEY (`cidade_id`)
    REFERENCES `mydb`.`cidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pessoa_tipo_sangue1`
    FOREIGN KEY (`tipo_sangue_idtipo_sangue`)
    REFERENCES `mydb`.`tipo_sangue` (`idtipo_sangue`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`local_doacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`local_doacao` (
  `idlocal_doacao` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  `hora_func_ini` TIME NULL,
  `hora_func_fim` TIME NULL,
  `descricao` VARCHAR(1000) NULL,
  `cidade_id` INT NOT NULL,
  PRIMARY KEY (`idlocal_doacao`),
  INDEX `fk_local_doacao_cidade1_idx` (`cidade_id` ASC),
  CONSTRAINT `fk_local_doacao_cidade1`
    FOREIGN KEY (`cidade_id`)
    REFERENCES `mydb`.`cidade` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`solicita_doacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`solicita_doacao` (
  `idsolicita_doacao` INT NOT NULL,
  `tipo_sangue_idtipo_sangue` INT NOT NULL,
  `local_doacao_idlocal_doacao` INT NOT NULL,
  `obs` VARCHAR(1000) NULL,
  PRIMARY KEY (`idsolicita_doacao`),
  INDEX `fk_solicita_doacao_tipo_sangue1_idx` (`tipo_sangue_idtipo_sangue` ASC),
  INDEX `fk_solicita_doacao_local_doacao1_idx` (`local_doacao_idlocal_doacao` ASC),
  CONSTRAINT `fk_solicita_doacao_tipo_sangue1`
    FOREIGN KEY (`tipo_sangue_idtipo_sangue`)
    REFERENCES `mydb`.`tipo_sangue` (`idtipo_sangue`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicita_doacao_local_doacao1`
    FOREIGN KEY (`local_doacao_idlocal_doacao`)
    REFERENCES `mydb`.`local_doacao` (`idlocal_doacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;