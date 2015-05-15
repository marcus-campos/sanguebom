-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2015 às 22:57
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sanguebom`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) NOT NULL,
  `estado_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cidade_estado_idx` (`estado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`id`, `nome`, `estado_id`) VALUES
(1, 'Belo Horizonte', 1),
(2, 'Betim', 1),
(3, 'Governador Valadares', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) NOT NULL,
  `uf` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id`, `nome`, `uf`) VALUES
(1, 'Minas Gerais', 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `local_doacao`
--

CREATE TABLE IF NOT EXISTS `local_doacao` (
  `idlocal_doacao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `hora_func_ini` time DEFAULT NULL,
  `hora_func_fim` time DEFAULT NULL,
  `descricao` varchar(1000) DEFAULT NULL,
  `cidade_id` int(11) NOT NULL,
  PRIMARY KEY (`idlocal_doacao`),
  KEY `fk_local_doacao_cidade1_idx` (`cidade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `local_doacao`
--

INSERT INTO `local_doacao` (`idlocal_doacao`, `nome`, `endereco`, `hora_func_ini`, `hora_func_fim`, `descricao`, `cidade_id`) VALUES
(1, 'Hemominas - Betim', 'Rua Salvador Gonçalves Diniz, 191 - Bairro: Jardim Brasília - Cep: 32.671-578', '07:00:00', '11:00:00', 'Seguir pela Via Expressa até a entrada do Riacho das Areias (Marco Túlio), seguir até o semáforo, virando à direita até a rotatória, contornando e descer a rua Rio de Janeiro; no 5º quarteirão, virar à direita, rua do Posto que fica no 2º quarteirão. Pela Amazonas: seguir a avenida Amazonas pegando a BR 381 até a entrada de Betim (antiga Barreira da Policia RF, pegar a avenida Bandeirantes, no 2º semáforo virar à direita, transpor a avenida Marco Túlio( semáforo), até a rotatória, contornando e descer a rua Rio de Janeiro, no 5º quarteirão virar à direita, rua do Posto que fica no 2º quarteirão.', 1),
(2, 'Hemominas - Belo Horizonte', 'Alameda Ezequiel Dias, 321 - Bairro: Santa Efigênia - Cep: 30130110', '07:00:00', '18:00:00', 'Segunda a sábado: 7h às 18h\r\n\r\nComo chegar\r\nDe ônibus:  2211-A Campo Alegre; 4102 – Aparecida/Serra; 4103 – Aparecida Mangabeiras; 9201 – Baleia/Nova Granada; 9501- São Lucas/Jaraguá; 9805 – Santa Efigênia/Renascença.\r\nObservação: todas as linhas que atendem a região hospitalar passam próximo ao Hemocentro\r\n\r\nDe carro: seguir pela avenida Afonso Pena até a rua Alagoas (virar à direita), virar à esquerda – rua Timbiras; atravessar a avenida Afonso Pena e entrar na Alameda Ezequiel Dias (ao lado do Instituto de Educação) ou seguir pela avenida dos Andradas, até a avenida Francisco Sales (à direita), na Praça Hugo Werneck, entrar na avenida Alfredo Balena (à direita) e seguir até o Hospital João XXIII; virar à direita na Alameda Ezequiel Dias.', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `idpessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `data_nasc` date NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tipo_sangue_idtipo_sangue` int(11) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  PRIMARY KEY (`idpessoa`),
  KEY `fk_pessoa_cidade1_idx` (`cidade_id`),
  KEY `fk_pessoa_tipo_sangue1_idx` (`tipo_sangue_idtipo_sangue`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`idpessoa`, `nome`, `cpf`, `data_nasc`, `email`, `tipo_sangue_idtipo_sangue`, `cidade_id`) VALUES
(1, 'Miguel', '03834922212', '0000-00-00', 'migueljunior09@hotmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicita_doacao`
--

CREATE TABLE IF NOT EXISTS `solicita_doacao` (
  `idsolicita_doacao` int(11) NOT NULL,
  `tipo_sangue_idtipo_sangue` int(11) NOT NULL,
  `local_doacao_idlocal_doacao` int(11) NOT NULL,
  `obs` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idsolicita_doacao`),
  KEY `fk_solicita_doacao_tipo_sangue1_idx` (`tipo_sangue_idtipo_sangue`),
  KEY `fk_solicita_doacao_local_doacao1_idx` (`local_doacao_idlocal_doacao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_sangue`
--

CREATE TABLE IF NOT EXISTS `tipo_sangue` (
  `idtipo_sangue` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(10) NOT NULL,
  `descricao` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`idtipo_sangue`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tipo_sangue`
--

INSERT INTO `tipo_sangue` (`idtipo_sangue`, `tipo`, `descricao`) VALUES
(1, 'A+', NULL),
(2, 'A-', NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `fk_cidade_estado` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `local_doacao`
--
ALTER TABLE `local_doacao`
  ADD CONSTRAINT `fk_local_doacao_cidade1` FOREIGN KEY (`cidade_id`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `fk_pessoa_cidade1` FOREIGN KEY (`cidade_id`) REFERENCES `cidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pessoa_tipo_sangue1` FOREIGN KEY (`tipo_sangue_idtipo_sangue`) REFERENCES `tipo_sangue` (`idtipo_sangue`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `solicita_doacao`
--
ALTER TABLE `solicita_doacao`
  ADD CONSTRAINT `fk_solicita_doacao_local_doacao1` FOREIGN KEY (`local_doacao_idlocal_doacao`) REFERENCES `local_doacao` (`idlocal_doacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicita_doacao_tipo_sangue1` FOREIGN KEY (`tipo_sangue_idtipo_sangue`) REFERENCES `tipo_sangue` (`idtipo_sangue`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
