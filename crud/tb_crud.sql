-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Ago-2022 às 17:10
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tb_crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_crud_cliente`
--

CREATE TABLE `tb_crud_cliente` (
  `id` int(11) NOT NULL,
  `NomeCliente` varchar(30) NOT NULL,
  `SobreNomeCliente` varchar(150) NOT NULL,
  `RGCliente` varchar(20) NOT NULL,
  `CPFCliente` varchar(20) NOT NULL,
  `LogradouroCliente` varchar(150) NOT NULL,
  `NumeroCliente` varchar(10) NOT NULL,
  `ComplementoCliente` varchar(10) NOT NULL,
  `BairroCliente` varchar(30) NOT NULL,
  `CEPCliente` varchar(15) NOT NULL,
  `UFCliente` varchar(2) NOT NULL,
  `CidadeCliente` varchar(50) NOT NULL,
  `TelefoneCliente` varchar(20) NOT NULL,
  `EmailCliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_crud_cliente`
--

INSERT INTO `tb_crud_cliente` (`id`, `NomeCliente`, `SobreNomeCliente`, `RGCliente`, `CPFCliente`, `LogradouroCliente`, `NumeroCliente`, `ComplementoCliente`, `BairroCliente`, `CEPCliente`, `UFCliente`, `CidadeCliente`, `TelefoneCliente`, `EmailCliente`) VALUES
(1, 'Gustavo', 'Almeida da Silva', '12-345.678-9', '123.456.789-90', 'Av Paulista', '102', 'APTO 21B', 'Bela Vista', '00000-000', 'SP', 'São Paulo', '11 4002-8922', 'Sla@gmail.com'),
(2, 'Gustavo', 'Almeida da Silva', '12-345.678-9', '123.456.789-90', 'Av Paulista', '102', 'APTO 21B', 'Bela Vista', '00000-000', 'SP', 'São Paulo', '11 4002-8922', 'Seila@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_crud_cliente`
--
ALTER TABLE `tb_crud_cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EmailCliente` (`EmailCliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_crud_cliente`
--
ALTER TABLE `tb_crud_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
