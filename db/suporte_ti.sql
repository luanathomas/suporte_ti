-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Mar-2021 às 00:23
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

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
CREATE DATABASE IF NOT EXISTS `suporte_ti` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `suporte_ti`;

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

--
-- Extraindo dados da tabela `caso`
--

INSERT INTO `caso` (`ID_caso`, `ID_equipamento`, `ID_problema_primario`, `ID_problema_secundario`, `ID_solucao`) VALUES
(1, 6, 5, 5, 5),
(3, 7, 6, 6, 6),
(4, 1, 1, 1, 1),
(5, 4, 3, 3, 3),
(6, 5, 2, 6, 6),
(7, 8, 7, 7, 6),
(8, 1, 8, 7, 10),
(9, 1, 3, 3, 11),
(10, 4, 3, 6, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `ID_equipamento` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`ID_equipamento`, `nome`) VALUES
(1, 'Notebook'),
(2, 'Computador'),
(3, 'Impressora'),
(4, 'Monitor'),
(5, 'Teclado'),
(6, 'Mouse'),
(7, 'Roteador'),
(8, 'Fone de ouvido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `problema_primario`
--

CREATE TABLE `problema_primario` (
  `ID_problema_primario` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `problema_primario`
--

INSERT INTO `problema_primario` (`ID_problema_primario`, `nome`) VALUES
(1, 'O notebook desligou sozinho'),
(2, 'O teclado parou de funcionar'),
(3, 'O monitor não liga mais'),
(4, 'As folhas saem manchadas'),
(5, 'O mouse parou de funcionar'),
(6, 'O wifi parou de funcionar'),
(7, 'Parou de funcionar no lado direito'),
(8, 'A rede não funciona');

-- --------------------------------------------------------

--
-- Estrutura da tabela `problema_secundario`
--

CREATE TABLE `problema_secundario` (
  `ID_problema_secundario` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `problema_secundario`
--

INSERT INTO `problema_secundario` (`ID_problema_secundario`, `nome`) VALUES
(1, 'Está conectado na energia e não liga mais'),
(2, 'O cabo está aberto'),
(3, 'Desligou sozinho enquanto estava trabalhando'),
(4, 'A tinta não fixa na folha e mancha'),
(5, 'Meu mouse sem fio parou de funcionar enquanto eu trabalhava'),
(6, 'As luzes do equipamento estão apagadas'),
(7, 'Estava usando-o normalmente em uma videoconferência');

-- --------------------------------------------------------

--
-- Estrutura da tabela `solucao`
--

CREATE TABLE `solucao` (
  `ID_solucao` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `solucao`
--

INSERT INTO `solucao` (`ID_solucao`, `nome`) VALUES
(1, 'Procurar uma assistência técnica. Provavelmente algum componente interno está danificado.'),
(2, 'Trocar por um teclado novo'),
(3, 'Verificar se todos os cabos estão conectados corretamente'),
(4, 'Solicitar que o técnico venha substituir o fusor da impressora'),
(5, 'Troque a pilha/bateria do mouse'),
(6, 'Solicitar a troca do equipamento para o setor de TI'),
(10, 'Reinicie o equipamento'),
(11, 'Verificar se o cabo de energia está conectado ao equipamento');

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
  MODIFY `ID_caso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `ID_equipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `problema_primario`
--
ALTER TABLE `problema_primario`
  MODIFY `ID_problema_primario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `problema_secundario`
--
ALTER TABLE `problema_secundario`
  MODIFY `ID_problema_secundario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `solucao`
--
ALTER TABLE `solucao`
  MODIFY `ID_solucao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
