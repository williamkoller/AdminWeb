-- MySQL Workbench Forward Engineering

-- -----------------------------------------------------
-- Schema admin_web_php
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema admin_web_php
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `admin_web_php` DEFAULT CHARACTER SET utf8 ;
USE `admin_web_php` ;

-- -----------------------------------------------------
-- Table `admin_web_php`.`pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `admin_web_php`.`pages` (
                                                       `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                                                       `title` VARCHAR(245) NOT NULL,
                                                       `url` VARCHAR(245) NOT NULL,
                                                       `body` TEXT NULL,
                                                       `created` DATETIME NOT NULL,
                                                       `updated` DATETIME NOT NULL,
                                                       PRIMARY KEY (`id`))
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `admin_web_php`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `admin_web_php`.`users` (
                                                       `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                                                       `email` VARCHAR(250) NOT NULL,
                                                       `password` VARCHAR(100) NOT NULL,
                                                       `created` DATETIME NOT NULL,
                                                       `updated` DATETIME NOT NULL,
                                                       PRIMARY KEY (`id`))
    ENGINE = InnoDB;

