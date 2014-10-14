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
CREATE SCHEMA IF NOT EXISTS `camas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
-- -----------------------------------------------------
-- Schema phpmyadmin
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema phpmyadmin
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin ;
USE `camas` ;

-- -----------------------------------------------------
-- Table `mydb`.`sala`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `camas`.`sala` (
  `sal_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `sal_camasTotales` INT NULL,
  `sal_camasLibres` INT NULL,
  `sal_numeroSala` VARCHAR(15) NULL,
  PRIMARY KEY (`sal_id`),
  UNIQUE INDEX `sal_id_UNIQUE` (`sal_id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `camas`.`cama`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `camas`.`cama` (
  `cam_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `cam_numero` VARCHAR(20) NULL,
  `cam_estado` VARCHAR(20) NULL,
  `cam_sal_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`cam_id`, `cam_sal_id`),
  UNIQUE INDEX `cam_id_UNIQUE` (`cam_id` ASC),
  INDEX `fk_cama_sala1_idx` (`cam_sal_id` ASC),
  CONSTRAINT `fk_cama_sala1`
    FOREIGN KEY (`cam_sal_id`)
    REFERENCES `camas`.`sala` (`sal_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `camas`.`paciente` (
  `pac_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `pac_categoria` VARCHAR(45) NULL,
  `pac_estado` VARCHAR(20) NULL,
  `pac_cam_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`pac_id`, `pac_cam_id`),
  UNIQUE INDEX `pac_id_UNIQUE` (`pac_id` ASC),
  INDEX `fk_paciente_cama1_idx` (`pac_cam_id` ASC),
  CONSTRAINT `fk_paciente_cama1`
    FOREIGN KEY (`pac_cam_id`)
    REFERENCES `camas`.`cama` (`cam_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`dependencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `camas`.`dependencia` (
  `dep_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `dep_cambioRopa` INT NULL,
  `dep_movilizacion` INT NULL,
  `dep_cuidadosAlimentacion` INT NULL,
  `dep_cuidadosEliminacion` INT NULL,
  `dep_apoyo` INT NULL,
  `dep_vigilancia` INT NULL,
  `dep_fecha` DATE NULL,
  `dep_pac_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`dep_id`, `dep_pac_id`),
  UNIQUE INDEX `dep_id_UNIQUE` (`dep_id` ASC),
  INDEX `fk_dependencia_paciente1_idx` (`dep_pac_id` ASC),
  CONSTRAINT `fk_dependencia_paciente1`
    FOREIGN KEY (`dep_pac_id`)
    REFERENCES `camas`.`paciente` (`pac_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`riesgo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `camas`.`riesgo` (
  `rie_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `rie_control` INT NULL,
  `rie_balance` INT NULL,
  `rie_cuidadoOxigenoterapia` INT NULL,
  `rie_cuidadoAereo` INT NULL,
  `rie_intervenciones` INT NULL,
  `rie_cuidadoPiel` INT NULL,
  `rie_tratamiento` INT NULL,
  `rie_presenciaElementos` INT NULL,
  `rie_fecha` DATE NULL,
  `rie_pac_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`rie_id`, `rie_pac_id`),
  UNIQUE INDEX `rie_id_UNIQUE` (`rie_id` ASC),
  INDEX `fk_riesgo_paciente_idx` (`rie_pac_id` ASC),
  CONSTRAINT `fk_riesgo_paciente`
    FOREIGN KEY (`rie_pac_id`)
    REFERENCES `camas`.`paciente` (`pac_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `camas`.`usuario` (
  `usu_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `usu_nombre` VARCHAR(45) NULL,
  `usu_rut` VARCHAR(45) NULL,
  `usu_especialidad` VARCHAR(45) NULL,
  `usu_password` VARCHAR(45) NOT NULL,
  `usu_username` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`usu_id`),
  UNIQUE INDEX `usu_id_UNIQUE` (`usu_id` ASC))
ENGINE = InnoDB;

USE `phpmyadmin` ;

-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_bookmark`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_bookmark` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `dbase` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `user` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `label` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL DEFAULT '',
  `query` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Bookmarks';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_column_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_column_info` (
  `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `db_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `table_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `column_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `comment` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL DEFAULT '',
  `mimetype` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL DEFAULT '',
  `transformation` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `transformation_options` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `db_name` (`db_name` ASC, `table_name` ASC, `column_name` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Column information for phpMyAdmin';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_designer_coords`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_designer_coords` (
  `db_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `table_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `x` INT(11) NULL DEFAULT NULL,
  `y` INT(11) NULL DEFAULT NULL,
  `v` TINYINT(4) NULL DEFAULT NULL,
  `h` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`db_name`, `table_name`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Table coordinates for Designer';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_history`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_history` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `db` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `table` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `timevalue` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `username` (`username` ASC, `db` ASC, `table` ASC, `timevalue` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'SQL history for phpMyAdmin';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_navigationhiding`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_navigationhiding` (
  `username` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `item_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `item_type` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `db_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `table_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  PRIMARY KEY (`username`, `item_name`, `item_type`, `db_name`, `table_name`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Hidden items of navigation tree';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_pdf_pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_pdf_pages` (
  `db_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `page_nr` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_descr` VARCHAR(50) CHARACTER SET 'utf8' NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  INDEX `db_name` (`db_name` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'PDF relation pages for phpMyAdmin';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_recent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_recent` (
  `username` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `tables` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  PRIMARY KEY (`username`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Recently accessed tables';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_relation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_relation` (
  `master_db` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `master_table` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `master_field` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `foreign_db` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `foreign_table` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `foreign_field` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`, `master_table`, `master_field`),
  INDEX `foreign_field` (`foreign_db` ASC, `foreign_table` ASC))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Relation table';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_savedsearches`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_savedsearches` (
  `id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `db_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `search_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `search_data` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `u_savedsearches_username_dbname` (`username` ASC, `db_name` ASC, `search_name` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Saved searches';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_table_coords`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_table_coords` (
  `db_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `table_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `pdf_page_number` INT(11) NOT NULL DEFAULT '0',
  `x` FLOAT UNSIGNED NOT NULL DEFAULT '0',
  `y` FLOAT UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`, `table_name`, `pdf_page_number`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Table coordinates for phpMyAdmin PDF output';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_table_info`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_table_info` (
  `db_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `table_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  `display_field` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`, `table_name`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Table information for phpMyAdmin';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_table_uiprefs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_table_uiprefs` (
  `username` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `db_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `table_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `prefs` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `last_update` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`, `db_name`, `table_name`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Tables\' UI preferences';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_tracking`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_tracking` (
  `db_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `table_name` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `version` INT(10) UNSIGNED NOT NULL,
  `date_created` DATETIME NOT NULL,
  `date_updated` DATETIME NOT NULL,
  `schema_snapshot` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `schema_sql` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `data_sql` LONGTEXT CHARACTER SET 'utf8' COLLATE 'utf8_bin' NULL DEFAULT NULL,
  `tracking` SET('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') NULL DEFAULT NULL,
  `tracking_active` INT(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`, `table_name`, `version`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Database changes tracking for phpMyAdmin'
ROW_FORMAT = COMPACT;


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_userconfig`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_userconfig` (
  `username` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `timevalue` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` TEXT CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  PRIMARY KEY (`username`))
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'User preferences storage for phpMyAdmin';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_usergroups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_usergroups` (
  `usergroup` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `tab` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `allowed` ENUM('Y','N') CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL DEFAULT 'N',
  PRIMARY KEY (`usergroup`, `tab`, `allowed`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'User groups with configured menu items';


-- -----------------------------------------------------
-- Table `phpmyadmin`.`pma_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `phpmyadmin`.`pma_users` (
  `username` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  `usergroup` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_bin' NOT NULL,
  PRIMARY KEY (`username`, `usergroup`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin
COMMENT = 'Users and their assignments to user groups';


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
