create database teste;

use teste;

CREATE TABLE IF NOT EXISTS `inscricao` (
  `id` decimal(20,0) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `evento` varchar(50) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `checkin` bit(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `cliente` (
  `cpf` varchar(20) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(20) DEFAULT NULL,
  `dataNascimento` datetime DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `evento` (
  `id` decimal(20,0) NOT NULL,
  `evento` varchar(100) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `preco` double(7,2) DEFAULT NULL,
  `validacao` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `evento` (`id`, `evento`, `data`, `endereco`, `preco`, `validacao`) VALUES
('1003', 'BARCA FLAME 2018', '2018-03-30 00:00:00', 'ESTÂNCIA JEQUITIBÁ (PIRATININGA)', 150.00, 0),
('1004', 'CIRILO', '2018-03-31 00:00:00', 'ESTANCIA JEQUETIBA', 30.00, 0),
('1005', 'SÁBADO DIA TODO', '2018-03-31 00:00:00', 'ESTANCIA JEQUITIBA', 75.00, 0),
('1006', 'AFTER RETRO', '2018-05-19 00:00:00', 'AV GETÚLIO VARGAS 7-50', 20.00, 1);