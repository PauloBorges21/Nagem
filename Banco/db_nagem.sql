-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Set-2023 às 20:06
-- Versão do servidor: 8.0.31
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_nagem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cnpj` char(14) COLLATE utf8mb4_general_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `numero` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `estado` char(2) COLLATE utf8mb4_general_ci NOT NULL,
  `cep` char(8) COLLATE utf8mb4_general_ci NOT NULL,
  `ativo` bit(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cnpj` (`cnpj`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cnpj`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `ativo`) VALUES
(1, 'teste', '12345677888994', 'endereço teste', '44', 'teste bairro', 'teste cidade', 'PE', '03977009', b'1'),
(2, 'PAULO SILVA BORGES', '32131231232131', 'Rua Jim Backus', '34', 'Fazenda da Juta', 'São Paulo', 'SP', '03977005', b'1'),
(3, 'Rai', '43534534534534', 'Rua Cotoxó', '88', 'Perdizes', 'São Paulo', 'SP', '05021000', b'1'),
(4, 'JJ', '62163129836192', 'Rua Henrique de Leva', '456', 'Fazenda da Juta', 'São Paulo', 'SP', '03977009', b'1'),
(5, 'Veronica Teste', '65654654645645', 'Rua Inácio Monteiro', '888', 'Jardim São Paulo(Zona Leste)', 'São Paulo', 'SP', '08490000', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

DROP TABLE IF EXISTS `contatos`;
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int NOT NULL,
  `nome_contato` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_contato` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone_contato` varchar(18) COLLATE utf8mb4_general_ci NOT NULL,
  `cpf` char(11) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `id_cliente`, `nome_contato`, `email_contato`, `telefone_contato`, `cpf`) VALUES
(1, 3, 'Pedro', 'teste@nagem.com', '1132423423', '31231231231'),
(2, 2, 'Pedro', 'teste@nagem.com', '1132423423', '31231231231'),
(3, 3, 'Paulo', 'paulo@nagem.com', '1232132131', '21342342314'),
(4, 5, 'veronica', 'veronicapessoa@teste.com', '1123123123', '45435345345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
