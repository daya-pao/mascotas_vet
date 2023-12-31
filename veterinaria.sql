-- MySQL Workbench Forward Engineering
 drop database  if exists dbmascota;
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema dbmascota
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema dbmascota
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `dbmascota` DEFAULT CHARACTER SET utf8 ;
USE `dbmascota` ;

-- -----------------------------------------------------
-- Table `dbmascota`.`Vacuna`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmascota`.`Vacuna` (
  `id` INT NOT NULL auto_increment,
  `nombre` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmascota`.`TipoMascota`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmascota`.`TipoMascota` (
  `id` INT NOT NULL auto_increment,
  `nombre` VARCHAR(150) NULL,
  `EdadEquivalenteJoven` INT NULL,
  `EdadEquivalenteAdulto` INT NULL,
  `EdadAdulto` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmascota`.`Raza`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmascota`.`Raza` (
  `id` INT NOT NULL auto_increment,
  `nombre` VARCHAR(150) NULL,
  `TipoMascota_id` INT,
  PRIMARY KEY (`id`),
  INDEX `fk_Raza_TipoMascota_idx` (`TipoMascota_id` ASC) VISIBLE,
  CONSTRAINT `fk_Raza_TipoMascota`
    FOREIGN KEY (`TipoMascota_id`)
    REFERENCES `dbmascota`.`TipoMascota` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmascota`.`Role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmascota`.`Role` (
  `id` INT NOT NULL,
  `nombre` VARCHAR(150) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmascota`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmascota`.`User` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nombre` VARCHAR(45) NULL,
  `username` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(100) NULL,
  `Role_id` INT NOT NULL,
  `foto` BLOB NULL,
  INDEX `fk_User_Role1_idx` (`Role_id` ASC) VISIBLE,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) VISIBLE,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  CONSTRAINT `fk_User_Role1`
    FOREIGN KEY (`Role_id`)
    REFERENCES `dbmascota`.`Role` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmascota`.`Mascota`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmascota`.`Mascota` (
  `id` INT NOT NULL auto_increment,
  `nombre` VARCHAR(150) NULL,
  `FechaNacimiento` DATE NULL,
  `foto` BLOB NULL,
  `User_id` INT NOT NULL,
  `TipoMascota_id` INT NOT NULL,
  `Raza_id` INT ,
  PRIMARY KEY (`id`),
  INDEX `fk_Mascota_User1_idx` (`User_id` ASC) VISIBLE,
  INDEX `fk_Mascota_TipoMascota1_idx` (`TipoMascota_id` ASC) VISIBLE,
  INDEX `fk_Mascota_Raza1_idx` (`Raza_id` ASC) VISIBLE,
  CONSTRAINT `fk_Mascota_User1`
    FOREIGN KEY (`User_id`)
    REFERENCES `dbmascota`.`User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_TipoMascota1`
    FOREIGN KEY (`TipoMascota_id`)
    REFERENCES `dbmascota`.`TipoMascota` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_Raza1`
    FOREIGN KEY (`Raza_id`)
    REFERENCES `dbmascota`.`Raza` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbmascota`.`ControlVacuna`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbmascota`.`ControlVacuna` (
  `Mascota_id` INT NOT NULL,
  `Vacuna_id` INT NOT NULL,
  `fecha` DATE NULL,
  PRIMARY KEY (`Mascota_id`, `Vacuna_id`),
  INDEX `fk_Mascota_has_Vacuna_Vacuna1_idx` (`Vacuna_id` ASC) VISIBLE,
  INDEX `fk_Mascota_has_Vacuna_Mascota1_idx` (`Mascota_id` ASC) VISIBLE,
  CONSTRAINT `fk_Mascota_has_Vacuna_Mascota1`
    FOREIGN KEY (`Mascota_id`)
    REFERENCES `dbmascota`.`Mascota` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mascota_has_Vacuna_Vacuna1`
    FOREIGN KEY (`Vacuna_id`)
    REFERENCES `dbmascota`.`Vacuna` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
select * from User;
insert into User values('1', 'dayana', 'daya06', 'dayana@gmail.com', '$2y$10$zaYdUuOtwjF1fPpi5xsJuu0oaJ5Est4kxdh0zw9tr6wY9jufsCTK.', '1', null
),('2', 'dayana', 'user1', 'user@gmail.com', '$2y$10$zaYdUuOtwjF1fPpi5xsJuu0oaJ5Est4kxdh0zw9tr6wY9jufsCTK.', '1', null);

insert into  Role values('1','admin'),('2','user');
insert into tipomascota (id, nombre) values('1','perro') , ('2','gato');
-- insertar mascotas
-- select * from Mascota;
-- select * from tipomascota;

-- select * from raza; 	
-- select * from vacuna;
INSERT INTO Vacuna (nombre)
VALUES ('Triple Felina (FVRCP)'),('Leucemia Felina (FeLV)'),('Parvovirus'),
('Moquillo Canino (Distemper)'),('Hepatitis Canina (Adenovirus)'),
('Parainfluenza'),('Rabia'),('Newcastle'),('Gumboro (IBD)'), ('Tifosis Aviar'),
('Mixomatosis'),('Enfermedad Hemorrágica Viral (VHD)');

select * from ControlVacuna;
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
