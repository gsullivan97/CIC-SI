-- --------------------------------------------------------
-- Servidor:                     us-cdbr-iron-east-03.cleardb.net
-- Versão do servidor:           5.5.45-log - MySQL Community Server (GPL)
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para heroku_343d7fa1da662ec
CREATE DATABASE IF NOT EXISTS `heroku_343d7fa1da662ec` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `heroku_343d7fa1da662ec`;


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.beneficios
DROP TABLE IF EXISTS `beneficios`;
CREATE TABLE IF NOT EXISTS `beneficios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `desconto` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.cargo
DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formacao_desejada` varchar(100) NOT NULL,
  `formacao_minima` varchar(100) NOT NULL,
  `carga_horaria` int(11) NOT NULL,
  `salario` double NOT NULL,
  `beneficios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `beneficios_id_idx` (`beneficios_id`),
  CONSTRAINT `beneficios_id` FOREIGN KEY (`beneficios_id`) REFERENCES `beneficios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.cat
DROP TABLE IF EXISTS `cat`;
CREATE TABLE IF NOT EXISTS `cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caracteristicas` varchar(1000) NOT NULL,
  `data_abertura` date NOT NULL,
  `flag_registro` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.centro_custo
DROP TABLE IF EXISTS `centro_custo`;
CREATE TABLE IF NOT EXISTS `centro_custo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.cnae
DROP TABLE IF EXISTS `cnae`;
CREATE TABLE IF NOT EXISTS `cnae` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.departamento
DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_secao` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.dpt_pessoal
DROP TABLE IF EXISTS `dpt_pessoal`;
CREATE TABLE IF NOT EXISTS `dpt_pessoal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folha_pagamento` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.empresa
DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` decimal(4,0) NOT NULL,
  `razao_social` varchar(100) NOT NULL,
  `nome_fantasia` varchar(100) NOT NULL,
  `natureza_juridica` varchar(100) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `complemento` varchar(60) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `id_cnae` int(11) NOT NULL,
  `id_centro_custo` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_setor` int(11) NOT NULL,
  `id_grupo_empresa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cnpj` (`cnpj`),
  KEY `fk_cnae` (`id_cnae`),
  KEY `fk_centro_custo` (`id_centro_custo`),
  KEY `fk_departamento` (`id_departamento`),
  KEY `fk_setor` (`id_setor`),
  KEY `fk_grupo_empresa` (`id_grupo_empresa`),
  CONSTRAINT `fk_centro_custo` FOREIGN KEY (`id_centro_custo`) REFERENCES `centro_custo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cnae` FOREIGN KEY (`id_cnae`) REFERENCES `cnae` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_grupo_empresa` FOREIGN KEY (`id_grupo_empresa`) REFERENCES `grupo_empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_setor` FOREIGN KEY (`id_setor`) REFERENCES `setor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.epi
DROP TABLE IF EXISTS `epi`;
CREATE TABLE IF NOT EXISTS `epi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao_equipamento` varchar(1000) NOT NULL,
  `uso` varchar(1000) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_validade` date NOT NULL,
  `n_certificado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.funcionario
DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id` int(11) NOT NULL,
  `data_admissao` date NOT NULL,
  `data_demissao` date NOT NULL,
  `banco` varchar(100) NOT NULL,
  `agencia` int(11) NOT NULL,
  `conta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.grupo_empresa
DROP TABLE IF EXISTS `grupo_empresa`;
CREATE TABLE IF NOT EXISTS `grupo_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.pcmso
DROP TABLE IF EXISTS `pcmso`;
CREATE TABLE IF NOT EXISTS `pcmso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_exame` varchar(1000) NOT NULL,
  `finalidade` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.pessoa
DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(13) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nasc` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `complemento` varchar(60) NOT NULL,
  `nacionalidade` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pretensao_salarial` double NOT NULL,
  `cargo_desejado` varchar(300) NOT NULL,
  `experiencia` varchar(1000) NOT NULL,
  `outros` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.ppra
DROP TABLE IF EXISTS `ppra`;
CREATE TABLE IF NOT EXISTS `ppra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  CONSTRAINT `id_cat` FOREIGN KEY (`id`) REFERENCES `cat` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_epi` FOREIGN KEY (`id`) REFERENCES `epi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_unidade_extintora` FOREIGN KEY (`id`) REFERENCES `unidades extintoras` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.seguranca_trabalho
DROP TABLE IF EXISTS `seguranca_trabalho`;
CREATE TABLE IF NOT EXISTS `seguranca_trabalho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  KEY `id_ppra_idx` (`id`),
  CONSTRAINT `id_ppra` FOREIGN KEY (`id`) REFERENCES `ppra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_pcmso` FOREIGN KEY (`id`) REFERENCES `pcmso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.setor
DROP TABLE IF EXISTS `setor`;
CREATE TABLE IF NOT EXISTS `setor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dep` (`id_departamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.tbl_cargos
DROP TABLE IF EXISTS `tbl_cargos`;
CREATE TABLE IF NOT EXISTS `tbl_cargos` (
  `nome` varchar(50) NOT NULL,
  `CBO` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.treinamento
DROP TABLE IF EXISTS `treinamento`;
CREATE TABLE IF NOT EXISTS `treinamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `tempo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela heroku_343d7fa1da662ec.unidades extintoras
DROP TABLE IF EXISTS `unidades extintoras`;
CREATE TABLE IF NOT EXISTS `unidades extintoras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  `finalidade` varchar(100) NOT NULL,
  `n_certificado` varchar(300) NOT NULL,
  `local` varchar(100) NOT NULL,
  `data_cadastro` date NOT NULL,
  `validade` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
