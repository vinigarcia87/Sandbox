SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `psi` ;
CREATE SCHEMA IF NOT EXISTS `psi` DEFAULT CHARACTER SET latin1 ;
USE `psi` ;

-- -----------------------------------------------------
-- Table `psi`.`psi_especialidades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `psi`.`psi_especialidades` ;

CREATE  TABLE IF NOT EXISTS `psi`.`psi_especialidades` (
  `codigoEspecialidade` VARCHAR(5) NOT NULL ,
  `descricao` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`codigoEspecialidade`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `psi`.`psi_planos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `psi`.`psi_planos` ;

CREATE  TABLE IF NOT EXISTS `psi`.`psi_planos` (
  `codigoPlano` VARCHAR(5) NOT NULL ,
  `situacaoPlanoANS` VARCHAR(45) NULL DEFAULT NULL ,
  `classificacoPlano` VARCHAR(45) NULL DEFAULT NULL ,
  `nomeComercial` VARCHAR(45) NULL DEFAULT NULL ,
  `registroANS` VARCHAR(45) NULL DEFAULT NULL ,
  `tipoRede` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`codigoPlano`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `psi`.`psi_prestadores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `psi`.`psi_prestadores` ;

CREATE  TABLE IF NOT EXISTS `psi`.`psi_prestadores` (
  `codPrestador` INT(11) NOT NULL AUTO_INCREMENT ,
  `tipoEstabelecimento` VARCHAR(45) NULL DEFAULT NULL ,
  `nomeCompleto` VARCHAR(45) NULL DEFAULT NULL ,
  `nomeReduzido` VARCHAR(45) NULL DEFAULT NULL ,
  `conselhoProfissional` VARCHAR(45) NULL DEFAULT NULL ,
  `cnpj` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`codPrestador`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `psi`.`psi_prestador_enderecos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `psi`.`psi_prestador_enderecos` ;

CREATE  TABLE IF NOT EXISTS `psi`.`psi_prestador_enderecos` (
  `codEndereco` INT(11) NOT NULL AUTO_INCREMENT ,
  `endereco` VARCHAR(45) NULL DEFAULT NULL ,
  `bairro` VARCHAR(45) NULL DEFAULT NULL ,
  `cidade` VARCHAR(45) NULL DEFAULT NULL ,
  `uf` VARCHAR(2) NULL DEFAULT NULL ,
  `cep` VARCHAR(45) NULL DEFAULT NULL ,
  `telefone` VARCHAR(45) NULL DEFAULT NULL ,
  `site` VARCHAR(45) NULL DEFAULT NULL ,
  `codPrestador` INT(11) NOT NULL ,
  PRIMARY KEY (`codEndereco`) ,
  INDEX `fk_psi_prestador_enderecos_psi_prestadores` (`codPrestador` ASC) ,
  CONSTRAINT `fk_psi_prestador_enderecos_psi_prestadores`
    FOREIGN KEY (`codPrestador` )
    REFERENCES `psi`.`psi_prestadores` (`codPrestador` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `psi`.`psi_prestador_especialidades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `psi`.`psi_prestador_especialidades` ;

CREATE  TABLE IF NOT EXISTS `psi`.`psi_prestador_especialidades` (
  `codigoEspecialidade` VARCHAR(5) NOT NULL ,
  `codPrestador` INT(11) NOT NULL ,
  INDEX `fk_psi_prestador_especialidades_psi_especialidades1` (`codigoEspecialidade` ASC) ,
  INDEX `fk_psi_prestador_especialidades_psi_prestadores1` (`codPrestador` ASC) ,
  CONSTRAINT `fk_psi_prestador_especialidades_psi_especialidades1`
    FOREIGN KEY (`codigoEspecialidade` )
    REFERENCES `psi`.`psi_especialidades` (`codigoEspecialidade` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_psi_prestador_especialidades_psi_prestadores1`
    FOREIGN KEY (`codPrestador` )
    REFERENCES `psi`.`psi_prestadores` (`codPrestador` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `psi`.`psi_prestador_planos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `psi`.`psi_prestador_planos` ;

CREATE  TABLE IF NOT EXISTS `psi`.`psi_prestador_planos` (
  `codPrestador` INT(11) NOT NULL ,
  `codigoPlano` VARCHAR(5) NOT NULL ,
  INDEX `fk_psi_prestador_planos_psi_prestadores1` (`codPrestador` ASC) ,
  INDEX `fk_psi_prestador_planos_psi_planos1` (`codigoPlano` ASC) ,
  CONSTRAINT `fk_psi_prestador_planos_psi_prestadores1`
    FOREIGN KEY (`codPrestador` )
    REFERENCES `psi`.`psi_prestadores` (`codPrestador` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_psi_prestador_planos_psi_planos1`
    FOREIGN KEY (`codigoPlano` )
    REFERENCES `psi`.`psi_planos` (`codigoPlano` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `psi`.`psi_servicos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `psi`.`psi_servicos` ;

CREATE  TABLE IF NOT EXISTS `psi`.`psi_servicos` (
  `codigoServico` VARCHAR(5) NOT NULL ,
  `descricao` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`codigoServico`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `psi`.`psi_prestador_servicos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `psi`.`psi_prestador_servicos` ;

CREATE  TABLE IF NOT EXISTS `psi`.`psi_prestador_servicos` (
  `codPrestador` INT(11) NOT NULL ,
  `codigoServico` VARCHAR(5) NOT NULL ,
  INDEX `fk_psi_prestador_servicos_psi_prestadores1` (`codPrestador` ASC) ,
  INDEX `fk_psi_prestador_servicos_psi_servicos1` (`codigoServico` ASC) ,
  CONSTRAINT `fk_psi_prestador_servicos_psi_prestadores1`
    FOREIGN KEY (`codPrestador` )
    REFERENCES `psi`.`psi_prestadores` (`codPrestador` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_psi_prestador_servicos_psi_servicos1`
    FOREIGN KEY (`codigoServico` )
    REFERENCES `psi`.`psi_servicos` (`codigoServico` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `psi`.`psi_historico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `psi`.`psi_historico` ;

CREATE  TABLE IF NOT EXISTS `psi`.`psi_historico` (
  `codigoHistorico` INT NOT NULL AUTO_INCREMENT ,
  `dataAtualizacao` DATETIME NULL ,
  `tempoScript` VARCHAR(10) NULL ,
  `numEntradas` VARCHAR(60) NULL ,
  PRIMARY KEY (`codigoHistorico`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
