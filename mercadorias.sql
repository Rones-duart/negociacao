-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Maio-2016 às 17:12
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mercadorias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercadorias`
--

CREATE TABLE IF NOT EXISTS `mercadorias` (
`id_mercadoria` int(11) NOT NULL,
  `cod_mercadoria` int(20) NOT NULL,
  `nome_mercadoria` varchar(30) NOT NULL,
  `tipo_mercadoria` varchar(30) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `preco_mercadoria` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mercadorias`
--

INSERT INTO `mercadorias` (`id_mercadoria`, `cod_mercadoria`, `nome_mercadoria`, `tipo_mercadoria`, `quantidade`, `preco_mercadoria`) VALUES
(1, 1234567890, 'teclado', 'Eletrodomesticos', 40, 45),
(2, 987654321, 'carro', 'automotivo', 2, 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
  `tipo_mercadoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`tipo_mercadoria`) VALUES
('automotivo'),
('Eletrodomesticos'),
('Eletronicos'),
('Moveis'),
('roupas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mercadorias`
--
ALTER TABLE `mercadorias`
 ADD PRIMARY KEY (`id_mercadoria`), ADD KEY `tipo_mercadoria` (`tipo_mercadoria`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
 ADD PRIMARY KEY (`tipo_mercadoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mercadorias`
--
ALTER TABLE `mercadorias`
MODIFY `id_mercadoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
