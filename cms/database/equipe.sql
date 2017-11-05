-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2017 às 14:27
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
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `oab` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `formacao` text,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `equipe`
--

INSERT INTO `equipe` (`id`, `tipo`, `nome`, `oab`, `email`, `formacao`, `foto`) VALUES
(2, 1, 'Brazilio Bacellar Neto', 'OAB/PR 7.425', 'brazilio@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior: Faculdade de Direito de Curitiba (1974)</p>', 'socio-brazilio.jpg'),
(3, 1, 'Rodrigo Shirai', 'OAB/PR 25.781 | OAB/SP 208.567-A', 'rodrigo@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior: Pontif&iacute;cia Universidade Cat&oacute;lica do Paran&aacute; (1997) | Especializa&ccedil;&atilde;o em Direito Processual Civil: IBEJ (1999) | Membro da Comiss&atilde;o de Estudos de Recupera&ccedil;&atilde;o Judicial e Fal&ecirc;ncia da OAB/PR | Membro da TMA - Turnaround Management Association | Idiomas: Ingl&ecirc;s</p>', 'brazilio-socio-rodrigo.jpg'),
(4, 2, 'Ana Cristina Hoogevoonink', 'OAB/PR 38.166', 'ana.cristina@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior:<br /> - Faculdade de Direito Curitiba (2005)<br /> - Idiomas: Ingl&ecirc;s.</p>', 'AdvAna.jpg'),
(5, 3, 'Pedro Vitor Viana Fragalli', '', 'pedro@braziliobacellar.com.br', '', NULL),
(6, 3, 'Daniel V. Portugal Bacellar', '', 'daniel@braziliobacellar.com.br', '', NULL),
(7, 3, 'Gabriel H. Borja Schalsina', '', 'gabriel@braziliobacellar.com.br', '', NULL),
(8, 3, 'Bruno Nascimento da Silva', '', 'bruno@braziliobacellar.com.br', '', NULL),
(9, 3, 'Carolina Massapust', '', 'carolina.m@braziliobacellar.com.br', '', NULL),
(10, 3, 'Laura V. Leite Pissetti', '', 'laura@braziliobacellar.com.br', '', NULL),
(11, 3, 'Geórgia D. Martinelli', '', 'georgia@braziliobacellar.com.br', '', NULL),
(12, 3, 'Isabela P. da Silva Constante', '', 'bruno@braziliobacellar.com.br', '', NULL),
(13, 2, 'Angelique de Conto Heisler', 'OAB/PR 36.459', 'angelique@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior:<br />- PUCPR<br />- P&oacute;s-Graduada em Direito do Trabalho e Processo do Trabalho (2009)</p>', 'AdvAngelique.jpg'),
(14, 2, 'Bruna Michele Wozne Godoy', 'OAB/PR 86.293', 'bruna.michele@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior:<br />- UEPG (2017)</p>', 'AdvBruna.jpg'),
(15, 2, 'Erik Koubik Júnior', 'OAB/PR 64.313', 'erik@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior:<br />- Faculdades Opet (2012)<br />- P&oacute;s-Graduado em Direito Empresarial&nbsp;<br />UNICURITIBA (2013)<br />- P&oacute;s-Graduando em Gest&atilde;o Empresarial<br />UNICURITIBA (2017)<br />- Membro da Comiss&atilde;o de Estudos de&nbsp;<br />Recupera&ccedil;&atilde;o Judicial e Fal&ecirc;ncia da OAB/PR</p>', 'AdvErik.jpg'),
(16, 2, ' Jocelaine Weber da Silva', 'OAB/PR 64.179', 'jocelaine@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior:<br />- Faculdades Opet (2012)<br />- P&oacute;s-Gradua&ccedil;&atilde;o: Direito<br />Contempor&acirc;neo - Fempar (2013)<br />- Idiomas: Ingl&ecirc;s.</p>', 'AdvJocelaine.jpg'),
(17, 2, 'Juciara Santoro Pereira', 'OAB/PR 42.079', 'juciara@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior:<br />- Universidade Tuiuti do Paran&aacute; (2004)<br />- Especializa&ccedil;&atilde;o em Direito Material e&nbsp;<br />Processual do Trabalho:&nbsp;<br />Uniderp Anhanguera Educacional (2008 )<br />- Idiomas: Ingl&ecirc;s.</p>', 'AdvJuciara.jpg'),
(18, 2, 'Marilise Teixeira', 'OAB/PR 24.644', 'marilise@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior:<br />- PUCPR (1996)</p>', 'AdvMarilise.jpg'),
(19, 2, 'Marcella V. Bacellar Koubik', 'OAB/PR 64.191', 'marcella@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior:<br />- Universidade Tuiuti do Paran&aacute; (2012)<br />- Especializanda em Direito&nbsp;<br />Aplicado pela EMAP (2017)<br />- Idiomas: Ingl&ecirc;s.</p>', 'AdvMarcella.jpg'),
(20, 2, 'Luiz Marcelo de Souza Rocha', 'OAB/PR 34.549', 'luiz.marcelo@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior:<br />- UFPR (2001)<br />- Especializando em Direito Tribut&aacute;rio&nbsp;<br />pelo IBET<br />- Membro da Comiss&atilde;o de Estudos&nbsp;<br />de Recupera&ccedil;&atilde;o Judicial e Fal&ecirc;ncia&nbsp;<br />da OAB/PR<br />- Idiomas: Ingl&ecirc;s.</p>', 'AdvLuizMarcelo.jpg'),
(21, 2, 'Luiz Renato Barreto Gomes', 'OAB/PR 66.131', 'luiz.renato@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior:<br />- UNICURITIBA (2012)<br />- P&oacute;s-Graduando em Direito&nbsp;<br />Processual Civil pelo Instituto de&nbsp;<br />Direito Romeu Felipe Bacellar (2013)<br />- Membro da Comiss&atilde;o de Estudos&nbsp;<br />de Recupera&ccedil;&atilde;o Judicial e&nbsp;<br />Fal&ecirc;ncia da OAB/PR</p>', 'AdvLuizRenato.jpg'),
(22, 2, 'Yáskarah Maria S. Maziero', 'OAB/PR 64.323', 'yaskara@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior:<br />- UNICURITIBA (2012)<br />- P&oacute;s-Graduanda em Direito Civil e&nbsp;<br />Empresarial pela Academia<br />Brasileira de Direito&nbsp;<br />Constitucional (2013)</p>', 'AdvYaskarah.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
