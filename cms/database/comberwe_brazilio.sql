-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2017 at 06:27 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `banner_topo` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `icone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `banner_topo`, `titulo`, `icone`) VALUES
(1, 'banner-servicos_1.jpg', 'ÁREAS DE ATUAÇÕES', 'martelo.png');

-- --------------------------------------------------------

--
-- Table structure for table `configuracoes`
--

CREATE TABLE `configuracoes` (
  `id` int(11) NOT NULL,
  `logo_header` varchar(255) NOT NULL,
  `logo_footer` varchar(255) NOT NULL,
  `banner_newsletter` varchar(255) NOT NULL,
  `titulo_newsletter` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `configuracoes`
--

INSERT INTO `configuracoes` (`id`, `logo_header`, `logo_footer`, `banner_newsletter`, `titulo_newsletter`, `copyright`) VALUES
(1, 'logobrazilio.png', 'logobrazilio_dourado.png', 'banner_email.jpg', 'Esteja atualizado sobre os nossos serviços, lançamentos e muito mais!', '© 2018 BRAZILIO BACELLAR, SHIRAI ADVOGADOS • Todos os direitos reservados.');

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `icone` varchar(255) NOT NULL,
  `chamada` text NOT NULL,
  `razao_social` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `endereco_escritorio` text NOT NULL,
  `endereco_estacionamento` text NOT NULL,
  `mapa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contato`
--

INSERT INTO `contato` (`id`, `banner`, `titulo`, `icone`, `chamada`, `razao_social`, `cnpj`, `telefone`, `fax`, `endereco_escritorio`, `endereco_estacionamento`, `mapa`) VALUES
(1, 'banner-contato.jpg', 'CONTATO', 'teste', '<p>Entre em contato por telefone ou pelo formul&aacute;rio ao lado:</p>', 'BRAZILIO BACELLAR, SHIRAI ADVOGADOS  OAB/PR 997', 'CNPJ 04.510.577/0001-02', '+55 41 3352.8363 ', '+55 41 3352.0167', '<p>Rua Marechal Hermes, 272 | Centro C&iacute;vico&nbsp;<br />Curitiba | Paran&aacute; | Brasil | CEP 80 530-230</p>', '<p>Travessa Jos&eacute; do Patrocinio, 48 | Alto da Gl&oacute;ria<br />Curitiba | Paran&aacute; | Brasil | CEP 80 030-190</p>', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.647454090421!2d-49.267671685400146!3d-25.4166089837946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce41858839247%3A0x490902c1b4f8d1fa!2sBrazilio+Bacellar+Neto+e+Advogados!5e0!3m2!1spt-B');

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `banner_topo` varchar(255) NOT NULL,
  `icone` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `carousel_1` varchar(255) NOT NULL,
  `carousel_2` varchar(255) NOT NULL,
  `carousel_3` varchar(255) NOT NULL,
  `texto_carousel` text NOT NULL,
  `titulo_diferenciais` varchar(255) NOT NULL,
  `texto_diferenciais` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`id`, `banner_topo`, `icone`, `titulo`, `texto`, `carousel_1`, `carousel_2`, `carousel_3`, `texto_carousel`, `titulo_diferenciais`, `texto_diferenciais`) VALUES
(1, 'banner-servicos.jpg', 'balanca.png', 'teste2', '<p class=\"text-justify size14 letter-spacing1 Medium\"><strong>A Brazilio Bacellar, Shirai Advogados</strong>&nbsp;&eacute; uma sociedade profissional experiente, com atua&ccedil;&atilde;o preventiva e contenciosa nos campos do direito comercial, civil, societ&aacute;rio, administrativo, trabalhista e tribut&aacute;rio, com enfoque na atividade empresarial. O escrit&oacute;rio investe constantemente em atualiza&ccedil;&atilde;o t&eacute;cnica e busca sempre novas tecnologias seguras a fim de facilitar e agilizar a presta&ccedil;&atilde;o de servi&ccedil;os aos seus clientes.</p>\r\n<p>&nbsp;</p>\r\n<p class=\"text-justify size14 letter-spacing1 Medium\">A qualidade dos servi&ccedil;os advocat&iacute;cios &eacute; refor&ccedil;ada pela parceria com profissionais habilitados e em constante atualiza&ccedil;&atilde;o, capazes de auxiliar na solu&ccedil;&atilde;o de quest&otilde;es relacionadas &agrave;s mais diversas &aacute;reas do Direito. Al&eacute;m disso, os profissionais do escrit&oacute;rio possuem conhecimento em l&iacute;nguas estrangeiras e podem atender empresas nacionais e internacionais.</p>\r\n<p>&nbsp;</p>\r\n<p class=\"text-justify size14 letter-spacing1 Medium\">A localiza&ccedil;&atilde;o da sede &eacute; estrat&eacute;gica: no Centro C&iacute;vico, pr&oacute;xima aos principais &oacute;rg&atilde;os do Poder Judici&aacute;rio do Estado do Paran&aacute;. Uma ampla estrutura com instala&ccedil;&otilde;es que atendem todas as necessidades de seus colaboradores e clientes.</p>', 'teste', 'teste', 'teste', '<h4 class=\"branco-fonte Uppercase\">&ldquo;UMA SOCIEDADE PROFISSIONAL COM ATUA&Ccedil;&Atilde;O PREVENTIVA E CONTENCIOSA NAS MAIS DIVERSAS &Aacute;REAS&rdquo;</h4>', 'NOSSOS DIFERENCIAIS', '<p>Esses s&atilde;o os diferenciais que sua empresa ter&aacute; ao contratar nosso escrit&oacute;rio:</p>\r\n<ul class=\"lista\">\r\n<li class=\"MarginT4p bc-2 esconder mostrar animated fadeInUp full-visible\"><span class=\"preto-fonte\">Equipe multidisciplinar</span></li>\r\n<li class=\"MarginT4p bc-2 esconder mostrar animated fadeInUp full-visible\"><span class=\"preto-fonte\">Atua&ccedil;&atilde;o pautada pela &eacute;tica e transpar&ecirc;ncia</span></li>\r\n<li class=\"MarginT4p bc-2 esconder mostrar animated fadeInUp full-visible\"><span class=\"preto-fonte\">Atendimento customizado &agrave;s necessidades do cliente</span></li>\r\n<li class=\"MarginT4p bc-2 esconder mostrar animated fadeInUp full-visible\"><span class=\"preto-fonte\">Interlocu&ccedil;&atilde;o direta e constante com os s&oacute;cios do escrit&oacute;rio</span></li>\r\n<li class=\"MarginT4p bc-2 esconder mostrar animated fadeInUp full-visible\"><span class=\"preto-fonte\">Vasta experi&ecirc;ncia no Direito Empresarial</span></li>\r\n<li class=\"MarginT4p bc-2 esconder mostrar animated fadeInUp full-visible\"><span class=\"preto-fonte\">Transpar&ecirc;ncia total atrav&eacute;s de uma p&aacute;gina eletr&ocirc;nica com todas as informa&ccedil;&otilde;es dos processos</span></li>\r\n<li class=\"MarginT4p bc-2 esconder mostrar animated fadeInUp full-visible\"><span class=\"preto-fonte\">Escrit&oacute;rios parceiros em todo o Brasil</span></li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `oab` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `formacao` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipe`
--

