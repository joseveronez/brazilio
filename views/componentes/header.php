<?php
    ScriptLoader::LoadCSS('header');
?>
<nav class="navbar navbar-fixed-top menu-transparente" role="navigation">
    <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs navbar-superior">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="list-inline">
                    <li><a href="<?= RAIZSITE ?>/trabalhe-conosco" class="link-default dourado-fonte">TRABALHE CONOSCO</a></li>
                    <li><div class="separador"></div></li>
                    <li><a href="<?= RAIZSITE ?>/links-uteis" class="link-default dourado-fonte">LINKS ÚTEIS</a></li>
                    <li><div class="separador"></div></li>
                    <li><a href="<?= RAIZSITE ?>/consulta" class="link-default dourado-fonte">CONSULTA PROCESSUAL</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="navbar-header">
        <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="<?= RAIZSITE ?>"><img src="<?= RAIZSITE ?>/imagens/logobrazilio.png" class="img-responsive"></a>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar bg-branco"></span>
            <span class="icon-bar bg-branco"></span>
            <span class="icon-bar bg-branco"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <div class="container">
            <a class="navbar-brand hidden-xs" href="<?= RAIZSITE ?>"><img src="<?= RAIZSITE ?>/imagens/logobrazilio.png" class="img-responsive"></a>
            <ul class="nav navbar-nav navbar-right margin-ul padding-zero">
                <li><a href="<?= RAIZSITE ?>/sobre" class="link-default branco-fonte">A EMPRESA</a></li>
                <li><a href="<?= RAIZSITE ?>/servicos" class="link-default branco-fonte">ÁREAS DE ATUAÇÃO</a></li>
                <li><a href="<?= RAIZSITE ?>/equipe" class="link-default branco-fonte">EQUIPE</a></li>
                <li><a href="<?= RAIZSITE ?>/contato" class="link-default branco-fonte">CONTATO</a></li>
            </ul>
        </div>
    </div>
</nav>