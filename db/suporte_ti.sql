-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Mar-2021 às 21:53
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `suporte_ti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caso`
--

CREATE TABLE `caso` (
  `ID_caso` int(11) NOT NULL,
  `ID_equipamento` int(11) DEFAULT NULL,
  `ID_problema_primario` int(11) DEFAULT NULL,
  `ID_problema_secundario` int(11) DEFAULT NULL,
  `ID_solucao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `ID_equipamento` int(11) NOT NULL,
  `valor` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`ID_equipamento`, `valor`, `nome`) VALUES
(1, 1, 'notebook'),
(2, 2, 'computador'),
(3, 3, 'impressora'),
(4, 4, 'monitor'),
(5, 5, 'teclado'),
(6, 6, 'mouse');

-- --------------------------------------------------------

--
-- Estrutura da tabela `problema_primario`
--

CREATE TABLE `problema_primario` (
  `ID_problema_primario` int(11) NOT NULL,
  `valor` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `problema_secundario`
--

CREATE TABLE `problema_secundario` (
  `ID_problema_secundario` int(11) NOT NULL,
  `valor` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solucao`
--

CREATE TABLE `solucao` (
  `ID_solucao` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `caso`
--
ALTER TABLE `caso`
  ADD PRIMARY KEY (`ID_caso`),
  ADD KEY `ID_equipamento` (`ID_equipamento`),
  ADD KEY `ID_problema_primario` (`ID_problema_primario`),
  ADD KEY `ID_problema_secundario` (`ID_problema_secundario`),
  ADD KEY `ID_solucao` (`ID_solucao`);

--
-- Índices para tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`ID_equipamento`);

--
-- Índices para tabela `problema_primario`
--
ALTER TABLE `problema_primario`
  ADD PRIMARY KEY (`ID_problema_primario`);

--
-- Índices para tabela `problema_secundario`
--
ALTER TABLE `problema_secundario`
  ADD PRIMARY KEY (`ID_problema_secundario`);

--
-- Índices para tabela `solucao`
--
ALTER TABLE `solucao`
  ADD PRIMARY KEY (`ID_solucao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caso`
--
ALTER TABLE `caso`
  MODIFY `ID_caso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `ID_equipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `problema_primario`
--
ALTER TABLE `problema_primario`
  MODIFY `ID_problema_primario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `problema_secundario`
--
ALTER TABLE `problema_secundario`
  MODIFY `ID_problema_secundario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `solucao`
--
ALTER TABLE `solucao`
  MODIFY `ID_solucao` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `caso`
--
ALTER TABLE `caso`
  ADD CONSTRAINT `caso_ibfk_1` FOREIGN KEY (`ID_equipamento`) REFERENCES `equipamento` (`ID_equipamento`),
  ADD CONSTRAINT `caso_ibfk_2` FOREIGN KEY (`ID_problema_primario`) REFERENCES `problema_primario` (`ID_problema_primario`),
  ADD CONSTRAINT `caso_ibfk_3` FOREIGN KEY (`ID_problema_secundario`) REFERENCES `problema_secundario` (`ID_problema_secundario`),
  ADD CONSTRAINT `caso_ibfk_4` FOREIGN KEY (`ID_solucao`) REFERENCES `solucao` (`ID_solucao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
