-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Ago-2019 às 16:14
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_g4`
--
CREATE DATABASE IF NOT EXISTS `db_g4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_g4`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `matches`
--

DROP TABLE IF EXISTS `matches`;
CREATE TABLE `matches` (
  `login1` varchar(15) NOT NULL,
  `login2` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `nome` varchar(40) NOT NULL,
  `matricula` int(12) NOT NULL,
  `dtNascimento` varchar(10) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `telefone` bigint(11) NOT NULL,
  `login` varchar(15) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `imagem` varchar(60) DEFAULT NULL,
  `resp1` int(1) NOT NULL,
  `resp2` int(1) NOT NULL,
  `resp3` int(1) NOT NULL,
  `resp4` int(1) NOT NULL,
  `resp5` int(1) NOT NULL,
  `resp6` int(1) NOT NULL,
  `resp7` int(1) NOT NULL,
  `resp8` int(1) NOT NULL,
  `resp9` int(1) NOT NULL,
  `resp10` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `matches`
--
ALTER TABLE `matches`
  ADD KEY `rel1` (`login1`),
  ADD KEY `rel2` (`login2`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`login`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `rel1` FOREIGN KEY (`login1`) REFERENCES `usuario` (`login`),
  ADD CONSTRAINT `rel2` FOREIGN KEY (`login2`) REFERENCES `usuario` (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
