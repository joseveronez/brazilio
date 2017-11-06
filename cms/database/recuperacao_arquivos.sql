-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2017 às 10:01
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comberwe_brazilio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `recuperacao_arquivos`
--

CREATE TABLE `recuperacao_arquivos` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recuperacao_arquivos`
--

INSERT INTO `recuperacao_arquivos` (`id`, `id_empresa`, `titulo`, `arquivo`) VALUES
(3, 2, 'Decisão que defere o processamento da Recuperação e nomeia o Administrador Judicial', 'solo_arquivo02.pdf'),
(4, 2, 'Relação de Credores', 'solo_arquivo03.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recuperacao_arquivos`
--
ALTER TABLE `recuperacao_arquivos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recuperacao_arquivos`
--
ALTER TABLE `recuperacao_arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
