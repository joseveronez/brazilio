-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Nov-2017 às 10:02
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
  `email_contato` varchar(100) NOT NULL,
  `email_trabalhe_conosco` varchar(100) NOT NULL,
  `email_consulta_processual` varchar(100) NOT NULL,
  `codigo` varchar(15) NOT NULL,
  `cnpj` varchar(18) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `endereco_escritorio` text NOT NULL,
  `endereco_estacionamento` text NOT NULL,
  `mapa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `configuracoes`
--

INSERT INTO `configuracoes` (`id`, `logo_header`, `logo_footer`, `banner_newsletter`, `titulo_newsletter`, `email_newsletter`, `email_contato`, `email_trabalhe_conosco`, `email_consulta_processual`, `codigo`, `cnpj`, `telefone`, `fax`, `endereco_escritorio`, `endereco_estacionamento`, `mapa`) VALUES
(1, 'logobrazilio.png', 'logobrazilio_dourado.png', 'banner-newsletter_1.jpg', 'Esteja atualizado sobre os nossos serviços, lançamentos e muito mais!', 'nicolas@comberweb.com.br', 'nicolas@comberweb.com.br', 'nicolas@comberweb.com.br', 'nicolas@comberweb.com.br', 'OAB/PR 997', '04.510.577/0001-02', '3352 8363', '3352 0167', '<p>Rua Marechal Hermes, 272 | Centro C&iacute;vico Curitiba | Paran&aacute; | Brasil | CEP 80530-230</p>', '<p>Travessa Jos&eacute; do Patrocinio, 48 | Alto da Gl&oacute;ria Curitiba | Paran&aacute; | Brasil | CEP 80030-190</p>', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7207.29490721217!2d-49.265483!3d-25.416609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x490902c1b4f8d1fa!2sBrazilio+Bacellar+Neto+e+Advogados!5e0!3m2!1sen!2sbr!4v1509787878384');

-- --------------------------------------------------------

--
-- Estrutura da tabela `diferenciais`
--

CREATE TABLE `diferenciais` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `diferenciais`
--

INSERT INTO `diferenciais` (`id`, `texto`) VALUES
(2, '<p><span class=\"preto-fonte\">Equipe multidisciplinar</span></p>'),
(3, '<p><span class=\"preto-fonte\">Atua&ccedil;&atilde;o pautada pela &eacute;tica e transpar&ecirc;ncia</span></p>'),
(4, '<p><span class=\"preto-fonte\">Atendimento customizado &agrave;s necessidades do cliente</span></p>'),
(5, '<p><span class=\"preto-fonte\">Interlocu&ccedil;&atilde;o direta e constante com os s&oacute;cios do escrit&oacute;rio</span></p>'),
(6, '<p><span class=\"preto-fonte\">Vasta experi&ecirc;ncia no Direito Empresarial</span></p>'),
(7, '<p><span class=\"preto-fonte\">Transpar&ecirc;ncia total atrav&eacute;s de uma p&aacute;gina eletr&ocirc;nica com todas as informa&ccedil;&otilde;es dos processos</span></p>'),
(8, '<p><span class=\"preto-fonte\">Escrit&oacute;rios parceiros em todo o Brasil</span></p>');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario_contato`
--

CREATE TABLE `formulario_contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(18) NOT NULL,
  `mensagem` text NOT NULL,
  `email_disparo` varchar(100) NOT NULL,
  `data_hora_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario_newsletter`
--

CREATE TABLE `formulario_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_disparo` varchar(100) NOT NULL,
  `data_hora_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario_trabalhe_conosco`
--

CREATE TABLE `formulario_trabalhe_conosco` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(18) NOT NULL,
  `curriculo` varchar(255) NOT NULL,
  `mensagem` text NOT NULL,
  `email_disparo` varchar(100) NOT NULL,
  `data_hora_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `links_uteis_categorias`
--

CREATE TABLE `links_uteis_categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `links_uteis_categorias`
--

INSERT INTO `links_uteis_categorias` (`id`, `categoria`) VALUES
(1, 'Tribunais superiores'),
(2, 'Tribunais federais'),
(3, 'Tribunais estaduais'),
(4, 'Justiça federal'),
(5, 'Úteis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina_areas_atuacao`
--

