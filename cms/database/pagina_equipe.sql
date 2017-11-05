-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2017 às 14:28
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
-- Estrutura da tabela `pagina_equipe`
--

CREATE TABLE `pagina_equipe` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `icone` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `titulo_contato` varchar(255) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pagina_equipe`
--

INSERT INTO `pagina_equipe` (`id`, `titulo`, `icone`, `banner`, `titulo_contato`, `texto`) VALUES
(1, 'Equipe', 'balanca_1.png', 'banner-equipe.jpg', 'balanca_1.png', '<p>A equipe de profissionais conta com advogados em constante atualiza&ccedil;&atilde;o, habilitados a atender empresas nacionais e internacionais, com conhecimento de l&iacute;nguas estrangeiras.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pagina_equipe`
--
ALTER TABLE `pagina_equipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pagina_equipe`
--
ALTER TABLE `pagina_equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
