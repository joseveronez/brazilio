-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2017 às 00:59
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
-- Estrutura da tabela `trabalhe_conosco`
--

CREATE TABLE `trabalhe_conosco` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `titulo_banner` varchar(100) NOT NULL,
  `titulo_fale_conosco` varchar(100) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `trabalhe_conosco`
--

INSERT INTO `trabalhe_conosco` (`id`, `banner`, `titulo_banner`, `titulo_fale_conosco`, `conteudo`) VALUES
(1, 'banner-contato_1.jpg', 'Trabalhe conosco', 'Trabalhe conosco', '<p>Quer fazer parte da nossa equipe?</p>\r\n<p>Inicie o processo seletivo enviando seus dados e curr&iacute;culo.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trabalhe_conosco`
--
ALTER TABLE `trabalhe_conosco`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trabalhe_conosco`
--
ALTER TABLE `trabalhe_conosco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
