-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27/02/2025 às 11:13
-- Versão do servidor: 8.0.41
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `americanmiles`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
CREATE TABLE IF NOT EXISTS `carrinho` (
  `id_carrinho` int NOT NULL AUTO_INCREMENT,
  `nome_país` varchar(45) NOT NULL,
  `tipo_passagem` varchar(8) NOT NULL,
  `valor_passagem` float NOT NULL,
  `dataIda` date DEFAULT NULL,
  `id_usuário` int NOT NULL,
  `qtdDias` int DEFAULT NULL,
  `nome_hotel` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_carrinho`),
  KEY `id_usuário` (`id_usuário`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cartão_crédito`
--

DROP TABLE IF EXISTS `cartão_crédito`;
CREATE TABLE IF NOT EXISTS `cartão_crédito` (
  `cvv` int NOT NULL,
  `nome_no_cartão` varchar(70) NOT NULL,
  `qtdParcelas` int NOT NULL,
  `número_cartão` int NOT NULL,
  `id_compra` int NOT NULL,
  PRIMARY KEY (`cvv`),
  KEY `id_compra` (`id_compra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_usuário` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) NOT NULL,
  `senha` int NOT NULL,
  `email` varchar(70) NOT NULL,
  `foto` blob,
  PRIMARY KEY (`id_usuário`),
  UNIQUE KEY `senha` (`senha`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id_usuário`, `nome`, `senha`, `email`, `foto`) VALUES
(3, 'Diana de Jesus Souza', 12345, 'dianasouza.0798@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `id_compra` int NOT NULL AUTO_INCREMENT,
  `nome_passageiro` varchar(70) NOT NULL,
  `valor_total` float NOT NULL,
  `id_carrinho` int NOT NULL,
  `id_usuário` int NOT NULL,
  PRIMARY KEY (`id_compra`),
  KEY `id_carrinho` (`id_carrinho`),
  KEY `idUsuário` (`id_usuário`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pix`
--

DROP TABLE IF EXISTS `pix`;
CREATE TABLE IF NOT EXISTS `pix` (
  `código_pix` int NOT NULL,
  `nome_destinatário` varchar(70) NOT NULL,
  `id_compra` int NOT NULL,
  PRIMARY KEY (`código_pix`),
  KEY `id_compra` (`id_compra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `id_usuário` FOREIGN KEY (`id_usuário`) REFERENCES `cliente` (`id_usuário`);

--
-- Restrições para tabelas `cartão_crédito`
--
ALTER TABLE `cartão_crédito`
  ADD CONSTRAINT `cartão_crédito_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`);

--
-- Restrições para tabelas `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `idUsuário` FOREIGN KEY (`id_usuário`) REFERENCES `cliente` (`id_usuário`);

--
-- Restrições para tabelas `pix`
--
ALTER TABLE `pix`
  ADD CONSTRAINT `pix_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
