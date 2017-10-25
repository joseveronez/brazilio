<?php
    ScriptLoader::LoadPLUGINSCSS('inputfile/css/component.css');
    ScriptLoader::LoadPLUGINSJS('inputfile/js/custom-file-input.js');
?>
<style type="text/css">
    .parallax-banner { background-image: url("<?= RAIZSITE ?>/imagens/banner-trabalhe-conosco.jpg"); background-position: top right; background-attachment: fixed; background-repeat: no-repeat; background-size: cover }
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="parallax-banner">
        <div class="container">
            <div class="text-center titulo">
                <h3 class="Uppercase size35 dourado-fonte Light">TRABALHE CONOSCO</h3>
            </div>
            <div class="breadcrumb hidden-xs">
                <p class="branco-fonte margin-zero">VOCÊ ESTÁ EM <a href="<?= RAIZSITE ?>" class="link-default">HOME</a> / <span class="dourado-fonte">TRABALHE CONOSCO</span></p>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-dourado Relative contato">
    <div id="waypointMenu" style="position: absolute; left: 0; height: 101px; width: 50px; top: -101px"></div>
    <div class="linha"></div>
    <div class="container conteudo" style="padding-bottom: 80px">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center titulo bc-2">
            <h3 class="branco-fonte margin-zero icone">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </h3>
            <h3 class="branco-fonte margin-zero chamada">TRABALHE CONOSCO</h3>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 dados">
            <div class="conteudo">
                <p class="branco-fonte chamada margin-zero le-2">
                    Quer fazer parte da<br> nossa equipe?
                </p>
                <br>
                <p class="branco-fonte chamada margin-zero le-2">
                    Inicie o processo seletivo enviando seus dados e currículo.
                </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="<?= RAIZSITE ?>/formulario/?trabalhe" class="form-horizontal Roboto Regular formulario-trabalhe-conosco" method="post" enctype="multipart/form-data" id="formulario">
                <input type="text" class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="nome" placeholder="NOME" required><br>
                <input type="email" class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="email" placeholder="E-MAIL" onkeyup="this.value=this.value.replace(/[' '^A-ZçÇáÁàÀéèÉÈíìÍÌóòÓÒúùÚÙñÑ~&,#*+/=$%!;]/g,'')" required><br>
                <input type="text" class="form-control contato-footer branco-alternativo-fonte bg-dourado telefone" name="telefone" placeholder="TELEFONE" required><br>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                    <input type="file" name="curriculo" id="curriculo" class="inputfile inputfile-1" accept=".pdf" />
                    <label for="curriculo"><span>escolher arquivo</span></label>

                    <span class="branco-alternativo-fonte chamada-botao">SELECIONAR CURRÍCULO *.pdf*</span>
                </div>
                <textarea class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="mensagem" rows="8" cols="3" placeholder="MENSAGEM" required></textarea><br>
                <button type="submit" class="btn btn-formulario size13 pull-right">ENVIAR</button>
            </form>
        </div>
    </div>
</div>