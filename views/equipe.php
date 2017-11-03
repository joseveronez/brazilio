<?php
    ScriptLoader::LoadCSS('equipe');
    $equipe = Equipe::sql("SELECT * FROM equipe");
    $pag = PaginaEquipe::sql("SELECT * FROM pagina_equipe", SimpleOrm::FETCH_ONE);
?>
<style type="text/css">
    .parallax-banner { background-image: url("<?= caminhoSite ?>/uploads/<?= $pag->banner ?>"); background-position: top right; background-attachment: fixed; background-repeat: no-repeat; background-size: cover }
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="parallax-banner">
        <div class="container">
            <div class="text-center titulo">
                <h3 class="Uppercase size35 dourado-fonte Light"><?= $pag->titulo ?></h3>
            </div>
            <div class="breadcrumb hidden-xs">
                <p class="branco-fonte margin-zero">VOCÊ ESTÁ EM <a href="<?= RAIZSITE ?>" class="link-default">HOME</a> / <span class="dourado-fonte">EQUIPE</span></p>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-branco PaddingT12p">
    <div id="waypointMenu" style="position: absolute; left: 0; height: 101px; width: 50px; top: -101px"></div>
    <div class="linha"></div>
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <img src="<?= RAIZSITE ?>/imagens/balanca.png" class="img-responsive">
        </div>

        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 MarginT10p bc-2">
            <p class="text-justify size14 letter-spacing1 Medium"><?= $pag->texto ?></p>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginT13p padding-zero">
            <div class="linha-pequena"></div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-branco socios">
    <div class="container conteudo">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center MarginT13p MarginB10p titulo le-2">
            <h3 class="Uppercase dourado-fonte margin-zero">SÓCIOS</h3>
        </div>
        <?php 
            $cont =1;
            foreach($equipe as $eqp){
                if($eqp->tipo == 1){
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 bloco <?php if($cont==1){echo"primario";} else {echo"secundario";} ?> bc-2">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-dourado imagem" style="background: url('<?= caminhoSite ?>/uploads/<?= $eqp->foto ?>'); background-size: cover; background-position: center center; min-height: 335px;"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-dourado descritivo branco-fonte">
                            <h3 class="le-2"><?= $eqp->nome ?></h3>
                            <h5 class="le-2"><?= $eqp->oab ?></h5>
                            <p class="formacao bc-2"><?= $eqp->formacao ?></p>
                        </div>
                    </div>
                    <?php
                    $cont++;
                }
            }
        ?>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-branco advogados">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <div class="linha-pequena"></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center MarginT15p MarginB10p ri-2">
            <h3 class="Uppercase dourado-fonte margin-zero">ADVOGADOS</h3>
        </div>
        
        <?php 
            $order = 1;
            $eq = 1;
            foreach($equipe as $eqp){
                if($eqp->tipo == 2){
                    if($eq == 5){
                        $eq = 1;
                    }
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-<?= $order ?> eq-<?= $eq ?>">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= caminhoSite ?>/uploads/<?= $eqp->foto ?>'); background-size: cover; background-position: center center; min-height: 200px;">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                        <p><?= $eqp->nome ?></p>
                        <p><?= $eqp->oab ?></p>
                        <p><a href="mailto:<?= $eqp->email ?>" class="link-default"><?= $eqp->email ?></a></p>
                        <?= $eqp->formacao ?>
                    </div>
                </div>
                <?php
            }
        }
    ?>
        
        <?php /*
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-1 eq-1">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= RAIZSITE ?>/imagens/AdvAna.jpg'); background-size: cover; background-position: center center; min-height: 200px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                <p>Ana Cristina Hoogevoonink</p>
                <p>OAB/PR 38.166</p>
                <p><a href="mailto:ana.cristina@braziliobacellar.com.br" class="link-default">ana.cristina@braziliobacellar.com.br</a></p>
                <p>Formação Superior:<br>
                    - Faculdade de Direito Curitiba (2005)<br>
                    - Idiomas: Inglês.<br>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-2 eq-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= RAIZSITE ?>/imagens/AdvAngelique.jpg'); background-size: cover; background-position: center center; min-height: 200px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                <p>Angelique de Conto Heisler</p>
                <p>OAB/PR 36.459</p>
                <p><a href="mailto:angelique@braziliobacellar.com.br" class="link-default">angelique@braziliobacellar.com.br</a></p>
                <p>Formação Superior:<br>
                    - PUCPR<br>
                    - Pós-Graduada em Direito do Trabalho e Processo do Trabalho (2009)<br>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-3 eq-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= RAIZSITE ?>/imagens/AdvBruna.jpg'); background-size: cover; background-position: center center; min-height: 200px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                <p>Bruna Michele Wozne Godoy</p>
                <p>OAB/PR 86.293</p>
                <p><a href="mailto:bruna.michele@braziliobacellar.com.br" class="link-default">bruna.michele@braziliobacellar.com.br</a></p>
                <p>Formação Superior:<br>
                    - UEPG (2017)<br>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-4 eq-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= RAIZSITE ?>/imagens/AdvErik.jpg'); background-size: cover; background-position: center center; min-height: 200px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                <p>Erik Koubik Júnior</p>
                <p>OAB/PR 64.313</p>
                <p><a href="mailto:erik@braziliobacellar.com.br" class="link-default">erik@braziliobacellar.com.br</a></p>
                <p>Formação Superior:<br>
                    - Faculdades Opet (2012)<br>
                    - Pós-Graduado em Direito Empresarial <br>
                    UNICURITIBA (2013)<br>
                    - Pós-Graduando em Gestão Empresarial<br>
                    UNICURITIBA (2017)<br>
                    - Membro da Comissão de Estudos de <br>
                    Recuperação Judicial e Falência da OAB/PR<br>
                </p>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-5 eq-1">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= RAIZSITE ?>/imagens/AdvJocelaine.jpg'); background-size: cover; background-position: center center; min-height: 200px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                <p>Jocelaine Weber da Silva</p>
                <p>OAB/PR 64.179</p>
                <p><a href="mailto:jocelaine@braziliobacellar.com.br" class="link-default">jocelaine@braziliobacellar.com.br</a></p>
                <p>Formação Superior:<br>
                    - Faculdades Opet (2012)<br>
                    - Pós-Graduação: Direito<br>
                    Contemporâneo - Fempar (2013)<br>
                    - Idiomas: Inglês.<br>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-6 eq-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= RAIZSITE ?>/imagens/AdvJuciara.jpg'); background-size: cover; background-position: center center; min-height: 200px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                <p>Juciara Santoro Pereira</p>
                <p>OAB/PR 42.079</p>
                <p><a href="mailto:juciara@braziliobacellar.com.br" class="link-default">juciara@braziliobacellar.com.br</a></p>
                <p>Formação Superior:<br>
                    - Universidade Tuiuti do Paraná (2004)<br>
                    - Especialização em Direito Material e <br>
                    Processual do Trabalho: <br>
                    Uniderp Anhanguera Educacional (2008 )<br>
                    - Idiomas: Inglês.<br>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-7 eq-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= RAIZSITE ?>/imagens/AdvMarilise.jpg'); background-size: cover; background-position: center center; min-height: 200px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                <p>Marilise Teixeira</p>
                <p>OAB/PR 24.644</p>
                <p><a href="mailto:marilise@braziliobacellar.com.br" class="link-default">marilise@braziliobacellar.com.br</a></p>
                <p>Formação Superior:<br>
                    - PUCPR (1996)<br>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-8 eq-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= RAIZSITE ?>/imagens/AdvMarcella.jpg'); background-size: cover; background-position: top center; min-height: 200px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                <p>Marcella V. Bacellar Koubik</p>
                <p>OAB/PR 64.191</p>
                <p><a href="mailto:marcella@braziliobacellar.com.br" class="link-default">marcella@braziliobacellar.com.br</a></p>
                <p>Formação Superior:<br>
                    - Universidade Tuiuti do Paraná (2012)<br>
                    - Especializanda em Direito <br>
                    Aplicado pela EMAP  (2017)<br>
                    - Idiomas: Inglês.<br>
                </p>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-9 eq-1">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= RAIZSITE ?>/imagens/AdvLuizMarcelo.jpg'); background-size: cover; background-position: center center; min-height: 200px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                <p>Luiz Marcelo de Souza Rocha</p>
                <p>OAB/PR 34.549</p>
                <p><a href="mailto:luiz.marcelo@braziliobacellar.com.br" class="link-default">luiz.marcelo@braziliobacellar.com.br</a></p>
                <p>Formação Superior:<br>
                    - UFPR (2001)<br>
                    - Especializando em Direito Tributário <br>
                    pelo  IBET<br>
                    - Membro da Comissão de Estudos <br>
                    de Recuperação Judicial e Falência <br>
                    da OAB/PR<br>
                    - Idiomas: Inglês.<br>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-10 eq-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= RAIZSITE ?>/imagens/AdvLuizRenato.jpg'); background-size: cover; background-position: center center; min-height: 200px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                <p>Luiz Renato Barreto Gomes</p>
                <p>OAB/PR 66.131</p>
                <p><a href="mailto:luiz.renato@braziliobacellar.com.br" class="link-default">luiz.renato@braziliobacellar.com.br</a></p>
                <p>Formação Superior:<br>
                    - UNICURITIBA (2012)<br>
                    - Pós-Graduando em Direito <br>
                    Processual Civil pelo Instituto de <br>
                    Direito Romeu Felipe Bacellar (2013)<br>
                    - Membro da Comissão de Estudos <br>
                    de Recuperação Judicial e <br>
                    Falência da OAB/PR<br>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 bloco order-11 eq-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero imagem" style="background: url('<?= RAIZSITE ?>/imagens/AdvYaskarah.jpg'); background-size: cover; background-position: center center; min-height: 200px;">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marrom-fonte descritivo">
                <p>Yáskarah Maria S. Maziero</p>
                <p>OAB/PR 64.323</p>
                <p><a href="mailto:yaskara@braziliobacellar.com.br" class="link-default">yaskara@braziliobacellar.com.br</a></p>
                <p>Formação Superior:<br>
                    - UNICURITIBA (2012)<br>
                    - Pós-Graduanda em Direito Civil e <br>
                    Empresarial pela Academia<br>
                    Brasileira de Direito <br>
                    Constitucional (2013)<br>
                </p>
            </div>
        </div>
        */
        ?>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-branco dourado-fonte equipe">
    <div class="container conteudo">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginT9p">
            <div class="linha-pequena"></div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center MarginT12p le-2">
            <h3 class="Uppercase dourado-fonte margin-zero">EQUIPE</h3>
        </div>
        
        <?php
            foreach($equipe as $eqp){
                if($eqp->tipo == 3){
                ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 descritivo border-equipe bc-2">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                        <p><?= $eqp->nome ?></p>
                        <p><a href="mailto:<?= $eqp->email ?>" class="link-default"><?= $eqp->email ?></a></p>
                    </div>
                </div>
                <?php
            }
            }
        ?>
        
        <?php /* 
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 descritivo border-equipe bc-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <p>Pedro Vitor Viana Fragalli</p>
                <p><a href="mailto:pedro@braziliobacellar.com.br" class="link-default">pedro@braziliobacellar.com.br</a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 descritivo border-equipe-meio bc-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <p>Daniel V. Portugal Bacellar</p>
                <p><a href="mailto:daniel@braziliobacellar.com.br" class="link-default">daniel@braziliobacellar.com.br</a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 descritivo border-equipe bc-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <p>Gabriel H. Borja Schalsina</p>
                <p><a href="mailto:gabriel@braziliobacellar.com.br" class="link-default">gabriel@braziliobacellar.com.br</a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 descritivo center-equipe bc-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <p>Bruno Nascimento da Silva</p>
                <p><a href="mailto:bruno@braziliobacellar.com.br" class="link-default">bruno@braziliobacellar.com.br</a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 descritivo border-equipe bc-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <p>Carolina Massapust</p>
                <p><a href="mailto:carolina.m@braziliobacellar.com.br" class="link-default">carolina.m@braziliobacellar.com.br</a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 descritivo border-equipe-meio bc-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <p>Laura  V. Leite Pissetti</p>
                <p><a href="mailto:laura@braziliobacellar.com.br" class="link-default">laura@braziliobacellar.com.br</a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 descritivo border-equipe bc-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <p>Geórgia D. Martinelli</p>
                <p><a href="mailto:georgia@braziliobacellar.com.br" class="link-default">georgia@braziliobacellar.com.br</a></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 descritivo center-equipe bc-3">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <p>Isabela P. da Silva Constante</p>
                <p><a href="mailto:bruno@braziliobacellar.com.br" class="link-default">bruno@braziliobacellar.com.br</a></p>
            </div>
        </div>
            
        */ ?>
    </div>
</div>

<script type="text/javascript">
    $('.eq-1').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInUp',
        offset: 100
    });
    $('.eq-2').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInUp',
        offset: 200
    });
    $('.eq-3').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInUp',
        offset: 300
    });
    $('.eq-4').addClass("esconder").viewportChecker({
        classToAdd: 'mostrar animated fadeInUp',
        offset: 400
    });
</script>