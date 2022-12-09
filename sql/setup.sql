-- MySQL Script generated by MySQL Workbench
-- Thu Dec  8 18:38:28 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema jays-db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema jays-db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `jays-db` DEFAULT CHARACTER SET utf8 ;
USE `jays-db` ;

-- -----------------------------------------------------
-- Table `jays-db`.`menuItem`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `jays-db`.`menuItem` ;

CREATE TABLE IF NOT EXISTS `jays-db`.`menuItem` (
  `itemID` INT(11) NOT NULL AUTO_INCREMENT,
  `itemName` VARCHAR(45) NOT NULL,
  `category` VARCHAR(45) NULL DEFAULT NULL,
  `price` DOUBLE NULL DEFAULT NULL,
  `description` VARCHAR(200) NULL DEFAULT NULL,
  `calories` INT(11) NULL DEFAULT NULL,
  `isAvailable` TINYINT(1) NULL DEFAULT 1,
  `imgSource` NVARCHAR(260) NULL,
  PRIMARY KEY (`itemID`))
AUTO_INCREMENT = 51
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jays-db`.`siteUser`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `jays-db`.`siteUser` ;

CREATE TABLE IF NOT EXISTS `jays-db`.`siteUser` (
  `userID` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `passwordHash` VARCHAR(45) NOT NULL,
  `firstName` VARCHAR(45) NOT NULL,
  `lastName` VARCHAR(45) NOT NULL,
  `accountType` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`userID`),
  UNIQUE INDEX `userID_UNIQUE` (`userID` ASC));


-- -----------------------------------------------------
-- Table `jays-db`.`orderEntry`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `jays-db`.`orderEntry` ;

CREATE TABLE IF NOT EXISTS `jays-db`.`orderEntry` (
  `orderID` INT NOT NULL AUTO_INCREMENT,
  `siteUser_userID` INT NOT NULL,
  `placedTime` DATETIME(6) NOT NULL,
  `forTime` DATETIME(6) NOT NULL,
  PRIMARY KEY (`orderID`, `siteUser_userID`),
  UNIQUE INDEX `orderID_UNIQUE` (`orderID` ASC),
  INDEX `fk_order_siteUser1_idx` (`siteUser_userID` ASC),
  CONSTRAINT `fk_order_siteUser1`
    FOREIGN KEY (`siteUser_userID`)
    REFERENCES `jays-db`.`siteUser` (`userID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `jays-db`.`orderItem`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `jays-db`.`orderItem` ;

CREATE TABLE IF NOT EXISTS `jays-db`.`orderItem` (
  `orderEntry_orderID` INT NOT NULL,
  `menuItem_itemID` INT(11) NOT NULL,
  `quantity` INT NOT NULL,
  `notes` VARCHAR(180) NULL,
  PRIMARY KEY (`orderEntry_orderID`, `menuItem_itemID`),
  INDEX `fk_orderItem_orderEntry1_idx` (`orderEntry_orderID` ASC),
  CONSTRAINT `fk_orderItem_menuItem`
    FOREIGN KEY (`menuItem_itemID`)
    REFERENCES `jays-db`.`menuItem` (`itemID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_orderItem_orderEntry1`
    FOREIGN KEY (`orderEntry_orderID`)
    REFERENCES `jays-db`.`orderEntry` (`orderID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `jays-db`.`favoriteItem`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `jays-db`.`favoriteItem` ;

CREATE TABLE IF NOT EXISTS `jays-db`.`favoriteItem` (
  `siteUser_userID` INT NOT NULL,
  `menuItem_itemID` INT(11) NOT NULL,
  PRIMARY KEY (`siteUser_userID`, `menuItem_itemID`),
  INDEX `fk_favoriteItem_menuItem1_idx` (`menuItem_itemID` ASC),
  CONSTRAINT `fk_favoriteItem_siteUser1`
    FOREIGN KEY (`siteUser_userID`)
    REFERENCES `jays-db`.`siteUser` (`userID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_favoriteItem_menuItem1`
    FOREIGN KEY (`menuItem_itemID`)
    REFERENCES `jays-db`.`menuItem` (`itemID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;