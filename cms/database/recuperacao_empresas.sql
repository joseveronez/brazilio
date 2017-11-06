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
-- Estrutura da tabela `recuperacao_empresas`
--

CREATE TABLE `recuperacao_empresas` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `recuperacao_empresas`
--

INSERT INTO `recuperacao_empresas` (`id`, `slug`, `titulo`, `texto`) VALUES
(2, 'solo-vivo', 'Solo Vivo Indústria e Comércio de Fertilizantes Ltda.', '<p>Recupera&ccedil;&atilde;o Judicial:<br />Solo Vivo Ind&uacute;stria e Com&eacute;rcio de Fertilizantes Ltda.<br />Autos n.&ordm; 4321/2007 &ndash; Vara C&iacute;vel do Foro Regional de Arauc&aacute;ria da Comarca da Regi&atilde;o Metropolitana de Curitiba &ndash; PR<br />Administradora Judicial: Brazilio Bacellar Neto e Advogados<br /><br />Abaixo as principais pe&ccedil;as digitalizadas dos autos de Recupera&ccedil;&atilde;o Judicial:</p>'),
(3, 'felicita-colchoes-ltda', 'Felicitá Colchões Ltda.', '<p>Recupera&ccedil;&atilde;o Judicial:<br />Felicit&aacute; Colch&otilde;es Ltda.<br />Autos n.&ordm; 22.404/0000 &ndash; 3&ordf; Vara da Fazenda P&uacute;blica, Fal&ecirc;ncias e Recupera&ccedil;&atilde;o de Empresas do Foro Central da Comarca da Regi&atilde;o Metropolitana de Curitiba &ndash; PR<br />Administradora Judicial: Brazilio Bacellar Neto e Advogados<br /><br />Abaixo as principais pe&ccedil;as digitalizadas dos autos de Recupera&ccedil;&atilde;o Judicial:</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recuperacao_empresas`
--
ALTER TABLE `recuperacao_empresas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recuperacao_empresas`
--
ALTER TABLE `recuperacao_empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
