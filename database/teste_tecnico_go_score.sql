-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 29-Jul-2017 às 19:54
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste_tecnico_go_score`
--
CREATE DATABASE IF NOT EXISTS `teste_tecnico_go_score` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `teste_tecnico_go_score`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro_emprestados`
--

CREATE TABLE IF NOT EXISTS `livro_emprestados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `livro_nome` varchar(250) NOT NULL,
  `livro_usuario` varchar(100) NOT NULL,
  `livro_tipo_usuario` int(11) NOT NULL,
  `livro_data_emprestimo` varchar(10) NOT NULL,
  `livro_data_entrega` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livro_emprestados`
--

INSERT INTO `livro_emprestados` VALUES
(22, 'Engernharia de Software', 'Cícero Moura', 1, '29/07/2017', '01/08/2017'),
(23, 'Filosofia para Grego', 'Radolfo Cesár', 1, '29/07/2017', '01/08/2017'),
(24, 'Santos A história', 'Joaquin Eu', 1, '29/07/2017', '01/08/2017');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriz`
--

CREATE TABLE IF NOT EXISTS `matriz` (
  `matriz_posicao` varchar(2) NOT NULL,
  `matriz_conteudo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `matriz`
--

INSERT INTO `matriz` VALUES
('00', 9291),
('01', 41398),
('02', 75871),
('03', 23338),
('04', 73397),
('10', 90746),
('11', 6028),
('12', 97181),
('13', 65720),
('14', 88761),
('20', 58527),
('21', 42923),
('22', 54516),
('23', 58242),
('24', 65465),
('30', 26881),
('31', 32375),
('32', 38012),
('33', 7923),
('34', 91258),
('40', 43034),
('41', 41304),
('42', 71896),
('43', 72809),
('44', 20675);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_principal`
--

CREATE TABLE IF NOT EXISTS `menu_principal` (
  `menu_id` int(11) NOT NULL,
  `menu_descricao` varchar(150) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menu_principal`
--

INSERT INTO `menu_principal` VALUES
(1, 'Problema 1'),
(2, 'Problema 2'),
(3, 'Problema 3'),
(4, 'Problema 4'),
(5, 'Problema 5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `numeros_sequencia_fibonacci`
--

CREATE TABLE IF NOT EXISTS `numeros_sequencia_fibonacci` (
  `numeros_id` int(11) NOT NULL AUTO_INCREMENT,
  `numeros_sequencia_aleatoria` varchar(255) NOT NULL,
  `numeros_sequencia_fibonacci` varchar(255) NOT NULL,
  PRIMARY KEY (`numeros_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `numeros_sequencia_fibonacci`
--

INSERT INTO `numeros_sequencia_fibonacci` VALUES
(7, '1,13,55,21,5,83', '1, 5, 13, 21, 55'),
(8, '1,13,55,21,5,83', '1, 5, 13, 21, 55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa_alturas`
--

CREATE TABLE IF NOT EXISTS `pessoa_alturas` (
  `pessoa_id` int(11) NOT NULL AUTO_INCREMENT,
  `pessoa_nome` varchar(65) NOT NULL,
  `pessoa_altura_m` double NOT NULL,
  `pessoa_crescimento_cm` int(11) NOT NULL,
  PRIMARY KEY (`pessoa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa_alturas`
--

INSERT INTO `pessoa_alturas` VALUES
(1, 'Chico', 1.5, 2),
(2, 'Juca', 1.1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `repete_palavras`
--

CREATE TABLE IF NOT EXISTS `repete_palavras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `palavra_original` varchar(100) NOT NULL,
  `palavra_repetida` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `repete_palavras`
--

INSERT INTO `repete_palavras` VALUES
(2, 'sonho', ' SONHO, SONHO SONHO, SONHO SONHO SONHO, SONHO SONHO SONHO SONHO'),
(3, 'Pamonha', ' PAMONHA, PAMONHA PAMONHA, PAMONHA PAMONHA PAMONHA, PAMONHA PAMONHA PAMONHA PAMONHA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