CREATE TABLE `pagina_areas_atuacao` (
  `id` int(11) NOT NULL,
  `banner_topo` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `icone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `pagina_areas_atuacao`
--

INSERT INTO `pagina_areas_atuacao` (`id`, `banner_topo`, `titulo`, `icone`) VALUES
(1, 'banner-servicos_1.jpg', 'Áreas de atuação', 'martelo.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina_consulta_processual`
--

CREATE TABLE `pagina_consulta_processual` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `pagina_consulta_processual`
--

INSERT INTO `pagina_consulta_processual` (`id`, `banner`, `titulo`, `conteudo`) VALUES
(1, 'banner-contato_2.jpg', 'Consulta Processual', '<p>Esta &aacute;rea &eacute; restrita para clientes da Brazilio Bacellar Neto e Advogados.<br />Aqui &eacute; poss&iacute;vel consultar os andamentos processuais e as imagens digitalizadas dos processos sob nossa responsabilidade.<br />Para visualiza&ccedil;&atilde;o das imagens &eacute; necess&aacute;rio a pr&eacute;via instala&ccedil;&atilde;o do Adobe Acrobat Reader.</p>\r\n<p><span style=\"color: #000000;\"><strong><a class=\"preto-fonte\" style=\"color: #000000;\" href=\"http://braziliobacellar.no-ip.org/cpjw.cgi?pesq\" target=\"_blank\" rel=\"noopener noreferrer\">Se voc&ecirc; &eacute; cliente e j&aacute; possui um login e senha clique aqui</a></strong></span></p>\r\n<p>Se voc&ecirc; n&atilde;o possui login, envie-nos um e-mail solicitando acesso.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina_contato`
--

CREATE TABLE `pagina_contato` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `titulo_banner` varchar(255) NOT NULL,
  `titulo_contato` varchar(255) NOT NULL,
  `chamada` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `pagina_contato`
--

INSERT INTO `pagina_contato` (`id`, `banner`, `titulo_banner`, `titulo_contato`, `chamada`) VALUES
(1, 'banner-contato.jpg', 'Contato', 'Contato', 'Entre em contato por telefone ou pelo formulário ao lado:');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina_links_uteis`
--

CREATE TABLE `pagina_links_uteis` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `titulo_banner` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pagina_links_uteis`
--

INSERT INTO `pagina_links_uteis` (`id`, `banner`, `titulo_banner`) VALUES
(1, 'banner-servicos_2.jpg', 'Links úteis');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina_recuperacao_judicial`
--

CREATE TABLE `pagina_recuperacao_judicial` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `pagina_recuperacao_judicial`
--

INSERT INTO `pagina_recuperacao_judicial` (`id`, `banner`, `titulo`, `texto`) VALUES
(1, 'banner-servicos.jpg', 'Recuperação Judicial', '<p>Selecione abaixo a empresa em Recupera&ccedil;&atilde;o Judicial sobre a qual voc&ecirc; deseja obter informa&ccedil;&otilde;es:</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina_trabalhe_conosco`
--

CREATE TABLE `pagina_trabalhe_conosco` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `titulo_banner` varchar(100) NOT NULL,
  `titulo_fale_conosco` varchar(100) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `pagina_trabalhe_conosco`
--

INSERT INTO `pagina_trabalhe_conosco` (`id`, `banner`, `titulo_banner`, `titulo_fale_conosco`, `conteudo`) VALUES
(1, 'banner-contato_1.jpg', 'Trabalhe conosco', 'Trabalhe conosco', '<p>Quer fazer parte da nossa equipe?</p>\r\n<p>Inicie o processo seletivo enviando seus dados e curr&iacute;culo.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recuperacao_arquivos`
--

CREATE TABLE `recuperacao_arquivos` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recuperacao_arquivos`
--

INSERT INTO `recuperacao_arquivos` (`id`, `id_empresa`, `titulo`, `arquivo`) VALUES
(3, 2, 'Decisão que defere o processamento da Recuperação e nomeia o Administrador Judicial', 'solo_arquivo02.pdf'),
(4, 2, 'Relação de Credores', 'solo_arquivo03.pdf');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `icone` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `link_servico` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `icone`, `titulo`, `descricao`, `link_servico`) VALUES
(5, 'administrativo_2.png', 'ADMINISTRATIVO', '<p>Assessoria nas esferas administrativa e judicial para empresas interessadas na participa&ccedil;&atilde;o em processos licitat&oacute;rios, efetuando a an&aacute;lise da legalidade dos editais e elabora&ccedil;&atilde;o de poss&iacute;veis impugna&ccedil;&otilde;es aos editais ou propostas dos concorrentes, bem como, tomando as medidas cab&iacute;veis &agrave; cada caso.</p>', 'administrativo'),
(6, 'ambiental.png', 'AMBIENTAL', '<p>Orienta&ccedil;&atilde;o e assessoria de empresas acerca da legisla&ccedil;&atilde;o ambiental, atuando de forma preventiva e no contencioso, bem como prestando aux&iacute;lio na obten&ccedil;&atilde;o de licen&ccedil;a/autoriza&ccedil;&atilde;o perante os &oacute;rg&atilde;os competentes.</p>', 'ambiental'),
(7, 'bancario.png', 'BANCÁRIO', '<p>Assessoria e orienta&ccedil;&atilde;o acerca dos servi&ccedil;os prestados pelas institui&ccedil;&otilde;es financeiras, e das limita&ccedil;&otilde;es legais existentes para sua atua&ccedil;&atilde;o em vista dos diversos diplomas legais aplic&aacute;veis &agrave; esp&eacute;cie.</p>', 'bancario'),
(8, 'civel.png', 'CÍVEL', '<p>A atua&ccedil;&atilde;o na &aacute;rea c&iacute;vel engloba a tomada de medidas no &acirc;mbito preventivo e contencioso, dando suporte na solu&ccedil;&atilde;o de lit&iacute;gios em todas as esferas do direito civil.</p>', 'civel'),
(9, 'comercial.png', 'COMERCIAL', '<p>Atividades na &aacute;rea de consultoria e contencioso, buscando alternativas e resolu&ccedil;&atilde;o de quest&otilde;es envolvendo contratos e opera&ccedil;&otilde;es comerciais. Em especial na &aacute;rea de recupera&ccedil;&atilde;o de empresas e falimentar, os anos de experi&ecirc;ncia possibilitam a consultoria e assessoria jur&iacute;dica em todas as fases dos processos de fal&ecirc;ncia, concordata e recupera&ccedil;&atilde;o (judicial e extrajudicial), tanto para o devedor quanto para os credores.</p>', 'comercial'),
(10, 'consumidor.png', 'CONSUMIDOR', '<p>Suporte jur&iacute;dico e orienta&ccedil;&otilde;es preventivas acerca da regulamenta&ccedil;&atilde;o das rela&ccedil;&otilde;es entre consumidores e fornecedores de produtos e servi&ccedil;os.</p>', 'consumidor'),
(11, 'contrato.png', 'CONTRATOS', '<p>An&aacute;lise, elabora&ccedil;&atilde;o, revis&atilde;o e readequa&ccedil;&atilde;o de contratos e assessoria contratual em geral, especialmente no que tange &agrave; atividade empresarial, bem como na elabora&ccedil;&atilde;o de pareceres e opini&otilde;es legais, e em havendo necessidade, tomada de todas as medidas legais cab&iacute;veis para revis&atilde;o judicial das cl&aacute;usulas contratuais.</p>', 'contratos'),
(12, 'familias.png', 'FAMÍLIA', '<p>Atua&ccedil;&atilde;o no &acirc;mbito do direito de fam&iacute;lia, garantindo a solu&ccedil;&atilde;o mais c&eacute;lere e eficiente para todas as quest&otilde;es pertinentes.</p>', 'familia'),
(13, 'gestao_legal_patrimonio.png', 'GESTÃO LEGAL DE PATRIMÔNIO', '<p>Assessoria no &acirc;mbito de prote&ccedil;&atilde;o patrimonial contra conting&ecirc;ncias diversas e organiza&ccedil;&atilde;o de ativos e investimentos.</p>', 'gestao-legal-patrimonio'),
(14, 'internet_e_ecommerce.png', 'INTERNET E E-COMMERCE', '<p>Assessoria jur&iacute;dica geral a empresas de internet e consultoria na elabora&ccedil;&atilde;o de contratos eletr&ocirc;nicos.</p>', 'internet-e-ecommerce'),
(15, 'propriedade_intelectual.png', 'PROPRIEDADE INTELECTUAL', '<p>Consultoria e assessoria, assim como atua&ccedil;&atilde;o em lit&iacute;gios que envolvam direitos autorais, desenhos industriais, marcas e patentes.</p>', 'propriedade-intelectual'),
(16, 'societario.png', 'SOCIETÁRIO', '<p>Assessoria jur&iacute;dica e consultoria na constitui&ccedil;&atilde;o, organiza&ccedil;&atilde;o e transforma&ccedil;&atilde;o das sociedades empresariais, bem como elabora&ccedil;&atilde;o de planejamento societ&aacute;rio. Representa&ccedil;&atilde;o em discuss&otilde;es administrativas e judiciais, buscando defender os interesses das sociedades e dos s&oacute;cios/acionistas.</p>', 'societario'),
(17, 'sucessoes.png', 'SUCESSÕES', '<p>Assessoria jur&iacute;dica na interposi&ccedil;&atilde;o das medidas necess&aacute;rias para concretiza&ccedil;&atilde;o e encerramento do processo de sucess&atilde;o (arrolamentos e invent&aacute;rios) bem como orienta&ccedil;&atilde;o jur&iacute;dica para planejamento sucess&oacute;rio.</p>', 'sucessoes'),
(18, 'trabalhista.png', 'TRABALHISTA', '<p>A assessoria jur&iacute;dica trabalhista &eacute; voltada para os interesses patronais, oferecendo consultoria preventiva e atua&ccedil;&atilde;o no contencioso.</p>', 'trabalhista'),
(19, 'tributario.png', 'TRIBUTÁRIO', '<p>Atua&ccedil;&atilde;o na &aacute;rea administrativa, tanto no aux&iacute;lio em medidas preventivas, como em defesas perante os &oacute;rg&atilde;os arrecadadores de tributos bem como prestando assessoria na obten&ccedil;&atilde;o de incentivos fiscais, planejamento tribut&aacute;rio e em procedimento de compensa&ccedil;&atilde;o e restitui&ccedil;&atilde;o de tributos. No &acirc;mbito judicial, destaque para as medidas na recupera&ccedil;&atilde;o de tributos indevidamente exigidos e recolhidos perante as esferas Municipal, Estadual e Federal.</p>', 'tributario');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `senha` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Comberweb', 'admin@comberweb.com.br', '$2a$08$OTgzNDIzNDY1OWMyYjFiN.yYHdpt1qavIM3lV9WfRxCOWqA.GU6gy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diferenciais`
--
ALTER TABLE `diferenciais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulario_contato`
--
ALTER TABLE `formulario_contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulario_newsletter`
--
ALTER TABLE `formulario_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulario_trabalhe_conosco`
--
ALTER TABLE `formulario_trabalhe_conosco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links_uteis`
--
ALTER TABLE `links_uteis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links_uteis_categorias`
--
ALTER TABLE `links_uteis_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_areas_atuacao`
--
ALTER TABLE `pagina_areas_atuacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_consulta_processual`
--
ALTER TABLE `pagina_consulta_processual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_contato`
--
ALTER TABLE `pagina_contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_empresa`
--
ALTER TABLE `pagina_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_equipe`
--
ALTER TABLE `pagina_equipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_links_uteis`
--
ALTER TABLE `pagina_links_uteis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_principal`
--
ALTER TABLE `pagina_principal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_recuperacao_judicial`
--
ALTER TABLE `pagina_recuperacao_judicial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_trabalhe_conosco`
--
ALTER TABLE `pagina_trabalhe_conosco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recuperacao_arquivos`
--
ALTER TABLE `recuperacao_arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recuperacao_empresas`
--
ALTER TABLE `recuperacao_empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides_empresa`
--
ALTER TABLE `slides_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides_home`
--
ALTER TABLE `slides_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diferenciais`
--
ALTER TABLE `diferenciais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `formulario_contato`
--
ALTER TABLE `formulario_contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `formulario_newsletter`
--
ALTER TABLE `formulario_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `formulario_trabalhe_conosco`
--
ALTER TABLE `formulario_trabalhe_conosco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `links_uteis`
--
ALTER TABLE `links_uteis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `links_uteis_categorias`
--
ALTER TABLE `links_uteis_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pagina_areas_atuacao`
--
ALTER TABLE `pagina_areas_atuacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagina_consulta_processual`
--
ALTER TABLE `pagina_consulta_processual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagina_contato`
--
ALTER TABLE `pagina_contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagina_empresa`
--
ALTER TABLE `pagina_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagina_equipe`
--
ALTER TABLE `pagina_equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagina_links_uteis`
--
ALTER TABLE `pagina_links_uteis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagina_principal`
--
ALTER TABLE `pagina_principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagina_recuperacao_judicial`
--
ALTER TABLE `pagina_recuperacao_judicial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagina_trabalhe_conosco`
--
ALTER TABLE `pagina_trabalhe_conosco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `recuperacao_arquivos`
--
ALTER TABLE `recuperacao_arquivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `recuperacao_empresas`
--
ALTER TABLE `recuperacao_empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `slides_empresa`
--
ALTER TABLE `slides_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `slides_home`
--
ALTER TABLE `slides_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
