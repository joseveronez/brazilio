-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2017 às 19:05
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
-- Estrutura da tabela `pagina_principal`
--

CREATE TABLE `pagina_principal` (
  `id` int(11) NOT NULL,
  `texto_empresa` text NOT NULL,
  `titulo_empresa` varchar(255) NOT NULL,
  `link_empresa` varchar(255) NOT NULL,
  `titulo_areas` varchar(255) NOT NULL,
  `texto_areas` text NOT NULL,
  `link_areas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `pagina_principal`
--

INSERT INTO `pagina_principal` (`id`, `texto_empresa`, `titulo_empresa`, `link_empresa`, `titulo_areas`, `texto_areas`, `link_areas`) VALUES
(1, '<p><strong><span class=\"Bold\">A Brazilio Bacellar, Shirai Advogados</span></strong>&nbsp;&eacute; uma sociedade profissional experiente, com atua&ccedil;&atilde;o preventiva e contenciosa nos campos do direito comercial, civil, societ&aacute;rio, administrativo, trabalhista e tribut&aacute;rio, com enfoque na atividade empresarial.</p>', 'A Empresa', '', 'Áreas de atuação', '<p>A qualidade dos servi&ccedil;os advocat&iacute;cios &eacute; refor&ccedil;ada pela parceria com profissionais habilitados e em constante atualiza&ccedil;&atilde;o, capazes de auxiliar na solu&ccedil;&atilde;o de quest&otilde;es relacionadas &agrave;s mais diversas &aacute;reas do Direito.</p>', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pagina_principal`
--
ALTER TABLE `pagina_principal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pagina_principal`
--
ALTER TABLE `pagina_principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
