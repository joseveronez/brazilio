-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2017 às 19:04
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
-- Estrutura da tabela `slides_home`
--

CREATE TABLE `slides_home` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `chamada` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `slides_home`
--

INSERT INTO `slides_home` (`id`, `imagem`, `titulo`, `chamada`, `link`) VALUES
(1, 'ban1_1.jpg', 'Brazilio Bacellar,<br>SHIRAI Advogados', '<p>a solu&ccedil;&atilde;o dos conflitos de interesses preventivamente,<br /> evitando o desgaste e a morosidade do Poder Judici&aacute;rio.</p>', 'sobre'),
(2, 'ban2.jpg', 'Equipe experiente', '<p>Profissionais especialistas que atuam h&aacute; anos no mercado.</p>', 'equipe'),
(3, 'ban3.jpg', 'Diversas áreas de atuação', '<p>O escrit&oacute;rio est&aacute; preparado para atender casos de todas as &aacute;reas.</p>', 'servicos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slides_home`
--
ALTER TABLE `slides_home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slides_home`
--
ALTER TABLE `slides_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
