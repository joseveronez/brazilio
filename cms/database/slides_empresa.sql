-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2017 às 16:58
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
-- Estrutura da tabela `slides_empresa`
--

CREATE TABLE `slides_empresa` (
  `id` int(11) NOT NULL,
  `slider` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `posicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `slides_empresa`
--

INSERT INTO `slides_empresa` (`id`, `slider`, `imagem`, `posicao`) VALUES
(1, 3, 'brazilio-bacellar-advogados-01.jpg', 1),
(2, 3, 'brazilio-bacellar-advogados-02.jpg', 2),
(3, 3, 'brazilio-bacellar-advogados-03.jpg', 3),
(4, 1, 'brazilio-bacellar-advogados-10.jpg', 1),
(5, 1, 'brazilio-bacellar-advogados-09.jpg', 2),
(6, 1, 'brazilio-bacellar-advogados-08.jpg', 3),
(7, 2, 'brazilio-bacellar-advogados-07.jpg', 1),
(8, 2, 'brazilio-bacellar-advogados-06.jpg', 2),
(9, 2, 'brazilio-bacellar-advogados-05.jpg', 3),
(11, 2, 'brazilio-bacellar-advogados-04_1.jpg', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slides_empresa`
--
ALTER TABLE `slides_empresa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slides_empresa`
--
ALTER TABLE `slides_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
