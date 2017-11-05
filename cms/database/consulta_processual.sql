-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2017 às 00:58
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
-- Estrutura da tabela `consulta_processual`
--

CREATE TABLE `consulta_processual` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consulta_processual`
--

INSERT INTO `consulta_processual` (`id`, `banner`, `titulo`, `conteudo`) VALUES
(1, 'banner-contato_2.jpg', 'Consulta Processual', '<p>Esta &aacute;rea &eacute; restrita para clientes da Brazilio Bacellar Neto e Advogados.<br />Aqui &eacute; poss&iacute;vel consultar os andamentos processuais e as imagens digitalizadas dos processos sob nossa responsabilidade.<br />Para visualiza&ccedil;&atilde;o das imagens &eacute; necess&aacute;rio a pr&eacute;via instala&ccedil;&atilde;o do Adobe Acrobat Reader.</p>\r\n<p><span style=\"color: #000000;\"><strong><a class=\"preto-fonte\" style=\"color: #000000;\" href=\"http://braziliobacellar.no-ip.org/cpjw.cgi?pesq\" target=\"_blank\" rel=\"noopener noreferrer\">Se voc&ecirc; &eacute; cliente e j&aacute; possui um login e senha clique aqui</a></strong></span></p>\r\n<p>Se voc&ecirc; n&atilde;o possui login, envie-nos um e-mail solicitando acesso.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consulta_processual`
--
ALTER TABLE `consulta_processual`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consulta_processual`
--
ALTER TABLE `consulta_processual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
