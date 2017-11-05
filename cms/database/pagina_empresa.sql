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
-- Estrutura da tabela `pagina_empresa`
--

CREATE TABLE `pagina_empresa` (
  `id` int(11) NOT NULL,
  `banner_topo` varchar(255) NOT NULL,
  `icone` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `texto_carousel` text NOT NULL,
  `titulo_diferenciais` varchar(255) NOT NULL,
  `texto_diferenciais` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `pagina_empresa`
--

INSERT INTO `pagina_empresa` (`id`, `banner_topo`, `icone`, `titulo`, `texto`, `texto_carousel`, `titulo_diferenciais`, `texto_diferenciais`) VALUES
(1, 'banner-servicos.jpg', 'balanca.png', 'A Empresa', '<p class=\"text-justify size14 letter-spacing1 Medium\"><strong>A Brazilio Bacellar, Shirai Advogados</strong>&nbsp;&eacute; uma sociedade profissional experiente, com atua&ccedil;&atilde;o preventiva e contenciosa nos campos do direito comercial, civil, societ&aacute;rio, administrativo, trabalhista e tribut&aacute;rio, com enfoque na atividade empresarial. O escrit&oacute;rio investe constantemente em atualiza&ccedil;&atilde;o t&eacute;cnica e busca sempre novas tecnologias seguras a fim de facilitar e agilizar a presta&ccedil;&atilde;o de servi&ccedil;os aos seus clientes.</p>\r\n<p class=\"text-justify size14 letter-spacing1 Medium\">&nbsp;</p>\r\n<p class=\"text-justify size14 letter-spacing1 Medium\">A qualidade dos servi&ccedil;os advocat&iacute;cios &eacute; refor&ccedil;ada pela parceria com profissionais habilitados e em constante atualiza&ccedil;&atilde;o, capazes de auxiliar na solu&ccedil;&atilde;o de quest&otilde;es relacionadas &agrave;s mais diversas &aacute;reas do Direito. Al&eacute;m disso, os profissionais do escrit&oacute;rio possuem conhecimento em l&iacute;nguas estrangeiras e podem atender empresas nacionais e internacionais.</p>\r\n<p class=\"text-justify size14 letter-spacing1 Medium\">&nbsp;</p>\r\n<p class=\"text-justify size14 letter-spacing1 Medium\">A localiza&ccedil;&atilde;o da sede &eacute; estrat&eacute;gica: no Centro C&iacute;vico, pr&oacute;xima aos principais &oacute;rg&atilde;os do Poder Judici&aacute;rio do Estado do Paran&aacute;. Uma ampla estrutura com instala&ccedil;&otilde;es que atendem todas as necessidades de seus colaboradores e clientes.</p>', '<h4 class=\"branco-fonte Uppercase\">&ldquo;UMA SOCIEDADE PROFISSIONAL COM ATUA&Ccedil;&Atilde;O PREVENTIVA E CONTENCIOSA NAS MAIS DIVERSAS &Aacute;REAS&rdquo;</h4>', 'NOSSOS DIFERENCIAIS', '<p>Esses s&atilde;o os diferenciais que sua empresa ter&aacute; ao contratar nosso escrit&oacute;rio:</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pagina_empresa`
--
ALTER TABLE `pagina_empresa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pagina_empresa`
--
ALTER TABLE `pagina_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
