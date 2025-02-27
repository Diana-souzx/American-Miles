-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27/02/2025 às 20:23
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
  `id_passagem` int NOT NULL,
  `id_pacote` int NOT NULL,
  PRIMARY KEY (`id_carrinho`),
  KEY `id_usuário` (`id_usuário`),
  KEY `id_passagem` (`id_passagem`),
  KEY `id_pacote` (`id_pacote`)
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id_usuário`, `nome`, `senha`, `email`, `foto`) VALUES
(3, 'Diana de Jesus Souza', 12345, 'dianasouza.0798@gmail.com', NULL),
(4, 'Ana Isabele ', 1234567, 'anaisabelemouramelo@gmail.com', NULL),
(6, 'Alessa', 212121, 'alessaoliveira@gmail.com', NULL);

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
-- Estrutura para tabela `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `id_hotel` int NOT NULL AUTO_INCREMENT,
  `nome_hotel` varchar(60) NOT NULL,
  `endereço` varchar(70) NOT NULL,
  `valor_diária` float NOT NULL,
  PRIMARY KEY (`id_hotel`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nome_hotel`, `endereço`, `valor_diária`) VALUES
(1, 'Eurobuilding Hotel Boutique Buenos Aires', 'Calle Lima 187, Monserrat, Buenos Aires, Argentina', 588),
(2, 'Sheraton Lima Historic Center', 'Paseo de la República 170, Lima 1', 500),
(3, 'Hotel Magnolia Santiago', 'Paseo Huerfanos 539 8320150 Santiago', 2214),
(4, 'Radisson Montevideo Victoria Plaza Hotel', 'Pza. Independencia 759, Montevidéu 11100', 924),
(5, ' La Culta, Centro Cultural', 'Calle Beni 31, Sucre 0059', 194),
(6, ' Hotel Cayena Caracas', 'Av. Don Eugenio Mendoza, La Castellana, Caracas 1060', 2723);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacote`
--

DROP TABLE IF EXISTS `pacote`;
CREATE TABLE IF NOT EXISTS `pacote` (
  `id_pacote` int NOT NULL AUTO_INCREMENT,
  `nome_pais` varchar(45) NOT NULL,
  `valor_pacote` float DEFAULT NULL,
  `dataIda` date DEFAULT NULL,
  `qtdDias` int NOT NULL,
  `id_hotel` int NOT NULL,
  PRIMARY KEY (`id_pacote`),
  KEY `id_hotel` (`id_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `passagem`
--

DROP TABLE IF EXISTS `passagem`;
CREATE TABLE IF NOT EXISTS `passagem` (
  `id_passagem` int NOT NULL AUTO_INCREMENT,
  `nome_pais` varchar(45) NOT NULL,
  `valor_passagem` float DEFAULT NULL,
  `dataIda` date DEFAULT NULL,
  PRIMARY KEY (`id_passagem`)
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
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id_passagem`) REFERENCES `passagem` (`id_passagem`),
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`id_pacote`) REFERENCES `pacote` (`id_pacote`),
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
-- Restrições para tabelas `pacote`
--
ALTER TABLE `pacote`
  ADD CONSTRAINT `pacote_ibfk_1` FOREIGN KEY (`id_hotel`) REFERENCES `hotel` (`id_hotel`);

--
-- Restrições para tabelas `pix`
--
ALTER TABLE `pix`
  ADD CONSTRAINT `pix_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
