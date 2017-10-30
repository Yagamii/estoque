-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Out-2017 às 21:56
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `brinquedo`
--

CREATE TABLE `brinquedo` (
  `id_brinquedo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` float(7,2) NOT NULL,
  `preco_promo` float(7,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `encomendas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `caminha`
--

CREATE TABLE `caminha` (
  `id_caminha` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` float(7,2) NOT NULL,
  `preco_promo` float(7,2) NOT NULL,
  `encomendas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caminha`
--

INSERT INTO `caminha` (`id_caminha`, `nome`, `descricao`, `quantidade`, `preco`, `preco_promo`, `encomendas`) VALUES
(1, 'Caminha 2', 'teste 2', 22, 10.00, 7.00, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comedouro`
--

CREATE TABLE `comedouro` (
  `id_comedouro` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` float(7,2) NOT NULL,
  `preco_promo` float(7,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `encomendas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `outros`
--

CREATE TABLE `outros` (
  `id_outros` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` float(7,2) NOT NULL,
  `preco_promo` float(7,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `encomendas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `outros`
--

INSERT INTO `outros` (`id_outros`, `nome`, `descricao`, `quantidade`, `preco`, `preco_promo`, `estoque`, `encomendas`) VALUES
(2, 'outros 2', 'teste 2', 10, 16.00, 15.00, 66, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `roupa`
--

CREATE TABLE `roupa` (
  `id_roupa` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` float(7,2) NOT NULL,
  `preco_promo` float(7,2) NOT NULL,
  `encomendas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `roupa`
--

INSERT INTO `roupa` (`id_roupa`, `nome`, `descricao`, `quantidade`, `preco`, `preco_promo`, `encomendas`) VALUES
(1, 'Roupa gato 1 teste', 'teste', 20, 20.00, 17.00, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brinquedo`
--
ALTER TABLE `brinquedo`
  ADD PRIMARY KEY (`id_brinquedo`);

--
-- Indexes for table `caminha`
--
ALTER TABLE `caminha`
  ADD PRIMARY KEY (`id_caminha`);

--
-- Indexes for table `comedouro`
--
ALTER TABLE `comedouro`
  ADD PRIMARY KEY (`id_comedouro`);

--
-- Indexes for table `outros`
--
ALTER TABLE `outros`
  ADD PRIMARY KEY (`id_outros`);

--
-- Indexes for table `roupa`
--
ALTER TABLE `roupa`
  ADD PRIMARY KEY (`id_roupa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brinquedo`
--
ALTER TABLE `brinquedo`
  MODIFY `id_brinquedo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `caminha`
--
ALTER TABLE `caminha`
  MODIFY `id_caminha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comedouro`
--
ALTER TABLE `comedouro`
  MODIFY `id_comedouro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `outros`
--
ALTER TABLE `outros`
  MODIFY `id_outros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roupa`
--
ALTER TABLE `roupa`
  MODIFY `id_roupa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
