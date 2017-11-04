-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Nov-2017 às 11:08
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
-- Estrutura da tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `id` int(11) NOT NULL,
  `logo_header` varchar(255) NOT NULL,
  `logo_footer` varchar(255) NOT NULL,
  `banner_newsletter` varchar(255) NOT NULL,
  `titulo_newsletter` varchar(255) NOT NULL,
  `email_newsletter` varchar(100) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `email_contato` varchar(100) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `endereco_escritorio` text NOT NULL,
  `endereco_estacionamento` text NOT NULL,
  `mapa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `configuracoes`
--

INSERT INTO `configuracoes` (`id`, `logo_header`, `logo_footer`, `banner_newsletter`, `titulo_newsletter`, `email_newsletter`, `codigo`, `cnpj`, `email_contato`, `telefone`, `fax`, `endereco_escritorio`, `endereco_estacionamento`, `mapa`) VALUES
(1, 'logobrazilio.png', 'logobrazilio_dourado.png', 'banner-newsletter_1.jpg', 'Esteja atualizado sobre os nossos serviços, lançamentos e muito mais!', 'nicolas@comberweb.com.br', 'OAB/PR 997', '04.510.577/0001-02', 'nicolas@comberweb.com.br', '3352 8363', '3352 0167', '<p>Rua Marechal Hermes, 272 | Centro C&iacute;vico&nbsp;Curitiba | Paran&aacute; | Brasil | CEP 80530-230</p>', '<p>Travessa Jos&eacute; do Patrocinio, 48 | Alto da Gl&oacute;ria Curitiba | Paran&aacute; | Brasil | CEP 80030-190</p>', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7207.29490721217!2d-49.265483!3d-25.416609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x490902c1b4f8d1fa!2sBrazilio+Bacellar+Neto+e+Advogados!5e0!3m2!1sen!2sbr!4v1509787878384');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
