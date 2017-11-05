-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2017 às 02:50
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
-- Estrutura da tabela `links_uteis`
--

CREATE TABLE `links_uteis` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `links_uteis`
--

INSERT INTO `links_uteis` (`id`, `id_categoria`, `titulo`, `url`) VALUES
(1, 1, 'Supremo Tribunal Federal', 'http://www.stf.jus.br/portal/principal/principal.asp'),
(2, 1, 'Superior Tribunal de Justiça', 'http://www.stj.gov.br/'),
(3, 1, 'Tribunal Superior do Trabalho', 'https://portalextranet.tst.jus.br/'),
(4, 1, 'Tribunal Superior Eleitoral', 'http://www.tse.jus.br/'),
(5, 2, 'Tribunal Regional Federal da 1.ª Região', 'http://www.trf1.gov.br/index2.htm'),
(6, 2, 'Tribunal Regional Federal da 2.ª Região', 'http://www10.trf2.jus.br/portal/'),
(7, 2, 'Tribunal Regional Federal da 3.ª Região', 'http://www.trf3.gov.br/'),
(8, 2, 'Tribunal Regional Federal da 4.ª Região', 'https://www2.trf4.jus.br/trf4/'),
(9, 3, 'Tribunal de Justiça do Estado do Paraná', 'http://www.tj.pr.gov.br/'),
(10, 3, 'Tribunal de Alçada do Estado do Paraná', 'http://www.ta.pr.gov.br/'),
(11, 3, 'Tribunal de Justiça de Estado do Santa Catarina', 'http://www.tj.sc.gov.br/'),
(12, 3, 'Tribunal de Justiça do Estado do Rio Grande do Sul', 'http://www.tj.rs.gov.br/'),
(13, 3, 'Tribunal de Justiça do Estado de São Paulo', 'http://www.tj.sp.gov.br/'),
(14, 3, '1º Tribunal de Alçada Civil do Estado de São Paulo', 'http://www.ptac.sp.gov.br/'),
(15, 3, '2º Tribunal de Alçada Civil do Estado de São Paulo', 'http://www.stac.sp.gov.br/'),
(16, 3, 'Tribunal de Justiça do Estado do Rio de Janeiro', 'http://www.tj.rj.gov.br/'),
(17, 3, 'Tribunal de Justiça do Distrito Federal', 'http://www.tjdf.gov.br/'),
(18, 3, 'Tribunal de Justiça do Estado de Minas Gerais', 'http://www.tj.mg.gov.br/'),
(19, 3, 'Tribunal de Alçada do Estado de Minas Gerais', 'http://www.ta.mg.gov.br/'),
(20, 3, 'Tribunal de Justiça do Estado da Bahia', 'http://www.tj.ba.gov.br%20/'),
(21, 4, 'Justiça Federal do Estado do Paraná', 'https://www3.jfpr.jus.br/.noindex.html'),
(22, 4, 'Justiça Federal do Estado de Santa Catarina', 'http://www.jfsc.jus.br/novo_portal/home.php'),
(23, 4, 'Justiça Federal do Estado do Rio Grande do Sul', 'https://www2.jfrs.jus.br/'),
(24, 4, 'Justiça Federal do Estado do Rio de Janeiro', 'http://www.jfrj.gov.br/'),
(25, 4, 'Justiça Federal do Estado de São Paulo', 'http://www.jfsp.gov.br/'),
(26, 5, 'E-jurídico', 'http://www.e-juridico.com.br/'),
(27, 5, 'Cartório 24 horas', 'https://www.cartorio24horas.com.br/'),
(28, 5, 'Assejepar', 'http://www.assejepar.com.br/v2/'),
(29, 5, 'OAB . Conselho Federal', 'http://www.oab.org.br/'),
(30, 5, 'OAB/PR', 'http://www.oabpr.org.br/'),
(31, 5, 'Receita Federal', 'http://www.receita.fazenda.gov.br/'),
(32, 5, 'Procuradoria Geral da Fazenda Nacional', 'http://www.pgfn.fazenda.gov.br/'),
(33, 5, 'Conselho de Contribuintes', 'http://www.conselhos.fazenda.gov.br/'),
(34, 5, 'Consulta de Processos Administrativos . Ministério da Fazenda', 'https://comprot.fazenda.gov.bre-gov/default.asp'),
(35, 5, 'Legislação Federal', 'http://www.senado.gov.br/legisla.htm'),
(36, 5, 'INPI', 'http://www.inpi.gov.br/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links_uteis`
--
ALTER TABLE `links_uteis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links_uteis`
--
ALTER TABLE `links_uteis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
