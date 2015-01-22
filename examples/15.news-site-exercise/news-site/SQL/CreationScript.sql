-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema NewsPortal
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema NewsPortal
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `NewsPortal` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `NewsPortal` ;

-- -----------------------------------------------------
-- Table `NewsPortal`.`Categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NewsPortal`.`Categories` (
  `CategoryID` INT NOT NULL AUTO_INCREMENT,
  `CategoryName` VARCHAR(127) NOT NULL,
  `IsVisible` BIT(1) NULL DEFAULT 1,
  `Order` INT NULL,
  PRIMARY KEY (`CategoryID`),
  UNIQUE INDEX `CategoryName_UNIQUE` (`CategoryName` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `NewsPortal`.`Authors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NewsPortal`.`Authors` (
  `AuthorID` INT NOT NULL AUTO_INCREMENT,
  `FirstName` VARCHAR(128) NOT NULL,
  `LastName` VARCHAR(128) NOT NULL,
  PRIMARY KEY (`AuthorID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `NewsPortal`.`News`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `NewsPortal`.`News` (
  `NewsID` INT NOT NULL AUTO_INCREMENT,
  `NewsTitle` VARCHAR(512) NULL,
  `NewsBody` MEDIUMTEXT NULL,
  `Created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `PicturePath` VARCHAR(512) NULL,
  `CategoryID` INT NOT NULL,
  `AuthorID` INT NOT NULL,
  PRIMARY KEY (`NewsID`),
  INDEX `fk_News_Categories_idx` (`CategoryID` ASC),
  INDEX `fk_News_Authors1_idx` (`AuthorID` ASC),
  CONSTRAINT `fk_News_Categories`
    FOREIGN KEY (`CategoryID`)
    REFERENCES `NewsPortal`.`Categories` (`CategoryID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_News_Authors1`
    FOREIGN KEY (`AuthorID`)
    REFERENCES `NewsPortal`.`Authors` (`AuthorID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
