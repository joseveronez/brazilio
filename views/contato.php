
<?php
    ScriptLoader::LoadCSS('contato');
?>
<style type="text/css">
    .parallax-contato { background-image: url("<?= RAIZSITE ?>/imagens/mapa.jpg"); background-position: center center; background-repeat: no-repeat; background-size: cover;}
    .parallax-contato-topo { background-image: url("<?= RAIZSITE ?>/imagens/ban2.jpg"); background-position: center center; background-attachment: fixed; background-repeat: no-repeat; background-size: cover;}
</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero" id="azul" style="margin-bottom: -10px">
    <div class="item vh30">
        <div class="vh30 parallax-contato-topo" style="min-height: 481px;">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center MarginT15p MarginB10p">
                    <h4 class="Uppercase size35 dourado-fonte Light">CONTATO</h4>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB1">
                    <h6 class="branco-fonte">VOCÊ ESTÁ EM HOME / <span class="dourado-fonte">CONTATO</span></h6>
                </div>
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
                OAB/PR 997 • CNPJ 04.510.577/0001-02</p>

                <p class="branco-fonte margin-zero espaco le-2">
                Tel.: <a href="tel:3352 8363" class="link-default branco-fonte"><span class="size11">+55 41</span> 3352.8363</a> <br>
                Fax. <a href="tel:3352 0167" class="link-default branco-fonte"><span class="size11">+55 41</span> 3352.0167</a> </p>

                <div class="espaco le-2">
                    <p class="branco-fonte margin-zero">ESCRITÓRIO</p>
                    <p class="branco-fonte endereco margin-zero">
                        Rua Marechal Hermes, 272 | Centro Cívico <br>
                        Curitiba | Paraná | Brasil | CEP 80.530-230</p>
                </div>
                <div class="espaco le-2">
                    <p class="branco-fonte margin-zero">ESTACIONAMENTO</p>
                    <p class="branco-fonte endereco margin-zero">Travessa José do Patrocinio, 48 | Alto da Glória<br>Curitiba | Paraná | Brasil | CEP 80.030-190</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <form action="" class="form-horizontal Roboto Regular" id="formulario">
                <input type="text" class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="nome" placeholder="NOME" required><br>
                <input type="email" class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="email" placeholder="E-MAIL" required><br>
                <input type="text" class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="telefone" placeholder="TELEFONE" required><br>
                <textarea class="form-control contato-footer branco-alternativo-fonte bg-dourado" name="mensagem" rows="4" cols="3" placeholder="MENSAGEM"></textarea><br>
                <button type="submit" class="btn btn-formulario size13 pull-right">ENVIAR</button>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bloco-mapa">
    <div class="google-maps">
        <iframe id="iframeMaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.647454090421!2d-49.267671685400146!3d-25.4166089837946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce41858839247%3A0x490902c1b4f8d1fa!2sBrazilio+Bacellar+Neto+e+Advogados!5e0!3m2!1spt-BR!2sbr!4v1508352060439"></iframe>
    </div>
</div>