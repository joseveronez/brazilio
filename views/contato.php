<?php
    $config = Configuracoes::sql("SELECT * FROM configuracoes", SimpleOrm::FETCH_ONE);
?>
<style type="text/css">
    .parallax-banner { background-image: url("<?= RAIZSITE ?>/imagens/banner-contato.jpg"); background-position: top right; background-attachment: fixed; background-repeat: no-repeat; background-size: cover }
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="parallax-banner">
        <div class="container">
            <div class="text-center titulo">
                <h3 class="Uppercase size35 dourado-fonte Light">CONTATO</h3>
            </div>
            <div class="breadcrumb hidden-xs">
                <p class="branco-fonte margin-zero">VOCÊ ESTÁ EM <a href="<?= RAIZSITE ?>" class="link-default">HOME</a> / <span class="dourado-fonte">CONTATO</span></p>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-dourado Relative contato" id="waipoint">
    <div id="waypointMenu" style="position: absolute; left: 0; height: 101px; width: 50px; top: -101px"></div>
    <div class="linha"></div>
    <div class="container conteudo alternativo" style="padding-bottom: 80px">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center titulo bc-2">
            <h3 class="branco-fonte margin-zero icone">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </h3>
            <h3 class="branco-fonte margin-zero chamada">CONTATO</h3>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 dados">
            <div class="conteudo">
                <p class="branco-fonte chamada margin-zero le-2">
                Entre em contato por telefone ou pelo formulário ao lado:</p>

                <p class="Bold cnpj Uppercase margin-zero espaco le-2">
                Brazilio Bacellar, Shirai Advogados <br>
                <?= $config->codigo ?> • CNPJ <?= $config->cnpj ?></p>

                <p class="branco-fonte margin-zero espaco le-2">
                Tel.: <a href="tel:<?= $config->telefone ?>" class="link-default contato-telefone"><span class="size11">+55 41</span> <?= $config->telefone ?></a> <br>
                Fax. <a href="tel:<?= $config->fax ?>" class="link-default contato-telefone"><span class="size11">+55 41</span> <?= $config->fax ?></a> </p>

                <div class="espaco le-2">
                    <p class="branco-fonte margin-zero">ESCRITÓRIO</p>
                    <div class="branco-fonte endereco margin-zero"><?= $config->endereco_escritorio ?></div>
                </div>
                <div class="espaco le-2">
                    <p class="branco-fonte margin-zero">ESTACIONAMENTO</p>
                    <div class="branco-fonte endereco margin-zero"><?= $config->endereco_estacionamento ?></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="<?= RAIZSITE ?>/formulario/?contato" class="form-horizontal Roboto Regular" method="post" id="formulario">
                <input type="text" class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="nome" placeholder="NOME" required><br>
                <input type="email" class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="email" placeholder="E-MAIL" onkeyup="this.value=this.value.replace(/[' '^A-ZçÇáÁàÀéèÉÈíìÍÌóòÓÒúùÚÙñÑ~&,#*+/=$%!;]/g,'')" required><br>
                <input type="text" class="form-control contato-footer branco-alternativo-fonte bg-dourado telefone" name="telefone" placeholder="TELEFONE" required><br>
                <textarea class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="mensagem" rows="8" cols="3" placeholder="MENSAGEM"></textarea><br>
                <button type="submit" class="btn btn-formulario size13 pull-right">ENVIAR</button>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bloco-mapa">
    <div class="google-maps">
        <iframe id="iframeMaps" src="<?= $config->mapa ?>"></iframe>
    </div>
</div>