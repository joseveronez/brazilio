-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2017 às 13:08
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
