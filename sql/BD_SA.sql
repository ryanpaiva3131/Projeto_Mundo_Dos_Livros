
-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_sa` DEFAULT CHARACTER SET utf8 ;
USE `bd_sa` ;

-- -----------------------------------------------------
-- Table `bd_sa`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_sa`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(80) NOT NULL,
  `senha` VARCHAR(30) NOT NULL,
  `cpf` VARCHAR(16) NOT NULL,
  `email` VARCHAR(80) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  `imagem` VARCHAR(200) NOT NULL,
  `permissao` VARCHAR(6) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE INDEX `id_usuario_UNIQUE` (`id_usuario` ASC),
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_sa`.`item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_sa`.`item` (
  `id_item` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NOT NULL,
  `loja` VARCHAR(80) NOT NULL,
  `link` VARCHAR(200) NOT NULL,
  `imagem` VARCHAR(200) NOT NULL,
  `categoria` VARCHAR(80) NOT NULL,
  `desc` VARCHAR(400) NOT NULL,
  `autor` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`id_item`),
  UNIQUE INDEX `id_item_UNIQUE` (`id_item` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_sa`.`avaliacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_sa`.`avaliacao` (
  `item_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  `id_avaliacao` INT NOT NULL AUTO_INCREMENT,
  `data_aval` DATE NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `mensagem` VARCHAR(500) NOT NULL,
  `nota` INT NOT NULL,
  PRIMARY KEY (`id_avaliacao`),
  INDEX `fk_item_has_usuario_usuario1_idx` (`usuario_id` ASC) ,
  INDEX `fk_item_has_usuario_item_idx` (`item_id` ASC) ,
  UNIQUE INDEX `id_avaliacao_UNIQUE` (`id_avaliacao` ASC) ,
  CONSTRAINT `fk_item_has_usuario_item`
    FOREIGN KEY (`item_id`)
    REFERENCES `bd_sa`.`item` (`id_item`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_item_has_usuario_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `bd_sa`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;