INSERT INTO `equipe` (`id`, `tipo`, `nome`, `oab`, `email`, `formacao`, `foto`) VALUES
(2, 1, 'Brazilio Bacellar Neto', 'OAB/PR 7.425', 'brazilio@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior: Faculdade de Direito de Curitiba (1974)</p>', 'socio-brazilio.jpg'),
(3, 1, 'Rodrigo Shirai', 'OAB/PR 25.781 | OAB/SP 208.567-A', 'rodrigo@braziliobacellar.com.br', '<p>Forma&ccedil;&atilde;o Superior: Pontif&iacute;cia Universidade Cat&oacute;lica do Paran&aacute; (1997) | Especializa&ccedil;&atilde;o em Direito Processual Civil: IBEJ (1999) | Membro da Comiss&atilde;o de Estudos de Recupera&ccedil;&atilde;o Judicial e Fal&ecirc;ncia da OAB/PR | Membro da TMA - Turnaround Management Association | Idiomas: Ingl&ecirc;s</p>', 'socio-Rodrigo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pagina_equipe`
--

CREATE TABLE `pagina_equipe` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `icone` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `titulo_texto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pagina_equipe`
--

INSERT INTO `pagina_equipe` (`id`, `titulo`, `banner`, `icone`, `texto`, `titulo_texto`) VALUES
(1, 'teste2', 'banner-equipe.jpg', 'balanca_1.png', '<p>A equipe de profissionais conta com advogados em constante atualiza&ccedil;&atilde;o, habilitados a atender empresas nacionais e internacionais, com conhecimento de l&iacute;nguas estrangeiras.</p>', 'teste2');

-- --------------------------------------------------------

--
-- Table structure for table `pagina_home`
--

CREATE TABLE `pagina_home` (
  `id` int(11) NOT NULL,
  `texto_empresa` text NOT NULL,
  `titulo_empresa` varchar(255) NOT NULL,
  `titulo_areas` varchar(255) NOT NULL,
  `texto_areas` text NOT NULL,
  `img_banner1` varchar(255) DEFAULT NULL,
  `titulo_banner1` varchar(255) DEFAULT NULL,
  `texto_banner1` text,
  `img_banner2` varchar(255) DEFAULT NULL,
  `titulo_banner2` varchar(255) DEFAULT NULL,
  `texto_banner2` text,
  `img_banner3` varchar(255) DEFAULT NULL,
  `titulo_banner3` varchar(255) DEFAULT NULL,
  `texto_banner3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pagina_home`
--

INSERT INTO `pagina_home` (`id`, `texto_empresa`, `titulo_empresa`, `titulo_areas`, `texto_areas`, `img_banner1`, `titulo_banner1`, `texto_banner1`, `img_banner2`, `titulo_banner2`, `texto_banner2`, `img_banner3`, `titulo_banner3`, `texto_banner3`) VALUES
(1, '<p><span class=\"Bold\">A Brazilio Bacellar, Shirai Advogados</span>&nbsp;&eacute; uma sociedade profissional experiente, com atua&ccedil;&atilde;o preventiva e contenciosa nos campos do direito comercial, civil, societ&aacute;rio, administrativo, trabalhista e tribut&aacute;rio, com enfoque na atividade empresarial.</p>', 'A EMPRESA', 'ÁREAS DE ATUAÇÕES', '<p>A qualidade dos servi&ccedil;os advocat&iacute;cios &eacute; refor&ccedil;ada pela parceria com profissionais habilitados e em constante atualiza&ccedil;&atilde;o, capazes de auxiliar na solu&ccedil;&atilde;o de quest&otilde;es relacionadas &agrave;s mais diversas &aacute;reas do Direito.</p>', 'ban1_2.jpg', 'Brazilio Bacellar,<br> SHIRAI Advogados', '<p>a solu&ccedil;&atilde;o dos conflitos de interesses preventivamente,<br /> evitando o desgaste e a morosidade do Poder Judici&aacute;rio.</p>', 'ban2_3.jpg', 'EQUIPE EXPERIENTE', '<p>Profissionais especialistas que atuam h&aacute; anos no mercado.</p>', 'ban3_2.jpg', 'DIVERSAS ÁREAS DE ATUAÇÃO', '<p>O escrit&oacute;rio est&aacute; preparado para atender casos de todas as &aacute;reas.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `icone` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `servicos`
--

INSERT INTO `servicos` (`id`, `icone`, `titulo`, `descricao`) VALUES
(5, 'administrativo_2.png', 'ADMINISTRATIVO', '<p>Assessoria nas esferas administrativa e judicial para empresas interessadas na participa&ccedil;&atilde;o em processos licitat&oacute;rios, efetuando a an&aacute;lise da legalidade dos editais e elabora&ccedil;&atilde;o de poss&iacute;veis impugna&ccedil;&otilde;es aos editais ou propostas dos concorrentes, bem como, tomando as medidas cab&iacute;veis &agrave; cada caso.</p>'),
(6, 'ambiental.png', 'AMBIENTAL', '<p>Orienta&ccedil;&atilde;o e assessoria de empresas acerca da legisla&ccedil;&atilde;o ambiental, atuando de forma preventiva e no contencioso, bem como prestando aux&iacute;lio na obten&ccedil;&atilde;o de licen&ccedil;a/autoriza&ccedil;&atilde;o perante os &oacute;rg&atilde;os competentes.</p>'),
(7, 'bancario.png', 'BANCÁRIO', '<p>Assessoria e orienta&ccedil;&atilde;o acerca dos servi&ccedil;os prestados pelas institui&ccedil;&otilde;es financeiras, e das limita&ccedil;&otilde;es legais existentes para sua atua&ccedil;&atilde;o em vista dos diversos diplomas legais aplic&aacute;veis &agrave; esp&eacute;cie.</p>'),
(8, 'civel.png', 'CÍVEL', '<p>A atua&ccedil;&atilde;o na &aacute;rea c&iacute;vel engloba a tomada de medidas no &acirc;mbito preventivo e contencioso, dando suporte na solu&ccedil;&atilde;o de lit&iacute;gios em todas as esferas do direito civil.</p>'),
(9, 'comercial.png', 'COMERCIAL', '<p>Atividades na &aacute;rea de consultoria e contencioso, buscando alternativas e resolu&ccedil;&atilde;o de quest&otilde;es envolvendo contratos e opera&ccedil;&otilde;es comerciais. Em especial na &aacute;rea de recupera&ccedil;&atilde;o de empresas e falimentar, os anos de experi&ecirc;ncia possibilitam a consultoria e assessoria jur&iacute;dica em todas as fases dos processos de fal&ecirc;ncia, concordata e recupera&ccedil;&atilde;o (judicial e extrajudicial), tanto para o devedor quanto para os credores.</p>'),
(10, 'consumidor.png', 'CONSUMIDOR', '<p>Suporte jur&iacute;dico e orienta&ccedil;&otilde;es preventivas acerca da regulamenta&ccedil;&atilde;o das rela&ccedil;&otilde;es entre consumidores e fornecedores de produtos e servi&ccedil;os.</p>'),
(11, 'contrato.png', 'CONTRATOS', '<p>An&aacute;lise, elabora&ccedil;&atilde;o, revis&atilde;o e readequa&ccedil;&atilde;o de contratos e assessoria contratual em geral, especialmente no que tange &agrave; atividade empresarial, bem como na elabora&ccedil;&atilde;o de pareceres e opini&otilde;es legais, e em havendo necessidade, tomada de todas as medidas legais cab&iacute;veis para revis&atilde;o judicial das cl&aacute;usulas contratuais.</p>'),
(12, 'familias.png', 'FAMÍLIA', '<p>Atua&ccedil;&atilde;o no &acirc;mbito do direito de fam&iacute;lia, garantindo a solu&ccedil;&atilde;o mais c&eacute;lere e eficiente para todas as quest&otilde;es pertinentes.</p>'),
(13, 'gestao_legal_patrimonio.png', 'GESTÃO LEGAL DE PATRIMÔNIO', '<p>Assessoria no &acirc;mbito de prote&ccedil;&atilde;o patrimonial contra conting&ecirc;ncias diversas e organiza&ccedil;&atilde;o de ativos e investimentos.</p>'),
(14, 'internet_e_ecommerce.png', 'INTERNET E E-COMMERCE', '<p>Assessoria jur&iacute;dica geral a empresas de internet e consultoria na elabora&ccedil;&atilde;o de contratos eletr&ocirc;nicos.</p>'),
(15, 'propriedade_intelectual.png', 'PROPRIEDADE INTELECTUAL', '<p>Consultoria e assessoria, assim como atua&ccedil;&atilde;o em lit&iacute;gios que envolvam direitos autorais, desenhos industriais, marcas e patentes.</p>'),
(16, 'societario.png', 'SOCIETÁRIO', '<p>Assessoria jur&iacute;dica e consultoria na constitui&ccedil;&atilde;o, organiza&ccedil;&atilde;o e transforma&ccedil;&atilde;o das sociedades empresariais, bem como elabora&ccedil;&atilde;o de planejamento societ&aacute;rio. Representa&ccedil;&atilde;o em discuss&otilde;es administrativas e judiciais, buscando defender os interesses das sociedades e dos s&oacute;cios/acionistas.</p>'),
(17, 'sucessoes.png', 'SUCESSÕES', '<p>Assessoria jur&iacute;dica na interposi&ccedil;&atilde;o das medidas necess&aacute;rias para concretiza&ccedil;&atilde;o e encerramento do processo de sucess&atilde;o (arrolamentos e invent&aacute;rios) bem como orienta&ccedil;&atilde;o jur&iacute;dica para planejamento sucess&oacute;rio.</p>'),
(18, 'trabalhista.png', 'TRABALHISTA', '<p>A assessoria jur&iacute;dica trabalhista &eacute; voltada para os interesses patronais, oferecendo consultoria preventiva e atua&ccedil;&atilde;o no contencioso.</p>'),
(19, 'tributario.png', 'TRIBUTÁRIO', '<p>Atua&ccedil;&atilde;o na &aacute;rea administrativa, tanto no aux&iacute;lio em medidas preventivas, como em defesas perante os &oacute;rg&atilde;os arrecadadores de tributos bem como prestando assessoria na obten&ccedil;&atilde;o de incentivos fiscais, planejamento tribut&aacute;rio e em procedimento de compensa&ccedil;&atilde;o e restitui&ccedil;&atilde;o de tributos. No &acirc;mbito judicial, destaque para as medidas na recupera&ccedil;&atilde;o de tributos indevidamente exigidos e recolhidos perante as esferas Municipal, Estadual e Federal.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `senha` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Comberweb', 'admin@comberweb.com.br', '$2a$08$OTgzNDIzNDY1OWMyYjFiN.yYHdpt1qavIM3lV9WfRxCOWqA.GU6gy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_equipe`
--
ALTER TABLE `pagina_equipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_home`
--
ALTER TABLE `pagina_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
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
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pagina_equipe`
--
ALTER TABLE `pagina_equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagina_home`
--
ALTER TABLE `pagina_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
