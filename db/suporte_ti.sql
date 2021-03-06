-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Mar-2021 às 19:41
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
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `ID` int(11) NOT NULL,
  `Valor` int(11) NOT NULL,
  `Problema` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `problema_primario`
--

CREATE TABLE `problema_primario` (
  `ID` int(11) NOT NULL,
  `Valor` int(11) DEFAULT NULL,
  `Problema` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `problema_secundario`
--

CREATE TABLE `problema_secundario` (
  `ID` int(11) NOT NULL,
  `Valor` int(11) DEFAULT NULL,
  `Problema` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solucoes`
--

CREATE TABLE `solucoes` (
  `ID` int(11) NOT NULL,
  `Valor` int(11) DEFAULT NULL,
  `Resolucao` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `problema_primario`
--
ALTER TABLE `problema_primario`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Valor` (`Valor`);

--
-- Índices para tabela `problema_secundario`
--
ALTER TABLE `problema_secundario`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Valor` (`Valor`);

--
-- Índices para tabela `solucoes`
--
ALTER TABLE `solucoes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Valor` (`Valor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `problema_primario`
--
ALTER TABLE `problema_primario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `problema_secundario`
--
ALTER TABLE `problema_secundario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `solucoes`
--
ALTER TABLE `solucoes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `problema_primario`
--
ALTER TABLE `problema_primario`
  ADD CONSTRAINT `problema_primario_ibfk_1` FOREIGN KEY (`Valor`) REFERENCES `equipamentos` (`ID`);

--
-- Limitadores para a tabela `problema_secundario`
--
ALTER TABLE `problema_secundario`
  ADD CONSTRAINT `problema_secundario_ibfk_1` FOREIGN KEY (`Valor`) REFERENCES `equipamentos` (`ID`);

--
-- Limitadores para a tabela `solucoes`
--
ALTER TABLE `solucoes`
  ADD CONSTRAINT `solucoes_ibfk_1` FOREIGN KEY (`Valor`) REFERENCES `equipamentos` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
