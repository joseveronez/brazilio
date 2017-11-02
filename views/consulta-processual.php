<style type="text/css">
    .parallax-banner { background-image: url("<?= RAIZSITE ?>/imagens/banner-trabalhe-conosco.jpg"); background-position: top right; background-attachment: fixed; background-repeat: no-repeat; background-size: cover }
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="parallax-banner">
        <div class="container">
            <div class="text-center titulo">
                <h3 class="Uppercase size35 dourado-fonte Light">CONSULTA PROCESSUAL</h3>
            </div>
            <div class="breadcrumb hidden-xs">
                <p class="branco-fonte margin-zero">VOCÊ ESTÁ EM <a href="<?= RAIZSITE ?>" class="link-default">HOME</a> / <span class="dourado-fonte">CONSULTA PROCESSUAL</span></p>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bg-dourado Relative contato">
    <div id="waypointMenu" style="position: absolute; left: 0; height: 101px; width: 50px; top: -101px"></div>
    <div class="linha"></div>
    <div class="container conteudo" style="padding-top: 80px; padding-bottom: 80px">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 dados">
            <div class="conteudo">
                <p class="branco-fonte chamada margin-zero le-2">
                    Esta área é restrita para clientes da Brazilio Bacellar Neto e Advogados.<br>
                    Aqui é possível consultar os andamentos processuais e as imagens digitalizadas dos processos sob nossa responsabilidade.<br>Para visualização das imagens é necessário a prévia instalação do Adobe Acrobat Reader.
                </p><br>

                <p class="branco-fonte chamada margin-zero le-2"><strong><a href="http://braziliobacellar.no-ip.org/cpjw.cgi?pesq" class="preto-fonte" target="_blank">Se você é cliente e já possui um login e senha clique aqui</a></strong></p><br>

                <p class="branco-fonte chamada margin-zero le-2">
                    Se você não possui login, envie-nos um e-mail solicitando acesso
                </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="<?= RAIZSITE ?>/formulario/?trabalhe" class="form-horizontal Roboto Regular formulario-trabalhe-conosco" method="post" enctype="multipart/form-data" id="formulario">
                <input type="text" class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="nome" placeholder="NOME" required><br>
                <input type="email" class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="email" placeholder="E-MAIL" onkeyup="this.value=this.value.replace(/[' '^A-ZçÇáÁàÀéèÉÈíìÍÌóòÓÒúùÚÙñÑ~&,#*+/=$%!;]/g,'')" required><br>
                <input type="text" class="form-control contato-footer branco-alternativo-fonte bg-dourado telefone" name="telefone" placeholder="TELEFONE" required><br>
                <textarea class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="mensagem" rows="8" cols="3" placeholder="MENSAGEM" required></textarea><br>
                <button type="submit" class="btn btn-formulario size13 pull-right">ENVIAR</button>
            </form>
        </div>
    </div>
</div>